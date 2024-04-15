<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poppins:wght@500&display=swap"
        rel="stylesheet">

    <title>abissinya restaurant</title>
    @vite('css/output.css')
    @vite('resources/js/app.js')
    @vite('resources/js/script.js')
</head>

<body class="min-h-screen font-poppins bg-tertiary">
    <header class="fixed top-0 w-full bg-tertiary">
        <section id="desktop-menu" class="sm:w-4/5 mx-auto flex justify-between sm:p-4 items-center sticky top-0">
            <div class="flex items-center">
                <img src="./images/abyssinia-favicon-black.png" alt="" class="w-20" />
                <a href = "#home">
                    <<h1 class="text-4xl text-primary">አቢሲኒያ</h1>
                </a>
            </div>
            <nav id="mobileNav" class="lg:text-2xl lg:block space-x-12 sml:page-navigation sm:hidden"
                data-visible="false">
                <a href="#home"
                    class="hover:text-primary transition duration-300 text-white sm:hidden  links">Home</a>
                <a href="#about" class="hover:text-primary transition duration-300 text-white links">about</a>
                <a links href="#menu" class="hover:text-primary transition duration-300 text-white links">menu</a>
                <a href="#reservation"
                    class="hover:text-primary transition duration-300 text-white links">reservation</a>
                <a href="#contact-us" class="hover:text-primary transition duration-300 text-white links">contact us</a>
            </nav>
            <div id="cartButton"
                class="flex items-center sm:space-x-4 text-4xl sm:text-3xl font-medium  text-primary p-4 sm:p-2 fixed sm:static bottom-6 right-6 rounded-full sm:rounded-none">
                <i class="fa-solid fa-cart-shopping cursor-pointer"></i>
            </div>
            <button id="toggleBtn" class="lg:hidden z-20" aria-expanded="false">
                <i class="fa-solid fa-bars text-white text-4xl" id="icon"></i>
            </button>
        </section>
    </header>
    <main id="container">
        <section id="home"
            class="bg-[url('https://assets.website-files.com/63d0c13bf294b9ad2ad7a1f0/63fc8f011df7042b653ee41c_hero-image-1-1.jpg')] bg-center bg-cover min-h-screen flex items-center">
            <div class="sm:w-4/5 mx-auto">
                <article class="sm:w-1/2 p-4">
                    <h1 class="text-5xl text-white font-medium sm:text-6xl mb-8">
                        Delicious and Mouth <br />
                        Watering Taste
                    </h1>
                    <h2 class="text-xl text-secondary mb-8 w-3/4 sm:w-full">
                        Discover the essence of Ethiopia at Abysinia <br />
                        where tradition meets culinary excellence.
                    </h2>
                    <div class="flex space-x-8">
                        <a href = "#menu">
                            <button
                                class="text-xl text-white border py-4 px-6 hover:bg-primary bg-transparent border-white transition duration-300 hover:-translate-y-2 hover:border-primary whitespace-nowrap">
                                Order Now
                            </button>
                        </a>
                        <a href = "#reservation">
                            <button
                                class="text-xl text-white border py-4 px-6 hover:bg-primary bg-transparent border-white transition duration-300 hover:-translate-y-2 hover:border-primary whitespace-nowrap">
                                Book a Table
                            </button>
                        </a>
                    </div>
                </article>
            </div>
        </section>
        
        <section id="cart"
            class="w-11/12 sm:w-4/6 lg:w-1/2 lg:right-8 lg:left-auto lg:transform-none fixed p-4 top-32 left-1/2 -translate-x-1/2 bg-tertiary hidden xl:w-1/3 2xl:w-1/4">
            <h2 class="text-2xl text-center text-white pb-4" a>Your Cart</h2>
            <button class="open-close text-2xl text-white btn-popUp absolute top-4 right-2" id="cart-close">
                <i class="fa-solid fa-xmark"></i>
            </button>
            <div class="selected-foods-only"></div>
            <div class="flex items-end flex-col">
                <p class="total-quantity text-white">
                    Total number of foods:
                    <span class="total-quantity-number">0</span>
                </p>
                <p class="total-price text-white">
                    Total Price: <span class="total-price-number">0.00</span> ETB
                </p>
            </div>
            <form action="" id="order" class="flex flex-col space-y-4">
                <input type="text" name="" id="" placeholder="Name"
                    class="p-2 placeholder:text-white bg-transparent border block w-full focus:border-none" />
                <input type="tel" name="" id="" placeholder="Phone"
                    class="p-2 placeholder:text-white bg-transparent border block w-full focus:border-none" />
                <input type="submit" value="Order" class="btn px-4 py-2 text-white bg-transparent border block" />
            </form>
        </section>
        <section id="about"
            class="bg-[url('https://assets.website-files.com/63d0c13bf294b9ad2ad7a1f0/63fc745af7ed692b2a0ce9c2_about-banner-bg-1-1.jpg')] pt-8">
            <div class="sm:w-4/5 mx-auto mt-8">
                <h1 class="text-white text-5xl text-center mb-14">
                    About Us
                </h1>
                <div class="flex justify-between items-start md:flex-col lg:flex-row">
                    <article class="sm:max-w-lg p-4">
                        <h2 class="text-white text-3xl font-medium sm:mb-12 sm:text-5xl mb-8">
                            Special Dishes for every Traditional Occasion
                        </h2>

                        <p class="sm:text-xl text-white mb-8">
                            Abyssinia is one of the most popular Restaurants
                            with unique & special menu made by our
                            passionate chefs with love and quality with can
                            impress you
                        </p>
                        <ul class="space-y-8 list-disc list-inside marker:text-primary marker:text-3xl pl-4">
                            <li>
                                <h3 class="text-white text-2xl mb-4 font-medium inline-block">
                                    our journey from 2002
                                </h3>
                                <p class="text-white">
                                    abissinya is started at
                                    <span class="text-primary">2019</span>
                                    of the most popular Restaurant & special
                                    menu made by our passionate chefs very
                                    quality and quality with can impress you
                                    with the please
                                </p>
                            </li>
                            <li>
                                <h3 class="text-white text-2xl mb-4 font-medium inline-block">
                                    Awards we've won
                                </h3>
                                <p class="text-white">
                                    Raising Star Restaurant Award at
                                    <span class="text-primary">2022</span>
                                    the most popular Restaurant & special
                                    menu made by our passionate chefs very
                                    quality and quality with can impress you
                                    within the pleaser with customers review
                                    and valuable time
                                </p>
                            </li>
                        </ul>
                    </article>
                    <img src="https://assets.website-files.com/63d0c13bf294b9ad2ad7a1f0/64006ae110a9c9671c72eb05_about-2-1.png"
                        alt="food-picture" class="hidden md:block" />
                </div>
            </div>
        </section>
        <section id="menu"
            class="bg-[url('https://assets.website-files.com/63d0c13bf294b9ad2ad7a1f0/63fd8f7f5fd495a215ee535e_ecommerce-menu-bg-1.jpg')] bg-center bg-cover pt-8">
            <div class="sm:w-4/5 mx-auto pt-8">
                <h1 class="text-white text-5xl text-center mb-16">
                    Our Menu
                </h1>
                <div class="flex flex-wrap gap-x-4 justify-center gap-y-4 px-4" id="menu-buttons">
                    <button
                        class="text-xl text-white border py-4 px-6 bg-transparent border-white transition duration-300 hover:-translate-y-2 whitespace-nowrap"
                        role="tab" aria-controls="breakfast" aria-selected="true">
                        Breakfast
                    </button>
                    <button
                        class="text-xl text-white border py-4 px-6 bg-transparent border-white transition duration-300 hover:-translate-y-2 whitespace-nowrap"
                        role="tab" aria-controls="lunch" aria-selected="false">
                        Lunch
                    </button>
                    <button
                        class="text-xl text-white border py-4 px-6 bg-transparent border-white transition duration-300 hover:-translate-y-2 whitespace-nowrap"
                        role="tab" aria-controls="brunch" aria-selected="false">
                        Brunch
                    </button>
                    <button
                        class="text-xl text-white border py-4 px-6 bg-transparent border-white transition duration-300 hover:-translate-y-2 whitespace-nowrap"
                        role="tab" aria-controls="dinner" aria-selected="false">
                        Dinner
                    </button>
                    <button
                        class="text-xl text-white border py-4 px-6 bg-transparent border-white transition duration-300 hover:-translate-y-2 whitespace-nowrap"
                        role="tab" aria-controls="drinks" aria-selected="false">
                        Drinks
                    </button>
                </div>
                <div class="grid mt-16">
                    <div class="sm:hidden flex items-center px-4">
                        <i class="fa-solid fa-angles-left text-primary text-4xl sm:hidden" id="prevBtn"></i>
                        <div id="displayed-food">
                            @foreach ($menu as $menuItem)
                                <article class="flex flex-col gap-y-4 p-4 bg-tertiary">
                                    <img src="https://assets.website-files.com/63d61449103cc0c595394427/63f04a2cb50e555f9bdf6ea0_healthy-vegan-salad.png"
                                        alt="" />
                                    <h2 class="text-white text-xl it-name">
                                        {{ $menuItem['food_name'] }}
                                    </h2>
                                    <p class="text-secondary">
                                        Pieces of injera mixed with lamb, slow cooked with mild sauce and spiced butter
                                    </p>
                                    <div class="flex justify-between border-t pt-4">
                                        <p class="text-white"> <span class="it-price">{{ $menuItem['price'] }}</span>
                                            ETB
                                        </p>
                                        <button>
                                            <i class="fa-solid fa-cart-shopping text-white"></i>
                                        </button>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                        <i class="fa-solid fa-angles-right text-4xl text-primary sm:hidden" id="nextBtn"></i>
                    </div>
                    <div class="sm:grid grid-cols-1 auto-cols-fr sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 sm:gap-8 w-5/6 mx-auto hidden"
                        id="food-container">
                        @foreach ($menu as $menuItem)
                            <article class="flex flex-col gap-y-4 p-4 bg-tertiary">
                                <img src="https://assets.website-files.com/63d61449103cc0c595394427/63eda38e387ec16504f371ed_italian-shrimp-pasta.png"
                                    alt="Food Photo" />
                                <h2 class="text-white text-xl it-name">
                                    {{ $menuItem['food_name'] }}
                                </h2>
                                <p class="text-secondary">
                                    Pieces of injera mixed with lamb, slow cooked with mild sauce and spiced butter
                                </p>
                                <div class="flex justify-between border-t pt-4">
                                    <p class="text-white"> <span class="it-price">{{ $menuItem['price'] }}</span> ETB
                                    </p>
                                    <button class="addToCart">
                                        <i class="fa-solid fa-cart-shopping text-white"></i>
                                    </button>
                                </div>
                            </article>
                        @endforeach

                    </div>
                </div>
            </div>
        </section>
        <section id="reservation" class="pt-8">
            <div class="sm:w-4/5 mx-auto pt-8">
                <h1 class="text-white text-5xl text-center mb-16">
                    Reservation
                </h1>
                <div class="md:grid grid-cols-2 lg:gap-x-32">
                    <div class="p-4">
                        <h2 class="text-white text-4xl font-medium sm:mb-12 sm:text-5xl mb-8">
                            Book & Enjoy with your private Table
                        </h2>

                        <form method="POST" action="{{ route('reserve.reserveTable') }}" class="space-y-8">
                            @csrf

                            <div class="grid grid-cols-2 gap-x-4 gap-y-8">
                                <div>
                                    <label for="customer_name"
                                        class="text-sm block font-medium text-white">Name</label>
                                    <input type="text" name="customer_name" id="customer_name"
                                        placeholder="Enter your name" required value="{{ old('customer_name') }}"
                                        class="p-4 placeholder:text-white bg-transparent border block w-full focus:border-none text-white" />
                                </div>
                                <div>
                                    <label for="customer_phone" class="text-sm block font-medium text-white">Phone
                                        Number</label>
                                    <input type="tel" name="customer_phone" id="customer_phone"
                                        placeholder="Enter phone number" required value="{{ old('customer_phone') }}"
                                        class="p-4 placeholder:text-white bg-transparent border block text-white" />
                                </div>
                            </div>

                            <div class="grid grid-cols-2 gap-x-4 gap-y-8">
                                <div>
                                    <label for="table_number" class="text-sm block font-medium text-white">No. of
                                        Guests</label>
                                    <input type="number" name="table_number" id="table_number" min="1"
                                        placeholder="Number of guests" required value="{{ old('table_number') }}"
                                        class="p-4 placeholder:text-white bg-transparent border block text-white" />
                                </div>
                                <div class="flex flex-col">
                                    <label for="time" class="text-sm block font-medium text-white">Time</label>
                                    <input type="text" name="time" id="time"
                                        placeholder="Enter time (e.g., 08:00 PM)" required value="{{ old('time') }}"
                                        class="p-4 placeholder:text-white border block w-full bg-transparent text-white" />
                                </div>
                            </div>

                            <div class="grid grid-cols-2 gap-x-4 gap-y-8">
                                <div class="flex flex-col">
                                    <label for="day" class="text-sm block font-medium text-white">Date</label>
                                    <input type="text" name="day" id="day"
                                        placeholder="Enter date (e.g., 2024-04-20)" required
                                        value="{{ old('day') }}"
                                        class="p-4 placeholder:text-white border block w-full bg-transparent text-white" />
                                </div>
                            </div>

                            <input type="submit" value="Book a Table"
                                class="p-4 text-white bg-transparent border block hover:bg-primary" />
                        </form>



                    </div>
                    <div class="p-4 flex justify-end">
                        <img src="https://www.svgrepo.com/show/43182/restaurant-menu.svg"
                            alt="picture of booked table" class="hidden md:block" />
                    </div>
                </div>
            </div>
        </section>
        <section id="contact-us"
            class="bg-[url('https://assets.website-files.com/63d0c13bf294b9ad2ad7a1f0/63fdd32ee2d30bbe08d0e085_contact-bg-1.jpg')]">
            <div class="sm:w-4/5 mx-auto pt-8 p-4">
                <h1 class="text-white text-5xl text-center mb-16">
                    Contact Us
                </h1>
                <ul
                    class="list-disc list-inside marker:text-primary marker:text-3xl pl-4 md:flex justify-between items-start">
                    <li class="mb-4">
                        <h3 class="text-white text-2xl mb-4 font-medium inline-block">
                            Visit our Restaurant
                        </h3>
                        <p class="text-white pl-10">
                            007 Hanan K Plaza <br />
                            22 Mazoria, Addis Ababa, Ethiopia
                        </p>
                    </li>
                    <li class="mb-4">
                        <h3 class="text-white text-2xl mb-4 font-medium inline-block">
                            You can Mail Us
                        </h3>
                        <p class="text-white pl-10">
                            natnaelmalike@gmail.com
                        </p>
                        <p class="text-white pl-10">
                            kalebalebachew@gmail.com
                        </p>
                    </li>
                    <li>
                        <h3 class="text-white text-2xl mb-4 font-medium inline-block">
                            Call Us
                        </h3>
                        <p class="text-white pl-10">+251 915025399</p>
                        <p class="text-white pl-10">+251 947827804</p>
                    </li>
                </ul>
                <div class="pt-12 sm:w-3/4 mx-auto sm: mt-8">
                    <h2 class="text-white text-4xl font-medium sm:mb-12 sm:text-5xl mb-8 text-center">
                        Send us a Message
                    </h2>
                    <form action="" class="space-y-8 pt-8">
                        <div class="grid grid-cols-2 gap-x-4 gap-y-8">
                            <input type="text" name="" id="" placeholder="Name"
                                class="p-4 placeholder:text-white bg-transparent border block text-white" />
                            <input type="tel" name="" id="" placeholder="Phone"
                                class="p-4 placeholder:text-white bg-transparent border block text-white" />
                            <input type="email" name="" id="" placeholder="Email"
                                class="p-4 placeholder:text-white border block w-full bg-transparent text-white" />
                            <input type="text" name="" id="" placeholder="Subject"
                                class="p-4 placeholder:text-white border block w-full bg-transparent text-white" />
                        </div>
                        <textarea name="" id="" placeholder="Message"
                            class="p-4 placeholder:text-white bg-transparent border block w-full sm:min-h-72 h-40 text-white"></textarea>
                        <input type="submit" value="Send Message"
                            class="p-4 text-white bg-transparent border block" />
                    </form>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="sm:w-4/5 mx-auto flex flex-col items-center mt-8 sm:flex-row sm:justify-between">
            <div class="flex flex-col justify-center items-center">
                <div class="flex items-center">
                    <img src="./images/abyssinia-favicon-black.png" alt="" class="w-16" />
                    <h1 class="text-3xl text-primary">አቢሲኒያ</h1>
                </div>
                <p class="text-secondary">
                    Discover the essence of Ethiopia at Abysinia
                </p>
                <ul class="flex gap-x-8 items-center mt-8">
                    <li>
                        <a href="http://www.facebook.com" class="text-white text-3xl" target="_blank">
                            <i class="fa-brands fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="http://www.twitter.com" class="text-white text-3xl" target="_blank">
                            <i class="fa-brands fa-x-twitter"></i></a>
                    </li>
                    <li>
                        <a href="http://www.instagram.com" class="text-white text-3xl" target="_blank">
                            <i class="fab fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="http://www.youtube.com" class="text-white text-3xl" target="_blank">
                            <i class="fab fa-youtube"></i></a>
                    </li>
                </ul>
            </div>

            <nav class="space-y-4 lg:block hidden">
                <a href="#about" class="hover:text-primary transition duration-300 text-secondary block">About</a>
                <a href="#menu" class="hover:text-primary transition duration-300 text-secondary block">Menu</a>
                <a href="#reservation"
                    class="hover:text-primary transition duration-300 text-secondary block">Reservation</a>
                <a href="#contact-us" class="hover:text-primary transition duration-300 text-secondary block">Contact
                    US</a>
            </nav>
            <ul class="mt-8 space-y-4">
                <li class="mb-4 text-secondary">
                    <i class="fa fa-map-marker mr-4"></i>007 Hanan K Plaza
                    <br />
                    22 Mazoria, Addis Ababa, Ethiopia
                </li>
                <li class="mb-4 text-secondary">
                    <p>
                        <i class="fa fa-envelope-open mr-4"></i>natnaelmalike@gmail.com
                    </p>
                    <p>
                        <i class="fa fa-envelope-open mr-4"></i>kalebalebachew@gmail.com
                    </p>
                </li>
                <li class="text-secondary">
                    <p><i class="fa fa-phone mr-4"></i>+251 915025399</p>
                    <p><i class="fa fa-phone mr-4"></i>+251 947827804</p>
                </li>
            </ul>
        </div>
        <p class="text-white text-center mt-8">
            <span class="text-primary">&copy;</span> All Rights Reserved.
        </p>
    </footer>
</body>

</html>
