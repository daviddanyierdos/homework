
<div class="container" id="contact">
<div class="row">
<div class="col-12">
<h2 style="margin-bottom:45px">Contact us</h2>
<form name="contact" action="?page=form data" onsubmit="return check();" method="post">
	<div>
		<label class="label">Name (required):</label> <input id="name" type="text" name="name" pattern="[A-Z,a-z, ]{8,30}" required placeholder="min 8, max 30 character"><br>
		<label class="label">E-mail (required):</label> <input id="email" type="email" name="email" required><br>
		<label class="label" style="float:left">Message (required):</label> <textarea id="text" name="text" cols="40" rows="10" required></textarea><br/>
		<input id="send" type="submit" onclick="check()" value="Send" class="contactBtn">
	</div>
</form>
</div>
</div>
</div>