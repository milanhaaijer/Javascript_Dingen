function sillyCatGenerator() {
    let images = document.getElementsByTagName("img");
    let random = 0;

    let randomNumbers = [];

    while(randomNumbers.length < 9) {
        random = Math.floor(Math.random() * 9) +1;
        if(randomNumbers.lastIndexOf(random) == -1) {
            randomNumbers.push(random);
        }
    }

    random = 0
    for(let image in images) {
        images[image].src = "images/sillycat" + randomNumbers[random] + ".png";
        random++;
    }
}