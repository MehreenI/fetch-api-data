<!-- chart.php -->
<canvas id="signalsChart" width="400" height="200"></canvas>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    
// Get the data for the chart from PHP
var signalData = <?php echo json_encode($signal_counts); ?>;

// Convert the associative array to an array of objects
var chartData = Object.keys(signalData).map(function(key) {
    return {x: key, y: signalData[key]};
});

// Sort the array based on the month and year
chartData.sort(function(a, b) {
    return a.x.localeCompare(b.x);
});

// Create the Chart
var ctx = document.getElementById('signalsChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        datasets: [{
            label: 'Total Signals',
            data: chartData,
            borderColor: 'rgba(75, 192, 192, 1)',
            fill: false,
        }]
    },
    options: {
        scales: {
            x: {
                type: 'time',
                time: {
                    unit: 'month',
                    displayFormats: {
                        month: 'MMM YYYY'
                    }
                },
                title: {
                    display: true,
                    text: 'Month'
                }
            },
            y: {
                title: {
                    display: true,
                    text: 'Total Signals'
                }
            }
        }
    }
});

</script>