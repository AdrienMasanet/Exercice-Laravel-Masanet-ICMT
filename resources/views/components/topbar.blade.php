<nav id="topbar" class="w-full flex items-center justify-between flex-wrap lg:px-36 fixed top-0">

    <div class="flex w-full lg:w-auto justify-around items-center">
        <div class="w-2/3 overflow-hidden sm:px-1 sm:w-full md:my-px md:px-px lg:px-2 xl:px-2 py-3">
            <a href="/"><img class="m-auto max-h-16" src=" {{ URL::asset('/images/icmt-light-logo-small.png') }} " alt="logo ICMT"></a>
        </div>

        <div class="block lg:hidden">
            <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 mobile-menu-toggler">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                </svg>
            </button>
        </div>
    </div>

    <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto text-center lg:p-5 lg:p-0 max-h-0 lg:max-h-screen topbar-items">
        <div class="text-sm lg:flex-grow">
            <a href="/" class="block my-2 lg:inline-block lg:mt-0 text-teal-200 hover:text-white lg:mr-4 topbar-item">Accueil</a>
            <a href="" class="block my-2 lg:inline-block lg:mt-0 text-teal-200 hover:text-white lg:mr-4 topbar-item">Fonctionnement</a>
            <a href="" class="block my-2 lg:inline-block lg:mt-0 text-teal-200 hover:text-white lg:mr-4 topbar-item">Actualités</a>
            <a href="" class="block my-2 lg:inline-block lg:mt-0 text-teal-200 hover:text-white lg:mr-4 topbar-item">Contact</a>
        </div>
        <hr class="lg:hidden my-4">
        <div>
            <a href="#" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white my-1 mx-2 lg:mt-0">S'inscrire</a>
        </div>
        <div>
            <a href="#" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white my-1 mx-2 lg:mt-0">Se connecter</a>
        </div>
    </div>

</nav>
