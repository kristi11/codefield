"use strict";
var precacheConfig = [
        ["css/all.css", "63894dc5b068b5800299e181b9f46b06"],
        ["css/app.css", "a87f19e5b0153d1a35e6decca9297d51"],
        ["css/bootstrap.min.css", "3e53c6843a02b42ed881307d0c17af7d"],
        ["css/dashboard.css", "cb4820247a07e195ac224e8d4bf843d9"],
        ["css/demo.css", "a181143f9059f4774288fa09d57afe6e"],
        ["css/links.css", "28ebc9604be877ebaa20c2d5b6ef67fe"],
        ["css/material-dashboard.css", "a3b9b21fa4f1ff0d94c652da2c9e7c0d"],
        ["css/material-dashboard.min.css", "133be6dc2876c4956d50a26a63eceee5"],
        ["css/material-kit.css", "89406cfcd6833a4241308009f118e21c"],
        ["css/pmd-select2.css", "4dd99ef2e1bba387a5c456249620363b"],
        ["css/select2-bootstrap.css", "dff5a592cfbd40f14d9fae4a7ac8fcbb"],
        ["css/select2.css", "92f165986b1c6158873887189937b1ac"],
        ["css/select2.min.css", "af19a4367b2194bffa202ad6b91f85fb"],
        ["css/style.css", "a7ffc469f33bf4df69c13265f2a6e13f"],
        ["css/stylesheet.css", "d41d8cd98f00b204e9800998ecf8427e"],
        ["fonts/glyphicons-halflings-regular.eot", "f4769f9bdb7466be65088239c12046d1"],
        ["fonts/glyphicons-halflings-regular.svg", "f721466883998665b87923b92dea655b"],
        ["fonts/glyphicons-halflings-regular.ttf", "e18bbf611f2a2e43afc071aa2f4e1512"],
        ["fonts/glyphicons-halflings-regular.woff", "fa2772327f55d8198301fdb8bcfc8158"],
        ["fonts/glyphicons-halflings-regular.woff2", "448c34a56d699c29117adc64c43affeb"],
        ["google751762f5fb091b31.html", "d2767c9cb78f358ea1eb0fdd8ce70ded"],
        ["js/app.js", "57c5ae1501c9b229645895dacceed7d0"],
        ["js/bootstrap-filestyle.min.js", "2f01d21c552e878f9a9d990ecce7c0b9"],
        ["js/bootstrap-notify.js", "355c898f8271f507346754a62f86e2ca"],
        ["js/bootstrap.min.js", "e7d9a06cf9053c51cd4ad3386da0659a"],
        ["js/jquery-3.1.0.min.js", "64ec1b9cff683a0a739eeea84c9e628c"],
        ["js/jquery-3.1.1.min.js", "5b5a269bd363e0886c17d855c2aab241"],
        ["js/material-dashboard.js", "083688360c5887253a375346340b5f34"],
        ["js/material-dashboard.min.js", "fea465ccee84ebe5fbb8fa11cdd7f73a"],
        ["js/material-kit.js", "d0f21316e9bae588be3966c246115109"],
        ["js/material.min.js", "162ddc9a5385ac16b0a331f7523f8966"],
        ["js/pmd-select2.js", "800b3d3639e8423f40d8b4cbf9e04643"],
        ["js/select2.full.js", "853558e3186c5ae4d83cc41c4cc31e3b"],
        ["storage/algolia_logo/algolia-logo-light.svg", "88450dd56ea1a00ba772424b30b7d34d"],
        ["storage/algolia_logo/algolia-mark-black.svg", "b564e956a499ce9f262cfe8c446bdabb"],
        ["storage/algolia_logo/search-by-algolia.svg", "c962a40719f370bb1733adbb2cd4326c"],
        ["storage/avatars/algolia-logo-light.svg", "88450dd56ea1a00ba772424b30b7d34d"],
        ["storage/galleries/algolia-logo-light.svg", "88450dd56ea1a00ba772424b30b7d34d"],
        ["storage/gallery_thumbnails/algolia-logo-light.svg", "88450dd56ea1a00ba772424b30b7d34d"],
        ["storage/images/algolia-logo-light.svg", "88450dd56ea1a00ba772424b30b7d34d"],
        ["storage/zip_files/algolia-logo-light.svg", "88450dd56ea1a00ba772424b30b7d34d"],
        ["test.html", "e7f9d622c859fb58da17f4874a7a4d85"],
        ["test2.html", "12f11902ce922cc7bc5eedf9b29e7ccc"],
        ["webpack.config.js", "e107d7350dc67885a708c5f359f8c791"]
    ],
    cacheName = "sw-precache-v3-pwa-" + (self.registration ? self.registration.scope : ""),
    ignoreUrlParametersMatching = [/^utm_/],
    addDirectoryIndex = function(e, t) {
        var n = new URL(e);
        return "/" === n.pathname.slice(-1) && (n.pathname += t), n.toString()
    },
    cleanResponse = function(e) {
        return e.redirected ? ("body" in e ? Promise.resolve(e.body) : e.blob()).then(function(t) {
            return new Response(t, {
                headers: e.headers,
                status: e.status,
                statusText: e.statusText
            })
        }) : Promise.resolve(e)
    },
    createCacheKey = function(e, t, n, r) {
        var o = new URL(e);
        return r && o.pathname.match(r) || (o.search += (o.search ? "&" : "") + encodeURIComponent(t) + "=" + encodeURIComponent(n)), o.toString()
    },
    isPathWhitelisted = function(e, t) {
        if (0 === e.length) return !0;
        var n = new URL(t).pathname;
        return e.some(function(e) {
            return n.match(e)
        })
    },
    stripIgnoredUrlParameters = function(e, t) {
        var n = new URL(e);
        return n.hash = "", n.search = n.search.slice(1).split("&").map(function(e) {
            return e.split("=")
        }).filter(function(e) {
            return t.every(function(t) {
                return !t.test(e[0])
            })
        }).map(function(e) {
            return e.join("=")
        }).join("&"), n.toString()
    },
    hashParamName = "_sw-precache",
    urlsToCacheKeys = new Map(precacheConfig.map(function(e) {
        var t = e[0],
            n = e[1],
            r = new URL(t, self.location),
            o = createCacheKey(r, hashParamName, n, !1);
        return [r.toString(), o]
    }));

