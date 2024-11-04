const form = document.getElementById("form");
form.addEventListener("submit", (e) => {
    e.preventDefault();
    validarNome();
    validarEmail();
    compararEmail();
    validarSenha();
    compararSenhas();

    if (isFormValid()) {
        form.submit();
    }
})


function isFormValid() {
    const errors = [
        document.getElementById("labelnameTxt").style.display,
        document.getElementById("email-label-id").style.display,
        document.getElementById("labelEmailConfirm").style.display,
        document.getElementById("required-label-pass-len").style.display,
        document.getElementById("required-label-pass").style.display
    ];

    return errors.every(errorDisplay => errorDisplay === "none");}


function togglePassword() {
    const passwordInput = document.getElementById("passwordId");
    const passwordInput2 = document.getElementById("passwordConfirm");
    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        passwordInput2.type = "text";
    } else {
        passwordInput.type = "password";
        passwordInput2.type = "password";
    }
}


function validarNome() {
    nomeTxt = document.getElementById("nameTxt");
    labelnameTxt = document.getElementById("labelnameTxt");
    if(nomeTxt.value.length > 6){
        labelnameTxt.style.display = "none";
    }else{
        labelnameTxt.style.display = "block";
    }
}


function validarEmail(){
    const emailRegex = /^[\w-\.]+@[\w-]+\.[\w-]{2,4}$/;
    email = document.getElementById("email");
    emaiLabel = document.getElementById("email-label-id");
    if(!emailRegex.test(email.value)){
        emaiLabel.style.display = "block";
    }
    else {
        emaiLabel.style.display = "none";
    }
}


function compararEmail() {
    email = document.getElementById("email");
    confirmEmail = document.getElementById("emailConfirm");
    labelEmailConfirm = document.getElementById("labelEmailConfirm");

    if(email.value === confirmEmail.value){
        labelEmailConfirm.style.display = "none";
    }else{
        labelEmailConfirm.style.display = "block";
    }
}


function validarSenha() {
    passwordId = document.getElementById("passwordId").value;
    labelPassword = document.getElementById("required-label-pass-len");
    if(passwordId.length > 5){
        labelPassword.style.display = "none";

    }else{
        labelPassword.style.display = "block";
    }
}


function compararSenhas(){

    const password = document.getElementById("passwordId");
    const passwordConfirm = document.getElementById("passwordConfirm");
    const labelPassword = document.getElementById("required-label-pass");

    if (password.value === passwordConfirm.value) {
        labelPassword.style.display = "none";}
    else if(password.value !== passwordConfirm.value) {
        labelPassword.style.display = "block";}
}