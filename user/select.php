<?php  
 if(isset($_POST["item_id"]))  
 {  
      $output = '';  
      include ("../condb.php");  
      $query = "SELECT item.* ,borrow.name,borrow.b_date,borrow.r_date FROM item LEFT JOIN borrow ON item.item_id = borrow.borrow_id WHERE item_id = '".$_POST["item_id"]."'";  
      $result = mysqli_query($con, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered table-sm">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  

                <tr>  
                  <td width="20%"><label>ภาพอุปกรณ์</label></td>
                  <td ><center><img src=../img/'.$row["item_img"].' width="200" ></center></td>
                </tr>
                <tr>
                  <td width="20%"><label>ชื่ออุปกรณ์</label></td>  
                  <td width="80%">'.$row["item_name"].'</td>  
                </tr>
                <tr>
                  <td width="20%"><label>คงเหลือ</label></td>  
                  <td width="80%">'.$row["item_sum"].'ชิ้น</td>  
                </tr>
                <tr>
                  <td width="20%"><label>รายละเอียด</label></td>
                  <td >'.$row["detail"].'</td>  
                </tr>

                ';  
      }  
      $output .= "</table></div>";  
      echo $output;  
 }  
 ?>