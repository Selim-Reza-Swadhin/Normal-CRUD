<?php
$conn = mysqli_connect("localhost", "root", "", "student_info");
$sid=$_GET['id'];
$sql = "delete from student where id='$sid'";
$res = mysqli_query($conn, $sql);

echo "Data is delete successfully complete";

?>
