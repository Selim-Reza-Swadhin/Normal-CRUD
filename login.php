<?php
$conn = mysqli_connect("localhost", "root", "", "student_info");
if (isset($_POST['submit'])){
    echo $name = $_POST['username'];
    echo $pass = sha1($_POST['pass']);
    $sql = "select * from admin where username='$name' and pass='$pass'";
    $result = mysqli_query($conn, $sql);
    $cnt = mysqli_num_rows($result);

    if ($cnt==1){
        //echo "<span style='color: green'>Login successful</span>";
         header("location:delete.php");
    }else{
        echo "<span style='color: red'>Login unsuccessful</span>";
    }
}