console.log("Hey there");


function validateTextNumericInRange ()
{
    var numRegex = /^[0-9]$|(^[0-1]?[0-5]$)/;
    var textInput = document.getElementById("noofpart");
    console.log(textInput.value);
    var valid = true;
    if(numRegex.test(textInput.value) == false) {
        alert('Maxmium 15');
        valid = false;
        }            
        return valid;   
}
