
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
    $sql="SELECT * FROM download_tbl where id=$id";
    $result=mysqli_query($connection,$sql) or die("Query Failed.");
    if(mysqli_num_rows($result)==0){
        header("location:download.php?status=2&msg=Oops! Record not found..");
       
    }
    $row= mysqli_fetch_array($result);
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
               <!-- content  start here -->
               <div class="row">
                        <div class="col-xxl-6">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Download</h4>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <div class="live-preview">
                                        <form id="fupForm" enctype="multipart/form-data">
                                            <div class="row">
                                            <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="lastNameinput" class="form-label">Title</label>
                                                        <input type="text" class="form-control" id="title" name="title"  value="<?php echo (isset($_GET['id']) && !empty($_GET['id'])) ? $row['title'] : ""; ?>" required>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="firstNameinput" class="form-label"> PDF Upload </label>
                                                        <input type="file" class="form-control" id="file" name="file"  value="<?php echo (isset($_GET['id']) && !empty($_GET['id'])) ? $row['file'] : ""; ?>" required>
                                                        <p style="color:red;">Only .DOC and .PDF type files are accepted.</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-12">
                                                    <div class="text-end">
                                                    <input type="hidden" id="action" name="action" value="<?php echo (isset($_GET['id']) && !empty($_GET['id']))? "UPDATE" : "INSERT" ;?>">
                                                    <input type="hidden" id="id" name="id" value="<?php echo (isset($_GET['id']) && !empty($_GET['id']))? $_GET['id'] :0 ;?>">
                                                        <input type="submit" name="submit" class="btn btn-primary submitBtn" value="SUBMIT"/>
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
    <script  type="text/javascript" src="process/JQUERY.js"></script>
                     <!-- form AJAX -->
                    <script>                        
$("#fupForm").on('submit',function(e){
        e.preventDefault();        
        $.ajax({
            type: 'POST',
            url: "process/download.php",
            data: new FormData(this),
            dataType: 'json',
            contentType: false,
            cache: false,
            processData:false, 
            success: function(result){
                                  var data = result; //JSON.parse(result);
                                 if(data.status==1){
                                   swal('', data.msg, 'success'); 
                                   location.reload();
                                }else{
                                    swal('', data.msg, 'error');  
                                }  
            },
            error: function(err){
                console.log(err);
            }
        });
    });
                     
                    </script>

                    
                    <!-- Show table Start -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">VIEW DOWNLOAD DETAILS</h4>
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
                                                    Title </th>
                                                        <th class="sort" data-sort="customer_name">
                                                       Files</th>
                                                        
                                                        <!-- <th class="sort" data-sort="action">Action</th> -->
                                                        <th class="sort" data-sort="action">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list form-check-all">
<?php
$sql= "SELECT * FROM download_tbl";
$result= mysqli_query($connection, $sql) or die("Query Failed.");
while($row = mysqli_fetch_array($result)){


?>

                                                    <tr>
                                                    <td scope="row">
                                                        <?php echo $row['id'];?>
                                                        </td>
                                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary"></a></td>
                                                        <td class="customer_name"> 
                                                        <?php echo $row['title'];?>
                                                        </td>
                                                        <td class="customer_name">
                                                            <a href="process/<?php echo $row['file'];?>" target="_blank">
                                                            <button style="background:gray;color:black;border-radius:5px;">
                                                            <?php echo $row['file'];?>
                                                            </button>
                                                        </a> 
                                                         </td>
                                                       

                                                  
                                                        <td>
                                                            <div class="d-flex gap-2">
                                                                <div class="edit">
                                                                    <a href="download.php?id=<?php echo $row['id']?>" class="btn btn-sm btn-success edit-item-btn" >Update</a>
                                                                </div> 
                                                                <div class="remove">
                                                                    <a href="process/remove_download.php?id=<?php echo $row['id'];?>" onclick="return confirm('Are you sure you want to delete?')";  class="btn btn-sm btn-danger remove-item-btn">Delete</a>
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