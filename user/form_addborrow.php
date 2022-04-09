
<?php
//1. เชื่อมต่อ database:
include('../condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
$borrow_id = $_GET["ID"];
//2. query ข้อมูลจากตาราง:
$sql = "SELECT * FROM borrow WHERE borrow_id='$borrow_id' ";
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
  <form  name="register" action="form_addborrow2.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
   <div class="form-group">
      <div class="col-sm-1" align="right"> </div>
      <div class="col-sm-4" align="left"> <h3><i class="fas fa-edit"></i> กรอกรายละเอียดข้อมูลการยืม </h3> <hr/></div>
    </div>

    <input type="hidden" name="borrow_id" >

    <div class="form-group">
      <div class="col-sm-1" align="right"> </div>
      <div class="col-sm-4" align="left">
       
              <?php
      $name=$_SESSION['name'];
      ?>
        <input name="name" type="hidden" required class="form-control" id="name"  value="<?php echo $name;?>" hidden/>
      </div>
    </div>


    <div class="form-group">
      <div class="col-sm-1" align="right"> </div>
      <div class="col-sm-4" align="left">
        
              <?php
      $dept_name=$_SESSION['dept_name'];
      ?>
        <input  name="dept_name" type="hidden" required class="form-control" id="dept_name"  value="<?php echo $dept_name;?>" hidden/>
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-1" align="right"> </div>
      <div class="col-sm-4" align="left">
        <p><b> วันที่ยืม</b></p>
        <input  name="b_date" type="date" required class="form-control" id="b_date" min="<?php echo date('Y-m-d');?>" >
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-1" align="right"> </div>
      <div class="col-sm-4" align="left">
        <p><b> กำหนดคืน</b></p>
        <input  name="r_date" type="date" required class="form-control" id="r_date" min="<?php echo date('Y-m-d');?>">
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-1" align="right"> </div>
      <div class="col-sm-4" align="left">
    <label for="item_name">ยี่ห้อรถ</label>
    <select name="item_id" id="item_id" class="form-control">
      <?php
      include "../condb.php";
      $sql1 = "select * from item";
      $result1=mysqli_query($con,$sql1);
      while($record=mysqli_fetch_array($result1)){
      $item_n=$record["item_id"];
      ?>
      <option value="<?php echo "$item_n";?>" ><?php echo "$record[item_name]";?></option>
      <?php } ?>
    </select>
  </div>
</div>

  <div class="form-group">
      <div class="col-sm-1" align="right"> </div>
      <div class="col-sm-2" align="left">
        <p><b> จำนวนการยืม</b></p>
      <input  name="item_use" type="number" required class="form-control" id="item_use" class="form-control">
      </div>
    </div>

      <div class="form-group">
      <div class="col-sm-1" align="right"> </div>
      <div class="col-sm-4" align="left">
    
  </div>
</div>

<div class="form-group">
      <div class="col-sm-1" align="right"> </div>
      <div class="col-sm-4" align="left">
    <label for="recieve">การรับอุปกรณ์</label>
    <select  name="recieve" id="recieve" class="form-control" required>
      <option value="มารับเอง">มารับเอง</option>
      <option value="ให้ไปส่ง">ให้ไปส่ง</option>
      <option value="ส่งตามที่อยู่">ส่งตามที่อยู่ (*กรณีส่งตามที่อยู่กรุณาระบุที่อยู่ตรงช่องเหตุผลการยืมด้วย)</option>
    </select>
  </div>
</div>
  
        <div class="form-group">
          <div class="col-sm-1" align="right"> </div>
             <!--  <div class="col-sm-4" align="left"> -->
              <label for="remark">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เหตุผลการยืม</label><br>
              <div class="col-sm-1" align="right"> </div>
              <div class="col-sm-4" align="left">

                     <textarea  name="remark" col ="60" rows="5" id="remark" required>
                     </textarea>
                   <!-- </div> -->
                  </div>
                </div>

      <div class="form-group">
      <div class="col-sm-1" align="right"> </div>
      <div class="col-sm-4" align="left">
      <?php
      $email=$_SESSION['email'];
      ?>
        <input  name="email" type="hidden" required class="form-control" id="email"  value="<?php echo $email;?>" readonly/>
      </div>
    </div>

<div class="form-group">
      <div class="col-sm-1" align="right"> </div>
      <div class="col-sm-4" align="left">

        <input name="b_status" type="hidden" required class="form-control" id="b_status"  value="รออนุมัติ" hidden/>
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-1" align="right"> </div>
      <div class="col-sm-4" align="left">

        <input name="r_status" type="hidden" required class="form-control" id="r_status"  value="รออนุมัติการยืม" hidden/>
      </div>
    </div>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-success" id="btn"> <i class="fa fa-check"></i> ยืมอุปกรณ์</button>
  <a href="index.php" class="btn btn-danger"><i class="fa fa-ban"></i> ยกเลิกการยืม</a></button>
</div>
</div>

</form>
</body>
