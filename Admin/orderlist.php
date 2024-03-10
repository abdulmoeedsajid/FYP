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
            font-size: large;
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

            <div class="container">
              <div style="padding: 10px; margin-top: 10px;" class="row">
                <div class="col-lg-6" >
                  <h2 style="color: #4c6979;" class=" ms-5" ><b>Order</b></h2>
            
                </div>
                <div class="col-lg-6" >
                  
                  <a href="./addorder.php">   <button  style="float: right;"  type="button" class="btn btn-info  text-white bg-primary"> <i class="fa-solid fa-plus me-1"></i>Add Order</button> </a>
                              
                </div>
              </div>
            </div>
    
      <!-- User table -->
<section class="gradient-custom  ">
    <div class="container py-3  ">
      <div class="row justify-content-center align-items-center">
        <div class=" col-sm-8 col-lg-11 col-md-8    ">
  
          <div >
            <form class="d-flex mb-3" role="search">
              
              <input style="width: 200px;" id="searchtable" class="form-control me-2 " type="search" placeholder="Search" aria-label="Search" onkeyup="search()">
              <button style="background-color: rgb(121, 121, 216); border-radius: 16px;" class="btn btn-primary" type="submit">Search</button>
          
            </form>
             
              <table class="table caption-top ">
                 
                  <thead>
                    <tr>
                      <th scope="col">Order ID</th>
                      <th scope="col">driver image</th>
                      <th scope="col">driver name</th>
                      <th scope="col">vehicle image</th>
                      <th scope="col">vehicle name</th>
                      <th scope="col">shipping ID</th>
                      
                      <th scope="col">Action</th>
                      
                      

                    </tr>
                  </thead>
                  <tbody>
                    <tr  class="name">
                      <td data-label="Order ID">1</td>
                      <td data-label="diver image"><img style="height: 40px;width: 50px;" src="./Images/user1.png" alt=""></td>
                     
                      <td data-label="driver name">Ali</td>
                      <td data-label="vehicle image"><img style="height: 40px;width: 50px;" src="./Images/t1.jpg" alt=""></td>
                     
                      <td data-label="vehicle name">Toyota</td>
                    
                      <td data-label="shipping ID">11</td>
                    
                      <td data-label="Action"><div class="button-container"><a href="./addorder.php"><button type="button" class="btn btn-info me-1">Edit</button></a><button type="button" class="btn btn-info">Delete</button></div></td>
                      

                      
                    </tr>

                    <tr  class="name">
                      <td data-label="Order ID">1</td>
                      <td data-label="diver image"><img style="height: 40px;width: 50px;" src="./Images/user1.png" alt=""></td>
                     
                      <td data-label="driver name">Ali</td>
                      <td data-label="vehicle image"><img style="height: 40px;width: 50px;" src="./Images/t1.jpg" alt=""></td>
                     
                      <td data-label="vehicle name">Toyota</td>
                    
                      <td data-label="shipping ID">11</td>
                    
                      <td data-label="Action"><div class="button-container"><a href="./addorder.php"><button type="button" class="btn btn-info me-1">Edit</button></a><button type="button" class="btn btn-info">Delete</button></div></td>
                      

                      
                    </tr>

                    <tr  class="name">
                      <td data-label="Order ID">1</td>
                      <td data-label="diver image"><img style="height: 40px;width: 50px;" src="./Images/user1.png" alt=""></td>
                     
                      <td data-label="driver name">Ali</td>
                      <td data-label="vehicle image"><img style="height: 40px;width: 50px;" src="./Images/t1.jpg" alt=""></td>
                     
                      <td data-label="vehicle name">Toyota</td>
                    
                      <td data-label="shipping ID">11</td>
                    
                      <td data-label="Action"><div class="button-container"><a href="./addorder.php"><button type="button" class="btn btn-info me-1">Edit</button></a><button type="button" class="btn btn-info">Delete</button></div></td>
                      

                      
                    </tr>

                    <tr  class="name">
                      <td data-label="Order ID">1</td>
                      <td data-label="diver image"><img style="height: 40px;width: 50px;" src="./Images/user1.png" alt=""></td>
                     
                      <td data-label="driver name">Ali</td>
                      <td data-label="vehicle image"><img style="height: 40px;width: 50px;" src="./Images/t1.jpg" alt=""></td>
                     
                      <td data-label="vehicle name">Toyota</td>
                    
                      <td data-label="shipping ID">11</td>
                    
                      <td data-label="Action"><div class="button-container"><a href="./addorder.php"><button type="button" class="btn btn-info me-1">Edit</button></a><button type="button" class="btn btn-info">Delete</button></div></td>
                      

                      
                    </tr>

                    <tr  class="name">
                      <td data-label="Order ID">1</td>
                      <td data-label="diver image"><img style="height: 40px;width: 50px;" src="./Images/user1.png" alt=""></td>
                     
                      <td data-label="driver name">Ali</td>
                      <td data-label="vehicle image"><img style="height: 40px;width: 50px;" src="./Images/t1.jpg" alt=""></td>
                     
                      <td data-label="vehicle name">Toyota</td>
                    
                      <td data-label="shipping ID">11</td>
                    
                      <td data-label="Action"><div class="button-container"><a href="./addorder.php"><button type="button" class="btn btn-info me-1">Edit</button></a><button type="button" class="btn btn-info">Delete</button></div></td>
                      

                      
                    </tr>

                   
        
  
  

                   

                   
                  </tbody>
                </table>
  
          </div>
          
  
  
         
          
        
            
        </div>
      </div>
    </div>
  </section>
      
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

  

