<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @include('layouts/Header')
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Napper | Account</title>
</head>

<body>
  <div class="flex flex-col items-center justify-center min-h-screen bg-gray-100 dark:bg-gray-900 ">
    <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 p-10">
      <div class="flex flex-col items-center pb-10">
        <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{ asset('img/Napper-logoV2.png') }}" alt="PFP" />
        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Edit Profile picture</h5>
        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" class="space-y-4 md:space-y-6">
          @csrf
        <label for="photo" class="bg-blue-600 hover:bg-blue-700 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5  dark:border-blue-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 cursor-pointer inline-block text-center mt-6">
          Upload image
        </label>
        <input
          type="file"
          name="photo"
          id="photo"
          class="hidden" />
        <button type="submit" class="bg-blue-600 hover:bg-blue-700 active:scale-95 transition text-white font-semibold rounded-lg py-3 px-4 inline-flex items-center">update</button>
        </form> 
      </div>
    </div>
</body>

</html>