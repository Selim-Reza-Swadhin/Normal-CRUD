<?php
$conn = mysqli_connect("localhost", "root", "", "student_info");
$sql = "select * from student";
$res = mysqli_query($conn, $sql);

?>

<!doctype html>
<html lang="en">
<body>

<table border="1" width="800" height="80">
    <tr style="text-align: center">
        <td>Student Id</td>
        <td>Student Password</td>
        <td>Student Name</td>
        <td>Student Age</td>
        <td>Student Gender</td>
        <td>Student Country</td>
        <td>Image</td>
        <td>Action</td>
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
                <a href="updatesave.php?id=<?= $row['id'];?> &pass= <?= $row['pass'];?> &sn= <?= $row['name'];?> &sage= <?= $row['age'];?> &gen= <?= $row['gender'];?>  &con= <?= $row['country'];?> &img= <?= $row['image'];?>">Update</a>
            </td>

        </tr>
    <?php } ?>
</table>
</body>
</html>

