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
      body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
      }
  
     
.sidebar {
   
    height: 100%;
        width: 250px;
        background-color: #020202;
        color: #fff;
        padding-top: 20px;
        position: fixed;
}

/* Sidebar links */
.sidebar a {
  display: block;
  color: rgb(223, 209, 209);
  padding: 16px;
  text-decoration: none;
}

/* Active/current link */
.sidebar a.active {
  background-color: #04AA6D;
  color: white;
}

/* Links on mouse-over */
.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

/* Page content. The value of the margin-left property should match the value of the sidebar's width property */
div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

/* On screens that are less than 700px wide, make the sidebar into a topbar */
@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

/* On screens that are less than 400px, display the bar vertically, instead of horizontally */
@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
      /* Main content styles */
      .content {
        margin-left: 250px;
        padding: 20px;
      }
  
      /* Navbar styles */
     
  
      /* Footer styles */
      .footer {
        background-color: #854040;
        color: #fff;
        padding: 10px;
        position: fixed;
        bottom: 0;
        left: 250px;
        width: calc(100% - 250px);
      }


      
        .nav-link{
            color: white;
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
      

       /* Add an active class to the active dropdown button */


       /* Style the dropdown button */

      
    </style>
  </head>
  <body>
   
   
  
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-dark ">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><h3 style="color: #faf6f6;">Fleet Track</h3></a>
        <button class="navbar-toggler bg-success" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          
        
          <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                        <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </form>
    
                <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                          <!-- <li><a class="dropdown-item" href="#!">Settings</a></li>
                          <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                          <li><hr class="dropdown-divider" /></li> -->
                          <li><a class="dropdown-item" href="#!">Logout</a></li>
                      </ul>
                  </li>
              </ul>
        </div>
     </div> 
    </nav>
 <!-- Sidebar -->
 <aside class="sidebar">
    <h3>Contents</h3>
    <nav>
      <ul>
        <li>Chapter 1</li>
        <li class="active">Chapter 2</li>
        <li>Chapter 3</li>
        <li>Chapter 4</li>
        <li>Chapter 5</li>
        <li>Chapter 6</li>
        <li>Chapter 7</li>
        <li>Chapter 8</li>
        <li>Chapter 9</li>
        <li>Chapter 10</li>
      </ul>
    </nav>
  </aside>
    
  <section class="main">
    <h2>Chapter 2</h2>
    <p>Ennui Williamsburg Echo Park pork belly, hella flannel single-origin coffee. Bicycle rights artisan beard Neutra cardigan Echo Park. Shoreditch flannel tote bag pug jean shorts post-ironic semiotics cornhole forage. Skateboard aesthetic synth leggings Banksy. Shabby chic PBR plaid helvetica dreamcatcher tousled, irony ethnic Tonx sustainable before they sold out McSweeney's. Hoodie Banksy freegan bicycle rights, aesthetic try-hard fap ethnic deep v fixie. Before they sold out +1 ugh, Bushwick Wes Anderson cred Marfa synth butcher jean shorts Terry Richardson.</p>
  
      <p>3 wolf moon blue bottle Truffaut ennui Bushwick, VHS organic skateboard authentic pickled tattooed brunch kogi freegan McSweeney's. Lomo skateboard american apparel, gastropub Schlitz food truck blue bottle. Salvia shoreditch ennui asymmetrical Williamsburg. Cliche umami mumblecore asymmetrical disrupt craft beer, selvage whatever sustainable american apparel YOLO Portland organic. Fashion axe mixtape salvia, Wes Anderson cred food truck DIY. Yr Pinterest Portland Truffaut four loko, semiotics Vice. Authentic lomo bitters, mlkshk raw denim beard narwhal jean shorts cliche tousled PBR.</p>
  
      <p>Wolf irony Schlitz, ethical gastropub disrupt cray. Skateboard High Life viral, try-hard pitchfork pour-over fap next level. High Life butcher meh, Vice single-origin coffee Marfa intelligentsia farm-to-table gentrify occupy cardigan helvetica salvia vegan. Bicycle rights chillwave keytar before they sold out, narwhal Brooklyn mustache. Plaid literally Schlitz Carles, stumptown swag chillwave Echo Park vinyl jean shorts McSweeney's roof party bespoke. Small batch banjo salvia Terry Richardson 3 wolf moon wolf twee hella. Occupy farm-to-table tattooed tousled twee pug.</p>
  
      <p>Disrupt umami kogi selvage hoodie. YOLO brunch chambray beard, Schlitz intelligentsia Austin. Fanny pack iPhone semiotics Tonx flexitarian, disrupt tote bag hoodie dreamcatcher Portland ugh. Truffaut plaid cardigan, ethnic mustache actually master cleanse Pinterest deep v brunch. Shoreditch kale chips Odd Future typewriter Echo Park, artisan pug pour-over disrupt american apparel wayfarers. DIY semiotics chillwave cardigan gluten-free freegan. Tumblr keffiyeh art party, jean shorts viral put a bird on it irony hella gluten-free whatever cornhole deep v.</p>
  </section>
  
    <!-- Footer -->
    <div class="footer col-lg-9">
      <div class="text-center p-4" style=" color: aliceblue;">
        © 2023 Copyright:
        <a class="text-reset fw-bold" href="#">Fleet track.com</a>
      
      </div>
    </div>
  

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>

</html>