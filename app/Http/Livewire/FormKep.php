<?php

namespace App\Http\Livewire;
use App\Models\Kep;
use Livewire\Component;
use Livewire\WithFileUploads;

class FormKep extends Component
{
    use WithFileUploads;
    public $filepath;
    public $inputs = [];
    public $i = 1;

    public function add($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs ,$i);
    }
 
    public function remove($i)
    {
        unset($this->inputs[$i]);
    }

    private function resetInputFields(){
        $this->title = '';
        $this->filename = '';
        $this->filepath = '';
    }

    public function submit()
    {
        $this->validate([
            'filepath.0' => 'required|mimes:jpg,png,jpeg',
            'filepath.*' => 'required|mimes:pdf,doc,docx,jpg,png,jpeg'
        ],
        [
            'filepath.0.required' => 'Fájl kiválasztása kötelező',
            'filepath.*.required' => 'Fájl kiválasztása kötelező',
        ]);


        foreach ($this->filepath as $key => $value) {
            $originalFileName =$this->filepath[$key]->getClientOriginalName();
            if(!empty($this->filepath[$key])) {
                $this->filepath[$key]->storeAs('public/galeria', $originalFileName);
            }
            Kep::create([
                'filepath' => $originalFileName
            ]);
        }

        $this->inputs = [];
        $this->resetInputFields();
        return redirect()->to('/kepek')->with('message', 'Kép(ek) sikeresen hozzáadva.');
    }

    public function render()
    {
        return view('livewire.form-kep');
    }
}
