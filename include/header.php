
<style>
    .sticky {
  position: fixed !important;
  top: 0 !important;
  width: 100% !important;
  background:lightblue;
}
.sticky + .content {
  padding-top: 102px !important;
}
</style>
<header>
    <div class="header-marquee">
        <div class="container top_update_inner">
            <div class="anim_sec"><?php echo $line['web_name'];?></div>
            <div class="scroll_cont">
                    <marquee behavior="alternate" direction="left" scrollamount="3"><?php echo $line['marquee'];?></marquee>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="topheader">
        <div class="container">
            <div class="clearfix">
                <ul class="left_li">
                    <li><a href="tel:+91-<?php echo $contact;?>"><img alt="<?php echo $line['web_name'];?>"
                                src="wp-content/themes/organhospital/images/call-ico.svg" width="20" height="20" />
                                <?php echo $contact;?></a></li>

                    <li><a href="mailto:<?php echo $line['email'];?>"><img alt="<?php echo $line['web_name'];?>"
                                src="wp-content/themes/organhospital/images/email.svg" width="20" height="20" />
                                <?php echo $line['email'];?>
                        </a></li>

                    <li><a href="#" target="_blank"><img alt="<?php echo $line['web_name'];?>"
                                src="wp-content/themes/organhospital/images/placeholder.svg" width="20"
                                height="20" />CMO R.N. 1384/1066</a></li>

                </ul>
                <ul class="right_li">

                    <li><a href="#"><img alt="Organ Hospital"
                                src="wp-content/themes/organhospital/images/appointment.svg" width="20"
                                height="20" />OPD Schedule</a></li>

                    <li class="book_appo"><button data-toggle="modal" data-target="#AppoModal"
                            class="btn btn-primary">Book an Appointment</button></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="bottomheader" id="myHeader">
        <div class="container">
            <div class="clearfix">
                <i class="fa fa-bars menubar_mobile" aria-hidden="true"></i>
                <div class="logoarea">
                    <a href="index.php">
                            <?php //print_r($line); ?>
                        <img alt="<?php echo $line['web_name'];?>" src="admin/process/<?php echo $line['logo']; ?>" width="100" height="20" class="img-fluid" />
                    </a>
                </div>
                <nav class="navpanel">
                    <ul id="menu-main_menu" class="mob_sidepanel">
                        <li id="menu-item-36"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-5 current_page_item menu-item-36 active ">
                            <a href="index.php" aria-current="page">Home</a>
                        </li>
                        <li id="menu-item-37"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-37"><a
                                href="about_us.php">About Us</a></li>
                        <li id="menu-item-40"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-40"><a
                                href="specialties.php">Specialties</a></li>
                        <!-- <li id="menu-item-425"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-425">
                            <a>Services</a>
                        </li> -->
                        <li id="menu-item-44"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-44"><a
                                href="department.php">DEPARTMENTS</a></li>
                        <li id="menu-item-43"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-43"><a
                                href="gallery.php">GALLERY</a></li>
                        <li id="menu-item-43"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-43"><a
                                href="video.php">VIDEO</a></li>
                        <li id="menu-item-45"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-45"><a
                                href="contact_us.php">CONTACT US</a></li>
                        <li id="menu-item-45"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-45"><a
                                href="enquiry.php">ENQUIRY</a></li>
                        <li id="menu-item-45"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-45"><a
                                href="download.php">DOWNLOAD</a></li>
                    </ul> 
                </nav>
            </div>
        </div>
    </div>
</header>
<script>
window.onscroll = function() {
    myFunction()
};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
    if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
    } else {
        header.classList.remove("sticky");
    }
}
</script> 

