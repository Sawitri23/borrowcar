<?php error_reporting(0);
include ("css.php");
include ("../condb.php");
?>

<?php
if(isset($_POST["update"])){
$borrow_id = $_POST["borrow_id"];
$r1_date = $_POST["r1_date"];
$r_status = $_POST["r_status"];
$update = $con->query("UPDATE borrow SET r1_date = '$r1_date', r_status = '$r_status' WHERE borrow_id = '$borrow_id'");
}
?>
<table id="example1" class="table table-bordered  table-hover table-striped">
  <thead>
  <center><tr class='danger'>
  	  <th scope="col">#</th>
      <th scope="col">กำหนดคืน</th>
      <th scope="col">วันที่คืน</th>
      <th scope="col">รวมวันยืม</th>
      <th scope="col">อุปกรณ์</th>
      <th scope="col">ผู้ยืม</th>
      <th scope="col">สถานะการคืน</th>
      <th scope="col">การอนุมัติ</th>
      <th scope="col">บันทึก</th>
   </tr></center>
</thead>
  <tbody>

<?php
         $sql_code = $con->query("SELECT * FROM borrow  WHERE r_status='อยู่ระหว่างการใช้งาน' order by b_date DESC");
          while($row = $sql_code->fetch_array()){ 
            $i++;
            $borrow_id = $row["borrow_id"];
            $r_date = $row["r_date"];
            $r1_date = $row["r1_date"];
            $item_name = $row["item_name"];
            $name = $row["name"];
            $r_status = $row["r_status"];

        ?>

    <tr>
    	<td><center><?php echo $i;?></center></td>
      <td><?php echo date("d/m/Y",strtotime($r_date));?></td>

       <td>
      <form action="" method="POST">
        <input type="hidden" name="borrow_id" value="<?php echo $borrow_id;?>"/>
        <input type="date" name="r1_date" required class="form-control form-control-sm" min="<?php echo date('Y-m-d');?>" value="<?php echo $r1_date ?>"/>
    </td>
      <td>
        <?php
        $datestart=$row["r_date"];
        $dateend=$row["r1_date"];

        $calculate =strtotime("$dateend")-strtotime("$datestart");
        $sumdate=floor($calculate / 86400); // 86400 มาจาก 24*360 (1วัน = 24 ชม.);

        $sm = $sumdate;
        if ($sm>0){
          echo "คืนช้า ";
          echo $sm; 
        echo ' วัน'; 
          }elseif($sm<-500){
           echo "-";   
          }else{
          echo "คืนก่อน ";
        echo $sm; 
        echo ' วัน'; 
        echo "</td> ";
      }
        ?>
        </td>

      <td><?php echo $item_name;?></td>
      <td><?php echo $name;?></td>
      
    <td>
      <form action="" method="POST">
        <input type="hidden" name="borrow_id" value="<?php echo $borrow_id;?>"/>
        <select name="r_status"  class="form-control form-control-sm">
        <option><?php echo $r_status ?></option>
         <option>
        <?php
         if($r_status=="รออนุมัติการคืน"){
        echo "รออนุมัติการคืน";
        }elseif ($r_status=="ไม่อนุมัติการคืน") {
        echo "ไม่อนุมัติการคืน";
        }elseif ($r_status=="อนุมัติการคืน"){
        echo "อนุมัติการคืน";
        }
        ?>  
        </option>
        <option value="รออนุมัติการคืน">รออนุมัติการคืน</option>
        <option value="ไม่อนุมัติการคืน">ไม่อนุมัติการคืน</option>
        <option value="อนุมัติการคืน">อนุมัติการคืน</option>
        </select>
    </td>

     <td>
        <?php
        if($r_status=="คืนอุปกรณ์แล้ว"){
        echo "<font color='red'>รออนุมัติการคืน</font>";
        }elseif($r_status=="รออนุมัติการยืม"){
        echo "รออนุมัติการยืม";
      }elseif($r_status=="อยู่ระหว่างการใช้งาน"){
        echo "<font color='orange'>อยู่ระหว่างการใช้งาน</font>";
         }elseif($r_status=="ไม่อนุมัติการยืม"){
        echo "<font color='red'>ไม่อนุมัติการยืม</font>";
         }elseif($r_status=="รออนุมัติการคืน"){
        echo "รออนุมัติการคืน";
        }elseif ($r_status=="ไม่อนุมัติการคืน") {
        echo "<font color='red'>ไม่อนุมัติการคืน</font>";
        }elseif ($r_status=="อนุมัติการคืน"){
        echo "<font color='blue'>อนุมัติการคืน</font>";
        }
        ?>  
    </td>

    <td>
      <button type="submit" name="update" class="btn btn-success"><i class="fa fa-arrow-circle-up"></i> อัพเดต</button>
      </td>
  </form>
    </tr>
<?php } ?>
  </tbody>
</table>