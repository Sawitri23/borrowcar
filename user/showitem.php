<?php require_once('../condb.php');

  $query_item="SELECT * FROM item ORDER BY item_id ASC";
  $result_item=mysqli_query($con,$query_item) or die ("Error in query: $query_item" .mysqli_error($con));
//echo($query_item);
//exit()

?>

  <div class="row">
<?php foreach ($result_item as $row_item) { ?>
  <div class="card text-white bg-warning mb-3" style="width: 18rem;">
  <img class="card-img-top" src="../img/<?php echo $row_item['item_img'];?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><b><u><?php echo $row_item['item_name'];?></u></b></h5>
    รายละเอียด:
    <p class="card-text"><?php echo $row_item['detail'];?></p>
    
  </div>
</div>

<?php } ?>

</div>