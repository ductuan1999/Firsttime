<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap.min.css" crossorigin="anonymous">

    <title>Check Cookie</title>
</head>

<body>
<div class="container">
    <a href="welcome.php"><h1>Test Website</h1></a>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "mydb";

    $conn = mysqli_connect($servername,$username,$password,$database);

    if(!$conn){
        die("Connection failed: ".mysqli_connect_error());
    } else {
        echo "<br>Database Connection Success... <br><br>";
    }
    $conn->close();
    ?>

    <form method="post" action="insertdata.php">
        <div class="form-group">
            <label for="email">First Name: </label>
            <input type="text" class="form-control" id="email" name="fname">
        </div>
        <div class="form-group">
            <label for="email">Last Name: </label>
            <input type="text" class="form-control" id="email" name="lname">
        </div>
        <div class="form-group">
            <label for="email">Email: </label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <button type="submit" class="btn btn-default" name="login">Submit</button>

    </form>
</div>


</body>
</html>
