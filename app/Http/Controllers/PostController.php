<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Topic;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
  public function createpost()
  {
    $topics = Topic::all(); // haal alle topics op
    return view('createpost', compact('topics'));
  }

  public function storepost(Request $request)
  {
    $request->validate([
      'title' => 'required|string|max:255',
      'topic_id' => 'required|exists:topics,id',
      'content' => 'required|string|max:1000',
      'image' => 'nullable|image|max:2048',
    ]);

    $path = null;
    if ($request->hasFile('image')) {
      $path = $request->file('image')->store('posts', 'public');
    }

    Post::create([
      'title' => $request->title,
      'topic_id' => $request->topic_id,
      'content' => $request->content,
      'image' => $path,
      'user_id' => Auth::id(),
    ]);
    return redirect('/Forum')->with('success');
  }
  public function postingpost()
  {
    $posts = Post::latest()->get(); // haalt alle posts op, nieuwste eerst
    return view('Forum', compact('posts'));
  }
}
