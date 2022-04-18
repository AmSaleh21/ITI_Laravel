@extends('layouts.app')
@section('title')View post
{{ $post->id }}
@endsection
@section('main')
    <div class="container text-dark p-5">
        @include('partials.post-details')
    </div>
@endsection
