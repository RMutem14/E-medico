const items = document.querySelectorAll(".liens");
const currentPage = window.location.pathname.split('/').pop();

items.forEach((lien)=>{
    const linkPage = lien.getAttribute("href").split("/").pop();
    // lien.forEach(item => item.classList.remove("active"));
    if(currentPage === linkPage){
        lien.classList.add("active");
    }
})


const burger = document.querySelector(".burger");
const nav = document.querySelector(".navigation")

burger.addEventListener("click",()=>{
    nav.classList.toggle("nav")
})