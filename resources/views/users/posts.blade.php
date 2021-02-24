@section('title')
    Posts
@endsection

@extends('includes.master')

@section('main')
<div class="container">
    <div class="row">
        @foreach($posts as $post)
        <div class="col s4">
            <a href="post/{{ $post->id }}">
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                    <span class="card-title">{{ substr($post->title, 0, 20) }}</span>
                    <p>{{ $post->body }}</p>
                    </div>
                    <div class="card-action">
                    <a href="#">{{ $post->user->name }}</a>
                    <a href="#" class="right">{{ convertDate($post->created_at) }}</a>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection