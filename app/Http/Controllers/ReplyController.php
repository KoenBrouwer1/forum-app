<?php

namespace App\Http\Controllers;

use App\Models\Reply;
use App\Models\Topic;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReplyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexreply()
    {
        $topics = Topic::all(); // haalt alle topics op
        $replies = Reply::all(); // haalt alle replies op uit de database
        return view('createreply', compact('topics', 'replies')); // stuurt de topics door aan de view
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createreply($id)
    { {
        $topic = Topic::findOrFail($id); // haalt het topic op basis van de gegeven id
            return view('createreply', compact('topic'));
        }

    }

    /**
     * Store a newly created resource in storage.
     */
    public function storereply(Request $request)
    {
        $request->validate([
            'topic_id' => 'required|exists:topics,id',
            'reply' => 'required|string',
        ]);
        Reply::create([
            'topic_id' => $request->input('topic_id'),
            'user_id' => Auth::id(),
            'reply' => $request->reply,
        ]);

        return redirect()->back()->with('success', 'Reply created successfully.');
    }
    

    /**
     * Display the specified resource.
     */
    public function showreply(Topic $topic, $id)
    {
        $topic->load('replies'); // zorgt dat $topic->replies een Collection is
        $subjects = Subject::all(); // haalt alle subjects op
        $reply = Reply::with('topics')->where('reply', $topic)->firstOrFail(); // haalt het subject op met de bijbehorende topics
        return view('topics.show', compact('topic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reply $reply)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reply $reply)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reply $reply)
    {
        //
    }
}
