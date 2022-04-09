<table id="example1" class="table table-bordered  table-hover table-striped">
  <thead>
    <tr class="danger">
      <th width="7%"><center>ลำดับที่</center></th>
      <th><center>ภาพประกอบ</center></th>
      <th><center>รายการ</center></th>
      <th><center>จำนวนคงเหลือ</center></th>
      <th><center>สถานะ</center></th>
    </tr>
  </thead>
  <tbody>
    <?php
    $count=0;
    include "../condb.php";
    $sql="select * from item ";
    $result =mysqli_query($con,$sql);
    while($record=mysqli_fetch_array($result)){   
    $count++;
    echo "
    <tr><center>
      <td><center>$count</center></td>
      <td><center><img src='../img/".$record["item_img"]."' width='40'></center></td>
      <td>$record[item_name]</td>
      <td>$record[item_sum]</td>
      <td>$record[status]</td>
    </center></tr>";
    }
    ?>

    
  </table>