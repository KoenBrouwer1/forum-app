<?php

namespace App\Http\Controllers;
// files die hij gebruikt
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
  public function createpost()
  {
    $posts = Post::all(); // haal alle posts op 
    return view('createpost', compact('posts')); // stuurt de posts door aan de view
  }

  public function storepost(Request $request)
  {
    // checkt of de data goed onder deze regels valt
    $request->validate([
      'title' => 'required|string|max:255',
      'topic_id' => 'required|exists:topics,id',
      'content' => 'required|string|max:1000',
      'image' => 'nullable|image|max:2048',
    ]);
    // slaat de afbeelding op als er een is
    $path = null;
    if ($request->hasFile('image')) {
      $path = $request->file('image')->store('posts', 'public');
    }
    // maakt een nieuwe post aan in de database
    Post::create([
      'title' => $request->title,
      'topic_id' => $request->topic_id,
      'content' => $request->content,
      'image' => $path,
      'user_id' => Auth::id(),
    ]);
    // redirect met een succesbericht
    return redirect('/Forum')->with('success', 'Post created successfully!');
  }
  // haalt alle posts op de nieuwste eerst
  public function postingpost()
  {
    $posts = Post::with('user')->latest()->get(); // haalt alle posts op, nieuwste eerst
    return view('Forum', compact('posts'));
  }
}
