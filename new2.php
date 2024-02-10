<style>
    #table_1>tbody>tr>td.column-date,
    #table_1>tbody>tr.row-detail ul li.column-date,
    #table_1>thead>tr>th.column-date,
    #table_1>.dtfh-floatingparent>th.column-date,
    #table_1>tfoot>tr>th.column-date {
        background-color: #0B0B0B !important;
    }

    #table_1>tbody>tr>td.column-date {
        text-align: left !important;
    }

    #table_1>thead>tr>th.column-date {
        text-align: left !important;
    }

    #table_1>tbody>tr>td.column-entry-price:not(:empty):before,

    #table_1>tbody>tr.row-detail ul li.column-entry-price span.columnValue:before {
        content: '$'
    }

    #table_1>tbody>tr>td.column-entry-price {
        text-align: left !important;
    }

    #table_1>tbody>tr>td.column-exit-price:not(:empty):before,

    #table_1>tbody>tr.row-detail ul li.column-exit-price span.columnValue:before {
        content: '$'
    }

    #table_1>tbody>tr>td.column-exit-price {
        text-align: left !important;
    }

    table.wpDataTable {
        table-layout: fixed !important;
    }

    table.wpDataTable td.numdata {
        text-align: right !important;
    }
</style>
<style>
    #table_1_wrapper.wpDataTablesWrapper table.wpDataTable tbody td.cell-green {
        color: #7edc6c !important;
        font-weight: bold;
        font-size: 16px;
    }

    #table_1_wrapper.wpDataTablesWrapper table.wpDataTable tbody td.cell-red {
        color: red !important;
        font-weight: bold;
        font-size: 16px;
    }

    table#table_1 thead tr th:nth-child(1) {
        background: #181818 !important;
        border-radius: 25px 0px 0px 24px;
    }

    table#table_1 thead tr th {
        border: 0px !important;
        background: #181818 !important;
    }

    table#table_1 thead tr th:last-child {
        border-radius: 0px 25px 25px 0px;
    }

    tr#table_1_row_2 td {
        border-top: 0px !important;
    }

    table#table_1 .wdt-skin-dark .wpDataTablesWrapper table.wpDataTable tfoot td input.text_filter {
        background: #02c17329 !important;
        font-family: 'Poppins';
        font-size: 14px;
        color: white;
        font-weight: 600;
    }

    .wpdt-c .wpDataTablesWrapper table.wpDataTable.wpDataTableID-1 tr.odd td.sorting_1 {
        background-color: black !important;
        color: white !important;
        font-family: 'Poppins';
        font-size: 15px !important;
        border-width: 0px 0px 1px 0px !important;
        padding: 17px 20px 17px 20px;
        text-align: start !important;
    }

    table.wpDataTable td.numdata {
        text-align: left !important;
    }
