<?php
	$a = 3;
	$b = 4;
	$c = $a + $b;
	
	$A = 20.5;
	$B = 20.5;
	$C = $A == $B;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>27-วชิรวิชญ์</title>
</head>
<body>
	<h3>ผลลัพธ์</h3>
    <p>ค่าของ $a = <?php echo $a?></p>
    <p>ค่าของ $b = <?php echo $b?></p>
    <p>ผลรวมของ $a และ $b = <?php echo $c?></p>
    
    <h3>ผลลัพธ์</h3>
    
    <p>$A = $B</p>
    <p>$A = <?php echo $A?></p>
    <p>$B = <?php echo $B?></p>
    <p>จะมีค่า = <?php echo $C?></p>
</body>
</html>