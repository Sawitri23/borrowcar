
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

<h3 align='center'><u><i class='fa fa-book' style="font-size:24x;color:gray"></i> จัดการการยืมอุปกรณ์</u></h3> 
<table id="example1" class="table table-bordered  table-hover table-striped">
<thead>
 <tr class="danger">
    <th width='3%'><center>ลำดับที่</center></th>
    <th width='5%'><center>วันที่ยืม</center></th>
    <th width='5%'><center>วันที่คืน</center></th>
    <th width='5%'><center>รวมวันยืม</center></th>
    <th width='10%'><center>อุปกรณ์</center></th>
    <th width='8%'><center>ผู้ยืม</center></th>
    <th width='10%'><center>หน่วยงาน/สาขา</center></th>
    <th width='8%'><center>สถานที่นำไปใช้</center></th>
    <th width='8%'><center>เหตุผลการยืม</center></th>
    <th width='7%'><center>Emailติดต่อกลับ</center></th>
    <th width='7%'><center>สถานะ</center></th>
    <th width='7%'><center>การอนุมัติ</center></th>
  </tr>
</thead>
<tbody> 
  <?php
  $count=0;
  while($row = mysqli_fetch_array($result)) {
    $count++;
  echo "<tr>";
    echo "<td>" .$count .  "</td> ";
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

    echo "<td>" .$row["item_name"] .  "</td> ";
    echo "<td>" .$row["name"] .  "</td> ";
    echo "<td>" .$row["dept_name"] .  "</td> ";
    echo "<td>" .$row["location"] .  "</td> ";
    echo "<td>" .$row["remark"] .  "</td> ";
    echo "<td>" .$row["email"] .  "</td> ";

    echo "<td>";
    echo "<input type='hidden' name='borrow_id' value='<?php echo $borrow_id ?>'>";
    echo  "<select name='b_status' id='b_status' class='form-control'>";
     echo      "<option value='รออนุมัติ'>รออนุมัติ</option> "; 
      echo   "<option value='อนุมัติ'>อนุมัติ</option>";
       echo   "<option value='ไม่อนุมัติ'>ไม่อนุมัติ</option>";
     echo   "</select>";
     echo "</td> ";

    //แก้ไขข้อมูล
    echo "<td><a href='form.php?p=editborrow2&ID=$row[0]' <button type='button' class='btn btn-primary btn-xs'><i class='fa fa-check' value='submit'></i> บันทึกการอนุมัติ</button></a>
</td> ";
  echo "</tr>";
  }
echo "</table>";
//5. close connection
mysqli_close($con);
?>
