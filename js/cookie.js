const cookieConatiner = document.querySelector('.cookie-container');
const cookieBtn = document.querySelector('.cookie-btn');

cookieBtn.addEventListener("click",()=>{
    cookieConatiner.classList.remove("active");
    localStorage.setItem("cookieConatinerAdd",true);
})

setTimeout(()=>{
    if(!localStorage.getItem("cookieConatinerAdd"))
    {

        cookieConatiner.classList.add("active")
    }
},2000)