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
                                <th scope="col">Farm Location</th>
                                <th scope="col">No of Cans</th>
                                <th scope="col"> Seedling Date</th>
                                <th scope="col"> Expected No. of Area</th>
                                <th scope="col">Damaged By Typhoon (ha)</th>
                                <th scope="col"> Damaged By Heavy Rains(HA)</th>
                                <th scope="col">Total Damaged(HA)</h>
                                <th scope="col"> Number of Damages Cans </th>
                                <th scope="col">Standing Crop</th>
                                <th scope="col">Transplante Date</th>
                                <th scope="col">Expected Date of Harvest</th>
                                <th scope="col">Expected Area of Harvest(HA)</th>
                                <th scope="col">Expected Volume of Harvest (MT)</th>
                                <th scope="col">Action</th>
                        </tr>        
                            </thead>
                            <tbody>
                                <?php foreach ($info as $in) : ?>
                            <tr>
                                <td><?= $in['names'] ?></td>
                                <td><?= $in['location'] ?></td>
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
                                    <!-- Action buttons or links -->
                                    <a href="/delete/<?= $in['id'] ?>" class="btn btn-danger" data-toggle="tooltip" title="Delete">
                                            <i class="material-icons">delete</i>
                                        </a>
                                        <a href="/edit/<?= $in['id'] ?>" class="btn btn-primary" data-toggle="tooltip" title="Edit">
                                            <i class="material-icons">edit</i>
                                        </a>
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