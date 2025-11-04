<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="icon" type="image/png" href="{{ asset('img/Napper-logoV2.png') }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @include('loginHeader')
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Napper | Create Topic</title>
</head>

<body>
  <section class="bg-gray-50 dark:bg-gray-900">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
      <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
        <img class="w-8 h-8 mr-2" src="{{ asset('img/Napper-logoV2.png') }}" alt="logo">
        Napper
      </a>
      <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
          <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
            Create a post
          </h1>
          <form action="{{ route('topics.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4 md:space-y-6">
            @csrf
            <div>
              <input type="text" name="topic" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your topic">
            </div>
            <div>
              <input type="text" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your title" required="">
            </div>

            <textarea name="content" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="What is on your mind?" required=""></textarea>



            <div class="flex justify-end mt-6">
              <a href="/" type="button" class="mr-auto text-white font-bold rounded-lg py-3 px-4">Cancel</a>
              <button type="submit" class="bg-blue-600 hover:bg-blue-700 active:scale-95 transition text-white font-semibold rounded-lg py-3 px-4 inline-flex items-center">post</button>
            </div>
            <div>
          </form>
        </div>
      </div>
    </div>
  </section>
</body>
</body>

</html>