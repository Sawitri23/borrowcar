
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php session_start(); 
include('../condb.php');

  $ID = $_SESSION['ID'];
  $name = $_SESSION['name'];
  $dept_name = $_SESSION['dept_name'];
  $tel = $_SESSION['tel'];
  $email = $_SESSION['email'];
  $level = $_SESSION['level'];
  if($level!='user'){
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
        <h5>
       <span class="Apple-style-span" style="white-space: normal;"><marquee><b><span style="color: #ff6600;"><u>ระบบยืม-คืน อุปกรณ์ไอที คณะสถาปัตยกรรมศาสตร์และการผังเมือง มหาวิทยาลัยธรรมศาสตร์ ศูนย์รังสิต</u></span></b></marquee></span>
        </h5>
      </section>
      <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="box">
              <div class="row">
                <div class="col-sm-12">
                  <div class="box-body">
                    <p></p>
                   <?php include('reportborrow1.php');?>
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