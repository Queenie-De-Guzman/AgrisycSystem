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
<body>
<div class="hero_area">
      <div class="hero_bg_box">
           <img src="<?=base_url()?>assets_landingpage/images/BG.png" alt="">
                       
      </div>
      <header class="header_section" style="position: fixed; top: 0; left: 0; z-index: 9999; width: 100%; height: 100px; background-color: #00a087;">
        <div class="logo" style="position: fixed; top: 0; left: 0;height: 0; width: 10;">
               <img src="<?=base_url()?>assets_landingpage/images/B.png" height="100" width="100">
                <a href="/AdminLogin"> <img src="<?=base_url()?>assets_landingpage/images/L.png" height="100" width="100"></a>
             
            </div>

        <div class="container">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="/">
                <span>
                Agrisync
                </span>
            </a>
            

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <span></span>
                <li class="nav-item  active ">
                    <a class="nav-link" href="/About "> About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/Contact">Contact</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link"  href="/signin">Login</a>
                   
            </li>
            <li class="nav-item">
            
            <a class="nav-link"  href="/registerview">Register</a>
        </li>
                </ul>
            </div>
            </nav>
        </div>
        </header>
        <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <h1>
                      Onion Report MIMAROPA
                    </h1>
                   <h1><p>
                      Mandated to contribute for attainment of the food self sufficiency, 
                      <br> 
                      economic growth and enhancement of consumers health and welfare. 
                      <br>
                      It also promotes the production, processing, marketing and distribution
                      <br>
                       of high value crops.
                    </p>  </h1> 
                    </div>
                  </div>
                </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <h1>
                      Vision
                    </h1>
                    <p>
                      A productive farming community
                    </p>
                    <br>
                     <h1> 
                      Mission
                     </h1>
                   <p>
                     Empowers high value crops producers
                     Helps attain food self sufficiency and economic growth
    
                   </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container ">
                <div class="row">
                  <div class="col-md-7">
                    <div class="detail-box">
                      <h1>
                      
                        High Value Crop Development Program
                      </h1>
                      <p>
                        Mandated to contribute for attainment of the food self sufficiency, economic growth and enhancement of consumers health and welfare. It also promotes the production, processing, marketing and distribution of high value crops.
                      </p>
                      </div>
                    </div>
                  </div>
              </div>
              </div>
              <ol class="carousel-indicators">
              <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
              <li data-target="#customCarousel1" data-slide-to="1"></li>
              <li data-target="#customCarousel1" data-slide-to="2"></li>
            </ol>
          </div>
            </div>
          </section>
      
    </div>
    <!-- department section -->

    <section class="department_section layout_padding">
  <div class="department_container">
    <div class="container ">
      <div class="heading_container heading_center">
        <h2>
          Our Departments
        </h2>
        <p>
          Modernizing and empowering the farming and fishing communities
          </p>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="box ">
            <div class="img-box">
              <img src="<?=base_url()?>assets_landingpage/images/livestock.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Livestock Program
              </h5>
              <p>
                To accelerate the development of the poultry and livestock sector by improving its production and increasing the stakeholders' profitability; leading to livestock industry to be seen as an agribusiness venture anchored on food security and farmers profitability.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="box ">
            <div class="img-box">
              <img src="<?=base_url()?>assets_landingpage/images/organic.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Organic Agriculture Program
              </h5>
              <p>
                promote, propagate, further develop and implement the practice of organic agriculture in the Philippines towards a competitive and sustainable organic agriculture industry.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="box ">
            <div class="img-box">
              <img src="<?=base_url()?>assets_landingpage/images/saad.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Special Area for Agricultural Development Program
              </h5>
              <p>
                help alleviate poverty among the marginalized sectors of agriculture and fishery of the thirty (30) priority provinces identified by the Philippine Statistics Authority.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="box ">
            <div class="img-box">
              <img src="<?=base_url()?>assets_landingpage/images/hvcd.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
             
                High Value Crop Development Program
              </h5>
              <p>
                to promote the production, processing, marketing and distribution of high value crops. Previously the program was called as High Value Commercial Crops Program and since it was aligned with the RA 7900, the program is now known as High Value Crops Development Program (HVCDP).
              </p>
            </div>
          </div>
     </div>
    </div>
  </div>
</div>
</section>

<!-- end department section -->

