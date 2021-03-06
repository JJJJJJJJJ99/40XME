<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=yes, minimal-ui">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>40X.ME</title>
    <!-- Path to Framework7 Library CSS-->
    <link rel="stylesheet" href="css/framework7.material.css">
    <link rel="stylesheet" href="css/framework7.material.colors.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/kitchen-sink-5.css">
    <link rel="stylesheet" href="css/jjcss-10.css">
    
    <link href="plugin/css/lightbox.min.css" rel="stylesheet">
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
                            <div class="item-inner" style="color: #a48021;">
                                <div class="item-title">Home</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="item-link close-panel" href="#profile">
                            <div class="item-inner">
                                <div class="item-title" style="color: #a48021;">Settings</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="item-link close-panel" href="about-startup-moola.html">
                            <div class="item-inner" style="color: #a48021;">
                                <div class="item-title">About 40X.me</div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <p> <a href="#index" class="button close-panel" style="color: #a48021">Logout</a></p>
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
                            <div class="slide01">
                                <div class="slide-content">
                                    <img src="img/40xlogo.png" alt="">
                                    <div class="clearfix-20"></div>
                                    <div class="text-yellow"></div>
                                    <div class="slide-content-bottom">
                                       <div class="row" style="margin-bottom: 5px">
                                        <a class="button button-big color-yellow" style="width: 70%" href="#signin">Login</a>
                                        <div class="clearfix-10"></div>
                                        
                                         </div>
                
                                         <div class="row">
                                        
                                         <a class="button button-big color-yellow homewebsite" style="width: 70%" href="#">Become A Member</a>
                                         
                                         </div>
                                         
                                        <div class="clearfix-10"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide slide02">
                                <div class="slide-content">
                                    <img src="img/40xlogo.png" alt="">
                                    <div class="clearfix-20"></div>
                                    <div class="text-yellow"></div>
                                    <div class="slide-content-bottom">
                                        <a class="button button-block color-yellow" href="#signin">Login</a>
                                        <div class="clearfix-10"></div>
                                        <a class="button button-block color-yellow homewebsite" href="#">Become A Member</a>
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
                        <div class="theme-black navbar-inner" >
                            <div class="left"><a class="link back" href="#" style="color:#a48021"><span class="icon-back"></span><span>Back</span></a></div>
                            <div class="right">
                                <a href="#index" class="link"><img src="img/40xlogo.png" alt="" height="42" width="42"></a>
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
                                                <div class="item-input bottom-line">
                                                    <input style="color: yellow" type="text" name="username" placeholder="Enter User ID">
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item-content">
                                            <div class="item-inner">
                                                <div class="item-title label jj-yellow">Password</div>
                                                <div class="item-input bottom-line">
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
                            <div class="center" style="height: 100%; font-size: 18px">
                            
                            <div style="height: 50%; line-height: 28px" class="text-yellow user-name">We-Invest LL</div> 
                            <div style="height: 50%; line-height: 28px" class="text-yellow">Balance: <span class="icon-dollar-symbol"></span><span style="margin-left: 0px" class="balance-count">45,213</span></div>
                            
                            </div>
                            <div class="right">
                                <a class="link logowebsite" href="#"><img src="img/40xlogo.png" alt="" height="42" width="42"></a>
                            </div>
                        </div>
                    </div>
                    <!-- Scrollable page content-->
                    <div class="page-content">
                        <div class="content-block">

                            <div class="page-title">
                                <div class="page-subtitle text-center">Your Watch List</div>
                                <div class="list-block">
                                    <ul>
                                        <li>
                                            <div class="content-block">
                                                <span>
                                                    <div class="button-box">
                                                        <div class="button-item">Company Name</div>
                                                        <div class="button-item">Closing Date</div>
                                                    </div>
                                                </span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                   <div class="list-block">
                                    <ul>
                                        <li>
                                            <div class="content-block">
                            <span>
                                <a style="margin-top: 10px; width: 100%" id="company-1" class="button button-small button-fill color-yellow" href="#company">
                                    <div class="button-box">
                                        <div class="jj-comapnyname">Snap Inc</div>
                                        <div class="jj-comapnyname">Oct 30, 17</div>
                                    </div>
                                </a>
                            </span>
                                            </div>
                                        </li>
