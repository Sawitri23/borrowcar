<?php error_reporting(0);
include ("css.php");
include ("../condb.php");

$sql="SELECT * FROM item";

if(isset($_POST["update"])){
$item_id = $_POST["item_id"];

$item_total = $_POST["item_total"];
$item_use = $_POST["item_use"];
$item_sum = $_POST["item_sum"];

     
  $item_sum=$item_total-$item_use;
  
$update = $con->query("UPDATE item SET 
  item_total = '$item_total',
  item_use = '$item_use',
  item_sum = '$item_sum' 
  WHERE item_id='$item_id'");
}
?>

<table id="example1" class="table table-bordered  table-hover table-striped">
  <thead>
  <center><tr class='danger'>
      <th width="5%"><center>ลำดับ</center></th>
      <th width="12%"><center>ภาพประกอบ</center></th>
      <th width="10%"><center>ยี่ห้อรถ</center></th>
      <th width="10%"><center>รายการที่มี</center></th>
      <th width="5%"><center>ถูกยืม</center></th>
      <th width="10%"><center>คงเหลือ</center></th>     
      <th width="5%"><center>สถานะ</center></th>
      <th width="20%"><center>รายละเอียด</center></th>
      <th width="5%"><center>เพิ่ม</center></th>


   </tr></center>
</thead>
  <tbody>
  <?php
         $sql_code = $con->query("SELECT * FROM item");
          while($row = $sql_code ->fetch_array()){ 
            $i ++;
            $item_id = $row["item_id"];
            $img = $row["item_img"];
            $item_name = $row["item_name"];
            $item_total = $row["item_total"];
            $item_use = $row["item_use"];
            $item_sum = $row["item_sum"];
            $status = $row["status"];  
            $detail = $row["detail"];

            
        ?>
    <tr> 
      <td> <?php echo $i;?></td>
    <td><center><img src="../img/<?php echo $img; ?>" width="60" /></center></td>
    <td><?php echo $item_name;?></td>

    <td>
    <form action="" method="POST">
    <input type="hidden" name="item_id" value="<?php echo $item_id;?>"/>
    <input  name="item_total" id ="item_total" class="form-control form-control-sm" value="<?php echo $item_total;?>" size="3"/>
    </td>

    <td>
    <form action="" method="POST">
    <input type="hidden" name="item_id" value="<?php echo $item_id;?>"/>
    <input  type="text"  name="item_use" id ="item_use" class="form-control form-control-sm" value="<?php echo $item_use;?>" size="2"/>
    </td>
    
    <td> <?php echo $item_sum;?> </td>

    <td><?php echo $status;?></td>
    <td><?php echo $detail;?></td>

    <td>
    <button type="submit" name="update" class="btn btn-success" ID=$row[0]><i class="fa fa-arrow-circle-up"></i> อัพเดต</button>
    </td>

  </form>
    </tr>
<?php } ?>
  </tbody>
</table>