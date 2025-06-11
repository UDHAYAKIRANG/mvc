
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label for="">Enter the username</label>
        <input type="text" name="username">
        <br><br>
        <label for="">Enter the password</label>
        <input type="text" name="password">
        <br>
        <button>Submit</button>
    </form>

    <table border="1">
        <?php
            foreach($data as $object){
                echo "<tr>";
                foreach($object as $data1){
                    echo "<td>$data1</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>
