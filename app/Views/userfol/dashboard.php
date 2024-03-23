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
       
          <div class="row">
                  <div class="col-xl">
                  <h3 class="font-weight-bold">Welcome</h3>    <h5><?php echo session()->get('Province'); ?></h5>
                  <h6 class="font-weight-normal mb-0"><span class="text-primary"></span></h6>
                </div>
                <div class="col-12 col-xl-4">
                  <div class="justify-content-end d-flex">
                    <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                      <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <i class="mdi mdi-calendar"></i> Today (4 Nov 2023)
                      </button>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                        <a class="dropdown-item" href="#">January - March</a>
                        <a class="dropdown-item" href="#">March - June</a>
                        <a class="dropdown-item" href="#">June - August</a>
                        <a class="dropdown-item" href="#">August - November</a>
                      </div>
                    </div>
                  </div>
              
              </div>
              <br>
              <br>
              
     
        </div>

        <br>
                
    <div class="row">
        <div class="col-lg-3">
            <div class="card card-tale">
                <div class="card-body">
                <p class="mb-4">Total Damage </p>
                <h2 id="TotalDamage">Loading...</h2>
                </div>
            </div>
        </div>
        
<script>
                  document.addEventListener("DOMContentLoaded", () => {
                    // Fetch data from your CodeIgniter route
                    fetch('/TotalDamage') // Replace '/calculatedamage' with the actual route that points to your calculatedamage function
                      .then(response => response.json())
                      .then(data => {
                        // Display the total damage
                        document.getElementById('TotalDamage').textContent = data.total_damages || 0;
                      })
                      .catch(error => console.error('Error fetching data:', error));
                  });
                </script>



                    <!-- Your HTML -->



  
<div class="col-lg-3">
    <div class="card card-tale">
        <div class="card-body">
            <p class="mb-4">Number of Farmers</p>
            <h2 id="calculateFarmers">Loading...</h2>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        // Fetch data from your CodeIgniter route
        fetch('/calculateFarmers')
            .then(response => response.json())
            .then(data => {
                // Display the total number of farmers
                document.getElementById('calculateFarmers').textContent = data.numFarmers || 0;
            })
            .catch(error => console.error('Error fetching data:', error));
    });
</script>


<!-- End of your HTML -->





                <div class="col-lg-3">
                  <div class="card card-dark-blue">
                    <div class="card-body">
                      <p class="mb-4"> Standing Crop</p>
                      <h2 id="calculatestanding">Loading...</h2>
                    </div>
                  </div>
                </div>

                <script>
                document.addEventListener("DOMContentLoaded", () => {
                    // Fetch data from your CodeIgniter route
                    fetch('/calculatestanding') // Replace '/calculatedamage' with the actual route that points to your calculatedamage function
                      .then(response => response.json())
                      .then(data => {
                        // Display the total damage
                        document.getElementById('calculatestanding').textContent = data.standing_crop || 0;
                      })
                      .catch(error => console.error('Error fetching data:', error));
                  });
                </script>
             


              
              <div class="col-lg-3">
                <div class="card card-light-danger">
                  <div class="card-body">
                    <p class="mb-4">Number of Cans Damage</p>                   
                     <h2 id="calculatecrop">Loading...</h2>
                    </div>
                  </div>
                </div>
                <script>
                document.addEventListener("DOMContentLoaded", () => {
                    // Fetch data from your CodeIgniter route
                    fetch('/calculatecrop') // Replace '/calculatedamage' with the actual route that points to your calculatedamage function
                      .then(response => response.json())
                      .then(data => {
                        // Display the total damage
                        document.getElementById('calculatecrop').textContent = data.cans_damages|| 0;
                      })
                      .catch(error => console.error('Error fetching data:', error));
                  });
                </script>



          

                </div>

                <br>
        <div class="row" >

       
        <div class="col-md-6 grid-margin stretch-card">
               <div class="card">
                 <div class="card-body">
                   <p class="card-title">Seedling date</p>
                   <canvas id="ling"></canvas>
                   <p class="font-weight-500"></p>
                  </div>
               </div>
             </div>
             <script>
    document.addEventListener("DOMContentLoaded", () => {
        // Fetch data from the PHP endpoint
        fetch('/ed') // Adjust the path to your PHP file
            .then(response => response.json())
            .then(data => {
                const months = data.map(item => item.dt);
                const dateData = data.map(item => item.total_seedling);

                // Creating Line Chart
                var ctx = document.getElementById('ling').getContext('2d');
                new Chart(ctx, {
                    type: 'line',  // Changed from 'bar' to 'line'
                    data: {
                        labels: months,
                        datasets: [
                            {
                                label: 'Seedling Date',
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
                                    text: 'Standing Crop'
                                }
                            },
                          }
                    }
                });
            })
            .catch(error => console.error('Error fetching data:', error));
    });
