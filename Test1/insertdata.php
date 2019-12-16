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
    echo "<br>Database Connection Success";
}


$first_name = $_POST['fname'];
$last_name = $_POST['lname'];
$email = $_POST['email'];

$sql = "INSERT INTO myGuests (firstname, lastname, email) 
VALUES ('$first_name','$last_name','$email') ";

if ($conn->query($sql) === TRUE) {
    echo "<br>New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql2 = "SELECT id, firstname, lastname, email FROM myGuests";
$result = $conn->query($sql2);


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<br>id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]." - Email: ".$row["email"]."<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
<a href="welcome.php"><br><br>Back to Home</a>
</div>


</body>
</html>