<?php
session_start();

/*
Plugin Name: Fetch API Data
Author: Mehreen Imran 
Description:  Custom plugin to fetch API Data
Version: 1.2.0
*/

add_action('init','custom_fetch_data_post_type');
add_action('wp_enqueue_scripts','enqueue_style_sheet');
add_shortcode("api_data", "api_calling_callback");
register_activation_hook(__FILE__, "custom_table");
add_shortcode('display_data','display_latest_data');
add_shortcode("my_chart", 'chart');


function custom_fetch_data_post_type(){
    $labels = array(
		'name'                  => _x( 'coins', 'Post type general name', 'textdomain' ),
		'singular_name'         => _x( 'coin', 'Post type singular name', 'textdomain' ),
		'menu_name'             => _x( 'coins', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar'        => _x( 'coin', 'Add New on Toolbar', 'textdomain' ),
		'add_new'               => __( 'Add New coin', 'textdomain' ),
		'add_new_item'          => __( 'Add New coin', 'textdomain' ),
		'new_item'              => __( 'New coin', 'textdomain' ),
		'edit_item'             => __( 'Edit coin', 'textdomain' ),
		'view_item'             => __( 'View coin', 'textdomain' ),
		'all_items'             => __( 'All coins', 'textdomain' ),
		'search_items'          => __( 'Search coins', 'textdomain' ),
		'parent_item_colon'     => __( 'Parent coins:', 'textdomain' ),
		'not_found'             => __( 'No coins found.', 'textdomain' ),
		'not_found_in_trash'    => __( 'No coins found in Trash.', 'textdomain' ),
		'featured_image'        => _x( 'coin Feature Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'set_featured_image'    => _x( 'Set Feature image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'remove_featured_image' => _x( 'Remove Feature image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'use_featured_image'    => _x( '
        Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'archives'              => _x( 'coin archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
		'insert_into_item'      => _x( 'Insert into coin', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this coin', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
		'filter_items_list'     => _x( 'Filter coins list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
		'items_list_navigation' => _x( 'coins list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
		'items_list'            => _x( 'coins list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
	);

	$args = array(
		'labels'             => $labels,
        // 'descriptions' => ('Description. ','plugin-text-domain'),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'coins' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
	);
    register_post_type( "api_data", $args );
}

function enqueue_style_sheet(){
    wp_enqueue_style('my-style2', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css', array(), '1.0', 'all');
    wp_enqueue_script('my-script2', "https://cdn.jsdelivr.net/npm/chart.js", array(), '1.1', 'all');


}

//
function api_calling_callback() {
    require_once( ABSPATH . '/wp-admin/includes\plugin.php');
    require_once( ABSPATH . '/wp-admin/includes\media.php');
    require_once( ABSPATH . '/wp-admin/includes\file.php');
    require_once( ABSPATH . '/wp-admin/includes\image.php');

    $offset = get_option('api_offset', 20);
    $urls = 'https://api.coinranking.com/v2/coins?limit=20&offset=' . $offset;
    $args = array('method' => 'GET');
    $html = "";
    global $wpdb;

    $table_name = $wpdb->prefix . "wp_posts";

    $response = wp_remote_get($urls, $args);

    if (is_wp_error($response)) {
        echo "Something went wrong: " . esc_html($response->get_error_message());
    } else {
        $results = json_decode(wp_remote_retrieve_body($response), true);

        foreach ($results['data']['coins'] as $result) {
            update_option('api_offset', $offset + 20);

            $existing_record = $wpdb->get_row(
                $wpdb->prepare(
                    "SELECT * FROM $table_name WHERE `post_title` = %s",
                    $result['name']
                )
            );

            if ($existing_record == null) {
                $my_post = array(
                    'post_title'    => $result['name'],
                    'post_content'  => $result['uuid'],
                    'post_status'   => 'publish',
                    'post_type' => 'api_data'
                );

                // Insert the post into the database
                $postId = wp_insert_post($my_post);

                if (is_wp_error($postId)) {
                    echo "Error creating post: " . esc_html($postId->get_error_message());
                } else {
                    // Download and save the image to the media library
                    $image_url = $result['iconUrl'];
                    $image_name = basename($image_url);

                    // Sideloading the image
                    $attachment_id = media_handle_sideload(array('name' => $image_name, 'tmp_name' => download_url($image_url)), $postId);

                    if (!is_wp_error($attachment_id)) {
                        // Set the attachment as the featured image
                        set_post_thumbnail($postId, $attachment_id);
                    } else {
                        echo "Error sideloading image: " . esc_html($attachment_id->get_error_message());
                    }
                }
            }
        }
    }

    return get_option('api_offset', 1);
}

function allow_svg_upload($existing_mimes) {
    $existing_mimes['svg'] = 'image/svg+xml';
    return $existing_mimes;
}

add_filter('upload_mimes', 'allow_svg_upload');

register_activation_hook(__FILE__, 'my_activation');

function my_activation() {
    if (! wp_next_scheduled ( 'my_hourly_event' )) {
    wp_schedule_event(time(), 'hourly', 'my_hourly_event');
    }
}

add_action('my_hourly_event', 'do_this_hourly');

function do_this_hourly() {
    require_once( ABSPATH . '/wp-admin/includes\plugin.php');
    require_once( ABSPATH . '/wp-admin/includes\media.php');
    require_once( ABSPATH . '/wp-admin/includes\file.php');
    require_once( ABSPATH . '/wp-admin/includes\image.php');

    $offset = get_option('api_offset', 20);
    $urls = 'https://api.coinranking.com/v2/coins?limit=20&offset=' . $offset;
    $args = array('method' => 'GET');
    $html = "";
    global $wpdb;

    $table_name = $wpdb->prefix . "wp_posts";

    $response = wp_remote_get($urls, $args);

    if (is_wp_error($response)) {
        echo "Something went wrong: " . esc_html($response->get_error_message());
    } else {
        $results = json_decode(wp_remote_retrieve_body($response), true);

        foreach ($results['data']['coins'] as $result) {
            update_option('api_offset', $offset + 20);

            $existing_record = $wpdb->get_row(
                $wpdb->prepare(
                    "SELECT * FROM $table_name WHERE `post_title` = %s",
                    $result['name']
                )
            );

            if ($existing_record == null) {
                $my_post = array(
                    'post_title'    => $result['name'],
                    'post_content'  => $result['uuid'],
                    'post_status'   => 'publish',
                    'post_type' => 'api_data'
                );

                // Insert the post into the database
                $postId = wp_insert_post($my_post);

                if (is_wp_error($postId)) {
                    echo "Error creating post: " . esc_html($postId->get_error_message());
                } else {
                    // Download and save the image to the media library
                    $image_url = $result['iconUrl'];
                    $image_name = basename($image_url);

                    // Sideloading the image
                    $attachment_id = media_handle_sideload(array('name' => $image_name, 'tmp_name' => download_url($image_url)), $postId);

                    if (!is_wp_error($attachment_id)) {
                        // Set the attachment as the featured image
                        set_post_thumbnail($postId, $attachment_id);
                    } else {
                        echo "Error sideloading image: " . esc_html($attachment_id->get_error_message());
                    }
                }
            }
        }
    }
}

add_shortcode('display_latest_coins', 'display_latest_coins_shortcode');

function display_latest_coins_shortcode() {
    ob_start(); // Start output buffering

    $args = array(
        'post_type'      => 'api_data',
        'posts_per_page' => 4,
        'orderby'        => 'date',
        'order'          => 'DESC',
    );

    $custom_query = new WP_Query($args);

    if ($custom_query->have_posts()) {
        while ($custom_query->have_posts()) {
            $custom_query->the_post();

            include dirname(__FILE__) . '/displayData.php';
        }
        wp_reset_postdata();
    } else {
        echo 'No posts found';
    }

    return ob_get_clean(); // Return the buffered output
}

function shortcode_count_post(){
    $posts = get_posts('post_type=api_data&suppress_filters=0&posts_per_page=-1');
    $count = count($posts); 
   return $count;
}

add_shortcode("count_data", 'shortcode_count_post');

function shortcode_count_post_views() {
    $theposts = get_posts(array(
        'post_type'      => 'api_data',
        'posts_per_page' => -1
    ));

    $totalViews = 0;

    foreach ($theposts as $post) {
        // Assuming you have a custom field named 'post_views_count'
        $postViews = get_post_meta($post->ID, 'url', true);
        
        // If the custom field is not empty, add the views to the total
        if (!empty($postViews)) {
            $totalViews = (int)($totalViews) + (int)($postViews);
        }
    }

    return $totalViews;
}
add_shortcode("count_views", "shortcode_count_post_views");


// functions.php or your custom plugin file

function enqueue_chart_scripts() {
    // Enqueue Chart.js
    wp_enqueue_script('chart-js', 'https://cdn.jsdelivr.net/npm/chart.js');

    // Enqueue your script
    wp_enqueue_script('chart-script', get_template_directory_uri() . '/fetchData.js', array('jquery'), null, true);

    // Pass the WordPress AJAX URL to the script
    wp_localize_script('chart-script', 'ajax_object', array('ajax_url' => admin_url('admin-ajax.php')));
}
add_action('wp_enqueue_scripts', 'enqueue_chart_scripts');

// AJAX handler function
function get_monthly_data() {
    global $wpdb;

    $table_name = $wpdb->prefix . 'posts'; // Replace 'your_table' with your actual table name

    $data = $wpdb->get_results("SELECT MONTH(date) as month, SUM(value) as value FROM $table_name GROUP BY MONTH(date)", ARRAY_A);

    wp_send_json($data);
}
add_action('wp_ajax_get_monthly_data', 'get_monthly_data');
add_action('wp_ajax_nopriv_get_monthly_data', 'get_monthly_data'); // For non-logged in users


?>
