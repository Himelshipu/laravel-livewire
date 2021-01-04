<div>
    <form wire:submit.prevent="save">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">name</label>
                <input type="text" class="form-control" id="inputName" placeholder="Name" wire:model="name" value="{{ old('name' )}}">
                @error('name')
                <p class="text-danger">{{ $message }}</p>
                @enderror
                {{ 'name' }}
              </div>

          <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Email" wire:model="email" value="{{ old('email' )}}">
            @error('email')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
          <div class="form-group col-md-6">
            <label for="inputSecretkey">Secret Key</label>
            <input type="password" class="form-control" id="inputSecretkey" placeholder="Secretkey" wire:model="secretKey" value="{{ old('secreKey' )}}">
            @error('secretKey')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

          <div class="form-group col-md-6">
            <label for="inputAddress">Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" wire:model="address" value="{{ old('address' )}}">
            @error('address')
            <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" id="inputCity" wire:model="city" value="{{ old('city' )}}">
            @error('city')
            <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
          <div class="form-group col-md-4">
            <label for="inputState">State</label>
            <select id="inputState" class="form-control" name="state">
              <option selected disabled>Choose...</option>
              <option wire:model="state" value="State">State 1</option>
              <option wire:model="state" value="State">State 2</option>
              <option wire:model="state" value="State">State 3</option>
            </select>
          </div>
          <div class="form-group col-md-2">
            <label for="inputZip">Zip</label>
            <input type="text" class="form-control" id="inputZip" wire:model="zip" value="{{ old('zip' )}}">
            @error('zip')
            <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
        </div>

        <div class="form-row">
        <div class="form-group col-6" >
            <label for="Games"> Favourite Games</label><br>
            <div class="form-check-inline">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" value="Cricket" wire:model="games">Cricket
                </label>
              </div>
              <div class="form-check-inline">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" value="Football" wire:model="games">Football
                </label>
              </div>
              <div class="form-check-inline">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" value="Hockey" wire:model="games">Hockey
                </label>
              </div>
        </div>

         <div class="form-group col-6" >
            <label for="gender"> Gender</label><br>
            <div class="form-check-inline">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="gender" wire:model="gender"  value="male">male
                </label>
              </div>
              <div class="form-check-inline">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="gender" wire:model="gender" value="female">female
                </label>
              </div>

              <div class="form-check-inline">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="gender" wire:model="gender" value="other">other
                </label>
              </div>
         </div>
        </div>

        <div class="form-group">
            <label for="bio">Bio:</label>
            <textarea class="form-control" rows="3" id="bio" wire:model="bio" name="bio"> {{ old('bio' )}}</textarea>
            @error('bio')
            <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>

        <button type="submit" class="btn btn-primary">Save</button>
      </form>
</div>
