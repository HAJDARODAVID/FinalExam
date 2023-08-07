@extends('layouts.app')

@section('content')
    <main class="d-flex justify-content-center ">
        <div class="conteiner" style="margin-top: 20px; width: 40%">
            <h3>Add a new post</h3>
            <br>
            @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
                </ul>
              </div>
            @endif
            <form method="POST" action="{{ route('saveNewPost') }}">
                @csrf
                @method("POST")
                <div class="form-group">
                  <label for="postHeader">Post title</label>
                  <input type="text" class="form-control" id="postHeader" placeholder="" name="post_title">
                </div><br>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Post body</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" name="post_body"></textarea>
                </div><br>
                <button type="submit" class="btn btn-success" style="width: 200px">SAVE</button>
              </form>
        </div>
    </main>

@endsection