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
        <form action="/editinfo/update" method= "post" id="editAccountSetupForm" name="userAccountSetupForm" enctype="multipart/form-data" method="POST">
            <!-- Step 1 Content -->
            <section id="step-1" class="form-step">
                <h2 class="font-normal">Farmer Basic Information</h2>
                <!-- Step 1 input fields -->
                <div class="mt-3">
                <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="NameofFramer">Name of Farmer</label>
        <input type="text" class="form-control" id="NameofFarmer" placeholder="Name of Farmer" name="NameofFarmer" required value="<?= (isset($edit['id'])) ? $edit['names'] : "" ?>">
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-group">
        <label for="FarmerLocation">Farmer Location</label>
        <input type="text" class="form-control" id="FarmerLocation" placeholder="Farmer Location" name="FarmerLocation" required value="<?= (isset($edit['id'])) ? $edit['location'] : "" ?>">
      </div>
    </div>
  </div>

  
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="NoofCans">No. of Cans</label>
        <input type="number" class="form-control" id="NoofCans" placeholder="No of Cans" name="NoofCans" required value="<?= (isset($edit['id'])) ? $edit['cans'] : "" ?>">
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-group">
        <label for="SeedlingDate">Seedling Date</label>
        <input type="date" class="form-control" id="SeedlingDate" placeholder="Seedling Date" name="SeedlingDate" required value="<?= (isset($edit['id'])) ? $edit['date'] : "" ?>">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="NoofArea">Expected No. of Area</label>
        <input type="text" class="form-control" id="NoofArea" placeholder="Expected No of Area" name="NoofArea" required value="<?= (isset($edit['id'])) ? $edit['area'] : "" ?>">
      </div>
    </div>
  </div>
</div>
         <div class="mt-3">
                    <button class="button btn-navigate-form-step" type="button" step_number="2">Next</button>
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
        <input type="text" class="form-control" id="DamagedTyphoon" placeholder="Damaged By Typhoon" name="Damagedoftyphoon" required value="<?= (isset($edit['id'])) ? $edit['typhoon'] : "" ?>">
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-group">
        <label for="DamageRain">Damaged By Heavy Rains (HA)</label>
        <input type="text" class="form-control" id="Rain" placeholder="Damaged By Heavy Rains" name="DamagedofRains" required value="<?= (isset($edit['id'])) ? $edit['heavy_rains'] : "" ?>">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="Total">Total Damaged (HA)</label>
        <input type="text" class="form-control" id="TotalDamaged" placeholder="Total Damaged" name="TotalDamaged" required value="<?= (isset($edit['id'])) ? $edit['total_damages'] : "" ?>">
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-group">
        <label for="DamagesCans">Number of Damages Cans</label>
        <input type="number" class="form-control" id="DamagesCans" placeholder="Number of Damages Cans" name="DamagesCans" required value="<?= (isset($edit['id'])) ? $edit['cans_damages'] : "" ?>">
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
                          <input type="text" class="form-control" id="StandingCrop" placeholder="Standing Crop" name="StandingCrop" required value="<?= (isset($edit['id'])) ? $edit['standing_crop'] : ""  ?>">
                        </div>
                        <div class="form-group">
                          <label for="TransplateDate">Transplante Date</label>
                          <input type="date" class="form-control" id="TransplateDate" placeholder="Transplate Date" name="TransplateDate" required value="<?= (isset($edit['id'])) ? $edit['transplate_date'] : ""  ?>">
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
        <input type="date" class="form-control" id="ExpectedDate" placeholder="Expected Date of Harvest" name="ExpectedHarvest" required value="<?= (isset($edit['id'])) ? $edit['expected_date'] : "" ?>">
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-group">
        <label for="ExpectedArea">Expected Area of Harvest (HA)</label>
        <input type="text" class="form-control" id="ExpectedArea" placeholder="Expected Area of Harvest" name="ExpectedArea" required value="<?= (isset($edit['id'])) ? $edit['expected_area'] : "" ?>">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="ExpectedVolume">Expected Volume of Harvest (MT)</label>
        <input type="number" class="form-control" id="ExpectedVolume" placeholder="Expected Volume of Harvest" name="ExpectedVolume" required value="<?= (isset($edit['id'])) ? $edit['expected_volume'] : "" ?>">
      </div>
    </div>
  </div>
</div>

                <div class="mt-3">
                    
                    <button class="button btn-navigate-form-step" type="button" step_number="3">Prev</button>
                    <button class="button submit-btn" type="submit">Save Changes</button>
                </div>
            </section>
        </form>
    </div>
</div>       