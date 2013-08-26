<?php


class Planet 
{
    private $image;
    private $data;
    
    public function __construct($planet_image, $planet_data_file)
    {
        $image = $planet_image;
        
        if (file_exists($planet_data_file))
            $data = file_get_contents($planet_data_file);
        else
            echo "ERROR CANNOT FIND $planet_data_file";
    }

}

$BELT = new Planet("/renders/mars.png","tmp");
$EARTH = new Planet("/renders/earth.png","tmp");
$JUPITER= new Planet("/renders/jupiter.png","tmp");
$MARS = new Planet("/renders/mars.png","tmp");
$MERCURY = new Planet("/renders/mercury.png","tmp");
$NEPTUNE = new Planet("/renders/neptune.png","tmp");
$PLUTO = new Planet("/renders/pluto.png","tmp");
$SATURN = new Planet("/renders/saturn.png","tmp");
$SOL = new Planet("/renders/sol.png","tmp");
$URANUS = new Planet("/renders/uranus.png","tmp");
$VENUS = new Planet("/renders/venus.png","tmp");
$LUNA = new Planet("/renders/luna.png","tmp");





/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
