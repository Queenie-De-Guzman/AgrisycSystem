<?= $this-> include('/userinc/top')?>
<body>

  <div class="container-scroller">
    <!-- partial:partials/_navbar.html   notification/profile-->

    <?= $this-> include('/userinc/navnotification')?>

    <?= $this-> include('/userinc/Chat')?>

    <?= $this-> include('/userinc/side')?>



         <!-- top navbar ends -->



         <!-- side navbar start -->
    

         <?= $this-> include('/userinc/nav')?>





         <!-- side navbar ends -->

              
         <?= $this-> include('/userinc/todolist')?>
         
  <div class="main-panel">
  <div class="content-wrapper">
  <h4 class="card-title">Report</h4>
  <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!-- Chart for report count by location -->
                <div class="chart-container">
                    <canvas id="locationChart" width="400" height="400"></canvas>
                </div>
            </div>
            <div class="col-md-6">
                <!-- Chart for report count by typhoon -->
                <div class="chart-container">
                    <canvas id="typhoonChart" width="400" height="400"></canvas>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <!-- Chart for total damages by location -->
                <div class="chart-container">
                    <canvas id="damagesChart" width="400" height="400"></canvas>
                </div>
            </div>
            <div class="col-md-6">
                <!-- Chart for average standing crop by location -->
                <div class="chart-container">
                    <canvas id="standingCropChart" width="400" height="400"></canvas>
                </div>
            </div>
        </div>
    </div>
    </div>
  </div>





<?= $this-> include('/userinc/end')?>
  <!-- End custom js for this page-->
</body>

        <script>
            // JavaScript code to render charts
            var ctx1 = document.getElementById('locationChart').getContext('2d');
            var locationChart = new Chart(ctx1, {
                type: 'bar',
                data: {
                    labels: <?= json_encode(array_keys($info['locationCounts'] ?? [])) ?>,
                    datasets: [{
                        label: 'Report Count by Location',
                        data: <?= json_encode(array_values($info['locationCounts'] ?? [])) ?>,
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        borderColor: 'rgba(255, 99, 132, 1)',
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

            var ctx2 = document.getElementById('typhoonChart').getContext('2d');
            var typhoonChart = new Chart(ctx2, {
                type: 'bar',
                data: {
                    labels: <?= json_encode(array_keys($info['typhoonCounts'] ?? [])) ?>,
                    datasets: [{
                        label: 'Report Count by Typhoon',
                        data: <?= json_encode(array_values($info['typhoonCounts'] ?? [])) ?>,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)'
                        ],
                        borderWidth: 1
                    }]
                }
            });

            var ctx3 = document.getElementById('damagesChart').getContext('2d');
            var damagesChart = new Chart(ctx3, {
                type: 'bar',
                data: {
                    labels: <?= json_encode(array_keys($info['totalDamagesByLocation'] ?? [])) ?>,
                    datasets: [{
                        label: 'Total Damages by Location',
                        data: <?= json_encode(array_values($info['totalDamagesByLocation'] ?? [])) ?>,
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        borderColor: 'rgba(255, 99, 132, 1)',
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

            var ctx4 = document.getElementById('standingCropChart').getContext('2d');
            var standingCropChart = new Chart(ctx4, {
                type: 'bar',
                data: {
                    labels: <?= json_encode(array_keys($info['averageStandingCropByLocation'] ?? [])) ?>,
                    datasets: [{
                        label: 'Average Standing Crop by Location',
                        data: <?= json_encode(array_values($info['averageStandingCropByLocation'] ?? [])) ?>,
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        borderColor: 'rgba(54, 162, 235, 1)',
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
        </script> 