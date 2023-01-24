<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5</title>
</head>
<body>
    <form action="5.php" method="post">
        <input type="text" name="text" placeholder="your text">
        <input type="submit" value="submit">
    </form>
    <?php   
        function text() {
            $vokaler = array("a", "e", "i", "o", "u", "y", "å", "ä", "ö", "A", "E", "I", "O", "U", "Y", "Å", "Ä", "Ä"); // vokaler 
            $antalVokaler = 0; // antalvokaler
            for($txt = 0; $txt < mb_strlen($_POST["text"]); $txt++) {// for loop som loopar igenom för varje bokstav i den skickade texten.
                $data = mb_str_split($_POST["text"]); // splittar och förändrar texten till en array.
                for($vok = 0; $vok <= 17; $vok++) { // loopar igenom alla vokaler.
                    if($data[$txt] == $vokaler[$vok]) { // kollar om bokstaven som kollas i texten är en vokal eller inte.
                        $antalVokaler++; // om den är en vokal så incrementas den.
                    }
                }
            }
            echo "Antal vokaler: " . $antalVokaler; // antal vokaler.
        }
        if(isset($_POST["text"])) {
            text();
        }
    ?>
</body>
</html>