// Menu List Functionality
let downArrow = document.querySelectorAll('.down-arrow');
downArrow.forEach(arrow => {
    arrow.addEventListener('click', function(){
        let parent = this.parentNode
        let currentMenu = parent.nextElementSibling
        currentMenu.classList.toggle('invisible');
    })
});

// Cart Button Functionality
let cartBtn = document.querySelector('#cart-logo');
let cartPage = document.querySelector('#cart');
let cartCloseBtn = document.querySelector('#cart-close')
let cartPageItems = document.querySelector('.selected-foods-only')
cartBtn.addEventListener('click', ()=>{
    cartPage.classList.remove('invisible')
})
cartCloseBtn.addEventListener('click',()=>{
    cartPage.classList.add('invisible')
})

// Add to Cart  Functionality
let addCartBtn = document.querySelectorAll('.addToCart');
addCartBtn.forEach(btns => {
    btns.addEventListener('click', function(){
        let item = this.parentNode
        let itemName = item.querySelector('.it-name').textContent
        let itemPrice = item.querySelector('.it-price').textContent
        appendElement(itemName,itemPrice)
    })
})

function appendElement(itemName, itemPrice) {
    cartPageItems.innerHTML += `<div class="selected-foods flex">
                            <h4 class="item-title">${itemName}</h4>
                            <p class="item-price">${itemPrice}</p>
                            <div class="item-quantity">
                            <button class="minus btn-popUp"><i class="fa-solid fa-minus"></i></button>
                            <span class="item-quantity-display">1</span>
                            <button class="plus btn-popUp"><i class="fa-solid fa-plus"></i></button>
                            </div>
                            <div class="delete-item"><i class="fa-solid fa-trash"></i></div>
                        </div>`
}
