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
            <div class="list-block">
                <ul>
                    <li>
                        <a class="item-link close-panel" href="#home">
                            <div class="item-inner">
                                <div class="item-title color-black">Home</div>
                            </div>
                        </a>
                    </li>
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
                                        <a class="button button-big button-block color-yellow" href="#signin">Login</a>
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
                                        <a class="button button-big button-block color-yellow" href="#signin">Login</a>
                                        <div class="clearfix-10"></div>
                                        <a class="button button-big button-block color-yellow" href="test.html">Apply</a>
                                        <div class="clearfix-10"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-page="signin" class="page cached">
                    <!-- Top Navbar-->
                    <div class="theme-black navbar">
                        <div class="theme-black navbar-inner">
                            <div class="left"><a class="link back" href="#"><span class="icon-back"></span><span>Back</span></a></div>
                            <div class="right">
                                <a href="index.php" class="link"><img src="img/logo.png" alt="" height="42" width="42"></a>
                            </div>
                        </div>
                    </div>
                    <!-- Scrollable page content-->
                    <div class="page-content">
                        <div class="content-block">
                            <div class="page-title">
                                <strong>Log In</strong>
                            </div>
                            <form id="login-form" method='get' action="" class="ajax-submit">
                                <div class="list-block form-list-block">
                                    <ul>
                                        <li class="item-content">
                                            <div class="item-inner">
                                                <div class="item-title label jj-yellow">User Name</div>
                                                <div class="item-input">
                                                    <input style="color: yellow" type="text" name="username" placeholder="Enter User ID">
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item-content">
                                            <div class="item-inner">
                                                <div class="item-title label jj-yellow">Password</div>
                                                <div class="item-input">
                                                    <input style="color: yellow" type="password" name="password" placeholder="Enter Password">
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item-content">
                                            <label class="label-checkbox item-content">
                    <input type="checkbox" value="remember" name="my-checkbox">
                    <div class="item-media">
                      <i class="icon icon-form-checkbox jj-yellow"></i>
                    </div>
                      Remember Me
                  </label>
                                        </li>
                                    </ul>
                                    <div class="clearfix-10"></div>
                                    <a id="login-btn" class="button button-big button-fill button-block" href='#'>Submit</a>
                                </div>
                            </form>
                            <div class="text-center">

                                Don’t have an account? <a href="test.html"><span class="icon-edit"></span>  Apply</a>
                                <div class="clearfix-10"></div>
                                <a href="forgot-password.html"><span class="icon-question"></span>  Forgot password? </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-page="home" class="page cached">
                    <!-- Top Navbar-->
                    <div class="theme-black navbar">
                        <div class="theme-black navbar-inner">
                            <div class="left">
                                <a class="link icon-only open-panel" href="#"> <span class="icon-menu"></span></a>
                            </div>
                            <div class="center"><span class="text-yellow user-name">We-Invest LL</span></div>
                            <div class="right">
                                <a class="link open-popup" data-popup=".more-menu" href="#"><img src="img/logo.png" alt="" height="42" width="42"></a>
                            </div>
                        </div>
                    </div>
                    <!-- Scrollable page content-->
                    <div class="page-content">
                        <div class="content-block">

                            <div class="page-title">
                                <div class="col-50">
                                    <a class="button button-small button-block color-yellow" href="#">
                                        <div class="row"><span class="text-yellow">Balance</span>
                                            <span class="text-yellow"><span class="icon-dollar-symbol"></span><span style="margin-left: 0px" class="balance-count">45,213</span></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="clearfix-10"></div>
                                <div class="clearfix-20"></div>
                                <div class="clearfix-30"></div>
                                <div class="page-subtitle text-center">Emerging Companies</div>
                                <div class="list-block">
                                    <ul>
                                        <li>
                                            <div class="content-block">
                                                <span>
                                <img src="img/logo04.png" alt="" align="middle">
                                <div class="clearfix"></div>
                                <a id="company-1" class="button button-small button-fill button-center color-yellow" href="#company">View Details</a>
                            </span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="content-block">
                                                <span>
                            <img src="img/logo02.png" alt="" align="middle">
                            <div class="clearfix"></div>
                            <a id="company-2" class="button button-small button-fill button-center color-yellow" href="#company">View Details</a>
                  	</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="content-block">
                                                <span>
                            <img src="img/logo03.png" alt="" align="middle">
                            <div class="clearfix"></div>
                            <a id="company-3" class="button button-small button-fill button-center color-yellow" href="#company">View Details</a>
                  	</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div data-page="company" class="page cached">
                    <!-- Top Navbar-->
                    <div class="theme-black navbar">
                        <div class="navbar-inner">
                            <div class="left">
                                <a class="link icon-only open-panel" href="#"> <span class="icon-menu"></span></a>
                            </div>
                            <div class="center"><span class="text-yellow user-name">We-Invest LL</span></div>
                            <div class="right">
                                <a class="link open-popup" data-popup=".more-menu" href="#"><img src="img/logo.png" alt="" height="42" width="42"></a>
                            </div>
                        </div>
                    </div>
                    <!-- Scrollable page content-->
                    <div class="page-content">
                        <div class="content-block">

                            <div class="page-title">
                                <center>
                                    <span>
                    <img src="img/logo05.png" alt="" width="60" height="40" align = "left" ><strong>LMN Corp</strong>
                </span>
                                </center>
                            </div>
                        </div>
                    <div class="content-block">
                        <center>
                            <span class="text-yellow">
                                (unit) shares at (amount/unit)
                            </span>
                            <span class="text-yellow">
                                Sum: (Amount)
                            </span>
                        </center>
                    </div>
                        <div class="clearfix-10">
                            <div class="row">
                                <div class="col-50"></div>
                                <div class="col-50"><a class="button button-small button-block color-yellow" href="company_buy">Place Bid: <span class="text-yellow"><span></span>(unit) units</span></a></div>
                            </div>
                            <div class="clearfix-20"></div>
                            <div class="row">
                                <div class="col-50">
                                    <a href="company-about.html" class="link-box link">
                                        <span class="link-box-icon icon-technology"></span> About
                                    </a>
                                </div>
                                <div class="col-50">
                                    <a href="company-documents.html" class="link-box link">
                                        <span class="link-box-icon icon-file"></span> Documents
                                    </a>
                                </div>
                            </div>
                            <div class="clearfix-20"></div>
                            <div class="row">
                                <div class="col-50">
                                    <a href="company-video-presentation.html" class="link-box link">
                                        <span class="link-box-icon icon-video-player"></span> Video Presentation
                                    </a>
                                </div>
                                <div class="col-50">
                                    <a href="company-key-numbers.html" class="link-box link">
                                        <span class="link-box-icon icon-key"></span> Key numbers
                                    </a>
                                </div>
                            </div>
                            <div class="clearfix-20"></div>
                            <div class="row">
                                <div class="col-50">
                                    <a href="company-question.html" class="link-box link">
                                        <span class="link-box-icon icon-question"></span> Ask a question
                                    </a>
                                </div>
                                <div class="col-50"></div>
                            </div>
                            <div class="clearfix-30"></div>

                            <div class="col-33"><a class="button button-small button-middle color-yellow" href="#home">Back to List</a></div>

                        </div>
                    </div>
                </div>

                <div data-page="company_bid" class="page cached">
                    <!-- Top Navbar-->
                    <div class="navbar">
                        <div class="navbar-inner">
                            <div class="left"><a class="link back" href="#"><span class="icon-back"></span><span>Back</span></a></div>
                            <div class="right">
                                <a class="link open-popup" data-popup=".more-menu" href="#"><img src="img/logo.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <!-- Scrollable page content-->
                    <div class="page-content">
                        <div class="content-block">

                            <div class="page-title">
                                <strong class="user-name">We-Invest LLC</strong> <br> You are bidding 1,000,000 shares at $124 per share in LMN Corp.<br>

                                <div class="left"><b>Change Bid: $125</b><br>

                                    <div class="left">Latest Bid: $123</div><br>

                                    <div class="left">Closes on Mar 31, 2017</div><br>
                                </div>
                                <div style="text-align: center;">
                                    <a class="button button-small button-block color-yellow" href="#">BID NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-page="company_buy" class="page cached">
                    <!-- Top Navbar-->
                    <div class="navbar">
                        <div class="navbar-inner">
                            <div class="left"><a class="link back" href="#"><span class="icon-back"></span><span>Back</span></a></div>
                            <div class="right">
                                <a class="link open-popup" data-popup=".more-menu" href="#"><img src="img/logo.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <!-- Scrollable page content-->
                    <div class="page-content">
                        <div class="content-block">

                            <div class="page-title">
                                <strong class="user-name">We-Invest LLC</strong> <br> You are bidding 5,000,000 shares at<br> $100 per share in LMN Corp.<br>
                                <br>

                                <div class="left">Closes on Mar 31, 2017<br></div><br>
                            </div>
                            <div style="text-align: center;">
                                <a class="button button-small button-block color-yellow" href="#">BUY NOW</a>
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
                            <a href="home.html" class="link close-popup"><img src="img/40xlogo.png" alt=""></a>
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