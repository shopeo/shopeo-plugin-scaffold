let mix = require('laravel-mix');

mix.js('src/assets/js/app.js', 'assets/js').sass('src/assets/scss/app.scss', 'assets/css', [], [require('postcss-import'), require('autoprefixer'),]).sass('src/assets/scss/app-rtl.scss', 'assets/css', [], [require('postcss-import'), require('rtlcss'), require('autoprefixer'),]);
