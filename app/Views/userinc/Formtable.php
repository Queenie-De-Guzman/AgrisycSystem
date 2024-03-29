<br>
<br>
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"> Information Table</h4>
    <add button for edit and delete>
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
                                <th scope="col">Variety of Onion</th>
                                <th scope="col"> Seedling Date/Sowing Date</th>
                                <th scope="col"> Actual Date Transplated</th>
                                <th scope="col"> Expected No. of Area</th>
                                <th scope="col">Typhoon Name </th>
                                <th scope="col">Damaged By Typhoon (ha)</th>
                                <th scope="col"> Damaged By Heavy Rains(HA)</th>
                                <th scope="col">Total Damaged(HA)</h>
                                <th scope="col"> Number of Damages Cans </th>
                                <th scope="col"> Damage Area </th>
                               
                                <th scope="col"> Cause of Damages</th>
                                <th scope="col"> Disease </th>
                                <th scope="col"> Area Percent Damage </th>
                                <th scope="col">Final Area Planted (Standing Crop)</th>
                                <th scope="col">Total Area Planted </th>
                                <th scope="col">Transplante Date</th>
                                <th scope="col">Actual Area Harvest (HA)</th>
                                <th scope="col">Actual Production(HA)</th>
                                <th scope="col">Total Area  Harvested(HA)</th>
                                <th scope="col">Total Volume of Production (MT)</th>
                                <th scope="col">Local Market</th>
                                <th scope="col">No. of KG</th>
                                <th scope="col">PHP / KG</th>
                                <th scope="col">Cold Storage</th>
                                <th scope="col">No. of Bags</th>
                                <th scope="col">Location of Cold Storage</th>
                                <th scope="col">Others</th>
                                             
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
                                  <td><?= $in['varia'] ?></td>
                                  <td><?= $in['date'] ?></td>
                                  <td><?= $in['act'] ?></td>
                                  <td><?= $in['area'] ?></td>
                                  <td><?= $in['typhoonname'] ?></td>
                                  <td><?= $in['typhoon'] ?></td>
                                  <td><?= $in['heavy_rains'] ?></td>
                                  <td><?= $in['total_damages'] ?></td>
                                  <td><?= $in['cans_damages'] ?></td>
                                  <td><?= $in['HA'] ?></td>
                                  <td><?= $in['disease'] ?></td>
                                  <td><?= $in['list'] ?></td>
                                  <td><?= $in['per'] ?></td>
                                  <td><?= $in['standing_crop'] ?></td>
                                  <td><?= $in['planted'] ?></td>
                                  <td><?= $in['transplate_date'] ?></td>
                                  <td><?= $in['expected_date'] ?></td>
                                  <td><?= $in['production'] ?></td>
                                  <td><?= $in['Harvested'] ?></td>
                                  <td><?= $in['expected_volumn'] ?></td>
                                  <td><?= $in['Local'] ?></td>
                                  <td><?= $in['per_kg'] ?></td>
                                  <td><?= $in['php_per_kg'] ?></td>
                                  <td><?= $in['Cold'] ?></td>
                                  <td><?= $in['perkg'] ?></td>
                                  <td><?= $in['phpper_kg'] ?></td>
                                  <td><?= $in['OTHERS'] ?></td>
                                 
                                  <td> 
                                    
                                                    <a type="button"  class+="button" href="/edit/<?= $in['id']; ?>">Edit</a>
                                                    <button type="button" class="button" onclick="deletereport(<?= $in['id'];?>)">Delete</button>
                                                 
                                      
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












                  <!-- edit_report_modal.php -->

