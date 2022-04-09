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

<h3 align='center'><u><i class='fa fa-book' style="font-size:24x;color:gray"></i> ประวัติการยืมรถ</u></h3>

<table id="example1" class="table table-bordered  table-hover table-striped">
<thead>
 <tr class="danger">
    <th width='3%'><center>ลำดับที่</center></th>
    <th width='5%'><center>ผู้ยืม</center></th>
    <th width='8%'><center>ยี่ห้อรถ</center></th>
    <th width='3%'><center>วันที่ยืม</center></th>
    <th width='7%'><center>กำหนดวันคืน</center></th>
    <th width='5%'><center>วันที่คืน</center></th>
    <th width='5%'><center>คืนล่าช้า</center></th>
    <th width='3%'><center>จำนวนยืม</center></th>
    <th width='3%'><center>การยืม</center></th>
    <th width='5%'><center>การคืน</center></th>
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
    echo "<td><center>" .$count.  "</center></td> ";
     echo "<td>" .$row["name"] .  "</td> ";
      echo "<td>" .$row["item_name"] .  "</td> ";

    echo "<td>"; 
    echo date('d/m/Y',strtotime($row["b_date"])); 
    echo "</td> ";
    echo "<td>";
    echo date('d/m/Y',strtotime($row["r_date"])); 
    echo "</td> ";

    echo "<td>"; 
    if ($row['r1_date']<=01/01/2001){
        echo "-";
    }else{  
    echo date('d/m/Y',strtotime($row["r1_date"])); 
    }
    echo "</td> ";

    echo "<td>"; 
    $dateend1=$row["r_date"];
    $dateend2=$row["r1_date"];
    $calculate1 =strtotime("$dateend1")-strtotime("$dateend2");
    $sumdate1=floor($calculate1 / 86400); // 86400 มาจาก 24*360 (1วัน = 24 ชม.);
    $sm1 = $sumdate1;
    
    if($sm1>=500){
    echo "-";
    }else{
    echo $sm1; 
    echo 'วัน'; 
    }
    echo "</td> ";
    echo "<td align='center'>" .$row["item_use"] .  "</td> ";
    echo "<td>" .$row["b_status"] .  "</td> ";
    echo "<td>" .$row["r_status"] .  "</td> ";
    echo "<td><center><a href='form.php?p=delborrow&ID=$row[0]' <button type='button' class='btn btn-danger btn-xs'>ยกเลิกการยืม</center></button></a></center></td> ";
    //แก้ไขข้อมูล

  }
echo "</table>";
//5. close connection
mysqli_close($con);
?>

