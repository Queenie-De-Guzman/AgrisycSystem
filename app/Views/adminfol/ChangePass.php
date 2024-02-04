<?= $this-> include('/userinc/top')?>
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


     
          <!-- chat tab ends -->
   
  <div class="main-panel">
      
  <!-- password_form.php -->
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Password</h5>
        <form action="/password" method="post">
            <div class="form-group">
                <label for="inputEmail">Email </label>
                <input type="email" class="form-control" id="email" name="inputEmail" required>
            </div>
            <div class="form-group">
                <label for="password">New password</label>
                <input type="password" class="form-control" id="pass" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirm_password">Verify password</label>
                <input type="password" class="form-control" id="con_pass" name="confirm_password" required>
            </div>
            <button type="submit" class="btn btn-primary">Apply</button> <span> </span>
            <button type="reset" class="btn btn-primary">Cancel</button>
        </form>
    </div>
</div>





        
      
             
      
</div>
  </div>


 
</div>

















<?= $this-> include('/userinc/end')?>
  <!-- End custom js for this page-->
</body>


