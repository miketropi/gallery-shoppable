const mix = require('laravel-mix');
let productionSourceMaps = false;

mix
  .js('./src/main.js', './dist/gallery-shoppable.bundle.js')
  .sass('./src/scss/main.scss', 'css/gallery-shoppable.bundle.css')
  .sourceMaps(productionSourceMaps, 'source-map')
  .setPublicPath('dist');