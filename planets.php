<?php
include "planet_data.php";

//Get the info about the current planet
if (isset( $_GET["planet"]) )
    $input = $_GET["planet"];
else
    $input = "Sol";

$planet = new Planet("renders/$input.png","data/$input.dat");

?>

<html>
    <head>
        <title>
            Solar System - Welcome
        </title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" type="text/css" href="css/theme.css">
        
    </head>
    <body>
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        
        <!--Draw the planet pane-->
        <?php 
            include "header.php";
            $planet->drawPlanetPage(); 
        ?>
        
        <br><br><br>
        <?php include "footer.php"?>
    </body>
</html>
