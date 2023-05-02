var MenuBurger = document.querySelector('.MenuBurger');
var MenuNav = document.querySelector('.NavMenu');

MenuBurger.addEventListener('click',()=>{ /* callback fl */
    MenuNav.classList.toggle('cacher'); 
})
