<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
   @foreach ($posts as $post)
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
        @endforeach 
</body>

</html>