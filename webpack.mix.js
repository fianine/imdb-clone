const mix = require('laravel-mix');

// frontend
mix.styles([
   'public/frontend/css/bootstrap.min.css',
   'public/frontend/css/style.css',
],'public/css/main.css').version();

mix.styles([
   'public/frontend/css/signin.css',
],'public/css/signin.css').version();

mix.scripts([
    'public/frontend/js/bootstrap.min.js',
],'public/js/main.js').version();

// backend
mix.styles([
   'public/backend/css/bootstrap/bootstrap.min.css',
   'public/backend/css/style.css',
   'public/backend/css/colors/blue.css',
],'public/css/login.css').version();

mix.scripts([
    'public/backend/js/jquery/jquery.min.js',
    'public/backend/js/popper/popper.min.js',
    'public/backend/js/bootstrap/bootstrap.min.js',
    'public/backend/js/jquery.slimscroll.js',
    'public/backend/js/waves.js',
    'public/backend/js/sidebarmenu.js',
    'public/backend/js/sticky-kit.min.js',
    'public/backend/js/jquery/jquery.sparkline.min.js',
    'public/backend/js/custom.min.js',
    'public/backend/js/jquery/jquery.style.switcher.js',
],'public/js/login.js').version();

mix.styles([
   'public/backend/css/bootstrap/bootstrap.min.css',
   'public/backend/css/colors/blue.css',
   'public/backend/css/style.css',
],'public/css/dashboard.css').version();

mix.styles([
   'public/backend/plugins/html5-editor/bootstrap-wysihtml5.css',
   'public/backend/plugins/footable/css/footable.bootstrap.min.css',
   'public/backend/plugins/bootstrap-select/bootstrap-select.min.css',
   'public/backend/plugins/datatables/media/css/dataTables.bootstrap4.css',
   'public/backend/plugins/Magnific-Popup-master/dist/magnific-popup.css',
   'public/backend/plugins/sweetalert/sweetalert.css',
   'public/backend/plugins/select2/dist/css/select2.min.css',
],'public/css/plugins.css').version();

mix.scripts([
    'public/backend/plugins/popper/popper.min.js',
    'public/backend/plugins/bootstrap/js/bootstrap.min.js',
    'public/backend/js/jquery.slimscroll.js',
    'public/backend/js/waves.js',
    'public/backend/js/sidebarmenu.js',
    'public/backend/plugins/sticky-kit-master/dist/sticky-kit.min.js',
    'public/backend/plugins/tinymce/tinymce.min.js',
    'public/backend/js/custom.min.js',
    'public/backend/plugins/select2/dist/js/select2.full.min.js',
    'public/backend/plugins/moment/moment.js',
    'public/backend/plugins/footable/js/footable.min.js',
    'public/backend/plugins/bootstrap-select/bootstrap-select.min.js',
    'public/backend/plugins/datatables/datatables.min.js',
    'public/backend/plugins/html5-editor/wysihtml5-0.3.0.js',
    'public/backend/plugins/html5-editor/bootstrap-wysihtml5.js',
    'public/backend/js/jasny-bootstrap.js',
],'public/js/dashboard.js').version();

mix.styles([
  'public/backend/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css',
  'public/backend/plugins/summernote/dist/summernote-bs4.css',
],'public/css/about.css').version();

mix.scripts([
    'public/backend/plugins/summernote/dist/summernote-bs4.min.js',
    'public/backend/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js',
],'public/js/about.js').version();

mix.scripts([
    'public/backend/plugins/sweetalert/sweetalert.min.js',
],'public/js/sweetalert.js').version();