</script>
    <br>
<div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Total Crop</h5>
                <!-- Bar Chart -->
                <canvas id="barChart" style="min-height: 400px;"></canvas>
            </div>
        </div>
        
<script>
    document.addEventListener("DOMContentLoaded", () => {
        // Fetch data from the PHP endpoint
        fetch('/totalcrop') // Adjust the path to your PHP file
            .then(response => response.json())
            .then(data => {
                const months = data.map(item => item.mon);
                const areaData = data.map(item => item.total_expected_area);
                const volumeData = data.map(item => item.total_expected_volume);

                // Creating Bar Chart
                var ctx = document.getElementById('barChart').getContext('2d');
                new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: months,
                        datasets: [
                            {
                                label: 'Total Expected Area',
                                data: areaData,
                                yAxisID: 'area'
                            },
                            {
                                label: 'Total Expected Volume',
                                data: volumeData,
                                yAxisID: 'volume'
                            }
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
                                    text: 'Total Expected Area'
                                }
                            },
                            volume: {
                                type: 'linear',
                                position: 'right',
                                title: {
                                    display: true,
                                    text: 'Total Expected Volume'
                                }
                            }
                        }
                    }
                });
            })
            .catch(error => console.error('Error fetching data:', error));
    });
</script>

    </div>


        </div>
        <div class="row" >
        
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Standing Crop</h5>
                <!-- Bar Chart -->
                <canvas id="Chart" ></canvas>
            </div>
        </div>
    
</div>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        // Fetch data from the PHP endpoint
        fetch('/totaltransplate') // Adjust the path to your PHP file
            .then(response => response.json())
            .then(data => {
                const months = data.map(item => item.dt);
                const cropData = data.map(item => item.total_standing_crop);
                

                // Creating Bar Chart
                var ctx = document.getElementById('Chart').getContext('2d');
                new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: months,
                        datasets: [
                            {
                                label: 'Standing Crop',
                                data: cropData,
                                yAxisID: 'area'
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
                                    text: 'Standing Crop'
                                }
                            },
                          }
                    }
                });
            })
            .catch(error => console.error('Error fetching data:', error));
    });
</script>

   

        
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Location of  Farmers</h5>
                        <!-- Pie Chart -->
                        <canvas id="chart"></canvas>
                    </div>
                </div>
            </div>
   
      

            <script>
        document.addEventListener("DOMContentLoaded", () => {
            // Fetch data from the PHP endpoint
            fetch('/totallocation') // Adjust the path to your PHP file
                .then(response => response.json())
                .then(data => {
                    const city= data.city;

                    // Creating Pie Chart
                    var ctx = document.getElementById('chart').getContext('2d');
                    new Chart(ctx, {
                        type: 'pie',
                        data: {
                            labels: city.map(item => item.city),
                            datasets: [{
                                label: 'Location',
                                data: city.map(item => item.count),
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.7)',
                                    'rgba(54, 162, 235, 0.7)',
                                    'rgba(255, 206, 86, 0.7)',
                                    'rgba(75, 192, 192, 0.7)',
                                    'rgba(153, 102, 255, 0.7)',
                                    'rgba(255, 159, 64, 0.7)'
                                ],
                            }]
                        },
                        options: {
                            // Add any additional options you need
                        }
                    });
                })
                .catch(error => console.error('Error fetching data:', error));
        });
    </script>
    </div>




    <?= $this-> include('/userinc/end')?>
</body>