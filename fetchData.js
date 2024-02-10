// fetchData.js

document.addEventListener('DOMContentLoaded', function() {
    fetchData();
});

function fetchData() {
    jQuery.ajax({
        url: ajax_object.ajax_url,
        type: 'post',
        data: { action: 'get_monthly_data' },
        success: function(response) {
            const months = response.map(entry => entry.month);
            const values = response.map(entry => entry.value);

            const ctx = document.getElementById('myChart').getContext('2d');
            const myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: months,
                    datasets: [{
                        label: 'Monthly Data',
                        data: values,
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }
    });
}
