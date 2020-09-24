const mix = require("laravel-mix");

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

mix.js("resources/js/app.js", "public/js").postCss(
    "resources/css/app.css",
    "public/css",
    [require("postcss-import"), require("tailwindcss")]
);

mix.styles(
    [
        "node_modules/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css",
        // 'node_modules/gentelella/vendors/font-awesome/css/font-awesome.min.css',
        "node_modules/@fortawesome/fontawesome-free/css/all.css",
        "node_modules/gentelella/vendors/nprogress/nprogress.css",
        "node_modules/gentelella/vendors/iCheck/skins/flat/green.css",
        "node_modules/gentelella/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css",
        "node_modules/gentelella/vendors/jqvmap/dist/jqvmap.min.css",
        "node_modules/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.css",
        "node_modules/gentelella/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css",
        "node_modules/gentelella/build/css/custom.min.css",
        "node_modules/gentelella/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css",
        "node_modules/gentelella/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css",
        "node_modules/gentelella/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css",
        "node_modules/gentelella/vendors/pnotify/dist/pnotify.css",
        "node_modules/gentelella/vendors/pnotify/dist/pnotify.buttons.css",
        "node_modules/gentelella/vendors/select2/dist/css/select2.min.css"
    ],
    "public/assets/admin/css/admin.css"
).version();

mix.scripts(
    [
        "node_modules/gentelella/vendors/jquery/dist/jquery.min.js",
        "node_modules/gentelella/vendors/bootstrap/dist/js/bootstrap.min.js",
        "node_modules/@fortawesome/fontawesome-free/js/all.js",
        "node_modules/gentelella/vendors/fastclick/lib/fastclick.js",
        "node_modules/gentelella/vendors/nprogress/nprogress.js",
        "node_modules/gentelella/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js",
        "node_modules/gentelella/vendors/iCheck/icheck.min.js",
        "node_modules/gentelella/vendors/echarts/dist/echarts.min.js",
        "node_modules/gentelella/vendors/skycons/skycons.js",
        "node_modules/gentelella/vendors/DateJS/build/date.js",
        "node_modules/gentelella/vendors/moment/min/moment.min.js",
        "node_modules/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.js",
        "node_modules/gentelella/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js",
        "node_modules/gentelella/vendors/datatables.net/js/jquery.dataTables.min.js",
        "node_modules/gentelella/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js",
        "node_modules/gentelella/vendors/datatables.net-responsive/js/dataTables.responsive.min.js",
        "node_modules/gentelella/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js",
        "node_modules/gentelella/vendors/datatables.net-scroller/js/dataTables.scroller.min.js",
        "node_modules/gentelella/vendors/pnotify/dist/pnotify.js",
        "node_modules/gentelella/vendors/pnotify/dist/pnotify.buttons.js",
        "node_modules/gentelella/vendors/select2/dist/js/select2.full.min.js",
        "public/js/custom.js"
    ],
    "public/assets/admin/js/admin.js"
)
    .version()
    .sourceMaps();

mix.copy(
    ["node_modules/gentelella/vendors/bootstrap/dist/fonts"],
    "public/assets/admin/fonts"
);

mix.copy(
    ["node_modules/@fortawesome/fontawesome-free/webfonts"],
    "public/assets/admin/webfonts"
);

mix.copy(
    ["node_modules/gentelella/production/images"],
    "public/assets/admin/images"
);
