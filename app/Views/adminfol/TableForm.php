


      <div class="main-panel">

        <div class="content-wrapper">




<br>
<br>
<br>
<br>
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"> Information Table</h4>
            <p class="card-description">Report</p>

            <div class="table-responsive pt-3">
                <table class="table table-bordered" id="infoTable">
                    <thead>
                        <tr>
                            <th scope="col">Name of Farmer</th>
                            <th scope="col">Region</th>
                            <th scope="col">Province</th>
                            <th scope="col">Municipality</th>
                            <th scope="col">Barangay</th>
                                <th scope="col">No of Cans</th>
                                <th scope="col"> Seedling Date</th>
                                <th scope="col"> Expected No. of Area</th>
                                <th scope="col">Damagedd By Typhoon (ha)</th>
                                <th scope="col"> Damaged By Heavy Rains(HA)</th>
                                <th scope="col">Total Damaged(HA)</h>
                                <th scope="col"> Number of Damages Cans </th>
                                <th scope="col">Standing Crop</th>
                                <th scope="col">Transplante Date</th>
                                <th scope="col">Expected Date of Harvest</th>
                                <th scope="col">Expected Area of Harvest(HA)</th>
                                <th scope="col">Expected Volume of Harvest (MT)</th>
                            
                                <th scope="col">Action</th>

                            </thead>
                            <tbody>

                              <?php foreach ($info as $in) :?>
                                <tr>


                                  <td><?= $in['names'] ?></td>
                                  <td><?= $in['region'] ?></td>
                                  <td><?= $in['province'] ?></td>
                                  <td><?= $in['city'] ?></td>
                                  <td><?= $in['barangay'] ?></td>
                                  <td><?= $in['cans'] ?></td>
                                  <td><?= $in['date'] ?></td>
                                  <td><?= $in['area'] ?></td>
                                  <td><?= $in['typhoon'] ?></td>
                                  <td><?= $in['heavy_rains'] ?></td>
                                  <td><?= $in['total_damages'] ?></td>
                                  <td><?= $in['cans_damages'] ?></td>
                                  <td><?= $in['standing_crop'] ?></td>
                                  <td><?= $in['transplate_date'] ?></td>
                                  <td><?= $in['expected_date'] ?></td>
                                  <td><?= $in['expected_area'] ?></td>
                                  <td><?= $in['expected_volumn'] ?></td>
                                  <td> 
                                    <div class="btn-group">
                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #88c431; border: none;">
                                                    Actions
                                                </button>
                                                <div class="dropdown-menu">
                                                <button type="button" class="dropdown-item" onclick="openEditReportModal(
                                                        <?= $in['user_id'];?>,
                                                        '<?= $in['names'];?>',
                                                        '<?= $in['region'];?>',
                                                        '<?= $in['province'];?>',
                                                        '<?= $in['city'];?>',
                                                       '<?= $in['barangay'];?>',
                                                       '<?= $in['cans'];?>',
                                                       '<?= $in['date'];?>',
                                                       '<?= $in['area'];?>',
                                                     '<?= $in['typhoon'];?>',
                                                     '<?= $in['heavy_rains'];?>',
                                                     '<?= $in['total_damages'];?>',
                                                     '<?= $in['cans_damages'];?>',
                                                     '<?= $in['standing_crop'];?>',
                                                    '<?= $in['transplate_date'];?>',
                                                    '<?= $in['expected_date'];?>',
                                                    '<?= $in['expected_area'];?>',
                                                    '<?= $in['expected_volumn'];?>',
                                                        )">Edit</button>
                                                    <button
                                                 <button type="button" class="dropdown-item" onclick="deletereport(<?= $in['id'];?>)">Delete</button>
                                                   
                                                </div>

                                                    </td>
                                </tr>

                              <?php endforeach; ?>
                            </tbody>
                          </table>
                          <br>
                        </div>
                      </div>
                    </div>
                  </div>
<!-- edit_product_modal.php -->

