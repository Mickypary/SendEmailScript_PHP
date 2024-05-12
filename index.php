<?php session_start();  ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Send Email</title>
</head>
<body>
	

	<div class="form-container">
		<form method="POST" action="process.php" enctype="multipart/form-data">

			<div class="input-row">
				<label>Name <em>*</em></label>
				<input type="text" name="userName" required>
			</div>

			<div class="input-row">
				<label>Email <em>*</em></label>
				<input type="email" name="userEmail" required>
			</div>

			<div class="input-row">
				<label>Phone <em>*</em></label>
				<input type="tel" name="userPhone" required>
			</div>

			<div class="input-row">
				<label>Message <em>*</em></label>
				<textarea name="userMessage" required></textarea>
			</div>

			<div class="input-row">
				<input type="submit" name="send" value="Submit">
				<?php if (!empty($_SESSION['message'])): ?>
					<div class="success">
						<strong><?= $_SESSION['message']; ?></strong>
					</div>
					<?php unset($_SESSION['message']); ?>
				<?php endif ?>	
			</div>

		</form>
	</div>


</body>
</html>