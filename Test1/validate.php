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
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mydb";

$conn = mysqli_connect($servername,$username,$password,$database);

$sql = "SELECT * from myGuests";
$result = $conn->query($sql);

$email = $_POST['user'];
$pw = $_POST['pass'];

$validate = "";
$valid = true;

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        if($email == $row['email'] && $pw == $row['PASSWORD']){
            setcookie('user',$_POST['user'],time()+3600);
            setcookie('pass',$_POST['pass'],time()+3600);
            session_start();
            $_SESSION['user'] = $_POST['user'];
            $_SESSION['pass'] = $_POST['pass'];
            $validate = "Welcome back, ".$_POST['user'];
            $valid = true;
        }
        elseif($email == $row['email'] && $pw != $row['PASSWORD']){
            $validate = "Invalid password, please try again!";
            $valid = false;
        }
        else{
            $validate =  "Please check your username and password again!";
            $valid = false;
        }
    }
    echo $validate;
    if ($valid == true){
        header("Location: welcome.php");
    }
    else {
        echo "<br>Please Try Again!";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
    <a href="login.php"><br>Back to Login</a>
</div>
</body>
</html>
