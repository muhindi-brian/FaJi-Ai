<!DOCTYPE html>
<html>
<?php
// Include the header and menu files
include('header.php');
?>
<body>
	<?php
// Include the header and menu files
include('menu.php');
?>

	<div class="container-fluid main-content">
		<br></br>
		<!--<h1>FajiAI</h1>-->
		<p>The Name <b>FaJi Ai`</b> is derived from the name of my daughters <b>Favor & Jianna</b></p>
		<b><p>Please select a prompt:</p></b>
		<div class="row">
			<div class="col-sm-3">
				<a href="chatgpt_search.php"><button type="button" class="btn btn-secondary btn-lg btn-block">ChatGPT Search</button></a>
			</div>
			<div class="col-sm-3">
				<a href="google_search.php"><button type="button" class="btn btn-secondary btn-lg btn-block">Google Search</button></a>
			</div>
			<div class="col-sm-3">
				<a href="task.php"><button type="button" class="btn btn-secondary btn-lg btn-block">Task</button></a>
			</div>
			<div class="col-sm-3">
				<a href="whatsapp.php"><button type="button" class="btn btn-secondary btn-lg btn-block">WhatsApp</button></a>
			</div>
		</div>
		<div class="row mt-3">
			<div class="col-sm-3">
				<a href="calendar.php"><button type="button" class="btn btn-secondary btn-lg btn-block">Calendar</button></a>
			</div>
			<div class="col-sm-3">
				<a href="email.php"><button type="button" class="btn btn-secondary btn-lg btn-block">Email</button></a>
			</div>
			<div class="col-sm-3">
				<a href="weather.php"><button type="button" class="btn btn-secondary btn-lg btn-block">Weather</button></a>
			</div>
			<div class="col-sm-3">
				<a href="call.php"><button type="button" class="btn btn-secondary btn-lg btn-block">Call</button></a>
			</div>
		</div>
	</div>

<?php
// Include the footer file
include('footer.php');
?>