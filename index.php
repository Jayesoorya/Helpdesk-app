<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
	<link rel="stylesheet" href="style.css">
</head>
<body class="login"> 
<h1 class="h1">HELPDESK</h1>
     <form class="index" action="login.php" method="post">
     	<h2 class="h2">LOGIN</h2>
     	<?php 
		if (isset($_GET['error'])) {
			 ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label class="user">User Name</label>
     	<input class="input" name="uname" placeholder="Enter User Name"><br>

     	<label class="user">Password</label>
     	<input class="input" type="password" name="password" placeholder="Enter Password"><br>

     	<button id="login" type="submit">Login</button>
     </form>
</body>
</html>