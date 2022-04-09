<?php 
include ("css.php");
include ("../condb.php");
?>

<h3 align='center'><u><i class='fa fa-book' style="font-size:24x;color:gray"></i> การคืนอุปกรณ์ของคุณ<?php echo $name ?> หน่วยงาน<?php echo $dept_name ?></u></h3> 

<?php
if(isset($_POST["update"])){
$borrow_id = $_POST["borrow_id"];
$r1_date = $_POST["r1_date"];
$r_status = $_POST["r_status"];
$update = $con->query("UPDATE borrow SET r1_date='$r1_date',r_status = '$r_status' WHERE borrow_id = '$borrow_id'");
}
?>
<table id="example1" class="table table-bordered  table-hover table-striped">
  <thead>
  <center><tr class='danger'>
    <th scope="col">ลำดับที่</center></th>
    <th scope="col">กำหนดคืน</center></th>
    <th scope="col">วันที่คืน</center></th>
    <th scope="col">คืนล่าช้า</center></th>
    <th scope="col">อุปกรณ์</center></th>
    <th scope="col">สถานะการคืน</center></th>
    <th scope="col">คืนอุปกรณ์</center></th>
 </tr></center>
</thead>
  <tbody>
  <?php
  $count=0;
    $sql_code = $con->query("SELECT * FROM borrow where name ='$_SESSION[name]' AND r_status='อยู่ระหว่างการใช้งาน' order by borrow_id");
          while($row = $sql_code->fetch_array()){ 
            $count++;
            $borrow_id = $row["borrow_id"];
            $r_date = $row["r_date"];
            $r1_date = $row["r1_date"];
            $item_name = $row["item_name"];
            $r_status = $row["r_status"];
        ?>

 <tr>
      <td><?php echo $count;?></td>
      <td><?php echo date("d/m/Y",strtotime($r_date));?></td>

      <td>
      <form action="" method="POST">
        <input type="hidden" name="borrow_id" value="<?php echo $borrow_id;?>"/>
        <input type="date" name="r1_date"  class="form-control form-control-sm" min="<?php echo date('Y-m-d');?>" />
    </td>

      <td>
        <?php
        $datestart=$row["r_date"];
        $dateend=$row["r1_date"];

        $calculate =strtotime("$datestart")-strtotime("$dateend");
        $sumdate=floor($calculate / 86400); // 86400 มาจาก 24*360 (1วัน = 24 ชม.);

        $sm = $sumdate;
        if($sm>500){
          echo "-";
        }elseif ($sm>0){
          echo 'คืนก่อน ';   
        echo $sm; 
        echo ' วัน';    
        }else{
        echo 'คืนช้า ';   
        echo $sm; 
        echo ' วัน'; 
        echo "</td> ";
      }
        ?>
        </td>

      <td><?php echo $item_name;?></td>
    
    <td>
      <form action="" method="POST">
        <input type="hidden" name="borrow_id" value="<?php echo $borrow_id;?>"/>
        <select name="r_status"  class="form-control form-control-sm">
        <option><?php echo $r_status;?></option>

         <option>
        <?php
         if($r_status=="อยุ่ระหว่างใช้งาน"){
        echo "อยุ่ระหว่างใช้งาน";
        }elseif ($r_status=="คืนอุปกรณ์แล้ว") {
        echo "คืนอุปกรณ์แล้ว";
        }
        ?>  
        </option>
        <option value="อยุ่ระหว่างการใช้งาน">อยุ่ระหว่างใช้งาน</option>
        <option value="คืนอุปกรณ์แล้ว">คืนอุปกรณ์แล้ว</option>
        </option>
        </select>
    </td>
    
    <td>
      <button type="submit" name="update" class="btn btn-success"><i class="fa fa-arrow-circle-up"></i> อัพเดต</button>
      </td>
  </form>
    </tr>
<?php } ?>
  </tbody>
</table>