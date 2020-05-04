<?php
$conn = mysqli_connect("localhost", "root", "", "student_info");

$id = $_POST['sid'];
$pass = $_POST['sp'];
$name = $_POST['sn'];
$age = $_POST['sa'];
$gender = $_POST['gender'];
$country = $_POST['country'];

//All image in php
$image = $_FILES['image']['name'];
$imgcopy = $_FILES['image']['tmp_name'];
move_uploaded_file($imgcopy, "images/$image");

//All audio in php
$audio = $_FILES['audio']['name'];
$audcopy = $_FILES['audio']['tmp_name'];
move_uploaded_file($audcopy, "audios/$audio");

//All image in php
$video = $_FILES['video']['name'];
$tmp = $_FILES['video']['tmp_name'];
move_uploaded_file($tmp, "videos/$video");

//echo "Student ID : ".$id."<br>";
//echo "Student ID : ".$pass."<br>";
//echo "Student ID : ".$name."<br>";
//echo "Student ID : ".$age."<br>";
//echo "Student ID : ".$gender."<br>";
//echo "Student Country : ".$country."<br>";

$sql = "insert into student(id,pass,name,age,gender,country,image,audio, vname)values ('$id','$pass','$name','$age','$gender','$country','$image', '$audio', '$video')";

mysqli_query($conn, $sql);
echo "Data inserted successfully complete.";