<div class="modal fade" id="editreportmodal" tabindex="-1" aria-labelledby="editreportmodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editreportmodalLabel">Edit Report</h5>
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
            <form action="/Forms/update" method="post" >
            <input type="hidden" name="id" id="editid">
            <section id="step-1" class="form-step">
            <h2 class="font-normal">Farmer Basic Information</h2>
                <!-- Step 1 input fields -->
    <!-- Step 1 input fields -->
    <div class="mt-3">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="editnames">Name of Farmer</label>
                    <input type="text" class="form-control" name="names" id="editnames" placeholder=" Surname, First Name, Middle Name" required value="<?= (isset($in['names']))? $in['names'] : "" ?>">
                </div>
                <div class="form-group">
                    <br>
                    <label for="FarmerLocation" style="font-size: 26px;" >Farmer Location</label>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="editregion" class="form-label">Region *</label>
                                <select name="region" class="form-control form-control-md" id="editregion"></select>
                                <input type="hidden" class="form-control form-control-md" name="region_text" id="region-text" required value="<?= (isset($in['region']))? $in['region'] : "" ?>">
                            </div>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <div class="form-group">
                                <label for="editprovince" class="form-label">Province *</label>
                                <select name="province" class="form-control form-control-md" id="editprovince"></select>
                                <input type="hidden" class="form-control form-control-md" name="province_text" id="province-text" required value="<?= (isset($in['province']))? $in['province'] : "" ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 mb-3">
                            <label for="editcity" class="form-label">City / Municipality *</label>
                            <select name="city" class="form-control form-control-md" id="editcity"></select>
                            <input type="hidden" class="form-control form-control-md" name="city_text" id="city-text" required value="<?= (isset($in['city']))? $in['city'] : "" ?>">
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label for="editbarangay" class="form-label">Barangay *</label>
                            <select name="barangay" class="form-control form-control-md" id="editbarangay"></select>
                            <input type="hidden" class="form-control form-control-md" name="barangay_text" id="barangay-text" required value="<?= (isset($in['barangay']))? $in['barangay'] : "" ?>">
                        </div>
                    </div>
                    <div class="form-group">
                    <label for="editcans">No. of Cans</label>
                    <input type="number" class="form-control" name="cans" id="editcans" placeholder="No of Cans" required value="<?= (isset($in['cans']))? $in['cans'] : "" ?>">
                </div>
                </div>
            </div>
            <div class="col-md-6">
           
                <div class="form-group">
                    <label for="editvaria">Variety of Onion</label>
                    <input type="text" class="form-control" name="var" id="editvaria" placeholder="Variety of Onion" required value="<?= (isset($in['varia']))? $in['varia'] : "" ?>">
                </div>
                <div class="form-group">
                    <label for="editdate">Seedling Date/Sowing Date</label>
                    <input type="date" class="form-control" name="date" id="editdate" placeholder="Seedling Date" required value="<?= (isset($in['date']))? $in['date'] : "" ?>">
                </div>
                <div class="form-group">
                    <label for="editact">Actual Date Transplanted</label>
                    <input type="date" class="form-control" name="act" id="editact" placeholder="Actual Date Transplanted" required value="<?= (isset($in['act']))? $in['act'] : "" ?>">
                </div>
                <div class="form-group">
                    <label for="editarea">Expected No. of Area (Ha)</label>
                    <input type="text" class="form-control" name="area" id="editarea" placeholder="Expected No of Area" required value="<?= (isset($in['area']))? $in['area'] : "" ?>">
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
                    <label for="edittyphoonname" style="font-size: 18px;">Typhoon Name</label>
                    <input type="text" class="form-control" name="typhoonname" id="edittyphoonname" placeholder="Typhoon Name" required value="<?= (isset($in['typhoonname'])) ? $in['typhoonname'] : "" ?>">
                </div>
      
                <div class="form-group">
                    <label for="edittyphoon" style="font-size: 18px;">Damaged By Typhoon (HA)</label>
                    <input type="text" class="form-control" name="typhoon" id="edittyphoon" placeholder="Damaged By Typhoon" required value="<?= (isset($in['typhoon'])) ? $in['typhoon'] : "" ?>">
                </div>
          
        
                <div class="form-group">
                    <label for="editheavy_rains" style="font-size: 18px;">Damaged By Heavy Rains (HA)</label>
                    <input type="text" class="form-control" name="heavy_rains" id="editheavy_rains" placeholder="Damaged By Heavy Rains" required value="<?= (isset($in['heavy_rains'])) ? $in['heavy_rains'] : "" ?>">
                </div>
    
          
                <div class="form-group">
                    <label for="edittotal_damages" style="font-size: 18px;">Total Damaged (HA)</label>
                    <input type="text" class="form-control" name="total_damages" id="edittotal_damages" placeholder="Total Damaged" required value="<?= (isset($in['total_damages'])) ? $in['total_damages'] : "" ?>">
                </div>
                </div>

                <div class="col-md-6">
                <div class="form-group">
                    <label for="editcans_damages" style="font-size: 18px;">Number of Damages Cans</label>
                    <input type="number" class="form-control" name="cans_damages" id="editcans_damages" placeholder="Number of Damages Cans" required value="<?= (isset($in['cans_damages'])) ? $in['cans_damages'] : "" ?>">
                </div>
    



      
                <label for="editHA" style="font-size: 18px;">Damaged Area (HA)</label>
                <div class="form-group">
                    <input type="number" class="form-control" name="HA" id="editHA" placeholder="Area (HA)" required value="<?= (isset($in['HA'])) ? $in['HA'] : "" ?>">
                </div>
    

    
                <label for="disease" style="font-size: 34px;">Cause of Damage</label>
                <div class="form-group">
                    <input type="checkbox" value="ON" name="disease" id="disease" onclick="scriptone()" required value="<?= (isset($in['disease']))? $in['disease'] : "" ?>">
                    <label for="editdisease"style="font-size: 20px;" >Disease</label>
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
                    <label for="editotherOptionInput" style="font-size: 18px;">Other (Specify)</label>
                    <input type="text" class="form-control" name="otherOptionInput" id="editotherOptionInput" placeholder="Specify" disabled required value="<?= (isset($in['otherOptionInput']))? $in['otherOptionInput'] : "" ?>">
                </div>
                <div class="form-group">
                    <label for="editper" style="font-size: 18px;">Area Percent Damage</label>
                    <input type="text" class="form-control" name="per" id="editper" placeholder="Area Percent Damage" required disabled required value="<?= (isset($in['per']))? $in['per'] : "" ?>">
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
                  <label for="editstanding_crop"> Final Area Planted (Standing Crop)</label>
                  <input type="text" class="form-control" name="standing_crop"  id="editstanding_crop" placeholder="Standing Crop" required value= "<?= (isset($in['standing_crop']))? $in ['standing_crop'] : ""  ?>">
                  
                  <div class="form-group">
                  <label for="editplanted">Total Area Planted </label>
                  <input type="date" class="form-control" name="planted" id="editplanted" placeholder="Total Area Planted" required value= "<?= (isset($in['planted']))? $in ['planted'] : ""  ?>">
                </div>

                <div class="form-group">
                  <label for="edittransplate_date">Transplante Date</label>
                  <input type="date" class="form-control" name="transplate_date" id="edittransplate_date" placeholder="Transplate Date" required value= "<?= (isset($in['transplate_date']))? $in ['transplate_date'] : ""  ?>">
                </div>
        </div>
        <div class="mt-3">
        
            <button class="button btn-navigate-form-step" type="button" step_number="1">Prev</button>
            <button class="button btn-navigate-form-step" type="button" step_number="4">Next</button>
        
        </div>
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
<label for="editexpected_date">Actual  Area Harvest (HA)</label>
<input type="text" class="form-control"   name="expected_date"  id="editexpected_date" placeholder="Actual Area Harvest" required value= "<?= (isset($in['editexpected_date']))? $in ['editexpected_'] : ""  ?>">
</div>


