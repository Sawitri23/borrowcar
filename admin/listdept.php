<?php session_start();
include('../condb.php');
$ID = $_SESSION['ID'];
$name = $_SESSION['name'];
$level = $_SESSION['level'];
if($level!='admin'){
Header("Location: ../logout.php");
}
?>
<?php
include('css.php');
//1. เชื่อมต่อ database:
include('../condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//2. query ข้อมูลจากตาราง tb_admin:
$query = "SELECT * FROM department ORDER BY dept_id ASC" or die("Error:" . mysqli_error($con));
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
$result = mysqli_query($con, $query);
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
?>
<table id="example1" class="table table-bordered  table-hover table-striped">
  <thead>
  <center><tr class='danger'>
    <th width='3%'>ลำดับที่</th>
    <th width='25%'><center>ปรเภทรถ</center></th>
    <th width='1%'><center>แก้ไข</center></th>
    <th width='1%'><center>ลบ</center></th>
  </tr></center>
</thead>
<tbody> 
  <?php
  $count=0;
  while($row = mysqli_fetch_array($result)) {
    $count++;
  echo "<tr>";
    echo "<td><center>" .$count .  "</center></td> ";
    echo "<td>" .$row["dept_name"] .  "</td> ";
    //แก้ไขข้อมูล

    echo "<td><center><a href='form.php?p=editdept1&ID=$row[0]' <button type='button' class='btn btn-warning btn-xs'> <i class='fa fa-arrow-circle-up'></i> แก้ไข </center></button></a></center></td> ";

    echo " <td><center><a href='form.php?p=deldept&ID=$row[0]'
    onclick=\"return confirm('คุณต้องการลบเรคคอร์ด $count $row[dept_name] ออกจากระบบหรือไม่?')\"
    <button type='button' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-trash'></span> ลบ </i></button></a></td></a></center></td>";
  echo "</tr>";
  }
echo "</table>";
//5. close connection
mysqli_close($con);
?>




