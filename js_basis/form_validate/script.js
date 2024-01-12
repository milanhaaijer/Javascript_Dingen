function formValidate(elem) {
    if (!elem.value) elem.style.backgroundColor = "#ff999a";
    else elem.style.backgroundColor = "#99ff99";
}

function checkFields() {
    let inputs = document.querySelectorAll("#content input");
    let messagesbox = document.querySelector("#warning #messages");
    console.log(messagesbox);
    messagesbox.innerHTML = "";
    document.querySelector("#warning").style.display = "none";
    for (let index = 0; index < inputs.length; index++) {
        const input = inputs[index];
        if (input.hasAttribute("required") && !input.value) {
            document.querySelector("#warning").style.display = "block";
            let elem = document.createElement("p");
            elem.innerText = `${input.id} mag niet leeg zijn`;
            messagesbox.appendChild(elem);
        }
    }

}