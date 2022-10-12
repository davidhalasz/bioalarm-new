<?php

namespace App\Http\Livewire;
use App\Models\Hir;
use Livewire\Component;

class FormHir extends Component
{
    public $title;
    public $body;

    public function submit()
    {
        $validatedData = $this->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        Hir::create($validatedData);

        return redirect()->to('/hirek');
    }

    public function render()
    {
        return view('livewire.form-hir');
    }
}
