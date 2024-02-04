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
          <div class="row">
                     <!-- ang magigng report dito ay ang buong table na ma sort ang lugar at date -->
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Report</h4>
                  <canvas id="lineChart"></canvas>
                </div>
              </div>
            </div>

            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"></h4>
                  <canvas id="barChart"></canvas>
                </div>
              </div>
            </div>
          </div>

      
        </div>



<?= $this-> include('/userinc/Formtable')?>
  </div>
  </div>
</div>

<?= $this-> include('/userinc/end')?>
  <!-- End custom js for this page-->
</body>

