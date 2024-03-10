<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car carrier fleet management system</title>
    <link rel="shortcut icon" type="image/jpg" href="/Images/fleet logo.PNG" style="border-radius: 50%;" >
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">

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
       h1{
        text-align: center;
        
       }
       .ba{
        padding-bottom: 40px;
       }


       .cards-wrapper {
  display: flex;
  justify-content: center;
}
.card img {
  max-width: 100%;
  max-height: 100%;
}
       

.ct{
  color: black;
}     
 
@media screen and (min-width: 992px)

{
  .team{
    margin-left: 170px;
  }
}



.h {
    /* transition: box-shadow .3s; */
    float: left;
    
    transition: .3s transform cubic-bezier(.155,1.105,.295,1.12),.3s box-shadow,.3s -webkit-transform cubic-bezier(.155,1.105,.295,1.12);
  }
  .h:hover {
    /* box-shadow: 0 0 100px rgba(3, 3, 3, 0.2);  */
    transform: scale(1.01);
  box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
    
  }

.sh::after{
  position: absolute;
  z-index: -1;
  opacity: 0;
  -webkit-transition: all 0.6s  cubic-bezier(0,165.0.84,0.44,1);
  transition: all 0.6s cubic-bezier(0.165,0.84,0.44,1);
}

.sh:hover{
  transform: scale(1.02,1.02);
  -webkit-transform: scale(1.02,1.02);
  backface-visibility: hidden;
  will-change:transform;
  box-shadow: 0 1rem 3rem rgba(0,0,0,.75) !important;
}

