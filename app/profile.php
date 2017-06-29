
<!-- We don't need full layout here, because this page will be parsed with Ajax-->
<div class="pages">
  <!-- Page, data-page contains page name-->
  <div data-page="profile" class="page">
  	<!-- Top Navbar-->
    <div class="navbar">
        <div class="navbar-inner">
        <div class="left"><a class="link back" href="#"><span class="icon-back"></span><span>Back</span></a></div>
        <div class="right"><a class="link open-popup" data-popup=".more-menu" href="#"><img src="img/logo.png" alt=""></a></div>
        </div>
        </div>
    <!-- Scrollable page content-->
    <div class="page-content">
        <?php
        include './includes/db.php';
        $query = "select * from inverstor";
        $query_result = mysqli_query($connection, $query);
        if (!$query_result) {
                die("QUERY FAILED " . mysqli_error($connection));
            }
        $row = mysqli_fetch_assoc($query_result);
        
        ?>
        
        <div class="content-block font-13">
        
        <div class="page-title">
        	<strong>Profile</strong>
        </div>
          <form>
            <div class="list-block form-list-block">
              <ul>
                <li class="item-content">
                  <div class="item-inner">
                    <div class="item-title label">Name</div>
                    <div class="item-input">
                      <input style="color: yellow" type="text" name="name" value="<?php echo $row['name']?>">
                    </div>
                  </div>
                </li>
                <li class="item-content">
                  <div class="item-inner">
                    <div class="item-title label">Email</div>
                    <div class="item-input">
                      <input type="email" name="email" placeholder="websolutionsindia1@gmail.com">
                    </div>
                  </div>
                </li>
                <li class="item-content">
                  <div class="item-inner">
                    <div class="item-title label">Phone</div>
                    <div class="item-input">
                      <input type="text" name="email" placeholder="9250639901">
                    </div>
                  </div>
                </li>
                <li class="item-content">
                  <div class="item-inner">
                    <div class="item-title label">Gender</div>
                    <div class="item-input item-input-field">
                      <select class="" name="Gender">
                      	<option value="">Male</option>
                        <option value="2">Female</option>
                        <option value="3">LGBTQ</option>
                        <option value="4">Other</option>
                       </select>
                    </div>
                  </div>
                </li>
                <li class="item-content">
                  <div class="item-inner">
                    <div class="item-title label">Age</div>
                    <div class="item-input item-input-field">
                      <input type="text" placeholder="20" id="calendar-input">
                    </div>
                  </div>
                </li>
                <li class="item-content">
                  <div class="item-inner">
                    <div class="item-title label">Password</div>
                    <div class="item-input item-input-field">
                      <input type="password" placeholder="New Password" name="password">
                    </div>
                    <div class="text-small">(Leave blank if you don't want to change)</div>
                  </div>
                </li>
              </ul>
              <div class="clearfix-10"></div>
              <!--button class="button button-big button-fill button-block color-lightgreen" type="submit">Login Now</button-->
              <a class="button button-big button-fill button-block color-yellow" href="company.html">Update Now</a>
            </div>
          </form>
        </div>
        </div>
      </div>
	</div>
  </div>
</div>
