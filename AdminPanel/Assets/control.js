
let dashboardSec = document.querySelector(".dashboardSec");
let userSec = document.querySelector(".userSec");
let controlSec = document.querySelector(".controlSec");



userSec.style.display='none';
dashboardSec.style.display='block';
controlSec.style.display ="none";



// let userRef = document.querySelector(".userRef");
// let dashboardRef = document.querySelector(".dashboardRef");
// let controlRef = document.querySelector(".controlRef");

// controlRef.innerHTML = "Hello";


// controlSec.style.display ="none";
// userSec.style.display='none';




// con ()=>{
//     alert(123);

// });

// userRef.addEventListener('click',()=>{
//    dashboardSec.style.display='none';
//    userSec.style.display='block';
//    controlSec.style.display ="none";
// });

// controlRef.addEventListener("click", ()=>{
    
//     dashboardSec.style.display='none';
//     userSec.style.display='none';
//     controlSec.style.display ="block";

// });

function dashboard (){
    
    userSec.style.display='none';
    dashboardSec.style.display='block';
    controlSec.style.display ="none";
}
function user (){
    
    userSec.style.display='block';
    dashboardSec.style.display='none';
    controlSec.style.display ="none";
}

function control (){
    
    userSec.style.display='none';
    dashboardSec.style.display='none';
    controlSec.style.display ="block";
}


