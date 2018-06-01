"use strict";var precacheConfig=[["css/all.css","63894dc5b068b5800299e181b9f46b06"],["css/app.css","75389c95423de98817788c521ed59ba7"],["css/bootstrap.min.css","3e53c6843a02b42ed881307d0c17af7d"],["css/dashboard.css","cb4820247a07e195ac224e8d4bf843d9"],["css/demo.css","a181143f9059f4774288fa09d57afe6e"],["css/links.css","28ebc9604be877ebaa20c2d5b6ef67fe"],["css/material-dashboard.css","a469a5110233acd991f97bd408d6d38c"],["css/material-dashboard.min.css","824ff7f5134099280a0ac6211873715d"],["css/material-kit.css","89406cfcd6833a4241308009f118e21c"],["css/pmd-select2.css","4dd99ef2e1bba387a5c456249620363b"],["css/select2-bootstrap.css","dff5a592cfbd40f14d9fae4a7ac8fcbb"],["css/select2.css","92f165986b1c6158873887189937b1ac"],["css/select2.min.css","af19a4367b2194bffa202ad6b91f85fb"],["css/style.css","a7ffc469f33bf4df69c13265f2a6e13f"],["css/stylesheet.css","d41d8cd98f00b204e9800998ecf8427e"],["fonts/glyphicons-halflings-regular.eot","f4769f9bdb7466be65088239c12046d1"],["fonts/glyphicons-halflings-regular.svg","f721466883998665b87923b92dea655b"],["fonts/glyphicons-halflings-regular.ttf","e18bbf611f2a2e43afc071aa2f4e1512"],["fonts/glyphicons-halflings-regular.woff","fa2772327f55d8198301fdb8bcfc8158"],["fonts/glyphicons-halflings-regular.woff2","448c34a56d699c29117adc64c43affeb"],["google751762f5fb091b31.html","d2767c9cb78f358ea1eb0fdd8ce70ded"],["icons/apple-120.png","5d6ef30af890fee2a176803be3938d04"],["icons/apple-152.png","6c24a5bf6c44462a2eb65d9be41237e1"],["icons/apple-167.png","2eb2fac4cd8e4504e9a29bb65ab1d322"],["icons/apple-180.png","7d401901e1a2818aab32f4c9fae23dcc"],["icons/apple-60.png","97bf9d72239b91880ae7b53e3cb3d333"],["icons/apple-76.png","16571908eeff3fd35a2e79ccb7daf03b"],["icons/icon_128_128_dpi.png","a71d9b9153245cc9323c2114863ddaa9"],["icons/icon_144_48_dpi.png","dd8cbb71ec8e5f9323b0d6a001439444"],["icons/icon_168_48_dpi.png","ac8e36856f2f26f77832a2933cc06d68"],["icons/icon_192_48_dpi.png","7a23c5370b7bf9cf2dbeea0f5362eb88"],["icons/icon_256_128_dpi.png","08bf078997b6b7495af64f053061543f"],["icons/icon_384_128_dpi.png","e0906a1a74b13116da5d4ef45d21d6c8"],["icons/icon_48_48_dpi.png","580ca50f4d38d4ceaf71d5afd3b7d701"],["icons/icon_512_128_dpi.png","b04c5a64335acdbae2fea3f6e7014dee"],["icons/icon_72_48_dpi.png","fd5aaebc961be282bb63facec68b5077"],["icons/icon_96_48_dpi.png","3ebd49491602da2bed98e330b582684c"],["img/cover.jpeg","bdb978c4ed08e7fc469a5f661cfe054b"],["img/sidebar-1.jpg","cb55b0d6892d15e9adad08bfd9b9c9cd"],["img/sidebar-2.jpg","a66ca4a269f9b04ec1625c6e699d6fb2"],["img/sidebar-3.jpg","df151f8f672a35ff2c46bf2d49956d0c"],["img/sidebar-4.jpg","c77363262dcf3759e23541a1c716cc1d"],["js/app.js","57c5ae1501c9b229645895dacceed7d0"],["js/bootstrap-filestyle.min.js","2f01d21c552e878f9a9d990ecce7c0b9"],["js/bootstrap-notify.js","355c898f8271f507346754a62f86e2ca"],["js/bootstrap.min.js","e7d9a06cf9053c51cd4ad3386da0659a"],["js/jquery-3.1.0.min.js","64ec1b9cff683a0a739eeea84c9e628c"],["js/jquery-3.1.1.min.js","5b5a269bd363e0886c17d855c2aab241"],["js/material-dashboard.js","083688360c5887253a375346340b5f34"],["js/material-dashboard.min.js","fea465ccee84ebe5fbb8fa11cdd7f73a"],["js/material-kit.js","d0f21316e9bae588be3966c246115109"],["js/material.min.js","162ddc9a5385ac16b0a331f7523f8966"],["js/pmd-select2.js","800b3d3639e8423f40d8b4cbf9e04643"],["js/select2.full.js","853558e3186c5ae4d83cc41c4cc31e3b"],["service-worker.js","d16aff1653aa75ee2db36a396342ea1e"],["storage/algolia_logo/algolia-logo-light.svg","88450dd56ea1a00ba772424b30b7d34d"],["storage/algolia_logo/algolia-mark-black.svg","b564e956a499ce9f262cfe8c446bdabb"],["storage/algolia_logo/search-by-algolia.svg","c962a40719f370bb1733adbb2cd4326c"],["storage/avatars/PuGA77k9KZBNbCh0hATmIexKbYHt0QsnOHbLltvB.jpeg","1d9e8910be3d2594b77b8ea713bfd0cb"],["storage/avatars/VUhBgKA3JUdcSmSfJeibCK7afP0h7N0PGK7Ijm5d.jpeg","ee5bc783c67a41259c76ac12f2c1a568"],["storage/avatars/algolia-logo-light.svg","88450dd56ea1a00ba772424b30b7d34d"],["storage/avatars/uUCYbizBTrYqvcihaLvNgndiTccGmQuwVzQIi3K0.jpeg","b9ed37190bb0e7eb48e6c021da586563"],["storage/avatars/v1DpXHRI70nNlklZ5q1b5z38IdL218adYaFinWHD.jpeg","7a468140be6986aeb2e91321bbc3b7b7"],["storage/codefield_logo/29695003_1752978298091934_4637625344562561024_n.png","3bbb06da13fba8e0cceb8db2d435575a"],["storage/codefield_logo/bulbcircle.png","3bbc5c36049b27ba6b3fb384c54f5a18"],["storage/codefield_logo/menu_logo.png","ba0dd1c485a083f2fa06cb89a3afd8db"],["storage/codefield_logo/signin_logo.png","8070b28e4fcd20393798663775576e95"],["storage/default_profile/default_profile_pic.png","36fd6b6a166d25186704d039e1c06c37"],["storage/galleries/algolia-logo-light.svg","88450dd56ea1a00ba772424b30b7d34d"],["storage/gallery_thumbnails/algolia-logo-light.svg","88450dd56ea1a00ba772424b30b7d34d"],["storage/images/algolia-logo-light.svg","88450dd56ea1a00ba772424b30b7d34d"],["storage/profiles/0UkKtWCz0r3BrctBuxnz3KhTa9C9eh3iR8m5FBFu.png","01b93ef64849e438ce373b01a21f85c1"],["storage/profiles/PuJAHOljxD4wW4p7yCRc9tnVKeCVJVb6kEh6rpfN.jpeg","c9ba16808ca4f7952d37e0a6cb5cceac"],["storage/profiles/hUV7a7NPJzNwhvSJ8gh7iRlNXzQVbeRM8wcOFloT.jpeg","c9ba16808ca4f7952d37e0a6cb5cceac"],["storage/zip_files/algolia-logo-light.svg","88450dd56ea1a00ba772424b30b7d34d"],["yandex_49d23e85fa023f71.html","85d12f807989c3481ced4eaf976255da"]],cacheName="sw-precache-v3-pwa-"+(self.registration?self.registration.scope:""),ignoreUrlParametersMatching=[/^utm_/],addDirectoryIndex=function(e,t){var n=new URL(e);return"/"===n.pathname.slice(-1)&&(n.pathname+=t),n.toString()},cleanResponse=function(e){return e.redirected?("body"in e?Promise.resolve(e.body):e.blob()).then(function(t){return new Response(t,{headers:e.headers,status:e.status,statusText:e.statusText})}):Promise.resolve(e)},createCacheKey=function(e,t,n,r){var a=new URL(e);return r&&a.pathname.match(r)||(a.search+=(a.search?"&":"")+encodeURIComponent(t)+"="+encodeURIComponent(n)),a.toString()},isPathWhitelisted=function(e,t){if(0===e.length)return!0;var n=new URL(t).pathname;return e.some(function(e){return n.match(e)})},stripIgnoredUrlParameters=function(e,t){var n=new URL(e);return n.hash="",n.search=n.search.slice(1).split("&").map(function(e){return e.split("=")}).filter(function(e){return t.every(function(t){return!t.test(e[0])})}).map(function(e){return e.join("=")}).join("&"),n.toString()},hashParamName="_sw-precache",urlsToCacheKeys=new Map(precacheConfig.map(function(e){var t=e[0],n=e[1],r=new URL(t,self.location),a=createCacheKey(r,hashParamName,n,!1);return[r.toString(),a]}));function setOfCachedUrls(e){return e.keys().then(function(e){return e.map(function(e){return e.url})}).then(function(e){return new Set(e)})}self.addEventListener("install",function(e){e.waitUntil(caches.open(cacheName).then(function(e){return setOfCachedUrls(e).then(function(t){return Promise.all(Array.from(urlsToCacheKeys.values()).map(function(n){if(!t.has(n)){var r=new Request(n,{credentials:"same-origin"});return fetch(r).then(function(t){if(!t.ok)throw new Error("Request for "+n+" returned a response with status "+t.status);return cleanResponse(t).then(function(t){return e.put(n,t)})})}}))})}).then(function(){return self.skipWaiting()}))}),self.addEventListener("activate",function(e){var t=new Set(urlsToCacheKeys.values());e.waitUntil(caches.open(cacheName).then(function(e){return e.keys().then(function(n){return Promise.all(n.map(function(n){if(!t.has(n.url))return e.delete(n)}))})}).then(function(){return self.clients.claim()}))}),self.addEventListener("fetch",function(e){if("GET"===e.request.method){var t,n=stripIgnoredUrlParameters(e.request.url,ignoreUrlParametersMatching);(t=urlsToCacheKeys.has(n))||(n=addDirectoryIndex(n,"index.html"),t=urlsToCacheKeys.has(n));!t&&"navigate"===e.request.mode&&isPathWhitelisted([],e.request.url)&&(n=new URL("/",self.location).toString(),t=urlsToCacheKeys.has(n)),t&&e.respondWith(caches.open(cacheName).then(function(e){return e.match(urlsToCacheKeys.get(n)).then(function(e){if(e)return e;throw Error("The cached response that was expected is missing.")})}).catch(function(t){return console.warn('Couldn\'t serve response for "%s" from cache: %O',e.request.url,t),fetch(e.request)}))}}),function(e){if("object"==typeof exports&&"undefined"!=typeof module)module.exports=e();else if("function"==typeof define&&define.amd)define([],e);else{("undefined"!=typeof window?window:"undefined"!=typeof global?global:"undefined"!=typeof self?self:this).toolbox=e()}}(function(){return function e(t,n,r){function a(c,s){if(!n[c]){if(!t[c]){var i="function"==typeof require&&require;if(!s&&i)return i(c,!0);if(o)return o(c,!0);var u=new Error("Cannot find module '"+c+"'");throw u.code="MODULE_NOT_FOUND",u}var f=n[c]={exports:{}};t[c][0].call(f.exports,function(e){var n=t[c][1][e];return a(n||e)},f,f.exports,e,t,n,r)}return n[c].exports}for(var o="function"==typeof require&&require,c=0;c<r.length;c++)a(r[c]);return a}({1:[function(e,t,n){function r(e,t){((t=t||{}).debug||i.debug)&&console.log("[sw-toolbox] "+e)}function a(e){var t;return e&&e.cache&&(t=e.cache.name),t=t||i.cache.name,caches.open(t)}function o(e,t,n){var a=e.url,o=n.maxAgeSeconds,c=n.maxEntries,s=n.name,i=Date.now();return r("Updating LRU order for "+a+". Max entries is "+c+", max age is "+o),u.getDb(s).then(function(e){return u.setTimestampForUrl(e,a,i)}).then(function(e){return u.expireEntries(e,c,o,i)}).then(function(e){r("Successfully updated IDB.");var n=e.map(function(e){return t.delete(e)});return Promise.all(n).then(function(){r("Done with cache cleanup.")})}).catch(function(e){r(e)})}function c(e){var t=Array.isArray(e);if(t&&e.forEach(function(e){"string"==typeof e||e instanceof Request||(t=!1)}),!t)throw new TypeError("The precache method expects either an array of strings and/or Requests or a Promise that resolves to an array of strings and/or Requests.");return e}var s,i=e("./options"),u=e("./idb-cache-expiration");t.exports={debug:r,fetchAndCache:function(e,t){var n=(t=t||{}).successResponses||i.successResponses;return fetch(e.clone()).then(function(r){return"GET"===e.method&&n.test(r.status)&&a(t).then(function(n){n.put(e,r).then(function(){var r=t.cache||i.cache;(r.maxEntries||r.maxAgeSeconds)&&r.name&&function(e,t,n){var r=o.bind(null,e,t,n);s=s?s.then(r):r()}(e,n,r)})}),r.clone()})},openCache:a,renameCache:function(e,t,n){return r("Renaming cache: ["+e+"] to ["+t+"]",n),caches.delete(t).then(function(){return Promise.all([caches.open(e),caches.open(t)]).then(function(t){var n=t[0],r=t[1];return n.keys().then(function(e){return Promise.all(e.map(function(e){return n.match(e).then(function(t){return r.put(e,t)})}))}).then(function(){return caches.delete(e)})})})},cache:function(e,t){return a(t).then(function(t){return t.add(e)})},uncache:function(e,t){return a(t).then(function(t){return t.delete(e)})},precache:function(e){e instanceof Promise||c(e),i.preCacheItems=i.preCacheItems.concat(e)},validatePrecacheInput:c,isResponseFresh:function(e,t,n){if(!e)return!1;if(t){var r=e.headers.get("date");if(r&&new Date(r).getTime()+1e3*t<n)return!1}return!0}}},{"./idb-cache-expiration":2,"./options":4}],2:[function(e,t,n){var r="sw-toolbox-",a=1,o="store",c="url",s="timestamp",i={};t.exports={getDb:function(e){return e in i||(i[e]=function(e){return new Promise(function(t,n){var i=indexedDB.open(r+e,a);i.onupgradeneeded=function(){i.result.createObjectStore(o,{keyPath:c}).createIndex(s,s,{unique:!1})},i.onsuccess=function(){t(i.result)},i.onerror=function(){n(i.error)}})}(e)),i[e]},setTimestampForUrl:function(e,t,n){return new Promise(function(r,a){var c=e.transaction(o,"readwrite");c.objectStore(o).put({url:t,timestamp:n}),c.oncomplete=function(){r(e)},c.onabort=function(){a(c.error)}})},expireEntries:function(e,t,n,r){return function(e,t,n){return t?new Promise(function(r,a){var i=1e3*t,u=[],f=e.transaction(o,"readwrite"),l=f.objectStore(o);l.index(s).openCursor().onsuccess=function(e){var t=e.target.result;if(t&&n-i>t.value[s]){var r=t.value[c];u.push(r),l.delete(r),t.continue()}},f.oncomplete=function(){r(u)},f.onabort=a}):Promise.resolve([])}(e,n,r).then(function(n){return function(e,t){return t?new Promise(function(n,r){var a=[],i=e.transaction(o,"readwrite"),u=i.objectStore(o),f=u.index(s),l=f.count();f.count().onsuccess=function(){var e=l.result;e>t&&(f.openCursor().onsuccess=function(n){var r=n.target.result;if(r){var o=r.value[c];a.push(o),u.delete(o),e-a.length>t&&r.continue()}})},i.oncomplete=function(){n(a)},i.onabort=r}):Promise.resolve([])}(e,t).then(function(e){return n.concat(e)})})}}},{}],3:[function(e,t,n){function r(e){return e.reduce(function(e,t){return e.concat(t)},[])}e("serviceworker-cache-polyfill");var a=e("./helpers"),o=e("./router"),c=e("./options");t.exports={fetchListener:function(e){var t=o.match(e.request);t?e.respondWith(t(e.request)):o.default&&"GET"===e.request.method&&0===e.request.url.indexOf("http")&&e.respondWith(o.default(e.request))},activateListener:function(e){a.debug("activate event fired");var t=c.cache.name+"$$$inactive$$$";e.waitUntil(a.renameCache(t,c.cache.name))},installListener:function(e){var t=c.cache.name+"$$$inactive$$$";a.debug("install event fired"),a.debug("creating cache ["+t+"]"),e.waitUntil(a.openCache({cache:{name:t}}).then(function(e){return Promise.all(c.preCacheItems).then(r).then(a.validatePrecacheInput).then(function(t){return a.debug("preCache list: "+(t.join(", ")||"(none)")),e.addAll(t)})}))}}},{"./helpers":1,"./options":4,"./router":6,"serviceworker-cache-polyfill":16}],4:[function(e,t,n){var r;r=self.registration?self.registration.scope:self.scope||new URL("./",self.location).href,t.exports={cache:{name:"$$$toolbox-cache$$$"+r+"$$$",maxAgeSeconds:null,maxEntries:null},debug:!1,networkTimeoutSeconds:null,preCacheItems:[],successResponses:/^0|([123]\d\d)|(40[14567])|410$/}},{}],5:[function(e,t,n){var r=new URL("./",self.location).pathname,a=e("path-to-regexp"),o=function(e,t,n,o){t instanceof RegExp?this.fullUrlRegExp=t:(0!==t.indexOf("/")&&(t=r+t),this.keys=[],this.regexp=a(t,this.keys)),this.method=e,this.options=o,this.handler=n};o.prototype.makeHandler=function(e){var t;if(this.regexp){var n=this.regexp.exec(e);t={},this.keys.forEach(function(e,r){t[e.name]=n[r+1]})}return function(e){return this.handler(e,t,this.options)}.bind(this)},t.exports=o},{"path-to-regexp":15}],6:[function(e,t,n){var r=e("./route"),a=e("./helpers"),o=function(e,t){for(var n=e.entries(),r=n.next(),a=[];!r.done;){new RegExp(r.value[0]).test(t)&&a.push(r.value[1]),r=n.next()}return a},c=function(){this.routes=new Map,this.routes.set(RegExp,new Map),this.default=null};["get","post","put","delete","head","any"].forEach(function(e){c.prototype[e]=function(t,n,r){return this.add(e,t,n,r)}}),c.prototype.add=function(e,t,n,o){var c;o=o||{},t instanceof RegExp?c=RegExp:c=(c=o.origin||self.location.origin)instanceof RegExp?c.source:function(e){return e.replace(/[-\/\\^$*+?.()|[\]{}]/g,"\\$&")}(c),e=e.toLowerCase();var s=new r(e,t,n,o);this.routes.has(c)||this.routes.set(c,new Map);var i=this.routes.get(c);i.has(e)||i.set(e,new Map);var u=i.get(e),f=s.regexp||s.fullUrlRegExp;u.has(f.source)&&a.debug('"'+t+'" resolves to same regex as existing route.'),u.set(f.source,s)},c.prototype.matchMethod=function(e,t){var n=new URL(t),r=n.origin,a=n.pathname;return this._match(e,o(this.routes,r),a)||this._match(e,[this.routes.get(RegExp)],t)},c.prototype._match=function(e,t,n){if(0===t.length)return null;for(var r=0;r<t.length;r++){var a=t[r],c=a&&a.get(e.toLowerCase());if(c){var s=o(c,n);if(s.length>0)return s[0].makeHandler(n)}}return null},c.prototype.match=function(e){return this.matchMethod(e.method,e.url)||this.matchMethod("any",e.url)},t.exports=new c},{"./helpers":1,"./route":5}],7:[function(e,t,n){var r=e("../options"),a=e("../helpers");t.exports=function(e,t,n){return n=n||{},a.debug("Strategy: cache first ["+e.url+"]",n),a.openCache(n).then(function(t){return t.match(e).then(function(t){var o=n.cache||r.cache,c=Date.now();return a.isResponseFresh(t,o.maxAgeSeconds,c)?t:a.fetchAndCache(e,n)})})}},{"../helpers":1,"../options":4}],8:[function(e,t,n){var r=e("../options"),a=e("../helpers");t.exports=function(e,t,n){return n=n||{},a.debug("Strategy: cache only ["+e.url+"]",n),a.openCache(n).then(function(t){return t.match(e).then(function(e){var t=n.cache||r.cache,o=Date.now();if(a.isResponseFresh(e,t.maxAgeSeconds,o))return e})})}},{"../helpers":1,"../options":4}],9:[function(e,t,n){var r=e("../helpers"),a=e("./cacheOnly");t.exports=function(e,t,n){return r.debug("Strategy: fastest ["+e.url+"]",n),new Promise(function(o,c){var s=!1,i=[],u=function(e){i.push(e.toString()),s?c(new Error('Both cache and network failed: "'+i.join('", "')+'"')):s=!0},f=function(e){e instanceof Response?o(e):u("No result returned")};r.fetchAndCache(e.clone(),n).then(f,u),a(e,t,n).then(f,u)})}},{"../helpers":1,"./cacheOnly":8}],10:[function(e,t,n){t.exports={networkOnly:e("./networkOnly"),networkFirst:e("./networkFirst"),cacheOnly:e("./cacheOnly"),cacheFirst:e("./cacheFirst"),fastest:e("./fastest")}},{"./cacheFirst":7,"./cacheOnly":8,"./fastest":9,"./networkFirst":11,"./networkOnly":12}],11:[function(e,t,n){var r=e("../options"),a=e("../helpers");t.exports=function(e,t,n){var o=(n=n||{}).successResponses||r.successResponses,c=n.networkTimeoutSeconds||r.networkTimeoutSeconds;return a.debug("Strategy: network first ["+e.url+"]",n),a.openCache(n).then(function(t){var s,i,u=[];if(c){var f=new Promise(function(o){s=setTimeout(function(){t.match(e).then(function(e){var t=n.cache||r.cache,c=Date.now(),s=t.maxAgeSeconds;a.isResponseFresh(e,s,c)&&o(e)})},1e3*c)});u.push(f)}var l=a.fetchAndCache(e,n).then(function(e){if(s&&clearTimeout(s),o.test(e.status))return e;throw a.debug("Response was an HTTP error: "+e.statusText,n),i=e,new Error("Bad response")}).catch(function(r){return a.debug("Network or response error, fallback to cache ["+e.url+"]",n),t.match(e).then(function(e){if(e)return e;if(i)return i;throw r})});return u.push(l),Promise.race(u)})}},{"../helpers":1,"../options":4}],12:[function(e,t,n){var r=e("../helpers");t.exports=function(e,t,n){return r.debug("Strategy: network only ["+e.url+"]",n),fetch(e)}},{"../helpers":1}],13:[function(e,t,n){var r=e("./options"),a=e("./router"),o=e("./helpers"),c=e("./strategies"),s=e("./listeners");o.debug("Service Worker Toolbox is loading"),self.addEventListener("install",s.installListener),self.addEventListener("activate",s.activateListener),self.addEventListener("fetch",s.fetchListener),t.exports={networkOnly:c.networkOnly,networkFirst:c.networkFirst,cacheOnly:c.cacheOnly,cacheFirst:c.cacheFirst,fastest:c.fastest,router:a,options:r,cache:o.cache,uncache:o.uncache,precache:o.precache}},{"./helpers":1,"./listeners":3,"./options":4,"./router":6,"./strategies":10}],14:[function(e,t,n){t.exports=Array.isArray||function(e){return"[object Array]"==Object.prototype.toString.call(e)}},{}],15:[function(e,t,n){function r(e,t){for(var n,r=[],a=0,o=0,c="",u=t&&t.delimiter||"/";null!=(n=p.exec(e));){var f=n[0],l=n[1],d=n.index;if(c+=e.slice(o,d),o=d+f.length,l)c+=l[1];else{var h=e[o],g=n[2],b=n[3],m=n[4],v=n[5],w=n[6],x=n[7];c&&(r.push(c),c="");var y=null!=g&&null!=h&&h!==g,R="+"===w||"*"===w,j="?"===w||"*"===w,_=n[2]||u,C=m||v;r.push({name:b||a++,prefix:g||"",delimiter:_,optional:j,repeat:R,partial:y,asterisk:!!x,pattern:C?i(C):x?".*":"[^"+s(_)+"]+?"})}}return o<e.length&&(c+=e.substr(o)),c&&r.push(c),r}function a(e){return encodeURI(e).replace(/[\/?#]/g,function(e){return"%"+e.charCodeAt(0).toString(16).toUpperCase()})}function o(e){return encodeURI(e).replace(/[?#]/g,function(e){return"%"+e.charCodeAt(0).toString(16).toUpperCase()})}function c(e){for(var t=new Array(e.length),n=0;n<e.length;n++)"object"==typeof e[n]&&(t[n]=new RegExp("^(?:"+e[n].pattern+")$"));return function(n,r){for(var c="",s=n||{},i=(r||{}).pretty?a:encodeURIComponent,u=0;u<e.length;u++){var f=e[u];if("string"!=typeof f){var l,d=s[f.name];if(null==d){if(f.optional){f.partial&&(c+=f.prefix);continue}throw new TypeError('Expected "'+f.name+'" to be defined')}if(h(d)){if(!f.repeat)throw new TypeError('Expected "'+f.name+'" to not repeat, but received `'+JSON.stringify(d)+"`");if(0===d.length){if(f.optional)continue;throw new TypeError('Expected "'+f.name+'" to not be empty')}for(var p=0;p<d.length;p++){if(l=i(d[p]),!t[u].test(l))throw new TypeError('Expected all "'+f.name+'" to match "'+f.pattern+'", but received `'+JSON.stringify(l)+"`");c+=(0===p?f.prefix:f.delimiter)+l}}else{if(l=f.asterisk?o(d):i(d),!t[u].test(l))throw new TypeError('Expected "'+f.name+'" to match "'+f.pattern+'", but received "'+l+'"');c+=f.prefix+l}}else c+=f}return c}}function s(e){return e.replace(/([.+*?=^!:${}()[\]|\/\\])/g,"\\$1")}function i(e){return e.replace(/([=!:$\/()])/g,"\\$1")}function u(e,t){return e.keys=t,e}function f(e){return e.sensitive?"":"i"}function l(e,t,n){h(t)||(n=t||n,t=[]);for(var r=(n=n||{}).strict,a=!1!==n.end,o="",c=0;c<e.length;c++){var i=e[c];if("string"==typeof i)o+=s(i);else{var l=s(i.prefix),d="(?:"+i.pattern+")";t.push(i),i.repeat&&(d+="(?:"+l+d+")*"),o+=d=i.optional?i.partial?l+"("+d+")?":"(?:"+l+"("+d+"))?":l+"("+d+")"}}var p=s(n.delimiter||"/"),g=o.slice(-p.length)===p;return r||(o=(g?o.slice(0,-p.length):o)+"(?:"+p+"(?=$))?"),o+=a?"$":r&&g?"":"(?="+p+"|$)",u(new RegExp("^"+o,f(n)),t)}function d(e,t,n){return h(t)||(n=t||n,t=[]),n=n||{},e instanceof RegExp?function(e,t){var n=e.source.match(/\((?!\?)/g);if(n)for(var r=0;r<n.length;r++)t.push({name:r,prefix:null,delimiter:null,optional:!1,repeat:!1,partial:!1,asterisk:!1,pattern:null});return u(e,t)}(e,t):h(e)?function(e,t,n){for(var r=[],a=0;a<e.length;a++)r.push(d(e[a],t,n).source);return u(new RegExp("(?:"+r.join("|")+")",f(n)),t)}(e,t,n):function(e,t,n){return l(r(e,n),t,n)}(e,t,n)}var h=e("isarray");t.exports=d,t.exports.parse=r,t.exports.compile=function(e,t){return c(r(e,t))},t.exports.tokensToFunction=c,t.exports.tokensToRegExp=l;var p=new RegExp(["(\\\\.)","([\\/.])?(?:(?:\\:(\\w+)(?:\\(((?:\\\\.|[^\\\\()])+)\\))?|\\(((?:\\\\.|[^\\\\()])+)\\))([+*?])?|(\\*))"].join("|"),"g")},{isarray:14}],16:[function(e,t,n){!function(){var e=Cache.prototype.addAll,t=navigator.userAgent.match(/(Firefox|Chrome)\/(\d+\.)/);if(t)var n=t[1],r=parseInt(t[2]);e&&(!t||"Firefox"===n&&r>=46||"Chrome"===n&&r>=50)||(Cache.prototype.addAll=function(e){function t(e){this.name="NetworkError",this.code=19,this.message=e}var n=this;return t.prototype=Object.create(Error.prototype),Promise.resolve().then(function(){if(arguments.length<1)throw new TypeError;return e=e.map(function(e){return e instanceof Request?e:String(e)}),Promise.all(e.map(function(e){"string"==typeof e&&(e=new Request(e));var n=new URL(e.url).protocol;if("http:"!==n&&"https:"!==n)throw new t("Invalid scheme");return fetch(e.clone())}))}).then(function(r){if(r.some(function(e){return!e.ok}))throw new t("Incorrect response status");return Promise.all(r.map(function(t,r){return n.put(e[r],t)}))}).then(function(){})},Cache.prototype.add=function(e){return this.addAll([e])})}()},{}]},{},[13])(13)}),toolbox.router.get(/^https:\/\/fonts\.googleapis\.com\//,toolbox.cacheFirst,{}),toolbox.router.get(/^https:\/\/www\.thecocktaildb\.com\/images\/media\/drink\/(\w+)\.jpg/,toolbox.cacheFirst,{});