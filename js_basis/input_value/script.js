function plaatsTekst() {
    let voornaam = document.getElementById("voornaam").value;
    let voornaam2 = voornaam.charAt(0).toUpperCase() + voornaam.slice(1);
    let achternaam = document.getElementById("achternaam").value;
    let achternaam2 = achternaam.charAt(0).toUpperCase() + achternaam.slice(1);
    let leeftijd = document.getElementById("leeftijd").value;
    let over = document.getElementById("over").value;
    let leeftijd2 = Number(leeftijd) + Number(over);

    document.getElementById("output").innerHTML = "Hallo ik ben " + voornaam2 + " " + achternaam2 + ". Over " + over + " jaar ben ik " + leeftijd2 + " jaar!";
}
