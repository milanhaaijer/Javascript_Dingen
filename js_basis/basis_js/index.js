function myFunction() {
    document.getElementById('demo').innerHTML = "Nu staat er wat anders!!!!!!!";
}

function animal(animal) {
    document.getElementById('image').src = 'images/' + animal + '.png';
    console.log("images/" + animal + ".png");
}

function omtrek(r) {
    let omtrek = 2 * Math.PI * r;
    document.getElementById('demo').innerHTML = omtrek;
    console.log(omtrek);
    window.alert(omtrek);
}