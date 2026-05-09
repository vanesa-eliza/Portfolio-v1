document.getElementById("loginForm").addEventListener("submit", function(event){

    const username = document.getElementById("username");
    const password = document.getElementById("password");

    if(username.value.trim() ===""){
        event.preventDefault();
        
        username.style.border = "2px solid red";
        username.placeholder = "Enter an email";
    }else {
        username.style.border = "";
        username.placeholder = "Email";
    }

    if(password.value.trim() ===""){
        event.preventDefault();
        
        password.style.border = "2px solid red";
        password.placeholder = "Enter a password";
    }else {
        password.style.border = "";
        password.placeholder = "Password";
    }
});