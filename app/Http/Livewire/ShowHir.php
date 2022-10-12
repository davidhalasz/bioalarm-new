<?php

namespace App\Http\Livewire;
use App\Models\Hir;
use Livewire\Component;

class ShowHir extends Component
{
    public function render()
    {
        return view('livewire.show-hir', [
            'hirek' => Hir::latest()->get()
        ]);
    }

    public function delete($id)
    {
        $hir=Hir::findOrFail($id);
        $hir->delete();
    }
}
