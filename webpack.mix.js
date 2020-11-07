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

//Mixing styles
mix.styles(
    ["vendor/twbs/bootstrap/dist/css/bootstrap.css", "resources/css/app.css"],
    "public/css/all.css"
);
//Mixing script
mix.scripts(
    [
        "vendor/components/jquery/jquery.js",
        "vendor/twbs/bootstrap/dist/js/bootstrap.js",
        "vendor/twbs/bootstrap/dist/js/bootstrap.bundle.js",
    ],
    "public/js/all.js"
);

mix.scripts(["resources/js/app.js"], "public/js/app.js");
