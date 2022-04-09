
<?php 
include ("css.php");
include ("../condb.php");
include ("report_item.php");
?>

<?php 
include ("css.php");
include ("../condb.php");
$query_chart = "SELECT * FROM item where item_sum<>0 AND status <>'ชำรุด' " or die("Error:" .mysqli_error($con));
$rs_chart=mysqli_query($con, $query_chart);
$b++;
//for chart
    $item_name = array();
    $item_sum = array();



    while($rs = mysqli_fetch_array($rs_chart)){
    $item_name[] = "\"".$rs['item_name']."\"";
    $item_sum[] = "\"".$rs['item_sum']."\"";
    }
    $item_name = implode(",", $item_name);
    $item_sum = implode(",", $item_sum);

?>
<div class="container">
<div class="row">

    <div class="col-md-4">
    </div>


    <div class="col-md-12">
        <h3>รายการอุปกรณ์</h3>
        <div class="container">            
  <table class="table table-borderless">
    <thead>
      <tr>
                <td>ลำดับที่</td>
                <td>หน่วยงาน</td>
                <td>จำนวนที่มี</td>
            </tr>
        <?php foreach ($rs_chart as $rs_chart) { ?>
            <tr>
                <td><?php echo $b++;  ?></td>
                <td><?php echo $rs_chart['item_name']; ?></td>
                <td><?php echo $rs_chart['item_sum']; ?></td>
            </tr>
       <?php  } ?>
   </table>
</div>

<?php 
include ("css.php");
include ("../condb.php");
$query_chart = "SELECT dept_name, COUNT(name) AS total FROM borrow GROUP BY dept_name ORDER BY dept_name DESC" or die("Error:" .mysqli_error($con));
$rs_chart=mysqli_query($con, $query_chart);
$b++;
//for chart
    $dept_name = array();
    $total = array();



    while($rs = mysqli_fetch_array($rs_chart)){
    $dept_name[] = "\"".$rs['dept_name']."\"";
    $total[] = "\"".$rs['total']."\"";
    }
    $dept_name = implode(",", $dept_name);
    $total = implode(",", $total);

?>
<div class="container">
<div class="row">

    <div class="col-md-4">
    </div>


    <div class="col-md-12">
        <h3>หน่วยงานที่ยืมอุปกรณ์</h3>
        <div class="container">            
  <table class="table table-borderless">
    <thead>
      <tr>
                <td>ลำดับที่</td>
                <td>หน่วยงาน</td>
                <td>ความถี่การยืม</td>
            </tr>
        <?php foreach ($rs_chart as $rs_chart) { ?>
            <tr>
                <td><?php echo $b++;  ?></td>
                <td><?php echo $rs_chart['dept_name']; ?></td>
                <td><?php echo $rs_chart['total']; ?></td>
            </tr>
       <?php  } ?>
   </table>
</div>

<?php 
include ("css.php");
include ("../condb.php");
$query_chart = "SELECT item_name, COUNT(item_name) AS total FROM borrow GROUP BY item_name ORDER BY item_name DESC" or die("Error:" .mysqli_error($con));
$rs_chart=mysqli_query($con, $query_chart);
$c++;
//for chart
    $item_name = array();
    $total = array();

    while($rs = mysqli_fetch_array($rs_chart)){
    $item_name[] = "\"".$rs['item_name']."\"";
    $total[] = "\"".$rs['total']."\"";
    }
    $item_name = implode(",", $item_name);
    $total = implode(",", $total);

?>
<div class="container">
<div class="row">

    <div class="col-md-4">
    </div>


    <div class="col-md-12">
        <h3>รายการอุปกรณ์ที่ถูกยืม</h3>
        <div class="container">
  <table class="table table-borderless">
    <thead>
      <tr>
                <td>ลำดับที่</td>
                <td>รายการที่ถูกยืม</td>
                <td>ถูกยืม(ครั้ง)</td>
            </tr>
        <?php foreach ($rs_chart as $rs_chart) { ?>
            <tr>
                <td><?php echo $c++;  ?></td>
                <td><?php echo $rs_chart['item_name']; ?></td>
                <td><?php echo $rs_chart['total']; ?></td>
            </tr>
       <?php  } ?>
   </table>
</div>

<?php 
include ("css.php");
include ("../condb.php");
$query_chart = "SELECT dept_name, COUNT(name) AS total FROM user GROUP BY dept_name ORDER BY dept_name DESC" or die("Error:" .mysqli_error($con));
$rs_chart=mysqli_query($con, $query_chart);
$n++;
//for chart
    $dept_name = array();
    $total = array();



    while($rs = mysqli_fetch_array($rs_chart)){
    $dept_name[] = "\"".$rs['dept_name']."\"";
    $total[] = "\"".$rs['total']."\"";
    }
    $dept_name = implode(",", $dept_name);
    $total = implode(",", $total);

?>
<div class="container">
<div class="row">

    <div class="col-md-4">
    </div>


    <div class="col-md-12">
        <h3>บุคลากรในหน่วยงาน / สาขา:</h3>
       <div class="container">            
  <table class="table table-borderless">
    <thead>
      <tr>
                <td>ลำดับที่</td>
                <td>หน่วยงาน/สาขา</td>
                <td>จำนวนบุคลากร</td>
            </tr>
        <?php foreach ($rs_chart as $rs_chart) { ?>
            <tr>
                <td><?php echo $n++;  ?></td>
                <td><?php echo $rs_chart['dept_name']; ?></td>
                <td><?php echo $rs_chart['total']; ?></td>
            </tr>
       <?php  } ?>
   </table>
</div>
