<table class="table">
    <thead class="thead-dark" style="background-color: gray">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Short text</th>
        <th scope="col">Long text</th>
        <th scope="col">Description</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($items as $item)
            <tr>
                <th scope="row">{{ $item->id }}</th>
                <td>{{ $item->sort_text }}</td>
                <td>{{ $item->long_text }}</td>
                <td>{{ $item->description }}</td>
                <td>
                    <button 
                        onclick="
                            document.getElementById('itemsModal').style.display='block'
                            document.getElementById('exampleModalLabel').innerText = 'Change role item #{{ $item->id }}'
                            document.getElementById('itemShortText').value = '{{ $item->sort_text }}'
                            document.getElementById('itemLongtText').value = '{{ $item->long_text }}'
                            document.getElementById('desc').value = '{{ $item->description }}'
                            document.getElementById('modal-roles-item-form').action = '{{ route('editRolesModule', $item->id) }}'"
                        class="btn btn-primary">
                        EDIT
                    </button>

                    {{-- DELETE BUTTON --}}
                    <a class="btn btn-danger" href="" onclick="event.preventDefault();
                    document.getElementById('destoryAdmItem-{{ $item->id }}-form').submit();">{{ __('DELETE') }}</a>
                    <form 
                      id="destoryAdmItem-{{ $item->id }}-form" 
                      method="POST" 
                      action="{{ route('deleteRolesModule', $item->id) }}"  
                      class="d-none">
                        @method('DELETE')
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
                id="modal-roles-item-form" 
                method="POST" >
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="itemShortText">Role short text</label>
                    <input type="text" class="form-control" id="itemShortText" name="sort_text">
                </div><br>
                <div class="form-group">
                    <label for="itemLongText">Role long text</label>
                    <input type="text" class="form-control" id="itemLongtText" name="long_text">
                </div><br>
                <div class="form-group">
                    <label for="desc">Description</label>
                    <input type="text" class="form-control" id="desc" name="description">
                </div>
            </form>
        </div>
        <div class="modal-footer">
            
          <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="
          document.getElementById('itemsModal').style.display='none'">Close</button>
          <button type="button" class="btn btn-success" onclick="event.preventDefault();
          document.getElementById('modal-roles-item-form').submit();">Save changes</button>
        </div>
      </div>
    </div>
  </div>