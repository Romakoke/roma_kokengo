const formTitle = document.getElementById("formTitle");
const loginOptions = document.getElementById("loginOptions");
const registerFields = document.getElementById("registerFields");
const submitButton = document.getElementById("submitButton");
const toggleRegister = document.getElementById("toggleRegister");
const formAction = document.getElementById("formAction");

toggleRegister.addEventListener("click", (event) => {
    event.preventDefault();
    const isRegistering = registerFields.style.display === "block";

    if (isRegistering) {
        formTitle.textContent = "Login";
        submitButton.textContent = "Login";
        registerFields.style.display = "none";
        loginOptions.style.display = "flex";
        toggleRegister.textContent = "Register";
        formAction.value = "login";
    } else {
        formTitle.textContent = "Register";
        submitButton.textContent = "Register";
        registerFields.style.display = "block";
        loginOptions.style.display = "none";
        toggleRegister.textContent = "Back to Login";
        formAction.value = "register";
    }
});
