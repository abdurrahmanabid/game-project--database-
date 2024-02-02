let login = document.querySelector(".loginSection");
let registration = document.querySelector(".registrationSection");
registration.style.display='none';
let getRegistration = document.querySelector(".getRegistration");
let getLogin = document.querySelector(".getLogin");
let count = 0;
getLogin.addEventListener('click',()=>{
    
        registration.style.display="none";
        login.style.display="block";
        
})

getRegistration.addEventListener('click',()=>{
    registration.style.display="block";
    login.style.display="none";
})