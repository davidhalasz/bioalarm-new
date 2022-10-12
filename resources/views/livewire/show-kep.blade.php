<div class="p-6 mx-auto">
    <div class="flex flex-wrap gap-4 justify-center">
        @foreach ($kepek as $kep)
            <div class="h-52 w-52 relative">
                <img class="w-full h-full object-cover" src="{{ url('/storage/galeria/' . $kep->filepath) }}" />
                <button wire:click="delete({{ $kep->id }})"
                    class="absolute bg-red-500 hover:bg-red-700 text-white rounded-full -top-2 -right-2">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                          </svg>                          
                    </span>
                </button>
            </div>
        @endforeach
    </div>
</div>
