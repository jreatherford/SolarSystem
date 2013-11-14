<?php


class Planet 
{
    private $data = "";
    private $image = "";
    
    
    private $title = "";
    private $info = "";
    private $gravity = "";
    private $facts;
    
    
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
                case "info":
                    $this->info = $tag_data;
                    break;
                case "gravity":
                    $this->gravity = $tag_data;
                    break;
                default:
                    $this->facts[$tag_type] = $tag_data;
                    
            }
        } 
    }
      
    public function drawPlanetPage()
    {
  
 echo'   
<!----------------------------------------------------------------------------->
<!----------------- Planet code here:  Parsed in with PHP --------------------->
<!----------------------------------------------------------------------------->';
        
        //Open the main container
        echo '<div class="container" align="center">
              <div class="container-fluid">
              <div class="row-fluid">';
                
        //Open the sidebar
        echo '<div class="span3" align="left">';
    
       //print the planet's image
       echo'<img src="',$this->image,'"></img><br>';
            
       //print the planet facts
       foreach ($this->facts as $fact_name => $fact_data)
       {
           echo "<b>$fact_name:</b><br>$fact_data<br><br>";
       }

       if ($this->gravity != "")
           $this->drawGravityForm();
       
       //Close the sidebar       
       echo '</div>';
          
       
        //print the main window content
        echo'<div class="span9" align = left>
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
    
    private function drawGravityForm()
    {
        echo "
        <script type='text/javascript'>        
            function GravityCalc (ratio, name)
            {
                var Weight;
                Weight = parseInt(document.getElementById('WeightBox').value) * ratio;
                document.getElementById('WeightText').innerHTML = 'You would Weigh ' + Weight + ' on ' + name;
            }
        </script>


       Enter Weight: <input type='text' id='WeightBox' name='Weight'><br>
       <button onclick='javascript:GravityCalc({$this->gravity},\"{$this->title}\")'>Calculate</button>
       <div id='WeightText'> </div>

";
    }
    
}

?>
