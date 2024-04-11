<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
</head>
<body>
    <header class="fixed top-0 w-full bg-tertiary">
        <section
            id="desktop-menu"
            class="sm:w-4/5 mx-auto flex justify-between sm:p-4 items-center sticky top-0">
            <div class="flex items-center">
                <img
                    src="./images/abyssinia-favicon-black.png"
                    alt=""
                    class="w-20" />
                <h1 class="text-4xl text-primary">አቢሲኒያ</h1>
            </div>
            <nav id="mobileNav" class="lg:text-2xl lg:block space-x-8 sml:page-navigation sm:hidden" data-visible="false">
                <a
                    href="#home"
                    class="hover:text-primary transition duration-300 font-medium text-white sm:hidden  links"
                    >Home</a
                >
                <a
                    href="#about"
                    class="hover:text-primary transition duration-300 font-medium text-white links"
                    >About</a
                >
                <a links
                    href="#menu"
                    class="hover:text-primary transition duration-300 font-medium text-white links"
                    >Menu</a
                >
                <a
                    href="#reservation"
                    class="hover:text-primary transition duration-300 font-medium text-white links"
                    >Reservation</a
                >
                <a
                    href="#contact-us"
                    class="hover:text-primary transition duration-300 font-medium text-white links"
                    >Contact US</a
                >
            </nav>
            <div
            id="cartButton"
                class="flex items-center sm:space-x-4 text-4xl sm:text-3xl font-medium  text-primary p-4 sm:p-2 fixed sm:static bottom-6 right-6 rounded-full sm:rounded-none"> 
                <i class="fa-solid fa-cart-shopping cursor-pointer" ></i>
            </div>
            <button id="toggleBtn" class="lg:hidden z-20" aria-expanded="false">
                <i class="fa-solid fa-bars text-white text-4xl" id="icon"></i>
            </button>
        </section>
    </header>
    <section id="addFood"></section>
    <section id="foodList"></section>
</body>
</html>