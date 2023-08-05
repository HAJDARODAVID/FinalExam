@extends('layouts.adminmodule')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="conteiner" style="margin-top: 20px;">
            <h3>User overview</h3>
            <br>
            <x-user-table></x-user-table>
        </div>
    </main>

@endsection