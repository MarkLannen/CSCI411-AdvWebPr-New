<?php
//$con = mysqli_connect("ml120499@webdev.cs.umt.edu","ml120499","pohthaimooShohnai0chaisah5Aexo","ml120499");
//
//// Check connection
//if (mysqli_connect_errno()) {
//    echo "Failed to connect to MySQL: " . mysqli_connect_error();
//    exit();
//}
////?>

<?php
$servername = "webdev.cs.umt.edu";
$username = "ml120499";
$password = "Udana-6";
$dbname = "ml120499";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>