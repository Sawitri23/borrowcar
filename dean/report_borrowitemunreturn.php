<table width="1200" border="0" align="center">
<tr> 
<td>
<?php
    include ('../condb.php');
    $query = "SELECT item_name, SUM(item_use) AS total FROM borrow WHERE r_status='อยู่ระหว่างการใช้งาน' GROUP BY item_name  DESC" or die("Error:" .mysqli_error($con));
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
                label: 'อุปกรณ์',
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
                text: 'อุปกรณ์ที่ยังไม่คืน'
            }
        }
    });
    </script>
</p>
</td>
</tr>
</table>



<br /> <br /> <br />

