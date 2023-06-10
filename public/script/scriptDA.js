// -------------------- Hamburger Toggle Menu --------------------
let toggles = document.querySelector('.toggle');
let nav = document.querySelector('.navside');
let contents = document.querySelector('.content');

toggles.addEventListener('click', function () {
    nav.classList.toggle('active');
    contents.classList.toggle('active');
});

function ValidateEmail(inputText) {
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (inputText.value.match(mailformat)) {
        alert("Valid email address!");
        document.insertdata.email.focus();
        return true;
    } else {
        alert("You have entered an invalid email address!");
        document.insertdata.email.focus();
        return false;
    }
}


// // -------------------- Form Control Clear Input --------------------
// let inputs = document.querySelectorAll(".form-group input");
// let textAreas = document.querySelectorAll(".form-group textarea");
// let selects = document.querySelectorAll(".form-group select");

// let clearInput = document.getElementById("clear");

// clearInput.addEventListener("click", function(){
//     let inputS = inputs.value;
//     let areaS = textAreas.value;
//     let selectedS = selects.value;
// });
