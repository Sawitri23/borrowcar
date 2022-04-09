<?php require_once('../condb.php');

  $query_item="SELECT * FROM item ORDER BY item_id ASC";
  $result_item=mysqli_query($con,$query_item) or die ("Error in query: $query_item" .mysqli_error($con));
//echo($query_item);
//exit()

?>

<div class="list-group">
	<?php foreach ($result_item as $row) { ?>

		<a href="index.php?act=showitem&item_id=<?php echo $row['item_id'];?>"
			class="list-group-item list-group-item-action list-group-item-light">
			<?php echo $row['item_name']; ?></a>
			<?php } ?>
</div>