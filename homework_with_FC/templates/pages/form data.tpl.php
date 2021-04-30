
<div class="container" id="form_data">
<div class="row">
<div class="col-12">

<h2 style="margin-bottom:45px">Data about the e-mail what you have just sent</h2>

<?php
if (!empty($data))
{
	foreach($data as $u)
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