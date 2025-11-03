<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Napper | Forum</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="icon" type="image/png" href="{{ asset('img/Napper-logoV2.png') }}">
</head>

<body>
  <div class="min-h-screen bg-gray-100 dark:bg-gray-900 flex justify-center py-6 px-4">
    <d class="flex w-full max-w-6xl gap-6">

      <!--  Left Sidebar -->
      <div class="w-1/5 bg-white dark:bg-gray-800 p-4 rounded-lg shadow text-gray-900 dark:text-white">
        <h2 class="text-xl font-semibold mb-4">Search</h2>
        <input type="text" placeholder="Search..." class="w-full px-3 py-2 rounded-lg bg-gray-100 dark:bg-gray-700 focus:outline-none">
        <!-- contacts card -->
        <div onclick="" class="mt-4 flex items-center space-x-3 cursor-pointer">
          <img src="{{ asset('img/Napper-logoV2.png') }}" alt="profile" class="w-8 h-8 rounded-full">
          <p class="font-semibold">Placeholder Name</p>
        </div>
        <!-- contacts card end -->
      </div>

      <main class="flex-1 bg-white dark:bg-gray-800 p-6 rounded-lg shadow overflow-y-auto space-y-4">
        <!-- Post Card -->



        <div class="flex flex-col gap-6 p-6 max-w-1xl mx-auto">
          <!-- Topic Card-->
          <a href="#" class="block bg-white dark:bg-gray-700 rounded-2xl shadow-md hover:shadow-xl ">
            <!-- Category Badge -->
            <div class="flex items-center justify-between px-4 pt-4">
              <span class="inline-block bg-blue-600 text-white text-xs font-semibold px-3 py-1 rounded-full">PC Tips</span>
              <span class="text-xs text-gray-400 dark:text-gray-500">Placeholder Name</span>
            </div>

            <!-- Body  -->
            <div class="px-4 py-3">
              <h3 class="text-lg font-bold text-gray-800 dark:text-gray-100 mb-2 line-clamp-2">
                How to optimize your PC for gaming?
              </h3>
              <p class="text-gray-600 dark:text-gray-300 text-sm line-clamp-3">
                A general discussion for sharing tips and techniques to improve performance, reduce lag, and get the best experience while gaming on a PC.
              </p>
            </div>

            <div class="flex items-center justify-end px-4 py-2 border-t border-gray-100 dark:border-gray-700 text-gray-500 dark:text-gray-400 text-sm">
              <img class="w-10 h-10 cursor-pointer" src="{{ asset('img/likepost.png') }}" alt="like" onclick="">
              <img class="w-10 h-10 cursor-pointer" src="{{ asset('img/replypost.png') }}" alt="reply" onclick="">
            </div>
          </a>
          <!-- Additional general topics can follow the same pattern -->
        </div>



        <!-- @foreach ($posts as $post)
        <article class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg shadow hover:shadow-lg transition">
          <div class="flex items-center mb-3">
            <img src="{{ asset('img/Napper-logoV2.png') }}" alt="profile picture" class="w-10 h-10 rounded-full">
            <h2 class="text-xl text-white font-semibold">{{ $post->user->name }}</h2>
            <h1 class="ml-3 text-lg ml-auto font-bold text-gray-800 dark:text-white">{{ $post->title }}</h1>
          </div>
          <p class="text-gray-700 dark:text-gray-300">{{ $post->content }}</p>

          @if ($post -> image)
          <p>{{ $post->image }}</p> 
          <img src="{{ asset('storage/' . $post->image) }}" class="mt-4 h-[200px] object-cover rounded-lg">
          @endif


          <div class="mt-4 flex justify-end space-x-3">
            <img class="w-10 h-10 cursor-pointer" src="{{ asset('img/likepost.png') }}" alt="like" onclick="">
            <img class="w-10 h-10 cursor-pointer" src="{{ asset('img/replypost.png') }}" alt="reply" onclick="">
          </div>
        </article>
        @endforeach -->
        <!-- Post card end -->
      </main>


      <!-- Profile Sidebar -->
      <div class="w-1/5 bg-white dark:bg-gray-800 p-4 rounded-lg shadow text-gray-900 dark:text-white flex flex-col justify-between">
        <div>
          <h2 class="text-xl font-semibold mb-4">Profile</h2>
          <!-- profile card -->
          <img src="{{ asset('img/Napper-logoV2.png') }}" alt="profile" class="w-20 h-20 rounded-full mx-auto mb-3">
          <p class="text-center font-bold">{{ Auth::user()->name }}</p>
        </div>
        <!-- profile card end -->

        <a href="CreatePost" class="text-center mt-6 bg-blue-600 hover:bg-blue-700 active:scale-95 transition text-white font-semibold rounded-lg py-3">
          Create Post
        </a>
      </div>
    </d iv>
  </div>
</body>

</html>