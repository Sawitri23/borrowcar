<?php include ('../condb.php') ?>
<div class="row">
  <a href="index.php?p=item">
  <div class="col-md-3 ">
    <div class="info-box bg-green">
  <span class="info-box-icon"><i class="fas fa-archive"></i></span>
  <div class="info-box-content">
    <span class="info-box-text">อุปกรณ์ทั้งหมด</span>
    <span class="info-box-number"><?php $sql = "SELECT sum(item_total) as total from item";
 $result = mysqli_query($con,$sql);
 $resultarray = mysqli_fetch_array($result);
 echo  $resultarray ['total']; ?> ชิ้น</h4></span>
    <!-- The progress section is optional -->
    <div class="progress">
      <div class="progress-bar" style="width: 70%"></div>
    </div>
    <span class="progress-description">
      รายละเอียด
    </span>
  </div>
  <!-- /.info-box-content -->
</div>
</div>

  <a href="index.php?p=borrowdept">
  <div class="col-md-3 ">
    <a href="index.php?p=borrowitem">
    <div class="info-box bg-yellow">
  <span class="info-box-icon"><i class="fa fa-download"></i></span>
  <div class="info-box-content">
    <span class="info-box-text">จำนวนอุปกรณ์ที่ถูกยืมทั้งหมด</span>
    <span class="info-box-number"><?php 
    $sql = "SELECT sum(item_use) as total from borrow";
 $result = mysqli_query($con,$sql);
 $resultarray = mysqli_fetch_array($result);
 echo  $resultarray ['total'];
?> ชิ้น</h4></span>
    <!-- The progress section is optional -->
    <div class="progress">
      <div class="progress-bar" style="width: 70%"></div>
    </div>
    <span class="progress-description">
      รายละเอียด
    </span>
  </div>
  <!-- /.info-box-content -->
</div>
</div>

 <a href="index.php?p=borrowitemreturn">
 <div class="col-md-3 ">
    <div class="info-box bg-blue">
  <span class="info-box-icon"><i class="fa fa-thumbs-up"></i></span>
  <div class="info-box-content">
    <span class="info-box-text">จำนวนอุปกรณ์ที่คืนแล้ว</span>
    <span class="info-box-number"><?php 
    $sql = "SELECT r_status, sum(item_use)  as total from borrow WHERE r_status='อนุมัติการคืน' GROUP BY r_status";
 $result = mysqli_query($con,$sql);
 $resultarray = mysqli_fetch_array($result);

 echo  $resultarray ['total'];
?> ชิ้น</h4></span>
    <!-- The progress section is optional -->
    <div class="progress">
      <div class="progress-bar" style="width: 70%"></div>
    </div>
    <span class="progress-description">
      รายละเอียด
    </span>
  </div>
  <!-- /.info-box-content -->
</div>
</div>


 <a href="index.php?p=borrowitemunreturn">
 <div class="col-md-3 ">
    <div class="info-box bg-red">
  <span class="info-box-icon"><i class="fa fa-thumbs-down"></i></span>
  <div class="info-box-content">
    <span class="info-box-text">จำนวนอุปกรณ์ที่ยังไม่คืน</span>
    <span class="info-box-number"><?php 
    $sql = "SELECT r_status, sum(item_use)  as total from borrow WHERE r_status='อยู่ระหว่างการใช้งาน' GROUP BY r_status";
 $result = mysqli_query($con,$sql);
 $resultarray = mysqli_fetch_array($result);

 echo  $resultarray ['total'];
?> ชิ้น</h4></span>
    <!-- The progress section is optional -->
    <div class="progress">
      <div class="progress-bar" style="width: 70%"></div>
    </div>
    <span class="progress-description">
      รายละเอียด
    </span>
  </div>
  <!-- /.info-box-content -->
</div>
</div>

 <a href="index.php?p=borrowitemok">
 <div class="col-md-3 ">
    <div class="info-box bg-orange">
  <span class="info-box-icon"><i class="fa fa-signal"></i></span>
  <div class="info-box-content">
    <span class="info-box-text">จำนวนอุปกรณ์ที่รออนุมัติการยืม</span>
    <span class="info-box-number"><?php 
    $sql = "SELECT r_status, sum(item_use)  as total from borrow WHERE r_status='รออนุมัติการยืม' GROUP BY r_status";
 $result = mysqli_query($con,$sql);
 $resultarray = mysqli_fetch_array($result);

 echo  $resultarray ['total'];
?> ชิ้น</h4></span>
    <!-- The progress section is optional -->
    <div class="progress">
      <div class="progress-bar" style="width: 70%"></div>
    </div>
    <span class="progress-description">
      รายละเอียด
    </span>
  </div>
  <!-- /.info-box-content -->
</div>
</div>



<a href="index.php?p=itemsum">
<div class="col-md-3 ">
    <div class="info-box bg-purple">
  <span class="info-box-icon"><i class="fa fa-upload"></i></span>
  <div class="info-box-content">
    <span class="info-box-text">จำนวนอุปกรณ์คงเหลือ</span>
    <span class="info-box-number"><?php 
    $sql = "SELECT sum(item_total) as total, sum(item_use) as total1 from item";
 $result = mysqli_query($con,$sql);
 $resultarray  = mysqli_fetch_array($result);
 $sum = $resultarray ['total']-$resultarray ['total1'];
 echo  $sum;
?> ชิ้น</h4></span>
    <!-- The progress section is optional -->
    <div class="progress">
      <div class="progress-bar" style="width: 70%"></div>
    </div>
    <span class="progress-description">
      รายละเอียด
    </span>
  </div>
  <!-- /.info-box-content -->
</div>
</div>

<a href="index.php?p=borrowdept">
<div class="col-md-3 ">
    <div class="info-box bg-yellow">
  <span class="info-box-icon"><i class="fa fa-users"></i></span>
  <div class="info-box-content">
    <span class="info-box-text">จำนวนหน่วยงานที่ยืมอุปกรณ์</span>
    <span class="info-box-number"><?php 
    $sql = "SELECT dept_name, count(name) as total from borrow  ORDER BY borrow_id ASC";
 $result = mysqli_query($con,$sql);
 $resultarray = mysqli_fetch_array($result);

 echo  $resultarray ['total'];
?> ครั้ง</h4></span>
    <!-- The progress section is optional -->
    <div class="progress">
      <div class="progress-bar" style="width: 70%"></div>
    </div>
    <span class="progress-description">
     รายละเอียด
    </span>
  </div>
  <!-- /.info-box-content -->
</div>
</div>

<a href="index.php?p=dept">
<div class="col-md-3 ">
    <div class="info-box bg-green">
  <span class="info-box-icon"><i class="fa fa-user-circle"></i></span>
  <div class="info-box-content">
    <span class="info-box-text">จำนวนผู้ใช้งานในระบบทั้งหมด</span>
    <span class="info-box-number"><?php 
    $sql = "SELECT name, count(name)  as total from user ";
 $result = mysqli_query($con,$sql);
 $resultarray = mysqli_fetch_array($result);

 echo  $resultarray ['total'];
?> คน</h4></span>
    <!-- The progress section is optional -->
    <div class="progress">
      <div class="progress-bar" style="width: 70%"></div>
    </div>
    <span class="progress-description">
      รายละเอียด
  </div>
  <!-- /.info-box-content -->
</div>
</div>





