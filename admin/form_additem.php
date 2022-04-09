<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title></title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>
<div class="container">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6"> <br />
    <h3><i class="fas fa-edit"></i> เพิ่มข้อมูล </h3> <hr/></div>
      <hr />
      <?php include('css.php');?>
      <form action="form_additem2.php" method="POST" enctype="multipart/form-data"  name="addprd" class="form-horizontal" id="addprd">

        <div class="form-group">
          <div class="col-sm-8">
            <b><p> ป้ายทะเบียนรถ</p></b>
            <input type="text"  name="serialno" class="form-control" required placeholder="กรอกหมายเลขครุภัณ์" />
          </div>
        </div>
        <input type="hidden" name="dept_id" value="<?php echo $dept_id ?>">
        <div class="form-group">
      <div class="col-sm-1" align="right"> </div>
      <div class="col-sm-5" align="left">
        <b> ชื่อหน่วยงาน/สาขา </b>
        <input  name="dept_name" type="text" required class="form-control" id="dept_name" minlength="2"  value="<?php echo $dept_name;?>" />
      </div>
    </div>

        <div class="form-group">
          <div class="col-sm-8">
            <b><p> ยี่ห้อรถ</p></b>
            <input type="text"  name="item_name" class="form-control" required placeholder="ชื่ออุปกรณ์" />
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-3">
            <b><p> จำนวนที่รับเข้า</p></b>
            <input type="number"  name="item_total" class="form-control" required placeholder="ใส่จำนวนที่รับเข้า" />
          </div>
        </div>


        <input type="hidden" name="item_use" >

      <input type="hidden" name="item_sum" >

      <div class="form-group">
          <div class="col-sm-5">
            <b><p> สถานะ  </p></b>
        <select name="status" id="status" class="form-control">
          <option value="ว่าง">ว่าง</option>
          <option value="ไม่ว่าง">ไม่ว่าง</option>
        </select>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-8">
            <b><p> รายละเอียดของรถ </p></b>
            <textarea name=" detail" class="form-control"  col ="40" rows="5"  required placeholder="รายละเอียดรถ"></textarea>
          </div>
        </div>
        
           <div class="form-group">
          <div class="col-sm-5 info">
           <b> <p> ภาพรถ </p> </b>
            <input type="file" name="item_img" class="form-control">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-success" id="btn"><span class="fa fa-download"/></span> บันทึกข้อมูล  </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>


