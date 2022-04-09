<header class="main-header">
  <!-- Logo -->
  <a href="" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>TDS.TU</b></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>BORROW_CAR
    </b></span>
  </a>
  <!-- Header Navbar -->
  <nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>

    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- Messages: style can be found in dropdown.less-->
        
        <!-- User Account Menu -->
        <li class="dropdown user user-menu" >
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="../dist/img/tds.jpg" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">สถานะ: <?php echo $level; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="../dist/img/tds.jpg" class="img-circle" alt="User Image">
               <li>
          <a href="#" data-toggle="control-sidebar"><h4> ชื่อ-สกุล: <?php echo $name; ?> </h4></i></a>
        </li>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  
                </div>
                <div class="pull-right">
                  <a href="../logout.php" class="btn btn-default btn-flat" onclick="return confirm('คุณต้องการออกจากระบบหรือไม่?')"><i class="fas fa-sign-out-alt"></i> <span>ออกจากระบบ</span></a>
                </div>
              </li>
            </ul>
          </li>
        
        </li>
      </ul>
    </div>
  </nav>
</header>
