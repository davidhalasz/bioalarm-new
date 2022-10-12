<?php

namespace App\Http\Livewire;
use App\Models\Kapcsolat;
use Livewire\Component;


class Contact extends Component
{

    public $nev = '';
    public $email = '';
    public $uzenet = '';

    private function resetInputFields() {
       $this->nev = "";
       $this->email = "";
       $this->uzenet = "";
    }

    public function save()
    {

        $this->validate([
            'nev' => 'required',
            'email' => 'required',
            'uzenet' => 'required',
        ],
        [
            'nev.required' => 'Név megadása kötelező',
            'email.required' => 'Email megadása kötelező',
            'uzenet.required' => 'Üzenet megadása kötelező',
        ],
        
    );

        Kapcsolat::create([
            'nev' => $this->nev,
            'email' => $this->email,
            'uzenet' => $this->uzenet,
        ]);
        $this->resetInputFields();
        session()->flash('message', 'Üzenet sikeresen elküldve');
    }


    public function render()
    {
        return view('livewire.contact');
    }
}
