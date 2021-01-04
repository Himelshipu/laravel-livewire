<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactInfo extends Component
{
    public $name;
    public $email;
    public $secretKey;
    public $address;
    public $city;
    public $state;
    public $zip;
    public $games=[];
    public $gender;
    public $bio;

    public function updated($fields){
        $this->validateonly($fields,[
            'name'=>'required|min:3|max:20',
            'email'=>'required|email',
            'secretKey'=>'required|min:5|max:10',
            'address'=>'required',
            'city'=>'required',
            'zip'=>'required|numeric|digits:4',
            'bio'=>'required|min:3|max:20',
    ]);
    }

    public function save(){
        $this->validate([
            'name'=>'required|min:3|max:20',
            'email'=>'required|email',
            'secretKey'=>'required|min:5|max:10',
            'address'=>'required',
            'city'=>'required',
            'zip'=>'required|numeric|digits:4',
            'bio'=>'required|min:3|max:20',

            ]);

            dd($this->name,$this->email,$this->secretKey,$this->address,$this->city,$this->zip,$this->bio,$this->games);
    }

    public function render()
    {
        return view('livewire.contact-info');
    }
}
