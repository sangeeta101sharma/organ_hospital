<?php include("include/config.php");?>
<?php include("process/connection.php");?>
<?php include("include/function.php");?>
<?php
session_start();

if(!isLoggedIn()){
    
    header("location:login.php?status=2&msg=Login First");
    exit();
}

?>
<?php 
if(isset($_GET['id']) && !empty($_GET['id'])){
    $id=$_GET['id'];
    $sql= "SELECT * FROM admin_details_tbl where id=$id";
    $result= mysqli_query($connection, $sql) or die("Query Failed.");
    if(mysqli_num_rows($result)==0){
         header("location:admin_details.php?status=2&msg=Oops.. Record not found!!!");
    }
    $row = mysqli_fetch_array($result);
}

?>


<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title><?php echo $title;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo $favicone;?>">

    <link href="assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Layout config Js -->
    <script src="assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">
        <!-- header start -->
        <?php include("include/header.php");?>
        <!-- header end -
        <!-- ========== App Menu ========== -->
        <!-- menu start -->
        <?php include("include/menu.php");?>
        <!-- menu end -->
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- content  start here -->

                    <div class="row">
                        <div class="col-xxl-6">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Admin Details</h4>

                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div class="live-preview">
                                        <form method="POST">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="firstNameinput" class="form-label">Admin
                                                            Name</label>
                                                        <input type="text" class="form-control" id="admin_name" value="<?php echo (isset($_GET['id']) && !empty($_GET['id'])) ? $row['admin_name'] : ""; ?>"required>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="phonenumberInput" class="form-label">Contact
                                                            Number</label>
                                                        <input type="tel" class="form-control" id="contact" value="<?php echo (isset($_GET['id']) && !empty($_GET['id'])) ? $row['contact'] : ""; ?>" required>
                                                        <span id="error"></span>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="emailidInput" class="form-label">Email ID</label>
                                                        <input type="email" class="form-control"
                                                            placeholder="example@gamil.com" id="email" value="<?php echo (isset($_GET['id']) && !empty($_GET['id'])) ? $row['email'] : ""; ?>"required>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="firstNameinput"
                                                            class="form-label">Qualification</label>
                                                        <input type="text" class="form-control" id="qualification" value="<?php echo (isset($_GET['id']) && !empty($_GET['id'])) ? $row['qualification'] : ""; ?>"required>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="address1ControlTextarea"
                                                            class="form-label">Address</label>
                                                        <input type="text" class="form-control"
                                                            id="address" value="<?php echo (isset($_GET['id']) && !empty($_GET['id'])) ? $row['address'] : ""; ?>">
                                                    </div>
                                                </div>
                                                <!--end col-->

                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-12">
                                                <div class="text-end">
                                                    <input type="hidden" id="action" value="<?php echo (isset($_GET['id']) && !empty($_GET['id'])) ? "UPDATE" : "INSERT"; ?>" />
                                                    <input type="hidden" id="id" value="<?php echo (isset($_GET['id']) && !empty($_GET['id'])) ? $_GET['id'] : 0; ?>" />
                                                    <button onclick="submitform()" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                            <!--end col-->
                                    </div>
                                    <!--end row-->
                                    </form>
                                </div>
                                <div class="d-none code-view">
                                    <pre class="language-markup" style="height: 375px;">

                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col -->


                    </div>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                    <!-- form AJAX -->
                    <script>
                        function submitform(){
                            event.preventDefault();
                            var Admin_Name = document.getElementById("admin_name").value;
                            
                            var Contact = document.getElementById("contact").value;
                          
                            var Email = document.getElementById("email").value;
                            
                            var Qualification = document.getElementById("qualification").value; 
                           
                            var Address = document.getElementById("address").value;
                            
                            var action = document.getElementById("action").value;
                            var id = document.getElementById("id").value;
                           
                           var dataStringer = "admin_name="+Admin_Name+
                            "&contact="+Contact+
                            "&email="+Email+
                            "&qualification="+Qualification+
                            "&address="+Address+
                            "&action="+action+
                            "&id="+id
                            ;
                            console.log(dataStringer);
                             $.ajax({
                                url:"process/admin_details.php",
                                type:"POST",
                                cache:false,
                                data:dataStringer,
                                success:function(result){
                                  //  console.log(result);
                                  var d = $.parseJSON(result);
                                if(d.status == 1){
                                   swal('', d.msg, 'success'); 
                                   location.reload();
                                }else{
                                    swal('', d.msg, 'error');  
                                } 
                                }
                            }) ;
                        }
                        var error = document.getElementById("error")
        if (isNaN(document.getElementById("contact").value))
        {
             
            // Changing content and color of content
            error.textContent = "Please enter a valid number"
            error.style.color = "red"
        } else {
            error.textContent = ""
        }
                    </script>
                    <!-- Show table Start -->
                  
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">VIEW ADMIN DETAILS</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div class="listjs-table" id="customerList">
                                        <div class="row g-4 mb-3">
                                            <div class="col-sm">
                                                <div class="d-flex justify-content-sm-end">
                                                    <div class="search-box ms-2">
                                                        <input type="text" class="form-control search" placeholder="Search...">
                                                        <i class="ri-search-line search-icon"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="table-responsive table-card mt-3 mb-1">
                                            <table class="table align-middle table-nowrap" id="customerTable">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th class="sort" data-sort="customer_name">
                                                        Sr.no
                                                        </th>
                                                        <th class="sort" data-sort="customer_name">
                                                       Admin &nbsp;&nbsp; </th>
                                                       <th class="sort" data-sort="customer_name">
                                                        Contact  </th>
                                                        <th class="sort" data-sort="customer_name">
                                                       Email ID</th>
                                                       <th class="sort" data-sort="customer_name">
                                                        Qualification &nbsp;&nbsp;</th>
                                                        <th class="sort" data-sort="customer_name">
                                                        Address </th>

                                                        <!-- <th class="sort" data-sort="action">Action</th> -->
                                                        <th class="sort" data-sort="action">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list form-check-all">
                                                <?php 
                                                    $sql= "SELECT * FROM admin_details_tbl";
                                                    $result= mysqli_query($connection, $sql) or die("Query Failed.");
                                                     if(mysqli_num_rows($result)>0){
                                                     while($row = mysqli_fetch_array($result)){
                                                     ?>

                                                    <tr>
                                                        <td scope="row">
                                                        <?php echo $row['id'];?>
                                                        </td>
                                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary"></a></td>
                                                        <td class="customer_name"><?php echo $row['admin_name'];?></td>
                                                        <td class="customer_name"> <?php echo $row['contact'];?></td>
                                                        <td class="customer_name"><?php echo $row['email'];?></td>
                                                        <td class="customer_name"> <?php echo $row['qualification'];?></td>
                                                        <td class="customer_name"><?php echo $row['address'];?></td>
                                                        <td>
                                                            <div class="d-flex gap-2">
                                                                  <div class="edit">
                                                                    <a class="btn btn-sm btn-success edit-item-btn" href="admin_details.php?id=<?php echo $row['id'];?>">Edit</a>
                                                                </div>  
                                                                <div class="remove">
                                                                    <a href="process/remove_admindetails.php?id=<?php echo $row['id'];?>"onclick="return confirm('Are you sure you want to delete?')";  class="btn btn-sm btn-danger remove-item-btn">Remove</a>
                                                                </div> 
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                        }                                                             
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                            <div class="noresult" style="display: none">
                                                <div class="text-center">
                                                    <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                                                    <h5 class="mt-2">Sorry! No Result Found</h5>
                                                    <p class="text-muted mb-0">We've searched more than 150+ Orders We did not find any orders for you search.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-end">
                                            <div class="pagination-wrap hstack gap-2">
                                                <a class="page-item pagination-prev disabled" href="javascrpit:void(0)">
                                                    Previous
                                                </a>
                                                <ul class="pagination listjs-pagination mb-0"></ul>
                                                <a class="page-item pagination-next" href="javascrpit:void(0)">
                                                    Next
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                    <!-- Show table end -->

<!-- content end here -->
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <!-- footer start -->
            <?php include("include/footer.php");?>
            <!-- footer end -->
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
    <?php
    include("include/preloader_custome.php");
    ?>

    <!-- Theme Settings -->
    <?php
    include("include/theme_setting.php");
    ?>

    <!-- JAVASCRIPT -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="assets/js/plugins.js"></script>

    <!-- apexcharts -->
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Swiper Js -->
    <script src="assets/libs/swiper/swiper-bundle.min.js"></script>

    <!-- CRM js -->
    <script src="assets/js/pages/dashboard-crypto.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
</body>
</html>