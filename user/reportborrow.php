<?php
use yii\helpers\Html;
include ('../condb.php');
  $query1= "SELECT * from borrow ORDER BY borrow_id ";
  $result1 = mysqli_query($con, $query1);
?>

<h4><u>ประวัติการยืมอุปกรณ์:</u></h4>

<table class="table_bordered" width="100%" border="0" cellpadding="0" cellspacing="0">
      <td><center>ลำดับที่</center></td>
      <td><center>รายการ</center></td>
      <td><center>วันที่ยืม</center></td>
      <td><center>กำหนดที่คืน</center></td>
      <td><center>รวม</center></center></td>
       <td><center>วันที่คืน</center></center></td>
       <td><center>คืนช้า</center></center></td>
      <td><center>สถานะการยืม</center></td>
      <td><center>สถานะการคืน</center></td>
    <?php
    $sql_code = $con->query("SELECT * FROM borrow where name ='$_SESSION[name]' order by borrow_id");
   while($row = $sql_code->fetch_array()){ 
            $i = $row["borrow_id"];
            $borrow_id = $row["borrow_id"];
            $b_date = $row["b_date"];
            $r_date = $row["r_date"];
            $r1_date = $row["r1_date"];
            $item_name = $row["item_name"];
            $name = $row["name"];
            $dept_name = $row["dept_name"];
            $location = $row["location"];
            $remark = $row["remark"];
            $recieve = $row["recieve"];
            $b_status = $row["b_status"];
            $r_status = $row["r_status"];
        ?>
    <tr>
        <td><center><small><?php echo $i;?></small></center></td>
        <td><center><small><?php echo $item_name;?></small></center></td>
        <td><center><small><?php echo date('d/m/Y',strtotime($row['b_date']));?></small></center></td>
        <td><center><small><?php echo date('d/m/Y',strtotime($row['r_date']));?></small></center></td>

        <td><center><small>
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
      </small></center></td>

       <td><center><small>
        <?php 
        if($row['r1_date']<01/01/2001){
          echo "-"; 
        }else{
        echo date('d/m/Y',strtotime($row['r1_date']));
        }
        ?>  
       </small></center></td>

        <td><center><small>
        <?php
        $datestart=$row["r_date"];
        $dateend=$row["r1_date"];

        $calculate =strtotime("$datestart")-strtotime("$dateend");
        $sumdate1=floor($calculate / 86400); // 86400 มาจาก 24*360 (1วัน = 24 ชม.);

        $sm1 = $sumdate1;
        if($sm1>=500){
          echo "-";  
        }elseif ($sm1<=0){  
        echo $sm1; 
        echo ' วัน';    
        }else{  
        echo $sm1; 
        echo ' วัน'; 
        echo "</td> ";
      }
        ?>
        </small></center></td>

        <td><center><small><?php echo $location;?></small></center></td>
        <td><center><small><?php echo $b_status;?></small></center></td>
        <td><center><small><?php echo $r_status;?></small></center></td>
     
    </tr>
    </table>
<?php } ?>