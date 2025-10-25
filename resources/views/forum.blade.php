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
  <div class="min-h-screen bg-gray-100 dark:bg-gray-900 flex justify-center py-6 px-4">
    <div class="flex w-full max-w-6xl gap-6">

      <!-- 🧭 Left Sidebar -->
      <div class="w-1/5 bg-white dark:bg-gray-800 p-4 rounded-lg shadow text-gray-900 dark:text-white">
        <h2 class="text-xl font-semibold mb-4">Search</h2>
        <input type="text" placeholder="Search..." class="w-full px-3 py-2 rounded-lg bg-gray-100 dark:bg-gray-700 focus:outline-none">
      </div>

      <!-- Post Card -->
      <main class="flex-1 bg-white dark:bg-gray-800 p-6 rounded-lg shadow overflow-y-auto space-y-4">
        <article class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg shadow hover:shadow-lg transition">
          <div class="flex items-center mb-3">
            <img src="{{ asset('img/Napper-logoV2.png') }}" alt="profile picture" class="w-10 h-10 rounded-full">
            <h1 class="ml-3 text-lg font-semibold text-gray-800 dark:text-white">USER 1</h1>
          </div>
          <p class="text-gray-700 dark:text-gray-300">Whatever they have to say goes in here</p>
          <div class="mt-4 flex justify-end space-x-3">
            <img class="w-10 h-10 cursor-pointer" src="{{ asset('img/likepost.png') }}" alt="like" onclick="">
            <img class="w-10 h-10 cursor-pointer" src="{{ asset('img/replypost.png') }}" alt="reply" onclick="">
          </div>
        </article>
      </main>
      <!-- Post card end -->

      <!-- Profile Sidebar -->
      <div class="w-1/5 bg-white dark:bg-gray-800 p-4 rounded-lg shadow text-gray-900 dark:text-white flex flex-col justify-between">
        <div>
          <h2 class="text-xl font-semibold mb-4">Profile</h2>
          <img src="{{ asset('img/Napper-logoV2.png') }}" alt="profile" class="w-20 h-20 rounded-full mx-auto mb-3">
          <p class="text-center">Koen Brouwer</p>
          <img src="{{ asset('img/Napper-logoV2.png') }}" alt="profile" class="w-20 h-20 rounded-full mx-auto mb-3">
          <p class="text-center">someone</p>
        </div>

        <button class="mt-6 bg-blue-600 hover:bg-blue-700 active:scale-95 transition text-white font-semibold rounded-lg py-3">
          Create Post
        </button>
      </div>

    </div>
  </div>

</body>

</html>