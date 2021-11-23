<div>
    <div id='data-table' class="p-8 mt-0 pretty-border shadow-lg">

        <div class="flex w-full shadow-md p-1 mb-3 pretty-border bg-white">
            <input type="text" placeholder="Rechercher..." class="flex-grow p-2" wire:model.debounce.200ms="search" />
            <i class="fa fa-search color-darkblue self-center px-3 p-2"></i>
        </div>

        <table id="example" class="pretty-border" style="width:100%;">

            <thead class="mb-5">
                <tr>
                    @foreach ($fields as $field)
                        <th data-priority="{{ $loop->index + 1 }}">{{ __('datatables.' . $field) }}</th>
                    @endforeach
                </tr>
            </thead>

            <tbody>
                @foreach ($elements as $element)
                    <tr>
                        @foreach ($fields as $field)
                            <td>{{ $element->$field }}</td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>

        </table>

        <div class="w-full mt-5">
            {{ $elements->links('components.pagination') }}
        </div>

    </div>
</div>
