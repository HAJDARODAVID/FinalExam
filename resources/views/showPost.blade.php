@extends('layouts.app')

@section('content')
    <main class="d-flex justify-content-center ">
        <div class="conteiner" style="margin-top: 20px; width: 40%">
            <h3 style="margin-bottom: 0px">{{ $post->post_title }}</h3>
            <hr style="margin-bottom: 5px">
            <span>by: {{ $post->user->name }}</span><br>
            <span>created at: {{ $post->created_at }}</span>
            <hr>
            <p>{{ $post->post_body }}</p>
            <hr>
             
            @if (isset(Auth::user()->id))
                @if ($post->user_id == Auth::user()->id)
                    <a href="{{ route('editPost', $post->id) }}"class="btn btn-success">EDIT</a>
                    <a class="btn btn-danger" href="" onclick="event.preventDefault(); document.getElementById('destoryUser-{{ $post->id }}-form').submit();">{{ __('DELETE') }}</a>
                    <form 
                        id="destoryUser-{{ $post->id }}-form" 
                        method="POST" 
                        action="{{ route('deletePost', $post->id) }}"  
                        class="d-none">
                        @method('DELETE')
                        @csrf
                    </form>
                @endif
                
            @endif
        </div>
    </main>
@endsection
