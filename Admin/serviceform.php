<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styles.css" />
    <title>Bootstap 5 Responsive Admin Dashboard</title>
</head>
<style>
   
   .gradient-custom
 {
 background-color: aliceblue;
  background-repeat: no-repeat;
  background-size: cover;
} 

h5{
  text-align: center;
}

table {
            font-size: small;
            border-collapse: collapse;

            max-width: 90%;
             height: 100%;
        }

        th, td {
            border: 1px solid rgb(243, 236, 236);
            padding: 8px;
            text-align: center;
        }

        .text-center {
         text-align: center;
       }

       .table th {
  background-color: #5d8296;
  color: #ffffff;
  font-weight: bold;
}



      

@media screen and (max-width: 770px) {
  table {
    border: 0;
  }

  table caption {
    font-size: 1.3em;
  }
  
  table thead {
    border: none;
    clip: rect(0 0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
  }
  
  table tr {
    border-bottom: 3px solid #ddd;
    display: block;
    margin-bottom: .625em;
  }
  
  table td {
    border-bottom: 1px solid #ddd;
    display: block;
    font-size: .8em;
    text-align: right;
  }
  
  table td::before {
    /*
    * aria-label has no advantage, it won't be read inside a table
    content: attr(aria-label);
    */
    content: attr(data-label);
    float: left;
    font-weight: bold;
    text-transform: uppercase;
  }
  
  table td:last-child {
    border-bottom: 0;
  }
}
.button-container {
            display: flex;
            justify-content: right;
        }

    </style>
<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
          <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                  class="fas fa-user-secret me-2"></i>Codersbite</div>
          <div class="list-group list-group-flush my-3">
              <a href="./index.php" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                      class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
              <a href="./user.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                      class="fa-solid fa-user me-2"></i>User</a>
              <a href="./shipping.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                      class="fas fa-truck me-2"></i>Shipping</a>


                      <a href="./driver.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"> <i
                        class="fa-solid fa-user-group me-1"></i>driver</a>

                        <a href="./Trucklist.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                          class="fas fa-truck me-2"></i>Vehicles</a>

                          <a href="./viewfenance.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fa-solid fa-money-bills me-2"></i>Expense</a>

                            <a href="./vendorlist.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fa-solid fa-industry me-2"></i>Vendor</a>


                            
                       
                       
                     
                   
                 

                          <a href="./orderlist.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                            class="fas fa-truck me-2"></i>Order Assign</a>

                            <a href="#submenu1" data-bs-toggle="collapse" class="nav-link  list-group-item list-group-item-action bg-transparent second-text fw-bold">
                              <i class="fa-solid fa-screwdriver-wrench me-2"></i><span class=" d-none d-sm-inline"></span>Service<i  class="ri-arrow-down-s-line ms-1 mt-5"></i> </a>
                          <ul class="collapse  nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                              <li class="w-100">
                                  <a style="margin-left: 80px;" href="./viewservice.php" class="nav-link px-0 bg-transparent second-text fw-bold "> <span class="d-none d-sm-inline "></span>Service  </a>
                              </li>
                              <li>
                                  <a style="margin-left: 80px;" href="./viewserviceremainder.php" class="nav-link px-0 bg-transparent second-text fw-bold "> <span class="d-none d-sm-inline"></span>Service remainder </a>
                              </li>
                          </ul>
                          
                          <a href="#submenu2" data-bs-toggle="collapse" class="nav-link  list-group-item list-group-item-action bg-transparent second-text fw-bold">
                            <i class="fa-solid fa-square-check me-2"></i> <span class=" d-none d-sm-inline"></span>Inspection<i  class="ri-arrow-down-s-line ms-1 mt-5"></i> </a>
                     
                            <ul class="collapse  nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                            <li class="w-100">
                                <a style="margin-left: 80px;" href="./viewInspection.php" class="nav-link px-0 bg-transparent second-text fw-bold "> <span class="d-none d-sm-inline "></span>Inspection  </a>
                            </li>
                            <li>
                                <a style="margin-left: 80px;" href="./viewinspectionremainder.php" class="nav-link px-0 bg-transparent second-text fw-bold "> <span class="d-none d-sm-inline"></span>Inspection remainder </a>
                            </li>
                        </ul>

                        <a href="#submenu3" data-bs-toggle="collapse" class="nav-link  list-group-item list-group-item-action bg-transparent second-text fw-bold">
                          <i class="fa-solid fa-gear me-2"></i><span class=" d-none d-sm-inline"></span>Equipment<i  class="ri-arrow-down-s-line ms-1 mt-5"></i> </a>
                      <ul class="collapse  nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                          <li class="w-100">
                              <a style="margin-left: 80px;" href="./Equipmentslist.php" class="nav-link px-0 bg-transparent second-text fw-bold "> <span class="d-none d-sm-inline "></span>Equipment </a>
                          </li>
                          <li>
                              <a style="margin-left: 80px;" href="./assgEquipment.php" class="nav-link px-0 bg-transparent second-text fw-bold "> <span class="d-none d-sm-inline"></span>Assign Equipment</a>
                          </li>
                      </ul>


                      <a href="./userprofile.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fa-solid fa-user me-2"></i>Profile</a>

                        <a href="./adminlist.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fa-solid fa-users me-2"></i>Users</a>

                          <a href="" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fa-sharp fa-solid fa-right-from-bracket me-2"></i>Logout</a>

                            
                 
                   
               
             

                      <!-- <a href="#submenu1" data-bs-toggle="collapse" class="nav-link  list-group-item list-group-item-action bg-transparent second-text fw-bold">
                          <i
                          class="fa-solid fa-user-group me-1"></i> <span class=" d-none d-sm-inline"></span>Driver<i  class="ri-arrow-down-s-line ms-1 mt-5"></i> </a>
                      <ul class="collapse  nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                          <li class="w-100">
                              <a style="margin-left: 80px;" href="./driverform.php" class="nav-link px-0 bg-transparent second-text fw-bold "> <span class="d-none d-sm-inline "></span>Add driver  </a>
                          </li>
                          <li>
                              <a style="margin-left: 80px;" href="./driver.php" class="nav-link px-0 bg-transparent second-text fw-bold "> <span class="d-none d-sm-inline"></span>View driver  </a>
                          </li>
                      </ul> -->

                      <!-- <a href="#submenu2" data-bs-toggle="collapse" class="nav-link  list-group-item list-group-item-action bg-transparent second-text fw-bold">
                        <i
                        class="fa-solid fa-user-group me-1"></i> <span class=" d-none d-sm-inline"></span>Truck<i  class="ri-arrow-down-s-line ms-1 mt-5"></i> </a>
                    <ul class="collapse  nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                        <li class="w-100">
                            <a style="margin-left: 80px;" href="./addtruck.php" class="nav-link px-0 bg-transparent second-text fw-bold "> <span class="d-none d-sm-inline "></span>Add truck  </a>
                        </li>
                        <li>
                            <a style="margin-left: 80px;" href="./Trucklist.php" class="nav-link px-0 bg-transparent second-text fw-bold "> <span class="d-none d-sm-inline"></span>Truck list  </a>
                        </li>
                    </ul> -->
                    <!-- <a href="#submenu3" data-bs-toggle="collapse" class="nav-link  list-group-item list-group-item-action bg-transparent second-text fw-bold">
                        <i
                        class="fa-solid fa-user-group me-1"></i> <span class=" d-none d-sm-inline"></span>Assign order<i  class="ri-arrow-down-s-line ms-1 mt-5"></i> </a>
                    <ul class="collapse  nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                        <li class="w-100">
                            <a style="margin-left: 80px;" href="./addorder.php" class="nav-link px-0 bg-transparent second-text fw-bold "> <span class="d-none d-sm-inline "></span>Add order  </a>
                        </li>
                        <li>
                            <a style="margin-left: 80px;" href="./orderlist.php" class="nav-link px-0 bg-transparent second-text fw-bold "> <span class="d-none d-sm-inline"></span> Order list  </a>
                        </li>
                    </ul> -->
          </div>
      </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>Admin
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="./userprofile.php">Profile</a></li>
                                <li><a class="dropdown-item" href="./adminlist.php">View admin</a></li>

                                <li><a class="dropdown-item" href="./addadmin.php">Add admin</a></li>
                                <li><a class="dropdown-item" href="./loginadmin.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>


    
   
      
<!-- 
            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">720</h3>
                                <p class="fs-5">User</p>
                            </div>
                            <i class="fa-regular fa-user fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">4920</h3>
                                <p class="fs-5">Shipping</p>
                            </div>
                            <i class="fas fa-truck fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                      
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">3899</h3>
                                <p class="fs-5">Contact</p>
                            </div>
                           
                           <i class="fa-regular fa-address-card fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                      
                          </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">%25</h3>
                                <p class="fs-5">Pickup</p>
                            </div>
                            <i class="fas fa-truck fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                      
                          </div>
                    </div>
                </div>
            </div> -->

  

              
  <section class="gradient-custom">
    <div  class="container py-3">
      <div class="row justify-content-center align-items-center">
        <div  class="col-12 col-lg-9 col-xl-7">
          <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
            <div class="card-body p-4 p-md-5">
              <h3 style="text-align: center;" class="mb-4 pb-2 pb-md-0 mb-md-5">Service Form</h3>
  
              
              <form  class="was-validated">
  
                
  
                <div class="row">
                  <div class="col-md-6 mb-4">
  
                    
                    
                      
                      <select class="select form-control form-control-lg form-control-sm" required> 
                        <option value="">Select Vehicle</option>
                        <option value="1">Vehicle</option>
                        <option value="2">Vehicle</option>
                        <option value="3">Vehicle</option>
                        <option value="4">Vehicle</option>
                        <option value="5">Vehicle</option>
                      </select>
    
                   
                  
  
                  </div>
                  <div class="col-md-6 mb-4">
  
                    <div class="form-outline">
                      <input type="file" id="Contact" class="form-control form-control-lg form-control-sm"   placeholder="Image"  required />
  
                    </div>
  
                  </div>
                </div>
  
                <div class="row">
                  <div class="col-md-6 mb-4 pb-2">
  
                    <div class="form-outline">
                      <input type="date" id="emailAddress" class="form-control form-control-lg form-control-sm" placeholder="Compeletion date" required />
  
                    </div>
  
                  </div>
                 
                  <div class="col-md-6 mb-4 pb-2">
  
                    <div class="form-outline">
                      <input type="text" id="emailAddress" class="form-control form-control-lg form-control-sm" placeholder="Odometer" required />
  
                    </div>
  
                  </div>
                </div>

                <!-- <div class="row">
                    <div class="col-md-12 mb-4 pb-2">
  
                        <div class="form-outline">
                          <input type="text" id="emailAddress" class="form-control form-control-lg form-control-sm" placeholder="Issue" required />
      
                        </div>
      
                      </div>
                </div> -->

                <div class="row mb-4">
                    <div class="form">
                        <label for="message">Issues </label>
                        <textarea class="form-control col-sm-8 col-md-10 col-lg-12" id="message" name="message" rows="5" placeholder="Enter any resloved issues during service" required></textarea>
                      </div>
                </div>

                  <!-- <div class="row">
                  <div class="col-md-12 mb-4 pb-2">
                    
                    <label for="fleet">Select services tasks</label>
                    <select class="select form-control form-control-lg form-control-sm" required> 
                      <option value="">Choose tasks</option>
                      <option value="1">Less than 15 assets</option>
                      <option value="2">15-99 assets</option>
                      <option value="3">100-499 assets</option>
                      <option value="4">500-999 assets</option>
                      <option value="5">more than 1000 assets</option>
                    </select>
  
                 
                  </div>

                 
                 </div>  -->

                 <!-- <div class="row">

                  <div style="font-weight: bold;" class="col-md-6 mt-4 mb-4">
                    <p>Engine oil change</p>
  
                  </div>
  
  
                  <div class="col-md-6 mb-4 mt-4">
    
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                      <label class="form-check-label" for="flexCheckIndeterminate">
                       
                      </label>
                    </div>
  
                  </div>
                </div>

                <div class="row">

                  <div style="font-weight: bold;" class="col-md-6 mt-4 mb-4">
                    <p>Transmission Fluid Check</p>
  
                  </div>
  
  
                  <div class="col-md-6 mb-4 mt-4">
    
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                      <label class="form-check-label" for="flexCheckIndeterminate">
                       
                      </label>
                    </div>
  
                  </div>
                </div>

                <div class="row">

                  <div style="font-weight: bold;" class="col-md-6 mt-4 mb-4">
                    <p>Barke system check</p>
  
                  </div>
  
  
                  <div class="col-md-6 mb-4 mt-4">
    
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                      <label class="form-check-label" for="flexCheckIndeterminate">
                       
                      </label>
                    </div>
  
                  </div>
                </div>
                <div class="row">

                  <div style="font-weight: bold;" class="col-md-6 mt-4 mb-4">
                    <p>Steering Check</p>
  
                  </div>
  
  
                  <div class="col-md-6 mb-4 mt-4">
    
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                      <label class="form-check-label" for="flexCheckIndeterminate">
                       
                      </label>
                    </div>
  
                  </div>
                </div>

                <div class="row">

                  <div style="font-weight: bold;" class="col-md-6 mt-4 mb-4">
                    <p>Lights and signals Check</p>
  
                  </div>
  
  
                  <div class="col-md-6 mb-4 mt-4">
    
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                      <label class="form-check-label" for="flexCheckIndeterminate">
                       
                      </label>
                    </div>
  
                  </div>
                </div>
                <div class="row">

                  <div style="font-weight: bold;" class="col-md-6 mt-4 mb-4">
                    <p>Tire rotation</p>
  
                  </div>
  
  
                  <div class="col-md-6 mb-4 mt-4">
    
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                      <label class="form-check-label" for="flexCheckIndeterminate">
                       
                      </label>
                    </div>
  
                  </div>
                </div>

                <div class="row">

                  <div style="font-weight: bold;" class="col-md-6 mt-4 mb-4">
                    <p>Electrical system Check</p>
  
                  </div>
  
  
                  <div class="col-md-6 mb-4 mt-4">
    
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                      <label class="form-check-label" for="flexCheckIndeterminate">
                       
                      </label>
                    </div>
  
                  </div>
                </div> -->

               
               




                

                <div class="row">

                  <div class="col-md-12 mb-4 pb-2">
  
                    <select class="select form-control form-control-lg form-control-sm" required> 
                      <option value="">Select Vendor</option>
                      <option value="1">Rush truck center</option>
                      <option value="2">NAPA</option>
                      <!-- <option value="3">100-499 assets</option>
                      <option value="4">500-999 assets</option>
                      <option value="5">more than 1000 assets</option> -->
                    </select>
  
                  </div>
                  <div class="col-md-12 mb-4 pb-2">
  
                    <div class="form-outline">
                      <input type="text" id="emailAddress" class="form-control form-control-lg form-control-sm" placeholder="Total Cost" required />
  
                    </div>
  
                  </div>
                </div>
                
  
                <br>
  
               
  
             
                <div class="mt-4 pt-2 d-flex justify-content-center">
                  <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
                </div>
              </form>
            </div>
          </div>
        </div>
        <a  href="./servicetask.php">   <button style="margin: auto; display: block;"    type="button" class="btn btn-info btn-lg text-white bg-primary mt-4 "> Select tasks</button> </a>
                  
      </div>
      
    </div>
    
  </section> 
  

                <!-- <div class="row my-5">
                    <h3 class="fs-4 mb-3">Recent Orders</h3>
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm  table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" width="50">#</th>
                                    <th scope="col">Product</th>
                                    <th scope="col">Customer</th>
                                    <th scope="col">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Television</td>
                                    <td>Jonny</td>
                                    <td>$1200</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Laptop</td>
                                    <td>Kenny</td>
                                    <td>$750</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Cell Phone</td>
                                    <td>Jenny</td>
                                    <td>$600</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Fridge</td>
                                    <td>Killy</td>
                                    <td>$300</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Books</td>
                                    <td>Filly</td>
                                    <td>$120</td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>Gold</td>
                                    <td>Bumbo</td>
                                    <td>$1800</td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>Pen</td>
                                    <td>Bilbo</td>
                                    <td>$75</td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td>Notebook</td>
                                    <td>Frodo</td>
                                    <td>$36</td>
                                </tr>
                                <tr>
                                    <th scope="row">9</th>
                                    <td>Dress</td>
                                    <td>Kimo</td>
                                    <td>$255</td>
                                </tr>
                                <tr>
                                    <th scope="row">10</th>
                                    <td>Paint</td>
                                    <td>Zico</td>
                                    <td>$434</td>
                                </tr>
                                <tr>
                                    <th scope="row">11</th>
                                    <td>Carpet</td>
                                    <td>Jeco</td>
                                    <td>$1236</td>
                                </tr>
                                <tr>
                                    <th scope="row">12</th>
                                    <td>Food</td>
                                    <td>Haso</td>
                                    <td>$422</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div> -->

            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>

</html>