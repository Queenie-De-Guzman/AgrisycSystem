<script>
    function editreportmodal(id, names, region, province, city, barangay, cans, varia, date, act, area, typhoonname, typhoon, heavy_rains, total_damages, cans_damages, HA, disease, list, standing_crop, planted, transplate_date, expected_date, production, Harvested, expected_volumn, Local, per_kg, php_per_kg, Cold, perkg, phpper_kg, OTHERS) {
        document.getElementById('editid').value = id;
        document.getElementById('editnames').value = names;
        document.getElementById('editregion').value = region;
        document.getElementById('editprovince').value = province;
        document.getElementById('editcity').value = city;
        document.getElementById('editbarangay').value = barangay;
        document.getElementById('editcans').value = cans;
        document.getElementById('editvaria').value = varia;
        document.getElementById('editdate').value = date;
        document.getElementById('editact').value = act;
        document.getElementById('editarea').value = area;
        document.getElementById('edittyphoonname').value = typhoonname; 
        document.getElementById('edittyphoon').value = typhoon;
        document.getElementById('editheavy_rains').value = heavy_rains;
        document.getElementById('edittotal_damages').value = total_damages; 
        document.getElementById('editcans_damages').value = cans_damages;
        document.getElementById('editHA').value = HA;
        document.getElementById('editdisease').value = disease;
        document.getElementById('editlist').value = list;
        document.getElementById('editper').value = per; 
        document.getElementById('editstanding_crop').value = standing_crop;
        document.getElementById('editplanted').value = planted;
        document.getElementById('edittransplate_date').value = transplate_date;
        document.getElementById('editexpected_date').value = expected_date;
        document.getElementById('editproduction').value = production;
        document.getElementById('editHarvested').value = Harvested;
        document.getElementById('editexpected_volumn').value = expected_volumn;
        document.getElementById('editLocal').value = Local;
        document.getElementById('editper_kg').value = per_kg;
        document.getElementById('editphp_per_kg').value = php_per_kg;
        document.getElementById('editCold').value = Cold;
        document.getElementById('editperkg').value = perkg;
        document.getElementById('editphpper_kg').value = phpper_kg;
        document.getElementById('editOTHERS').value = OTHERS;

        $('#editreportmodal').modal('show');
    }
</script>



 <script>                     


   function deletereport(user_id) {
        if (confirm("Are you sure you want to delete this report?")) {
            $.ajax({
                type: 'POST',
                url: '/viewreport/delete/' + user_id,
                success: function(response) {
                    window.location.reload();
                },
                error: function(error) {
                    console.error('Error:', error);
                }
            });
        }
    }
  

  





        $(function(){
            $('#region').ph_locations({'location_type': 'regions'});
            $('#province').ph_locations({'location_type': 'provinces'});
            $('#city').ph_locations({'location_type': 'cities'});
            $('#barangay').ph_locations({'location_type': 'barangays'});
        });




    </script>



<script>
document.getElementById("checkbox").addEventListener("click", function() {
  var dataField = document.getElementById("dataField");
  if (this.checked) {
    dataField.style.display = "block";
  } else {
    dataField.style.display = "none";
    document.getElementById("data").value = ""; // Clear the input field when unchecked
  }
});
</script>


<script>
    function toggleInputs() {
        var checkBox = document.getElementById("Local");
        var numberOfKGInput = document.getElementById("per_kg");
        var phpPerKGInput = document.getElementById("php_per_kg");
        
        if (checkBox.checked) {
            numberOfKGInput.disabled = false;
            phpPerKGInput.disabled = false;
        } else {
            numberOfKGInput.disabled = true;
            phpPerKGInput.disabled = true;
        }
    }

    function Inputs() {
        var checkBox = document.getElementById("Cold");
        var numberOfKGInput = document.getElementById("perkg");
        var phpPerKGInput = document.getElementById("phpper_kg");
        
        if (checkBox.checked) {
            numberOfKGInput.disabled = false;
            phpPerKGInput.disabled = false;
        } else {
            numberOfKGInput.disabled = true;
            phpPerKGInput.disabled = true;
        }
    }




    function puts() {
        var checkBox = document.getElementById("OTHER");
        var numberOfKGInput = document.getElementById("OTHERS");

        
        if (checkBox.checked) {
            numberOfKGInput.disabled = false;
         
        } else {
            numberOfKGInput.disabled = true;
        
        }
    }

