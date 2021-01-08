<div>
    @include('livewire.create')
    @include('livewire.update')
    <style>
        nav svg{
            height: 20px;
        }
    </style>
    <div class="card">
        <div class="card-header">
         <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addStudentModal">
    Add Student
  </button>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    @if(session()->has('message'))
                    <div class="alert alert-success">{{session('message')}}</div>
                    @endif
                </div>
            </div>
            <div class="row my-2">
                <div class="col-8">
                    <h5 class="card-title">All Students List</h5>
                </div>
                <div class="col-4">
                        <input type="text" class="form-control" placeholder="search....." wire:model="searchTerm">
                </div>
            </div>

          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                <tr>
                    <td></td>
                    <td>{{ $student->first_name }}</td>
                    <td>{{ $student->last_name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>
                        <button type="button" class="btn btn-info" data-toggle="modal"
                        data-target="#updateStudentModal" wire:click="edit({{ $student->id }})">
                            Edit
                        </button>

                        <button type="button" class="btn btn-danger" wire:click="delete({{ $student->id }})">
                            Delete
                        </button>
                    </td>
                  </tr>
                @endforeach
            </tbody>
          </table>
        </div>
        <div class="card-footer text-muted">
            {{ $students->links() }}
        </div>
      </div>
</div>
