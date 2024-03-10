<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car carrier fleet management system</title>
    <link rel="shortcut icon" type="image/jpg" href="/Images/fleet logo.PNG" style="border-radius: 50%;" >

    <link rel="stylesheet" href="about.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <style>
        .logo{
            border-radius: 50%;
        }
        .btn:hover{
            color: rgb(101, 170, 170);
            background-color: rgba(246, 247, 242, 0.911);
        }
        .nav-link{
            color: white;
        }
        .nav-link:hover{
            /* font-size: large; */
            font-size: 23px;
            color: rgb(255, 255, 255);
            font-family: 'Times New Roman', Times, serif;
            /* background-color: rgb(122, 179, 179); */
            background-color: #0575ba;
            border-radius: 30px;
        }
        .d-block{
          height: 500px;
          /* width: 100%; */
        }
        .footer{
          background-color: #0575ba;
        }
        .abc{
          color: aliceblue;
        }
        .cd{
          color: white;
        }
       .txt{
        color: aliceblue;
       }
       h3{
        text-align: center;
       }
      
       
       
       /* .gradient-custom { */
/* fallback for old browsers */
/* background: #bfc8fa; */

/* Chrome 10-25, Safari 5.1-6 */
/* background: -webkit-linear-gradient(to bottom right, rgb(147, 218, 251), rgb(187, 179, 235)); */

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
/* background: linear-gradient(to bottom right, rgb(179, 156, 182), rgb(166, 208, 241)) */
/* } */

/* .card-registration .select-input.form-control[readonly]:not([disabled]) {
font-size: 1rem;
line-height: 2.15;
padding-left: .75em;
padding-right: .75em;
}
.card-registration .select-arrow {
top: 13px;
} */
.gradient-custom
 {
  background-image: url(./Images/2.jpg);
  background-repeat: no-repeat;
  background-size: cover;
} 

.rr{
  background-color: aliceblue;
}

.cc{
    font-size: 18px;
    text-align: justify;
  text-justify: inter-word;
}

@media screen and (min-width: 992px)

{
  .team{
    margin-left: 170px;
  }
}



.card::after{
  position: absolute;
  z-index: -1;
  opacity: 0;
  -webkit-transition: all 0.6s  cubic-bezier(0,165.0.84,0.44,1);
  transition: all 0.6s cubic-bezier(0.165,0.84,0.44,1);
}

.card:hover{
  transform: scale(1.02,1.02);
  -webkit-transform: scale(1.02,1.02);
  backface-visibility: hidden;
  will-change:transform;
  box-shadow: 0 1rem 3rem rgba(0,0,0,.75) !important;
}

.card:hover::after{
  opacity: 1;
}




    
      </style>
</head>

<body>
  <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-success">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="./Images/fleet logo.PNG" class="logo" alt="remote" width="60px" height="60px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="./index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./Contactus.php">Contact us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="./aboutus.php" >
            About us
          </a>
          <!-- <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul> -->
        </li>
        <li class="nav-item">
          <a class="nav-link " href="./index.php#Services">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="./Signup.php">Signup</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#team">Team</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./customerform.php">Shipping Form</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./driverpg.php">Drivers</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="./trucks.php">Vehicles</a>
        </li>
    </ul>

    <a href="./table.php">
    <button  class="btn btn-primary me-2" type="submit">Pickup</button>
  </a>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-primary" type="submit">Search</button>
      </form>
    </div>
 </div> 
</nav>
<!-- read more -->
<div class="container-fluid py-5">
  <div class="container">
      <div class="row align-items-center">
          <div class="col-lg-5 pb-4 pb-lg-0">
              <img class="img-fluid w-100" src="./Images/gps.jpg" alt="">
              
          </div>
          <div class="col-lg-7">
              <h6 class="text-primary text-uppercase font-weight-bold"> GPS Tracking</h6>
              <h1 class="mb-4"> Real-time and historical location data</h1>
              <p style="color:rgb(145, 141, 141);" class="mb-4">GPS tracking uses Global Positioning System (GPS) technology to track the precise locations of each car carrier vehicle in real-time. Fleet managers can view the live locations on a digital map, enabling them to know the current status of all vehicles at any given moment. </p>
              
          </div>
      </div>
  </div>
  <!-- Video Modal -->
  
</div>
<!-- About End -->

<div class="container-fluid py-5 rr">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-5 pb-4 pb-lg-0 h-100">
        <img class="img-fluid w-100 " src="./Images/geofence.jpg" alt="">
      </div>
      <div class="col-lg-7">
        <h6 class="text-primary text-uppercase font-weight-bold">Geofencing</h6>
        <h1 class="mb-4"> Geofencing services</h1>
        <p style="color: rgb(145, 141, 141);" class="mb-4"> Geofencing allows to set virtual boundaries or geographical zones on the map. When a vehicle enters or exits these defined areas, the system gives notification. </p>
        <ul class="list-inline">
          <li><h6><i class="far fa-dot-circle text-primary mr-3 me-3"></i> Create virtual boundaries </h6>
          <li><h6><i class="far fa-dot-circle text-primary mr-3  me-3"></i> Route planning</h6></li>
          <li><h6><i class="far fa-dot-circle text-primary mr-3  me-3"></i> Reduce costs</h6></li>
      </ul>
        
      </div>
    </div>
  </div>
  
</div>

<br><br>

