@extends('layouts.adminmodule')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="conteiner" style="margin-top: 20px;">
            <h3>Edit user: #{{ $user->id }} - {{ $user->name }}</h3>
            <hr>
            <form action="{{ route('userSaveEditAdmModule', $user->id) }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="">Name:</label>
                        <input type="input" class="form-control" value="{{ $user->name }}" name="name">
                    </div><br>
                    <div class="form-group col-md-6">
                        <label for="">Email:</label>
                        <input type="email" class="form-control" value="{{ $user->email }}" name="email">
                    </div><br>
                    <div class="form-group col-md-6">
                        <label for="">Is admin?:</label><br>
                        <input class="form-check-input" type="checkbox" @if ($user->role == 1)
                        checked
                        @endif name='role'>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Password:</label><br>
                        <button type="submit" class="btn btn-primary">RESET PASSWORD</button>
                    </div>
                </div><br><br>
                <button type="submit" class="btn btn-success" style="width: 200px">SAVE</button>
            </form>
        </div>
    </main>

@endsection