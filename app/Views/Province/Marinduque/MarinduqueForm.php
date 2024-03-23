<?= $this-> include('/userinc/top')?>
<?= $this-> include('/userinc/multistyle')?>
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




        <div>
    <h1>Onion Report</h1>
    <div id="multi-step-form-container">
        <!-- Form Steps / Progress Bar -->
        <ul class="form-stepper form-stepper-horizontal text-center mx-auto pl-0">
            <!-- Step 1 -->
            <li class="form-stepper-active text-center form-stepper-list" step="1">
                <a class="mx-2">
                    <span class="form-stepper-circle">
                        <span>1</span>
                    </span>
                    <div class="label">Farmer Basic Information</div>
                </a>
            </li>
            <!-- Step 2 -->
            <li class="form-stepper-unfinished text-center form-stepper-list" step="2">
                <a class="mx-2">
                    <span class="form-stepper-circle text-muted">
                        <span>2</span>
                    </span>
                    <div class="label text-muted">Damage Details</div>
                </a>
            </li>
            <!-- Step 3 -->
            <li class="form-stepper-unfinished text-center form-stepper-list" step="3">
                <a class="mx-2">
                    <span class="form-stepper-circle text-muted">
                        <span>3</span>
                    </span>
                    <div class="label text-muted">Status Details</div>
                </a>
            </li>
              <!-- Step 4 -->
              <li class="form-stepper-unfinished text-center form-stepper-list" step="4">
                <a class="mx-2">
                    <span class="form-stepper-circle text-muted">
                        <span>4</span>
                    </span>
                    <div class="label text-muted">Expected Details</div>
                </a>
            </li>
        </ul>
        <!-- Step Wise Form Content -->
        <form action="/AllFarmers" method="post" id="userAccountSetupForm" name="userAccountSetupForm" enctype="multipart/form-data">
            <!-- Step 1 Content -->
            <input type="hidden" name="id" value="<?= isset($in['id']) ? $in['id'] :'' ?>">
            <section id="step-1" class="form-step">
                <h2 class="font-normal">Farmer Basic Information</h2>
                <!-- Step 1 input fields -->
                <div class="mt-3">
                <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="NameofFramer">Name of Farmer</label>
     
        <input type="text" class="form-control"  name="names" id="names" placeholder=" Surname, First Name, Middle Name"required value= "<?= (isset($in['names']))? $in ['names'] : ""  ?>">
      </div>
      <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="NoofCans">No. of Cans</label>
        <input type="number" class="form-control" name="cans" id="cans" placeholder="No of Cans" required value= "<?= (isset($in['cans']))? $in ['cans'] : ""  ?>">
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-group">
        <label for="SeedlingDate">Seedling Date</label>
        <input type="date" class="form-control" name="date" id="date" placeholder="Seedling Date" required value= "<?= (isset($in['date']))? $in ['date'] : ""  ?>">
      </div>
    </div>
  </div>
  
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="NoofArea">Expected No. of Area (Square Meter) </label>
        <input type="text" class="form-control"  name="area"  id="area" placeholder="Expected No of Area" required value= "<?= (isset($in['area']))? $in ['area'] : ""  ?>">
      </div>
    </div>
    <div class="col-md-6 mb-3">
            <label for="street-text" class="form-label">Street (Optional)</label>
            <input type="text" class="form-control form-control-md" name="street_text" id="street-text">
        </div>
  </div>

       

          </div>


    <div class="col-md-6">
      <div class="form-group">
        <label for="FarmerLocation">Farmer Location</label>
        <div class="row">
        <div class="col-sm-6 mb-3">
            <label class="form-label">Region *</label>
            <select name="region" class="form-control form-control-md" id="region"></select>
            <input type="hidden" class="form-control form-control-md" name="region_text" id="region-text" required>
        </div>
        <div class="col-sm-6 mb-3">
            <label class="form-label">Province *</label>
            <select name="province" class="form-control form-control-md" id="province"></select>
            <input type="hidden" class="form-control form-control-md" name="province_text" id="province-text" required>
        </div>
        </div>
        <div class="row">
        <div class="col-sm-6 mb-3">
            <label class="form-label">City / Municipality *</label>
            <select name="city" class="form-control form-control-md" id="city"></select>
            <input type="hidden" class="form-control form-control-md" name="city_text" id="city-text" required>
        </div>
        <div class="col-sm-6 mb-3">
            <label class="form-label">Barangay *</label>
            <select name="barangay" class="form-control form-control-md" id="barangay"></select>
            <input type="hidden" class="form-control form-control-md" name="barangay_text" id="barangay-text" required>
        </div>
        <div>
       




      </div>
    </div>
 
  
    <div class="mt-3">
                    <button class="button btn-navigate-form-step" type="button" step_number="2">Next</button>
                </div>

