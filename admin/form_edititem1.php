<?php
//1. เชื่อมต่อ database:
include('../condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
$item_id = $_GET["ID"];
//2. query ข้อมูลจากตาราง:
$sql = "SELECT * FROM item WHERE item_id='$item_id' ";
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
  <form  name="register" action="form_edititem2.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
    <div class="form-group">
      <div class="col-sm-2" align="right"></div>
      <div class="col-sm-5" align="left"> <h3><i class="fas fa-edit"></i> แก้ไขข้อมูลรถ </h3> <hr/></div>
    </div>

    <div class="form-group">
      <div class="col-sm-1" align="right"> </div>
      <div class="col-sm-4" align="left">
        <p><b> เลขทะเบียนรถ</b></p>
        <input  name="serialno" type="text" required class="form-control" id="serialno" minlength="2"  value="<?php echo $serialno;?>" />
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-1" align="right"> </div>
      <div class="col-sm-4" align="left">
        <p><b> ยี่ห้อรถ</b></p>
        <input  name="item_name" type="text" required class="form-control" id="item_name" minlength="2"  value="<?php echo $item_name;?>" />
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-1" align="right"> </div>
      <div class="col-sm-4" align="left">
        <p><b>จำนวนที่มีทั้งหมด</b></p>
        <input  name="item_total" type="number" required class="form-control" id="item_total" minlength="2"  value="<?php echo $item_total;?>" />
      </div>
    </div>
   
   <input type="hidden" name="item_use" >

      <input type="hidden" name="item_sum" >
    
    <div class="form-group">
      <div class="col-sm-1" align="right"> </div>
      <div class="col-sm-4" align="left">
        <p><b> สถานะ </b></p>
        <select name="status" id="status" class="form-control">
          <option value="<?php echo "$status";?>"><?php echo "$status";?></option>
          <option value=ว่าง>ว่าง</option>
          <option value=ชำรุด>ไม่ว่าง</option>
        </select>
      </div>
    </div>

   <div class="form-group">
      <div class="col-sm-1" align="right"> </div>
      <div class="col-sm-4" align="left">
            <p><b> รายละเอียดของรถ </b></p>
             <textarea  name="detail" col ="60" rows="5"><?php echo "$detail"; ?>
             </textarea>
          </div>
        </div>

    <div class="form-group">
      <div class="col-sm-1" align="right"> </div>
      <div class="col-sm-4" align="left">
        <p><b> ภาพรถ </b></p>
            <img src="../img/<?php echo $row['item_img'];?>" width="100px">
            <br>
            <br>
            <input type="file" name="item_img" id="item_img" class="form-control" />
      </div>
    </div>
    
    <div class="form-group">
      <div class="col-sm-1" align="right"> </div>
      <div class="col-sm-4" align="left">
        <input type="hidden" name="item_id" value="<?php echo $item_id ?>">
        <input type="hidden" name="item_img2" value="<?php echo $item_img; ?>" />
        <button type="submit" class="btn btn-success" id="btn"><span class="glyphicon glyphicon-wrench"></span> บันทึกข้อมูล  </button>
      </div>
    </div>
  </form>