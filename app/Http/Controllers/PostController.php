<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Notifications\NewPost;
use App\Notifications\NewPostNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class PostController extends Controller
{

    public function index()
    {
        return view('dashboard')->with('posts', Post::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add-post');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:50'],
            'text' => ['required', 'string', 'max:255'],
            'photo' => [ 'string', 'max:255'],
        ]);
        $post = new Post();
        $post->title = $request['title'];
        $post->text = $request['text'];
        $post->save();
        $users = User::where('notification_allowed', 1)->get();
        foreach ($users as $user)
        {
            $user->notify(new NewPostNotification($post));
        }
return redirect("/posts");
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('post')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
