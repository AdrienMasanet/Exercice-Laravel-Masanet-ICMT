<div id="modal-{{ $modalId }}">

    @if ($active)

        <div class="absolute background h-screen w-screen z-50" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

                <div wire:click="$emitSelf('onCloseModal')" class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

                <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="sm:flex sm:items-start">

                            @switch($modalStyle)
                                @case('success')
                                    <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-green-100 sm:mx-0 sm:h-10 sm:w-10">
                                        <i class="far fa-check-circle text-green-700"></i>
                                    </div>
                                @break
                                @case('info')
                                    <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-blue-100 sm:mx-0 sm:h-10 sm:w-10">
                                        <i class="fas fa-exclamation-circle color-darkblue"></i>
                                    </div>
                                @break
                                @case('danger')
                                    <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-yellow-100 sm:mx-0 sm:h-10 sm:w-10">
                                        <i class="fas fa-exclamation-triangle color-orange"></i>
                                    </div>
                                @break
                                @case('remove')
                                    <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                        <i class="fas fa-trash text-red-700"></i>
                                    </div>
                                @break
                                @case('edit')
                                    <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-yellow-100 sm:mx-0 sm:h-10 sm:w-10">
                                        <i class="fas fa-edit color-orange"></i>
                                    </div>
                                @break
                                @case('new')
                                    <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-blue-100 sm:mx-0 sm:h-10 sm:w-10">
                                        <i class="fas fa-plus-circle color-darkblue"></i>
                                    </div>
                                @break
                            @endswitch

                            @if (isset($modalTitle) or isset($modalText))
                                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">

                                    @isset($modalTitle)
                                        <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                                            {{ $modalTitle }}
                                        </h3>
                                    @endisset

                                    @isset($modalText)
                                        <div class="mt-2">
                                            <p class="text-sm text-gray-500">
                                                {{ $modalText }}
                                            </p>
                                        </div>
                                    @endisset

                                </div>
                            @endif

                        </div>
                    </div>

                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">

                        @if ($modalType == 'action')

                            @switch($modalStyle)
                                @case('success')
                                    <button wire:click="$emitSelf('{{ $buttonCallback }}')" type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-green-300 text-base font-medium color-darkblue hover:bg-green-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 sm:ml-3 sm:w-auto sm:text-sm">
                                        {{ $modalActionText }}
                                    </button>
                                @break
                                @case('info')
                                    <button wire:click="$emitSelf('{{ $buttonCallback }}')" type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-300 text-base font-medium color-darkblue hover-background-darkblue hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 sm:ml-3 sm:w-auto sm:text-sm">
                                        {{ $modalActionText }}
                                    </button>
                                @break
                                @case('danger')
                                    <button wire:click="$emitSelf('{{ $buttonCallback }}')" type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-yellow-300 text-base font-medium color-darkblue hover-background-orange hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 sm:ml-3 sm:w-auto sm:text-sm">
                                        {{ $modalActionText }}
                                    </button>

                                @break
                                @case('remove')
                                    <button wire:click="$emitSelf('{{ $buttonCallback }}')" type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-300 text-base font-medium color-darkblue hover-background-darkblue hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 sm:ml-3 sm:w-auto sm:text-sm">
                                        {{ $modalActionText }}
                                    </button>
                                @break
                                @default
                                    <button wire:click="$emitSelf('{{ $buttonCallback }}')" type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-gray-300 text-base font-medium color-darkblue hover-background-darkblue hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 sm:ml-3 sm:w-auto sm:text-sm">
                                        {{ $modalActionText }}
                                    </button>
                                @break
                            @endswitch

        @endif

        <button wire:click="$emitSelf('onCloseModal')" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium color-darkblue hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
            {{ $modalDismissText }}
        </button>

    </div>

    </div>
    </div>
    </div>

    @endif

    </div>
