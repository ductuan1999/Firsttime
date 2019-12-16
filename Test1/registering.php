<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mydb";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "<br>Database Connection Success";
}


$first_name = $_POST['fname'];
$last_name = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO myGuests (firstname, lastname, email, password) 
VALUES ('$first_name','$last_name','$email','$password') ";

if ($conn->query($sql) === TRUE) {
    echo "<br>You have successfully registered";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql2 = "SELECT id, firstname, lastname, email FROM myGuests";
$result = $conn->query($sql2);
?>
<button type="button" onclick="location.href='login.php'" class="btn btn-default" name="login">Back</button>