<div style="margin-bottom: 25px;" class="container ">
  <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-7"  >
      <h2 style="text-align: center; margin-bottom: 20px;" class="ce"> Vehicle location track </h2>
      <p  class="cc" >
        The Vehicle Location Module is a core component of the Car Carrier Fleet Management System, designed to provide comprehensive and real-time tracking and monitoring of your car carrier vehicles. The module utilizes GPS technology to track the exact location of each car carrier vehicle in real-time. Fleet managers can access live location data, enabling them to monitor fleet movements.  </p>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-5" >
      <h3  >Our services</h3>
      <ul style="list-style-type:none ; text-align: justify; margin-left: 115px;">
        <li>Delivery on Time  <i style="color: #0575ba; margin-left: 19px;" class="  fa-solid fa-truck-fast "></i></li>
        <li>Reliable Services  <i style="color: #0575ba; margin-left: 20px" class="fa-solid fa-laptop-file"></i></li>
        <li>Route Planning  <i style="color: #0575ba; margin-left: 30px" class="fa-sharp fa-solid fa-route"></i></li>
        <li>Driver Management  <i style="color: #0575ba; " class="fa-solid fa-truck-moving"></i></li>
        <li>Satisfication <i  style="color: #0575ba; margin-left: 57px" class="fa-solid fa-thumbs-up"></i></li>
        <li>Onine Payment  <i  style="color: #0575ba; margin-left: 33px" class="fa-sharp fa-solid fa-globe"></i></li>
        <li>Easy Handling   <i style="color: #346d91; margin-left: 40px" class="fa-sharp fa-solid fa-list-check"></i></li>

      </ul>

    </div>
  </div>
</div>


<!-- Cards -->
<div style="align-items: center; " class="container ">
  <h2  id="team" style="margin-bottom: 25px; text-align: center;">Our Team</h2>
  <div class="row team" >
    <div   class="col-sm-12 col-md-12 col-lg-5 py-3 py-sm-12  ">
      <div  class="card hv">
        <a href="./teamdetail.php"><img class="card-img-top" src="./Images/team-1.jpg" alt="Card image cap"></a>
        <div style="text-align: center;" class="card-body">
          <a style="text-decoration: none;" href="./teamdetail.php"><h5 style="color: black;" class="card-title">Muhammad Haroon</h5></a>
          <p class="card-text"><i class="fa-solid fa-phone me-2"></i>Conatct +923000000045</p>
          <p class="card-text"><i class="fa-solid fa-envelope me-2"></i>Email haroonamjad012@gmail.com</p>
          
          
        </div>
      </div>
    </div>
    <div  class="col-sm-12 col-md-12 col-lg-5 py-3 py-sm-12 ">
      <div  class="card hv">
        <a href="./teamdetail2.php"><img  class="card-img-top" src="./Images/team-1.jpg" alt="Card image cap"></a>
        <div style="text-align: center;" class="card-body">
          <a href="./teamdetail2.php" style="text-decoration: none;"><h5 style="color: black;" class="card-title">Abdul Moeed</h5></a>
          <p class="card-text"><i class="fa-solid fa-phone me-2"></i>Contact +923000000045</p>
          <p class="card-text"><i class="fa-solid fa-envelope me-2"></i>Email Conatact@gmail.com</p>
          
        </div>
      </div>
    </div> 

   

  </div>
</div>


<br><br>

 

<!-- Footer -->
<footer class="text-center text-lg-start bg-success text-muted">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3432.727882421472!2d73.14653207477592!3d30.641625690031457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3922b6e4dde0c501%3A0xc37ea3d85326203!2sCOMSATS%20University%20Islamabad%20-%20Sahiwal%20Campus!5e0!3m2!1sen!2s!4v1689072004404!5m2!1sen!2s" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span class="abc">Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div class="abc">
      <a href=" https://www.facebook.com/" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="https://www.twitter.com/" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="https://www.google.com" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="https://www.instagram.com" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="https://www.linkedin.com" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="https://www.github.com" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4 cd">
            <i class="fas fa-gem me-3"></i>Fleet Track
          </h6>
          <p class="txt">
            Our car hauler fleet management system is a comprehensive solution designed to efficiently manage and streamline the operations of a fleet of car haulers. 
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4 cd">
            Products
          </h6>
          <p class="txt">
            <a href="./Details1.php" class="text-reset">Maintainance and Inspection</a>
          </p>
          <p class="txt">
            <a href="./Details3.php" class="text-reset">Location Track</a>
          </p>
         
          <p class="txt">
            <a href="./Details2.php" class="text-reset">Efficient fleet operations</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4 cd">
            Useful links
          </h6>
          <p class="txt">
            <a href="./Contactus.php" class="text-reset">Contactus</a>
          </p>
          <p class="txt">
            <a href="./aboutus.php" class="text-reset">Aboutus</a>
          </p>
          <p class="txt">
            <a href="./index.php#Services" class="text-reset">Services</a>
          </p>
          
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4 cd">Contact</h6>
          <p class="txt"><i class="fas fa-home me-3"></i>Comsats University Rd, off GT road،, Sahiwal,</p>
          <p class="txt">
            <i class="fas fa-envelope me-3"></i>
            about@example.com
          </p>
          <p class="txt"><i class="fas fa-phone me-3"></i> + 92 334 567 88</p>
         
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(255, 255, 255, 0.05); color: aliceblue;">
    © 2023 Copyright:
    <a class="text-reset fw-bold" href="#">Fleet track.com</a>
  
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

</body>

</html>