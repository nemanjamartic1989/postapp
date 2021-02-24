@section('title')
    Create Post
@endsection

@extends('includes.master')

@section('main')
    <div class="container">
        <div class="row">
            <h1>Create Post</h1>
            <div class="col s8 offset-s2">
                <form action="/add" method="POST">
                    @csrf
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" id="title" name="title" placeholder="title"
                                   class="{{ $errors->has('title') ? 'red' : ''}}" value="{{ old('title') }}">
                            <label for="title">Title</label>
                        </div>
                        <div class="input-field col s12">
                            <select name="user" id="user">
                                <option value="" disabled selected>-- Select User --</option>
                                @foreach($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="input-field col s12">
                            <input type="text" id="body" name="body" placeholder="body"
                                   class="{{ $errors->has('body') ? 'red' : ''}}" value="{{ old('body') }}">
                            <label for="body">Body</label>
                        </div>
                        <button class="btn pink">Save</button>
                    </div>
                </form>
                @if($errors->any())
                    <p class="red-text">There was an error, try again later!</p>
                @endif
            </div>
        </div>
    </div>

<script>
// Initialize select box from materialize:
$(document).ready(function(){
    $('select').formSelect();
  });
</script>
@endsection