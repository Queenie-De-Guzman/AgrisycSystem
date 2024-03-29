<?= $this-> include('/userinc/top')?>
<?= $this-> include('/userinc/multistyle')?>
<body>

  <div class="container-scroller">
      <!-- partial:partials/_navbar.html   notification/profile-->

      <?= $this-> include('/userinc/navnotification')?>
      <!-- partial:partials/_navbar.html   notification/profile end-->
      
   <!-- chat start -->
    <?= $this-> include('/userinc/Chat')?>
   <!-- chat end -->

   <!-- side navbar change color start -->
    <?= $this-> include('/userinc/side')?>
   <!-- side navbar change colo ends -->

   <!-- side navbar start -->
    <?= $this-> include('/userinc/nav')?>
    <!-- side navbar ends -->
             
    <?= $this-> include('/userinc/todolist')?>
    

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
            <div class="label text-muted">Actual Details</div>
        </a>
    </li>
</ul>
<!-- Step Wise Form Content -->
<form action="/add" method="post"  enctype="multipart/form-data">
    <!-- Step 1 Content -->
    <input type="hidden" name="id" value="<?= isset($in['id']) ? $in['id'] :'' ?>">
    <section id="step-1" class="form-step">
    <h2 class="font-normal">Farmer Basic Information</h2>
    <!-- Step 1 input fields -->
    <div class="mt-3">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="names">Name of Farmer</label>
                    <input type="text" class="form-control" name="names" id="names" placeholder=" Surname, First Name, Middle Name" required value="<?= (isset($in['names']))? $in['names'] : "" ?>">
                </div>
                <div class="form-group">
                    <br>
                    <label for="FarmerLocation" style="font-size: 26px;" >Farmer Location</label>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="region" class="form-label">Region *</label>
                                <select name="region" class="form-control form-control-md" id="region"></select>
                                <input type="hidden" class="form-control form-control-md" name="region_text" id="region-text" required value="<?= (isset($in['region']))? $in['region'] : "" ?>">
                            </div>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <div class="form-group">
                                <label for="province" class="form-label">Province *</label>
                                <select name="province" class="form-control form-control-md" id="province"></select>
                                <input type="hidden" class="form-control form-control-md" name="province_text" id="province-text" required value="<?= (isset($in['province']))? $in['province'] : "" ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 mb-3">
                            <label for="city" class="form-label">City / Municipality *</label>
                            <select name="city" class="form-control form-control-md" id="city"></select>
                            <input type="hidden" class="form-control form-control-md" name="city_text" id="city-text" required value="<?= (isset($in['city']))? $in['city'] : "" ?>">
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label for="barangay" class="form-label">Barangay *</label>
                            <select name="barangay" class="form-control form-control-md" id="barangay"></select>
                            <input type="hidden" class="form-control form-control-md" name="barangay_text" id="barangay-text" required value="<?= (isset($in['barangay']))? $in['barangay'] : "" ?>">
                        </div>
                    </div>
                    <div class="form-group">
                    <label for="cans">No. of Cans</label>
                    <input type="number" class="form-control" name="cans" id="cans" placeholder="No of Cans" required value="<?= (isset($in['cans']))? $in['cans'] : "" ?>">
                </div>
                </div>
            </div>
            <div class="col-md-6">
           
                <div class="form-group">
                    <label for="varia">Variety of Onion</label>
                    <input type="text" class="form-control" name="varia" id="varia" placeholder="Variety of Onion" required value="<?= (isset($in['varia']))? $in['varia'] : "" ?>">
                </div>
                <div class="form-group">
                    <label for="date">Seedling Date/Sowing Date</label>
                    <input type="date" class="form-control" name="date" id="date" placeholder="Seedling Date" required value="<?= (isset($in['date']))? $in['date'] : "" ?>">
                </div>
                <div class="form-group">
                    <label for="act">Actual Date Transplanted</label>
                    <input type="date" class="form-control" name="act" id="act" placeholder="Actual Date Transplanted" required value="<?= (isset($in['act']))? $in['act'] : "" ?>">
                </div>
                <div class="form-group">
                    <label for="area">Expected No. of Area (Ha)</label>
                    <input type="text" class="form-control" name="area" id="area" placeholder="Expected No of Area" required value="<?= (isset($in['area']))? $in['area'] : "" ?>">
                </div>
                <div class="mt-3">
                    <button class="button btn-navigate-form-step" type="button" step_number="2">Next</button>
                </div>
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
                    <label for="typhoonname" style="font-size: 18px;">Typhoon Name</label>
                    <input type="text" class="form-control" name="typhoonname" id="typhoonname" placeholder="Typhoon Name" required value="<?= (isset($in['typhoonname'])) ? $in['typhoonname'] : "" ?>">
                </div>
      
                <div class="form-group">
                    <label for="typhoon" style="font-size: 18px;">Damaged By Typhoon (HA)</label>
                    <input type="text" class="form-control" name="typhoon" id="typhoon" placeholder="Damaged By Typhoon" required value="<?= (isset($in['typhoon'])) ? $in['typhoon'] : "" ?>">
                </div>
          
        
                <div class="form-group">
                    <label for="heavy_rains" style="font-size: 18px;">Damaged By Heavy Rains (HA)</label>
                    <input type="text" class="form-control" name="heavy_rains" id="heavy_rains" placeholder="Damaged By Heavy Rains" required value="<?= (isset($in['heavy_rains'])) ? $in['heavy_rains'] : "" ?>">
                </div>
    
          
                <div class="form-group">
                    <label for="total_damages" style="font-size: 18px;">Total Damaged (HA)</label>
                    <input type="text" class="form-control" name="total_damages" id="total_damages" placeholder="Total Damaged" required value="<?= (isset($in['total_damages'])) ? $in['total_damages'] : "" ?>">
                </div>
                </div>

                <div class="col-md-6">
                <div class="form-group">
                    <label for="cans_damages" style="font-size: 18px;">Number of Damages Cans</label>
                    <input type="number" class="form-control" name="cans_damages" id="cans_damages" placeholder="Number of Damages Cans" required value="<?= (isset($in['cans_damages'])) ? $in['cans_damages'] : "" ?>">
                </div>
    



      
                <label for="HA" style="font-size: 18px;">Damaged Area (HA)</label>
                <div class="form-group">
                    <input type="number" class="form-control" name="HA" id="HA" placeholder="Area (HA)" required value="<?= (isset($in['HA'])) ? $in['HA'] : "" ?>">
                </div>
    

    
                <label for="disease" style="font-size: 34px;">Cause of Damage</label>
                <div class="form-group">
                    <input type="checkbox" value="ON" name="disease" id="disease" onclick="scriptone()" required value="<?= (isset($in['disease']))? $in['disease'] : "" ?>">
                    <label for="disease"style="font-size: 20px;" >Disease</label>
                    <select id="list" name="list" disabled onchange="showOtherOption()"required value="<?= (isset($in['list']))? $in['list'] : "" ?>">
                        <option></option>
                        <option>Harabas</option>
                        <option>Drought</option>
                        <option>Pest</option>
                        <option>Disease</option>
                        <option>MisManagement</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div class="form-group" id="otherOption" style="display: none;">
                    <label for="otherOptionInput" style="font-size: 18px;">Other (Specify)</label>
                    <input type="text" class="form-control" name="otherOptionInput" id="otherOptionInput" placeholder="Specify" disabled required value="<?= (isset($in['otherOptionInput']))? $in['otherOptionInput'] : "" ?>">
                </div>
                <div class="form-group">
                    <label for="per" style="font-size: 18px;">Area Percent Damage</label>
                    <input type="text" class="form-control" name="per" id="per" placeholder="Area Percent Damage" required disabled required value="<?= (isset($in['per']))? $in['per'] : "" ?>">
                </div>
          
        </div>
        <div class="mt-3">
            <button class="button btn-navigate-form-step" type="button" step_number="1">Prev</button>
            <button class="button btn-navigate-form-step" type="button" step_number="3">Next</button>
        </div>
    </div>
