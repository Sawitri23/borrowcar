

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
      <div class="col-sm-5" align="left"> <h3><i class="fas fa-edit"></i> แก้ไขการยืม </h3> <hr/></div>
    </div>

    <input type="hidden" name="borrow_id" value="<?php echo $borrow_id ?>">

    <div class="form-group">
      <div class="col-sm-1" align="right"> </div>
      <div class="col-sm-4" align="left">
        <p><b> วันที่ยืม</b></p>
       <input  name="b_date" type="date" required class="form-control" id="b_date"  value="<?php echo $b_date;?>" />
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-1" align="right"> </div>
      <div class="col-sm-4" align="left">
        <p><b> วันที่คืน</b></p>
       <input  name="r_date" type="date" required class="form-control" id="r_date"  value="<?php echo $r_date;?>" />
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-1" align="right"> </div>
      <div class="col-sm-4" align="left">
    <label for="item_name">ยี่ห้อรถ</label>
    <select name="item_name" id="item_name" class="form-control">
      <?php
      include "../condb.php";
      $sql1 = "select * from item";
      $result1=mysqli_query($con,$sql1);
      while($record=mysqli_fetch_array($result1)){
      $item_n=$record["item_name"];
      ?>
      <option value="<?php echo "$item_n";?>" ><?php echo "$record[item_name]";?></option>
      <?php } ?>
    </select>
  </div>
</div>
   
<input type="hidden" name="name" value="<?php echo $name ?>">

<input type="hidden" name="dept_name" value="<?php echo $dept_name ?>">

      <div class="form-group">
      <div class="col-sm-1" align="right"> </div>
      <div class="col-sm-5" align="left">
    <p>
  </div>
</div>
  
        <div class="form-group">
      <div class="col-sm-1" align="right"> </div>
      <div class="col-sm-4" align="left">
             </textarea>
          </div>
        </div>

        <input type="hidden" name="email" value="<?php echo $email ?>">

        <div class="form-group">
      <div class="col-sm-1" align="right"> </div>
      <div class="col-sm-4" align="left">
    <label for="recieve">การรับ</label>
    <select  name="recieve" id="recieve" class="form-control">
      <option value="<?php echo "$recieve";?>"><?php echo "$recieve";?></option>
      <option value="มารับเอง">มารับเอง</option>
      <option value="ให้ไปส่ง">ให้ไปส่ง</option>
    </select>
  </div>
</div>

        <input type="hidden" name="b_status" value="<?php echo $b_status ?>">


    <div class="form-group">
      <div class="col-sm-1" align="right"> </div>
      <div class="col-sm-4" align="left">
      <button type="submit" class="btn btn-success" id="btn"> <span class="glyphicon glyphicon-floppy-disk"></span> แก้ไขการยืม
      </button>
  </div>
</form>
</body>
