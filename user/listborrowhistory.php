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

<h3 align='center'><u><i class='fa fa-book' style="font-size:24x;color:gray"></i> ประวัติการยืมรถของคุณ <?php echo $name ?> </u></h3>
                    <p></p><p></p>

<table id="example1" class="table table-bordered  table-hover table-striped">
<thead>
 <tr class="danger">
    <th width='2%'><center>#</center></th>
    <th width='5%'><center>วันที่ยืม</center></th>
    <th width='5%'><center>กำหนดคืน</center></th>
    <th width='5%'><center>รวมวันยืม</center></th>
    <th width='5%'><center>วันที่คืน</center></th>
    <th width='5%'><center>คืนล่าช้า</center></th>
    <th width='10%'><center>ยี่ห้อรถ</center></th>
    <th width='5%'><center>สถานะการยืม</center></th>
    <th width='5%'><center>สถานะการคืน</center></th>
  </tr>
</thead>
<tbody> 
  <?php
  $count=0;
  $query1= "SELECT * FROM borrow as b INNER JOIN item as t ON p.item_name = t.item_name ORDER BY p.borrow_id DESC " or die ("Error:". mysqli_error($con));
  $result1 = mysqli_query($con, $query);
  while($row = mysqli_fetch_array($result1)) {
    $count ++;
   echo "<tr>";

    echo "<td>" .$count.  "</td> ";
    echo "<td>"; 
    echo date('d/m/Y',strtotime($row["b_date"])); 
    echo "</td> ";
    echo "<td>";
    echo date('d/m/Y',strtotime($row["r_date"])); 
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
    }elseif($sm1>0 AND $sm1<500){
        echo "คืนก่อน ";
        echo  $sm1;
        echo " วัน"; 
    }elseif ($sm1<0){
        echo "คืนช้า ";
        echo  $sm1;
        echo " วัน"; 
    }else{
    echo $sm1; 
    echo 'วัน'; 
    }
    echo "</td> ";
    

    echo "<td>" .$row["item_name"] .  "</td> ";
    echo "<td>" .$row["b_status"] .  "</td> ";
    echo "<td>" .$row["r_status"] .  "</td> ";
    //แก้ไขข้อมูล

  }
echo "</table>";
//5. close connection
mysqli_close($con);
?>

