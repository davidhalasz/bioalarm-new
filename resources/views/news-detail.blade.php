<x-guest-layout>
    <div class="container mx-auto my-12">
        <a href="{{ url('/#hirek-esemenyek') }}">
            <button class="mt-4 flex">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
                    </svg>
                </span>
                VISSZA
            </button>
        </a>
        <h1 class="text-center text-2xl mt-10 mb-8">
            {{ $cikk->title }}
        </h1>
        <div class="text-justify text-lg leading-relaxed">
            {!! $cikk->body !!}
        </div>
    </div>
</x-guest-layout>
