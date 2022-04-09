<?php
include('../condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
  //สร้างตัวแปรเก็บค่าที่รับมาจากฟอร์ม
  $dept_name = $_REQUEST["dept_name"];

$check = "SELECT * FROM department  
  WHERE dept_name = '$dept_name' ";
    $result1 = mysqli_query($con, $check) or die(mysqli_error($con));
    $num=mysqli_num_rows($result1);

    if($num > 0)
    {
    echo "<script>";
    echo "alert(' ชื่อหน่วยงานหรือสาขาซ้ำ กรุณาเปลี่ยนชื่อไหม่อีกครั้ง !');";
    echo "window.history.back();";
    echo "</script>";
    }else{

$sql="INSERT INTO department values('','$dept_name')";

$result=mysqli_query($con,$sql);

mysqli_close($con);
}

if($result){
  echo "<script type='text/javascript'>";
  echo "alert('บันทึกข้อมูลเรียบร้อยแล้ว');";
  echo "window.location = 'fromdept.php'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('Error back to register again');";
  echo "</script>";
}
?>