<div class="form-group">
<label for="editproduction">Actual  Production (HA)</label>
<input type="text" class="form-control"   name="production"  id="editproduction" placeholder="Actual Production" required value= "<?= (isset($in['production']))? $in ['production'] : ""  ?>">
</div>



<div class="form-group">
<label for="editHarvested">Total Area Harvested (HA)</label>
<input type="number" class="form-control"  name="Harvested" id="editHarvested" placeholder="Total Area Harvested" required value= "<?= (isset($in['Harvested']))? $in ['Harvested'] : ""  ?>">
</div>


<div class="form-group">
<label for="editexpected_volumn">Total Volume of Production  (MT)</label>
<input type="number" class="form-control"  name="expected_volumn" id="editexpected_volumn" placeholder="Total Volume of Production " required value= "<?= (isset($in['expected_volumn']))? $in ['expected_volumn'] : ""  ?>">
</div>

</div>

<div class="col-md-6">



    <label for="Local" style="font-size: 34px;">Market</label>
    <div class="form-group">
        <input type="checkbox" value="ON" name="Local" id="editLocal" onclick="toggleInputs()"required value="<?= (isset($in['Local']))? $in['Local'] : "" ?>">
        <label for="editLocal">Local Market</label>
    </div>
    <div class="form-group">
        <label for="editper_kg" style="font-size: 18px;">No. of KG</label>
        <input type="text" class="form-control" name="per_kg" id="editper_kg" placeholder="No. of KG" required disabled required value="<?= (isset($in['per_kg']))? $in['per_kg'] : "" ?>">
    </div>
    <div class="form-group">
        <label for="editphp_per_kg" style="font-size: 18px;">PHP / KG</label>
        <input type="text" class="form-control" name="php_per_kg" id="editphp_per_kg" placeholder="PHP/ KG" required disabled required value="<?= (isset($in['php_per_kg']))? $in['php_per_kg'] : "" ?>">
    </div>

      <div class="form-group">
        <input type="checkbox" value="ON" name="Cold" id="editCold" onclick="Inputs()" required value="<?= (isset($in['Cold']))? $in['Cold'] : "" ?>">
        <label for="Cold">Cold Storage</label>
    </div>
    <div class="form-group">
        <label for="editperkg" style="font-size: 18px;">No. of Bags</label>
        <input type="text" class="form-control" name="perkg" id="editperkg" placeholder="No. of KG" required disabled required value="<?= (isset($in['perkg']))? $in['perkg'] : "" ?>">
    </div>
    <div class="form-group">
        <label for="editphpper_kg" style="font-size: 18px;"> Location of Cold Storage</label>
        <input type="text" class="form-control" name="phpper_kg" id="editphpper_kg" placeholder="Location of Cold Storage" required disabled required value="<?= (isset($in['phpper_kg']))? $in['phpper_kg'] : "" ?>">
    </div>


      <div class="form-group">
        <input type="checkbox" value="ON" name="OTHER" id="editOTHER" onclick="puts()"required value="<?= (isset($in['OTHER']))? $in['OTHER'] : "" ?>">
        <label for="OTHER">Others</label>
    </div>
    
    <div class="form-group">
        <label for="OTHERS" style="font-size: 18px;">Others</label>
        <input type="text" class="form-control" name="OTHERS" id="editOTHERS" placeholder="Pls Specify" required disabled required value="<?= (isset($in['OTHERS']))? $in['OTHERS'] : "" ?>">
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