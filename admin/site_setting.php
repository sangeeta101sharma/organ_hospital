<?php 
session_start();
include("include/config.php");?>
<?php include("process/connection.php");?>
<?php include("include/function.php");?>
<?php

/* print_r($_SESSION);
die(); */

if(!isLoggedIn()){
    
    header("location:login.php?status=2&msg=Login First");
    exit();
}
?>
<?php
if(isset($_GET['id']) && !empty($_GET['id'])){
    $id=$_GET['id'];
    $sql= "SELECT * FROM site_setting_tbl where id=$id";
    $result=mysqli_query($connection,$sql) or die("Query Failed.");
    if(mysqli_num_rows($result)==0){
        header("location:site_setting.php?Oops! Record Not Found..");
    }
    $row=mysqli_fetch_array($result);
}
?>
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">
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
 <div id="layout-wrapper">
<!-- header start -->
<?php include("include/header.php");?>
<!-- header end -->

        <!-- menu start -->
        <?php include("include/menu.php");?>
        <!-- menu end -->

        <div class="vertical-overlay"></div>
<div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
               <!-- content  start here -->
               <div class="row">
                        <div class="col-xxl-6">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Site Setting</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <?php if(isset($_SESSION['message']) && !empty($_SESSION['message'])){?>
                                <div class="alert <?php echo ($_SESSION['status']== 1) ? 'alert-success' : 'alert-danger' ?>" role="alert">
                                        <?php echo $_SESSION['message']; 
                                         unset($_SESSION['message']);
                                         unset($_SESSION['status']);
                                         
                                        ?>
                                </div>
                                <?php } ?>
                                    <div class="live-preview">
                                        <form method="POST" action="process/site_setting.php" enctype="multipart/form-data"> 
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="logoinput" class="form-label">Logo Upload</label>
                                                        <input type="file" class="form-control" id="logo" name="logo" value="<?php echo (isset($_GET['id']) && !empty($_GET['id']))? $row['logo'] : "";?>" required>
                                                        <p style="color:red;"> Only JPG, JPEG and PNG type images are accepted.</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="faviconinput" class="form-label">favicon Upload</label>
                                                        <input type="file" class="form-control" id="favicon" name="favicon" value="<?php echo (isset($_GET['id']) && !empty($_GET['id']))? $row['favicon'] : "";?>" required>
                                                        <p style="color:red;"> Only JPG, JPEG and PNG type images are accepted.</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="websiteinput" class="form-label">Website Name</label>
                                                        <input type="text" class="form-control" placeholder="Enter website name" id="website" name="website" value="<?php echo (isset($_GET['id']) && !empty($_GET['id']))? $row['web_name'] : "";?>" required>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="phonenumberInput" class="form-label">Contact Number</label>
                                                        <input type="tel" class="form-control"  id="contact" name="contact" value="<?php echo (isset($_GET['id']) && !empty($_GET['id']))? $row['contact'] : "";?>" >
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="alternatenumberInput" class="form-label">Alternate Contact number</label>
                                                        <input type="tel" class="form-control"  id="alt_contact" name="alt_contact" value="<?php echo (isset($_GET['id']) && !empty($_GET['id']))? $row['alt_contact'] : "";?>" >
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="emailidInput" class="form-label">Email ID</label>
                                                        <input type="email" class="form-control" placeholder="example@gamil.com" id="email" name="email" value="<?php echo (isset($_GET['id']) && !empty($_GET['id']))? $row['email'] : "";?>" >
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="address1ControlTextarea" class="form-label">Address</label>
                                                        <input type="text" class="form-control"  id="address" name="address" value="<?php echo (isset($_GET['id']) && !empty($_GET['id']))? $row['address'] : "";?>" required>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="emergencynumberInput" class="form-label">Emergency Number</label>
                                                        <input type="tel" class="form-control"  id="emergency" name="emergency" value="<?php echo (isset($_GET['id']) && !empty($_GET['id']))? $row['emergency'] : "";?>" >
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="phonenumberInput" class="form-label">Headlines</label>
                                                        <textarea class="form-control" name="marquee" id="marquee" cols="70" rows="6"><?php echo (isset($_GET['id']) && !empty($_GET['id']))? $row['marquee'] : "";?></textarea>
                                                   </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-12">
                                                    <div class="text-end">
                                                    <input type="hidden" id="action" name="action" value="<?php echo (isset($_GET['id']) && !empty($_GET['id']))? "UPDATE" : "INSERT" ;?>">
                                                    <input type="hidden" id="id" name="id" value="<?php echo (isset($_GET['id']) && !empty($_GET['id']))? $_GET['id'] :0 ;?>">
                                                    <input type="submit" value="submit" class="btn btn-primary" >
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
                    <!-- Show table Start -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">VIEW SITE SETTING</h4>
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
                                                         Logo &nbsp;&nbsp;&nbsp;</th>
                                                        <th class="sort" data-sort="customer_name">
                                                         Favicon &nbsp;&nbsp;&nbsp;</th>
                                                        <th class="sort" data-sort="customer_name">
                                                        Website Name &nbsp;&nbsp;&nbsp;</th>
                                                        <th class="sort" data-sort="customer_name">
                                                        Contact &nbsp;&nbsp;&nbsp;</th>
                                                        <th class="sort" data-sort="customer_name">
                                                         Alternate Contact &nbsp;&nbsp;&nbsp; </th>
                                                        <th class="sort" data-sort="customer_name">
                                                        Email ID &nbsp;&nbsp;&nbsp;</th>
                                                        <th class="sort" data-sort="customer_name">
                                                        Address &nbsp;&nbsp;&nbsp;</th>
                                                        <th class="sort" data-sort="customer_name">
                                                        Emergency Number &nbsp;&nbsp;&nbsp;</th>
                                                        <th class="sort" data-sort="customer_name">
                                                        Headlines &nbsp;&nbsp;&nbsp; </th>
                                                        <!-- <th class="sort" data-sort="action">Action</th> -->
                                                        <th class="sort" data-sort="action">Action &nbsp;&nbsp;&nbsp;</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list form-check-all">
