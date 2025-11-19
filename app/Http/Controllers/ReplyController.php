<?php

namespace App\Http\Controllers;

use App\Models\Reply;
use App\Models\Topic;
use Illuminate\Http\Request;

class ReplyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexreply()
    {
        $topics = Topic::all(); // haal alle topics op uit de database
        $replies = Reply::all(); // haal alle replies op uit de database
        return view('createreply', compact('topics', 'replies')); // stuurt de topics door aan de view
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createreply(Topic $topic)
    {
        $replies = Reply::all(); // ← voeg dit toe
        return view('createreply', compact('replies', 'topic')); // stuurt de topics door aan de view
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storereply(Request $request)
    {
        $request->validate([
            'reply' => 'required|string|max:200',
        ]);
        // maakt een nieuwe topic aan in de database
        Reply::create([
            'topic_id' => $topic->id,
            'user_id' => $request->user()->id,
            'body' => $request->reply,
        ]);
        return redirect('/Forum')->with('success', 'Reply created successfully!');
    }
    

    /**
     * Display the specified resource.
     */
    public function showreply(Topic $topic)
    {
        $topic->load('replies'); // zorgt dat $topic->replies een Collection is
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
