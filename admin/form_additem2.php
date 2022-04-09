<meta charset="UTF-8" />
<?php 
require_once('../condb.php');

    //Set ว/ด/ป เวลา ให้เป็นของประเทศไทย
    date_default_timezone_set('Asia/Bangkok');
	//สร้างตัวแปรวันที่เพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลด
	$date1 = date("Ymd_His");
	//สร้างตัวแปรสุ่มตัวเลขเพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลดไม่ให้ชื่อไฟล์ซ้ำกัน
	$numrand = (mt_rand());
	
	//รับชื่อไฟล์จากฟอร์ม 
	$serialno = $_POST['serialno'];
	$item_name = $_POST['item_name'];
	$item_total = $_POST['item_total'];
	$item_use = $_POST['item_use'];
	$item_sum = $_POST['item_sum'];
	$status = $_POST['status'];
	$detail = $_POST['detail'];
	$item_img =(isset($_POST['item_img']) ? $_POST['img'] :'');
	$item_img2 = $_POST['item_img2'];	
	$upload=$_FILES['item_img'];

		$item_sum=$item_total-$item_use;

	if($upload <> '') { 

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
			
	}

$check = "
  SELECT  item_name 
  FROM item  
  WHERE item_name = '$item_name' ";
    $result1 = mysqli_query($con, $check) or die(mysqli_error($con));
    $num=mysqli_num_rows($result1);

    if($num > 0)
    {
    echo "<script>";
    echo "alert(' ชื่อผู้ใช้งานระบบซ้ำ กรุณาเปลี่ยนชื่อไหม่อีกครั้ง !');";
    echo "window.history.back();";
    echo "</script>";
    }else{

			$sql = "INSERT INTO item 
				(serialno,
				item_name,
				item_total,
				item_use,
				item_sum,
				status,
				item_img,
				detail)
				VALUES
				('$serialno',
				'$item_name',
				'$item_total',
				'$item_use',
				'$item_sum',
				'$status',
				'$newname',
				'$detail')";

		$result=mysqli_query($con,$sql) or die ("Error in query: $sql " . mysqli_error($con));

	mysqli_close($con);
}

	if($result){
   
			echo "<script type='text/javascript'>";
			echo  "alert('เพิ่มอุปกรณ์เรียบร้อย');";
			echo "window.location='fromitem.php';";
			echo "</script>";
	  }
	  else{
		    echo "<script type='text/javascript'>";
		    echo  "alert('ไม่สามารถเพิ่มอุปกรณ์ได้');";
			echo "</script>";
	  }
	
 ?>