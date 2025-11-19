<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Napper | Forum</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="icon" type="image/png" href="{{ asset('img/Napper-logoV2.png') }}">
  @include('layouts.scrollbar')
</head>

<body class="m-0 p-0 overflow-x-hidden">
  <div class="min-h-screen w-screen bg-gray-100 dark:bg-gray-900 flex justify-center items-stretch m-0 p-0">
    <div class="flex w-full gap-0 flex-row-reverse m-0 p-0">
      
      <!-- Main content -->
      <main class="flex-1 bg-white dark:bg-gray-800 p-6 overflow-y-auto space-y-4 m-0">
        <div class="flex flex-col gap-6 p-6 w-full">
          @foreach($topics as $topic)
          <a href="#" class="block bg-white dark:bg-gray-700 shadow-md hover:shadow-xl rounded-xl overflow-hidden transition">
            <!-- Header -->
            <div class="flex items-center justify-between px-4 pt-4">
              @if($topic->topic)
              <span class="inline-block bg-blue-600 text-white text-xs font-semibold px-3 py-1 rounded-full">{{$topic->topic}}</span>
              @else
              <span></span>
              @endif
              <span class="text-xs text-gray-400 dark:text-gray-400">{{$topic->user->name}}</span>
            </div>
            
            <!-- Body -->
            <div class="px-4 py-3 space-y-2">
              <h3 class="text-lg font-bold text-gray-800 dark:text-gray-100 mb-2 line-clamp-2">
                {{$topic->title}}
              </h3>
              <p class="text-gray-600 dark:text-gray-300 text-sm line-clamp-3">
                {{$topic->content}}
              </p>
               <p class="text-xs text-gray-400 dark:text-gray-400 flex justify-end">{{ $topic->replies->count()}} replies</p>
            </div>

            <a href="Forum/{{$topic->id}}/CreateReply" class="text-blue-600 flex justify-end cursor-pointer">Reply</a>
            
            <!-- Footer -->
            {{-- <div class="flex items-center justify-end px-4 py-2 border-t border-gray-100 dark:border-gray-700 text-gray-500 dark:text-gray-400 text-sm">
              <img class="w-10 h-10 cursor-pointer" src="{{ asset('img/likepost.png') }}" alt="like">
              <img class="w-10 h-10 cursor-pointer" src="{{ asset('img/replypost.png') }}" alt="reply">
            </div> --}}
          </a>
          @endforeach
        </div>
      </main>
      <!-- Search Sidebar -->
      <div class="w-1/5 bg-white dark:bg-gray-800 p-4 text-gray-900 dark:text-white">
        <h2 class="text-xl font-bold mb-4">Subjects</h2>
        <a class="text-blue-600 font-semibold" href="{{ url('/Forum') }}">Deselect</a>
        @foreach($subjects as $subject)
        <div class="justify-between mt-4 flex items-center space-x-3 cursor-pointer">
          <a href="{{ route('subjects.show', $subject->subject) }}">{{ $subject->subject }}</a>
          <p class="text-xs text-gray-400 dark:text-gray-400">{{ $subject->topics->count() }} posts</p>
        </div>
        @endforeach
      </div>
      <!-- Profile Sidebar -->
      <div class="w-1/5 bg-white dark:bg-gray-900 p-4 text-gray-900 dark:text-white flex flex-col border-r border-gray-300 dark:border-gray-600">
        <div>
          <h2 class="text-xl font-semibold mb-4">Profile</h2>
          <img src="{{ asset('img/Napper-logoV2.png') }}" alt="profile" class="w-20 h-20 rounded-full mx-auto mb-1">
          <a href="Account" class="block text-center font-bold mb-4">{{ Auth::user()->name }}</a>
        </div>
        <a href="{{ url('CreateTopic') }}" class="text-center mt-6 bg-blue-600 hover:bg-blue-700 active:scale-95 transition text-white font-semibold rounded-lg py-3">
          Create Topic
        </a>
        @if(Auth::check() && Auth::user()->is_admin)
           <a href="{{ url('CreateSubject') }}" class="text-center mt-6 bg-gray-600 text-white font-semibold rounded-lg py-3">
          Create Subject
        </a>
        @endif
      </div>

    </div>
  </div>
</body>


</html>