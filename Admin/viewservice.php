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
    clip: rect(0 0 0 0 );
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
            justify-content: center;
        }

    </style>
<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div style="background-color: #f2f5f2;" class="" id="sidebar-wrapper">
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
            <nav style="background-color: #afeed6;" class="navbar navbar-expand-lg navbar-light  py-4 px-4">
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
      <h2 style="color: #4c6979;" class=" ms-5" ><b>Service</b></h2>

    </div>
    <div class="col-lg-6" >
      
      <a href="./serviceform.php">   <button  style="float: right;"  type="button" class="btn btn-info  text-white bg-primary"> <i class="fa-solid fa-plus me-1"></i>Add service</button> </a>
                  
    </div>
  </div>
</div>
    
      <!-- User table -->
<section  style=" padding: 20px;" class="gradient-custom   ">
    <div class="container py-3   ">
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
                      <th scope="col">Vehicle ID</th>
                      <th scope="col">Image</th>
                      <th scope="col">Name</th>
                      <th scope="col">Odometer</th>
                      <th scope="col">Service date</th>
                      <th scope="col">Issues</th>
                      <th scope="col">Cost</th>
                      <th scope="col">Vendor</th>
                      
                      <th scope="col">Items Checklist</th>
                      <th scope="col">Action</th>
               
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="name">
                      <td data-label="Vehicle ID">1</td>
                      
                      <td data-label="Image"><img style="height: 40px;width: 50px;" src="./Images/t1.jpg" alt=""></td>
                      <td data-label="Name">ABC</td>
                      <td data-label="Odometer">300km</td>
                      <td data-label="Service date">12/3/2023</td>
                      <td data-label="Issues">ABC</td>
                      <td data-label="Cost">$300</td>
                      <td data-label="Vendor">NAPA</td>
                      
                      
                      <td data-label="Items Checklist">

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    service list
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Service list</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">

                <div style="font-weight: bold;" class="col-md-6 mb-4">
                  <p>Engine oil change</p>

                </div>


                <div class="col-md-6 mb-4">
  
                    <button type="button" class="btn btn-info me-1 text-white bg-primary">Pass</button>

                </div>
              </div>

              <div class="row">

                <div style="font-weight: bold;" class="col-md-6 mb-4">
                  <p>Transmission Fluid Check</p>

                </div>


                <div class="col-md-6 mb-4">
  
                    <button type="button" class="btn btn-info me-1 text-white bg-primary">Pass</button>

                </div>
              </div>

              <div class="row">

                <div style="font-weight: bold;" class="col-md-6 mb-4">
                  <p>Barke system check</p>

                </div>


                <div class="col-md-6 mb-4">
  
                    <button type="button" class="btn btn-info me-1 text-white bg-primary">Pass</button>

                </div>
              </div>
              <div class="row">

                <div style="font-weight: bold;" class="col-md-6 mb-4">
                  <p>Steering Check</p>

                </div>


                <div class="col-md-6 mb-4">
  
                    <button type="button" class="btn btn-info me-1 text-white bg-primary">Pass</button>

                </div>
              </div>
              <div class="row">

                <div style="font-weight: bold;" class="col-md-6 mb-4">
                  <p>Lights and signals Check</p>

                </div>


                <div class="col-md-6 mb-4">
  
                    <button type="button" class="btn btn-info me-1 text-white bg-primary">Pass</button>

                </div>
              </div>
              <div class="row">

                <div style="font-weight: bold;" class="col-md-6 mb-4">
                  <p>Tire rotation</p>

                </div>


                <div class="col-md-6 mb-4">
  
                    <button type="button" class="btn btn-info me-1 text-white bg-primary">Pass</button>

                </div>
              </div>
              <div class="row">

                <div style="font-weight: bold;" class="col-md-6 mb-4">
                  <p>Electrical system Check</p>

                </div>


                <div class="col-md-6 mb-4">
  
                    <button type="button" class="btn btn-info me-1 text-white bg-primary">Pass</button>

                </div>
              </div>

             


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
        </div>
      </div>
    </div>
  </div>

                </td>
                     
                    
                <td data-label="Action"><div class="button-container">     <a href="./serviceform.php" class="btn btn-primary me-1">Edit</a><button type="button" class="btn btn-info text-white bg-primary">Delete</button></div></td>
                      
                      
                    </tr>

                   
                    <tr class="name">
                        <td data-label="Vehicle ID">1</td>
                        
                        <td data-label="Image"><img style="height: 40px;width: 50px;" src="./Images/t1.jpg" alt=""></td>
                        <td data-label="Name">ABC</td>
                        <td data-label="Odometer">300km</td>
                        <td data-label="Service date">12/3/2023</td>
                        <td data-label="Issues">ABC</td>
                        <td data-label="Cost">$300</td>
                      <td data-label="Vendor">NAPA</td>
                      
                        <td data-label="Items Checklist">
  
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">service list</button>
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Service list</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <div class="row">
  
                  <div style="font-weight: bold;" class="col-md-6 mb-4">
                    <p>Engine oil change</p>
  
                  </div>
  
  
                  <div class="col-md-6 mb-4">
    
                      <button type="button" class="btn btn-info me-1 text-white bg-primary">Pass</button>
  
                  </div>
                </div>
  
                <div class="row">
  
                  <div style="font-weight: bold;" class="col-md-6 mb-4">
                    <p>Transmission Fluid Check</p>
  
                  </div>
  
  
                  <div class="col-md-6 mb-4">
    
                      <button type="button" class="btn btn-info me-1 text-white bg-primary">Pass</button>
  
                  </div>
                </div>
  
                <div class="row">
  
                  <div style="font-weight: bold;" class="col-md-6 mb-4">
                    <p>Barke system check</p>
  
                  </div>
  
  
                  <div class="col-md-6 mb-4">
    
                      <button type="button" class="btn btn-info me-1 text-white bg-primary">Pass</button>
  
                  </div>
                </div>
                <div class="row">
  
                  <div style="font-weight: bold;" class="col-md-6 mb-4">
                    <p>Steering Check</p>
  
                  </div>
  
  
                  <div class="col-md-6 mb-4">
    
                      <button type="button" class="btn btn-info me-1 text-white bg-primary">Pass</button>
  
                  </div>
                </div>
                <div class="row">
  
                  <div style="font-weight: bold;" class="col-md-6 mb-4">
                    <p>Lights and signals Check</p>
  
                  </div>
  
  
                  <div class="col-md-6 mb-4">
    
                      <button type="button" class="btn btn-info me-1 text-white bg-primary">Pass</button>
  
                  </div>
                </div>
                <div class="row">
  
                  <div style="font-weight: bold;" class="col-md-6 mb-4">
                    <p>Tire rotation</p>
  
                  </div>
  
  
                  <div class="col-md-6 mb-4">
    
                      <button type="button" class="btn btn-info me-1 text-white bg-primary">Pass</button>
  
                  </div>
                </div>
                <div class="row">
  
                  <div style="font-weight: bold;" class="col-md-6 mb-4">
                    <p>Electrical system Check</p>
  
                  </div>
  
  
                  <div class="col-md-6 mb-4">
    
                      <button type="button" class="btn btn-info me-1 text-white bg-primary">Pass</button>
  
                  </div>
                </div>
  
               
  
  
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
          </div>
        </div>
      </div>
    </div>
  
                  </td>
                       
                      
                  <td data-label="Action"><div class="button-container">     <a href="./serviceform.php" class="btn btn-primary me-1">Edit</a><button type="button" class="btn btn-info text-white bg-primary">Delete</button></div></td>
                        
                        
                      </tr>

                      <tr class="name">
                        <td data-label="Vehicle ID">1</td>
                        
                        <td data-label="Image"><img style="height: 40px;width: 50px;" src="./Images/t1.jpg" alt=""></td>
                        <td data-label="Name">ABC</td>
                        <td data-label="Odometer">300km</td>
                        <td data-label="Service date">12/3/2023</td>
                        <td data-label="Issues">ABC</td>
                        <td data-label="Cost">$300</td>
                      <td data-label="Vendor">NAPA</td>
                      
                        <td data-label="Items Checklist">
  
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    service list
    </button>
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Service list</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <div class="row">
  
                  <div style="font-weight: bold;" class="col-md-6 mb-4">
                    <p>Engine oil change</p>
  
                  </div>
  
  
                  <div class="col-md-6 mb-4">
    
                      <button type="button" class="btn btn-info me-1 text-white bg-primary">Pass</button>
  
                  </div>
                </div>
  
                <div class="row">
  
                  <div style="font-weight: bold;" class="col-md-6 mb-4">
                    <p>Transmission Fluid Check</p>
  
                  </div>
  
  
                  <div class="col-md-6 mb-4">
    
                      <button type="button" class="btn btn-info me-1 text-white bg-primary">Pass</button>
  
                  </div>
                </div>
  
                <div class="row">
  
                  <div style="font-weight: bold;" class="col-md-6 mb-4">
                    <p>Barke system check</p>
  
                  </div>
  
  
                  <div class="col-md-6 mb-4">
    
                      <button type="button" class="btn btn-info me-1 text-white bg-primary">Pass</button>
  
                  </div>
                </div>
                <div class="row">
  
                  <div style="font-weight: bold;" class="col-md-6 mb-4">
                    <p>Steering Check</p>
  
                  </div>
  
  
                  <div class="col-md-6 mb-4">
    
                      <button type="button" class="btn btn-info me-1 text-white bg-primary">Pass</button>
  
                  </div>
                </div>
                <div class="row">
  
                  <div style="font-weight: bold;" class="col-md-6 mb-4">
                    <p>Lights and signals Check</p>
  
                  </div>
  
  
                  <div class="col-md-6 mb-4">
    
                      <button type="button" class="btn btn-info me-1 text-white bg-primary">Pass</button>
  
                  </div>
                </div>
                <div class="row">
  
                  <div style="font-weight: bold;" class="col-md-6 mb-4">
                    <p>Tire rotation</p>
  
                  </div>
  
  
                  <div class="col-md-6 mb-4">
    
                      <button type="button" class="btn btn-info me-1 text-white bg-primary">Pass</button>
  
                  </div>
                </div>
                <div class="row">
  
                  <div style="font-weight: bold;" class="col-md-6 mb-4">
                    <p>Electrical system Check</p>
  
                  </div>
  
  
                  <div class="col-md-6 mb-4">
    
                      <button type="button" class="btn btn-info me-1 text-white bg-primary">Pass</button>
  
                  </div>
                </div>
  
               
  
  
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
          </div>
        </div>
      </div>
    </div>
  
                  </td>
                       
                      
                  <td data-label="Action"><div class="button-container">     <a href="./serviceform.php" class="btn btn-primary me-1">Edit</a><button type="button" class="btn btn-info text-white bg-primary">Delete</button></div></td>
                        
                        
                      </tr>

                   
        
  
  

                   

                   
                  </tbody>
                </table>
  
          </div>
          
  
  
         
          
        
            
        </div>
      </div>
    </div>

    
  </section>

  


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


        // modal

        var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function () {
  myInput.focus()
})
    </script>
</body>

</html>