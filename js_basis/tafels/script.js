function tafelGenerator() {
    let x = document.getElementById("numberInput").value;
    x = parseInt(x);
    let s = document.getElementById("startInput").value;
    s = parseInt(s);
    let e = document.getElementById("endInput").value;
    e = parseInt(e);
    let text = "";
    let i;

    for (i = s; i <= e; i++) {   
        y = x * i;
        text += i + " * " + x + " = " + y + "<br>"; 
    }

    document.getElementById("output").innerHTML = text; 
}