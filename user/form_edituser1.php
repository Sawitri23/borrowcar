
<?php
//1. เชื่อมต่อ database:
include('../condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
$user_id = $_GET["ID"];
//2. query ข้อมูลจากตาราง:
$sql = "SELECT * FROM user WHERE username='$username' ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));
$row = mysqli_fetch_array($result);
extract($row);
?>

  <?php include('css.php');?>
  <form  name="register" action="form_edituser2.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
   <div class="form-group">
      <div class="col-sm-1" align="right"> </div>
      <div class="col-sm-4" align="left"> <h3><i class="fas fa-edit"></i> แก้ไขข้อมูลส่วนตัวผู้ใช้งานระบบ </h3> <hr/></div>
    </div>

    <input type="hidden" name="user_id" value="<?php echo $user_id ?>">

    <div class="form-group">
    <div class="col-sm-1" align="right"> </div>
      <div class="col-sm-4" align="left">
        <b> ชื่อ-สกุล</b>
        <input  name="name" type="text" required class="form-control" id="name" minlength="2"  value="<?php echo $name;?>" />
      </div>
    </div>

      <div class="form-group">
    <div class="col-sm-1" align="right"> </div>
      <div class="col-sm-4" align="left">
        
          <?php  ?>
        </select>
      </div>
      </div>

      <div class="form-group">
    <div class="col-sm-1" align="right"> </div>
      <div class="col-sm-4" align="left">
        <b> หมายเลขโทรศัพท์</b>
        <input  name="tel" type="number" class="form-control" id="tel" minlength="2"  value="<?php echo $tel;?>" />
      </div>
    </div>
  
    <div class="form-group">
    <div class="col-sm-1" align="right"> </div>
      <div class="col-sm-4" align="left">
        <b> email</b>
        <input  name="email" type="email" required class="form-control" id="email" minlength="2"  value="<?php echo $email;?>" />
      </div>
    </div>

    <div class="form-group">
    <div class="col-sm-1" align="right"> </div>
      <div class="col-sm-4" align="left">
        <b> เปลี่ยน password</b>
        <input  name="password" type="password" class="form-control" id="password" minlength="2"  value="<?php echo $password;?>" />
      </div>
    </div>
    
      <div class="form-group">
    <div class="col-sm-1" align="right"> </div>
      <div class="col-sm-4" align="left">
          <button type="submit" class="btn btn-success" id="btn"><span class="fa fa-download"></span> บันทึกข้อมูล  </button>
        </div>
      </div>
    </form>