<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>forum</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="icon" type="image/png" href="{{ asset('img/Napper-logoV2.png') }}">
</head>

<body>

  <nav class="fixed top-0 left-0 w-full z-50 bg-white/0 border-gray-200 dark:bg-gray-900/0">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="{{ asset('img/Napper-logoV2.png') }}" class="h-10" alt="Flowbite Logo" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Napper</span>
      </a>
      <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
        </svg>
      </button>
      <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50/0 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white/0 dark:bg-gray-800/0 md:dark:bg-gray-900/0 dark:border-gray-700">
          <li>
            <a href="#" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100/0 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700/0 dark:hover:text-white md:dark:hover:bg-transparent">Home</a>
          </li>
          <li>
            <a href="#" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100/0 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700/0 dark:hover:text-white md:dark:hover:bg-transparent">About</a>
          </li>
          <li>
            <a href="#" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100/0 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700/0 dark:hover:text-white md:dark:hover:bg-transparent">Services</a>
          </li>
          <li>
            <a href="Login" class="px-3 py-2 bg-blue-600/80 text-white rounded-lg hover:bg-blue-700/80 transition">Login / Register</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="flex flex-col items-center justify-center min-h-screen bg-gray-100 dark:bg-gray-900">
    <div class="grid grid-cols-5 grid-rows-5 gap-4 w-full max-w-6xl p-6">
      <div class="col-span-4 row-span-4 bg-white rounded-lg shadow p-6 dark:bg-gray-800 dark:text-white">feed</div>
      <!-- <div class="col-start-3 row-start-5 bg-white p-4 rounded-lg shadow dark:bg-gray-800 dark:text-white"></div> -->
      <div class="col-start-1 row-start-5 bg-white p-4 rounded-lg shadow dark:bg-gray-800 dark:text-white">Search</div>
      <div class="col-start-4 row-start-5 flex justify-center items-center bg-white p-4 rounded-lg shadow dark:bg-gray-900 dark:text-white">
        <button
          class="float-right bg-blue-600 hover:bg-blue-700 active:scale-95 transition-all text-white font-semibold rounded-lg px-7 py-3 shadow-md">
          Create Post
        </button>
      </div>
      <div class="row-span-6 col-start-5 row-start-1 bg-white p-4 rounded-lg shadow dark:bg-gray-800 dark:text-white">profile</div>
    </div>

  </div>

</body>

</html>