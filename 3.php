<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3</title>
</head>
<body>
    <form action="3.php" method="post">
        <input type="number" name="num" placeholder="your number">
        <input type="submit" value="submit">
    </form>
    <?php
        function fakultet() { // funktion på min fakultet kalkulation.
            $data = intval($_POST["num"]); // tar data som skickats och ändrar till integers.
            for($c = $data; $data > 1; $data--) { // for() loop som rör sig neråt från den int man skickat in, 
                if($data == $c) { // om $data == $c 
                    $data--; // data  1
                    $c *= $data;// $data gånger $c till $c
                } else {
                    $c *= $data;
                }
            }
            echo $c; // skriv ut $c 
        }
        if(isset($_POST["num"])) {
            fakultet(); // när form skickat starta funktion.
        }
    ?>
</body>
</html>