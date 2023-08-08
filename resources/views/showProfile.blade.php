@extends('layouts.app')

@section('content')
    <main class="d-flex justify-content-center ">
        <div class="conteiner" style="margin-top: 20px; width: 40%">
            <h3>Profile for user: #{{ $user->id }} - {{ $user->name }}</h3>
            <hr>
            <h5>Basic info</h5>
            <div class="form-group">
                <label for="name">User name</label>
                <input type="text" class="form-control" id="name" name="name" disabled value="{{ $user->name }}">
            </div><br>
            <div class="form-group">
              <label for="email">User e-mail</label>
              <input type="text" class="form-control" id="email" name="email" disabled value="{{ $user->email }}">
          </div><br>

          <button 
            id="edite"
            onclick="
            document.getElementById('name').disabled = false
            document.getElementById('email').disabled = false
            document.getElementById('save').style.display='inline-block'
            document.getElementById('cancle').style.display='inline-block'
            document.getElementById('edite').style.display='none'"

            class="btn btn-primary">
            EDIT
          </button>

          <button class="btn btn-success" id="save" style="display: none">
            SAVE
          </button>
          <button class="btn btn-secondary" id="cancle" style="display: none"
            onclick="
            document.getElementById('name').disabled = true
            document.getElementById('email').disabled = true
            document.getElementById('save').style.display='none'
            document.getElementById('cancle').style.display='none'
            document.getElementById('edite').style.display='inline-block'">
            CANCLE
          </button>
          <hr>
          <h5>Profile picture</h5>


          <hr>

          <h5>Password</h5>

          <button class="btn btn-primary" id="resetPassword"
            onclick="document.getElementById('resetPasswordModal').style.display='block'">
            RESET PASSWORD
          </button>

          <hr>


        </div>

         <!-- Modal -->
        <div class="modal" id="resetPasswordModal">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Reset my password</h5>
              </div>
              <div class="modal-body">
                <div class="form-group">
                    <label for="name">User name</label>
                    <input type="text" class="form-control" id="name" name="name" disabled value="{{ $user->name }}">
                </div><br>
                <div class="form-group">
                    <label for="name">User name</label>
                    <input type="text" class="form-control" id="name" name="name" disabled value="{{ $user->name }}">
                </div><br>
                <div class="form-group">
                    <label for="name">User name</label>
                    <input type="text" class="form-control" id="name" name="name" disabled value="{{ $user->name }}">
                </div><br>
                  
              </div>
              <div class="modal-footer">
                  
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="
                document.getElementById('resetPasswordModal').style.display='none'">Close</button>
                <button type="button" class="btn btn-success" onclick="event.preventDefault();
                document.getElementById('modal-menu-item-form').submit();">Save changes</button>
              </div>
            </div>
          </div>
        </div>
    </main>

@endsection