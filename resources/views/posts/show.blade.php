@section('title')
    Single Post
@endsection

@extends('includes.master')

@section('main')
    <div class="row">
        <div class="col s6 offset-s3">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">{{ $post->title }}</span>
                    <p>{{ $post->body }}</p>
                </div>
                <div class="card-action">
                    <a href="#">{{ $post->author }}</a>
                    <a href="/edit/{{ $post->id }}">Edit Post</a>
                    <a href="/delete/{{ $post->id }}">Delete Post</a>
                    <a href="#" class="right">{{ convertDate($post->created_at) }}</a>
                </div>
            </div>
        </div>
    </div>
@endsection