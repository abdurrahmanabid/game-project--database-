
var submitButton = document.getElementById("submit");

submitButton.style.display = "none";

function edit() {

    alert("Now you can edit your info");
    
    var nameInput = document.getElementById("1");
    var userNameInput = document.getElementById("userName");
    var emailInput = document.getElementById("email");
    var btnBoxDiv = document.getElementsByClassName("btnbox")[0];

    nameInput.disabled = false;
    emailInput.disabled = false;


    nameInput.value = nameInput.placeholder;
    nameInput.style.backgroundColor =  '#00796b';
    nameInput.style.width =  '95%';

    
    emailInput.value = emailInput.placeholder;
    emailInput.style.backgroundColor =  '#00796b';
    emailInput.style.width =  '95%';



    submitButton.style.display = "block";
    btnBoxDiv.style.display = "none";
}
