const mix = require('laravel-mix');

// frontend
mix.styles([
   'public/frontend/css/bootstrap.min.css',
   'public/frontend/css/style.css',
],'public/css/main.css').version();

mix.scripts([
    'public/frontend/js/bootstrap.min.js',
],'public/js/main.js').version();
