
<div class="container" id="form_data">
<div class="row">
<div class="col-12">

<?php if(isset($message)) { ?>
	<h1><?= $message ?></h1>
	<?php if($again) { ?>
		<a href="?oldal=contact" style="text-decoration:none">Try it again!</a>
	<?php } ?>
<?php } ?>

<?php
if (!empty($data))
{
	foreach($adat as $u)
		echo "<h4>$u</h4>";
}
?>

<?php
if (!empty($error))
{
	foreach($error as $k)
		echo "<h4>$k</h4>";
}
?>

</div>
</div>
</div>