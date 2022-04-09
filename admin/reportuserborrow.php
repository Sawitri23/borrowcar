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
            $sql = "SELECT *, COUNT(name) AS total FROM borrow 
                    WHERE b_date between '".$search_text."' and  '".$search_text1."' or b_date LIKE '%$search_text%'and b_date LIKE '%$search_text1%' GROUP BY dept_name ORDER BY dept_name DESC"; 

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
            <small>พิมพ์โดยคุณ: <?php echo $name ?> </small><br>
            <small>สถานะ: <?php echo $level ?></small>
            
        </td>
    </tr>

</table>

<u><center><b><h4>หน่วยงานที่ยืมอุปกรณ์: ระหว่างวันที่ 
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
</h4></b></center></u>
    
       <table class="table_bordered" width="100%" border="1" cellpadding="0" cellspacing="0">
    <tr>
    <td><center>ลำดับที่</center></td>
    <td><center>หน่วยงาน</center></td>
    <td><center>จำนวนการยืม</center></td>
    <td><center>วันที่ยืม</center></td>
    <td><center>วันที่คืน</center></td>
    </tr>
              <?php
                    foreach($data as $row){
                        $i++;
                      ?>
    <tr>
      <td><center><small><?php echo $i;?></small></center></div></td>
      <td><small><?php echo $row["dept_name"];?></small></div></td>
        <td><center><small><?php echo $row['total'];?></small></center></td>
        <td><center><small><?php echo date('d/m/Y',strtotime($row["b_date"]));?></small></center></div></td>
        <td><center><small><?php echo date('d/m/Y',strtotime($row['r_date']));?></small></center></td>
    </tr>
  <?php
  }
  ?>
  </table>
  <br><br>
 
      </div>
      
    </div><!-- container -->

    <footer class="footer">

    </footer>

</div> <!-- /container -->

</body>
</html>
<h4 align="right"><button id="hid" onclick="window.print();" class="btn btn-primary btn-ls"><i class="fa fa-print"></i> พิมพ์รายงาน</button></h4>