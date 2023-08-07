@extends('layouts.app')

@section('content')
    <main class="d-flex justify-content-center ">
        <div class="conteiner" style="margin-top: 20px; width: 40%">
            <h3>Edit your post #{{ $post->id }}</h3>
            <hr>
            @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
                </ul>
              </div>
            @endif
            <form method="POST" action="{{ route('storeEditPost', $post->id) }}">
                @csrf
                @method("PUT")
                <div class="form-group">
                  <label for="postHeader">Post title</label>
                  <input type="text" class="form-control" id="postHeader" value="{{ $post->post_title }}" name="post_title">
                </div><br>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Post body</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" name="post_body">{{ $post->post_body }}</textarea>
                </div>
                <hr>
                <button type="submit" class="btn btn-success" style="width: 200px">SAVE</button>
              </form>
        </div>
    </main>

@endsection