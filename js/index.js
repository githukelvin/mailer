let inp = document.querySelectorAll("input");
let textarea = document.querySelectorAll("textarea");

inp.forEach((index)=>{
    let atr = index.getAttribute("type");
    if(atr != "submit"){
        index.addEventListener("click",()=>{
            index.classList.add("focus");
        })
    }
})