<!--
                                        <li>
                                            <div class="content-block">
                            <span>
                            
                            <a style="margin-top: 10px; width: 100%" id="company-2" class="button button-small button-fill color-yellow" href="#company">
                                    <div class="button-box">
                                        <div class="button-item">Swrve</div>
                                        <div class="button-item">2017-07-04</div>
                                    </div>
                                </a>
                  	        </span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="content-block">
                    <span>
                          <a style="margin-top: 10px; width: 100%" id="company-3" class="button button-small button-fill color-yellow" href="#company">
                                    <div class="button-box">
                                        <div class="button-item">ExactCare</div>
                                        <div class="button-item">2017-07-06</div>
                                    </div>
                                </a>
                  	</span>
                                            </div>
                                        </li>
-->
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div data-page="company" class="page cached">
                    <!-- Top Navbar-->
                    <div class="theme-black navbar">
                        <div class="theme-black navbar-inner">
                            <div class="left">
                                <a class="link icon-only open-panel" href="#"> <span class="icon-menu"></span></a>
                            </div>
                            <div class="center" style="height: 100%; font-size: 18px">
                            
                            <div style="height: 50%; line-height: 28px" class="text-yellow user-name">We-Invest LL</div> 
                            <div style="height: 50%; line-height: 28px" class="text-yellow">Balance: <span class="icon-dollar-symbol"></span><span style="margin-left: 0px" class="balance-count">45,213</span></div>
                            
                            </div>
                            <div class="right">
                                <a class="link logowebsite" href="#"><img src="img/40xlogo.png" alt="" height="42" width="42"></a>
                            </div>
                        </div>
                    </div>
                    <!-- Scrollable page content-->
                    <div class="page-content">
                        <div class="content-block">

                            <div class="page-title">
                                <center>
                                    <span>
                <center>
                   <strong id="company-name">LMN Corp</strong>
                </center>
                </span>
                                </center>
                            </div>
                        </div>
                        <div class="content-block">
                           
                                <span class="text-yellow">
                                Offer:&nbsp;<span id="company-unit">(units)</span> Units @ <span id="company-share">(shares)</span>
                                Shares @ $US&nbsp;<span id="company-amount-shares">(amount/shares)</span><span>.00/share</span>
                                </span>
                            
                        </div>
                        <div class="clearfix-10">
                            <div class="row">
                                <div class="col-70 jj-units">
                                    <div class="jj-units-word">No.of Units:</div>
                                    <div class="jj-units-input">
                                        <div id="plus-btn">+</div>
                                        <input id="investorunit-input" type="number">
                                        <div id="minus-btn">-</div>
                                    </div>
                                    
                                </div>
                                <div class="col-25"><a class="link open-popup button button-small button-block color-yellow" data-popup=".confirm-menu" href="#">Place Bid</a></div>
                                <div class="col-5"></div>
                                
<!--
                                <div class="col-70">
                                    <div style="border: 0px" class="button button-small button-block color-yellow" class="text-yellow"><input type="number" id="investorunit-input"><span style="font-size: 15px">&nbsp;&nbsp;units</span></div>
                                </div>
                                <div class="col-30" style="margin-right: 10px;"><a id="place-bid" class="button button-small button-block color-yellow" href="#">Place Bid</a></div>
-->
                            </div>
                            
                            <div class="row">
                                <div class="col-100" style="padding-left: 32px">
                                    <span class="text-yellow" style="font-weigh:bold">
                                    You are bidding for:
                                    </span>                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-100" style="padding-left: 32px">
                                    <span class="user-shares" class="text-yellow">
                                        0 </span>&nbsp;shares &nbsp;/&nbsp;$US&nbsp;<span class="user-amount-shares">(amount/shares)</span> <span>&nbsp;=&nbsp;</span> <span class="user-total">0</span>

