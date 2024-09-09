document.addEventListener('DOMContentLoaded', function() {
    
    const signInButton = document.getElementById("signInButton");
    const signUpButton = document.getElementById("signUpButton");
    const signIn = document.getElementById("signin");
    const signUp = document.getElementById("signup");

    signUpButton.addEventListener('click', function(){
        signIn.style.display="none";
        signUp.style.display="block";
    })

    signInButton.addEventListener('click', function(){
        signUp.style.display="none";
        signIn.style.display="block";
    })
});