</section>



    <!-- Step 3 Content, default hidden on page load. -->
    <section id="step-3" class="form-step d-none">
        <h2 class="font-normal">Status Details</h2>
        <!-- Step 3 input fields -->
        <div class="mt-3">
        <div class="form-group">
                  <label for="standing_crop"> Final Area Planted (Standing Crop)</label>
                  <input type="text" class="form-control" name="standing_crop"  id="standing_crop" placeholder="Standing Crop" required value= "<?= (isset($in['standing_crop']))? $in ['standing_crop'] : ""  ?>">
                  
                  <div class="form-group">
                  <label for="planted">Total Area Planted </label>
                  <input type="date" class="form-control" name="planted" id="planted" placeholder="Total Area Planted" required value= "<?= (isset($in['planted']))? $in ['planted'] : ""  ?>">
                </div>

                <div class="form-group">
                  <label for="transplate_date">Transplante Date</label>
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
        <h2 class="font-normal"> Actual Harvest </h2>
        <!-- Step 3 input fields -->
        <div class="mt-3">
    
<div class="row">




<div class="col-md-6">
<div class="form-group">
<label for="expected_date">Actual  Area Harvest (HA)</label>
<input type="text" class="form-control"   name="expected_date"  id="expected_date" placeholder="Actual Area Harvest" required value= "<?= (isset($in['expected_date']))? $in ['expected_date'] : ""  ?>">
</div>


