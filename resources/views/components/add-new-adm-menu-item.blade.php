<button 
    onclick="
        document.getElementById('newItemsModal').style.display='block'"
    class="btn btn-success">
    ADD NEW MENU ITEM
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
                id="modal-new-menu-item-form" 
                method="POST" 
                action = "{{ route('newAdmMenuItem') }}">
                @method('POST')
                @csrf
                <div class="form-group">
                    <label for="menuItemName">Item name</label>
                    <input type="text" class="form-control" id="menuItemName" name="name">
                </div>
                <div class="form-group">
                    <label for="routeName">Route name</label>
                    <input type="text" class="form-control" id="routeName" name="route">
                </div>
            </form>
        </div>
        <div class="modal-footer">
            
          <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="
          document.getElementById('newItemsModal').style.display='none'">Close</button>
          <button type="button" class="btn btn-success" onclick="event.preventDefault();
          document.getElementById('modal-new-menu-item-form').submit();">Save changes</button>
        </div>
      </div>
    </div>
  </div>