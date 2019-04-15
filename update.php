<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mysql";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$id = $_POST['id'];
$creator=$_POST['creator'];
$title=$_POST['title'];
$type=$_POST['type'];
$identifier=$_POST['identifier'];
$date=$_POST['date'];
$language=$_POST['language'];
$description=$_POST['description'];
$sql = "UPDATE ebook_metadata SET creator='$creator',title='$title',type='$type',identifier='$identifier',date='$date',language='$language',description='$description' WHERE id=$id";
if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error: " .mysqli_error($conn);
}
mysqli_close($conn);
header('Location: http://' . $_SERVER['HTTP_HOST'] . '/Assignment3/index.php');
exit;
?>