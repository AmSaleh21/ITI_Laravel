<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    private $posts = [
        ['id' => 1, 'title' => 'Laravel', 'post_creator' => 'Ahmed', 'created_at' => '2022-04-16 10:37:00'],
        ['id' => 2, 'title' => 'PHP', 'post_creator' => 'Mohamed', 'created_at' => '2022-04-16 10:37:00'],
        ['id' => 3, 'title' => 'Javascript', 'post_creator' => 'Ali', 'created_at' => '2022-04-16 10:37:00'],
    ];

    public function index()
    {        
        return view('posts.index', [
            'posts' => $this->posts,
        ]);
    }
    public function create()
    {
        return view('posts.create');
    }
    public function show($postID)
    {
        return view('posts.show', [
            'posts' => $this->posts,
            'postID'=> $postID
        ]);
    }
    public function edit($postID)
    {
        return view('posts.edit', [
            'posts' => $this->posts,
            'postID'=> $postID
        ]);
    }
}