<!--                                            (amount/shares)*user-units-->

                                </div>
                            </div>
                            
                            <div class="clearfix-20"></div>
                            <div class="row">
                                <div class="col-50">
                                    <a id="company-about" href="#" class="link-box link open-popup" data-popup=".aboutpdf">
                                        <span class="link-box-icon icon-technology"></span> About
                                    </a>
                                </div>
                                <div class="col-50">
                                    <a id="company-document" href="#company-documents" class="link-box link">
                                        <span class="link-box-icon icon-file"></span> Pre-DD
                                    </a>
                                </div>
                            </div>
                            <div class="clearfix-20"></div>
                            <div class="row">
                                <div class="col-50">
                                    <a href="company-video-presentation.html" class="link-box link">
                                        <span class="link-box-icon icon-video-player"></span> Videos
                                    </a>
                                </div>
                                <div class="col-50">
                                    <a href="#company-business-metrics" class="link-box link">
                                        <span class="link-box-icon icon-key"></span> Business Metrics
                                    </a>
                                </div>
                            </div>
                            <div class="clearfix-20"></div>
                            <div class="row">
                                <div class="col-50">
                                    <a href="#company-question" class="link-box link">
                                        <span class="link-box-icon icon-question"></span> Ask a question
                                    </a>
                                </div>
                                <div class="col-50"></div>
                            </div>
                            <div class="clearfix-30"></div>

                            <div class="col-33"><a class="button button-small button-middle color-yellow" href="#home">Back to List</a></div>

                        </div>
                    </div>`
                </div>

                <div data-page="company_bid" class="page cached">
                    <!-- Top Navbar-->
                    <div class="navbar">
                        <div class="theme-black navbar-inner">
                            <div class="left"><a class="link back" style="color:#a48021" href="#"><span class="icon-back"></span><span>Back</span></a></div>
                            <div class="right">
                                <a class="link open-popup" data-popup=".more-menu" href="#"><img src="img/40xlogo.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <!-- Scrollable page content-->
                    <div class="page-content">
                        <div class="content-block">

                            <!-- <div class="page-title">
                                <strong class="user-name">We-Invest LLC</strong> <br> You are bidding 1,000,000 shares at $124 per share in LMN Corp.<br>

                                <div class="left"><b>Change Bid: $125</b><br>

                                    <div class="left">Latest Bid: $123</div><br>

                                    <div class="left">Closes on Mar 31, 2017</div><br>
                                </div>
                                <div style="text-align: center;">
                                    <a class="button button-small button-block color-yellow" href="#">BID NOW</a>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>

                
                <div data-page="profile" class="page cached">
                    <!-- Top Navbar-->
                    <div class="navbar">
                        <div class="theme-black navbar-inner" style="background-color: black">
                            <div class="left"><a class="link back" style="color:#a48021" href="#"><span class="icon-back"></span><span>Back</span></a></div>
                            <div class="right">
                                <a class="link logowebsite" href="#"><img src="img/40xlogo.png" width="42" height="42" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <!-- Scrollable page content-->
                    <div class="page-content">
                        <div class="content-block font-13">

                            <div class="page-title">
                                <strong>Settings</strong>
                            </div>
                            <form>
                                <div class="list-block form-list-block">
                                    <ul>
                                        <li class="item-content">
                                            <div class="item-inner">
                                                <div class="item-title label">First Name</div>
                                                <div class="item-input bottom-line">
                                                    <input id="profile-firstname" style="color: #a48021" type="text">
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item-content">
                                            <div class="item-inner">
                                                <div class="item-title label">Last Name</div>
                                                <div class="item-input bottom-line">
                                                    <input id="profile-lastname" style="color: #a48021" type="text">
                                                </div>
                                            </div>
                                        </li>
                                        
                                        <li class="item-content">
                                            <div class="item-inner">
                                                <div class="item-title label">Email</div>
                                                <div class="item-input bottom-line">
                                                    <input id="profile-email" type="email" name="email" style="color: #a48021" placeholder="Enter your email">
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item-content">
                                            <div class="item-inner">
                                                <div class="item-title label">Tel</div>
                                                <div class="item-input bottom-line">
                                                    <input id="profile-tel" type="number" name="tel" style="color: #a48021" placeholder="Enter your tel">
                                                </div>
                                            </div>
                                        </li>
                                        
                                    </ul>
                                    <div class="clearfix-10"></div>
                                    <!--button class="button button-big button-fill button-block color-lightgreen" type="submit">Login Now</button-->
                                    <a id="update-button" class="button button-big button-fill button-block color-yellow" href="#home">Update Now</a>
                                </div>
                            </form>
                        </div>
                           </div>


            </div>
               
               <div data-page="company-question" class="page cached">
                    <!-- Top Navbar-->
                    <div class="navbar">
                                        <div class="theme-black navbar-inner" style="background-color: black">
                                            <div class="left"><a class="link back" style="color:#a48021" href="#"><span class="icon-back"></span><span>Back</span></a></div>
                                            <div class="right">
                                                <a class="link open-popup" data-popup=".more-menu" href="#"><img src="img/40xlogo.png" width="42" height="42" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                    <!-- Scrollable page content-->
                    <div class="page-content">
                        <div class="content-block font-13">

                    
                            <div class="list-block form-list-block">
                                    <div style="width:100%">List here any questions to this company. We will pass them over to the company's management and as we recieve responses, we will promptly share them with you!</div>
                                    <div>
                                      <textarea id="question-area" style="color: #a48021; height: 200px; border:2px solid #a48021" rows="4" class="" placeholder="Type Question"></textarea>
                                  </div>
                              <div class="clearfix-10"></div>
                              <!--button class="button button-big button-fill button-block color-lightgreen" type="submit">Login Now</button-->
                              <a id="send-email-btn" class="button button-big button-fill button-block color-yellow" href="#company-question">Send Now</a>
                            </div>
                         
                        </div>
                        </div>
                      </div>
                

                
                <div data-page="company-documents" class="page cached">
                    <!-- Top Navbar-->
                    
<!--                    todo image icon fix-->
                    <div class="navbar">
                        <div class="theme-black navbar-inner" style="background-color: black">
                            <div class="left"><a class="link back" style="color:#a48021" href="#"><span class="icon-back"></span><span>Back</span></a></div>
                            <div class="right">
                                <a class="link open-popup" data-popup=".more-menu" style="color:#a48021" href="#"><img src="img/40xlogo.png" width="42" height="42" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <!-- Scrollable page content-->
                    <div class="page-content">
                        <div class="content-block font-13">

                            <div class="page-title">
                                <strong>Documents</strong> Click to view Documents resources
                            </div>
                            <hr />
                            <ul class="bullet-list-custom">

                                
                            </ul>

                        </div>
                    </div>
                </div>
                
                <div data-page="company-business-metrics" class="page cached">
                    <!-- Top Navbar-->
                    
<!--                    todo image icon fix-->
                    <div class="navbar">
                        <div class="theme-black navbar-inner" style="background-color: black">
                            <div class="left"><a class="link back" style="color:#a48021" href="#"><span class="icon-back"></span><span>Back</span></a></div>
                            <div class="right">
                                <a class="link open-popup" data-popup=".more-menu" style="color:#a48021" href="#"><img src="img/40xlogo.png" width="42" height="42" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <!-- Scrollable page content-->
                    <div class="page-content">
                        <div class="content-block font-13">

                            <div class="page-title">
                                <strong>Business Metrics</strong>
                            </div>
                            <hr />
                            <ul class="bullet-list-image">

                                
                            </ul>

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

                    <div class="page-content" style="height: 100%">
                        <div class="content-block" style="margin-top: 52px; height: 100%">
                            <a href="#" class="link close-popup icon-close-popup"><span class="icon-cancel"></span></a>
                            <div style="height: 100%" id="iframe-area">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
     <div class="popup aboutpdf">
        <div class="view">
            <div class="pages">
                <div class="page">

                    <div class="page-content" style="height: 100%">
                        <div class="content-block" style="margin-top: 52px; height: 100%">
                            <a href="#" class="link close-popup icon-close-popup"><span class="icon-cancel"></span></a>
                            <div style="height: 100%" id="iframe-area-aboutfile">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="popup confirm-menu">
        <div class="view">
            <div class="pages">
                <div class="page">

                    <div class="page-content">
                        <div class="content-block">
                            <div class="clearfix-20"></div>
                            <a href="#" class="link close-popup icon-close-popup jj-yellow"><span class="icon-cancel"></span></a>
                            <div class="row">
                                <div class="col-100" style="padding-left: 32px">
                                    <span class="text-yellow" style="font-weigh:bold">
                                    You are currently bidding for:
                                    </span>                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-100" style="padding-left: 32px; margin-bottom:30px">
                                    <span class="user-shares" class="text-yellow">
                                        0 </span>shares &nbsp;/&nbsp;$US<span class="user-amount-shares">(amount/shares)</span> <span>&nbsp;=&nbsp;</span> <span class="user-total">0</span>

<!--                                            (amount/shares)*user-units-->

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-50"><a href="#" id="place-bid" class="close-popup button button-small button-block color-yellow" href="#">Confirm</a></div>
                                <div class="col-50"><a href="#" class="link close-popup button button-small button-block color-yellow jj-yellow"><span>Cancel</span></a></div>
                            </div>
                            
                            
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
    <script type="text/javascript" src="js/kitchen-sink-10.js"></script>
    <script src="plugin/js/lightbox-plus-jquery.min.js"></script>
    <script>
        lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true
    })
    </script>
</body>

</html>
