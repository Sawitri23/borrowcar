
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php session_start(); 
include('../condb.php');

  $ID = $_SESSION['ID'];
  $name = $_SESSION['name'];
  $level = $_SESSION['level'];
  if($level!='dean'){
    Header("Location: ../logout.php");  
  }  
?>
<?php include('css.php');?>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <!-- Main Header -->
    <?php include('menutop.php');?>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="../dist/img/tds.jpg" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p><h6>สวัสดี คุณ<?php echo $name; ?></h6></p>
            <!-- Status -->
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <?php include('menu_l.php');?>
      </section>
      <!-- /.sidebar -->
    </aside>
    <div class="content-wrapper">
      <section class="content-header">
      </section>
      <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="box">
              <div class="row">
                <div class="col-sm-12">
                  <div class="box-body">
                    <?php
                    include('dashboard.php');
                  $p = (isset($_GET['p']) ? $_GET['p'] : '');
                  if($p=='borrowitem'){
                    include('report_borrowitem.php');
                  }elseif($p=='borrowitemreturn'){
                    include('report_borrowitemreturn.php');
                  }elseif($p=='borrowitemunreturn'){
                    include('report_borrowitemunreturn.php');
                  }elseif($p=='borrowitemok'){
                    include('report_borrowitemok.php');
                  }elseif($p=='itemsum'){
                  include('report_itemsum.php');
                  }elseif($p=='borrowdept'){
                    include('report_borrowdeptall.php');
                  }elseif($p=='dept'){
                    include('report_dept.php');
                  }elseif($p=='item'){
                    include('report_item.php'); 
                  }
                  ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </body>
  </html>
  <?php include('footerjs.php');?>

  </body>
</html>