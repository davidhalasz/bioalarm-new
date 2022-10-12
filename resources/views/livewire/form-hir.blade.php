<form wire:submit.prevent="submit">
    <div class="form-group mb-6 text-gray-900">
        <label for="title" class="block mb-2 text-sm font-medium">Cím</label>
        <input type="text" id="title" wire:model="title"
            class="bg-gray-50 border border-gray-300 text-black 
            rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
        @error('title')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group mb-6">
        <label for="body" class="block mb-2 text-sm font-medium">Szöveg</label>
<div wire:model.lazy="body" 
wire:ignore
x-data
@trix-blur="$dispatch('change', $event.target.value)"
>

    <trix-editor></trix-editor>
</div>
        
        @error('body')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="w-full">
        <button type="submit" class="px-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Küldés</button>
    </div>
</form>