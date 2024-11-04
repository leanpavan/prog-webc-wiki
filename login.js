const form = document.getElementById("form");
form.addEventListener("submit", (e) => {
    e.preventDefault();
    checkEmail();
    checkPassword();

    if (isFormValid()) {
        form.submit();
    }
})


function isFormValid() {
    const errors = [
        document.getElementById("emailWarning").style.display,
        document.getElementById("passWarning").style.display,
    ];

    return errors.every(errorDisplay => errorDisplay === "none");}

function checkEmail(){
    const email = document.getElementById("email").value;
    const label = document.getElementById("emailWarning");
    if(email === ""){
        label.style.display = "block";
    }else{
        label.style.display = "none";
    }
}

function checkPassword(){
    const password = document.getElementById("password").value;
    const label = document.getElementById("passWarning");
    if(password === ""){
        label.style.display = "block";
    }else{
        label.style.display = "none";
    }
}