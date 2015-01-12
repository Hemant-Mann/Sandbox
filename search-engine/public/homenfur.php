<?php require_once("../includes/initialize.php"); ?>
<?php  
	$sql = "SELECT * FROM products ";
	$sql .= "WHERE category = 'Home and Furniture'";
	$products = Product::find_by_sql($sql);

?>

<?php include_layout_template('header.php'); ?>
<?php include_layout_template('navigation.php'); ?>

<div class="col-lg-9 col-sm-7">
	<h2>Home and Furniture: </h2>

	<?php foreach($products as $product) { ?>
	<div class="col-xs-5">
		<div class="thumbnail">
			<p class="caption">Type: <b><?php echo $product->name; ?><br /></b></p>
		    <a href="product.php?homenfur=<?php echo $product->id; ?>">
			    <img src="<?php echo $product->image_path(); ?>" width="200" class="img-responsive" />
			</a>
		</div>
	</div>
	<?php } ?>
</div>

<?php include_layout_template('footer.php'); ?>
