<!DOCTYPE html >
<html>
<head>
    <meta charset="utf-8">
    <title>PHP</title>
</head>

<body>

    <form action="index.php" method="post">
        <label>Podaj dwa wyrazy oddzielone spacją: </label></br>
        <input name="a" type="text" /></br>
        
        <input type="submit" value="Wyślij" />
        </br>
    </form>

    <p>
    <?php

        if(isset($_POST['a'])) {

            $text = explode(" ", $_POST['a']);

            if(count($text) != 2) {
                echo "Musisz podać dokładnie dwa wyrazy oddzielone spacją!";
            } else {
                $napis1 = $text[0];
                $napis2 = $text[1];
                echo "%$napis2 $napis1%$#";
            }
        }

    ?>
    </p>


</body>
</html>