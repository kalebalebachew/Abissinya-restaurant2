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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <title>Admin Page</title>

    @vite('css/output.css')
    @vite('resources/js/app.js')
    @vite('resources/js/adminScript.js')
    @vite('resources/js/script.js')
  
</head>

<body id = "#home" class="font-poppins bg-gray-200">
    
    <section id="sidebar" class="fixed top-0 left-0 bottom-0 w-72 bg-white">
        <a href="" class="flex items-center space-x-4">
            <img src="./images/abyssinia-favicon-black.png" alt="" class="w-16" />
            <h1 class="text-4xl text-primary">አቢሲኒያ </h1>
        </a>
        <ul class="mt-16">
            <li class="active-admin bg-transparent h-12 p-1 ml-1.5 rounded-l-[48px]" role="tab">
                <a href="#" class="flex items-center gap-2 pl-2 bg-white size-full rounded-[48px]">
                    <i class="fa-solid fa-house"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="bg-transparent h-12 p-1 ml-1.5 rounded-l-[48px]" role="tab">
                <a href="#menu" class="flex items-center gap-2 pl-2 bg-white size-full rounded-[48px]">
                    <i class="fa-solid fa-utensils"></i>
                    <span>Menu</span>
                </a>
            </li>
            <li class="bg-transparent h-12 p-1 ml-1.5 rounded-l-[48px]" role="tab">
                <a href="#orders" class="flex items-center gap-2 pl-2 bg-white size-full rounded-[48px]">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <span>Orders</span>
                </a>
            </li>
            <li class="bg-transparent h-12 p-1 ml-1.5 rounded-l-[48px]" role="tab">
                <a href="#reservations" class="flex items-center gap-2 pl-2 bg-white size-full rounded-[48px]">
                    <i class="fa-solid fa-table"></i>
                    <span>Reservations</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">
            <li class="bg-transparent h-12 p-1 ml-1.5 rounded-l-[48px]">
                <a href="#" class="flex items-center gap-2 pl-2 size-full rounded-[48px] bg-white">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </section>

    <section id="content" class="relative w-hor_wid left-72 rounded-tl-[40px] bg-transparent">
        <nav
            class="bg-white px-6 flex items-center sticky top-0 left-0 h-14 space-x-6 before:content[''] before:size-10 before:rounded-full before:left-0 before:absolute before:shadow-[-20px_-20px] before:text-white before:-bottom-10 justify-between">
            <i class="fa-solid fa-bars text-2xl"></i>
           
            <div class="flex gap-8 ml-8">
        
            </div>
        </nav>

        <main class="rounded-tl-[40px] px-9 py-6">
            <div class="head-title">
                <h1 class="text-4xl font-medium">Dashboard</h1>
            </div>

            {{--  --}}
           
            <div class="mt-8 space-y-8">
                <div class="rounded-2xl bg-white p-6 scroll-m-16" id="orders">
                    <h3 class="text-3xl font-medium">Orders</h3>
                    <div class="overflow-x-auto">
                        <table class="border-collapse min-w-[840px] mt-8 w-full">
                            <thead>
                                <tr>
                                    <th class="text-left p-2 border-b-2 whitespace-nowrap">
                                        User
                                    </th>
                                    <th class="text-left p-2 border-b-2 whitespace-nowrap">
                                        Phone
                                    </th>
                                    <th class="text-left p-2 border-b-2 whitespace-nowrap">
                                        Food
                                    </th>
                                    <th class="text-left p-2 border-b-2 whitespace-nowrap">
                                        Quantity
                                    </th>
                                
                                    <th class="text-left p-2 border-b-2 whitespace-nowrap">
                                        Date and Time
                                    </th>
                                   
                                </tr>
                            </thead>
                            @foreach ($orders as $order)
                            <tbody class="mt-12">
                              
                                    <tr class="hover:bg-slate-200">
                                       
                                        <td class="flex gap-4 items-center py-4 px-2">
                                            <i class="fa-solid fa-user-tie text-2xl"></i>
                                            <p>{{ $order['name'] }}</p>
                                        </td>
                                        <td class="py-4 px-2">
                                            {{ $order['phone_number'] }}
                                        </td>
                                        <td class="py-4 px-2">
                                            {{ $order['food_name'] }}
                                        </td>

                                        <td class="py-4 px-2">
                                            <span>{{ $order['quantity'] }}</span>
                                        </td>
                                        <td class="py-4 px-2">
                                            {{ $order['created_at'] }}
                                        </td>
                                       
                                    </tr>
                            

                            
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
             

                
           
                <div class="rounded-2xl bg-white p-6" id="reservations">
                    <h3 class="text-3xl font-medium">Reservations</h3>
                    <div class="overflow-x-auto">
                        <table class="border-collapse w-full mt-8">
                            <thead>
                                <tr>
                                    <th class="text-left p-2 whitespace-nowrap border-b-2">
                                        User
                                    </th>
                                    <th class="text-left p-2 whitespace-nowrap border-b-2">
                                        Phone
                                    </th>
                                    <th class="text-left p-2 whitespace-nowrap border-b-2">
                                        No. of Guests
                                    </th>
                                    <th class="text-left p-2 whitespace-nowrap border-b-2">
                                        Date and Time
                                    </th>
                                  
                                </tr>
                            </thead>
                            @foreach ($reservations as $reservation)
                            <tbody class="mt-12">
                                <tr class="hover:bg-slate-200">
                                   
                                    <td class="flex gap-4 items-center py-4 px-2">
                                        <i class="fa-solid fa-user-tie text-2xl"></i>
                                        <p>{{$reservation['customer_name']}}</p>
                                    </td>
                                    <td class="py-4 px-2">
                                        {{$reservation['customer_phone']}}
                                    </td>
                                    <td class="py-4 px-2">{{$reservation['table_number']}}</td>
                                    <td class="py-4 px-2">
                                        {{$reservation['created_at']}}
                                    </td>
                                  
                                </tr>
                                
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
              


            
                <div class="rounded-2xl bg-white p-6 overflow-x-auto" id="menu">
                    <div class="flex gap-12 justify-between">
                        <h3 class="text-3xl font-medium">Menu</h3>
                        <button
                            class="sm:text-xl bg-teal-600 text-white rounded-full px-4 py-1 text-xs whitespace-nowrap open-modal"
                            aria-controls="add-food">
                            Add Food
                        </button>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="border-collapse w-full mt-8">
                            <thead>
                                <tr>
                                    <th class="text-left p-2 whitespace-nowrap border-b-2">
                                        Food Name
                                    </th>
                                    <th class="text-left p-2 whitespace-nowrap border-b-2">
                                        Price
                                    </th>
                                  
                                    <th class="text-left p-2 whitespace-nowrap border-b-2">
                                        Edit
                                    </th>
                                    <th class="text-left p-2 whitespace-nowrap border-b-2">
                                        Delete
                                    </th>
                                </tr>
                            </thead>
                            @foreach ($menus as $menu)
                            <tbody class="mt-12">
                                <tr class="hover:bg-slate-200">
                                    <td class="flex gap-4 items-center py-4 px-2">
                                        <i class="fa-solid fa-utensils"></i>
                                        <p>{{$menu['food_name']}}</p>
                                    </td>
                                  
                                    <td class="py-4 px-2">
                                        <span> {{$menu['price']}}</span>ETB
                                    </td>
                                    <td class="py-4 px-2">
                                        <button aria-controls="edit-food" class="open-modal">
                                            <i class="fa-solid fa-pen-to-square text-2xl"></i>
                                        </button>
                                    </td>
                                    <td class="py-4 px-2">
                                        <button>
                                            <i class="fa-solid fa-trash text-2xl text-red-700"></i>
                                        </button>
                                    </td>
                                </tr>
                              
                               
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </section>

    <dialog id="addFood" class="w-11/12 sm:w-4/6 lg:w-1/2 p-4 bg-tertiary xl:w-1/3 2xl:w-1/4 modal-add">
        <h2 class="text-2xl text-center text-white pb-4" a>
            Add a new Food

           

        </h2>
        <button class="open-close text-2xl  text-white btn-popUp absolute top-4 right-2 close-modal"
            aria-controls="add-food">
            <i class="fa-solid fa-xmark"></i>
        </button>
        <div class="selected-foods-only"></div>
        
        <form action="{{ route('addMenu') }}" id="order" class="flex flex-col space-y-4" method="POST">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">
        
            
            <input type="text" name="food_name" id="food_name" placeholder="Name" value="{{ old('food_name') }}"
                class="p-2 placeholder:text-gray-400 bg-transparent border block w-full focus:border-none text-white" />
            <input type="tel" name="price" id="price" placeholder="Price" value="{{ old('price') }}"
                class="p-2 placeholder:text-gray-400 bg-transparent border block w-full focus:border-none text-white" />
            <input type="submit" value="Submit" class="btn px-4 py-2 text-white bg-transparent border block" />
          
        </form>
       
    </dialog>
    <dialog id="editFood" class="w-11/12 sm:w-4/6 lg:w-1/2 p-4 bg-tertiary xl:w-1/3 2xl:w-1/4 modal-edit">
        <h2 class="text-2xl text-center text-white pb-4" a>
            Editing This Food
        </h2>
        <button class="open-close text-2xl text-white btn-popUp absolute top-4 right-2 close-modal"
            aria-controls="edit-food">
            <i class="fa-solid fa-xmark"></i>
        </button>
        <div class="selected-foods-only"></div>
        <form action="" id="order" class="flex flex-col space-y-4" method="dialog">
            <input type="text" name="" id="" placeholder="Name"
                class="p-2 placeholder:text-gray-400 bg-transparent border block w-full focus:border-none text-white" />
            <input type="tel" name="" id="" placeholder="price"
                class="p-2 placeholder:text-gray-400 bg-transparent border block w-full focus:border-none text-white" />
            <input type="submit" value="Submit" class="btn px-4 py-2 text-white bg-transparent border block" />
        </form>
    </dialog>
</body>

</html>
