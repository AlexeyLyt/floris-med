/*!
 * maska v1.4.2
 */
!function(e, t) {
    "object" == typeof exports && "undefined" != typeof module ? t(exports) : "function" == typeof define && define.amd ? define(["exports"], t) : t((e = "undefined" != typeof globalThis ? globalThis : e || self).Maska = {})
}(this, (function(e) {
    "use strict";
    function t(e, t) {
        if (!(e instanceof t))
            throw new TypeError("Cannot call a class as a function")
    }
    function n(e, t) {
        for (var n = 0; n < t.length; n++) {
            var a = t[n];
            a.enumerable = a.enumerable || !1,
            a.configurable = !0,
            "value"in a && (a.writable = !0),
            Object.defineProperty(e, a.key, a)
        }
    }
    function a(e, t, n) {
        return t in e ? Object.defineProperty(e, t, {
            value: n,
            enumerable: !0,
            configurable: !0,
            writable: !0
        }) : e[t] = n,
        e
    }
    function r(e, t) {
        var n = Object.keys(e);
        if (Object.getOwnPropertySymbols) {
            var a = Object.getOwnPropertySymbols(e);
            t && (a = a.filter((function(t) {
                return Object.getOwnPropertyDescriptor(e, t).enumerable
            }
            ))),
            n.push.apply(n, a)
        }
        return n
    }
    function i(e) {
        for (var t = 1; t < arguments.length; t++) {
            var n = null != arguments[t] ? arguments[t] : {};
            t % 2 ? r(Object(n), !0).forEach((function(t) {
                a(e, t, n[t])
            }
            )) : Object.getOwnPropertyDescriptors ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(n)) : r(Object(n)).forEach((function(t) {
                Object.defineProperty(e, t, Object.getOwnPropertyDescriptor(n, t))
            }
            ))
        }
        return e
    }
    function o(e, t, n) {
        var a = !(arguments.length > 3 && void 0 !== arguments[3]) || arguments[3];
        return u(t).length > 1 ? s(t)(e, t, n, a) : l(e, t, n, a)
    }
    function u(e) {
        try {
            return JSON.parse(e)
        } catch (t) {
            return [e]
        }
    }
    function s(e) {
        var t = u(e).sort((function(e, t) {
            return e.length - t.length
        }
        ));
        return function(e, a, r) {
            var i = !(arguments.length > 3 && void 0 !== arguments[3]) || arguments[3]
              , o = t.map((function(t) {
                return l(e, t, r, !1)
            }
            ))
              , u = o.pop();
            for (var s in t)
                if (n(u, t[s], r))
                    return l(e, t[s], r, i);
            return ""
        }
        ;
        function n(e, t, n) {
            for (var a in n)
                n[a].escape && (t = t.replace(new RegExp(a + ".{1}","g"), ""));
            return t.split("").filter((function(e) {
                return n[e] && n[e].pattern
            }
            )).length >= e.length
        }
    }
    function l(e, t, n) {
        for (var a = !(arguments.length > 3 && void 0 !== arguments[3]) || arguments[3], r = 0, i = 0, o = "", u = ""; r < t.length && i < e.length; ) {
            var s = t[r]
              , l = e[i]
              , p = n[s];
            if (p && p.pattern)
                p.pattern.test(l) && (o += c(l, p),
                r++,
                a && t[r] && (n[t[r]] ? n[t[r]] && n[t[r]].escape && (o += t[r + 1],
                r += 2) : (o += t[r],
                r++))),
                i++;
            else if (p && p.repeat) {
                var f = n[t[r - 1]];
                f && !f.pattern.test(l) ? r++ : r--
            } else
                p && p.escape && (s = t[++r]),
                a && (o += s),
                l === s && i++,
                r++
        }
        for (; a && r < t.length; ) {
            var v = t[r];
            if (n[v]) {
                u = "";
                break
            }
            u += v,
            r++
        }
        return o + u
    }
    function c(e, t) {
        return t.transform && (e = t.transform(e)),
        t.uppercase ? e.toLocaleUpperCase() : t.lowercase ? e.toLocaleLowerCase() : e
    }
    var p = {
        "#": {
            pattern: /[0-9]/
        },
        X: {
            pattern: /[0-9a-zA-Z]/
        },
        S: {
            pattern: /[a-zA-Z]/
        },
        A: {
            pattern: /[a-zA-Z]/,
            uppercase: !0
        },
        a: {
            pattern: /[a-zA-Z]/,
            lowercase: !0
        },
        "!": {
            escape: !0
        },
        "*": {
            repeat: !0
        }
    };
    function f(e) {
        return e instanceof HTMLInputElement ? e : e.querySelector("input") || e
    }
    function v(e) {
        return "[object String]" === Object.prototype.toString.call(e)
    }
    var d = function() {
        function e(n) {
            var a = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {};
            if (t(this, e),
            !n)
                throw new Error("Maska: no element for mask");
            if (a.tokens)
                for (var r in a.tokens)
                    a.tokens[r] = i({}, a.tokens[r]),
                    a.tokens[r].pattern && v(a.tokens[r].pattern) && (a.tokens[r].pattern = new RegExp(a.tokens[r].pattern));
            this._opts = {
                mask: a.mask,
                tokens: i(i({}, p), a.tokens)
            },
            this._el = v(n) ? document.querySelectorAll(n) : n.length ? n : [n],
            this.init()
        }
        var a, r, u;
        return a = e,
        (r = [{
            key: "init",
            value: function() {
                for (var e = this, t = 0; t < this._el.length; t++) {
                    var n = f(this._el[t]);
                    !this._opts.mask || n.dataset.mask && n.dataset.mask === this._opts.mask || (n.dataset.mask = this._opts.mask),
                    this.updateValue(n),
                    n.dataset.maskInited || (n.dataset.maskInited = !0,
                    n.addEventListener("input", (function(t) {
                        return e.updateValue(t.target, t)
                    }
                    )),
                    n.addEventListener("beforeinput", (function(t) {
                        return e.beforeInput(t)
                    }
                    )))
                }
            }
        }, {
            key: "destroy",
            value: function() {
                for (var e = this, t = 0; t < this._el.length; t++) {
                    var n = f(this._el[t]);
                    n.removeEventListener("input", (function(t) {
                        return e.updateValue(t.target, t)
                    }
                    )),
                    n.removeEventListener("beforeinput", (function(t) {
                        return e.beforeInput(t)
                    }
                    )),
                    delete n.dataset.mask,
                    delete n.dataset.maskInited
                }
            }
        }, {
            key: "updateValue",
            value: function(e, t) {
                var n = e.type.match(/^number$/i) && e.validity.badInput;
                if (!e.value && !n || !e.dataset.mask)
                    return e.dataset.maskRawValue = "",
                    void this.dispatch("maska", e, t);
                var a = e.selectionEnd
                  , r = e.value
                  , i = r[a - 1];
                e.dataset.maskRawValue = o(e.value, e.dataset.mask, this._opts.tokens, !1),
                e.value = o(e.value, e.dataset.mask, this._opts.tokens),
                t && "insertText" === t.inputType && a === r.length && (a = e.value.length),
                function(e, t, n) {
                    for (; t && t < e.value.length && e.value.charAt(t - 1) !== n; )
                        t++;
                    (e.type ? e.type.match(/^(text|search|password|tel|url)$/i) : !e.type) && e === document.activeElement && (e.setSelectionRange(t, t),
                    setTimeout((function() {
                        e.setSelectionRange(t, t)
                    }
                    ), 0))
                }(e, a, i),
                this.dispatch("maska", e, t),
                e.value !== r && this.dispatch("input", e, t)
            }
        }, {
            key: "beforeInput",
            value: function(e) {
                e.target.type.match(/^number$/i) && e.data && isNaN(e.target.value + e.data) && e.preventDefault()
            }
        }, {
            key: "dispatch",
            value: function(e, t, n) {
                t.dispatchEvent(function(e) {
                    var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : null
                      , n = document.createEvent("Event");
                    return n.initEvent(e, !0, !0),
                    t && (n.inputType = t),
                    n
                }(e, n && n.inputType || null))
            }
        }]) && n(a.prototype, r),
        u && n(a, u),
        e
    }();
    function h(e, t) {
        if (t.value)
            return t.value && function(e) {
                return !(v(e.value) && e.value === e.oldValue || Array.isArray(e.value) && JSON.stringify(e.value) === JSON.stringify(e.oldValue) || e.value && e.value.mask && e.oldValue && e.oldValue.mask && e.value.mask === e.oldValue.mask)
            }(t) ? new d(e,function(e) {
                var t = {};
                return e.mask ? (t.mask = Array.isArray(e.mask) ? JSON.stringify(e.mask) : e.mask,
                t.tokens = e.tokens ? i({}, e.tokens) : {}) : t.mask = Array.isArray(e) ? JSON.stringify(e) : e,
                t
            }(t.value)) : void 0
    }
    function k(e) {
        e.directive("maska", h)
    }
    "undefined" != typeof window && window.Vue && window.Vue.use && window.Vue.use(k),
    e.create = function(e, t) {
        return new d(e,t)
    }
    ,
    e.default = k,
    e.install = k,
    e.mask = o,
    e.maska = h,
    e.tokens = p,
    Object.defineProperty(e, "__esModule", {
        value: !0
    })
}
));