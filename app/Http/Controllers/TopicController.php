<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;
use Illuminate\Support\Facades\Auth;

class TopicController extends Controller
{
  public function createtopic()
  {
    return view('createtopic');
  }

  public function storetopic(Request $request)
  {
    $request->validate([
      'title' => 'required|string|max:50',
      'content' => 'required|string|max:200',
    ]);

    Topic::create([
      'title' => $request->title,
      'content' => $request->content,
      'topic' => $request->topic,
      'user_id' => Auth::id(),
    ]);
    return redirect('/Forum')->with('success', 'Topic created successfully!');
  }
  public function postingtopic()
  {
    $topics = Topic::with('user')->latest()->get();
    return view('Forum', compact('topics'));
  }
}
