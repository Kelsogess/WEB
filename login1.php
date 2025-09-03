<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login To Account</title>
	<link rel="stylesheet" type="text/css" href="decor.css">
</head>
<body>

<form method="POST" action="backend.php">
	<table class="login-window" border="1" cellpadding="8">

		<tr>
			<td colspan="2" style="text-align: center;"> <h1> Login To Account</h1> </td>
		</tr>

		<?php if (isset($_GET['error'])): ?>
		<tr>
			<td colspan="2" style="color: red; text-align:center;">
				<?php echo htmlspecialchars($_GET['error']); ?>
			</td>
		</tr>
		<?php endif; ?>

		<tr>
			<td> Enter Username: </td>
			<td><input type="text" name="username" class="entry1" required></td>
		</tr>

		<tr>
			<td> Enter Password: </td>
			<td><input type="password" name="passwd" class="entry1" required></td>
		</tr>

		<tr>
			<td></td>
			<td><button type="submit" name="login" class="submit-btn">LOG IN!</button></td>
		</tr>

		<tr>
			<td colspan="2">
				<a href="index.php" style="color:lightgreen;">No Account? Register Now</a>
			</td>
		</tr>

	</table>

	<!-- Hidden input to indicate this is a login request -->
	<input type="hidden" name="form_type" value="login">

</form>

</body>
</html>