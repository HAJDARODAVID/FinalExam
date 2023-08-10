<table class="table">
    <thead class="thead-dark" style="background-color: gray">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Is admin</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td> 
                  @if ($user->is_admin == 1)
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                      <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                    </svg>
                  @endif
                </td>
                <td>
                    {{-- EDIT BUTTON --}}
                    <a class="btn btn-primary" href="{{ route('userEditAdmModule', $user->id) }}" >{{ __('EDIT') }}</a>

                    {{-- ROLES BUTTON --}}
                    <a class="btn btn-success" href="{{ route('showRolesModel', $user->id) }}">{{ __('ROLES') }}
                    </a>

                    {{-- DELETE BUTTON --}}
                    <a class="btn btn-danger" href="" onclick="event.preventDefault();
                    document.getElementById('destoryUser-{{ $user->id }}-form').submit();">{{ __('DELETE') }}</a>
                    <form 
                      id="destoryUser-{{ $user->id }}-form" 
                      method="POST" 
                      action="{{ route('userDestroyAdmModule', $user->id) }}"  
                      class="d-none">
                        @method('DELETE')
                        @csrf
                    </form>
                </td>
            </tr> 
        @endforeach
    </tbody>
  </table>

  
<div class="modal" id="rolesModel" @if(session()->get('show_modal')) style='display: block' @endif>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add new menu item</h5>
      </div>
      <div class="modal-body">

              <x-edit-user-roles user="{{ session()->get('show_modal') }}"></x-edit-user-roles>

      </div>
      <div class="modal-footer">
          
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="
        document.getElementById('rolesModel').style.display='none'">Close</button>
        <button type="button" class="btn btn-success" onclick="event.preventDefault();
        document.getElementById('user-role-modal').submit();">Save changes</button>
      </div>
    </div>
  </div>
</div>