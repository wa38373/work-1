<?php
    $t1 = $_GET['team1'];
    $t2 = $_GET['team2'];
    
    if ($t1 > $t2) {
        $result = "ทีม 1 ชนะ";
    } else if ($t1 < $t2) {
        $result = "ทีม 2 ชนะ";
    } else {
        $result = "เสมอ";
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
    
        <p>ทีม 1 :</p>
        <input type="text" name="team1">
        
        <p>ทีม 2:</p>
        <input type="text" name="team2">
        
        <br><input type="submit" value="submit">
    </form>
    
    <p><?php echo $result?></p>

</body>
</html>