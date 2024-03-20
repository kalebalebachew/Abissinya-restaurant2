let downArrow = document.querySelectorAll('.down-arrow');
downArrow.forEach(arrow => {
    arrow.addEventListener('click', function(){
        let parent = this.parentNode
        let currentMenu = parent.nextElementSibling
        currentMenu.classList.toggle('invisible');
    })
});
let cartBtn = document.querySelector('#cart-logo');
let cartPage = document.querySelector('#cart');
let cartCloseBtn = document.querySelector('#cart-close')
cartBtn.addEventListener('click', ()=>{
    cartPage.classList.remove('invisible')
})
cartCloseBtn.addEventListener('click',()=>{
    cartPage.classList.add('invisible')
})