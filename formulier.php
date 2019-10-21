<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Formulier</title>
    <?php
        include('functions/functions.php');
        include('connection.php');
        //Query om postcode op te halen
        $array_query = 'select postcode from postcode';
        $array_resultaat = $conn->query($array_query);
    ?>
</head>
<body>
    <div class="container">
        <?php
            navigation();
        ?>
        <form action="" method="post" id="formulier-form">
            Postcode
            <input type="text" name="postcode" value="" placeholder="0000AA" required class="text">
            <br>
            Datum
            <input type="text" name="datum" value="" placeholder="YYYY-MM-DD" required class="text">
            <br>
            Tijd
            <input type="text" name="tijd" value="" placeholder="00:00" required class="text">
            <br>
            Klachtsoort:
            <br>
            Milieu
            <input type="radio" name="klacht" value="1" required class="klacht">
            <br>
            Geluid
            <input type="radio" name="klacht" value="3" required class="klacht">
            <br>
            Veiligheid
            <input type="radio" name="klacht" value="2" required class="klacht">
            <br><br>
            <input type="submit" name="submit" value="submit" id="submit">
        </form>
        <div id="tussen-formulier">
        </div>
        <?php
            footer();
            //Array maken voor restricties invoer database
            if($array_resultaat->num_rows > 0){
                while($rij = $array_resultaat->fetch_assoc()){
                    $restricties[] = $rij['postcode'];
                }
            }
            //Informatie in de database zetten
            if(isset($_POST["submit"])){
                $postcode = $_POST["postcode"];
                $datum = $_POST["datum"];
                $tijd = $_POST["tijd"];
                $klacht = $_POST["klacht"];
                for($x = 0; $x < count($restricties); $x++){
                    if($postcode == $restricties[$x]){
                        $insert_query = "insert into klacht(ID_klachtsoort, postcode, datum, tijd)
                                values('$klacht', '$postcode', '$datum', '$tijd')";
                        $insert_resultaat = $conn->query($insert_query);
                        break;
                    }
                }
                if($x == 6){
                    echo "Uw postcode is niet geldig";
                }
            }
        ?>
    </div>
</body>
</html>