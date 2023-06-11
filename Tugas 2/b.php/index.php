<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas2b</title>
</head>
<body>
    <?php 
        echo "<table>";
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= $i; $j++){
                echo "<td>" . $j . "</td>";
            }
            echo "</tr>";
        }
        echo "<?/table>";
    ?>    
</body>
</html>