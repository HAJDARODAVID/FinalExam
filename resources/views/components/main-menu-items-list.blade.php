

<table class="table">
    <thead class="thead-dark" style="background-color: gray">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Route name</th>
        <th scope="col">Order</th>
        <th scope="col">For role</th>
        <th scope="col">Is active?</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($items as $item)
            <tr @if (!Route::has($item->route)) class="table-danger" @endif >
                <th scope="row">{{ $item->id }}</th>
                <td>{{ $item->name }}</td>
                <td>{{ $item->route }}</td>
                <td>{{ $item->order }}</td>
                <td>{{ $item->role_id }}</td>
                <td> 
                  @if ($item->active == 1)
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                      <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                    </svg>
                  @endif
                </td>
                <td>
                    
                    @if ($item->active == 1)
                        <a class="btn btn-secondary" style = "width: 120px" href="#" onclick="event.preventDefault();
                        document.getElementById('deactivate-{{ $item->id }}-form').submit();">{{ __('DEACTIVATE') }}</a>
                        <form 
                            id="deactivate-{{ $item->id }}-form" 
                            method="POST" 
                            action="{{ route('changeMenuItemStatus', ['id' => $item->id, 'type' => 'deactivate']) }}"  
                            class="d-none">
                                @method('PUT')
                                @csrf
                        </form>    
                    @else
                        <a class="btn btn-success" style = "width: 120px" href="#" onclick="event.preventDefault();
                        document.getElementById('activate-{{ $item->id }}-form').submit();">{{ __('ACTIVATE') }}</a>
                        <form 
                            id="activate-{{ $item->id }}-form" 
                            method="POST" 
                            action="{{ route('changeMenuItemStatus', ['id' => $item->id, 'type' => 'activate']) }}"  
                            class="d-none">
                                @method('PUT')
                                @csrf
                        </form>   
                    @endif 
                    

                    <button 
                        onclick="
                            document.getElementById('itemsModal').style.display='block'
                            document.getElementById('exampleModalLabel').innerText = 'Change menu item #{{ $item->id }}'
                            document.getElementById('menuItemName').value = '{{ $item->name }}'
                            document.getElementById('routeItemName').value = '{{ $item->route }}'
                            document.getElementById('modal-menu-item-form').action = '{{ route('editMenuItem', $item->id) }}'"
                        class="btn btn-primary">
                        EDIT
                    </button>

                    {{-- DELETE BUTTON --}}
                    <a class="btn btn-danger" href="" onclick="event.preventDefault();
                    document.getElementById('destoryAdmItem-{{ $item->id }}-form').submit();">{{ __('DELETE') }}</a>
                    <form 
                      id="destoryAdmItem-{{ $item->id }}-form" 
                      method="POST" 
                      action="{{ route('deleteMenuItem', $item->id) }}"  
                      class="d-none">
                        @method('DELETE')
                        @csrf
                    </form>

                    {{-- BUTTON UP --}}
                    <a class="btn btn-dark" style = "width: 50px" href="#" onclick="event.preventDefault();
                    document.getElementById('up-{{ $item->id }}-form').submit();"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
                    </svg></a>
                    <form 
                        id="up-{{ $item->id }}-form" 
                        method="POST" 
                        action="{{ route('changeMenuItemStatus', ['id' => $item->id, 'type' => 'up']) }}"  
                        class="d-none">
                            @method('PUT')
                            @csrf
                    </form>

                    {{-- BUTTON DOWN --}}
                    <a class="btn btn-dark" style = "width: 50px" href="#" onclick="event.preventDefault();
                    document.getElementById('down-{{ $item->id }}-form').submit();"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z"/>
                    </svg></a>
                    <form 
                        id="down-{{ $item->id }}-form" 
                        method="POST" 
                        action="{{ route('changeMenuItemStatus', ['id' => $item->id, 'type' => 'down']) }}"  
                        class="d-none">
                            @method('PUT')
                            @csrf
                    </form>
                </td>
            </tr> 
        @endforeach
    </tbody>
  </table>

  
  
  <!-- Modal -->
  <div class="modal" id="itemsModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        </div>
        <div class="modal-body">
            <form 
                id="modal-menu-item-form" 
                method="POST" >
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="menuItemName">Menu item name</label>
                    <input type="text" class="form-control" id="menuItemName" name="name">
                </div><br>
                <div class="form-group">
                  <label for="menuItemName">Menu item route</label>
                  <input type="text" class="form-control" id="routeItemName" name="route">
              </div>
              <div class="form-group col-md-4">
                <label for="inputRole">State</label>
                <select id="inputRole" class="form-control" name="role_id">
                  <option value = "0" selected>Choose new role...</option>
                  @foreach ($roles as $role)
                  <option value="{{ $role->id }}">{{ $role->sort_text }}</option>  
                  @endforeach
                </select>
              </div>
            </form>
        </div>
        <div class="modal-footer">
            
          <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="
          document.getElementById('itemsModal').style.display='none'">Close</button>
          <button type="button" class="btn btn-success" onclick="event.preventDefault();
          document.getElementById('modal-menu-item-form').submit();">Save changes</button>
        </div>
      </div>
    </div>
  </div>