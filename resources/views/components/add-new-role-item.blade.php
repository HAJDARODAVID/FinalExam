<button 
    onclick="
        document.getElementById('newItemsModal').style.display='block'"
    class="btn btn-success">
    ADD NEW ROLE
</button>

<!-- Modal -->
<div class="modal" id="newItemsModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add new menu item</h5>
        </div>
        <div class="modal-body">
            <form 
                id="modal-new-role-item-form" 
                method="POST" 
                action = "{{ route('newRolesModule') }}">
                @method('POST')
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
          document.getElementById('newItemsModal').style.display='none'">Close</button>
          <button type="button" class="btn btn-success" onclick="event.preventDefault();
          document.getElementById('modal-new-role-item-form').submit();">Save changes</button>
        </div>
      </div>
    </div>
  </div>