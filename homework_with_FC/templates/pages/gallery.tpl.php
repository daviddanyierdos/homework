
<div class="container" id="gallery">
<div class="row" style="margin:0 auto">
<div class="col-12">

<h1>Galéria</h1>
<?php
arsort($gallery);
foreach($gallery as $file => $date)
{
?>
<div class="image">
	<a href="<?php echo $FOLDER.$file ?>">
		<img src="<?php echo $FOLDER.$file ?>">
	</a>            
	<p>Name:  <?php echo $file; ?></p>
	<p>Date:  <?php echo date($DATEFORMAT, $date); ?></p>
</div>
<?php
}
?>

<div>
	<h1 style="margin-top:10px">Upload to Gallery:</h1>
	<form  action = "?oldal=upload" method = "post" enctype="multipart/form-data">
		<label style="display:block">First: <input type="file" name="first" required></label>
		<label style="display:block">Second: <input type="file" name="second"></label>
		<label style="display:block">Third: <input type="file" name="third"></label>        
		<input type="submit" name="send" id="send" value="Send">
	</form>    
</div>

</div>
</div>
</div>
