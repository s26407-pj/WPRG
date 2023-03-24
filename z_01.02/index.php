<!DOCTYPE html >
<html>
<head>
    <meta charset="utf-8">
    <title>PHP</title>
</head>

<body>

    <form action="index.php" method="post">
        <input name="bok_a" type="text" />
        <label for="bok_a">Podaj bok a</label></br>

        <input name="bok_b" type="text" />
        <label for="bok_b">Podaj bok b</label></br>


        <input type="submit" />
        </br>
    </form>

    <p>

    <?php

        $bok_a = @$_POST['bok_a'];
        $bok_b = @$_POST['bok_b'];

        echo $bok_a * $bok_b ;

    ?>

    </p>


</body>
</html>