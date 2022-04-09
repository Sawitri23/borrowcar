<?php
$kpi_id =  $_GET['kpi_id'];
//1
$query_m1 = "SELECT * FROM  tbl_kpi_name2
WHERE k_ref_kpi_id =$kpi_id
AND k_Output_m1 = 'O'
";
$m1 = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));
$row_m1 = mysqli_fetch_assoc($m1);
$m1 = $row_m1['cm1'];
$calm1 = $m1 *100/5;


//2
$query_m2 = "SELECT * FROM  tbl_kpi_name2
WHERE k_ref_kpi_id =$kpi_id
AND k_Output_m2 = 'O'
";
$m2 = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con)); 
$row_m2 = mysqli_fetch_assoc($m2);
$m2 = $row_m2['cm2'];
$calm2 = $m2 *100/5;


//3
$query_m3 = "SELECT * FROM  tbl_kpi_name2
WHERE k_ref_kpi_id =$kpi_id
AND k_Output_m3 = 'O'
";
$m3 = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));
$row_m3 = mysqli_fetch_assoc($m3);
$m3 = $row_m3['cm3'];
$calm3 = $m3 *100/5;


//4
$query_m4 = "SELECT * FROM  tbl_kpi_name2
WHERE k_ref_kpi_id =$kpi_id
AND k_Output_m4 = 'O'
";
$m4 = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));
$row_m4 = mysqli_fetch_assoc($m4);
$m4 = $row_m4['cm4'];
$calm4 = $m4 *100/5;


//5
$query_m5 = "SELECT * FROM  tbl_kpi_name2
WHERE k_ref_kpi_id =$kpi_id
AND k_Output_m5 = 'O'
";
$m5 = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));
$row_m5 = mysqli_fetch_assoc($m5);
$m5 = $row_m5['cm5'];
$calm5 = $m5 *100/5;



//6
$query_m6 = "SELECT * FROM  tbl_kpi_name2
WHERE k_ref_kpi_id =$kpi_id
AND k_Output_m6 = 'O'
";
$m6 = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));
$row_m6 = mysqli_fetch_assoc($m6);
$m6 = $row_m6['cm6'];
$calm6 = $m6 *100/5;

//7
$query_m7 = "SELECT * FROM  tbl_kpi_name2
WHERE k_ref_kpi_id =$kpi_id
AND k_Output_m7 = 'O'
";
$m7 = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));
$row_m7 = mysqli_fetch_assoc($m7);
$m7 = $row_m7['cm7'];
$calm7 = $m7 *100/5;


//8
$query_m8 = "SELECT * FROM  tbl_kpi_name2
WHERE k_ref_kpi_id =$kpi_id
AND k_Output_m8 = 'O'
";
$m8 = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));
$row_m8 = mysqli_fetch_assoc($m8);
$m8 = $row_m8['cm8'];
$calm8 = $m8 *100/5;


//9
$query_m9 = "SELECT * FROM  tbl_kpi_name2
WHERE k_ref_kpi_id =$kpi_id
AND k_Output_m9 = 'O'
";
$m9 = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));
$row_m9 = mysqli_fetch_assoc($m9);
$m9 = $row_m9['cm9'];
$calm9 = $m9 *100/5;


//10
$query_m10 = "SELECT * FROM  tbl_kpi_name2
WHERE k_ref_kpi_id =$kpi_id
AND k_Output_m10 = 'O'
";
$m10 = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));
$row_m10 = mysqli_fetch_assoc($m10);
$m10 = $row_m10['cm10'];
$calm10 = $m10 *100/5;


//11
$query_m11 = "SELECT * FROM  tbl_kpi_name2
WHERE k_ref_kpi_id =$kpi_id
AND k_Output_m11 = 'O'
";
$m11 = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));
$row_m11 = mysqli_fetch_assoc($m11);
$m11 = $row_m11['cm11'];
$calm11 = $m11 *100/5;


//12
$query_m12 = "SELECT * FROM  tbl_kpi_name2
WHERE k_ref_kpi_id =$kpi_id
AND k_Output_m11 = 'O'
";
$m12 = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));
$row_m12 = mysqli_fetch_assoc($m12);
$m12 = $row_m12['cm12'];
$calm12 = $m12 *100/5;