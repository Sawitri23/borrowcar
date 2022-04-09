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
</head>
<body>

<form name="frmSearch" method="GET" action="">
  <table width="1500" border="0">
    <tr><center>
      <th><center>อุปกรณ์ที่อนุมัติการยืมระหว่างวันที่: &nbsp;&nbsp;
      <input type="date"  name="txt_keyword" value="<?php echo $_GET['txt_keyword'];?>">&nbsp;&nbsp;ถึง&nbsp;
      <input type="date"  name="txt_keyword1" value="<?php echo $_GET['txt_keyword1'];?>" >
          &nbsp;  <input type="submit" value="ค้นหา" /></center></th>
       </center> </tr>
    </table>
        </div>      
    </form>

<table width="1200" border="0" align="center">
<tr> 
<td>
<?php
       
            $search_text = isset($_GET['txt_keyword']) ? $_GET['txt_keyword'] : ''; 
            $search_text1 = isset($_GET['txt_keyword1']) ? $_GET['txt_keyword1'] : '';

    $query = "SELECT item_name, SUM(item_use) AS total FROM borrow WHERE b_status = 'อนุมัติแล้ว' AND b_date between '".$search_text."' and  '".$search_text1."' or b_date LIKE '%$search_text%'and b_date LIKE '%$search_text1%' GROUP BY item_name  DESC" or die("Error:" .mysqli_error($con));
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) > 0) {

        while($row = mysqli_fetch_assoc($result)) {
            
            $labels[] = $row['item_name'];
            
            $data[] = $row['total'];
        }
    }
    mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BORROW_CAR</title>

  </head>
  
  <body>
      

    <canvas id="myChart" width="400" height="200"></canvas>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.js"></script>
    <script>
    var ctx = document.getElementById("myChart");
    var myChart = new Chart(ctx, {
        //type: 'bar',
        //type: 'line',
        type: 'bar',
        data: {
            labels: <?=json_encode($labels)?>,
            datasets: [{
                label: 'อุปกรณ์ถูกยืม (ชิ้น)',
                data: <?=json_encode($data, JSON_NUMERIC_CHECK);?>,
                 backgroundColor: [
                    'rgba(255, 140, 0, 1 )',
                    'rgba(255, 0, 0, 1)',
                    'rgba(138, 43, 226, 1)',
                    'rgba(165, 42, 42, 1)',
                    'rgba(222, 184, 135, 1)',
                    'rgba(95, 158, 160, 1)',
                    'rgba 127, 255, 0, 1)',
                    'rgba(210, 105, 30, 1)',
                    'rgba(100, 149, 237, 1 )',
                    'rgba(255, 127, 80, 1)',
                    'rgba(0, 255, 255, 1 )',
                    'rgba(0, 0, 139, 1)',
                    'rgba(184, 134, 11, 1)',
                    'rgba(0, 100, 0, 1)',
                    'rgba(72, 61, 139, 1)',
                    'rgba(0, 0, 255, 1)',
                    'rgba(138, 43, 226, 1)',
                    'rgba(165, 42, 42, 1)',
                    'rgba(222, 184, 135, 1)',
                    'rgba(95, 158, 160, 1)',
                    'rgba 127, 255, 0, 1)',
                    'rgba(210, 105, 30, 1)',
                    'rgba(100, 149, 237, 1 )',
                    'rgba(255, 127, 80, 1)',
                    'rgba(0, 255, 255, 1 )',
                    'rgba(105, 105, 105, 1 )'
                ],
                backgroundColor: [
                    'rgba(255, 140, 0, 1 )',
                    'rgba(255, 0, 0, 1)',
                    'rgba(138, 43, 226, 1)',
                    'rgba(165, 42, 42, 1)',
                    'rgba(222, 184, 135, 1)',
                    'rgba(95, 158, 160, 1)',
                    'rgba 127, 255, 0, 1)',
                    'rgba(210, 105, 30, 1)',
                    'rgba(100, 149, 237, 1 )',
                    'rgba(255, 127, 80, 1)',
                    'rgba(0, 255, 255, 1 )',
                    'rgba(0, 0, 139, 1)',
                    'rgba(184, 134, 11, 1)',
                    'rgba(0, 100, 0, 1)',
                    'rgba(72, 61, 139, 1)',
                    'rgba(0, 0, 255, 1)',
                    'rgba(138, 43, 226, 1)',
                    'rgba(165, 42, 42, 1)',
                    'rgba(222, 184, 135, 1)',
                    'rgba(95, 158, 160, 1)',
                    'rgba 127, 255, 0, 1)',
                    'rgba(210, 105, 30, 1)',
                    'rgba(100, 149, 237, 1 )',
                    'rgba(255, 127, 80, 1)',
                    'rgba(0, 255, 255, 1 )',
                    'rgba(105, 105, 105, 1 )'
                    ],
                borderWidth: 0
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            },
             responsive: true,
             title: {
                display: true,
                //text: 'อุปกรณ์รออนุมัติการยืม'
            }
        }
    });
    </script>
</p>
</td>
</tr>
</table>


