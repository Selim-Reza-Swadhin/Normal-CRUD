<?php
$conn = mysqli_connect("localhost", "root", "", "student_info");
$sql = "select * from student order by id desc";
$res = mysqli_query($conn, $sql);

?>

<!doctype html>
<html lang="en">
<body>
<button onclick="Print()">Print Page</button>
<script>
    function Print() {
        window.print();
    }
</script>
<br><br>

<table border="1" width="800" height="80">
    <tr style="text-align: center">
        <td>Student Id</td>
        <td>Student Password</td>
        <td>Student Name</td>
        <td>Student Age</td>
        <td>Student Gender</td>
        <td>Student Country</td>
        <td>Image</td>
        <td>Audio</td>
        <td>Video</td>
    </tr>
    <?php while ($row = mysqli_fetch_assoc($res)) { ?>
        <tr style="text-align: center">
            <td><?= $row['id']; ?></td>
            <td><?= $row['pass']; ?></td>
            <td><?= $row['name']; ?></td>
            <td><?= $row['age']; ?></td>
            <td><?= $row['gender']; ?></td>
            <td><?= $row['country']; ?></td>
            <td>
                <?= '<span><img src="images/' . $row["image"] . '"style="width: 100px;height: 100px;"></span>' ?>
            </td>
            <td>
                <?= '<span>
                    <audio controls>
                    <source src="audios/' . $row["audio"] . '"style="width: 100px;height: 100px;" type="audio/mp3">
                    audio not supported!
                </audio>
                </span>'?>
            </td>
            <td>
                <?= '<span><video controls src="videos/' . $row["vname"] . '" style="width: 200px; height: 150px">Video not supported</video></span>' ?>
            </td>
        </tr>
    <?php } ?>
</table>
</body>
</html>

