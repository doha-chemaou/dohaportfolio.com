const links = document.querySelectorAll('.link'); 
const sections = document.querySelectorAll('section'); 

let activeLink = 0; 
console.log(links);
console.log(sections);

// link : l'élément courant 
// i : index commence à 0 
// foreach prend une fonction en parametre , soit prend le nom d'une fonction qui est définie ailleurs  soit elle prend ce qui est mis juste en dessous 
links.forEach((link, i) => {
    // console.log("i "+i);
    // console.log(link);
    link.addEventListener('click', () => {
        // console.log("here "+activeLink+ " "+i);
        if(activeLink != i){
            links[activeLink].classList.remove('active');
            // console.log(links);
            link.classList.add('active');
            // console.log(link);
            sections[activeLink].classList.remove('active');
            // console.log(sections);

            setTimeout(() => {
                activeLink = i;
                sections[i].classList.add('active');
            }, 1000);
        }
    })
    })

// skills   
const skillslevel = document.querySelectorAll('.skill-level'); 
const levels = document.querySelectorAll('p[id]');
const circles = document.querySelectorAll('div[id]');
console.log(skillslevel);
console.log("here");
console.log(levels);
console.log("hehet");
console.log(circles);
skillslevel.forEach((level,i)=>{
    console.log("here and there");
    console.log(level);
    let l = levels[i].getAttribute('id')  ;
    let o = circles[i].getAttribute('id');
    
    level.addEventListener('mouseover', () => {
        // level.classList.remove('p.level');  
      

        document.getElementById(l).style.display = "none";  
        document.getElementById(o).style.display = "block";

        // console.log(level);
    })

    level.addEventListener('mouseout', () => {
        // level.classList.remove('p.level');    
        document.getElementById(l).style.display = "block"; 
        document.getElementById(o).style.display = "none";

        // console.log(level);
    })
})

// console.log(links);
// console.log(sections);
