<!DOCTYPE html>

<html>
  <head>
  	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>40X.ME</title>
    <!-- Path to Framework7 Library CSS-->
    <link rel="stylesheet" href="css/framework7.material.css">
    <link rel="stylesheet" href="css/framework7.material.colors.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/kitchen-sink.css">
    <link rel="stylesheet" href="css/jjcss.css">
  </head>
  <body class="theme-yellow">
    <!-- Left panel -->
    <div class="panel-overlay"></div>
    <div class="panel panel-left panel-reveal">
        <div class="content-block">
              <!--<span class="icon-user"></span><br>
              <strong>WeInvest LLC</strong> -->
              	<div class="list-block">
                    <ul>
                    <li>
                    	<a class="item-link close-panel" href="home.php">
                    		<div class="item-inner">
                    			<div class="item-title color-black">Home</div>
                   			</div>
                        </a>
                    </li>
                    <!--<li>
                    	<a class="item-link close-panel" href="home.html">
                    		<div class="item-inner">
                    			<div class="item-title">Manage Funds</div>
                   			</div>
                        </a>
                    </li> -->
                    <li>
                    	<a class="item-link close-panel" href="profile.php">
                    		<div class="item-inner">
                    			<div class="item-title color-black">Account</div>
                   			</div>
                        </a>
                    </li>
                    <li>
                    	<a class="item-link close-panel" href="about-startup-moola.html">
                    		<div class="item-inner">
                    			<div class="item-title color-black">About</div>
                   			</div>
                        </a>
                    </li>
                    <!--<li>
                    	<a class="item-link close-panel" href="home.html">
                    		<div class="item-inner">
                    			<div class="item-title">Billing</div>
                   			</div>
                        </a>
                    </li> -->
                    </ul>
				</div>
                <p> <a href="index.php" class="button close-panel color-black button-border">Logout</a></p>
    	</div>
    </div>
    <!-- Views-->
    <div class="views">
      <!-- Your main view, should have "view-main" class-->
      <div class="view view-main">
        <!-- Pages, because we need fixed-through navbar and toolbar, it has additional appropriate classes-->
        <div class="pages navbar-through toolbar-through navbar-fixed">
          <!-- Page, data-page contains page name-->
          <div data-page="index" class="page">
            <!-- Scrollable page content-->
            <div data-pagination=".swiper-pagination" data-paginationHide="true" class="swiper-container swiper-init ks-demo-slider">
              <div class="swiper-pagination"></div>
              <div class="swiper-wrapper">
                <div class="swiper-slide slide01">
                    <div class="slide-content">
                    	<img src="img/40xsmalltrans-300x300.png" alt="">
                        <div class="clearfix-20"></div>
                        <div class="text-yellow"></div>
						<div class="slide-content-bottom">
                        <a class="button button-big button-block color-yellow" href="signin.php">Login</a>
                        <div class="clearfix-10"></div>
                     	<a class="button button-big button-block color-yellow" href="test.html">Apply</a>
                        <div class="clearfix-10"></div>
                     	</div>
                     </div>
                </div>
                <div class="swiper-slide slide02">
                    <div class="slide-content">
                    	<img src="img/40xsmalltrans-300x300.png" alt="">
                        <div class="clearfix-20"></div>
                        <div class="text-yellow"></div>
						<div class="slide-content-bottom">
                        <a class="button button-big button-block color-yellow" href="signin.php">Login</a>
                        <div class="clearfix-10"></div>
                     	<a class="button button-big button-block color-yellow" href="test.html">Apply</a>
                        <div class="clearfix-10"></div>
                     	</div>
                     </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
	<!-- Start Popup -->
    <div class="popup more-menu">
        <div class="view">
        	<div class="pages">
        		<div class="page">

                    <div class="page-content">
                        <div class="content-block">
                        	<div class="clearfix-20"></div>
                            <a href="#" class="link close-popup icon-close-popup"><span class="icon-cancel"></span></a>
                        	<a href="home.html" class="link close-popup"><img src="img/40xlogo.png" alt="" ></a>
                            <div class="clearfix-20"></div>
                            <p><a href="terms-conditions.html" class="button close-panel color-white button-border close-popup">Terms &amp; Conditions</a></p>
                        </div>
                    </div>
                </div>
        	</div>
        </div>
	</div>
	<!-- End Popup -->
    
    <!-- Path to Framework7 Library JS-->
    <script type="text/javascript" src="js/framework7.min.js"></script>
    <!-- Path to your app js-->
    <script type="text/javascript" src="js/kitchen-sink.js"></script>
  </body>
</html>