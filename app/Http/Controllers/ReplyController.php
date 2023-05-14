<?php

namespace App\Http\Controllers;

use App\Models\Reply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReplyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        {
            $replies = Reply::all();
    
            return view('reply.index', compact('replies'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $reply = Reply::create([
            'reply'=> $request->reply,
            'thread_id'=>$request->thread_id,
            'user_id'=>Auth::user()->id,
        ]);

        return redirect(route('homepage'))->with('ThreadCreated', 'Hai commentato correttamente il thread');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reply $reply)
    {
        //
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
