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

    $delete_name = $_POST['del_name'];
    $sql = "DELETE FROM myGuests WHERE firstname = '$delete_name'";
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
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
</div>


</body>
</html>