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




<br>
<br>
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"> LGU Member</h4>
            <p class="card-description">Report</p>

            <div class="table-responsive pt-3">
                <table class="table table-bordered" id="infoTable">
                    <thead>
                        <tr>
                            <th scope="col"> Email</th>
                            <th scope="col">Province</th>
                                <th scope="col">Usertype</th>
                                <th scope="col"> Created at</th>
                                <th scope="col">Action</th>

                            </thead>
                            <tbody>

                              <?php foreach ($user as $in) : ?>
                                <tr>
                                  <td><?= $in['email'] ?></td>
                                  <td><?= $in['Province'] ?></td>
                                  <td><?= $in['usertype'] ?></td>
                                  <td><?= $in['created_at'] ?></td>
                                  
                             
                                  <div class="col-sm-6">
    <td>
    <div class="col-sm-6">
                                        <a href="/delete/<?= $in['id'] ?>" class="btn btn-danger" data-toggle="tooltip" title="Delete">
                                            <i class="material-icons">delete</i>
                                        </a>
                                        <a href="/edit/<?= $in['id'] ?>" class="btn btn-primary" data-toggle="tooltip" title="Edit">
                                            <i class="material-icons">edit</i>
                                        </a>
                                       
                                    </div>
    </td>
</div>

                                </tr>

                              <?php endforeach ?>
                            </tbody>
                          </table>
                          <br>
                        </div>
                      </div>
                    </div>
                  </div>


            </div>
          </div>







          <?= $this-> include('/userinc/multiscript')?>

          <?= $this-> include('/userinc/end')?>
</body>
