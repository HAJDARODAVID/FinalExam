@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}  
            </div>
        @endif
            <h3>Latest post about hot peppers</h3>
            <hr>
            <x-posts-cards></x-posts-cards>
        </div>
    </div>
</div>

@endsection