<div class="modal fade" id="editreportmodal" tabindex="-1" aria-labelledby="editreportmodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editreportdmodalLabel">Edit Report</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div id="multi-step-form-container">
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
            </div>
            <form action="/viewreport/update" method="post" id="userAccountSetupForm" name="userAccountSetupForm" enctype="multipart/form-data">
            <input type="hidden" name="user_id" id="user_id">
            <section id="step-1" class="form-step">
            <h2 class="font-normal">Farmer Basic Information</h2>
                <!-- Step 1 input fields -->
                <div class="mt-3">
                <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="NameofFramer">Name of Farmer</label>
     
        <input type="text" class="form-control"  name="names" id="editnames" placeholder=" Surname, First Name, Middle Name"required value= "<?= (isset($in['names']))? $in ['names'] : ""  ?>">
      </div>
      <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="NoofCans">No. of Cans</label>
        <input type="number" class="form-control" name="cans" id="editcans" placeholder="No of Cans" required value= "<?= (isset($in['cans']))? $in ['cans'] : ""  ?>">
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-group">
        <label for="SeedlingDate">Seedling Date</label>
        <input type="date" class="form-control" name="date" id="editdate" placeholder="Seedling Date" required value= "<?= (isset($in['date']))? $in ['date'] : ""  ?>">
      </div>
    </div>
  </div>
  
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="NoofArea">Expected No. of Area (Square Meter) </label>
        <input type="text" class="form-control"  name="area"  id="editarea" placeholder="Expected No of Area" required value= "<?= (isset($in['area']))? $in ['area'] : ""  ?>">
      </div>
    </div>
   
  </div>

       

          </div>


    <div class="col-md-6">
      <div class="form-group">
        <label for="FarmerLocation">Farmer Location</label>
        <div class="row">
        <div class="col-sm-6 mb-3">
            <label for="region "class="form-label">Region *</label>
            <select name="region" class="form-control form-control-md" id="region"></select>
            <input type="hidden" class="form-control form-control-md" name="region_text" id="editregion-text" required value= "<?= (isset($in['region']))? $in ['region'] : ""  ?>">
        </div>
        <div class="col-sm-6 mb-3">
            <label for="province" class="form-label">Province *</label>
            <select name="province" class="form-control form-control-md" id="province"></select>
            <input type="hidden" class="form-control form-control-md" name="province_text" id="editprovince-text" required value= "<?= (isset($in['province']))? $in ['province'] : ""  ?>">
        </div>
        </div>
        <div class="row">
        <div class="col-sm-6 mb-3">
            <label  for="city" class="form-label">City / Municipality *</label>
            <select name="city" class="form-control form-control-md" id="city"></select>
            <input type="hidden" class="form-control form-control-md" name="city_text" id="editcity-text" required value= "<?= (isset($in['city']))? $in ['city'] : ""  ?>">
        </div>
        <div class="col-sm-6 mb-3">
            <label for="barangay" class="form-label">Barangay *</label>
            <select name="barangay" class="form-control form-control-md" id="barangay"></select>
            <input type="hidden" class="form-control form-control-md" name="barangay_text" id="editbarangay-text" required value= "<?= (isset($in['barangay']))? $in ['barangay'] : ""  ?>">
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

           

    <!-- Step 3 Content -->
    <section id="editstep-3" class="form-step d-none">
                        <!-- Your step 3 input fields here -->
                    </section>


                    <h2 class="font-normal">Damage Details</h2>
                <!-- Step 2 input fields -->
                <div class="mt-3">
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="DamageTyphoon">Damaged By Typhoon (ha)</label>
        <input type="text" class="form-control" name="typhoon" id="edittyphoon" placeholder="Damaged By Typhoon" required value= "<?= (isset($in['typhoon']))? $in ['typhoon'] : ""  ?>">
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-group">
        <label for="DamageRain">Damaged By Heavy Rains (HA)</label>
        <input type="text" class="form-control" name="heavy_rains" id="editheavy_rains" placeholder="Damaged By Heavy Rains" required value= "<?= (isset($in['heavy_rains']))? $in ['heavy_rains'] : ""  ?>">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="Total">Total Damaged (HA)</label>
        <input type="text" class="form-control" name="total_damages" id="edittotal_damages" placeholder="Total Damaged" required value= "<?= (isset($in['total_damages']))? $in ['total_damages'] : ""  ?>">
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-group">
        <label for="DamagesCans">Number of Damages Cans</label>
        <input type="number" class="form-control"   name="cans_damages" id="editcans_damages" placeholder="Number of Damages Cans" required value= "<?= (isset($in['cans_damages']))? $in ['cans_damages'] : ""  ?>">
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
            <section id="editstep-3" class="form-step d-none">
                <h2 class="font-normal">Status Details</h2>
                <!-- Step 3 input fields -->
                <div class="mt-3">
                <div class="form-group">
                          <label for="StandingCrop">Standing Crop</label>
                          <input type="text" class="form-control" name="standing_crop"  id="editstanding_crop" placeholder="Standing Crop" required value= "<?= (isset($in['standing_crop']))? $in ['standing_crop'] : ""  ?>">
                        <div class="form-group">
                          <label for="TransplateDate">Transplante Date</label>
                          <input type="date" class="form-control" name="transplate_date" id="edittransplate_date" placeholder="Transplate Date" required value= "<?= (isset($in['transplate_date']))? $in ['transplate_date'] : ""  ?>">
                        </div>
                </div>
                <div class="mt-3">
                
                    <button class="button btn-navigate-form-step" type="button" step_number="1">Prev</button>
                    <button class="button btn-navigate-form-step" type="button" step_number="4">Next</button>
                
                </div>

                
                    <!-- Step 4 Content -->
                    <section id="editstep-4" class="form-step d-none">
                        <!-- Your step 4 input fields here -->

                        <h2 class="font-normal"> Expected Details</h2>
                <!-- Step 3 input fields -->
                <div class="mt-3">
                <div class="mt-3">
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="ExpectedDate">Expected Date of Harvest</label>
        <input type="date" class="form-control"  name="expected_date" id="editexpected_date" placeholder="Expected Date of Harvest" required value= "<?= (isset($in['expected_date']))? $in ['expected_date'] : ""  ?>">
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-group">
        <label for="ExpectedArea">Expected Area of Harvest (HA)</label>
        <input type="text" class="form-control"   name="expected_area"  id="editexpected_area" placeholder="Expected Area of Harvest" required value= "<?= (isset($in['expected_area']))? $in ['expected_area'] : ""  ?>">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="ExpectedVolume">Expected Volume of Harvest (MT)</label>
        <input type="number" class="form-control"  name="expected_volumn" id="editexpected_volumn" placeholder="Expected Volume of Harvest" required value= "<?= (isset($in['expected_volumn']))? $in ['expected_volumn'] : ""  ?>">
      </div>
    </div>
  </div>