<section class="about_section layout_margin-bottom">
  <div class="container  ">
    <div class="row">
      <div class="col-md-6 ">
        <div class="img-box">
          <img src="<?=base_url()?>assets_landingpage/images/d1.jpg" alt="">
        </div>
      </div>
      <div class="col-md-6">
        <div class="detail-box">
          <div class="heading_container">
            <h1>
              About <span>Us</span>
            </h1>
            <br>
            <h2>
              
             Engr. Maria Christine C. Inting, MPM
            </h2>
          </div>
          <p>
            For over 23 years the newly designated Director IV has been giving her commitment and dedication to serving the agriculture sector. 

            She started her career at the Department of Agriculture in 1999 as a contractual Research Assistant at the Region IV Southern Tagalog Integrated Agricultural
             Research Center under the Comprehensive Irrigation Development Umbrella Program, a special project of Department of Agriculture and 
             University of the Philippines-Los Baños. After four years, she became a permanent employee as an Agriculture Technologist I at the Department of Agriculture MIMAROPA. 
             Her career forwarded as Engineer I for six years, and was designated as the Corn Program Regional Focal Person in 2015. 
          </p>
          <a href="/About">
            Read More
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="doctor_section layout_padding">
      <div class="container">
        <div class="heading_container heading_center">
          <h2>
           Provincial Profile
          </h2>
           </div>
                 <div class="col-sm-6 col-lg-4 mx-auto">
            <div class="box">
              <div class="img-box">
                <img src="<?=base_url()?>assets_landingpage/images/mar.png"  alt="">
              </div>
              <div class="detail-box">
               
                <h5>
                    Marinduque
                </h5>
                
              </div>
            </div>
          </div>
              <div class="col-sm-6 col-lg-4 mx-auto">
            <div class="box">
              <div class="img-box">
                 <img src="<?=base_url()?>assets_landingpage/images/pal.png" alt="">
              </div>
              <div class="detail-box">
                  <h5>
                  Palawan
                </h5>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 mx-auto">
            <div class="box">
              <div class="img-box">
                <img src="<?=base_url()?>assets_landingpage/images/oc.png" alt="" height="600" width="90">
              </div>
              <div class="detail-box">
                <h5>
                   Occidental Mindoro
                </h5>
               </div>
            </div>
          </div>
        <div class="col-sm-6 col-lg-4 mx-auto">
            <div class="box">
              <div class="img-box">
  
                <img src="<?=base_url()?>assets_landingpage/images/ro.png" alt="">
              </div>
              <div class="detail-box">
                  <h5>
                  Romblon
                </h5>
                </div>
            </div>
          </div>
          <div class="row">
          <div class="col-sm-6 col-lg-4 mx-auto">
            <div class="box">
              <div class="img-box">
                <img src="<?=base_url()?>assets_landingpage/images/or.png" alt="" height="600" width="90">
              <div class="detail-box">
              
                <h5>
                    Oriental Mindoro
                </h5>
               </div>
            </div>
          </div>
          </div>      
        </div>      
                <div class="btn-box">
          <a href="/About">
            View All
          </a>
        </div>
        </section>
  
    <!-- end doctor section -->
    <section class="doctor_section layout_padding">
      <div class="container">
        <div class="heading_container heading_center">
          <h2>
           Official
          </h2>
           </div>
        <div class="row">
          <div class="col-sm-6 col-lg-4 mx-auto">
            <div class="box">
              <div class="img-box">
                <img src="<?=base_url()?>assets_landingpage/images/d5.jpg" alt="">
              </div>
              <div class="detail-box">
                <div class="social_box">
                <h2>     Regional Technical Director    </h2>
                </div>
                <h5>
                  Celso Olido, Ph.D.
                </h5>
                <h6 class="">
                  OIC, RTD for Operations
                </h6>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 mx-auto">
            <div class="box">
              <div class="img-box">
                <img src="<?=base_url()?>assets_landingpage/images/d2.jpg" alt="">
              </div>
              <div class="detail-box">
                <div class="social_box">
            
                   <h2> Division Chief  </h2>
                 
                </div>
                <h5>
                  Ma. Theresa Aguilar
                </h5>
                <h6 class="">
                  Field Operations Division
                </h6>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 mx-auto">
            <div class="box">
              <div class="img-box">
                <img src="<?=base_url()?>assets_landingpage/images/d4.jpg" alt="">
              </div>
              <div class="detail-box">
                <div class="social_box">
                 <h2> Banner Program</h2> 
                </div>
                <h5>
                  Renie Madriaga
                </h5>
                <h6 class="">
                  High Value Crop Development
                </h6>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 mx-auto">
            <div class="box">
              <div class="img-box">
  
                <img src="<?=base_url()?>assets_landingpage/images/d3.jpg" alt="">
              </div>
              <div class="detail-box">
                <div class="social_box">
                  <h2>Agricultural Program Coordinating Officer (APCO)</h2>
                </div>
                <h5>
                  Artemio Casareno
                </h5>
                <h6 class="">
                  Oriental Mindoro
                </h6>
  
  
              </div>
            </div>
          </div>
        </div>
        <div class="btn-box">
          <a href="/cont">
            View All
          </a>
        </div>
      </div>
    </section>
  
    <!-- end doctor section -->

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
                <a class="" href="/logins">
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
            <a href="">3F1</a>
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