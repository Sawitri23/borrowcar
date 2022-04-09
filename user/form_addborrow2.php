<?php
include('../condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
  //สร้างตัวแปรเก็บค่าที่รับมาจากฟอร์ม
  $b_date = $_REQUEST["b_date"];
  $r_date = $_REQUEST["r_date"];
  $item_name = $_REQUEST["item_name"];
  $item_use = $_REQUEST["item_use"];
  $name = $_REQUEST["name"];
  $dept_name = $_REQUEST["dept_name"];
  $email = $_REQUEST["email"];
  $recieve = $_REQUEST["recieve"];
  $b_status = $_REQUEST["b_status"];
  $r_status = $_REQUEST["r_status"];
  //เพิ่มเข้าไปในฐานข้อมูล


  $sql = "INSERT INTO borrow(b_date, r_date, item_name, item_use, name, dept_name,  email,recieve,b_status,r_status)
       VALUES('$b_date', '$r_date', '$item_name','$item_use','$name', '$dept_name',  '$email', '$recieve', '$b_status', '$r_status')";

  $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));
  
  //ปิดการเชื่อมต่อ database
  mysqli_close($con);

  //จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม

  //แจ้งเตือนผ่านไลน์


    define('LINE_API',"https://notify-api.line.me/api/notify");
 
      $token = "ใส่ line notifine"; //ใส่Token ที่copy เอาไว้
      
      $str = "\r\n".'ชื่อ-สกุลผู้ยืม: '.$name.
           "\r\n".' รายการที่ยืม: '.$item_name.
           "\r\n".' การรับอุปกรณ์: '.$recieve.
           "\r\n".' ยืมวันที่: '.$b_date.  "\n".' ถึงวันที่: '.$r_date.
           "\r\n".'สถานที่นำไปใช้: '.$location.
           "\r\n".'เหตุผลการยืม: '.$remark;
            //ข้อความที่ต้องการส่ง สูงสุด 1000 ตัวอักษร
       
      $res = notify_message($str,$token);
      //print_r($res);
      function notify_message($message,$token){
       $queryData = array('message' => $message);
       $queryData = http_build_query($queryData,'','&');
       $headerOptions = array( 
               'http'=>array(
                  'method'=>'POST',
                  'header'=> "Content-Type: application/x-www-form-urlencoded\r\n"
                            ."Authorization: Bearer ".$token."\r\n"
                            ."Content-Length: ".strlen($queryData)."\r\n",
                  'content' => $queryData
               ),
       );
       $context = stream_context_create($headerOptions);
       $result = file_get_contents(LINE_API,FALSE,$context);
       $res = json_decode($result);
       return $res;
      }
      //exit();
  
  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('บันทึกข้อมูลเรียบร้อยแล้ว');";
  echo "window.location = 'fromborrow.php'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('Error back to register again');";
  echo "</script>";
}
?>