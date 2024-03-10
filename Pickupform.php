<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car carrier fleet management system</title>
    <link rel="shortcut icon" type="image/jpg" href="/Images/fleet logo.PNG" style="border-radius: 50%;" >

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
  background-position: center;
} 

h5{
  text-align: center;
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
        <!-- <li class="nav-item">
          <a class="nav-link" href="./index.php#team">Team</a>
        </li> -->
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
<!-- Registration form -->
<section class="gradient-custom">
  <div class="container py-3">
    <div class="row justify-content-center align-items-center">
      <div class="col-sm-12 col-lg-7 col-xl-6">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4  p-md-4 ">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Pickup Form</h3>

            
            <form class="was-validated" method="POST" enctype="multipart/form-data">

              

              <div class="row">
                <div class="col-md-12 col-lg-6 col-sm-12 pb-2 mb-4 ">

                  <div class="form-outline">
                    <input type="text" id="Full Name" class="form-control form-control-lg form-control-sm" placeholder="Full Name" name="fullname" required/>

                  </div>

                </div>
                <div class="col-md-12 col-lg-6 col-sm-12 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="text" id="Contact" class="form-control form-control-lg form-control-sm"  placeholder="0300-123-4567" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}" name="contact" required/>

                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-12 col-lg-6 col-sm-12 mb-4 pb-2 ">

                  <div class="form-outline">
                    <input type="email" id="emailAddress" class="form-control form-control-lg form-control-sm" placeholder="Email" name="email" required />

                  </div>

                </div>
                
                <div class="col-md-12 col-lg-6 col-sm-12 mb-4 pb-2 ">

                  <div class="form-outline">
                    <input type="text" id="Pickup Location" class="form-control form-control-lg form-control-sm" placeholder="Pickup Location" name="pickup" required />

                  </div>

                </div>
                <div style="margin: auto; display: block;"   class="col-lg-6 col-md-12 col-sm-12 mb-4  " >
                  <div  class="form-outline">
                    
                    <input  type="text" id="Drop off Location" class="form-control form-control-lg form-control-sm" placeholder="Moving Date" name="movingdate" required />
                  </div>
                </div>

              </div>

              

              <div class="mt-4 pt-2 d-flex justify-content-center">
                <input class="btn btn-primary btn-lg" type="submit" value="Submit" name="Submit" />
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

 

<!-- Footer -->
<footer class="text-center text-lg-start bg-success text-muted">
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


<?php

include "./Admin/connection.php";  // connection 

if (isset($_POST['Submit'])) {
 
    // Variables       //Input fields name
    
    $fullname= $_POST['fullname'];
    $contact= $_POST['contact'];
    $email = $_POST['email'];
    $pickup= $_POST['pickup'];
    $movingdate= $_POST['movingdate'];
    
   
     

// insert query

   
    // $insert="INSERT INTO `contact us`(`id`, `first name`, `last name`, `email`, `contact`, `comment`) VALUES ('','$first_name','$last_name','$email','$contact','$comment')";
 $insert="INSERT INTO `pickup`(`id`, `full name`, `contact`, `email`, `pickup location`, `moving date`) VALUES ('','$fullname','$contact','$email','$pickup','$movingdate')";
// connect query

    $result = mysqli_query($conn, $insert);


// printing value

    if ($result) {
        echo "Data Add";
    }
    else {
      echo "not Add";
    }
}
?>