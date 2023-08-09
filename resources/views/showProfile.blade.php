@extends('layouts.app')

@section('content')
    <main class="d-flex justify-content-center ">
        <div class="conteiner" style="margin-top: 20px; width: 40%">
          @if(session()->get('success'))
              <div class="alert alert-success">
                  {{ session()->get('success') }}  
              </div>
          @endif
            <h3>Profile for user: #{{ $user->id }} - {{ $user->name }}</h3>
            <hr>
            <h5>Basic info</h5>
            <form action="{{ route('editUserProfile' , $user->id)}}" method="POST" id="edit-user-form">
              @method('PUT')
              @csrf
              <div class="form-group">
                <label for="name">User name</label>
                <input type="text" class="form-control" id="name" name="name" disabled value="{{ $user->name }}">
              </div><br>
              <div class="form-group">
                <label for="email">User e-mail</label>
                <input type="text" class="form-control" id="email" name="email" disabled value="{{ $user->email }}">
              </div><br>
            </form>
            

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

          <button class="btn btn-success" id="save" style="display: none" onclick="event.preventDefault();
          document.getElementById('edit-user-form').submit();">
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

          <div class="d-flex">
            <div class="p-2">
              <img class="rounded-circle shadow-4-strong" alt="avatar2" src="/uploads/avatars/{{ $user->avatar }}" style="width: 200px; height: 200px" />
            </div>
            <form enctype="multipart/form-data" action="{{ route('uploadImageUserProfile') }}" method="POST" id="upload-image-form">
              @method("POST")
              @csrf
              <div class="p-2">
                <div class="mb-5">
                  <label for="Image" class="form-label">Upload a new profile image</label>
                  <input class="form-control" type="file" id="formFile" name="avatar">
                  <button onclick="event.preventDefault();
                  document.getElementById('upload-image-form').submit();" class="btn btn-primary mt-3">Upload image</button>
                </div>
              </div>
            </form>

          </div>
          
          {{-- 

           --}}

          <hr>

          <h5>Password</h5>

          <button class="btn btn-primary" id="resetPassword"
            onclick="document.getElementById('resetPasswordModal').style.display='block'">
            CHANGE PASSWORD
          </button>

          <hr>


        </div>

         <!-- Modal -->
         
        <div class="modal" id="resetPasswordModal" @if($errors->any())
          style='display: block'
          @endif>
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Change my password</h5>
              </div>
              <div class="modal-body">
                <form action="{{ route('changePassUserProfile') }}" method="POST" id="change-user-password">
                  @method('put')
                  @csrf
                  <div class="form-group">
                      <label for="oldPassword">Old password</label>
                      <input type="password" class="form-control" id="oldPassword" name="oldPassword">
                      @error('oldPassword')
                          <span class="alert-danger" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div><br>
                  <div class="form-group">
                      <label for="newPassword">New password</label>
                      <input type="password" class="form-control" id="newPassword" name="password">
                      @error('password')
                          <span class="alert-danger" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div><br>
                  <div class="form-group">
                      <label for="newPassword-again">Repeat password</label>
                      <input type="password" class="form-control" id="newPassword-again" name="password_confirmation">
                      @error('password_confirmation')
                          <span class="danger" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div><br>
                </form>
                  
              </div>
              <div class="modal-footer">
                  
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="
                document.getElementById('resetPasswordModal').style.display='none'">Close</button>
                <button type="button" class="btn btn-success" onclick="event.preventDefault();
                document.getElementById('change-user-password').submit();">Change password!</button>
              </div>
            </div>
          </div>
        </div>
    </main>

@endsection