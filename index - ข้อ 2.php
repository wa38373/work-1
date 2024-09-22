<?php
        $mt = $_GET['month'];
        
        switch ($mt) {
            case ("มกราคม"):case ("มีนาคม"):case ("พฤษภาคม"):case ("กรกฎาคม"):case ("สิงหาคม"):case ("ตุลาคม"):case ("ธันวาคม"):
                echo "เดือน $mt มี 31 วัน";
                break;
            case ("เมษายน"):case ("มิถุนายน"):case ("กันยายน"):case ("พฤศจิกายน"):
                echo "เดือน $mt มี 30 วัน";
                break;
            default:
                echo "ไม่พบเดือน";
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>27-วชิรวิชญ์</title>
</head>
<body>

    <form method="GET">
        <p>เดือน :</p>
        <input type="text" name="mt"><br>
        <input type="submit" value="submit">
    </form>
    
</body>
</html>