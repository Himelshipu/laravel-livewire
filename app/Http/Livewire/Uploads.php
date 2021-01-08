<?php

namespace App\Http\Livewire;

use App\Models\Upload;
use Livewire\Component;
use Livewire\WithFileUploads;

class Uploads extends Component
{
    public $title;
    public $filename;

    use WithFileUploads;
    public function fileUpload(){
        $validateData=$this->validate([
            'title'=>'required|min:2|max:20',
            'filename'=>'required',
        ]);
        $filename =$this->filename->store('files','public');
        $validateData['filename']=$filename;
        Upload::create($validateData);
        session()->flash('message','FIle Uploaded Successfully');    
        $this->emit('fileUploaded');

    }


    public function render()
    {
        return view('livewire.uploads');
    }
}
