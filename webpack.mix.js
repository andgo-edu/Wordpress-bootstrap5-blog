const mix = require('laravel-mix');

mix.js('src/dist/app.js','dist').sass('src/dist/app.scss', 'dist').setPublicPath('dist');

