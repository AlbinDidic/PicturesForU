<!DOCTYPE html>
<html lang="en">
<head>
    <!-- start: Meta -->
    <meta charset="utf-8">
    <title>Pictures4U</title>
    <meta content="Use your facebook account tu upload pictures to your profile" name="description">
    <meta content="dark, responsive, portofolio, single page, facebook, picture" name="keywords">
    <!-- end: Meta -->

    <!-- start: Mobile Specific -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <!-- end: Mobile Specific -->

    <!-- start: CSS -->
    <link rel="stylesheet" href="motion/css/bootstrap.css">
    <link rel="stylesheet" href="motion/css/bootstrap-responsive.css">
    <link rel="stylesheet" href="motion/css/font-awesome.css">
    <link rel="stylesheet" href="motion/css/font-awesome-ie7.min.css">
    <link rel="stylesheet" href="motion/css/responsiveslides.css">
    <link rel="stylesheet" href="motion/css/image-grid.css">
    <link rel="stylesheet" href="motion/css/style.css">
    <link rel="stylesheet" href="css/site.css">
    <!-- end: CSS -->

    <!-- start: favicon -->
    <link href="//s3.amazonaws.com/wrapbootstrap/live/imgs/favicon.ico" rel="shortcut icon">
    <!-- end: favicon -->

    <!-- start: font -->
    <link href='http://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
    <!-- end: font -->

    <!--[if IE 9]>
    <style>.social {display:none;}.navbar .nav > li > .connect {display:none;}</style>
    <![endif]-->
    <!--[if IE 8]>
    <style>.ch-grid {float: left;}.ch-grid li {float: left;margin-left:100px;}.about-pattern {background-position: center;background-repeat: repeat-x;border:none;}</style>
    <![endif]-->
</head>

<body>
<!--start: facebook init-->
<div id="fb-root"></div>
<script src="http://connect.facebook.net/en_US/all.js"></script>
<script>
    FB.init({
        appId  : '239477162925497',
        status : true,
        cookie : true,
        xfbml  : true
    });
</script>
<!--end: facebook init-->

<!--start: Header -->
<header>
    <div class="menu-fixed">
        <!--start: Container -->
        <div class="container">
            <!--start: Row -->
            <div class="row">
                <a href="{{ URL::to('/') }}" class="logo"><span>Pictures4U</span></a>
                <!--start: Navigation -->
                <div class="navbar navbar-inverse">
                    <div class="navbar-inner">
                        <a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar collapsed">
                            <span class="icon-reorder"></span>
                        </a>
                        <div class="nav-collapse collapse">
                            <ul class="nav pull-right">
                                @section('links')
                                @show
                            </ul>
                        </div>
                    </div>
                </div><!--end: Navigation -->
            </div><!--end: Row -->
        </div><!--end: Container -->
    </div>
</header>
<!--end: Header -->

{{ $content }}

<!-- start: script -->
<script src="motion/js/jquery.js"></script>
<script src="motion/js/bootstrap.min.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
<script src="motion/js/gmap3.min.js"></script>
<script src="motion/js/jquery.anchor.js"></script>
<script src="motion/js/modernizr.custom.26633.js"></script>
<script src="motion/js/jquery.gridrotator.js"></script>
<script src="motion/js/custom.js"></script>
<script src="scripts/face.js"></script>
<script src="scripts/jquery.lazyload.js"></script>
<!-- end: script -->

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<script src="motion/js/lte-ie7.js"></script>
<![endif]-->
</body>
</html>