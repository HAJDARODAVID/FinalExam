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
                        <input class="form-check-input" type="checkbox" @if ($user->is_admin == 1)
                        checked
                        @endif name='is_admin'>
                    </div>
                    <hr>
                    <div class="form-group col-md-6">
                        <label for="">Password:</label><br>
                        @if(session()->get('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}  
                            </div>
                        @endif
                        <a class="btn btn-primary" href="" onclick="event.preventDefault(); document.getElementById('reset-password-form').submit();">{{ __('RESET PASSWORD') }}</a>    
                    </div>
                </div><hr>
                <button type="submit" class="btn btn-success" style="width: 200px">SAVE</button>
            </form>

            <form 
                method="POST" 
                id="reset-password-form"
                action="{{ route('userSaveEditAdmModule', $user->id) }}"  
                class="d-none">
                @method('PUT')
                @csrf
                <input type="hidden" value="1" name="passReset">
            </form>
        </div>
    </main>

@endsection