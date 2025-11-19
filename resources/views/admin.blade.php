<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  @include('layouts/Header')
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
  <title>Document</title>
</head>
<body>
  <div class="flex flex-col items-center justify-center min-h-screen bg-gray-100 dark:bg-gray-900">
    <h1 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">This is the admin panel</h1>
    <a href="Forum" class="cursor-pointer transition-all bg-blue-500 text-white px-6 py-2 rounded-lg border-blue-600 border-b-[4px] hover:brightness-110 hover:-translate-y-[1px] hover:border-b-[6px] active:border-b-[2px] active:brightness-90 active:translate-y-[2px]">Start talking</a>
  </div>
</body>
</html>