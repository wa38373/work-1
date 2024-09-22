<?php
    $server = "localhost";
    $us = "root";
    $password = "";
    $db = "27-students";
    $conn = mysqli_connect($server, $us, $password, $db);

    if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error);}

    $sql = "SELECT * FROM students ORDER BY class ASC";
    $query = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://bootswatch.com/5/vapor/bootstrap.min.css" rel="stylesheet">
    <title>27-วชิรวิชญ์</title>
</head>
<body>
    <div class="container pb-3 px-3">
        <h3 class="display-5 p-4 text-center">รายชื่อทั้งหมด</h3>
        <table class="table text-center">
            <thead>
                <tr>
                    <th>เลขประจำตัว</th>
                    <th>ชื่อ-นามสกุล</th>
                    <th>ระดับชั้น</th>
                    <th>Email</th>
                    <th>Username</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($que = mysqli_fetch_assoc($query)) {?>
                    <tr>
                        <td><?php echo $que["s_id"]?></td>
                        <td><?php echo $que["fname"]." ".$que["lname"]?></td>
                        <td><?php echo $que["class"]?></td>
                        <td><?php echo $que["email"]?></td>
                        <td><?php echo $que["username"]?></td>
                    </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</body>
</html>