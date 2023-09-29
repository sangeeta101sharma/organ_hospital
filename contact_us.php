<?php include_once('config/config.php');?>
<?php
$sql= "SELECT * FROM contact_us_tbl";
$result= mysqli_query($connection, $sql) or die("Query Failed.");
 $queue  = mysqli_fetch_array($result);

?>

<!DOCTYPE html>

<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="<?php echo $row['favicon'] ;?>" type="image/x-icon">

    <link rel="icon" href="<?php echo $row['favicon'] ;?>" type="image/x-icon">

    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />

    <!-- This site is optimized with the Yoast SEO plugin v21.0 - https://yoast.com/wordpress/plugins/seo/ -->
    <title><?php echo $title;?></title>
    <meta name="description"
        content="Get the proper treatment, everything you get Contact details – Hospital Phone Number, Address, Mail ID." />
    <link rel="canonical" href="index.html" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Get the Consultation of Doctors- Contact Us | organ Hospital" />
    <meta property="og:description"
        content="Get the proper treatment, everything you get Contact details – Hospital Phone Number, Address, Mail ID." />
    <meta property="og:url" content="index.html" />
    <meta property="og:site_name" content="Organ Hospital" />
    <meta property="article:publisher" content="https://www.facebook.com/mrrmhospital" />
    <meta property="article:modified_time" content="2019-11-13T11:11:30+00:00" />
    <meta property="og:image" content="wp-content/uploads/2022/03/Logo-PNG.png" />
    <meta property="og:image:width" content="213" />
    <meta property="og:image:height" content="47" />
    <meta property="og:image:type" content="image/png" />
    <meta name="twitter:card" content="summary_large_image" />
    <script type="application/ld+json" class="yoast-schema-graph">
    </script>
    <!-- / Yoast SEO plugin. -->


    <link rel='dns-prefetch' href='http://www.googletagmanager.com/' />
    <script type="text/javascript">
    window._wpemojiSettings = {
        "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
        "ext": ".png",
        "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
        "svgExt": ".svg",
        "source": {
            "concatemoji": "https:\/\/organhospital.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.2.2"
        }
    };
    /*! This file is auto-generated */
    ! function(e, a, t) {
        var n, r, o, i = a.createElement("canvas"),
            p = i.getContext && i.getContext("2d");

        function s(e, t) {
            p.clearRect(0, 0, i.width, i.height), p.fillText(e, 0, 0);
            e = i.toDataURL();
            return p.clearRect(0, 0, i.width, i.height), p.fillText(t, 0, 0), e === i.toDataURL()
        }

        function c(e) {
            var t = a.createElement("script");
            t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
        }
        for (o = Array("flag", "emoji"), t.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, r = 0; r < o.length; r++) t.supports[o[r]] = function(e) {
            if (p && p.fillText) switch (p.textBaseline = "top", p.font = "600 32px Arial", e) {
                case "flag":
                    return s("\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !
                        1 : !s("\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !s(
                            "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                            "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                            );
                case "emoji":
                    return !s("\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff",
                        "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff")
            }
            return !1
        }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports
            .everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
        t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t
            .readyCallback = function() {
                t.DOMReady = !0
            }, t.supports.everything || (n = function() {
                t.readyCallback()
            }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !
                1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function() {
                "complete" === a.readyState && t.readyCallback()
            })), (e = t.source || {}).concatemoji ? c(e.concatemoji) : e.wpemoji && e.twemoji && (c(e.twemoji), c(e
                .wpemoji)))
    }(window, document, window._wpemojiSettings);
    </script>
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

    <!-- Google Analytics snippet added by Site Kit -->
    <script type='text/javascript' src='https://www.googletagmanager.com/gtag/js?id=UA-236833799-1'
        id='google_gtagjs-js' async></script>
    <script type='text/javascript' id='google_gtagjs-js-after'>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('set', 'linker', {
        "domains": ["organhospital.com"]
    });
    gtag("js", new Date());
    gtag("set", "developer_id.dZTNiMT", true);
    gtag("config", "UA-236833799-1", {
        "anonymize_ip": true
    });
    gtag("config", "G-K4GRHNQQM8");
    </script>

    <!-- End Google Analytics snippet added by Site Kit -->
    <link rel="https://api.w.org/" href="wp-json/index.html" />
    <link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/19.json" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 6.2.2" />
    <link rel='shortlink' href='index5831.html?p=19' />
    <link rel="alternate" type="application/json+oembed"
        href="wp-json/oembed/1.0/embed9905.json?url=https%3A%2F%2Forganhospital.com%2Fcontact-us%2F" />
    <link rel="alternate" type="text/xml+oembed"
        href="wp-json/oembed/1.0/embedd3aa?url=https%3A%2F%2Forganhospital.com%2Fcontact-us%2F&amp;format=xml" />
    <meta name="generator" content="Site Kit by Google 1.108.0" />
    <link rel="apple-touch-icon" sizes="180x180" href="wp-content/uploads/fbrfg/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $row['logo'] ;?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $row['logo'] ;?>">
    <link rel="manifest" href="wp-content/uploads/fbrfg/site.webmanifest">
    <link rel="mask-icon" href="wp-content/uploads/fbrfg/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="<?php echo $row['favicon'] ;?>">
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

<body class="page-template page-template-tpl-contact-us page-template-tpl-contact-us-php page page-id-19">


    <!-- Header  -->
    <?php include_once('include/header.php');?>
    <section>
        <div class="inner-banner">
            <img src="images/slider11.jpg" alt="Contact Us" title="organ Hospital">
        </div>
        <div class="breadcrumb_outer">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li>Contact Us</li>
                </ol>
            </div>
        </div>
        <div class="clearfix"></div>
    </section>

    <?php
$sql= "SELECT * FROM contact_us_tbl";
$result= mysqli_query($connection, $sql) or die("Query Failed.");
while($queue = mysqli_fetch_array($result)){


?>


    <section>
        <div class="div-mtb">
            <div class="container">
            <div class="text-center">
                 <h1 class="title-1"><?php echo $queue['office_location'];?></h1>
            </div>
                <div class="contact-us">
                    <div class="contact-us-1">
                        <div class="contact-us-2">
                            <div class="contact-us-2a"><i class="fa fa-map-marker"></i></div>
                            <div class="contact-us-2con">
                                <h3>Address</h3>
                                <p><?php echo $queue['address'] ;?></p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="contact-us-1">
                        <div class="contact-us-2">
                            <div class="contact-us-2a"><i class="fa fa-phone"></i></div>
                            <div class="contact-us-2con">
                                <h3>Phone</h3>
                                <p><strong>Mobile No:</strong> 
                                <a href=" <?php echo $queue['contact'];?>"> <?php echo $queue['contact'];?></a>
                                </p>
                                <!-- <p><strong>Mobile No:</strong>
                                 <a href=""></a>
                                 </p> -->
                            </div>
                        </div>
                    </div>
                    <div class="contact-us-1">
                        <div class="contact-us-2">
                            <div class="contact-us-2a"><i class="fa fa-envelope-o"></i></div>
                            <div class="contact-us-2con">
                                <h3>Email</h3>
                                <p><a href="<?php echo $queue['email'];?>"><?php echo $queue['email'] ;?></a> </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                
            </div>

        </div>
        </div>
        <div class="clearfix"></div>
    </section>
   
   
   <?php }?>

    <!-- Footer Start -->
    <?php include_once('include/footer.php');?>
    <!-- Footer End -->
 <!-- Appointment Modal -->
 <?php
        include_once('include/appointment_form.php');
    ?>
    <!-- Appointment Modal -->

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