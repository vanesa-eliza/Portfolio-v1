// Add a validation for reset button
const button = document.getElementById('resetButton')
const form = document.getElementById('formBox');
const title = document.getElementById('title');
const text = document.getElementById('content');
const post = document.getElementById('submit');
const preview = document.getElementById('preview');

button.addEventListener('click', function(event) {
   
    // Show a confirmation pop-up
    const userConfirmed = confirm('Are you sure you want to proceed?');
    
    // Check the user's response
    if (!userConfirmed) {
        event.preventDefault();
    }else{
        //Reset the previous stylings
        title.style.border = '';
        title.placeholder = "Title";
        title.value = '';
        text.style.border = '';
        text.placeholder = "New post...";
        text.value = '';
    }
});

// Prevent the submission of the new blog if the fields are empty



function validateForm(event){

    let valid = true;
    if(title.value.trim()===""){
        title.style.border = "2px solid red";
        title.placeholder = "Title required";
        valid = false;
    }else{
        title.style.border = "";
        title.placeholder = "Title";
    }

    if(text.value.trim()===""){
        text.style.border = "2px solid red";
        text.placeholder = "Text required";
        valid = false;
    }else{
        text.style.border = "";
        text.placeholder = "New post...";
    }

    if(!valid){
        event.preventDefault();
    }
}

post.addEventListener('click',validateForm);
preview.addEventListener('click',validateForm);