</div>
   

    </div>

    
  



            </section>






            <!-- Step 2 Content, default hidden on page load. -->
            <section id="step-2" class="form-step d-none">
                <h2 class="font-normal">Damage Details</h2>
                <!-- Step 2 input fields -->
                <div class="mt-3">
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="DamageTyphoon">Damaged By Typhoon (ha)</label>
        <input type="text" class="form-control" name="typhoon" id="typhoon" placeholder="Damaged By Typhoon" required value= "<?= (isset($in['typhoon']))? $in ['typhoon'] : ""  ?>">
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-group">
        <label for="DamageRain">Damaged By Heavy Rains (HA)</label>
        <input type="text" class="form-control" name="heavy_rains" id="heavy_rains" placeholder="Damaged By Heavy Rains" required value= "<?= (isset($in['heavy_rains']))? $in ['heavy_rains'] : ""  ?>">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="Total">Total Damaged (HA)</label>
        <input type="text" class="form-control" name="total_damages" id="total_damages" placeholder="Total Damaged" required value= "<?= (isset($in['total_damages']))? $in ['total_damages'] : ""  ?>">
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-group">
        <label for="DamagesCans">Number of Damages Cans</label>
        <input type="number" class="form-control"   name="cans_damages" id="cans_damages" placeholder="Number of Damages Cans" required value= "<?= (isset($in['cans_damages']))? $in ['cans_damages'] : ""  ?>">
      </div>
    </div>
  </div>
</div>
                <div class="mt-3">
                    <button class="button btn-navigate-form-step" type="button" step_number="1">Prev</button>
                    <button class="button btn-navigate-form-step" type="button" step_number="3">Next</button>
                </div>
            </section>



            <!-- Step 3 Content, default hidden on page load. -->
            <section id="step-3" class="form-step d-none">
                <h2 class="font-normal">Status Details</h2>
                <!-- Step 3 input fields -->
                <div class="mt-3">
                <div class="form-group">
                          <label for="StandingCrop">Standing Crop</label>
                          <input type="text" class="form-control" name="standing_crop"  id="standing_crop" placeholder="Standing Crop" required value= "<?= (isset($in['standing_crop']))? $in ['standing_crop'] : ""  ?>">
                        <div class="form-group">
                          <label for="TransplateDate">Transplante Date</label>
                          <input type="date" class="form-control" name="transplate_date" id="transplate_date" placeholder="Transplate Date" required value= "<?= (isset($in['transplate_date']))? $in ['transplate_date'] : ""  ?>">
                        </div>
                </div>
                <div class="mt-3">
                
                    <button class="button btn-navigate-form-step" type="button" step_number="1">Prev</button>
                    <button class="button btn-navigate-form-step" type="button" step_number="4">Next</button>
                
                </div>
            </section>
              <!-- Step 4 Content, default hidden on page load. -->
              <section id="step-4" class="form-step d-none">
                <h2 class="font-normal"> Expected Details</h2>
                <!-- Step 3 input fields -->
                <div class="mt-3">
                <div class="mt-3">
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="ExpectedDate">Expected Date of Harvest</label>
        <input type="date" class="form-control"  name="expected_date" id="expected_date" placeholder="Expected Date of Harvest" required value= "<?= (isset($in['expected_date']))? $in ['expected_date'] : ""  ?>">
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-group">
        <label for="ExpectedArea">Expected Area of Harvest (HA)</label>
        <input type="text" class="form-control"   name="expected_area"  id="expected_area" placeholder="Expected Area of Harvest" required value= "<?= (isset($in['expected_area']))? $in ['expected_area'] : ""  ?>">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="ExpectedVolume">Expected Volume of Harvest (MT)</label>
        <input type="number" class="form-control"  name="expected_volumn" id="expected_volumn" placeholder="Expected Volume of Harvest" required value= "<?= (isset($in['expected_volumn']))? $in ['expected_volumn'] : ""  ?>">
      </div>
    </div>
  </div>
</div>

                <div class="mt-3">
                    
                    <button class="button btn-navigate-form-step" type="button" step_number="3">Prev</button>
                    <button class="button submit-btn" type="submit" >Save</button>
                </div>
            </section>
        </form>
    </div>
</div>        



    
<?= $this-> include('/adminfol/TableForm')?>


            </div>
          </div>







          <?= $this-> include('/userinc/multiscript')?>

          <?= $this-> include('/userinc/end')?>
</body>
