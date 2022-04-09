<?php
//1. เชื่อมต่อ database:
include('../condb.php');
$user_id = $_REQUEST["ID"];
//2. query ข้อมูลจากตาราง:
$sql = "SELECT * FROM user WHERE user_id='$user_id' ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));
$row = mysqli_fetch_array($result);
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
  <form  name="register" action="form_adduser2.php" method="POST" class="form-horizontal">
    <div class="form-group">
      <div class="col-sm-2" align="right"></div>
      <div class="col-sm-5" align="left"> <h3><i class="fas fa-edit"></i> เพิ่มผู้ใช้งานระบบ </h3> <hr/></div>
    </div>
    
    <div class="form-group">
      <div class="col-sm-1" align="right"> </div>
      <div class="col-sm-5" align="left">
        <b> ชื่อผู้ใช้งานระบบ </b>
        <input  name="username" type="text" required class="form-control" placeholder="กรอก username" id="username" minlength="2">
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-1" align="right"> </div>
      <div class="col-sm-5" align="left">
        <b> รหัสเข้าสู่ระบบ </b>
        <input  name="password" type="text" required class="form-control" placeholder="กรอก password" id="password" minlength="2">
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-1" align="right"> </div>
      <div class="col-sm-5" align="left">
        <b>ชื่อ-สกุล </b>
        <input  name="name" type="text" required class="form-control" placeholder="กรอก ชื่อและนามสกุล" id="name" minlength="2">
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-1" align="right"> </div>
      <div class="col-sm-5" align="left">

      <?php  ?>
    </select>
  </div>
</div>
    
  <div class="form-group">
      <div class="col-sm-1" align="right"> </div>
      <div class="col-sm-5" align="left">
        <b>หมายเลขโรศัพท์ </b>
        <input  name="tel" type="number" required class="form-control" placeholder="กรอก หมายเลขโทรศัพท์ที่ใช้ในการติดต่อ" id="tel" minlength="2">
      </div>
    </div>

     <div class="form-group">
      <div class="col-sm-1" align="right"> </div>
      <div class="col-sm-5" align="left">
        <b>Email </b>
        <input  name="email" type="email" required class="form-control" placeholder="กรอก Email ที่ใช้ในการติดต่อ" id="Email" minlength="2">
      </div>
    </div>

   <div class="form-group">
      <div class="col-sm-1" align="right"> </div>
      <div class="col-sm-5" align="left">
    <label for="level">สิทธิ์การเข้าถึง </label>
    <select name="level" id="level" class="form-control">
      <option value="admin">ผู้ดูแลระบบ</option>
      <option value="user">ผู้ใช้งาน</option>
    </select>
  </div>
</div>

    <div class="form-group">
      <div class="col-sm-1" align="right"> </div>
      <div class="col-sm-5" align="left">
        <button type="submit" class="btn btn-success" id="btn"><span class="fa fa-download"></span> เพิ่มข้อมูล  </button>
      </div>
    </div>
  </form>