<!--                 
  <section class="gradient-custom">
    <div  class="container py-3">
      <div class="row justify-content-center align-items-center">
        <div  class="col-12 col-lg-9 col-xl-7">
          <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
            <div class="card-body p-4 p-md-5">
              <h3 style="text-align: center;" class="mb-4 pb-2 pb-md-0 mb-md-5">Driver Form</h3>
  
              
              <form  class="was-validated">
  
                
  
                <div class="row">
                  <div class="col-md-6 mb-4">
  
                    <div class="form-outline">
                      <input type="text" id="Full Name" class="form-control form-control-lg form-control-sm" placeholder="Full Name" required />
  
                    </div>
  
                  </div>
                  <div class="col-md-6 mb-4">
  
                    <div class="form-outline">
                      <input type="text" id="Contact" class="form-control form-control-lg form-control-sm"   placeholder="0300-123-4567" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}"  required />
  
                    </div>
  
                  </div>
                </div>
  
                <div class="row">
                  <div class="col-md-6 mb-4 pb-2">
  
                    <div class="form-outline">
                      <input type="email" id="emailAddress" class="form-control form-control-lg form-control-sm" placeholder="Age" required />
  
                    </div>
  
                  </div>
                  <div class="col-md-6 mb-4 pb-2">
  
                    <div class="form-outline">
                      <input type="text" id="Moving Date" class="form-control form-control-lg form-control-sm" placeholder="Liscence no" required />
  
                    </div>
  
                  </div>
                  <div class="col-md-6 mb-4 pb-2">
  
                    <div class="form-outline">
                      <input type="text" id="Pickup Location" class="form-control form-control-lg form-control-sm" placeholder="Expiry date" required />
  
                    </div>
  
                  </div>
                  <div class="col-md-6 mb-4 pb-2">
                    <div class="form-outline">
                      
                      <input type="text" id="Drop off Location" class="form-control form-control-lg form-control-sm" placeholder="Experience" required />
                    </div>
                  </div>
  
                </div>
  
               
  
                <div class="row">
                  <div class="col-md-6 mb-4 pb-2">
                    <div class="form-outline">
                      <input type="text" id="Model/Brand Name" class="form-control form-control-lg form-control-sm" placeholder="Joining date" required />
                    </div>
                  </div>
  
                  <div class="col-md-6 mb-4 pb-2">
                    <div class="form-outline">
                      <input type="text" id="Manufacture year" class="form-control form-control-lg form-control-sm" placeholder="Reference" required />
                    </div>
                  </div>
  
                  <div style="margin: auto; display: block;" class="col-md-6 mb-4 pb-2">
                    <div class="form-outline">
                      <input type="text" id="Vehicle Liscence" class="form-control form-control-lg form-control-sm" placeholder="Address" required />
                    </div>
                  </div>
                  
                  
  
                </div>
  
                <br>
  
                <h5> Vehicle Insurance</h5>
  
                <div class="row">
                  <div class="col-md-6 mb-4 pb-2">
                    <div class="form-outline">
                      <input type="text" id="Policy Number" class="form-control form-control-lg form-control-sm" placeholder="Policy Number" />
                    </div>
                  </div>
                  <div class="col-md-6 mb-4 pb-2">
                    <div class="form-outline">
                      <input type="text" id="Coverage Limits" class="form-control form-control-lg form-control-sm" placeholder="Coverage Limits" />
                    </div>
                  </div>
  
                  <div class="col-md-6 mb-4 pb-2">
                    <div class="form-outline">
                      <input type="text" id="Company name" class="form-control form-control-lg form-control-sm" placeholder="Company name" />
                    </div>
                  </div>
  
                  <div class="col-md-6 mb-4 pb-2">
                    <div class="form-outline">
                      
                      <input type="file" id="Insurance Document/Card" class="form-control form-control-lg form-control-sm" placeholder="Insurance Document/Card" />
                    </div>
                  </div>
  
                  
  
                 
  
                </div> -->
  
                <!-- <div class="mt-4 pt-2 d-flex justify-content-center">
                  <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->

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

          // table search function.

          function search() {
          let input = document.getElementById('searchtable').value
          input = input.toLowerCase();
          let x = document.getElementsByClassName('name');
          for(i=0; i < x.length; i++) {
            if(!x[i].innerHTML.toLowerCase().includes(input)){
              x[i].style.display="none";
            }
            else{
              x[i].style.display="";
            }
          }
        }
    </script>
</body>

</html>