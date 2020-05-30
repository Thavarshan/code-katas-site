const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

mix.js('resources/js/app.js', 'public/js')
    .sourceMaps()
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps()
    .options({
       processCssUrls: false,
       postCss: [tailwindcss()],
    })
    .browserSync('phpkata.test')
    .version();
