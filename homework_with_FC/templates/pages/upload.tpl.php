
<div class="container" id="upload">
<div class="row">
<div class="col-12">
<?php
if (!empty($message))
{
	echo '<ul>';
	foreach($message as $u)
		echo "<li>$u</li>";
	echo '</ul>';
}
?>
</div>
</div>
</div>