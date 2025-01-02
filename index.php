<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
<h1>HELPDESK</h1>
     <form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php 
		if (isset($_GET['error'])) {
			 ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="Enter User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Enter Password"><br>

     	<button type="submit">Login</button>
     </form>
</body>
</html>
<style>
	body {
	display: flex;
	justify-content: center;
	align-items: center;
	height: 100vh;
	flex-direction: column;
}

*{
	font-family: sans-serif;
	box-sizing: border-box;
}

form {
	width: 500px;
	border: 4px solid;
	padding: 30px;
	background: rgb(179, 187, 243);
	border-radius: 15px;
}

h1{
	margin-top:-70px;
}
h2 {
	text-align: center;
	margin-bottom: 40px;
}

input {
	display: block;
	border: 2px solid #030101;
	width: 95%;
	padding: 10px;
	margin: 10px auto;
	border-radius: 5px;
}
label {
	color: #252222;
	font-size: 18px;
	padding: 10px;
}

button {
	float: right;
	background:rgb(59, 73, 179);
	padding: 10px 15px;
	color: #fff;
	border-radius: 5px;
	margin-right: 10px;
	border: none;
}
button:hover{
	opacity: .7;
}
.error {
   background: #F2DEDE;
   color: #A94442;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}

h1 {
	text-align: center;
	color: #fff;
}

a {
	float: right;
	padding: 10px 15px;
	color: #ffffff;
	border-radius: 5px;
	margin-right: 10px;
	border: none;
	text-decoration: none;
}
a:hover{
	opacity: .7	;
}

</style>