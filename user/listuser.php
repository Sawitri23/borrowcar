
<?php
include('css.php');
//1. เชื่อมต่อ database:
include('../condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//2. query ข้อมูลจากตาราง tb_admin:
$query = "SELECT * FROM user ORDER BY user_id ASC" or die("Error:" . mysqli_error($con));
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
$result = mysqli_query($con, $query);
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
?>
<table id="example1" class="table table-bordered  table-hover table-striped">
</thead>
  <tr class='danger'>
    <th width='5%'><center>ลำดับที่</center></th>
    <th width='10%'><center>ชื่อผู้ใช้งานระบบ</center></th>
    <th width='10%'><center>ชื่อ-สกุล</center></th>
    <th width='20%'><center>หน่วยงาน/สาขา</center></th>
    <th width='10%'><center>หมายเลขโทรศัพท์</center></th>
    <th width='15%'><center>E-mail</center></th>
    <th width='7%'><center>สิทธิ์การเข้าถึง</center></th>
    <th width='3%'><center>แก้ไข</center></th>
    <th width='3%'><center>ลบ</center></th>
  </tr>
</thead>
<tbody> 
  <?php
  $count=0;
  while($row = mysqli_fetch_array($result)) {
    $count++;
  echo "<tr>";
    echo "<td>" .$count .  "</td> ";
    echo "<td>" .$row["username"] .  "</td> ";
    echo "<td>" .$row["name"] .  "</td> ";
    echo "<td>" .$row["dept_name"] .  "</td> ";
    echo "<td>" .$row["tel"] .  "</td> ";
    echo "<td>" .$row["email"] .  "</td> ";
    echo "<td>" .$row["level"] .  "</td> ";

    //แก้ไขข้อมูล

    echo "<td><center><a href='form.php?p=edituser1&ID=$row[0]' <button type='button' class='btn btn-warning btn-xs'> <i class='fa fa-wrench'></i> แก้ไข</center></button></a></center></td> ";

    echo " <td><center><a href='form.php?p=deluser&ID=$row[0]'
    onclick=\"return confirm('คุณต้องการลบเรคคอร์ด $count $row[name] ออกจากระบบหรือไม่?')\"
    <button type='button' class='btn btn-danger btn-xs'> <span class='glyphicon glyphicon-trash'></span> ลบ</button></a></td></a></center></td>";
  echo "</tr>";
  }
echo "</table>";
//5. close connection
mysqli_close($con);
?>
