<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Klacht_overzicht</title>
    <?php
        include('functions/functions.php');
        include('connection.php');
        //Tabel Query
        $select_query = 'select klacht.ID, klacht.postcode, klacht.datum, klacht.tijd, klachtsoort.klachtsoort
        from klacht
        join klachtsoort
        on klacht.ID_klachtsoort = klachtsoort.ID';
        $resultaat = $conn->query($select_query);
        //Teller queries
        $milieu_query = 'select count(ID_klachtsoort) as milieu from klacht where ID_klachtsoort = 1';
        $geluid_query = 'select count(ID_klachtsoort) as geluid from klacht where ID_klachtsoort = 3';
        $veilig_query = 'select count(ID_klachtsoort) as veilig from klacht where ID_klachtsoort = 2';
        $m_result = $conn->query($milieu_query);
        $g_result = $conn->query($geluid_query);
        $v_result = $conn->query($veilig_query);
    ?>
</head>
<body>
    <div class="container">
        <?php
        navigation();
        ?>
        <div id="overzicht">
            <h2><b>Overzicht Schiphol Meldpunt</b></h2>
            <p><b>Gerangschikt op postcode, datum en tijd</b></p>
            <table>
                <tr>
                    <th class="standaard">nr</th>
                    <th class="standaard">postcode</th>
                    <th class="standaard">datum</th>
                    <th class="standaard">tijd</th>
                    <th class="standaard">soort</th>
                </tr>
            <?php
                 $x = 0;
        
                 //laat tabel zien
                    if($resultaat->num_rows > 0){
                         while($row = $resultaat->fetch_assoc()){
                             $x++;
                             if($x % 2 == 0){
                                echo '
                             <tr>
                                    <td class="standaard">' . $row["ID"] . '</td>
                                    <td class="standaard">' . $row["postcode"] . '</td>
                                    <td class="standaard">' . $row["datum"] . '</td>
                                    <td class="standaard">' . $row["tijd"] . '</td>
                                    <td class="standaard">' . $row["klachtsoort"] . '</td>
                             </tr>';
                             }else{
                                echo '
                                <tr>
                                    <td class="standaard oneven">' . $row["ID"] . '</td>
                                    <td class="standaard oneven">' . $row["postcode"] . '</td>
                                    <td class="standaard oneven">' . $row["datum"] . '</td>
                                    <td class="standaard oneven">' . $row["tijd"] . '</td>
                                    <td class="standaard oneven">' . $row["klachtsoort"] . '</td>
                                </tr>';
                             }
                         }
                    }else{
                        echo "probeer opnieuw";
                    }
                ?>
            </table>
            <div id="teller">
                <?php
                    //Tellers
                    $data_milieu = $m_result->fetch_assoc();
                    $data_geluid = $g_result->fetch_assoc();
                    $data_veilig = $v_result->fetch_assoc();
                    echo "<p>totaal milieuklachten: " . $data_milieu['milieu'] . "</p>";
                    echo "<p>totaal geluidsklachten: " . $data_geluid['geluid'] . "</p>";
                    echo "<p>totaal veiligheidsklachten: " . $data_veilig['veilig'] . "</p>";
                ?>
            </div>
        </div>
        <div id="tussen-overzicht">
        </div>
        <?php
            footer();
        ?>
    </div>
</body>
</html>