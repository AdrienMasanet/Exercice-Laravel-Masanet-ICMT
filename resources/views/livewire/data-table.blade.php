<div>
    <div id='data-table' class="p-5 mt-0 pretty-border shadow-lg">

        <div class="flex w-full">
            <div class="flex w-10/12 shadow-md p-1 mb-3 pretty-border bg-white">
                <input type="text" placeholder="Rechercher..." class="flex-grow p-2" wire:model.debounce.200ms="search" />
                <i class="fa fa-search color-darkblue self-center px-3 p-2"></i>
            </div>
            <div class="w-2/12 pl-2 mb-3">
                <button class="button w-full h-full text-xl">Créer</button>
            </div>
        </div>

        <table id="example" class="pretty-border" style="width:100%;">

            <thead class="mb-5">
                <tr>
                    @foreach ($indexFields as $field)
                        <th data-priority="{{ $loop->index + 1 }}">{{ __('datatables.' . $field) }}</th>
                    @endforeach

                    <th class="w-5">Actions</th>

                </tr>
            </thead>

            <tbody>
                @forelse ($elements as $element)
                    <tr>

                        @foreach ($indexFields as $field)
                            <td>{!! method_exists($element, 'getFormatted' . Str::camel($field)) ? $element->{'getFormatted' . str::camel($field)}() : $element->$field !!}</td>
                        @endforeach

                        <td class="flex justify-around align-center">
                            <i wire:click="$emitSelf('onOpenViewModal')" class="far fa-eye color-orange drop-shadow mt-1"></i>
                            <i wire:click="$emitSelf('onOpenEditModal')" class="fas fa-edit color-orange drop-shadow mt-1"></i>
                            <i wire:click="$emitSelf('onOpenRemoveModal')" class="far fas fa-trash-alt color-orange drop-shadow mt-1"></i>
                        </td>

                    </tr>

                @empty
                    <tr>
                        <td colspan="100%" class="text-center py-5">Aucune donnée</td>
                    </tr>
                @endforelse

            </tbody>

        </table>

        <div class="w-full mt-5">
            {{ $elements->links('components.pagination') }}
        </div>

    </div>
</div>
