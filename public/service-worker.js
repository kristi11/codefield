var cache_name = 'codefield';
var filesToCache = [
  '/',
  '/js/app.js',
  '/css/app.css'
];
var precache = function() {
  return caches.open(cache_name).then(function (cache) {
    return cache.addAll(filesToCache);
  });
}
self.addEventListener('install', function(event) {
  event.waitUntill(precache());
)};