
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
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">
<head>
    <meta charset="utf-8" />
    <title><?php echo $title;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo $favicon;?>">
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
                    <!-- Show table Start -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">VIEW ENQUIRY DETAILS</h4>
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
                                                        Sr.no&nbsp;&nbsp;&nbsp;
                                                        </th>
                                                        <th class="sort" data-sort="customer_name">
                                                       Name </th>
                                                        <th class="sort" data-sort="customer_name">
                                                       General Physician &nbsp;&nbsp;&nbsp;</th>
                                                       <th class="sort" data-sort="customer_name">
                                                        Address </th>
                                                        <th class="sort" data-sort="customer_name">
                                                       Email</th>
                                                       <th class="sort" data-sort="customer_name">
                                                        Phone </th>
                                                        <th class="sort" data-sort="customer_name">
                                                        Query </th>
                                                        <!-- <th class="sort" data-sort="action">Action</th> -->
                                                        <th class="sort" data-sort="action">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list form-check-all">
                                                <?php 
                                                    $sql= "SELECT * FROM enquiry_tbl";
                                                    $result= mysqli_query($connection, $sql) or die("Query Failed.");
                                                     if(mysqli_num_rows($result)>0){
                                                     while($row = mysqli_fetch_array($result)){
                                                     ?>

                                                    <tr>
                                                    <td scope="row">
                                                        <?php echo $row['id'];?>
                                                        </td>
                                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary"></a></td>
                                                        <td class="customer_name"><?php echo $row['name'];?></td>
                                                        <td class="customer_name"><?php echo $row['physician'];?></td>
                                                        <td class="customer_name"> <?php echo $row['address'];?></td>
                                                        <td class="customer_name"><?php echo $row['email'];?></td>
                                                        <td class="customer_name"> <?php echo $row['phone'];?></td>
                                                        <td class="customer_name"> <?php echo $row['query'];?></td>
                                                        <td>
                                                            <div class="d-flex gap-2">
                                                                 <!-- <div class="edit">
                                                                    <button class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" data-bs-target="#showModal">Edit</button>
                                                                </div>  -->
                                                                <div class="remove">
                                                                    <a href="process/remove_enquiry.php?id=<?php echo $row['id'];?>"  onclick="return confirm('Are you sure you want to delete?')";  class="btn btn-sm btn-danger remove-item-btn">Delete</a>
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