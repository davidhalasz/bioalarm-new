<div class="p-6 w-full overflow-auto" x-data="{ open: false, cikkId: 0 }">
    <table class="table-auto table-bordered p-6 mx-auto">
        <tr class="p-6">
            <th class="text-center py-2 px-6">Cim</th>
            <th class="text-center py-2 px-6">Publikálva</th>
            <th class="text-center py-2 px-6"></th>
            <th class="text-center py-2 px-6"></th>
        </tr>
        @foreach ($hirek as $hir)
            <tr>
                <td class="py-2 px-6">{{ $hir->title }}</td>
                <td class="py-2 px-6">{{ $hir->created_at }}</td>
                <td class="py-2 px-6 text-center">
                    <a href="{{ url("/hir-szerkesztese/" . $hir->id) }}">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                            Szerkesztés
                        </button>
                    </a>

                </td>
                <td class="py-2 px-6 text-center">
                    <button x-on:click="open = true" @click="cikkId = '{{ $hir->id }}'"
                        class="modal-button bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">Törlés</button>
                </td>

            </tr>
        @endforeach
    </table>


    <div x-show="open" x-transition="" x-on:click="open = false"
        class="relative flex min-h-screen items-center justify-center p-4" style="display: none;">

        <div x-on:click.stop="" x-trap.noscroll.inert="open"
            class="relative w-full max-w-2xl overflow-y-auto rounded-xl bg-white p-12 shadow-lg">

            <h2 class="text-3xl font-bold" :id="$id('modal-title')" id="modal-title-1">Törlés</h2>

            <p class="mt-2 text-gray-600">Biztosan törölni szeretnéd a cikket?</p>

            <div class="mt-8 flex space-x-2">
                <button type="button" @click="$wire.delete(cikkId)" x-on:click="open = false"
                    class="rounded-md border border-gray-200 bg-red-500 text-white px-5 py-2.5">
                    Igen
                </button>

                <button type="button" x-on:click="open = false"
                    class="rounded-md border border-gray-200 bg-white px-5 py-2.5">
                    Mégsem
                </button>
            </div>
        </div>

    </div>
