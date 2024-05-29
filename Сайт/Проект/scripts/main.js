const login = document.getElementsByName("login")[0];
const password = document.getElementsByName("password")[0];

const error = document.querySelector('.error')

document.querySelector("button").addEventListener("click", (event) => {
    if (login.value === "")
    {
        error.innerHTML = ("Заполните логин");
        event.preventDefault()
    }
    else 
    {
        error.innerHTML = (login.value);
    }

    if (password.value === "")
    {
        error.innerHTML = ("Заполните пароль");
        event.preventDefault()
    }
    else 
    {
        error.innerHTML = (password.value);
    }
})