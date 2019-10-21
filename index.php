<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home-pagina</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <div class="container">
            <?php
            include('functions/functions.php');
            navigation();
            ?>
            <div id="information-text">
                <h2>Informatie tekst</h2>
                <br>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras egestas nibh ut lacus iaculis sodales. 
                    Phasellus feugiat varius turpis, vel tincidunt sem porta semper. Aliquam sit amet mi id augue sodales 
                    commodo quis sed sapien. Quisque a facilisis sem. Suspendisse at venenatis velit, sit amet ullamcorper mi. 
                    Aliquam pretium massa vel dictum eleifend. Curabitur id turpis ac odio fermentum luctus in non augue. Ut 
                    mollis, erat vel tincidunt hendrerit, dui leo mattis erat, a congue magna urna vel mi. Nam sed orci ante.
                </p>
                <p>
                    Suspendisse laoreet, tortor at gravida pretium, orci arcu auctor justo, eget bibendum massa quam sit amet sapien. 
                    Cras et lacinia ante. Vivamus hendrerit, felis quis ullamcorper viverra, sapien felis venenatis tellus, vel facilisis 
                    nulla est ut nisl. Sed eget dolor eget mi fringilla aliquet. Vivamus metus est, consequat at consequat vel, 
                    consequat ac lectus. Nullam efficitur facilisis lacus, sit amet iaculis nisi condimentum eu. Mauris ornare, 
                    nulla porta pharetra placerat, risus est cursus nisi, mattis ultricies dolor massa ac elit. Nullam ornare sapien 
                    non sapien rhoncus, non ultrices sem condimentum. Aliquam nec mi venenatis, finibus nisl sed, aliquam enim. Aliquam 
                    viverra dui arcu, ac volutpat leo vehicula ac. Sed eget venenatis quam. Aliquam quis bibendum erat. Nunc mi lorem, 
                    tristique sit amet volutpat sed, feugiat a leo. Donec laoreet, velit vel elementum aliquet, tortor nunc eleifend dui, 
                    hendrerit tincidunt purus tortor ut ligula. Maecenas euismod risus lacus, finibus bibendum sem ornare non. Vestibulum 
                    bibendum lectus sit amet tortor tincidunt pharetra.
                </p>
            </div>
            <div id="links">
                <h1>Verder kijken?</h1>
                <ul>
                    <li><a href="index.php">Homepagina</a></li>
                    <li><a href="formulier.php">Klachtformulier</a></li>
                    <li><a href="overzicht.php">Overzicht</a></li>
                    <li><a href="about_us.php">About us</a></li>
                </ul>
            </div>
            <?php
            footer();
            ?>
        </div>
    </body>
</html>