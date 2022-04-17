@extends('layouts.app')

@section('title') Show @endsection


@section('content')
    <div class="card">
        <div class="card-header">
            Post info
        </div>
        <div class="card-body">
            <div>
                <span style="font-size: 1.2rem; font-weight: bold">Title: {{ $posts[$postID]['title'] }} &nbsp;</span>
            </div>
            <div>
                <span style="font-size: 1rem; font-weight: bold">Name: {{ $posts[$postID]['post_creator'] }} &nbsp;</span>
            </div>
            <div>
                <span style="font-size: 1rem; font-weight: bold">Date: {{ $posts[$postID]['created_at'] }} &nbsp;</span>
            </div>
        </div>
    </div>
@endsection