<meta charset="UTF-8" />
<?php 
include('../condb.php');

    //Set ว/ด/ป เวลา ให้เป็นของประเทศไทย
    date_default_timezone_set('Asia/Bangkok');
  //สร้างตัวแปรวันที่เพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลด
  $date1 = date("Ymd_His");
  //สร้างตัวแปรสุ่มตัวเลขเพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลดไม่ให้ชื่อไฟล์ซ้ำกัน
 $numrand = (mt_rand());
  
  //รับชื่อไฟล์จากฟอร์ม 
  $item_id = $_POST["item_id"];
  $serialno = $_POST["serialno"];
  $item_name = $_POST["item_name"];
  $item_total = $_POST["item_total"];
  $item_use = $_POST["item_use"];
  $item_sum = $_POST["item_sum"]; 
  $status = $_POST["status"];
  $detail = $_POST["detail"]; 
  $item_img = (isset($_POST['item_img']) ? $_POST['img'] : '');
  $item_img2 = $_POST['item_img2'];
  $upload=$_FILES['item_img']['name'];


  
  if($upload <>'') { 
    
  
  //โฟลเดอร์ที่เก็บไฟล์
  $path="../img/";
  //ตัวขื่อกับนามสกุลภาพออกจากกัน
  $type = strrchr($_FILES['item_img']['name'],".");
  //ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
  $newname ='tds'.$numrand.$date1.$type;

  $path_copy=$path.$newname;
  $path_link="../img/".$newname;
  //คัดลอกไฟล์ไปยังโฟลเดอร์
  move_uploaded_file($_FILES['item_img']['tmp_name'],$path_copy);  
    
  }else {
    $newname = $item_img2;
  
  }

      $sql = "UPDATE item SET 
      serialno='$serialno', 
      item_name='$item_name',
      item_total='$item_total', 
      item_use='$item_use',
      item_sum='$item_sum', 
      status='$status',
      item_img='$newname',
      detail='$detail'
      WHERE item_id='$item_id' ";

    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));

  mysqli_close($con);

//เป็นจาวาสคิปเมื่อเพิ่มข้อมูลสำเร็จให้กระโดดไปไฟล์  abc 
  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('แก้ไขข้อมูลเรียบร้อยแล้ว');";
  echo "window.location = 'fromitem.php'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('ไม่สามารถแก้ไขข้อมูลได้');";
  echo "</script>";
}
?>
