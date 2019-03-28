'use strict';
var _createClass = function () {
	function a(b, c) {
		for (var f, d = 0; d < c.length; d++) f = c[d], f.enumerable = f.enumerable || !1, f.configurable = !0, 'value' in f && (f.writable = !0), Object.defineProperty(b, f.key, f)
	}
	return function (b, c, d) {
		return c && a(b.prototype, c), d && a(b, d), b
	}
}();

function _classCallCheck(a, b) {
	if (!(a instanceof b)) throw new TypeError('Cannot call a class as a function')
}
'function' != typeof Object.assign && (Object.assign = function (a) {
	'use strict';
	if (null === a) throw new TypeError('Cannot convert undefined or null to object');
	for (var f, c = Object(a), d = 1; d < arguments.length; d++)
		if (f = arguments[d], null !== f)
			for (var g in f) Object.prototype.hasOwnProperty.call(f, g) && (c[g] = f[g]);
	return c
});
var MegaMenu = function () {
		function a(b) {
			_classCallCheck(this, a), (!b instanceof HTMLElement || !b.dataset.menu) && this.exit('Constructor must be an instance of HTMLElement.'), Object.assign(this, {
				node: b,
				label: b.dataset.menu,
				enabled: !0
			}), this.initChildNodes(), this.initMenuOpenEvents()
		}
		return _createClass(a, [{
			key: 'closeChildren',
			value: function closeChildren() {
				for (var b = this.node.getElementsByTagName('li'), c = 0; c < b.length; c++) b[c].classList.remove('toggled'), b[c].removeAttribute('disabled')
			}
		}, {
			key: 'currentActiveDropdown',
			value: function currentActiveDropdown() {
				var b = this.node.querySelector('li.toggled');
				return !!b && b.dataset.menuDropdown
			}
		}, {
			key: 'menuOpen',
			value: function menuOpen() {
				return this.node.classList.contains('toggled')
			}
		}, {
			key: 'close',
			value: function close() {
				for (var b = document.querySelectorAll('[data-menu-toggle^="' + this.label + '"]'), c = 0; c < b.length; c++) b[c].removeAttribute('disabled');
				this.node.classList.remove('toggled'), this.closeChildren()
			}
		}, {
			key: 'closeOther',
			value: function closeOther() {
				for (var b = document.querySelectorAll('[data-menu]'), c = 0; c < b.length; c++) this.currentActive !== b[c].getAttribute('data-menu') && b[c].classList.remove('toggled');
				for (var d = document.querySelectorAll('[data-menu-toggle]'), f = 0; f < d.length; f++) d[f].classList.remove('active')
			}
		}, {
			key: 'open',
			value: function open() {
				this.node.classList.add('toggled')
			}
		}, {
			key: 'initChildNodes',
			value: function initChildNodes() {
				for (var b = 0; b < this.node.children.length; b++)(function (c) {
					var f = this;
					if ('undefined' != typeof c.dataset.menuDropdown) {
						var d = c.querySelector(' [ data-menu-close ] ');
						d.addEventListener('click', function () {
							f.enabled && c.classList.toggle('toggled')
						})
					}
				}).call(this, this.node.children[b])
			}
		}, {
			key: 'initMenuOpenEvents',
			value: function initMenuOpenEvents() {
				for (var b = document.querySelectorAll('[data-menu-toggle^="' + this.label + '"]'), c = 0; c < b.length; c++)(function (d) {
					var l = this,
						f = d.dataset.menuToggle,
						g = f.indexOf('@'),
						h = f.substr(g + 1),
						j = this.node.querySelector('[data-menu-dropdown="' + h + '"]');
					d.addEventListener('click', function () {
						if (l.currentActive = l.label, l.enabled) {
							l.closeOther();
							var m; - 1 === g ? m = l.node.classList.toggle('toggled') : h == l.currentActiveDropdown() && l.menuOpen() ? (l.close(), m = !1) : (l.open(), m = !0);
							for (var n = 0; n < b.length; n++)
								if (!m) {
									b[n].removeAttribute('disabled'), b[n].classList.remove('active');
									continue
								} else {
									if (b[n].dataset.menuToggle !== f) {
										b[n].setAttribute('disabled', !0);
										continue
									}
									b[n].classList.add('active'), b[n].removeAttribute('disabled')
								}
							l.closeChildren()
						}
					}), -1 !== g && j && d.addEventListener('click', function () {
						l.enabled && j.classList.add('toggled')
					})
				}).call(this, b[c])
			}
		}, {
			key: 'exit',
			value: function exit() {
				var b = 0 < arguments.length && void 0 !== arguments[0] ? arguments[0] : 'Exiting MegaMenu';
				throw new Error(b)
			}
		}], [{
			key: 'init',
			value: function init(b) {
				return new this(b)
			}
		}, {
			key: 'initAll',
			value: function initAll() {
				for (var b = document.querySelectorAll('[data-menu]'), c = [], d = 0; d < b.length; d++) c.push(this.init(b[d]));
				return c
			}
		}]), a
	}(),
	MegaSearch = function () {
		var a = {
			currentType: 'cars',
			currentMake: null,
			currentModel: null,
			landing: null,
			vehicle_count_enabled: 0
		};
		return function b() {
			var c = function (f, g) {
				var h = new XMLHttpRequest;
				h.onreadystatechange = function () {
					if (4 === h.readyState)
						if (200 === h.status) try {
							var j = JSON.parse(h.responseText);
							g(j)
						} catch (l) {
							if (!0 == l instanceof SyntaxError) throw new Error('MegaSearch (Error): Invalid aJax response, likely issue with JSON');
							else throw new Error('MegaSearch (Error): Unhandled exception from aJax call: ' + l)
						} else throw new Error('MegaSearch Error: aJax request failed, file doesn\'t exist!')
				}.bind(this), h.open('GET', f), h.send()
			};
			this.init = function () {
				var f = document.querySelectorAll('[data-search-toggle]'),
					g = document.querySelector('[data-search-make]'),
					h = document.querySelector('[data-search-model]'),
					j = document.querySelector('[data-search-submit]'),
					l = function (o) {
						var p = document.createElement('option');
						return p.value = '', p.innerHTML = 'Any ' + o, p
					};
				if (void 0 !== document.getElementsByName('website_type')[0] && (a.currentType = document.getElementsByName('website_type')[0].value + 's'), 0 < f.length && (a.currentType = f[0].value), this.form = document.querySelectorAll('[data-search]')[0], this.form.classList.add(a.currentType), 0 === document.getElementsByName('landing_pages_enabled').length) throw new Error('MegaSearch (Error): Landing pages toggle not set!');
				a.landing = parseInt(document.getElementsByName('landing_pages_enabled')[0].value);
				for (var m = function (o) {
						var p = this;
						g.innerHTML = h.innerHTML = '', g.appendChild(l('make')), h.appendChild(l('model')), a.currentMake = a.currentModel = null;
						var q = '/ajax/getVehicleMakesOrModels.php?vehicle_type=' + f[o].value;
						p.form.classList.remove(a.currentType), a.currentType = f[o].value, p.form.classList.add(a.currentType), c(q, function (r) {
							void 0 !== r.make_count_enabled && (a.vehicle_count_enabled = parseInt(r.make_count_enabled));
							for (var t, s = 0; s < r.results.length; s++) t = document.createElement('option'), t.innerHTML = r.results[s].make + (a.vehicle_count_enabled ? ' (' + r.results[s].vehicle_count + ')' : ''), t.setAttribute('value', r.results[s].make_value), g.appendChild(t)
						})
					}.bind(this), n = 0; n < f.length; n++)(function (o) {
					f[o].addEventListener('click', function () {
						m(o)
					})
				})(n);
				g.addEventListener('change', function (o) {
					var p = o.target[o.target.selectedIndex];
					if (h.innerHTML = '', 0 === o.target.selectedIndex) return h.appendChild(l('model')), void(a.currentMake = a.currentModel = null);
					var q = '/ajax/getVehicleMakesOrModels.php?vehicle_type=' + a.currentType + '&make=' + p.value;
					a.currentMake = p, c(q, function (r) {
						void 0 !== r.make_count_enabled && (a.vehicle_count_enabled = parseInt(r.make_count_enabled)), h.appendChild(l('model'));
						for (var t, s = 0; s < r.results.length; s++) t = document.createElement('option'), t.innerHTML = r.results[s].model + (a.vehicle_count_enabled ? ' (' + r.results[s].vehicle_count + ')' : ''), t.setAttribute('value', r.results[s].model_value), h.appendChild(t)
					})
				}), h.addEventListener('change', function (o) {
					var p = o.target[o.target.selectedIndex];
					return 0 === o.target.selectedIndex ? void(a.currentModel = null) : void(a.currentModel = p)
				}), j.disabled = !1, j.addEventListener('click', function (o) {
					o.preventDefault();
					var p = '/used-' + a.currentType,
						q = function (r) {
							var s = r;
							return s = s.split(/\040\([^)]*\)/g)[0], s = s.replace(/ /g, '-'), s = s.toLowerCase(), s
						};
					1 === a.landing ? (null !== a.currentMake && (p = '/used/' + q(a.currentType) + '/' + q(a.currentMake.innerHTML)), null !== a.currentModel && (p += '/' + q(a.currentModel.innerHTML))) : (p = 'search_page.php', null !== a.currentMake && (p += '?make=' + q(a.currentMake.value)), null !== a.currentModel && (p += '&model=' + q(a.currentModel.value))), window.location.href = p
				})
			}
		}
	}();
new MegaSearch().init();
var instances = MegaMenu.initAll(),
	iOS = /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream,
	iw = iOS ? screen.width : window.innerWidth;
instances.forEach(function (a) {
	return a.enabled = iw < megamenu_options.breakpoint
}), window.addEventListener('resize', function () {
	iw = iOS ? screen.width : window.innerWidth, instances.forEach(function (a) {
		a.enabled = iw < megamenu_options.breakpoint, a.enabled || a.close()
	})
}), window.addEventListener('orientationchange', function () {
	iw = iOS ? screen.width : window.innerWidth, instances.forEach(function (a) {
		a.enabled = iw < megamenu_options.breakpoint, a.enabled || a.close()
	})
});