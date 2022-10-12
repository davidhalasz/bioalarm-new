<div class="w-full lg:w-6/12 xl:w-5/12 px-4 " >

    <div
       class="
       bg-white
       rounded-lg
       shadow-lg
       py-12
       px-8
       sm:p-[60px]
       lg:px-12
       xl:p-60px
       "
       >
       @if (session()->has('message'))
       <div x-data="{showMessage: true}" x-show="showMessage" x-init="setTimeout(() => showMessage = false, 3000)">
    
       <div  class="rounded bg-green-400 p-4 text-white mb-6">
          {{ session('message') }}
       </div>
    
       </div>
       @endif
       
       <h3 class="font-semibold text-black text-2xl sm:text-[28px] mb-8">
          Vegye fel velünk a kapcsolatot
       </h3>
       <form wire:submit.prevent="save">
          <div class="mb-6">
             <label class="text-xs text-body-color block">
             Név*
             </label>
             <input
             wire:model="nev"
                type="text"
                placeholder="Az Ön neve"
                class="
                border-b border-[#f1f1f1]
                w-full
                text-base text-body-color
                py-4
                focus-visible:shadow-none
                focus:border-primary
                outline-none
                "
                />
               @error('nev')
                  <span class="text-red-500">
                     {{ $message }}
                  </span>  
               @enderror
          </div>
          <div class="mb-6">
             <label class="text-xs text-body-color block">Email*</label>
             <input
             wire:model="email"
                type="email"
                placeholder="example@yourmail.com"
                class="
                border-b border-[#f1f1f1]
                w-full
                text-base text-body-color
                py-4
                focus-visible:shadow-none
                focus:border-primary
                outline-none
                "
                />
                @error('email')
                <span class="text-red-500">
                   {{ $message }}
                </span>  
             @enderror
          </div>
          <div class="mb-6">
             <label class="text-xs text-body-color block">Üzenet*</label>
             <textarea
             wire:model="uzenet"
                rows="6"
                placeholder="Irja meg nekünk üzenetét"
                class="
                border border-[#f1f1f1]
                w-full
                p-2
                text-base text-body-color
                py-4
                resize-none
                focus-visible:shadow-none
                focus:border-primary
                outline-none
                "
                ></textarea>
                @error('uzenet')
                <span class="text-red-500">
                   {{ $message }}
                </span>  
             @enderror
          </div>
          <div>
             <button
                type="submit"
                class="
                text-white
                bg-primary
                text-base
                font-medium
                rounded
                px-10
                py-3
                transition
                hover:bg-opacity-90
                "
                >
             Üzenet küldése
             </button>
          </div>
       </form>
    </div>

 </div>


