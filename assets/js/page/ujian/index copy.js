var tns = function() {
	var e = window,
		t = e.requestAnimationFrame || e.webkitRequestAnimationFrame || e.mozRequestAnimationFrame || e.msRequestAnimationFrame || function(e) {
			return setTimeout(e, 16)
		},
		i = window,
		n = i.cancelAnimationFrame || i.mozCancelAnimationFrame || function(e) {
			clearTimeout(e)
		};

	function a() {
		for (var e, t, i, n = arguments[0] || {}, a = 1, r = arguments.length; a < r; a++)
			if (null !== (e = arguments[a]))
				for (t in e) n !== (i = e[t]) && void 0 !== i && (n[t] = i);
		return n
	}

	function r(e) {
		return 0 <= ["true", "false"].indexOf(e) ? JSON.parse(e) : e
	}

	function s(e, t, i, n) {
		if (n) try {
			e.setItem(t, i)
		} catch (e) {}
		return i
	}

	function o() {
		var e = document,
			t = e.body;
		return t || ((t = e.createElement("body")).fake = !0), t
	}
	var l = document.documentElement;

	function c(e) {
		var t = "";
		return e.fake && (t = l.style.overflow, e.style.background = "", e.style.overflow = l.style.overflow = "hidden", l.appendChild(e)), t
	}

	function u(e, t) {
		e.fake && (e.remove(), l.style.overflow = t, l.offsetHeight)
	}

	function d(e, t, i, n) {
		"insertRule" in e ? e.insertRule(t + "{" + i + "}", n) : e.addRule(t, i, n)
	}

	function h(e) {
		return ("insertRule" in e ? e.cssRules : e.rules).length
	}

	function f(e, t, i) {
		for (var n = 0, a = e.length; n < a; n++) t.call(i, e[n], n)
	}
	var p = "classList" in document.createElement("_"),
		m = p ? function(e, t) {
			return e.classList.contains(t)
		} : function(e, t) {
			return 0 <= e.className.indexOf(t)
		},
		g = p ? function(e, t) {
			m(e, t) || e.classList.add(t)
		} : function(e, t) {
			m(e, t) || (e.className += " " + t)
		},
		v = p ? function(e, t) {
			m(e, t) && e.classList.remove(t)
		} : function(e, t) {
			m(e, t) && (e.className = e.className.replace(t, ""))
		};

	function y(e, t) {
		return e.hasAttribute(t)
	}

	function b(e, t) {
		return e.getAttribute(t)
	}

	function x(e) {
		return void 0 !== e.item
	}

	function _(e, t) {
		if (e = x(e) || e instanceof Array ? e : [e], "[object Object]" === Object.prototype.toString.call(t))
			for (var i = e.length; i--;)
				for (var n in t) e[i].setAttribute(n, t[n])
	}

	function w(e, t) {
		e = x(e) || e instanceof Array ? e : [e];
		for (var i = (t = t instanceof Array ? t : [t]).length, n = e.length; n--;)
			for (var a = i; a--;) e[n].removeAttribute(t[a])
	}

	function k(e) {
		for (var t = [], i = 0, n = e.length; i < n; i++) t.push(e[i]);
		return t
	}

	function M(e, t) {
		"none" !== e.style.display && (e.style.display = "none")
	}

	function L(e, t) {
		"none" === e.style.display && (e.style.display = "")
	}

	function S(e) {
		return "none" !== window.getComputedStyle(e).display
	}

	function A(e) {
		if ("string" == typeof e) {
			var t = [e],
				i = e.charAt(0).toUpperCase() + e.substr(1);
			["Webkit", "Moz", "ms", "O"].forEach((function(n) {
				"ms" === n && "transform" !== e || t.push(n + i)
			})), e = t
		}
		for (var n = document.createElement("fakeelement"), a = (e.length, 0); a < e.length; a++) {
			var r = e[a];
			if (void 0 !== n.style[r]) return r
		}
		return !1
	}

	function T(e, t) {
		var i = !1;
		return /^Webkit/.test(e) ? i = "webkit" + t + "End" : /^O/.test(e) ? i = "o" + t + "End" : e && (i = t.toLowerCase() + "end"), i
	}
	var C = !1;
	try {
		var D = Object.defineProperty({}, "passive", {
			get: function() {
				C = !0
			}
		});
		window.addEventListener("test", null, D)
	} catch (e) {}
	var E = !!C && {
		passive: !0
	};

	function O(e, t, i) {
		for (var n in t) {
			var a = 0 <= ["touchstart", "touchmove"].indexOf(n) && !i && E;
			e.addEventListener(n, t[n], a)
		}
	}

	function P(e, t) {
		for (var i in t) {
			var n = 0 <= ["touchstart", "touchmove"].indexOf(i) && E;
			e.removeEventListener(i, t[i], n)
		}
	}

	function Y() {
		return {
			topics: {},
			on: function(e, t) {
				this.topics[e] = this.topics[e] || [], this.topics[e].push(t)
			},
			off: function(e, t) {
				if (this.topics[e])
					for (var i = 0; i < this.topics[e].length; i++)
						if (this.topics[e][i] === t) {
							this.topics[e].splice(i, 1);
							break
						}
			},
			emit: function(e, t) {
				t.type = e, this.topics[e] && this.topics[e].forEach((function(i) {
					i(t, e)
				}))
			}
		}
	}
	Object.keys || (Object.keys = function(e) {
		var t = [];
		for (var i in e) Object.prototype.hasOwnProperty.call(e, i) && t.push(i);
		return t
	}), "remove" in Element.prototype || (Element.prototype.remove = function() {
		this.parentNode && this.parentNode.removeChild(this)
	});
	var I = function(e) {
		e = a({
			container: ".slider",
			mode: "carousel",
			axis: "horizontal",
			items: 1,
			gutter: 0,
			edgePadding: 0,
			fixedWidth: !1,
			autoWidth: !1,
			viewportMax: !1,
			slideBy: 1,
			center: !1,
			controls: !0,
			controlsPosition: "top",
			controlsText: ["prev", "next"],
			controlsContainer: !1,
			prevButton: !1,
			nextButton: !1,
			nav: !0,
			navPosition: "top",
			navContainer: !1,
			navAsThumbnails: !1,
			arrowKeys: !1,
			speed: 300,
			autoplay: !1,
			autoplayPosition: "top",
			autoplayTimeout: 5e3,
			autoplayDirection: "forward",
			autoplayText: ["start", "stop"],
			autoplayHoverPause: !1,
			autoplayButton: !1,
			autoplayButtonOutput: !0,
			autoplayResetOnVisibility: !0,
			animateIn: "tns-fadeIn",
			animateOut: "tns-fadeOut",
			animateNormal: "tns-normal",
			animateDelay: !1,
			loop: !0,
			rewind: !1,
			autoHeight: !1,
			responsive: !1,
			lazyload: !1,
			lazyloadSelector: ".tns-lazy-img",
			touch: !0,
			mouseDrag: !1,
			swipeAngle: 15,
			nested: !1,
			preventActionWhenRunning: !1,
			preventScrollOnTouch: !1,
			freezable: !0,
			onInit: !1,
			useLocalStorage: !0,
			nonce: !1
		}, e || {});
		var i = document,
			l = window,
			p = {
				ENTER: 13,
				SPACE: 32,
				LEFT: 37,
				RIGHT: 39
			},
			x = {},
			C = e.useLocalStorage;
		if (C) {
			var D = navigator.userAgent,
				E = new Date;
			try {
				(x = l.localStorage) ? (x.setItem(E, E), C = x.getItem(E) == E, x.removeItem(E)) : C = !1, C || (x = {})
			} catch (D) {
				C = !1
			}
			C && (x.tnsApp && x.tnsApp !== D && ["tC", "tPL", "tMQ", "tTf", "t3D", "tTDu", "tTDe", "tADu", "tADe", "tTE", "tAE"].forEach((function(e) {
				x.removeItem(e)
			})), localStorage.tnsApp = D)
		}
		var j = x.tC ? r(x.tC) : s(x, "tC", function() {
				var e = document,
					t = o(),
					i = c(t),
					n = e.createElement("div"),
					a = !1;
				t.appendChild(n);
				try {
					for (var r, s = "(10px * 10)", l = ["calc" + s, "-moz-calc" + s, "-webkit-calc" + s], d = 0; d < 3; d++)
						if (r = l[d], n.style.width = r, 100 === n.offsetWidth) {
							a = r.replace(s, "");
							break
						}
				} catch (e) {}
				return t.fake ? u(t, i) : n.remove(), a
			}(), C),
			N = x.tPL ? r(x.tPL) : s(x, "tPL", function() {
				var e, t = document,
					i = o(),
					n = c(i),
					a = t.createElement("div"),
					r = t.createElement("div"),
					s = "";
				a.className = "tns-t-subp2", r.className = "tns-t-ct";
				for (var l = 0; l < 70; l++) s += "<div></div>";
				return r.innerHTML = s, a.appendChild(r), i.appendChild(a), e = Math.abs(a.getBoundingClientRect().left - r.children[67].getBoundingClientRect().left) < 2, i.fake ? u(i, n) : a.remove(), e
			}(), C),
			H = x.tMQ ? r(x.tMQ) : s(x, "tMQ", function() {
				if (window.matchMedia || window.msMatchMedia) return !0;
				var e, t = document,
					i = o(),
					n = c(i),
					a = t.createElement("div"),
					r = t.createElement("style"),
					s = "@media all and (min-width:1px){.tns-mq-test{position:absolute}}";
				return r.type = "text/css", a.className = "tns-mq-test", i.appendChild(r), i.appendChild(a), r.styleSheet ? r.styleSheet.cssText = s : r.appendChild(t.createTextNode(s)), e = window.getComputedStyle ? window.getComputedStyle(a).position : a.currentStyle.position, i.fake ? u(i, n) : a.remove(), "absolute" === e
			}(), C),
			F = x.tTf ? r(x.tTf) : s(x, "tTf", A("transform"), C),
			R = x.t3D ? r(x.t3D) : s(x, "t3D", function(e) {
				if (!e) return !1;
				if (!window.getComputedStyle) return !1;
				var t, i = document,
					n = o(),
					a = c(n),
					r = i.createElement("p"),
					s = 9 < e.length ? "-" + e.slice(0, -9).toLowerCase() + "-" : "";
				return s += "transform", n.insertBefore(r, null), r.style[e] = "translate3d(1px,1px,1px)", t = window.getComputedStyle(r).getPropertyValue(s), n.fake ? u(n, a) : r.remove(), void 0 !== t && 0 < t.length && "none" !== t
			}(F), C),
			z = x.tTDu ? r(x.tTDu) : s(x, "tTDu", A("transitionDuration"), C),
			B = x.tTDe ? r(x.tTDe) : s(x, "tTDe", A("transitionDelay"), C),
			W = x.tADu ? r(x.tADu) : s(x, "tADu", A("animationDuration"), C),
			V = x.tADe ? r(x.tADe) : s(x, "tADe", A("animationDelay"), C),
			q = x.tTE ? r(x.tTE) : s(x, "tTE", T(z, "Transition"), C),
			X = x.tAE ? r(x.tAE) : s(x, "tAE", T(W, "Animation"), C),
			U = l.console && "function" == typeof l.console.warn,
			$ = ["container", "controlsContainer", "prevButton", "nextButton", "navContainer", "autoplayButton"],
			G = {};
		if ($.forEach((function(t) {
				if ("string" == typeof e[t]) {
					var n = e[t],
						a = i.querySelector(n);
					if (G[t] = n, !a || !a.nodeName) return void(U && console.warn("Can't find", e[t]));
					e[t] = a
				}
			})), !(e.container.children.length < 1)) {
			var Z = e.responsive,
				K = e.nested,
				J = "carousel" === e.mode;
			if (Z) {
				0 in Z && (e = a(e, Z[0]), delete Z[0]);
				var Q = {};
				for (var ee in Z) {
					var te = Z[ee];
					te = "number" == typeof te ? {
						items: te
					} : te, Q[ee] = te
				}
				Z = Q, Q = null
			}
			if (J || function e(t) {
					for (var i in t) J || ("slideBy" === i && (t[i] = "page"), "edgePadding" === i && (t[i] = !1), "autoHeight" === i && (t[i] = !1)), "responsive" === i && e(t[i])
				}(e), !J) {
				e.axis = "horizontal", e.slideBy = "page", e.edgePadding = !1;
				var ie = e.animateIn,
					ne = e.animateOut,
					ae = e.animateDelay,
					re = e.animateNormal
			}
			var se, oe, le = "horizontal" === e.axis,
				ce = i.createElement("div"),
				ue = i.createElement("div"),
				de = e.container,
				he = de.parentNode,
				fe = de.outerHTML,
				pe = de.children,
				me = pe.length,
				ge = Ei(),
				ve = !1;
			Z && Ki(), J && (de.className += " tns-vpfix");
			var ye, be, xe, _e, we, ke, Me, Le, Se = e.autoWidth,
				Ae = Ii("fixedWidth"),
				Te = Ii("edgePadding"),
				Ce = Ii("gutter"),
				De = Pi(),
				Ee = Ii("center"),
				Oe = Se ? 1 : Math.floor(Ii("items")),
				Pe = Ii("slideBy"),
				Ye = e.viewportMax || e.fixedWidthViewportWidth,
				Ie = Ii("arrowKeys"),
				je = Ii("speed"),
				Ne = e.rewind,
				He = !Ne && e.loop,
				Fe = Ii("autoHeight"),
				Re = Ii("controls"),
				ze = Ii("controlsText"),
				Be = Ii("nav"),
				We = Ii("touch"),
				Ve = Ii("mouseDrag"),
				qe = Ii("autoplay"),
				Xe = Ii("autoplayTimeout"),
				Ue = Ii("autoplayText"),
				$e = Ii("autoplayHoverPause"),
				Ge = Ii("autoplayResetOnVisibility"),
				Ze = (null, Me = Ii("nonce"), Le = document.createElement("style"), Me && Le.setAttribute("nonce", Me), document.querySelector("head").appendChild(Le), Le.sheet ? Le.sheet : Le.styleSheet),
				Ke = e.lazyload,
				Je = e.lazyloadSelector,
				Qe = [],
				et = He ? (we = function() {
					if (Se || Ae && !Ye) return me - 1;
					var t = Ae ? "fixedWidth" : "items",
						i = [];
					if ((Ae || e[t] < me) && i.push(e[t]), Z)
						for (var n in Z) {
							var a = Z[n][t];
							a && (Ae || a < me) && i.push(a)
						}
					return i.length || i.push(0), Math.ceil(Ae ? Ye / Math.min.apply(null, i) : Math.max.apply(null, i))
				}(), ke = J ? Math.ceil((5 * we - me) / 2) : 4 * we - me, ke = Math.max(we, ke), Yi("edgePadding") ? ke + 1 : ke) : 0,
				tt = J ? me + 2 * et : me + et,
				it = !(!Ae && !Se || He),
				nt = Ae ? Mn() : null,
				at = !J || !He,
				rt = le ? "left" : "top",
				st = "",
				ot = "",
				lt = Ae ? function() {
					return Ee && !He ? me - 1 : Math.ceil(-nt / (Ae + Ce))
				} : Se ? function() {
					for (var e = 0; e < tt; e++)
						if (ye[e] >= -nt) return e
				} : function() {
					return Ee && J && !He ? me - 1 : He || J ? Math.max(0, tt - Math.ceil(Oe)) : tt - 1
				},
				ct = Ti(Ii("startIndex")),
				ut = ct,
				dt = (Ai(), 0),
				ht = Se ? null : lt(),
				ft = e.preventActionWhenRunning,
				pt = e.swipeAngle,
				mt = !pt || "?",
				gt = !1,
				vt = e.onInit,
				yt = new Y,
				bt = " tns-slider tns-" + e.mode,
				xt = de.id || (_e = window.tnsId, window.tnsId = _e ? _e + 1 : 1, "tns" + window.tnsId),
				_t = Ii("disable"),
				wt = !1,
				kt = e.freezable,
				Mt = !(!kt || Se) && Zi(),
				Lt = !1,
				St = {
					click: Pn,
					keydown: function(e) {
						e = zn(e);
						var t = [p.LEFT, p.RIGHT].indexOf(e.keyCode);
						0 <= t && (0 === t ? $t.disabled || Pn(e, -1) : Gt.disabled || Pn(e, 1))
					}
				},
				At = {
					click: function(e) {
						if (gt) {
							if (ft) return;
							En()
						}
						for (var t = Bn(e = zn(e)); t !== Qt && !y(t, "data-nav");) t = t.parentNode;
						if (y(t, "data-nav")) {
							var i = ni = Number(b(t, "data-nav")),
								n = Ae || Se ? i * me / ti : i * Oe;
							On(It ? i : Math.min(Math.ceil(n), me - 1), e), ai === i && (ui && Hn(), ni = -1)
						}
					},
					keydown: function(e) {
						e = zn(e);
						var t = i.activeElement;
						if (y(t, "data-nav")) {
							var n = [p.LEFT, p.RIGHT, p.ENTER, p.SPACE].indexOf(e.keyCode),
								a = Number(b(t, "data-nav"));
							0 <= n && (0 === n ? 0 < a && Rn(Jt[a - 1]) : 1 === n ? a < ti - 1 && Rn(Jt[a + 1]) : On(ni = a, e))
						}
					}
				},
				Tt = {
					mouseover: function() {
						ui && (In(), di = !0)
					},
					mouseout: function() {
						di && (Yn(), di = !1)
					}
				},
				Ct = {
					visibilitychange: function() {
						i.hidden ? ui && (In(), fi = !0) : fi && (Yn(), fi = !1)
					}
				},
				Dt = {
					keydown: function(e) {
						e = zn(e);
						var t = [p.LEFT, p.RIGHT].indexOf(e.keyCode);
						0 <= t && Pn(e, 0 === t ? -1 : 1)
					}
				},
				Et = {
					touchstart: Xn,
					touchmove: Un,
					touchend: $n,
					touchcancel: $n
				},
				Ot = {
					mousedown: Xn,
					mousemove: Un,
					mouseup: $n,
					mouseleave: $n
				},
				Pt = Yi("controls"),
				Yt = Yi("nav"),
				It = !!Se || e.navAsThumbnails,
				jt = Yi("autoplay"),
				Nt = Yi("touch"),
				Ht = Yi("mouseDrag"),
				Ft = "tns-slide-active",
				Rt = "tns-slide-cloned",
				zt = "tns-complete",
				Bt = {
					load: function(e) {
						on(Bn(e))
					},
					error: function(e) {
						var t;
						t = Bn(e), g(t, "failed"), ln(t)
					}
				},
				Wt = "force" === e.preventScrollOnTouch;
			if (Pt) var Vt, qt, Xt = e.controlsContainer,
				Ut = e.controlsContainer ? e.controlsContainer.outerHTML : "",
				$t = e.prevButton,
				Gt = e.nextButton,
				Zt = e.prevButton ? e.prevButton.outerHTML : "",
				Kt = e.nextButton ? e.nextButton.outerHTML : "";
			if (Yt) var Jt, Qt = e.navContainer,
				ei = e.navContainer ? e.navContainer.outerHTML : "",
				ti = Se ? me : Zn(),
				ii = 0,
				ni = -1,
				ai = Di(),
				ri = ai,
				si = "tns-nav-active",
				oi = "Carousel Page ",
				li = " (Current Slide)";
			if (jt) var ci, ui, di, hi, fi, pi = "forward" === e.autoplayDirection ? 1 : -1,
				mi = e.autoplayButton,
				gi = e.autoplayButton ? e.autoplayButton.outerHTML : "",
				vi = ["<span class='tns-visually-hidden'>", " animation</span>"];
			if (Nt || Ht) var yi, bi, xi = {},
				_i = {},
				wi = !1,
				ki = le ? function(e, t) {
					return e.x - t.x
				} : function(e, t) {
					return e.y - t.y
				};
			Se || Si(_t || Mt), F && (rt = F, st = "translate", R ? (st += le ? "3d(" : "3d(0px, ", ot = le ? ", 0px, 0px)" : ", 0px)") : (st += le ? "X(" : "Y(", ot = ")")), J && (de.className = de.className.replace("tns-vpfix", "")),
				function() {
					(Yi("gutter"), ce.className = "tns-outer", ue.className = "tns-inner", ce.id = xt + "-ow", ue.id = xt + "-iw", "" === de.id && (de.id = xt), bt += N || Se ? " tns-subpixel" : " tns-no-subpixel", bt += j ? " tns-calc" : " tns-no-calc", Se && (bt += " tns-autowidth"), bt += " tns-" + e.axis, de.className += bt, J ? ((se = i.createElement("div")).id = xt + "-mw", se.className = "tns-ovh", ce.appendChild(se), se.appendChild(ue)) : ce.appendChild(ue), Fe) && ((se || ue).className += " tns-ah");
					if (he.insertBefore(ce, de), ue.appendChild(de), f(pe, (function(e, t) {
							g(e, "tns-item"), e.id || (e.id = xt + "-item" + t), !J && re && g(e, re), _(e, {
								"aria-hidden": "true",
								tabindex: "-1"
							})
						})), et) {
						for (var t = i.createDocumentFragment(), n = i.createDocumentFragment(), a = et; a--;) {
							var r = a % me,
								s = pe[r].cloneNode(!0);
							if (g(s, Rt), w(s, "id"), n.insertBefore(s, n.firstChild), J) {
								var o = pe[me - 1 - r].cloneNode(!0);
								g(o, Rt), w(o, "id"), t.appendChild(o)
							}
						}
						de.insertBefore(t, de.firstChild), de.appendChild(n), pe = de.children
					}
				}(),
				function() {
					if (!J)
						for (var t = ct, i = ct + Math.min(me, Oe); t < i; t++) {
							var n = pe[t];
							n.style.left = 100 * (t - ct) / Oe + "%", g(n, ie), v(n, re)
						}
					if (le && (N || Se ? (d(Ze, "#" + xt + " > .tns-item", "font-size:" + l.getComputedStyle(pe[0]).fontSize + ";", h(Ze)), d(Ze, "#" + xt, "font-size:0;", h(Ze))) : J && f(pe, (function(e, t) {
							var i;
							e.style.marginLeft = (i = t, j ? j + "(" + 100 * i + "% / " + tt + ")" : 100 * i / tt + "%")
						}))), H) {
						if (z) {
							var a = se && e.autoHeight ? zi(e.speed) : "";
							d(Ze, "#" + xt + "-mw", a, h(Ze))
						}
						a = ji(e.edgePadding, e.gutter, e.fixedWidth, e.speed, e.autoHeight), d(Ze, "#" + xt + "-iw", a, h(Ze)), J && (a = le && !Se ? "width:" + Ni(e.fixedWidth, e.gutter, e.items) + ";" : "", z && (a += zi(je)), d(Ze, "#" + xt, a, h(Ze))), a = le && !Se ? Hi(e.fixedWidth, e.gutter, e.items) : "", e.gutter && (a += Fi(e.gutter)), J || (z && (a += zi(je)), W && (a += Bi(je))), a && d(Ze, "#" + xt + " > .tns-item", a, h(Ze))
					} else {
						J && Fe && (se.style[z] = je / 1e3 + "s"), ue.style.cssText = ji(Te, Ce, Ae, Fe), J && le && !Se && (de.style.width = Ni(Ae, Ce, Oe));
						a = le && !Se ? Hi(Ae, Ce, Oe) : "";
						Ce && (a += Fi(Ce)), a && d(Ze, "#" + xt + " > .tns-item", a, h(Ze))
					}
					if (Z && H)
						for (var r in Z) {
							r = parseInt(r);
							var s = Z[r],
								o = (a = "", ""),
								c = "",
								u = "",
								p = "",
								m = Se ? null : Ii("items", r),
								y = Ii("fixedWidth", r),
								b = Ii("speed", r),
								x = Ii("edgePadding", r),
								_ = Ii("autoHeight", r),
								w = Ii("gutter", r);
							z && se && Ii("autoHeight", r) && "speed" in s && (o = "#" + xt + "-mw{" + zi(b) + "}"), ("edgePadding" in s || "gutter" in s) && (c = "#" + xt + "-iw{" + ji(x, w, y, b, _) + "}"), J && le && !Se && ("fixedWidth" in s || "items" in s || Ae && "gutter" in s) && (u = "width:" + Ni(y, w, m) + ";"), z && "speed" in s && (u += zi(b)), u && (u = "#" + xt + "{" + u + "}"), ("fixedWidth" in s || Ae && "gutter" in s || !J && "items" in s) && (p += Hi(y, w, m)), "gutter" in s && (p += Fi(w)), !J && "speed" in s && (z && (p += zi(b)), W && (p += Bi(b))), p && (p = "#" + xt + " > .tns-item{" + p + "}"), (a = o + c + u + p) && Ze.insertRule("@media (min-width: " + r / 16 + "em) {" + a + "}", Ze.cssRules.length)
						}
				}(), Wi();
			var Mi = He ? J ? function() {
					var e = dt,
						t = ht;
					e += Pe, t -= Pe, Te ? (e += 1, t -= 1) : Ae && (De + Ce) % (Ae + Ce) && (t -= 1), et && (t < ct ? ct -= me : ct < e && (ct += me))
				} : function() {
					if (ht < ct)
						for (; dt + me <= ct;) ct -= me;
					else if (ct < dt)
						for (; ct <= ht - me;) ct += me
				} : function() {
					ct = Math.max(dt, Math.min(ht, ct))
				},
				Li = J ? function() {
					var e, t, i, n, a, r, s, o, l, c, u;
					wn(de, ""), z || !je ? (An(), je && S(de) || En()) : (e = de, t = rt, i = st, n = ot, a = Ln(), r = je, s = En, o = Math.min(r, 10), l = 0 <= a.indexOf("%") ? "%" : "px", a = a.replace(l, ""), c = Number(e.style[t].replace(i, "").replace(n, "").replace(l, "")), u = (a - c) / r * o, setTimeout((function a() {
						r -= o, c += u, e.style[t] = i + c + l + n, 0 < r ? setTimeout(a, o) : s()
					}), o)), le || Gn()
				} : function() {
					Qe = [];
					var e = {};
					e[q] = e[X] = En, P(pe[ut], e), O(pe[ct], e), Tn(ut, ie, ne, !0), Tn(ct, re, ie), q && X && je && S(de) || En()
				};
			return {
				version: "2.9.4",
				getInfo: Jn,
				events: yt,
				goTo: On,
				play: function() {
					qe && !ui && (Nn(), hi = !1)
				},
				pause: function() {
					ui && (Hn(), hi = !0)
				},
				isOn: ve,
				updateSliderHeight: pn,
				refresh: Wi,
				destroy: function() {
					if (Ze.disabled = !0, Ze.ownerNode && Ze.ownerNode.remove(), P(l, {
							resize: $i
						}), Ie && P(i, Dt), Xt && P(Xt, St), Qt && P(Qt, At), P(de, Tt), P(de, Ct), mi && P(mi, {
							click: Fn
						}), qe && clearInterval(ci), J && q) {
						var t = {};
						t[q] = En, P(de, t)
					}
					We && P(de, Et), Ve && P(de, Ot);
					var n = [fe, Ut, Zt, Kt, ei, gi];
					for (var a in $.forEach((function(t, i) {
							var a = "container" === t ? ce : e[t];
							if ("object" == typeof a && a) {
								var r = !!a.previousElementSibling && a.previousElementSibling,
									s = a.parentNode;
								a.outerHTML = n[i], e[t] = r ? r.nextElementSibling : s.firstElementChild
							}
						})), $ = ie = ne = ae = re = le = ce = ue = de = he = fe = pe = me = oe = ge = Se = Ae = Te = Ce = De = Oe = Pe = Ye = Ie = je = Ne = He = Fe = Ze = Ke = ye = Qe = et = tt = it = nt = at = rt = st = ot = lt = ct = ut = dt = ht = pt = mt = gt = vt = yt = bt = xt = _t = wt = kt = Mt = Lt = St = At = Tt = Ct = Dt = Et = Ot = Pt = Yt = It = jt = Nt = Ht = Ft = zt = Bt = be = Re = ze = Xt = Ut = $t = Gt = Vt = qt = Be = Qt = ei = Jt = ti = ii = ni = ai = ri = si = oi = li = qe = Xe = pi = Ue = $e = mi = gi = Ge = vi = ci = ui = di = hi = fi = xi = _i = yi = wi = bi = ki = We = Ve = null, this) "rebuild" !== a && (this[a] = null);
					ve = !1
				},
				rebuild: function() {
					return I(a(e, G))
				}
			}
		}

		function Si(e) {
			e && (Re = Be = We = Ve = Ie = qe = $e = Ge = !1)
		}

		function Ai() {
			for (var e = J ? ct - et : ct; e < 0;) e += me;
			return e % me + 1
		}

		function Ti(e) {
			return e = e ? Math.max(0, Math.min(He ? me - 1 : me - Oe, e)) : 0, J ? e + et : e
		}

		function Ci(e) {
			for (null == e && (e = ct), J && (e -= et); e < 0;) e += me;
			return Math.floor(e % me)
		}

		function Di() {
			var e, t = Ci();
			return e = It ? t : Ae || Se ? Math.ceil((t + 1) * ti / me - 1) : Math.floor(t / Oe), !He && J && ct === ht && (e = ti - 1), e
		}

		function Ei() {
			return l.innerWidth || i.documentElement.clientWidth || i.body.clientWidth
		}

		function Oi(e) {
			return "top" === e ? "afterbegin" : "beforeend"
		}

		function Pi() {
			var e = Te ? 2 * Te - Ce : 0;
			return function e(t) {
				if (null != t) {
					var n, a, r = i.createElement("div");
					return t.appendChild(r), a = (n = r.getBoundingClientRect()).right - n.left, r.remove(), a || e(t.parentNode)
				}
			}(he) - e
		}

		function Yi(t) {
			if (e[t]) return !0;
			if (Z)
				for (var i in Z)
					if (Z[i][t]) return !0;
			return !1
		}

		function Ii(t, i) {
			if (null == i && (i = ge), "items" === t && Ae) return Math.floor((De + Ce) / (Ae + Ce)) || 1;
			var n = e[t];
			if (Z)
				for (var a in Z) i >= parseInt(a) && t in Z[a] && (n = Z[a][t]);
			return "slideBy" === t && "page" === n && (n = Ii("items")), J || "slideBy" !== t && "items" !== t || (n = Math.floor(n)), n
		}

		function ji(e, t, i, n, a) {
			var r = "";
			if (void 0 !== e) {
				var s = e;
				t && (s -= t), r = le ? "margin: 0 " + s + "px 0 " + e + "px;" : "margin: " + e + "px 0 " + s + "px 0;"
			} else if (t && !i) {
				var o = "-" + t + "px";
				r = "margin: 0 " + (le ? o + " 0 0" : "0 " + o + " 0") + ";"
			}
			return !J && a && z && n && (r += zi(n)), r
		}

		function Ni(e, t, i) {
			return e ? (e + t) * tt + "px" : j ? j + "(" + 100 * tt + "% / " + i + ")" : 100 * tt / i + "%"
		}

		function Hi(e, t, i) {
			var n;
			if (e) n = e + t + "px";
			else {
				J || (i = Math.floor(i));
				var a = J ? tt : i;
				n = j ? j + "(100% / " + a + ")" : 100 / a + "%"
			}
			return n = "width:" + n, "inner" !== K ? n + ";" : n + " !important;"
		}

		function Fi(e) {
			var t = "";
			return !1 !== e && (t = (le ? "padding-" : "margin-") + (le ? "right" : "bottom") + ": " + e + "px;"), t
		}

		function Ri(e, t) {
			var i = e.substring(0, e.length - t).toLowerCase();
			return i && (i = "-" + i + "-"), i
		}

		function zi(e) {
			return Ri(z, 18) + "transition-duration:" + e / 1e3 + "s;"
		}

		function Bi(e) {
			return Ri(W, 17) + "animation-duration:" + e / 1e3 + "s;"
		}

		function Wi() {
			if (Yi("autoHeight") || Se || !le) {
				var e = de.querySelectorAll("img");
				f(e, (function(e) {
					var t = e.src;
					Ke || (t && t.indexOf("data:image") < 0 ? (e.src = "", O(e, Bt), g(e, "loading"), e.src = t) : on(e))
				})), t((function() {
					dn(k(e), (function() {
						be = !0
					}))
				})), Yi("autoHeight") && (e = cn(ct, Math.min(ct + Oe - 1, tt - 1))), Ke ? Vi() : t((function() {
					dn(k(e), Vi)
				}))
			} else J && Sn(), Xi(), Ui()
		}

		function Vi() {
			if (Se && 1 < me) {
				var e = He ? ct : me - 1;
				! function t() {
					var i = pe[e].getBoundingClientRect().left,
						n = pe[e - 1].getBoundingClientRect().right;
					Math.abs(i - n) <= 1 ? qi() : setTimeout((function() {
						t()
					}), 16)
				}()
			} else qi()
		}

		function qi() {
			le && !Se || (mn(), Se ? (nt = Mn(), kt && (Mt = Zi()), ht = lt(), Si(_t || Mt)) : Gn()), J && Sn(), Xi(), Ui()
		}

		function Xi() {
			if (gn(), ce.insertAdjacentHTML("afterbegin", '<div class="tns-liveregion tns-visually-hidden" aria-live="polite" aria-atomic="true">slide <span class="current">' + an() + "</span>  of " + me + "</div>"), xe = ce.querySelector(".tns-liveregion .current"), jt) {
				var t = qe ? "stop" : "start";
				mi ? _(mi, {
					"data-action": t
				}) : e.autoplayButtonOutput && (ce.insertAdjacentHTML(Oi(e.autoplayPosition), '<button type="button" data-action="' + t + '">' + vi[0] + t + vi[1] + Ue[0] + "</button>"), mi = ce.querySelector("[data-action]")), mi && O(mi, {
					click: Fn
				}), qe && (Nn(), $e && O(de, Tt), Ge && O(de, Ct))
			}
			if (Yt) {
				if (Qt) _(Qt, {
					"aria-label": "Carousel Pagination"
				}), f(Jt = Qt.children, (function(e, t) {
					_(e, {
						"data-nav": t,
						tabindex: "-1",
						"aria-label": oi + (t + 1),
						"aria-controls": xt
					})
				}));
				else {
					for (var i = "", n = It ? "" : 'style="display:none"', a = 0; a < me; a++) i += '<button type="button" data-nav="' + a + '" tabindex="-1" aria-controls="' + xt + '" ' + n + ' aria-label="' + oi + (a + 1) + '"></button>';
					i = '<div class="tns-nav" aria-label="Carousel Pagination">' + i + "</div>", ce.insertAdjacentHTML(Oi(e.navPosition), i), Qt = ce.querySelector(".tns-nav"), Jt = Qt.children
				}
				if (Kn(), z) {
					var r = z.substring(0, z.length - 18).toLowerCase(),
						s = "transition: all " + je / 1e3 + "s";
					r && (s = "-" + r + "-" + s), d(Ze, "[aria-controls^=" + xt + "-item]", s, h(Ze))
				}
				_(Jt[ai], {
					"aria-label": oi + (ai + 1) + li
				}), w(Jt[ai], "tabindex"), g(Jt[ai], si), O(Qt, At)
			}
			Pt && (Xt || $t && Gt || (ce.insertAdjacentHTML(Oi(e.controlsPosition), '<div class="tns-controls" aria-label="Carousel Navigation" tabindex="0"><button type="button" data-controls="prev" tabindex="-1" aria-controls="' + xt + '">' + ze[0] + '</button><button type="button" data-controls="next" tabindex="-1" aria-controls="' + xt + '">' + ze[1] + "</button></div>"), Xt = ce.querySelector(".tns-controls")), $t && Gt || ($t = Xt.children[0], Gt = Xt.children[1]), e.controlsContainer && _(Xt, {
				"aria-label": "Carousel Navigation",
				tabindex: "0"
			}), (e.controlsContainer || e.prevButton && e.nextButton) && _([$t, Gt], {
				"aria-controls": xt,
				tabindex: "-1"
			}), (e.controlsContainer || e.prevButton && e.nextButton) && (_($t, {
				"data-controls": "prev"
			}), _(Gt, {
				"data-controls": "next"
			})), Vt = yn($t), qt = yn(Gt), _n(), Xt ? O(Xt, St) : (O($t, St), O(Gt, St))), Ji()
		}

		function Ui() {
			if (J && q) {
				var t = {};
				t[q] = En, O(de, t)
			}
			We && O(de, Et, e.preventScrollOnTouch), Ve && O(de, Ot), Ie && O(i, Dt), "inner" === K ? yt.on("outerResized", (function() {
				Gi(), yt.emit("innerLoaded", Jn())
			})) : (Z || Ae || Se || Fe || !le) && O(l, {
				resize: $i
			}), Fe && ("outer" === K ? yt.on("innerLoaded", un) : _t || un()), sn(), _t ? tn() : Mt && en(), yt.on("indexChanged", hn), "inner" === K && yt.emit("innerLoaded", Jn()), "function" == typeof vt && vt(Jn()), ve = !0
		}

		function $i(e) {
			t((function() {
				Gi(zn(e))
			}))
		}

		function Gi(t) {
			if (ve) {
				"outer" === K && yt.emit("outerResized", Jn(t)), ge = Ei();
				var n, a = oe,
					r = !1;
				Z && (Ki(), (n = a !== oe) && yt.emit("newBreakpointStart", Jn(t)));
				var s, o, l, c, u = Oe,
					p = _t,
					m = Mt,
					y = Ie,
					b = Re,
					x = Be,
					_ = We,
					w = Ve,
					k = qe,
					S = $e,
					A = Ge,
					T = ct;
				if (n) {
					var C = Ae,
						D = Fe,
						E = ze,
						Y = Ee,
						I = Ue;
					if (!H) var j = Ce,
						N = Te
				}
				if (Ie = Ii("arrowKeys"), Re = Ii("controls"), Be = Ii("nav"), We = Ii("touch"), Ee = Ii("center"), Ve = Ii("mouseDrag"), qe = Ii("autoplay"), $e = Ii("autoplayHoverPause"), Ge = Ii("autoplayResetOnVisibility"), n && (_t = Ii("disable"), Ae = Ii("fixedWidth"), je = Ii("speed"), Fe = Ii("autoHeight"), ze = Ii("controlsText"), Ue = Ii("autoplayText"), Xe = Ii("autoplayTimeout"), H || (Te = Ii("edgePadding"), Ce = Ii("gutter"))), Si(_t), De = Pi(), le && !Se || _t || (mn(), le || (Gn(), r = !0)), (Ae || Se) && (nt = Mn(), ht = lt()), (n || Ae) && (Oe = Ii("items"), Pe = Ii("slideBy"), (o = Oe !== u) && (Ae || Se || (ht = lt()), Mi())), n && _t !== p && (_t ? tn() : function() {
						if (wt) {
							if (Ze.disabled = !1, de.className += bt, Sn(), He)
								for (var e = et; e--;) J && L(pe[e]), L(pe[tt - e - 1]);
							if (!J)
								for (var t = ct, i = ct + me; t < i; t++) {
									var n = pe[t],
										a = t < ct + Oe ? ie : re;
									n.style.left = 100 * (t - ct) / Oe + "%", g(n, a)
								}
							Qi(), wt = !1
						}
					}()), kt && (n || Ae || Se) && (Mt = Zi()) !== m && (Mt ? (An(Ln(Ti(0))), en()) : (function() {
						if (Lt) {
							if (Te && H && (ue.style.margin = ""), et)
								for (var e = "tns-transparent", t = et; t--;) J && v(pe[t], e), v(pe[tt - t - 1], e);
							Qi(), Lt = !1
						}
					}(), r = !0)), Si(_t || Mt), qe || ($e = Ge = !1), Ie !== y && (Ie ? O(i, Dt) : P(i, Dt)), Re !== b && (Re ? Xt ? L(Xt) : ($t && L($t), Gt && L(Gt)) : Xt ? M(Xt) : ($t && M($t), Gt && M(Gt))), Be !== x && (Be ? (L(Qt), Kn()) : M(Qt)), We !== _ && (We ? O(de, Et, e.preventScrollOnTouch) : P(de, Et)), Ve !== w && (Ve ? O(de, Ot) : P(de, Ot)), qe !== k && (qe ? (mi && L(mi), ui || hi || Nn()) : (mi && M(mi), ui && Hn())), $e !== S && ($e ? O(de, Tt) : P(de, Tt)), Ge !== A && (Ge ? O(i, Ct) : P(i, Ct)), n) {
					if (Ae === C && Ee === Y || (r = !0), Fe !== D && (Fe || (ue.style.height = "")), Re && ze !== E && ($t.innerHTML = ze[0], Gt.innerHTML = ze[1]), mi && Ue !== I) {
						var F = qe ? 1 : 0,
							R = mi.innerHTML,
							z = R.length - I[F].length;
						R.substring(z) === I[F] && (mi.innerHTML = R.substring(0, z) + Ue[F])
					}
				} else Ee && (Ae || Se) && (r = !0);
				if ((o || Ae && !Se) && (ti = Zn(), Kn()), (s = ct !== T) ? (yt.emit("indexChanged", Jn()), r = !0) : o ? s || hn() : (Ae || Se) && (sn(), gn(), nn()), o && !J && function() {
						for (var e = ct + Math.min(me, Oe), t = tt; t--;) {
							var i = pe[t];
							ct <= t && t < e ? (g(i, "tns-moving"), i.style.left = 100 * (t - ct) / Oe + "%", g(i, ie), v(i, re)) : i.style.left && (i.style.left = "", g(i, re), v(i, ie)), v(i, ne)
						}
						setTimeout((function() {
							f(pe, (function(e) {
								v(e, "tns-moving")
							}))
						}), 300)
					}(), !_t && !Mt) {
					if (n && !H && (Te === N && Ce === j || (ue.style.cssText = ji(Te, Ce, Ae, je, Fe)), le)) {
						J && (de.style.width = Ni(Ae, Ce, Oe));
						var B = Hi(Ae, Ce, Oe) + Fi(Ce);
						c = h(l = Ze) - 1, "deleteRule" in l ? l.deleteRule(c) : l.removeRule(c), d(Ze, "#" + xt + " > .tns-item", B, h(Ze))
					}
					Fe && un(), r && (Sn(), ut = ct)
				}
				n && yt.emit("newBreakpointEnd", Jn(t))
			}
		}

		function Zi() {
			if (!Ae && !Se) return me <= (Ee ? Oe - (Oe - 1) / 2 : Oe);
			var e = Ae ? (Ae + Ce) * me : ye[me],
				t = Te ? De + 2 * Te : De + Ce;
			return Ee && (t -= Ae ? (De - Ae) / 2 : (De - (ye[ct + 1] - ye[ct] - Ce)) / 2), e <= t
		}

		function Ki() {
			for (var e in oe = 0, Z)(e = parseInt(e)) <= ge && (oe = e)
		}

		function Ji() {
			!qe && mi && M(mi), !Be && Qt && M(Qt), Re || (Xt ? M(Xt) : ($t && M($t), Gt && M(Gt)))
		}

		function Qi() {
			qe && mi && L(mi), Be && Qt && L(Qt), Re && (Xt ? L(Xt) : ($t && L($t), Gt && L(Gt)))
		}

		function en() {
			if (!Lt) {
				if (Te && (ue.style.margin = "0px"), et)
					for (var e = "tns-transparent", t = et; t--;) J && g(pe[t], e), g(pe[tt - t - 1], e);
				Ji(), Lt = !0
			}
		}

		function tn() {
			if (!wt) {
				if (Ze.disabled = !0, de.className = de.className.replace(bt.substring(1), ""), w(de, ["style"]), He)
					for (var e = et; e--;) J && M(pe[e]), M(pe[tt - e - 1]);
				if (le && J || w(ue, ["style"]), !J)
					for (var t = ct, i = ct + me; t < i; t++) {
						var n = pe[t];
						w(n, ["style"]), v(n, ie), v(n, re)
					}
				Ji(), wt = !0
			}
		}

		function nn() {
			var e = an();
			xe.innerHTML !== e && (xe.innerHTML = e)
		}

		function an() {
			var e = rn(),
				t = e[0] + 1,
				i = e[1] + 1;
			return t === i ? t + "" : t + " to " + i
		}

		function rn(e) {
			null == e && (e = Ln());
			var t, i, n, a = ct;
			if (Ee || Te ? (Se || Ae) && (i = -(parseFloat(e) + Te), n = i + De + 2 * Te) : Se && (i = ye[ct], n = i + De), Se) ye.forEach((function(e, r) {
				r < tt && ((Ee || Te) && e <= i + .5 && (a = r), .5 <= n - e && (t = r))
			}));
			else {
				if (Ae) {
					var r = Ae + Ce;
					Ee || Te ? (a = Math.floor(i / r), t = Math.ceil(n / r - 1)) : t = a + Math.ceil(De / r) - 1
				} else if (Ee || Te) {
					var s = Oe - 1;
					if (Ee ? (a -= s / 2, t = ct + s / 2) : t = ct + s, Te) {
						var o = Te * Oe / De;
						a -= o, t += o
					}
					a = Math.floor(a), t = Math.ceil(t)
				} else t = a + Oe - 1;
				a = Math.max(a, 0), t = Math.min(t, tt - 1)
			}
			return [a, t]
		}

		function sn() {
			if (Ke && !_t) {
				var e = rn();
				e.push(Je), cn.apply(null, e).forEach((function(e) {
					if (!m(e, zt)) {
						var t = {};
						t[q] = function(e) {
							e.stopPropagation()
						}, O(e, t), O(e, Bt), e.src = b(e, "data-src");
						var i = b(e, "data-srcset");
						i && (e.srcset = i), g(e, "loading")
					}
				}))
			}
		}

		function on(e) {
			g(e, "loaded"), ln(e)
		}

		function ln(e) {
			g(e, zt), v(e, "loading"), P(e, Bt)
		}

		function cn(e, t, i) {
			var n = [];
			for (i || (i = "img"); e <= t;) f(pe[e].querySelectorAll(i), (function(e) {
				n.push(e)
			})), e++;
			return n
		}

		function un() {
			var e = cn.apply(null, rn());
			t((function() {
				dn(e, pn)
			}))
		}

		function dn(e, i) {
			return be ? i() : (e.forEach((function(t, i) {
				!Ke && t.complete && ln(t), m(t, zt) && e.splice(i, 1)
			})), e.length ? void t((function() {
				dn(e, i)
			})) : i())
		}

		function hn() {
			sn(), gn(), nn(), _n(),
				function() {
					if (Be && (ai = 0 <= ni ? ni : Di(), ni = -1, ai !== ri)) {
						var e = Jt[ri],
							t = Jt[ai];
						_(e, {
							tabindex: "-1",
							"aria-label": oi + (ri + 1)
						}), v(e, si), _(t, {
							"aria-label": oi + (ai + 1) + li
						}), w(t, "tabindex"), g(t, si), ri = ai
					}
				}()
		}

		function fn(e, t) {
			for (var i = [], n = e, a = Math.min(e + t, tt); n < a; n++) i.push(pe[n].offsetHeight);
			return Math.max.apply(null, i)
		}

		function pn() {
			var e = Fe ? fn(ct, Oe) : fn(et, me),
				t = se || ue;
			t.style.height !== e && (t.style.height = e + "px")
		}

		function mn() {
			ye = [0];
			var e = le ? "left" : "top",
				t = le ? "right" : "bottom",
				i = pe[0].getBoundingClientRect()[e];
			f(pe, (function(n, a) {
				a && ye.push(n.getBoundingClientRect()[e] - i), a === tt - 1 && ye.push(n.getBoundingClientRect()[t] - i)
			}))
		}

		function gn() {
			var e = rn(),
				t = e[0],
				i = e[1];
			f(pe, (function(e, n) {
				t <= n && n <= i ? y(e, "aria-hidden") && (w(e, ["aria-hidden", "tabindex"]), g(e, Ft)) : y(e, "aria-hidden") || (_(e, {
					"aria-hidden": "true",
					tabindex: "-1"
				}), v(e, Ft))
			}))
		}

		function vn(e) {
			return e.nodeName.toLowerCase()
		}

		function yn(e) {
			return "button" === vn(e)
		}

		function bn(e) {
			return "true" === e.getAttribute("aria-disabled")
		}

		function xn(e, t, i) {
			e ? t.disabled = i : t.setAttribute("aria-disabled", i.toString())
		}

		function _n() {
			if (Re && !Ne && !He) {
				var e = Vt ? $t.disabled : bn($t),
					t = qt ? Gt.disabled : bn(Gt),
					i = ct <= dt,
					n = !Ne && ht <= ct;
				i && !e && xn(Vt, $t, !0), !i && e && xn(Vt, $t, !1), n && !t && xn(qt, Gt, !0), !n && t && xn(qt, Gt, !1)
			}
		}

		function wn(e, t) {
			z && (e.style[z] = t)
		}

		function kn(e) {
			return null == e && (e = ct), Se ? (De - (Te ? Ce : 0) - (ye[e + 1] - ye[e] - Ce)) / 2 : Ae ? (De - Ae) / 2 : (Oe - 1) / 2
		}

		function Mn() {
			var e = De + (Te ? Ce : 0) - (Ae ? (Ae + Ce) * tt : ye[tt]);
			return Ee && !He && (e = Ae ? -(Ae + Ce) * (tt - 1) - kn() : kn(tt - 1) - ye[tt - 1]), 0 < e && (e = 0), e
		}

		function Ln(e) {
			var t;
			if (null == e && (e = ct), le && !Se)
				if (Ae) t = -(Ae + Ce) * e, Ee && (t += kn());
				else {
					var i = F ? tt : Oe;
					Ee && (e -= kn()), t = 100 * -e / i
				}
			else t = -ye[e], Ee && Se && (t += kn());
			return it && (t = Math.max(t, nt)), t + (!le || Se || Ae ? "px" : "%")
		}

		function Sn(e) {
			wn(de, "0s"), An(e)
		}

		function An(e) {
			null == e && (e = Ln()), de.style[rt] = st + e + ot
		}

		function Tn(e, t, i, n) {
			var a = e + Oe;
			He || (a = Math.min(a, tt));
			for (var r = e; r < a; r++) {
				var s = pe[r];
				n || (s.style.left = 100 * (r - ct) / Oe + "%"), ae && B && (s.style[B] = s.style[V] = ae * (r - e) / 1e3 + "s"), v(s, t), g(s, i), n && Qe.push(s)
			}
		}

		function Cn(e, t) {
			at && Mi(), (ct !== ut || t) && (yt.emit("indexChanged", Jn()), yt.emit("transitionStart", Jn()), Fe && un(), ui && e && 0 <= ["click", "keydown"].indexOf(e.type) && Hn(), gt = !0, Li())
		}

		function Dn(e) {
			return e.toLowerCase().replace(/-/g, "")
		}

		function En(e) {
			if (J || gt) {
				if (yt.emit("transitionEnd", Jn(e)), !J && 0 < Qe.length)
					for (var t = 0; t < Qe.length; t++) {
						var i = Qe[t];
						i.style.left = "", V && B && (i.style[V] = "", i.style[B] = ""), v(i, ne), g(i, re)
					}
				if (!e || !J && e.target.parentNode === de || e.target === de && Dn(e.propertyName) === Dn(rt)) {
					if (!at) {
						var n = ct;
						Mi(), ct !== n && (yt.emit("indexChanged", Jn()), Sn())
					}
					"inner" === K && yt.emit("innerLoaded", Jn()), gt = !1, ut = ct
				}
			}
		}

		function On(e, t) {
			if (!Mt)
				if ("prev" === e) Pn(t, -1);
				else if ("next" === e) Pn(t, 1);
			else {
				if (gt) {
					if (ft) return;
					En()
				}
				var i = Ci(),
					n = 0;
				if ("first" === e ? n = -i : "last" === e ? n = J ? me - Oe - i : me - 1 - i : ("number" != typeof e && (e = parseInt(e)), isNaN(e) || (t || (e = Math.max(0, Math.min(me - 1, e))), n = e - i)), !J && n && Math.abs(n) < Oe) {
					var a = 0 < n ? 1 : -1;
					n += dt <= ct + n - me ? me * a : 2 * me * a * -1
				}
				ct += n, J && He && (ct < dt && (ct += me), ht < ct && (ct -= me)), Ci(ct) !== Ci(ut) && Cn(t)
			}
		}

		function Pn(e, t) {
			if (gt) {
				if (ft) return;
				En()
			}
			var i;
			if (!t) {
				for (var n = Bn(e = zn(e)); n !== Xt && [$t, Gt].indexOf(n) < 0;) n = n.parentNode;
				var a = [$t, Gt].indexOf(n);
				0 <= a && (i = !0, t = 0 === a ? -1 : 1)
			}
			if (Ne) {
				if (ct === dt && -1 === t) return void On("last", e);
				if (ct === ht && 1 === t) return void On("first", e)
			}
			t && (ct += Pe * t, Se && (ct = Math.floor(ct)), Cn(i || e && "keydown" === e.type ? e : null))
		}

		function Yn() {
			ci = setInterval((function() {
				Pn(null, pi)
			}), Xe), ui = !0
		}

		function In() {
			clearInterval(ci), ui = !1
		}

		function jn(e, t) {
			_(mi, {
				"data-action": e
			}), mi.innerHTML = vi[0] + e + vi[1] + t
		}

		function Nn() {
			Yn(), mi && jn("stop", Ue[1])
		}

		function Hn() {
			In(), mi && jn("start", Ue[0])
		}

		function Fn() {
			ui ? (Hn(), hi = !0) : (Nn(), hi = !1)
		}

		function Rn(e) {
			e.focus()
		}

		function zn(e) {
			return Wn(e = e || l.event) ? e.changedTouches[0] : e
		}

		function Bn(e) {
			return e.target || l.event.srcElement
		}

		function Wn(e) {
			return 0 <= e.type.indexOf("touch")
		}

		function Vn(e) {
			e.preventDefault ? e.preventDefault() : e.returnValue = !1
		}

		function qn() {
			return r = _i.y - xi.y, s = _i.x - xi.x, t = Math.atan2(r, s) * (180 / Math.PI), n = !1, 90 - (i = pt) <= (a = Math.abs(90 - Math.abs(t))) ? n = "horizontal" : a <= i && (n = "vertical"), n === e.axis;
			var t, i, n, a, r, s
		}

		function Xn(e) {
			if (gt) {
				if (ft) return;
				En()
			}
			qe && ui && In(), wi = !0, bi && (n(bi), bi = null);
			var t = zn(e);
			yt.emit(Wn(e) ? "touchStart" : "dragStart", Jn(e)), !Wn(e) && 0 <= ["img", "a"].indexOf(vn(Bn(e))) && Vn(e), _i.x = xi.x = t.clientX, _i.y = xi.y = t.clientY, J && (yi = parseFloat(de.style[rt].replace(st, "")), wn(de, "0s"))
		}

		function Un(e) {
			if (wi) {
				var i = zn(e);
				_i.x = i.clientX, _i.y = i.clientY, J ? bi || (bi = t((function() {
					! function e(i) {
						if (mt) {
							if (n(bi), wi && (bi = t((function() {
									e(i)
								}))), "?" === mt && (mt = qn()), mt) {
								!Wt && Wn(i) && (Wt = !0);
								try {
									i.type && yt.emit(Wn(i) ? "touchMove" : "dragMove", Jn(i))
								} catch (e) {}
								var a = yi,
									r = ki(_i, xi);
								if (!le || Ae || Se) a += r, a += "px";
								else a += F ? r * Oe * 100 / ((De + Ce) * tt) : 100 * r / (De + Ce), a += "%";
								de.style[rt] = st + a + ot
							}
						} else wi = !1
					}(e)
				}))) : ("?" === mt && (mt = qn()), mt && (Wt = !0)), ("boolean" != typeof e.cancelable || e.cancelable) && Wt && e.preventDefault()
			}
		}

		function $n(i) {
			if (wi) {
				bi && (n(bi), bi = null), J && wn(de, ""), wi = !1;
				var a = zn(i);
				_i.x = a.clientX, _i.y = a.clientY;
				var r = ki(_i, xi);
				if (Math.abs(r)) {
					if (!Wn(i)) {
						var s = Bn(i);
						O(s, {
							click: function e(t) {
								Vn(t), P(s, {
									click: e
								})
							}
						})
					}
					J ? bi = t((function() {
						if (le && !Se) {
							var e = -r * Oe / (De + Ce);
							e = 0 < r ? Math.floor(e) : Math.ceil(e), ct += e
						} else {
							var t = -(yi + r);
							if (t <= 0) ct = dt;
							else if (t >= ye[tt - 1]) ct = ht;
							else
								for (var n = 0; n < tt && t >= ye[n];) t > ye[ct = n] && r < 0 && (ct += 1), n++
						}
						Cn(i, r), yt.emit(Wn(i) ? "touchEnd" : "dragEnd", Jn(i))
					})) : mt && Pn(i, 0 < r ? -1 : 1)
				}
			}
			"auto" === e.preventScrollOnTouch && (Wt = !1), pt && (mt = "?"), qe && !ui && Yn()
		}

		function Gn() {
			(se || ue).style.height = ye[ct + Oe] - ye[ct] + "px"
		}

		function Zn() {
			var e = Ae ? (Ae + Ce) * me / De : me / Oe;
			return Math.min(Math.ceil(e), me)
		}

		function Kn() {
			if (Be && !It && ti !== ii) {
				var e = ii,
					t = ti,
					i = L;
				for (ti < ii && (e = ti, t = ii, i = M); e < t;) i(Jt[e]), e++;
				ii = ti
			}
		}

		function Jn(e) {
			return {
				container: de,
				slideItems: pe,
				navContainer: Qt,
				navItems: Jt,
				controlsContainer: Xt,
				hasControls: Pt,
				prevButton: $t,
				nextButton: Gt,
				items: Oe,
				slideBy: Pe,
				cloneCount: et,
				slideCount: me,
				slideCountNew: tt,
				index: ct,
				indexCached: ut,
				displayIndex: Ai(),
				navCurrentIndex: ai,
				navCurrentIndexCached: ri,
				pages: ti,
				pagesCached: ii,
				sheet: Ze,
				isOn: ve,
				event: e || {}
			}
		}
		U && console.warn("No slides found in", e.container)
	};
	return I
}();