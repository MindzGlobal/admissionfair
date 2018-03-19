! function(e) {
    var t = window.orientation !== undefined,
        n = navigator.userAgent.toLowerCase().indexOf("android") > -1,
        r = function(t, r) {
            if (n) return;
            this.$element = e(t), this.options = e.extend({}, e.fn.inputmask.defaults, r), this.mask = String(r.mask), this.init(), this.listen(), this.checkVal()
        };
    r.prototype = {
        init: function() {
            var t = this.options.definitions,
                n = this.mask.length;
            this.tests = [], this.partialPosition = this.mask.length, this.firstNonMaskPos = null, e.each(this.mask.split(""), e.proxy(function(e, r) {
                r == "?" ? (n--, this.partialPosition = e) : t[r] ? (this.tests.push(new RegExp(t[r])), this.firstNonMaskPos === null && (this.firstNonMaskPos = this.tests.length - 1)) : this.tests.push(null)
            }, this)), this.buffer = e.map(this.mask.split(""), e.proxy(function(e, n) {
                if (e != "?") return t[e] ? this.options.placeholder : e
            }, this)), this.focusText = this.$element.val(), this.$element.data("rawMaskFn", e.proxy(function() {
                return e.map(this.buffer, function(e, t) {
                    return this.tests[t] && e != this.options.placeholder ? e : null
                }).join("")
            }, this))
        },
        listen: function() {
            if (this.$element.attr("readonly")) return;
            var t = (navigator.userAgent.match(/msie/i) ? "paste" : "input") + ".mask";
            this.$element.on("unmask", e.proxy(this.unmask, this)).on("focus.mask", e.proxy(this.focusEvent, this)).on("blur.mask", e.proxy(this.blurEvent, this)).on("keydown.mask", e.proxy(this.keydownEvent, this)).on("keypress.mask", e.proxy(this.keypressEvent, this)).on(t, e.proxy(this.pasteEvent, this))
        },
        caret: function(e, t) {
            if (this.$element.length === 0) return;
            if (typeof e == "number") return t = typeof t == "number" ? t : e, this.$element.each(function() {
                if (this.setSelectionRange) this.setSelectionRange(e, t);
                else if (this.createTextRange) {
                    var n = this.createTextRange();
                    n.collapse(!0), n.moveEnd("character", t), n.moveStart("character", e), n.select()
                }
            });
            if (this.$element[0].setSelectionRange) e = this.$element[0].selectionStart, t = this.$element[0].selectionEnd;
            else if (document.selection && document.selection.createRange) {
                var n = document.selection.createRange();
                e = 0 - n.duplicate().moveStart("character", -1e5), t = e + n.text.length
            }
            return {
                begin: e,
                end: t
            }
        },
        seekNext: function(e) {
            var t = this.mask.length;
            while (++e <= t && !this.tests[e]);
            return e
        },
        seekPrev: function(e) {
            while (--e >= 0 && !this.tests[e]);
            return e
        },
        shiftL: function(e, t) {
            var n = this.mask.length;
            if (e < 0) return;
            for (var r = e, i = this.seekNext(t); r < n; r++)
                if (this.tests[r]) {
                    if (!(i < n && this.tests[r].test(this.buffer[i]))) break;
                    this.buffer[r] = this.buffer[i], this.buffer[i] = this.options.placeholder, i = this.seekNext(i)
                }
            this.writeBuffer(), this.caret(Math.max(this.firstNonMaskPos, e))
        },
        shiftR: function(e) {
            var t = this.mask.length;
            for (var n = e, r = this.options.placeholder; n < t; n++)
                if (this.tests[n]) {
                    var i = this.seekNext(n),
                        s = this.buffer[n];
                    this.buffer[n] = r;
                    if (!(i < t && this.tests[i].test(s))) break;
                    r = s
                }
        },
        unmask: function() {
            this.$element.unbind(".mask").removeData("inputmask")
        },
        focusEvent: function() {
            this.focusText = this.$element.val();
            var t = this.mask.length,
                n = this.checkVal();
            this.writeBuffer();
            var r = this,
                i = function() {
                    n == t ? r.caret(0, n) : r.caret(n)
                };
            e.browser.msie ? i() : setTimeout(i, 0)
        },
        blurEvent: function() {
            this.checkVal(), this.$element.val() != this.focusText && this.$element.trigger("change")
        },
        keydownEvent: function(e) {
            var n = e.which;
            if (n == 8 || n == 46 || t && n == 127) {
                var r = this.caret(),
                    i = r.begin,
                    s = r.end;
                return s - i === 0 && (i = n != 46 ? this.seekPrev(i) : s = this.seekNext(i - 1), s = n == 46 ? this.seekNext(s) : s), this.clearBuffer(i, s), this.shiftL(i, s - 1), !1
            }
            if (n == 27) return this.$element.val(this.focusText), this.caret(0, this.checkVal()), !1
        },
        keypressEvent: function(e) {
            var t = this.mask.length,
                n = e.which,
                r = this.caret();
            if (e.ctrlKey || e.altKey || e.metaKey || n < 32) return !0;
            if (n) {
                r.end - r.begin !== 0 && (this.clearBuffer(r.begin, r.end), this.shiftL(r.begin, r.end - 1));
                var i = this.seekNext(r.begin - 1);
                if (i < t) {
                    var s = String.fromCharCode(n);
                    if (this.tests[i].test(s)) {
                        this.shiftR(i), this.buffer[i] = s, this.writeBuffer();
                        var o = this.seekNext(i);
                        this.caret(o)
                    }
                }
                return !1
            }
        },
        pasteEvent: function() {
            var e = this;
            setTimeout(function() {
                e.caret(e.checkVal(!0))
            }, 0)
        },
        clearBuffer: function(e, t) {
            var n = this.mask.length;
            for (var r = e; r < t && r < n; r++) this.tests[r] && (this.buffer[r] = this.options.placeholder)
        },
        writeBuffer: function() {
            return this.$element.val(this.buffer.join("")).val()
        },
        checkVal: function(e) {
            var t = this.mask.length,
                n = this.$element.val(),
                r = -1;
            for (var i = 0, s = 0; i < t; i++)
                if (this.tests[i]) {
                    this.buffer[i] = this.options.placeholder;
                    while (s++ < n.length) {
                        var o = n.charAt(s - 1);
                        if (this.tests[i].test(o)) {
                            this.buffer[i] = o, r = i;
                            break
                        }
                    }
                    if (s > n.length) break
                } else this.buffer[i] == n.charAt(s) && i != this.partialPosition && (s++, r = i);
            if (!e && r + 1 < this.partialPosition) this.$element.val(""), this.clearBuffer(0, t);
            else if (e || r + 1 >= this.partialPosition) this.writeBuffer(), e || this.$element.val(this.$element.val().substring(0, r + 1));
            return this.partialPosition ? i : this.firstNonMaskPos
        }
    }, e.fn.inputmask = function(t) {
        return this.each(function() {
            var n = e(this),
                i = n.data("inputmask");
            i || n.data("inputmask", i = new r(this, t))
        })
    }, e.fn.inputmask.defaults = {
        mask: "",
        placeholder: "_",
        definitions: {
            9: "[0-9]",
            a: "[A-Za-z]",
            "?": "[A-Za-z0-9]",
            "*": "."
        }
    }, e.fn.inputmask.Constructor = r, e(document).on("focus.inputmask.data-api", "[data-mask]", function(t) {
        var n = e(this);
        if (n.data("inputmask")) return;
        t.preventDefault(), n.inputmask(n.data())
    })
}(window.jQuery)
