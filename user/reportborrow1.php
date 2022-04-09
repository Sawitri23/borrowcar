 <?php include "../condb.php";?>
<html>
<head>
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
            <input type="submit" value="ค้นหา" id="hid1"/></th>
        </tr>
    </table>
        </div>
       
    </form>
    
      <div class="row">
        <?php
       
            $search_text = isset($_GET['txt_keyword']) ? $_GET['txt_keyword'] : ''; 
            $search_text1 = isset($_GET['txt_keyword1']) ? $_GET['txt_keyword1'] : '';
           
            $data = array();
            $sql = "SELECT borrow.*,item.item_name from borrow INNER JOIN item ON borrow.item_id=item.item_id
                    WHERE name ='$_SESSION[name]' AND b_date between '".$search_text."' and  '".$search_text1."' or b_date LIKE '%$search_text%'and b_date LIKE '%$search_text1%' AND name ='$_SESSION[name]'"; 

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

<u><center><b><h4>รายการยืมอุปกรณ์: ระหว่างวันที่ 
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
      <td><center>รายการ</center></td>
      <td><center>วันที่ยืม</center></td>
      <td><center>กำหนดที่คืน</center></td>
      <td><center>รวม</center></center></td>
       <td><center>วันที่คืน</center></center></td>
       <td><center>คืนช้า</center></center></td>
      <td><center>สถานะการยืม</center></td>
      <td><center>สถานะการคืน</center></td>
    </tr>
              <?php
                    foreach($data as $row){
                        $i++;
                      ?>

                <tr>
      <td><center><small><?php echo $i;?></small></center></div></td>
    <td><center><small><?php echo $row["item_name"];?></small></center></div></td>
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

        <td><center><small><?php echo $row['b_status'];?></small></center></td>
        <td><center><small><?php echo $row['r_status'];?></small></center></td>
    </tr>
  <?php
  }
  ?>
  </table>
  <br><br>
  <tr>
      <td><h5><?php echo "ลงชื่อผู้ยืม..........................................."?></h5></td>
      <td><h5><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;( <?php echo $name ?> )</p></h5></td>
    </tr>

    <tr>
      <br>
      <td>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><u>ข้อกําหนดการยืน-คืน </u></b> <br>
1. การยืมควรระบุเหตุผลความจําเป็นที่ต้องการใช้งานทุกครั้ง และยืมเพื่อประโยชน์ในทางราชการ เท่านั้น  <br>
2. ผู้ยืมมีหน้าที่รับผิดชอบต่อทรัพย์สินที่ได้ยืมไว้ใช้งาน เสมือนหนึ่งเป็นทรัพย์สินของผู้ใช้ยืมเอง ไม่ให้เกิด <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ความเสียหายหรือสูญหาย <br>
3. ผู้ยืมมีหน้าที่ต้องชดใช้ความเสียหายในกรณีที่ทรัพย์สินชํารุด หรือสูญหาย ตามมูลค่าทรัพย์สิน หาก<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ความ เสียหายนั้นเกิดจากความประมาทของผู้ยืม <br>
4. ผู้ยืมต้องไม่ให้ผู้อื่นยืมทรัพย์สินที่ตนเองได้ยืมมาไม่ว่ากรณีใดๆ เว้นแต่การยืมนั้นได้รับการอนุมัติเป็น <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ลายลักษณ์อักษรจากผู้มีอํานาจอนุมัติแล้วเท่านั้น <br>
5. ทรัพย์สินที่ผู้ยืมไปใช้งาน มีไว้ใช้เพื่อประโยชน์ของทางราชการเท่านั้น ห้ามมิให้ผู้ยืมนําทรัพย์สินไปใช้ <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;อย่างอื่นนอกเหนือจากที่หน่วยงานกําหนดหรือทําให้เกิดความเสียหายที่เกิดจากการละเมิดดังกล่าวให้ถือเป็น <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ความผิด ส่วนบุคคล โดยผู้ยืมต้องรับผิดชอบต่อความเสียหายที่เกิดขึ้นนั้น <br>
6. ผู้ยืมจะต้องกําหนดระยะเวลาการยืมให้ชัดเจน และจะต้องนํามาคืนภายในระยะเวลาที่กําหนด <br>
7. กรณีมีความจําเป็นต้องใช้งานต่อ ให้ดําเนินการส่งคืนตามระยะเวลาที่กําหนดให้เรียบร้อยก่อน แล้วจึงจัดทํา <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;บันทึกขอยืมและกาหนดระยะเวลาการยืมใหม <br>
      </td>

    </tr>


      </div>
      
    </div><!-- container -->

    <footer class="footer">

    </footer>

</div> <!-- /container -->

</body>
</html>
      <h4 align="right"><button id="hid" onclick="window.print();" class="btn btn-primary btn-ls"><i class="fa fa-print"></i> พิมพ์รายงาน</button></h4> 