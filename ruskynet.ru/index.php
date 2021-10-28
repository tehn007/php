<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="login">
<h1>Login</h1>
<form action="login.php" method="post">
<label for="name">
<i class="fas fa-user"></i>
</label>
<input type="text" name="name" placeholder="Username" id="name" required>
<label for="passwd">
<i class="fas fa-lock"></i>
</label>
<input type="password" name="passwd" placeholder="Password" id="passwd" required>
<input type="submit" value="Login">
</form>
</div>
</body>
</html>
