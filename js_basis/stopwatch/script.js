let seconds = 0;
let hundreds = 0;
let minutes = 0;
let Interval;

function buttonStart() {
    clearInterval(Interval);
    Interval = setInterval(startTimer, 10);
}

function buttonStop() {
    clearInterval(Interval);
    document.getElementById("button-start").innerHTML = "Continue";
}

function buttonReset() {
    clearInterval(Interval);
    seconds = "00";
    hundreds = "00";
    minutes = "00";
    document.getElementById("sec").innerHTML = seconds;
    document.getElementById("hun").innerHTML = hundreds;
    document.getElementById("min").innerHTML = minutes;
    document.getElementById("button-start").innerHTML = "Start";
}

function startTimer() {
    hundreds++;

    if (hundreds <= 9) {
        document.getElementById("hun").innerHTML = "0" + hundreds;
    }

    if (hundreds > 9) {
        document.getElementById("hun").innerHTML = hundreds;
    }

    if (hundreds > 99) {
        seconds++;
        document.getElementById("sec").innerHTML = "0" + seconds;
        hundreds = 0;
        document.getElementById("hun").innerHTML = "0" + 0;
    }

    if (seconds > 9) {
        document.getElementById("sec").innerHTML = seconds;
    }

    if (seconds > 59) {
        minutes++;
        document.getElementById("min").innerHTML = "0" + minutes;
        seconds = 0;
        document.getElementById("sec").innerHTML = "0" + 0;
    }
}