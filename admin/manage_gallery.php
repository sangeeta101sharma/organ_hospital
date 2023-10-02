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
        <!-- header end -->
        <!-- removeNotificationModal -->
        <div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            id="NotificationModalbtn-close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mt-2 text-center">
                            <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                                colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                            <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                <h4>Are you sure ?</h4>
                                <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                            </div>
                        </div>
                        <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                            <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete
                                It!</button>
                        </div>
                    </div>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
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
                                    <h4 class="card-title mb-0 flex-grow-1">Manage Gallery</h4>

                                </div><!-- end card header -->

                                <div class="card-body">
                                    <?php if(isset($_GET['msg']) && !empty($_GET['msg'])){?>
                                    <div class="alert <?php echo ($_GET['status']== 1) ? 'alert-success' : 'alert-danger' ?>"
                                        role="alert">

                                        <?php echo $_GET['msg'];?>

                                    </div>
                                    <?php } ?>
                                    <div class="live-preview">
                                        <form action="process/manage_gallery.php" enctype="multipart/form-data"
                                            method="POST">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="photoUpload" class="form-label">Photo Upload
                                                        </label>
                                                        <input type="file" class="form-control" id="gallery"
                                                            name="gallery" required>
                                                            <p style="color:red;"> Only JPG, JPEG and PNG type images are accepted.</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="remark" class="form-label">Remarks</label>
                                                        <input type="text" class="form-control" id="remark"
                                                            name="remark">
                                                    </div>
                                                </div>
                                                <!--end col-->

                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-12">
                                                <div class="text-end">
                                                    <button type="submit" class="btn btn-primary"
                                                        value="submit">Submit</button>
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
                                    <h4 class="card-title mb-0">VIEW GALLERY DETAILS</h4>
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
                                                        Upload Images</th>
                                                        <th class="sort" data-sort="customer_name">
                                                        Remarks </th>
                                                        <!-- <th class="sort" data-sort="action">Action</th> -->
                                                        <th class="sort" data-sort="action">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list form-check-all">
<?php
$sql= "SELECT * FROM gallery_tbl";
$result= mysqli_query($connection, $sql) or die("Query Failed.");
while($row = mysqli_fetch_array($result)){


?>

                                                    <tr>
                                                    <td scope="row">
                                                        <?php echo $row['id'];?>
                                                        </td>
                                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary"></a></td>
                                                        <td class="customer_name"><a href="process/<?php echo $row['gallery'];?>" target="_blank"><img src="process/<?php echo $row['gallery'];?>" style="width:50px;height:50px;border-radius:50px;" alt=""></a>  </td>
                                                        <td class="customer_name"> 
                                                        <?php echo $row['remark'];?>
                                                        </td>

                                                  
                                                        <td>
                                                            <div class="d-flex gap-2">
                                                                <!-- <div class="edit">
                                                                    <button class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" data-bs-target="#showModal">view</button>
                                                                </div> -->
                                                                <div class="remove">
                                                                    <a href="process/remove_gallery.php?id=<?php echo $row['id'];?>" onclick="return confirm('Are you sure you want to delete?')";  class="btn btn-sm btn-danger remove-item-btn">Remove</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <?php
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


<!-- Mirrored from themesbrand.com/velzon/html/default/dashboard-crypto.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 May 2023 08:45:13 GMT -->
</html>