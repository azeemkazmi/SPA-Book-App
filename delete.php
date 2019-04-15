<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mysql";
ini_set('display_errors',1);

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$delete=$_POST["id"];

$sql = "DELETE FROM ebook_metadata WHERE id=$delete";
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();
header('Location: http://' . $_SERVER['HTTP_HOST'] . '/Assignment3/index.php');
exit;
?>
<!-- <script type= "text/javascript">
window.location.href = "/assignment3/index.php";</script>; -->