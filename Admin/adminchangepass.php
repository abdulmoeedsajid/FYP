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
} 

h5{
  text-align: center;
}
    
      </style>
</head>

<body>
  
    <section class="gradient-custom vh-100" style="background-color: #508bfc;" >
        <div class="container py-3">
          <div class="row d-flex justify-content-center align-items-center">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card bg-white text-dark" style="border-radius: 1rem;">
                <div autocomplete="off"  class="card-body p-5 text-center ">
      
                  <div class="mb-4">
      
                    <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                    <p class="text-dark-50 mb-4">Please enter your login and password!</p>
      
                    <form class="form-outline form-white mb-4">
                     
                      <input type="email" id="typeEmailX" class="form-control form-control-lg form-control-sm" placeholder="Email"/>
                      
                    </form>
      
                    <form class="form-outline form-white mb-4">
                     
                      <input type="password" id="typePasswordX" class="form-control form-control-lg form-control-sm" placeholder="Reset Password" />
                     
                    </form>
      
                    <form class="form-outline form-white mb-4">
                     
                      <input type="password" id="typePasswordX" class="form-control form-control-lg form-control-sm" placeholder="Confirm Password" />
                     
                    </form>
      
                    <a href="./loginadmin.php">
                    <button class="btn btn-primary btn-lg px-5" type="submit">Change Password</button>
                  </a>
      
                  </div>
      
                  
      
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>

</html>