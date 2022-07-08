const mix = require('laravel-mix');

mix.js('sass/src/app.js','sass/dist').setPublicPath('sass/dist');

mix.sass('sass/src/app.scss', 'sass/dist').setPublicPath('sass/dist');

