<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap.min.css" crossorigin="anonymous">

    <title>Check Cookie</title>
</head>
<body>
<div class="container">
    <a href="welcome.php"><h1>Test Website</h1></a>
<p>Enter the first name of the person to delete</p>
<form method="post" action="deleting.php">
    <div class="form-group">
        <label for="email">First Name: </label>
        <input type="text" class="form-control" id="email" name="del_name">
    </div>
    <button type="submit" class="btn btn-default" name="delete">Delete</button>
</form>
</div>


</body>
</html>