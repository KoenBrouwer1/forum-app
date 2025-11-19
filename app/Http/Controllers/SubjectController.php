<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Topic;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subjects = Subject::all(); // haalt alle subjects op
        $topics = Topic::all(); // haal alle topics op uit de database
        return view('forum', compact('subjects', 'topics')); // geeft de subjects en topics door aan de view
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createsubject()
    {
        $subjects = Subject::all(); // ← voeg dit toe
        return view('createsubject', compact('subjects')); // stuurt de topics door aan de view
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storesubject(Request $request)
    {
        // checkt of de data goed onder deze regels valt
        $request->validate([
            'subject' => 'required|string|max:20',
        ]);
        // maakt een nieuwe topic aan in de database
        Subject::create([
            'subject' => $request->input('subject'),
        ]);
        return redirect('/Forum')->with('success', 'Subject created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show($subject)
    {
        // laad subject + topics
        $subjects = Subject::all(); // haalt alle subjects op
        $subject = Subject::with('topics')->where('subject', $subject)->firstOrFail(); // haalt het subject op met de bijbehorende topics
        $topics = $subject->topics; // haalt de topics op die bij het subject horen
        return view('forum', compact('subject', 'topics', 'subjects')); // geeft het subject en de topics door aan de view
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subject $subject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subject $subject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subject $subject)
    {
        //
    }
}
