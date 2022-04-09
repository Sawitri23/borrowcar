<?php
//1. เชื่อมต่อ database:
include('../condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
$user_id = $_REQUEST["ID"];
//2. query ข้อมูลจากตาราง:
$sql = "SELECT * FROM user WHERE user_id='$user_id' ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));
$row = mysqli_fetch_array($result);
extract($row);
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
</style>
<body>
  <?php include('css.php');?>
  <form  name="register" action="form_edituser2.php" method="POST" class="form-horizontal">
    <div class="form-group">
      <div class="col-sm-2" align="right"></div>
      <div class="col-sm-5" align="left"> <h3><i class="fas fa-edit"></i> แก้ไขข้อมูลผู้ใช้งานระบบ </h3> <hr/></div>
    </div>

    <input type="hidden" name="user_id" value="<?php echo $user_id ?>">

    <div class="form-group">
    <div class="col-sm-1" align="right"> </div>
      <div class="col-sm-4" align="left">
        <b> ชื่อผู้ใช้งานระบบ</b>
        <input  name="username" type="text" required class="form-control" id="username" minlength="2"  value="<?php echo $username;?>" />
      </div>
    </div>

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
        <input  name="tel" type="number" required class="form-control" id="tel" minlength="2"  value="<?php echo $tel;?>" />
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
        <b> สิทธิ์การเข้าถึง </b>
        <input  name="level" type="text" required class="form-control" id="level" minlength="2"  value="<?php echo $level;?>" />
      </div>
    </div>
    
      <div class="form-group">
    <div class="col-sm-1" align="right"> </div>
      <div class="col-sm-4" align="left">
          <button type="submit" class="btn btn-success" id="btn"><span class="glyphicon glyphicon-wrench"></span> บันทึกข้อมูล  </button>
        </div>
      </div>
    </form>