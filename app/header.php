<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> </html><![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> </html><![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> </html><![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8" />

    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />

    <!-- Page title -->
    <title><?php echo $system['site_title'] ?></title>

     <!-- build:css({.tmp,app}) /_/css/lib/html5bp.css -->
    <link rel="stylesheet" href="/_/css/foundation.css" />
    <link rel="stylesheet" href="/_/css/font-awesome.css" />
    <link rel="stylesheet" href="/_/css/refineslide.css" />
    <link rel="stylesheet" href="/_/css/jquery.fancybox-1.3.4.css" />
     <!-- endbuild -->
    
   <!-- build:css({.tmp,app}) /_/css/site-styles.css -->
        
        <link rel="stylesheet" type="text/css" href="/_/css/main.css">
        <link rel="stylesheet" type="text/css" href="/_/css/layout.css">
       

        <!-- endbuild -->
    
    <!-- Favicons -->
    <link rel="shortcut icon" href="favicon.png" />
    <link rel="apple-touch-icon" href="apple-touch-icon.png" />
    
     <!-- build:js /_/js/lib/modernizr/modernizr.js -->
        <script src="/_/bower_components/modernizr/dist/js/modernizr.js"></script>
        <!-- endbuild -->
    <!--[if lt IE 9 ]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <![endif]-->

    <!-- IE Fix for HTML5 Tags -->
    
    <!--[if lt IE 9]>
    <script src="js/html5.js"></script>
    <![endif]-->

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body><!-- Add class="fluid" for fluid layout -->

<!-- Main container -->
<div class="container">

    <!-- Header -->
    <div class="box">
        <header class="row clearfix">

            <h1>
                <a href="index.html"><img src="_/img/logo.jpg" alt="Difference" /></a>
            </h1>

            <nav class="desktop">
                <ul>
                    <li>
                        <a class="selected" href="#">首頁</a>

                    </li>
                    <li>
                        <a href="price.html" >治療方法及價目</a>
                    </li>


                    <li>
                        <a href="category.php">疾病</a>
                        <ul>
                            <li> <a href="category.php">保健</a></li>
                            <li> <a href="category.php">食療</a></li>
                            <li> <a href="category.php">疾病常識</a></li>

                        </ul>
                    </li>
                    
                    <li>
                        <a href="category.php">藥案與專欄</a>
                        <ul>
                            <li> <a href="category.php">保健</a></li>
                            <li> <a href="category.php">食療</a></li>
                            <li> <a href="category.php">疾病常識</a></li>

                        </ul>
                    </li>

                    <li>
                        <a href="contact.html">聯絡醫師</a></li>
                     <li>
                        <a href="category.php">語言選擇</a>
                        <ul>
                            <li> <a href="category.php">繁體中文</a></li>
                            <li> <a href="category.php">English</a></li>
                        </ul>
                    </li>

                </ul>

            </nav>

            <!-- Tablet navigation -->
            <nav class="mobile tablet"></nav>

        </header>
    </div>


    <!-- Mobile navigation -->
    <nav class="mobile box"></nav>


