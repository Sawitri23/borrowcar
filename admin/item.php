<?php
include('css.php');
//1. เชื่อมต่อ database:
include('../condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//2. query ข้อมูลจากตาราง tb_admin:
$query = "SELECT * FROM item ORDER BY item_id ASC" or die("Error:" . mysqli_error($con));
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
$result = mysqli_query($con, $query);
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
 ?>
<table id="example1" class="table table-bordered  table-hover table-striped">
<thead>
  <tr class='danger'>
    <th width='7%'><center>ลำดับ</center></th>
    <th width='18%'><center>ภาพประกอบ</center></th>
    <th width='10%'><center>ยี่ห้อรถ</center></th>
    <th width='10%'><center>รายการที่มี</center></th>
    <th width='8%'><center>ถูกยืม</center></th>
    <th width='8%'><center>คงเหลือ</center></th>
    <th width='8%'><center>สถานะ</center></th>
    <th width='20%'><center>รายละเอียด</center></th>
    <th ><center>แก้ไข</center></th>
    <th ><center>ลบ</center></th>
  </tr>
</thead>
<tbody> 
  <?php
  $count=0;
  while($row = mysqli_fetch_array($result)) {
    $count++;
    echo "<tr>";
    echo "<td>" .$count .  "</td> ";
    echo "<td>"."<center><img src='../img/".$row["item_img"]."' width='80'></center>"."</td>";
    echo "<td>" .$row["item_name"] .  "</td> ";
     echo "<td>" .$row["item_total"] .  "</td> ";
    echo "<td>" .$row["item_use"] .  "</td> ";
    echo "<td>" .$row["item_sum"] .  "</td> ";
    echo "<td>" .$row["status"] .  "</td> ";
     echo "<td>" .$row["detail"] .  "</td> ";
    //แก้ไขข้อมูล


    echo "<td><center><a href='form.php?p=edititem1&ID=$row[0]' <button type='button' class='btn btn-warning btn-xs'><i class='fa fa-arrow-circle-up'></i> แก้ไข</center></button></a></center></td> ";

    echo " <td><center><a href='form.php?p=delitem&ID=$row[0]'
    onclick=\"return confirm('คุณต้องการลบเรคคอร์ด $row[item_name] ออกจากระบบหรือไม่?')\"
    <button type='button' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-trash'></span> ลบ</button></a></td></a></center></td>";
  echo "</tr>";
  }
echo "</table>";
//5. close connection
mysqli_close($con);
?>