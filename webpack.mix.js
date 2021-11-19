let mix = require('laravel-mix');
mix.sass('scss/style.scss', 'dist/css/');

/*
 |--------------------------------------------------------------------------
 | Browsersync
 |--------------------------------------------------------------------------
 */
 mix.browserSync({
    proxy: 'http://wwwdev.php8/egr',
    files: ['js/**/*.js', 'dist/css/**/*.css'],
    stream: true,
  });