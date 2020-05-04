<?php
if (isset($_POST['Search'])){
    $search = $_POST['Search'];
    $sql = "select * from student where id=".$search."";
    $search_result = filterTable($sql);
}else{
    $sql ="select * from student";
    $search_result = filterTable($sql);
}

function filterTable($sql){
    $conn = mysqli_connect("localhost", "root", "", "student_info");
    if ($res = mysqli_query($conn, $sql)){
        return $res;
    }
}

?>
<!doctype html>
<html lang="en">
<body>
<form class="" action="" method="post">
    <input type="text" name="Search" id="" placeholder="Search by id">
    <button type="submit" name="btn">Search</button><br><br>
    <table border="1" width="900" height="120">
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
            <td>Action</td>
        </tr>


        <?php while ($row = mysqli_fetch_assoc($search_result)) { ?>
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
                </audio>
                </span>'?>
                </td>
                <td>
                    <?= '<span><video controls src="videos/' . $row["vname"] . '" style="width: 200px; height: 150px"></video></span>' ?>
                </td>
            </tr>
        <?php } ?>

    </table>
</form>
</body>
</html>