</script>

<script>
  function scriptone() {
    const checkBox = document.getElementById("disease");
    const listElem = document.getElementById("list");
    const perInput = document.getElementById("per");

    if (checkBox.checked == true) {
      listElem.disabled = false;
      perInput.disabled = false;
      perInput.setAttribute("required", "required");
    } else {
      listElem.disabled = true;
      perInput.disabled = true;
      perInput.removeAttribute("required");
      document.getElementById("otherOption").style.display = "none"; // Hide the "Other" input field
    }
  }

  // Function to show "Other" input field when "Other" option is selected
  function showOtherOption() {
    const listElem = document.getElementById("list");
    const otherOptionInput = document.getElementById("otherOptionInput");

    if (listElem.value === "other") { // Check if "Other" option is selected
      otherOptionInput.disabled = false;
      otherOptionInput.setAttribute("required", "required");
      document.getElementById("otherOption").style.display = "block"; // Show the "Other" input field
    } else {
      otherOptionInput.disabled = true;
      otherOptionInput.removeAttribute("required");
      document.getElementById("otherOption").style.display = "none"; // Hide the "Other" input field
    }
  }

  // Disable dropdown and input fields initially
  const listElem = document.getElementById("list");
  const perInput = document.getElementById("per");
  listElem.disabled = true;
  perInput.disabled = true;
</script> = true;
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
        <!-- Include jQuery library -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
    <!-- Include your jQuery plugin script -->
    <script src="https://f001.backblazeb2.com/file/buonzz-assets/jquery.ph-locations.js"></script>
    <script src="<?= base_url() ?>dashboard/js/your-plugin-script.js"></script>
 <script src="<?= base_url() ?>dashboard/js/jquery.ph-locations.js"></script>


 <script src="<?= base_url() ?>dashboard/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="<?= base_url() ?>dashboard/vendors/chart.js/Chart.min.js"></script>
  <script src="<?= base_url() ?>dashboard/js/datatables.net/jquery.dataTables.js"></script>
  <script src="<?= base_url() ?>dashboard/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="<?= base_url() ?>dashboard/js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?= base_url() ?>dashboard/js/off-canvas.js"></script>
  <script src="<?= base_url() ?>dashboard/js/hoverable-collapse.js"></script>
  <script src="<?= base_url() ?>dashboard/js/template.js"></script>
  <script src="<?= base_url() ?>dashboard/js/settings.js"></script>
  <script src="<?= base_url() ?>dashboard/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?= base_url() ?>dashboard/js/dashboard.js"></script>

  <script src="<?= base_url() ?>dashboard/js/Chart.roundedBarCharts.js"></script>
 

<!-- JavaScript Code -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="<?= base_url() ?>dashboard/js/dashboard.js"></script>
  <script src="<?= base_url() ?>dashboard/vendors/echarts/echarts.min.js"></script>    
 <!-- Include Chart.js library -->
 <script src="<?= base_url() ?>dashboard/vendors/echarts/echarts.min.js"></script>
 <script src="<?= base_url() ?>dashboard/vendors/echarts/echarts.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/5.3.0/echarts.min.js"></script>
 <script src="https://f001.backblazeb2.com/file/buonzz-assets/jquery.ph-locations-v1.0.2.js"></script>

<!-- Include ECharts library -->
<script src="https://cdn.jsdelivr.net/npm/echarts@5.2.2/dist/echarts.min.js"></script>

<script src="<?= base_url() ?>dashboard/js/ph-address-selector.js"></script>

</html>