<div class="form-group">
<label for="production">Actual  Production (HA)</label>
<input type="text" class="form-control"   name="production"  id="production" placeholder="Actual Production" required value= "<?= (isset($in['production']))? $in ['production'] : ""  ?>">
</div>



<div class="form-group">
<label for="Harvested">Total Area Harvested (HA)</label>
<input type="number" class="form-control"  name="Harvested" id="Harvested" placeholder="Total Area Harvested" required value= "<?= (isset($in['Harvested']))? $in ['Harvested'] : ""  ?>">
</div>


<div class="form-group">
<label for="expected_volumn">Total Volume of Production  (MT)</label>
<input type="number" class="form-control"  name="expected_volumn" id="expected_volumn" placeholder="Total Volume of Production " required value= "<?= (isset($in['expected_volumn']))? $in ['expected_volumn'] : ""  ?>">
</div>

</div>

<div class="col-md-6">



    <label for="Local" style="font-size: 34px;">Market</label>
    <div class="form-group">
        <input type="checkbox" value="ON" name="Local" id="Local" onclick="toggleInputs()"required value="<?= (isset($in['Local']))? $in['Local'] : "" ?>">
        <label for="Local">Local Market</label>
    </div>
    <div class="form-group">
        <label for="per_kg" style="font-size: 18px;">No. of KG</label>
        <input type="text" class="form-control" name="per_kg" id="per_kg" placeholder="No. of KG" required disabled required value="<?= (isset($in['per_kg']))? $in['per_kg'] : "" ?>">
    </div>
    <div class="form-group">
        <label for="php_per_kg" style="font-size: 18px;">PHP / KG</label>
        <input type="text" class="form-control" name="php_per_kg" id="php_per_kg" placeholder="PHP/ KG" required disabled required value="<?= (isset($in['php_per_kg']))? $in['php_per_kg'] : "" ?>">
    </div>

      <div class="form-group">
        <input type="checkbox" value="ON" name="Cold" id="Cold" onclick="Inputs()" required value="<?= (isset($in['Cold']))? $in['Cold'] : "" ?>">
        <label for="Cold">Cold Storage</label>
    </div>
    <div class="form-group">
        <label for="perkg" style="font-size: 18px;">No. of Bags</label>
        <input type="text" class="form-control" name="perkg" id="perkg" placeholder="No. of KG" required disabled required value="<?= (isset($in['perkg']))? $in['perkg'] : "" ?>">
    </div>
    <div class="form-group">
        <label for="phpper_kg" style="font-size: 18px;"> Location of Cold Storage</label>
        <input type="text" class="form-control" name="phpper_kg" id="phpper_kg" placeholder="Location of Cold Storage" required disabled required value="<?= (isset($in['phpper_kg']))? $in['phpper_kg'] : "" ?>">
    </div>


      <div class="form-group">
        <input type="checkbox" value="ON" name="OTHER" id="OTHER" onclick="puts()"required value="<?= (isset($in['OTHER']))? $in['OTHER'] : "" ?>">
        <label for="OTHER">Others</label>
    </div>
    
    <div class="form-group">
        <label for="OTHERS" style="font-size: 18px;">Others</label>
        <input type="text" class="form-control" name="OTHERS" id="OTHERS" placeholder="Pls Specify" required disabled required value="<?= (isset($in['OTHERS']))? $in['OTHERS'] : "" ?>">
    </div>
   
</div>


</div>

        <div class="mt-3">
            
            <button class="button btn-navigate-form-step" type="button" step_number="3">Prev</button>
            <button class="button submit-btn" type="submit" >Save</button>
        </div>

    </section>
</form>
        





    
<?= $this-> include('/userinc/Formtable')?>
      
    </div>
  </div>



      
<?= $this-> include('/userinc/multiscript')?>

<?= $this-> include('/userinc/end')?>


    
</body>
