<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="csrf-token" content="C3VMAhsfFSrBkCzVCfNckICFRftbfSEy7muTqQTq">

    <title inertia="">Analytics Dashboard - Laravel</title>

    <link rel="preconnect" href="https://fonts.bunny.net/">
    <link href="Analytics%20Dashboard%20-%20Laravel_files/css.css" rel="stylesheet">

    <!-- Icon -->
    <link rel="shortcut icon" href="https://catetdulu.com/img/icon/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="https://catetdulu.com/img/icon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://catetdulu.com/img/icon/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://catetdulu.com/img/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="192x192" href="https://catetdulu.com/img/icon/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="512x512" href="https://catetdulu.com/img/icon/android-chrome-512x512.png">
    <link rel="manifest" href="https://catetdulu.com/img/icon/manifest.json">

    <script type="text/javascript">const Ziggy = { "url": "https:\/\/catetdulu.com", "port": null, "defaults": {}, "routes": { "welcome": { "uri": "\/", "methods": ["GET", "HEAD"] }, "dashboard": { "uri": "dashboard", "methods": ["GET", "HEAD"] }, "dashboard.refresh-suggestions": { "uri": "dashboard\/refresh-suggestions", "methods": ["POST"] }, "dashboard.fetch-suggestions": { "uri": "dashboard\/fetch-suggestions", "methods": ["GET", "HEAD"] }, "ai.tooltip.income": { "uri": "ai-tooltip-income", "methods": ["GET", "HEAD"] }, "ai.tooltip.outcome": { "uri": "ai-tooltip-outcome", "methods": ["GET", "HEAD"] }, "ai.tooltip.health": { "uri": "ai-tooltip-health", "methods": ["GET", "HEAD"] }, "ai.tooltip.balance": { "uri": "ai-tooltip-balance", "methods": ["GET", "HEAD"] }, "income.index": { "uri": "income", "methods": ["GET", "HEAD"] }, "income.store": { "uri": "income", "methods": ["POST"] }, "income.update": { "uri": "income\/{income}", "methods": ["PUT"], "parameters": ["income"], "bindings": { "income": "id" } }, "income.destroy": { "uri": "income\/{income}", "methods": ["DELETE"], "parameters": ["income"], "bindings": { "income": "id" } }, "outcome.index": { "uri": "outcome", "methods": ["GET", "HEAD"] }, "outcome.store": { "uri": "outcome", "methods": ["POST"] }, "outcome.update": { "uri": "outcome\/{outcome}", "methods": ["PUT"], "parameters": ["outcome"], "bindings": { "outcome": "id" } }, "outcome.destroy": { "uri": "outcome\/{outcome}", "methods": ["DELETE"], "parameters": ["outcome"], "bindings": { "outcome": "id" } }, "ai-chat.send": { "uri": "ai-chat\/send", "methods": ["POST"] }, "ai-chat.starters": { "uri": "ai-chat\/starters", "methods": ["GET", "HEAD"] }, "profile.edit": { "uri": "settings\/profile", "methods": ["GET", "HEAD"] }, "profile.update": { "uri": "settings\/profile", "methods": ["PATCH"] }, "profile.destroy": { "uri": "settings\/profile", "methods": ["DELETE"] }, "password.edit": { "uri": "settings\/password", "methods": ["GET", "HEAD"] }, "password.update": { "uri": "settings\/password", "methods": ["PUT"] }, "register": { "uri": "register", "methods": ["GET", "HEAD"] }, "login": { "uri": "login", "methods": ["GET", "HEAD"] }, "verification.notice": { "uri": "verify-email", "methods": ["GET", "HEAD"] }, "verification.verify": { "uri": "verify-email\/{id}\/{hash}", "methods": ["GET", "HEAD"], "parameters": ["id", "hash"] }, "verification.send": { "uri": "email\/verification-notification", "methods": ["POST"] }, "password.confirm": { "uri": "confirm-password", "methods": ["GET", "HEAD"] }, "logout": { "uri": "logout", "methods": ["POST"] }, "storage.local": { "uri": "storage\/{path}", "methods": ["GET", "HEAD"], "wheres": { "path": ".*" }, "parameters": ["path"] } } }; !function (t, r) { "object" == typeof exports && "undefined" != typeof module ? module.exports = r() : "function" == typeof define && define.amd ? define(r) : (t || self).route = r() }(this, function () { function t(t, r) { for (var n = 0; n < r.length; n++) { var e = r[n]; e.enumerable = e.enumerable || !1, e.configurable = !0, "value" in e && (e.writable = !0), Object.defineProperty(t, u(e.key), e) } } function r(r, n, e) { return n && t(r.prototype, n), e && t(r, e), Object.defineProperty(r, "prototype", { writable: !1 }), r } function n() { return n = Object.assign ? Object.assign.bind() : function (t) { for (var r = 1; r < arguments.length; r++) { var n = arguments[r]; for (var e in n) ({}).hasOwnProperty.call(n, e) && (t[e] = n[e]) } return t }, n.apply(null, arguments) } function e(t) { return e = Object.setPrototypeOf ? Object.getPrototypeOf.bind() : function (t) { return t.__proto__ || Object.getPrototypeOf(t) }, e(t) } function o() { try { var t = !Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () { })) } catch (t) { } return (o = function () { return !!t })() } function i(t, r) { return i = Object.setPrototypeOf ? Object.setPrototypeOf.bind() : function (t, r) { return t.__proto__ = r, t }, i(t, r) } function u(t) { var r = function (t) { if ("object" != typeof t || !t) return t; var r = t[Symbol.toPrimitive]; if (void 0 !== r) { var n = r.call(t, "string"); if ("object" != typeof n) return n; throw new TypeError("@@toPrimitive must return a primitive value.") } return String(t) }(t); return "symbol" == typeof r ? r : r + "" } function f(t) { var r = "function" == typeof Map ? new Map : void 0; return f = function (t) { if (null === t || !function (t) { try { return -1 !== Function.toString.call(t).indexOf("[native code]") } catch (r) { return "function" == typeof t } }(t)) return t; if ("function" != typeof t) throw new TypeError("Super expression must either be null or a function"); if (void 0 !== r) { if (r.has(t)) return r.get(t); r.set(t, n) } function n() { return function (t, r, n) { if (o()) return Reflect.construct.apply(null, arguments); var e = [null]; e.push.apply(e, r); var u = new (t.bind.apply(t, e)); return n && i(u, n.prototype), u }(t, arguments, e(this).constructor) } return n.prototype = Object.create(t.prototype, { constructor: { value: n, enumerable: !1, writable: !0, configurable: !0 } }), i(n, t) }, f(t) } var a = String.prototype.replace, c = /%20/g, l = "RFC3986", s = { default: l, formatters: { RFC1738: function (t) { return a.call(t, c, "+") }, RFC3986: function (t) { return String(t) } }, RFC1738: "RFC1738", RFC3986: l }, v = Object.prototype.hasOwnProperty, p = Array.isArray, y = function () { for (var t = [], r = 0; r < 256; ++r)t.push("%" + ((r < 16 ? "0" : "") + r.toString(16)).toUpperCase()); return t }(), d = function (t, r) { for (var n = r && r.plainObjects ? Object.create(null) : {}, e = 0; e < t.length; ++e)void 0 !== t[e] && (n[e] = t[e]); return n }, b = { arrayToObject: d, assign: function (t, r) { return Object.keys(r).reduce(function (t, n) { return t[n] = r[n], t }, t) }, combine: function (t, r) { return [].concat(t, r) }, compact: function (t) { for (var r = [{ obj: { o: t }, prop: "o" }], n = [], e = 0; e < r.length; ++e)for (var o = r[e], i = o.obj[o.prop], u = Object.keys(i), f = 0; f < u.length; ++f) { var a = u[f], c = i[a]; "object" == typeof c && null !== c && -1 === n.indexOf(c) && (r.push({ obj: i, prop: a }), n.push(c)) } return function (t) { for (; t.length > 1;) { var r = t.pop(), n = r.obj[r.prop]; if (p(n)) { for (var e = [], o = 0; o < n.length; ++o)void 0 !== n[o] && e.push(n[o]); r.obj[r.prop] = e } } }(r), t }, decode: function (t, r, n) { var e = t.replace(/\+/g, " "); if ("iso-8859-1" === n) return e.replace(/%[0-9a-f]{2}/gi, unescape); try { return decodeURIComponent(e) } catch (t) { return e } }, encode: function (t, r, n, e, o) { if (0 === t.length) return t; var i = t; if ("symbol" == typeof t ? i = Symbol.prototype.toString.call(t) : "string" != typeof t && (i = String(t)), "iso-8859-1" === n) return escape(i).replace(/%u[0-9a-f]{4}/gi, function (t) { return "%26%23" + parseInt(t.slice(2), 16) + "%3B" }); for (var u = "", f = 0; f < i.length; ++f) { var a = i.charCodeAt(f); 45 === a || 46 === a || 95 === a || 126 === a || a >= 48 && a <= 57 || a >= 65 && a <= 90 || a >= 97 && a <= 122 || o === s.RFC1738 && (40 === a || 41 === a) ? u += i.charAt(f) : a < 128 ? u += y[a] : a < 2048 ? u += y[192 | a >> 6] + y[128 | 63 & a] : a < 55296 || a >= 57344 ? u += y[224 | a >> 12] + y[128 | a >> 6 & 63] + y[128 | 63 & a] : (a = 65536 + ((1023 & a) << 10 | 1023 & i.charCodeAt(f += 1)), u += y[240 | a >> 18] + y[128 | a >> 12 & 63] + y[128 | a >> 6 & 63] + y[128 | 63 & a]) } return u }, isBuffer: function (t) { return !(!t || "object" != typeof t || !(t.constructor && t.constructor.isBuffer && t.constructor.isBuffer(t))) }, isRegExp: function (t) { return "[object RegExp]" === Object.prototype.toString.call(t) }, maybeMap: function (t, r) { if (p(t)) { for (var n = [], e = 0; e < t.length; e += 1)n.push(r(t[e])); return n } return r(t) }, merge: function t(r, n, e) { if (!n) return r; if ("object" != typeof n) { if (p(r)) r.push(n); else { if (!r || "object" != typeof r) return [r, n]; (e && (e.plainObjects || e.allowPrototypes) || !v.call(Object.prototype, n)) && (r[n] = !0) } return r } if (!r || "object" != typeof r) return [r].concat(n); var o = r; return p(r) && !p(n) && (o = d(r, e)), p(r) && p(n) ? (n.forEach(function (n, o) { if (v.call(r, o)) { var i = r[o]; i && "object" == typeof i && n && "object" == typeof n ? r[o] = t(i, n, e) : r.push(n) } else r[o] = n }), r) : Object.keys(n).reduce(function (r, o) { var i = n[o]; return r[o] = v.call(r, o) ? t(r[o], i, e) : i, r }, o) } }, h = Object.prototype.hasOwnProperty, g = { brackets: function (t) { return t + "[]" }, comma: "comma", indices: function (t, r) { return t + "[" + r + "]" }, repeat: function (t) { return t } }, m = Array.isArray, j = String.prototype.split, w = Array.prototype.push, O = function (t, r) { w.apply(t, m(r) ? r : [r]) }, E = Date.prototype.toISOString, R = s.default, S = { addQueryPrefix: !1, allowDots: !1, charset: "utf-8", charsetSentinel: !1, delimiter: "&", encode: !0, encoder: b.encode, encodeValuesOnly: !1, format: R, formatter: s.formatters[R], indices: !1, serializeDate: function (t) { return E.call(t) }, skipNulls: !1, strictNullHandling: !1 }, k = function t(r, n, e, o, i, u, f, a, c, l, s, v, p, y) { var d, h = r; if ("function" == typeof f ? h = f(n, h) : h instanceof Date ? h = l(h) : "comma" === e && m(h) && (h = b.maybeMap(h, function (t) { return t instanceof Date ? l(t) : t })), null === h) { if (o) return u && !p ? u(n, S.encoder, y, "key", s) : n; h = "" } if ("string" == typeof (d = h) || "number" == typeof d || "boolean" == typeof d || "symbol" == typeof d || "bigint" == typeof d || b.isBuffer(h)) { if (u) { var g = p ? n : u(n, S.encoder, y, "key", s); if ("comma" === e && p) { for (var w = j.call(String(h), ","), E = "", R = 0; R < w.length; ++R)E += (0 === R ? "" : ",") + v(u(w[R], S.encoder, y, "value", s)); return [v(g) + "=" + E] } return [v(g) + "=" + v(u(h, S.encoder, y, "value", s))] } return [v(n) + "=" + v(String(h))] } var k, T = []; if (void 0 === h) return T; if ("comma" === e && m(h)) k = [{ value: h.length > 0 ? h.join(",") || null : void 0 }]; else if (m(f)) k = f; else { var $ = Object.keys(h); k = a ? $.sort(a) : $ } for (var x = 0; x < k.length; ++x) { var N = k[x], C = "object" == typeof N && void 0 !== N.value ? N.value : h[N]; if (!i || null !== C) { var A = m(h) ? "function" == typeof e ? e(n, N) : n : n + (c ? "." + N : "[" + N + "]"); O(T, t(C, A, e, o, i, u, f, a, c, l, s, v, p, y)) } } return T }, T = Object.prototype.hasOwnProperty, $ = Array.isArray, x = { allowDots: !1, allowPrototypes: !1, arrayLimit: 20, charset: "utf-8", charsetSentinel: !1, comma: !1, decoder: b.decode, delimiter: "&", depth: 5, ignoreQueryPrefix: !1, interpretNumericEntities: !1, parameterLimit: 1e3, parseArrays: !0, plainObjects: !1, strictNullHandling: !1 }, N = function (t) { return t.replace(/&#(\d+);/g, function (t, r) { return String.fromCharCode(parseInt(r, 10)) }) }, C = function (t, r) { return t && "string" == typeof t && r.comma && t.indexOf(",") > -1 ? t.split(",") : t }, A = function (t, r, n, e) { if (t) { var o = n.allowDots ? t.replace(/\.([^.[]+)/g, "[$1]") : t, i = /(\[[^[\]]*])/g, u = n.depth > 0 && /(\[[^[\]]*])/.exec(o), f = u ? o.slice(0, u.index) : o, a = []; if (f) { if (!n.plainObjects && T.call(Object.prototype, f) && !n.allowPrototypes) return; a.push(f) } for (var c = 0; n.depth > 0 && null !== (u = i.exec(o)) && c < n.depth;) { if (c += 1, !n.plainObjects && T.call(Object.prototype, u[1].slice(1, -1)) && !n.allowPrototypes) return; a.push(u[1]) } return u && a.push("[" + o.slice(u.index) + "]"), function (t, r, n, e) { for (var o = e ? r : C(r, n), i = t.length - 1; i >= 0; --i) { var u, f = t[i]; if ("[]" === f && n.parseArrays) u = [].concat(o); else { u = n.plainObjects ? Object.create(null) : {}; var a = "[" === f.charAt(0) && "]" === f.charAt(f.length - 1) ? f.slice(1, -1) : f, c = parseInt(a, 10); n.parseArrays || "" !== a ? !isNaN(c) && f !== a && String(c) === a && c >= 0 && n.parseArrays && c <= n.arrayLimit ? (u = [])[c] = o : "__proto__" !== a && (u[a] = o) : u = { 0: o } } o = u } return o }(a, r, n, e) } }, D = function (t, r) { var n = function (t) { if (!t) return x; if (null != t.decoder && "function" != typeof t.decoder) throw new TypeError("Decoder has to be a function."); if (void 0 !== t.charset && "utf-8" !== t.charset && "iso-8859-1" !== t.charset) throw new TypeError("The charset option must be either utf-8, iso-8859-1, or undefined"); return { allowDots: void 0 === t.allowDots ? x.allowDots : !!t.allowDots, allowPrototypes: "boolean" == typeof t.allowPrototypes ? t.allowPrototypes : x.allowPrototypes, arrayLimit: "number" == typeof t.arrayLimit ? t.arrayLimit : x.arrayLimit, charset: void 0 === t.charset ? x.charset : t.charset, charsetSentinel: "boolean" == typeof t.charsetSentinel ? t.charsetSentinel : x.charsetSentinel, comma: "boolean" == typeof t.comma ? t.comma : x.comma, decoder: "function" == typeof t.decoder ? t.decoder : x.decoder, delimiter: "string" == typeof t.delimiter || b.isRegExp(t.delimiter) ? t.delimiter : x.delimiter, depth: "number" == typeof t.depth || !1 === t.depth ? +t.depth : x.depth, ignoreQueryPrefix: !0 === t.ignoreQueryPrefix, interpretNumericEntities: "boolean" == typeof t.interpretNumericEntities ? t.interpretNumericEntities : x.interpretNumericEntities, parameterLimit: "number" == typeof t.parameterLimit ? t.parameterLimit : x.parameterLimit, parseArrays: !1 !== t.parseArrays, plainObjects: "boolean" == typeof t.plainObjects ? t.plainObjects : x.plainObjects, strictNullHandling: "boolean" == typeof t.strictNullHandling ? t.strictNullHandling : x.strictNullHandling } }(r); if ("" === t || null == t) return n.plainObjects ? Object.create(null) : {}; for (var e = "string" == typeof t ? function (t, r) { var n, e = {}, o = (r.ignoreQueryPrefix ? t.replace(/^\?/, "") : t).split(r.delimiter, Infinity === r.parameterLimit ? void 0 : r.parameterLimit), i = -1, u = r.charset; if (r.charsetSentinel) for (n = 0; n < o.length; ++n)0 === o[n].indexOf("utf8=") && ("utf8=%E2%9C%93" === o[n] ? u = "utf-8" : "utf8=%26%2310003%3B" === o[n] && (u = "iso-8859-1"), i = n, n = o.length); for (n = 0; n < o.length; ++n)if (n !== i) { var f, a, c = o[n], l = c.indexOf("]="), s = -1 === l ? c.indexOf("=") : l + 1; -1 === s ? (f = r.decoder(c, x.decoder, u, "key"), a = r.strictNullHandling ? null : "") : (f = r.decoder(c.slice(0, s), x.decoder, u, "key"), a = b.maybeMap(C(c.slice(s + 1), r), function (t) { return r.decoder(t, x.decoder, u, "value") })), a && r.interpretNumericEntities && "iso-8859-1" === u && (a = N(a)), c.indexOf("[]=") > -1 && (a = $(a) ? [a] : a), e[f] = T.call(e, f) ? b.combine(e[f], a) : a } return e }(t, n) : t, o = n.plainObjects ? Object.create(null) : {}, i = Object.keys(e), u = 0; u < i.length; ++u) { var f = i[u], a = A(f, e[f], n, "string" == typeof t); o = b.merge(o, a, n) } return b.compact(o) }, P =/*#__PURE__*/function () { function t(t, r, n) { var e, o; this.name = t, this.definition = r, this.bindings = null != (e = r.bindings) ? e : {}, this.wheres = null != (o = r.wheres) ? o : {}, this.config = n } var n = t.prototype; return n.matchesUrl = function (t) { var r, n = this; if (!this.definition.methods.includes("GET")) return !1; var e = this.template.replace(/[.*+$()[\]]/g, "\\$&").replace(/(\/?){([^}?]*)(\??)}/g, function (t, r, e, o) { var i, u = "(?<" + e + ">" + ((null == (i = n.wheres[e]) ? void 0 : i.replace(/(^\^)|(\$$)/g, "")) || "[^/?]+") + ")"; return o ? "(" + r + u + ")?" : "" + r + u }).replace(/^\w+:\/\//, ""), o = t.replace(/^\w+:\/\//, "").split("?"), i = o[0], u = o[1], f = null != (r = new RegExp("^" + e + "/?$").exec(i)) ? r : new RegExp("^" + e + "/?$").exec(decodeURI(i)); if (f) { for (var a in f.groups) f.groups[a] = "string" == typeof f.groups[a] ? decodeURIComponent(f.groups[a]) : f.groups[a]; return { params: f.groups, query: D(u) } } return !1 }, n.compile = function (t) { var r = this; return this.parameterSegments.length ? this.template.replace(/{([^}?]+)(\??)}/g, function (n, e, o) { var i, u; if (!o && [null, void 0].includes(t[e])) throw new Error("Ziggy error: '" + e + "' parameter is required for route '" + r.name + "'."); if (r.wheres[e] && !new RegExp("^" + (o ? "(" + r.wheres[e] + ")?" : r.wheres[e]) + "$").test(null != (u = t[e]) ? u : "")) throw new Error("Ziggy error: '" + e + "' parameter '" + t[e] + "' does not match required format '" + r.wheres[e] + "' for route '" + r.name + "'."); return encodeURI(null != (i = t[e]) ? i : "").replace(/%7C/g, "|").replace(/%25/g, "%").replace(/\$/g, "%24") }).replace(this.config.absolute ? /(\.[^/]+?)(\/\/)/ : /(^)(\/\/)/, "$1/").replace(/\/+$/, "") : this.template }, r(t, [{ key: "template", get: function () { var t = (this.origin + "/" + this.definition.uri).replace(/\/+$/, ""); return "" === t ? "/" : t } }, { key: "origin", get: function () { return this.config.absolute ? this.definition.domain ? "" + this.config.url.match(/^\w+:\/\//)[0] + this.definition.domain + (this.config.port ? ":" + this.config.port : "") : this.config.url : "" } }, { key: "parameterSegments", get: function () { var t, r; return null != (t = null == (r = this.template.match(/{[^}?]+\??}/g)) ? void 0 : r.map(function (t) { return { name: t.replace(/{|\??}/g, ""), required: !/\?}$/.test(t) } })) ? t : [] } }]) }(), F =/*#__PURE__*/function (t) { function e(r, e, o, i) { var u; if (void 0 === o && (o = !0), (u = t.call(this) || this).t = null != i ? i : "undefined" != typeof Ziggy ? Ziggy : null == globalThis ? void 0 : globalThis.Ziggy, u.t = n({}, u.t, { absolute: o }), r) { if (!u.t.routes[r]) throw new Error("Ziggy error: route '" + r + "' is not in the route list."); u.i = new P(r, u.t.routes[r], u.t), u.u = u.l(e) } return u } var o, u; u = t, (o = e).prototype = Object.create(u.prototype), o.prototype.constructor = o, i(o, u); var f = e.prototype; return f.toString = function () { var t = this, r = Object.keys(this.u).filter(function (r) { return !t.i.parameterSegments.some(function (t) { return t.name === r }) }).filter(function (t) { return "_query" !== t }).reduce(function (r, e) { var o; return n({}, r, ((o = {})[e] = t.u[e], o)) }, {}); return this.i.compile(this.u) + function (t, r) { var n, e = t, o = function (t) { if (!t) return S; if (null != t.encoder && "function" != typeof t.encoder) throw new TypeError("Encoder has to be a function."); var r = t.charset || S.charset; if (void 0 !== t.charset && "utf-8" !== t.charset && "iso-8859-1" !== t.charset) throw new TypeError("The charset option must be either utf-8, iso-8859-1, or undefined"); var n = s.default; if (void 0 !== t.format) { if (!h.call(s.formatters, t.format)) throw new TypeError("Unknown format option provided."); n = t.format } var e = s.formatters[n], o = S.filter; return ("function" == typeof t.filter || m(t.filter)) && (o = t.filter), { addQueryPrefix: "boolean" == typeof t.addQueryPrefix ? t.addQueryPrefix : S.addQueryPrefix, allowDots: void 0 === t.allowDots ? S.allowDots : !!t.allowDots, charset: r, charsetSentinel: "boolean" == typeof t.charsetSentinel ? t.charsetSentinel : S.charsetSentinel, delimiter: void 0 === t.delimiter ? S.delimiter : t.delimiter, encode: "boolean" == typeof t.encode ? t.encode : S.encode, encoder: "function" == typeof t.encoder ? t.encoder : S.encoder, encodeValuesOnly: "boolean" == typeof t.encodeValuesOnly ? t.encodeValuesOnly : S.encodeValuesOnly, filter: o, format: n, formatter: e, serializeDate: "function" == typeof t.serializeDate ? t.serializeDate : S.serializeDate, skipNulls: "boolean" == typeof t.skipNulls ? t.skipNulls : S.skipNulls, sort: "function" == typeof t.sort ? t.sort : null, strictNullHandling: "boolean" == typeof t.strictNullHandling ? t.strictNullHandling : S.strictNullHandling } }(r); "function" == typeof o.filter ? e = (0, o.filter)("", e) : m(o.filter) && (n = o.filter); var i = []; if ("object" != typeof e || null === e) return ""; var u = g[r && r.arrayFormat in g ? r.arrayFormat : r && "indices" in r ? r.indices ? "indices" : "repeat" : "indices"]; n || (n = Object.keys(e)), o.sort && n.sort(o.sort); for (var f = 0; f < n.length; ++f) { var a = n[f]; o.skipNulls && null === e[a] || O(i, k(e[a], a, u, o.strictNullHandling, o.skipNulls, o.encode ? o.encoder : null, o.filter, o.sort, o.allowDots, o.serializeDate, o.format, o.formatter, o.encodeValuesOnly, o.charset)) } var c = i.join(o.delimiter), l = !0 === o.addQueryPrefix ? "?" : ""; return o.charsetSentinel && (l += "iso-8859-1" === o.charset ? "utf8=%26%2310003%3B&" : "utf8=%E2%9C%93&"), c.length > 0 ? l + c : "" }(n({}, r, this.u._query), { addQueryPrefix: !0, arrayFormat: "indices", encodeValuesOnly: !0, skipNulls: !0, encoder: function (t, r) { return "boolean" == typeof t ? Number(t) : r(t) } }) }, f.v = function (t) { var r = this; t ? this.t.absolute && t.startsWith("/") && (t = this.p().host + t) : t = this.h(); var e = {}, o = Object.entries(this.t.routes).find(function (n) { return e = new P(n[0], n[1], r.t).matchesUrl(t) }) || [void 0, void 0]; return n({ name: o[0] }, e, { route: o[1] }) }, f.h = function () { var t = this.p(), r = t.pathname, n = t.search; return (this.t.absolute ? t.host + r : r.replace(this.t.url.replace(/^\w*:\/\/[^/]+/, ""), "").replace(/^\/+/, "/")) + n }, f.current = function (t, r) { var e = this.v(), o = e.name, i = e.params, u = e.query, f = e.route; if (!t) return o; var a = new RegExp("^" + t.replace(/\./g, "\\.").replace(/\*/g, ".*") + "$").test(o); if ([null, void 0].includes(r) || !a) return a; var c = new P(o, f, this.t); r = this.l(r, c); var l = n({}, i, u); if (Object.values(r).every(function (t) { return !t }) && !Object.values(l).some(function (t) { return void 0 !== t })) return !0; var s = function (t, r) { return Object.entries(t).every(function (t) { var n = t[0], e = t[1]; return Array.isArray(e) && Array.isArray(r[n]) ? e.every(function (t) { return r[n].includes(t) }) : "object" == typeof e && "object" == typeof r[n] && null !== e && null !== r[n] ? s(e, r[n]) : r[n] == e }) }; return s(r, l) }, f.p = function () { var t, r, n, e, o, i, u = "undefined" != typeof window ? window.location : {}, f = u.host, a = u.pathname, c = u.search; return { host: null != (t = null == (r = this.t.location) ? void 0 : r.host) ? t : void 0 === f ? "" : f, pathname: null != (n = null == (e = this.t.location) ? void 0 : e.pathname) ? n : void 0 === a ? "" : a, search: null != (o = null == (i = this.t.location) ? void 0 : i.search) ? o : void 0 === c ? "" : c } }, f.has = function (t) { return this.t.routes.hasOwnProperty(t) }, f.l = function (t, r) { var e = this; void 0 === t && (t = {}), void 0 === r && (r = this.i), null != t || (t = {}), t = ["string", "number"].includes(typeof t) ? [t] : t; var o = r.parameterSegments.filter(function (t) { return !e.t.defaults[t.name] }); if (Array.isArray(t)) t = t.reduce(function (t, r, e) { var i, u; return n({}, t, o[e] ? ((i = {})[o[e].name] = r, i) : "object" == typeof r ? r : ((u = {})[r] = "", u)) }, {}); else if (1 === o.length && !t[o[0].name] && (t.hasOwnProperty(Object.values(r.bindings)[0]) || t.hasOwnProperty("id"))) { var i; (i = {})[o[0].name] = t, t = i } return n({}, this.m(r), this.j(t, r)) }, f.m = function (t) { var r = this; return t.parameterSegments.filter(function (t) { return r.t.defaults[t.name] }).reduce(function (t, e, o) { var i, u = e.name; return n({}, t, ((i = {})[u] = r.t.defaults[u], i)) }, {}) }, f.j = function (t, r) { var e = r.bindings, o = r.parameterSegments; return Object.entries(t).reduce(function (t, r) { var i, u, f = r[0], a = r[1]; if (!a || "object" != typeof a || Array.isArray(a) || !o.some(function (t) { return t.name === f })) return n({}, t, ((u = {})[f] = a, u)); if (!a.hasOwnProperty(e[f])) { if (!a.hasOwnProperty("id")) throw new Error("Ziggy error: object passed as '" + f + "' parameter is missing route model binding key '" + e[f] + "'."); e[f] = "id" } return n({}, t, ((i = {})[f] = a[e[f]], i)) }, {}) }, f.valueOf = function () { return this.toString() }, r(e, [{ key: "params", get: function () { var t = this.v(); return n({}, t.params, t.query) } }, { key: "routeParams", get: function () { return this.v().params } }, { key: "queryParams", get: function () { return this.v().query } }]) }(/*#__PURE__*/f(String)); return function (t, r, n, e) { var o = new F(t, r, n, e); return t ? o.toString() : o } });
    </script>
    <link rel="preload" as="style" href="Analytics%20Dashboard%20-%20Laravel_files/app-CfrQxCWD.css">
    <link rel="modulepreload" href="Analytics%20Dashboard%20-%20Laravel_files/app-QwaFHLCQ.js">
    <link rel="modulepreload" href="Analytics%20Dashboard%20-%20Laravel_files/Dashboard-xkrfBVrc.js">
    <link rel="modulepreload" href="https://catetdulu.com/build/assets/mobile-layout-p_Y_T0j3.js">
    <link rel="modulepreload" href="https://catetdulu.com/build/assets/button-WolaLoDc.js">
    <link rel="modulepreload" href="https://catetdulu.com/build/assets/tooltip-yNWeBVgQ.js">
    <link rel="modulepreload" href="https://catetdulu.com/build/assets/useChatContext--kJczcFb.js">
    <link rel="modulepreload" href="https://catetdulu.com/build/assets/formatters-DcL7HF95.js">
    <link rel="modulepreload" href="https://catetdulu.com/build/assets/label-DgVIGjOC.js">
    <link rel="modulepreload" href="https://catetdulu.com/build/assets/index-CJ-0cBIm.js">
    <link rel="modulepreload" href="https://catetdulu.com/build/assets/index-D2NVJDVv.js">
    <link rel="stylesheet" href="Analytics%20Dashboard%20-%20Laravel_files/app-CfrQxCWD.css">
    <script type="module" src="Analytics%20Dashboard%20-%20Laravel_files/app-QwaFHLCQ.js"></script>
    <script type="module" src="Analytics%20Dashboard%20-%20Laravel_files/Dashboard-xkrfBVrc.js"></script>
    <link rel="modulepreload" as="script" crossorigin=""
        href="Analytics%20Dashboard%20-%20Laravel_files/Dashboard-xkrfBVrc.js">
    <link rel="modulepreload" as="script" crossorigin=""
        href="https://catetdulu.com/build/assets/mobile-layout-p_Y_T0j3.js">
    <link rel="modulepreload" as="script" crossorigin=""
        href="https://catetdulu.com/build/assets/useChatContext--kJczcFb.js">
    <link rel="modulepreload" as="script" crossorigin="" href="https://catetdulu.com/build/assets/button-WolaLoDc.js">
    <link rel="modulepreload" as="script" crossorigin="" href="https://catetdulu.com/build/assets/index-CJ-0cBIm.js">
    <link rel="modulepreload" as="script" crossorigin="" href="https://catetdulu.com/build/assets/label-DgVIGjOC.js">
    <link rel="modulepreload" as="script" crossorigin="" href="https://catetdulu.com/build/assets/tooltip-yNWeBVgQ.js">
    <link rel="modulepreload" as="script" crossorigin="" href="https://catetdulu.com/build/assets/index-D2NVJDVv.js">
    <link rel="modulepreload" as="script" crossorigin=""
        href="https://catetdulu.com/build/assets/formatters-DcL7HF95.js">
    <link rel="stylesheet" crossorigin="" href="Analytics%20Dashboard%20-%20Laravel_files/app-CfrQxCWD.css">
    <style type="text/css">
        [data-vaul-drawer] {
            touch-action: none;
            will-change: transform;
            transition: transform .5s cubic-bezier(.32, .72, 0, 1);
            animation-duration: .5s;
            animation-timing-function: cubic-bezier(0.32, 0.72, 0, 1)
        }

        [data-vaul-drawer][data-vaul-snap-points=false][data-vaul-drawer-direction=bottom][data-state=open] {
            animation-name: slideFromBottom
        }

        [data-vaul-drawer][data-vaul-snap-points=false][data-vaul-drawer-direction=bottom][data-state=closed] {
            animation-name: slideToBottom
        }

        [data-vaul-drawer][data-vaul-snap-points=false][data-vaul-drawer-direction=top][data-state=open] {
            animation-name: slideFromTop
        }

        [data-vaul-drawer][data-vaul-snap-points=false][data-vaul-drawer-direction=top][data-state=closed] {
            animation-name: slideToTop
        }

        [data-vaul-drawer][data-vaul-snap-points=false][data-vaul-drawer-direction=left][data-state=open] {
            animation-name: slideFromLeft
        }

        [data-vaul-drawer][data-vaul-snap-points=false][data-vaul-drawer-direction=left][data-state=closed] {
            animation-name: slideToLeft
        }

        [data-vaul-drawer][data-vaul-snap-points=false][data-vaul-drawer-direction=right][data-state=open] {
            animation-name: slideFromRight
        }

        [data-vaul-drawer][data-vaul-snap-points=false][data-vaul-drawer-direction=right][data-state=closed] {
            animation-name: slideToRight
        }

        [data-vaul-drawer][data-vaul-snap-points=true][data-vaul-drawer-direction=bottom] {
            transform: translate3d(0, var(--initial-transform, 100%), 0)
        }

        [data-vaul-drawer][data-vaul-snap-points=true][data-vaul-drawer-direction=top] {
            transform: translate3d(0, calc(var(--initial-transform, 100%) * -1), 0)
        }

        [data-vaul-drawer][data-vaul-snap-points=true][data-vaul-drawer-direction=left] {
            transform: translate3d(calc(var(--initial-transform, 100%) * -1), 0, 0)
        }

        [data-vaul-drawer][data-vaul-snap-points=true][data-vaul-drawer-direction=right] {
            transform: translate3d(var(--initial-transform, 100%), 0, 0)
        }

        [data-vaul-drawer][data-vaul-delayed-snap-points=true][data-vaul-drawer-direction=top] {
            transform: translate3d(0, var(--snap-point-height, 0), 0)
        }

        [data-vaul-drawer][data-vaul-delayed-snap-points=true][data-vaul-drawer-direction=bottom] {
            transform: translate3d(0, var(--snap-point-height, 0), 0)
        }

        [data-vaul-drawer][data-vaul-delayed-snap-points=true][data-vaul-drawer-direction=left] {
            transform: translate3d(var(--snap-point-height, 0), 0, 0)
        }

        [data-vaul-drawer][data-vaul-delayed-snap-points=true][data-vaul-drawer-direction=right] {
            transform: translate3d(var(--snap-point-height, 0), 0, 0)
        }

        [data-vaul-overlay][data-vaul-snap-points=false] {
            animation-duration: .5s;
            animation-timing-function: cubic-bezier(0.32, 0.72, 0, 1)
        }

        [data-vaul-overlay][data-vaul-snap-points=false][data-state=open] {
            animation-name: fadeIn
        }

        [data-vaul-overlay][data-state=closed] {
            animation-name: fadeOut
        }

        [data-vaul-animate=false] {
            animation: none !important
        }

        [data-vaul-overlay][data-vaul-snap-points=true] {
            opacity: 0;
            transition: opacity .5s cubic-bezier(.32, .72, 0, 1)
        }

        [data-vaul-overlay][data-vaul-snap-points=true] {
            opacity: 1
        }

        [data-vaul-drawer]:not([data-vaul-custom-container=true])::after {
            content: '';
            position: absolute;
            background: inherit;
            background-color: inherit
        }

        [data-vaul-drawer][data-vaul-drawer-direction=top]::after {
            top: initial;
            bottom: 100%;
            left: 0;
            right: 0;
            height: 200%
        }

        [data-vaul-drawer][data-vaul-drawer-direction=bottom]::after {
            top: 100%;
            bottom: initial;
            left: 0;
            right: 0;
            height: 200%
        }

        [data-vaul-drawer][data-vaul-drawer-direction=left]::after {
            left: initial;
            right: 100%;
            top: 0;
            bottom: 0;
            width: 200%
        }

        [data-vaul-drawer][data-vaul-drawer-direction=right]::after {
            left: 100%;
            right: initial;
            top: 0;
            bottom: 0;
            width: 200%
        }

        [data-vaul-overlay][data-vaul-snap-points=true]:not([data-vaul-snap-points-overlay=true]):not([data-state=closed]) {
            opacity: 0
        }

        [data-vaul-overlay][data-vaul-snap-points-overlay=true] {
            opacity: 1
        }

        [data-vaul-handle] {
            display: block;
            position: relative;
            opacity: .7;
            background: #e2e2e4;
            margin-left: auto;
            margin-right: auto;
            height: 5px;
            width: 32px;
            border-radius: 1rem;
            touch-action: pan-y
        }

        [data-vaul-handle]:active,
        [data-vaul-handle]:hover {
            opacity: 1
        }

        [data-vaul-handle-hitarea] {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            width: max(100%, 2.75rem);
            height: max(100%, 2.75rem);
            touch-action: inherit
        }

        @media (hover:hover) and (pointer:fine) {
            [data-vaul-drawer] {
                user-select: none
            }
        }

        @media (pointer:fine) {
            [data-vaul-handle-hitarea]: {
                width: 100%;
                height: 100%
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @keyframes fadeOut {
            to {
                opacity: 0
            }
        }

        @keyframes slideFromBottom {
            from {
                transform: translate3d(0, var(--initial-transform, 100%), 0)
            }

            to {
                transform: translate3d(0, 0, 0)
            }
        }

        @keyframes slideToBottom {
            to {
                transform: translate3d(0, var(--initial-transform, 100%), 0)
            }
        }

        @keyframes slideFromTop {
            from {
                transform: translate3d(0, calc(var(--initial-transform, 100%) * -1), 0)
            }

            to {
                transform: translate3d(0, 0, 0)
            }
        }

        @keyframes slideToTop {
            to {
                transform: translate3d(0, calc(var(--initial-transform, 100%) * -1), 0)
            }
        }

        @keyframes slideFromLeft {
            from {
                transform: translate3d(calc(var(--initial-transform, 100%) * -1), 0, 0)
            }

            to {
                transform: translate3d(0, 0, 0)
            }
        }

        @keyframes slideToLeft {
            to {
                transform: translate3d(calc(var(--initial-transform, 100%) * -1), 0, 0)
            }
        }

        @keyframes slideFromRight {
            from {
                transform: translate3d(var(--initial-transform, 100%), 0, 0)
            }

            to {
                transform: translate3d(0, 0, 0)
            }
        }

        @keyframes slideToRight {
            to {
                transform: translate3d(var(--initial-transform, 100%), 0, 0)
            }
        }
    </style>
    <style>
        #nprogress {
            pointer-events: none;
        }

        #nprogress .bar {
            background: #4B5563;

            position: fixed;
            z-index: 1031;
            top: 0;
            left: 0;

            width: 100%;
            height: 2px;
        }

        #nprogress .peg {
            display: block;
            position: absolute;
            right: 0px;
            width: 100px;
            height: 100%;
            box-shadow: 0 0 10px #4B5563, 0 0 5px #4B5563;
            opacity: 1.0;

            transform: rotate(3deg) translate(0px, -4px);
        }

        #nprogress .spinner {
            display: block;
            position: fixed;
            z-index: 1031;
            top: 15px;
            right: 15px;
        }

        #nprogress .spinner-icon {
            width: 18px;
            height: 18px;
            box-sizing: border-box;

            border: solid 2px transparent;
            border-top-color: #4B5563;
            border-left-color: #4B5563;
            border-radius: 50%;

            animation: nprogress-spinner 400ms linear infinite;
        }

        .nprogress-custom-parent {
            overflow: hidden;
            position: relative;
        }

        .nprogress-custom-parent #nprogress .spinner,
        .nprogress-custom-parent #nprogress .bar {
            position: absolute;
        }

        @keyframes nprogress-spinner {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
</head>

<body class="font-sans antialiased">
    <div id="app"
        data-page="{&quot;component&quot;:&quot;Dashboard&quot;,&quot;props&quot;:{&quot;errors&quot;:{},&quot;name&quot;:&quot;CatetDulu&quot;,&quot;quote&quot;:{&quot;message&quot;:&quot;Well begun is half done.&quot;,&quot;author&quot;:&quot;Aristotle&quot;},&quot;auth&quot;:{&quot;user&quot;:{&quot;id&quot;:10,&quot;name&quot;:&quot;noya&quot;,&quot;email&quot;:&quot;holutyudawan@gmail.com&quot;,&quot;email_verified_at&quot;:null,&quot;created_at&quot;:&quot;2025-08-27T05:19:41.000000Z&quot;,&quot;updated_at&quot;:&quot;2025-08-27T05:19:41.000000Z&quot;}},&quot;stats&quot;:{&quot;overall_income&quot;:1000000,&quot;overall_outcome&quot;:77000,&quot;overall_balance&quot;:923000,&quot;sgdToIdrRate&quot;:12916.934525,&quot;showCurrencyTabs&quot;:true,&quot;dailyIncomeAverage&quot;:0,&quot;dailyOutcomeAverage&quot;:0,&quot;totalRevenue&quot;:0,&quot;totalOutcome&quot;:0,&quot;balance&quot;:0,&quot;revenueChange&quot;:0,&quot;outcomeChange&quot;:-100,&quot;balanceChange&quot;:100,&quot;currentPeriod&quot;:&quot;October 2025&quot;,&quot;previousPeriod&quot;:&quot;September 2025&quot;,&quot;previousPeriodRevenue&quot;:0,&quot;previousPeriodOutcome&quot;:62000,&quot;previousPeriodBalance&quot;:-62000},&quot;chartData&quot;:{&quot;monthly&quot;:[{&quot;name&quot;:&quot;Jan&quot;,&quot;income&quot;:0,&quot;outcome&quot;:0},{&quot;name&quot;:&quot;Feb&quot;,&quot;income&quot;:0,&quot;outcome&quot;:0},{&quot;name&quot;:&quot;Mar&quot;,&quot;income&quot;:0,&quot;outcome&quot;:0},{&quot;name&quot;:&quot;Apr&quot;,&quot;income&quot;:0,&quot;outcome&quot;:0},{&quot;name&quot;:&quot;May&quot;,&quot;income&quot;:0,&quot;outcome&quot;:0},{&quot;name&quot;:&quot;Jun&quot;,&quot;income&quot;:0,&quot;outcome&quot;:0},{&quot;name&quot;:&quot;Jul&quot;,&quot;income&quot;:0,&quot;outcome&quot;:0},{&quot;name&quot;:&quot;Aug&quot;,&quot;income&quot;:1000000,&quot;outcome&quot;:15000},{&quot;name&quot;:&quot;Sep&quot;,&quot;income&quot;:0,&quot;outcome&quot;:62000},{&quot;name&quot;:&quot;Oct&quot;,&quot;income&quot;:0,&quot;outcome&quot;:0},{&quot;name&quot;:&quot;Nov&quot;,&quot;income&quot;:0,&quot;outcome&quot;:0},{&quot;name&quot;:&quot;Dec&quot;,&quot;income&quot;:0,&quot;outcome&quot;:0}],&quot;yearly&quot;:[{&quot;name&quot;:&quot;2021&quot;,&quot;income&quot;:0,&quot;outcome&quot;:0},{&quot;name&quot;:&quot;2022&quot;,&quot;income&quot;:0,&quot;outcome&quot;:0},{&quot;name&quot;:&quot;2023&quot;,&quot;income&quot;:0,&quot;outcome&quot;:0},{&quot;name&quot;:&quot;2024&quot;,&quot;income&quot;:0,&quot;outcome&quot;:0},{&quot;name&quot;:&quot;2025&quot;,&quot;income&quot;:1000000,&quot;outcome&quot;:77000}]},&quot;currencyBreakdown&quot;:{&quot;IDR&quot;:{&quot;income&quot;:0,&quot;outcome&quot;:0,&quot;balance&quot;:0},&quot;SGD&quot;:{&quot;income&quot;:0,&quot;outcome&quot;:0,&quot;balance&quot;:0}},&quot;recentTransactions&quot;:[{&quot;id&quot;:5103,&quot;description&quot;:&quot;geprek&quot;,&quot;amount&quot;:12000,&quot;type&quot;:&quot;outcome&quot;,&quot;date&quot;:&quot;2025-09-03 00:00:00&quot;,&quot;transaction_date&quot;:&quot;2025-09-03 00:00:00&quot;,&quot;currency&quot;:&quot;IDR&quot;,&quot;category&quot;:&quot;Makanan&quot;,&quot;category_icon&quot;:&quot;UtensilsIcon&quot;,&quot;categorization_status&quot;:&quot;completed&quot;,&quot;created_at&quot;:null},{&quot;id&quot;:5102,&quot;description&quot;:&quot;makan&quot;,&quot;amount&quot;:50000,&quot;type&quot;:&quot;outcome&quot;,&quot;date&quot;:&quot;2025-09-03 00:00:00&quot;,&quot;transaction_date&quot;:&quot;2025-09-03 00:00:00&quot;,&quot;currency&quot;:&quot;IDR&quot;,&quot;category&quot;:&quot;Makanan&quot;,&quot;category_icon&quot;:&quot;UtensilsIcon&quot;,&quot;categorization_status&quot;:&quot;completed&quot;,&quot;created_at&quot;:null},{&quot;id&quot;:5040,&quot;description&quot;:&quot;gaji&quot;,&quot;amount&quot;:985000,&quot;type&quot;:&quot;income&quot;,&quot;date&quot;:&quot;2025-08-27 00:00:00&quot;,&quot;transaction_date&quot;:&quot;2025-08-27 00:00:00&quot;,&quot;currency&quot;:&quot;IDR&quot;,&quot;category&quot;:&quot;Pendapatan&quot;,&quot;category_icon&quot;:&quot;DollarSignIcon&quot;,&quot;categorization_status&quot;:&quot;completed&quot;,&quot;created_at&quot;:null},{&quot;id&quot;:5039,&quot;description&quot;:&quot;tambal ban&quot;,&quot;amount&quot;:15000,&quot;type&quot;:&quot;outcome&quot;,&quot;date&quot;:&quot;2025-08-27 00:00:00&quot;,&quot;transaction_date&quot;:&quot;2025-08-27 00:00:00&quot;,&quot;currency&quot;:&quot;IDR&quot;,&quot;category&quot;:&quot;Transportasi&quot;,&quot;category_icon&quot;:&quot;CarIcon&quot;,&quot;categorization_status&quot;:&quot;completed&quot;,&quot;created_at&quot;:null},{&quot;id&quot;:5038,&quot;description&quot;:&quot;tambal ban&quot;,&quot;amount&quot;:15000,&quot;type&quot;:&quot;income&quot;,&quot;date&quot;:&quot;2025-08-27 00:00:00&quot;,&quot;transaction_date&quot;:&quot;2025-08-27 00:00:00&quot;,&quot;currency&quot;:&quot;IDR&quot;,&quot;category&quot;:&quot;Transportasi&quot;,&quot;category_icon&quot;:&quot;CarIcon&quot;,&quot;categorization_status&quot;:&quot;completed&quot;,&quot;created_at&quot;:null}],&quot;filters&quot;:{&quot;year&quot;:2025,&quot;month&quot;:10,&quot;mode&quot;:&quot;month&quot;,&quot;currency&quot;:&quot;IDR&quot;}},&quot;url&quot;:&quot;\/dashboard&quot;,&quot;version&quot;:&quot;52be98a4e50d82540c949e1144368ef3&quot;,&quot;clearHistory&quot;:false,&quot;encryptHistory&quot;:false}">
        <div class="min-h-screen bg-gray-100">
            <div class="max-w-[480px] mx-auto bg-white min-h-screen pb-24 relative overflow-x-hidden">
                <div class="relative">
                    <div
                        class="bg-gradient-to-r from-green-500 to-green-600 text-white px-3 sm:px-4 py-4 sm:py-6 rounded-b-3xl">
                        <div class="flex items-center justify-between mb-4 sm:mb-6">
                            <div class="flex items-center space-x-3"><a
                                    class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center p-2 hover:bg-white/30 transition-colors"
                                    href="https://catetdulu.com/dashboard"><img alt="Catet Dulu Logo"
                                        class="w-full h-full object-contain"
                                        src="Analytics%20Dashboard%20-%20Laravel_files/logo-icon.svg"></a>
                                <div>
                                    <h1 class="text-lg sm:text-xl font-bold">Catet Dulu</h1>
                                    <p class="text-xs sm:text-sm text-green-100">Analisis keuangan October 2025</p>
                                </div>
                            </div>
                            <div class="flex space-x-2"><button data-slot="drawer-trigger"
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium transition-[color,box-shadow] disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 aria-invalid:border-destructive hover:text-accent-foreground has-[&gt;svg]:px-3 text-white hover:bg-white/20 rounded-xl px-3 py-2 h-auto"
                                    type="button" aria-haspopup="dialog" aria-expanded="false"
                                    aria-controls="radix-:r0:" data-state="closed"><span
                                        class="text-sm font-medium">IDR</span><svg xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-chevron-down ml-1">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg></button></div>
                        </div>
                        <div class="flex items-center justify-between mb-4 sm:mb-6">
                            <div class="flex items-center space-x-2">
                                <div class="flex bg-white/20 rounded-xl p-0.5"><button
                                        class="px-1.5 py-1 rounded-lg text-xs font-medium transition-all bg-white text-green-600">Bulan</button><button
                                        class="px-1.5 py-1 rounded-lg text-xs font-medium transition-all text-white hover:bg-white/20">Tahun</button><button
                                        class="px-1 py-1 rounded-lg text-[10px] sm:text-xs font-medium transition-all text-white hover:bg-white/20">All
                                        Time</button></div>
                            </div>
                            <div class="flex items-center space-x-1"><button data-slot="drawer-trigger"
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium transition-[color,box-shadow] disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 aria-invalid:border-destructive hover:text-accent-foreground has-[&gt;svg]:px-3 text-white hover:bg-white/20 rounded-xl px-3 py-2 h-auto"
                                    type="button" aria-haspopup="dialog" aria-expanded="false"
                                    aria-controls="radix-:r3:" data-state="closed"><span
                                        class="text-sm font-medium">2025</span><svg xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-chevron-down ml-1">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg></button><button data-slot="drawer-trigger"
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium transition-[color,box-shadow] disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 aria-invalid:border-destructive hover:text-accent-foreground has-[&gt;svg]:px-3 text-white hover:bg-white/20 rounded-xl px-3 py-2 h-auto"
                                    type="button" aria-haspopup="dialog" aria-expanded="false"
                                    aria-controls="radix-:r6:" data-state="closed"><span
                                        class="text-sm font-medium">Oktober</span><svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-chevron-down ml-1">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg></button></div>
                        </div>
                        <div class="bg-white/15 backdrop-blur-sm rounded-3xl p-3 sm:p-5">
                            <div class="flex items-center justify-between mb-3"><span
                                    class="text-sm font-medium text-white">Saldo Total</span><button data-slot="button"
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium transition-[color,box-shadow] disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 aria-invalid:border-destructive size-9 text-white hover:text-white hover:bg-white/10 rounded-full h-7 w-7"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-eye">
                                        <path
                                            d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0">
                                        </path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg></button></div>
                            <div class="mb-4 space-y-3">
                                <div class="flex justify-between items-center">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center">
                                            <span class="text-xs font-bold text-white">IDR</span>
                                        </div><span class="text-sm text-white/90">IDR</span>
                                    </div>
                                    <div class="text-right"><span class="text-sm sm:text-lg font-semibold text-white">Rp
                                            0</span></div>
                                </div>
                                <div class="flex justify-between items-center">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center">
                                            <span class="text-xs font-bold text-white">SGD</span>
                                        </div><span class="text-sm text-white/90">SGD</span>
                                    </div>
                                    <div class="text-right"><span
                                            class="text-sm sm:text-lg font-semibold text-white">S$0</span>
                                        <p class="text-xs font-medium text-white/75">≈ Rp 0</p>
                                    </div>
                                </div>
                                <div class="border-t border-white/20 pt-3 flex justify-between items-center"><span
                                        class="text-sm font-medium text-white/90">Total (IDR)</span><span
                                        class="text-base sm:text-xl font-bold text-white">Rp 0</span></div>
                                <div class="pt-2 flex items-center justify-center space-x-1"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-trending-up text-green-200">
                                        <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                                        <polyline points="16 7 22 7 22 13"></polyline>
                                    </svg><span class="text-xs sm:text-sm font-medium text-white/85">+100.0% dari
                                        September 2025</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="py-6 -mt-4">
                        <div class="bg-white overflow-hidden">
                            <div class="px-3 sm:px-4 py-3 sm:py-4 pb-2 sm:pb-3">
                                <div class="flex items-center justify-between mb-1">
                                    <h3 class="text-sm sm:text-base font-bold text-gray-800">Analisis Keuangan</h3>
                                </div>
                                <p class="text-xs text-gray-500 mb-3 sm:mb-4">Metrik keuangan detail untuk October 2025
                                </p>
                            </div>
                            <div class="space-y-0.5">
                                <div class="px-3 sm:px-4 py-2.5 sm:py-3 hover:bg-gray-50 transition-colors">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center space-x-2.5">
                                            <div
                                                class="w-8 h-8 rounded-full bg-emerald-100 flex items-center justify-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-piggy-bank text-emerald-600">
                                                    <path
                                                        d="M19 5c-1.5 0-2.8 1.4-3 2-3.5-1.5-11-.3-11 5 0 1.8 0 3 2 4.5V20h4v-2h3v2h4v-4c1-.5 1.7-1 2-2h2v-4h-2c0-1-.5-1.5-1-2V5z">
                                                    </path>
                                                    <path d="M2 9v1c0 1.1.9 2 2 2h1"></path>
                                                    <path d="M16 11h.01"></path>
                                                </svg>
                                            </div>
                                            <div class="min-w-0 flex-1">
                                                <p class="font-medium text-gray-900 text-xs sm:text-sm">Target Tabungan
                                                    Minimum</p>
                                                <p class="text-xs text-gray-500">Target minimal 30% dari pendapatan</p>
                                            </div>
                                        </div>
                                        <div class="text-right ml-2">
                                            <p class="font-semibold text-sm text-red-600">0%</p>
                                            <p class="text-xs text-red-600"><span
                                                    class="px-1.5 py-0.5 rounded text-xs font-medium bg-red-100 text-red-600">⚠
                                                    Kurang dari target</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-3 sm:px-4 py-2.5 sm:py-3 hover:bg-gray-50 transition-colors">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center space-x-2.5">
                                            <div
                                                class="w-8 h-8 rounded-full bg-orange-100 flex items-center justify-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-trending-down text-orange-600">
                                                    <polyline points="22 17 13.5 8.5 8.5 13.5 2 7"></polyline>
                                                    <polyline points="16 17 22 17 22 11"></polyline>
                                                </svg>
                                            </div>
                                            <div class="min-w-0 flex-1">
                                                <p class="font-medium text-gray-900 text-xs sm:text-sm">Batas Maksimal
                                                    Pengeluaran</p>
                                                <p class="text-xs text-gray-500">Maksimal 70% dari pendapatan</p>
                                            </div>
                                        </div>
                                        <div class="text-right ml-2">
                                            <p class="font-semibold text-sm text-emerald-600">0%</p>
                                            <p class="text-xs text-emerald-600"><span
                                                    class="px-1.5 py-0.5 rounded text-xs font-medium bg-emerald-100 text-emerald-600">✓
                                                    Dalam batas</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-3 sm:px-4 py-2.5 sm:py-3 hover:bg-gray-50 transition-colors">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center space-x-2.5">
                                            <div
                                                class="w-8 h-8 rounded-full bg-emerald-100 flex items-center justify-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-trending-up text-emerald-600">
                                                    <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                                                    <polyline points="16 7 22 7 22 13"></polyline>
                                                </svg>
                                            </div>
                                            <div class="min-w-0 flex-1">
                                                <p class="font-medium text-gray-900 text-xs sm:text-sm">Rata-rata
                                                    Pemasukan Harian</p>
                                                <p class="text-xs text-gray-500">Pemasukan per hari dalam periode ini
                                                </p>
                                            </div>
                                        </div>
                                        <div class="text-right ml-2">
                                            <p class="font-semibold text-emerald-600 text-sm">Rp 0</p>
                                            <p class="text-xs text-emerald-600"><span
                                                    class="bg-emerald-100 text-emerald-600 px-1.5 py-0.5 rounded text-xs font-medium">per
                                                    hari</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-3 sm:px-4 py-2.5 sm:py-3 hover:bg-gray-50 transition-colors">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center space-x-2.5">
                                            <div
                                                class="w-8 h-8 rounded-full bg-red-100 flex items-center justify-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-trending-down text-red-600">
                                                    <polyline points="22 17 13.5 8.5 8.5 13.5 2 7"></polyline>
                                                    <polyline points="16 17 22 17 22 11"></polyline>
                                                </svg>
                                            </div>
                                            <div class="min-w-0 flex-1">
                                                <p class="font-medium text-gray-900 text-xs sm:text-sm">Rata-rata
                                                    Pengeluaran Harian</p>
                                                <p class="text-xs text-gray-500">Pengeluaran per hari dalam periode ini
                                                </p>
                                            </div>
                                        </div>
                                        <div class="text-right ml-2">
                                            <p class="font-semibold text-red-600 text-sm">Rp 0</p>
                                            <p class="text-xs text-red-600"><span
                                                    class="bg-red-100 text-red-600 px-1.5 py-0.5 rounded text-xs font-medium">per
                                                    hari</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fixed bottom-0 left-1/2 transform -translate-x-1/2 w-full max-w-[480px] z-40 px-4 pb-4 pt-2">
                <div class="absolute -top-16 right-4 z-10"><button data-slot="drawer-trigger"
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 aria-invalid:border-destructive px-6 has-[&gt;svg]:px-4 h-12 w-12 rounded-full shadow-lg hover:shadow-xl transition-all duration-200 bg-blue-600 hover:bg-blue-700 text-white"
                        type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:r9:"
                        data-state="closed"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-circle h-5 w-5">
                            <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"></path>
                        </svg><span class="sr-only">Open AI Chat</span></button></div>
                <div
                    class="flex items-center justify-between h-14 bg-white/80 backdrop-blur-lg border border-gray-200/80 shadow-2xl shadow-gray-600/10 rounded-2xl px-6">
                    <div class="flex items-center justify-around w-2/5"><a
                            class="flex items-center justify-center w-10 h-10 rounded-xl transition-colors duration-300 text-green-600 bg-green-50"
                            href="https://catetdulu.com/dashboard"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-house">
                                <path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"></path>
                                <path
                                    d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z">
                                </path>
                            </svg></a><a
                            class="flex items-center justify-center w-10 h-10 rounded-xl transition-colors duration-300 text-gray-500 hover:text-green-600 hover:bg-gray-50"
                            href="https://catetdulu.com/income"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up">
                                <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                                <polyline points="16 7 22 7 22 13"></polyline>
                            </svg></a></div>
                    <div class="w-1/5 flex justify-center"><button data-slot="drawer-trigger"
                            class="gap-2 whitespace-nowrap text-sm font-medium transition-[color,box-shadow] disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 aria-invalid:border-destructive size-9 w-16 h-16 rounded-full shadow-lg text-white -mt-8 border-4 border-white flex items-center justify-center bg-green-500 hover:bg-green-600"
                            type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:ri:"
                            data-state="closed"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus">
                                <path d="M5 12h14"></path>
                                <path d="M12 5v14"></path>
                            </svg></button></div>
                    <div class="flex items-center justify-around w-2/5"><a
                            class="flex items-center justify-center w-10 h-10 rounded-xl transition-colors duration-300 text-gray-500 hover:text-green-600 hover:bg-gray-50"
                            href="https://catetdulu.com/outcome"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-down">
                                <polyline points="22 17 13.5 8.5 8.5 13.5 2 7"></polyline>
                                <polyline points="16 17 22 17 22 11"></polyline>
                            </svg></a><a
                            class="flex items-center justify-center w-10 h-10 rounded-xl transition-colors duration-300 text-gray-500 hover:text-green-600 hover:bg-gray-50"
                            href="https://catetdulu.com/settings/profile"><svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-user">
                                <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg></a></div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>