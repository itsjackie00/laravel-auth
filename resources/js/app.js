import "./bootstrap";
import "~resources/scss/app.scss";
import "./partials/variables";
import * as bootstrap from "bootstrap";
import.meta.glob(["../img/**", "../fonts/**"]);

const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .sourceMaps();

// Per vedere cambiamenti in tempo reale
if (!mix.inProduction()) {
    mix.browserSync('http://localhost:8000');
}