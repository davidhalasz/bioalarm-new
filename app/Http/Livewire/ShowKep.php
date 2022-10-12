<?php

namespace App\Http\Livewire;
use App\Models\Kep;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class ShowKep extends Component
{
    public function render()
    {
        return view('livewire.show-kep', [
            'kepek' => Kep::latest()->get()
        ]);
    }

    public function delete($id)
    {
        $kep=Kep::findOrFail($id);
        if(Storage::exists('public/galeria/'.$kep->filepath)){
            Storage::delete('public/galeria/'.$kep->filepath);
            $kep->delete();
        } else{
            dd('File does not exists.');
        }
    }
}
