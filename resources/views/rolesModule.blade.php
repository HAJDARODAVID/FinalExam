@extends('layouts.adminmodule')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="conteiner" style="margin-top: 20px;">
            <h3>Roles module:</h3>
            <hr>
            @if(session()->get('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}  
                </div>
            @endif
            <x-add-new-role-item></x-add-new-role-item>
            <hr>
            <x-roles-items-adm-table></x-roles-items-adm-table>
        </div>
    </main>

@endsection