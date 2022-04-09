
<?php
include("../condb.php");
$query = "SELECT * FROM item WHERE item_sum<>0 AND status <>'ชำรุด' ";
$result = mysqli_query($con, $query);
?>

  <form name="frmSearch" method="GET" enctype="multipart/form-data" action="">
  <div class="row"></div
  <table width="500" border="0">
    <tr>
      <th>
        <div class align="right">
        <div class="col-sm-10" align="right"> </div>
      <div class="col-sm-2" align="left">
      <input name="serch" type="text" id="serch" value="" maxlength="100" placeholder="ค้นหาอุปกรณ์" > 
      <button type="submit" class="btn btn-warning btn-sm" id="btn"><i class="fa fa-search"></i>
      </button>
  </div>
</th>
    </tr>
  </table>
</div>
</form>
<?php
$serch=isset($_GET['serch']) ? $_GET['serch']:'';

$sql="SELECT * FROM item WHERE item_name LIKE '%$serch%'";
$result = $con->query($sql);
?>
<center>
<?php
$sql="SELECT * FROM item where item_name like '%$serch%'";
$result1 = mysqli_query($con,$sql);
$num = mysqli_num_rows($result1);
if($serch ==''){
 echo"<u><font size='3' color='blue'>:: อุปกรณ์ทั้งหมด_[ $num ]_รายการ ::</font></u></span><br />"; 
}else if($serch !=''){
echo "<u><font size='3' color='blue'>:: อุปกรณ์ที่ค้นพบ_[ $num ]_รายการ  ::</font></u></span><br />";
}else if($serch==0){
echo "<u><font size='3' color='blue'>:: ไม่พบรายการที่ค้นหา กรุณาค้นหาใหม่ ::  </font></u></span><br />";
}
?>
</center>
<p> <hr>


<!DOCTYPE html>
<html>
  <head> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </head>
  <body>

    <?php
    $count=0;
    while($row = mysqli_fetch_array($result))
    {
    $image = $row['item_img']; 
    $count++;
    ?>
      <div class="col-md-3 ">     
            <tr>
              <a href ='form.php?p=addborrow&ID=$row[0]'></a>
           <?php
              if($row["item_sum"]==0){
          echo '<div class="box " broder="0" data-toggle="tooltip tooltip-danger" title="อุปกรณ์รายการนี้หมด">';
        }else{
          echo '<div class="box " broder="0" data-toggle="tooltip tooltip-danger" title="ยืมอุปกรณ์">';
        }
          ?>        

              <td><center><a href ='form.php?p=addborrow&ID=$row[0]'><img src="../img/<?php echo $image; ?>" width="150"  /></a></center></td>
                <td><center><h5><span class="label label-warning"><?php echo $row["item_name"]; ?> | คงเหลือ: <?php echo $row["item_sum"]; ?> ชิ้น</span></h5></center></td>
              </tr>
              <tr><p></p>
              <td><input type="button" name="view" value=" รายละเอียด " id="<?php echo $row["item_id"]; ?>" class="btn btn-success btn-xs btn-block view_data "/></button></td>
            </tr>
          </div>
        </div> 

      <?php
      }
      ?>

    </table>
  </div>
</div>
</body>
</html>
<div id="dataModal" class="modal fade">
<div class="modal-dialog">
<div class="modal-content">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title"><center>รายละเอียดอุปกรณ์</center></h4>
  </div>
  <div class="modal-body" id="detail">
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-danger" data-dismiss="modal">กลับหน้าหลัก</button>
  </div>
</div>
</div>
</div>
<script>
$(document).ready(function(){
$('.view_data').click(function(){
var item_id = $(this).attr("id");
$.ajax({
url:"select.php",
method:"post",
data:{item_id:item_id},
success:function(data){
$('#detail').html(data);
$('#dataModal').modal("show");
}
});
});
});
</script>

