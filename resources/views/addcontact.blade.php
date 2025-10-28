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
        @foreach ($users as $user)
        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">
          {{ $user->name }}
        </h5>
        @endforeach

        <span class="text-sm text-gray-500 dark:text-gray-400">text</span>
        <div class="flex mt-4 md:mt-6">
          <a href="EditProfile" class="mr-2 inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg dark:bg-blue-600">Edit Profile</a>
          <a href="ViewProfile" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white transparent border border-blue-700 rounded-lg dark:border-blue-600">View Profile</a>
        </div>
      </div>
    </div>
</body>

</html>