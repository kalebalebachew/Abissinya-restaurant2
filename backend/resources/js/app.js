import './bootstrap';



const foods = [
    {
        imgAddress:
            "https://assets.website-files.com/63d61449103cc0c595394427/63f04b09848cba5f1e062951_garlic-shrimp-spaghetti.png",
        title: "Garlic Shrimp Spaghetti",
        ingredients:
            "Rice Spagherri, Latus, Shrimp, Onion Lemon, Garlic, Coriander",
        price: 110.85,
    },
    {
        imgAddress:
            "https://assets.website-files.com/63d61449103cc0c595394427/63f04a2cb50e555f9bdf6ea0_healthy-vegan-salad.png",
        title: "Healthy Vegan Salad",
        ingredients:
            "Rice Spagherri, Latus, Shrimp, Onion Lemon, Garlic, Coriander",
        price: 112.85,
    },
    {
        imgAddress:
            "https://assets.website-files.com/63d61449103cc0c595394427/63f04907b5f34f7415108a6a_chicken-veg-rice-bowl.png",
        title: "Chicken Veg Rice Bowl",
        ingredients:
            "Rice Spagherri, Latus, Shrimp, Onion Lemon, Garlic, Coriander",
        price: 154.85,
    },
    {
        imgAddress:
            "https://assets.website-files.com/63d61449103cc0c595394427/63eda38e387ec16504f371ed_italian-shrimp-pasta.png",
        title: "Italian Shrimp Pasta",
        ingredients:
            "Rice Spagherri, Latus, Shrimp, Onion Lemon, Garlic, Coriander",
        price: 180.85,
    },
    { 
        imgAddress:
            "https://assets.website-files.com/63d61449103cc0c595394427/63e3332b2a73c83dda97a803_12.png",
        title: "Spaghetti With Shrimp ",
        ingredients:
            "Rice Spagherri, Latus, Shrimp, Onion Lemon, Garlic, Coriander",
        price: 100.85,
    },
];
let index = 0;
const initApp = () => {
    const nextBtn = document.querySelector("#nextBtn");
    const prevBtn = document.querySelector("#prevBtn");
    const displayedFood = document.querySelector("#displayed-food");
    const foodContainer = document.querySelector('#food-container');


    let hasNext = index < foods.length - 1;
    let hasPrev = index > 0;

    function handleNextClick() {
        if (hasNext) {
            index++;
            changeFood();
        }
    }
    function handlePrevClick() {
        if (hasPrev) {
            index--;
            changeFood();
        }
    }
    nextBtn.addEventListener("click", handleNextClick);
    prevBtn.addEventListener("click", handlePrevClick);
    function changeFood() {
        let foodItem = foods[index];
        displayedFood.innerHTML = `
            <article
                class="flex flex-col gap-y-4 p-4 bg-tertiary">
                <img
                    src=${foodItem.imgAddress}
                    alt="" />
                <h2 class="text-white text-xl">
                    ${foodItem.title}
                </h2>
                <p class="text-secondary">
                    ${foodItem.ingredients}
                </p>
                <div class="flex justify-between border-t pt-4">
                    <p class="text-white">${foodItem.price} ETB</p>
                    <button>
                        <i
                            class="fa-solid fa-cart-shopping text-white"></i>
                    </button>
                </div>
            </article>
            `;
        hasNext = index < foods.length - 1;
        hasPrev = index > 0;
    }
    function renderFoods(foods) {
    foods.forEach(foodItem => {
         foodContainer.innerHTML += `
            <article
                class="flex flex-col gap-y-4 p-4 bg-tertiary">
                <img
                    src=${foodItem.imgAddress}
                    alt="" />
                <h2 class="text-white text-xl">
                    ${foodItem.title}
                </h2>
                <p class="text-secondary">
                    ${foodItem.ingredients}
                </p>
                <div class="flex justify-between border-t pt-4">
                    <p class="text-white">${foodItem.price} ETB</p>
                    <button>
                        <i
                            class="fa-solid fa-cart-shopping text-white"></i>
                    </button>
                </div>
            </article>
            `;
    });
        
    }
    renderFoods(foods)
};
document.addEventListener("DOMContentLoaded", initApp);