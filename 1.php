<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1</title>
</head>
<body>
    <form action="1.php" method="post">
        <input type="number" name="num1" placeholder="first number">
        <input type="number" name="num2" placeholder="second number">
        <input type="submit" value="submit">
    </form>
    <?php
        if(isset($_POST["num1"])) { //kollar om ett värde på num1 finns 
            if(isset($_POST["num2"])) { // kollar om ett värde på num2 finns 
                echo $_POST["num1"] + $_POST["num2"]; // om det finns värde på båda så sumeras num1 och num2.
            }
        }
    ?>
</body>
</html>