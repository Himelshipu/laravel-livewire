<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;
use Livewire\WithPagination;

class Students extends Component
{
    public $first_name;
    public $last_name;
    public $email;
    public $phone;
    public $ids;
    public $searchTerm;

    public function resetInputFields(){
         $this->first_name ='';
         $this->last_name ='';
         $this->email ='';
         $this->phone ='';
    }

    public function store(){
        $validateData=$this->validate([
            'first_name'=>'required|min:2|max:20',
            'last_name'=>'required|min:2|max:20',
            'email'=>'required|email',
            'phone'=>'required|numeric',
        ]);
        Student::create($validateData);
        session()->flash('message','Student Created Successfully');
        $this->resetInputFields();
        $this->emit('studentAdded');

    }

    public function edit($id){
        $student = Student::where('id',$id)->first();
        $this->ids = $student->id;
        $this->first_name = $student->first_name;
        $this->last_name = $student->last_name;
        $this->email = $student->email;
        $this->phone = $student->phone;
    }

    public function update(){
        $this->validate([
            'first_name'=>'required|min:2|max:20',
            'last_name'=>'required|min:2|max:20',
            'email'=>'required|email',
            'phone'=>'required|numeric',
        ]);
        if($this->ids){
            $student = Student::find($this->ids);
            $student->update([
                'first_name'=>$this->first_name,
                'last_name'=>$this->last_name,
                'email'=>$this->email,
                'phone'=>$this->phone,
            ]);
            session()->flash('message','Student Created Successfully');
            $this->resetInputFields();
            $this->emit('studentUpdated');

        }

    }

    public function delete($id){
        if($id){
          Student::where('id',$id)->delete();
          session()->flash('message','Student Deleted Successfully');
        }
    }

    use WithPagination;
    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';
        $students = Student::where('first_name','LIKE',$searchTerm)
        ->orWhere('last_name','LIKE',$searchTerm)
        ->orWhere('email','LIKE',$searchTerm)
        ->orWhere('phone','LIKE',$searchTerm)
        ->orderBy('id','DESC')->paginate(5);
        return view('livewire.students',['students'=>$students]);
    }
}
