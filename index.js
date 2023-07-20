let MenuBurger = document.querySelector('.MenuBurger');
let MenuNav = document.querySelector('.NavMenu');

MenuBurger.addEventListener('click',() => { /* callback fl */
    MenuNav.classList.toggle('cacher'); 
})
