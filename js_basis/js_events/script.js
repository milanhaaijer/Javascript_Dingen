function myFunction() {
    let input = document.getElementById("name").value;
    let nameLength = input.length;

    if (nameLength < 2) {
        document.getElementById("check").innerHTML = "De tekst moet minimaal 2 karakters bevatten.";
        document.getElementById("check").style.color = "red";
    } 
    else if (nameLength > 10) {
        document.getElementById("check").innerHTML = "De tekst mag maximaal 10 karakters bevatten.";
        document.getElementById("check").style.color = "red";
    } 
    else {
        document.getElementById("check").innerHTML = "Voldoet aan eisen: tekst langer dan 1 karakters en kleiner dan 11 karakters.";
        document.getElementById("check").style.color = "green";
    }
}

function keyUp() {
    let ageInput = document.getElementById("age").value;
    document.getElementById("output").innerHTML = ageInput;
    let ageLength = ageInput.length;
    document.getElementById("length").innerHTML = ageLength;
}