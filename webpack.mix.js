// Bawaan Laravel Mix
// webpack.mix.js

let mix = require("laravel-mix");

mix.js("src/app.js", "dist").setPublicPath("dist");

// CSS Tailwind - flowbite
mix.js("resources/js/app.js", "public/js").postCss(
    "resources/css/app.css",
    "public/css",
    [require("tailwindcss")]
);
//  mix.copy('node_modules/chart.js/dist/chart.js', 'public/chart.js/chart.js');
