<?php
//1. เชื่อมต่อ database: 
include('../condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
 
//สร้างตัวแปรสำหรับรับค่าที่นำมาแก้ไขจากฟอร์ม
  $borrow_id = $_REQUEST["borrow_id"];
  $r_date = $_REQUEST["r_date"];
  $r1_date = $_REQUEST["r1_date"];
  $r1_date = $_REQUEST["r_status"];
  $item_name =$_REQUEST["item_m"];

//ทำการปรับปรุงข้อมูลที่จะแก้ไขลงใน database 
  
  $sql = "UPDATE borrow SET  
      r_date='$r_date',
      r1_date='$r1_date', 
      r_status='$r_status,
      item_id='$item_name'
 
      WHERE borrow_id='$borrow_id' ";
 
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));
  
  //ปิดการเชื่อมต่อ database
  mysqli_close($con);
//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
  
  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('คืนอุปกรณ์เรียบร้อยแล้ว');";
  echo "window.location = 'fromreturn.php'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('ไม่สามารถแก้ไขการยืมอุปกรณ์ได้!!!');";
  echo "</script>";
}
?>
 