<?php include("config/config.php");?>

<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo $line['favicon'];?>" type="image/x-icon">
    <link rel="icon" href="<?php echo $line['favicon'] ;?>" type="image/x-icon">
    <title><?php echo $title ;?></title>
    <script type="application/ld+json" class="yoast-schema-graph"></script>
    <link rel='dns-prefetch' href='http://www.googletagmanager.com/' />
    <style type="text/css">
    img.wp-smiley,
    img.emoji {
        display: inline !important;
        border: none !important;
        box-shadow: none !important;
        height: 1em !important;
        width: 1em !important;
        margin: 0 0.07em !important;
        vertical-align: -0.1em !important;
        background: none !important;
        padding: 0 !important;
    }
     .content {
  position: absolute !important;
  top: 150px !important;
  background: rgb(0, 0, 0) !important; /* Fallback color */
  background: rgba(0, 0, 0, 0.01) !important; /* Black background with 0.5 opacity */
  color: blue !important;
  width: 100% !important;
  padding: 20px !important;
  margin-top:50px !important;
}
    </style>
    <link rel='stylesheet' id='wp-block-library-css'
        href='wp-includes/css/dist/block-library/style.min3781.css?ver=6.2.2' type='text/css' media='all' />
    <link rel='stylesheet' id='classic-theme-styles-css' href='wp-includes/css/classic-themes.min3781.css?ver=6.2.2'
        type='text/css' media='all' />
    <style id='global-styles-inline-css' type='text/css'>
    body {
        --wp--preset--color--black: #000000;
        --wp--preset--color--cyan-bluish-gray: #abb8c3;
        --wp--preset--color--white: #ffffff;
        --wp--preset--color--pale-pink: #f78da7;
        --wp--preset--color--vivid-red: #cf2e2e;
        --wp--preset--color--luminous-vivid-orange: #ff6900;
        --wp--preset--color--luminous-vivid-amber: #fcb900;
        --wp--preset--color--light-green-cyan: #7bdcb5;
        --wp--preset--color--vivid-green-cyan: #00d084;
        --wp--preset--color--pale-cyan-blue: #8ed1fc;
        --wp--preset--color--vivid-cyan-blue: #0693e3;
        --wp--preset--color--vivid-purple: #9b51e0;
        --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
        --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
        --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
        --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
        --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
        --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
        --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
        --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
        --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
        --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
        --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
        --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
        --wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
        --wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
        --wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
        --wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
        --wp--preset--duotone--midnight: url('#wp-duotone-midnight');
        --wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
        --wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
        --wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
        --wp--preset--font-size--small: 13px;
        --wp--preset--font-size--medium: 20px;
        --wp--preset--font-size--large: 36px;
        --wp--preset--font-size--x-large: 42px;
        --wp--preset--spacing--20: 0.44rem;
        --wp--preset--spacing--30: 0.67rem;
        --wp--preset--spacing--40: 1rem;
        --wp--preset--spacing--50: 1.5rem;
        --wp--preset--spacing--60: 2.25rem;
        --wp--preset--spacing--70: 3.38rem;
        --wp--preset--spacing--80: 5.06rem;
        --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
        --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
        --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
        --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
        --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
    }

    :where(.is-layout-flex) {
        gap: 0.5em;
    }

    body .is-layout-flow>.alignleft {
        float: left;
        margin-inline-start: 0;
        margin-inline-end: 2em;
    }

    body .is-layout-flow>.alignright {
        float: right;
        margin-inline-start: 2em;
        margin-inline-end: 0;
    }

    body .is-layout-flow>.aligncenter {
        margin-left: auto !important;
        margin-right: auto !important;
    }

    body .is-layout-constrained>.alignleft {
        float: left;
        margin-inline-start: 0;
        margin-inline-end: 2em;
    }

    body .is-layout-constrained>.alignright {
        float: right;
        margin-inline-start: 2em;
        margin-inline-end: 0;
    }

    body .is-layout-constrained>.aligncenter {
        margin-left: auto !important;
        margin-right: auto !important;
    }

    body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
        max-width: var(--wp--style--global--content-size);
        margin-left: auto !important;
        margin-right: auto !important;
    }

    body .is-layout-constrained>.alignwide {
        max-width: var(--wp--style--global--wide-size);
    }

    body .is-layout-flex {
        display: flex;
    }

    body .is-layout-flex {
        flex-wrap: wrap;
        align-items: center;
    }

    body .is-layout-flex>* {
        margin: 0;
    }

    :where(.wp-block-columns.is-layout-flex) {
        gap: 2em;
    }

    .has-black-color {
        color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-color {
        color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-color {
        color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-color {
        color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-color {
        color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-color {
        color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-color {
        color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-color {
        color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-color {
        color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-color {
        color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-color {
        color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-color {
        color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-black-background-color {
        background-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-background-color {
        background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-background-color {
        background-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-background-color {
        background-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-background-color {
        background-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-background-color {
        background-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-background-color {
        background-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-background-color {
        background-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-background-color {
        background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-background-color {
        background-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-black-border-color {
        border-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-border-color {
        border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-border-color {
        border-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-border-color {
        border-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-border-color {
        border-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-border-color {
        border-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-border-color {
        border-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-border-color {
        border-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-border-color {
        border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-border-color {
        border-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
        background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
    }

    .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
        background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
    }

    .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-orange-to-vivid-red-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
    }

    .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
        background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
    }

    .has-cool-to-warm-spectrum-gradient-background {
        background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
    }

    .has-blush-light-purple-gradient-background {
        background: var(--wp--preset--gradient--blush-light-purple) !important;
    }

    .has-blush-bordeaux-gradient-background {
        background: var(--wp--preset--gradient--blush-bordeaux) !important;
    }

    .has-luminous-dusk-gradient-background {
        background: var(--wp--preset--gradient--luminous-dusk) !important;
    }

    .has-pale-ocean-gradient-background {
        background: var(--wp--preset--gradient--pale-ocean) !important;
    }

    .has-electric-grass-gradient-background {
        background: var(--wp--preset--gradient--electric-grass) !important;
    }

    .has-midnight-gradient-background {
        background: var(--wp--preset--gradient--midnight) !important;
    }

    .has-small-font-size {
        font-size: var(--wp--preset--font-size--small) !important;
    }

    .has-medium-font-size {
        font-size: var(--wp--preset--font-size--medium) !important;
    }

    .has-large-font-size {
        font-size: var(--wp--preset--font-size--large) !important;
    }

    .has-x-large-font-size {
        font-size: var(--wp--preset--font-size--x-large) !important;
    }

    .wp-block-navigation a:where(:not(.wp-element-button)) {
        color: inherit;
    }

    :where(.wp-block-columns.is-layout-flex) {
        gap: 2em;
    }

    .wp-block-pullquote {
        font-size: 1.5em;
        line-height: 1.6;
    }
    </style>
    <link rel='stylesheet' id='custom-bootstrap-css'
        href='wp-content/themes/organhospital/css/bootstrap.min3781.css?ver=6.2.2' type='text/css' media='all' />
    <link rel='stylesheet' id='custom-font-awesome-css'
        href='wp-content/themes/organhospital/css/font-awesome.min3781.css?ver=6.2.2' type='text/css' media='all' />
    <link rel='stylesheet' id='custom-animate-css' href='wp-content/themes/organhospital/css/animate3781.css?ver=6.2.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='custom-main-fancybox-css'
        href='wp-content/themes/organhospital/css/jquery.fancybox.min3781.css?ver=6.2.2' type='text/css' media='all' />
    <link rel='stylesheet' id='custom-main-owl-css'
        href='wp-content/themes/organhospital/css/owl.carousel.min3781.css?ver=6.2.2' type='text/css' media='all' />
    <link rel='stylesheet' id='custom-owl-theme-css'
        href='wp-content/themes/organhospital/css/owl.theme.default.min3781.css?ver=6.2.2' type='text/css'
        media='all' />
    <link rel='stylesheet' id='custom-style-css' href='wp-content/themes/organhospital/css/style3781.css?ver=6.2.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='custom-main-style-css' href='wp-content/themes/organhospital/style3781.css?ver=6.2.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='custom-responsive-css'
        href='wp-content/themes/organhospital/css/responsive3781.css?ver=6.2.2' type='text/css' media='all' />
    <script type='text/javascript' src='wp-content/themes/organhospital/js/jquery-3.3.1.min3781.js?ver=6.2.2'
        id='jquery-js'></script>
    <script type='text/javascript' id='contactus-handled-js-extra'>
    /* <![CDATA[ */
    var contactus_script = {
        "ajaxurl": "https:\/\/organhospital.com\/wp-admin\/admin-ajax.php",
        "security": "28bd4a1257"
    };
    /* ]]> */
    </script>
    <script type='text/javascript' src='wp-content/plugins/contactusnew/js/myajax3781.js?ver=6.2.2'
        id='contactus-handled-js'></script>
    <script type='text/javascript' id='contactpage-handle-js-extra'>
    /* <![CDATA[ */
    var contactpage_script = {
        "ajaxurl": "https:\/\/organhospital.com\/wp-admin\/admin-ajax.php",
        "security": "766b3a3b47"
    };
    /* ]]> */
    </script>
    <script type='text/javascript' src='wp-content/plugins/cuscontactusnew/js/newmyajax3781.js?ver=6.2.2'
        id='contactpage-handle-js'></script>
    <script type='text/javascript' src='wp-content/plugins/cuscontactusnew/js/fromvalidations3781.js?ver=6.2.2'
        id='contactpage-frmvalidation-js'></script>
    <link rel="https://api.w.org/" href="wp-json/index.html" />
    <link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/5.json" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 6.2.2" />
    <link rel='shortlink' href='index.html' />
    <link rel="alternate" type="application/json+oembed"
        href="wp-json/oembed/1.0/embed8d4f.json?url=https%3A%2F%2Forganhospital.com%2F" />
    <link rel="alternate" type="text/xml+oembed"
        href="wp-json/oembed/1.0/embed87fb?url=https%3A%2F%2Forganhospital.com%2F&amp;format=xml" />
    <meta name="generator" content="Site Kit by Google 1.108.0" />
    <link rel="apple-touch-icon" sizes="180x180" href="wp-content/uploads/fbrfg/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $line['logo'];?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $line['logo'];?>">
    <link rel="manifest" href="wp-content/uploads/fbrfg/site.webmanifest">
    <link rel="mask-icon" href="wp-content/uploads/fbrfg/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="<?php echo $line['logo'];?>">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="/wp-content/uploads/fbrfg/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130194101-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-130194101-1');
    </script>
    <meta name="google-site-verification" content="i5maJIlXl7_tH3Elk3nf25mWmcjDSfPFO4govDmMyQo" />
</head>

<body class="home page-template-default page page-id-5">

    <!-- Header  -->
    <?php
        include_once('include/header.php');
    ?>
    <section class="bannersec">
        <div class="container-fluid">
            <div class="row">
                <div class="homebannercarousel owl-carousel owl-theme">
                <?php
                    $sql= "SELECT * FROM slider_tbl ";
                    $result= mysqli_query($connection, $sql) or die("Query Failed.");
                    while($row = mysqli_fetch_array($result)){
                ?> 
                <div class="item">
                    <img alt="" src="admin/process/<?php echo $row['slider'];?>"  width="1595" height="200" class="img-fluid" />
                    <div class="content">
                        <h1 style="color:darkorange;text-align:center;font-size:25px;"> <?php echo $row['remark'];?></h1>
                    </div>
                </div>
                <?php }?>
                </div>
            </div>
        </div>
       
    </section>
    <section class="uspsec">
        <div class="container">
            <div class="row">
                <div class="uspcont_inner wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                    <div class="left_usparea">

                        <ul>
                            <li class="loca_ico_usp"><strong><u style="color:yellow;">Latest News</u></strong></li>
                           
                            <marquee behavior="up" direction="up" scrollamount="2">
                            <li class="loca_ico_usp">
                            <?php
$sql= "SELECT * FROM latest_news_tbl";
$result= mysqli_query($connection, $sql) or die("Query Failed.");
while($row = mysqli_fetch_array($result)){
?>
                            <h6 style="color:lightgreen;"><?php echo $row['title'];?></h6>
                            <p style="color:white;">*&nbsp;&nbsp;<?php echo $row['description'];?><br>
                            *&nbsp;&nbsp;<b><?php echo $row['date'];?></b></p>
                            <?php } ?>
                            </li>
                            </marquee>
                            
                        </ul>
                        
                        <a data-toggle="modal" data-target="#AppoModal" class="book_btn_usp">Book your appointment
                            today
                        </a>
                    </div>
                    <div class="right_usp_area">
                        <h1 class="usptitle">Organ Hospital is provide many more services on affordable price.</h1>
                        <ul>
                            <li><img alt="organ Hospital" src="wp-content/uploads/2019/10/first-aid-kit.svg" width="50"
                                    height="50" /> Medical<br />Excellence</li>
                            <li><img alt="organ Hospital" src="wp-content/uploads/2019/10/nurse.svg" width="50"
                                    height="50" /> Friendly<br />Staff</li>
                            <li><img alt="organ Hospital" src="wp-content/uploads/2019/10/ambulance-1.svg" width="50"
                                    height="50" /> 24x7<br />Support</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="guidelinesec">
        <div class="guide_background"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                 <h2 class="guide-title clearfix"><span>Quick Guide</span></h2>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4 col-sm-12 col-xs-12 margin-bottom-20 wow fadeInUp" data-wow-duration="0.8s"
                            data-wow-delay="0.5s">
                            <div class="box_guide">
                                <div class="guidebed-ico guideico"></div>
                                <h2>Book an Appointment</h2>
                                <p>For a detailed consultation or planned health check-ups, you can book an appointment
                                    in advance (if required).</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 col-xs-12 margin-bottom-20 wow fadeInUp" data-wow-duration="0.8s"
                            data-wow-delay="0.7s">
                            <div class="box_guide">
                                <div class="guideboard-ico guideico"></div>
                                <h2>Find a Doctor</h2>
                                <p>To find the suitable doctor that you want to consult with, you can just scroll the
                                    department list and fix an appointment according to their OPD timings.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 col-xs-12 margin-bottom-20 wow fadeInUp" data-wow-duration="0.8s"
                            data-wow-delay="0.9s">
                            <div class="box_guide">
                                <div class="guidepatient-ico guideico"></div>
                                <h2>Book a Health-Package</h2>
                                <p>Taking care of your own-self or your loved one's was never so easy. We have a choice
                                    of heal-checkup packages which are affordable too.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="whyorgansec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10 offset-md-1 col-sm-10 offset-sm-1 col-xs-12 offset-xs-0 ">
                    <div class="row">
                        <div class="whypoints_outer">
                            <ul>
                                <li class="wow zoomIn" data-wow-duration="0.8s" data-wow-delay="0.4s">
                                    <span class="num">01</span>
                                    <h3>Cost<br />Effective</h3>
                                    <span class="why-ico whyico_a"></span>
                                </li>
                                <li class="wow zoomIn" data-wow-duration="0.8s" data-wow-delay="0.6s">
                                    <span class="num">02</span>
                                    <h3>Advanced<br />Medical<br />Facilities</h3>
                                    <span class="why-ico whyico_b"></span>
                                </li>
                                <li class="wow zoomIn" data-wow-duration="0.8s" data-wow-delay="0.8s">
                                    <span class="num">03</span>
                                    <h3>Qualified & <br />Experienced Doctors</h3>
                                    <span class="why-ico whyico_c"></span>
                                </li>
                                <li class="wow zoomIn" data-wow-duration="0.8s" data-wow-delay="1s">
                                    <span class="num">04</span>
                                    <h3>24x7 Dedicated<br />Support</h3>
                                    <span class="why-ico whyico_d"></span>
                                </li>
                            </ul>
                        </div>
                        <div class="whypoints_desc">
                            <div class="content_why wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">
                                <h3>Why Organ Hospital</h3>
                                <p>People recommend us, because we have:</p>
                                <ul>
                                    <li>Equipped with World-Class facilities and dedicated medical professionals, our
                                        patients call us one of the best hospital in West Delhi.</li>
                                    <li>Our prime focus lies in bringing the highest standards of healthcare to every
                                        individual reach at affordable prices.</li>
                                    <li>Organ Hospital is provide many more services on affordable cost.</li>
                                    <li>Supported with expertise and cutting edge technology, we are one of the leading
                                        hospital in Delhi, with all the facilities, under one roof.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="quotesec">
        <div class="container-fluid">
            <div class="quote_inner  wow zoomInUp" data-wow-duration="1s" data-wow-delay="0.3s">

                <h2>AT THE TIME OF EMERGENCY, FOR APPOINTMENTS OR FOR ANY QUERY,</h2>

                <p>Contact us on below number or schedule an appointment by clicking below</p>

                <img alt="organ Hospital" src="wp-content/themes/organhospital/images/value.svg" width="93"
                    height="93" />

                <ul>

                    <li class="call_area_quote"><a href="tel:+91-9415235157"><img alt="Organ Hospital"
                                src="wp-content/themes/organhospital/images/24-hours-support.svg" width="93" height="93"
                                class="img-fluid" />+91-9415235157</a></li>

                    <li class="book_area_quote"><a data-toggle="modal" href="#" data-target="#AppoModal">Book
                            Appointment</a></li>

                </ul>

            </div>

        </div>

    </section>





    



    <section class="uspthreesec">

        <div class="container-fluid">

            <ul>

                <li class="wow bounceInDown" data-wow-duration="0.8s" data-wow-delay="0.4s">

                    <span class="ico_usp3 usp3_a"></span>

                    <h3>

                        <span>Over 20 Years of </span> EXPERIENCE
                    </h3>

                </li>

                <li class="wow bounceInDown" data-wow-duration="0.8s" data-wow-delay="0.6s">

                    <span class="ico_usp3 usp3_b"></span>

                    <h3>

                        <span>World-Class </span> ART INFRASTRUCTURE
                    </h3>

                </li>

                <li class="wow bounceInDown" data-wow-duration="0.8s" data-wow-delay="0.8s">

                    <span class="ico_usp3 usp3_c"></span>

                    <h3>

                        <span>Experienced and Specialized </span>SURGEONS
                    </h3>

                </li>

            </ul>

        </div>

    </section>



    <section class="testimonialsec clearfix">

        <div class="container-fluid">

            <div class="testimonial_inner">

                <h2 class="testimonial_header">Testimonials</h2>

                <div class="testimonialcarousel owl-carousel owl-theme">


                    <div class="item wow flipInX" data-wow-duration="0.8s" data-wow-delay="0.4s">

                        <p>Excellent caretaking and best doctors diagnosis and above all best administration hold by
                            Raman and HR Mrs.Andriya panda</p>

                        <h4>Geetika Verma</h4>
                        <h5>Patient, Azamgarh</h5>
                    </div>


                    <div class="item wow flipInX" data-wow-duration="0.8s" data-wow-delay="0.4s">

                        <p>one of the best hospital I've ever seen. Doctors and all d staffs r very friendly and caring.
                        </p>

                        <h4>Sainorita Sharma</h4>
                        <h5>Patient, Jaunpur</h5>
                    </div>


                    <div class="item wow flipInX" data-wow-duration="0.8s" data-wow-delay="0.4s">

                        <p>The best hospital in the Karchhana area. They care 1st for patients...</p>

                        <h4>Mahesh </h4>
                        <h5>Patient, Mirzapur</h5>
                    </div>


                    <div class="item wow flipInX" data-wow-duration="0.8s" data-wow-delay="0.4s">

                        <p>Best hospital in Area with very good service. Very satisfied with the maternity service. My
                            both baby born here with normal delivery. Nice n polite staff.</p>

                        <h4>Sruti Deshmukh </h4>
                        <h5>Patient, Mau</h5>
                    </div>


                    <div class="item wow flipInX" data-wow-duration="0.8s" data-wow-delay="0.4s">

                        <p>The best treatment ever at a minimal cost. Best doctors.</p>

                        <h4>Suresh Pandey </h4>
                        <h5>Patient, Kanpur</h5>
                    </div>


                    <div class="item wow flipInX" data-wow-duration="0.8s" data-wow-delay="0.4s">

                        <p>Awsome hospital with excellent services. very caring all doctor & admin team too.also the
                            owner takes care personally for everyone.</p>

                        <h4>Zayda Khan</h4>
                        <h5>Patient, Pilibhit</h5>
                    </div>


                    <div class="item wow flipInX" data-wow-duration="0.8s" data-wow-delay="0.4s">

                        <p>Excellent Hospital. Staffs are very nice. I think their goal is 100% patient care &amp; their
                            commitment is highest quality care.</p>

                        <h4>Ms. Srivastava</h4>
                        <h5>Patient, Mumbai</h5>
                    </div>


                    <div class="item wow flipInX" data-wow-duration="0.8s" data-wow-delay="0.4s">

                        <p>Awesome facilities and staff behavior...</p>

                        <h4>Arun Kalia</h4>
                        <h5>Patient, Chandigarh</h5>
                    </div>


                    <div class="item wow flipInX" data-wow-duration="0.8s" data-wow-delay="0.4s">

                        <p>Awesome hospital and best facility's.dr.aman organ is very cooperative and very talented.</p>

                        <h4>Shivendra Pratap Singh</h4>
                        <h5>Patient, Mumbai</h5>
                    </div>


                </div>

            </div>

        </div>

    </section>





    <section class="docvideosec clearfix">

        <div class="container-fluid">

            <div
                class="docvideo_inner col-lg-10 offset-lg-1  col-md-12 offset-md-0 col-sm-12 offset-sm-0 col-xs-12 offset-xs-0 ">





                <ul>

                    <li class="docvideo_header_outer">
                        <h2 class="docvideo_header"><span>Watch what our</span> doctor says</h2>
                    </li>



                    <li class="doc_vid_frame wow pulse" data-wow-duration="0.5s" data-wow-delay="0.4s">

                        <iframe width="560" height="315"
                            src="https://www.youtube.com/embed/Hy1qjQomD8Y?si=Onq1TvHC8JmosbB7" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>

                    </li>



                    <li class="doc_vid_frame wow pulse" data-wow-duration="0.5s" data-wow-delay="0.6s">

                        <iframe width="560" height="315"
                            src="https://www.youtube.com/embed/pmZkx8ZVeMw?si=TVKpX7LK3ZPeFH2j" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>

                    </li>



                </ul>

            </div>

        </div>

    </section>
    <!-- Footer -->
    <?php
        include_once('include/footer.php');
    ?>
    <!-- Appointment Modal -->
    <?php
        include_once('include/appointment_form.php');
    ?>
    <!-- Appointment Modal -->
    <div class="modal fade" id="enquiryModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content enquiry_form_modal">
                <div class="modal-header">
                    <div class="col-md-12">
                        <div class="row">
                            <h4 class="modal-title col-md-12">Enquiry Form</h4>
                            <p class=" col-md-12">You can also call @ <strong>+91-9555-059-059</strong> for assistance
                            </p>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                    </div>
                </div>
                <div class="">
                    <form name="contactus" action="#" id="contactusForm">
                        <div class="">
                            <div class="row">
                                <div class=" col-xs-12  col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12"><label for="name">Your
                                            Name:</label> <input class="contact_text_1" placeholder="Sujit Kumar"
                                            name="firstname" id="name" value="" type="text" required>
                                    </div>
                                </div>

                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12"><label for="emailid">Your
                                            E-mail:</label>
                                        <input placeholder="xyz@email.com" class="contact_text_1" type="text"
                                            name="email" value="" required>
                                    </div>

                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12"><label for="phone">Your Phone
                                            Number:</label>
                                        <input class="contact_text_1" placeholder="+91 90*** ***52" type="tel"
                                            minlength="10" maxlength="10" name="phone" value="" required>
                                    </div>
                                </div>
                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        <select name="speciality" class="contact_text_1">
                                            <option value="">--- Choose Speciality---</option>
                                            <option value="Institute of Bariatric and Metabolic Surgery">Institute of
                                                Bariatric and Metabolic Surgery</option>
                                            <option value="Minimal Access, Bariatric &amp; General Surgery">Minimal
                                                Access, Bariatric &amp; General Surgery</option>
                                            <option value="Gynaecology">Gynaecology</option>
                                            <option
                                                value="Maternity Services &amp; Luxurious Labour Delivery Room (LDR)">
                                                Maternity Services &amp; Luxurious Labour Delivery Room (LDR)</option>
                                            <option value="Paediatrics &amp; Neonatology">Paediatrics &amp; Neonatology
                                            </option>
                                            <option value="Peadiatric Surgery">Peadiatric Surgery</option>
                                            <option value="New Born Intensive Care (NICU)">New Born Intensive Care
                                                (NICU)</option>
                                            <option value="Orthopaedics">Orthopaedics</option>
                                            <option value="Internal Medicine">Internal Medicine</option>
                                            <option value="IVF Clinic managed by Southend Fertility &amp; IVF">IVF
                                                Clinic managed by Southend Fertility &amp; IVF</option>
                                            <option value="Endocrinology &amp; Diabetes">Endocrinology &amp; Diabetes
                                            </option>
                                            <option value="Urology">Urology</option>
                                            <option value="ENT">ENT</option>
                                            <option value="Pulmonology &amp; Sleep Disorders">Pulmonology &amp; Sleep
                                                Disorders</option>
                                            <option value="Nephrology">Nephrology</option>
                                            <option value="Neurosurgery">Neurosurgery</option>
                                            <option value="Ophthalmology">Ophthalmology</option>
                                            <option value="Cardiology">Cardiology</option>
                                            <option value="Anaesthesia">Anaesthesia</option>
                                            <option value="Oncology">Oncology</option>
                                            <option value="Hematologist">Hematologist</option>
                                            <option value="Psychiatry">Psychiatry</option>
                                            <option value="Physiotherapy">Physiotherapy</option>
                                            <option value="Neurology">Neurology</option>
                                            <option value="Interventional Pain Management">Interventional Pain
                                                Management</option>
                                            <option value="Dental Clinic managed by Aashray Green Dental Practice">
                                                Dental Clinic managed by Aashray Green Dental Practice</option>
                                            <option value="Rheumatology">Rheumatology</option>
                                            <option value="Vein Clinic">Vein Clinic</option>
                                            <option
                                                value="Department of Dermatology, Plastic, Reconstructive, Aesthetic Surgery &amp; Hair Transplant Surgery">
                                                Department of Dermatology, Plastic, Reconstructive, Aesthetic Surgery
                                                &amp; Hair Transplant Surgery</option>
                                            <option value="Gastroenterology">Gastroenterology</option>
                                        </select>
                                    </div>
                                </div>

                                <div class=" col-xs-12  col-sm-12 col-md-6 col-lg-6 col-xl-6"><label for="message">Your
                                        Query:</label> <textarea placeholder="Type the text here" class="contact_text_3"
                                        style="resize: none;" name="query"></textarea></div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12"><input value="Submit" type="submit"
                                    class="submit"></div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <!-- back to top -->
    <a href="#" id="back-to-top" title="Back to top" class="show"><i class="fa fa-chevron-up"></i></a>
    <!-- jq -->
    <script type='text/javascript' src='wp-content/themes/organhospital/js/bootstrap.min68c3.js?ver=20151811'
        id='custom-bootstrap-min-js'></script>
    <script type='text/javascript' src='wp-content/themes/organhospital/js/owl.carousel.min68c3.js?ver=20151811'
        id='custom-carousel-js'></script>
    <script type='text/javascript' src='wp-content/themes/organhospital/js/jquery.fancybox.min68c3.js?ver=20151811'
        id='custom-fancybox-js'></script>
    <script type='text/javascript' src='wp-content/themes/organhospital/js/wow.min68c3.js?ver=20151811'
        id='custom-wow-js'></script>
    <script type='text/javascript' src='wp-content/themes/organhospital/js/scrollBar68c3.js?ver=20151811'
        id='scrollBar-wow-js'></script>
    <script type='text/javascript' src='wp-content/themes/organhospital/js/script68c3.js?ver=20151811'
        id='custom-script-js'></script>
</body>
</html>