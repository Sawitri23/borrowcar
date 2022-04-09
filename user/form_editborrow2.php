<?php
//1. เชื่อมต่อ database: 
include('../condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
 
//สร้างตัวแปรสำหรับรับค่าที่นำมาแก้ไขจากฟอร์ม
  $borrow_id = $_REQUEST["borrow_id"];
  $b_date = $_REQUEST["b_date"];
  $r_date = $_REQUEST["r_date"];
  $item_name = $_REQUEST["item_name"];  
  $recieve = $_REQUEST["recieve"];
  
 
//ทำการปรับปรุงข้อมูลที่จะแก้ไขลงใน database 
  
  $sql = "UPDATE borrow SET  
      b_date='$b_date',
      r_date='$r_date', 
     recieve='$recieve',
     item_name ='$item_name'

      WHERE borrow_id='$borrow_id' "; 
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));
mysqli_close($con); //ปิดการเชื่อมต่อ database 
 
//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
  
  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('แก้ไขการยืมอุปกรณ์เรียบร้อยแล้ว');";
  echo "window.location = 'fromborrow.php'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('ไม่สามารถแก้ไขการยืมอุปกรณ์ได้!!!');";
  echo "</script>";
}
?>
 