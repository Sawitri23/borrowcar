<?php
include('css.php');
//1. เชื่อมต่อ database:
include('../condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//2. query ข้อมูลจากตาราง tb_admin:
$query = "SELECT * FROM borrow ORDER BY borrow_id ASC" or die("Error:" . mysqli_error($con));
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
$result = mysqli_query($con, $query);
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
?>

<h3 align='center'><u><i class='fa fa-book' style="font-size:24x;color:gray"></i> จัดการการยืมรถของคุณ <?php echo $name ?> <?php  ?></u></h3> 
<a href ='form.php?p=addborrow&ID=$row[0]' class="btn-info btn-sm"><i class="glyphicon glyphicon-plus"></i> ยืมอุปกรณ์</a>
                    <p></p><p></p>
<table id="example1" class="table table-bordered  table-hover table-striped">
<thead>
 <tr class="danger">
    <th width='3%'><center>ลำดับที่</center></th>
    <th width='5%'><center>วันที่ยืม</center></th>
    <th width='5%'><center>กำหนดคืน</center></th>
    <th width='5%'><center>รวมวันยืม</center></th>
    <th width='10%'><center>ยี่ห้อรถ</center></th>
    <th width='5%'><center>สถานะ</center></th>
    <th width='5%'><center>แก้ไข</center></th>
    <th width='5%'><center>ยกเลิก</center></th>
  </tr>
</thead>
<tbody> 
  <?php
  $count=0;
  $query1= "SELECT * FROM borrow ORDER BY borrow_id DESC ";
  $result1 = mysqli_query($con, $query1);
  while($row = mysqli_fetch_array($result1)) {
    $count++;
  echo "<tr>";
    echo "<td>" .$count .  "</td> ";

    echo "<td>"; 
    echo date("d/m/Y",strtotime($row["b_date"]));
    echo "</td> ";

    echo "<td>";
    echo date("d/m/Y",strtotime($row["r_date"]));
    echo "</td> ";

    echo "<td>"; 
    $datestart=$row["b_date"];
    $dateend=$row["r_date"];
    $calculate =strtotime("$dateend")-strtotime("$datestart");
    $sumdate=floor($calculate / 86400); // 86400 มาจาก 24*360 (1วัน = 24 ชม.);
    $sm = $sumdate;
    echo $sm; 
    echo 'วัน'; 
    echo "</td> ";    
    echo "<td>" .$row["item_name"] .  "</td> ";
    echo "<td>" .$row["b_status"] .  "</td> ";
    //แก้ไขข้อมูล
    echo "<td><center><a href='form.php?p=editborrow&ID=$row[0]' <button type='button' class='btn btn-warning btn-xs'>แก้ไขการยืม</center></button></a></center></td> ";
    echo "<td><center><a href='form.php?p=delborrow&ID=$row[0]' <button type='button' class='btn btn-danger btn-xs'>ยกเลิกการยืม</center></button></a></center></td> ";
  }
echo "</table>";
//5. close connection
mysqli_close($con);
?>

