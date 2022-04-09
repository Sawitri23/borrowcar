 <?php include "../condb.php";?>
<html>
<head>
<title>PHP MySQL กับการบันทึกข้อมูล : SUNZANDESIGN.BLOGSPOT.COM</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/bootstrap.min.css">

<style>

    .highlight {
        background-color: #FFFF88;
    }

</style>

</style>

<style type="text/css">
  @media print{
    #hid{
       display: none; /* ซ่อน  */
    }
  }
</style>

<style type="text/css">
  @media print{
    #hid1{
       display: none; /* ซ่อน  */
    }
  }
</style>

<style type="text/css">
  @media print{
    #txt_keyword{
       display: none; /* ซ่อน  */
    }
  }
</style>

<style type="text/css">
  @media print{
    #txt_keyword1{
       display: none; /* ซ่อน  */
    }
  }
</style>

</head>
<body>
  
      <form name="frmSearch" method="GET" action="">
  <table width="500" border="0">
    <tr>
      <th> 
      <input type="date"  name="txt_keyword" id="txt_keyword" value="<?php echo $search_text;?>">
      <input type="date"  name="txt_keyword1" id="txt_keyword1" value="<?php echo $search_text1;?>" >
            <input type="submit" id="hid1" value="ค้นหา" /></th>
        </tr>
    </table>
        </div>
       
    </form>
    
      <div class="row">
        <?php
       
            $search_text = isset($_GET['txt_keyword']) ? $_GET['txt_keyword'] : ''; 
            $search_text1 = isset($_GET['txt_keyword1']) ? $_GET['txt_keyword1'] : '';
           
            $data = array();
            $sql = "SELECT * FROM borrow 
                    WHERE b_date between '".$search_text."' and  '".$search_text1."' or b_date LIKE '%$search_text%'and b_date LIKE '%$search_text1%'"; 

            if ($result = $con->query($sql)) {
                //printf("Select returned %d rows.\n", $result->num_rows);
                while($row = $result->fetch_array(MYSQLI_ASSOC)){
                    //print_r($row);echo '<br>';
                    $data[] = $row;
                }

                /* free result set */
                $result->close();
            }
            $con->close();
           
            //echo '<pre>', print_r($data, true), '</pre>';
        ?>
   <div class="col-md-12 ">
  <div class="col-sm-2" align="right"> </div>
  <div class="col-sm-12" align="left">
        <table>
        <tr>
      
        <td>
            <h4><strong>คณะสถาปัตยกรรมศาสตร์และการผังเมือง</strong></h4>
            <strong>มหาวิทยาลัยธรรมศาสตร์ ศูนย์รังสิต</strong><br />
            <small>พิมพ์โดยคุณ: <?php echo $name ?></small><br>
            <small>สถานะ: <?php echo $level ?></small><br>
            
        </td>
    </tr>
</table>

<u><center><b><h4>บุคลากรที่ยืมอุปกรณ์: ระหว่างวันที่ 
  <?php 
if ($_GET['txt_keyword']<01/01/2001){
  echo " - ";
}else{
echo date('d/m/Y',strtotime($_GET['txt_keyword']));
 } ?>
 ถึงวันที่
<?php
  if ($_GET['txt_keyword1']<01/01/2001){
  echo " - ";
}else{
echo date('d/m/Y',strtotime($_GET['txt_keyword1']));
  } ?>
</center></b></h4></u>

       <table class="table_bordered" width="100%" border="1" cellpadding="0" cellspacing="0">
    <tr>
    <td><center>ลำดับที่</center></td>
    <td><center>ผู้ยืม</center></td>
      <td><center>รายการ</center></td>
       <td><center>วันที่คืน</center></center></td>
       <td><center>คืนช้า</center></center></td>
      <td><center>การยืม</center></td>
      <td><center>การคืน</center></td>
    </tr>
              <?php
                    foreach($data as $row){
                        $i++;
                      ?>

                <tr>
      <td><center><small><?php echo $i;?></small></center></div></td>
      <td><small><?php echo $row["name"];?></small></div></td>
    <td><small><?php echo $row["item_name"];?></small></div></td>

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

        <td><center><small><?php echo $row['b_status'];?></small></center></td>
        <td><small><?php echo $row['r_status'];?></small></td>
    </tr>
                <?php }?>
            </tbody>
        </table>
      </div>
      
    </div><!-- container -->

    <footer class="footer">

    </footer>

</div> <!-- /container -->

</body>
</html>
<br><br>
<h4 align="right"><button id="hid" onclick="window.print();" class="btn btn-primary btn-ls"><i class="fa fa-print"></i> พิมพ์รายงาน</button></h4>