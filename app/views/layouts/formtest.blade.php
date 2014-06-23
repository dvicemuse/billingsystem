<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery validation plug-in - main demo</title>

<link rel="stylesheet" href="css/screen.css" />

<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/jquery.validate.js"></script>

<script>
$().ready(function() {
	$("form").validate();
});
</script>

</head>
<body>


<form class="cmxform" id="commentForm" method="get" action="">
	<fieldset>
		<legend>Please provide your name, email address (won't be published) and a comment</legend>
		<p>
			<label for="cname">Name (required, at least 2 characters)</label>
			<input id="cname" name="name" minlength="2" type="text" required>
		</p>
		<p>
			<label for="cemail">E-Mail (required)</label>
			<input id="cemail" type="email" name="email" required>
		</p>
		<p>
			<label for="curl">URL (optional)</label>
			<input id="curl" type="url" name="url">
		</p>
		<p>
			<label for="ccomment">Your comment (required)</label>
			<textarea id="ccomment" name="comment" required></textarea>
		</p>
		<p>
			<input class="submit" type="submit" value="Submit">
		</p>
	</fieldset>
</form>

</body>
</html>
