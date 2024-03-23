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
            <div class="col-lg-4">
                <!-- Chart for report count by location -->
                <div class="chart-container">
                    <canvas id="Chart" width="400" height="400"></canvas>
                </div>
            </div>
                <script>
    document.addEventListener("DOMContentLoaded", () => {
        // Fetch data from the PHP endpoint
        fetch('/Damage') // Adjust the path to your PHP file
            .then(response => response.json())
            .then(data => {
                const months = data.map(item => item.dt);
                const dateData = data.map(item => item.total_damage);

                // Creating Line Chart
                var ctx = document.getElementById('Chart').getContext('2d');
                new Chart(ctx, {
                    type: 'line',  // Changed from 'bar' to 'line'
                    data: {
                        labels: months,
                        datasets: [
                            {
                                label: 'Damage by typhoon',
                                data: dateData,
                                yAxisID: 'area',
                                fill: false,  // Setting fill to false for a line chart
                                borderColor: 'rgba(75, 192, 192, 1)',  // Adjust color as needed
                                tension: 0.1  // Adjust tension for line smoothing
                            },
                           
                        ]
                    },
                    options: {
                        
                          scales: {
                            x: {
                                type: 'category',
                                labels: months.map(date => {
                                    const dateObj = new Date(date);
                                    // Format the date as needed (e.g., "MMM DD" for month and day)
                                    return `${dateObj.toLocaleString('default', { month: 'long' })}`;
                                })
                            },
                            area: {
                                type: 'linear',
                                position: 'left',
                                title: {
                                    display: true,
                                    text: 'Damage'
                                }
                            },
                          }
                    }
                });
            })
            .catch(error => console.error('Error fetching data:', error));
    });
</script>

            
  

            
            <div class="col-lg-4">
                <!-- Chart for report count by typhoon -->
                <div class="chart-container">
                    <canvas id="Rain" width="400" height="400"></canvas>
                </div>
            </div>
            <script>
    document.addEventListener("DOMContentLoaded", () => {
        // Fetch data from the PHP endpoint
        fetch('/HeavyRains') // Adjust the path to your PHP file
            .then(response => response.json())
            .then(data => {
                const months = data.map(item => item.dt);
                const dateData = data.map(item => item.total_Heavy);

                // Creating Line Chart
                var ctx = document.getElementById('Rain').getContext('2d');
                new Chart(ctx, {
                    type: 'line',  // Changed from 'bar' to 'line'
                    data: {
                        labels: months,
                        datasets: [
                            {
                                label: 'Damage by HeavyRain',
                                data: dateData,
                                yAxisID: 'area',
                                fill: false,  // Setting fill to false for a line chart
                                borderColor: 'rgba(75, 192, 192, 1)',  // Adjust color as needed
                                tension: 0.1  // Adjust tension for line smoothing
                            },
                           
                        ]
                    },
                    options: {
                        
                          scales: {
                            x: {
                                type: 'category',
                                labels: months.map(date => {
                                    const dateObj = new Date(date);
                                    // Format the date as needed (e.g., "MMM DD" for month and day)
                                    return `${dateObj.toLocaleString('default', { month: 'long' })}`;
                                })
                            },
                            area: {
                                type: 'linear',
                                position: 'left',
                                title: {
                                    display: true,
                                    text: 'Damage by Heavy Rains'
                                }
                            },
                          }
                    }
                });
            })
            .catch(error => console.error('Error fetching data:', error));
    });
</script>

     
            <div class="col-lg-4">
                <!-- Chart for total damages by location -->
                <div class="chart-container">
                    <canvas id="Cart" width="400" height="400"></canvas>
                </div>
            </div>
                <script>
    document.addEventListener("DOMContentLoaded", () => {
        // Fetch data from the PHP endpoint
        fetch('/CANS') // Adjust the path to your PHP file
            .then(response => response.json())
            .then(data => {
                const months = data.map(item => item.dt);
                const dateData = data.map(item => item.total_cans);

                // Creating Line Chart
                var ctx = document.getElementById('Cart').getContext('2d');
                new Chart(ctx, {
                    type: 'line',  // Changed from 'bar' to 'line'
                    data: {
                        labels: months,
                        datasets: [
                            {
                                label: 'Damage Cans',
                                data: dateData,
                                yAxisID: 'area',
                                fill: false,  // Setting fill to false for a line chart
                                borderColor: 'rgba(75, 192, 192, 1)',  // Adjust color as needed
                                tension: 0.1  // Adjust tension for line smoothing
                            },
                           
                        ]
                    },
                    options: {
                        
                          scales: {
                            x: {
                                type: 'category',
                                labels: months.map(date => {
                                    const dateObj = new Date(date);
                                    // Format the date as needed (e.g., "MMM DD" for month and day)
                                    return `${dateObj.toLocaleString('default', { month: 'long' })}`;
                                })
                            },
                            area: {
                                type: 'linear',
                                position: 'left',
                                title: {
                                    display: true,
                                    text: 'Damage Cans'
                                }
                            },
                          }
                    }
                });
            })
            .catch(error => console.error('Error fetching data:', error));
    });
</script>


        </div>           






            <div class="col-md-6">
                <!-- Chart for average standing crop by location -->
                <div class="chart-container">
                    <canvas id="" width="300" height="300"></canvas>
                </div>
            </div>
    
    
    </div>
  </div>





<?= $this-> include('/userinc/end')?>
  <!-- End custom js for this page-->

</body>