</div>

                <div class="mt-3">
                    
                    <button class="button btn-navigate-form-step" type="button" step_number="3">Prev</button>
                    <button class="button submit-btn" type="submit" >Save</button>
                </div>
                    </section>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" id="prevBtn">Previous</button>
                        <button type="button" class="btn btn-primary" id="nextBtn">Next</button>
                        <button type="submit" class="btn btn-success" id="submitBtn">Save</button>
                    </div>

            </form>


           
            </div>
        </div>
    </div>











                  <!-- Script for sorting the table -->
<script>
    function sortTable(columnIndex) {
        var table, rows, switching, i, x, y, shouldSwitch;
        table = document.getElementById("infoTable");
        switching = true;
        while (switching) {
            switching = false;
            rows = table.rows;
            for (i = 1; i < (rows.length - 1); i++) {
                shouldSwitch = false;
                x = rows[i].getElementsByTagName("td")[columnIndex];
                y = rows[i + 1].getElementsByTagName("td")[columnIndex];
                if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                    shouldSwitch = true;
                    break;
                }
            }
            if (shouldSwitch) {
                rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                switching = true;
            }
        }
    }

    function printTableRow(button) {
        var row = button.closest("tr");
        // Implement logic to print the row
        console.log("Printing row:", row);
    }
</script>

                  <!-- Script for sorting the table -->
<script>
    function sortTable(columnIndex) {
        var table, rows, switching, i, x, y, shouldSwitch;
        table = document.getElementById("infoTable");
        switching = true;
        while (switching) {
            switching = false;
            rows = table.rows;
            for (i = 1; i < (rows.length - 1); i++) {
                shouldSwitch = false;
                x = rows[i].getElementsByTagName("td")[columnIndex];
                y = rows[i + 1].getElementsByTagName("td")[columnIndex];
                if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                    shouldSwitch = true;
                    break;
                }
            }
            if (shouldSwitch) {
                rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                switching = true;
            }
        }
    }

    function printTableRow(button) {
        var row = button.closest("tr");
        // Implement logic to print the row
        console.log("Printing row:", row);
    }
</script>

            </div>
          </div>







          <?= $this-> include('/userinc/multiscript')?>

          <?= $this-> include('/userinc/end')?>
</body>