function setOfCachedUrls(e) {
    return e.keys().then(function(e) {
        return e.map(function(e) {
            return e.url
        })
    }).then(function(e) {
        return new Set(e)
    })
}
self.addEventListener("install", function(e) {
        e.waitUntil(caches.open(cacheName).then(function(e) {
            return setOfCachedUrls(e).then(function(t) {
                return Promise.all(Array.from(urlsToCacheKeys.values()).map(function(n) {
                    if (!t.has(n)) {
                        var r = new Request(n, {
                            credentials: "same-origin"
                        });
                        return fetch(r).then(function(t) {
                            if (!t.ok) throw new Error("Request for " + n + " returned a response with status " + t.status);
                            return cleanResponse(t).then(function(t) {
                                return e.put(n, t)
                            })
                        })
                    }
                }))
            })
        }).then(function() {
            return self.skipWaiting()
        }))
    }), self.addEventListener("activate", function(e) {
        var t = new Set(urlsToCacheKeys.values());
        e.waitUntil(caches.open(cacheName).then(function(e) {
            return e.keys().then(function(n) {
                return Promise.all(n.map(function(n) {
                    if (!t.has(n.url)) return e.delete(n)
                }))
            })
        }).then(function() {
            return self.clients.claim()
        }))
    }), self.addEventListener("fetch", function(e) {
        if ("GET" === e.request.method) {
            var t, n = stripIgnoredUrlParameters(e.request.url, ignoreUrlParametersMatching);
            (t = urlsToCacheKeys.has(n)) || (n = addDirectoryIndex(n, "index.html"), t = urlsToCacheKeys.has(n));
            0, t && e.respondWith(caches.open(cacheName).then(function(e) {
                return e.match(urlsToCacheKeys.get(n)).then(function(e) {
                    if (e) return e;
                    throw Error("The cached response that was expected is missing.")
                })
            }).catch(function(t) {
                return console.warn('Couldn\'t serve response for "%s" from cache: %O', e.request.url, t), fetch(e.request)
            }))
        }
    }),
    function(e) {
        if ("object" == typeof exports && "undefined" != typeof module) module.exports = e();
        else if ("function" == typeof define && define.amd) define([], e);
        else {
            ("undefined" != typeof window ? window : "undefined" != typeof global ? global : "undefined" != typeof self ? self : this).toolbox = e()
        }
    }(function() {
        return function e(t, n, r) {
            function o(s, c) {
                if (!n[s]) {
                    if (!t[s]) {
                        var i = "function" == typeof require && require;
                        if (!c && i) return i(s, !0);
                        if (a) return a(s, !0);
                        var u = new Error("Cannot find module '" + s + "'");
                        throw u.code = "MODULE_NOT_FOUND", u
                    }
                    var f = n[s] = {
                        exports: {}
                    };
                    t[s][0].call(f.exports, function(e) {
                        var n = t[s][1][e];
                        return o(n || e)
                    }, f, f.exports, e, t, n, r)
                }
                return n[s].exports
            }
            for (var a = "function" == typeof require && require, s = 0; s < r.length; s++) o(r[s]);
            return o
        }({
            1: [function(e, t, n) {
                function r(e, t) {
                    ((t = t || {}).debug || i.debug) && console.log("[sw-toolbox] " + e)
                }

                function o(e) {
                    var t;
                    return e && e.cache && (t = e.cache.name), t = t || i.cache.name, caches.open(t)
                }

                function a(e, t, n) {
                    var o = e.url,
                        a = n.maxAgeSeconds,
                        s = n.maxEntries,
                        c = n.name,
                        i = Date.now();
                    return r("Updating LRU order for " + o + ". Max entries is " + s + ", max age is " + a), u.getDb(c).then(function(e) {
                        return u.setTimestampForUrl(e, o, i)
                    }).then(function(e) {
                        return u.expireEntries(e, s, a, i)
                    }).then(function(e) {
                        r("Successfully updated IDB.");
                        var n = e.map(function(e) {
                            return t.delete(e)
                        });
                        return Promise.all(n).then(function() {
                            r("Done with cache cleanup.")
                        })
                    }).catch(function(e) {
                        r(e)
                    })
                }

                function s(e) {
                    var t = Array.isArray(e);
                    if (t && e.forEach(function(e) {
                            "string" == typeof e || e instanceof Request || (t = !1)
                        }), !t) throw new TypeError("The precache method expects either an array of strings and/or Requests or a Promise that resolves to an array of strings and/or Requests.");
                    return e
                }
                var c, i = e("./options"),
                    u = e("./idb-cache-expiration");
                t.exports = {
                    debug: r,
                    fetchAndCache: function(e, t) {
                        var n = (t = t || {}).successResponses || i.successResponses;
                        return fetch(e.clone()).then(function(r) {
                            return "GET" === e.method && n.test(r.status) && o(t).then(function(n) {
                                n.put(e, r).then(function() {
                                    var r = t.cache || i.cache;
                                    (r.maxEntries || r.maxAgeSeconds) && r.name && function(e, t, n) {
                                        var r = a.bind(null, e, t, n);
                                        c = c ? c.then(r) : r()
                                    }(e, n, r)
                                })
                            }), r.clone()
                        })
                    },
                    openCache: o,
                    renameCache: function(e, t, n) {
                        return r("Renaming cache: [" + e + "] to [" + t + "]", n), caches.delete(t).then(function() {
                            return Promise.all([caches.open(e), caches.open(t)]).then(function(t) {
                                var n = t[0],
                                    r = t[1];
                                return n.keys().then(function(e) {
                                    return Promise.all(e.map(function(e) {
                                        return n.match(e).then(function(t) {
                                            return r.put(e, t)
                                        })
                                    }))
                                }).then(function() {
                                    return caches.delete(e)
                                })
                            })
                        })
                    },
                    cache: function(e, t) {
                        return o(t).then(function(t) {
                            return t.add(e)
                        })
                    },
                    uncache: function(e, t) {
                        return o(t).then(function(t) {
                            return t.delete(e)
                        })
                    },
                    precache: function(e) {
                        e instanceof Promise || s(e), i.preCacheItems = i.preCacheItems.concat(e)
                    },
                    validatePrecacheInput: s,
                    isResponseFresh: function(e, t, n) {
                        if (!e) return !1;
                        if (t) {
                            var r = e.headers.get("date");
                            if (r && new Date(r).getTime() + 1e3 * t < n) return !1
                        }
                        return !0
                    }
                }
            }, {
                "./idb-cache-expiration": 2,
                "./options": 4
            }],
            2: [function(e, t, n) {
                var r = "sw-toolbox-",
                    o = 1,
                    a = "store",
                    s = "url",
                    c = "timestamp",
                    i = {};
                t.exports = {
                    getDb: function(e) {
                        return e in i || (i[e] = function(e) {
                            return new Promise(function(t, n) {
                                var i = indexedDB.open(r + e, o);
                                i.onupgradeneeded = function() {
                                    i.result.createObjectStore(a, {
                                        keyPath: s
                                    }).createIndex(c, c, {
                                        unique: !1
                                    })
                                }, i.onsuccess = function() {
                                    t(i.result)
                                }, i.onerror = function() {
                                    n(i.error)
                                }
                            })
                        }(e)), i[e]
                    },
                    setTimestampForUrl: function(e, t, n) {
                        return new Promise(function(r, o) {
                            var s = e.transaction(a, "readwrite");
                            s.objectStore(a).put({
                                url: t,
                                timestamp: n
                            }), s.oncomplete = function() {
                                r(e)
                            }, s.onabort = function() {
                                o(s.error)
                            }
                        })
                    },
                    expireEntries: function(e, t, n, r) {
                        return function(e, t, n) {
                            return t ? new Promise(function(r, o) {
                                var i = 1e3 * t,
                                    u = [],
                                    f = e.transaction(a, "readwrite"),
                                    l = f.objectStore(a);
                                l.index(c).openCursor().onsuccess = function(e) {
                                    var t = e.target.result;
                                    if (t && n - i > t.value[c]) {
                                        var r = t.value[s];
                                        u.push(r), l.delete(r), t.continue()
                                    }
                                }, f.oncomplete = function() {
                                    r(u)
                                }, f.onabort = o
                            }) : Promise.resolve([])
                        }(e, n, r).then(function(n) {
                            return function(e, t) {
                                return t ? new Promise(function(n, r) {
                                    var o = [],
                                        i = e.transaction(a, "readwrite"),
                                        u = i.objectStore(a),
                                        f = u.index(c),
                                        l = f.count();
                                    f.count().onsuccess = function() {
                                        var e = l.result;
                                        e > t && (f.openCursor().onsuccess = function(n) {
                                            var r = n.target.result;
                                            if (r) {
                                                var a = r.value[s];
                                                o.push(a), u.delete(a), e - o.length > t && r.continue()
                                            }
                                        })
                                    }, i.oncomplete = function() {
                                        n(o)
                                    }, i.onabort = r
                                }) : Promise.resolve([])
                            }(e, t).then(function(e) {
                                return n.concat(e)
                            })
                        })
                    }
                }
            }, {}],
            3: [function(e, t, n) {
                function r(e) {
                    return e.reduce(function(e, t) {
                        return e.concat(t)
                    }, [])
                }
                e("serviceworker-cache-polyfill");
                var o = e("./helpers"),
                    a = e("./router"),
                    s = e("./options");
                t.exports = {
                    fetchListener: function(e) {
                        var t = a.match(e.request);
                        t ? e.respondWith(t(e.request)) : a.default && "GET" === e.request.method && 0 === e.request.url.indexOf("http") && e.respondWith(a.default(e.request))
                    },
                    activateListener: function(e) {
                        o.debug("activate event fired");
                        var t = s.cache.name + "$$$inactive$$$";
                        e.waitUntil(o.renameCache(t, s.cache.name))
                    },
                    installListener: function(e) {
                        var t = s.cache.name + "$$$inactive$$$";
                        o.debug("install event fired"), o.debug("creating cache [" + t + "]"), e.waitUntil(o.openCache({
                            cache: {
                                name: t
                            }
                        }).then(function(e) {
                            return Promise.all(s.preCacheItems).then(r).then(o.validatePrecacheInput).then(function(t) {
                                return o.debug("preCache list: " + (t.join(", ") || "(none)")), e.addAll(t)
                            })
                        }))
                    }
                }
            }, {
                "./helpers": 1,
                "./options": 4,
                "./router": 6,
                "serviceworker-cache-polyfill": 16
            }],
            4: [function(e, t, n) {
                var r;
                r = self.registration ? self.registration.scope : self.scope || new URL("./", self.location).href, t.exports = {
                    cache: {
                        name: "$$$toolbox-cache$$$" + r + "$$$",
                        maxAgeSeconds: null,
                        maxEntries: null
                    },
                    debug: !1,
                    networkTimeoutSeconds: null,
                    preCacheItems: [],
                    successResponses: /^0|([123]\d\d)|(40[14567])|410$/
                }
            }, {}],
            5: [function(e, t, n) {
                var r = new URL("./", self.location).pathname,
                    o = e("path-to-regexp"),
                    a = function(e, t, n, a) {
                        t instanceof RegExp ? this.fullUrlRegExp = t : (0 !== t.indexOf("/") && (t = r + t), this.keys = [], this.regexp = o(t, this.keys)), this.method = e, this.options = a, this.handler = n
                    };
                a.prototype.makeHandler = function(e) {
                    var t;
                    if (this.regexp) {
                        var n = this.regexp.exec(e);
                        t = {}, this.keys.forEach(function(e, r) {
                            t[e.name] = n[r + 1]
                        })
                    }
                    return function(e) {
                        return this.handler(e, t, this.options)
                    }.bind(this)
                }, t.exports = a
            }, {
                "path-to-regexp": 15
            }],
            6: [function(e, t, n) {
                var r = e("./route"),
                    o = e("./helpers"),
                    a = function(e, t) {
                        for (var n = e.entries(), r = n.next(), o = []; !r.done;) {
                            new RegExp(r.value[0]).test(t) && o.push(r.value[1]), r = n.next()
                        }
                        return o
                    },
                    s = function() {
                        this.routes = new Map, this.routes.set(RegExp, new Map), this.default = null
                    };
                ["get", "post", "put", "delete", "head", "any"].forEach(function(e) {
                    s.prototype[e] = function(t, n, r) {
                        return this.add(e, t, n, r)
                    }
                }), s.prototype.add = function(e, t, n, a) {
                    var s;
                    a = a || {}, t instanceof RegExp ? s = RegExp : s = (s = a.origin || self.location.origin) instanceof RegExp ? s.source : function(e) {
                        return e.replace(/[-\/\\^$*+?.()|[\]{}]/g, "\\$&")
                    }(s), e = e.toLowerCase();
                    var c = new r(e, t, n, a);
                    this.routes.has(s) || this.routes.set(s, new Map);
                    var i = this.routes.get(s);
                    i.has(e) || i.set(e, new Map);
                    var u = i.get(e),
                        f = c.regexp || c.fullUrlRegExp;
                    u.has(f.source) && o.debug('"' + t + '" resolves to same regex as existing route.'), u.set(f.source, c)
                }, s.prototype.matchMethod = function(e, t) {
                    var n = new URL(t),
                        r = n.origin,
                        o = n.pathname;
                    return this._match(e, a(this.routes, r), o) || this._match(e, [this.routes.get(RegExp)], t)
                }, s.prototype._match = function(e, t, n) {
                    if (0 === t.length) return null;
                    for (var r = 0; r < t.length; r++) {
                        var o = t[r],
                            s = o && o.get(e.toLowerCase());
                        if (s) {
                            var c = a(s, n);
                            if (c.length > 0) return c[0].makeHandler(n)
                        }
                    }
                    return null
                }, s.prototype.match = function(e) {
                    return this.matchMethod(e.method, e.url) || this.matchMethod("any", e.url)
                }, t.exports = new s
            }, {
                "./helpers": 1,
                "./route": 5
            }],
            7: [function(e, t, n) {
                var r = e("../options"),
                    o = e("../helpers");
                t.exports = function(e, t, n) {
                    return n = n || {}, o.debug("Strategy: cache first [" + e.url + "]", n), o.openCache(n).then(function(t) {
                        return t.match(e).then(function(t) {
                            var a = n.cache || r.cache,
                                s = Date.now();
                            return o.isResponseFresh(t, a.maxAgeSeconds, s) ? t : o.fetchAndCache(e, n)
                        })
                    })
                }
            }, {
                "../helpers": 1,
                "../options": 4
            }],
            8: [function(e, t, n) {
                var r = e("../options"),
                    o = e("../helpers");
                t.exports = function(e, t, n) {
                    return n = n || {}, o.debug("Strategy: cache only [" + e.url + "]", n), o.openCache(n).then(function(t) {
                        return t.match(e).then(function(e) {
                            var t = n.cache || r.cache,
                                a = Date.now();
                            if (o.isResponseFresh(e, t.maxAgeSeconds, a)) return e
                        })
                    })
                }
            }, {
                "../helpers": 1,
                "../options": 4
            }],
            9: [function(e, t, n) {
                var r = e("../helpers"),
                    o = e("./cacheOnly");
                t.exports = function(e, t, n) {
                    return r.debug("Strategy: fastest [" + e.url + "]", n), new Promise(function(a, s) {
                        var c = !1,
                            i = [],
                            u = function(e) {
                                i.push(e.toString()), c ? s(new Error('Both cache and network failed: "' + i.join('", "') + '"')) : c = !0
                            },
                            f = function(e) {
                                e instanceof Response ? a(e) : u("No result returned")
                            };
                        r.fetchAndCache(e.clone(), n).then(f, u), o(e, t, n).then(f, u)
                    })
                }
            }, {
                "../helpers": 1,
                "./cacheOnly": 8
            }],
            10: [function(e, t, n) {
                t.exports = {
                    networkOnly: e("./networkOnly"),
                    networkFirst: e("./networkFirst"),
                    cacheOnly: e("./cacheOnly"),
                    cacheFirst: e("./cacheFirst"),
                    fastest: e("./fastest")
                }
            }, {
                "./cacheFirst": 7,
                "./cacheOnly": 8,
                "./fastest": 9,
                "./networkFirst": 11,
                "./networkOnly": 12
            }],
            11: [function(e, t, n) {
                var r = e("../options"),
                    o = e("../helpers");
                t.exports = function(e, t, n) {
                    var a = (n = n || {}).successResponses || r.successResponses,
                        s = n.networkTimeoutSeconds || r.networkTimeoutSeconds;
                    return o.debug("Strategy: network first [" + e.url + "]", n), o.openCache(n).then(function(t) {
                        var c, i, u = [];
                        if (s) {
                            var f = new Promise(function(a) {
                                c = setTimeout(function() {
                                    t.match(e).then(function(e) {
                                        var t = n.cache || r.cache,
                                            s = Date.now(),
                                            c = t.maxAgeSeconds;
                                        o.isResponseFresh(e, c, s) && a(e)
                                    })
                                }, 1e3 * s)
                            });
                            u.push(f)
                        }
                        var l = o.fetchAndCache(e, n).then(function(e) {
                            if (c && clearTimeout(c), a.test(e.status)) return e;
                            throw o.debug("Response was an HTTP error: " + e.statusText, n), i = e, new Error("Bad response")
                        }).catch(function(r) {
                            return o.debug("Network or response error, fallback to cache [" + e.url + "]", n), t.match(e).then(function(e) {
                                if (e) return e;
                                if (i) return i;
                                throw r
                            })
                        });
                        return u.push(l), Promise.race(u)
                    })
                }
            }, {
                "../helpers": 1,
                "../options": 4
            }],
            12: [function(e, t, n) {
                var r = e("../helpers");
                t.exports = function(e, t, n) {
                    return r.debug("Strategy: network only [" + e.url + "]", n), fetch(e)
                }
            }, {
                "../helpers": 1
            }],
            13: [function(e, t, n) {
                var r = e("./options"),
                    o = e("./router"),
                    a = e("./helpers"),
                    s = e("./strategies"),
                    c = e("./listeners");
                a.debug("Service Worker Toolbox is loading"), self.addEventListener("install", c.installListener), self.addEventListener("activate", c.activateListener), self.addEventListener("fetch", c.fetchListener), t.exports = {
                    networkOnly: s.networkOnly,
                    networkFirst: s.networkFirst,
                    cacheOnly: s.cacheOnly,
                    cacheFirst: s.cacheFirst,
                    fastest: s.fastest,
                    router: o,
                    options: r,
                    cache: a.cache,
                    uncache: a.uncache,
                    precache: a.precache
                }
            }, {
                "./helpers": 1,
                "./listeners": 3,
                "./options": 4,
                "./router": 6,
                "./strategies": 10
            }],
            14: [function(e, t, n) {
                t.exports = Array.isArray || function(e) {
                    return "[object Array]" == Object.prototype.toString.call(e)
                }
            }, {}],
            15: [function(e, t, n) {
                function r(e, t) {
                    for (var n, r = [], o = 0, a = 0, s = "", u = t && t.delimiter || "/"; null != (n = d.exec(e));) {
                        var f = n[0],
                            l = n[1],
                            h = n.index;
                        if (s += e.slice(a, h), a = h + f.length, l) s += l[1];
                        else {
                            var p = e[a],
                                g = n[2],
                                m = n[3],
                                b = n[4],
                                v = n[5],
                                w = n[6],
                                y = n[7];
                            s && (r.push(s), s = "");
                            var x = null != g && null != p && p !== g,
                                E = "+" === w || "*" === w,
                                R = "?" === w || "*" === w,
                                k = n[2] || u,
                                C = b || v;
                            r.push({
                                name: m || o++,
                                prefix: g || "",
                                delimiter: k,
                                optional: R,
                                repeat: E,
                                partial: x,
                                asterisk: !!y,
                                pattern: C ? i(C) : y ? ".*" : "[^" + c(k) + "]+?"
                            })
                        }
                    }
                    return a < e.length && (s += e.substr(a)), s && r.push(s), r
                }

                function o(e) {
                    return encodeURI(e).replace(/[\/?#]/g, function(e) {
                        return "%" + e.charCodeAt(0).toString(16).toUpperCase()
                    })
                }

                function a(e) {
                    return encodeURI(e).replace(/[?#]/g, function(e) {
                        return "%" + e.charCodeAt(0).toString(16).toUpperCase()
                    })
                }

                function s(e) {
                    for (var t = new Array(e.length), n = 0; n < e.length; n++) "object" == typeof e[n] && (t[n] = new RegExp("^(?:" + e[n].pattern + ")$"));
                    return function(n, r) {
                        for (var s = "", c = n || {}, i = (r || {}).pretty ? o : encodeURIComponent, u = 0; u < e.length; u++) {
                            var f = e[u];
                            if ("string" != typeof f) {
                                var l, h = c[f.name];
                                if (null == h) {
                                    if (f.optional) {
                                        f.partial && (s += f.prefix);
                                        continue
                                    }
                                    throw new TypeError('Expected "' + f.name + '" to be defined')
                                }
                                if (p(h)) {
                                    if (!f.repeat) throw new TypeError('Expected "' + f.name + '" to not repeat, but received `' + JSON.stringify(h) + "`");
                                    if (0 === h.length) {
                                        if (f.optional) continue;
                                        throw new TypeError('Expected "' + f.name + '" to not be empty')
                                    }
                                    for (var d = 0; d < h.length; d++) {
                                        if (l = i(h[d]), !t[u].test(l)) throw new TypeError('Expected all "' + f.name + '" to match "' + f.pattern + '", but received `' + JSON.stringify(l) + "`");
                                        s += (0 === d ? f.prefix : f.delimiter) + l
                                    }
                                } else {
                                    if (l = f.asterisk ? a(h) : i(h), !t[u].test(l)) throw new TypeError('Expected "' + f.name + '" to match "' + f.pattern + '", but received "' + l + '"');
                                    s += f.prefix + l
                                }
                            } else s += f
                        }
                        return s
                    }
                }

                function c(e) {
                    return e.replace(/([.+*?=^!:${}()[\]|\/\\])/g, "\\$1")
                }

                function i(e) {
                    return e.replace(/([=!:$\/()])/g, "\\$1")
                }

                function u(e, t) {
                    return e.keys = t, e
                }

                function f(e) {
                    return e.sensitive ? "" : "i"
                }

                function l(e, t, n) {
                    p(t) || (n = t || n, t = []);
                    for (var r = (n = n || {}).strict, o = !1 !== n.end, a = "", s = 0; s < e.length; s++) {
                        var i = e[s];
                        if ("string" == typeof i) a += c(i);
                        else {
                            var l = c(i.prefix),
                                h = "(?:" + i.pattern + ")";
                            t.push(i), i.repeat && (h += "(?:" + l + h + ")*"), a += h = i.optional ? i.partial ? l + "(" + h + ")?" : "(?:" + l + "(" + h + "))?" : l + "(" + h + ")"
                        }
                    }
                    var d = c(n.delimiter || "/"),
                        g = a.slice(-d.length) === d;
                    return r || (a = (g ? a.slice(0, -d.length) : a) + "(?:" + d + "(?=$))?"), a += o ? "$" : r && g ? "" : "(?=" + d + "|$)", u(new RegExp("^" + a, f(n)), t)
                }

                function h(e, t, n) {
                    return p(t) || (n = t || n, t = []), n = n || {}, e instanceof RegExp ? function(e, t) {
                        var n = e.source.match(/\((?!\?)/g);
                        if (n)
                            for (var r = 0; r < n.length; r++) t.push({
                                name: r,
                                prefix: null,
                                delimiter: null,
                                optional: !1,
                                repeat: !1,
                                partial: !1,
                                asterisk: !1,
                                pattern: null
                            });
                        return u(e, t)
                    }(e, t) : p(e) ? function(e, t, n) {
                        for (var r = [], o = 0; o < e.length; o++) r.push(h(e[o], t, n).source);
                        return u(new RegExp("(?:" + r.join("|") + ")", f(n)), t)
                    }(e, t, n) : function(e, t, n) {
                        return l(r(e, n), t, n)
                    }(e, t, n)
                }
                var p = e("isarray");
                t.exports = h, t.exports.parse = r, t.exports.compile = function(e, t) {
                    return s(r(e, t))
                }, t.exports.tokensToFunction = s, t.exports.tokensToRegExp = l;
                var d = new RegExp(["(\\\\.)", "([\\/.])?(?:(?:\\:(\\w+)(?:\\(((?:\\\\.|[^\\\\()])+)\\))?|\\(((?:\\\\.|[^\\\\()])+)\\))([+*?])?|(\\*))"].join("|"), "g")
            }, {
                isarray: 14
            }],
            16: [function(e, t, n) {
                ! function() {
                    var e = Cache.prototype.addAll,
                        t = navigator.userAgent.match(/(Firefox|Chrome)\/(\d+\.)/);
                    if (t) var n = t[1],
                        r = parseInt(t[2]);
                    e && (!t || "Firefox" === n && r >= 46 || "Chrome" === n && r >= 50) || (Cache.prototype.addAll = function(e) {
                        function t(e) {
                            this.name = "NetworkError", this.code = 19, this.message = e
                        }
                        var n = this;
                        return t.prototype = Object.create(Error.prototype), Promise.resolve().then(function() {
                            if (arguments.length < 1) throw new TypeError;
                            return e = e.map(function(e) {
                                return e instanceof Request ? e : String(e)
                            }), Promise.all(e.map(function(e) {
                                "string" == typeof e && (e = new Request(e));
                                var n = new URL(e.url).protocol;
                                if ("http:" !== n && "https:" !== n) throw new t("Invalid scheme");
                                return fetch(e.clone())
                            }))
                        }).then(function(r) {
                            if (r.some(function(e) {
                                    return !e.ok
                                })) throw new t("Incorrect response status");
                            return Promise.all(r.map(function(t, r) {
                                return n.put(e[r], t)
                            }))
                        }).then(function() {})
                    }, Cache.prototype.add = function(e) {
                        return this.addAll([e])
                    })
                }()
            }, {}]
        }, {}, [13])(13)
    }), toolbox.router.get(/^https:\/\/fonts\.googleapis\.com\//, toolbox.cacheFirst, {}), toolbox.router.get(/^https:\/\/www\.thecocktaildb\.com\/images\/media\/drink\/(\w+)\.jpg/, toolbox.cacheFirst, {});