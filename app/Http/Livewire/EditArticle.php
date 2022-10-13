<?php

namespace App\Http\Livewire;
use App\Models\Hir;
use Livewire\Component;

class EditArticle extends Component
{
    public $title;
    public $body;
    public $cikkId;

    public function mount() 
    {  
        $cikk = Hir::findOrFail($this->cikkId);
        $this->title = $cikk->title; 
        $this->body = $cikk->body; 
    }

    public function submit($id)
    {
        $validatedData = $this->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $cikk = Hir::findOrFail($this->cikkId);
        $cikk->title = $this->title;
        $cikk->body = $this->body;
        $cikk->save();

        return redirect()->to('/hirek');
    }

    public function render()
    {
        $cikk = Hir::findOrFail($this->cikkId);
        return view('livewire.edit-article', compact(['cikk']));
    }
}
 