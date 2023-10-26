<html>
<head>
    <title>Multiplication Table</title>
</head>

<body>
    
    <?php

        $number = $_POST['size'];
        echo "<table border='1'>";
        for ($i = 0; $i <= $number; $i++) {
            echo "<tr>";
            for ($j = 0; $j <= $number; $j++) {
                if ($i == 0)
                {
                    echo "<td>" . 1 * $j . "</td>";
                } else if ($j == 0){
                    echo "<td>" . $i * 1 . "</td>";
                } else {
                    echo "<td>" . $i * $j . "</td>";
                }
                
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>

</body>
</html>