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
  event.waitUntil(precache());
});

var fromCache = function (request) {
  return caches.open(cache_name).then(function (cache) {
    cache.match(request).then(function (matching) {
      return matching || Promise.resolve('no-match');
    });
  });
}
self.addEventListener('fetch', function (event) {
  event.respondWith(fromCache(event.request));
});
