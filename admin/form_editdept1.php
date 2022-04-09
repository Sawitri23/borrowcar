<?php
//1. เชื่อมต่อ database:
include('../condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
$dept_id = $_REQUEST["ID"];
//2. query ข้อมูลจากตาราง:
$sql = "SELECT * FROM department WHERE dept_id='$dept_id' ";
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
  <form  name="register" action="form_editdept2.php" method="POST" class="form-horizontal">
    <div class="form-group">
      <div class="col-sm-2" align="right"></div>
      <div class="col-sm-5" align="left"> <h3><i class="fas fa-edit"></i> แก้ไขประเภทรถ </h3> <hr/></div>
    </div>
    <input type="hidden" name="dept_id" value="<?php echo $dept_id ?>">

    <div class="form-group">
      <div class="col-sm-1" align="right"> </div>
      <div class="col-sm-5" align="left">
        <b> ปรเภทรถ </b>
        <input  name="dept_name" type="text" required class="form-control" id="dept_name" minlength="2"  value="<?php echo $dept_name;?>" />
      </div>
    </div>

      <div class="form-group">
        <div class="col-sm-1" align="right"> </div>
      <div class="col-sm-5" align="left">
          <button type="submit" class="btn btn-success" id="btn"><span class="glyphicon glyphicon-wrench"></span> บันทึกข้อมูล  </button>
        </div>
      </div>
    </form>