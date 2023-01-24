<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1</title>
</head>
<body>
    <form action="4.php" method="post">
        <input type="number" name="num" placeholder="your number/sequence">
        <input type="submit" value="submit">
    </form>
    <?php
        if(isset($_POST["num"])) {
            sum();
        }
        function sum() {
            $data = str_split(intval($_POST["num"])); // tar data och gör om integers till strings och sedan delar up alla siffer strings till en varsin string 
            $data = array_sum($data) / count($data); // tar allat i array och summerar den och sedan delar den på den totala array counten.
            echo $data;
        }
    ?>
</body>
</html>