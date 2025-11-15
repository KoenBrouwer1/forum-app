 <!-- BEGIN NAV -->
 <nav class="fixed top-0 left-0 w-full z-50 bg-white/0 border-gray-200 dark:bg-gray-900/0">
   <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
     <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
       <img src="{{ asset('img/Napper-logoV2.png') }}" class="h-10" alt="Flowbite Logo" />
       <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Napper</span>
     </a>
     <div class="hidden w-full md:block md:w-auto" id="navbar-default">
       <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50/0 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white/0 dark:bg-gray-800/0 md:dark:bg-gray-900/0 dark:border-gray-700">
        @if (Auth::check() && Auth::user()->is_admin)
         <li>
           <a href="Admin " class="text-blue-500 ">Admin Panel</a>
         </li>
          @endif
         <li>
           <a href="#" class="text-white hover:text-blue-500">Home</a>
         </li>
         <li>
           <a href="#" class="text-white hover:text-blue-500">About</a>
         </li>
         @auth
         <form class="m-0" method="POST" action="{{ route('logout') }}">
           @csrf
           <button type="submit" class="md:p-0 dark:text-red-600">Logout</button>
         </form>
         </li>
         <li>
           <a href="Account" class="px-3 py-2 bg-blue-600/80 text-white rounded-lg hover:bg-blue-700/80 transition">{{ Auth::user()->name }}</a>
         </li>
         @endauth
         @guest
         <li>
           <a href="login" class="px-3 py-2 bg-blue-600/80 text-white rounded-lg hover:bg-blue-700/80 transition">Login / Register</a>
         </li>
         @endguest
       </ul>
     </div>
   </div>
 </nav>
 <!-- END NAV -->