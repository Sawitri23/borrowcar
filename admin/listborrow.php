<?php error_reporting(0);
include ("css.php");
include ("../condb.php");
?>

<?php
if(isset($_POST["update"])){
$borrow_id = $_POST["borrow_id"];
$b_status = $_POST["b_status"];
$r_status = $_POST["r_status"];

$update = $con->query("UPDATE borrow  SET b_status = '$b_status',r_status='$r_status' WHERE borrow_id = '$borrow_id'");

}
?>
<table id="example1" class="table table-bordered  table-hover table-striped">
  <thead>
  <tr class='danger'>
      <th scope="col"><center>#</center></th>
      <th scope="col"><center>วันที่ยืม</center></th>
      <th scope="col"><center>กำหนดคืน</center></th>
      <th scope="col"><center>รวมวันยืม</center></th>
      <th scope="col"><center>ยี่ห้อรถ</center></th>
      <th scope="col"><center>จำนวนยืม</center></th>
      <th scope="col"><center>ผู้ยืม  </center></th>
      <th scope="col"><center>การรับรถ</center></th>
      <th scope="col"><center>สถานะการยืม</center></th>
      <th scope="col"><center>สถานะการใช้งาน</center></th>
      <th scope="col"><center>บันทึก</center></th>
   </center></tr>
</thead>
  <tbody>

<?php
         $sql_code = $con->query("SELECT * FROM borrow WHERE r_status='รออนุมัติการยืม' order by b_date DESC");
          while($row = $sql_code->fetch_array()){ 
            $count ++;
            $borrow_id = $row["borrow_id"];
            $b_date = $row["b_date"];
            $r_date = $row["r_date"];
            $item_name = $row["item_name"];
            $item_use = $row["item_use"];
            $name = $row["name"];
            $dept_name = $row["dept_name"];
            $recieve = $row["recieve"];
            $b_status = $row["b_status"];
            $r_status = $row["r_status"];
        ?>

    <tr>
      <td><?php echo $count;?></td>
      <td><?php echo $b_date;?></td>
      <td><?php echo $r_date;?></td>
      <td>
        <?php
        $datestart=$row["b_date"];
        $dateend=$row["r_date"];

        $calculate =strtotime("$dateend")-strtotime("$datestart");
        $sumdate=floor($calculate / 86400); // 86400 มาจาก 24*360 (1วัน = 24 ชม.);

        $sm = $sumdate;
        echo $sm; 
        echo 'วัน'; 
        echo "</td> ";
        ?>
        </td>

      <td><?php echo $item_name;?></td>

      <td><center>
      <?php echo $item_use;?>
   </center> </td>

      <td><?php echo $name;?></td>
      <td><?php echo $recieve;?></td>

      <td>
      <form action="" method="POST">
        <input type="hidden" name="borrow_id" value="<?php echo $borrow_id;?>"/>
        <select name="b_status" id="b_status" class="form-control form-control-sm">   
        <!--  <option>
        <?php
         if($b_status=="รออนุมัติ"){
        echo "รออนุมัติ";
        }elseif ($b_status=="ไม่อนุมัติ") {
        echo "ไม่อนุมัติ";
        }elseif ($b_status=="อนุมัติแล้ว"){
        echo "อนุมัติแล้ว";
        }
        ?>  
        </option> -->
        <option value="รออนุมัติ">รออนุมัติ</option>
        <option value="ไม่อนุมัติ">ไม่อนุมัติ</option>
        <option value="อนุมัติแล้ว">อนุมัติแล้ว</option>
        </select>
    </td>

    <td>
  <div id="box">
  <input type="hidden" name="borrow_id" value="<?php echo $borrow_id;?>"/>
        <select name="r_status" id="r_status" class="form-control form-control-sm">   
        <option value="รออนุมัติการยืม">รออนุมัติการยืม</option>
        <option value="ไม่อนุมัติการยืม">ไม่อนุมัติการยืม</option>
        <option value="อยู่ระหว่างการใช้งาน">อยู่ระหว่างการใช้งาน</option>
        </select>
  </div> 
    </td>
    <td>
      <button type="submit" name="update" class="btn btn-success"><i class="fa fa-arrow-circle-up"></i> อัพเดต</button>
      </td>

  </form>
    </tr>
<?php } ?>
  </tbody>
</table>

<!-- <script type="text/javascript">
$(document).ready(function(){

$("#box").show();

$("#b_status").change(function(){
  var b_status = $("#b_status").val();
  if(b_status == 'รออนุมัติ'){
    $("#box").show();
    $("#r_status").val("รออนุมัติการยืม").focus();
  }else if(b_status == 'ไม่อนุมัติ'){
    $("#box").show();
    $("#r_status").val("ไม่อนุมัติการยืม");
  }else if(b_status == 'อนุมัติแล้ว'){
    $("#box").show();
    $("#r_status").val("อยู่ระหว่างการใช้งาน");
  }
  
});

});

</script> -->


