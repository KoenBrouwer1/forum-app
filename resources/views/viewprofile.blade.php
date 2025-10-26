<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @include('Header')
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Napper | Account</title>
</head>

<body>
  <div class="flex flex-col items-center justify-center min-h-screen bg-gray-100 dark:bg-gray-900 ">
    <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 p-10">
      <div class="flex flex-col items-center pb-10">
        <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{ asset('img/Napper-logoV2.png') }}" alt="PFP" />
        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ Auth::user()->name }}</h5>
        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ Auth::user()->email }}</h5>
        <span class="text-sm text-gray-500 dark:text-gray-400">{{ Auth::user()->created_at }}</span>

      </div>
    </div>
</body>

</html>