<?php
$sql= "SELECT * FROM site_setting_tbl";
$result= mysqli_query($connection, $sql) or die("Query Failed.");
while($row = mysqli_fetch_array($result)){


?>
                                                    <tr>
                                                    <td scope="row">
                                                        <?php echo $row['id'];?>
                                                        </td>
                                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary"></a></td>
                                                        <td class="customer_name"><a href="process/<?php echo $row['logo'];?>" target="_blank"><img src="process/<?php echo $row['logo'];?>" style="width:50px;height:50px;border-radius:50px;" alt=""></a>  </td>
                                                        <td class="customer_name"><a href="process/<?php echo $row['favicon'];?>" target="_blank"><img src="process/<?php echo $row['favicon'];?>" style="width:50px;height:50px;border-radius:50px;" alt=""></a>  </td>
                                                        <td class="customer_name"> 
                                                        <?php echo $row['web_name'];?>
                                                        </td>
                                                        <td class="customer_name"> 
                                                        <?php echo $row['contact'];?>
                                                        </td>
                                                        <td class="customer_name"> 
                                                        <?php echo $row['alt_contact'];?>
                                                        </td>
                                                        <td class="customer_name"> 
                                                        <?php echo $row['email'];?>
                                                        </td>
                                                        <td class="customer_name"> 
                                                        <?php echo $row['address'];?>
                                                        </td>
                                                        <td class="customer_name"> 
                                                        <?php echo $row['emergency'];?>
                                                        </td>
                                                        <td class="customer_name"> 
                                                        <?php echo $row['marquee'];?>
                                                        </td>

                                                  
                                                        <td>
                                                            <div class="d-flex gap-2">
                                                                 <div class="edit">
                                                                    <a class="btn btn-sm btn-success edit-item-btn" href="site_setting.php?id=<?php echo $row['id'];?>" >Update</a>
                                                                 </div> 
                                                               <div class="remove">
                                                                    <a href="process/remove_sitesetting.php?id=<?php echo $row['id'];?>"onclick="return confirm('Are you sure you want to delete?')";  class="btn btn-sm btn-danger remove-item-btn">Remove</a>
                                                                </div> 
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
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

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
             <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
            <!-- footer start -->
            <?php include("include/footer.php");?>
            <!-- footer end -->
        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->

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