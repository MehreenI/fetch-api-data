<canvas id="myChart" width="400" height="200"></canvas>

<div>HI</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
  // Get data from PHP
  var labels = Utils.months({count: 12});
  var data = <?php echo json_encode($signal); ?>;

  // Create a line chart
  var ctx = document.getElementById('myChart').getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: labels,
      datasets: [{
        label: 'My Chart',
        data: data,
        borderColor: 'rgba(75, 192, 192, 1)',
        borderWidth: 2,
        fill: false
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
</script>
