@extends('layouts.app')

@section('title')Edit @endsection

@section('content')
        <form method="POST" action="{{ route('posts.store')}}">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Title</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{ $posts[$postID]['title'] }}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                placeholder=" {{ $posts[$postID]['created_at'] }} "
                ></textarea>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Post Creator</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{ $posts[$postID]['post_creator'] }}">
            </div>

          <button class="btn btn-primary">Edit</button>
        </form>
@endsection
