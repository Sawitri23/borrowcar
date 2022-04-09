<?php session_start();
include('../condb.php');
$ID = $_SESSION['ID'];
$name = $_SESSION['name'];
$level = $_SESSION['level'];
if($level!='admin'){
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
            <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
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
                    $p=$_GET['p'];
                    if($p=='adduser'){
                    include('form_adduser.php');
                    }elseif($p=='edituser'){
                    include('form_edituser.php');
                    }elseif($p=='edituser1'){
                    include('form_edituser1.php');
                    }elseif($p=='deluser'){
                    include('form_deluser.php');

                    }elseif($p=='adddept'){
                    include('form_adddept.php');  
                    }elseif($p=='editdept'){
                    include('form_editdept.php');
                    }elseif($p=='editdept1'){
                    include('form_editdept1.php');
                    }elseif($p=='deldept'){
                    include('form_deldept.php');

                    }elseif($p=='additem'){
                    include('form_additem.php');  
                    }elseif($p=='edititem'){
                    include('form_edititem.php');
                    }elseif($p=='edititem1'){
                    include('form_edititem1.php');
                    }elseif($p=='delitem'){
                    include('form_delitem.php');
                    
                  }elseif($p=='editborrow1'){
                    include('form_editborrow1.php');
                  }else if($p=='delborrow'){
                    include('form_delborrow.php');
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