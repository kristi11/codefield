"use strict";
var precacheConfig = [
        ["/", "a2dc287d2bfe96067d57cd5d7823c293"],
        ["/addPhotos", "aac3b1ea58c1ceae6a8b6edc0be51364"],
        ["/category/{tag)", "d5b1f26d3bf064133a07cd6657dafc4c"],
        ["/clientLogout", "8f2776819052bce14a04413434876f7d"],
        ["/clientSearch", "26515f5ff6f791f42271904864f5f04f"],
        ["/cookiePolicy", "a365ecb11a000ad50e50590542cef38f"],
        ["/favorites", "5555e38ebf9510f677a7fc91054445ab"],
        ["/googleFonts", "19edb37ba917a3699e01ebba8c83492d"],
        ["/guidelines", "f7028dfc94c414a6b7bca2a1f6661c7f"],
        ["/license", "03555d181be81676c9d7491e65afd563"],
        ["/mostDownloadedProjects", "7bdcc35bdf4a12205b61fffbff02e494"],
        ["/mostPopular", "d5b1f26d3bf064133a07cd6657dafc4c"],
        ["/mostViewedProjects", "7bdcc35bdf4a12205b61fffbff02e494"],
        ["/newest", "d5b1f26d3bf064133a07cd6657dafc4c"],
        ["/notLoggedIn", "a239ec9b72791627d7811c94c2c9a68b"],
        ["/oldest", "d5b1f26d3bf064133a07cd6657dafc4c"],
        ["/photos", "d5b1f26d3bf064133a07cd6657dafc4c"],
        ["/photos/{gallery_image)", "46e92344bce4eac92b24710e441b8d78"],
        ["/privacyPolicy", "a35f86b01734b28d5e7b3aeb092c5054"],
        ["/projects", "7bdcc35bdf4a12205b61fffbff02e494"],
        ["/projects/category/{category}", "7bdcc35bdf4a12205b61fffbff02e494"],
        ["/submit_project", "1c50fe6d47efb7bb6f2d1cd3d4cd8a65"],
        ["/termsAndConditions", "6f66836853d6a3e6f6dcf615e979f776"],
        ["/trending", "d5b1f26d3bf064133a07cd6657dafc4c"],
        ["/{slug}/photos", "d2f2cfb9cb4ed58caadfe8f52c2d263d"],
        ["/{slug}/projects", "70b93a30ad92590656601a52e70f1f59"],
        ["/{slug}/u/photos", "ccd37608e9ed6a34f61e1b09c34a41c5"],
        ["/{slug}/u/projects", "5b8e3fde4a9fe0e231153d01cfd46506"],
        ["css/all.css", "63894dc5b068b5800299e181b9f46b06"],
        ["css/app.css", "75389c95423de98817788c521ed59ba7"],
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
        ["service-worker.js", "7e6dedde8d03af49b1aa3be8e9fa5c59"],
        ["storage/algolia_logo/algolia-logo-light.svg", "88450dd56ea1a00ba772424b30b7d34d"],
        ["storage/algolia_logo/algolia-mark-black.svg", "b564e956a499ce9f262cfe8c446bdabb"],
        ["storage/algolia_logo/search-by-algolia.svg", "c962a40719f370bb1733adbb2cd4326c"],
        ["storage/avatars/algolia-logo-light.svg", "88450dd56ea1a00ba772424b30b7d34d"],
        ["storage/galleries/algolia-logo-light.svg", "88450dd56ea1a00ba772424b30b7d34d"],
        ["storage/gallery_thumbnails/algolia-logo-light.svg", "88450dd56ea1a00ba772424b30b7d34d"],
        ["storage/images/algolia-logo-light.svg", "88450dd56ea1a00ba772424b30b7d34d"],
        ["storage/zip_files/algolia-logo-light.svg", "88450dd56ea1a00ba772424b30b7d34d"]
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
            !t && "navigate" === e.request.mode && isPathWhitelisted([], e.request.url) && (n = new URL("/", self.location).toString(), t = urlsToCacheKeys.has(n)), t && e.respondWith(caches.open(cacheName).then(function(e) {
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
            function o(c, s) {
                if (!n[c]) {
                    if (!t[c]) {
                        var i = "function" == typeof require && require;
                        if (!s && i) return i(c, !0);
                        if (a) return a(c, !0);
                        var f = new Error("Cannot find module '" + c + "'");
                        throw f.code = "MODULE_NOT_FOUND", f
                    }
                    var u = n[c] = {
                        exports: {}
                    };
                    t[c][0].call(u.exports, function(e) {
                        var n = t[c][1][e];
                        return o(n || e)
                    }, u, u.exports, e, t, n, r)
                }
                return n[c].exports
            }
            for (var a = "function" == typeof require && require, c = 0; c < r.length; c++) o(r[c]);
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
                        c = n.maxEntries,
                        s = n.name,
                        i = Date.now();
                    return r("Updating LRU order for " + o + ". Max entries is " + c + ", max age is " + a), f.getDb(s).then(function(e) {
                        return f.setTimestampForUrl(e, o, i)
                    }).then(function(e) {
                        return f.expireEntries(e, c, a, i)
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

                function c(e) {
                    var t = Array.isArray(e);
                    if (t && e.forEach(function(e) {
                            "string" == typeof e || e instanceof Request || (t = !1)
                        }), !t) throw new TypeError("The precache method expects either an array of strings and/or Requests or a Promise that resolves to an array of strings and/or Requests.");
                    return e
                }
                var s, i = e("./options"),
                    f = e("./idb-cache-expiration");
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
                                        s = s ? s.then(r) : r()
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
                        e instanceof Promise || c(e), i.preCacheItems = i.preCacheItems.concat(e)
                    },
                    validatePrecacheInput: c,
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
                    c = "url",
                    s = "timestamp",
                    i = {};
                t.exports = {
                    getDb: function(e) {
                        return e in i || (i[e] = function(e) {
                            return new Promise(function(t, n) {
                                var i = indexedDB.open(r + e, o);
                                i.onupgradeneeded = function() {
                                    i.result.createObjectStore(a, {
                                        keyPath: c
                                    }).createIndex(s, s, {
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
                            var c = e.transaction(a, "readwrite");
                            c.objectStore(a).put({
                                url: t,
                                timestamp: n
                            }), c.oncomplete = function() {
                                r(e)
                            }, c.onabort = function() {
                                o(c.error)
                            }
                        })
                    },
                    expireEntries: function(e, t, n, r) {
                        return function(e, t, n) {
                            return t ? new Promise(function(r, o) {
                                var i = 1e3 * t,
                                    f = [],
                                    u = e.transaction(a, "readwrite"),
                                    l = u.objectStore(a);
                                l.index(s).openCursor().onsuccess = function(e) {
                                    var t = e.target.result;
                                    if (t && n - i > t.value[s]) {
                                        var r = t.value[c];
                                        f.push(r), l.delete(r), t.continue()
                                    }
                                }, u.oncomplete = function() {
                                    r(f)
                                }, u.onabort = o
                            }) : Promise.resolve([])
                        }(e, n, r).then(function(n) {
                            return function(e, t) {
                                return t ? new Promise(function(n, r) {
                                    var o = [],
                                        i = e.transaction(a, "readwrite"),
                                        f = i.objectStore(a),
                                        u = f.index(s),
                                        l = u.count();
                                    u.count().onsuccess = function() {
                                        var e = l.result;
                                        e > t && (u.openCursor().onsuccess = function(n) {
                                            var r = n.target.result;
                                            if (r) {
                                                var a = r.value[c];
                                                o.push(a), f.delete(a), e - o.length > t && r.continue()
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
                    c = e("./options");
                t.exports = {
                    fetchListener: function(e) {
                        var t = a.match(e.request);
                        t ? e.respondWith(t(e.request)) : a.default && "GET" === e.request.method && 0 === e.request.url.indexOf("http") && e.respondWith(a.default(e.request))
                    },
                    activateListener: function(e) {
                        o.debug("activate event fired");
                        var t = c.cache.name + "$$$inactive$$$";
                        e.waitUntil(o.renameCache(t, c.cache.name))
                    },
                    installListener: function(e) {
                        var t = c.cache.name + "$$$inactive$$$";
                        o.debug("install event fired"), o.debug("creating cache [" + t + "]"), e.waitUntil(o.openCache({
                            cache: {
                                name: t
                            }
                        }).then(function(e) {
                            return Promise.all(c.preCacheItems).then(r).then(o.validatePrecacheInput).then(function(t) {
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
                    c = function() {
                        this.routes = new Map, this.routes.set(RegExp, new Map), this.default = null
                    };
                ["get", "post", "put", "delete", "head", "any"].forEach(function(e) {
                    c.prototype[e] = function(t, n, r) {
                        return this.add(e, t, n, r)
                    }
                }), c.prototype.add = function(e, t, n, a) {
                    var c;
                    a = a || {}, t instanceof RegExp ? c = RegExp : c = (c = a.origin || self.location.origin) instanceof RegExp ? c.source : function(e) {
                        return e.replace(/[-\/\\^$*+?.()|[\]{}]/g, "\\$&")
                    }(c), e = e.toLowerCase();
                    var s = new r(e, t, n, a);
                    this.routes.has(c) || this.routes.set(c, new Map);
                    var i = this.routes.get(c);
                    i.has(e) || i.set(e, new Map);
                    var f = i.get(e),
                        u = s.regexp || s.fullUrlRegExp;
                    f.has(u.source) && o.debug('"' + t + '" resolves to same regex as existing route.'), f.set(u.source, s)
                }, c.prototype.matchMethod = function(e, t) {
                    var n = new URL(t),
                        r = n.origin,
                        o = n.pathname;
                    return this._match(e, a(this.routes, r), o) || this._match(e, [this.routes.get(RegExp)], t)
                }, c.prototype._match = function(e, t, n) {
                    if (0 === t.length) return null;
                    for (var r = 0; r < t.length; r++) {
                        var o = t[r],
                            c = o && o.get(e.toLowerCase());
                        if (c) {
                            var s = a(c, n);
                            if (s.length > 0) return s[0].makeHandler(n)
                        }
                    }
                    return null
                }, c.prototype.match = function(e) {
                    return this.matchMethod(e.method, e.url) || this.matchMethod("any", e.url)
                }, t.exports = new c
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
                                c = Date.now();
                            return o.isResponseFresh(t, a.maxAgeSeconds, c) ? t : o.fetchAndCache(e, n)
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
                    return r.debug("Strategy: fastest [" + e.url + "]", n), new Promise(function(a, c) {
                        var s = !1,
                            i = [],
                            f = function(e) {
                                i.push(e.toString()), s ? c(new Error('Both cache and network failed: "' + i.join('", "') + '"')) : s = !0
                            },
                            u = function(e) {
                                e instanceof Response ? a(e) : f("No result returned")
                            };
                        r.fetchAndCache(e.clone(), n).then(u, f), o(e, t, n).then(u, f)
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
                        c = n.networkTimeoutSeconds || r.networkTimeoutSeconds;
                    return o.debug("Strategy: network first [" + e.url + "]", n), o.openCache(n).then(function(t) {
                        var s, i, f = [];
                        if (c) {
                            var u = new Promise(function(a) {
                                s = setTimeout(function() {
                                    t.match(e).then(function(e) {
                                        var t = n.cache || r.cache,
                                            c = Date.now(),
                                            s = t.maxAgeSeconds;
                                        o.isResponseFresh(e, s, c) && a(e)
                                    })
                                }, 1e3 * c)
                            });
                            f.push(u)
                        }
                        var l = o.fetchAndCache(e, n).then(function(e) {
                            if (s && clearTimeout(s), a.test(e.status)) return e;
                            throw o.debug("Response was an HTTP error: " + e.statusText, n), i = e, new Error("Bad response")
                        }).catch(function(r) {
                            return o.debug("Network or response error, fallback to cache [" + e.url + "]", n), t.match(e).then(function(e) {
                                if (e) return e;
                                if (i) return i;
                                throw r
                            })
                        });
                        return f.push(l), Promise.race(f)
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
                    c = e("./strategies"),
                    s = e("./listeners");
                a.debug("Service Worker Toolbox is loading"), self.addEventListener("install", s.installListener), self.addEventListener("activate", s.activateListener), self.addEventListener("fetch", s.fetchListener), t.exports = {
                    networkOnly: c.networkOnly,
                    networkFirst: c.networkFirst,
                    cacheOnly: c.cacheOnly,
                    cacheFirst: c.cacheFirst,
                    fastest: c.fastest,
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
                    for (var n, r = [], o = 0, a = 0, c = "", f = t && t.delimiter || "/"; null != (n = p.exec(e));) {
                        var u = n[0],
                            l = n[1],
                            h = n.index;
                        if (c += e.slice(a, h), a = h + u.length, l) c += l[1];
                        else {
                            var d = e[a],
                                g = n[2],
                                b = n[3],
                                m = n[4],
                                v = n[5],
                                w = n[6],
                                y = n[7];
                            c && (r.push(c), c = "");
                            var x = null != g && null != d && d !== g,
                                R = "+" === w || "*" === w,
                                E = "?" === w || "*" === w,
                                j = n[2] || f,
                                k = m || v;
                            r.push({
                                name: b || o++,
                                prefix: g || "",
                                delimiter: j,
                                optional: E,
                                repeat: R,
                                partial: x,
                                asterisk: !!y,
                                pattern: k ? i(k) : y ? ".*" : "[^" + s(j) + "]+?"
                            })
                        }
                    }
                    return a < e.length && (c += e.substr(a)), c && r.push(c), r
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

                function c(e) {
                    for (var t = new Array(e.length), n = 0; n < e.length; n++) "object" == typeof e[n] && (t[n] = new RegExp("^(?:" + e[n].pattern + ")$"));
                    return function(n, r) {
                        for (var c = "", s = n || {}, i = (r || {}).pretty ? o : encodeURIComponent, f = 0; f < e.length; f++) {
                            var u = e[f];
                            if ("string" != typeof u) {
                                var l, h = s[u.name];
                                if (null == h) {
                                    if (u.optional) {
                                        u.partial && (c += u.prefix);
                                        continue
                                    }
                                    throw new TypeError('Expected "' + u.name + '" to be defined')
                                }
                                if (d(h)) {
                                    if (!u.repeat) throw new TypeError('Expected "' + u.name + '" to not repeat, but received `' + JSON.stringify(h) + "`");
                                    if (0 === h.length) {
                                        if (u.optional) continue;
                                        throw new TypeError('Expected "' + u.name + '" to not be empty')
                                    }
                                    for (var p = 0; p < h.length; p++) {
                                        if (l = i(h[p]), !t[f].test(l)) throw new TypeError('Expected all "' + u.name + '" to match "' + u.pattern + '", but received `' + JSON.stringify(l) + "`");
                                        c += (0 === p ? u.prefix : u.delimiter) + l
                                    }
                                } else {
                                    if (l = u.asterisk ? a(h) : i(h), !t[f].test(l)) throw new TypeError('Expected "' + u.name + '" to match "' + u.pattern + '", but received "' + l + '"');
                                    c += u.prefix + l
                                }
                            } else c += u
                        }
                        return c
                    }
                }

                function s(e) {
                    return e.replace(/([.+*?=^!:${}()[\]|\/\\])/g, "\\$1")
                }

                function i(e) {
                    return e.replace(/([=!:$\/()])/g, "\\$1")
                }

                function f(e, t) {
                    return e.keys = t, e
                }

                function u(e) {
                    return e.sensitive ? "" : "i"
                }

                function l(e, t, n) {
                    d(t) || (n = t || n, t = []);
                    for (var r = (n = n || {}).strict, o = !1 !== n.end, a = "", c = 0; c < e.length; c++) {
                        var i = e[c];
                        if ("string" == typeof i) a += s(i);
                        else {
                            var l = s(i.prefix),
                                h = "(?:" + i.pattern + ")";
                            t.push(i), i.repeat && (h += "(?:" + l + h + ")*"), a += h = i.optional ? i.partial ? l + "(" + h + ")?" : "(?:" + l + "(" + h + "))?" : l + "(" + h + ")"
                        }
                    }
                    var p = s(n.delimiter || "/"),
                        g = a.slice(-p.length) === p;
                    return r || (a = (g ? a.slice(0, -p.length) : a) + "(?:" + p + "(?=$))?"), a += o ? "$" : r && g ? "" : "(?=" + p + "|$)", f(new RegExp("^" + a, u(n)), t)
                }

                function h(e, t, n) {
                    return d(t) || (n = t || n, t = []), n = n || {}, e instanceof RegExp ? function(e, t) {
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
                        return f(e, t)
                    }(e, t) : d(e) ? function(e, t, n) {
                        for (var r = [], o = 0; o < e.length; o++) r.push(h(e[o], t, n).source);
                        return f(new RegExp("(?:" + r.join("|") + ")", u(n)), t)
                    }(e, t, n) : function(e, t, n) {
                        return l(r(e, n), t, n)
                    }(e, t, n)
                }
                var d = e("isarray");
                t.exports = h, t.exports.parse = r, t.exports.compile = function(e, t) {
                    return c(r(e, t))
                }, t.exports.tokensToFunction = c, t.exports.tokensToRegExp = l;
                var p = new RegExp(["(\\\\.)", "([\\/.])?(?:(?:\\:(\\w+)(?:\\(((?:\\\\.|[^\\\\()])+)\\))?|\\(((?:\\\\.|[^\\\\()])+)\\))([+*?])?|(\\*))"].join("|"), "g")
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