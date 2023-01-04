<?php

namespace App\Http\Livewire;
use App\Models\Hir;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class FormHir extends Component
{
    use WithFileUploads;
    public $title;
    public $body;
    public $photos = [];

    public function submit()
    {
        $validatedData = $this->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        Hir::create($validatedData);

        return redirect()->to('/hirek');
    }
    public function completeUpload(string $uploadedUrl, string $trixUploadCompletedEvent){

        foreach($this->photos as $photo){
            if($photo->getFilename() == $uploadedUrl) {
                // store in the public/photos location
                $newFilename = $photo->store('public');

                // get the public URL of the newly uploaded file
                $url = Storage::url($newFilename);

                $this->dispatchBrowserEvent($trixUploadCompletedEvent, [
                    'url' => $url,
                    'href' => $url,
                ]);
            }
        }
    } 


    public function render()
    {
        return view('livewire.form-hir');
    }
}