</style>
<style>
    /* table font color */
    .wpdt-c.wpDataTablesWrapper table#wpdtSimpleTable-1 thead th,
    .wpdt-c.wpDataTablesWrapper table#wpdtSimpleTable-1 tbody td,
    .wpdt-c .wpDataTablesWrapper table.wpDataTable.wpDataTableID-1 thead th,
    .wpdt-c .wpDataTablesWrapper table.wpDataTable.wpDataTableID-1 tbody td,
    .wpdt-c .wpDataTablesWrapper table.wpDataTable.wpDataTableID-1 tfoot td {
        color: #fff !important;
    }

    /* th background color */
    .wpdt-c.wpDataTablesWrapper table.wpdtSimpleTable.bt[data-has-header='1'] td.wpdt-header-classes,
    .wpdt-c.wpDataTablesWrapper table#wpdtSimpleTable-1 thead th,
    .wpdt-c .wpDataTablesWrapper table.wpDataTable.wpDataTableID-1>thead>tr>th,
    .wpdt-c .wpDataTablesWrapper table.wpDataTable.wpDataTableID-1 thead th,
    .wpdt-c .wpDataTablesWrapper table.wpDataTable.wpDataTableID-1 thead th.sorting {
        background-color: #181818 !important;
        background-image: none !important;
    }

    /* th border color */
    .wpdt-c.wpDataTablesWrapper table#wpdtSimpleTable-1 thead th,
    .wpdt-c .wpDataTablesWrapper table.wpDataTable.wpDataTableID-1 thead th,
    .wpdt-c .wpDataTablesWrapper table.wpDataTable.wpDataTableID-1 thead th.sorting {
        border: solid #FFFFFF00 !important;
        border-width: initial;
    }

    /* th font color */
    .wpdt-c.wpDataTablesWrapper table.wpdtSimpleTable.bt[data-has-header='1'] td.wpdt-header-classes,
    .wpdt-c.wpDataTablesWrapper table#wpdtSimpleTable-1 thead th,
    .wpdt-c .wpDataTablesWrapper table.wpDataTable.wpDataTableID-1 thead th {
        color: #fff !important;
    }

    .wpdt-c .wpDataTablesWrapper table.wpDataTable.wpDataTableID-1 thead th.sorting:after,
    .wpdt-c .wpDataTablesWrapper table.wpDataTable.wpDataTableID-1 thead th.sorting_asc:after {
        border-bottom-color: #fff !important;
    }

    .wpdt-c .wpDataTablesWrapper table.wpDataTable.wpDataTableID-1 thead th.sorting_desc:after {
        border-top-color: #fff !important;
    }

    /* table outer border color */
    .wpdt-c.wpDataTablesWrapper table#wpdtSimpleTable-1 tr:last-child td,
    .wpdt-c .wpDataTablesWrapper table.wpDataTable.wpDataTableID-1 tfoot tr td {
        border-bottom-color: #000000 !important;
    }

    .wpdt-c.wpDataTablesWrapper table#wpdtSimpleTable-1 tr td:first-child,
    .wpdt-c .wpDataTablesWrapper table.wpDataTable.wpDataTableID-1 tr td:first-child {
        border-left-color: #000000 !important;
    }

    .wpdt-c.wpDataTablesWrapper table#wpdtSimpleTable-1 tr td:last-child,
    .wpdt-c .wpDataTablesWrapper table.wpDataTable.wpDataTableID-1 tr td:last-child {
        border-right-color: #000000 !important;
    }

    .wpdt-c .wpDataTablesWrapper table.wpDataTable.wpDataTableID-1 tr th {
        border-top-color: #000000 !important;
    }


    /* odd rows background color */
    .wpdt-c.wpDataTablesWrapper table#wpdtSimpleTable-1 tr.odd td,
    .wpdt-c .wpDataTablesWrapper table.wpDataTable.wpDataTableID-1 tr.odd td {
        background-color: #000000 !important;
    }

    /* even rows background color */
    .wpdt-c.wpDataTablesWrapper table#wpdtSimpleTable-1 tr.even td,
    .wpdt-c .wpDataTablesWrapper table.wpDataTable.wpDataTableID-1 tr.even td,
    .wpdt-c .wpDataTablesWrapper table.has-columns-hidden.wpDataTableID-1 tr.row-detail>td {
        background-color: #000000 !important;
    }

    /* odd rows active background color */
    .wpdt-c .wpDataTablesWrapper table.wpDataTable.wpDataTableID-1 tr.odd td.sorting_1 {
        background-color: #FFFFFF !important;
    }

    /* even rows active background color */
    .wpdt-c .wpDataTablesWrapper table.wpDataTable.wpDataTableID-1 tr.even td.sorting_1 {
        background-color: #fff !important;
    }

    /* table font size */
    .wpdt-c.wpDataTablesWrapper table#wpdtSimpleTable-1,
    .wpdt-c .wpDataTablesWrapper table.wpDataTable.wpDataTableID-1 {
        font-size: 15px !important;
    }
</style>

