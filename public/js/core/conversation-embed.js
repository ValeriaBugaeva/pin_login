!(function (e) {
    var t = {};
    function n(i) {
        if (t[i]) return t[i].exports;
        var s = (t[i] = { i: i, l: !1, exports: {} });
        e[i].call(s.exports, s, s.exports, n);
        s.l = !0;
        return s.exports;
    }
    var i = [
        {
            name: "head-dlb/bundle.production.js",
            path: "head-dlb/static-1.112/bundle.production.js",
            ids: {},
        },
    ];
    n.dlbpr = function (e, t) {
        var s = i[e];
        if (!s.r) {
            s.r = window["__webpack_require_" + s.name + "__"];
            if (!s.r) throw new Error("dlb " + s.name + " not loaded");
            s.r.linkDlb(n, s.ids);
        }
        return s.r(t);
    };
    n.m = e;
    n.c = t;
    n.d = function (e, t, i) {
        n.o(e, t) || Object.defineProperty(e, t, { enumerable: !0, get: i });
    };
    n.r = function (e) {
        "undefined" != typeof Symbol &&
            Symbol.toStringTag &&
            Object.defineProperty(e, Symbol.toStringTag, { value: "Module" });
        Object.defineProperty(e, "__esModule", { value: !0 });
    };
    n.t = function (e, t) {
        1 & t && (e = n(e));
        if (8 & t) return e;
        if (4 & t && "object" == typeof e && e && e.__esModule) return e;
        var i = Object.create(null);
        n.r(i);
        Object.defineProperty(i, "default", { enumerable: !0, value: e });
        if (2 & t && "string" != typeof e)
            for (var s in e)
                n.d(
                    i,
                    s,
                    function (t) {
                        return e[t];
                    }.bind(null, s)
                );
        return i;
    };
    n.n = function (e) {
        var t =
            e && e.__esModule
                ? function () {
                      return e.default;
                  }
                : function () {
                      return e;
                  };
        n.d(t, "a", t);
        return t;
    };
    n.o = function (e, t) {
        return Object.prototype.hasOwnProperty.call(e, t);
    };
    n.p = "//static.hsappstatic.net/conversations-embed/static-1.8635/";
    n((n.s = 0));
})([
    function (e, t, n) {
        "use strict";
        "use es6";
        var i = n(1);
        (0, n(87).markStartPreDelay)();
        var s = function e() {
            (0, i.startOnceReady)();
            document.removeEventListener("DOMContentLoaded", e);
        };
        "loading" === document.readyState
            ? document.addEventListener("DOMContentLoaded", s)
            : (0, i.startOnceReady)();
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.startOnceReady = b;
        var i = n(2),
            s = n(51),
            r = n(88),
            o = n(90),
            a = n(112),
            u = n(40),
            c = n(32),
            l = n(33),
            d = g(n(43)),
            f = n(41),
            h = g(n(42)),
            v = n(113),
            p = n(100);
        function g(e) {
            return e && e.__esModule ? e : { default: e };
        }
        var m = function () {
            console.warn(
                "loadImmediately is set to false and widget.load() has not been called on window." +
                    l.GLOBAL_VARIABLE +
                    " yet. Please call widget.load() first or set loadImmediately on window." +
                    l.SETTINGS_VARIABLE +
                    " to true."
            );
        };
        function _(e) {
            var t = (0, o.createEmbedScriptContext)(),
                n = new i.WidgetShell(t, e);
            if (window.hubspot_live_messages_running)
                (0, s.warn)("duplicate instance of live chat exists on page");
            else {
                window.hubspot_live_messages_running = !0;
                n.start();
            }
            return n;
        }
        function E() {
            (0, r.loadWidgetCss)(document);
            if ((0, c.getExternalApiSettings)().loadImmediately) _();
            else {
                var e = new d.default(),
                    t = new h.default();
                (0, u.setupExternalApi)({
                    debug: m,
                    on: e.on,
                    off: e.off,
                    clear: m,
                    resetAndReloadWidget: m,
                    widget: {
                        load: function () {
                            _(e).loadWidget();
                        },
                        remove: m,
                        open: m,
                        close: m,
                        refresh: m,
                        status: function () {
                            return { loaded: !1 };
                        },
                    },
                });
                (0, f.flushOnReadyCallbacks)({ logger: t });
            }
        }
        function b() {
            if ((0, a.hasRequiredFeatures)(window)) {
                var e = new v.ErrorLogger();
                (0, p.getIsLocal)()
                    ? E()
                    : e.captureErrors(function () {
                          E();
                      });
            }
        }
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.WidgetShell = void 0;
        var i = n(3),
            s = n(5),
            r = n(6),
            o = n(7),
            a = n(11),
            u = X(n(12)),
            c = n(14),
            l = n(15),
            d = n(17),
            f = X(n(16)),
            h = n(18),
            v = n(21),
            p = n(22),
            g = n(23),
            m = n(24),
            _ = n(25),
            E = n(29),
            b = n(38),
            I = n(39),
            T = n(40),
            O = n(41),
            y = X(n(42)),
            S = X(n(43)),
            A = n(49),
            k = n(50),
            M = n(53),
            P = n(54),
            C = n(55),
            w = n(31),
            R = X(n(57)),
            L = X(n(62)),
            N = n(63),
            D = n(65),
            x = n(67),
            U = n(68),
            W = n(20),
            j = n(70),
            H = n(71),
            F = n(73),
            G = n(76),
            B = n(77),
            q = n(78),
            K = n(79),
            V = n(83),
            Y = n(84),
            z = n(85);
        function X(e) {
            return e && e.__esModule ? e : { default: e };
        }
        function Q() {
            return (Q =
                Object.assign ||
                function (e) {
                    for (var t = 1; t < arguments.length; t++) {
                        var n = arguments[t];
                        for (var i in n)
                            Object.prototype.hasOwnProperty.call(n, i) &&
                                (e[i] = n[i]);
                    }
                    return e;
                }).apply(this, arguments);
        }
        function Z(e, t, n) {
            t in e
                ? Object.defineProperty(e, t, {
                      value: n,
                      enumerable: !0,
                      configurable: !0,
                      writable: !0,
                  })
                : (e[t] = n);
            return e;
        }
        function J(e, t) {
            if (!(e instanceof t))
                throw new TypeError("Cannot call a class as a function");
        }
        function $(e, t) {
            for (var n = 0; n < t.length; n++) {
                var i = t[n];
                i.enumerable = i.enumerable || !1;
                i.configurable = !0;
                "value" in i && (i.writable = !0);
                Object.defineProperty(e, i.key, i);
            }
        }
        function ee(e, t, n) {
            t && $(e.prototype, t);
            n && $(e, n);
            return e;
        }
        var te = "help-widget",
            ne = (function () {
                function e(t, n) {
                    var r,
                        c = this;
                    J(this, e);
                    this.loadIFrame = function () {
                        (0, i.isAnyMobile)() &&
                            document.documentElement.classList.add(v.MOBILE);
                        var e = document.createElement("iframe");
                        c.iframeSrc = c.embedScriptContext.getIFrameSrc();
                        e.src = c.iframeSrc;
                        e.title = "chat widget";
                        e.addEventListener("load", c.handleIframeLoad);
                        e.allowFullscreen = !0;
                        if ((0, w.shouldEmbedInline)()) {
                            var t = document.querySelector(
                                (0, w.getInlineEmbedSelector)()
                            );
                            if (!t) {
                                c.devLogger.error(
                                    "cannot embed widget - element at `" +
                                        (0, w.getInlineEmbedSelector)() +
                                        "` cannot be found"
                                );
                                return;
                            }
                            var n = document.createElement("div");
                            n.id = b.INLINE_PARENT_ID;
                            e.id = b.INLINE_IFRAME_ID;
                            n.appendChild(e);
                            t.appendChild(n);
                        } else {
                            if (!document.getElementById(b.PARENT_ID)) {
                                var s = document.createElement("div");
                                s.id = b.PARENT_ID;
                                var r = document.createElement("div");
                                r.className = v.SHADOW_CONTAINER;
                                var o = (0, m.isEmbeddedInProduct)(
                                    c.embedScriptContext
                                );
                                if (o) {
                                    s.classList.add(v.INTERNAL);
                                    r.classList.add(v.INTERNAL);
                                }
                                s.appendChild(r);
                                o && (e.id = te);
                                s.appendChild(e);
                                document.body.appendChild(s);
                                o && (0, I.adjustPositionIfZorsePresent)();
                            }
                            c.setFrameClass();
                        }
                    };
                    this.setWidgetData = function (e) {
                        c.widgetData = e;
                        c.setFrameClass();
                    };
                    this.embedScriptContext = t;
                    this.isOpen = (0, E.shouldWidgetStartOpen)();
                    this.widgetData = null;
                    this.iframeSrc = null;
                    this.hasLoadedIframe = !1;
                    this.requestWidgetOpen = this.requestWidgetOpen.bind(this);
                    this.requestWidgetClose = this.requestWidgetClose.bind(
                        this
                    );
                    this.requestWidgetRefresh = (0, P.throttle)(
                        this.requestWidgetRefresh.bind(this),
                        1e3
                    );
                    this.handleWindowResize = this.handleWindowResize.bind(
                        this
                    );
                    this.handleIframeLoad = this.handleIframeLoad.bind(this);
                    this.handleResizeMessage = this.handleResizeMessage.bind(
                        this
                    );
                    this.handleOpenChange = this.handleOpenChange.bind(this);
                    this.handleStoreMessagesCookie = this.handleStoreMessagesCookie.bind(
                        this
                    );
                    this.handleRequestWidget = this.handleRequestWidget.bind(
                        this
                    );
                    this.handleWidgetRefresh = this.handleWidgetRefresh.bind(
                        this
                    );
                    this.removeIframe = this.removeIframe.bind(this);
                    this.handleExternalApiEventMessage = this.handleExternalApiEventMessage.bind(
                        this
                    );
                    this.loadWidget = (0, P.throttle)(
                        this.loadWidget.bind(this),
                        1e3
                    );
                    this.resetAndReloadWidget = this.resetAndReloadWidget.bind(
                        this
                    );
                    this.setWidgetOpenCookie = this.setWidgetOpenCookie.bind(
                        this
                    );
                    this.getStatus = this.getStatus.bind(this);
                    this.handleScroll = this.handleScroll.bind(this);
                    this.handleExitIntent = this.handleExitIntent.bind(this);
                    this.extendedClearCookiesFunction = this.extendedClearCookiesFunction.bind(
                        this
                    );
                    this.openToNewThread = this.openToNewThread.bind(this);
                    this.devLogger = new y.default();
                    this.eventEmitter = n || new S.default();
                    this.scrollPercentageTracker = new R.default({
                        onScroll: this.handleScroll,
                    });
                    this.exitIntentTracker = new L.default({
                        onExitIntent: this.handleExitIntent,
                    });
                    this.iframeMessage = (0, K.iframeMessagePool)({
                        iframeSrc: this.embedScriptContext.getIFrameSrc(),
                    });
                    this.apiUsageTracker = new j.ApiUsageTracker({
                        postMessageToIframe: this.iframeMessage.post,
                    });
                    var l = new H.PostMessageApiClient(this.iframeMessage.post),
                        d = new u.default();
                    this.postMessageReceiver = new o.PostMessageReceiver(
                        (Z(
                            (r = {}),
                            a.SHOW_PAGE_TITLE_NOTIFICATION,
                            d.handleShow
                        ),
                        Z(r, a.CLEAR_PAGE_TITLE_NOTIFICATION, d.handleClear),
                        Z(r, s.REQUEST_WIDGET, this.handleRequestWidget),
                        Z(r, s.IFRAME_RESIZE, this.handleResizeMessage),
                        Z(r, s.OPEN_CHANGE, this.handleOpenChange),
                        Z(r, s.CLOSED_WELCOME_MESSAGE, V.hideWelcomeMessage),
                        Z(
                            r,
                            s.STORE_MESSAGES_COOKIE,
                            this.handleStoreMessagesCookie
                        ),
                        Z(
                            r,
                            s.EXTERNAL_API_EVENT,
                            this.handleExternalApiEventMessage
                        ),
                        Z(r, s.API_REQUEST, l.makeApiRequest),
                        r),
                        {
                            allowedOrigin: this.embedScriptContext.getIFrameDomain(),
                            iframeUuid: this.embedScriptContext.iframeUuid,
                        }
                    );
                    this.exitIntentTracker.registerPostMessageReceivers(
                        this.postMessageReceiver
                    );
                    this.scrollPercentageTracker.registerPostMessageReceivers(
                        this.postMessageReceiver
                    );
                }
                ee(e, [
                    {
                        key: "handleExternalApiEventMessage",
                        value: function (e) {
                            (0, A.handleExternalApiEventMessage)(e, {
                                eventEmitter: this.eventEmitter,
                            });
                        },
                    },
                    {
                        key: "handleScroll",
                        value: function (e) {
                            var t = e.scrollPercentage;
                            this.iframeMessage.post(
                                r.SCROLL_PERCENTAGE_CHANGE,
                                { scrollPercentage: t }
                            );
                        },
                    },
                    {
                        key: "handleExitIntent",
                        value: function () {
                            this.iframeMessage.post(r.EXIT_INTENT);
                        },
                    },
                    {
                        key: "getStatus",
                        value: function () {
                            return { loaded: this.hasLoadedIframe };
                        },
                    },
                    {
                        key: "handleIframeLoad",
                        value: function () {
                            this.handleWindowResize();
                            this.hasLoadedIframe = !0;
                            (0, N.markEndPostDelay)();
                            this.postPerfAttributes(
                                this.embedScriptContext.getPerfAttributes()
                            );
                        },
                    },
                    {
                        key: "postPerfAttributes",
                        value: function (e) {
                            Math.random() < 0.5 &&
                                this.iframeMessage.post(r.PERF_ATTRIBUTES, {
                                    perfAttributes: e,
                                });
                        },
                    },
                    {
                        key: "resetAndReloadWidget",
                        value: function () {
                            this.removeIframe();
                            (0, U.resetAndLaunchWidget)();
                        },
                    },
                    {
                        key: "removeIframe",
                        value: function () {
                            var e = (0, w.shouldEmbedInline)()
                                ? document.getElementById(b.INLINE_PARENT_ID)
                                : document.getElementById(b.PARENT_ID);
                            e && e.remove();
                            this.iframeSrc = null;
                            this.hasLoadedIframe = !1;
                        },
                    },
                    {
                        key: "handleResizeMessage",
                        value: function (e) {
                            var t = e.data,
                                n = (t = void 0 === t ? {} : t).height,
                                i = t.width;
                            (0, Y.resizeWidgetIframe)({
                                height: n,
                                width: i,
                                isOpen: this.isOpen,
                            });
                        },
                    },
                    {
                        key: "setWidgetOpenCookie",
                        value: function (e) {
                            var t = e.isOpen;
                            (0, l.setCookie)(
                                d.cookies.IS_OPEN,
                                t,
                                f.default.THIRTY_MINUTES
                            );
                        },
                    },
                    {
                        key: "handleOpenChange",
                        value: function (e) {
                            var t = e.data,
                                n = document.documentElement,
                                s = document
                                    .getElementById(b.PARENT_ID)
                                    .getElementsByClassName(
                                        v.SHADOW_CONTAINER
                                    )[0];
                            this.isOpen = t;
                            this.setWidgetOpenCookie({ isOpen: this.isOpen });
                            if (this.isOpen) {
                                n.classList.add(v.ACTIVE);
                                s.classList.add("active");
                            } else {
                                n.classList.remove(v.ACTIVE);
                                s.classList.remove("active");
                            }
                            if ((0, i.isAnyMobile)() && this.isOpen) {
                                var r = window.innerHeight,
                                    o = window.innerWidth;
                                (0, Y.resizeWidgetIframe)({
                                    height: r,
                                    width: o,
                                    isOpen: this.isOpen,
                                });
                            }
                        },
                    },
                    {
                        key: "handleRequestWidget",
                        value: function (e) {
                            var t = e.source;
                            (0, F.sendWidgetDataToIframe)({
                                source: t,
                                widgetData: this.widgetData,
                                embedScriptContext: this.embedScriptContext,
                                apiUsageTracker: this.apiUsageTracker,
                            });
                        },
                    },
                    {
                        key: "handleStoreMessagesCookie",
                        value: function (e) {
                            var t = e.data;
                            if (
                                (0, l.getCookie)(
                                    d.cookies.GLOBAL_COOKIE_OPT_OUT
                                ) !== d.cookieValues.GLOBAL_COOKIE_OPT_OUT_YES
                            ) {
                                this.iframeMessage.post(
                                    r.FIRST_VISITOR_SESSION,
                                    { isFirstVisitorSession: !1 }
                                );
                                (0, g.setMessagesUtk)(t);
                            }
                        },
                    },
                    {
                        key: "requestWidgetOpen",
                        value: function () {
                            this.isOpen
                                ? this.devLogger.log(
                                      "cannot open the widget, it is already open."
                                  )
                                : this.iframeMessage.post(r.REQUEST_OPEN);
                        },
                    },
                    {
                        key: "requestWidgetClose",
                        value: function () {
                            this.isOpen
                                ? this.iframeMessage.post(r.REQUEST_CLOSE)
                                : this.devLogger.log(
                                      "cannot close the widget, it is already closed"
                                  );
                        },
                    },
                    {
                        key: "handleWindowResize",
                        value: function () {
                            var e = {
                                height: window.innerHeight,
                                width: window.innerWidth,
                            };
                            this.iframeMessage.post(r.BROWSER_WINDOW_RESIZE, e);
                        },
                    },
                    {
                        key: "requestWidgetRefresh",
                        value: function () {
                            var e = this,
                                t = (arguments.length > 0 &&
                                void 0 !== arguments[0]
                                    ? arguments[0]
                                    : {}
                                ).openToNewThread,
                                n = this.embedScriptContext.portalId;
                            if (this.hasLoadedIframe) {
                                var i = this.embedScriptContext.getInitialRequestUrl();
                                (0, k.fetchWidgetData)(
                                    { requestUrl: i, portalId: n },
                                    function (n) {
                                        e.handleWidgetRefresh(n);
                                        t && e.openToNewThread();
                                    }
                                );
                            } else
                                this.devLogger.log(
                                    "Cannot refresh the widget - it has not loaded yet."
                                );
                        },
                    },
                    {
                        key: "openToNewThread",
                        value: function () {
                            this.iframeMessage.post(r.OPEN_TO_NEW_THREAD);
                        },
                    },
                    {
                        key: "extendedClearCookiesFunction",
                        value: function (e) {
                            e && e[W.RESET_WIDGET] && this.removeIframe();
                            (0, h.clearCookies)(e);
                        },
                    },
                    {
                        key: "handleWidgetRefresh",
                        value: function (e) {
                            this.setWidgetData(e);
                            (0, c.getWidgetDataResponseType)(
                                this.widgetData
                            ) === p.HIDE_WIDGET
                                ? this.removeIframe()
                                : this.iframeMessage.post(
                                      r.REFRESH_WIDGET_DATA,
                                      Q(
                                          {},
                                          this.widgetData,
                                          {},
                                          (0, C.getIframeQueryParams)(
                                              this.embedScriptContext
                                          )
                                      )
                                  );
                        },
                    },
                    {
                        key: "loadWidget",
                        value: function () {
                            var e =
                                    arguments.length > 0 &&
                                    void 0 !== arguments[0]
                                        ? arguments[0]
                                        : {},
                                t = this.embedScriptContext.portalId;
                            if (this.hasLoadedIframe)
                                this.devLogger.log(
                                    "Cannot load the widget - the widget has already loaded."
                                );
                            else {
                                e.widgetOpen &&
                                    this.setWidgetOpenCookie({ isOpen: !0 });
                                (0, k.fetchWidgetData)(
                                    {
                                        requestUrl: this.embedScriptContext.getInitialRequestUrl(),
                                        portalId: t,
                                    },
                                    (0, z.handleTargetingAndDelay)(
                                        this.setWidgetData,
                                        this.loadIFrame
                                    ),
                                    function () {
                                        M.EVENTS.messagesInitialized({
                                            messageWillRender: !1,
                                        });
                                    }
                                );
                            }
                        },
                    },
                    {
                        key: "start",
                        value: function () {
                            var e = this;
                            if (
                                (0, _.shouldRenderWidget)(
                                    this.embedScriptContext
                                ).shouldRender
                            ) {
                                (0, T.setupExternalApi)(
                                    {
                                        debug: this.devLogger.debug,
                                        on: function (t, n) {
                                            e.eventEmitter.on(t, n);
                                            e.apiUsageTracker.trackEventListener(
                                                t
                                            );
                                        },
                                        off: this.eventEmitter.off,
                                        clear: function () {
                                            e.extendedClearCookiesFunction.apply(
                                                e,
                                                arguments
                                            );
                                            e.apiUsageTracker.trackMethod(
                                                "clear"
                                            );
                                        },
                                        resetAndReloadWidget: this
                                            .resetAndReloadWidget,
                                        widget: {
                                            load: function () {
                                                e.loadWidget.apply(
                                                    e,
                                                    arguments
                                                );
                                                e.apiUsageTracker.trackMethod(
                                                    "load"
                                                );
                                            },
                                            remove: function () {
                                                e.removeIframe();
                                                e.apiUsageTracker.trackMethod(
                                                    "remove"
                                                );
                                            },
                                            open: function () {
                                                e.requestWidgetOpen();
                                                e.apiUsageTracker.trackMethod(
                                                    "open"
                                                );
                                            },
                                            close: function () {
                                                e.requestWidgetClose();
                                                e.apiUsageTracker.trackMethod(
                                                    "close"
                                                );
                                            },
                                            refresh: function () {
                                                e.requestWidgetRefresh.apply(
                                                    e,
                                                    arguments
                                                );
                                                e.apiUsageTracker.trackMethod(
                                                    "refresh"
                                                );
                                            },
                                            status: function () {
                                                e.apiUsageTracker.trackMethod(
                                                    "status"
                                                );
                                                return e.getStatus();
                                            },
                                        },
                                    },
                                    this.embedScriptContext
                                );
                                (0, O.flushOnReadyCallbacks)({
                                    logger: this.devLogger,
                                    trackCallback: this.apiUsageTracker
                                        .trackOnReady,
                                });
                                (0, B.registerHashChangeListener)({
                                    requestWidgetOpen: this.requestWidgetOpen,
                                    isOpen: this.isOpen,
                                });
                                (0, q.registerWindowResizeListener)({
                                    resizeCallbackFn: this.handleWindowResize,
                                });
                                (0, G.registerCookieListeners)({
                                    postMessageToIframe: this.iframeMessage
                                        .post,
                                });
                                (0, w.shouldLoadImmediately)() &&
                                    this.loadWidget();
                            } else
                                try {
                                    M.EVENTS.messagesInitialized({
                                        messageWillRender: !1,
                                    });
                                } catch (e) {
                                    this.devLogger.log("widget load aborted");
                                }
                        },
                    },
                    {
                        key: "setFrameClass",
                        value: function () {
                            var e = document.getElementById(b.PARENT_ID);
                            if (e) {
                                var t = this.widgetData[x.WIDGET_LOCATION];
                                (0, D.setClassInClassList)({
                                    widgetLocation: t,
                                    classList: e.classList,
                                });
                            }
                        },
                    },
                ]);
                return e;
            })();
        t.WidgetShell = ne;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.getMobileState = a;
        t.isAnyMobile = u;
        t.isMobileSafari = c;
        t.isWindowsMobile = l;
        t.isOperaMini = d;
        t.isIE10 = f;
        var i = s(n(4));
        function s(e) {
            return e && e.__esModule ? e : { default: e };
        }
        var r = /WebKit/i;
        function o(e, t) {
            return e.test(t);
        }
        function a() {
            var e =
                    arguments.length > 0 && void 0 !== arguments[0]
                        ? arguments[0]
                        : navigator.userAgent,
                t = e.split("[FBAN");
            void 0 !== t[1] && (e = t[0]);
            void 0 !== (t = e.split("Twitter"))[1] && (e = t[0]);
            var n = new i.default.Class(e);
            n.other.webkit = o(r, e);
            n.safari =
                n.apple.device &&
                n.other.webkit &&
                !n.other.opera &&
                !n.other.chrome;
            return n;
        }
        function u() {
            var e = a();
            return e.any && !e.tablet;
        }
        function c() {
            return a().safari;
        }
        function l() {
            return a().windows.phone;
        }
        function d() {
            return a().other.opera;
        }
        function f() {
            var e = window.navigator.userAgent,
                t = e.indexOf("MSIE ");
            return t > 0 && parseInt(e.substring(t + 5, e.indexOf(".", t)), 10);
        }
    },
    function (e, t, n) {
        "use strict";
        var i, s, r;
        !(function (n) {
            var o = /iPhone/i,
                a = /iPod/i,
                u = /iPad/i,
                c = /(?=.*\bAndroid\b)(?=.*\bMobile\b)/i,
                l = /Android/i,
                d = /(?=.*\bAndroid\b)(?=.*\bSD4930UR\b)/i,
                f = /(?=.*\bAndroid\b)(?=.*\b(?:KFOT|KFTT|KFJWI|KFJWA|KFSOWI|KFTHWI|KFTHWA|KFAPWI|KFAPWA|KFARWI|KFASWI|KFSAWI|KFSAWA)\b)/i,
                h = /Windows Phone/i,
                v = /(?=.*\bWindows\b)(?=.*\bARM\b)/i,
                p = /BlackBerry/i,
                g = /BB10/i,
                m = /Opera Mini/i,
                _ = /(CriOS|Chrome)(?=.*\bMobile\b)/i,
                E = /(?=.*\bFirefox\b)(?=.*\bMobile\b)/i,
                b = new RegExp(
                    "(?:Nexus 7|BNTV250|Kindle Fire|Silk|GT-P1000)",
                    "i"
                ),
                I = function (e, t) {
                    return e.test(t);
                },
                T = function (e) {
                    var t = e || navigator.userAgent,
                        n = t.split("[FBAN");
                    void 0 !== n[1] && (t = n[0]);
                    void 0 !== (n = t.split("Twitter"))[1] && (t = n[0]);
                    this.apple = {
                        phone: I(o, t),
                        ipod: I(a, t),
                        tablet: !I(o, t) && I(u, t),
                        device: I(o, t) || I(a, t) || I(u, t),
                    };
                    this.amazon = {
                        phone: I(d, t),
                        tablet: !I(d, t) && I(f, t),
                        device: I(d, t) || I(f, t),
                    };
                    this.android = {
                        phone: I(d, t) || I(c, t),
                        tablet: !I(d, t) && !I(c, t) && (I(f, t) || I(l, t)),
                        device: I(d, t) || I(f, t) || I(c, t) || I(l, t),
                    };
                    this.windows = {
                        phone: I(h, t),
                        tablet: I(v, t),
                        device: I(h, t) || I(v, t),
                    };
                    this.other = {
                        blackberry: I(p, t),
                        blackberry10: I(g, t),
                        opera: I(m, t),
                        firefox: I(E, t),
                        chrome: I(_, t),
                        device:
                            I(p, t) || I(g, t) || I(m, t) || I(E, t) || I(_, t),
                    };
                    this.seven_inch = I(b, t);
                    this.any =
                        this.apple.device ||
                        this.android.device ||
                        this.windows.device ||
                        this.other.device ||
                        this.seven_inch;
                    this.phone =
                        this.apple.phone ||
                        this.android.phone ||
                        this.windows.phone;
                    this.tablet =
                        this.apple.tablet ||
                        this.android.tablet ||
                        this.windows.tablet;
                    if ("undefined" == typeof window) return this;
                },
                O = function () {
                    var e = new T();
                    e.Class = T;
                    return e;
                };
            if (e.exports && "undefined" == typeof window) e.exports = T;
            else if (e.exports && "undefined" != typeof window) e.exports = O();
            else {
                (s = []),
                    (i = n.isMobile = O()),
                    void 0 !==
                        (r = "function" == typeof i ? i.apply(t, s) : i) &&
                        (e.exports = r);
            }
        })(void 0);
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.API_REQUEST = t.STOP_TRACK_EXIT_INTENT = t.START_TRACK_EXIT_INTENT = t.STOP_TRACK_SCROLL_PERCENTAGE = t.START_TRACK_SCROLL_PERCENTAGE = t.EXTERNAL_API_EVENT = t.STORE_MESSAGES_COOKIE = t.REQUEST_WIDGET = t.CLOSED_WELCOME_MESSAGE = t.OPEN_CHANGE = t.IFRAME_RESIZE = void 0;
        var i = "iframe-resize";
        t.IFRAME_RESIZE = i;
        var s = "open-change";
        t.OPEN_CHANGE = s;
        var r = "closed-welcome-message";
        t.CLOSED_WELCOME_MESSAGE = r;
        var o = "request-widget";
        t.REQUEST_WIDGET = o;
        var a = "store-messages-cookie";
        t.STORE_MESSAGES_COOKIE = a;
        var u = "external-api-event";
        t.EXTERNAL_API_EVENT = u;
        var c = "start-track-scroll-percentage";
        t.START_TRACK_SCROLL_PERCENTAGE = c;
        var l = "stop-track-scroll-percentage";
        t.STOP_TRACK_SCROLL_PERCENTAGE = l;
        var d = "start-track-exit-intent";
        t.START_TRACK_EXIT_INTENT = d;
        var f = "stop-track-exit-intent";
        t.STOP_TRACK_EXIT_INTENT = f;
        var h = "api-request";
        t.API_REQUEST = h;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.API_REQUEST_RESULT = t.OPEN_TO_NEW_THREAD = t.TRACK_API_USAGE = t.PERF_ATTRIBUTES = t.EXIT_INTENT = t.SCROLL_PERCENTAGE_CHANGE = t.BROWSER_WINDOW_RESIZE = t.REQUEST_CLOSE = t.REQUEST_OPEN = t.REFRESH_WIDGET_DATA = t.FIRST_VISITOR_SESSION = t.GLOBAL_COOKIE_OPT_OUT = t.HUBSPOT_UTK = t.WIDGET_DATA = void 0;
        var i = "widget-data";
        t.WIDGET_DATA = i;
        var s = "hubspot-utk";
        t.HUBSPOT_UTK = s;
        var r = "global-cookie-opt-out";
        t.GLOBAL_COOKIE_OPT_OUT = r;
        var o = "first-visitor-session";
        t.FIRST_VISITOR_SESSION = o;
        var a = "refresh-widget-data";
        t.REFRESH_WIDGET_DATA = a;
        var u = "request-open";
        t.REQUEST_OPEN = u;
        var c = "request-close";
        t.REQUEST_CLOSE = c;
        var l = "browser-window-resize";
        t.BROWSER_WINDOW_RESIZE = l;
        var d = "scroll-percentage-change";
        t.SCROLL_PERCENTAGE_CHANGE = d;
        var f = "exit-intent";
        t.EXIT_INTENT = f;
        var h = "perf-attributes";
        t.PERF_ATTRIBUTES = h;
        var v = "track-api-usage";
        t.TRACK_API_USAGE = v;
        var p = "open-to-new-thread";
        t.OPEN_TO_NEW_THREAD = p;
        var g = "api-request-result";
        t.API_REQUEST_RESULT = g;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.PostMessageReceiver = void 0;
        var i = n(8),
            s = n(10);
        function r(e, t) {
            if (!(e instanceof t))
                throw new TypeError("Cannot call a class as a function");
        }
        function o(e, t) {
            for (var n = 0; n < t.length; n++) {
                var i = t[n];
                i.enumerable = i.enumerable || !1;
                i.configurable = !0;
                "value" in i && (i.writable = !0);
                Object.defineProperty(e, i.key, i);
            }
        }
        function a(e, t, n) {
            t && o(e.prototype, t);
            n && o(e, n);
            return e;
        }
        var u = (function () {
            function e(t, n) {
                var o = n.allowedOrigin,
                    a = n.iframeUuid;
                r(this, e);
                (0, s.objectInvariant)(t);
                (0, i.stringInvariant)(o);
                (0, i.stringInvariant)(a);
                this.allowedOrigin = o;
                this.iframeUuid = a;
                this._handlers = t;
                this.handleMessage = this.handleMessage.bind(this);
                window.addEventListener("message", this.handleMessage);
            }
            a(e, [
                {
                    key: "isOriginAllowed",
                    value: function (e) {
                        return e === this.allowedOrigin;
                    },
                },
                {
                    key: "handleMessage",
                    value: function (e) {
                        var t = e.data,
                            n = e.origin,
                            i = e.source;
                        if (this.isOriginAllowed(n))
                            try {
                                var s = JSON.parse(t);
                                if (s.uuid !== this.iframeUuid) return;
                                var r = s.type,
                                    o = s.data,
                                    a = this._handlers[r];
                                "function" == typeof a &&
                                    a({ data: o, source: i });
                            } catch (e) {
                                return;
                            }
                    },
                },
                {
                    key: "register",
                    value: function (e, t) {
                        this._handlers[e] = t;
                    },
                },
            ]);
            return e;
        })();
        t.PostMessageReceiver = u;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.stringInvariant = void 0;
        var i = s(n(9));
        function s(e) {
            return e && e.__esModule ? e : { default: e };
        }
        var r = function (e) {
            var t =
                arguments.length > 1 && void 0 !== arguments[1]
                    ? arguments[1]
                    : "";
            return (0, i.default)(
                "string" == typeof e,
                "Expected %s to be a string, not a %s",
                t || e,
                typeof e
            );
        };
        t.stringInvariant = r;
    },
    function (e, t) {
        "use es6";
        "use strict";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.default = void 0;
        var n = function (e, t, n, i, s, r, o, a) {
            if (!e) {
                var u;
                if (void 0 === t)
                    u = new Error(
                        "Minified exception occurred; use the non-minified dev environment for the full error message and additional helpful warnings."
                    );
                else {
                    var c = [n, i, s, r, o, a],
                        l = 0;
                    u = new Error(
                        "Invariant Violation: " +
                            t.replace(/%s/g, function () {
                                return c[l++];
                            })
                    );
                }
                u.framesToPop = 1;
                throw u;
            }
        };
        t.default = n;
        e.exports = t.default;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.objectInvariant = void 0;
        var i = s(n(9));
        function s(e) {
            return e && e.__esModule ? e : { default: e };
        }
        var r = function (e) {
            var t =
                arguments.length > 1 && void 0 !== arguments[1]
                    ? arguments[1]
                    : "";
            return (0, i.default)(
                "object" == typeof e && null !== e,
                "Expected %s to be an object",
                t || e
            );
        };
        t.objectInvariant = r;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.CLEAR_PAGE_TITLE_NOTIFICATION = t.SHOW_PAGE_TITLE_NOTIFICATION = void 0;
        var i = "show-page-title-notification";
        t.SHOW_PAGE_TITLE_NOTIFICATION = i;
        var s = "clear-page-title-notification";
        t.CLEAR_PAGE_TITLE_NOTIFICATION = s;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.default = void 0;
        var i = n(8),
            s = n(13);
        function r(e, t) {
            if (!(e instanceof t))
                throw new TypeError("Cannot call a class as a function");
        }
        function o(e, t) {
            for (var n = 0; n < t.length; n++) {
                var i = t[n];
                i.enumerable = i.enumerable || !1;
                i.configurable = !0;
                "value" in i && (i.writable = !0);
                Object.defineProperty(e, i.key, i);
            }
        }
        function a(e, t, n) {
            t && o(e.prototype, t);
            n && o(e, n);
            return e;
        }
        var u = (function () {
            function e() {
                r(this, e);
                this.handleShow = this.handleShow.bind(this);
                this.handleClear = this.handleClear.bind(this);
                this.notificationIntervalId = null;
                this.notificationMessageIsInPageTitle = !1;
                this.cachedOriginalDocumentTitle = null;
            }
            a(e, [
                {
                    key: "clearNotificationInterval",
                    value: function () {
                        clearInterval(this.notificationIntervalId);
                    },
                },
                {
                    key: "notificationIntervalIsRunning",
                    value: function () {
                        return Boolean(this.notificationIntervalId);
                    },
                },
                {
                    key: "start",
                    value: function (e) {
                        var t = this,
                            n = e.title;
                        if (!this.notificationIntervalIsRunning()) {
                            this.cachedOriginalDocumentTitle = document.title;
                            this.togglePageTitle({ notificationTitle: n });
                            this.notificationIntervalId = setInterval(
                                function () {
                                    t.togglePageTitle({ notificationTitle: n });
                                },
                                s.NOTIFICATION_INTERVAL_MS
                            );
                        }
                    },
                },
                {
                    key: "stop",
                    value: function () {
                        this.clearNotificationInterval();
                        this.updatePageTitle(this.cachedOriginalDocumentTitle);
                        this.notificationIntervalId = null;
                        this.notificationMessageIsInPageTitle = !1;
                        this.cachedOriginalDocumentTitle = null;
                    },
                },
                {
                    key: "togglePageTitle",
                    value: function (e) {
                        var t = e.notificationTitle;
                        if (this.notificationMessageIsInPageTitle) {
                            this.updatePageTitle(
                                this.cachedOriginalDocumentTitle
                            );
                            this.notificationMessageIsInPageTitle = !1;
                        } else {
                            this.updatePageTitle(t);
                            this.notificationMessageIsInPageTitle = !0;
                        }
                    },
                },
                {
                    key: "handleShow",
                    value: function (e) {
                        var t = e.data;
                        this.start({ title: t.title });
                    },
                },
                {
                    key: "handleClear",
                    value: function () {
                        this.stop();
                    },
                },
                {
                    key: "updatePageTitle",
                    value: function (e) {
                        (0, i.stringInvariant)(e);
                        document.title = e;
                    },
                },
            ]);
            return e;
        })();
        t.default = u;
        e.exports = t.default;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.NOTIFICATION_INTERVAL_MS = void 0;
        var i = 1250;
        t.NOTIFICATION_INTERVAL_MS = i;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.getWidgetDataResponseType = s;
        var i = "@type";
        function s(e) {
            return e && "object" == typeof e ? e[i] : void 0;
        }
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.getCookie = o;
        t.getHostnameWithoutWww = a;
        t.setCookie = u;
        var i = s(n(16));
        function s(e) {
            return e && e.__esModule ? e : { default: e };
        }
        var r = !1;
        function o(e) {
            var t = null;
            if (document.cookie && "" !== document.cookie)
                for (
                    var n = document.cookie.split(";"), i = 0;
                    i < n.length;
                    i++
                ) {
                    var s = n[i].trim();
                    if (s.substring(0, e.length + 1) === e + "=") {
                        t = s.substring(e.length + 1);
                        break;
                    }
                }
            return t;
        }
        function a() {
            return window.location.hostname.replace(/^www\./, "");
        }
        function u(e, t) {
            var n =
                    arguments.length > 2 && void 0 !== arguments[2]
                        ? arguments[2]
                        : i.default.THIRTEEN_MONTHS,
                s = [
                    e + "=" + t,
                    "expires=" + new Date(Date.now() + n).toGMTString(),
                    "domain=" + ("." + a()),
                    "path=/",
                    "SameSite=Lax",
                ];
            if (window.location.protocol.indexOf("https") > -1)
                s.push("Secure");
            else if (!r) {
                console.warn(
                    "HubSpot Conversations: You are using conversations on a non-https site! Not using https puts your visitor's data at risk, please enforce using https."
                );
                r = !0;
            }
            var o = s.join(";");
            document.cookie = o;
        }
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.default = void 0;
        var i = 864e5,
            s = {
                TWO_MINUTES: 12e4,
                THIRTY_MINUTES: 18e5,
                ONE_DAY: i,
                THIRTEEN_MONTHS: 30 * i * 13,
            };
        t.default = s;
        e.exports = t.default;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.cookieValues = t.cookies = void 0;
        var i = {
            HUBSPOT: "hubspotutk",
            MESSAGES: "messagesUtk",
            IS_OPEN: "hs-messages-is-open",
            HIDE_WELCOME_MESSAGE: "hs-messages-hide-welcome-message",
            HUBSPOT_API_CSRF: "hubspotapi-csrf",
            HSTC: "__hstc",
            HSSC: "__hssc",
            GLOBAL_COOKIE_OPT_OUT: "__hs_opt_out",
        };
        t.cookies = i;
        var s = {
            GLOBAL_COOKIE_OPT_OUT_YES: "yes",
            GLOBAL_COOKIE_OPT_OUT_NO: "no",
        };
        t.cookieValues = s;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.clearCookies = a;
        var i = n(17),
            s = n(19),
            r = n(1),
            o = n(20);
        function a(e) {
            (0, s.deleteCookie)(i.cookies.MESSAGES);
            (0, s.deleteCookie)(i.cookies.IS_OPEN);
            (0, s.deleteCookie)(i.cookies.HIDE_WELCOME_MESSAGE);
            if (e && e[o.RESET_WIDGET]) {
                window.hubspot_live_messages_running = !1;
                (0, r.startOnceReady)();
            }
        }
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.deleteCookie = s;
        var i = n(15);
        function s(e) {
            (0, i.setCookie)(e, "", -1);
        }
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.RESET_WIDGET = void 0;
        var i = "resetWidget";
        t.RESET_WIDGET = i;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.ALIGNED_RIGHT_CLASS = t.ALIGNED_LEFT_CLASS = t.INTERNAL = t.SHADOW_CONTAINER = t.MOBILE = t.ACTIVE = void 0;
        var i = "hs-messages-widget-open";
        t.ACTIVE = i;
        var s = "hs-messages-mobile";
        t.MOBILE = s;
        var r = "shadow-container";
        t.SHADOW_CONTAINER = r;
        var o = "internal";
        t.INTERNAL = o;
        var a = "widget-align-left";
        t.ALIGNED_LEFT_CLASS = a;
        var u = "widget-align-right";
        t.ALIGNED_RIGHT_CLASS = u;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.HIDE_WIDGET = t.V1 = void 0;
        var i = "V1";
        t.V1 = i;
        var s = "HIDE_WIDGET";
        t.HIDE_WIDGET = s;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.setMessagesUtk = r;
        var i = n(15),
            s = n(17);
        function r(e) {
            (0, i.setCookie)(s.cookies.MESSAGES, e);
        }
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.isEmbeddedInProduct = u;
        var i = 53,
            s = 99535353,
            r = /^(?:app|local)\.hubspot(?:qa)?\.com$/,
            o = /(?:pricing)\/[0-9]+/,
            a = "pricing";
        function u(e) {
            var t = e.portalId,
                n = e.hostname,
                u = void 0 === n ? window.location.hostname : n,
                c = e.pathname,
                l = void 0 === c ? window.location.pathname : c,
                d = -1 !== l.indexOf(a) && !o.test(l);
            return (
                !(!r.test(u) || d) &&
                (-1 !== u.indexOf("qa") ? t === i || t === s : t === i)
            );
        }
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.shouldRenderWidget = void 0;
        var i = n(3),
            s = n(24),
            r = n(26),
            o = n(27),
            a = function (e) {
                var t = e.portalId,
                    n = !1;
                (0, r.getPortalIdFromPath)(window.location.pathname) &&
                    (n = !0);
                var a = (0, s.isEmbeddedInProduct)({ portalId: t }) && !n,
                    u =
                        window.disabledHsPopups &&
                        window.disabledHsPopups.indexOf("LIVE_CHAT") > -1;
                return (0, i.isIE10)()
                    ? { shouldRender: !1, reason: "IE_10" }
                    : (0, i.isWindowsMobile)()
                    ? { shouldRender: !1, reason: "WINDOWS_PHONE" }
                    : (0, i.isOperaMini)()
                    ? { shouldRender: !1, reason: "OPERA_MINI" }
                    : (0, o.isUsingUnsupportedFramework)()
                    ? { shouldRender: !1, reason: "UNSUPPORTED_FRAMEWORK" }
                    : a
                    ? { shouldRender: !1, reason: "MISSING_PORTAL_ID" }
                    : u
                    ? { shouldRender: !1, reason: "IS_EMBEDDED_MEETINGS" }
                    : { shouldRender: !0 };
            };
        t.shouldRenderWidget = a;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.getPortalIdFromPath = s;
        var i = /^\/(?:[A-Za-z0-9-_]*)\/(\d+)(?:\/|$)/;
        function s(e) {
            try {
                return i.exec(e)[1];
            } catch (e) {
                return "";
            }
        }
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.isUsingUnsupportedFramework = void 0;
        var i = n(28),
            s = function () {
                var e = i.METHODS.filter(function (e) {
                    return !!e;
                }).length;
                return Boolean(e);
            };
        t.isUsingUnsupportedFramework = s;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.METHODS = void 0;
        var i = [
            Object.prototype.toJSON,
            Array.prototype.toJSON,
            String.prototype.toJSON,
        ];
        t.METHODS = i;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.shouldWidgetStartOpen = c;
        var i = n(30),
            s = n(15),
            r = n(31),
            o = n(17),
            a = n(36),
            u = n(37);
        function c() {
            var e = (0, r.shouldEmbedInline)();
            if (!e && (0, i.cookieIsSet)(o.cookies.IS_OPEN)) {
                var t = (0, s.getCookie)(o.cookies.IS_OPEN);
                return (0, u.stringToBoolean)(t);
            }
            return (
                e || (0, a.urlHasHsChatHashLink)(window.location.href) || void 0
            );
        }
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.cookieIsSet = void 0;
        var i = n(15),
            s = function (e) {
                return null !== (0, i.getCookie)(e);
            };
        t.cookieIsSet = s;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.getIdentificationToken = t.getIdentificationEmail = t.getEnableWidgetCookieBanner = t.shouldDisableAttachment = t.shouldEmbedInline = t.getInlineEmbedSelector = t.shouldBeFullscreen = t.shouldLoadImmediately = void 0;
        var i = n(32),
            s = function () {
                return !!(0, i.getExternalApiSettings)().loadImmediately;
            };
        t.shouldLoadImmediately = s;
        var r = function () {
            return !!(0, i.getExternalApiSettings)().isFullscreen;
        };
        t.shouldBeFullscreen = r;
        var o = function () {
            return (0, i.getExternalApiSettings)().inlineEmbedSelector;
        };
        t.getInlineEmbedSelector = o;
        var a = function () {
            return !!(0, i.getExternalApiSettings)().inlineEmbedSelector;
        };
        t.shouldEmbedInline = a;
        var u = function () {
            return !!(0, i.getExternalApiSettings)().disableAttachment;
        };
        t.shouldDisableAttachment = u;
        var c = function () {
            return (0, i.getExternalApiSettings)().enableWidgetCookieBanner;
        };
        t.getEnableWidgetCookieBanner = c;
        var l = function () {
            return (0, i.getExternalApiSettings)().identificationEmail;
        };
        t.getIdentificationEmail = l;
        var d = function () {
            return (0, i.getExternalApiSettings)().identificationToken;
        };
        t.getIdentificationToken = d;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.getExternalApiSettings = c;
        var i = n(33),
            s = n(34),
            r = n(8),
            o = n(35);
        function a() {
            return (a =
                Object.assign ||
                function (e) {
                    for (var t = 1; t < arguments.length; t++) {
                        var n = arguments[t];
                        for (var i in n)
                            Object.prototype.hasOwnProperty.call(n, i) &&
                                (e[i] = n[i]);
                    }
                    return e;
                }).apply(this, arguments);
        }
        var u = {
            loadImmediately: !0,
            isFullscreen: !1,
            inlineEmbedSelector: "",
            disableAttachment: !1,
            enableWidgetCookieBanner: !1,
            identificationEmail: "",
            identificationToken: "",
        };
        function c() {
            var e = window[i.SETTINGS_VARIABLE],
                t = a({}, u, e);
            (0, s.booleanInvariant)(
                t.loadImmediately,
                "mergedSettings.loadImmediately"
            );
            (0, s.booleanInvariant)(
                t.isFullscreen,
                "mergedSettings.isFullscreen"
            );
            (0, s.booleanInvariant)(
                t.disableAttachment,
                "mergedSettings.disableAttachment"
            );
            (0, o.oneOfListInvariant)(
                t.enableWidgetCookieBanner,
                "mergedSettings.enableWidgetCookieBanner",
                [!1, !0, i.ON_WIDGET_LOAD, i.ON_EXIT_INTENT]
            );
            (0, r.stringInvariant)(
                t.inlineEmbedSelector,
                "mergedSettings.inlineEmbedSelector"
            );
            (0, r.stringInvariant)(
                t.identificationEmail,
                "mergedSettings.identificationEmail"
            );
            (0, r.stringInvariant)(
                t.identificationToken,
                "mergedSettings.identificationToken"
            );
            return t;
        }
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.ON_WIDGET_LOAD = t.ON_EXIT_INTENT = t.SETTINGS_VARIABLE = t.ON_READY_CALLBACKS = t.GLOBAL_VARIABLE = void 0;
        var i = "HubSpotConversations";
        t.GLOBAL_VARIABLE = i;
        var s = "hsConversationsOnReady";
        t.ON_READY_CALLBACKS = s;
        var r = "hsConversationsSettings";
        t.SETTINGS_VARIABLE = r;
        var o = "ON_EXIT_INTENT";
        t.ON_EXIT_INTENT = o;
        var a = "ON_WIDGET_LOAD";
        t.ON_WIDGET_LOAD = a;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.booleanInvariant = void 0;
        var i = s(n(9));
        function s(e) {
            return e && e.__esModule ? e : { default: e };
        }
        var r = function (e, t) {
            return (0, i.default)(
                !0 === e || !1 === e,
                "Expected %s to be a boolean but received a %s",
                t || e,
                typeof e
            );
        };
        t.booleanInvariant = r;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.oneOfListInvariant = void 0;
        var i = s(n(9));
        function s(e) {
            return e && e.__esModule ? e : { default: e };
        }
        var r = function (e, t, n) {
            return (0, i.default)(
                n.indexOf(e) > -1,
                "Expected %s to be one of " + n.toString() + " but got %s",
                t,
                e
            );
        };
        t.oneOfListInvariant = r;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.urlHasHsChatHashLink = void 0;
        var i = new RegExp("" + "#hs-chat-open", "i"),
            s = function (e) {
                return i.test(e);
            };
        t.urlHasHsChatHashLink = s;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.stringToBoolean = void 0;
        var i = function (e) {
            return "true" === e;
        };
        t.stringToBoolean = i;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.INLINE_IFRAME_ID = t.INLINE_PARENT_ID = t.PARENT_ID = void 0;
        var i = "hubspot-messages-iframe-container";
        t.PARENT_ID = i;
        var s = "hubspot-conversations-inline-parent";
        t.INLINE_PARENT_ID = s;
        var r = "hubspot-conversations-inline-iframe";
        t.INLINE_IFRAME_ID = r;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.adjustPositionIfZorsePresent = c;
        var i = n(38),
            s = 500,
            r = 6,
            o = "zorse",
            a = "help-widget-toggle";
        function u() {
            return document.documentElement.classList.contains(o);
        }
        function c() {
            var e = document.getElementById(i.PARENT_ID),
                t = 0,
                n = setInterval(function () {
                    var i = u();
                    (t === r || i) && clearInterval(n);
                    if (i) {
                        var s = document.getElementById(a).offsetWidth + 12;
                        e.style.setProperty("right", s + "px", "important");
                        clearInterval(n);
                    }
                    t++;
                }, s);
        }
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.setupExternalApi = s;
        var i = n(33);
        function s(e) {
            window[i.GLOBAL_VARIABLE] = e;
        }
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.flushOnReadyCallbacks = s;
        var i = n(33);
        function s(e) {
            var t = e.logger,
                n = e.trackCallback,
                s = window[i.ON_READY_CALLBACKS];
            if (Array.isArray(s)) {
                n && n();
                s.forEach(function (e) {
                    try {
                        e();
                    } catch (e) {
                        t.error(e.message);
                    }
                });
            }
        }
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.default = void 0;
        function i(e, t) {
            if (!(e instanceof t))
                throw new TypeError("Cannot call a class as a function");
        }
        function s(e, t) {
            for (var n = 0; n < t.length; n++) {
                var i = t[n];
                i.enumerable = i.enumerable || !1;
                i.configurable = !0;
                "value" in i && (i.writable = !0);
                Object.defineProperty(e, i.key, i);
            }
        }
        function r(e, t, n) {
            t && s(e.prototype, t);
            n && s(e, n);
            return e;
        }
        var o = "HubSpot Conversations log:",
            a = (function () {
                function e() {
                    var t = (arguments.length > 0 && void 0 !== arguments[0]
                        ? arguments[0]
                        : {}
                    ).debug;
                    i(this, e);
                    this._debug = Boolean(t);
                    this.debug = this.debug.bind(this);
                }
                r(e, [
                    {
                        key: "_isDebugMode",
                        value: function () {
                            return this._debug;
                        },
                    },
                    {
                        key: "debug",
                        value: function (e) {
                            this._debug = e;
                        },
                    },
                    {
                        key: "log",
                        value: function (e) {
                            this._isDebugMode() && console.log(o + " " + e);
                        },
                    },
                    {
                        key: "error",
                        value: function (e) {
                            this._isDebugMode() && console.error(o + " " + e);
                        },
                    },
                ]);
                return e;
            })();
        t.default = a;
        e.exports = t.default;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.default = void 0;
        var i = u(n(44)),
            s = n(8),
            r = n(45),
            o = n(46),
            a = n(47);
        function u(e) {
            return e && e.__esModule ? e : { default: e };
        }
        function c(e, t) {
            if (!(e instanceof t))
                throw new TypeError("Cannot call a class as a function");
        }
        function l(e, t) {
            for (var n = 0; n < t.length; n++) {
                var i = t[n];
                i.enumerable = i.enumerable || !1;
                i.configurable = !0;
                "value" in i && (i.writable = !0);
                Object.defineProperty(e, i.key, i);
            }
        }
        function d(e, t, n) {
            t && l(e.prototype, t);
            n && l(e, n);
            return e;
        }
        var f = (function () {
            function e() {
                c(this, e);
                this._eventEmitter = new i.default();
                this._namespacedEventType = this._namespacedEventType.bind(
                    this
                );
                this.on = this.on.bind(this);
                this.off = this.off.bind(this);
                this.trigger = this.trigger.bind(this);
            }
            d(e, [
                {
                    key: "_namespacedEventType",
                    value: function (e) {
                        return o.EVENT_NAMESPACE + ":" + e;
                    },
                },
                {
                    key: "on",
                    value: function (e, t) {
                        (0, s.stringInvariant)(e);
                        (0, r.functionInvariant)(t);
                        if (e.length) {
                            var n = this._namespacedEventType(e);
                            this._eventEmitter.addListener(n, t);
                        }
                    },
                },
                {
                    key: "off",
                    value: function (e, t) {
                        (0, s.stringInvariant)(e);
                        (0, r.functionInvariant)(t);
                        if (e.length) {
                            var n = this._namespacedEventType(e);
                            this._eventEmitter.removeListener(n, t);
                        }
                    },
                },
                {
                    key: "trigger",
                    value: function (e, t) {
                        (0, a.eventTypeInvariant)(e);
                        var n = this._namespacedEventType(e);
                        this._eventEmitter.emit(n, t);
                    },
                },
            ]);
            return e;
        })();
        t.default = f;
        e.exports = t.default;
    },
    function (e, t, n) {
        "use strict";
        var i, s;
        (s = function () {
            return (function e(t, n, s) {
                function r(a, u) {
                    if (!n[a]) {
                        if (!t[a]) {
                            if (!u && "function" == typeof i && i)
                                return i(a, !0);
                            if (o) return o(a, !0);
                            var c = new Error("Cannot find module '" + a + "'");
                            throw ((c.code = "MODULE_NOT_FOUND"), c);
                        }
                        var l = (n[a] = { exports: {} });
                        t[a][0].call(
                            l.exports,
                            function (e) {
                                return r(t[a][1][e] || e);
                            },
                            l,
                            l.exports,
                            e,
                            t,
                            n,
                            s
                        );
                    }
                    return n[a].exports;
                }
                for (
                    var o = "function" == typeof i && i, a = 0;
                    a < s.length;
                    a++
                )
                    r(s[a]);
                return r;
            })(
                {
                    1: [
                        function (e, t, n) {
                            var i = Object.prototype.hasOwnProperty,
                                s = "~";
                            function r() {}
                            function o(e, t, n) {
                                (this.fn = e),
                                    (this.context = t),
                                    (this.once = n || !1);
                            }
                            function a(e, t, n, i, r) {
                                if ("function" != typeof n)
                                    throw new TypeError(
                                        "The listener must be a function"
                                    );
                                var a = new o(n, i || e, r),
                                    u = s ? s + t : t;
                                return (
                                    e._events[u]
                                        ? e._events[u].fn
                                            ? (e._events[u] = [e._events[u], a])
                                            : e._events[u].push(a)
                                        : ((e._events[u] = a),
                                          e._eventsCount++),
                                    e
                                );
                            }
                            function u(e, t) {
                                0 == --e._eventsCount
                                    ? (e._events = new r())
                                    : delete e._events[t];
                            }
                            function c() {
                                (this._events = new r()),
                                    (this._eventsCount = 0);
                            }
                            Object.create &&
                                ((r.prototype = Object.create(null)),
                                new r().__proto__ || (s = !1)),
                                (c.prototype.eventNames = function () {
                                    var e,
                                        t,
                                        n = [];
                                    if (0 === this._eventsCount) return n;
                                    for (t in (e = this._events))
                                        i.call(e, t) &&
                                            n.push(s ? t.slice(1) : t);
                                    return Object.getOwnPropertySymbols
                                        ? n.concat(
                                              Object.getOwnPropertySymbols(e)
                                          )
                                        : n;
                                }),
                                (c.prototype.listeners = function (e) {
                                    var t = s ? s + e : e,
                                        n = this._events[t];
                                    if (!n) return [];
                                    if (n.fn) return [n.fn];
                                    for (
                                        var i = 0,
                                            r = n.length,
                                            o = new Array(r);
                                        i < r;
                                        i++
                                    )
                                        o[i] = n[i].fn;
                                    return o;
                                }),
                                (c.prototype.listenerCount = function (e) {
                                    var t = s ? s + e : e,
                                        n = this._events[t];
                                    return n ? (n.fn ? 1 : n.length) : 0;
                                }),
                                (c.prototype.emit = function (
                                    e,
                                    t,
                                    n,
                                    i,
                                    r,
                                    o
                                ) {
                                    var a = s ? s + e : e;
                                    if (!this._events[a]) return !1;
                                    var u,
                                        c,
                                        l = this._events[a],
                                        d = arguments.length;
                                    if (l.fn) {
                                        switch (
                                            (l.once &&
                                                this.removeListener(
                                                    e,
                                                    l.fn,
                                                    void 0,
                                                    !0
                                                ),
                                            d)
                                        ) {
                                            case 1:
                                                return l.fn.call(l.context), !0;
                                            case 2:
                                                return (
                                                    l.fn.call(l.context, t), !0
                                                );
                                            case 3:
                                                return (
                                                    l.fn.call(l.context, t, n),
                                                    !0
                                                );
                                            case 4:
                                                return (
                                                    l.fn.call(
                                                        l.context,
                                                        t,
                                                        n,
                                                        i
                                                    ),
                                                    !0
                                                );
                                            case 5:
                                                return (
                                                    l.fn.call(
                                                        l.context,
                                                        t,
                                                        n,
                                                        i,
                                                        r
                                                    ),
                                                    !0
                                                );
                                            case 6:
                                                return (
                                                    l.fn.call(
                                                        l.context,
                                                        t,
                                                        n,
                                                        i,
                                                        r,
                                                        o
                                                    ),
                                                    !0
                                                );
                                        }
                                        for (
                                            c = 1, u = new Array(d - 1);
                                            c < d;
                                            c++
                                        )
                                            u[c - 1] = arguments[c];
                                        l.fn.apply(l.context, u);
                                    } else {
                                        var f,
                                            h = l.length;
                                        for (c = 0; c < h; c++)
                                            switch (
                                                (l[c].once &&
                                                    this.removeListener(
                                                        e,
                                                        l[c].fn,
                                                        void 0,
                                                        !0
                                                    ),
                                                d)
                                            ) {
                                                case 1:
                                                    l[c].fn.call(l[c].context);
                                                    break;
                                                case 2:
                                                    l[c].fn.call(
                                                        l[c].context,
                                                        t
                                                    );
                                                    break;
                                                case 3:
                                                    l[c].fn.call(
                                                        l[c].context,
                                                        t,
                                                        n
                                                    );
                                                    break;
                                                case 4:
                                                    l[c].fn.call(
                                                        l[c].context,
                                                        t,
                                                        n,
                                                        i
                                                    );
                                                    break;
                                                default:
                                                    if (!u)
                                                        for (
                                                            f = 1,
                                                                u = new Array(
                                                                    d - 1
                                                                );
                                                            f < d;
                                                            f++
                                                        )
                                                            u[f - 1] =
                                                                arguments[f];
                                                    l[c].fn.apply(
                                                        l[c].context,
                                                        u
                                                    );
                                            }
                                    }
                                    return !0;
                                }),
                                (c.prototype.on = function (e, t, n) {
                                    return a(this, e, t, n, !1);
                                }),
                                (c.prototype.once = function (e, t, n) {
                                    return a(this, e, t, n, !0);
                                }),
                                (c.prototype.removeListener = function (
                                    e,
                                    t,
                                    n,
                                    i
                                ) {
                                    var r = s ? s + e : e;
                                    if (!this._events[r]) return this;
                                    if (!t) return u(this, r), this;
                                    var o = this._events[r];
                                    if (o.fn)
                                        o.fn !== t ||
                                            (i && !o.once) ||
                                            (n && o.context !== n) ||
                                            u(this, r);
                                    else {
                                        for (
                                            var a = 0, c = [], l = o.length;
                                            a < l;
                                            a++
                                        )
                                            (o[a].fn !== t ||
                                                (i && !o[a].once) ||
                                                (n && o[a].context !== n)) &&
                                                c.push(o[a]);
                                        c.length
                                            ? (this._events[r] =
                                                  1 === c.length ? c[0] : c)
                                            : u(this, r);
                                    }
                                    return this;
                                }),
                                (c.prototype.removeAllListeners = function (e) {
                                    var t;
                                    return (
                                        e
                                            ? ((t = s ? s + e : e),
                                              this._events[t] && u(this, t))
                                            : ((this._events = new r()),
                                              (this._eventsCount = 0)),
                                        this
                                    );
                                }),
                                (c.prototype.off = c.prototype.removeListener),
                                (c.prototype.addListener = c.prototype.on),
                                (c.prefixed = s),
                                (c.EventEmitter = c),
                                void 0 !== t && (t.exports = c);
                        },
                        {},
                    ],
                },
                {},
                [1]
            )(1);
        }),
            (e.exports = s());
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.functionInvariant = void 0;
        var i = s(n(9));
        function s(e) {
            return e && e.__esModule ? e : { default: e };
        }
        var r = function (e) {
            return (0, i.default)(
                "function" == typeof e && null !== e,
                "Expected %s to be a function",
                e
            );
        };
        t.functionInvariant = r;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.EVENT_NAMESPACE = void 0;
        var i = "HubSpotConversations";
        t.EVENT_NAMESPACE = i;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.eventTypeInvariant = void 0;
        var i = a(n(9)),
            s = o(n(48));
        function r() {
            if ("function" != typeof WeakMap) return null;
            var e = new WeakMap();
            r = function () {
                return e;
            };
            return e;
        }
        function o(e) {
            if (e && e.__esModule) return e;
            if (null === e || ("object" != typeof e && "function" != typeof e))
                return { default: e };
            var t = r();
            if (t && t.has(e)) return t.get(e);
            var n = {},
                i = Object.defineProperty && Object.getOwnPropertyDescriptor;
            for (var s in e)
                if (Object.prototype.hasOwnProperty.call(e, s)) {
                    var o = i ? Object.getOwnPropertyDescriptor(e, s) : null;
                    o && (o.get || o.set)
                        ? Object.defineProperty(n, s, o)
                        : (n[s] = e[s]);
                }
            n.default = e;
            t && t.set(e, n);
            return n;
        }
        function a(e) {
            return e && e.__esModule ? e : { default: e };
        }
        var u = Object.keys(s).map(function (e) {
                return s[e];
            }),
            c = function (e) {
                return (0, i.default)(
                    -1 !== u.indexOf(e),
                    "Expected a valid event type but received %s. Valid event types include %s.",
                    e,
                    u
                );
            };
        t.eventTypeInvariant = c;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.CONTACT_ASSOCIATED = t.INPUT_STAGING = t.UNREAD_CONVERSATION_COUNT_CHANGED = t.CONVERSATION_CLOSED = t.CONVERSATION_STARTED = void 0;
        var i = "conversationStarted";
        t.CONVERSATION_STARTED = i;
        var s = "conversationClosed";
        t.CONVERSATION_CLOSED = s;
        var r = "unreadConversationCountChanged";
        t.UNREAD_CONVERSATION_COUNT_CHANGED = r;
        var o = "inputStaging";
        t.INPUT_STAGING = o;
        var a = "contactAssociated";
        t.CONTACT_ASSOCIATED = a;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.handleExternalApiEventMessage = void 0;
        var i = n(10),
            s = n(8),
            r = function (e, t) {
                var n = e.data,
                    r = t.eventEmitter;
                (0, s.stringInvariant)(n.eventType);
                (0, i.objectInvariant)(n.payload);
                r.trigger(n.eventType, n.payload);
            };
        t.handleExternalApiEventMessage = r;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.fetchWidgetData = h;
        t.EXPECTED_WIDGET_WILL_NOT_LOAD_CODES = t.WIDGET_WILL_LOAD_CODES = void 0;
        var i = n(24),
            s = n(51),
            r = n(52),
            o = "X-HubSpot-Messages-Uri",
            a = 4,
            u = [200, 304];
        t.WIDGET_WILL_LOAD_CODES = u;
        var c = [204, 404];
        t.EXPECTED_WIDGET_WILL_NOT_LOAD_CODES = c;
        var l = function (e) {
                return u.indexOf(e) > -1;
            },
            d = function (e) {
                return !l(e) && c.indexOf(e) < 0;
            },
            f = function () {};
        function h(e, t) {
            var n = e.requestUrl,
                u = e.portalId,
                c =
                    arguments.length > 2 && void 0 !== arguments[2]
                        ? arguments[2]
                        : f,
                h = new XMLHttpRequest();
            h.addEventListener("readystatechange", function () {
                if (h.readyState === a)
                    if (l(h.status))
                        try {
                            var e = JSON.parse(h.responseText);
                            t(e);
                        } catch (e) {
                            (0, s.warn)(
                                "Initial messages API response is invalid"
                            );
                            c();
                        }
                    else {
                        d(h.status) &&
                            (0, s.warn)("Initial messages API call failed");
                        c();
                    }
            });
            h.open("GET", n);
            var v =
                "about:srcdoc" === window.location.href
                    ? window.top.location.href
                    : window.location.href;
            h.setRequestHeader(o, v);
            (0, i.isEmbeddedInProduct)({ portalId: u }) &&
                (0, r.addAuthToRequest)(h);
            h.send();
        }
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.warn = i;
        function i(e) {
            window.console && console.warn(e);
        }
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.addAuthToRequest = t.addCsrfHeader = void 0;
        var i = n(15),
            s = n(17),
            r = function (e) {
                e.setRequestHeader(
                    "X-HubSpot-CSRF-hubspotapi",
                    (0, i.getCookie)(s.cookies.HUBSPOT_API_CSRF)
                );
            };
        t.addCsrfHeader = r;
        var o = function (e) {
            r(e);
            e.withCredentials = !0;
        };
        t.addAuthToRequest = o;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.triggerEvent = r;
        t.EVENTS = void 0;
        function i() {
            return (i =
                Object.assign ||
                function (e) {
                    for (var t = 1; t < arguments.length; t++) {
                        var n = arguments[t];
                        for (var i in n)
                            Object.prototype.hasOwnProperty.call(n, i) &&
                                (e[i] = n[i]);
                    }
                    return e;
                }).apply(this, arguments);
        }
        var s = "hubspot:messages:";
        function r(e, t) {
            var n,
                r = "" + s + e;
            "function" == typeof window.Event
                ? (n = i(new Event(r), t))
                : (n = i(document.createEvent("Event"), t)).initEvent(
                      r,
                      !0,
                      !0
                  );
            window.dispatchEvent(n);
        }
        var o = {
            messagesInitialized: function (e) {
                r("initialized", {
                    messageWillRender: e.messageWillRender,
                    reason: e.reason,
                });
            },
        };
        t.EVENTS = o;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.throttle = i;
        function i(e, t) {
            var n = !1,
                i = null;
            return function () {
                for (
                    var s = arguments.length, r = new Array(s), o = 0;
                    o < s;
                    o++
                )
                    r[o] = arguments[o];
                if (n)
                    i = function () {
                        e.apply(void 0, r);
                    };
                else {
                    n = !0;
                    e.apply(void 0, r);
                    setTimeout(function () {
                        n = !1;
                        "function" == typeof i && i();
                        i = null;
                    }, t);
                }
            };
        }
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.getIframeQueryParams = c;
        var i = n(15),
            s = n(3),
            r = n(24),
            o = n(56),
            a = n(29),
            u = n(31);
        function c(e) {
            var t = e.messagesUtk,
                n = e.hubspotUtk,
                c = e.portalId,
                l = e.iframeUuid,
                d = e.globalCookieOptOut,
                f = e.isFirstVisitorSession,
                h = e.hstc,
                v = e.isInCMS,
                p = (0, s.isAnyMobile)(),
                g = (0, u.shouldEmbedInline)(),
                m = (0, a.shouldWidgetStartOpen)(),
                _ = {
                    uuid: l,
                    mobile: p,
                    mobileSafari: (0, s.isMobileSafari)(),
                    hideWelcomeMessage: (0, o.shouldHideWelcomeMessage)(),
                    hstc: h,
                    domain: (0, i.getHostnameWithoutWww)(),
                    inApp53: (0, r.isEmbeddedInProduct)({ portalId: c }),
                    messagesUtk: t,
                    url: encodeURIComponent(window.location.href),
                    inline: g,
                    isFullscreen: (0, u.shouldBeFullscreen)(),
                    globalCookieOptOut: d,
                    isFirstVisitorSession: f,
                    isAttachmentDisabled: (0, u.shouldDisableAttachment)(),
                    enableWidgetCookieBanner: (0,
                    u.getEnableWidgetCookieBanner)(),
                    isInCMS: v,
                };
            void 0 !== m && (_.startOpen = m);
            n && (_.hubspotUtk = n);
            return _;
        }
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.shouldHideWelcomeMessage = r;
        var i = n(15),
            s = n(17);
        function r() {
            return !!(0, i.getCookie)(s.cookies.HIDE_WELCOME_MESSAGE) || !1;
        }
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.default = void 0;
        var i = n(58),
            s = n(59),
            r = n(60),
            o = n(61),
            a = n(5);
        function u(e, t) {
            if (!(e instanceof t))
                throw new TypeError("Cannot call a class as a function");
        }
        function c(e, t) {
            for (var n = 0; n < t.length; n++) {
                var i = t[n];
                i.enumerable = i.enumerable || !1;
                i.configurable = !0;
                "value" in i && (i.writable = !0);
                Object.defineProperty(e, i.key, i);
            }
        }
        function l(e, t, n) {
            t && c(e.prototype, t);
            n && c(e, n);
            return e;
        }
        var d = (function () {
            function e(t) {
                var n = t.onScroll;
                u(this, e);
                this._onScroll = n;
                this._handleScroll = this._handleScroll.bind(this);
                this.add = this.add.bind(this);
                this.remove = this.remove.bind(this);
            }
            l(e, [
                {
                    key: "_handleScroll",
                    value: function () {
                        var e =
                            (0, o.getPageHeight)() - (0, r.getViewportHeight)();
                        if (0 !== e) {
                            var t = (100 * (0, s.getBodyScrollTop)()) / e;
                            this._onScroll({ scrollPercentage: t });
                        }
                    },
                },
                {
                    key: "_add",
                    value: function () {
                        var e = !0;
                        (0, i.passiveEventListenerSupported)()
                            ? window.addEventListener(
                                  "scroll",
                                  this._handleScroll,
                                  { capture: e, passive: !0 }
                              )
                            : window.addEventListener(
                                  "scroll",
                                  this._handleScroll,
                                  e
                              );
                    },
                },
                {
                    key: "add",
                    value: function () {
                        this.remove();
                        this._add();
                    },
                },
                {
                    key: "remove",
                    value: function () {
                        var e = !0;
                        (0, i.passiveEventListenerSupported)()
                            ? window.removeEventListener(
                                  "scroll",
                                  this._handleScroll,
                                  { capture: e, passive: !0 }
                              )
                            : window.removeEventListener(
                                  "scroll",
                                  this._handleScroll,
                                  e
                              );
                    },
                },
                {
                    key: "registerPostMessageReceivers",
                    value: function (e) {
                        e.register(a.START_TRACK_SCROLL_PERCENTAGE, this.add);
                        e.register(a.STOP_TRACK_SCROLL_PERCENTAGE, this.remove);
                    },
                },
            ]);
            return e;
        })();
        t.default = d;
        e.exports = t.default;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.passiveEventListenerSupported = void 0;
        var i = function () {
            var e = !1;
            try {
                var t = {
                    get passive() {
                        e = !0;
                    },
                };
                window.addEventListener("test", t, t);
                window.removeEventListener("test", t, t);
            } catch (t) {
                e = !1;
            }
            return e;
        };
        t.passiveEventListenerSupported = i;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.getBodyScrollTop = void 0;
        var i = function () {
            return (
                document.body.scrollTop || document.documentElement.scrollTop
            );
        };
        t.getBodyScrollTop = i;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.getViewportHeight = void 0;
        var i = function () {
            return Math.max(
                window.innerHeight || 0,
                document.documentElement.clientHeight
            );
        };
        t.getViewportHeight = i;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.getPageHeight = void 0;
        var i = function () {
            return Math.max(
                document.body.offsetHeight,
                document.body.scrollHeight
            );
        };
        t.getPageHeight = i;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.default = void 0;
        var i = n(5);
        function s(e, t) {
            if (!(e instanceof t))
                throw new TypeError("Cannot call a class as a function");
        }
        function r(e, t) {
            for (var n = 0; n < t.length; n++) {
                var i = t[n];
                i.enumerable = i.enumerable || !1;
                i.configurable = !0;
                "value" in i && (i.writable = !0);
                Object.defineProperty(e, i.key, i);
            }
        }
        function o(e, t, n) {
            t && r(e.prototype, t);
            n && r(e, n);
            return e;
        }
        var a = (function () {
            function e(t) {
                var n = t.onExitIntent;
                s(this, e);
                this._onExitIntent = n;
                this._handleMouseOut = this._handleMouseOut.bind(this);
                this._isExitIntent = this._isExitIntent.bind(this);
                this.add = this.add.bind(this);
                this.remove = this.remove.bind(this);
            }
            o(e, [
                {
                    key: "_isExitIntent",
                    value: function (e) {
                        if (!e) return !1;
                        var t = e.relatedTarget || e.toElement;
                        return (!t || "HTML" === t.nodeName) && e.clientY < 100;
                    },
                },
                {
                    key: "_handleMouseOut",
                    value: function (e) {
                        this._isExitIntent(e) && this._onExitIntent();
                    },
                },
                {
                    key: "_add",
                    value: function () {
                        window.document.addEventListener(
                            "mouseout",
                            this._handleMouseOut
                        );
                    },
                },
                {
                    key: "add",
                    value: function () {
                        this.remove();
                        this._add();
                    },
                },
                {
                    key: "remove",
                    value: function () {
                        window.document.removeEventListener(
                            "mouseout",
                            this._handleMouseOut
                        );
                    },
                },
                {
                    key: "addExitIntentTracker",
                    value: function () {
                        this.exitIntentTracker.add();
                    },
                },
                {
                    key: "removeExitIntentTracker",
                    value: function () {
                        this.exitIntentTracker.remove();
                    },
                },
                {
                    key: "registerPostMessageReceivers",
                    value: function (e) {
                        e.register(i.START_TRACK_EXIT_INTENT, this.add);
                        e.register(i.STOP_TRACK_EXIT_INTENT, this.remove);
                    },
                },
            ]);
            return e;
        })();
        t.default = a;
        e.exports = t.default;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.markEndPostDelay = s;
        t.markEndPreDelay = r;
        var i = n(64);
        function s() {
            try {
                performance.mark(i.END_MARK_POST_DELAY);
            } catch (e) {}
        }
        function r() {
            try {
                performance.mark(i.END_MARK_PRE_DELAY);
            } catch (e) {}
        }
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.EXECUTION_MEASUREMENT_PRE_DELAY = t.EXECUTION_MEASUREMENT_POST_DELAY = t.END_MARK_POST_DELAY = t.START_MARK_POST_DELAY = t.END_MARK_PRE_DELAY = t.START_MARK_PRE_DELAY = void 0;
        var i = "embed-script-start-pre-delay";
        t.START_MARK_PRE_DELAY = i;
        var s = "embed-script-end-pre-delay";
        t.END_MARK_PRE_DELAY = s;
        var r = "embed-script-start-post-delay";
        t.START_MARK_POST_DELAY = r;
        var o = "embed-script-end-post-delay";
        t.END_MARK_POST_DELAY = o;
        var a = "embed-script-load-time-post-delay";
        t.EXECUTION_MEASUREMENT_POST_DELAY = a;
        var u = "embed-script-load-time-pre-delay";
        t.EXECUTION_MEASUREMENT_PRE_DELAY = u;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.setClassInClassList = void 0;
        var i,
            s = n(66),
            r = n(21);
        function o(e, t, n) {
            t in e
                ? Object.defineProperty(e, t, {
                      value: n,
                      enumerable: !0,
                      configurable: !0,
                      writable: !0,
                  })
                : (e[t] = n);
            return e;
        }
        var a =
                (o((i = {}), s.LEFT_ALIGNED, r.ALIGNED_LEFT_CLASS),
                o(i, s.RIGHT_ALIGNED, r.ALIGNED_RIGHT_CLASS),
                i),
            u = function (e) {
                var t = e.widgetLocation,
                    n = e.classList,
                    i = a[t];
                if (!n.contains(i)) {
                    Object.keys(a)
                        .filter(function (e) {
                            return e !== t;
                        })
                        .forEach(function (e) {
                            n.remove(e);
                        });
                    n.add(i);
                }
            };
        t.setClassInClassList = u;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.RIGHT_ALIGNED = t.LEFT_ALIGNED = void 0;
        var i = "LEFT_ALIGNED";
        t.LEFT_ALIGNED = i;
        var s = "RIGHT_ALIGNED";
        t.RIGHT_ALIGNED = s;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.WIDGET_LOCATION = void 0;
        var i = "widgetLocation";
        t.WIDGET_LOCATION = i;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.resetAndLaunchWidget = void 0;
        var i = n(18),
            s = n(1),
            r = n(69),
            o = function () {
                (0, i.clearCookies)();
                window[r.USER_TOKEN_KEY] = "";
                window.hubspot_live_messages_running = !1;
                (0, s.startOnceReady)();
            };
        t.resetAndLaunchWidget = o;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.USER_TOKEN_KEY = void 0;
        var i = "__hsUserToken";
        t.USER_TOKEN_KEY = i;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.ApiUsageTracker = void 0;
        var i = n(6);
        function s(e, t) {
            if (!(e instanceof t))
                throw new TypeError("Cannot call a class as a function");
        }
        function r(e, t) {
            for (var n = 0; n < t.length; n++) {
                var i = t[n];
                i.enumerable = i.enumerable || !1;
                i.configurable = !0;
                "value" in i && (i.writable = !0);
                Object.defineProperty(e, i.key, i);
            }
        }
        function o(e, t, n) {
            t && r(e.prototype, t);
            n && r(e, n);
            return e;
        }
        var a = (function () {
            function e(t) {
                var n = t.postMessageToIframe;
                s(this, e);
                if ("function" != typeof n)
                    throw new TypeError(
                        "ApiUsageTracker: postMessageToIframe was not a function"
                    );
                this._postMessageToIframe = n;
                this.sendEventToTracker = this.sendEventToTracker.bind(this);
                this.trackSettingsUsed = this.trackSettingsUsed.bind(this);
                this.trackMethod = this.trackMethod.bind(this);
                this.trackEventListener = this.trackEventListener.bind(this);
                this.trackOnReady = this.trackOnReady.bind(this);
            }
            o(e, [
                {
                    key: "sendEventToTracker",
                    value: function (e) {
                        var t =
                            arguments.length > 1 && void 0 !== arguments[1]
                                ? arguments[1]
                                : {};
                        this._postMessageToIframe(i.TRACK_API_USAGE, {
                            eventName: e,
                            properties: t,
                        });
                    },
                },
                {
                    key: "trackSettingsUsed",
                    value: function (e) {
                        var t = {};
                        !1 === e.loadImmediately && (t.loadImmediately = !0);
                        e.inlineEmbedSelector && (t.inlineEmbedSelector = !0);
                        e.enableWidgetCookieBanner &&
                            (t.enableWidgetCookieBanner = !0);
                        e.disableAttachment && (t.disableAttachment = !0);
                        Object.keys(t).length > 0 &&
                            this.sendEventToTracker(
                                "hsConversationsSettings-used",
                                t
                            );
                    },
                },
                {
                    key: "trackMethod",
                    value: function (e) {
                        this.sendEventToTracker("api-method-used", {
                            method: e,
                        });
                    },
                },
                {
                    key: "trackEventListener",
                    value: function (e) {
                        this.sendEventToTracker(
                            "api-event-listener-registered",
                            { event: e }
                        );
                    },
                },
                {
                    key: "trackOnReady",
                    value: function () {
                        this.sendEventToTracker("hsConversationsOnReady-used", {
                            method: "hsConversationsOnReady",
                        });
                    },
                },
            ]);
            return e;
        })();
        t.ApiUsageTracker = a;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.PostMessageApiClient = void 0;
        var i = n(72),
            s = n(6);
        function r(e, t) {
            if (!(e instanceof t))
                throw new TypeError("Cannot call a class as a function");
        }
        function o(e, t) {
            for (var n = 0; n < t.length; n++) {
                var i = t[n];
                i.enumerable = i.enumerable || !1;
                i.configurable = !0;
                "value" in i && (i.writable = !0);
                Object.defineProperty(e, i.key, i);
            }
        }
        function a(e, t, n) {
            t && o(e.prototype, t);
            n && o(e, n);
            return e;
        }
        var u = (function () {
            function e(t) {
                var n = this;
                r(this, e);
                this.makeApiRequest = function (e) {
                    var t = e.data,
                        r = t.type,
                        o = t.url,
                        a = t.data,
                        u = "/_hcms" + o;
                    n.currentRequest &&
                        n.currentRequest.readyState !== i.DONE_STATE &&
                        n.abortCurrentApiRequest();
                    n.currentRequest = (0, i.doRequest)(r)(u, a)(function (
                        e,
                        t
                    ) {
                        t
                            ? n.postMessage(s.API_REQUEST_RESULT, {
                                  result: "failed",
                                  data: t,
                                  url: o,
                              })
                            : n.postMessage(s.API_REQUEST_RESULT, {
                                  result: "succeeded",
                                  data: e,
                                  url: o,
                              });
                    });
                };
                this.postMessage = t;
                this.currentRequest = null;
            }
            a(e, [
                {
                    key: "abortCurrentApiRequest",
                    value: function () {
                        this.currentRequest.abort();
                    },
                },
            ]);
            return e;
        })();
        t.PostMessageApiClient = u;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.put = t.post = t.get = t.doRequest = t.DONE_STATE = void 0;
        var i = 4;
        t.DONE_STATE = i;
        var s = function (e) {
                return e >= 300;
            },
            r = function (e) {
                return function (t, n) {
                    return function (r) {
                        var o = new XMLHttpRequest();
                        o.addEventListener("readystatechange", function () {
                            if (o.readyState === i)
                                try {
                                    var e = JSON.parse(o.responseText);
                                    s(o.status) ? r(null, e) : r(e);
                                } catch (e) {
                                    r(null, "Invalid api response");
                                }
                        });
                        o.open(e, t);
                        o.send(n);
                        return o;
                    };
                };
            };
        t.doRequest = r;
        var o = r("GET");
        t.get = o;
        var a = r("POST");
        t.post = a;
        var u = r("PUT");
        t.put = u;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.sendWidgetDataToIframe = void 0;
        var i = n(74),
            s = n(75),
            r = n(32),
            o = n(55),
            a = n(6);
        function u() {
            return (u =
                Object.assign ||
                function (e) {
                    for (var t = 1; t < arguments.length; t++) {
                        var n = arguments[t];
                        for (var i in n)
                            Object.prototype.hasOwnProperty.call(n, i) &&
                                (e[i] = n[i]);
                    }
                    return e;
                }).apply(this, arguments);
        }
        var c = function (e) {
            var t = e.source,
                n = e.widgetData,
                c = e.embedScriptContext,
                l = e.apiUsageTracker;
            t.postMessage(
                JSON.stringify({
                    type: a.WIDGET_DATA,
                    data: u({}, n, {}, (0, o.getIframeQueryParams)(c)),
                }),
                "*"
            );
            (0, i.getIsUngatedForDontThrottleInitialMessageInApp)(n) ||
                (0, s.throttleInProductInitialMessagePopups)(c);
            l.trackSettingsUsed((0, r.getExternalApiSettings)());
        };
        t.sendWidgetDataToIframe = c;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.getIsUngatedForDontThrottleInitialMessageInApp = void 0;
        var i = function (e) {
            return (
                e &&
                e.gates &&
                e.gates[
                    "Conversations:Visitor:DontThrottleInitialMessageWhileInApp"
                ]
            );
        };
        t.getIsUngatedForDontThrottleInitialMessageInApp = i;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.throttleInProductInitialMessagePopups = c;
        var i = n(15),
            s = n(17),
            r = u(n(16)),
            o = n(24),
            a = n(56);
        function u(e) {
            return e && e.__esModule ? e : { default: e };
        }
        function c(e) {
            var t = e.portalId;
            (0, o.isEmbeddedInProduct)({ portalId: t }) &&
                !(0, a.shouldHideWelcomeMessage)() &&
                (0, i.setCookie)(
                    s.cookies.HIDE_WELCOME_MESSAGE,
                    !0,
                    r.default.ONE_DAY
                );
        }
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.registerCookieListeners = void 0;
        var i = n(6),
            s = n(17),
            r = n(19),
            o = function (e) {
                var t = e.postMessageToIframe,
                    n = function (e) {
                        var n = e.categories
                                ? e.categories.functionality
                                : e.allowed,
                            o = n
                                ? s.cookieValues.GLOBAL_COOKIE_OPT_OUT_NO
                                : s.cookieValues.GLOBAL_COOKIE_OPT_OUT_YES;
                        t(i.GLOBAL_COOKIE_OPT_OUT, { globalCookieOptOut: o });
                        n || (0, r.deleteCookie)(s.cookies.MESSAGES);
                    };
                window._hsq = window._hsq || [];
                window._hsq.push(["addPrivacyConsentListener", n]);
                window._hsq.push([
                    "addUserTokenListener",
                    function (e) {
                        return t(i.HUBSPOT_UTK, { utk: e });
                    },
                ]);
            };
        t.registerCookieListeners = o;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.registerHashChangeListener = void 0;
        var i = n(36),
            s = function (e) {
                var t = e.requestWidgetOpen,
                    n = e.isOpen;
                window.addEventListener("hashchange", function () {
                    (0, i.urlHasHsChatHashLink)(window.location.href) &&
                        !n &&
                        t();
                });
            };
        t.registerHashChangeListener = s;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.registerWindowResizeListener = void 0;
        var i = function (e) {
            var t = e.resizeCallbackFn;
            window.addEventListener("resize", t, { passive: !0 });
        };
        t.registerWindowResizeListener = i;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.iframeMessagePool = t.createQueue = void 0;
        var i = n(80),
            s = n(81),
            r = n(82),
            o = function () {
                var e = [];
                return {
                    enqueue: function (t) {
                        return e.unshift(t);
                    },
                    dequeue: function () {
                        return e.shift();
                    },
                    peek: function () {
                        return e[0];
                    },
                };
            };
        t.createQueue = o;
        var a = function (e) {
            var t = e.iframeSrc,
                n = o();
            return {
                post: function (e) {
                    var o =
                            arguments.length > 1 && void 0 !== arguments[1]
                                ? arguments[1]
                                : {},
                        a = (0, i.getIframeFromDocumentQuery)();
                    if (a) {
                        (0, s.postMessageToIframe)({
                            iframe: a,
                            iframeSrc: t,
                            type: e,
                            data: o,
                        });
                        (0, r.executeAllIframeMessageQueueEvents)({
                            iframe: a,
                            iframeSrc: t,
                            eventQueue: n,
                        });
                    } else n.enqueue({ type: e, data: o });
                },
            };
        };
        t.iframeMessagePool = a;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.getIframeFromDocumentQuery = void 0;
        var i = n(31),
            s = n(38),
            r = function () {
                var e = (0, i.shouldEmbedInline)()
                    ? (0, i.getInlineEmbedSelector)()
                    : "#" + s.PARENT_ID;
                return document.querySelector(e + " iframe");
            };
        t.getIframeFromDocumentQuery = r;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.postMessageToIframe = void 0;
        var i = function (e) {
            var t = e.iframe,
                n = e.iframeSrc,
                i = e.type,
                s = e.data;
            t.contentWindow.postMessage(
                JSON.stringify({ type: i, data: s }),
                n
            );
        };
        t.postMessageToIframe = i;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.executeAllIframeMessageQueueEvents = void 0;
        var i = n(81),
            s = function (e) {
                var t = e.iframe,
                    n = e.iframeSrc,
                    s = e.eventQueue;
                do {
                    var r = s.dequeue();
                    if (r) {
                        var o = r.type,
                            a = r.data;
                        (0, i.postMessageToIframe)({
                            iframe: t,
                            iframeSrc: n,
                            type: o,
                            data: a,
                        });
                    }
                } while (s.peek() && 0 !== Object.keys(s.peek()));
            };
        t.executeAllIframeMessageQueueEvents = s;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.hideWelcomeMessage = void 0;
        var i = n(17),
            s = n(15),
            r = o(n(16));
        function o(e) {
            return e && e.__esModule ? e : { default: e };
        }
        var a = function () {
            (0, s.setCookie)(
                i.cookies.HIDE_WELCOME_MESSAGE,
                !0,
                r.default.THIRTY_MINUTES
            );
        };
        t.hideWelcomeMessage = a;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.resizeWidgetIframe = void 0;
        var i = n(38),
            s = n(3),
            r = function (e) {
                var t = e.height,
                    n = e.width,
                    r = e.isOpen,
                    o = document.getElementById(i.PARENT_ID);
                if ((0, s.isAnyMobile)() && r) {
                    o.style.width = "100%";
                    o.style.height = "100%";
                } else if (t && n) {
                    o.style.width = n + "px";
                    o.style.height = t + "px";
                }
            };
        t.resizeWidgetIframe = r;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.handleTargetingAndDelay = void 0;
        var i = n(3),
            s = n(14),
            r = n(22),
            o = n(86),
            a = n(53),
            u = n(63),
            c = n(87),
            l = function (e, t) {
                return function (n) {
                    var l =
                        !(
                            (0, s.getWidgetDataResponseType)(n) ===
                            r.HIDE_WIDGET
                        ) && !!n.sessionId;
                    if (l) {
                        var d = (0, o.getDelayLoadingWidgetIframe)(
                                n,
                                (0, i.isAnyMobile)()
                            ),
                            f = d.shouldDelayLoadingIframe,
                            h = d.timeDelay;
                        (0, u.markEndPreDelay)();
                        if (f)
                            setTimeout(function () {
                                e(n);
                                (0, c.markStartPostDelay)();
                                t();
                            }, h);
                        else {
                            e(n);
                            (0, c.markStartPostDelay)();
                            t();
                        }
                    }
                    a.EVENTS.messagesInitialized({ messageWillRender: l });
                };
            };
        t.handleTargetingAndDelay = l;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.getDelayLoadingWidgetIframe = void 0;
        var i = function (e, t) {
            var n = e.message,
                i = n.popOpenWelcomeMessage,
                s = n.popOpenWidget,
                r = n.popMessageOnSmallScreens,
                o = n.clientTriggers.displayOnTimeDelay,
                a = o.enabled,
                u = 1e3 * o.timeDelaySeconds;
            return t
                ? { shouldDelayLoadingIframe: !r && a, timeDelay: u }
                : { shouldDelayLoadingIframe: !s && !i && a, timeDelay: u };
        };
        t.getDelayLoadingWidgetIframe = i;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.markStartPreDelay = s;
        t.markStartPostDelay = r;
        var i = n(64);
        function s() {
            try {
                performance.mark(i.START_MARK_PRE_DELAY);
            } catch (e) {}
        }
        function r() {
            try {
                performance.mark(i.START_MARK_POST_DELAY);
            } catch (e) {}
        }
    },
    function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.loadWidgetCss = i;
        function i(e) {
            var t = n(89),
                i = e.createElement("style");
            i.setAttribute("type", "text/css");
            if (i.styleSheet) i.styleSheet.cssText = t;
            else {
                var s = document.createTextNode(t);
                i.appendChild(s);
            }
            var r = e.body.childNodes[0];
            e.body.insertBefore(i, r);
        }
    },
    function (e, t) {
        e.exports =
            'html.hs-messages-widget-open.hs-messages-mobile,html.hs-messages-widget-open.hs-messages-mobile body{overflow:hidden!important;position:relative!important}html.hs-messages-widget-open.hs-messages-mobile body{height:100%!important;margin:0!important}#hubspot-messages-iframe-container{display:initial!important;z-index:2147483647;position:fixed!important;bottom:0!important}#hubspot-messages-iframe-container.widget-align-left{left:0!important}#hubspot-messages-iframe-container.widget-align-right{right:0!important}#hubspot-messages-iframe-container.internal{z-index:1016}#hubspot-messages-iframe-container.internal iframe{min-width:108px}#hubspot-messages-iframe-container .shadow-container{display:initial!important;z-index:-1;position:absolute;width:0;height:0;bottom:0;content:""}#hubspot-messages-iframe-container .shadow-container.internal{display:none!important}#hubspot-messages-iframe-container .shadow-container.active{width:400px;height:400px}#hubspot-messages-iframe-container iframe{display:initial!important;width:100%!important;height:100%!important;border:none!important;position:absolute!important;bottom:0!important;right:0!important;background:transparent!important}';
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.createEmbedScriptContext = c;
        var i = n(91),
            s = n(92),
            r = n(100),
            o = u(n(101)),
            a = n(31);
        function u(e) {
            return e && e.__esModule ? e : { default: e };
        }
        function c() {
            var e = (0, r.getScriptEnvParams)(),
                t = e.messagesEnv,
                n = e.portalId,
                u = e.messagesHublet,
                c = !1;
            try {
                c =
                    localStorage &&
                    "true" === localStorage["live-chat-local-toggle"];
            } catch (e) {}
            var l =
                    "undefined" != typeof messagesConfig &&
                    messagesConfig.iFrameDomain,
                d = (0, i.getUuid)(),
                f = encodeURIComponent(document.referrer),
                h = (0, s.prepareVisitorIdentifiers)(),
                v = h.messagesUtk,
                p = h.hubspotUtk,
                g = h.hstc,
                m = h.hssc,
                _ = h.globalCookieOptOut,
                E = h.isFirstVisitorSession;
            return new o.default({
                messagesHublet: u,
                globalCookieOptOut: _,
                hubspotUtk: p,
                hstc: g,
                hssc: m,
                iFrameDomainOverride: l,
                iframeUuid: d,
                isFirstVisitorSession: E,
                messagesEnv: t,
                messagesUtk: v,
                referrer: f,
                portalId: n,
                useLocalBuild: c,
                identificationEmail: (0, a.getIdentificationEmail)(),
                identificationToken: (0, a.getIdentificationToken)(),
            });
        }
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.getUuid = r;
        function i() {
            var e = new Date().getTime();
            return "xxxxxxxxxxxx4xxxyxxxxxxxxxxxxxxx".replace(
                /[xy]/g,
                function (t) {
                    var n = (e + 16 * Math.random()) % 16 | 0;
                    e = Math.floor(e / 16);
                    return ("x" === t ? n : (3 & n) | 8).toString(16);
                }
            );
        }
        function s() {
            var e = window.crypto || window.msCrypto,
                t = new Uint16Array(8);
            e.getRandomValues(t);
            var n = function (e) {
                for (var t = e.toString(16); t.length < 4; ) t = "0" + t;
                return t;
            };
            return (
                n(t[0]) +
                n(t[1]) +
                n(t[2]) +
                n(t[3]) +
                n(t[4]) +
                n(t[5]) +
                n(t[6]) +
                n(t[7])
            );
        }
        function r() {
            var e = window.crypto || window.msCrypto;
            return void 0 !== e &&
                void 0 !== e.getRandomValues &&
                void 0 === window.Uint16Array
                ? s()
                : i();
        }
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.prepareVisitorIdentifiers = void 0;
        var i = n(93),
            s = n(94),
            r = n(96),
            o = n(97),
            a = n(98),
            u = n(99),
            c = n(23),
            l = function () {
                var e = (0, s.getMessagesUtkFromCookie)();
                e && (0, c.setMessagesUtk)(e);
                var t = (0, r.getHubSpotUtkFromCookie)(),
                    n = (0, a.getHstcFromCookie)(),
                    l = (0, u.getHsscFromCookie)(),
                    d = (0, o.getGlobalCookieOptOut)(),
                    f = (0, i.chooseMessagesUtk)({ existingMessagesUtk: e });
                return {
                    messagesUtk: f.messagesUtk,
                    hubspotUtk: t,
                    hstc: n,
                    hssc: l,
                    globalCookieOptOut: d,
                    isFirstVisitorSession: f.isFirstVisitorSession,
                };
            };
        t.prepareVisitorIdentifiers = l;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.chooseMessagesUtk = s;
        var i = n(91);
        function s() {
            var e,
                t = (arguments.length > 0 && void 0 !== arguments[0]
                    ? arguments[0]
                    : {}
                ).existingMessagesUtk,
                n = !1;
            if (t) e = t;
            else {
                n = !0;
                e = (0, i.getUuid)();
            }
            return { messagesUtk: e, isFirstVisitorSession: n };
        }
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.getMessagesUtkFromCookie = o;
        var i = n(15),
            s = n(95),
            r = n(17);
        function o() {
            var e = (0, i.getCookie)(r.cookies.MESSAGES);
            return (0, s.isUtk)(e) ? e : void 0;
        }
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.isUtk = s;
        t.UTK_REGEX = void 0;
        var i = /[a-zA-Z\d]{32}/;
        t.UTK_REGEX = i;
        function s(e) {
            return i.test(e);
        }
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.getHubSpotUtkFromCookie = r;
        var i = n(17),
            s = n(15);
        function r() {
            return (0, s.getCookie)(i.cookies.HUBSPOT);
        }
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.getGlobalCookieOptOut = r;
        var i = n(15),
            s = n(17);
        function r() {
            return (0, i.getCookie)(s.cookies.GLOBAL_COOKIE_OPT_OUT);
        }
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.getHstcFromCookie = r;
        var i = n(17),
            s = n(15);
        function r() {
            return (0, s.getCookie)(i.cookies.HSTC);
        }
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.getHsscFromCookie = r;
        var i = n(17),
            s = n(15);
        function r() {
            return (0, s.getCookie)(i.cookies.HSSC);
        }
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.getScriptEnvParams = a;
        t.getIsLocal = t.getMessagesHublet = t.getMessagesEnv = t.getPortalId = void 0;
        var i = function () {
            var e = document.getElementById("hubspot-messages-loader");
            return parseInt(e.getAttribute("data-hsjs-portal"), 10);
        };
        t.getPortalId = i;
        var s = function () {
            return document
                .getElementById("hubspot-messages-loader")
                .getAttribute("data-hsjs-env");
        };
        t.getMessagesEnv = s;
        var r = function () {
            return document
                .getElementById("hubspot-messages-loader")
                .getAttribute("data-hsjs-hublet");
        };
        t.getMessagesHublet = r;
        var o = function () {
            return (
                "true" ===
                document
                    .getElementById("hubspot-messages-loader")
                    .getAttribute("data-hsjs-local")
            );
        };
        t.getIsLocal = o;
        function a() {
            return {
                ungatedFor: document
                    .getElementById("hubspot-messages-loader")
                    .getAttribute("ungated-for"),
                portalId: i(),
                messagesEnv: s(),
                messagesHublet: r(),
                isLocal: o(),
            };
        }
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.default = void 0;
        var i = n(102),
            s = n(8),
            r = n(24),
            o = n(103),
            a = n(106),
            u = n(55),
            c = n(107),
            l = n(108),
            d = n(31);
        function f(e, t) {
            if (!(e instanceof t))
                throw new TypeError("Cannot call a class as a function");
        }
        function h(e, t) {
            for (var n = 0; n < t.length; n++) {
                var i = t[n];
                i.enumerable = i.enumerable || !1;
                i.configurable = !0;
                "value" in i && (i.writable = !0);
                Object.defineProperty(e, i.key, i);
            }
        }
        function v(e, t, n) {
            t && h(e.prototype, t);
            n && h(e, n);
            return e;
        }
        var p = (function () {
            function e(t) {
                f(this, e);
                var n = t.globalCookieOptOut,
                    r = t.hubspotUtk,
                    o = t.hstc,
                    a = t.hssc,
                    u = t.iFrameDomainOverride,
                    c = t.iframeUuid,
                    l = t.isFirstVisitorSession,
                    d = t.messagesEnv,
                    h = t.messagesUtk,
                    v = t.referrer,
                    p = t.portalId,
                    g = t.useLocalBuild,
                    m = t.identificationEmail,
                    _ = t.identificationToken,
                    E = t.messagesHublet;
                (0, s.stringInvariant)(c, "iframeUuid");
                (0, s.stringInvariant)(d, "messagesEnv");
                (0, s.stringInvariant)(h, "messagesUtk");
                (0, i.numberInvariant)(p, "portalId");
                this.globalCookieOptOut = n;
                this.hubspotUtk = r;
                this.hstc = o;
                this.hssc = a;
                this.iFrameDomainOverride = u;
                this.iframeUuid = c;
                this.isFirstVisitorSession = l;
                this.messagesEnv = d;
                this.messagesUtk = h;
                this.referrer = v;
                this.portalId = p;
                this.useLocalBuild = g;
                this.identificationEmail = m;
                this.identificationToken = _;
                this.messagesHublet = E;
                this.getIFrameDomain = this.getIFrameDomain.bind(this);
                this.getIFrameSrc = this.getIFrameSrc.bind(this);
                this.getInitialRequestUrl = this.getInitialRequestUrl.bind(
                    this
                );
            }
            v(e, [
                {
                    key: "getIFrameDomain",
                    value: function () {
                        var e = "qa" === this.messagesEnv ? "qa" : "",
                            t =
                                "na1" !== this.messagesHublet &&
                                this.messagesHublet
                                    ? "-" + this.messagesHublet
                                    : "";
                        return this.iFrameDomainOverride
                            ? this.iFrameDomainOverride
                            : this.useLocalBuild
                            ? "https://local" + t + ".hubspot" + e + ".com"
                            : "https://app" + t + ".hubspot" + e + ".com";
                    },
                },
                {
                    key: "getIFrameSrc",
                    value: function () {
                        var e = (0, a.serializeQueryParameters)(
                            (0, u.getIframeQueryParams)({
                                messagesUtk: this.messagesUtk,
                                hubspotUtk: this.hubspotUtk,
                                portalId: this.portalId,
                                iframeUuid: this.iframeUuid,
                                globalCookieOptOut: this.globalCookieOptOut,
                                isFirstVisitorSession: this
                                    .isFirstVisitorSession,
                                hstc: this.hstc,
                                isInCMS: (0, c.isInCMS)(),
                            })
                        );
                        return (
                            this.getIFrameDomain() +
                            "/conversations-visitor/" +
                            this.portalId +
                            "/threads/utk/" +
                            this.messagesUtk +
                            "?" +
                            e
                        );
                    },
                },
                {
                    key: "getEncodedIdentificationEmail",
                    value: function () {
                        var e = this.identificationEmail;
                        e.includes("@") || (e = decodeURIComponent(e));
                        return encodeURIComponent(e);
                    },
                },
                {
                    key: "getInitialRequestUrl",
                    value: function () {
                        return (0, c.isInCMS)()
                            ? (0, o.getCMSRequestUrl)({
                                  messagesEnv: this.messagesEnv,
                                  messagesUtk: this.messagesUtk,
                                  hubspotUtk: this.hubspotUtk,
                                  portalId: this.portalId,
                                  referrer: this.referrer,
                                  hstc: this.hstc,
                                  hssc: this.hssc,
                                  email:
                                      this.identificationEmail &&
                                      this.getEncodedIdentificationEmail(),
                                  identificationToken: this.identificationToken,
                              })
                            : (0, r.isEmbeddedInProduct)({
                                  portalId: this.portalId,
                              })
                            ? (0, o.getInternalRequestUrl)({
                                  messagesHublet: this.messagesHublet,
                                  messagesEnv: this.messagesEnv,
                                  messagesUtk: this.messagesUtk,
                                  portalId: this.portalId,
                              })
                            : (0, o.getPublicRequestUrl)({
                                  messagesHublet: this.messagesHublet,
                                  messagesEnv: this.messagesEnv,
                                  messagesUtk: this.messagesUtk,
                                  hubspotUtk: this.hubspotUtk,
                                  portalId: this.portalId,
                                  referrer: this.referrer,
                                  hstc: this.hstc,
                                  hssc: this.hssc,
                                  email:
                                      this.identificationEmail &&
                                      this.getEncodedIdentificationEmail(),
                                  identificationToken: this.identificationToken,
                              });
                    },
                },
                {
                    key: "getPerfAttributes",
                    value: function () {
                        var e = (0, l.getPerfAttributes)({
                            portalId: this.portalId,
                            messagesEnv: this.messagesEnv,
                        });
                        if ((0, d.shouldLoadImmediately)() && e) return e;
                    },
                },
            ]);
            return e;
        })();
        t.default = p;
        e.exports = t.default;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.numberInvariant = void 0;
        var i = s(n(9));
        function s(e) {
            return e && e.__esModule ? e : { default: e };
        }
        var r = function (e) {
            var t =
                arguments.length > 1 && void 0 !== arguments[1]
                    ? arguments[1]
                    : "";
            return (0, i.default)(
                "number" == typeof e,
                "Expected %s to be a number, not a %s",
                t || e,
                typeof e
            );
        };
        t.numberInvariant = r;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.getInternalRequestUrl = a;
        t.getCMSRequestUrl = c;
        t.getPublicRequestUrl = l;
        var i = n(104),
            s = n(105),
            r = n(26),
            o = n(3);
        function a(e) {
            var t = e.messagesEnv,
                n = e.portalId,
                i = e.messagesUtk,
                a = e.messagesHublet,
                u = (0, r.getPortalIdFromPath)(window.location.pathname);
            return (
                (0, s.getApiDomain)(t, a) +
                "/livechat/v1/message/public/hubspot-app?portalId=" +
                u +
                "&mobile=" +
                (0, o.isAnyMobile)() +
                "&embeddedPortalId=" +
                n +
                "&traceId=" +
                i
            );
        }
        function u(e) {
            var t = e.messagesUtk,
                n = e.hubspotUtk,
                s = e.portalId,
                r = e.referrer,
                a = e.hstc,
                u = e.hssc,
                c = e.email,
                l = e.identificationToken,
                d =
                    "?portalId=" +
                    s +
                    "&" +
                    i.bender.project +
                    "=" +
                    i.bender.depVersions[i.bender.project] +
                    "&mobile=" +
                    (0, o.isAnyMobile)();
            t && (d = d + "&messagesUtk=" + t + "&traceId=" + t);
            n && (d = d + "&hubspotUtk=" + n);
            a && (d = d + "&__hstc=" + a);
            u && (d = d + "&__hssc=" + u);
            r && (d = d + "&referrer=" + r);
            l && (d = d + "&identificationToken=" + l);
            c && (d = d + "&email=" + c);
            return d;
        }
        function c(e) {
            return (
                "/_hcms/livechat/widget" +
                u({
                    messagesUtk: e.messagesUtk,
                    hubspotUtk: e.hubspotUtk,
                    portalId: e.portalId,
                    referrer: e.referrer,
                    hstc: e.hstc,
                    hssc: e.hssc,
                    email: e.email,
                    identificationToken: e.identificationToken,
                })
            );
        }
        function l(e) {
            var t = e.messagesHublet,
                n = e.messagesEnv,
                i = e.messagesUtk,
                r = e.hubspotUtk,
                o = e.portalId,
                a = e.referrer,
                c = e.hstc,
                l = e.hssc,
                d = e.email,
                f = e.identificationToken;
            return (
                (0, s.getApiDomain)(n, t) +
                "/livechat-public/v1/message/public" +
                u({
                    messagesUtk: i,
                    hubspotUtk: r,
                    portalId: o,
                    referrer: a,
                    hstc: c,
                    hssc: l,
                    email: d,
                    identificationToken: f,
                })
            );
        }
    },
    function (e, t) {
        e.exports = {
            mode: "compressed",
            staticDomainPrefix: "//static.hsappstatic.net",
            bender: {
                depVersions: {
                    "conversations-embed": "static-1.8635",
                    isMobile: "static-1.4",
                    StyleGuideUI: "static-3.232",
                    "conversations-internal-schema": "static-1.7531",
                    "head-dlb": "static-1.112",
                    jasmine: "static-3.73",
                    "jasmine-runner": "static-1.48",
                    sinon: "static-1.6",
                    enviro: "static-4.26",
                    "hs-promise-rejection-tracking": "static-1.35",
                    PortalIdParser: "static-2.26",
                    raven: "static-3.16",
                    "raven-hubspot": "static-1.116",
                },
                depPathPrefixes: {
                    "conversations-embed": "/conversations-embed/static-1.8635",
                    isMobile: "/isMobile/static-1.4",
                    StyleGuideUI: "/StyleGuideUI/static-3.232",
                    "conversations-internal-schema":
                        "/conversations-internal-schema/static-1.7531",
                    "head-dlb": "/head-dlb/static-1.112",
                    jasmine: "/jasmine/static-3.73",
                    "jasmine-runner": "/jasmine-runner/static-1.48",
                    sinon: "/sinon/static-1.6",
                    enviro: "/enviro/static-4.26",
                    "hs-promise-rejection-tracking":
                        "/hs-promise-rejection-tracking/static-1.35",
                    PortalIdParser: "/PortalIdParser/static-2.26",
                    raven: "/raven/static-3.16",
                    "raven-hubspot": "/raven-hubspot/static-1.116",
                },
                project: "conversations-embed",
                staticDomain: "//static.hsappstatic.net",
                staticDomainPrefix: "//static.hsappstatic.net",
            },
        };
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.getApiDomain = i;
        function i(e, t) {
            return (
                "https://api" +
                ("na1" !== t && t ? "-" + t : "") +
                ".hubspot" +
                ("qa" === e ? "qa" : "") +
                ".com"
            );
        }
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.serializeQueryParameters = i;
        function i(e) {
            return Object.keys(e)
                .reduce(function (t, n) {
                    t.push(n + "=" + e[n]);
                    return t;
                }, [])
                .join("&");
        }
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.isInCMS = void 0;
        var i = function () {
            return void 0 !== window.hsVars;
        };
        t.isInCMS = i;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.getPerfAttributes = a;
        var i = n(64),
            s = n(109),
            r = n(110),
            o = n(111);
        function a(e) {
            var t = e.portalId,
                n = "qa" === e.messagesEnv ? "qa" : "",
                a = (0, o.buildNonCmsScriptLoaderPath)({ env: n, portalId: t }),
                u = (0, s.buildCmsScriptLoaderSrc)({ portalId: t }),
                c = (0, r.buildCmsScriptLoaderPath)({ portalId: t }),
                l =
                    "https://js.usemessages" +
                    n +
                    ".com/conversations-embed.js",
                d = Boolean(document.querySelector('script[src="' + u + '"]'));
            try {
                performance.measure(
                    i.EXECUTION_MEASUREMENT_PRE_DELAY,
                    i.START_MARK_PRE_DELAY,
                    i.END_MARK_PRE_DELAY
                );
                performance.measure(
                    i.EXECUTION_MEASUREMENT_POST_DELAY,
                    i.START_MARK_POST_DELAY,
                    i.END_MARK_POST_DELAY
                );
                var f = performance.getEntriesByName(
                        i.EXECUTION_MEASUREMENT_PRE_DELAY
                    )[0],
                    h = performance.getEntriesByName(
                        i.EXECUTION_MEASUREMENT_POST_DELAY
                    )[0],
                    v = f.duration + h.duration,
                    p = performance.getEntriesByName(a)[0],
                    g = performance.getEntriesByName(c)[0],
                    m = (d ? g : p).duration,
                    _ = performance.getEntriesByName(l)[0].duration;
                if (v && m && _)
                    return {
                        iframeLoadTime: v,
                        scriptLoaderScriptTime: m,
                        embedScriptTime: _,
                    };
            } catch (e) {}
            return null;
        }
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.buildCmsScriptLoaderSrc = void 0;
        var i = function (e) {
            return "/hs/scriptloader/" + e.portalId + ".js";
        };
        t.buildCmsScriptLoaderSrc = i;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.buildCmsScriptLoaderPath = void 0;
        var i = n(109),
            s = function (e) {
                var t = e.portalId,
                    n = (0, i.buildCmsScriptLoaderSrc)({ portalId: t });
                return "" + document.location.origin + n;
            };
        t.buildCmsScriptLoaderPath = s;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.buildNonCmsScriptLoaderPath = void 0;
        var i = function (e) {
            var t = e.env,
                n = void 0 === t ? "" : t,
                i = e.portalId;
            return (
                document.location.protocol +
                "//js.hs-scripts" +
                n +
                ".com/" +
                i +
                ".js"
            );
        };
        t.buildNonCmsScriptLoaderPath = i;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.hasRequiredFeatures = i;
        function i(e) {
            return [
                "function" == typeof e.WeakMap,
                "function" == typeof e.requestAnimationFrame,
            ].every(function (e) {
                return !0 === e;
            });
        }
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.ErrorLogger = void 0;
        var i = n(51),
            s = n(114),
            r = n(100);
        function o() {
            return (o =
                Object.assign ||
                function (e) {
                    for (var t = 1; t < arguments.length; t++) {
                        var n = arguments[t];
                        for (var i in n)
                            Object.prototype.hasOwnProperty.call(n, i) &&
                                (e[i] = n[i]);
                    }
                    return e;
                }).apply(this, arguments);
        }
        function a(e, t) {
            if (!(e instanceof t))
                throw new TypeError("Cannot call a class as a function");
        }
        function u(e, t) {
            for (var n = 0; n < t.length; n++) {
                var i = t[n];
                i.enumerable = i.enumerable || !1;
                i.configurable = !0;
                "value" in i && (i.writable = !0);
                Object.defineProperty(e, i.key, i);
            }
        }
        function c(e, t, n) {
            t && u(e.prototype, t);
            n && u(e, n);
            return e;
        }
        var l =
                "https://exceptions.hubspot.com/api/1/store/?sentry_key=7ab6425e7a7c4b01b71fdb51e76514bf&sentry_version=7",
            d = 4;
        function f() {
            return Date.now() / 1e3;
        }
        function h() {
            var e = window.crypto || window.msCrypto;
            if (void 0 !== typeof e && e.getRandomValues) {
                var t = new Uint16Array(8);
                e.getRandomValues(t);
                t[3] = (4095 & t[3]) | 16384;
                t[4] = (16383 & t[4]) | 32768;
                var n = function (e) {
                    for (var t = e.toString(16); t.length < 4; ) t = "0" + t;
                    return t;
                };
                return (
                    n(t[0]) +
                    n(t[1]) +
                    n(t[2]) +
                    n(t[3]) +
                    n(t[4]) +
                    n(t[5]) +
                    n(t[6]) +
                    n(t[7])
                );
            }
            return "xxxxxxxxxxxx4xxxyxxxxxxxxxxxxxxx".replace(
                /[xy]/g,
                function (e) {
                    var t = (16 * Math.random()) | 0;
                    return ("x" === e ? t : (3 & t) | 8).toString(16);
                }
            );
        }
        function v(e) {
            var t = new XMLHttpRequest();
            t.addEventListener("readystatechange", function () {
                t.readyState === d &&
                    t.status >= 300 &&
                    (0, i.warn)("Failed logging HSConversations error");
            });
            t.open("POST", l);
            t.setRequestHeader("Content-Type", "text/plain;charset=UTF-8");
            t.send(JSON.stringify(e));
        }
        var p = (function () {
            function e() {
                a(this, e);
                this.config = {
                    environment: (0, r.getMessagesEnv)(),
                    tags: {
                        portalId: (0, r.getPortalId)(),
                        env: (0, r.getMessagesEnv)(),
                    },
                    logger: "javascript",
                    platform: "javascript",
                    request: {
                        headers: { "User-Agent": navigator.userAgent },
                        url: window.location.href,
                    },
                };
            }
            c(e, [
                {
                    key: "captureErrors",
                    value: function (e) {
                        try {
                            e();
                        } catch (e) {
                            var t = f();
                            if (
                                "Aborting: redirection in progress" !==
                                e.message
                            ) {
                                var n = (0, s.computeStackTrace)(e);
                                v(
                                    o({}, this.config, {
                                        event_id: h(),
                                        transaction: n.stack[0].filename,
                                        level: "error",
                                        exception: {
                                            values: [
                                                {
                                                    mechanism: {
                                                        handled: !0,
                                                        type: "generic",
                                                    },
                                                    type: n.name,
                                                    value: n.message,
                                                    stacktrace: {
                                                        frames: n.stack.reverse(),
                                                    },
                                                },
                                            ],
                                        },
                                        timestamp: t,
                                    })
                                );
                            }
                            throw e;
                        }
                    },
                },
            ]);
            return e;
        })();
        t.ErrorLogger = p;
    },
    function (e, t, n) {
        "use strict";
        "use es6";
        Object.defineProperty(t, "__esModule", { value: !0 });
        t.computeStackTrace = c;
        var i = "?";
        function s() {
            return "undefined" == typeof document || null == document.location
                ? ""
                : document.location.href;
        }
        function r() {
            return "undefined" == typeof document || null == document.location
                ? ""
                : document.location.origin
                ? document.location.origin
                : document.location.protocol +
                  "//" +
                  document.location.hostname +
                  (document.location.port ? ":" + document.location.port : "");
        }
        function o(e) {
            if (void 0 === e.stack || !e.stack) return null;
            for (
                var t,
                    n,
                    o,
                    a = /^\s*at (?:(.*?) ?\()?((?:file|https?|blob|chrome-extension|native|eval|webpack|<anonymous>|[a-z]:|\/).*?)(?::(\d+))?(?::(\d+))?\)?\s*$/i,
                    u = /^\s*at (?:((?:\[object object\])?.+) )?\(?((?:file|ms-appx(?:-web)|https?|webpack|blob):.*?):(\d+)(?::(\d+))?\)?\s*$/i,
                    c = /^\s*(.*?)(?:\((.*?)\))?(?:^|@)((?:file|https?|blob|chrome|webpack|resource|moz-extension).*?:\/.*?|\[native code\]|[^@]*(?:bundle|\d+\.js))(?::(\d+))?(?::(\d+))?\s*$/i,
                    l = /(\S+) line (\d+)(?: > eval line \d+)* > eval/i,
                    d = /\((\S*)(?::(\d+))(?::(\d+))\)/,
                    f = e.stack.split("\n"),
                    h = [],
                    v = 0,
                    p = f.length;
                v < p;
                ++v
            ) {
                if ((n = a.exec(f[v]))) {
                    var g = n[2] && 0 === n[2].indexOf("native");
                    if (
                        n[2] &&
                        0 === n[2].indexOf("eval") &&
                        (t = d.exec(n[2]))
                    ) {
                        n[2] = t[1];
                        n[3] = t[2];
                        n[4] = t[3];
                    }
                    o = {
                        filename: g ? null : n[2],
                        function: n[1] || i,
                        args: g ? [n[2]] : [],
                        lineno: n[3] ? +n[3] : null,
                        colno: n[4] ? +n[4] : null,
                    };
                } else if ((n = u.exec(f[v])))
                    o = {
                        filename: n[2],
                        function: n[1] || i,
                        args: [],
                        lineno: +n[3],
                        colno: n[4] ? +n[4] : null,
                    };
                else {
                    if (!(n = c.exec(f[v]))) continue;
                    if (
                        n[3] &&
                        n[3].indexOf(" > eval") > -1 &&
                        (t = l.exec(n[3]))
                    ) {
                        n[3] = t[1];
                        n[4] = t[2];
                        n[5] = null;
                    } else
                        0 !== v ||
                            n[5] ||
                            void 0 === e.columnNumber ||
                            (h[0].column = e.columnNumber + 1);
                    o = {
                        filename: n[3],
                        function: n[1] || i,
                        args: n[2] ? n[2].split(",") : [],
                        lineno: n[4] ? +n[4] : null,
                        colno: n[5] ? +n[5] : null,
                    };
                }
                !o.function && o.line && (o.function = i);
                if (o.filename && "blob:" === o.filename.substr(0, 5)) {
                    var m = new XMLHttpRequest();
                    m.open("GET", o.filename, !1);
                    m.send(null);
                    if (200 === m.status) {
                        var _ = m.responseText || "",
                            E = (_ = _.slice(-300)).match(
                                /\/\/# sourceMappingURL=(.*)$/
                            );
                        if (E) {
                            var b = E[1];
                            "~" === b.charAt(0) && (b = r() + b.slice(1));
                            o.url = b.slice(0, -4);
                        }
                    }
                }
                h.push(o);
            }
            return h.length
                ? { name: e.name, message: e.message, url: s(), stack: h }
                : null;
        }
        function a(e, t, n) {
            var s = { filename: t, lineno: n };
            if (s.filename && s.lineno) {
                e.incomplete = !1;
                s.function || (s.function = i);
                if (e.stack.length > 0 && e.stack[0].filename === s.filename) {
                    if (e.stack[0].lineno === s.lineno) return !1;
                    if (
                        !e.stack[0].lineno &&
                        e.stack[0].function === s.function
                    ) {
                        e.stack[0].lineno = s.lineno;
                        return !1;
                    }
                }
                e.stack.unshift(s);
                e.partial = !0;
                return !0;
            }
            e.incomplete = !0;
            return !1;
        }
        function u(e, t) {
            for (
                var n,
                    r,
                    o = /function\s+([_$a-zA-Z\xA0-\uFFFF][_$a-zA-Z0-9\xA0-\uFFFF]*)?\s*\(/i,
                    l = [],
                    d = {},
                    f = !1,
                    h = u.caller;
                h && !f;
                h = h.caller
            )
                if (h !== c) {
                    r = {
                        filename: null,
                        function: i,
                        lineno: null,
                        colno: null,
                    };
                    h.name
                        ? (r.function = h.name)
                        : (n = o.exec(h.toString())) && (r.function = n[1]);
                    if (void 0 === r.function)
                        try {
                            r.function = n.input.substring(
                                0,
                                n.input.indexOf("{")
                            );
                        } catch (e) {}
                    d["" + h] ? (f = !0) : (d["" + h] = !0);
                    l.push(r);
                }
            t && l.splice(0, t);
            var v = {
                name: e.name,
                message: e.message,
                filename: s(),
                stack: l,
            };
            a(
                v,
                e.sourceURL || e.fileName,
                e.line || e.lineNumber,
                e.message || e.description
            );
            return v;
        }
        function c(e, t) {
            var n = null;
            t = null == t ? 0 : +t;
            try {
                if ((n = o(e))) return n;
            } catch (e) {}
            try {
                if ((n = u(e, t + 1))) return n;
            } catch (e) {}
            return { name: e.name, message: e.message, filename: s() };
        }
    },
]);
//# sourceMappingURL=project.js.map
