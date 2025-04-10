const menubtn=document.getElementById('menuBtn');
const menu=document.getElementById('menu');
menubtn.addEventListener('click',()=>{
    menu.classList.toggle("invisible");
    menu.classList.add('bg-red-500','text-white','h-screen','z-20');
});

// dropdown
const gt=document.getElementById('gt');
const drgt=document.getElementById('dr-gt');
gt.addEventListener('click',(e)=>{
    //e.preventDefault();
    drgt.classList.toggle('hidden');    
})

const dv = document.getElementById("dv");
const drdv = document.getElementById("dr-dv");
dv.addEventListener("click", (e) => {
  //e.preventDefault();
  drdv.classList.toggle("hidden");
});


const tc = document.getElementById("tc");
const drtc = document.getElementById("dr-tc");
tc.addEventListener("click", (e) => {
  //e.preventDefault();
  drtc.classList.toggle("hidden");
});