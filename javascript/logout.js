document.getElementById("logout").addEventListener("click", function(event){
    const userConfirmed = confirm('Are you sure you want to log out?');

    if(!userConfirmed){
        event.preventDefault();
    }
});
