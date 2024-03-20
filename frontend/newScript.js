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

cartBtn.addEventListener('click', ()=>{
    cartPage.classList.remove('invisible')
})
cartCloseBtn.addEventListener('click',()=>{
    cartPage.classList.add('invisible')
})

// Add to Cart  Functionality
let cartPageItems = document.querySelector('.selected-foods-only')
let cartItems = [];
let totalQuantityEle = document.querySelector('.total-quantity-number');
let totalPriceEle = document.querySelector('.total-price-number')

function addItem(itemName,itemPrice) {
    const existingItem = cartItems.find(item => item.itemName === itemName);
    if (existingItem) {
      existingItem.quantity++;
    } else {
      cartItems.push({ itemName, itemPrice, quantity: 1 });
    }
}

function removeItem(index) {
    cartItems.splice(index,1)
    updateCart();
}

function addOne(index) {
    cartItems[index].quantity ++;
    updateCart()
}
function minusOne(index) {
    cartItems[index].quantity --;
    updateCart()
}
function updateCart() {
    let totalPrice = 0;
    let totalQuantity = 0;
    cartPageItems.innerHTML = ''
    cartItems.forEach((item, index)=>{
        cartPageItems.innerHTML += `<div class="selected-foods flex">
                            <h4 class="item-title">${item.itemName}</h4>
                            <p class="item-price">${item.itemPrice}</p>
                            <div class="item-quantity">
                            <button class="minus btn-popUp" onclick='minusOne(${index})'><i class="fa-solid fa-minus"></i></button>
                            <span class="item-quantity-display">${item.quantity}</span>
                            <button class="plus btn-popUp" onclick='addOne(${index})'><i class="fa-solid fa-plus"></i></button>
                            </div>
                            <div class="delete-item" onclick='removeItem(${index})'><i class="fa-solid fa-trash"></i></div>
                        </div>`
                        totalPrice += parseFloat(item.itemPrice) * item.quantity;
                        totalQuantity += item.quantity
    })
    totalQuantityEle.textContent = totalQuantity;
    totalPriceEle.textContent = totalPrice;
}

let addCartBtn = document.querySelectorAll('.addToCart');
addCartBtn.forEach(btns => {
    btns.addEventListener('click', function(){
        let item = this.parentNode
        let itemName = item.querySelector('.it-name').textContent
        let itemPrice = item.querySelector('.it-price .value').textContent
        addItem(itemName,itemPrice)
        updateCart();
    })
})
