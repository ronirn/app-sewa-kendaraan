<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App-Sewa-Kendaraan</title>
    @vite('resources/css/app.css')
    <!-- Include your CSS files here -->
</head>
<body>
    <!-- Navbar -->
    <nav class="flex items-center justify-between flex-wrap bg-green-500 p-6">
    <div class="flex items-center flex-shrink-0 text-white mx-auto">
        <span class="font-semibold text-xl tracking-tight">Sewa Kendaraan</span>
    </div>
    <div class="block lg:hidden">
        <button class="flex items-center px-3 py-2 border rounded text-green-200 border-green-400 hover:text-white hover:border-white">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
        </button>
    </div>
    <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
        <div class="text-sm lg:flex-grow text-center">
            <a href="{{ route('penyewa.index') }}" class="block mt-4 lg:inline-block lg:mt-0 text-green-200 hover:text-white hover:font-bold mx-4">
                <span class="text-lg font-bold">Penyewa</span>
            </a>
            <a href="{{ route('kendaraan.index') }}" class="block mt-4 lg:inline-block lg:mt-0 text-green-200 hover:text-white hover:font-bold mx-4">
                <span class="text-lg font-bold">Kendaraan</span>
            </a>
            <a href="{{ route('kwitansi.index') }}" class="block mt-4 lg:inline-block lg:mt-0 text-green-200 hover:text-white hover:font-bold mx-4">
                <span class="text-lg font-bold">Kwitansi</span>
            </a>
        </div>
    </div>
</nav>






    <!-- Content -->
    <div class="container">
        @yield('content')
    </div>

    <!-- Footer -->
 

    <!-- <footer class="bg-green-500 dark:bg-green-900">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div class="md:flex md:justify-between">
          <div class="mb-6 md:mb-0">
                  <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Sewa Kendaraan</span>
              </a>
          </div>
          <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
              <div>
                  <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Resources</h2>
                  <ul class="text-gray-500 dark:text-gray-400 font-medium">
                      <li class="mb-4">
                          <a href="https://flowbite.com/" class="hover:underline">Flowbite</a>
                      </li>
                      <li>
                          <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                      </li>
                  </ul>
              </div>
              <div>
                  <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Follow us</h2>
                  <ul class="text-gray-500 dark:text-gray-400 font-medium">
                      <li class="mb-4">
                          <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Github</a>
                      </li>
                      <li>
                          <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                      </li>
                  </ul>
              </div>
              <div>
                  <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                  <ul class="text-gray-500 dark:text-gray-400 font-medium">
                      <li class="mb-4">
                          <a href="#" class="hover:underline">Privacy Policy</a>
                      </li>
                      <li>
                          <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
      <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
      <div class="sm:flex sm:items-center sm:justify-between">
          <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All Rights Reserved.
          </span>
      </div>
    </div>
</footer> -->


</body>
</html>
