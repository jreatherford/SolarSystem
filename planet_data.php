<?php


class Planet 
{
    private $image;
    private $data;
    
    public function __construct($planet_image, $planet_data_file)
    {
        
        //set the image file
        if (file_exists($planet_image))
            $image = $planet_image;
        else
            echo "ERROR CANNOT FIND IMAGE FILE: $planet_image <br>";
        
        //set the data file
        if (file_exists($planet_data_file))
            $data = file_get_contents($planet_data_file);
        else
            echo "ERROR CANNOT FIND DATA FILE: $planet_data_file <br>";
        
        //here, I shall parse the data file
        
    }
    
    public function drawPlanetPage()
    {
       //Here, I shall draw the plaet data
    }

}

$BELT = new Planet("renders/mars.png","data/belt.dat");
$EARTH = new Planet("renders/earth.png","data/earth.dat");
$JUPITER= new Planet("renders/jupiter.png","data/jupiter.dat");
$MARS = new Planet("renders/mars.png","data/mars.dat");
$MERCURY = new Planet("renders/mercury.png","data/mercury.dat");
$NEPTUNE = new Planet("renders/neptune.png","data/neptune.dat");
$PLUTO = new Planet("renders/pluto.png","data/pluto.dat");
$SATURN = new Planet("renders/saturn.png","data/saturn.dat");
$SOL = new Planet("renders/sol.png","data/sol.dat");
$URANUS = new Planet("renders/uranus.png","data/uranus.dat");
$VENUS = new Planet("renders/venus.png","data/venus.dat");
$LUNA = new Planet("renders/luna.png","data/luna.dat");





/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
