<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Napper | Account</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="icon" type="image/png" href="{{ asset('img/Napper-logoV2.png') }}">
</head>

<body>
  <div class="bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-100 flex h-screen overflow-hidden">
    <!-- Sidebar -->
    <aside class="w-64 bg-white dark:bg-gray-800 shadow-lg flex flex-col justify-between border-r border-gray-200 dark:border-gray-700">
      <div class="p-6">
        <div class="flex items-center space-x-3 mb-8">
          <img src="{{ asset('img/Napper-logoV2.png') }}" alt="Logo" class="w-10 h-10 rounded-full">
          <h1 class="text-xl font-bold text-blue-600 dark:text-blue-400">Napper</h1>
        </div>
        <nav class="space-y-2">
          <a href="Yourposts" class="font-semibold block py-2 px-3 rounded-md hover:bg-blue-100 dark:hover:bg-gray-700 transition">Your Posts</a>
          <a href="Forum" class="font-semibold block py-2 px-3 rounded-md hover:bg-blue-100 dark:hover:bg-gray-700 transition">Forum</a>
          <a href="Account" class="block py-2 px-3 rounded-md bg-blue-600 text-white font-semibold">Account</a>
        </nav>
      </div>
      <form method="POST" action="{{ route('logout') }}" class="p-6">
        @csrf
        <button class="w-full py-2 text-sm font-medium text-red-500 hover:text-red-600 transition">Log out</button>
      </form>
    </aside>
    <!-- header -->

    <!-- Main Content -->
    <main class="flex-1 flex justify-center items-start p-10 overflow-hidden">
      <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 overflow-hidden">

        <!-- Header / Banner -->
        <div class="h-24 bg-blue-600 dark:bg-blue-700 relative">
          <!-- profielfoto overlapping -->
          <img class="w-24 h-24 rounded-full shadow-lg border-4 border-white dark:border-gray-800 absolute -bottom-12 left-1/2 transform -translate-x-1/2"
            src="{{ asset('img/Napper-logoV2.png') }}" alt="PFP" />
        </div>

        <!-- Info -->
        <div class="pt-16 pb-6 text-center">
          <h5 class="mb-2 text-xl font-medium text-gray-900 dark:text-white">{{ Auth::user()->name }}</h5>
          <h5 class="m-1 text-sm text-gray-500 dark:text-gray-400">{{ Auth::user()->email }}</h5>
          <span class="text-sm text-gray-500 dark:text-gray-400">{{ Auth::user()->created_at->diffForHumans() }}</span>
          


          <div class="flex justify-center mt-6 space-x-3">
            <a href="EditProfile" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg dark:bg-blue-600">Edit Profile</a>
          </div>
        </div>

      </div>
    </main>

  </div>

</body>

</html>