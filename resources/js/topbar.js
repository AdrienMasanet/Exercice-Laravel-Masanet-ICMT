if ( !window.location.href.indexOf( "admin" ) ) {
    mobileMenu = document.querySelector( ".topbar-items" )

    // Gestion du toggle button pour les téléphones
    mobileMenuToggleButton = document.querySelector( ".mobile-menu-toggler" )
    mobileMenuToggleButton.addEventListener( "click", function ()
    {
        if ( mobileMenu.classList.contains( "expanded" ) ) {
            mobileMenu.classList.remove( "expanded" )
        } else {
            mobileMenu.classList.add( "expanded" );
        }
    } )

    // déplacement vers le bas du contenu en fonction de la taille de la topbar
    topbar = document.querySelector( "#topbar" )
    content = document.querySelector( "#content" )
    content.style.marginTop = topbar.offsetHeight + "px"
}
