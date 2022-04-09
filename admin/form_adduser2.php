<?php
include('../condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
  //สร้างตัวแปรเก็บค่าที่รับมาจากฟอร์ม
  $username = $_REQUEST["username"];
  $password = $_REQUEST["password"];
  $name = $_REQUEST["name"];
  $tel = $_REQUEST["tel"];
  $email = $_REQUEST["email"];
  $level = $_REQUEST["level"];
  //เพิ่มเข้าไปในฐานข้อมูล

$check = "
  SELECT  username 
  FROM user  
  WHERE username = '$username' ";
    $result1 = mysqli_query($con, $check) or die(mysqli_error($con));
    $num=mysqli_num_rows($result1);

    if($num > 0)
    {
    echo "<script>";
    echo "alert(' ชื่อผู้ใช้งานระบบซ้ำ กรุณาเปลี่ยนชื่อไหม่อีกครั้ง !');";
    echo "window.history.back();";
    echo "</script>";
    }else{

  $sql = "INSERT INTO user(username, password, name,  tel, email, level)
       VALUES('$username', '$password', '$name',  '$tel', '$email', '$level')";

  $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));
  
  //ปิดการเชื่อมต่อ database
  mysqli_close($con);
}
  //จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
  
  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('บันทึกข้อมูลเรียบร้อยแล้ว');";
  echo "window.location = 'fromuser.php'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('Error back to register again');";
  echo "</script>";
}
?>