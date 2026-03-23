<!DOCTYPE html>
<html>

<head>
    <title>EECS 348 Practice 4</title>
    <style>
        body {
            background-color: #1a0033;
            color: white;
            font-family: Arial, sans-serif;
            padding: 30px;
        }

        table {
            border: 1px solid white;
            border-collapse: collapse;
        }

        td,
        th {
            border: 1px solid white;
            padding: 5px;
            text-align: center;
        }
    </style>
</head>

<body>

    <h1>Practice Four: PHP Multiplication Table</h1>

    <form method="post">
        Size of the table: <input type="text" name="size">
        <input type="submit" value="Click Me">
    </form>

    <br><br>

    <?php
    if ($_POST) {
        $size = $_POST['size'];

        echo "<table>";
        

        echo "<tr>";
        echo "<td></td>"; 
        for ($i = 1; $i <= $size; $i++) {
            echo "<td>$i</td>";
        }
        echo "</tr>";

        for ($i = 1; $i <= $size; $i++) {
            echo "<tr>";
            echo "<td>$i</td>";
            
            for ($j = 1; $j <= $size; $j++) {
                echo "<td>" . ($i * $j) . "</td>";
            }
            echo "</tr>";
        }
        
        echo "</table>";
    }
    ?>

</body>

</html>