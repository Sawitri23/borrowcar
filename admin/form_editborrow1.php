
<?php
//1. เชื่อมต่อ database:
include('../condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
$borrow_id = $_GET["ID"];
//2. query ข้อมูลจากตาราง:
$sql = "SELECT * FROM borrow WHERE borrow_id='$borrow_id' ";
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
  <form  name="register" action="form_editborrow2.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
    <div class="form-group">
      <div class="col-sm-2" align="right"></div>
      <div class="col-sm-5" align="left"> <h3><i class="fas fa-edit"></i> สถานะการยืม </h3> <hr/></div>
    </div>

    <input type="hidden" name="borrow_id" value="<?php echo $borrow_id ?>">


       <div class="form-group">
      <div class="col-sm-1" align="right"> </div>
      <div class="col-sm-5" align="left">
    <label for="item_name">สถานะการอนุมัติ</label>
    <select name="b_status" id="b_status" class="form-control" dsiable>
      <option value="<?php echo "$b_status";?>" ><?php echo "$b_status";?></option>
      <option value="อนุมัติ" >อนุมัติ</option>
      <option value="ไม่อนุมัติ" >ไม่อนุมัติ</option>
    </select>
  </div>
</div>

    <div class="form-group">
      <div class="col-sm-1" align="right"> </div>
      <div class="col-sm-4" align="left">
      <button type="submit" class="btn btn-success" id="btn"> <span class="glyphicon glyphicon-floppy-disk"></span> บันทึก
      </button>
  </div>
</form>
</body>