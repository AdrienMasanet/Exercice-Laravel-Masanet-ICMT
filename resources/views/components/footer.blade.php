<nav id="footer" class="bg-gray-500">
    <div class="container mx-auto pt-8 pb-4">

        <div class="flex flex-wrap overflow-hidden sm:-mx-1 md:-mx-px lg:-mx-2 xl:-mx-2">

            <div class="w-full overflow-hidden sm:my-1 sm:px-1 sm:w-full md:my-px md:px-px md:w-1/2 lg:my-2 lg:px-2 lg:w-1/4 xl:my-2 xl:px-2 xl:w-1/4 pb-6">
                <a href="/"><img style="max-width: 70%;height:auto;" class="m-auto" src=" {{ URL::asset('/images/Logo-big.png') }} " alt=" Logo"></a>
            </div>

            <div class="w-full overflow-hidden sm:my-1 sm:px-1 sm:w-full md:my-px md:px-px md:w-1/2 lg:my-2 lg:px-2 lg:w-1/4 xl:my-2 xl:px-2 xl:w-1/4 pb-6">


                <h4 class="text-white text-center lg:text-left">Important</h4>
                <ul class="nav navbar-nav">
                    <li id="navi-2" class="leading-7 text-sm text-center lg:text-left">
                        <a class="text-white underline text-small" href="/page-1">Page 1 </a>
                    </li>
                    <li id="navi-1" class="leading-7 text-sm text-center lg:text-left">
                        <a class="text-white underline text-small" href="/page-2">Page 2</a>
                    </li>
                </ul>


            </div>

            <div class="w-full overflow-hidden sm:my-1 sm:px-1 sm:w-full md:my-px md:px-px md:w-1/2 lg:my-2 lg:px-2 lg:w-1/4 xl:my-2 xl:px-2 xl:w-1/4 pb-6">
                <h4 class="text-white text-center lg:text-left">Info</h4>
                <ul class="">
                <li id=" navi-2" class="leading-7 text-sm text-center lg:text-left">
                    <a class="text-white underline text-small" href="/page-1">Page 1 </a>
                    </li>
                    <li id="navi-1" class="leading-7 text-sm text-center lg:text-left">
                        <a class="text-white underline text-small" href="/page-2">Page 2</a>
                    </li>
                </ul>
            </div>

            <div class="w-full overflow-hidden sm:my-1 sm:px-1 sm:w-full md:my-px md:px-px md:w-1/2 lg:my-2 lg:px-2 lg:w-1/4 xl:my-2 xl:px-2 xl:w-1/4 pb-6">

                <h4 class="text-white text-center lg:text-left">Products</h4>
                <ul class="">
                <li id=" navi-2" class="leading-7 text-sm text-center lg:text-left">
                    <a class="text-white underline text-small" href="/page-1">
                        Page 1 </a>
                    </li>
                    <li id="navi-1" class="leading-7 text-sm text-center lg:text-left">
                        <a class="text-white underline text-small" href="/page-2">Page 2</a>
                    </li>
                </ul>
            </div>

        </div>

        <div class="pt-4 md:flex md:items-center md:justify-center " style="border-top:1px solid white">
            <ul class="">
                <li class=" md:mx-2 md:inline leading-7 text-sm text-center lg:text-left" id="footer-navi-2"><a class="text-white underline text-small text-center lg:text-left" href="/disclaimer">Loi RGPD</a></li>
                <li class="md:mx-2 md:inline leading-7 text-sm text-center lg:text-left" id="footer-navi-2"><a class="text-white underline text-small text-center lg:text-left" href="/cookie">Mentions Légales</a></li>
                <li class="md:mx-2 md:inline leading-7 text-sm text-center lg:text-left" id="footer-navi-2"><a class="text-white underline text-small text-center lg:text-left" href="/privacy">Privacy</a></li>
            </ul>
        </div>

        <div class="w-full text-center my-3">
            <p>&copy; Réalisé par Adrien MASANET - L'Idem {{ $currentYear }}</p>
        </div>

    </div>
</nav>
