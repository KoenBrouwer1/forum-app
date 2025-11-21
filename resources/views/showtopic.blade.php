<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Napper | Topic Details</title>
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
          
          <!-- Original Topic Post -->
          <div class="block bg-white dark:bg-gray-700 shadow-md rounded-xl overflow-hidden">
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
              <h3 class="text-2xl font-bold text-gray-800 dark:text-gray-100 mb-3">
                {{$topic->title}}
              </h3>
              <p class="text-gray-600 dark:text-gray-300 text-base leading-relaxed">
                {{$topic->content}}
              </p>
              <p class="text-xs text-gray-400 dark:text-gray-400 flex justify-end pt-2">
                {{ $topic->created_at->diffForHumans() }}
              </p>
            </div>
          </div>

          <!-- Replies Section Header -->
          <div class="flex items-center justify-between">
            <h2 class="text-xl font-bold text-gray-800 dark:text-gray-100">
              Replies ({{ $topic->replies->count() }})
            </h2>
          </div>

          <!-- Replies List -->
           <form action="{{ route('replies.store', $topic->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4 md:space-y-6">
            @csrf
            
            <!-- Hidden field for topic_id -->
            <input type="hidden" name="topic_id" value="{{ $topic->id }}">
            
            <!-- Textarea for the actual comment -->
            <div>
              <label for="reply" class=" block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Comment</label>
              <textarea name="reply" id="reply" rows="4" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your comment here..." required></textarea>
            </div>
            <button type="submit" class="text-white bg-gray-600 p-2 rounded">Reply</button>
          @forelse($topic->replies as $reply)
          <div class="bg-white dark:bg-gray-700 shadow-md rounded-xl overflow-hidden">
            <!-- Reply Header -->
            <div class="flex items-center justify-between px-4 pt-4">
              @if($reply->user->is_admin)
                  <span class="text-sm font-semibold dark:text-gray-300">{{$reply->user->name}} <span class="font-bold text-red-400">(ADMINISTRATOR)</span></span>
                  @else
                  <span class="text-sm font-semibold dark:text-gray-300">{{$reply->user->name}}</span>
                  @endif
              <span class="text-xs text-gray-400 dark:text-gray-400">{{ $reply->created_at->diffForHumans() }}</span>
            </div>
            
            <!-- Reply Body -->
            <div class="px-4 py-3">
              <p class="text-gray-600 dark:text-gray-300 text-sm leading-relaxed">
                {{$reply->reply}}
              </p>
            </div>
          </div>
          @empty
          <div class="bg-white dark:bg-gray-700 shadow-md rounded-xl p-6 text-center">
            <p class="text-gray-500 dark:text-gray-400">No replies yet. Be the first to reply!</p>
          </div>
          @endforelse

        </div>
      </main>
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
          <a href="/" class="text-center text-red-600 mt-6 transition hover:underline font-bold rounded-lg py-3">
          Back
        </a>
      </div>

    </div>
  </div>
</body>

</html>