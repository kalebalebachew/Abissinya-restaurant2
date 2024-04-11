<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet" />
    <title>Login Page</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class="font-poppins">
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <div class="flex items-center flex-col">
                <img
                    src="./images/abyssinia-favicon-black.png"
                    alt=""
                    class="w-20" />
                <h1 class="text-4xl text-primary">አቢሲኒያ</h1>
            </div>
          <h2 class="mt-10 text-center text-2xl font-medium leading-9 tracking-tight text-gray-900">Sign in to your admin account</h2>
        </div>
      
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
          <form class="space-y-6" action="#" method="POST">
            <div>
              <label for="email" class="block text-gray-900 font-medium">Email address</label>
              <div class="mt-2">
                <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 px-4 text-gray-900 shadow-sm placeholder:text-gray-400 sm:text-sm sm:leading-6 focus-visible:outline-none focus:ring-emerald-600 ring-gray-300 ring-2">
              </div>
            </div>
            <div>
              <div class="flex items-center justify-between">
                <label for="password" class="block font-medium leading-6 text-gray-900">Password</label>
              </div>
              <div class="mt-2">
                <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 px-4 text-gray-900 shadow-sm placeholder:text-gray-400 sm:text-sm sm:leading-6 focus-visible:outline-none focus:ring-emerald-600 ring-gray-300 ring-2">
              </div>
            </div>
            <div >
              <button type="submit" class="flex w-full justify-center rounded-md bg-emerald-800 px-3 py-2 leading-6 text-white shadow-sm hover:bg-emerald-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2">Sign in</button>
            </div>
          </form>
        </div>
      </div>
</body>
</html>
