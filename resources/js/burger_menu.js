
let nav = document.getElementById('nav');
let menu = document.getElementById('menu');

let button = document.querySelector('.burger');
let apasat = 0;

button.addEventListener('click',function(){
    if(apasat == 0)
    {

        //  nav.classList.remove('nav_bar');
         nav.classList.add('nav_mobile');

        //  menu.classList.remove('menu');
         menu.classList.add('menu_mobile');
         apasat = 1;
     }
     else{
        //nav.classList.add('nav_bar');
          nav.classList.remove('nav_mobile');

         //menu.classList.add('menu');
         menu.classList.remove('menu_mobile');
         apasat = 0;
     }
   
});



