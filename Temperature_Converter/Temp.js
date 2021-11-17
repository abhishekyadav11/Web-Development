function convertTemp(){
    let Deg = document.getElementById('Degree').value;

    if(Deg!="")
    {
        let Fah = (Deg*(9/5)+32);

      document.getElementById('Fahrenheit').value = Fah+" f";
    }
    else{
        alert("Enter Temperature First !")
    }
    
}

function clearText(){
    document.getElementById('Degree').value = "";
    document.getElementById('Fahrenheit').value = "";
}