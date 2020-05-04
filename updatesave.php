<?php
$conn = mysqli_connect("localhost", "root", "", "student_info");
//$_GET['id'];
//$_GET['pass'];
//$_GET['sn'];
//$_GET['sage'];
//$_GET['gen'];
//$_GET['con'];
//$_GET['img'];

?>

<html>
<body>
<form action="" method="get">
    Student Id : <input type="text" name="id" value="<?= $_GET['id']; ?>"><br><br>
    Student Pass : <input type="text" name="pass" value="<?= $_GET['pass']; ?>"><br><br>
    Student Name : <input type="text" name="sn" value="<?= $_GET['sn']; ?>"><br><br>
    Student Age : <input type="text" name="sage" value="<?= $_GET['sage']; ?>"><br><br>
    Student Gender : <input type="text" name="gen" value="<?= $_GET['gen']; ?>"><br><br>
    Student Country : <select name="con">
        <option value="Bangladesh">Bangladesh</option>
        <option value="USA">USA</option>
        <option value="Germany">Germany</option>
    </select>
    <br><br>
    Student Image : <input type="file" name="img" value="<?= $_GET['img']; ?>"><br><br>
    <input type="submit" name="submit" value="Update">
</form>

<?php
if (isset($_GET['submit'])) {
    $uid = $_GET['id'];
    $upass = $_GET['pass'];
    $uname = $_GET['sn'];
    $uage = $_GET['sage'];
    $ugen = $_GET['gen'];
    $ucon = $_GET['con'];
    $uimg = $_GET['img'];

    $sql = "update student
set
pass='$upass',
name='$uname',
age='$uage',
gender='$ugen',
country='$ucon',
image='$uimg'
where id='$uid'
";
    $update = mysqli_query($conn, $sql);
    if ($update) {
        echo "<span style='color: green'>Data is updated success</span>";
    } else {
        echo "<span style='color: red'>Data is not updated success</span>";
    }

}
?>


</body>
</html>
