<html>
<head>
    <link rel="stylesheet" href="bootstrap.min.css" crossorigin="anonymous">
    <title>Log in</title>
</head>
<body>
<div class="container">
<h1>Test Website</h1>
<body>

<form method="post" action="validate.php">
    <div class="form-group">
        <label for="email">Email address:</label>
        <input type="email" class="form-control" id="email" name="user">
    </div>
    <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" name="pass">
    </div>
    <div class="checkbox">
        <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default" name="login">Submit</button>
</form>


</div>


</body>
</html>