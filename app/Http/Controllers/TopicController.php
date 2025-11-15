<?php

namespace App\Http\Controllers;

// files die hij gebruikt
use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\Subject;
use Illuminate\Support\Facades\Auth;

class TopicController extends Controller
{
  public function createtopic()
  {
    $topics = Topic::all(); // haal alle topics op uit de database
    $subjects = Subject::all(); // ← voeg dit toe
    return view('createtopic', compact('topics', 'subjects')); // stuurt de topics door aan de view
  }

  public function storetopic(Request $request)
  {
    // checkt of de data goed onder deze regels valt
    $request->validate([
      'subject_id' => 'nullable|exists:subjects,id',
      'topic' => 'nullable|string|max:20',
      'title' => 'required|string|max:50',
      'content' => 'required|string|max:300',
    ]);
    // maakt een nieuwe topic aan in de database
    Topic::create([
      'title' => $request->input('title'),
      'content' => $request->input('content'),
      'topic' => $request->input('topic'),
      'user_id' => Auth::id(),
      'subject_id' => $request->input('subject_id'),
    ]);
    return redirect('/Forum')->with('success', 'Topic created successfully!');
  }
  // haalt topids en de user op en het nieuwste eerst
  public function postingtopic()
  {
    $topics = Topic::with('user')->latest()->get();
    return view('Forum', compact('topics'));
  }
}
