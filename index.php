<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jana Kotak</title>
</head>
<body>
    <fieldset>
        <form method="POST">
            <h1>Jana Kotak</h1>
            <label for="width">Width :</label>
            <input type="number" name="width"><br><br>
            <label for="height">Height :</label>
            <input type="number" name="height"><br><br>
            <input type="submit" name="jana" value="Jana">
        </form>
    </fieldset>
    <br>

    <?php
    if(isset($_POST['jana'])){
        $width = $_POST['width'];
        $height = $_POST['height'];
        ?>
        <table border="1">
            <?php
            for ($a = 0; $a<$height; $a++) {
                ?>
                <tr>
                    <?php
                    for ($b = 0; $b<$width; $b++) {
                        echo "<td>row ". $a ." column ". $b . "</td>";
            }
            ?>
                </tr>
                <?php
    }
    echo "</table>";
}
?>
</body>
</html>