<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Checkbox with Required Field</title>
</head>
<body>

<label for="checkbox">Check this box:</label>
<input type="checkbox" id="checkbox">
<div id="dataField" style="display: none;">
  <label for="data">Enter data:</label>
  <input type="text" id="data" required>
</div>

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

</body>
</html>