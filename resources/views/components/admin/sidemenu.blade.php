<div class="flex flex-col md:flex-row">

    <div class="background-darkblue shadow-xl bottom-0 md:relative z-10 h-full min-h-screen w-full md:w-60">

        <div class="md:w-60 md:fixed md:left-0 md:top-0 content-center md:content-start text-left justify-between">
            <ul class="list-reset flex flex-row md:flex-col py-0 md:py-3 px-1 md:px-2 text-center md:text-left">

                <div class="w-2/3 overflow-hidden sm:px-1 sm:w-full md:my-px md:px-px lg:px-2 xl:px-2 py-3">
                    <a href="/"><img class="m-auto max-h-16" src=" {{ URL::asset('/images/icmt-light-logo-small.png') }} " alt="logo ICMT"></a>
                </div>

                @foreach ($menus as $menuItem)
                    <li class="mr-3 flex-1">
                        @if ($menuItem->getName() != 'separator')
                            <a href="{{ $menuItem->getRoute() }}" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover-border-color-orange">
                                <i class="{{ $menuItem->getIcon() }} pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">{{ $menuItem->getName() }}</span>
                            </a>
                        @else
                            <div class="border-b-2"></div>
                        @endif
                    </li>
                @endforeach

            </ul>
        </div>

    </div>

</div>
