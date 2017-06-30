
<!-- We don't need full layout here, because this page will be parsed with Ajax-->


<div class="pages">
  <!-- Page, data-page contains page name-->
  <div data-page="signin" class="page">
  	<!-- Top Navbar-->
    <div class="theme-black navbar">
        <div class="theme-black navbar-inner">
        <div class="left"><a class="link back" href="#"><span class="icon-back"></span><span>Back</span></a></div>
        <div class="right"><a href="index.php" class="link"><img src="img/logo.png" alt="" height="42" width="42"></a></div>
        </div>
        </div>
    <!-- Scrollable page content-->
    <div class="page-content">
		<div class="content-block">
        <div class="page-title">
        	<strong>Log In</strong>
        </div>
            <form method='get' action="" class="ajax-submit">
            <div class="list-block form-list-block">
              <ul>
                <li class="item-content">
                  <div class="item-inner">
                    <div class="item-title label jj-yellow">User Name</div>
                    <div class="item-input">
                      <input  style="color: yellow" type="email" name="username" placeholder="Enter User ID">
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
                <a class="button button-big button-fill button-block jj-yellow" href='home.php'> <input type="submit" name="submit" value="Submit"> </a>
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
  </div>
</div>