<section data-marvy_enable_drop_animation="false" data-marvy_enable_fancy_rotate="false" data-marvy_enable_flying_object="false" data-marvy_enable_ripples_animation="false" data-marvy_enable_waves_animation="false" data-marvy_enable_rings_animation="false" data-marvy_enable_topology_animation="false" data-marvy_enable_gradient_animation="false" data-marvy_enable_snow_animation="false" data-marvy_enable_firework_animation="false" data-marvy_enable_cloud_animation="false" class="ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-01702b5 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="01702b5" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;none&quot;,&quot;animation_delay&quot;:1000,&quot;background_background&quot;:&quot;classic&quot;,&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-540b08e layouts-column-align-inherit layouts-section-position-none" data-id="540b08e" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="hf-elementor-layout elementor-element elementor-element-41b9062 trading_table elementor-invisible ob-has-background-overlay elementor-widget elementor-widget-shortcode" data-id="41b9062" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="shortcode.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-shortcode">
                            <div class="wpdt-c wdt-skin-dark">

                                <input type="hidden" id="wdtNonceFrontendEdit_1" name="wdtNonceFrontendEdit_1" value="8daf1877fd" /><input type="hidden" name="_wp_http_referer" value="/history/" /> <input type="hidden" id="table_1_desc" value='{"tableId":"table_1","tableType":"google_spreadsheet","selector":"#table_1","responsive":true,"responsiveAction":"icon","editable":false,"inlineEditing":false,"infoBlock":false,"pagination":1,"paginationAlign":"right","paginationLayout":"full_numbers","paginationLayoutMobile":"simple","file_location":"wp_media_lib","tableSkin":"dark","table_wcag":0,"scrollable":false,"globalSearch":false,"showRowsPerPage":true,"popoverTools":false,"hideBeforeLoad":true,"number_format":1,"decimalPlaces":2,"spinnerSrc":"https:\/\/wordpress-653970-4161790.cloudwaysapps.com\/wp-content\/plugins\/wpdatatables\/assets\/\/img\/spinner.gif","groupingEnabled":false,"tableWpId":1,"dataTableParams":{"sDom":"BT\u003C\u0027clear\u0027\u003Eltp","bSortCellsTop":false,"bFilter":true,"bPaginate":true,"sPaginationType":"full_numbers","aLengthMenu":[[1,5,10,25,50,100,-1],[1,5,10,25,50,100,"All"]],"iDisplayLength":10,"columnDefs":[{"sType":"string","wdtType":"string","bVisible":true,"orderable":true,"searchable":true,"InputType":"none","name":"Date","origHeader":"Date","notNull":false,"conditionalFormattingRules":[],"transformValueRules":"","className":" column-date","aTargets":[0]},{"sType":"string","wdtType":"string","bVisible":true,"orderable":true,"searchable":true,"InputType":"text","name":"Asset","origHeader":"Asset","notNull":false,"conditionalFormattingRules":[],"transformValueRules":"","className":" column-asset","aTargets":[1]},{"sType":"string","wdtType":"string","bVisible":true,"orderable":true,"searchable":true,"InputType":"text","name":"Ticker","origHeader":"Ticker","notNull":false,"conditionalFormattingRules":[],"transformValueRules":"","className":" column-ticker","aTargets":[2]},{"sType":"string","wdtType":"string","bVisible":true,"orderable":true,"searchable":true,"InputType":"text","name":"Signal","origHeader":"Signal","notNull":false,"conditionalFormattingRules":[],"transformValueRules":"","className":" column-signal","aTargets":[3]},{"sType":"formatted-num","wdtType":"float","bVisible":true,"orderable":true,"searchable":true,"InputType":"none","name":"Entry Price","origHeader":"Entry Price","notNull":false,"conditionalFormattingRules":[],"transformValueRules":"","className":"numdata float cell-green column-entry-price","aTargets":[4]},{"sType":"formatted-num","wdtType":"float","bVisible":true,"orderable":true,"searchable":true,"InputType":"none","name":"Exit Price","origHeader":"Exit Price","notNull":false,"conditionalFormattingRules":[],"transformValueRules":"","className":"numdata float  column-exit-price","aTargets":[5]},{"sType":"string","wdtType":"string","bVisible":true,"orderable":true,"searchable":true,"InputType":"none","name":"Signal Result","origHeader":"Signal Result","notNull":false,"conditionalFormattingRules":[],"transformValueRules":"","className":" column-signal-result","aTargets":[6]},{"sType":"string","wdtType":"string","bVisible":true,"orderable":true,"searchable":true,"InputType":"text","name":"Realised P&L","origHeader":"Realised P&L","notNull":false,"conditionalFormattingRules":[],"transformValueRules":"","className":" column-realised-pl","aTargets":[7]}],"bAutoWidth":false,"order":[[0,"asc"]],"ordering":false,"fixedHeader":{"header":false,"headerOffset":0},"fixedColumns":false,"oLanguage":{"sSearchPlaceholder":"Search table","sSearch":"\u003Cspan class=\u0022wdt-search-icon\u0022\u003E\u003C\/span\u003E"},"buttons":[],"bProcessing":false,"oSearch":{"bSmart":false,"bRegex":false,"sSearch":""}},"tabletWidth":"1024","mobileWidth":"480","renderFilter":"footer","advancedFilterEnabled":false,"serverSide":false,"columnsFixed":0,"sumFunctionsLabel":"","avgFunctionsLabel":"","minFunctionsLabel":"","maxFunctionsLabel":"Tradefish_Admin","columnsDecimalPlaces":{"Date":-1,"Asset":-1,"Ticker":-1,"Signal":-1,"Entry Price":-1,"Exit Price":-1,"Signal Result":-1,"Realised P&L":-1},"columnsThousandsSeparator":[],"sumColumns":[],"avgColumns":[],"sumAvgColumns":[],"timeFormat":"h:i A","datepickFormat":"dd\/mm\/yy"}' />

                                <table id="table_1" class="  responsive display nowrap data-t data-t wpDataTable wpDataTableID-1" style="display: none; " data-described-by='table_1_desc' data-wpdatatable_id="1">

                                    <!-- Table header -->

                                    <thead>
                                        <tr>
                                            <th data-class="expand" class=" wdtheader sort " style="">Date</th>
                                            <th class=" wdtheader sort " style="">Asset</th>
                                            <th class=" wdtheader sort " style="">Ticker</th>
                                            <th class=" wdtheader sort " style="">Signal</th>
                                            <th class=" wdtheader sort numdata float cell-green" style="">Entry Price
                                            </th>
                                            <th class=" wdtheader sort numdata float " style="">Exit Price</th>
                                            <th class=" wdtheader sort " style="">Results</th>
                                            <th class=" wdtheader sort " style="">Realised P&amp;L</th>
                                        </tr>
                                    </thead>
                                    <!-- /Table header -->
                                    <!-- Table body -->
                                    <tbody>

                                        <?php
                                        if ($custom_query->have_posts()) {
                                            while ($custom_query->have_posts()) {
                                                $custom_query->the_post();
                                                $coin_post_id = get_post_meta(get_the_ID(), '_post_title', true);
                                                $post_tumbnail = get_the_post_thumbnail_url($coin_post_id, array(20, 20));
                                                $signal_vale = get_post_meta(get_the_ID(), 'signal_value', true);
                                        ?>



                                                <tr id="table_1_row_0">
                                                    <td style=""><?php echo get_the_date(); ?></td>
                                                    <td style=""><?php echo the_title(); ?></td>
                                                    <td style="">ETC</td>
                                                    <td style="">$signal_vale</td>
                                                    <td style="">26,98</td>
                                                    <td style="">26,26</td>
                                                    <td style="">Correct</td>
                                                    <td style="">(+2.66%)</td>
                                                </tr>



                                            <?php
                                            }
                                            wp_reset_postdata();
                                            ?>
                                    </tbody> <!-- /Table body -->

                                    <!-- Table footer -->

                                    <!-- /Table footer -->
                                </table>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
                                        } else {
                                            echo 'No posts found';
                                        } ?>
</div>