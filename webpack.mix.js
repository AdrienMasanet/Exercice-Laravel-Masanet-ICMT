const mix = require( 'laravel-mix' );

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js( 'resources/js/app.js', 'public/js' )
    .postCss( 'resources/css/app.css', 'public/css', [
        require( 'tailwindcss' )
    ] )
    .copy( 'resources/assets/images', 'public/images' )
    .copy( 'resources/assets/fonts', 'public/fonts' )
    .sass( 'resources/scss/app.scss', 'public/css' )
    .sass( 'resources/scss/admin.scss', 'public/css' )
    .version()
    .browserSync( {
        proxy: 'exercice-laravel-masanet-mr-robot.lndo.site',
        open: false
    } );

if ( mix.inProduction() ) {
    mix.version();
}
