{{ $user }}
<table class="table table-sm">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Short text</th>
        <th scope="col">Long text</th>
        <th scope="col">Is assigned</th>
      </tr>
    </thead>
    <tbody>
        <form action="{{ route('userRolesEditAdmModule', $user) }}" method="post" id="user-role-modal">
            @method('PUT')
            @csrf
            @foreach ($roleItems as $roleItem)
                <tr>
                    <th scope="row">{{ $roleItem->id }}</th>
                    <td>{{ $roleItem->sort_text }}</td>
                    <td>{{ $roleItem->long_text }}</td>
                    <td>
                        <input class="form-check-input" type="checkbox" 
                            @foreach ($userRoles as $userRole)
                                @if ($userRole->role_id == $roleItem->id)
                                    checked 
                                @endif                       
                            @endforeach
                        name='role_id_{{ $roleItem->id }}'>
                    </td>
                </tr>
            @endforeach
        </form>
    </tbody>
  </table>