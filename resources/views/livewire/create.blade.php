
 <!-- Modal -->
  <div wire:ignore.self class="modal fade" id="addStudentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div>
                <form >
                
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">First name</label>
                            <input type="text" class="form-control" id="inputName" name="first_name" wire:model="first_name" value="{{ old('first_name' )}}">

                          </div>

                          <div class="form-group col-md-6">
                            <label for="inputEmail4">Last name</label>
                            <input type="text" class="form-control" id="inputName"  name="last_name" wire:model="last_name" value="{{ old('last_name' )}}">

                          </div>

                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" name="email" wire:model="email" value="{{ old('email' )}}">

                    </div>
                      <div class="form-group col-md-6">
                        <label for="inputSecretkey">Phone Number</label>
                        <input type="string" class="form-control" id="inputSecretkey"  name="phone" wire:model="phone" value="{{ old('phone' )}}">

                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" wire:click="resetInputFields()" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" wire:click="store()">Add </button>
        </div>
    </form>
      </div>
    </div>
  </div>

