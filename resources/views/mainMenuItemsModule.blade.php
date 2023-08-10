@extends('layouts.adminmodule')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="conteiner" style="margin-top: 20px;">
            <h3>Main menu items:</h3>
            <hr>
            @if(session()->get('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}  
                </div>
            @endif
            <x-add-new-main-menu-item></x-add-new-main-menu-item>
            <hr>
            <x-main-menu-items-list></x-main-menu-items-list>
        </div>
    </main>

@endsection