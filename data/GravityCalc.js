function DrawGravityCalc (ratio, name)
{
    GravityDiv = document.createElement("div")
    
    GravityDiv.id = "GravityDiv"
    GravityDiv.innerHTML = "Enter Weight: <input type='text' name='Weight'><br>" +
    "<input type='button' name='Submit' value='Submit' onclick='GravityCalc(ratio,name);'/>" +
    "<div id='WeightText'> </div>";
    
    document.body.appendChild(GravityDiv);
}


####        CONTINEU WORKING HERE!!! ****
function GravityCalc (ratio, name)
{
    Weight = Weight * ratio;
    alert('beta');
    document.getElementById('GravityDiv').innerHTML = 'You would weigh ' + weight + ' on ' + name;
}



 
 
