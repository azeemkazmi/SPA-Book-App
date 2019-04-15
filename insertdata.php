<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mysql";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$creator=$_POST['creator'];
$title=$_POST['title'];
$type=$_POST['type'];
$identifier=$_POST['identifier'];
$date=$_POST['date'];
$language=$_POST['language'];
$description=$_POST['description'];
$sql="INSERT INTO ebook_metadata (creator,title,type,identifier,date,language,description) VALUES ('$creator','$title','$type','$identifier','$date','$language','$description')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
header('Location: http://' . $_SERVER['HTTP_HOST'] . '/Assignment3/index.php');
exit;
?>
<!-- <script type= "text/javascript">
window.location.href = "/assignment3/index.php";</script>; -->