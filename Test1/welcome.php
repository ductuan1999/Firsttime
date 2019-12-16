<html>
<head>
    <link rel="stylesheet" href="bootstrap.min.css" crossorigin="anonymous">
    <title>Log in</title>
</head>

<body>
<div class="container">
<h1>Home Page</h1>
<?php
    session_start();
    echo "Welcome back, ".$_SESSION['user'];
?>

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

    $sql2 = "SELECT id, firstname, lastname, email FROM myGuests";
    $result = $conn->query($sql2);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<br>id: " . $row["id"]." Name: ".$row["firstname"]." ".$row["lastname"]." Email: ".$row["email"]."<br>";
        }
    } else {
        echo "0 results";
    }


    $conn->close();
?>
<a href="insert.php"><br>Insert into Table</a>
<a href="delete.php"><br>Delete an instance</a>
<a href="logout.php"><br>Log out</a>

</div>
</body>

</html>