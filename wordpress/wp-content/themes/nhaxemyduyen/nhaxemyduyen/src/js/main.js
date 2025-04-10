document.addEventListener('DOMContentLoaded',()=>{
    const swapBtn=document.getElementById('swap');
    const inFrom=document.getElementById('infrom');
    const inTo=document.getElementById('inTo');
    swapBtn.addEventListener('click',()=>{
        const temp = inFrom.value;
        inFrom.value=inTo.value;
        inTo.value=temp;
    })
})

//back-to-top
document.addEventListener('DOMContentLoaded',()=>{
    const backtotop = document.getElementById("btn-back-to-top");
    window.addEventListener("scroll", () => {
      window.scrollY > 100
        ? backtotop.classList.remove("hidden")
        : backtotop.classList.add("hidden");

      backtotop.addEventListener("click", () => {
        window.scrollTo({
          top: 0,
          behavior: "smooth",
        });
      });
    });
})