.sh:hover::after{
  opacity: 1;
}

    .fa-solid{
      font-size: 50px;
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
          <a class="nav-link " href="#Services">Services</a>
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


  <!-- Carosel Start -->
  <div id="carouselExampleFade" class="carousel slide carousel-fade slide" data-bs-ride="carousel" data-bs-interval="1000">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
        aria-label="Slide 4"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"
        aria-label="Slide 5"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5"
        aria-label="Slide 6"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6"
        aria-label="Slide 7"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="7"
        aria-label="Slide 8"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="Images/2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="Images/1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="Images/4.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="Images/5.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="Images/7.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="Images/1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="Images/6.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="Images/2.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- Coursel End -->

<br>

<!-- feature cards -->
<div class="container">
  <div style="padding-top: 100px; padding-bottom: 100px;" class="row">
    <div style="text-align: center; border:#fff;" class="col-sm-12 col-md-12 col-lg-4 py-3 py-sm-0 " >
      <div  class="card" style="width: 20rem; border: none;">
        <i style="color: #0575ba;"  class="fa-solid fa-clock fa-2xl card-img-top mb-5"></i>
       
        <div class="card-body">
          <h5 class="card-title mb-4">Special title treatment</h5>
          <p class="card-text mb-3">With supporting text below as a natural lead-in to additional content.</p>
         
        </div>
      </div>
    </div>

    <div style="text-align: center; border:#fff;" class="col-sm-12 col-md-12 col-lg-4 py-3 py-sm-0 " >
      <div  class="card" style="width: 20rem; border: none;">
        <i style="color: #0575ba;"  class="fa-solid fa-money-bill fa-2xl card-img-top mb-5"></i>
       
        <div class="card-body">
          <h5 class="card-title mb-4">Special title treatment</h5>
          <p class="card-text mb-3">With supporting text below as a natural lead-in to additional content.</p>
        
        </div>
      </div>
    </div>
 
    <div style="text-align: center; border:#fff;" class="col-sm-12 col-md-12 col-lg-4 py-3 py-sm-0 " >
      <div  class="card" style="width: 20rem; border: none;">
        <i style="color: #0575ba;"  class="fa-solid fa-mobile-screen fa-2xl card-img-top mb-5"></i>
       
        <div class="card-body">
          <h5 class="card-title mb-4">Special title treatment</h5>
          <p class="card-text mb-3">With supporting text below as a natural lead-in to additional content.</p>
        
        </div>
      </div>
    </div>
 
 
  </div>
</div>

<h1  id="Services">Platform Services</h1>
<br>
<!-- Cards -->
<div class="container ba">
  <div class="row">
    
    <div class="col-sm-12 col-md-12 col-lg-4 py-3 py-sm-0 " >
      <a href="./Details1.php" style="text-decoration: none;">
      <div class="card hv sh"  >
        <img class="card-img-top" src="./Images/9.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title ct" > Maintenance and Inspections</h5>
          <p class="card-text ct"> With scheduled maintenance we ensure that each vehicle receives the necessary attention and care it needs at specific intervals. 
            </p>
          <a href="./Details1.php" class="btn btn-primary" style="margin-left: 100px; margin-top: 15px;">View more</a>
        </div>
      </div>
    </a>
    </div>
  
    <div class="col-sm-12 col-md-12 col-lg-4 py-3 py-sm-0">
      <a href="./Details2.php" style="text-decoration: none;">
      <div class="card hv sh" >
        <img class="card-img-top" src="./Images/12.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title ct">Efficient fleet operations</h5>
          <p class="card-text ct">Make fleet operations efficient by efficiently mapping the optimal paths for car deliveries ensuring timely and cost-effective transport.</p>
          <a href="./Details2.php" class="btn btn-primary" style="margin-left: 100px; margin-top: 15px;" >View more</a>
        </div>
      </div>
    </a>
    </div>

     <div class="col-sm-12 col-md-12 col-lg-4 py-3 py-sm-0">
      <a href="./Details3.php" style="text-decoration: none;">
      <div class="card hv sh" >
        <img class="card-img-top" src="./Images/8.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title ct">Vehicle location</h5>
          <p class="card-text ct">Vehicle location provides real-time tracking of your car carrier vehicles. It enables to know the current status of the vehicles.</p>
         
          <a href="./Details3.php" class="btn btn-primary" style="margin-left: 100px; margin-top: 15px;">View more</a>
       
        </div>
      </div>
    </a>
    </div>

  </div>
</div>
<!-- maps -->
<br>
<!-- cards carousel -->

<h1>Vehicle Maintainance</h1>
<br>
<div class="d-none d-md-block">
<div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="card-wrapper container-sm d-flex  justify-content-around">

       <div class="card hv sh" style="width: 18rem;  ">
        <a href="./invendetails1.php" style="text-decoration: none;">

          <h5 style="text-align: center; margin-top: 20px; margin-bottom: 20px;" class="card-title ct">Filter change</h5>

        <img  src="./Images/inn1.jpg" class="card-img-top" alt="..." style="margin-bottom: 20px; height: 10rem; ">
          <div class="card-body">
            
            <p class="card-text ct">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  
          </div>
       
        </a>
      </div>

        <div class="card hv sh" style="width: 18rem;">
          <a href="./invendetails2.php" style="text-decoration: none;">

            <h5 style="text-align: center; margin-top: 20px; margin-bottom: 20px;" class="card-title ct">Brake oil</h5>

          <img src="./Images/in2.jpg" class="card-img-top" alt="..." style="height: 10rem; " >
          <div class="card-body">

            
            <p class="card-text ct">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  
          </div>
        </a>
  
</div>


         <div class="card hv sh " style="width: 18rem;">
          <a href="./invendetails3.php" style="text-decoration: none;">
            <h5 style="text-align: center; margin-top: 20px; margin-bottom: 20px;" class="card-title ct">Engine oil</h5>

          <img src="./Images/in4.jpg" class="card-img-top" alt="..." style="height: 10rem; " >
          <div class="card-body">
            
            <p class="card-text ct">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  
          </div>
       
        </a>
       </div>



</div>
    </div>
    <div class="carousel-item">
      <div class="card-wrapper container-sm d-flex   justify-content-around">


       <div class="card hv sh " style="width: 18rem;">
        <a href="./invendetails4.php" style="text-decoration: none;">
          <h5 style="text-align: center; margin-top: 20px; margin-bottom: 20px;" class="card-title ct">Tire change</h5>

        <img src="./Images/in5.jpg" class="card-img-top" alt="..."  style="height: 10rem; ">
          <div class="card-body">
            
            <p class="card-text ct">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  
          </div>
  
        </a>
</div>

 <div class="card hv sh" style="width: 18rem;">
  <a href="./invendetails5.php" style="text-decoration: none;">
    <h5 style="text-align: center; margin-top: 20px; margin-bottom: 20px;" class="card-title ct">Fuel filling</h5>

  <img src="./Images/in6.jpg" class="card-img-top" alt="..." style="height: 10rem; ">
          <div class="card-body">
            
  
            
            <p class="card-text ct">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  
          </div>
 
        </a>
</div>


        <div class="card hv sh" style="width: 18rem;">
          <a href="./invendetails6.php" style="text-decoration: none;">
            <h5 style="text-align: center; margin-top: 20px; margin-bottom: 20px;" class="card-title ct">Battery check</h5>

          <img src="./Images/inn7.jpg" class="card-img-top" alt="..." style="height: 10rem; ">
          <div class="card-body">
            
            <p class="card-text ct">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  
          </div>
  
        </a>
</div>

    </div>

    </div>

    
  
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
</div>


<div class="d-md-none">
  <!-- The individual cards will be displayed on extra-small and small devices -->
  <div class="card-wrapper container-sm d-flex flex-wrap justify-content-around">
    <div class="card sh  " >
      <a href="./invendetails1.php" style="text-decoration: none;">

        <h5 style="text-align: center; margin-top: 20px; margin-bottom: 20px;" class="card-title ct">Filter change</h5>

      <img  src="./Images/inn1.jpg" class="card-img-top" alt="..." style="margin-bottom: 20px; ">
        <div class="card-body">
          
          <p class="card-text ct">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

        </div>
     
      </a>
    </div>

    <div class="card hv sh" >
      <a href="./invendetails2.php" style="text-decoration: none;">

        <h5 style="text-align: center; margin-top: 20px; margin-bottom: 20px;" class="card-title ct">Brake oil</h5>

      <img src="./Images/in2.jpg" class="card-img-top" alt="..." >
      <div class="card-body">

        
        <p class="card-text ct">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

      </div>
    </a>

</div>
<div class="card hv sh" >
  <a href="./invendetails3.php" style="text-decoration: none;">
    <h5 style="text-align: center; margin-top: 20px; margin-bottom: 20px;" class="card-title ct">Engine oil</h5>

  <img src="./Images/in4.jpg" class="card-img-top" alt="..." >
  <div class="card-body">
    
    <p class="card-text ct">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

  </div>

</a>
</div>

 <div class="card hv sh" >
        <a href="./invendetails4.php" style="text-decoration: none;">
          <h5 style="text-align: center; margin-top: 20px; margin-bottom: 20px;" class="card-title ct">Tire change</h5>

        <img src="./Images/in5.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            
            <p class="card-text ct">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  
          </div>
  
        </a>
</div>
<div class="card hv sh " >
  <a href="./invendetails5.php" style="text-decoration: none;">
    <h5 style="text-align: center; margin-top: 20px; margin-bottom: 20px;" class="card-title ct">Fuel filling</h5>

  <img src="./Images/in6.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            
  
            
            <p class="card-text ct">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  
          </div>
 
        </a>
</div>

<div class="card hv sh " >
  <a href="./invendetails6.php" style="text-decoration: none;">
    <h5 style="text-align: center; margin-top: 20px; margin-bottom: 20px;" class="card-title ct">Battery check</h5>

  <img src="./Images/inn7.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    
    <p class="card-text ct">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

  </div>

</a>
</div>
  </div>
</div>

<br><br>


<!-- Cards -->
<div style="align-items: center; " class="container ">
  <h2  id="team" style="margin-bottom: 25px; text-align: center;">Our Team</h2>
  <div class="row team" >
    <div   class="col-sm-12 col-md-12 col-lg-5 py-3 py-sm-12  ">
      <div  class="card hv sh">
        <a href="./teamdetail.php"><img class="card-img-top" src="./Images/team-1.jpg" alt="Card image cap"></a>
        <div style="text-align: center;" class="card-body">
          <a style="text-decoration: none;" href="./teamdetail.php"><h5 style="color: black;" class="card-title">Muhammad Haroon</h5></a>
          <p class="card-text"><i class="fa-solid fa-phone me-2"></i>Conatct +923000000045</p>
          <p class="card-text"><i class="fa-solid fa-envelope me-2"></i>Email haroonamjad012@gmail.com</p>
          
          
        </div>
      </div>
    </div>
    <div  class="col-sm-12 col-md-12 col-lg-5 py-3 py-sm-12 ">
      <div  class="card hv sh">
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