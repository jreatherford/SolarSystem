<?php


class Planet 
{
    private $image;
    private $data;
    
    private $title;
    private $distance;  //average distance from the sun
    private $year;
    private $day;
    private $temp;     //average temp or range
    private $gravity;
    private $diameter;
    private $info;
    
    public function __construct($planet_image, $planet_data_file)
    {
        
        //set the image file
        if (file_exists($planet_image))
            $this->image = $planet_image;
        else
            echo "ERROR CANNOT FIND IMAGE FILE: $planet_image <br>";
        
        //set the data file
        if (file_exists($planet_data_file))
            $data = file_get_contents($planet_data_file);
        else
            echo "ERROR CANNOT FIND DATA FILE: $planet_data_file <br>";
        
        //snip out all the tags from the data file
        preg_match_all ("#\[.*?\].*?\[/\]#sm",$data,$tags);
        $tags = $tags[0];

        
        
        foreach ($tags as $tag)
        {
            $tag_type = substr($tag, 1, strpos($tag,"]")-1);
            $tag_data = substr($tag, (strlen($tag_type) + 2), (strlen($tag) - strlen($tag_type) - 5));
            $tag_data = trim($tag_data);
            
            switch ($tag_type){
               
                case "title":
                    $this->title = $tag_data;
                    break;
                case "distance":
                    $this->distance = $tag_data;
                    break;
                case "year":
                    $this->year = $tag_data;
                    break;
                case "day":
                    $this->day = $tag_data;
                    break;
                case "temp":
                    $this->temp = $tag_data;
                    break;
                case "gravity":
                    $this->gravity = $tag_data;
                    break;
                case "diameter":
                    $diameter = $tag_data;
                    break;
                case "info":
                    $this->info = $tag_data;
                    break;
            }
        } 
    }
    
    public function drawPlanetPage()
    {
       //Here, I shall draw the planet data
       
        
 echo'   
<!----------------------------------------------------------------------------->
<!----------------- Planet code here:  Parsed in with PHP --------------------->
<!----------------------------------------------------------------------------->';
        
        //Open the main container
        echo '<div class="container" align="center">
              <div class="container-fluid">
              <div class="row-fluid">';
                
        //Open the sidebar
        echo '<div class="span2">';
    
       //print the planet's image
       echo'<img src="',$this->image,'"></img>';
            
       //PUT THE REST OF THE SIDEBAR CONTENT HERE

       //Close the sidebar       
       echo '</div>';
          
       
        //print the main window content
        echo'<div class="span10" align = left>
             <h1>',
                $this->title,
             '</h1><br>',
                $this->info,'
              <br><br><br>
</div>';
        
        //close the main container
        echo "</div></div></div>";
 echo'   
<!----------------------------------------------------------------------------->
<!----------------------------------------------------------------------------->
<!----------------------------------------------------------------------------->';
    }

}

?>
