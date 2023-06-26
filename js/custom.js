console.log("hello")

const menubtn = document.getElementById("menu-btn")
const resnav = document.getElementById("res-nav")
const cutbtn = document.getElementById("cut-btn")
const showmneu = ()=>{
resnav.style.display="block"
}
const hidemenu = ()=>{
    resnav.style.display="none"
}

let enrollBtn = document.getElementById("enroll-btn");
console.log(enrollBtn)
function enrolled(){
    enrollBtn.innerHTML="Enrolled";
}