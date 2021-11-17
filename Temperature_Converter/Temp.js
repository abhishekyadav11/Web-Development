function convertTemp(){
    let Deg = document.getElementById('Degree').value;
 
    let Fah = (Deg*(9/5)+32);

    document.getElementById('Fahrenheit').value = Fah+" f";
}