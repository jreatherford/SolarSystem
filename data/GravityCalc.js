function GravityCalc (ratio, name)
{
    Weight = getElementById('WeightBox').value * ratio;
    alert('beta');
    document.getElementById('GravityDiv').innerHTML = 'You would weigh ' + weight + ' on ' + name;
}
function DrawGravityCalc (ratio, name)
{
    GravityDiv = document.createElement("div")
    
    GravityDiv.id = "GravityDiv"
    GravityDiv.innerHTML = "<form>" +
    "Enter Weight: <input type='text' id='WeightBox' name='Weight'><br>" +
    "<input type='button' name='Submit' value='Submit' onclick='GravityCalc(ratio,name);'/>" +
    "<div id='WeightText'> </div></form>";
    
    document.body.appendChild(GravityDiv);
}







 
 
