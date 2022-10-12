<div class="p-6 mx-auto">
    <table class="table table-bordered p-6 mx-auto">
        <tr class="p-6">
            <th class="text-center py-2 px-6">Cim</th>
            <th class="text-center py-2 px-6">Publikálva</th>
            <th class="text-center py-2 px-6"></th>
        </tr>
        @foreach ($hirek as $hir)
        <tr>
            <td class="py-2 px-6">{{ $hir->title }}</td>
            <td class="py-2 px-6">{{ $hir->created_at }}</td>
            <td class="py-2 px-6 text-center">
                <button wire:click="delete({{ $hir->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">Törlés</button>
            </td>
        </tr>
        @endforeach
      </table>
</div>