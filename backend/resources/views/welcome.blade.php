<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
            <script src="./js/index.js" defer></script>
        <title>Restaurant Template</title>
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
    </head>
    <body class="min-h-screen font-poppins relative bg-tertiary">
        <header class="absolute top-0 w-full">
            <section
                id="desktop-menu"
                class="sm:w-4/5 mx-auto flex justify-between p-4 items-center sticky top-0">
                <div class="flex items-center">
                    <img
                        src="./images/abyssinia-favicon-black.png"
                        alt=""
                        class="w-20" />
                    <h1 class="text-4xl text-primary">አቢሲኒያ</h1>
                </div>
                <nav class="lg:text-2xl hidden lg:block space-x-8">
                    <a
                        href="#about"
                        class="hover:text-primary transition duration-300 font-medium text-white"
                        >About</a
                    >
                    <a
                        href="#menu"
                        class="hover:text-primary transition duration-300 font-medium text-white"
                        >Menu</a
                    >
                    <a
                        href="#reservation"
                        class="hover:text-primary transition duration-300 font-medium text-white"
                        >Reservation</a
                    >
                    <a
                        href="#contact-us"
                        class="hover:text-primary transition duration-300 font-medium text-white"
                        >Contact US</a
                    >
                </nav>
                <div
                    class="flex items-center sm:space-x-4 text-4xl sm:text-3xl font-medium bg-primary text-white p-4 sm:p-2 fixed sm:static bottom-6 right-6 rounded-full sm:rounded-none">
                    <h2 class="sm:block hidden">Cart</h2>
                    <i class="fa-solid fa-cart-shopping"></i>
                </div>
                <button class="lg:hidden">
                    <i class="fa-solid fa-bars text-white text-4xl"></i>
                </button>
            </section>
            <section id="mobile-menu"></section>
        </header>
        <main>
            <section
                id="home"
                class="bg-[url('https://assets.website-files.com/63d0c13bf294b9ad2ad7a1f0/63fc8f011df7042b653ee41c_hero-image-1-1.jpg')] bg-center bg-cover min-h-screen flex items-center">
                <div class="sm:w-4/5 mx-auto">
                    <article class="sm:w-1/2 p-4">
                        <h1
                            class="text-5xl text-white font-medium sm:text-6xl mb-8">
                            Delicious and Mouth <br />
                            Watering Taste
                        </h1>
                        <h2 class="text-xl text-secondary mb-8 w-3/4 sm:w-full">
                            Discover the essence of Ethiopia at Abysinia <br />
                            where tradition meets culinary excellence.
                        </h2>
                        <div class="flex space-x-8">
                            <button
                                class="text-xl text-white border py-4 px-6 hover:bg-primary bg-transparent border-white transition duration-300 hover:-translate-y-2 hover:border-primary whitespace-nowrap">
                                Order Now
                            </button>
                            <button
                                class="text-xl text-white border py-4 px-6 hover:bg-primary bg-transparent border-white transition duration-300 hover:-translate-y-2 hover:border-primary whitespace-nowrap">
                                Book a Table
                            </button>
                        </div>
                    </article>
                </div>
            </section>
            <section
                id="about"
                class="bg-[url('https://assets.website-files.com/63d0c13bf294b9ad2ad7a1f0/63fc745af7ed692b2a0ce9c2_about-banner-bg-1-1.jpg')] pt-8">
                <div class="sm:w-4/5 mx-auto mt-8">
                    <h1 class="text-white text-5xl text-center mb-14">
                        About Us
                    </h1>
                    <div
                        class="flex justify-between items-start md:flex-col lg:flex-row">
                        <article class="sm:max-w-lg p-4">
                            <h2
                                class="text-white text-3xl font-medium sm:mb-12 sm:text-5xl mb-8">
                                Special Dishes for every Traditional Occasion
                            </h2>

                            <p class="sm:text-xl text-white mb-8">
                                Abyssinia is one of the most popular Restaurants
                                with unique & special menu made by our
                                passionate chefs with love and quality with can
                                impress you
                            </p>
                            <ul
                                class="space-y-8 list-disc list-inside marker:text-primary marker:text-3xl pl-4">
                                <li>
                                    <h3
                                        class="text-white text-2xl mb-4 font-medium inline-block">
                                        Our Journey from 2002
                                    </h3>
                                    <p class="text-white">
                                        Abyssinia is Started at
                                        <span class="text-primary">2019</span>
                                        of the most popular Restaurant & special
                                        menu made by our passionate chefs very
                                        quality and quality with can impress you
                                        with the please
                                    </p>
                                </li>
                                <li>
                                    <h3
                                        class="text-white text-2xl mb-4 font-medium inline-block">
                                        Awards we Wins
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
                        <img
                            src="https://assets.website-files.com/63d0c13bf294b9ad2ad7a1f0/64006ae110a9c9671c72eb05_about-2-1.png"
                            alt="food-picture"
                            class="hidden md:block" />
                    </div>
                </div>
            </section>
            <section
                id="menu"
                class="bg-[url('https://assets.website-files.com/63d0c13bf294b9ad2ad7a1f0/63fd8f7f5fd495a215ee535e_ecommerce-menu-bg-1.jpg')] bg-center bg-cover pt-8">
                <div class="sm:w-4/5 mx-auto pt-8">
                    <h1 class="text-white text-5xl text-center mb-16">
                        Our Menu
                    </h1>
                    <div class="flex flex-wrap gap-x-4 justify-center gap-y-4">
                        <button
                            class="text-xl text-white border py-4 px-6 hover:bg-primary bg-transparent border-white transition duration-300 hover:-translate-y-2 hover:border-primary whitespace-nowrap">
                            All
                        </button>
                        <button
                            class="text-xl text-white border py-4 px-6 hover:bg-primary bg-transparent border-white transition duration-300 hover:-translate-y-2 hover:border-primary whitespace-nowrap">
                            Breakfast
                        </button>
                        <button
                            class="text-xl text-white border py-4 px-6 hover:bg-primary bg-transparent border-white transition duration-300 hover:-translate-y-2 hover:border-primary whitespace-nowrap">
                            Lunch
                        </button>
                        <button
                            class="text-xl text-white border py-4 px-6 hover:bg-primary bg-transparent border-white transition duration-300 hover:-translate-y-2 hover:border-primary whitespace-nowrap">
                            Brunch
                        </button>
                        <button
                            class="text-xl text-white border py-4 px-6 hover:bg-primary bg-transparent border-white transition duration-300 hover:-translate-y-2 hover:border-primary whitespace-nowrap">
                            Dinner
                        </button>
                        <button
                            class="text-xl text-white border py-4 px-6 hover:bg-primary bg-transparent border-white transition duration-300 hover:-translate-y-2 hover:border-primary whitespace-nowrap">
                            Drinks
                        </button>
                    </div>
                    <div class="grid mt-16">
                        <div id="displayed-food" class="sm:hidden flex items-center">
                            <i class="fa-solid fa-angles-left text-primary text-4xl sm:hidden" id="prevBtn"></i>
                            <article
                            class="flex flex-col gap-y-4 p-4 bg-tertiary">
                            <img
                                src="https://assets.website-files.com/63d61449103cc0c595394427/63f04b09848cba5f1e062951_garlic-shrimp-spaghetti.png"
                                alt="" />
                            <h2 class="text-white text-xl">
                                Garlic Shrimp Spaghetti
                            </h2>
                            <p class="text-secondary">
                                Rice Spagherri, Latus, Shrimp, Onion Lemon,
                                Garlic, Coriander
                            </p>
                            <div class="flex justify-between border-t pt-4">
                                <p class="text-white">200.00 ETB</p>
                                <button>
                                    <i
                                        class="fa-solid fa-cart-shopping text-white"></i>
                                </button>
                            </div>
                            
                        </article>
                        <i class="fa-solid fa-angles-right  text-4xl text-primary sm:hidden" id="nextBtn"></i>
                        </div>
                        <div
                            class="sm:grid grid-cols-1 auto-cols-fr sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 sm:gap-8 w-11/12 mx-auto hidden sm:block" id="food-container">
                            
                            <!-- <article
                                class="flex flex-col gap-y-4 p-4 mx-auto bg-tertiary">
                                <img
                                    src="https://assets.website-files.com/63d61449103cc0c595394427/63f04b09848cba5f1e062951_garlic-shrimp-spaghetti.png"
                                    alt="" />
                                <h2 class="text-white text-xl">
                                    Garlic Shrimp Spaghetti
                                </h2>
                                <p class="text-secondary">
                                    Rice Spagherri, Latus, Shrimp, Onion Lemon,
                                    Garlic, Coriander
                                </p>
                                <div class="flex justify-between border-t pt-4">
                                    <p class="text-white">200.00 ETB</p>
                                    <button>
                                        <i
                                            class="fa-solid fa-cart-shopping text-white"></i>
                                    </button>
                                </div>
                            </article>
                            <article
                                class="flex flex-col gap-y-4 p-4 mx-auto bg-tertiary">
                                <img
                                    src="https://assets.website-files.com/63d61449103cc0c595394427/63f04b09848cba5f1e062951_garlic-shrimp-spaghetti.png"
                                    alt="" />
                                <h2 class="text-white text-xl">
                                    Garlic Shrimp Spaghetti
                                </h2>
                                <p class="text-secondary">
                                    Rice Spagherri, Latus, Shrimp, Onion Lemon,
                                    Garlic, Coriander
                                </p>
                                <div class="flex justify-between border-t pt-4">
                                    <p class="text-white">200.00 ETB</p>
                                    <button>
                                        <i
                                            class="fa-solid fa-cart-shopping text-white"></i>
                                    </button>
                                </div>
                            </article>
                            <article
                                class="flex flex-col gap-y-4 p-4 mx-auto bg-tertiary">
                                <img
                                    src="https://assets.website-files.com/63d61449103cc0c595394427/63f04b09848cba5f1e062951_garlic-shrimp-spaghetti.png"
                                    alt="" />
                                <h2 class="text-white text-xl">
                                    Garlic Shrimp Spaghetti
                                </h2>
                                <p class="text-secondary">
                                    Rice Spagherri, Latus, Shrimp, Onion Lemon,
                                    Garlic, Coriander
                                </p>
                                <div class="flex justify-between border-t pt-4">
                                    <p class="text-white">200.00 ETB</p>
                                    <button>
                                        <i
                                            class="fa-solid fa-cart-shopping text-white"></i>
                                    </button>
                                </div>
                            </article>
                            <article
                                class="flex flex-col gap-y-4 p-4 mx-auto bg-tertiary">
                                <img
                                    src="https://assets.website-files.com/63d61449103cc0c595394427/63f04b09848cba5f1e062951_garlic-shrimp-spaghetti.png"
                                    alt="" />
                                <h2 class="text-white text-xl">
                                    Garlic Shrimp Spaghetti
                                </h2>
                                <p class="text-secondary">
                                    Rice Spagherri, Latus, Shrimp, Onion Lemon,
                                    Garlic, Coriander
                                </p>
                                <div class="flex justify-between border-t pt-4">
                                    <p class="text-white">200.00 ETB</p>
                                    <button>
                                        <i
                                            class="fa-solid fa-cart-shopping text-white"></i>
                                    </button>
                                </div>
                            </article>
                            <article
                                class="flex flex-col gap-y-4 p-4 mx-auto bg-tertiary">
                                <img
                                    src="https://assets.website-files.com/63d61449103cc0c595394427/63f04b09848cba5f1e062951_garlic-shrimp-spaghetti.png"
                                    alt="" />
                                <h2 class="text-white text-xl">
                                    Garlic Shrimp Spaghetti
                                </h2>
                                <p class="text-secondary">
                                    Rice Spagherri, Latus, Shrimp, Onion Lemon,
                                    Garlic, Coriander
                                </p>
                                <div class="flex justify-between border-t pt-4">
                                    <p class="text-white">200.00 ETB</p>
                                    <button>
                                        <i
                                            class="fa-solid fa-cart-shopping text-white"></i>
                                    </button>
                                </div>
                            </article> -->
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
                            <h2
                                class="text-white text-4xl font-medium sm:mb-12 sm:text-5xl mb-8">
                                Book & Enjoy with your private Table
                            </h2>
                            <form action="" class="space-y-8">
                                <input
                                    type="text"
                                    placeholder="Name"
                                    required
                                    class="p-4 placeholder:text-white bg-transparent border block w-full focus:border-none" />

                                <div class="grid grid-cols-2 gap-x-4 gap-y-8">
                                    <input
                                        type="tel"
                                        name=""
                                        id=""
                                        placeholder="Phone"
                                        class="p-4 placeholder:text-white bg-transparent border block text-white" />
                                    <input
                                        type="number"
                                        name=""
                                        id=""
                                        placeholder="No. of Guests"
                                        class="p-4 placeholder:text-white bg-transparent border block text-white" />
                                    <input
                                        type="text"
                                        name=""
                                        id=""
                                        placeholder="Time"
                                        class="p-4 placeholder:text-white border block w-full bg-transparent text-white" />
                                    <input
                                        type="text"
                                        name=""
                                        id=""
                                        placeholder="Date"
                                        class="p-4 placeholder:text-white border block w-full bg-transparent text-white" />
                                </div>
                                <textarea
                                    name=""
                                    id=""
                                    placeholder="Special Notes"
                                    class="p-4 placeholder:text-white bg-transparent border block w-full h-40 text-white"></textarea>
                                <input
                                    type="submit"
                                    value="Book a Table"
                                    class="p-4 text-white bg-transparent border block" />
                            </form>
                        </div>
                        <div class="p-4 flex justify-end">
                            <img
                                src="https://assets.website-files.com/63d0c13bf294b9ad2ad7a1f0/63f9f4d7fb4697d9922c4ab3_breakfast-banner.jpg"
                                alt="picture of booked table"
                                class="hidden md:block" />
                        </div>
                    </div>
                </div>
            </section>
            <section
                id="contact-us"
                class="bg-[url('https://assets.website-files.com/63d0c13bf294b9ad2ad7a1f0/63fdd32ee2d30bbe08d0e085_contact-bg-1.jpg')]">
                <div class="sm:w-4/5 mx-auto pt-8 p-4">
                    <h1 class="text-white text-5xl text-center mb-16">
                        Contact Us
                    </h1>
                    <ul
                        class="list-disc list-inside marker:text-primary marker:text-3xl pl-4 md:flex justify-between items-start">
                        <li class="mb-4">
                            <h3
                                class="text-white text-2xl mb-4 font-medium inline-block">
                                Visit our Restaurant
                            </h3>
                            <p class="text-white pl-10">
                                007 Hanan K Plaza <br />
                                22 Mazoria, Addis Ababa, Ethiopia
                            </p>
                        </li>
                        <li class="mb-4">
                            <h3
                                class="text-white text-2xl mb-4 font-medium inline-block">
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
                            <h3
                                class="text-white text-2xl mb-4 font-medium inline-block">
                                Call Us
                            </h3>
                            <p class="text-white pl-10">+251 915025399</p>
                            <p class="text-white pl-10">+251 947827804</p>
                        </li>
                    </ul>
                    <div class="pt-12 sm:w-3/4 mx-auto sm: mt-8">
                        <h2
                            class="text-white text-4xl font-medium sm:mb-12 sm:text-5xl mb-8 text-center">
                            Send us a Message
                        </h2>
                        <form action="" class="space-y-8 pt-8">
                            <div class="grid grid-cols-2 gap-x-4 gap-y-8">
                                <input
                                    type="text"
                                    name=""
                                    id=""
                                    placeholder="Name"
                                    class="p-4 placeholder:text-white bg-transparent border block text-white" />
                                <input
                                    type="tel"
                                    name=""
                                    id=""
                                    placeholder="Phone"
                                    class="p-4 placeholder:text-white bg-transparent border block text-white" />
                                <input
                                    type="email"
                                    name=""
                                    id=""
                                    placeholder="Email"
                                    class="p-4 placeholder:text-white border block w-full bg-transparent text-white" />
                                <input
                                    type="text"
                                    name=""
                                    id=""
                                    placeholder="Subject"
                                    class="p-4 placeholder:text-white border block w-full bg-transparent text-white" />
                            </div>
                            <textarea
                                name=""
                                id=""
                                placeholder="Message"
                                class="p-4 placeholder:text-white bg-transparent border block w-full sm:min-h-72 h-40 text-white"></textarea>
                            <input
                                type="submit"
                                value="Send Message"
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
                  <img
                      src="./images/abyssinia-favicon-black.png"
                      alt=""
                      class="w-16" />
                  <h1 class="text-3xl text-primary">አቢሲኒያ</h1>
              </div>
              <p class="text-secondary">
                  Discover the essence of Ethiopia at Abysinia
              </p>
              <ul class="flex gap-x-8 items-center mt-8">
                  <li>
                      <a
                          href="http://www.facebook.com"
                          class="text-white text-3xl"
                          target="_blank">
                          <i class="fa-brands fa-facebook"></i
                      ></a>
                  </li>
                  <li>
                      <a
                          href="http://www.twitter.com"
                          class="text-white text-3xl"
                          target="_blank">
                          <i class="fa-brands fa-x-twitter"></i
                      ></a>
                  </li>
                  <li>
                      <a
                          href="http://www.instagram.com"
                          class="text-white text-3xl"
                          target="_blank">
                          <i class="fab fa-instagram"></i
                      ></a>
                  </li>
                  <li>
                      <a
                          href="http://www.youtube.com"
                          class="text-white text-3xl"
                          target="_blank">
                          <i class="fab fa-youtube"></i
                      ></a>
                  </li>
              </ul>
          </div>

          <nav class="space-y-4 lg:block hidden">
            <a
                href="#about"
                class="hover:text-primary transition duration-300 text-secondary block"
                >About</a
            >
            <a
                href="#menu"
                class="hover:text-primary transition duration-300 text-secondary block"
                >Menu</a
            >
            <a
                href="#reservation"
                class="hover:text-primary transition duration-300 text-secondary block"
                >Reservation</a
            >
            <a
                href="#contact-us"
                class="hover:text-primary transition duration-300 text-secondary block"
                >Contact US</a
            >
        </nav>
          <ul
              class=" mt-8 space-y-4">
              <li class="mb-4 text-secondary">
                <i class="fa fa-map-marker mr-4"></i>007 Hanan K Plaza <br />
                  22 Mazoria, Addis Ababa, Ethiopia
              </li>
              <li class="mb-4 text-secondary">
                <p><i class="fa fa-envelope-open mr-4"></i>natnaelmalike@gmail.com </p>
                  <p><i class="fa fa-envelope-open mr-4"></i>kalebalebachew@gmail.com</p>
              </li>
              <li class="text-secondary">
                  <p><i class="fa fa-phone mr-4"></i>+251 915025399</p>
                  <p><i class="fa fa-phone mr-4"></i>+251 947827804</p>
              </li>
          </ul>
          </div>
           <p class="text-white text-center mt-8"> <span class="text-primary">&copy;</span> All Rights Reserved.</p>
        </footer>
    </body>
</html>