<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Update</title>
</head>
<body>
    <h1 class="header">Update Data</h1>
    <form class="content" id="content" onsubmit="return checkFields()" action="action.php">
    <table>
        <tr>
            <th>ID</th>
            <th class="artist">Artist</th>
            <th>Country</th>
            <th>Year</th>
        <tr>
        <tr>
            <td><input type="hidden" name="id" value="<?php echo($_GET["id"]);?>"></td>
            <td><input type="text" class="artistinput" name="artist" id="artist" onblur="formValidate(this, 3, 50)" required></td>
            <td><input type="text" class="countryinput" name="country" id="country" onblur="formValidate(this, 3, 50)" required></td>
            <td><input type="text" class="yearinput" name="year" id="year" onblur="yearValidate(this)" required></td>
            <td><button>Update</button></td>
        </tr>
    </table>
    </form>
    <div id="warningbox">
        <div id="warning">
            <h2>Foutmeldingen:</h2>
            <div id="messages">

            </div>
        </div>
    </div>
</body>
<script>
    function formValidate(elem, min, max) {
        if (!elem.value) elem.style.backgroundColor = "#ff999a";
        else if (elem.value && min && elem.value.length < min) elem.style.backgroundColor = "#ff999a";
        else if (elem.value && max && elem.value.length > max) elem.style.backgroundColor = "#ff999a";
        else elem.style.backgroundColor = "#99ff99";
    }

    function yearValidate(elem) {
        if (!elem.value) elem.style.backgroundColor = "#ff999a";
        else if (elem.value < 1940) elem.style.backgroundColor = "#ff999a";
        else if (elem.value > 2024) elem.style.backgroundColor = "#ff999a";
        else if (isNaN(elem.value)) elem.style.backgroundColor = "#ff999a";
        else elem.style.backgroundColor = "#99ff99";
    }

    function checkFields() {
        let inputs = document.querySelectorAll("#content input");
        let messagesbox = document.querySelector("#warning #messages");
        messagesbox.innerHTML = "";
        document.querySelector("#warning").style.display = "none";
        let submit = true;
        for (let index = 0; index < inputs.length; index++) {
            const input = inputs[index];
            console.log(input, input.value);
            if (input.hasAttribute("required") && !input.value) {
                submit = false;
                document.querySelector("#warning").style.display = "block";
                let elem = document.createElement("p");
                elem.innerText = `${input.id} mag niet leeg zijn`;
                messagesbox.appendChild(elem);
            }
        }
        console.log(submit);
        return submit;
    }
</script>
</html>