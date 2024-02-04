<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agrisync</title>
   
  <!-- bootstrap core css -->
  <link rel="stylesheet"  href="<?= base_url() ?>assets_landingpage/css/bootstrap.css">
<!-- favicon -->
<link rel="shortcut icon" type="image/png" href="<?= base_url() ?>assets_landingpage/img/logo.png">
<!-- fonts style -->
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

<!--owl slider stylesheet -->
<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

<!-- font awesome style -->
<link rel="stylesheet" href="<?= base_url() ?>assets_landingpage/css/font-awesome.min.css">

<!-- Custom styles for this template -->
<link rel="stylesheet" href="<?= base_url() ?>assets_landingpage/css/style.css">
<!-- responsive style -->
<link rel="stylesheet" href="<?= base_url() ?>assets_landingpage/css/responsive.css">
</head>
<style>
  .gradient-custom-2 {
    /* fallback for old browsers */
    background: #fccb90;

    /* Chrome 10-25, Safari 5.1-6 */
    background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);

    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);

    /* Add background image */
    background-image: url('assets_landingpage/images/C.jpg');
    background-size: cover; /* Adjust as needed */
    background-position: center; /* Adjust as needed */
  }

  @media (min-width: 768px) {
    .gradient-form {
      height: 100vh !important;
    }
  }

  @media (min-width: 769px) {
    .gradient-custom-2 {
      border-top-right-radius: .3rem;
      border-bottom-right-radius: .3rem;
    }
  }
</style>
<body>
<header class="header_section" style="position: fixed; top: 0; left: 0; z-index: 9999; width: 100%; height: 100px; background-color: #00a087;">

<div class="logo" style="position: fixed; top: 0; left: 0;height: 0; width: 10;">
   <a href="/"> <img src="<?=base_url()?>assets_landingpage/images/L.png" height="100" width="100"></a>
   <a class="navbar-brand" href="/">
    
        
    <span>
    Agrisync 
    </span>        


</a>

</div>



</header>

 
<br>

<section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
 
                  <img src="<?=base_url()?>assets_landingpage/images/agri.png"   
                    style="width: 185px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1"> Login</h4>
                </div>

                <form action="/loginauth" method="post">
                  <p></p>


                  <div class="form-outline mb-4">
                  <span><i class="fa fa-user"></i> Email Address</span>
							<input type="text" name="email"  class="form-control" value="<?= set_value('email') ?>" placeholder="Email Address" required>
                  </div>

       <div class="form-outline mb-4">
       <span><i class="fa fa-lock"></i>  Password</span>
                    <input type="password" name="password" class="form-control"  placeholder="Password" required/>
                  
                  </div>

                
                  <div class="text-center pt-1 mb-5 pb-1">
                
                     <button class="btn btn-primary w-100" type="submit">Login</button>
                   </div>
                   <div class="col-12">
                     <p class="small mb-0">Don't have account?<a href="/registerview">Create an account</a></p>
                   </div>

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
              <div class="text-center">
              <img src="<?=base_url()?>assets_landingpage/images/hvcd.png"   
                    style="width: 100px;" alt="logo">
                    <h4 class="mb-4">High Value Crop Development Program</h4>
              </div>
       
                <p class=" mb-10">  Mandated to contribute for attainment of the food 
                    self sufficiency, economic growth and enhancement of consumers health
                    and welfare. It also promotes the production, processing, marketing and
                    distribution of high value crops.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<br>
<Br>
<Br>
<br>


    
    <!-- footer section -->
    <footer class="footer_section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 footer_col">
            <div class="footer_contact">
              <h4>
              Contact Us
              </h4>
              <div class="contact_link_box">
                <a href="">
                  <i class="fa fa-map-marker" aria-hidden="true"></i>
                  <span>
                    Address: J.P. Rizal Street, Barangay Camilmil, Calapan City, Oriental Mindoro
                  </span>
                </a>
                <a href="">
                  <i class="fa fa-phone" aria-hidden="true"></i>
                  <span>
                    Telefax: 8927-43-50
                  </span>
                </a>
                <a href="">
                  <i class="fa fa-envelope" aria-hidden="true"></i>
                  <span>
                    Email: mimaropa@mail.da.gov.ph
                  </span>
                </a>
              </div>
            </div>
            <div class="footer_social">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 footer_col">
            <div class="footer_detail">
              <h4>
                About
              </h4>
              <p>
                A centralized Website for Onion Report in LGU MIMAROPA.
                All content is in the public domain unless otherwise stated.
              </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-2 mx-auto footer_col">
            <div class="footer_link_box">
              <h4>
                Links
              </h4>
              <div class="footer_links">
                <a class="active" href="#">
                  Home
                </a>
                <a class="" href="#">
                  About
                </a>
                <a class="" href="#">
                Contact
                </a>
                <a class="" href="#">
                  Login
                </a>
              </div>
            </div>
          </div>          <div class="img-box">
                <img src="<?=base_url()?>assets_landingpage/images/seal.png" alt="" width="300" height="300">
              </div>
      
        </div>
        <div class="footer-info">
          <p>
            &copy; <span id="displayYear"></span> All Rights Reserved By
            <a href="">Collage of Computer Studies</a>
          </p>
        </div>
      </div>
    </footer>
    <!-- footer section -->
  
  <!-- jQery -->
  <script src="<?=base_url()?>assets_landingpage/js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script  src="<?=base_url()?>assets_landingpage/js/bootstrap.js"></script>
  <!-- owl slider -->
  <script  src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script  src="<?=base_url()?>assets_landingpage/js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map --> 


</body>
</html>