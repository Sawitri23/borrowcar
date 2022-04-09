<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
include('../condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี

//สร้างตัวแปรสำหรับรับค่าที่นำมาแก้ไขจากฟอร์ม
  $user_id = $_REQUEST["user_id"];
  $username = $_REQUEST["username"];
  $name = $_REQUEST["name"];
  $tel = $_REQUEST["tel"];
  $email = $_REQUEST["email"];
  $level = $_REQUEST["level"];
//ทำการปรับปรุงข้อมูลที่จะแก้ไขลงใน database 
  
  $sql = "UPDATE user SET  
      user_id='$user_id', 
      username='$username', 
      name='$name',
      tel='$tel', 
      email='$email',
      level='$level'

      WHERE user_id='$user_id' ";

$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));

mysqli_close($con); //ปิดการเชื่อมต่อ database 

//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
  
  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('แก้ไขข้อมูลเรียบร้อยแล้ว');";
  echo "window.location = 'fromuser.php'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('ไม่สามารถแก้ไขข้อมูลได้');";
  echo "</script>";
}
?>
