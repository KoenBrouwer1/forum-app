<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
  public function create()
  {
    return view('posts.create');
  }

  public function store(Request $request)
  {
    $request->validate([
      'title' => 'required|string|max:255',
      'content' => 'required|string',
      'image' => 'nullable|image|max:2048',
    ]);

    $path = null;
    if ($request->hasFile('image')) {
      $path = $request->file('image')->store('posts', 'public');
    }

    Post::create([
      'title' => $request->title,
      'content' => $request->content,
      'image' => $path,
      'user_id' => Auth::id(),
    ]);

    return redirect()->back()->with('success', 'Post created!');
  }
  public function posting()
  {
    $posts = Post::latest()->get(); // haalt alle posts op, nieuwste eerst
    return view('Forum', compact('posts'));
  }
}
