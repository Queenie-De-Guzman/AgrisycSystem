<?= $this-> include('/userinc/top')?>
<body>

<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?= $this-> include('/admininc/notification')?>
    </div>
    
  <div class="container-fluid page-body-wrapper">
  <?= $this-> include('/userinc/Chat')?>
  <?= $this-> include('/admininc/navbartheme')?>

      
  <?= $this-> include('/userinc/todolist')?>

        <?= $this-> include('/admininc/sidenavbar')?>

  <div class="main-panel">
  <div class="content-wrapper">
           <div class="row mb-2">
             <div class="col-md-12 grid-margin">
               <div class="row">
                 <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                   <h3 class="font-weight-bold">Welcome To Agrisync</h3>
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
               </div>
               <br>
               <br>
             </div>
           </div>





           <div class="row mb-4">
                 <div class="col-md-6 mb-4  stretch-card transparent">
                   <div class="card card-light-blue">
                     <div class="card-body">
                       <p class="mb-4">Number of Farmers</p>
                       <h2 id="Table">Loading...</h2>
                     </div>
                   </div>
                 </div>
         
   <!-- LAGAYAN NA SCRIPT--->
                 <div class="col-md-6 mb-4 stretch-card transparent">
                   <div class="card card-tale">
                     <div class="card-body">
                       <p class="mb-4">Total Damage </p>
                       <h2 id="Damage">Loading...</h2>
                   
                     </div>
                   </div>
                 </div>
   <!-- LAGAYAN NA SCRIPT--->


</div>




<div class="row mb-4 ">

                 <div class="col-md-6 mb-4 stretch-card transparent">
                   <div class="card card-dark-blue">
                     <div class="card-body">
                       <p class="mb-4"> Standing Crop</p>
                       <h2 id="stand">Loading...</h2>
                     </div>
                   </div>
                 </div>
            <!-- LAGAYAN NA SCRIPT--->
            

            
            <div class="col-md-6 mb-4  stretch-card transparent">
                   <div class="card card-light-danger">
                     <div class="card-body">
                       <p class="mb-4">Number of Cans Damage</p>
                       <h2 id="dam">Loading...</h2>
                     </div>
                   </div>
                 </div>

            <!-- LAGAYAN NA SCRIPT--->
  </div>



  <div class="row mb-4 ">
  
                  <div class="col-md-6 mb-4  grid-margin stretch-card">
               <div class="card">
                 <div class="card-body">
                   <p class="card-title">Seedling date</p>
                   <canvas id="ling"></canvas>
                   <p class="font-weight-500"></p>
                  </div>
               </div>
             </div>
   <!-- LAGAYAN NA SCRIPT--->
   <br>
<br>

             
             <div class="col-md-6 mb-4  grid-margin stretch-card">
               <div class="card">
                 <div class="card-body">
                 <p class="card-title">Location of  Farmers</p>
                      <!-- Pie Chart -->
                    <canvas id="chart"></canvas>
                  </div>
                </div>
               </div>
         
         
<!-- LAGAYAN NA SCRIPT--->
  </div>
     

  
<div class="row">
    <div class="col-md-6 mb-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Standing Crop</h5>
                <!-- Bar Chart -->
                <canvas id="art" ></canvas>
            </div>
        </div>
    </div>
<!-- LAGAYAN NA SCRIPT--->


    <div class="col-md-6 mb-4  grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Expected</h5>
                <!-- Bar Chart -->
                <canvas id="barChart" style="min-height: 400px;"></canvas>
            </div>
        </div>
    </div>
</div>
<!-- LAGAYAN NA SCRIPT--->
  </div>

         
           </div>
                
        </div>
             
          
      
      </div>



</div>



 












<?= $this-> include('/userinc/end')?>
  <!-- End custom js for this page-->
</body>


