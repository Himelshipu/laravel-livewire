<div>
   <section>
       <div class="container">
           <div class="row">
            <div class="col-12">
                @if(session()->has('message'))
                <div class="alert alert-success">{{session('message')}}</div>
                @endif
            </div>
               <div class="col-md-6 offset-md-3">
                   <div class="card">
                       <div class="card-header">
                                <h3>File Upload</h3>
                       </div>
                       <div class="card-body">
                                <form action="" id="form-upload" enctype="multipart/form-data" wire:submit.prevent="fileUpload">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" name="title" class="form-control" wire:model="title">
                                        @error('title')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="filename" >File</label>
                                        <input class="form-control" type="file" name="filename"  wire:model="filename">
                                        @error('filename')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-success" >UPLOAD</button>
                                </form>
                       </div>
                       <div class="card-footer">

                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
</div>
