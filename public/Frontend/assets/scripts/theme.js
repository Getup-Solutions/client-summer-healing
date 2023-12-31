/*!
 * VERSION: 1.16.1
 * DATE: 2015-03-13
 * UPDATES AND DOCS AT: http://greensock.com
 *
 * Includes all of the following: TweenLite, TweenMax, TimelineLite, TimelineMax, EasePack, CSSPlugin, RoundPropsPlugin, BezierPlugin, AttrPlugin, DirectionalRotationPlugin
 *
 * @license Copyright (c) 2008-2015, GreenSock. All rights reserved.
 * This work is subject to the terms at http://greensock.com/standard-license or for
 * Club GreenSock members, the software agreement that was issued with your membership.
 *
 * @author: Jack Doyle, jack@greensock.com
 **/ var didScroll,
    _gsScope = "undefined" != typeof module && module.exports && "undefined" != typeof global ? global : this || window;
function anamorph(t, e, i) {
    $.getScript("https://www.youtube.com/iframe_api");
    var s = !1;
    (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(
        navigator.userAgent
    ) ||
        /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(
            navigator.userAgent.substr(0, 4)
        )) &&
        (s = !0);
    var n = t.split("."),
        r = t.split("/"),
        o = n.length - 1,
        a = r.length - 1;
    $(document.body).css({ margin: "0", background: "#000000" });
    var l = "position: fixed; top: 50%; left: 50%; min-width: 100%; min-height: 100%; transform: translate(-50%, -50%); width=auto; height=auto",
        c = "<div id='an_overlay' style='z-index: -998; position: fixed; top: 0; background-color: #000000; width: 100%; height: 100%;'></div>";
    ($("<div id='an_wrapper' style='z-index: -997; opacity: 0;'></div>").prependTo("body"),
    "bw" == e ? $(c).appendTo("#an_wrapper").css("mix-blend-mode", "saturation") : e > 0 && $(c).appendTo("#an_wrapper").css("opacity", e),
    -1 !== t.indexOf("youtube.com") && 0 == s)
        ? ($("<div id='an_ytplayer' width='" + w + "' height='" + h + "' style='z-index: -999; " + l + "'></div>").appendTo("#an_wrapper"),
          (window.onYouTubePlayerAPIReady = function () {
              var t = new YT.Player("an_ytplayer", {
                  height: h,
                  width: w,
                  videoId: r[a],
                  playerVars: { autoplay: 1, controls: 0, showinfo: 0, modestbranding: 1, loop: 1, fs: 0, cc_load_policty: 0, iv_load_policy: 3, autohide: 0, rel: 0, disablekb: 1, enablejsapi: 1, fs: 0, playsinline: 0 },
                  events: {
                      onReady: function (t) {
                          t.target.mute();
                      },
                      onStateChange: function (e) {
                          e.data === YT.PlayerState.ENDED && t.playVideo(), e.data === YT.PlayerState.PLAYING && $("#an_wrapper").fadeTo("slow", 1);
                      },
                  },
              });
          }))
        : "mp4" == n[o] && 0 == s
        ? ($("<video id='an_video' style='z-index: -999; " + l + "' autoplay loop muted><source src=" + t + " type='video/mp4'></video>").appendTo("#an_wrapper"),
          document.getElementById("an_video").addEventListener(
              "playing",
              function () {
                  $("#an_wrapper").fadeTo("slow", 1);
              },
              !1
          ))
        : (n[o],
          $("<div id='an_img' style='z-index: -999; " + l + "'><img style='" + l + "' src='" + t + "'></div>").appendTo("#an_wrapper"),
          $("#an_img").ready(function () {
              $("#an_wrapper").fadeTo("slow", 1);
          }));
}
(_gsScope._gsQueue || (_gsScope._gsQueue = [])).push(function () {
    "use strict";
    var t, e, i, s, n, r, o, a, l, c, u, p, d, f, g, m, v;
    _gsScope._gsDefine(
        "TweenMax",
        ["core.Animation", "core.SimpleTimeline", "TweenLite"],
        function (t, e, i) {
            var s = function (t) {
                    var e,
                        i = [],
                        s = t.length;
                    for (e = 0; e !== s; i.push(t[e++]));
                    return i;
                },
                n = function (t, e, s) {
                    i.call(this, t, e, s),
                        (this._cycle = 0),
                        (this._yoyo = !0 === this.vars.yoyo),
                        (this._repeat = this.vars.repeat || 0),
                        (this._repeatDelay = this.vars.repeatDelay || 0),
                        (this._dirty = !0),
                        (this.render = n.prototype.render);
                },
                r = i._internals,
                o = r.isSelector,
                a = r.isArray,
                l = (n.prototype = i.to({}, 0.1, {})),
                c = [];
            (n.version = "1.16.1"),
                (l.constructor = n),
                (l.kill()._gc = !1),
                (n.killTweensOf = n.killDelayedCallsTo = i.killTweensOf),
                (n.getTweensOf = i.getTweensOf),
                (n.lagSmoothing = i.lagSmoothing),
                (n.ticker = i.ticker),
                (n.render = i.render),
                (l.invalidate = function () {
                    return (this._yoyo = !0 === this.vars.yoyo), (this._repeat = this.vars.repeat || 0), (this._repeatDelay = this.vars.repeatDelay || 0), this._uncache(!0), i.prototype.invalidate.call(this);
                }),
                (l.updateTo = function (t, e) {
                    var s,
                        n = this.ratio,
                        r = this.vars.immediateRender || t.immediateRender;
                    for (s in (e && this._startTime < this._timeline._time && ((this._startTime = this._timeline._time), this._uncache(!1), this._gc ? this._enabled(!0, !1) : this._timeline.insert(this, this._startTime - this._delay)), t))
                        this.vars[s] = t[s];
                    if (this._initted || r) {
                        if (e) (this._initted = !1), r && this.render(0, !0, !0);
                        else if ((this._gc && this._enabled(!0, !1), this._notifyPluginsOfEnabled && this._firstPT && i._onPluginEvent("_onDisable", this), this._time / this._duration > 0.998)) {
                            var o = this._time;
                            this.render(0, !0, !1), (this._initted = !1), this.render(o, !0, !1);
                        } else if (this._time > 0 || r) {
                            (this._initted = !1), this._init();
                            for (var a, l = 1 / (1 - n), c = this._firstPT; c; ) (a = c.s + c.c), (c.c *= l), (c.s = a - c.c), (c = c._next);
                        }
                    }
                    return this;
                }),
                (l.render = function (t, e, i) {
                    this._initted || (0 === this._duration && this.vars.repeat && this.invalidate());
                    var s,
                        n,
                        o,
                        a,
                        l,
                        u,
                        p,
                        d,
                        f = this._dirty ? this.totalDuration() : this._totalDuration,
                        g = this._time,
                        m = this._totalTime,
                        v = this._cycle,
                        y = this._duration,
                        _ = this._rawPrevTime;
                    if (
                        (t >= f
                            ? ((this._totalTime = f),
                              (this._cycle = this._repeat),
                              this._yoyo && 0 != (1 & this._cycle) ? ((this._time = 0), (this.ratio = this._ease._calcEnd ? this._ease.getRatio(0) : 0)) : ((this._time = y), (this.ratio = this._ease._calcEnd ? this._ease.getRatio(1) : 1)),
                              this._reversed || ((s = !0), (n = "onComplete"), (i = i || this._timeline.autoRemoveChildren)),
                              0 === y &&
                                  (this._initted || !this.vars.lazy || i) &&
                                  (this._startTime === this._timeline._duration && (t = 0),
                                  (0 === t || 0 > _ || 1e-10 === _) && _ !== t && ((i = !0), _ > 1e-10 && (n = "onReverseComplete")),
                                  (this._rawPrevTime = d = !e || t || _ === t ? t : 1e-10)))
                            : 1e-7 > t
                            ? ((this._totalTime = this._time = this._cycle = 0),
                              (this.ratio = this._ease._calcEnd ? this._ease.getRatio(0) : 0),
                              (0 !== m || (0 === y && _ > 0)) && ((n = "onReverseComplete"), (s = this._reversed)),
                              0 > t && ((this._active = !1), 0 === y && (this._initted || !this.vars.lazy || i) && (_ >= 0 && (i = !0), (this._rawPrevTime = d = !e || t || _ === t ? t : 1e-10))),
                              this._initted || (i = !0))
                            : ((this._totalTime = this._time = t),
                              0 !== this._repeat &&
                                  ((a = y + this._repeatDelay),
                                  (this._cycle = (this._totalTime / a) >> 0),
                                  0 !== this._cycle && this._cycle === this._totalTime / a && this._cycle--,
                                  (this._time = this._totalTime - this._cycle * a),
                                  this._yoyo && 0 != (1 & this._cycle) && (this._time = y - this._time),
                                  this._time > y ? (this._time = y) : 0 > this._time && (this._time = 0)),
                              this._easeType
                                  ? ((l = this._time / y),
                                    (u = this._easeType),
                                    (p = this._easePower),
                                    (1 === u || (3 === u && l >= 0.5)) && (l = 1 - l),
                                    3 === u && (l *= 2),
                                    1 === p ? (l *= l) : 2 === p ? (l *= l * l) : 3 === p ? (l *= l * l * l) : 4 === p && (l *= l * l * l * l),
                                    (this.ratio = 1 === u ? 1 - l : 2 === u ? l : 0.5 > this._time / y ? l / 2 : 1 - l / 2))
                                  : (this.ratio = this._ease.getRatio(this._time / y))),
                        g === this._time && !i && v === this._cycle)
                    )
                        return void (m !== this._totalTime && this._onUpdate && (e || this._onUpdate.apply(this.vars.onUpdateScope || this, this.vars.onUpdateParams || c)));
                    if (!this._initted) {
                        if ((this._init(), !this._initted || this._gc)) return;
                        if (!i && this._firstPT && ((!1 !== this.vars.lazy && this._duration) || (this.vars.lazy && !this._duration)))
                            return (this._time = g), (this._totalTime = m), (this._rawPrevTime = _), (this._cycle = v), r.lazyTweens.push(this), void (this._lazy = [t, e]);
                        this._time && !s ? (this.ratio = this._ease.getRatio(this._time / y)) : s && this._ease._calcEnd && (this.ratio = this._ease.getRatio(0 === this._time ? 0 : 1));
                    }
                    for (
                        !1 !== this._lazy && (this._lazy = !1),
                            this._active || (!this._paused && this._time !== g && t >= 0 && (this._active = !0)),
                            0 === m &&
                                (2 === this._initted && t > 0 && this._init(),
                                this._startAt && (t >= 0 ? this._startAt.render(t, e, i) : n || (n = "_dummyGS")),
                                this.vars.onStart && (0 !== this._totalTime || 0 === y) && (e || this.vars.onStart.apply(this.vars.onStartScope || this, this.vars.onStartParams || c))),
                            o = this._firstPT;
                        o;

                    )
                        o.f ? o.t[o.p](o.c * this.ratio + o.s) : (o.t[o.p] = o.c * this.ratio + o.s), (o = o._next);
                    this._onUpdate && (0 > t && this._startAt && this._startTime && this._startAt.render(t, e, i), e || ((this._totalTime !== m || s) && this._onUpdate.apply(this.vars.onUpdateScope || this, this.vars.onUpdateParams || c))),
                        this._cycle !== v && (e || this._gc || (this.vars.onRepeat && this.vars.onRepeat.apply(this.vars.onRepeatScope || this, this.vars.onRepeatParams || c))),
                        n &&
                            (!this._gc || i) &&
                            (0 > t && this._startAt && !this._onUpdate && this._startTime && this._startAt.render(t, e, i),
                            s && (this._timeline.autoRemoveChildren && this._enabled(!1, !1), (this._active = !1)),
                            !e && this.vars[n] && this.vars[n].apply(this.vars[n + "Scope"] || this, this.vars[n + "Params"] || c),
                            0 === y && 1e-10 === this._rawPrevTime && 1e-10 !== d && (this._rawPrevTime = 0));
                }),
                (n.to = function (t, e, i) {
                    return new n(t, e, i);
                }),
                (n.from = function (t, e, i) {
                    return (i.runBackwards = !0), (i.immediateRender = 0 != i.immediateRender), new n(t, e, i);
                }),
                (n.fromTo = function (t, e, i, s) {
                    return (s.startAt = i), (s.immediateRender = 0 != s.immediateRender && 0 != i.immediateRender), new n(t, e, s);
                }),
                (n.staggerTo = n.allTo = function (t, e, r, l, u, p, d) {
                    l = l || 0;
                    var f,
                        g,
                        m,
                        v,
                        y = r.delay || 0,
                        _ = [],
                        b = function () {
                            r.onComplete && r.onComplete.apply(r.onCompleteScope || this, arguments), u.apply(d || this, p || c);
                        };
                    for (a(t) || ("string" == typeof t && (t = i.selector(t) || t), o(t) && (t = s(t))), t = t || [], 0 > l && ((t = s(t)).reverse(), (l *= -1)), f = t.length - 1, m = 0; f >= m; m++) {
                        for (v in ((g = {}), r)) g[v] = r[v];
                        (g.delay = y), m === f && u && (g.onComplete = b), (_[m] = new n(t[m], e, g)), (y += l);
                    }
                    return _;
                }),
                (n.staggerFrom = n.allFrom = function (t, e, i, s, r, o, a) {
                    return (i.runBackwards = !0), (i.immediateRender = 0 != i.immediateRender), n.staggerTo(t, e, i, s, r, o, a);
                }),
                (n.staggerFromTo = n.allFromTo = function (t, e, i, s, r, o, a, l) {
                    return (s.startAt = i), (s.immediateRender = 0 != s.immediateRender && 0 != i.immediateRender), n.staggerTo(t, e, s, r, o, a, l);
                }),
                (n.delayedCall = function (t, e, i, s, r) {
                    return new n(e, 0, { delay: t, onComplete: e, onCompleteParams: i, onCompleteScope: s, onReverseComplete: e, onReverseCompleteParams: i, onReverseCompleteScope: s, immediateRender: !1, useFrames: r, overwrite: 0 });
                }),
                (n.set = function (t, e) {
                    return new n(t, 0, e);
                }),
                (n.isTweening = function (t) {
                    return i.getTweensOf(t, !0).length > 0;
                });
            var u = function (t, e) {
                    for (var s = [], n = 0, r = t._first; r; ) r instanceof i ? (s[n++] = r) : (e && (s[n++] = r), (n = (s = s.concat(u(r, e))).length)), (r = r._next);
                    return s;
                },
                p = (n.getAllTweens = function (e) {
                    return u(t._rootTimeline, e).concat(u(t._rootFramesTimeline, e));
                });
            (n.killAll = function (t, i, s, n) {
                null == i && (i = !0), null == s && (s = !0);
                var r,
                    o,
                    a,
                    l = p(0 != n),
                    c = l.length,
                    u = i && s && n;
                for (a = 0; c > a; a++) (o = l[a]), (u || o instanceof e || ((r = o.target === o.vars.onComplete) && s) || (i && !r)) && (t ? o.totalTime(o._reversed ? 0 : o.totalDuration()) : o._enabled(!1, !1));
            }),
                (n.killChildTweensOf = function (t, e) {
                    if (null != t) {
                        var l,
                            c,
                            u,
                            p,
                            d,
                            f = r.tweenLookup;
                        if (("string" == typeof t && (t = i.selector(t) || t), o(t) && (t = s(t)), a(t))) for (p = t.length; --p > -1; ) n.killChildTweensOf(t[p], e);
                        else {
                            for (u in ((l = []), f)) for (c = f[u].target.parentNode; c; ) c === t && (l = l.concat(f[u].tweens)), (c = c.parentNode);
                            for (d = l.length, p = 0; d > p; p++) e && l[p].totalTime(l[p].totalDuration()), l[p]._enabled(!1, !1);
                        }
                    }
                });
            var d = function (t, i, s, n) {
                (i = !1 !== i), (s = !1 !== s), (n = !1 !== n);
                for (var r, o, a = p(n), l = i && s && n, c = a.length; --c > -1; ) (o = a[c]), (l || o instanceof e || ((r = o.target === o.vars.onComplete) && s) || (i && !r)) && o.paused(t);
            };
            return (
                (n.pauseAll = function (t, e, i) {
                    d(!0, t, e, i);
                }),
                (n.resumeAll = function (t, e, i) {
                    d(!1, t, e, i);
                }),
                (n.globalTimeScale = function (e) {
                    var s = t._rootTimeline,
                        n = i.ticker.time;
                    return arguments.length
                        ? ((e = e || 1e-10),
                          (s._startTime = n - ((n - s._startTime) * s._timeScale) / e),
                          (s = t._rootFramesTimeline),
                          (n = i.ticker.frame),
                          (s._startTime = n - ((n - s._startTime) * s._timeScale) / e),
                          (s._timeScale = t._rootTimeline._timeScale = e),
                          e)
                        : s._timeScale;
                }),
                (l.progress = function (t) {
                    return arguments.length ? this.totalTime(this.duration() * (this._yoyo && 0 != (1 & this._cycle) ? 1 - t : t) + this._cycle * (this._duration + this._repeatDelay), !1) : this._time / this.duration();
                }),
                (l.totalProgress = function (t) {
                    return arguments.length ? this.totalTime(this.totalDuration() * t, !1) : this._totalTime / this.totalDuration();
                }),
                (l.time = function (t, e) {
                    return arguments.length
                        ? (this._dirty && this.totalDuration(),
                          t > this._duration && (t = this._duration),
                          this._yoyo && 0 != (1 & this._cycle) ? (t = this._duration - t + this._cycle * (this._duration + this._repeatDelay)) : 0 !== this._repeat && (t += this._cycle * (this._duration + this._repeatDelay)),
                          this.totalTime(t, e))
                        : this._time;
                }),
                (l.duration = function (e) {
                    return arguments.length ? t.prototype.duration.call(this, e) : this._duration;
                }),
                (l.totalDuration = function (t) {
                    return arguments.length
                        ? -1 === this._repeat
                            ? this
                            : this.duration((t - this._repeat * this._repeatDelay) / (this._repeat + 1))
                        : (this._dirty && ((this._totalDuration = -1 === this._repeat ? 999999999999 : this._duration * (this._repeat + 1) + this._repeatDelay * this._repeat), (this._dirty = !1)), this._totalDuration);
                }),
                (l.repeat = function (t) {
                    return arguments.length ? ((this._repeat = t), this._uncache(!0)) : this._repeat;
                }),
                (l.repeatDelay = function (t) {
                    return arguments.length ? ((this._repeatDelay = t), this._uncache(!0)) : this._repeatDelay;
                }),
                (l.yoyo = function (t) {
                    return arguments.length ? ((this._yoyo = t), this) : this._yoyo;
                }),
                n
            );
        },
        !0
    ),
        _gsScope._gsDefine(
            "TimelineLite",
            ["core.Animation", "core.SimpleTimeline", "TweenLite"],
            function (t, e, i) {
                var s = function (t) {
                        e.call(this, t),
                            (this._labels = {}),
                            (this.autoRemoveChildren = !0 === this.vars.autoRemoveChildren),
                            (this.smoothChildTiming = !0 === this.vars.smoothChildTiming),
                            (this._sortChildren = !0),
                            (this._onUpdate = this.vars.onUpdate);
                        var i,
                            s,
                            n = this.vars;
                        for (s in n) a((i = n[s])) && -1 !== i.join("").indexOf("{self}") && (n[s] = this._swapSelfInParams(i));
                        a(n.tweens) && this.add(n.tweens, 0, n.align, n.stagger);
                    },
                    n = i._internals,
                    r = (s._internals = {}),
                    o = n.isSelector,
                    a = n.isArray,
                    l = n.lazyTweens,
                    c = n.lazyRender,
                    u = [],
                    p = _gsScope._gsDefine.globals,
                    d = function (t) {
                        var e,
                            i = {};
                        for (e in t) i[e] = t[e];
                        return i;
                    },
                    f = (r.pauseCallback = function (t, e, i, s) {
                        var n,
                            r = t._timeline,
                            o = r._totalTime,
                            a = t._startTime,
                            l = 0 > t._rawPrevTime || (0 === t._rawPrevTime && r._reversed),
                            c = l ? 0 : 1e-10,
                            p = l ? 1e-10 : 0;
                        if (e || !this._forcingPlayhead) {
                            for (r.pause(a), n = t._prev; n && n._startTime === a; ) (n._rawPrevTime = p), (n = n._prev);
                            for (n = t._next; n && n._startTime === a; ) (n._rawPrevTime = c), (n = n._next);
                            e && e.apply(s || r, i || u), (this._forcingPlayhead || !r._paused) && r.seek(o);
                        }
                    }),
                    g = function (t) {
                        var e,
                            i = [],
                            s = t.length;
                        for (e = 0; e !== s; i.push(t[e++]));
                        return i;
                    },
                    m = (s.prototype = new e());
                return (
                    (s.version = "1.16.1"),
                    (m.constructor = s),
                    (m.kill()._gc = m._forcingPlayhead = !1),
                    (m.to = function (t, e, s, n) {
                        var r = (s.repeat && p.TweenMax) || i;
                        return e ? this.add(new r(t, e, s), n) : this.set(t, s, n);
                    }),
                    (m.from = function (t, e, s, n) {
                        return this.add(((s.repeat && p.TweenMax) || i).from(t, e, s), n);
                    }),
                    (m.fromTo = function (t, e, s, n, r) {
                        var o = (n.repeat && p.TweenMax) || i;
                        return e ? this.add(o.fromTo(t, e, s, n), r) : this.set(t, n, r);
                    }),
                    (m.staggerTo = function (t, e, n, r, a, l, c, u) {
                        var p,
                            f = new s({ onComplete: l, onCompleteParams: c, onCompleteScope: u, smoothChildTiming: this.smoothChildTiming });
                        for ("string" == typeof t && (t = i.selector(t) || t), o((t = t || [])) && (t = g(t)), 0 > (r = r || 0) && ((t = g(t)).reverse(), (r *= -1)), p = 0; t.length > p; p++)
                            n.startAt && (n.startAt = d(n.startAt)), f.to(t[p], e, d(n), p * r);
                        return this.add(f, a);
                    }),
                    (m.staggerFrom = function (t, e, i, s, n, r, o, a) {
                        return (i.immediateRender = 0 != i.immediateRender), (i.runBackwards = !0), this.staggerTo(t, e, i, s, n, r, o, a);
                    }),
                    (m.staggerFromTo = function (t, e, i, s, n, r, o, a, l) {
                        return (s.startAt = i), (s.immediateRender = 0 != s.immediateRender && 0 != i.immediateRender), this.staggerTo(t, e, s, n, r, o, a, l);
                    }),
                    (m.call = function (t, e, s, n) {
                        return this.add(i.delayedCall(0, t, e, s), n);
                    }),
                    (m.set = function (t, e, s) {
                        return (s = this._parseTimeOrLabel(s, 0, !0)), null == e.immediateRender && (e.immediateRender = s === this._time && !this._paused), this.add(new i(t, 0, e), s);
                    }),
                    (s.exportRoot = function (t, e) {
                        null == (t = t || {}).smoothChildTiming && (t.smoothChildTiming = !0);
                        var n,
                            r,
                            o = new s(t),
                            a = o._timeline;
                        for (null == e && (e = !0), a._remove(o, !0), o._startTime = 0, o._rawPrevTime = o._time = o._totalTime = a._time, n = a._first; n; )
                            (r = n._next), (e && n instanceof i && n.target === n.vars.onComplete) || o.add(n, n._startTime - n._delay), (n = r);
                        return a.add(o, 0), o;
                    }),
                    (m.add = function (n, r, o, l) {
                        var c, u, p, d, f, g;
                        if (("number" != typeof r && (r = this._parseTimeOrLabel(r, 0, !0, n)), !(n instanceof t))) {
                            if (n instanceof Array || (n && n.push && a(n))) {
                                for (o = o || "normal", l = l || 0, c = r, u = n.length, p = 0; u > p; p++)
                                    a((d = n[p])) && (d = new s({ tweens: d })),
                                        this.add(d, c),
                                        "string" != typeof d && "function" != typeof d && ("sequence" === o ? (c = d._startTime + d.totalDuration() / d._timeScale) : "start" === o && (d._startTime -= d.delay())),
                                        (c += l);
                                return this._uncache(!0);
                            }
                            if ("string" == typeof n) return this.addLabel(n, r);
                            if ("function" != typeof n) throw "Cannot add " + n + " into the timeline; it is not a tween, timeline, function, or string.";
                            n = i.delayedCall(0, n);
                        }
                        if ((e.prototype.add.call(this, n, r), (this._gc || this._time === this._duration) && !this._paused && this._duration < this.duration()))
                            for (f = this, g = f.rawTime() > n._startTime; f._timeline; ) g && f._timeline.smoothChildTiming ? f.totalTime(f._totalTime, !0) : f._gc && f._enabled(!0, !1), (f = f._timeline);
                        return this;
                    }),
                    (m.remove = function (e) {
                        if (e instanceof t) return this._remove(e, !1);
                        if (e instanceof Array || (e && e.push && a(e))) {
                            for (var i = e.length; --i > -1; ) this.remove(e[i]);
                            return this;
                        }
                        return "string" == typeof e ? this.removeLabel(e) : this.kill(null, e);
                    }),
                    (m._remove = function (t, i) {
                        e.prototype._remove.call(this, t, i);
                        var s = this._last;
                        return (
                            s
                                ? this._time > s._startTime + s._totalDuration / s._timeScale && ((this._time = this.duration()), (this._totalTime = this._totalDuration))
                                : (this._time = this._totalTime = this._duration = this._totalDuration = 0),
                            this
                        );
                    }),
                    (m.append = function (t, e) {
                        return this.add(t, this._parseTimeOrLabel(null, e, !0, t));
                    }),
                    (m.insert = m.insertMultiple = function (t, e, i, s) {
                        return this.add(t, e || 0, i, s);
                    }),
                    (m.appendMultiple = function (t, e, i, s) {
                        return this.add(t, this._parseTimeOrLabel(null, e, !0, t), i, s);
                    }),
                    (m.addLabel = function (t, e) {
                        return (this._labels[t] = this._parseTimeOrLabel(e)), this;
                    }),
                    (m.addPause = function (t, e, s, n) {
                        var r = i.delayedCall(0, f, ["{self}", e, s, n], this);
                        return (r.data = "isPause"), this.add(r, t);
                    }),
                    (m.removeLabel = function (t) {
                        return delete this._labels[t], this;
                    }),
                    (m.getLabelTime = function (t) {
                        return null != this._labels[t] ? this._labels[t] : -1;
                    }),
                    (m._parseTimeOrLabel = function (e, i, s, n) {
                        var r;
                        if (n instanceof t && n.timeline === this) this.remove(n);
                        else if (n && (n instanceof Array || (n.push && a(n)))) for (r = n.length; --r > -1; ) n[r] instanceof t && n[r].timeline === this && this.remove(n[r]);
                        if ("string" == typeof i) return this._parseTimeOrLabel(i, s && "number" == typeof e && null == this._labels[i] ? e - this.duration() : 0, s);
                        if (((i = i || 0), "string" == typeof e && (isNaN(e) || null != this._labels[e]))) {
                            if (-1 === (r = e.indexOf("="))) return null == this._labels[e] ? (s ? (this._labels[e] = this.duration() + i) : i) : this._labels[e] + i;
                            (i = parseInt(e.charAt(r - 1) + "1", 10) * Number(e.substr(r + 1))), (e = r > 1 ? this._parseTimeOrLabel(e.substr(0, r - 1), 0, s) : this.duration());
                        } else null == e && (e = this.duration());
                        return Number(e) + i;
                    }),
                    (m.seek = function (t, e) {
                        return this.totalTime("number" == typeof t ? t : this._parseTimeOrLabel(t), !1 !== e);
                    }),
                    (m.stop = function () {
                        return this.paused(!0);
                    }),
                    (m.gotoAndPlay = function (t, e) {
                        return this.play(t, e);
                    }),
                    (m.gotoAndStop = function (t, e) {
                        return this.pause(t, e);
                    }),
                    (m.render = function (t, e, i) {
                        this._gc && this._enabled(!0, !1);
                        var s,
                            n,
                            r,
                            o,
                            a,
                            p = this._dirty ? this.totalDuration() : this._totalDuration,
                            d = this._time,
                            f = this._startTime,
                            g = this._timeScale,
                            m = this._paused;
                        if (t >= p)
                            (this._totalTime = this._time = p),
                                this._reversed ||
                                    this._hasPausedChild() ||
                                    ((n = !0),
                                    (o = "onComplete"),
                                    (a = !!this._timeline.autoRemoveChildren),
                                    0 === this._duration && (0 === t || 0 > this._rawPrevTime || 1e-10 === this._rawPrevTime) && this._rawPrevTime !== t && this._first && ((a = !0), this._rawPrevTime > 1e-10 && (o = "onReverseComplete"))),
                                (this._rawPrevTime = this._duration || !e || t || this._rawPrevTime === t ? t : 1e-10),
                                (t = p + 1e-4);
                        else if (1e-7 > t) {
                            if (
                                ((this._totalTime = this._time = 0),
                                (0 !== d || (0 === this._duration && 1e-10 !== this._rawPrevTime && (this._rawPrevTime > 0 || (0 > t && this._rawPrevTime >= 0)))) && ((o = "onReverseComplete"), (n = this._reversed)),
                                0 > t)
                            )
                                (this._active = !1), this._timeline.autoRemoveChildren && this._reversed ? ((a = n = !0), (o = "onReverseComplete")) : this._rawPrevTime >= 0 && this._first && (a = !0), (this._rawPrevTime = t);
                            else {
                                if (((this._rawPrevTime = this._duration || !e || t || this._rawPrevTime === t ? t : 1e-10), 0 === t && n)) for (s = this._first; s && 0 === s._startTime; ) s._duration || (n = !1), (s = s._next);
                                (t = 0), this._initted || (a = !0);
                            }
                        } else this._totalTime = this._time = this._rawPrevTime = t;
                        if ((this._time !== d && this._first) || i || a) {
                            if (
                                (this._initted || (this._initted = !0),
                                this._active || (!this._paused && this._time !== d && t > 0 && (this._active = !0)),
                                0 === d && this.vars.onStart && 0 !== this._time && (e || this.vars.onStart.apply(this.vars.onStartScope || this, this.vars.onStartParams || u)),
                                this._time >= d)
                            )
                                for (s = this._first; s && ((r = s._next), !this._paused || m); )
                                    (s._active || (s._startTime <= this._time && !s._paused && !s._gc)) &&
                                        (s._reversed ? s.render((s._dirty ? s.totalDuration() : s._totalDuration) - (t - s._startTime) * s._timeScale, e, i) : s.render((t - s._startTime) * s._timeScale, e, i)),
                                        (s = r);
                            else
                                for (s = this._last; s && ((r = s._prev), !this._paused || m); )
                                    (s._active || (d >= s._startTime && !s._paused && !s._gc)) &&
                                        (s._reversed ? s.render((s._dirty ? s.totalDuration() : s._totalDuration) - (t - s._startTime) * s._timeScale, e, i) : s.render((t - s._startTime) * s._timeScale, e, i)),
                                        (s = r);
                            this._onUpdate && (e || (l.length && c(), this._onUpdate.apply(this.vars.onUpdateScope || this, this.vars.onUpdateParams || u))),
                                o &&
                                    (this._gc ||
                                        ((f === this._startTime || g !== this._timeScale) &&
                                            (0 === this._time || p >= this.totalDuration()) &&
                                            (n && (l.length && c(), this._timeline.autoRemoveChildren && this._enabled(!1, !1), (this._active = !1)),
                                            !e && this.vars[o] && this.vars[o].apply(this.vars[o + "Scope"] || this, this.vars[o + "Params"] || u))));
                        }
                    }),
                    (m._hasPausedChild = function () {
                        for (var t = this._first; t; ) {
                            if (t._paused || (t instanceof s && t._hasPausedChild())) return !0;
                            t = t._next;
                        }
                        return !1;
                    }),
                    (m.getChildren = function (t, e, s, n) {
                        n = n || -9999999999;
                        for (var r = [], o = this._first, a = 0; o; )
                            n > o._startTime || (o instanceof i ? !1 !== e && (r[a++] = o) : (!1 !== s && (r[a++] = o), !1 !== t && (a = (r = r.concat(o.getChildren(!0, e, s))).length))), (o = o._next);
                        return r;
                    }),
                    (m.getTweensOf = function (t, e) {
                        var s,
                            n,
                            r = this._gc,
                            o = [],
                            a = 0;
                        for (r && this._enabled(!0, !0), n = (s = i.getTweensOf(t)).length; --n > -1; ) (s[n].timeline === this || (e && this._contains(s[n]))) && (o[a++] = s[n]);
                        return r && this._enabled(!1, !0), o;
                    }),
                    (m.recent = function () {
                        return this._recent;
                    }),
                    (m._contains = function (t) {
                        for (var e = t.timeline; e; ) {
                            if (e === this) return !0;
                            e = e.timeline;
                        }
                        return !1;
                    }),
                    (m.shiftChildren = function (t, e, i) {
                        i = i || 0;
                        for (var s, n = this._first, r = this._labels; n; ) n._startTime >= i && (n._startTime += t), (n = n._next);
                        if (e) for (s in r) r[s] >= i && (r[s] += t);
                        return this._uncache(!0);
                    }),
                    (m._kill = function (t, e) {
                        if (!t && !e) return this._enabled(!1, !1);
                        for (var i = e ? this.getTweensOf(e) : this.getChildren(!0, !0, !1), s = i.length, n = !1; --s > -1; ) i[s]._kill(t, e) && (n = !0);
                        return n;
                    }),
                    (m.clear = function (t) {
                        var e = this.getChildren(!1, !0, !0),
                            i = e.length;
                        for (this._time = this._totalTime = 0; --i > -1; ) e[i]._enabled(!1, !1);
                        return !1 !== t && (this._labels = {}), this._uncache(!0);
                    }),
                    (m.invalidate = function () {
                        for (var e = this._first; e; ) e.invalidate(), (e = e._next);
                        return t.prototype.invalidate.call(this);
                    }),
                    (m._enabled = function (t, i) {
                        if (t === this._gc) for (var s = this._first; s; ) s._enabled(t, !0), (s = s._next);
                        return e.prototype._enabled.call(this, t, i);
                    }),
                    (m.totalTime = function () {
                        this._forcingPlayhead = !0;
                        var e = t.prototype.totalTime.apply(this, arguments);
                        return (this._forcingPlayhead = !1), e;
                    }),
                    (m.duration = function (t) {
                        return arguments.length ? (0 !== this.duration() && 0 !== t && this.timeScale(this._duration / t), this) : (this._dirty && this.totalDuration(), this._duration);
                    }),
                    (m.totalDuration = function (t) {
                        if (!arguments.length) {
                            if (this._dirty) {
                                for (var e, i, s = 0, n = this._last, r = 999999999999; n; )
                                    (e = n._prev),
                                        n._dirty && n.totalDuration(),
                                        n._startTime > r && this._sortChildren && !n._paused ? this.add(n, n._startTime - n._delay) : (r = n._startTime),
                                        0 > n._startTime &&
                                            !n._paused &&
                                            ((s -= n._startTime), this._timeline.smoothChildTiming && (this._startTime += n._startTime / this._timeScale), this.shiftChildren(-n._startTime, !1, -9999999999), (r = 0)),
                                        (i = n._startTime + n._totalDuration / n._timeScale) > s && (s = i),
                                        (n = e);
                                (this._duration = this._totalDuration = s), (this._dirty = !1);
                            }
                            return this._totalDuration;
                        }
                        return 0 !== this.totalDuration() && 0 !== t && this.timeScale(this._totalDuration / t), this;
                    }),
                    (m.paused = function (e) {
                        if (!e) for (var i = this._first, s = this._time; i; ) i._startTime === s && "isPause" === i.data && (i._rawPrevTime = 0), (i = i._next);
                        return t.prototype.paused.apply(this, arguments);
                    }),
                    (m.usesFrames = function () {
                        for (var e = this._timeline; e._timeline; ) e = e._timeline;
                        return e === t._rootFramesTimeline;
                    }),
                    (m.rawTime = function () {
                        return this._paused ? this._totalTime : (this._timeline.rawTime() - this._startTime) * this._timeScale;
                    }),
                    s
                );
            },
            !0
        ),
        _gsScope._gsDefine(
            "TimelineMax",
            ["TimelineLite", "TweenLite", "easing.Ease"],
            function (t, e, i) {
                var s = function (e) {
                        t.call(this, e), (this._repeat = this.vars.repeat || 0), (this._repeatDelay = this.vars.repeatDelay || 0), (this._cycle = 0), (this._yoyo = !0 === this.vars.yoyo), (this._dirty = !0);
                    },
                    n = [],
                    r = e._internals,
                    o = r.lazyTweens,
                    a = r.lazyRender,
                    l = new i(null, null, 1, 0),
                    c = (s.prototype = new t());
                return (
                    (c.constructor = s),
                    (c.kill()._gc = !1),
                    (s.version = "1.16.1"),
                    (c.invalidate = function () {
                        return (this._yoyo = !0 === this.vars.yoyo), (this._repeat = this.vars.repeat || 0), (this._repeatDelay = this.vars.repeatDelay || 0), this._uncache(!0), t.prototype.invalidate.call(this);
                    }),
                    (c.addCallback = function (t, i, s, n) {
                        return this.add(e.delayedCall(0, t, s, n), i);
                    }),
                    (c.removeCallback = function (t, e) {
                        if (t) {
                            if (null == e) this._kill(null, t);
                            else for (var i = this.getTweensOf(t, !1), s = i.length, n = this._parseTimeOrLabel(e); --s > -1; ) i[s]._startTime === n && i[s]._enabled(!1, !1);
                        }
                        return this;
                    }),
                    (c.removePause = function (e) {
                        return this.removeCallback(t._internals.pauseCallback, e);
                    }),
                    (c.tweenTo = function (t, i) {
                        i = i || {};
                        var s,
                            r,
                            o,
                            a = { ease: l, useFrames: this.usesFrames(), immediateRender: !1 };
                        for (r in i) a[r] = i[r];
                        return (
                            (a.time = this._parseTimeOrLabel(t)),
                            (s = Math.abs(Number(a.time) - this._time) / this._timeScale || 0.001),
                            (o = new e(this, s, a)),
                            (a.onStart = function () {
                                o.target.paused(!0),
                                    o.vars.time !== o.target.time() && s === o.duration() && o.duration(Math.abs(o.vars.time - o.target.time()) / o.target._timeScale),
                                    i.onStart && i.onStart.apply(i.onStartScope || o, i.onStartParams || n);
                            }),
                            o
                        );
                    }),
                    (c.tweenFromTo = function (t, e, i) {
                        (i = i || {}), (t = this._parseTimeOrLabel(t)), (i.startAt = { onComplete: this.seek, onCompleteParams: [t], onCompleteScope: this }), (i.immediateRender = !1 !== i.immediateRender);
                        var s = this.tweenTo(e, i);
                        return s.duration(Math.abs(s.vars.time - t) / this._timeScale || 0.001);
                    }),
                    (c.render = function (t, e, i) {
                        this._gc && this._enabled(!0, !1);
                        var s,
                            r,
                            l,
                            c,
                            u,
                            p,
                            d = this._dirty ? this.totalDuration() : this._totalDuration,
                            f = this._duration,
                            g = this._time,
                            m = this._totalTime,
                            v = this._startTime,
                            y = this._timeScale,
                            _ = this._rawPrevTime,
                            b = this._paused,
                            x = this._cycle;
                        if (t >= d)
                            this._locked || ((this._totalTime = d), (this._cycle = this._repeat)),
                                this._reversed ||
                                    this._hasPausedChild() ||
                                    ((r = !0),
                                    (c = "onComplete"),
                                    (u = !!this._timeline.autoRemoveChildren),
                                    0 === this._duration && (0 === t || 0 > _ || 1e-10 === _) && _ !== t && this._first && ((u = !0), _ > 1e-10 && (c = "onReverseComplete"))),
                                (this._rawPrevTime = this._duration || !e || t || this._rawPrevTime === t ? t : 1e-10),
                                this._yoyo && 0 != (1 & this._cycle) ? (this._time = t = 0) : ((this._time = f), (t = f + 1e-4));
                        else if (1e-7 > t) {
                            if (
                                (this._locked || (this._totalTime = this._cycle = 0),
                                (this._time = 0),
                                (0 !== g || (0 === f && 1e-10 !== _ && (_ > 0 || (0 > t && _ >= 0)) && !this._locked)) && ((c = "onReverseComplete"), (r = this._reversed)),
                                0 > t)
                            )
                                (this._active = !1), this._timeline.autoRemoveChildren && this._reversed ? ((u = r = !0), (c = "onReverseComplete")) : _ >= 0 && this._first && (u = !0), (this._rawPrevTime = t);
                            else {
                                if (((this._rawPrevTime = f || !e || t || this._rawPrevTime === t ? t : 1e-10), 0 === t && r)) for (s = this._first; s && 0 === s._startTime; ) s._duration || (r = !1), (s = s._next);
                                (t = 0), this._initted || (u = !0);
                            }
                        } else
                            0 === f && 0 > _ && (u = !0),
                                (this._time = this._rawPrevTime = t),
                                this._locked ||
                                    ((this._totalTime = t),
                                    0 !== this._repeat &&
                                        ((p = f + this._repeatDelay),
                                        (this._cycle = (this._totalTime / p) >> 0),
                                        0 !== this._cycle && this._cycle === this._totalTime / p && this._cycle--,
                                        (this._time = this._totalTime - this._cycle * p),
                                        this._yoyo && 0 != (1 & this._cycle) && (this._time = f - this._time),
                                        this._time > f ? ((this._time = f), (t = f + 1e-4)) : 0 > this._time ? (this._time = t = 0) : (t = this._time)));
                        if (this._cycle !== x && !this._locked) {
                            var T = this._yoyo && 0 != (1 & x),
                                C = T === (this._yoyo && 0 != (1 & this._cycle)),
                                A = this._totalTime,
                                P = this._cycle,
                                S = this._rawPrevTime,
                                k = this._time;
                            if (
                                ((this._totalTime = x * f),
                                x > this._cycle ? (T = !T) : (this._totalTime += f),
                                (this._time = g),
                                (this._rawPrevTime = 0 === f ? _ - 1e-4 : _),
                                (this._cycle = x),
                                (this._locked = !0),
                                (g = T ? 0 : f),
                                this.render(g, e, 0 === f),
                                e || this._gc || (this.vars.onRepeat && this.vars.onRepeat.apply(this.vars.onRepeatScope || this, this.vars.onRepeatParams || n)),
                                C && ((g = T ? f + 1e-4 : -0.0001), this.render(g, !0, !1)),
                                (this._locked = !1),
                                this._paused && !b)
                            )
                                return;
                            (this._time = k), (this._totalTime = A), (this._cycle = P), (this._rawPrevTime = S);
                        }
                        if (!((this._time !== g && this._first) || i || u)) return void (m !== this._totalTime && this._onUpdate && (e || this._onUpdate.apply(this.vars.onUpdateScope || this, this.vars.onUpdateParams || n)));
                        if (
                            (this._initted || (this._initted = !0),
                            this._active || (!this._paused && this._totalTime !== m && t > 0 && (this._active = !0)),
                            0 === m && this.vars.onStart && 0 !== this._totalTime && (e || this.vars.onStart.apply(this.vars.onStartScope || this, this.vars.onStartParams || n)),
                            this._time >= g)
                        )
                            for (s = this._first; s && ((l = s._next), !this._paused || b); )
                                (s._active || (s._startTime <= this._time && !s._paused && !s._gc)) &&
                                    (s._reversed ? s.render((s._dirty ? s.totalDuration() : s._totalDuration) - (t - s._startTime) * s._timeScale, e, i) : s.render((t - s._startTime) * s._timeScale, e, i)),
                                    (s = l);
                        else
                            for (s = this._last; s && ((l = s._prev), !this._paused || b); )
                                (s._active || (g >= s._startTime && !s._paused && !s._gc)) &&
                                    (s._reversed ? s.render((s._dirty ? s.totalDuration() : s._totalDuration) - (t - s._startTime) * s._timeScale, e, i) : s.render((t - s._startTime) * s._timeScale, e, i)),
                                    (s = l);
                        this._onUpdate && (e || (o.length && a(), this._onUpdate.apply(this.vars.onUpdateScope || this, this.vars.onUpdateParams || n))),
                            c &&
                                (this._locked ||
                                    this._gc ||
                                    ((v === this._startTime || y !== this._timeScale) &&
                                        (0 === this._time || d >= this.totalDuration()) &&
                                        (r && (o.length && a(), this._timeline.autoRemoveChildren && this._enabled(!1, !1), (this._active = !1)),
                                        !e && this.vars[c] && this.vars[c].apply(this.vars[c + "Scope"] || this, this.vars[c + "Params"] || n))));
                    }),
                    (c.getActive = function (t, e, i) {
                        null == t && (t = !0), null == e && (e = !0), null == i && (i = !1);
                        var s,
                            n,
                            r = [],
                            o = this.getChildren(t, e, i),
                            a = 0,
                            l = o.length;
                        for (s = 0; l > s; s++) (n = o[s]).isActive() && (r[a++] = n);
                        return r;
                    }),
                    (c.getLabelAfter = function (t) {
                        t || (0 !== t && (t = this._time));
                        var e,
                            i = this.getLabelsArray(),
                            s = i.length;
                        for (e = 0; s > e; e++) if (i[e].time > t) return i[e].name;
                        return null;
                    }),
                    (c.getLabelBefore = function (t) {
                        null == t && (t = this._time);
                        for (var e = this.getLabelsArray(), i = e.length; --i > -1; ) if (t > e[i].time) return e[i].name;
                        return null;
                    }),
                    (c.getLabelsArray = function () {
                        var t,
                            e = [],
                            i = 0;
                        for (t in this._labels) e[i++] = { time: this._labels[t], name: t };
                        return (
                            e.sort(function (t, e) {
                                return t.time - e.time;
                            }),
                            e
                        );
                    }),
                    (c.progress = function (t, e) {
                        return arguments.length ? this.totalTime(this.duration() * (this._yoyo && 0 != (1 & this._cycle) ? 1 - t : t) + this._cycle * (this._duration + this._repeatDelay), e) : this._time / this.duration();
                    }),
                    (c.totalProgress = function (t, e) {
                        return arguments.length ? this.totalTime(this.totalDuration() * t, e) : this._totalTime / this.totalDuration();
                    }),
                    (c.totalDuration = function (e) {
                        return arguments.length
                            ? -1 === this._repeat
                                ? this
                                : this.duration((e - this._repeat * this._repeatDelay) / (this._repeat + 1))
                            : (this._dirty && (t.prototype.totalDuration.call(this), (this._totalDuration = -1 === this._repeat ? 999999999999 : this._duration * (this._repeat + 1) + this._repeatDelay * this._repeat)), this._totalDuration);
                    }),
                    (c.time = function (t, e) {
                        return arguments.length
                            ? (this._dirty && this.totalDuration(),
                              t > this._duration && (t = this._duration),
                              this._yoyo && 0 != (1 & this._cycle) ? (t = this._duration - t + this._cycle * (this._duration + this._repeatDelay)) : 0 !== this._repeat && (t += this._cycle * (this._duration + this._repeatDelay)),
                              this.totalTime(t, e))
                            : this._time;
                    }),
                    (c.repeat = function (t) {
                        return arguments.length ? ((this._repeat = t), this._uncache(!0)) : this._repeat;
                    }),
                    (c.repeatDelay = function (t) {
                        return arguments.length ? ((this._repeatDelay = t), this._uncache(!0)) : this._repeatDelay;
                    }),
                    (c.yoyo = function (t) {
                        return arguments.length ? ((this._yoyo = t), this) : this._yoyo;
                    }),
                    (c.currentLabel = function (t) {
                        return arguments.length ? this.seek(t, !0) : this.getLabelBefore(this._time + 1e-8);
                    }),
                    s
                );
            },
            !0
        ),
        (t = 180 / Math.PI),
        (e = []),
        (i = []),
        (s = []),
        (n = {}),
        (r = _gsScope._gsDefine.globals),
        (o = function (t, e, i, s) {
            (this.a = t), (this.b = e), (this.c = i), (this.d = s), (this.da = s - t), (this.ca = i - t), (this.ba = e - t);
        }),
        (a = function (t, e, i, s) {
            var n = { a: t },
                r = {},
                o = {},
                a = { c: s },
                l = (t + e) / 2,
                c = (e + i) / 2,
                u = (i + s) / 2,
                p = (l + c) / 2,
                d = (c + u) / 2,
                f = (d - p) / 8;
            return (n.b = l + (t - l) / 4), (r.b = p + f), (n.c = r.a = (n.b + r.b) / 2), (r.c = o.a = (p + d) / 2), (o.b = d - f), (a.b = u + (s - u) / 4), (o.c = a.a = (o.b + a.b) / 2), [n, r, o, a];
        }),
        (l = function (t, n, r, o, l) {
            var c,
                u,
                p,
                d,
                f,
                g,
                m,
                v,
                y,
                _,
                b,
                x,
                T,
                C = t.length - 1,
                A = 0,
                P = t[0].a;
            for (c = 0; C > c; c++)
                (u = (f = t[A]).a),
                    (p = f.d),
                    (d = t[A + 1].d),
                    l
                        ? ((b = e[c]),
                          (T = (0.25 * ((x = i[c]) + b) * n) / (o ? 0.5 : s[c] || 0.5)),
                          (g = p - (p - u) * (o ? 0.5 * n : 0 !== b ? T / b : 0)),
                          (m = p + (d - p) * (o ? 0.5 * n : 0 !== x ? T / x : 0)),
                          (v = p - (g + (((m - g) * ((3 * b) / (b + x) + 0.5)) / 4 || 0))))
                        : ((g = p - 0.5 * (p - u) * n), (m = p + 0.5 * (d - p) * n), (v = p - (g + m) / 2)),
                    (g += v),
                    (m += v),
                    (f.c = y = g),
                    (f.b = 0 !== c ? P : (P = f.a + 0.6 * (f.c - f.a))),
                    (f.da = p - u),
                    (f.ca = y - u),
                    (f.ba = P - u),
                    r ? ((_ = a(u, P, y, p)), t.splice(A, 1, _[0], _[1], _[2], _[3]), (A += 4)) : A++,
                    (P = m);
            ((f = t[A]).b = P), (f.c = P + 0.4 * (f.d - P)), (f.da = f.d - f.a), (f.ca = f.c - f.a), (f.ba = P - f.a), r && ((_ = a(f.a, P, f.c, f.d)), t.splice(A, 1, _[0], _[1], _[2], _[3]));
        }),
        (c = function (t, s, n, r) {
            var a,
                l,
                c,
                u,
                p,
                d,
                f = [];
            if (r) for (l = (t = [r].concat(t)).length; --l > -1; ) "string" == typeof (d = t[l][s]) && "=" === d.charAt(1) && (t[l][s] = r[s] + Number(d.charAt(0) + d.substr(2)));
            if (0 > (a = t.length - 2)) return (f[0] = new o(t[0][s], 0, 0, t[-1 > a ? 0 : 1][s])), f;
            for (l = 0; a > l; l++) (c = t[l][s]), (u = t[l + 1][s]), (f[l] = new o(c, 0, 0, u)), n && ((p = t[l + 2][s]), (e[l] = (e[l] || 0) + (u - c) * (u - c)), (i[l] = (i[l] || 0) + (p - u) * (p - u)));
            return (f[l] = new o(t[l][s], 0, 0, t[l + 1][s])), f;
        }),
        (u = function (t, r, o, a, u, p) {
            var d,
                f,
                g,
                m,
                v,
                y,
                _,
                b,
                x = {},
                T = [],
                C = p || t[0];
            for (f in ((u = "string" == typeof u ? "," + u + "," : ",x,y,z,left,top,right,bottom,marginTop,marginLeft,marginRight,marginBottom,paddingLeft,paddingTop,paddingRight,paddingBottom,backgroundPosition,backgroundPosition_y,"),
            null == r && (r = 1),
            t[0]))
                T.push(f);
            if (t.length > 1) {
                for (b = t[t.length - 1], _ = !0, d = T.length; --d > -1; )
                    if (Math.abs(C[(f = T[d])] - b[f]) > 0.05) {
                        _ = !1;
                        break;
                    }
                _ && ((t = t.concat()), p && t.unshift(p), t.push(t[1]), (p = t[t.length - 3]));
            }
            for (e.length = i.length = s.length = 0, d = T.length; --d > -1; ) (n[(f = T[d])] = -1 !== u.indexOf("," + f + ",")), (x[f] = c(t, f, n[f], p));
            for (d = e.length; --d > -1; ) (e[d] = Math.sqrt(e[d])), (i[d] = Math.sqrt(i[d]));
            if (!a) {
                for (d = T.length; --d > -1; ) if (n[f]) for (y = (g = x[T[d]]).length - 1, m = 0; y > m; m++) (v = g[m + 1].da / i[m] + g[m].da / e[m]), (s[m] = (s[m] || 0) + v * v);
                for (d = s.length; --d > -1; ) s[d] = Math.sqrt(s[d]);
            }
            for (d = T.length, m = o ? 4 : 1; --d > -1; ) l((g = x[(f = T[d])]), r, o, a, n[f]), _ && (g.splice(0, m), g.splice(g.length - m, m));
            return x;
        }),
        (p = function (t, e, i) {
            var s,
                n,
                r,
                a,
                l,
                c,
                u,
                p,
                d,
                f,
                g,
                m = {},
                v = "cubic" === (e = e || "soft") ? 3 : 2,
                y = "soft" === e,
                _ = [];
            if ((y && i && (t = [i].concat(t)), null == t || v + 1 > t.length)) throw "invalid Bezier data";
            for (d in t[0]) _.push(d);
            for (c = _.length; --c > -1; ) {
                for (m[(d = _[c])] = l = [], f = 0, p = t.length, u = 0; p > u; u++)
                    (s = null == i ? t[u][d] : "string" == typeof (g = t[u][d]) && "=" === g.charAt(1) ? i[d] + Number(g.charAt(0) + g.substr(2)) : Number(g)), y && u > 1 && p - 1 > u && (l[f++] = (s + l[f - 2]) / 2), (l[f++] = s);
                for (p = f - v + 1, f = 0, u = 0; p > u; u += v) (s = l[u]), (n = l[u + 1]), (r = l[u + 2]), (a = 2 === v ? 0 : l[u + 3]), (l[f++] = g = 3 === v ? new o(s, n, r, a) : new o(s, (2 * n + s) / 3, (2 * n + r) / 3, r));
                l.length = f;
            }
            return m;
        }),
        (d = function (t, e, i) {
            for (var s, n, r, o, a, l, c, u, p, d, f, g = 1 / i, m = t.length; --m > -1; )
                for (r = (d = t[m]).a, o = d.d - r, a = d.c - r, l = d.b - r, s = n = 0, u = 1; i >= u; u++) (p = 1 - (c = g * u)), (s = n - (n = (c * c * o + 3 * p * (c * a + p * l)) * c)), (e[(f = m * i + u - 1)] = (e[f] || 0) + s * s);
        }),
        (f = function (t, e) {
            var i,
                s,
                n,
                r,
                o = [],
                a = [],
                l = 0,
                c = 0,
                u = (e = e >> 0 || 6) - 1,
                p = [],
                f = [];
            for (i in t) d(t[i], o, e);
            for (n = o.length, s = 0; n > s; s++) (l += Math.sqrt(o[s])), (f[(r = s % e)] = l), r === u && ((c += l), (p[(r = (s / e) >> 0)] = f), (a[r] = c), (l = 0), (f = []));
            return { length: c, lengths: a, segments: p };
        }),
        (m = (g = _gsScope._gsDefine.plugin({
            propName: "bezier",
            priority: -1,
            version: "1.3.4",
            API: 2,
            global: !0,
            init: function (t, e, i) {
                (this._target = t), e instanceof Array && (e = { values: e }), (this._func = {}), (this._round = {}), (this._props = []), (this._timeRes = null == e.timeResolution ? 6 : parseInt(e.timeResolution, 10));
                var s,
                    n,
                    r,
                    o,
                    a,
                    l = e.values || [],
                    c = {},
                    d = l[0],
                    g = e.autoRotate || i.vars.orientToBezier;
                for (s in ((this._autoRotate = g ? (g instanceof Array ? g : [["x", "y", "rotation", !0 === g ? 0 : Number(g) || 0]]) : null), d)) this._props.push(s);
                for (r = this._props.length; --r > -1; )
                    (s = this._props[r]),
                        this._overwriteProps.push(s),
                        (n = this._func[s] = "function" == typeof t[s]),
                        (c[s] = n ? t[s.indexOf("set") || "function" != typeof t["get" + s.substr(3)] ? s : "get" + s.substr(3)]() : parseFloat(t[s])),
                        a || (c[s] !== l[0][s] && (a = c));
                if (
                    ((this._beziers = "cubic" !== e.type && "quadratic" !== e.type && "soft" !== e.type ? u(l, isNaN(e.curviness) ? 1 : e.curviness, !1, "thruBasic" === e.type, e.correlate, a) : p(l, e.type, c)),
                    (this._segCount = this._beziers[s].length),
                    this._timeRes)
                ) {
                    var m = f(this._beziers, this._timeRes);
                    (this._length = m.length),
                        (this._lengths = m.lengths),
                        (this._segments = m.segments),
                        (this._l1 = this._li = this._s1 = this._si = 0),
                        (this._l2 = this._lengths[0]),
                        (this._curSeg = this._segments[0]),
                        (this._s2 = this._curSeg[0]),
                        (this._prec = 1 / this._curSeg.length);
                }
                if ((g = this._autoRotate))
                    for (this._initialRotations = [], g[0] instanceof Array || (this._autoRotate = g = [g]), r = g.length; --r > -1; ) {
                        for (o = 0; 3 > o; o++) (s = g[r][o]), (this._func[s] = "function" == typeof t[s] && t[s.indexOf("set") || "function" != typeof t["get" + s.substr(3)] ? s : "get" + s.substr(3)]);
                        (s = g[r][2]), (this._initialRotations[r] = this._func[s] ? this._func[s].call(this._target) : this._target[s]);
                    }
                return (this._startRatio = i.vars.runBackwards ? 1 : 0), !0;
            },
            set: function (e) {
                var i,
                    s,
                    n,
                    r,
                    o,
                    a,
                    l,
                    c,
                    u,
                    p,
                    d = this._segCount,
                    f = this._func,
                    g = this._target,
                    m = e !== this._startRatio;
                if (this._timeRes) {
                    if (((u = this._lengths), (p = this._curSeg), (e *= this._length), (n = this._li), e > this._l2 && d - 1 > n)) {
                        for (c = d - 1; c > n && e >= (this._l2 = u[++n]); );
                        (this._l1 = u[n - 1]), (this._li = n), (this._curSeg = p = this._segments[n]), (this._s2 = p[(this._s1 = this._si = 0)]);
                    } else if (this._l1 > e && n > 0) {
                        for (; n > 0 && (this._l1 = u[--n]) >= e; );
                        0 === n && this._l1 > e ? (this._l1 = 0) : n++, (this._l2 = u[n]), (this._li = n), (this._curSeg = p = this._segments[n]), (this._s1 = p[(this._si = p.length - 1) - 1] || 0), (this._s2 = p[this._si]);
                    }
                    if (((i = n), (e -= this._l1), (n = this._si), e > this._s2 && p.length - 1 > n)) {
                        for (c = p.length - 1; c > n && e >= (this._s2 = p[++n]); );
                        (this._s1 = p[n - 1]), (this._si = n);
                    } else if (this._s1 > e && n > 0) {
                        for (; n > 0 && (this._s1 = p[--n]) >= e; );
                        0 === n && this._s1 > e ? (this._s1 = 0) : n++, (this._s2 = p[n]), (this._si = n);
                    }
                    a = (n + (e - this._s1) / (this._s2 - this._s1)) * this._prec;
                } else (i = 0 > e ? 0 : e >= 1 ? d - 1 : (d * e) >> 0), (a = (e - i * (1 / d)) * d);
                for (s = 1 - a, n = this._props.length; --n > -1; )
                    (r = this._props[n]), (l = (a * a * (o = this._beziers[r][i]).da + 3 * s * (a * o.ca + s * o.ba)) * a + o.a), this._round[r] && (l = Math.round(l)), f[r] ? g[r](l) : (g[r] = l);
                if (this._autoRotate) {
                    var v,
                        y,
                        _,
                        b,
                        x,
                        T,
                        C,
                        A = this._autoRotate;
                    for (n = A.length; --n > -1; )
                        (r = A[n][2]),
                            (T = A[n][3] || 0),
                            (C = !0 === A[n][4] ? 1 : t),
                            (o = this._beziers[A[n][0]]),
                            (v = this._beziers[A[n][1]]),
                            o &&
                                v &&
                                ((o = o[i]),
                                (v = v[i]),
                                (y = o.a + (o.b - o.a) * a),
                                (b = o.b + (o.c - o.b) * a),
                                (y += (b - y) * a),
                                (b += (o.c + (o.d - o.c) * a - b) * a),
                                (_ = v.a + (v.b - v.a) * a),
                                (x = v.b + (v.c - v.b) * a),
                                (_ += (x - _) * a),
                                (x += (v.c + (v.d - v.c) * a - x) * a),
                                (l = m ? Math.atan2(x - _, b - y) * C + T : this._initialRotations[n]),
                                f[r] ? g[r](l) : (g[r] = l));
                }
            },
        })).prototype),
        (g.bezierThrough = u),
        (g.cubicToQuadratic = a),
        (g._autoCSS = !0),
        (g.quadraticToCubic = function (t, e, i) {
            return new o(t, (2 * e + t) / 3, (2 * e + i) / 3, i);
        }),
        (g._cssRegister = function () {
            var t = r.CSSPlugin;
            if (t) {
                var e = t._internals,
                    i = e._parseToProxy,
                    s = e._setPluginRatio,
                    n = e.CSSPropTween;
                e._registerComplexSpecialProp("bezier", {
                    parser: function (t, e, r, o, a, l) {
                        e instanceof Array && (e = { values: e }), (l = new g());
                        var c,
                            u,
                            p,
                            d = e.values,
                            f = d.length - 1,
                            m = [],
                            v = {};
                        if (0 > f) return a;
                        for (c = 0; f >= c; c++) (p = i(t, d[c], o, a, l, f !== c)), (m[c] = p.end);
                        for (u in e) v[u] = e[u];
                        return (
                            (v.values = m),
                            ((a = new n(t, "bezier", 0, 0, p.pt, 2)).data = p),
                            (a.plugin = l),
                            (a.setRatio = s),
                            0 === v.autoRotate && (v.autoRotate = !0),
                            !v.autoRotate ||
                                v.autoRotate instanceof Array ||
                                ((c = !0 === v.autoRotate ? 0 : Number(v.autoRotate)), (v.autoRotate = null != p.end.left ? [["left", "top", "rotation", c, !1]] : null != p.end.x && [["x", "y", "rotation", c, !1]])),
                            v.autoRotate && (o._transform || o._enableTransforms(!1), (p.autoRotate = o._target._gsTransform)),
                            l._onInitTween(p.proxy, v, o._tween),
                            a
                        );
                    },
                });
            }
        }),
        (m._roundProps = function (t, e) {
            for (var i = this._overwriteProps, s = i.length; --s > -1; ) (t[i[s]] || t.bezier || t.bezierThrough) && (this._round[i[s]] = e);
        }),
        (m._kill = function (t) {
            var e,
                i,
                s = this._props;
            for (e in this._beziers) if (e in t) for (delete this._beziers[e], delete this._func[e], i = s.length; --i > -1; ) s[i] === e && s.splice(i, 1);
            return this._super._kill.call(this, t);
        }),
        _gsScope._gsDefine(
            "plugins.CSSPlugin",
            ["plugins.TweenPlugin", "TweenLite"],
            function (t, e) {
                var i,
                    s,
                    n,
                    r,
                    o,
                    a,
                    l = function () {
                        t.call(this, "css"), (this._overwriteProps.length = 0), (this.setRatio = l.prototype.setRatio);
                    },
                    c = _gsScope._gsDefine.globals,
                    u = {},
                    p = (l.prototype = new t("css"));
                (p.constructor = l),
                    (l.version = "1.16.1"),
                    (l.API = 2),
                    (l.defaultTransformPerspective = 0),
                    (l.defaultSkewType = "compensated"),
                    (p = "px"),
                    (l.suffixMap = { top: p, right: p, bottom: p, left: p, width: p, height: p, fontSize: p, padding: p, margin: p, perspective: p, lineHeight: "" });
                var d,
                    f,
                    g,
                    m,
                    v,
                    y,
                    _ = /(?:\d|\-\d|\.\d|\-\.\d)+/g,
                    b = /(?:\d|\-\d|\.\d|\-\.\d|\+=\d|\-=\d|\+=.\d|\-=\.\d)+/g,
                    x = /(?:\+=|\-=|\-|\b)[\d\-\.]+[a-zA-Z0-9]*(?:%|\b)/gi,
                    T = /(?![+-]?\d*\.?\d+|[+-]|e[+-]\d+)[^0-9]/g,
                    C = /(?:\d|\-|\+|=|#|\.)*/g,
                    A = /opacity *= *([^)]*)/i,
                    P = /opacity:([^;]*)/i,
                    S = /alpha\(opacity *=.+?\)/i,
                    k = /^(rgb|hsl)/,
                    E = /([A-Z])/g,
                    O = /-([a-z])/gi,
                    D = /(^(?:url\(\"|url\())|(?:(\"\))$|\)$)/gi,
                    z = function (t, e) {
                        return e.toUpperCase();
                    },
                    L = /(?:Left|Right|Width)/i,
                    R = /(M11|M12|M21|M22)=[\d\-\.e]+/gi,
                    I = /progid\:DXImageTransform\.Microsoft\.Matrix\(.+?\)/i,
                    N = /,(?=[^\)]*(?:\(|$))/gi,
                    M = Math.PI / 180,
                    j = 180 / Math.PI,
                    F = {},
                    B = document,
                    H = function (t) {
                        return B.createElementNS ? B.createElementNS("http://www.w3.org/1999/xhtml", t) : B.createElement(t);
                    },
                    W = H("div"),
                    X = H("img"),
                    q = (l._internals = { _specialProps: u }),
                    Y = navigator.userAgent,
                    V =
                        ((o = Y.indexOf("Android")),
                        (a = H("a")),
                        (v = (g = -1 !== Y.indexOf("Safari") && -1 === Y.indexOf("Chrome") && (-1 === o || Number(Y.substr(o + 8, 1)) > 3)) && 6 > Number(Y.substr(Y.indexOf("Version/") + 8, 1))),
                        (m = -1 !== Y.indexOf("Firefox")),
                        (/MSIE ([0-9]{1,}[\.0-9]{0,})/.exec(Y) || /Trident\/.*rv:([0-9]{1,}[\.0-9]{0,})/.exec(Y)) && (y = parseFloat(RegExp.$1)),
                        !!a && ((a.style.cssText = "top:1px;opacity:.55;"), /^0.55/.test(a.style.opacity))),
                    U = function (t) {
                        return A.test("string" == typeof t ? t : (t.currentStyle ? t.currentStyle.filter : t.style.filter) || "") ? parseFloat(RegExp.$1) / 100 : 1;
                    },
                    Q = function (t) {
                        window.console && console.log(t);
                    },
                    Z = "",
                    G = "",
                    K = function (t, e) {
                        var i,
                            s,
                            n = (e = e || W).style;
                        if (void 0 !== n[t]) return t;
                        for (t = t.charAt(0).toUpperCase() + t.substr(1), i = ["O", "Moz", "ms", "Ms", "Webkit"], s = 5; --s > -1 && void 0 === n[i[s] + t]; );
                        return s >= 0 ? ((Z = "-" + (G = 3 === s ? "ms" : i[s]).toLowerCase() + "-"), G + t) : null;
                    },
                    J = B.defaultView ? B.defaultView.getComputedStyle : function () {},
                    tt = (l.getStyle = function (t, e, i, s, n) {
                        var r;
                        return V || "opacity" !== e
                            ? (!s && t.style[e] ? (r = t.style[e]) : (i = i || J(t)) ? (r = i[e] || i.getPropertyValue(e) || i.getPropertyValue(e.replace(E, "-$1").toLowerCase())) : t.currentStyle && (r = t.currentStyle[e]),
                              null == n || (r && "none" !== r && "auto" !== r && "auto auto" !== r) ? r : n)
                            : U(t);
                    }),
                    te = (q.convertToPixels = function (t, i, s, n, r) {
                        if ("px" === n || !n) return s;
                        if ("auto" === n || !s) return 0;
                        var o,
                            a,
                            c,
                            u = L.test(i),
                            p = t,
                            d = W.style,
                            f = 0 > s;
                        if ((f && (s = -s), "%" === n && -1 !== i.indexOf("border"))) o = (s / 100) * (u ? t.clientWidth : t.clientHeight);
                        else {
                            if (((d.cssText = "border:0 solid red;position:" + tt(t, "position") + ";line-height:0;"), "%" !== n && p.appendChild)) d[u ? "borderLeftWidth" : "borderTopWidth"] = s + n;
                            else {
                                if (((a = (p = t.parentNode || B.body)._gsCache), (c = e.ticker.frame), a && u && a.time === c)) return (a.width * s) / 100;
                                d[u ? "width" : "height"] = s + n;
                            }
                            p.appendChild(W),
                                (o = parseFloat(W[u ? "offsetWidth" : "offsetHeight"])),
                                p.removeChild(W),
                                u && "%" === n && !1 !== l.cacheWidths && (((a = p._gsCache = p._gsCache || {}).time = c), (a.width = 100 * (o / s))),
                                0 !== o || r || (o = te(t, i, s, n, !0));
                        }
                        return f ? -o : o;
                    }),
                    ti = (q.calculateOffset = function (t, e, i) {
                        if ("absolute" !== tt(t, "position", i)) return 0;
                        var s = "left" === e ? "Left" : "Top",
                            n = tt(t, "margin" + s, i);
                        return t["offset" + s] - (te(t, e, parseFloat(n), n.replace(C, "")) || 0);
                    }),
                    ts = function (t, e) {
                        var i,
                            s,
                            n,
                            r = {};
                        if ((e = e || J(t, null))) {
                            if ((i = e.length)) for (; --i > -1; ) (-1 === (n = e[i]).indexOf("-transform") || tO === n) && (r[n.replace(O, z)] = e.getPropertyValue(n));
                            else for (i in e) (-1 === i.indexOf("Transform") || tE === i) && (r[i] = e[i]);
                        } else if ((e = t.currentStyle || t.style)) for (i in e) "string" == typeof i && void 0 === r[i] && (r[i.replace(O, z)] = e[i]);
                        return (
                            V || (r.opacity = U(t)),
                            (s = t9(t, e, !1)),
                            (r.rotation = s.rotation),
                            (r.skewX = s.skewX),
                            (r.scaleX = s.scaleX),
                            (r.scaleY = s.scaleY),
                            (r.x = s.x),
                            (r.y = s.y),
                            tD && ((r.z = s.z), (r.rotationX = s.rotationX), (r.rotationY = s.rotationY), (r.scaleZ = s.scaleZ)),
                            r.filters && delete r.filters,
                            r
                        );
                    },
                    tn = function (t, e, i, s, n) {
                        var r,
                            o,
                            a,
                            l = {},
                            c = t.style;
                        for (o in i)
                            "cssText" !== o &&
                                "length" !== o &&
                                isNaN(o) &&
                                (e[o] !== (r = i[o]) || (n && n[o])) &&
                                -1 === o.indexOf("Origin") &&
                                ("number" == typeof r || "string" == typeof r) &&
                                ((l[o] = "auto" !== r || ("left" !== o && "top" !== o) ? (("" !== r && "auto" !== r && "none" !== r) || "string" != typeof e[o] || "" === e[o].replace(T, "") ? r : 0) : ti(t, o)),
                                void 0 !== c[o] && (a = new tv(c, o, c[o], a)));
                        if (s) for (o in s) "className" !== o && (l[o] = s[o]);
                        return { difs: l, firstMPT: a };
                    },
                    tr = { width: ["Left", "Right"], height: ["Top", "Bottom"] },
                    to = ["marginLeft", "marginRight", "marginTop", "marginBottom"],
                    ta = function (t, e, i) {
                        var s = parseFloat("width" === e ? t.offsetWidth : t.offsetHeight),
                            n = tr[e],
                            r = n.length;
                        for (i = i || J(t, null); --r > -1; ) (s -= parseFloat(tt(t, "padding" + n[r], i, !0)) || 0), (s -= parseFloat(tt(t, "border" + n[r] + "Width", i, !0)) || 0);
                        return s;
                    },
                    tl = function (t, e) {
                        (null == t || "" === t || "auto" === t || "auto auto" === t) && (t = "0 0");
                        var i = t.split(" "),
                            s = -1 !== t.indexOf("left") ? "0%" : -1 !== t.indexOf("right") ? "100%" : i[0],
                            n = -1 !== t.indexOf("top") ? "0%" : -1 !== t.indexOf("bottom") ? "100%" : i[1];
                        return (
                            null == n ? (n = "center" === s ? "50%" : "0") : "center" === n && (n = "50%"),
                            ("center" === s || (isNaN(parseFloat(s)) && -1 === (s + "").indexOf("="))) && (s = "50%"),
                            (t = s + " " + n + (i.length > 2 ? " " + i[2] : "")),
                            e &&
                                ((e.oxp = -1 !== s.indexOf("%")),
                                (e.oyp = -1 !== n.indexOf("%")),
                                (e.oxr = "=" === s.charAt(1)),
                                (e.oyr = "=" === n.charAt(1)),
                                (e.ox = parseFloat(s.replace(T, ""))),
                                (e.oy = parseFloat(n.replace(T, ""))),
                                (e.v = t)),
                            e || t
                        );
                    },
                    th = function (t, e) {
                        return "string" == typeof t && "=" === t.charAt(1) ? parseInt(t.charAt(0) + "1", 10) * parseFloat(t.substr(2)) : parseFloat(t) - parseFloat(e);
                    },
                    tc = function (t, e) {
                        return null == t ? e : "string" == typeof t && "=" === t.charAt(1) ? parseInt(t.charAt(0) + "1", 10) * parseFloat(t.substr(2)) + e : parseFloat(t);
                    },
                    tu = function (t, e, i, s) {
                        var n, r, o, a, l;
                        return (
                            null == t
                                ? (a = e)
                                : "number" == typeof t
                                ? (a = t)
                                : ((n = 360),
                                  (r = t.split("_")),
                                  (o = ((l = "=" === t.charAt(1)) ? parseInt(t.charAt(0) + "1", 10) * parseFloat(r[0].substr(2)) : parseFloat(r[0])) * (-1 === t.indexOf("rad") ? 1 : j) - (l ? 0 : e)),
                                  r.length &&
                                      (s && (s[i] = e + o),
                                      -1 !== t.indexOf("short") && (o %= n) != o % (n / 2) && (o = 0 > o ? o + n : o - n),
                                      -1 !== t.indexOf("_cw") && 0 > o ? (o = ((o + 9999999999 * n) % n) - (0 | (o / n)) * n) : -1 !== t.indexOf("ccw") && o > 0 && (o = ((o - 9999999999 * n) % n) - (0 | (o / n)) * n)),
                                  (a = e + o)),
                            1e-6 > a && a > -0.000001 && (a = 0),
                            a
                        );
                    },
                    tp = {
                        aqua: [0, 255, 255],
                        lime: [0, 255, 0],
                        silver: [192, 192, 192],
                        black: [0, 0, 0],
                        maroon: [128, 0, 0],
                        teal: [0, 128, 128],
                        blue: [0, 0, 255],
                        navy: [0, 0, 128],
                        white: [255, 255, 255],
                        fuchsia: [255, 0, 255],
                        olive: [128, 128, 0],
                        yellow: [255, 255, 0],
                        orange: [255, 165, 0],
                        gray: [128, 128, 128],
                        purple: [128, 0, 128],
                        green: [0, 128, 0],
                        red: [255, 0, 0],
                        pink: [255, 192, 203],
                        cyan: [0, 255, 255],
                        transparent: [255, 255, 255, 0],
                    },
                    td = function (t, e, i) {
                        return 0 | (255 * (1 > 6 * (t = 0 > t ? t + 1 : t > 1 ? t - 1 : t) ? e + 6 * (i - e) * t : 0.5 > t ? i : 2 > 3 * t ? e + 6 * (i - e) * (2 / 3 - t) : e) + 0.5);
                    },
                    tf = (l.parseColor = function (t) {
                        var e, i, s, n, r, o;
                        return t && "" !== t
                            ? "number" == typeof t
                                ? [t >> 16, 255 & (t >> 8), 255 & t]
                                : ("," === t.charAt(t.length - 1) && (t = t.substr(0, t.length - 1)),
                                  tp[t]
                                      ? tp[t]
                                      : "#" === t.charAt(0)
                                      ? (4 === t.length && ((e = t.charAt(1)), (t = "#" + e + e + (i = t.charAt(2)) + i + (s = t.charAt(3)) + s)), [(t = parseInt(t.substr(1), 16)) >> 16, 255 & (t >> 8), 255 & t])
                                      : "hsl" === t.substr(0, 3)
                                      ? ((t = t.match(_)),
                                        (n = (Number(t[0]) % 360) / 360),
                                        (r = Number(t[1]) / 100),
                                        (i = 0.5 >= (o = Number(t[2]) / 100) ? o * (r + 1) : o + r - o * r),
                                        (e = 2 * o - i),
                                        t.length > 3 && (t[3] = Number(t[3])),
                                        (t[0] = td(n + 1 / 3, e, i)),
                                        (t[1] = td(n, e, i)),
                                        (t[2] = td(n - 1 / 3, e, i)),
                                        t)
                                      : (((t = t.match(_) || tp.transparent)[0] = Number(t[0])), (t[1] = Number(t[1])), (t[2] = Number(t[2])), t.length > 3 && (t[3] = Number(t[3])), t))
                            : tp.black;
                    }),
                    t8 = "(?:\\b(?:(?:rgb|rgba|hsl|hsla)\\(.+?\\))|\\B#.+?\\b";
                for (p in tp) t8 += "|" + p + "\\b";
                t8 = RegExp(t8 + ")", "gi");
                var tg = function (t, e, i, s) {
                        if (null == t)
                            return function (t) {
                                return t;
                            };
                        var n,
                            r = e ? (t.match(t8) || [""])[0] : "",
                            o = t.split(r).join("").match(x) || [],
                            a = t.substr(0, t.indexOf(o[0])),
                            l = ")" === t.charAt(t.length - 1) ? ")" : "",
                            c = -1 !== t.indexOf(" ") ? " " : ",",
                            u = o.length,
                            p = u > 0 ? o[0].replace(_, "") : "";
                        return u
                            ? (n = e
                                  ? function (t) {
                                        var e, d, f, g;
                                        if ("number" == typeof t) t += p;
                                        else if (s && N.test(t)) {
                                            for (g = t.replace(N, "|").split("|"), f = 0; g.length > f; f++) g[f] = n(g[f]);
                                            return g.join(",");
                                        }
                                        if (((e = (t.match(t8) || [r])[0]), (f = (d = t.split(e).join("").match(x) || []).length), u > f--)) for (; u > ++f; ) d[f] = i ? d[0 | ((f - 1) / 2)] : o[f];
                                        return a + d.join(c) + c + e + l + (-1 !== t.indexOf("inset") ? " inset" : "");
                                    }
                                  : function (t) {
                                        var e, r, d;
                                        if ("number" == typeof t) t += p;
                                        else if (s && N.test(t)) {
                                            for (r = t.replace(N, "|").split("|"), d = 0; r.length > d; d++) r[d] = n(r[d]);
                                            return r.join(",");
                                        }
                                        if (((d = (e = t.match(x) || []).length), u > d--)) for (; u > ++d; ) e[d] = i ? e[0 | ((d - 1) / 2)] : o[d];
                                        return a + e.join(c) + l;
                                    })
                            : function (t) {
                                  return t;
                              };
                    },
                    tm = function (t) {
                        return (
                            (t = t.split(",")),
                            function (e, i, s, n, r, o, a) {
                                var l,
                                    c = (i + "").split(" ");
                                for (a = {}, l = 0; 4 > l; l++) a[t[l]] = c[l] = c[l] || c[((l - 1) / 2) >> 0];
                                return n.parse(e, a, r, o);
                            }
                        );
                    },
                    tv =
                        ((q._setPluginRatio = function (t) {
                            this.plugin.setRatio(t);
                            for (var e, i, s, n, r = this.data, o = r.proxy, a = r.firstMPT; a; ) (e = o[a.v]), a.r ? (e = Math.round(e)) : 1e-6 > e && e > -0.000001 && (e = 0), (a.t[a.p] = e), (a = a._next);
                            if ((r.autoRotate && (r.autoRotate.rotation = o.rotation), 1 === t))
                                for (a = r.firstMPT; a; ) {
                                    if ((i = a.t).type) {
                                        if (1 === i.type) {
                                            for (n = i.xs0 + i.s + i.xs1, s = 1; i.l > s; s++) n += i["xn" + s] + i["xs" + (s + 1)];
                                            i.e = n;
                                        }
                                    } else i.e = i.s + i.xs0;
                                    a = a._next;
                                }
                        }),
                        function (t, e, i, s, n) {
                            (this.t = t), (this.p = e), (this.v = i), (this.r = n), s && ((s._prev = this), (this._next = s));
                        }),
                    t$ =
                        ((q._parseToProxy = function (t, e, i, s, n, r) {
                            var o,
                                a,
                                l,
                                c,
                                u,
                                p = s,
                                d = {},
                                f = {},
                                g = i._transform,
                                m = F;
                            for (i._transform = null, F = e, s = u = i.parse(t, e, s, n), F = m, r && ((i._transform = g), p && ((p._prev = null), p._prev && (p._prev._next = null))); s && s !== p; ) {
                                if (1 >= s.type && ((f[(a = s.p)] = s.s + s.c), (d[a] = s.s), r || ((c = new tv(s, "s", a, c, s.r)), (s.c = 0)), 1 === s.type))
                                    for (o = s.l; --o > 0; ) (l = "xn" + o), (f[(a = s.p + "_" + l)] = s.data[l]), (d[a] = s[l]), r || (c = new tv(s, l, a, c, s.rxp[l]));
                                s = s._next;
                            }
                            return { proxy: d, end: f, firstMPT: c, pt: u };
                        }),
                        (q.CSSPropTween = function (t, e, s, n, o, a, l, c, u, p, d) {
                            (this.t = t),
                                (this.p = e),
                                (this.s = s),
                                (this.c = n),
                                (this.n = l || e),
                                t instanceof t$ || r.push(this.n),
                                (this.r = c),
                                (this.type = a || 0),
                                u && ((this.pr = u), (i = !0)),
                                (this.b = void 0 === p ? s : p),
                                (this.e = void 0 === d ? s + n : d),
                                o && ((this._next = o), (o._prev = this));
                        })),
                    ty = (l.parseComplex = function (t, e, i, s, n, r, o, a, l, c) {
                        (i = i || r || ""), (o = new t$(t, e, 0, 0, o, c ? 2 : 1, null, !1, a, i, s)), (s += "");
                        var u,
                            p,
                            f,
                            g,
                            m,
                            v,
                            y,
                            x,
                            T,
                            C,
                            A,
                            P,
                            S = i.split(", ").join(",").split(" "),
                            E = s.split(", ").join(",").split(" "),
                            O = S.length,
                            D = !1 !== d;
                        for (
                            (-1 !== s.indexOf(",") || -1 !== i.indexOf(",")) && ((S = S.join(" ").replace(N, ", ").split(" ")), (E = E.join(" ").replace(N, ", ").split(" ")), (O = S.length)),
                                O !== E.length && (O = (S = (r || "").split(" ")).length),
                                o.plugin = l,
                                o.setRatio = c,
                                u = 0;
                            O > u;
                            u++
                        )
                            if (((g = S[u]), (m = E[u]), (x = parseFloat(g)) || 0 === x)) o.appendXtra("", x, th(m, x), m.replace(b, ""), D && -1 !== m.indexOf("px"), !0);
                            else if (n && ("#" === g.charAt(0) || tp[g] || k.test(g)))
                                (P = "," === m.charAt(m.length - 1) ? ")," : ")"),
                                    (g = tf(g)),
                                    (m = tf(m)),
                                    (T = g.length + m.length > 6) && !V && 0 === m[3]
                                        ? ((o["xs" + o.l] += o.l ? " transparent" : "transparent"), (o.e = o.e.split(E[u]).join("transparent")))
                                        : (V || (T = !1),
                                          o
                                              .appendXtra(T ? "rgba(" : "rgb(", g[0], m[0] - g[0], ",", !0, !0)
                                              .appendXtra("", g[1], m[1] - g[1], ",", !0)
                                              .appendXtra("", g[2], m[2] - g[2], T ? "," : P, !0),
                                          T && ((g = 4 > g.length ? 1 : g[3]), o.appendXtra("", g, (4 > m.length ? 1 : m[3]) - g, P, !1)));
                            else if ((v = g.match(_))) {
                                if (!(y = m.match(b)) || y.length !== v.length) return o;
                                for (f = 0, p = 0; v.length > p; p++) (A = v[p]), (C = g.indexOf(A, f)), o.appendXtra(g.substr(f, C - f), Number(A), th(y[p], A), "", D && "px" === g.substr(C + A.length, 2), 0 === p), (f = C + A.length);
                                o["xs" + o.l] += g.substr(f);
                            } else o["xs" + o.l] += o.l ? " " + g : g;
                        if (-1 !== s.indexOf("=") && o.data) {
                            for (P = o.xs0 + o.data.s, u = 1; o.l > u; u++) P += o["xs" + u] + o.data["xn" + u];
                            o.e = P + o["xs" + u];
                        }
                        return o.l || ((o.type = -1), (o.xs0 = o.e)), o.xfirst || o;
                    }),
                    t_ = 9;
                for ((p = t$.prototype).l = p.pr = 0; --t_ > 0; ) (p["xn" + t_] = 0), (p["xs" + t_] = "");
                (p.xs0 = ""),
                    (p._next = p._prev = p.xfirst = p.data = p.plugin = p.setRatio = p.rxp = null),
                    (p.appendXtra = function (t, e, i, s, n, r) {
                        var o = this,
                            a = o.l;
                        return (
                            (o["xs" + a] += r && a ? " " + t : t || ""),
                            i || 0 === a || o.plugin
                                ? (o.l++,
                                  (o.type = o.setRatio ? 2 : 1),
                                  (o["xs" + o.l] = s || ""),
                                  a > 0
                                      ? ((o.data["xn" + a] = e + i), (o.rxp["xn" + a] = n), (o["xn" + a] = e), o.plugin || ((o.xfirst = new t$(o, "xn" + a, e, i, o.xfirst || o, 0, o.n, n, o.pr)), (o.xfirst.xs0 = 0)), o)
                                      : ((o.data = { s: e + i }), (o.rxp = {}), (o.s = e), (o.c = i), (o.r = n), o))
                                : ((o["xs" + a] += e + (s || "")), o)
                        );
                    });
                var tb,
                    tw,
                    tx,
                    tT,
                    tC = function (t, e) {
                        (e = e || {}),
                            (this.p = (e.prefix && K(t)) || t),
                            (u[t] = u[this.p] = this),
                            (this.format = e.formatter || tg(e.defaultValue, e.color, e.collapsible, e.multi)),
                            e.parser && (this.parse = e.parser),
                            (this.clrs = e.color),
                            (this.multi = e.multi),
                            (this.keyword = e.keyword),
                            (this.dflt = e.defaultValue),
                            (this.pr = e.priority || 0);
                    },
                    tA = (q._registerComplexSpecialProp = function (t, e, i) {
                        "object" != typeof e && (e = { parser: i });
                        var s,
                            n,
                            r = t.split(","),
                            o = e.defaultValue;
                        for (i = i || [o], s = 0; r.length > s; s++) (e.prefix = 0 === s && e.prefix), (e.defaultValue = i[s] || o), (n = new tC(r[s], e));
                    }),
                    tP = function (t) {
                        if (!u[t]) {
                            var e = t.charAt(0).toUpperCase() + t.substr(1) + "Plugin";
                            tA(t, {
                                parser: function (t, i, s, n, r, o, a) {
                                    var l = c.com.greensock.plugins[e];
                                    return l ? (l._cssRegister(), u[s].parse(t, i, s, n, r, o, a)) : (Q("Error: " + e + " js file not loaded."), r);
                                },
                            });
                        }
                    };
                ((p = tC.prototype).parseComplex = function (t, e, i, s, n, r) {
                    var o,
                        a,
                        l,
                        c,
                        u,
                        p,
                        d = this.keyword;
                    if ((this.multi && (N.test(i) || N.test(e) ? ((a = e.replace(N, "|").split("|")), (l = i.replace(N, "|").split("|"))) : d && ((a = [e]), (l = [i]))), l)) {
                        for (c = l.length > a.length ? l.length : a.length, o = 0; c > o; o++)
                            (e = a[o] = a[o] || this.dflt), (i = l[o] = l[o] || this.dflt), d && (u = e.indexOf(d)) !== (p = i.indexOf(d)) && (-1 === p ? (a[o] = a[o].split(d).join("")) : -1 === u && (a[o] += " " + d));
                        (e = a.join(", ")), (i = l.join(", "));
                    }
                    return ty(t, this.p, e, i, this.clrs, this.dflt, s, this.pr, n, r);
                }),
                    (p.parse = function (t, e, i, s, r, o) {
                        return this.parseComplex(t.style, this.format(tt(t, this.p, n, !1, this.dflt)), this.format(e), r, o);
                    }),
                    (l.registerSpecialProp = function (t, e, i) {
                        tA(t, {
                            parser: function (t, s, n, r, o, a) {
                                var l = new t$(t, n, 0, 0, o, 2, n, !1, i);
                                return (l.plugin = a), (l.setRatio = e(t, s, r._tween, n)), l;
                            },
                            priority: i,
                        });
                    }),
                    (l.useSVGTransformAttr = g);
                var tS,
                    tk = "scaleX,scaleY,scaleZ,x,y,z,skewX,skewY,rotation,rotationX,rotationY,perspective,xPercent,yPercent".split(","),
                    tE = K("transform"),
                    tO = Z + "transform",
                    t0 = K("transformOrigin"),
                    tD = null !== K("perspective"),
                    tz = (q.Transform = function () {
                        (this.perspective = parseFloat(l.defaultTransformPerspective) || 0), (this.force3D = !1 !== l.defaultForce3D && !!tD && (l.defaultForce3D || "auto"));
                    }),
                    tL = window.SVGElement,
                    tR = function (t, e, i) {
                        var s,
                            n = B.createElementNS("http://www.w3.org/2000/svg", t),
                            r = /([a-z])([A-Z])/g;
                        for (s in i) n.setAttributeNS(null, s.replace(r, "$1-$2").toLowerCase(), i[s]);
                        return e.appendChild(n), n;
                    },
                    t3 = B.documentElement,
                    tI =
                        ((tT = y || (/Android/i.test(Y) && !window.chrome)),
                        B.createElementNS &&
                            !tT &&
                            ((tb = tR("svg", t3)),
                            (tx = (tw = tR("rect", tb, { width: 100, height: 50, x: 100 })).getBoundingClientRect().width),
                            (tw.style[t0] = "50% 50%"),
                            (tw.style[tE] = "scaleX(0.5)"),
                            (tT = tx === tw.getBoundingClientRect().width && !(m && tD)),
                            t3.removeChild(tb)),
                        tT),
                    tN = function (t, e, i, s) {
                        var n, r;
                        (s && (r = s.split(" ")).length) ||
                            ((n = t.getBBox()),
                            (r = [(-1 !== (e = tl(e).split(" "))[0].indexOf("%") ? (parseFloat(e[0]) / 100) * n.width : parseFloat(e[0])) + n.x, (-1 !== e[1].indexOf("%") ? (parseFloat(e[1]) / 100) * n.height : parseFloat(e[1])) + n.y])),
                            (i.xOrigin = parseFloat(r[0])),
                            (i.yOrigin = parseFloat(r[1])),
                            t.setAttribute("data-svg-origin", r.join(" "));
                    },
                    t9 = (q.getTransform = function (t, e, i, s) {
                        if (t._gsTransform && i && !s) return t._gsTransform;
                        var r,
                            o,
                            a,
                            c,
                            u,
                            p,
                            d,
                            f,
                            g,
                            m,
                            v = (i && t._gsTransform) || new tz(),
                            y = 0 > v.scaleX,
                            _ = (tD && (parseFloat(tt(t, t0, e, !1, "0 0 0").split(" ")[2]) || v.zOrigin)) || 0,
                            b = parseFloat(l.defaultTransformPerspective) || 0;
                        if (
                            (tE
                                ? (o = tt(t, tO, e, !0))
                                : t.currentStyle && (o = (o = t.currentStyle.filter.match(R)) && 4 === o.length ? [o[0].substr(4), Number(o[2].substr(4)), Number(o[1].substr(4)), o[3].substr(4), v.x || 0, v.y || 0].join(",") : ""),
                            (r = !o || "none" === o || "matrix(1, 0, 0, 1, 0, 0)" === o),
                            (v.svg = !!(tL && "function" == typeof t.getBBox && t.getCTM && (!t.parentNode || (t.parentNode.getBBox && t.parentNode.getCTM)))),
                            v.svg &&
                                (r && -1 !== (t.style[tE] + "").indexOf("matrix") && ((o = t.style[tE]), (r = !1)),
                                tN(t, tt(t, t0, n, !1, "50% 50%") + "", v, t.getAttribute("data-svg-origin")),
                                (tS = l.useSVGTransformAttr || tI),
                                (a = t.getAttribute("transform")),
                                r && a && -1 !== a.indexOf("matrix") && ((o = a), (r = 0))),
                            !r)
                        ) {
                            for (c = (a = (o || "").match(/(?:\-|\b)[\d\-\.e]+\b/gi) || []).length; --c > -1; ) (u = Number(a[c])), (a[c] = (p = u - (u |= 0)) ? (0 | (1e5 * p + (0 > p ? -0.5 : 0.5))) / 1e5 + u : u);
                            if (16 === a.length) {
                                var x,
                                    T,
                                    C,
                                    A,
                                    P,
                                    S = a[0],
                                    k = a[1],
                                    E = a[2],
                                    O = a[3],
                                    D = a[4],
                                    z = a[5],
                                    L = a[6],
                                    I = a[7],
                                    N = a[8],
                                    M = a[9],
                                    F = a[10],
                                    B = a[12],
                                    H = a[13],
                                    W = a[14],
                                    X = a[11],
                                    q = Math.atan2(L, F);
                                v.zOrigin && ((B = N * (W = -v.zOrigin) - a[12]), (H = M * W - a[13]), (W = F * W + v.zOrigin - a[14])),
                                    (v.rotationX = q * j),
                                    q &&
                                        ((x = D * (A = Math.cos(-q)) + N * (P = Math.sin(-q))),
                                        (T = z * A + M * P),
                                        (C = L * A + F * P),
                                        (N = -(D * P) + N * A),
                                        (M = -(z * P) + M * A),
                                        (F = -(L * P) + F * A),
                                        (X = -(I * P) + X * A),
                                        (D = x),
                                        (z = T),
                                        (L = C)),
                                    (q = Math.atan2(N, F)),
                                    (v.rotationY = q * j),
                                    q && ((x = S * (A = Math.cos(-q)) - N * (P = Math.sin(-q))), (T = k * A - M * P), (C = E * A - F * P), (M = k * P + M * A), (F = E * P + F * A), (X = O * P + X * A), (S = x), (k = T), (E = C)),
                                    (q = Math.atan2(k, S)),
                                    (v.rotation = q * j),
                                    q && ((S = S * (A = Math.cos(-q)) + D * (P = Math.sin(-q))), (T = k * A + z * P), (z = -(k * P) + z * A), (L = -(E * P) + L * A), (k = T)),
                                    v.rotationX && Math.abs(v.rotationX) + Math.abs(v.rotation) > 359.9 && ((v.rotationX = v.rotation = 0), (v.rotationY += 180)),
                                    (v.scaleX = (0 | (1e5 * Math.sqrt(S * S + k * k) + 0.5)) / 1e5),
                                    (v.scaleY = (0 | (1e5 * Math.sqrt(z * z + M * M) + 0.5)) / 1e5),
                                    (v.scaleZ = (0 | (1e5 * Math.sqrt(L * L + F * F) + 0.5)) / 1e5),
                                    (v.skewX = 0),
                                    (v.perspective = X ? 1 / (0 > X ? -X : X) : 0),
                                    (v.x = B),
                                    (v.y = H),
                                    (v.z = W),
                                    v.svg && ((v.x -= v.xOrigin - (v.xOrigin * S - v.yOrigin * D)), (v.y -= v.yOrigin - (v.yOrigin * k - v.xOrigin * z)));
                            } else if (!((tD && !s && a.length && v.x === a[4] && v.y === a[5] && (v.rotationX || v.rotationY)) || (void 0 !== v.x && "none" === tt(t, "display", e)))) {
                                var Y = a.length >= 6,
                                    V = Y ? a[0] : 1,
                                    U = a[1] || 0,
                                    Q = a[2] || 0,
                                    Z = Y ? a[3] : 1;
                                (v.x = a[4] || 0),
                                    (v.y = a[5] || 0),
                                    (d = Math.sqrt(V * V + U * U)),
                                    (f = Math.sqrt(Z * Z + Q * Q)),
                                    (g = V || U ? Math.atan2(U, V) * j : v.rotation || 0),
                                    Math.abs((m = Q || Z ? Math.atan2(Q, Z) * j + g : v.skewX || 0)) > 90 &&
                                        270 > Math.abs(m) &&
                                        (y ? ((d *= -1), (m += 0 >= g ? 180 : -180), (g += 0 >= g ? 180 : -180)) : ((f *= -1), (m += 0 >= m ? 180 : -180))),
                                    (v.scaleX = d),
                                    (v.scaleY = f),
                                    (v.rotation = g),
                                    (v.skewX = m),
                                    tD && ((v.rotationX = v.rotationY = v.z = 0), (v.perspective = b), (v.scaleZ = 1)),
                                    v.svg && ((v.x -= v.xOrigin - (v.xOrigin * V - v.yOrigin * U)), (v.y -= v.yOrigin - (v.yOrigin * Z - v.xOrigin * Q)));
                            }
                            for (c in ((v.zOrigin = _), v)) 2e-5 > v[c] && v[c] > -0.00002 && (v[c] = 0);
                        }
                        return i && ((t._gsTransform = v), v.svg && (tS && t.style[tE] ? tj(t.style, tE) : !tS && t.getAttribute("transform") && t.removeAttribute("transform"))), v;
                    }),
                    t1 = function (t) {
                        var e,
                            i,
                            s = this.data,
                            n = -s.rotation * M,
                            r = n + s.skewX * M,
                            o = (0 | (Math.cos(n) * s.scaleX * 1e5)) / 1e5,
                            a = (0 | (Math.sin(n) * s.scaleX * 1e5)) / 1e5,
                            l = (0 | -(1e5 * (Math.sin(r) * s.scaleY))) / 1e5,
                            c = (0 | (Math.cos(r) * s.scaleY * 1e5)) / 1e5,
                            u = this.t.style,
                            p = this.t.currentStyle;
                        if (p) {
                            (i = a), (a = -l), (l = -i), (e = p.filter), (u.filter = "");
                            var d,
                                f,
                                g = this.t.offsetWidth,
                                m = this.t.offsetHeight,
                                v = "absolute" !== p.position,
                                _ = "progid:DXImageTransform.Microsoft.Matrix(M11=" + o + ", M12=" + a + ", M21=" + l + ", M22=" + c,
                                b = s.x + (g * s.xPercent) / 100,
                                x = s.y + (m * s.yPercent) / 100;
                            if (
                                (null != s.ox && ((b += (d = (s.oxp ? 0.01 * g * s.ox : s.ox) - g / 2) - (d * o + (f = (s.oyp ? 0.01 * m * s.oy : s.oy) - m / 2) * a)), (x += f - (d * l + f * c))),
                                v ? (_ += ", Dx=" + ((d = g / 2) - (d * o + (f = m / 2) * a) + b) + ", Dy=" + (f - (d * l + f * c) + x) + ")") : (_ += ", sizingMethod='auto expand')"),
                                (u.filter = -1 !== e.indexOf("DXImageTransform.Microsoft.Matrix(") ? e.replace(I, _) : _ + " " + e),
                                (0 === t || 1 === t) &&
                                    1 === o &&
                                    0 === a &&
                                    0 === l &&
                                    1 === c &&
                                    ((v && -1 === _.indexOf("Dx=0, Dy=0")) || (A.test(e) && 100 !== parseFloat(RegExp.$1)) || (-1 === e.indexOf(e.indexOf("Alpha")) && u.removeAttribute("filter"))),
                                !v)
                            ) {
                                var T,
                                    P,
                                    S,
                                    k = 8 > y ? 1 : -1;
                                for (
                                    d = s.ieOffsetX || 0,
                                        f = s.ieOffsetY || 0,
                                        s.ieOffsetX = Math.round((g - ((0 > o ? -o : o) * g + (0 > a ? -a : a) * m)) / 2 + b),
                                        s.ieOffsetY = Math.round((m - ((0 > c ? -c : c) * m + (0 > l ? -l : l) * g)) / 2 + x),
                                        t_ = 0;
                                    4 > t_;
                                    t_++
                                )
                                    (S =
                                        (i = -1 !== (T = p[(P = to[t_])]).indexOf("px") ? parseFloat(T) : te(this.t, P, parseFloat(T), T.replace(C, "")) || 0) !== s[P]
                                            ? 2 > t_
                                                ? -s.ieOffsetX
                                                : -s.ieOffsetY
                                            : 2 > t_
                                            ? d - s.ieOffsetX
                                            : f - s.ieOffsetY),
                                        (u[P] = (s[P] = Math.round(i - S * (0 === t_ || 2 === t_ ? 1 : k))) + "px");
                            }
                        }
                    },
                    tM = (q.set3DTransformRatio = q.setTransformRatio = function (t) {
                        var e,
                            i,
                            s,
                            n,
                            r,
                            o,
                            a,
                            l,
                            c,
                            u,
                            p,
                            d,
                            f,
                            g,
                            v,
                            y,
                            _,
                            b,
                            x,
                            T,
                            C,
                            A,
                            P,
                            S = this.data,
                            k = this.t.style,
                            E = S.rotation,
                            O = S.rotationX,
                            D = S.rotationY,
                            z = S.scaleX,
                            L = S.scaleY,
                            R = S.scaleZ,
                            I = S.x,
                            N = S.y,
                            j = S.z,
                            F = S.svg,
                            B = S.perspective,
                            H = S.force3D;
                        if (!(((((1 !== t && 0 !== t) || "auto" !== H || (this.tween._totalTime !== this.tween._totalDuration && this.tween._totalTime)) && H) || j || B || D || O) && (!tS || !F) && tD))
                            return void (E || S.skewX || F
                                ? ((E *= M),
                                  (A = S.skewX * M),
                                  (P = 1e5),
                                  (e = Math.cos(E) * z),
                                  (n = Math.sin(E) * z),
                                  (i = -(Math.sin(E - A) * L)),
                                  (r = Math.cos(E - A) * L),
                                  A && "simple" === S.skewType && ((i *= _ = Math.sqrt(1 + (_ = Math.tan(A)) * _)), (r *= _)),
                                  F && ((I += S.xOrigin - (S.xOrigin * e + S.yOrigin * i)), (N += S.yOrigin - (S.xOrigin * n + S.yOrigin * r)), (g = 1e-6) > I && I > -g && (I = 0), g > N && N > -g && (N = 0)),
                                  (x = (0 | (e * P)) / P + "," + (0 | (n * P)) / P + "," + (0 | (i * P)) / P + "," + (0 | (r * P)) / P + "," + I + "," + N + ")"),
                                  F && tS ? this.t.setAttribute("transform", "matrix(" + x) : (k[tE] = (S.xPercent || S.yPercent ? "translate(" + S.xPercent + "%," + S.yPercent + "%) matrix(" : "matrix(") + x))
                                : (k[tE] = (S.xPercent || S.yPercent ? "translate(" + S.xPercent + "%," + S.yPercent + "%) matrix(" : "matrix(") + z + ",0,0," + L + "," + I + "," + N + ")"));
                        if ((m && ((g = 1e-4) > z && z > -g && (z = R = 2e-5), g > L && L > -g && (L = R = 2e-5), !B || S.z || S.rotationX || S.rotationY || (B = 0)), E || S.skewX))
                            (E *= M),
                                (v = e = Math.cos(E)),
                                (y = n = Math.sin(E)),
                                S.skewX && ((E -= S.skewX * M), (v = Math.cos(E)), (y = Math.sin(E)), "simple" === S.skewType && ((v *= _ = Math.sqrt(1 + (_ = Math.tan(S.skewX * M)) * _)), (y *= _))),
                                (i = -y),
                                (r = v);
                        else {
                            if (!(D || O || 1 !== R || B || F))
                                return void (k[tE] =
                                    (S.xPercent || S.yPercent ? "translate(" + S.xPercent + "%," + S.yPercent + "%) translate3d(" : "translate3d(") +
                                    I +
                                    "px," +
                                    N +
                                    "px," +
                                    j +
                                    "px)" +
                                    (1 !== z || 1 !== L ? " scale(" + z + "," + L + ")" : ""));
                            (e = r = 1), (i = n = 0);
                        }
                        (c = 1),
                            (s = o = a = l = u = p = 0),
                            (d = B ? -1 / B : 0),
                            (f = S.zOrigin),
                            (g = 1e-6),
                            (T = ","),
                            (C = "0"),
                            (E = D * M) && ((v = Math.cos(E)), (a = -(y = Math.sin(E))), (u = -(d * y)), (s = e * y), (o = n * y), (c = v), (d *= v), (e *= v), (n *= v)),
                            (E = O * M) && ((_ = i * (v = Math.cos(E)) + s * (y = Math.sin(E))), (b = r * v + o * y), (l = c * y), (p = d * y), (s = -(i * y) + s * v), (o = -(r * y) + o * v), (c *= v), (d *= v), (i = _), (r = b)),
                            1 !== R && ((s *= R), (o *= R), (c *= R), (d *= R)),
                            1 !== L && ((i *= L), (r *= L), (l *= L), (p *= L)),
                            1 !== z && ((e *= z), (n *= z), (a *= z), (u *= z)),
                            (f || F) &&
                                (f && ((I += -(s * f)), (N += -(o * f)), (j += -(c * f) + f)),
                                F && ((I += S.xOrigin - (S.xOrigin * e + S.yOrigin * i)), (N += S.yOrigin - (S.xOrigin * n + S.yOrigin * r))),
                                g > I && I > -g && (I = C),
                                g > N && N > -g && (N = C),
                                g > j && j > -g && (j = 0)),
                            (x = S.xPercent || S.yPercent ? "translate(" + S.xPercent + "%," + S.yPercent + "%) matrix3d(" : "matrix3d("),
                            (x += (g > e && e > -g ? C : e) + T + (g > n && n > -g ? C : n) + T + (g > a && a > -g ? C : a)),
                            (x += T + (g > u && u > -g ? C : u) + T + (g > i && i > -g ? C : i) + T + (g > r && r > -g ? C : r)),
                            O || D
                                ? ((x += T + (g > l && l > -g ? C : l) + T + (g > p && p > -g ? C : p) + T + (g > s && s > -g ? C : s)),
                                  (x += T + (g > o && o > -g ? C : o) + T + (g > c && c > -g ? C : c) + T + (g > d && d > -g ? C : d) + T))
                                : (x += ",0,0,0,0,1,0,"),
                            (x += I + T + N + T + j + T + (B ? 1 + -j / B : 1) + ")"),
                            (k[tE] = x);
                    });
                ((p = tz.prototype).x = p.y = p.z = p.skewX = p.skewY = p.rotation = p.rotationX = p.rotationY = p.zOrigin = p.xPercent = p.yPercent = 0),
                    (p.scaleX = p.scaleY = p.scaleZ = 1),
                    tA(
                        "transform,scale,scaleX,scaleY,scaleZ,x,y,z,rotation,rotationX,rotationY,rotationZ,skewX,skewY,shortRotation,shortRotationX,shortRotationY,shortRotationZ,transformOrigin,svgOrigin,transformPerspective,directionalRotation,parseTransform,force3D,skewType,xPercent,yPercent",
                        {
                            parser: function (t, e, i, s, r, o, a) {
                                if (s._lastParsedTransform === a) return r;
                                s._lastParsedTransform = a;
                                var c,
                                    u,
                                    p,
                                    d,
                                    f,
                                    g,
                                    m,
                                    v = (s._transform = t9(t, n, !0, a.parseTransform)),
                                    y = t.style,
                                    _ = tk.length,
                                    b = a,
                                    x = {};
                                if ("string" == typeof b.transform && tE) ((p = W.style)[tE] = b.transform), (p.display = "block"), (p.position = "absolute"), B.body.appendChild(W), (c = t9(W, null, !1)), B.body.removeChild(W);
                                else if ("object" == typeof b) {
                                    if (
                                        ((c = {
                                            scaleX: tc(null != b.scaleX ? b.scaleX : b.scale, v.scaleX),
                                            scaleY: tc(null != b.scaleY ? b.scaleY : b.scale, v.scaleY),
                                            scaleZ: tc(b.scaleZ, v.scaleZ),
                                            x: tc(b.x, v.x),
                                            y: tc(b.y, v.y),
                                            z: tc(b.z, v.z),
                                            xPercent: tc(b.xPercent, v.xPercent),
                                            yPercent: tc(b.yPercent, v.yPercent),
                                            perspective: tc(b.transformPerspective, v.perspective),
                                        }),
                                        null != (m = b.directionalRotation))
                                    ) {
                                        if ("object" == typeof m) for (p in m) b[p] = m[p];
                                        else b.rotation = m;
                                    }
                                    "string" == typeof b.x && -1 !== b.x.indexOf("%") && ((c.x = 0), (c.xPercent = tc(b.x, v.xPercent))),
                                        "string" == typeof b.y && -1 !== b.y.indexOf("%") && ((c.y = 0), (c.yPercent = tc(b.y, v.yPercent))),
                                        (c.rotation = tu("rotation" in b ? b.rotation : "shortRotation" in b ? b.shortRotation + "_short" : "rotationZ" in b ? b.rotationZ : v.rotation, v.rotation, "rotation", x)),
                                        tD &&
                                            ((c.rotationX = tu("rotationX" in b ? b.rotationX : "shortRotationX" in b ? b.shortRotationX + "_short" : v.rotationX || 0, v.rotationX, "rotationX", x)),
                                            (c.rotationY = tu("rotationY" in b ? b.rotationY : "shortRotationY" in b ? b.shortRotationY + "_short" : v.rotationY || 0, v.rotationY, "rotationY", x))),
                                        (c.skewX = null == b.skewX ? v.skewX : tu(b.skewX, v.skewX)),
                                        (c.skewY = null == b.skewY ? v.skewY : tu(b.skewY, v.skewY)),
                                        (u = c.skewY - v.skewY) && ((c.skewX += u), (c.rotation += u));
                                }
                                for (
                                    tD && null != b.force3D && ((v.force3D = b.force3D), (g = !0)),
                                        v.skewType = b.skewType || v.skewType || l.defaultSkewType,
                                        (f = v.force3D || v.z || v.rotationX || v.rotationY || c.z || c.rotationX || c.rotationY || c.perspective) || null == b.scale || (c.scaleZ = 1);
                                    --_ > -1;

                                )
                                    ((d = c[(i = tk[_])] - v[i]) > 1e-6 || -0.000001 > d || null != b[i] || null != F[i]) &&
                                        ((g = !0), (r = new t$(v, i, v[i], d, r)), i in x && (r.e = x[i]), (r.xs0 = 0), (r.plugin = o), s._overwriteProps.push(r.n));
                                return (
                                    (d = b.transformOrigin),
                                    v.svg &&
                                        (d || b.svgOrigin) &&
                                        (tN(t, tl(d), c, b.svgOrigin),
                                        ((r = new t$(v, "xOrigin", v.xOrigin, c.xOrigin - v.xOrigin, r, -1, "transformOrigin")).b = v.xOrigin),
                                        (r.e = r.xs0 = c.xOrigin),
                                        ((r = new t$(v, "yOrigin", v.yOrigin, c.yOrigin - v.yOrigin, r, -1, "transformOrigin")).b = v.yOrigin),
                                        (r.e = r.xs0 = c.yOrigin),
                                        (d = tS ? null : "0px 0px")),
                                    (d || (tD && f && v.zOrigin)) &&
                                        (tE
                                            ? ((g = !0),
                                              (i = t0),
                                              (d = (d || tt(t, i, n, !1, "50% 50%")) + ""),
                                              ((r = new t$(y, i, 0, 0, r, -1, "transformOrigin")).b = y[i]),
                                              (r.plugin = o),
                                              tD
                                                  ? ((p = v.zOrigin),
                                                    (d = d.split(" ")),
                                                    (v.zOrigin = (d.length > 2 && (0 === p || "0px" !== d[2]) ? parseFloat(d[2]) : p) || 0),
                                                    (r.xs0 = r.e = d[0] + " " + (d[1] || "50%") + " 0px"),
                                                    ((r = new t$(v, "zOrigin", 0, 0, r, -1, r.n)).b = p),
                                                    (r.xs0 = r.e = v.zOrigin))
                                                  : (r.xs0 = r.e = d))
                                            : tl(d + "", v)),
                                    g && (s._transformType = (v.svg && tS) || (!f && 3 !== this._transformType) ? 2 : 3),
                                    r
                                );
                            },
                            prefix: !0,
                        }
                    ),
                    tA("boxShadow", { defaultValue: "0px 0px 0px 0px #999", prefix: !0, color: !0, multi: !0, keyword: "inset" }),
                    tA("borderRadius", {
                        defaultValue: "0px",
                        parser: function (t, e, i, r, o) {
                            e = this.format(e);
                            var a,
                                l,
                                c,
                                u,
                                p,
                                d,
                                f,
                                g,
                                m,
                                v,
                                y,
                                _,
                                b,
                                x,
                                T,
                                C,
                                A = ["borderTopLeftRadius", "borderTopRightRadius", "borderBottomRightRadius", "borderBottomLeftRadius"],
                                P = t.style;
                            for (m = parseFloat(t.offsetWidth), v = parseFloat(t.offsetHeight), a = e.split(" "), l = 0; A.length > l; l++)
                                this.p.indexOf("border") && (A[l] = K(A[l])),
                                    -1 !== (p = u = tt(t, A[l], n, !1, "0px")).indexOf(" ") && ((p = (u = p.split(" "))[0]), (u = u[1])),
                                    (d = c = a[l]),
                                    (f = parseFloat(p)),
                                    (_ = p.substr((f + "").length)),
                                    (b = "=" === d.charAt(1))
                                        ? ((g = parseInt(d.charAt(0) + "1", 10)), (g *= parseFloat((d = d.substr(2)))), (y = d.substr((g + "").length - (0 > g ? 1 : 0)) || ""))
                                        : ((g = parseFloat(d)), (y = d.substr((g + "").length))),
                                    "" === y && (y = s[i] || _),
                                    y !== _ &&
                                        ((x = te(t, "borderLeft", f, _)),
                                        (T = te(t, "borderTop", f, _)),
                                        "%" === y ? ((p = 100 * (x / m) + "%"), (u = 100 * (T / v) + "%")) : "em" === y ? ((C = te(t, "borderLeft", 1, "em")), (p = x / C + "em"), (u = T / C + "em")) : ((p = x + "px"), (u = T + "px")),
                                        b && ((d = parseFloat(p) + g + y), (c = parseFloat(u) + g + y))),
                                    (o = ty(P, A[l], p + " " + u, d + " " + c, !1, "0px", o));
                            return o;
                        },
                        prefix: !0,
                        formatter: tg("0px 0px 0px 0px", !1, !0),
                    }),
                    tA("backgroundPosition", {
                        defaultValue: "0 0",
                        parser: function (t, e, i, s, r, o) {
                            var a,
                                l,
                                c,
                                u,
                                p,
                                d,
                                f = "background-position",
                                g = n || J(t, null),
                                m = this.format((g ? (y ? g.getPropertyValue(f + "-x") + " " + g.getPropertyValue(f + "-y") : g.getPropertyValue(f)) : t.currentStyle.backgroundPositionX + " " + t.currentStyle.backgroundPositionY) || "0 0"),
                                v = this.format(e);
                            if ((-1 !== m.indexOf("%")) != (-1 !== v.indexOf("%")) && (d = tt(t, "backgroundImage").replace(D, "")) && "none" !== d) {
                                for (a = m.split(" "), l = v.split(" "), X.setAttribute("src", d), c = 2; --c > -1; )
                                    (u = -1 !== (m = a[c]).indexOf("%")) != (-1 !== l[c].indexOf("%")) &&
                                        ((p = 0 === c ? t.offsetWidth - X.width : t.offsetHeight - X.height), (a[c] = u ? (parseFloat(m) / 100) * p + "px" : 100 * (parseFloat(m) / p) + "%"));
                                m = a.join(" ");
                            }
                            return this.parseComplex(t.style, m, v, r, o);
                        },
                        formatter: tl,
                    }),
                    tA("backgroundSize", { defaultValue: "0 0", formatter: tl }),
                    tA("perspective", { defaultValue: "0px", prefix: !0 }),
                    tA("perspectiveOrigin", { defaultValue: "50% 50%", prefix: !0 }),
                    tA("transformStyle", { prefix: !0 }),
                    tA("backfaceVisibility", { prefix: !0 }),
                    tA("userSelect", { prefix: !0 }),
                    tA("margin", { parser: tm("marginTop,marginRight,marginBottom,marginLeft") }),
                    tA("padding", { parser: tm("paddingTop,paddingRight,paddingBottom,paddingLeft") }),
                    tA("clip", {
                        defaultValue: "rect(0px,0px,0px,0px)",
                        parser: function (t, e, i, s, r, o) {
                            var a, l, c;
                            return (
                                9 > y
                                    ? ((l = t.currentStyle), (c = 8 > y ? " " : ","), (a = "rect(" + l.clipTop + c + l.clipRight + c + l.clipBottom + c + l.clipLeft + ")"), (e = this.format(e).split(",").join(c)))
                                    : ((a = this.format(tt(t, this.p, n, !1, this.dflt))), (e = this.format(e))),
                                this.parseComplex(t.style, a, e, r, o)
                            );
                        },
                    }),
                    tA("textShadow", { defaultValue: "0px 0px 0px #999", color: !0, multi: !0 }),
                    tA("autoRound,strictUnits", {
                        parser: function (t, e, i, s, n) {
                            return n;
                        },
                    }),
                    tA("border", {
                        defaultValue: "0px solid #000",
                        parser: function (t, e, i, s, r, o) {
                            return this.parseComplex(t.style, this.format(tt(t, "borderTopWidth", n, !1, "0px") + " " + tt(t, "borderTopStyle", n, !1, "solid") + " " + tt(t, "borderTopColor", n, !1, "#000")), this.format(e), r, o);
                        },
                        color: !0,
                        formatter: function (t) {
                            var e = t.split(" ");
                            return e[0] + " " + (e[1] || "solid") + " " + (t.match(t8) || ["#000"])[0];
                        },
                    }),
                    tA("borderWidth", { parser: tm("borderTopWidth,borderRightWidth,borderBottomWidth,borderLeftWidth") }),
                    tA("float,cssFloat,styleFloat", {
                        parser: function (t, e, i, s, n) {
                            var r = t.style,
                                o = "cssFloat" in r ? "cssFloat" : "styleFloat";
                            return new t$(r, o, 0, 0, n, -1, i, !1, 0, r[o], e);
                        },
                    });
                var t7 = function (t) {
                    var e,
                        i = this.t,
                        s = i.filter || tt(this.data, "filter") || "",
                        n = 0 | (this.s + this.c * t);
                    100 === n && (-1 === s.indexOf("atrix(") && -1 === s.indexOf("radient(") && -1 === s.indexOf("oader(") ? (i.removeAttribute("filter"), (e = !tt(this.data, "filter"))) : ((i.filter = s.replace(S, "")), (e = !0))),
                        e || (this.xn1 && (i.filter = s = s || "alpha(opacity=" + n + ")"), -1 === s.indexOf("pacity") ? (0 === n && this.xn1) || (i.filter = s + " alpha(opacity=" + n + ")") : (i.filter = s.replace(A, "opacity=" + n)));
                };
                tA("opacity,alpha,autoAlpha", {
                    defaultValue: "1",
                    parser: function (t, e, i, s, r, o) {
                        var a = parseFloat(tt(t, "opacity", n, !1, "1")),
                            l = t.style,
                            c = "autoAlpha" === i;
                        return (
                            "string" == typeof e && "=" === e.charAt(1) && (e = ("-" === e.charAt(0) ? -1 : 1) * parseFloat(e.substr(2)) + a),
                            c && 1 === a && "hidden" === tt(t, "visibility", n) && 0 !== e && (a = 0),
                            V
                                ? (r = new t$(l, "opacity", a, e - a, r))
                                : (((r = new t$(l, "opacity", 100 * a, 100 * (e - a), r)).xn1 = c ? 1 : 0),
                                  (l.zoom = 1),
                                  (r.type = 2),
                                  (r.b = "alpha(opacity=" + r.s + ")"),
                                  (r.e = "alpha(opacity=" + (r.s + r.c) + ")"),
                                  (r.data = t),
                                  (r.plugin = o),
                                  (r.setRatio = t7)),
                            c && (((r = new t$(l, "visibility", 0, 0, r, -1, null, !1, 0, 0 !== a ? "inherit" : "hidden", 0 === e ? "hidden" : "inherit")).xs0 = "inherit"), s._overwriteProps.push(r.n), s._overwriteProps.push(i)),
                            r
                        );
                    },
                });
                var tj = function (t, e) {
                        e && (t.removeProperty ? (("ms" === e.substr(0, 2) || "webkit" === e.substr(0, 6)) && (e = "-" + e), t.removeProperty(e.replace(E, "-$1").toLowerCase())) : t.removeAttribute(e));
                    },
                    tF = function (t) {
                        if (((this.t._gsClassPT = this), 1 === t || 0 === t)) {
                            this.t.setAttribute("class", 0 === t ? this.b : this.e);
                            for (var e = this.data, i = this.t.style; e; ) e.v ? (i[e.p] = e.v) : tj(i, e.p), (e = e._next);
                            1 === t && this.t._gsClassPT === this && (this.t._gsClassPT = null);
                        } else this.t.getAttribute("class") !== this.e && this.t.setAttribute("class", this.e);
                    };
                tA("className", {
                    parser: function (t, e, s, r, o, a, l) {
                        var c,
                            u,
                            p,
                            d,
                            f,
                            g = t.getAttribute("class") || "",
                            m = t.style.cssText;
                        if ((((o = r._classNamePT = new t$(t, s, 0, 0, o, 2)).setRatio = tF), (o.pr = -11), (i = !0), (o.b = g), (u = ts(t, n)), (p = t._gsClassPT))) {
                            for (d = {}, f = p.data; f; ) (d[f.p] = 1), (f = f._next);
                            p.setRatio(1);
                        }
                        return (
                            (t._gsClassPT = o),
                            (o.e = "=" !== e.charAt(1) ? e : g.replace(RegExp("\\s*\\b" + e.substr(2) + "\\b"), "") + ("+" === e.charAt(0) ? " " + e.substr(2) : "")),
                            t.setAttribute("class", o.e),
                            (c = tn(t, u, ts(t), l, d)),
                            t.setAttribute("class", g),
                            (o.data = c.firstMPT),
                            (t.style.cssText = m),
                            (o = o.xfirst = r.parse(t, c.difs, o, a))
                        );
                    },
                });
                var tB = function (t) {
                    if ((1 === t || 0 === t) && this.data._totalTime === this.data._totalDuration && "isFromStart" !== this.data.data) {
                        var e,
                            i,
                            s,
                            n,
                            r,
                            o = this.t.style,
                            a = u.transform.parse;
                        if ("all" === this.e) (o.cssText = ""), (n = !0);
                        else for (s = (e = this.e.split(" ").join("").split(",")).length; --s > -1; ) u[(i = e[s])] && (u[i].parse === a ? (n = !0) : (i = "transformOrigin" === i ? t0 : u[i].p)), tj(o, i);
                        n && (tj(o, tE), (r = this.t._gsTransform) && (r.svg && this.t.removeAttribute("data-svg-origin"), delete this.t._gsTransform));
                    }
                };
                for (
                    tA("clearProps", {
                        parser: function (t, e, s, n, r) {
                            return ((r = new t$(t, s, 0, 0, r, 2)).setRatio = tB), (r.e = e), (r.pr = -10), (r.data = n._tween), (i = !0), r;
                        },
                    }),
                        t_ = (p = "bezier,throwProps,physicsProps,physics2D".split(",")).length;
                    t_--;

                )
                    tP(p[t_]);
                ((p = l.prototype)._firstPT = p._lastParsedTransform = p._transform = null),
                    (p._onInitTween = function (t, e, o) {
                        if (!t.nodeType) return !1;
                        (this._target = t), (this._tween = o), (this._vars = e), (d = e.autoRound), (i = !1), (s = e.suffixMap || l.suffixMap), (n = J(t, "")), (r = this._overwriteProps);
                        var a,
                            c,
                            p,
                            m,
                            y,
                            _,
                            b,
                            x,
                            T,
                            C = t.style;
                        if (
                            (f && "" === C.zIndex && ("auto" === (a = tt(t, "zIndex", n)) || "" === a) && this._addLazySet(C, "zIndex", 0),
                            "string" == typeof e && ((m = C.cssText), (a = ts(t, n)), (C.cssText = m + ";" + e), (a = tn(t, a, ts(t)).difs), !V && P.test(e) && (a.opacity = parseFloat(RegExp.$1)), (e = a), (C.cssText = m)),
                            (this._firstPT = c = e.className ? u.className.parse(t, e.className, "className", this, null, null, e) : this.parse(t, e, null)),
                            this._transformType)
                        ) {
                            for (
                                T = 3 === this._transformType,
                                    tE
                                        ? g &&
                                          ((f = !0),
                                          "" === C.zIndex && ("auto" === (b = tt(t, "zIndex", n)) || "" === b) && this._addLazySet(C, "zIndex", 0),
                                          v && this._addLazySet(C, "WebkitBackfaceVisibility", this._vars.WebkitBackfaceVisibility || (T ? "visible" : "hidden")))
                                        : (C.zoom = 1),
                                    p = c;
                                p && p._next;

                            )
                                p = p._next;
                            (x = new t$(t, "transform", 0, 0, null, 2)), this._linkCSSP(x, null, p), (x.setRatio = tE ? tM : t1), (x.data = this._transform || t9(t, n, !0)), (x.tween = o), (x.pr = -1), r.pop();
                        }
                        if (i) {
                            for (; c; ) {
                                for (_ = c._next, p = m; p && p.pr > c.pr; ) p = p._next;
                                (c._prev = p ? p._prev : y) ? (c._prev._next = c) : (m = c), (c._next = p) ? (p._prev = c) : (y = c), (c = _);
                            }
                            this._firstPT = m;
                        }
                        return !0;
                    }),
                    (p.parse = function (t, e, i, r) {
                        var o,
                            a,
                            l,
                            c,
                            p,
                            f,
                            g,
                            m,
                            v,
                            y,
                            _ = t.style;
                        for (o in e)
                            (f = e[o]),
                                (a = u[o])
                                    ? (i = a.parse(t, f, o, this, i, r, e))
                                    : ((p = tt(t, o, n) + ""),
                                      (v = "string" == typeof f),
                                      "color" === o || "fill" === o || "stroke" === o || -1 !== o.indexOf("Color") || (v && k.test(f))
                                          ? (v || (f = ((f = tf(f)).length > 3 ? "rgba(" : "rgb(") + f.join(",") + ")"), (i = ty(_, o, p, f, !0, "transparent", i, 0, r)))
                                          : v && (-1 !== f.indexOf(" ") || -1 !== f.indexOf(","))
                                          ? (i = ty(_, o, p, f, !0, null, i, 0, r))
                                          : ((g = (l = parseFloat(p)) || 0 === l ? p.substr((l + "").length) : ""),
                                            ("" === p || "auto" === p) &&
                                                ("width" === o || "height" === o ? ((l = ta(t, o, n)), (g = "px")) : "left" === o || "top" === o ? ((l = ti(t, o, n)), (g = "px")) : ((l = "opacity" !== o ? 0 : 1), (g = ""))),
                                            (y = v && "=" === f.charAt(1)) ? ((c = parseInt(f.charAt(0) + "1", 10)), (c *= parseFloat((f = f.substr(2)))), (m = f.replace(C, ""))) : ((c = parseFloat(f)), (m = v ? f.replace(C, "") : "")),
                                            "" === m && (m = o in s ? s[o] : g),
                                            (f = c || 0 === c ? (y ? c + l : c) + m : e[o]),
                                            g !== m &&
                                                "" !== m &&
                                                (c || 0 === c) &&
                                                l &&
                                                ((l = te(t, o, l, g)),
                                                "%" === m ? ((l /= te(t, o, 100, "%") / 100), !0 !== e.strictUnits && (p = l + "%")) : "em" === m ? (l /= te(t, o, 1, "em")) : "px" !== m && ((c = te(t, o, c, m)), (m = "px")),
                                                y && (c || 0 === c) && (f = c + l + m)),
                                            y && (c += l),
                                            (l || 0 === l) && (c || 0 === c)
                                                ? ((i = new t$(_, o, l, c - l, i, 0, o, !1 !== d && ("px" === m || "zIndex" === o), 0, p, f)).xs0 = m)
                                                : void 0 !== _[o] && (f || ("NaN" != f + "" && null != f))
                                                ? ((i = new t$(_, o, c || l || 0, 0, i, -1, o, !1, 0, p, f)).xs0 = "none" !== f || ("display" !== o && -1 === o.indexOf("Style")) ? f : p)
                                                : Q("invalid " + o + " tween value: " + e[o]))),
                                r && i && !i.plugin && (i.plugin = r);
                        return i;
                    }),
                    (p.setRatio = function (t) {
                        var e,
                            i,
                            s,
                            n = this._firstPT;
                        if (1 !== t || (this._tween._time !== this._tween._duration && 0 !== this._tween._time)) {
                            if (t || (this._tween._time !== this._tween._duration && 0 !== this._tween._time) || -0.000001 === this._tween._rawPrevTime)
                                for (; n; ) {
                                    if (((e = n.c * t + n.s), n.r ? (e = Math.round(e)) : 1e-6 > e && e > -0.000001 && (e = 0), n.type)) {
                                        if (1 === n.type) {
                                            if (2 === (s = n.l)) n.t[n.p] = n.xs0 + e + n.xs1 + n.xn1 + n.xs2;
                                            else if (3 === s) n.t[n.p] = n.xs0 + e + n.xs1 + n.xn1 + n.xs2 + n.xn2 + n.xs3;
                                            else if (4 === s) n.t[n.p] = n.xs0 + e + n.xs1 + n.xn1 + n.xs2 + n.xn2 + n.xs3 + n.xn3 + n.xs4;
                                            else if (5 === s) n.t[n.p] = n.xs0 + e + n.xs1 + n.xn1 + n.xs2 + n.xn2 + n.xs3 + n.xn3 + n.xs4 + n.xn4 + n.xs5;
                                            else {
                                                for (i = n.xs0 + e + n.xs1, s = 1; n.l > s; s++) i += n["xn" + s] + n["xs" + (s + 1)];
                                                n.t[n.p] = i;
                                            }
                                        } else -1 === n.type ? (n.t[n.p] = n.xs0) : n.setRatio && n.setRatio(t);
                                    } else n.t[n.p] = e + n.xs0;
                                    n = n._next;
                                }
                            else for (; n; ) 2 !== n.type ? (n.t[n.p] = n.b) : n.setRatio(t), (n = n._next);
                        } else for (; n; ) 2 !== n.type ? (n.t[n.p] = n.e) : n.setRatio(t), (n = n._next);
                    }),
                    (p._enableTransforms = function (t) {
                        (this._transform = this._transform || t9(this._target, n, !0)), (this._transformType = (this._transform.svg && tS) || (!t && 3 !== this._transformType) ? 2 : 3);
                    });
                var tH = function () {
                    (this.t[this.p] = this.e), this.data._linkCSSP(this, this._next, null, !0);
                };
                (p._addLazySet = function (t, e, i) {
                    var s = (this._firstPT = new t$(t, e, 0, 0, this._firstPT, 2));
                    (s.e = i), (s.setRatio = tH), (s.data = this);
                }),
                    (p._linkCSSP = function (t, e, i, s) {
                        return (
                            t &&
                                (e && (e._prev = t),
                                t._next && (t._next._prev = t._prev),
                                t._prev ? (t._prev._next = t._next) : this._firstPT === t && ((this._firstPT = t._next), (s = !0)),
                                i ? (i._next = t) : s || null !== this._firstPT || (this._firstPT = t),
                                (t._next = e),
                                (t._prev = i)),
                            t
                        );
                    }),
                    (p._kill = function (e) {
                        var i,
                            s,
                            n,
                            r = e;
                        if (e.autoAlpha || e.alpha) {
                            for (s in ((r = {}), e)) r[s] = e[s];
                            (r.opacity = 1), r.autoAlpha && (r.visibility = 1);
                        }
                        return (
                            e.className &&
                                (i = this._classNamePT) &&
                                ((n = i.xfirst) && n._prev ? this._linkCSSP(n._prev, i._next, n._prev._prev) : n === this._firstPT && (this._firstPT = i._next),
                                i._next && this._linkCSSP(i._next, i._next._next, n._prev),
                                (this._classNamePT = null)),
                            t.prototype._kill.call(this, r)
                        );
                    });
                var tW = function (t, e, i) {
                    var s, n, r, o;
                    if (t.slice) for (n = t.length; --n > -1; ) tW(t[n], e, i);
                    else for (n = (s = t.childNodes).length; --n > -1; ) (o = (r = s[n]).type), r.style && (e.push(ts(r)), i && i.push(r)), (1 === o || 9 === o || 11 === o) && r.childNodes.length && tW(r, e, i);
                };
                return (
                    (l.cascadeTo = function (t, i, s) {
                        var n,
                            r,
                            o,
                            a,
                            l = e.to(t, i, s),
                            c = [l],
                            u = [],
                            p = [],
                            d = [],
                            f = e._internals.reservedProps;
                        for (tW((t = l._targets || l.target), u, d), l.render(i, !0, !0), tW(t, p), l.render(0, !0, !0), l._enabled(!0), n = d.length; --n > -1; )
                            if ((r = tn(d[n], u[n], p[n])).firstMPT) {
                                for (o in ((r = r.difs), s)) f[o] && (r[o] = s[o]);
                                for (o in ((a = {}), r)) a[o] = u[n][o];
                                c.push(e.fromTo(d[n], i, a, r));
                            }
                        return c;
                    }),
                    t.activate([l]),
                    l
                );
            },
            !0
        ),
        ((v = _gsScope._gsDefine.plugin({
            propName: "roundProps",
            priority: -1,
            API: 2,
            init: function (t, e, i) {
                return (this._tween = i), !0;
            },
        }).prototype)._onInitAllProps = function () {
            for (var t, e, i, s = this._tween, n = s.vars.roundProps instanceof Array ? s.vars.roundProps : s.vars.roundProps.split(","), r = n.length, o = {}, a = s._propLookup.roundProps; --r > -1; ) o[n[r]] = 1;
            for (r = n.length; --r > -1; )
                for (t = n[r], e = s._firstPT; e; )
                    (i = e._next),
                        e.pg
                            ? e.t._roundProps(o, !0)
                            : e.n === t && (this._add(e.t, t, e.s, e.c), i && (i._prev = e._prev), e._prev ? (e._prev._next = i) : s._firstPT === e && (s._firstPT = i), (e._next = e._prev = null), (s._propLookup[t] = a)),
                        (e = i);
            return !1;
        }),
        (v._add = function (t, e, i, s) {
            this._addTween(t, e, i, i + s, e, !0), this._overwriteProps.push(e);
        }),
        _gsScope._gsDefine.plugin({
            propName: "attr",
            API: 2,
            version: "0.3.3",
            init: function (t, e) {
                var i, s, n;
                if ("function" != typeof t.setAttribute) return !1;
                for (i in ((this._target = t), (this._proxy = {}), (this._start = {}), (this._end = {}), e))
                    (this._start[i] = this._proxy[i] = s = t.getAttribute(i)), (n = this._addTween(this._proxy, i, parseFloat(s), e[i], i)), (this._end[i] = n ? n.s + n.c : e[i]), this._overwriteProps.push(i);
                return !0;
            },
            set: function (t) {
                this._super.setRatio.call(this, t);
                for (var e, i = this._overwriteProps, s = i.length, n = 1 === t ? this._end : t ? this._proxy : this._start; --s > -1; ) (e = i[s]), this._target.setAttribute(e, n[e] + "");
            },
        }),
        (_gsScope._gsDefine.plugin({
            propName: "directionalRotation",
            version: "0.2.1",
            API: 2,
            init: function (t, e) {
                "object" != typeof e && (e = { rotation: e }), (this.finals = {});
                var i,
                    s,
                    n,
                    r,
                    o,
                    a,
                    l = !0 === e.useRadians ? 2 * Math.PI : 360;
                for (i in e)
                    "useRadians" !== i &&
                        ((s = (a = (e[i] + "").split("_"))[0]),
                        (n = parseFloat("function" != typeof t[i] ? t[i] : t[i.indexOf("set") || "function" != typeof t["get" + i.substr(3)] ? i : "get" + i.substr(3)]())),
                        (o = (r = this.finals[i] = "string" == typeof s && "=" === s.charAt(1) ? n + parseInt(s.charAt(0) + "1", 10) * Number(s.substr(2)) : Number(s) || 0) - n),
                        a.length &&
                            (-1 !== (s = a.join("_")).indexOf("short") && (o %= l) != o % (l / 2) && (o = 0 > o ? o + l : o - l),
                            -1 !== s.indexOf("_cw") && 0 > o ? (o = ((o + 9999999999 * l) % l) - (0 | (o / l)) * l) : -1 !== s.indexOf("ccw") && o > 0 && (o = ((o - 9999999999 * l) % l) - (0 | (o / l)) * l)),
                        (o > 1e-6 || -0.000001 > o) && (this._addTween(t, i, n, n + o, i), this._overwriteProps.push(i)));
                return !0;
            },
            set: function (t) {
                var e;
                if (1 !== t) this._super.setRatio.call(this, t);
                else for (e = this._firstPT; e; ) e.f ? e.t[e.p](this.finals[e.p]) : (e.t[e.p] = this.finals[e.p]), (e = e._next);
            },
        })._autoCSS = !0),
        _gsScope._gsDefine(
            "easing.Back",
            ["easing.Ease"],
            function (t) {
                var e,
                    i,
                    s,
                    n = _gsScope.GreenSockGlobals || _gsScope,
                    r = n.com.greensock,
                    o = 2 * Math.PI,
                    a = Math.PI / 2,
                    l = r._class,
                    c = function (e, i) {
                        var s = l("easing." + e, function () {}, !0),
                            n = (s.prototype = new t());
                        return (n.constructor = s), (n.getRatio = i), s;
                    },
                    u = t.register || function () {},
                    p = function (t, e, i, s) {
                        var n = l("easing." + t, { easeOut: new e(), easeIn: new i(), easeInOut: new s() }, !0);
                        return u(n, t), n;
                    },
                    d = function (t, e, i) {
                        (this.t = t), (this.v = e), i && ((this.next = i), (i.prev = this), (this.c = i.v - e), (this.gap = i.t - t));
                    },
                    f = function (e, i) {
                        var s = l(
                                "easing." + e,
                                function (t) {
                                    (this._p1 = t || 0 === t ? t : 1.70158), (this._p2 = 1.525 * this._p1);
                                },
                                !0
                            ),
                            n = (s.prototype = new t());
                        return (
                            (n.constructor = s),
                            (n.getRatio = i),
                            (n.config = function (t) {
                                return new s(t);
                            }),
                            s
                        );
                    },
                    g = p(
                        "Back",
                        f("BackOut", function (t) {
                            return (t -= 1) * t * ((this._p1 + 1) * t + this._p1) + 1;
                        }),
                        f("BackIn", function (t) {
                            return t * t * ((this._p1 + 1) * t - this._p1);
                        }),
                        f("BackInOut", function (t) {
                            return 1 > (t *= 2) ? 0.5 * t * t * ((this._p2 + 1) * t - this._p2) : 0.5 * ((t -= 2) * t * ((this._p2 + 1) * t + this._p2) + 2);
                        })
                    ),
                    m = l(
                        "easing.SlowMo",
                        function (t, e, i) {
                            (e = e || 0 === e ? e : 0.7), null == t ? (t = 0.7) : t > 1 && (t = 1), (this._p = 1 !== t ? e : 0), (this._p1 = (1 - t) / 2), (this._p2 = t), (this._p3 = this._p1 + this._p2), (this._calcEnd = !0 === i);
                        },
                        !0
                    ),
                    v = (m.prototype = new t());
                return (
                    (v.constructor = m),
                    (v.getRatio = function (t) {
                        var e = t + (0.5 - t) * this._p;
                        return this._p1 > t
                            ? this._calcEnd
                                ? 1 - (t = 1 - t / this._p1) * t
                                : e - (t = 1 - t / this._p1) * t * t * t * e
                            : t > this._p3
                            ? this._calcEnd
                                ? 1 - (t = (t - this._p3) / this._p1) * t
                                : e + (t - e) * (t = (t - this._p3) / this._p1) * t * t * t
                            : this._calcEnd
                            ? 1
                            : e;
                    }),
                    (m.ease = new m(0.7, 0.7)),
                    (v.config = m.config = function (t, e, i) {
                        return new m(t, e, i);
                    }),
                    ((v = (e = l(
                        "easing.SteppedEase",
                        function (t) {
                            (t = t || 1), (this._p1 = 1 / t), (this._p2 = t + 1);
                        },
                        !0
                    )).prototype = new t()).constructor = e),
                    (v.getRatio = function (t) {
                        return 0 > t ? (t = 0) : t >= 1 && (t = 0.999999999), ((this._p2 * t) >> 0) * this._p1;
                    }),
                    (v.config = e.config = function (t) {
                        return new e(t);
                    }),
                    ((v = (i = l(
                        "easing.RoughEase",
                        function (e) {
                            e = e || {};
                            for (
                                var i,
                                    s,
                                    n,
                                    r,
                                    o,
                                    a,
                                    l = e.taper || "none",
                                    c = [],
                                    u = 0,
                                    p = 0 | (e.points || 20),
                                    f = p,
                                    g = !1 !== e.randomize,
                                    m = !0 === e.clamp,
                                    v = e.template instanceof t ? e.template : null,
                                    y = "number" == typeof e.strength ? 0.4 * e.strength : 0.4;
                                --f > -1;

                            )
                                (i = g ? Math.random() : (1 / p) * f),
                                    (s = v ? v.getRatio(i) : i),
                                    (n = "none" === l ? y : "out" === l ? (r = 1 - i) * r * y : "in" === l ? i * i * y : 0.5 > i ? 0.5 * (r = 2 * i) * r * y : 0.5 * (r = 2 * (1 - i)) * r * y),
                                    g ? (s += Math.random() * n - 0.5 * n) : f % 2 ? (s += 0.5 * n) : (s -= 0.5 * n),
                                    m && (s > 1 ? (s = 1) : 0 > s && (s = 0)),
                                    (c[u++] = { x: i, y: s });
                            for (
                                c.sort(function (t, e) {
                                    return t.x - e.x;
                                }),
                                    a = new d(1, 1, null),
                                    f = p;
                                --f > -1;

                            )
                                (o = c[f]), (a = new d(o.x, o.y, a));
                            this._prev = new d(0, 0, 0 !== a.t ? a : a.next);
                        },
                        !0
                    )).prototype = new t()).constructor = i),
                    (v.getRatio = function (t) {
                        var e = this._prev;
                        if (t > e.t) {
                            for (; e.next && t >= e.t; ) e = e.next;
                            e = e.prev;
                        } else for (; e.prev && e.t >= t; ) e = e.prev;
                        return (this._prev = e), e.v + ((t - e.t) / e.gap) * e.c;
                    }),
                    (v.config = function (t) {
                        return new i(t);
                    }),
                    (i.ease = new i()),
                    p(
                        "Bounce",
                        c("BounceOut", function (t) {
                            return 1 / 2.75 > t ? 7.5625 * t * t : 2 / 2.75 > t ? 7.5625 * (t -= 1.5 / 2.75) * t + 0.75 : 2.5 / 2.75 > t ? 7.5625 * (t -= 2.25 / 2.75) * t + 0.9375 : 7.5625 * (t -= 2.625 / 2.75) * t + 0.984375;
                        }),
                        c("BounceIn", function (t) {
                            return 1 / 2.75 > (t = 1 - t)
                                ? 1 - 7.5625 * t * t
                                : 2 / 2.75 > t
                                ? 1 - (7.5625 * (t -= 1.5 / 2.75) * t + 0.75)
                                : 2.5 / 2.75 > t
                                ? 1 - (7.5625 * (t -= 2.25 / 2.75) * t + 0.9375)
                                : 1 - (7.5625 * (t -= 2.625 / 2.75) * t + 0.984375);
                        }),
                        c("BounceInOut", function (t) {
                            var e = 0.5 > t;
                            return (
                                (t =
                                    1 / 2.75 > (t = e ? 1 - 2 * t : 2 * t - 1)
                                        ? 7.5625 * t * t
                                        : 2 / 2.75 > t
                                        ? 7.5625 * (t -= 1.5 / 2.75) * t + 0.75
                                        : 2.5 / 2.75 > t
                                        ? 7.5625 * (t -= 2.25 / 2.75) * t + 0.9375
                                        : 7.5625 * (t -= 2.625 / 2.75) * t + 0.984375),
                                e ? 0.5 * (1 - t) : 0.5 * t + 0.5
                            );
                        })
                    ),
                    p(
                        "Circ",
                        c("CircOut", function (t) {
                            return Math.sqrt(1 - (t -= 1) * t);
                        }),
                        c("CircIn", function (t) {
                            return -(Math.sqrt(1 - t * t) - 1);
                        }),
                        c("CircInOut", function (t) {
                            return 1 > (t *= 2) ? -0.5 * (Math.sqrt(1 - t * t) - 1) : 0.5 * (Math.sqrt(1 - (t -= 2) * t) + 1);
                        })
                    ),
                    p(
                        "Elastic",
                        (s = function (e, i, s) {
                            var n = l(
                                    "easing." + e,
                                    function (t, e) {
                                        (this._p1 = t >= 1 ? t : 1), (this._p2 = (e || s) / (1 > t ? t : 1)), (this._p3 = (this._p2 / o) * (Math.asin(1 / this._p1) || 0)), (this._p2 = o / this._p2);
                                    },
                                    !0
                                ),
                                r = (n.prototype = new t());
                            return (
                                (r.constructor = n),
                                (r.getRatio = i),
                                (r.config = function (t, e) {
                                    return new n(t, e);
                                }),
                                n
                            );
                        })(
                            "ElasticOut",
                            function (t) {
                                return this._p1 * Math.pow(2, -10 * t) * Math.sin((t - this._p3) * this._p2) + 1;
                            },
                            0.3
                        ),
                        s(
                            "ElasticIn",
                            function (t) {
                                return -(this._p1 * Math.pow(2, 10 * (t -= 1)) * Math.sin((t - this._p3) * this._p2));
                            },
                            0.3
                        ),
                        s(
                            "ElasticInOut",
                            function (t) {
                                return 1 > (t *= 2) ? -0.5 * this._p1 * Math.pow(2, 10 * (t -= 1)) * Math.sin((t - this._p3) * this._p2) : 0.5 * this._p1 * Math.pow(2, -10 * (t -= 1)) * Math.sin((t - this._p3) * this._p2) + 1;
                            },
                            0.45
                        )
                    ),
                    p(
                        "Expo",
                        c("ExpoOut", function (t) {
                            return 1 - Math.pow(2, -10 * t);
                        }),
                        c("ExpoIn", function (t) {
                            return Math.pow(2, 10 * (t - 1)) - 0.001;
                        }),
                        c("ExpoInOut", function (t) {
                            return 1 > (t *= 2) ? 0.5 * Math.pow(2, 10 * (t - 1)) : 0.5 * (2 - Math.pow(2, -10 * (t - 1)));
                        })
                    ),
                    p(
                        "Sine",
                        c("SineOut", function (t) {
                            return Math.sin(t * a);
                        }),
                        c("SineIn", function (t) {
                            return -Math.cos(t * a) + 1;
                        }),
                        c("SineInOut", function (t) {
                            return -0.5 * (Math.cos(Math.PI * t) - 1);
                        })
                    ),
                    l(
                        "easing.EaseLookup",
                        {
                            find: function (e) {
                                return t.map[e];
                            },
                        },
                        !0
                    ),
                    u(n.SlowMo, "SlowMo", "ease,"),
                    u(i, "RoughEase", "ease,"),
                    u(e, "SteppedEase", "ease,"),
                    g
                );
            },
            !0
        );
}),
    _gsScope._gsDefine && _gsScope._gsQueue.pop()(),
    (function (t, e) {
        "use strict";
        var i = (t.GreenSockGlobals = t.GreenSockGlobals || t);
        if (!i.TweenLite) {
            var s,
                n,
                r,
                o,
                a,
                l,
                c,
                u = function (t) {
                    var e,
                        s = t.split("."),
                        n = i;
                    for (e = 0; s.length > e; e++) n[s[e]] = n = n[s[e]] || {};
                    return n;
                },
                p = u("com.greensock"),
                d = 1e-10,
                f = function (t) {
                    var e,
                        i = [],
                        s = t.length;
                    for (e = 0; e !== s; i.push(t[e++]));
                    return i;
                },
                g = function () {},
                m =
                    ((n = (s = Object.prototype.toString).call([])),
                    function (t) {
                        return null != t && (t instanceof Array || ("object" == typeof t && !!t.push && s.call(t) === n));
                    }),
                v = {},
                y = function (s, n, r, o) {
                    (this.sc = v[s] ? v[s].sc : []), (v[s] = this), (this.gsClass = null), (this.func = r);
                    var a = [];
                    (this.check = function (l) {
                        for (var c, p, d, f, g = n.length, m = g; --g > -1; ) (c = v[n[g]] || new y(n[g], [])).gsClass ? ((a[g] = c.gsClass), m--) : l && c.sc.push(this);
                        if (0 === m && r)
                            for (
                                d = (p = ("com.greensock." + s).split(".")).pop(),
                                    f = u(p.join("."))[d] = this.gsClass = r.apply(r, a),
                                    o &&
                                        ((i[d] = f),
                                        "function" == typeof define && define.amd
                                            ? define((t.GreenSockAMDPath ? t.GreenSockAMDPath + "/" : "") + s.split(".").pop(), [], function () {
                                                  return f;
                                              })
                                            : s === e && "undefined" != typeof module && module.exports && (module.exports = f)),
                                    g = 0;
                                this.sc.length > g;
                                g++
                            )
                                this.sc[g].check();
                    }),
                        this.check(!0);
                },
                _ = (t._gsDefine = function (t, e, i, s) {
                    return new y(t, e, i, s);
                }),
                b = (p._class = function (t, e, i) {
                    return (
                        (e = e || function () {}),
                        _(
                            t,
                            [],
                            function () {
                                return e;
                            },
                            i
                        ),
                        e
                    );
                });
            _.globals = i;
            var x = [0, 0, 1, 1],
                T = [],
                C = b(
                    "easing.Ease",
                    function (t, e, i, s) {
                        (this._func = t), (this._type = i || 0), (this._power = s || 0), (this._params = e ? x.concat(e) : x);
                    },
                    !0
                ),
                A = (C.map = {}),
                P = (C.register = function (t, e, i, s) {
                    for (var n, r, o, a, l = e.split(","), c = l.length, u = (i || "easeIn,easeOut,easeInOut").split(","); --c > -1; )
                        for (r = l[c], n = s ? b("easing." + r, null, !0) : p.easing[r] || {}, o = u.length; --o > -1; ) A[r + "." + (a = u[o])] = A[a + r] = n[a] = t.getRatio ? t : t[a] || new t();
                });
            for (
                (a = C.prototype)._calcEnd = !1,
                    a.getRatio = function (t) {
                        if (this._func) return (this._params[0] = t), this._func.apply(null, this._params);
                        var e = this._type,
                            i = this._power,
                            s = 1 === e ? 1 - t : 2 === e ? t : 0.5 > t ? 2 * t : 2 * (1 - t);
                        return 1 === i ? (s *= s) : 2 === i ? (s *= s * s) : 3 === i ? (s *= s * s * s) : 4 === i && (s *= s * s * s * s), 1 === e ? 1 - s : 2 === e ? s : 0.5 > t ? s / 2 : 1 - s / 2;
                    },
                    o = (r = ["Linear", "Quad", "Cubic", "Quart", "Quint,Strong"]).length;
                --o > -1;

            )
                (a = r[o] + ",Power" + o), P(new C(null, null, 1, o), a, "easeOut", !0), P(new C(null, null, 2, o), a, "easeIn" + (0 === o ? ",easeNone" : "")), P(new C(null, null, 3, o), a, "easeInOut");
            (A.linear = p.easing.Linear.easeIn), (A.swing = p.easing.Quad.easeInOut);
            var S = b("events.EventDispatcher", function (t) {
                (this._listeners = {}), (this._eventTarget = t || this);
            });
            ((a = S.prototype).addEventListener = function (t, e, i, s, n) {
                n = n || 0;
                var r,
                    o,
                    a = this._listeners[t],
                    u = 0;
                for (null == a && (this._listeners[t] = a = []), o = a.length; --o > -1; ) (r = a[o]).c === e && r.s === i ? a.splice(o, 1) : 0 === u && n > r.pr && (u = o + 1);
                a.splice(u, 0, { c: e, s: i, up: s, pr: n }), this !== l || c || l.wake();
            }),
                (a.removeEventListener = function (t, e) {
                    var i,
                        s = this._listeners[t];
                    if (s) {
                        for (i = s.length; --i > -1; ) if (s[i].c === e) return void s.splice(i, 1);
                    }
                }),
                (a.dispatchEvent = function (t) {
                    var e,
                        i,
                        s,
                        n = this._listeners[t];
                    if (n) for (e = n.length, i = this._eventTarget; --e > -1; ) (s = n[e]) && (s.up ? s.c.call(s.s || i, { type: t, target: i }) : s.c.call(s.s || i));
                });
            var k = t.requestAnimationFrame,
                E = t.cancelAnimationFrame,
                O =
                    Date.now ||
                    function () {
                        return new Date().getTime();
                    },
                D = O();
            for (o = (r = ["ms", "moz", "webkit", "o"]).length; --o > -1 && !k; ) (k = t[r[o] + "RequestAnimationFrame"]), (E = t[r[o] + "CancelAnimationFrame"] || t[r[o] + "CancelRequestAnimationFrame"]);
            b("Ticker", function (t, e) {
                var i,
                    s,
                    n,
                    r,
                    o,
                    a = this,
                    u = O(),
                    p = !1 !== e && k,
                    f = 500,
                    m = 33,
                    v = "tick",
                    y = function (t) {
                        var e,
                            l,
                            c = O() - D;
                        c > f && (u += c - m), (D += c), (a.time = (D - u) / 1e3), (e = a.time - o), (!i || e > 0 || !0 === t) && (a.frame++, (o += e + (e >= r ? 0.004 : r - e)), (l = !0)), !0 !== t && (n = s(y)), l && a.dispatchEvent(v);
                    };
                S.call(a),
                    (a.time = a.frame = 0),
                    (a.tick = function () {
                        y(!0);
                    }),
                    (a.lagSmoothing = function (t, e) {
                        m = Math.min(e, (f = t || 1 / d), 0);
                    }),
                    (a.sleep = function () {
                        null != n && (p && E ? E(n) : clearTimeout(n), (s = g), (n = null), a === l && (c = !1));
                    }),
                    (a.wake = function () {
                        null !== n ? a.sleep() : a.frame > 10 && (D = O() - f + 5),
                            (s =
                                0 === i
                                    ? g
                                    : p && k
                                    ? k
                                    : function (t) {
                                          return setTimeout(t, 0 | (1e3 * (o - a.time) + 1));
                                      }),
                            a === l && (c = !0),
                            y(2);
                    }),
                    (a.fps = function (t) {
                        return arguments.length ? ((r = 1 / ((i = t) || 60)), (o = this.time + r), void a.wake()) : i;
                    }),
                    (a.useRAF = function (t) {
                        return arguments.length ? (a.sleep(), (p = t), void a.fps(i)) : p;
                    }),
                    a.fps(t),
                    setTimeout(function () {
                        p && 5 > a.frame && a.useRAF(!1);
                    }, 1500);
            }),
                ((a = p.Ticker.prototype = new p.events.EventDispatcher()).constructor = p.Ticker);
            var z = b("core.Animation", function (t, e) {
                if (
                    ((this.vars = e = e || {}),
                    (this._duration = this._totalDuration = t || 0),
                    (this._delay = Number(e.delay) || 0),
                    (this._timeScale = 1),
                    (this._active = !0 === e.immediateRender),
                    (this.data = e.data),
                    (this._reversed = !0 === e.reversed),
                    U)
                ) {
                    c || l.wake();
                    var i = this.vars.useFrames ? V : U;
                    i.add(this, i._time), this.vars.paused && this.paused(!0);
                }
            });
            (l = z.ticker = new p.Ticker()),
                ((a = z.prototype)._dirty = a._gc = a._initted = a._paused = !1),
                (a._totalTime = a._time = 0),
                (a._rawPrevTime = -1),
                (a._next = a._last = a._onUpdate = a._timeline = a.timeline = null),
                (a._paused = !1);
            var L = function () {
                c && O() - D > 2e3 && l.wake(), setTimeout(L, 2e3);
            };
            L(),
                (a.play = function (t, e) {
                    return null != t && this.seek(t, e), this.reversed(!1).paused(!1);
                }),
                (a.pause = function (t, e) {
                    return null != t && this.seek(t, e), this.paused(!0);
                }),
                (a.resume = function (t, e) {
                    return null != t && this.seek(t, e), this.paused(!1);
                }),
                (a.seek = function (t, e) {
                    return this.totalTime(Number(t), !1 !== e);
                }),
                (a.restart = function (t, e) {
                    return this.reversed(!1)
                        .paused(!1)
                        .totalTime(t ? -this._delay : 0, !1 !== e, !0);
                }),
                (a.reverse = function (t, e) {
                    return null != t && this.seek(t || this.totalDuration(), e), this.reversed(!0).paused(!1);
                }),
                (a.render = function () {}),
                (a.invalidate = function () {
                    return (this._time = this._totalTime = 0), (this._initted = this._gc = !1), (this._rawPrevTime = -1), (this._gc || !this.timeline) && this._enabled(!0), this;
                }),
                (a.isActive = function () {
                    var t,
                        e = this._timeline,
                        i = this._startTime;
                    return !e || (!this._gc && !this._paused && e.isActive() && (t = e.rawTime()) >= i && i + this.totalDuration() / this._timeScale > t);
                }),
                (a._enabled = function (t, e) {
                    return (
                        c || l.wake(),
                        (this._gc = !t),
                        (this._active = this.isActive()),
                        !0 !== e && (t && !this.timeline ? this._timeline.add(this, this._startTime - this._delay) : !t && this.timeline && this._timeline._remove(this, !0)),
                        !1
                    );
                }),
                (a._kill = function () {
                    return this._enabled(!1, !1);
                }),
                (a.kill = function (t, e) {
                    return this._kill(t, e), this;
                }),
                (a._uncache = function (t) {
                    for (var e = t ? this : this.timeline; e; ) (e._dirty = !0), (e = e.timeline);
                    return this;
                }),
                (a._swapSelfInParams = function (t) {
                    for (var e = t.length, i = t.concat(); --e > -1; ) "{self}" === t[e] && (i[e] = this);
                    return i;
                }),
                (a.eventCallback = function (t, e, i, s) {
                    if ("on" === (t || "").substr(0, 2)) {
                        var n = this.vars;
                        if (1 === arguments.length) return n[t];
                        null == e ? delete n[t] : ((n[t] = e), (n[t + "Params"] = m(i) && -1 !== i.join("").indexOf("{self}") ? this._swapSelfInParams(i) : i), (n[t + "Scope"] = s)), "onUpdate" === t && (this._onUpdate = e);
                    }
                    return this;
                }),
                (a.delay = function (t) {
                    return arguments.length ? (this._timeline.smoothChildTiming && this.startTime(this._startTime + t - this._delay), (this._delay = t), this) : this._delay;
                }),
                (a.duration = function (t) {
                    return arguments.length
                        ? ((this._duration = this._totalDuration = t),
                          this._uncache(!0),
                          this._timeline.smoothChildTiming && this._time > 0 && this._time < this._duration && 0 !== t && this.totalTime(this._totalTime * (t / this._duration), !0),
                          this)
                        : ((this._dirty = !1), this._duration);
                }),
                (a.totalDuration = function (t) {
                    return (this._dirty = !1), arguments.length ? this.duration(t) : this._totalDuration;
                }),
                (a.time = function (t, e) {
                    return arguments.length ? (this._dirty && this.totalDuration(), this.totalTime(t > this._duration ? this._duration : t, e)) : this._time;
                }),
                (a.totalTime = function (t, e, i) {
                    if ((c || l.wake(), !arguments.length)) return this._totalTime;
                    if (this._timeline) {
                        if ((0 > t && !i && (t += this.totalDuration()), this._timeline.smoothChildTiming)) {
                            this._dirty && this.totalDuration();
                            var s = this._totalDuration,
                                n = this._timeline;
                            if ((t > s && !i && (t = s), (this._startTime = (this._paused ? this._pauseTime : n._time) - (this._reversed ? s - t : t) / this._timeScale), n._dirty || this._uncache(!1), n._timeline))
                                for (; n._timeline; ) n._timeline._time !== (n._startTime + n._totalTime) / n._timeScale && n.totalTime(n._totalTime, !0), (n = n._timeline);
                        }
                        this._gc && this._enabled(!0, !1), (this._totalTime !== t || 0 === this._duration) && (this.render(t, e, !1), j.length && Z());
                    }
                    return this;
                }),
                (a.progress = a.totalProgress = function (t, e) {
                    return arguments.length ? this.totalTime(this.duration() * t, e) : this._time / this.duration();
                }),
                (a.startTime = function (t) {
                    return arguments.length ? (t !== this._startTime && ((this._startTime = t), this.timeline && this.timeline._sortChildren && this.timeline.add(this, t - this._delay)), this) : this._startTime;
                }),
                (a.endTime = function (t) {
                    return this._startTime + (0 != t ? this.totalDuration() : this.duration()) / this._timeScale;
                }),
                (a.timeScale = function (t) {
                    if (!arguments.length) return this._timeScale;
                    if (((t = t || d), this._timeline && this._timeline.smoothChildTiming)) {
                        var e = this._pauseTime,
                            i = e || 0 === e ? e : this._timeline.totalTime();
                        this._startTime = i - ((i - this._startTime) * this._timeScale) / t;
                    }
                    return (this._timeScale = t), this._uncache(!1);
                }),
                (a.reversed = function (t) {
                    return arguments.length
                        ? (t != this._reversed && ((this._reversed = t), this.totalTime(this._timeline && !this._timeline.smoothChildTiming ? this.totalDuration() - this._totalTime : this._totalTime, !0)), this)
                        : this._reversed;
                }),
                (a.paused = function (t) {
                    if (!arguments.length) return this._paused;
                    var e,
                        i,
                        s = this._timeline;
                    return (
                        t != this._paused &&
                            s &&
                            (c || t || l.wake(),
                            (i = (e = s.rawTime()) - this._pauseTime),
                            !t && s.smoothChildTiming && ((this._startTime += i), this._uncache(!1)),
                            (this._pauseTime = t ? e : null),
                            (this._paused = t),
                            (this._active = this.isActive()),
                            !t && 0 !== i && this._initted && this.duration() && this.render(s.smoothChildTiming ? this._totalTime : (e - this._startTime) / this._timeScale, !0, !0)),
                        this._gc && !t && this._enabled(!0, !1),
                        this
                    );
                });
            var R = b("core.SimpleTimeline", function (t) {
                z.call(this, 0, t), (this.autoRemoveChildren = this.smoothChildTiming = !0);
            });
            ((a = R.prototype = new z()).constructor = R),
                (a.kill()._gc = !1),
                (a._first = a._last = a._recent = null),
                (a._sortChildren = !1),
                (a.add = a.insert = function (t, e) {
                    var i, s;
                    if (
                        ((t._startTime = Number(e || 0) + t._delay),
                        t._paused && this !== t._timeline && (t._pauseTime = t._startTime + (this.rawTime() - t._startTime) / t._timeScale),
                        t.timeline && t.timeline._remove(t, !0),
                        (t.timeline = t._timeline = this),
                        t._gc && t._enabled(!0, !0),
                        (i = this._last),
                        this._sortChildren)
                    )
                        for (s = t._startTime; i && i._startTime > s; ) i = i._prev;
                    return (
                        i ? ((t._next = i._next), (i._next = t)) : ((t._next = this._first), (this._first = t)), t._next ? (t._next._prev = t) : (this._last = t), (t._prev = i), (this._recent = t), this._timeline && this._uncache(!0), this
                    );
                }),
                (a._remove = function (t, e) {
                    return (
                        t.timeline === this &&
                            (e || t._enabled(!1, !0),
                            t._prev ? (t._prev._next = t._next) : this._first === t && (this._first = t._next),
                            t._next ? (t._next._prev = t._prev) : this._last === t && (this._last = t._prev),
                            (t._next = t._prev = t.timeline = null),
                            t === this._recent && (this._recent = this._last),
                            this._timeline && this._uncache(!0)),
                        this
                    );
                }),
                (a.render = function (t, e, i) {
                    var s,
                        n = this._first;
                    for (this._totalTime = this._time = this._rawPrevTime = t; n; )
                        (s = n._next),
                            (n._active || (t >= n._startTime && !n._paused)) &&
                                (n._reversed ? n.render((n._dirty ? n.totalDuration() : n._totalDuration) - (t - n._startTime) * n._timeScale, e, i) : n.render((t - n._startTime) * n._timeScale, e, i)),
                            (n = s);
                }),
                (a.rawTime = function () {
                    return c || l.wake(), this._totalTime;
                });
            var I = b(
                    "TweenLite",
                    function (e, i, s) {
                        if ((z.call(this, i, s), (this.render = I.prototype.render), null == e)) throw "Cannot tween a null target.";
                        this.target = e = "string" != typeof e ? e : I.selector(e) || e;
                        var n,
                            r,
                            o,
                            a = e.jquery || (e.length && e !== t && e[0] && (e[0] === t || (e[0].nodeType && e[0].style && !e.nodeType))),
                            l = this.vars.overwrite;
                        if (((this._overwrite = l = null == l ? Y[I.defaultOverwrite] : "number" == typeof l ? l >> 0 : Y[l]), (a || e instanceof Array || (e.push && m(e))) && "number" != typeof e[0]))
                            for (this._targets = o = f(e), this._propLookup = [], this._siblings = [], n = 0; o.length > n; n++)
                                (r = o[n])
                                    ? "string" != typeof r
                                        ? r.length && r !== t && r[0] && (r[0] === t || (r[0].nodeType && r[0].style && !r.nodeType))
                                            ? (o.splice(n--, 1), (this._targets = o = o.concat(f(r))))
                                            : ((this._siblings[n] = G(r, this, !1)), 1 === l && this._siblings[n].length > 1 && J(r, this, null, 1, this._siblings[n]))
                                        : "string" == typeof (r = o[n--] = I.selector(r)) && o.splice(n + 1, 1)
                                    : o.splice(n--, 1);
                        else (this._propLookup = {}), (this._siblings = G(e, this, !1)), 1 === l && this._siblings.length > 1 && J(e, this, null, 1, this._siblings);
                        (this.vars.immediateRender || (0 === i && 0 === this._delay && !1 !== this.vars.immediateRender)) && ((this._time = -d), this.render(-this._delay));
                    },
                    !0
                ),
                N = function (e) {
                    return e && e.length && e !== t && e[0] && (e[0] === t || (e[0].nodeType && e[0].style && !e.nodeType));
                },
                M = function (t, e) {
                    var i,
                        s = {};
                    for (i in t)
                        q[i] || (i in e && "transform" !== i && "x" !== i && "y" !== i && "width" !== i && "height" !== i && "className" !== i && "border" !== i) || !(!H[i] || (H[i] && H[i]._autoCSS)) || ((s[i] = t[i]), delete t[i]);
                    t.css = s;
                };
            ((a = I.prototype = new z()).constructor = I),
                (a.kill()._gc = !1),
                (a.ratio = 0),
                (a._firstPT = a._targets = a._overwrittenProps = a._startAt = null),
                (a._notifyPluginsOfEnabled = a._lazy = !1),
                (I.version = "1.16.1"),
                (I.defaultEase = a._ease = new C(null, null, 1, 1)),
                (I.defaultOverwrite = "auto"),
                (I.ticker = l),
                (I.autoSleep = 120),
                (I.lagSmoothing = function (t, e) {
                    l.lagSmoothing(t, e);
                }),
                (I.selector =
                    t.$ ||
                    t.jQuery ||
                    function (e) {
                        var i = t.$ || t.jQuery;
                        return i ? ((I.selector = i), i(e)) : "undefined" == typeof document ? e : document.querySelectorAll ? document.querySelectorAll(e) : document.getElementById("#" === e.charAt(0) ? e.substr(1) : e);
                    });
            var j = [],
                F = {},
                B = (I._internals = { isArray: m, isSelector: N, lazyTweens: j }),
                H = (I._plugins = {}),
                W = (B.tweenLookup = {}),
                X = 0,
                q = (B.reservedProps = {
                    ease: 1,
                    delay: 1,
                    overwrite: 1,
                    onComplete: 1,
                    onCompleteParams: 1,
                    onCompleteScope: 1,
                    useFrames: 1,
                    runBackwards: 1,
                    startAt: 1,
                    onUpdate: 1,
                    onUpdateParams: 1,
                    onUpdateScope: 1,
                    onStart: 1,
                    onStartParams: 1,
                    onStartScope: 1,
                    onReverseComplete: 1,
                    onReverseCompleteParams: 1,
                    onReverseCompleteScope: 1,
                    onRepeat: 1,
                    onRepeatParams: 1,
                    onRepeatScope: 1,
                    easeParams: 1,
                    yoyo: 1,
                    immediateRender: 1,
                    repeat: 1,
                    repeatDelay: 1,
                    data: 1,
                    paused: 1,
                    reversed: 1,
                    autoCSS: 1,
                    lazy: 1,
                    onOverwrite: 1,
                }),
                Y = { none: 0, all: 1, auto: 2, concurrent: 3, allOnStart: 4, preexisting: 5, true: 1, false: 0 },
                V = (z._rootFramesTimeline = new R()),
                U = (z._rootTimeline = new R()),
                Q = 30,
                Z = (B.lazyRender = function () {
                    var t,
                        e = j.length;
                    for (F = {}; --e > -1; ) (t = j[e]) && !1 !== t._lazy && (t.render(t._lazy[0], t._lazy[1], !0), (t._lazy = !1));
                    j.length = 0;
                });
            (U._startTime = l.time),
                (V._startTime = l.frame),
                (U._active = V._active = !0),
                setTimeout(Z, 1),
                (z._updateRoot = I.render = function () {
                    var t, e, i;
                    if ((j.length && Z(), U.render((l.time - U._startTime) * U._timeScale, !1, !1), V.render((l.frame - V._startTime) * V._timeScale, !1, !1), j.length && Z(), l.frame >= Q)) {
                        for (i in ((Q = l.frame + (parseInt(I.autoSleep, 10) || 120)), W)) {
                            for (t = (e = W[i].tweens).length; --t > -1; ) e[t]._gc && e.splice(t, 1);
                            0 === e.length && delete W[i];
                        }
                        if ((!(i = U._first) || i._paused) && I.autoSleep && !V._first && 1 === l._listeners.tick.length) {
                            for (; i && i._paused; ) i = i._next;
                            i || l.sleep();
                        }
                    }
                }),
                l.addEventListener("tick", z._updateRoot);
            var G = function (t, e, i) {
                    var s,
                        n,
                        r = t._gsTweenID;
                    if ((W[r || (t._gsTweenID = r = "t" + X++)] || (W[r] = { target: t, tweens: [] }), e && (((s = W[r].tweens)[(n = s.length)] = e), i))) for (; --n > -1; ) s[n] === e && s.splice(n, 1);
                    return W[r].tweens;
                },
                K = function (t, e, i, s) {
                    var n,
                        r,
                        o = t.vars.onOverwrite;
                    return o && (n = o(t, e, i, s)), (o = I.onOverwrite) && (r = o(t, e, i, s)), !1 !== n && !1 !== r;
                },
                J = function (t, e, i, s, n) {
                    if (1 === s || s >= 4) {
                        for (l = n.length, r = 0; l > r; r++)
                            if ((a = n[r]) !== e) a._gc || (K(a, e) && a._enabled(!1, !1) && (o = !0));
                            else if (5 === s) break;
                        return o;
                    }
                    var r,
                        o,
                        a,
                        l,
                        c,
                        u = e._startTime + d,
                        p = [],
                        f = 0,
                        g = 0 === e._duration;
                    for (r = n.length; --r > -1; )
                        (a = n[r]) === e ||
                            a._gc ||
                            a._paused ||
                            (a._timeline !== e._timeline
                                ? ((c = c || tt(e, 0, g)), 0 === tt(a, c, g) && (p[f++] = a))
                                : u >= a._startTime && a._startTime + a.totalDuration() / a._timeScale > u && (((g || !a._initted) && 2e-10 >= u - a._startTime) || (p[f++] = a)));
                    for (r = f; --r > -1; )
                        if (((a = p[r]), 2 === s && a._kill(i, t, e) && (o = !0), 2 !== s || (!a._firstPT && a._initted))) {
                            if (2 !== s && !K(a, e)) continue;
                            a._enabled(!1, !1) && (o = !0);
                        }
                    return o;
                },
                tt = function (t, e, i) {
                    for (var s = t._timeline, n = s._timeScale, r = t._startTime; s._timeline; ) {
                        if (((r += s._startTime), (n *= s._timeScale), s._paused)) return -100;
                        s = s._timeline;
                    }
                    return (r /= n) > e ? r - e : (i && r === e) || (!t._initted && 2 * d > r - e) ? d : (r += t.totalDuration() / t._timeScale / n) > e + d ? 0 : r - e - d;
                };
            (a._init = function () {
                var t,
                    e,
                    i,
                    s,
                    n,
                    r = this.vars,
                    o = this._overwrittenProps,
                    a = this._duration,
                    l = !!r.immediateRender,
                    c = r.ease;
                if (r.startAt) {
                    for (s in (this._startAt && (this._startAt.render(-1, !0), this._startAt.kill()), (n = {}), r.startAt)) n[s] = r.startAt[s];
                    if (((n.overwrite = !1), (n.immediateRender = !0), (n.lazy = l && !1 !== r.lazy), (n.startAt = n.delay = null), (this._startAt = I.to(this.target, 0, n)), l)) {
                        if (this._time > 0) this._startAt = null;
                        else if (0 !== a) return;
                    }
                } else if (r.runBackwards && 0 !== a) {
                    if (this._startAt) this._startAt.render(-1, !0), this._startAt.kill(), (this._startAt = null);
                    else {
                        for (s in (0 !== this._time && (l = !1), (i = {}), r)) (q[s] && "autoCSS" !== s) || (i[s] = r[s]);
                        if (((i.overwrite = 0), (i.data = "isFromStart"), (i.lazy = l && !1 !== r.lazy), (i.immediateRender = l), (this._startAt = I.to(this.target, 0, i)), l)) {
                            if (0 === this._time) return;
                        } else this._startAt._init(), this._startAt._enabled(!1), this.vars.immediateRender && (this._startAt = null);
                    }
                }
                if (
                    ((this._ease = c = c ? (c instanceof C ? c : "function" == typeof c ? new C(c, r.easeParams) : A[c] || I.defaultEase) : I.defaultEase),
                    r.easeParams instanceof Array && c.config && (this._ease = c.config.apply(c, r.easeParams)),
                    (this._easeType = this._ease._type),
                    (this._easePower = this._ease._power),
                    (this._firstPT = null),
                    this._targets)
                )
                    for (t = this._targets.length; --t > -1; ) this._initProps(this._targets[t], (this._propLookup[t] = {}), this._siblings[t], o ? o[t] : null) && (e = !0);
                else e = this._initProps(this.target, this._propLookup, this._siblings, o);
                if ((e && I._onPluginEvent("_onInitAllProps", this), o && (this._firstPT || ("function" != typeof this.target && this._enabled(!1, !1))), r.runBackwards))
                    for (i = this._firstPT; i; ) (i.s += i.c), (i.c = -i.c), (i = i._next);
                (this._onUpdate = r.onUpdate), (this._initted = !0);
            }),
                (a._initProps = function (e, i, s, n) {
                    var r, o, a, l, c, u;
                    if (null == e) return !1;
                    for (r in (F[e._gsTweenID] && Z(), this.vars.css || (e.style && e !== t && e.nodeType && H.css && !1 !== this.vars.autoCSS && M(this.vars, e)), this.vars)) {
                        if (((u = this.vars[r]), q[r])) u && (u instanceof Array || (u.push && m(u))) && -1 !== u.join("").indexOf("{self}") && (this.vars[r] = u = this._swapSelfInParams(u, this));
                        else if (H[r] && (l = new H[r]())._onInitTween(e, this.vars[r], this)) {
                            for (this._firstPT = c = { _next: this._firstPT, t: l, p: "setRatio", s: 0, c: 1, f: !0, n: r, pg: !0, pr: l._priority }, o = l._overwriteProps.length; --o > -1; ) i[l._overwriteProps[o]] = this._firstPT;
                            (l._priority || l._onInitAllProps) && (a = !0), (l._onDisable || l._onEnable) && (this._notifyPluginsOfEnabled = !0);
                        } else
                            (this._firstPT = i[r] = c = { _next: this._firstPT, t: e, p: r, f: "function" == typeof e[r], n: r, pg: !1, pr: 0 }),
                                (c.s = c.f ? e[r.indexOf("set") || "function" != typeof e["get" + r.substr(3)] ? r : "get" + r.substr(3)]() : parseFloat(e[r])),
                                (c.c = "string" == typeof u && "=" === u.charAt(1) ? parseInt(u.charAt(0) + "1", 10) * Number(u.substr(2)) : Number(u) - c.s || 0);
                        c && c._next && (c._next._prev = c);
                    }
                    return n && this._kill(n, e)
                        ? this._initProps(e, i, s, n)
                        : this._overwrite > 1 && this._firstPT && s.length > 1 && J(e, this, i, this._overwrite, s)
                        ? (this._kill(i, e), this._initProps(e, i, s, n))
                        : (this._firstPT && ((!1 !== this.vars.lazy && this._duration) || (this.vars.lazy && !this._duration)) && (F[e._gsTweenID] = !0), a);
                }),
                (a.render = function (t, e, i) {
                    var s,
                        n,
                        r,
                        o,
                        a = this._time,
                        l = this._duration,
                        c = this._rawPrevTime;
                    if (t >= l)
                        (this._totalTime = this._time = l),
                            (this.ratio = this._ease._calcEnd ? this._ease.getRatio(1) : 1),
                            this._reversed || ((s = !0), (n = "onComplete"), (i = i || this._timeline.autoRemoveChildren)),
                            0 === l &&
                                (this._initted || !this.vars.lazy || i) &&
                                (this._startTime === this._timeline._duration && (t = 0),
                                (0 === t || 0 > c || (c === d && "isPause" !== this.data)) && c !== t && ((i = !0), c > d && (n = "onReverseComplete")),
                                (this._rawPrevTime = o = !e || t || c === t ? t : d));
                    else if (1e-7 > t)
                        (this._totalTime = this._time = 0),
                            (this.ratio = this._ease._calcEnd ? this._ease.getRatio(0) : 0),
                            (0 !== a || (0 === l && c > 0)) && ((n = "onReverseComplete"), (s = this._reversed)),
                            0 > t && ((this._active = !1), 0 === l && (this._initted || !this.vars.lazy || i) && (c >= 0 && (c !== d || "isPause" !== this.data) && (i = !0), (this._rawPrevTime = o = !e || t || c === t ? t : d))),
                            this._initted || (i = !0);
                    else if (((this._totalTime = this._time = t), this._easeType)) {
                        var u = t / l,
                            p = this._easeType,
                            f = this._easePower;
                        (1 === p || (3 === p && u >= 0.5)) && (u = 1 - u),
                            3 === p && (u *= 2),
                            1 === f ? (u *= u) : 2 === f ? (u *= u * u) : 3 === f ? (u *= u * u * u) : 4 === f && (u *= u * u * u * u),
                            (this.ratio = 1 === p ? 1 - u : 2 === p ? u : 0.5 > t / l ? u / 2 : 1 - u / 2);
                    } else this.ratio = this._ease.getRatio(t / l);
                    if (this._time !== a || i) {
                        if (!this._initted) {
                            if ((this._init(), !this._initted || this._gc)) return;
                            if (!i && this._firstPT && ((!1 !== this.vars.lazy && this._duration) || (this.vars.lazy && !this._duration)))
                                return (this._time = this._totalTime = a), (this._rawPrevTime = c), j.push(this), void (this._lazy = [t, e]);
                            this._time && !s ? (this.ratio = this._ease.getRatio(this._time / l)) : s && this._ease._calcEnd && (this.ratio = this._ease.getRatio(0 === this._time ? 0 : 1));
                        }
                        for (
                            !1 !== this._lazy && (this._lazy = !1),
                                this._active || (!this._paused && this._time !== a && t >= 0 && (this._active = !0)),
                                0 === a &&
                                    (this._startAt && (t >= 0 ? this._startAt.render(t, e, i) : n || (n = "_dummyGS")),
                                    this.vars.onStart && (0 !== this._time || 0 === l) && (e || this.vars.onStart.apply(this.vars.onStartScope || this, this.vars.onStartParams || T))),
                                r = this._firstPT;
                            r;

                        )
                            r.f ? r.t[r.p](r.c * this.ratio + r.s) : (r.t[r.p] = r.c * this.ratio + r.s), (r = r._next);
                        this._onUpdate && (0 > t && this._startAt && -0.0001 !== t && this._startAt.render(t, e, i), e || ((this._time !== a || s) && this._onUpdate.apply(this.vars.onUpdateScope || this, this.vars.onUpdateParams || T))),
                            n &&
                                (!this._gc || i) &&
                                (0 > t && this._startAt && !this._onUpdate && -0.0001 !== t && this._startAt.render(t, e, i),
                                s && (this._timeline.autoRemoveChildren && this._enabled(!1, !1), (this._active = !1)),
                                !e && this.vars[n] && this.vars[n].apply(this.vars[n + "Scope"] || this, this.vars[n + "Params"] || T),
                                0 === l && this._rawPrevTime === d && o !== d && (this._rawPrevTime = 0));
                    }
                }),
                (a._kill = function (t, e, i) {
                    var s, n, r, o, a, l, c, u, p;
                    if (("all" === t && (t = null), null == t && (null == e || e === this.target))) return (this._lazy = !1), this._enabled(!1, !1);
                    if ((m((e = "string" != typeof e ? e || this._targets || this.target : I.selector(e) || e)) || N(e)) && "number" != typeof e[0]) for (s = e.length; --s > -1; ) this._kill(t, e[s]) && (l = !0);
                    else {
                        if (this._targets) {
                            for (s = this._targets.length; --s > -1; )
                                if (e === this._targets[s]) {
                                    (a = this._propLookup[s] || {}), (this._overwrittenProps = this._overwrittenProps || []), (n = this._overwrittenProps[s] = t ? this._overwrittenProps[s] || {} : "all");
                                    break;
                                }
                        } else {
                            if (e !== this.target) return !1;
                            (a = this._propLookup), (n = this._overwrittenProps = t ? this._overwrittenProps || {} : "all");
                        }
                        if (a) {
                            if (((c = t || a), (u = t !== n && "all" !== n && t !== a && ("object" != typeof t || !t._tempKill)), i && (I.onOverwrite || this.vars.onOverwrite))) {
                                for (r in c) a[r] && (p || (p = []), p.push(r));
                                if (!K(this, i, e, p)) return !1;
                            }
                            for (r in c)
                                (o = a[r]) &&
                                    (o.pg && o.t._kill(c) && (l = !0),
                                    (o.pg && 0 !== o.t._overwriteProps.length) || (o._prev ? (o._prev._next = o._next) : o === this._firstPT && (this._firstPT = o._next), o._next && (o._next._prev = o._prev), (o._next = o._prev = null)),
                                    delete a[r]),
                                    u && (n[r] = 1);
                            !this._firstPT && this._initted && this._enabled(!1, !1);
                        }
                    }
                    return l;
                }),
                (a.invalidate = function () {
                    return (
                        this._notifyPluginsOfEnabled && I._onPluginEvent("_onDisable", this),
                        (this._firstPT = this._overwrittenProps = this._startAt = this._onUpdate = null),
                        (this._notifyPluginsOfEnabled = this._active = this._lazy = !1),
                        (this._propLookup = this._targets ? {} : []),
                        z.prototype.invalidate.call(this),
                        this.vars.immediateRender && ((this._time = -d), this.render(-this._delay)),
                        this
                    );
                }),
                (a._enabled = function (t, e) {
                    if ((c || l.wake(), t && this._gc)) {
                        var i,
                            s = this._targets;
                        if (s) for (i = s.length; --i > -1; ) this._siblings[i] = G(s[i], this, !0);
                        else this._siblings = G(this.target, this, !0);
                    }
                    return z.prototype._enabled.call(this, t, e), !!this._notifyPluginsOfEnabled && !!this._firstPT && I._onPluginEvent(t ? "_onEnable" : "_onDisable", this);
                }),
                (I.to = function (t, e, i) {
                    return new I(t, e, i);
                }),
                (I.from = function (t, e, i) {
                    return (i.runBackwards = !0), (i.immediateRender = 0 != i.immediateRender), new I(t, e, i);
                }),
                (I.fromTo = function (t, e, i, s) {
                    return (s.startAt = i), (s.immediateRender = 0 != s.immediateRender && 0 != i.immediateRender), new I(t, e, s);
                }),
                (I.delayedCall = function (t, e, i, s, n) {
                    return new I(e, 0, {
                        delay: t,
                        onComplete: e,
                        onCompleteParams: i,
                        onCompleteScope: s,
                        onReverseComplete: e,
                        onReverseCompleteParams: i,
                        onReverseCompleteScope: s,
                        immediateRender: !1,
                        lazy: !1,
                        useFrames: n,
                        overwrite: 0,
                    });
                }),
                (I.set = function (t, e) {
                    return new I(t, 0, e);
                }),
                (I.getTweensOf = function (t, e) {
                    var i, s, n, r;
                    if (null == t) return [];
                    if ((m((t = "string" != typeof t ? t : I.selector(t) || t)) || N(t)) && "number" != typeof t[0]) {
                        for (i = t.length, s = []; --i > -1; ) s = s.concat(I.getTweensOf(t[i], e));
                        for (i = s.length; --i > -1; ) for (r = s[i], n = i; --n > -1; ) r === s[n] && s.splice(i, 1);
                    } else for (i = (s = G(t).concat()).length; --i > -1; ) (s[i]._gc || (e && !s[i].isActive())) && s.splice(i, 1);
                    return s;
                }),
                (I.killTweensOf = I.killDelayedCallsTo = function (t, e, i) {
                    "object" == typeof e && ((i = e), (e = !1));
                    for (var s = I.getTweensOf(t, e), n = s.length; --n > -1; ) s[n]._kill(i, t);
                });
            var te = b(
                "plugins.TweenPlugin",
                function (t, e) {
                    (this._overwriteProps = (t || "").split(",")), (this._propName = this._overwriteProps[0]), (this._priority = e || 0), (this._super = te.prototype);
                },
                !0
            );
            if (
                ((a = te.prototype),
                (te.version = "1.10.1"),
                (te.API = 2),
                (a._firstPT = null),
                (a._addTween = function (t, e, i, s, n, r) {
                    var o, a;
                    return null != s && (o = "number" == typeof s || "=" !== s.charAt(1) ? Number(s) - i : parseInt(s.charAt(0) + "1", 10) * Number(s.substr(2)))
                        ? ((this._firstPT = a = { _next: this._firstPT, t: t, p: e, s: i, c: o, f: "function" == typeof t[e], n: n || e, r: r }), a._next && (a._next._prev = a), a)
                        : void 0;
                }),
                (a.setRatio = function (t) {
                    for (var e, i = this._firstPT; i; ) (e = i.c * t + i.s), i.r ? (e = Math.round(e)) : 1e-6 > e && e > -0.000001 && (e = 0), i.f ? i.t[i.p](e) : (i.t[i.p] = e), (i = i._next);
                }),
                (a._kill = function (t) {
                    var e,
                        i = this._overwriteProps,
                        s = this._firstPT;
                    if (null != t[this._propName]) this._overwriteProps = [];
                    else for (e = i.length; --e > -1; ) null != t[i[e]] && i.splice(e, 1);
                    for (; s; ) null != t[s.n] && (s._next && (s._next._prev = s._prev), s._prev ? ((s._prev._next = s._next), (s._prev = null)) : this._firstPT === s && (this._firstPT = s._next)), (s = s._next);
                    return !1;
                }),
                (a._roundProps = function (t, e) {
                    for (var i = this._firstPT; i; ) (t[this._propName] || (null != i.n && t[i.n.split(this._propName + "_").join("")])) && (i.r = e), (i = i._next);
                }),
                (I._onPluginEvent = function (t, e) {
                    var i,
                        s,
                        n,
                        r,
                        o,
                        a = e._firstPT;
                    if ("_onInitAllProps" === t) {
                        for (; a; ) {
                            for (o = a._next, s = n; s && s.pr > a.pr; ) s = s._next;
                            (a._prev = s ? s._prev : r) ? (a._prev._next = a) : (n = a), (a._next = s) ? (s._prev = a) : (r = a), (a = o);
                        }
                        a = e._firstPT = n;
                    }
                    for (; a; ) a.pg && "function" == typeof a.t[t] && a.t[t]() && (i = !0), (a = a._next);
                    return i;
                }),
                (te.activate = function (t) {
                    for (var e = t.length; --e > -1; ) t[e].API === te.API && (H[new t[e]()._propName] = t[e]);
                    return !0;
                }),
                (_.plugin = function (t) {
                    if (!(t && t.propName && t.init && t.API)) throw "illegal plugin definition.";
                    var e,
                        i = t.propName,
                        s = t.priority || 0,
                        n = t.overwriteProps,
                        r = { init: "_onInitTween", set: "setRatio", kill: "_kill", round: "_roundProps", initAll: "_onInitAllProps" },
                        o = b(
                            "plugins." + i.charAt(0).toUpperCase() + i.substr(1) + "Plugin",
                            function () {
                                te.call(this, i, s), (this._overwriteProps = n || []);
                            },
                            !0 === t.global
                        ),
                        a = (o.prototype = new te(i));
                    for (e in ((a.constructor = o), (o.API = t.API), r)) "function" == typeof t[e] && (a[r[e]] = t[e]);
                    return (o.version = t.version), te.activate([o]), o;
                }),
                (r = t._gsQueue))
            ) {
                for (o = 0; r.length > o; o++) r[o]();
                for (a in v) v[a].func || t.console.log("GSAP encountered missing dependency: com.greensock." + a);
            }
            c = !1;
        }
    })("undefined" != typeof module && module.exports && "undefined" != typeof global ? global : this || window, "TweenMax"),
    (function (t, e) {
        "function" == typeof define && define.amd ? define(e) : "object" == typeof exports ? (module.exports = e()) : (t.ScrollMagic = e());
    })(this, function () {
        "use strict";
        var t = function () {};
        (t.version = "2.0.5"), window.addEventListener("mousewheel", function () {});
        var e = "data-scrollmagic-pin-spacer";
        t.Controller = function (s) {
            var r,
                o,
                a = "REVERSE",
                l = "PAUSED",
                c = i.defaults,
                u = this,
                p = n.extend({}, c, s),
                d = [],
                f = !1,
                g = 0,
                m = l,
                v = !0,
                y = 0,
                _ = !0,
                b = function () {
                    p.refreshInterval > 0 && (o = window.setTimeout(k, p.refreshInterval));
                },
                x = function () {
                    return p.vertical ? n.get.scrollTop(p.container) : n.get.scrollLeft(p.container);
                },
                T = function () {
                    return p.vertical ? n.get.height(p.container) : n.get.width(p.container);
                },
                C = (this._setScrollPos = function (t) {
                    p.vertical ? (v ? window.scrollTo(n.get.scrollLeft(), t) : (p.container.scrollTop = t)) : v ? window.scrollTo(t, n.get.scrollTop()) : (p.container.scrollLeft = t);
                }),
                A = function () {
                    if (_ && f) {
                        var t = n.type.Array(f) ? f : d.slice(0);
                        f = !1;
                        var e = g,
                            i = (g = u.scrollPos()) - e;
                        0 !== i && (m = i > 0 ? "FORWARD" : a),
                            m === a && t.reverse(),
                            t.forEach(function (t) {
                                t.update(!0);
                            });
                    }
                },
                P = function () {
                    r = n.rAF(A);
                },
                S = function (t) {
                    "resize" == t.type && ((y = T()), (m = l)), !0 !== f && ((f = !0), P());
                },
                k = function () {
                    if (!v && y != T()) {
                        var t;
                        try {
                            t = new Event("resize", { bubbles: !1, cancelable: !1 });
                        } catch (e) {
                            (t = document.createEvent("Event")).initEvent("resize", !1, !1);
                        }
                        p.container.dispatchEvent(t);
                    }
                    d.forEach(function (t) {
                        t.refresh();
                    }),
                        b();
                };
            this._options = p;
            var E = function (t) {
                if (t.length <= 1) return t;
                var e = t.slice(0);
                return (
                    e.sort(function (t, e) {
                        return t.scrollOffset() > e.scrollOffset() ? 1 : -1;
                    }),
                    e
                );
            };
            return (
                (this.addScene = function (e) {
                    if (n.type.Array(e))
                        e.forEach(function (t) {
                            u.addScene(t);
                        });
                    else if (e instanceof t.Scene) {
                        if (e.controller() !== u) e.addTo(u);
                        else if (0 > d.indexOf(e))
                            for (var i in (d.push(e),
                            (d = E(d)),
                            e.on("shift.controller_sort", function () {
                                d = E(d);
                            }),
                            p.globalSceneOptions))
                                e[i] && e[i].call(e, p.globalSceneOptions[i]);
                    }
                    return u;
                }),
                (this.removeScene = function (t) {
                    if (n.type.Array(t))
                        t.forEach(function (t) {
                            u.removeScene(t);
                        });
                    else {
                        var e = d.indexOf(t);
                        e > -1 && (t.off("shift.controller_sort"), d.splice(e, 1), t.remove());
                    }
                    return u;
                }),
                (this.updateScene = function (e, i) {
                    return (
                        n.type.Array(e)
                            ? e.forEach(function (t) {
                                  u.updateScene(t, i);
                              })
                            : i
                            ? e.update(!0)
                            : !0 !== f && e instanceof t.Scene && (-1 == (f = f || []).indexOf(e) && f.push(e), (f = E(f)), P()),
                        u
                    );
                }),
                (this.update = function (t) {
                    return S({ type: "resize" }), t && A(), u;
                }),
                (this.scrollTo = function (i, s) {
                    if (n.type.Number(i)) C.call(p.container, i, s);
                    else if (i instanceof t.Scene) i.controller() === u && u.scrollTo(i.scrollOffset(), s);
                    else if (n.type.Function(i)) C = i;
                    else {
                        var r = n.get.elements(i)[0];
                        if (r) {
                            for (; r.parentNode.hasAttribute(e); ) r = r.parentNode;
                            var o = p.vertical ? "top" : "left",
                                a = n.get.offset(p.container),
                                l = n.get.offset(r);
                            v || (a[o] -= u.scrollPos()), u.scrollTo(l[o] - a[o], s);
                        }
                    }
                    return u;
                }),
                (this.scrollPos = function (t) {
                    return arguments.length ? (n.type.Function(t) && (x = t), u) : x.call(u);
                }),
                (this.info = function (t) {
                    var e = { size: y, vertical: p.vertical, scrollPos: g, scrollDirection: m, container: p.container, isDocument: v };
                    return arguments.length ? (void 0 !== e[t] ? e[t] : void 0) : e;
                }),
                (this.loglevel = function () {
                    return u;
                }),
                (this.enabled = function (t) {
                    return arguments.length ? (_ != t && ((_ = !!t), u.updateScene(d, !0)), u) : _;
                }),
                (this.destroy = function (t) {
                    window.clearTimeout(o);
                    for (var e = d.length; e--; ) d[e].destroy(t);
                    return p.container.removeEventListener("resize", S), p.container.removeEventListener("scroll", S), n.cAF(r), null;
                }),
                (function () {
                    for (var t in p) c.hasOwnProperty(t) || delete p[t];
                    if (((p.container = n.get.elements(p.container)[0]), !p.container)) throw "ScrollMagic.Controller init failed.";
                    (v = p.container === window || p.container === document.body || !document.body.contains(p.container)) && (p.container = window),
                        (y = T()),
                        p.container.addEventListener("resize", S),
                        p.container.addEventListener("scroll", S),
                        (p.refreshInterval = parseInt(p.refreshInterval) || c.refreshInterval),
                        b();
                })(),
                u
            );
        };
        var i = { defaults: { container: window, vertical: !0, globalSceneOptions: {}, loglevel: 2, refreshInterval: 100 } };
        (t.Controller.addOption = function (t, e) {
            i.defaults[t] = e;
        }),
            (t.Controller.extend = function (e) {
                var i = this;
                (t.Controller = function () {
                    return i.apply(this, arguments), (this.$super = n.extend({}, this)), e.apply(this, arguments) || this;
                }),
                    n.extend(t.Controller, i),
                    (t.Controller.prototype = i.prototype),
                    (t.Controller.prototype.constructor = t.Controller);
            }),
            (t.Scene = function (i) {
                var r,
                    o,
                    a = "BEFORE",
                    l = "DURING",
                    c = "AFTER",
                    u = s.defaults,
                    p = this,
                    d = n.extend({}, u, i),
                    f = a,
                    g = 0,
                    m = { start: 0, end: 0 },
                    v = 0,
                    y = !0,
                    _ = {};
                (this.on = function (t, e) {
                    return (
                        n.type.Function(e) &&
                            (t = t.trim().split(" ")).forEach(function (t) {
                                var i = t.split("."),
                                    s = i[0],
                                    n = i[1];
                                "*" != s && (_[s] || (_[s] = []), _[s].push({ namespace: n || "", callback: e }));
                            }),
                        p
                    );
                }),
                    (this.off = function (t, e) {
                        return (
                            t &&
                                (t = t.trim().split(" ")).forEach(function (t) {
                                    var i = t.split("."),
                                        s = i[0],
                                        n = i[1] || "";
                                    ("*" === s ? Object.keys(_) : [s]).forEach(function (t) {
                                        for (var i = _[t] || [], s = i.length; s--; ) {
                                            var r = i[s];
                                            !r || (n !== r.namespace && "*" !== n) || (e && e != r.callback) || i.splice(s, 1);
                                        }
                                        i.length || delete _[t];
                                    });
                                }),
                            p
                        );
                    }),
                    (this.trigger = function (e, i) {
                        if (e) {
                            var s = e.trim().split("."),
                                n = s[0],
                                r = s[1],
                                o = _[n];
                            o &&
                                o.forEach(function (e) {
                                    (r && r !== e.namespace) || e.callback.call(p, new t.Event(n, e.namespace, p, i));
                                });
                        }
                        return p;
                    }),
                    p
                        .on("change.internal", function (t) {
                            "loglevel" !== t.what && "tweenChanges" !== t.what && ("triggerElement" === t.what ? T() : "reverse" === t.what && p.update());
                        })
                        .on("shift.internal", function () {
                            b(), p.update();
                        }),
                    (this.addTo = function (e) {
                        return (
                            e instanceof t.Controller && o != e && (o && o.removeScene(p), (o = e), P(), x(!0), T(!0), b(), o.info("container").addEventListener("resize", C), e.addScene(p), p.trigger("add", { controller: o }), p.update()),
                            p
                        );
                    }),
                    (this.enabled = function (t) {
                        return arguments.length ? (y != t && ((y = !!t), p.update(!0)), p) : y;
                    }),
                    (this.remove = function () {
                        if (o) {
                            o.info("container").removeEventListener("resize", C);
                            var t = o;
                            (o = void 0), t.removeScene(p), p.trigger("remove");
                        }
                        return p;
                    }),
                    (this.destroy = function (t) {
                        return p.trigger("destroy", { reset: t }), p.remove(), p.off("*.*"), null;
                    }),
                    (this.update = function (t) {
                        if (o) {
                            if (t) {
                                if (o.enabled() && y) {
                                    var e,
                                        i = o.info("scrollPos");
                                    (e = d.duration > 0 ? (i - m.start) / (m.end - m.start) : i >= m.start ? 1 : 0), p.trigger("update", { startPos: m.start, endPos: m.end, scrollPos: i }), p.progress(e);
                                } else R && f === l && E(!0);
                            } else o.updateScene(p, !1);
                        }
                        return p;
                    }),
                    (this.refresh = function () {
                        return x(), T(), p;
                    }),
                    (this.progress = function (t) {
                        if (arguments.length) {
                            var e = !1,
                                i = f,
                                s = o ? o.info("scrollDirection") : "PAUSED",
                                n = d.reverse || t >= g;
                            if (
                                (0 === d.duration
                                    ? ((e = g != t), (f = 0 == (g = 1 > t && n ? 0 : 1) ? a : l))
                                    : 0 > t && f !== a && n
                                    ? ((g = 0), (f = a), (e = !0))
                                    : t >= 0 && 1 > t && n
                                    ? ((g = t), (f = l), (e = !0))
                                    : t >= 1 && f !== c
                                    ? ((g = 1), (f = c), (e = !0))
                                    : f !== l || n || E(),
                                e)
                            ) {
                                var r = { progress: g, state: f, scrollDirection: s },
                                    u = f != i,
                                    m = function (t) {
                                        p.trigger(t, r);
                                    };
                                u && i !== l && (m("enter"), m(i === a ? "start" : "end")), m("progress"), u && f !== l && (m(f === a ? "start" : "end"), m("leave"));
                            }
                            return p;
                        }
                        return g;
                    });
                var b = function () {
                        (m = { start: v + d.offset }), o && d.triggerElement && (m.start -= o.info("size") * d.triggerHook), (m.end = m.start + d.duration);
                    },
                    x = function (t) {
                        if (r) {
                            var e = "duration";
                            S(e, r.call(p)) && !t && (p.trigger("change", { what: e, newval: d[e] }), p.trigger("shift", { reason: e }));
                        }
                    },
                    T = function (t) {
                        var i = 0,
                            s = d.triggerElement;
                        if (o && s) {
                            for (var r = o.info(), a = n.get.offset(r.container), l = r.vertical ? "top" : "left"; s.parentNode.hasAttribute(e); ) s = s.parentNode;
                            var c = n.get.offset(s);
                            r.isDocument || (a[l] -= o.scrollPos()), (i = c[l] - a[l]);
                        }
                        var u = i != v;
                        (v = i), u && !t && p.trigger("shift", { reason: "triggerElementPosition" });
                    },
                    C = function () {
                        d.triggerHook > 0 && p.trigger("shift", { reason: "containerResize" });
                    },
                    A = n.extend(s.validate, {
                        duration: function (t) {
                            if (n.type.String(t) && t.match(/^(\.|\d)*\d+%$/)) {
                                var e = parseFloat(t) / 100;
                                t = function () {
                                    return o ? o.info("size") * e : 0;
                                };
                            }
                            if (n.type.Function(t)) {
                                r = t;
                                try {
                                    t = parseFloat(r());
                                } catch (i) {
                                    t = -1;
                                }
                            }
                            if (((t = parseFloat(t)), !n.type.Number(t) || 0 > t)) throw (r && (r = void 0), 0);
                            return t;
                        },
                    }),
                    P = function (t) {
                        (t = arguments.length ? [t] : Object.keys(A)),
                            t.forEach(function (t) {
                                var e;
                                if (A[t])
                                    try {
                                        e = A[t](d[t]);
                                    } catch (i) {
                                        e = u[t];
                                    } finally {
                                        d[t] = e;
                                    }
                            });
                    },
                    S = function (t, e) {
                        var i = !1,
                            s = d[t];
                        return d[t] != e && ((d[t] = e), P(t), (i = s != d[t])), i;
                    },
                    k = function (t) {
                        p[t] ||
                            (p[t] = function (e) {
                                return arguments.length ? ("duration" === t && (r = void 0), S(t, e) && (p.trigger("change", { what: t, newval: d[t] }), s.shifts.indexOf(t) > -1 && p.trigger("shift", { reason: t })), p) : d[t];
                            });
                    };
                (this.controller = function () {
                    return o;
                }),
                    (this.state = function () {
                        return f;
                    }),
                    (this.scrollOffset = function () {
                        return m.start;
                    }),
                    (this.triggerPosition = function () {
                        var t = d.offset;
                        return o && (t += d.triggerElement ? v : o.info("size") * p.triggerHook()), t;
                    }),
                    p
                        .on("shift.internal", function (t) {
                            var e = "duration" === t.reason;
                            ((f === c && e) || (f === l && 0 === d.duration)) && E(), e && O();
                        })
                        .on("progress.internal", function () {
                            E();
                        })
                        .on("add.internal", function () {
                            O();
                        })
                        .on("destroy.internal", function (t) {
                            p.removePin(t.reset);
                        });
                var E = function (t) {
                        if (R && o) {
                            var e = o.info(),
                                i = I.spacer.firstChild;
                            if (t || f !== l) {
                                var s = { position: I.inFlow ? "relative" : "absolute", top: 0, left: 0 },
                                    r = n.css(i, "position") != s.position;
                                I.pushFollowers
                                    ? d.duration > 0 && (f === c && 0 === parseFloat(n.css(I.spacer, "padding-top")) ? (r = !0) : f === a && 0 === parseFloat(n.css(I.spacer, "padding-bottom")) && (r = !0))
                                    : (s[e.vertical ? "top" : "left"] = d.duration * g),
                                    n.css(i, s),
                                    r && O();
                            } else {
                                "fixed" != n.css(i, "position") && (n.css(i, { position: "fixed" }), O());
                                var u = n.get.offset(I.spacer, !0),
                                    p = d.reverse || 0 === d.duration ? e.scrollPos - m.start : Math.round(g * d.duration * 10) / 10;
                                (u[e.vertical ? "top" : "left"] += p), n.css(I.spacer.firstChild, { top: u.top, left: u.left });
                            }
                        }
                    },
                    O = function () {
                        if (R && o && I.inFlow) {
                            var t = f === l,
                                e = o.info("vertical"),
                                i = I.spacer.firstChild,
                                s = n.isMarginCollapseType(n.css(I.spacer, "display")),
                                r = {};
                            I.relSize.width || I.relSize.autoFullWidth
                                ? t
                                    ? n.css(R, { width: n.get.width(I.spacer) })
                                    : n.css(R, { width: "100%" })
                                : ((r["min-width"] = n.get.width(e ? R : i, !0, !0)), (r.width = t ? r["min-width"] : "auto")),
                                I.relSize.height
                                    ? t
                                        ? n.css(R, { height: n.get.height(I.spacer) - (I.pushFollowers ? d.duration : 0) })
                                        : n.css(R, { height: "100%" })
                                    : ((r["min-height"] = n.get.height(e ? i : R, !0, !s)), (r.height = t ? r["min-height"] : "auto")),
                                I.pushFollowers && ((r["padding" + (e ? "Top" : "Left")] = d.duration * g), (r["padding" + (e ? "Bottom" : "Right")] = d.duration * (1 - g))),
                                n.css(I.spacer, r);
                        }
                    },
                    D = function () {
                        o && R && f === l && !o.info("isDocument") && E();
                    },
                    z = function () {
                        o &&
                            R &&
                            f === l &&
                            (((I.relSize.width || I.relSize.autoFullWidth) && n.get.width(window) != n.get.width(I.spacer.parentNode)) || (I.relSize.height && n.get.height(window) != n.get.height(I.spacer.parentNode))) &&
                            O();
                    },
                    L = function (t) {
                        o && R && f === l && !o.info("isDocument") && (t.preventDefault(), o._setScrollPos(o.info("scrollPos") - ((t.wheelDelta || t[o.info("vertical") ? "wheelDeltaY" : "wheelDeltaX"]) / 3 || -(30 * t.detail))));
                    };
                (this.setPin = function (t, i) {
                    if (((i = n.extend({}, { pushFollowers: !0, spacerClass: "scrollmagic-pin-spacer" }, i)), !(t = n.get.elements(t)[0]) || "fixed" === n.css(t, "position"))) return p;
                    if (R) {
                        if (R === t) return p;
                        p.removePin();
                    }
                    var s = (R = t).parentNode.style.display,
                        r = ["top", "left", "bottom", "right", "margin", "marginLeft", "marginRight", "marginTop", "marginBottom"];
                    R.parentNode.style.display = "none";
                    var o = "absolute" != n.css(R, "position"),
                        a = n.css(R, r.concat(["display"])),
                        l = n.css(R, ["width", "height"]);
                    (R.parentNode.style.display = s), !o && i.pushFollowers && (i.pushFollowers = !1);
                    var c = R.parentNode.insertBefore(document.createElement("div"), R),
                        u = n.extend(a, { position: o ? "relative" : "absolute", boxSizing: "content-box", mozBoxSizing: "content-box", webkitBoxSizing: "content-box" });
                    if (
                        (o || n.extend(u, n.css(R, ["width", "height"])),
                        n.css(c, u),
                        c.setAttribute(e, ""),
                        n.addClass(c, i.spacerClass),
                        (I = {
                            spacer: c,
                            relSize: { width: "%" === l.width.slice(-1), height: "%" === l.height.slice(-1), autoFullWidth: "auto" === l.width && o && n.isMarginCollapseType(a.display) },
                            pushFollowers: i.pushFollowers,
                            inFlow: o,
                        }),
                        !R.___origStyle)
                    ) {
                        R.___origStyle = {};
                        var d = R.style;
                        r.concat(["width", "height", "position", "boxSizing", "mozBoxSizing", "webkitBoxSizing"]).forEach(function (t) {
                            R.___origStyle[t] = d[t] || "";
                        });
                    }
                    return (
                        I.relSize.width && n.css(c, { width: l.width }),
                        I.relSize.height && n.css(c, { height: l.height }),
                        c.appendChild(R),
                        n.css(R, { position: o ? "relative" : "absolute", margin: "auto", top: "auto", left: "auto", bottom: "auto", right: "auto" }),
                        (I.relSize.width || I.relSize.autoFullWidth) && n.css(R, { boxSizing: "border-box", mozBoxSizing: "border-box", webkitBoxSizing: "border-box" }),
                        window.addEventListener("scroll", D),
                        window.addEventListener("resize", D),
                        window.addEventListener("resize", z),
                        R.addEventListener("mousewheel", L),
                        R.addEventListener("DOMMouseScroll", L),
                        E(),
                        p
                    );
                }),
                    (this.removePin = function (t) {
                        if (R) {
                            if ((f === l && E(!0), t || !o)) {
                                var i = I.spacer.firstChild;
                                if (i.hasAttribute(e)) {
                                    var s = I.spacer.style;
                                    (margins = {}),
                                        ["margin", "marginLeft", "marginRight", "marginTop", "marginBottom"].forEach(function (t) {
                                            margins[t] = s[t] || "";
                                        }),
                                        n.css(i, margins);
                                }
                                I.spacer.parentNode.insertBefore(i, I.spacer), I.spacer.parentNode.removeChild(I.spacer), R.parentNode.hasAttribute(e) || (n.css(R, R.___origStyle), delete R.___origStyle);
                            }
                            window.removeEventListener("scroll", D),
                                window.removeEventListener("resize", D),
                                window.removeEventListener("resize", z),
                                R.removeEventListener("mousewheel", L),
                                R.removeEventListener("DOMMouseScroll", L),
                                (R = void 0);
                        }
                        return p;
                    });
                var R,
                    I,
                    N,
                    M = [];
                return (
                    p.on("destroy.internal", function (t) {
                        p.removeClassToggle(t.reset);
                    }),
                    (this.setClassToggle = function (t, e) {
                        var i = n.get.elements(t);
                        return (
                            0 !== i.length &&
                                n.type.String(e) &&
                                (M.length > 0 && p.removeClassToggle(),
                                (N = e),
                                (M = i),
                                p.on("enter.internal_class leave.internal_class", function (t) {
                                    var e = "enter" === t.type ? n.addClass : n.removeClass;
                                    M.forEach(function (t) {
                                        e(t, N);
                                    });
                                })),
                            p
                        );
                    }),
                    (this.removeClassToggle = function (t) {
                        return (
                            t &&
                                M.forEach(function (t) {
                                    n.removeClass(t, N);
                                }),
                            p.off("start.internal_class end.internal_class"),
                            (N = void 0),
                            (M = []),
                            p
                        );
                    }),
                    (function () {
                        for (var t in d) u.hasOwnProperty(t) || delete d[t];
                        for (var e in u) k(e);
                        P();
                    })(),
                    p
                );
            });
        var s = {
            defaults: { duration: 0, offset: 0, triggerElement: void 0, triggerHook: 0.5, reverse: !0, loglevel: 2 },
            validate: {
                offset: function (t) {
                    if (((t = parseFloat(t)), !n.type.Number(t))) throw 0;
                    return t;
                },
                triggerElement: function (t) {
                    if ((t = t || void 0)) {
                        var e = n.get.elements(t)[0];
                        if (!e) throw 0;
                        t = e;
                    }
                    return t;
                },
                triggerHook: function (t) {
                    var e = { onCenter: 0.5, onEnter: 1, onLeave: 0 };
                    if (n.type.Number(t)) t = Math.max(0, Math.min(parseFloat(t), 1));
                    else {
                        if (!(t in e)) throw 0;
                        t = e[t];
                    }
                    return t;
                },
                reverse: function (t) {
                    return !!t;
                },
            },
            shifts: ["duration", "offset", "triggerHook"],
        };
        (t.Scene.addOption = function (t, e, i, n) {
            t in s.defaults || ((s.defaults[t] = e), (s.validate[t] = i), n && s.shifts.push(t));
        }),
            (t.Scene.extend = function (e) {
                var i = this;
                (t.Scene = function () {
                    return i.apply(this, arguments), (this.$super = n.extend({}, this)), e.apply(this, arguments) || this;
                }),
                    n.extend(t.Scene, i),
                    (t.Scene.prototype = i.prototype),
                    (t.Scene.prototype.constructor = t.Scene);
            }),
            (t.Event = function (t, e, i, s) {
                for (var n in (s = s || {})) this[n] = s[n];
                return (this.type = t), (this.target = this.currentTarget = i), (this.namespace = e || ""), (this.timeStamp = this.timestamp = Date.now()), this;
            });
        var n = (t._util = (function (t) {
            var e,
                i = {},
                s = function (t) {
                    return parseFloat(t) || 0;
                },
                n = function (e) {
                    return e.currentStyle ? e.currentStyle : t.getComputedStyle(e);
                },
                r = function (e, i, r, o) {
                    if ((i = i === document ? t : i) === t) o = !1;
                    else if (!p.DomElement(i)) return 0;
                    e = e.charAt(0).toUpperCase() + e.substr(1).toLowerCase();
                    var a = (r ? i["offset" + e] || i["outer" + e] : i["client" + e] || i["inner" + e]) || 0;
                    if (r && o) {
                        var l = n(i);
                        a += "Height" === e ? s(l.marginTop) + s(l.marginBottom) : s(l.marginLeft) + s(l.marginRight);
                    }
                    return a;
                },
                o = function (t) {
                    return t.replace(/^[^a-z]+([a-z])/g, "$1").replace(/-([a-z])/g, function (t) {
                        return t[1].toUpperCase();
                    });
                };
            (i.extend = function (t) {
                for (t = t || {}, e = 1; e < arguments.length; e++) if (arguments[e]) for (var i in arguments[e]) arguments[e].hasOwnProperty(i) && (t[i] = arguments[e][i]);
                return t;
            }),
                (i.isMarginCollapseType = function (t) {
                    return ["block", "flex", "list-item", "table", "-webkit-box"].indexOf(t) > -1;
                });
            var a = 0,
                l = ["ms", "moz", "webkit", "o"],
                c = t.requestAnimationFrame,
                u = t.cancelAnimationFrame;
            for (e = 0; !c && e < l.length; ++e) (c = t[l[e] + "RequestAnimationFrame"]), (u = t[l[e] + "CancelAnimationFrame"] || t[l[e] + "CancelRequestAnimationFrame"]);
            c ||
                (c = function (e) {
                    var i = new Date().getTime(),
                        s = Math.max(0, 16 - (i - a)),
                        n = t.setTimeout(function () {
                            e(i + s);
                        }, s);
                    return (a = i + s), n;
                }),
                u ||
                    (u = function (e) {
                        t.clearTimeout(e);
                    }),
                (i.rAF = c.bind(t)),
                (i.cAF = u.bind(t));
            var p = (i.type = function (t) {
                return Object.prototype.toString
                    .call(t)
                    .replace(/^\[object (.+)\]$/, "$1")
                    .toLowerCase();
            });
            (p.String = function (t) {
                return "string" === p(t);
            }),
                (p.Function = function (t) {
                    return "function" === p(t);
                }),
                (p.Array = function (t) {
                    return Array.isArray(t);
                }),
                (p.Number = function (t) {
                    return !p.Array(t) && t - parseFloat(t) + 1 >= 0;
                }),
                (p.DomElement = function (t) {
                    return "object" == typeof HTMLElement ? t instanceof HTMLElement : t && "object" == typeof t && null !== t && 1 === t.nodeType && "string" == typeof t.nodeName;
                });
            var d = (i.get = {});
            return (
                (d.elements = function (e) {
                    var i = [];
                    if (p.String(e))
                        try {
                            e = document.querySelectorAll(e);
                        } catch (s) {
                            return i;
                        }
                    if ("nodelist" === p(e) || p.Array(e))
                        for (var n = 0, r = (i.length = e.length); r > n; n++) {
                            var o = e[n];
                            i[n] = p.DomElement(o) ? o : d.elements(o);
                        }
                    else (p.DomElement(e) || e === document || e === t) && (i = [e]);
                    return i;
                }),
                (d.scrollTop = function (e) {
                    return e && "number" == typeof e.scrollTop ? e.scrollTop : t.pageYOffset || 0;
                }),
                (d.scrollLeft = function (e) {
                    return e && "number" == typeof e.scrollLeft ? e.scrollLeft : t.pageXOffset || 0;
                }),
                (d.width = function (t, e, i) {
                    return r("width", t, e, i);
                }),
                (d.height = function (t, e, i) {
                    return r("height", t, e, i);
                }),
                (d.offset = function (t, e) {
                    var i = { top: 0, left: 0 };
                    if (t && t.getBoundingClientRect) {
                        var s = t.getBoundingClientRect();
                        (i.top = s.top), (i.left = s.left), e || ((i.top += d.scrollTop()), (i.left += d.scrollLeft()));
                    }
                    return i;
                }),
                (i.addClass = function (t, e) {
                    e && (t.classList ? t.classList.add(e) : (t.className += " " + e));
                }),
                (i.removeClass = function (t, e) {
                    e && (t.classList ? t.classList.remove(e) : (t.className = t.className.replace(RegExp("(^|\\b)" + e.split(" ").join("|") + "(\\b|$)", "gi"), " ")));
                }),
                (i.css = function (t, e) {
                    if (p.String(e)) return n(t)[o(e)];
                    if (p.Array(e)) {
                        var i = {},
                            s = n(t);
                        return (
                            e.forEach(function (t) {
                                i[t] = s[o(t)];
                            }),
                            i
                        );
                    }
                    for (var r in e) {
                        var a = e[r];
                        a == parseFloat(a) && (a += "px"), (t.style[o(r)] = a);
                    }
                }),
                i
            );
        })(window || {}));
        return t;
    }),
    (function (t, e) {
        "function" == typeof define && define.amd ? define(["ScrollMagic", "jquery"], e) : "object" == typeof exports ? e(require("scrollmagic"), require("jquery")) : e(t.ScrollMagic, t.jQuery);
    })(this, function (t, e) {
        "use strict";
        var i = "jquery.ScrollMagic",
            s = window.console || {},
            n = Function.prototype.bind.call(s.error || s.log || function () {}, s);
        t || n("(" + i + ") -> ERROR: The ScrollMagic main module could not be found. Please make sure it's loaded before this plugin or use an asynchronous loader like requirejs."),
            e || n("(" + i + ") -> ERROR: jQuery could not be found. Please make sure it's loaded before ScrollMagic or use an asynchronous loader like requirejs."),
            (t._util.get.elements = function (t) {
                return e(t).toArray();
            }),
            (t._util.addClass = function (t, i) {
                e(t).addClass(i);
            }),
            (t._util.removeClass = function (t, i) {
                e(t).removeClass(i);
            }),
            (e.ScrollMagic = t);
    }),
    (function (t, e) {
        "function" == typeof define && define.amd
            ? define(["ScrollMagic", "TweenMax", "TimelineMax"], e)
            : "object" == typeof exports
            ? (require("gsap"), e(require("scrollmagic"), TweenMax, TimelineMax))
            : e(t.ScrollMagic || (t.jQuery && t.jQuery.ScrollMagic), t.TweenMax || t.TweenLite, t.TimelineMax || t.TimelineLite);
    })(this, function (t, e, i) {
        "use strict";
        var s = "animation.gsap",
            n = window.console || {},
            r = Function.prototype.bind.call(n.error || n.log || function () {}, n);
        t || r("(" + s + ") -> ERROR: The ScrollMagic main module could not be found. Please make sure it's loaded before this plugin or use an asynchronous loader like requirejs."),
            e || r("(" + s + ") -> ERROR: TweenLite or TweenMax could not be found. Please make sure GSAP is loaded before ScrollMagic or use an asynchronous loader like requirejs."),
            t.Scene.addOption("tweenChanges", !1, function (t) {
                return !!t;
            }),
            t.Scene.extend(function () {
                var t,
                    n = this,
                    r = function () {
                        n._log && (Array.prototype.splice.call(arguments, 1, 0, "(" + s + ")", "->"), n._log.apply(this, arguments));
                    };
                n.on("progress.plugin_gsap", function () {
                    o();
                }),
                    n.on("destroy.plugin_gsap", function (t) {
                        n.removeTween(t.reset);
                    });
                var o = function () {
                    if (t) {
                        var e = n.progress(),
                            i = n.state();
                        t.repeat && -1 === t.repeat()
                            ? "DURING" === i && t.paused()
                                ? t.play()
                                : "DURING" === i || t.paused() || t.pause()
                            : e != t.progress() && (0 === n.duration() ? (e > 0 ? t.play() : t.reverse()) : n.tweenChanges() && t.tweenTo ? t.tweenTo(e * t.duration()) : t.progress(e).pause());
                    }
                };
                (n.setTween = function (s, a, l) {
                    arguments.length > 1 && (arguments.length < 3 && ((l = a), (a = 1)), (s = e.to(s, a, l)));
                    try {
                        (d = i ? new i({ smoothChildTiming: !0 }).add(s) : s).pause();
                    } catch (c) {
                        return r(1, "ERROR calling method 'setTween()': Supplied argument is not a valid TweenObject"), n;
                    }
                    if (
                        (t && n.removeTween(),
                        (t = d),
                        s.repeat && -1 === s.repeat() && (t.repeat(-1), t.yoyo(s.yoyo())),
                        n.tweenChanges() && !t.tweenTo && r(2, "WARNING: tweenChanges will only work if the TimelineMax object is available for ScrollMagic."),
                        t && n.controller() && n.triggerElement() && n.loglevel() >= 2)
                    ) {
                        var u = e.getTweensOf(n.triggerElement()),
                            p = n.controller().info("vertical");
                        u.forEach(function (t, e) {
                            var i = t.vars.css || t.vars;
                            if (p ? void 0 !== i.top || void 0 !== i.bottom : void 0 !== i.left || void 0 !== i.right) return r(2, "WARNING: Tweening the position of the trigger element affects the scene timing and should be avoided!"), !1;
                        });
                    }
                    if (parseFloat(TweenLite.version) >= 1.14)
                        for (
                            var d,
                                f,
                                g,
                                m = t.getChildren ? t.getChildren(!0, !0, !1) : [t],
                                v = function () {
                                    r(2, "WARNING: tween was overwritten by another. To learn how to avoid this issue see here: https://github.com/janpaepke/ScrollMagic/wiki/WARNING:-tween-was-overwritten-by-another");
                                },
                                y = 0;
                            y < m.length;
                            y++
                        )
                            (f = m[y]),
                                g !== v &&
                                    ((g = f.vars.onOverwrite),
                                    (f.vars.onOverwrite = function () {
                                        g && g.apply(this, arguments), v.apply(this, arguments);
                                    }));
                    return r(3, "added tween"), o(), n;
                }),
                    (n.removeTween = function (e) {
                        return t && (e && t.progress(0).pause(), t.kill(), (t = void 0), r(3, "removed tween (reset: " + (e ? "true" : "false") + ")")), n;
                    });
            });
    });
var an_media,
    an_overlay,
    w = 1.5 * $(window).width(),
    h = 1.5 * $(window).height();
function setTopSpacing() {
    $(window).width() > 575
        ? ($(".hero").css("margin-top", $("header").innerHeight() + 150 + "px"), $(".set-top-spacing").css("margin-top", $("header").innerHeight() + 100 + "px"))
        : ($(".hero").css("margin-top", $("header").innerHeight() + 100 + "px"), $(".set-top-spacing").css("margin-top", $("header").innerHeight() + 20 + "px"));
}
/*!
 * Bootstrap v5.2.0-beta1 (https://getbootstrap.com/)
 * Copyright 2011-2022 The Bootstrap Authors (https://github.com/twbs/bootstrap/graphs/contributors)
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 */ !(function (t, e) {
    "object" == typeof exports && "undefined" != typeof module ? (module.exports = e()) : "function" == typeof define && define.amd ? define(e) : ((t = "undefined" != typeof globalThis ? globalThis : t || self).bootstrap = e());
})(this, function () {
    "use strict";
    let t = "transitionend",
        e = (t) => {
            let e = t.getAttribute("data-bs-target");
            if (!e || "#" === e) {
                let i = t.getAttribute("href");
                if (!i || (!i.includes("#") && !i.startsWith("."))) return null;
                i.includes("#") && !i.startsWith("#") && (i = `#${i.split("#")[1]}`), (e = i && "#" !== i ? i.trim() : null);
            }
            return e;
        },
        i = (t) => {
            let i = e(t);
            return i && document.querySelector(i) ? i : null;
        },
        s = (t) => {
            let i = e(t);
            return i ? document.querySelector(i) : null;
        },
        n = (e) => {
            e.dispatchEvent(new Event(t));
        },
        r = (t) => !(!t || "object" != typeof t) && (void 0 !== t.jquery && (t = t[0]), void 0 !== t.nodeType),
        o = (t) => (r(t) ? (t.jquery ? t[0] : t) : "string" == typeof t && t.length > 0 ? document.querySelector(t) : null),
        a = (t) => {
            if (!r(t) || 0 === t.getClientRects().length) return !1;
            let e = "visible" === getComputedStyle(t).getPropertyValue("visibility"),
                i = t.closest("details:not([open])");
            if (!i) return e;
            if (i !== t) {
                let s = t.closest("summary");
                if ((s && s.parentNode !== i) || null === s) return !1;
            }
            return e;
        },
        l = (t) => !t || t.nodeType !== Node.ELEMENT_NODE || !!t.classList.contains("disabled") || (void 0 !== t.disabled ? t.disabled : t.hasAttribute("disabled") && "false" !== t.getAttribute("disabled")),
        c = (t) => {
            if (!document.documentElement.attachShadow) return null;
            if ("function" == typeof t.getRootNode) {
                let e = t.getRootNode();
                return e instanceof ShadowRoot ? e : null;
            }
            return t instanceof ShadowRoot ? t : t.parentNode ? c(t.parentNode) : null;
        },
        u = () => {},
        p = (t) => {
            t.offsetHeight;
        },
        d = () => (window.jQuery && !document.body.hasAttribute("data-bs-no-jquery") ? window.jQuery : null),
        f = [],
        g = () => "rtl" === document.documentElement.dir,
        m = (t) => {
            var e;
            (e = () => {
                let e = d();
                if (e) {
                    let i = t.NAME,
                        s = e.fn[i];
                    (e.fn[i] = t.jQueryInterface), (e.fn[i].Constructor = t), (e.fn[i].noConflict = () => ((e.fn[i] = s), t.jQueryInterface));
                }
            }),
                "loading" === document.readyState
                    ? (f.length ||
                          document.addEventListener("DOMContentLoaded", () => {
                              for (let t of f) t();
                          }),
                      f.push(e))
                    : e();
        },
        v = (t) => {
            "function" == typeof t && t();
        },
        y = (e, i, s = !0) => {
            if (!s) return void v(e);
            let r =
                    ((t) => {
                        if (!t) return 0;
                        let { transitionDuration: e, transitionDelay: i } = window.getComputedStyle(t),
                            s = Number.parseFloat(e),
                            n = Number.parseFloat(i);
                        return s || n ? ((e = e.split(",")[0]), (i = i.split(",")[0]), 1e3 * (Number.parseFloat(e) + Number.parseFloat(i))) : 0;
                    })(i) + 5,
                o = !1,
                a = ({ target: s }) => {
                    s === i && ((o = !0), i.removeEventListener(t, a), v(e));
                };
            i.addEventListener(t, a),
                setTimeout(() => {
                    o || n(i);
                }, r);
        },
        _ = (t, e, i, s) => {
            let n = t.length,
                r = t.indexOf(e);
            return -1 === r ? (!i && s ? t[n - 1] : t[0]) : ((r += i ? 1 : -1), s && (r = (r + n) % n), t[Math.max(0, Math.min(r, n - 1))]);
        },
        b = /[^.]*(?=\..*)\.|.*/,
        x = /\..*/,
        T = /::\d+$/,
        C = {},
        A = 1,
        P = { mouseenter: "mouseover", mouseleave: "mouseout" },
        S = new Set([
            "click",
            "dblclick",
            "mouseup",
            "mousedown",
            "contextmenu",
            "mousewheel",
            "DOMMouseScroll",
            "mouseover",
            "mouseout",
            "mousemove",
            "selectstart",
            "selectend",
            "keydown",
            "keypress",
            "keyup",
            "orientationchange",
            "touchstart",
            "touchmove",
            "touchend",
            "touchcancel",
            "pointerdown",
            "pointermove",
            "pointerup",
            "pointerleave",
            "pointercancel",
            "gesturestart",
            "gesturechange",
            "gestureend",
            "focus",
            "blur",
            "change",
            "reset",
            "select",
            "submit",
            "focusin",
            "focusout",
            "load",
            "unload",
            "beforeunload",
            "resize",
            "move",
            "DOMContentLoaded",
            "readystatechange",
            "error",
            "abort",
            "scroll",
        ]);
    function k(t, e) {
        return (e && `${e}::${A++}`) || t.uidEvent || A++;
    }
    function E(t) {
        let e = k(t);
        return (t.uidEvent = e), (C[e] = C[e] || {}), C[e];
    }
    function O(t, e, i = null) {
        return Object.values(t).find((t) => t.originalHandler === e && t.delegationSelector === i);
    }
    function D(t, e, i) {
        let s = "string" == typeof e,
            n = I(t);
        return S.has(n) || (n = t), [s, s ? i : e, n];
    }
    function z(t, e, i, s, n) {
        var r, o, a, l, c;
        if ("string" != typeof e || !t) return;
        if ((i || ((i = s), (s = null)), e in P)) {
            let u = (t) =>
                function (e) {
                    if (!e.relatedTarget || (e.relatedTarget !== e.delegateTarget && !e.delegateTarget.contains(e.relatedTarget))) return t.call(this, e);
                };
            s ? (s = u(s)) : (i = u(i));
        }
        let [p, d, f] = D(e, i, s),
            g = E(t),
            m = g[f] || (g[f] = {}),
            v = O(m, d, p ? i : null);
        if (v) return void (v.oneOff = v.oneOff && n);
        let y = k(d, e.replace(b, "")),
            _ = p
                ? ((r = t),
                  (o = i),
                  (a = s),
                  function t(e) {
                      let i = r.querySelectorAll(o);
                      for (let { target: s } = e; s && s !== this; s = s.parentNode) for (let n of i) if (n === s) return (e.delegateTarget = s), t.oneOff && N.off(r, e.type, o, a), a.apply(s, [e]);
                  })
                : ((l = t),
                  (c = i),
                  function t(e) {
                      return (e.delegateTarget = l), t.oneOff && N.off(l, e.type, c), c.apply(l, [e]);
                  });
        (_.delegationSelector = p ? i : null), (_.originalHandler = d), (_.oneOff = n), (_.uidEvent = y), (m[y] = _), t.addEventListener(f, _, p);
    }
    function L(t, e, i, s, n) {
        let r = O(e[i], s, n);
        r && (t.removeEventListener(i, r, Boolean(n)), delete e[i][r.uidEvent]);
    }
    function R(t, e, i, s) {
        let n = e[i] || {};
        for (let r of Object.keys(n))
            if (r.includes(s)) {
                let o = n[r];
                L(t, e, i, o.originalHandler, o.delegationSelector);
            }
    }
    function I(t) {
        return P[(t = t.replace(x, ""))] || t;
    }
    let N = {
            on(t, e, i, s) {
                z(t, e, i, s, !1);
            },
            one(t, e, i, s) {
                z(t, e, i, s, !0);
            },
            off(t, e, i, s) {
                if ("string" != typeof e || !t) return;
                let [n, r, o] = D(e, i, s),
                    a = o !== e,
                    l = E(t),
                    c = e.startsWith(".");
                if (void 0 !== r) {
                    if (!l || !l[o]) return;
                    return void L(t, l, o, r, n ? i : null);
                }
                if (c) for (let u of Object.keys(l)) R(t, l, u, e.slice(1));
                let p = l[o] || {};
                for (let d of Object.keys(p)) {
                    let f = d.replace(T, "");
                    if (!a || e.includes(f)) {
                        let g = p[d];
                        L(t, l, o, g.originalHandler, g.delegationSelector);
                    }
                }
            },
            trigger(t, e, i) {
                if ("string" != typeof e || !t) return null;
                let s = d(),
                    n = null,
                    r = !0,
                    o = !0,
                    a = !1;
                e !== I(e) && s && ((n = s.Event(e, i)), s(t).trigger(n), (r = !n.isPropagationStopped()), (o = !n.isImmediatePropagationStopped()), (a = n.isDefaultPrevented()));
                let l = new Event(e, { bubbles: r, cancelable: !0 });
                if (void 0 !== i) for (let c of Object.keys(i)) Object.defineProperty(l, c, { get: () => i[c] });
                return a && l.preventDefault(), o && t.dispatchEvent(l), l.defaultPrevented && n && n.preventDefault(), l;
            },
        },
        M = new Map(),
        j = {
            set(t, e, i) {
                M.has(t) || M.set(t, new Map());
                let s = M.get(t);
                s.has(e) || 0 === s.size ? s.set(e, i) : console.error(`Bootstrap doesn't allow more than one instance per element. Bound instance: ${Array.from(s.keys())[0]}.`);
            },
            get: (t, e) => (M.has(t) && M.get(t).get(e)) || null,
            remove(t, e) {
                if (!M.has(t)) return;
                let i = M.get(t);
                i.delete(e), 0 === i.size && M.delete(t);
            },
        };
    function F(t) {
        if ("true" === t) return !0;
        if ("false" === t) return !1;
        if (t === Number(t).toString()) return Number(t);
        if ("" === t || "null" === t) return null;
        if ("string" != typeof t) return t;
        try {
            return JSON.parse(decodeURIComponent(t));
        } catch (e) {
            return t;
        }
    }
    function B(t) {
        return t.replace(/[A-Z]/g, (t) => `-${t.toLowerCase()}`);
    }
    let H = {
        setDataAttribute(t, e, i) {
            t.setAttribute(`data-bs-${B(e)}`, i);
        },
        removeDataAttribute(t, e) {
            t.removeAttribute(`data-bs-${B(e)}`);
        },
        getDataAttributes(t) {
            if (!t) return {};
            let e = {},
                i = Object.keys(t.dataset).filter((t) => t.startsWith("bs") && !t.startsWith("bsConfig"));
            for (let s of i) {
                let n = s.replace(/^bs/, "");
                e[(n = n.charAt(0).toLowerCase() + n.slice(1, n.length))] = F(t.dataset[s]);
            }
            return e;
        },
        getDataAttribute: (t, e) => F(t.getAttribute(`data-bs-${B(e)}`)),
    };
    class W {
        static get Default() {
            return {};
        }
        static get DefaultType() {
            return {};
        }
        static get NAME() {
            throw Error('You have to implement the static method "NAME", for each component!');
        }
        _getConfig(t) {
            return (t = this._mergeConfigObj(t)), (t = this._configAfterMerge(t)), this._typeCheckConfig(t), t;
        }
        _configAfterMerge(t) {
            return t;
        }
        _mergeConfigObj(t, e) {
            let i = r(e) ? H.getDataAttribute(e, "config") : {};
            return { ...this.constructor.Default, ...("object" == typeof i ? i : {}), ...(r(e) ? H.getDataAttributes(e) : {}), ...("object" == typeof t ? t : {}) };
        }
        _typeCheckConfig(t, e = this.constructor.DefaultType) {
            var i;
            for (let s of Object.keys(e)) {
                let n = e[s],
                    o = t[s],
                    a = r(o)
                        ? "element"
                        : null == (i = o)
                        ? `${i}`
                        : Object.prototype.toString
                              .call(i)
                              .match(/\s([a-z]+)/i)[1]
                              .toLowerCase();
                if (!RegExp(n).test(a)) throw TypeError(`${this.constructor.NAME.toUpperCase()}: Option "${s}" provided type "${a}" but expected type "${n}".`);
            }
        }
    }
    class X extends W {
        constructor(t, e) {
            super(), (t = o(t)) && ((this._element = t), (this._config = this._getConfig(e)), j.set(this._element, this.constructor.DATA_KEY, this));
        }
        dispose() {
            for (let t of (j.remove(this._element, this.constructor.DATA_KEY), N.off(this._element, this.constructor.EVENT_KEY), Object.getOwnPropertyNames(this))) this[t] = null;
        }
        _queueCallback(t, e, i = !0) {
            y(t, e, i);
        }
        _getConfig(t) {
            return (t = this._mergeConfigObj(t, this._element)), (t = this._configAfterMerge(t)), this._typeCheckConfig(t), t;
        }
        static getInstance(t) {
            return j.get(o(t), this.DATA_KEY);
        }
        static getOrCreateInstance(t, e = {}) {
            return this.getInstance(t) || new this(t, "object" == typeof e ? e : null);
        }
        static get VERSION() {
            return "5.2.0-beta1";
        }
        static get DATA_KEY() {
            return `bs.${this.NAME}`;
        }
        static get EVENT_KEY() {
            return `.${this.DATA_KEY}`;
        }
        static eventName(t) {
            return `${t}${this.EVENT_KEY}`;
        }
    }
    let q = (t, e = "hide") => {
        let i = `click.dismiss${t.EVENT_KEY}`,
            n = t.NAME;
        N.on(document, i, `[data-bs-dismiss="${n}"]`, function (i) {
            if ((["A", "AREA"].includes(this.tagName) && i.preventDefault(), l(this))) return;
            let r = s(this) || this.closest(`.${n}`);
            t.getOrCreateInstance(r)[e]();
        });
    };
    class Y extends X {
        static get NAME() {
            return "alert";
        }
        close() {
            if (N.trigger(this._element, "close.bs.alert").defaultPrevented) return;
            this._element.classList.remove("show");
            let t = this._element.classList.contains("fade");
            this._queueCallback(() => this._destroyElement(), this._element, t);
        }
        _destroyElement() {
            this._element.remove(), N.trigger(this._element, "closed.bs.alert"), this.dispose();
        }
        static jQueryInterface(t) {
            return this.each(function () {
                let e = Y.getOrCreateInstance(this);
                if ("string" == typeof t) {
                    if (void 0 === e[t] || t.startsWith("_") || "constructor" === t) throw TypeError(`No method named "${t}"`);
                    e[t](this);
                }
            });
        }
    }
    q(Y, "close"), m(Y);
    let V = '[data-bs-toggle="button"]';
    class U extends X {
        static get NAME() {
            return "button";
        }
        toggle() {
            this._element.setAttribute("aria-pressed", this._element.classList.toggle("active"));
        }
        static jQueryInterface(t) {
            return this.each(function () {
                let e = U.getOrCreateInstance(this);
                "toggle" === t && e[t]();
            });
        }
    }
    N.on(document, "click.bs.button.data-api", V, (t) => {
        t.preventDefault();
        let e = t.target.closest(V);
        U.getOrCreateInstance(e).toggle();
    }),
        m(U);
    let Q = {
            find: (t, e = document.documentElement) => [].concat(...Element.prototype.querySelectorAll.call(e, t)),
            findOne: (t, e = document.documentElement) => Element.prototype.querySelector.call(e, t),
            children: (t, e) => [].concat(...t.children).filter((t) => t.matches(e)),
            parents(t, e) {
                let i = [],
                    s = t.parentNode.closest(e);
                for (; s; ) i.push(s), (s = s.parentNode.closest(e));
                return i;
            },
            prev(t, e) {
                let i = t.previousElementSibling;
                for (; i; ) {
                    if (i.matches(e)) return [i];
                    i = i.previousElementSibling;
                }
                return [];
            },
            next(t, e) {
                let i = t.nextElementSibling;
                for (; i; ) {
                    if (i.matches(e)) return [i];
                    i = i.nextElementSibling;
                }
                return [];
            },
            focusableChildren(t) {
                let e = ["a", "button", "input", "textarea", "select", "details", "[tabindex]", '[contenteditable="true"]'].map((t) => `${t}:not([tabindex^="-"])`).join(",");
                return this.find(e, t).filter((t) => !l(t) && a(t));
            },
        },
        Z = { leftCallback: null, rightCallback: null, endCallback: null },
        G = { leftCallback: "(function|null)", rightCallback: "(function|null)", endCallback: "(function|null)" };
    class K extends W {
        constructor(t, e) {
            super(), (this._element = t), t && K.isSupported() && ((this._config = this._getConfig(e)), (this._deltaX = 0), (this._supportPointerEvents = Boolean(window.PointerEvent)), this._initEvents());
        }
        static get Default() {
            return Z;
        }
        static get DefaultType() {
            return G;
        }
        static get NAME() {
            return "swipe";
        }
        dispose() {
            N.off(this._element, ".bs.swipe");
        }
        _start(t) {
            this._supportPointerEvents ? this._eventIsPointerPenTouch(t) && (this._deltaX = t.clientX) : (this._deltaX = t.touches[0].clientX);
        }
        _end(t) {
            this._eventIsPointerPenTouch(t) && (this._deltaX = t.clientX - this._deltaX), this._handleSwipe(), v(this._config.endCallback);
        }
        _move(t) {
            this._deltaX = t.touches && t.touches.length > 1 ? 0 : t.touches[0].clientX - this._deltaX;
        }
        _handleSwipe() {
            let t = Math.abs(this._deltaX);
            if (t <= 40) return;
            let e = t / this._deltaX;
            (this._deltaX = 0), e && v(e > 0 ? this._config.rightCallback : this._config.leftCallback);
        }
        _initEvents() {
            this._supportPointerEvents
                ? (N.on(this._element, "pointerdown.bs.swipe", (t) => this._start(t)), N.on(this._element, "pointerup.bs.swipe", (t) => this._end(t)), this._element.classList.add("pointer-event"))
                : (N.on(this._element, "touchstart.bs.swipe", (t) => this._start(t)), N.on(this._element, "touchmove.bs.swipe", (t) => this._move(t)), N.on(this._element, "touchend.bs.swipe", (t) => this._end(t)));
        }
        _eventIsPointerPenTouch(t) {
            return this._supportPointerEvents && ("pen" === t.pointerType || "touch" === t.pointerType);
        }
        static isSupported() {
            return "ontouchstart" in document.documentElement || navigator.maxTouchPoints > 0;
        }
    }
    let J = "next",
        tt = "prev",
        te = "left",
        ti = "right",
        ts = "slid.bs.carousel",
        tn = "carousel",
        tr = "active",
        to = { ArrowLeft: ti, ArrowRight: te },
        ta = { interval: 5e3, keyboard: !0, pause: "hover", ride: !1, touch: !0, wrap: !0 },
        tl = { interval: "(number|boolean)", keyboard: "boolean", ride: "(boolean|string)", pause: "(string|boolean)", touch: "boolean", wrap: "boolean" };
    class th extends X {
        constructor(t, e) {
            super(t, e),
                (this._interval = null),
                (this._activeElement = null),
                (this._isSliding = !1),
                (this.touchTimeout = null),
                (this._swipeHelper = null),
                (this._indicatorsElement = Q.findOne(".carousel-indicators", this._element)),
                this._addEventListeners(),
                this._config.ride === tn && this.cycle();
        }
        static get Default() {
            return ta;
        }
        static get DefaultType() {
            return tl;
        }
        static get NAME() {
            return "carousel";
        }
        next() {
            this._slide(J);
        }
        nextWhenVisible() {
            !document.hidden && a(this._element) && this.next();
        }
        prev() {
            this._slide(tt);
        }
        pause() {
            this._isSliding && n(this._element), this._clearInterval();
        }
        cycle() {
            this._clearInterval(), this._updateInterval(), (this._interval = setInterval(() => this.nextWhenVisible(), this._config.interval));
        }
        _maybeEnableCycle() {
            this._config.ride && (this._isSliding ? N.one(this._element, ts, () => this.cycle()) : this.cycle());
        }
        to(t) {
            let e = this._getItems();
            if (t > e.length - 1 || t < 0) return;
            if (this._isSliding) return void N.one(this._element, ts, () => this.to(t));
            let i = this._getItemIndex(this._getActive());
            i !== t && this._slide(t > i ? J : tt, e[t]);
        }
        dispose() {
            this._swipeHelper && this._swipeHelper.dispose(), super.dispose();
        }
        _configAfterMerge(t) {
            return (t.defaultInterval = t.interval), t;
        }
        _addEventListeners() {
            this._config.keyboard && N.on(this._element, "keydown.bs.carousel", (t) => this._keydown(t)),
                "hover" === this._config.pause && (N.on(this._element, "mouseenter.bs.carousel", () => this.pause()), N.on(this._element, "mouseleave.bs.carousel", () => this._maybeEnableCycle())),
                this._config.touch && K.isSupported() && this._addTouchEventListeners();
        }
        _addTouchEventListeners() {
            for (let t of Q.find(".carousel-item img", this._element)) N.on(t, "dragstart.bs.carousel", (t) => t.preventDefault());
            this._swipeHelper = new K(this._element, {
                leftCallback: () => this._slide(this._directionToOrder(te)),
                rightCallback: () => this._slide(this._directionToOrder(ti)),
                endCallback: () => {
                    "hover" === this._config.pause && (this.pause(), this.touchTimeout && clearTimeout(this.touchTimeout), (this.touchTimeout = setTimeout(() => this._maybeEnableCycle(), 500 + this._config.interval)));
                },
            });
        }
        _keydown(t) {
            if (/input|textarea/i.test(t.target.tagName)) return;
            let e = to[t.key];
            e && (t.preventDefault(), this._slide(this._directionToOrder(e)));
        }
        _getItemIndex(t) {
            return this._getItems().indexOf(t);
        }
        _setActiveIndicatorElement(t) {
            if (!this._indicatorsElement) return;
            let e = Q.findOne(".active", this._indicatorsElement);
            e.classList.remove(tr), e.removeAttribute("aria-current");
            let i = Q.findOne(`[data-bs-slide-to="${t}"]`, this._indicatorsElement);
            i && (i.classList.add(tr), i.setAttribute("aria-current", "true"));
        }
        _updateInterval() {
            let t = this._activeElement || this._getActive();
            if (!t) return;
            let e = Number.parseInt(t.getAttribute("data-bs-interval"), 10);
            this._config.interval = e || this._config.defaultInterval;
        }
        _slide(t, e = null) {
            if (this._isSliding) return;
            let i = this._getActive(),
                s = t === J,
                n = e || _(this._getItems(), i, s, this._config.wrap);
            if (n === i) return;
            let r = this._getItemIndex(n),
                o = (e) => N.trigger(this._element, e, { relatedTarget: n, direction: this._orderToDirection(t), from: this._getItemIndex(i), to: r });
            if (o("slide.bs.carousel").defaultPrevented || !i || !n) return;
            let a = Boolean(this._interval);
            this.pause(), (this._isSliding = !0), this._setActiveIndicatorElement(r), (this._activeElement = n);
            let l = s ? "carousel-item-start" : "carousel-item-end",
                c = s ? "carousel-item-next" : "carousel-item-prev";
            n.classList.add(c),
                p(n),
                i.classList.add(l),
                n.classList.add(l),
                this._queueCallback(
                    () => {
                        n.classList.remove(l, c), n.classList.add(tr), i.classList.remove(tr, c, l), (this._isSliding = !1), o(ts);
                    },
                    i,
                    this._isAnimated()
                ),
                a && this.cycle();
        }
        _isAnimated() {
            return this._element.classList.contains("slide");
        }
        _getActive() {
            return Q.findOne(".active.carousel-item", this._element);
        }
        _getItems() {
            return Q.find(".carousel-item", this._element);
        }
        _clearInterval() {
            this._interval && (clearInterval(this._interval), (this._interval = null));
        }
        _directionToOrder(t) {
            return g() ? (t === te ? tt : J) : t === te ? J : tt;
        }
        _orderToDirection(t) {
            return g() ? (t === tt ? te : ti) : t === tt ? ti : te;
        }
        static jQueryInterface(t) {
            return this.each(function () {
                let e = th.getOrCreateInstance(this, t);
                if ("number" != typeof t) {
                    if ("string" == typeof t) {
                        if (void 0 === e[t] || t.startsWith("_") || "constructor" === t) throw TypeError(`No method named "${t}"`);
                        e[t]();
                    }
                } else e.to(t);
            });
        }
    }
    N.on(document, "click.bs.carousel.data-api", "[data-bs-slide], [data-bs-slide-to]", function (t) {
        let e = s(this);
        if (!e || !e.classList.contains(tn)) return;
        t.preventDefault();
        let i = th.getOrCreateInstance(e),
            n = this.getAttribute("data-bs-slide-to");
        return n ? (i.to(n), void i._maybeEnableCycle()) : "next" === H.getDataAttribute(this, "slide") ? (i.next(), void i._maybeEnableCycle()) : (i.prev(), void i._maybeEnableCycle());
    }),
        N.on(window, "load.bs.carousel.data-api", () => {
            let t = Q.find('[data-bs-ride="carousel"]');
            for (let e of t) th.getOrCreateInstance(e);
        }),
        m(th);
    let tc = "show",
        tu = "collapse",
        tp = "collapsing",
        td = '[data-bs-toggle="collapse"]',
        tf = { toggle: !0, parent: null },
        t8 = { toggle: "boolean", parent: "(null|element)" };
    class tg extends X {
        constructor(t, e) {
            super(t, e), (this._isTransitioning = !1), (this._triggerArray = []);
            let s = Q.find(td);
            for (let n of s) {
                let r = i(n),
                    o = Q.find(r).filter((t) => t === this._element);
                null !== r && o.length && this._triggerArray.push(n);
            }
            this._initializeChildren(), this._config.parent || this._addAriaAndCollapsedClass(this._triggerArray, this._isShown()), this._config.toggle && this.toggle();
        }
        static get Default() {
            return tf;
        }
        static get DefaultType() {
            return t8;
        }
        static get NAME() {
            return "collapse";
        }
        toggle() {
            this._isShown() ? this.hide() : this.show();
        }
        show() {
            if (this._isTransitioning || this._isShown()) return;
            let t = [];
            if (
                (this._config.parent &&
                    (t = this._getFirstLevelChildren(".collapse.show, .collapse.collapsing")
                        .filter((t) => t !== this._element)
                        .map((t) => tg.getOrCreateInstance(t, { toggle: !1 }))),
                (t.length && t[0]._isTransitioning) || N.trigger(this._element, "show.bs.collapse").defaultPrevented)
            )
                return;
            for (let e of t) e.hide();
            let i = this._getDimension();
            this._element.classList.remove(tu), this._element.classList.add(tp), (this._element.style[i] = 0), this._addAriaAndCollapsedClass(this._triggerArray, !0), (this._isTransitioning = !0);
            let s = `scroll${i[0].toUpperCase() + i.slice(1)}`;
            this._queueCallback(
                () => {
                    (this._isTransitioning = !1), this._element.classList.remove(tp), this._element.classList.add(tu, tc), (this._element.style[i] = ""), N.trigger(this._element, "shown.bs.collapse");
                },
                this._element,
                !0
            ),
                (this._element.style[i] = `${this._element[s]}px`);
        }
        hide() {
            if (this._isTransitioning || !this._isShown() || N.trigger(this._element, "hide.bs.collapse").defaultPrevented) return;
            let t = this._getDimension();
            for (let e of ((this._element.style[t] = `${this._element.getBoundingClientRect()[t]}px`), p(this._element), this._element.classList.add(tp), this._element.classList.remove(tu, tc), this._triggerArray)) {
                let i = s(e);
                i && !this._isShown(i) && this._addAriaAndCollapsedClass([e], !1);
            }
            (this._isTransitioning = !0),
                (this._element.style[t] = ""),
                this._queueCallback(
                    () => {
                        (this._isTransitioning = !1), this._element.classList.remove(tp), this._element.classList.add(tu), N.trigger(this._element, "hidden.bs.collapse");
                    },
                    this._element,
                    !0
                );
        }
        _isShown(t = this._element) {
            return t.classList.contains(tc);
        }
        _configAfterMerge(t) {
            return (t.toggle = Boolean(t.toggle)), (t.parent = o(t.parent)), t;
        }
        _getDimension() {
            return this._element.classList.contains("collapse-horizontal") ? "width" : "height";
        }
        _initializeChildren() {
            if (!this._config.parent) return;
            let t = this._getFirstLevelChildren(td);
            for (let e of t) {
                let i = s(e);
                i && this._addAriaAndCollapsedClass([e], this._isShown(i));
            }
        }
        _getFirstLevelChildren(t) {
            let e = Q.find(":scope .collapse .collapse", this._config.parent);
            return Q.find(t, this._config.parent).filter((t) => !e.includes(t));
        }
        _addAriaAndCollapsedClass(t, e) {
            if (t.length) for (let i of t) i.classList.toggle("collapsed", !e), i.setAttribute("aria-expanded", e);
        }
        static jQueryInterface(t) {
            let e = {};
            return (
                "string" == typeof t && /show|hide/.test(t) && (e.toggle = !1),
                this.each(function () {
                    let i = tg.getOrCreateInstance(this, e);
                    if ("string" == typeof t) {
                        if (void 0 === i[t]) throw TypeError(`No method named "${t}"`);
                        i[t]();
                    }
                })
            );
        }
    }
    N.on(document, "click.bs.collapse.data-api", td, function (t) {
        ("A" === t.target.tagName || (t.delegateTarget && "A" === t.delegateTarget.tagName)) && t.preventDefault();
        let e = i(this),
            s = Q.find(e);
        for (let n of s) tg.getOrCreateInstance(n, { toggle: !1 }).toggle();
    }),
        m(tg);
    var tm = "top",
        tv = "bottom",
        t$ = "right",
        ty = "left",
        t_ = "auto",
        tb = [tm, tv, t$, ty],
        tw = "start",
        tx = "clippingParents",
        tT = "viewport",
        tC = "popper",
        tA = "reference",
        tP = tb.reduce(function (t, e) {
            return t.concat([e + "-" + tw, e + "-end"]);
        }, []),
        tS = [].concat(tb, [t_]).reduce(function (t, e) {
            return t.concat([e, e + "-" + tw, e + "-end"]);
        }, []),
        tk = "beforeRead",
        tE = "read",
        tO = "afterRead",
        t0 = "beforeMain",
        tD = "main",
        tz = "afterMain",
        tL = "beforeWrite",
        tR = "write",
        t3 = "afterWrite",
        tI = [tk, tE, tO, t0, tD, tz, tL, tR, t3];
    function tN(t) {
        return t ? (t.nodeName || "").toLowerCase() : null;
    }
    function t9(t) {
        if (null == t) return window;
        if ("[object Window]" !== t.toString()) {
            var e = t.ownerDocument;
            return (e && e.defaultView) || window;
        }
        return t;
    }
    function t1(t) {
        return t instanceof t9(t).Element || t instanceof Element;
    }
    function tM(t) {
        return t instanceof t9(t).HTMLElement || t instanceof HTMLElement;
    }
    function t7(t) {
        return "undefined" != typeof ShadowRoot && (t instanceof t9(t).ShadowRoot || t instanceof ShadowRoot);
    }
    let tj = {
        name: "applyStyles",
        enabled: !0,
        phase: "write",
        fn: function (t) {
            var e = t.state;
            Object.keys(e.elements).forEach(function (t) {
                var i = e.styles[t] || {},
                    s = e.attributes[t] || {},
                    n = e.elements[t];
                tM(n) &&
                    tN(n) &&
                    (Object.assign(n.style, i),
                    Object.keys(s).forEach(function (t) {
                        var e = s[t];
                        !1 === e ? n.removeAttribute(t) : n.setAttribute(t, !0 === e ? "" : e);
                    }));
            });
        },
        effect: function (t) {
            var e = t.state,
                i = { popper: { position: e.options.strategy, left: "0", top: "0", margin: "0" }, arrow: { position: "absolute" }, reference: {} };
            return (
                Object.assign(e.elements.popper.style, i.popper),
                (e.styles = i),
                e.elements.arrow && Object.assign(e.elements.arrow.style, i.arrow),
                function () {
                    Object.keys(e.elements).forEach(function (t) {
                        var s = e.elements[t],
                            n = e.attributes[t] || {},
                            r = Object.keys(e.styles.hasOwnProperty(t) ? e.styles[t] : i[t]).reduce(function (t, e) {
                                return (t[e] = ""), t;
                            }, {});
                        tM(s) &&
                            tN(s) &&
                            (Object.assign(s.style, r),
                            Object.keys(n).forEach(function (t) {
                                s.removeAttribute(t);
                            }));
                    });
                }
            );
        },
        requires: ["computeStyles"],
    };
    function tF(t) {
        return t.split("-")[0];
    }
    var tB = Math.max,
        tH = Math.min,
        tW = Math.round;
    function tX(t, e) {
        void 0 === e && (e = !1);
        var i = t.getBoundingClientRect(),
            s = 1,
            n = 1;
        if (tM(t) && e) {
            var r = t.offsetHeight,
                o = t.offsetWidth;
            o > 0 && (s = tW(i.width) / o || 1), r > 0 && (n = tW(i.height) / r || 1);
        }
        return { width: i.width / s, height: i.height / n, top: i.top / n, right: i.right / s, bottom: i.bottom / n, left: i.left / s, x: i.left / s, y: i.top / n };
    }
    function tq(t) {
        var e = tX(t),
            i = t.offsetWidth,
            s = t.offsetHeight;
        return 1 >= Math.abs(e.width - i) && (i = e.width), 1 >= Math.abs(e.height - s) && (s = e.height), { x: t.offsetLeft, y: t.offsetTop, width: i, height: s };
    }
    function tY(t, e) {
        var i = e.getRootNode && e.getRootNode();
        if (t.contains(e)) return !0;
        if (i && t7(i)) {
            var s = e;
            do {
                if (s && t.isSameNode(s)) return !0;
                s = s.parentNode || s.host;
            } while (s);
        }
        return !1;
    }
    function tV(t) {
        return t9(t).getComputedStyle(t);
    }
    function t4(t) {
        return ["table", "td", "th"].indexOf(tN(t)) >= 0;
    }
    function t2(t) {
        return ((t1(t) ? t.ownerDocument : t.document) || window.document).documentElement;
    }
    function tU(t) {
        return "html" === tN(t) ? t : t.assignedSlot || t.parentNode || (t7(t) ? t.host : null) || t2(t);
    }
    function t5(t) {
        return tM(t) && "fixed" !== tV(t).position ? t.offsetParent : null;
    }
    function t6(t) {
        for (var e = t9(t), i = t5(t); i && t4(i) && "static" === tV(i).position; ) i = t5(i);
        return i && ("html" === tN(i) || ("body" === tN(i) && "static" === tV(i).position))
            ? e
            : i ||
                  (function (t) {
                      var e = -1 !== navigator.userAgent.toLowerCase().indexOf("firefox");
                      if (-1 !== navigator.userAgent.indexOf("Trident") && tM(t) && "fixed" === tV(t).position) return null;
                      var i = tU(t);
                      for (t7(i) && (i = i.host); tM(i) && 0 > ["html", "body"].indexOf(tN(i)); ) {
                          var s = tV(i);
                          if (
                              "none" !== s.transform ||
                              "none" !== s.perspective ||
                              "paint" === s.contain ||
                              -1 !== ["transform", "perspective"].indexOf(s.willChange) ||
                              (e && "filter" === s.willChange) ||
                              (e && s.filter && "none" !== s.filter)
                          )
                              return i;
                          i = i.parentNode;
                      }
                      return null;
                  })(t) ||
                  e;
    }
    function tQ(t) {
        return ["top", "bottom"].indexOf(t) >= 0 ? "x" : "y";
    }
    function tZ(t, e, i) {
        return tB(t, tH(e, i));
    }
    function tG(t) {
        return Object.assign({}, { top: 0, right: 0, bottom: 0, left: 0 }, t);
    }
    function tK(t, e) {
        return e.reduce(function (e, i) {
            return (e[i] = t), e;
        }, {});
    }
    let tJ = {
        name: "arrow",
        enabled: !0,
        phase: "main",
        fn: function (t) {
            var e,
                i = t.state,
                s = t.name,
                n = t.options,
                r = i.elements.arrow,
                o = i.modifiersData.popperOffsets,
                a = tF(i.placement),
                l = tQ(a),
                c = [ty, t$].indexOf(a) >= 0 ? "height" : "width";
            if (r && o) {
                var u,
                    p,
                    d = ((u = n.padding), (p = i), tG("number" != typeof (u = "function" == typeof u ? u(Object.assign({}, p.rects, { placement: p.placement })) : u) ? u : tK(u, tb))),
                    f = tq(r),
                    g = i.rects.reference[c] + i.rects.reference[l] - o[l] - i.rects.popper[c],
                    m = o[l] - i.rects.reference[l],
                    v = t6(r),
                    y = v ? ("y" === l ? v.clientHeight || 0 : v.clientWidth || 0) : 0,
                    _ = d["y" === l ? tm : ty],
                    b = y - f[c] - d["y" === l ? tv : t$],
                    x = y / 2 - f[c] / 2 + (g / 2 - m / 2),
                    T = tZ(_, x, b),
                    C = l;
                i.modifiersData[s] = (((e = {})[C] = T), (e.centerOffset = T - x), e);
            }
        },
        effect: function (t) {
            var e = t.state,
                i = t.options.element,
                s = void 0 === i ? "[data-popper-arrow]" : i;
            null != s && ("string" != typeof s || (s = e.elements.popper.querySelector(s))) && tY(e.elements.popper, s) && (e.elements.arrow = s);
        },
        requires: ["popperOffsets"],
        requiresIfExists: ["preventOverflow"],
    };
    function et(t) {
        return t.split("-")[1];
    }
    var ee = { top: "auto", right: "auto", bottom: "auto", left: "auto" };
    function ei(t) {
        var e,
            i = t.popper,
            s = t.popperRect,
            n = t.placement,
            r = t.variation,
            o = t.offsets,
            a = t.position,
            l = t.gpuAcceleration,
            c = t.adaptive,
            u = t.roundOffsets,
            p = t.isFixed,
            d = o.x,
            f = void 0 === d ? 0 : d,
            g = o.y,
            m = void 0 === g ? 0 : g,
            v = "function" == typeof u ? u({ x: f, y: m }) : { x: f, y: m };
        (f = v.x), (m = v.y);
        var y = o.hasOwnProperty("x"),
            _ = o.hasOwnProperty("y"),
            b = ty,
            x = tm,
            T = window;
        if (c) {
            var C = t6(i),
                A = "clientHeight",
                P = "clientWidth";
            C === t9(i) && "static" !== tV((C = t2(i))).position && "absolute" === a && ((A = "scrollHeight"), (P = "scrollWidth")),
                (n === tm || ((n === ty || n === t$) && "end" === r)) && ((x = tv), (m -= (p && C === T && T.visualViewport ? T.visualViewport.height : C[A]) - s.height), (m *= l ? 1 : -1)),
                (n !== ty && ((n !== tm && n !== tv) || "end" !== r)) || ((b = t$), (f -= (p && C === T && T.visualViewport ? T.visualViewport.width : C[P]) - s.width), (f *= l ? 1 : -1));
        }
        var S,
            k,
            E,
            O,
            D,
            z = Object.assign({ position: a }, c && ee),
            L = !0 === u ? ((k = (S = { x: f, y: m }).x), (E = S.y), { x: tW(k * (O = window.devicePixelRatio || 1)) / O || 0, y: tW(E * O) / O || 0 }) : { x: f, y: m };
        return (
            (f = L.x),
            (m = L.y),
            l
                ? Object.assign({}, z, (((D = {})[x] = _ ? "0" : ""), (D[b] = y ? "0" : ""), (D.transform = 1 >= (T.devicePixelRatio || 1) ? "translate(" + f + "px, " + m + "px)" : "translate3d(" + f + "px, " + m + "px, 0)"), D))
                : Object.assign({}, z, (((e = {})[x] = _ ? m + "px" : ""), (e[b] = y ? f + "px" : ""), (e.transform = ""), e))
        );
    }
    let es = {
        name: "computeStyles",
        enabled: !0,
        phase: "beforeWrite",
        fn: function (t) {
            var e = t.state,
                i = t.options,
                s = i.gpuAcceleration,
                n = i.adaptive,
                r = i.roundOffsets,
                o = void 0 === r || r,
                a = { placement: tF(e.placement), variation: et(e.placement), popper: e.elements.popper, popperRect: e.rects.popper, gpuAcceleration: void 0 === s || s, isFixed: "fixed" === e.options.strategy };
            null != e.modifiersData.popperOffsets &&
                (e.styles.popper = Object.assign({}, e.styles.popper, ei(Object.assign({}, a, { offsets: e.modifiersData.popperOffsets, position: e.options.strategy, adaptive: void 0 === n || n, roundOffsets: o })))),
                null != e.modifiersData.arrow && (e.styles.arrow = Object.assign({}, e.styles.arrow, ei(Object.assign({}, a, { offsets: e.modifiersData.arrow, position: "absolute", adaptive: !1, roundOffsets: o })))),
                (e.attributes.popper = Object.assign({}, e.attributes.popper, { "data-popper-placement": e.placement }));
        },
        data: {},
    };
    var en = { passive: !0 };
    let er = {
        name: "eventListeners",
        enabled: !0,
        phase: "write",
        fn: function () {},
        effect: function (t) {
            var e = t.state,
                i = t.instance,
                s = t.options,
                n = s.scroll,
                r = void 0 === n || n,
                o = s.resize,
                a = void 0 === o || o,
                l = t9(e.elements.popper),
                c = [].concat(e.scrollParents.reference, e.scrollParents.popper);
            return (
                r &&
                    c.forEach(function (t) {
                        t.addEventListener("scroll", i.update, en);
                    }),
                a && l.addEventListener("resize", i.update, en),
                function () {
                    r &&
                        c.forEach(function (t) {
                            t.removeEventListener("scroll", i.update, en);
                        }),
                        a && l.removeEventListener("resize", i.update, en);
                }
            );
        },
        data: {},
    };
    var eo = { left: "right", right: "left", bottom: "top", top: "bottom" };
    function ea(t) {
        return t.replace(/left|right|bottom|top/g, function (t) {
            return eo[t];
        });
    }
    var el = { start: "end", end: "start" };
    function eh(t) {
        return t.replace(/start|end/g, function (t) {
            return el[t];
        });
    }
    function ec(t) {
        var e = t9(t);
        return { scrollLeft: e.pageXOffset, scrollTop: e.pageYOffset };
    }
    function eu(t) {
        return tX(t2(t)).left + ec(t).scrollLeft;
    }
    function ep(t) {
        var e = tV(t),
            i = e.overflow,
            s = e.overflowX,
            n = e.overflowY;
        return /auto|scroll|overlay|hidden/.test(i + n + s);
    }
    function ed(t, e) {
        void 0 === e && (e = []);
        var i,
            s = (function t(e) {
                return ["html", "body", "#document"].indexOf(tN(e)) >= 0 ? e.ownerDocument.body : tM(e) && ep(e) ? e : t(tU(e));
            })(t),
            n = s === (null == (i = t.ownerDocument) ? void 0 : i.body),
            r = t9(s),
            o = n ? [r].concat(r.visualViewport || [], ep(s) ? s : []) : s,
            a = e.concat(o);
        return n ? a : a.concat(ed(tU(o)));
    }
    function ef(t) {
        return Object.assign({}, t, { left: t.x, top: t.y, right: t.x + t.width, bottom: t.y + t.height });
    }
    function e8(t, e) {
        var i, s, n, r, o, a, l, c, u, p, d, f, g, m, v, y, _, b, x;
        return e === tT
            ? ef(
                  ((s = t9((i = t))),
                  (n = t2(i)),
                  (r = s.visualViewport),
                  (o = n.clientWidth),
                  (a = n.clientHeight),
                  (l = 0),
                  (c = 0),
                  r && ((o = r.width), (a = r.height), /^((?!chrome|android).)*safari/i.test(navigator.userAgent) || ((l = r.offsetLeft), (c = r.offsetTop))),
                  { width: o, height: a, x: l + eu(i), y: c })
              )
            : t1(e)
            ? (((p = tX((u = e))).top = p.top + u.clientTop),
              (p.left = p.left + u.clientLeft),
              (p.bottom = p.top + u.clientHeight),
              (p.right = p.left + u.clientWidth),
              (p.width = u.clientWidth),
              (p.height = u.clientHeight),
              (p.x = p.left),
              (p.y = p.top),
              p)
            : ef(
                  ((d = t2(t)),
                  (g = t2(d)),
                  (m = ec(d)),
                  (v = null == (f = d.ownerDocument) ? void 0 : f.body),
                  (y = tB(g.scrollWidth, g.clientWidth, v ? v.scrollWidth : 0, v ? v.clientWidth : 0)),
                  (_ = tB(g.scrollHeight, g.clientHeight, v ? v.scrollHeight : 0, v ? v.clientHeight : 0)),
                  (b = -m.scrollLeft + eu(d)),
                  (x = -m.scrollTop),
                  "rtl" === tV(v || g).direction && (b += tB(g.clientWidth, v ? v.clientWidth : 0) - y),
                  { width: y, height: _, x: b, y: x })
              );
    }
    function eg(t) {
        var e,
            i = t.reference,
            s = t.element,
            n = t.placement,
            r = n ? tF(n) : null,
            o = n ? et(n) : null,
            a = i.x + i.width / 2 - s.width / 2,
            l = i.y + i.height / 2 - s.height / 2;
        switch (r) {
            case tm:
                e = { x: a, y: i.y - s.height };
                break;
            case tv:
                e = { x: a, y: i.y + i.height };
                break;
            case t$:
                e = { x: i.x + i.width, y: l };
                break;
            case ty:
                e = { x: i.x - s.width, y: l };
                break;
            default:
                e = { x: i.x, y: i.y };
        }
        var c = r ? tQ(r) : null;
        if (null != c) {
            var u = "y" === c ? "height" : "width";
            switch (o) {
                case tw:
                    e[c] = e[c] - (i[u] / 2 - s[u] / 2);
                    break;
                case "end":
                    e[c] = e[c] + (i[u] / 2 - s[u] / 2);
            }
        }
        return e;
    }
    function em(t, e) {
        void 0 === e && (e = {});
        var i,
            s,
            n,
            r,
            o,
            a,
            l,
            c,
            u,
            p = e,
            d = p.placement,
            f = void 0 === d ? t.placement : d,
            g = p.boundary,
            m = p.rootBoundary,
            v = p.elementContext,
            y = void 0 === v ? tC : v,
            _ = p.altBoundary,
            b = p.padding,
            x = void 0 === b ? 0 : b,
            T = tG("number" != typeof x ? x : tK(x, tb)),
            C = t.rects.popper,
            A = t.elements[void 0 !== _ && _ ? (y === tC ? tA : tC) : y],
            P =
                ((i = t1(A) ? A : A.contextElement || t2(t.elements.popper)),
                (s = void 0 === g ? tx : g),
                (n = void 0 === m ? tT : m),
                (c = (l = [].concat(
                    "clippingParents" === s
                        ? ((r = i),
                          (o = ed(tU(r))),
                          (a = ["absolute", "fixed"].indexOf(tV(r).position) >= 0 && tM(r) ? t6(r) : r),
                          t1(a)
                              ? o.filter(function (t) {
                                    return t1(t) && tY(t, a) && "body" !== tN(t);
                                })
                              : [])
                        : [].concat(s),
                    [n]
                ))[0]),
                ((u = l.reduce(function (t, e) {
                    var s = e8(i, e);
                    return (t.top = tB(s.top, t.top)), (t.right = tH(s.right, t.right)), (t.bottom = tH(s.bottom, t.bottom)), (t.left = tB(s.left, t.left)), t;
                }, e8(i, c))).width = u.right - u.left),
                (u.height = u.bottom - u.top),
                (u.x = u.left),
                (u.y = u.top),
                u),
            S = tX(t.elements.reference),
            k = eg({ reference: S, element: C, strategy: "absolute", placement: f }),
            E = ef(Object.assign({}, C, k)),
            O = y === tC ? E : S,
            D = { top: P.top - O.top + T.top, bottom: O.bottom - P.bottom + T.bottom, left: P.left - O.left + T.left, right: O.right - P.right + T.right },
            z = t.modifiersData.offset;
        if (y === tC && z) {
            var L = z[f];
            Object.keys(D).forEach(function (t) {
                var e = [t$, tv].indexOf(t) >= 0 ? 1 : -1,
                    i = [tm, tv].indexOf(t) >= 0 ? "y" : "x";
                D[t] += L[i] * e;
            });
        }
        return D;
    }
    let ev = {
        name: "flip",
        enabled: !0,
        phase: "main",
        fn: function (t) {
            var e = t.state,
                i = t.options,
                s = t.name;
            if (!e.modifiersData[s]._skip) {
                for (
                    var n = i.mainAxis,
                        r = void 0 === n || n,
                        o = i.altAxis,
                        a = void 0 === o || o,
                        l = i.fallbackPlacements,
                        c = i.padding,
                        u = i.boundary,
                        p = i.rootBoundary,
                        d = i.altBoundary,
                        f = i.flipVariations,
                        g = void 0 === f || f,
                        m = i.allowedAutoPlacements,
                        v = e.options.placement,
                        y = tF(v),
                        _ =
                            l ||
                            (y !== v && g
                                ? (function (t) {
                                      if (tF(t) === t_) return [];
                                      var e = ea(t);
                                      return [eh(t), e, eh(e)];
                                  })(v)
                                : [ea(v)]),
                        b = [v].concat(_).reduce(function (t, i) {
                            var s, n, r, o, a, l, d, f, v, y, _, b, x, T;
                            return t.concat(
                                tF(i) === t_
                                    ? ((s = e),
                                      (n = { placement: i, boundary: u, rootBoundary: p, padding: c, flipVariations: g, allowedAutoPlacements: m }),
                                      (o = (r = n).placement),
                                      (a = r.boundary),
                                      (l = r.rootBoundary),
                                      (d = r.padding),
                                      (f = r.flipVariations),
                                      (y = void 0 === (v = r.allowedAutoPlacements) ? tS : v),
                                      0 ===
                                          (x = (b = (_ = et(o))
                                              ? f
                                                  ? tP
                                                  : tP.filter(function (t) {
                                                        return et(t) === _;
                                                    })
                                              : tb).filter(function (t) {
                                              return y.indexOf(t) >= 0;
                                          })).length && (x = b),
                                      Object.keys(
                                          (T = x.reduce(function (t, e) {
                                              return (t[e] = em(s, { placement: e, boundary: a, rootBoundary: l, padding: d })[tF(e)]), t;
                                          }, {}))
                                      ).sort(function (t, e) {
                                          return T[t] - T[e];
                                      }))
                                    : i
                            );
                        }, []),
                        x = e.rects.reference,
                        T = e.rects.popper,
                        C = new Map(),
                        A = !0,
                        P = b[0],
                        S = 0;
                    S < b.length;
                    S++
                ) {
                    var k = b[S],
                        E = tF(k),
                        O = et(k) === tw,
                        D = [tm, tv].indexOf(E) >= 0,
                        z = D ? "width" : "height",
                        L = em(e, { placement: k, boundary: u, rootBoundary: p, altBoundary: d, padding: c }),
                        R = D ? (O ? t$ : ty) : O ? tv : tm;
                    x[z] > T[z] && (R = ea(R));
                    var I = ea(R),
                        N = [];
                    if (
                        (r && N.push(L[E] <= 0),
                        a && N.push(L[R] <= 0, L[I] <= 0),
                        N.every(function (t) {
                            return t;
                        }))
                    ) {
                        (P = k), (A = !1);
                        break;
                    }
                    C.set(k, N);
                }
                if (A)
                    for (
                        var M = function (t) {
                                var e = b.find(function (e) {
                                    var i = C.get(e);
                                    if (i)
                                        return i.slice(0, t).every(function (t) {
                                            return t;
                                        });
                                });
                                if (e) return (P = e), "break";
                            },
                            j = g ? 3 : 1;
                        j > 0 && "break" !== M(j);
                        j--
                    );
                e.placement !== P && ((e.modifiersData[s]._skip = !0), (e.placement = P), (e.reset = !0));
            }
        },
        requiresIfExists: ["offset"],
        data: { _skip: !1 },
    };
    function e$(t, e, i) {
        return void 0 === i && (i = { x: 0, y: 0 }), { top: t.top - e.height - i.y, right: t.right - e.width + i.x, bottom: t.bottom - e.height + i.y, left: t.left - e.width - i.x };
    }
    function ey(t) {
        return [tm, t$, tv, ty].some(function (e) {
            return t[e] >= 0;
        });
    }
    let e_ = {
            name: "hide",
            enabled: !0,
            phase: "main",
            requiresIfExists: ["preventOverflow"],
            fn: function (t) {
                var e = t.state,
                    i = t.name,
                    s = e.rects.reference,
                    n = e.rects.popper,
                    r = e.modifiersData.preventOverflow,
                    o = em(e, { elementContext: "reference" }),
                    a = em(e, { altBoundary: !0 }),
                    l = e$(o, s),
                    c = e$(a, n, r),
                    u = ey(l),
                    p = ey(c);
                (e.modifiersData[i] = { referenceClippingOffsets: l, popperEscapeOffsets: c, isReferenceHidden: u, hasPopperEscaped: p }),
                    (e.attributes.popper = Object.assign({}, e.attributes.popper, { "data-popper-reference-hidden": u, "data-popper-escaped": p }));
            },
        },
        eb = {
            name: "offset",
            enabled: !0,
            phase: "main",
            requires: ["popperOffsets"],
            fn: function (t) {
                var e = t.state,
                    i = t.options,
                    s = t.name,
                    n = i.offset,
                    r = void 0 === n ? [0, 0] : n,
                    o = tS.reduce(function (t, i) {
                        var s, n, o, a, l, c, u, p;
                        return (
                            (t[i] =
                                ((s = i),
                                (n = e.rects),
                                (o = r),
                                (l = [ty, tm].indexOf((a = tF(s))) >= 0 ? -1 : 1),
                                (u = (c = "function" == typeof o ? o(Object.assign({}, n, { placement: s })) : o)[0]),
                                (p = c[1]),
                                (u = u || 0),
                                (p = (p || 0) * l),
                                [ty, t$].indexOf(a) >= 0 ? { x: p, y: u } : { x: u, y: p })),
                            t
                        );
                    }, {}),
                    a = o[e.placement],
                    l = a.x,
                    c = a.y;
                null != e.modifiersData.popperOffsets && ((e.modifiersData.popperOffsets.x += l), (e.modifiersData.popperOffsets.y += c)), (e.modifiersData[s] = o);
            },
        },
        ew = {
            name: "popperOffsets",
            enabled: !0,
            phase: "read",
            fn: function (t) {
                var e = t.state,
                    i = t.name;
                e.modifiersData[i] = eg({ reference: e.rects.reference, element: e.rects.popper, strategy: "absolute", placement: e.placement });
            },
            data: {},
        },
        ex = {
            name: "preventOverflow",
            enabled: !0,
            phase: "main",
            fn: function (t) {
                var e = t.state,
                    i = t.options,
                    s = t.name,
                    n = i.mainAxis,
                    r = i.altAxis,
                    o = i.boundary,
                    a = i.rootBoundary,
                    l = i.altBoundary,
                    c = i.padding,
                    u = i.tether,
                    p = void 0 === u || u,
                    d = i.tetherOffset,
                    f = void 0 === d ? 0 : d,
                    g = em(e, { boundary: o, rootBoundary: a, padding: c, altBoundary: l }),
                    m = tF(e.placement),
                    v = et(e.placement),
                    y = !v,
                    _ = tQ(m),
                    b = "x" === _ ? "y" : "x",
                    x = e.modifiersData.popperOffsets,
                    T = e.rects.reference,
                    C = e.rects.popper,
                    A = "function" == typeof f ? f(Object.assign({}, e.rects, { placement: e.placement })) : f,
                    P = "number" == typeof A ? { mainAxis: A, altAxis: A } : Object.assign({ mainAxis: 0, altAxis: 0 }, A),
                    S = e.modifiersData.offset ? e.modifiersData.offset[e.placement] : null,
                    k = { x: 0, y: 0 };
                if (x) {
                    if (void 0 === n || n) {
                        var E,
                            O = "y" === _ ? tm : ty,
                            D = "y" === _ ? tv : t$,
                            z = "y" === _ ? "height" : "width",
                            L = x[_],
                            R = L + g[O],
                            I = L - g[D],
                            N = p ? -C[z] / 2 : 0,
                            M = v === tw ? T[z] : C[z],
                            j = v === tw ? -C[z] : -T[z],
                            F = e.elements.arrow,
                            B = p && F ? tq(F) : { width: 0, height: 0 },
                            H = e.modifiersData["arrow#persistent"] ? e.modifiersData["arrow#persistent"].padding : { top: 0, right: 0, bottom: 0, left: 0 },
                            W = H[O],
                            X = H[D],
                            q = tZ(0, T[z], B[z]),
                            Y = y ? T[z] / 2 - N - q - W - P.mainAxis : M - q - W - P.mainAxis,
                            V = y ? -T[z] / 2 + N + q + X + P.mainAxis : j + q + X + P.mainAxis,
                            U = e.elements.arrow && t6(e.elements.arrow),
                            Q = U ? ("y" === _ ? U.clientTop || 0 : U.clientLeft || 0) : 0,
                            Z = null != (E = null == S ? void 0 : S[_]) ? E : 0,
                            G = tZ(p ? tH(R, L + Y - Z - Q) : R, L, p ? tB(I, L + V - Z) : I);
                        (x[_] = G), (k[_] = G - L);
                    }
                    if (void 0 !== r && r) {
                        var K,
                            J,
                            tt,
                            te,
                            ti,
                            ts = x[b],
                            tn = "y" === b ? "height" : "width",
                            tr = ts + g["x" === _ ? tm : ty],
                            to = ts - g["x" === _ ? tv : t$],
                            ta = -1 !== [tm, ty].indexOf(m),
                            tl = null != (ti = null == S ? void 0 : S[b]) ? ti : 0,
                            th = ta ? tr : ts - T[tn] - C[tn] - tl + P.altAxis,
                            tc = ta ? ts + T[tn] + C[tn] - tl - P.altAxis : to,
                            tu = p && ta ? ((K = th), (J = ts), (tt = tc), (te = tZ(K, J, tt)) > tt ? tt : te) : tZ(p ? th : tr, ts, p ? tc : to);
                        (x[b] = tu), (k[b] = tu - ts);
                    }
                    e.modifiersData[s] = k;
                }
            },
            requiresIfExists: ["offset"],
        };
    var eT = { placement: "bottom", modifiers: [], strategy: "absolute" };
    function eC() {
        for (var t = arguments.length, e = Array(t), i = 0; i < t; i++) e[i] = arguments[i];
        return !e.some(function (t) {
            return !(t && "function" == typeof t.getBoundingClientRect);
        });
    }
    function eA(t) {
        void 0 === t && (t = {});
        var e = t,
            i = e.defaultModifiers,
            s = void 0 === i ? [] : i,
            n = e.defaultOptions,
            r = void 0 === n ? eT : n;
        return function (t, e, i) {
            void 0 === i && (i = r);
            var n,
                o,
                a = { placement: "bottom", orderedModifiers: [], options: Object.assign({}, eT, r), modifiersData: {}, elements: { reference: t, popper: e }, attributes: {}, styles: {} },
                l = [],
                c = !1,
                u = {
                    state: a,
                    setOptions: function (i) {
                        var n,
                            o,
                            c,
                            d,
                            f,
                            g,
                            m = "function" == typeof i ? i(a.options) : i;
                        p(), (a.options = Object.assign({}, r, a.options, m)), (a.scrollParents = { reference: t1(t) ? ed(t) : t.contextElement ? ed(t.contextElement) : [], popper: ed(e) });
                        var v,
                            y,
                            _ =
                                ((g =
                                    ((o = n = Object.keys(
                                        (y = (v = [].concat(s, a.options.modifiers)).reduce(function (t, e) {
                                            var i = t[e.name];
                                            return (t[e.name] = i ? Object.assign({}, i, e, { options: Object.assign({}, i.options, e.options), data: Object.assign({}, i.data, e.data) }) : e), t;
                                        }, {}))
                                    ).map(function (t) {
                                        return y[t];
                                    })),
                                    (c = new Map()),
                                    (d = new Set()),
                                    (f = []),
                                    o.forEach(function (t) {
                                        c.set(t.name, t);
                                    }),
                                    o.forEach(function (t) {
                                        d.has(t.name) ||
                                            (function t(e) {
                                                d.add(e.name),
                                                    [].concat(e.requires || [], e.requiresIfExists || []).forEach(function (e) {
                                                        if (!d.has(e)) {
                                                            var i = c.get(e);
                                                            i && t(i);
                                                        }
                                                    }),
                                                    f.push(e);
                                            })(t);
                                    }),
                                    f)),
                                tI.reduce(function (t, e) {
                                    return t.concat(
                                        g.filter(function (t) {
                                            return t.phase === e;
                                        })
                                    );
                                }, []));
                        return (
                            (a.orderedModifiers = _.filter(function (t) {
                                return t.enabled;
                            })),
                            a.orderedModifiers.forEach(function (t) {
                                var e = t.name,
                                    i = t.options,
                                    s = t.effect;
                                if ("function" == typeof s) {
                                    var n = s({ state: a, name: e, instance: u, options: void 0 === i ? {} : i });
                                    l.push(n || function () {});
                                }
                            }),
                            u.update()
                        );
                    },
                    forceUpdate: function () {
                        if (!c) {
                            var t,
                                e,
                                i,
                                s,
                                n,
                                r,
                                o,
                                l,
                                p,
                                d,
                                f,
                                g,
                                m,
                                v,
                                y,
                                _ = a.elements,
                                b = _.reference,
                                x = _.popper;
                            if (eC(b, x)) {
                                (a.rects = {
                                    reference:
                                        ((t = b),
                                        (e = t6(x)),
                                        (i = "fixed" === a.options.strategy),
                                        (d = tM(e)),
                                        (f = tM(e) && ((r = tW((n = (s = e).getBoundingClientRect()).width) / s.offsetWidth || 1), (o = tW(n.height) / s.offsetHeight || 1), 1 !== r || 1 !== o)),
                                        (g = t2(e)),
                                        (m = tX(t, f)),
                                        (v = { scrollLeft: 0, scrollTop: 0 }),
                                        (y = { x: 0, y: 0 }),
                                        (d || (!d && !i)) &&
                                            (("body" !== tN(e) || ep(g)) && (v = (l = e) !== t9(l) && tM(l) ? { scrollLeft: (p = l).scrollLeft, scrollTop: p.scrollTop } : ec(l)),
                                            tM(e) ? (((y = tX(e, !0)).x += e.clientLeft), (y.y += e.clientTop)) : g && (y.x = eu(g))),
                                        { x: m.left + v.scrollLeft - y.x, y: m.top + v.scrollTop - y.y, width: m.width, height: m.height }),
                                    popper: tq(x),
                                }),
                                    (a.reset = !1),
                                    (a.placement = a.options.placement),
                                    a.orderedModifiers.forEach(function (t) {
                                        return (a.modifiersData[t.name] = Object.assign({}, t.data));
                                    });
                                for (var T = 0; T < a.orderedModifiers.length; T++)
                                    if (!0 !== a.reset) {
                                        var C = a.orderedModifiers[T],
                                            A = C.fn,
                                            P = C.options,
                                            S = void 0 === P ? {} : P,
                                            k = C.name;
                                        "function" == typeof A && (a = A({ state: a, options: S, name: k, instance: u }) || a);
                                    } else (a.reset = !1), (T = -1);
                            }
                        }
                    },
                    update:
                        ((n = function () {
                            return new Promise(function (t) {
                                u.forceUpdate(), t(a);
                            });
                        }),
                        function () {
                            return (
                                o ||
                                    (o = new Promise(function (t) {
                                        Promise.resolve().then(function () {
                                            (o = void 0), t(n());
                                        });
                                    })),
                                o
                            );
                        }),
                    destroy: function () {
                        p(), (c = !0);
                    },
                };
            if (!eC(t, e)) return u;
            function p() {
                l.forEach(function (t) {
                    return t();
                }),
                    (l = []);
            }
            return (
                u.setOptions(i).then(function (t) {
                    !c && i.onFirstUpdate && i.onFirstUpdate(t);
                }),
                u
            );
        };
    }
    var eP = eA(),
        eS = eA({ defaultModifiers: [er, ew, es, tj] }),
        ek = eA({ defaultModifiers: [er, ew, es, tj, eb, ev, ex, tJ, e_] });
    let eE = Object.freeze(
            Object.defineProperty(
                {
                    __proto__: null,
                    popperGenerator: eA,
                    detectOverflow: em,
                    createPopperBase: eP,
                    createPopper: ek,
                    createPopperLite: eS,
                    top: tm,
                    bottom: tv,
                    right: t$,
                    left: ty,
                    auto: t_,
                    basePlacements: tb,
                    start: tw,
                    end: "end",
                    clippingParents: tx,
                    viewport: tT,
                    popper: tC,
                    reference: tA,
                    variationPlacements: tP,
                    placements: tS,
                    beforeRead: tk,
                    read: tE,
                    afterRead: tO,
                    beforeMain: t0,
                    main: tD,
                    afterMain: tz,
                    beforeWrite: tL,
                    write: tR,
                    afterWrite: t3,
                    modifierPhases: tI,
                    applyStyles: tj,
                    arrow: tJ,
                    computeStyles: es,
                    eventListeners: er,
                    flip: ev,
                    hide: e_,
                    offset: eb,
                    popperOffsets: ew,
                    preventOverflow: ex,
                },
                Symbol.toStringTag,
                { value: "Module" }
            )
        ),
        eO = "dropdown",
        e0 = "ArrowDown",
        eD = "click.bs.dropdown.data-api",
        ez = "keydown.bs.dropdown.data-api",
        eL = "show",
        eR = '[data-bs-toggle="dropdown"]:not(.disabled):not(:disabled)',
        e3 = `${eR}.show`,
        eI = ".dropdown-menu",
        eN = g() ? "top-end" : "top-start",
        e9 = g() ? "top-start" : "top-end",
        e1 = g() ? "bottom-end" : "bottom-start",
        eM = g() ? "bottom-start" : "bottom-end",
        e7 = g() ? "left-start" : "right-start",
        ej = g() ? "right-start" : "left-start",
        eF = { offset: [0, 2], boundary: "clippingParents", reference: "toggle", display: "dynamic", popperConfig: null, autoClose: !0 },
        eB = { offset: "(array|string|function)", boundary: "(string|element)", reference: "(string|element|object)", display: "string", popperConfig: "(null|object|function)", autoClose: "(boolean|string)" };
    class eH extends X {
        constructor(t, e) {
            super(t, e), (this._popper = null), (this._parent = this._element.parentNode), (this._menu = Q.findOne(eI, this._parent)), (this._inNavbar = this._detectNavbar());
        }
        static get Default() {
            return eF;
        }
        static get DefaultType() {
            return eB;
        }
        static get NAME() {
            return eO;
        }
        toggle() {
            return this._isShown() ? this.hide() : this.show();
        }
        show() {
            if (l(this._element) || this._isShown()) return;
            let t = { relatedTarget: this._element };
            if (!N.trigger(this._element, "show.bs.dropdown", t).defaultPrevented) {
                if ((this._createPopper(), "ontouchstart" in document.documentElement && !this._parent.closest(".navbar-nav"))) for (let e of [].concat(...document.body.children)) N.on(e, "mouseover", u);
                this._element.focus(), this._element.setAttribute("aria-expanded", !0), this._menu.classList.add(eL), this._element.classList.add(eL), N.trigger(this._element, "shown.bs.dropdown", t);
            }
        }
        hide() {
            if (l(this._element) || !this._isShown()) return;
            let t = { relatedTarget: this._element };
            this._completeHide(t);
        }
        dispose() {
            this._popper && this._popper.destroy(), super.dispose();
        }
        update() {
            (this._inNavbar = this._detectNavbar()), this._popper && this._popper.update();
        }
        _completeHide(t) {
            if (!N.trigger(this._element, "hide.bs.dropdown", t).defaultPrevented) {
                if ("ontouchstart" in document.documentElement) for (let e of [].concat(...document.body.children)) N.off(e, "mouseover", u);
                this._popper && this._popper.destroy(),
                    this._menu.classList.remove(eL),
                    this._element.classList.remove(eL),
                    this._element.setAttribute("aria-expanded", "false"),
                    H.removeDataAttribute(this._menu, "popper"),
                    N.trigger(this._element, "hidden.bs.dropdown", t);
            }
        }
        _getConfig(t) {
            if ("object" == typeof (t = super._getConfig(t)).reference && !r(t.reference) && "function" != typeof t.reference.getBoundingClientRect)
                throw TypeError(`${eO.toUpperCase()}: Option "reference" provided type "object" without a required "getBoundingClientRect" method.`);
            return t;
        }
        _createPopper() {
            if (void 0 === eE) throw TypeError("Bootstrap's dropdowns require Popper (https://popper.js.org)");
            let t = this._element;
            "parent" === this._config.reference ? (t = this._parent) : r(this._config.reference) ? (t = o(this._config.reference)) : "object" == typeof this._config.reference && (t = this._config.reference);
            let e = this._getPopperConfig();
            this._popper = ek(t, this._menu, e);
        }
        _isShown() {
            return this._menu.classList.contains(eL);
        }
        _getPlacement() {
            let t = this._parent;
            if (t.classList.contains("dropend")) return e7;
            if (t.classList.contains("dropstart")) return ej;
            if (t.classList.contains("dropup-center")) return "top";
            if (t.classList.contains("dropdown-center")) return "bottom";
            let e = "end" === getComputedStyle(this._menu).getPropertyValue("--bs-position").trim();
            return t.classList.contains("dropup") ? (e ? e9 : eN) : e ? eM : e1;
        }
        _detectNavbar() {
            return null !== this._element.closest(".navbar");
        }
        _getOffset() {
            let { offset: t } = this._config;
            return "string" == typeof t ? t.split(",").map((t) => Number.parseInt(t, 10)) : "function" == typeof t ? (e) => t(e, this._element) : t;
        }
        _getPopperConfig() {
            let t = {
                placement: this._getPlacement(),
                modifiers: [
                    { name: "preventOverflow", options: { boundary: this._config.boundary } },
                    { name: "offset", options: { offset: this._getOffset() } },
                ],
            };
            return (
                (this._inNavbar || "static" === this._config.display) && (H.setDataAttribute(this._menu, "popper", "static"), (t.modifiers = [{ name: "applyStyles", enabled: !1 }])),
                { ...t, ...("function" == typeof this._config.popperConfig ? this._config.popperConfig(t) : this._config.popperConfig) }
            );
        }
        _selectMenuItem({ key: t, target: e }) {
            let i = Q.find(".dropdown-menu .dropdown-item:not(.disabled):not(:disabled)", this._menu).filter((t) => a(t));
            i.length && _(i, e, t === e0, !i.includes(e)).focus();
        }
        static jQueryInterface(t) {
            return this.each(function () {
                let e = eH.getOrCreateInstance(this, t);
                if ("string" == typeof t) {
                    if (void 0 === e[t]) throw TypeError(`No method named "${t}"`);
                    e[t]();
                }
            });
        }
        static clearMenus(t) {
            if (2 === t.button || ("keyup" === t.type && "Tab" !== t.key)) return;
            let e = Q.find(e3);
            for (let i of e) {
                let s = eH.getInstance(i);
                if (!s || !1 === s._config.autoClose) continue;
                let n = t.composedPath(),
                    r = n.includes(s._menu);
                if (
                    n.includes(s._element) ||
                    ("inside" === s._config.autoClose && !r) ||
                    ("outside" === s._config.autoClose && r) ||
                    (s._menu.contains(t.target) && (("keyup" === t.type && "Tab" === t.key) || /input|select|option|textarea|form/i.test(t.target.tagName)))
                )
                    continue;
                let o = { relatedTarget: s._element };
                "click" === t.type && (o.clickEvent = t), s._completeHide(o);
            }
        }
        static dataApiKeydownHandler(t) {
            let e = /input|textarea/i.test(t.target.tagName),
                i = "Escape" === t.key,
                s = ["ArrowUp", e0].includes(t.key);
            if ((!s && !i) || (e && !i)) return;
            t.preventDefault();
            let n = Q.findOne(eR, t.delegateTarget.parentNode),
                r = eH.getOrCreateInstance(n);
            if (s) return t.stopPropagation(), r.show(), void r._selectMenuItem(t);
            r._isShown() && (t.stopPropagation(), r.hide(), n.focus());
        }
    }
    N.on(document, ez, eR, eH.dataApiKeydownHandler),
        N.on(document, ez, eI, eH.dataApiKeydownHandler),
        N.on(document, eD, eH.clearMenus),
        N.on(document, "keyup.bs.dropdown.data-api", eH.clearMenus),
        N.on(document, eD, eR, function (t) {
            t.preventDefault(), eH.getOrCreateInstance(this).toggle();
        }),
        m(eH);
    let eW = ".fixed-top, .fixed-bottom, .is-fixed, .sticky-top",
        eX = ".sticky-top",
        eq = "padding-right",
        eY = "margin-right";
    class eV {
        constructor() {
            this._element = document.body;
        }
        getWidth() {
            let t = document.documentElement.clientWidth;
            return Math.abs(window.innerWidth - t);
        }
        hide() {
            let t = this.getWidth();
            this._disableOverFlow(), this._setElementAttributes(this._element, eq, (e) => e + t), this._setElementAttributes(eW, eq, (e) => e + t), this._setElementAttributes(eX, eY, (e) => e - t);
        }
        reset() {
            this._resetElementAttributes(this._element, "overflow"), this._resetElementAttributes(this._element, eq), this._resetElementAttributes(eW, eq), this._resetElementAttributes(eX, eY);
        }
        isOverflowing() {
            return this.getWidth() > 0;
        }
        _disableOverFlow() {
            this._saveInitialAttribute(this._element, "overflow"), (this._element.style.overflow = "hidden");
        }
        _setElementAttributes(t, e, i) {
            let s = this.getWidth();
            this._applyManipulationCallback(t, (t) => {
                if (t !== this._element && window.innerWidth > t.clientWidth + s) return;
                this._saveInitialAttribute(t, e);
                let n = window.getComputedStyle(t).getPropertyValue(e);
                t.style.setProperty(e, `${i(Number.parseFloat(n))}px`);
            });
        }
        _saveInitialAttribute(t, e) {
            let i = t.style.getPropertyValue(e);
            i && H.setDataAttribute(t, e, i);
        }
        _resetElementAttributes(t, e) {
            this._applyManipulationCallback(t, (t) => {
                let i = H.getDataAttribute(t, e);
                null !== i ? (H.removeDataAttribute(t, e), t.style.setProperty(e, i)) : t.style.removeProperty(e);
            });
        }
        _applyManipulationCallback(t, e) {
            if (r(t)) e(t);
            else for (let i of Q.find(t, this._element)) e(i);
        }
    }
    let e4 = "show",
        e2 = "mousedown.bs.backdrop",
        eU = { className: "modal-backdrop", isVisible: !0, isAnimated: !1, rootElement: "body", clickCallback: null },
        e5 = { className: "string", isVisible: "boolean", isAnimated: "boolean", rootElement: "(element|string)", clickCallback: "(function|null)" };
    class e6 extends W {
        constructor(t) {
            super(), (this._config = this._getConfig(t)), (this._isAppended = !1), (this._element = null);
        }
        static get Default() {
            return eU;
        }
        static get DefaultType() {
            return e5;
        }
        static get NAME() {
            return "backdrop";
        }
        show(t) {
            if (!this._config.isVisible) return void v(t);
            this._append();
            let e = this._getElement();
            this._config.isAnimated && p(e),
                e.classList.add(e4),
                this._emulateAnimation(() => {
                    v(t);
                });
        }
        hide(t) {
            this._config.isVisible
                ? (this._getElement().classList.remove(e4),
                  this._emulateAnimation(() => {
                      this.dispose(), v(t);
                  }))
                : v(t);
        }
        dispose() {
            this._isAppended && (N.off(this._element, e2), this._element.remove(), (this._isAppended = !1));
        }
        _getElement() {
            if (!this._element) {
                let t = document.createElement("div");
                (t.className = this._config.className), this._config.isAnimated && t.classList.add("fade"), (this._element = t);
            }
            return this._element;
        }
        _configAfterMerge(t) {
            return (t.rootElement = o(t.rootElement)), t;
        }
        _append() {
            if (this._isAppended) return;
            let t = this._getElement();
            this._config.rootElement.append(t),
                N.on(t, e2, () => {
                    v(this._config.clickCallback);
                }),
                (this._isAppended = !0);
        }
        _emulateAnimation(t) {
            y(t, this._getElement(), this._config.isAnimated);
        }
    }
    let eQ = ".bs.focustrap",
        eZ = "backward",
        eG = { trapElement: null, autofocus: !0 },
        eK = { trapElement: "element", autofocus: "boolean" };
    class eJ extends W {
        constructor(t) {
            super(), (this._config = this._getConfig(t)), (this._isActive = !1), (this._lastTabNavDirection = null);
        }
        static get Default() {
            return eG;
        }
        static get DefaultType() {
            return eK;
        }
        static get NAME() {
            return "focustrap";
        }
        activate() {
            this._isActive ||
                (this._config.autofocus && this._config.trapElement.focus(),
                N.off(document, eQ),
                N.on(document, "focusin.bs.focustrap", (t) => this._handleFocusin(t)),
                N.on(document, "keydown.tab.bs.focustrap", (t) => this._handleKeydown(t)),
                (this._isActive = !0));
        }
        deactivate() {
            this._isActive && ((this._isActive = !1), N.off(document, eQ));
        }
        _handleFocusin(t) {
            let { trapElement: e } = this._config;
            if (t.target === document || t.target === e || e.contains(t.target)) return;
            let i = Q.focusableChildren(e);
            0 === i.length ? e.focus() : this._lastTabNavDirection === eZ ? i[i.length - 1].focus() : i[0].focus();
        }
        _handleKeydown(t) {
            "Tab" === t.key && (this._lastTabNavDirection = t.shiftKey ? eZ : "forward");
        }
    }
    let it = "hidden.bs.modal",
        ie = "show.bs.modal",
        ii = "modal-open",
        is = "show",
        ir = "modal-static",
        io = { backdrop: !0, keyboard: !0, focus: !0 },
        ia = { backdrop: "(boolean|string)", keyboard: "boolean", focus: "boolean" };
    class il extends X {
        constructor(t, e) {
            super(t, e),
                (this._dialog = Q.findOne(".modal-dialog", this._element)),
                (this._backdrop = this._initializeBackDrop()),
                (this._focustrap = this._initializeFocusTrap()),
                (this._isShown = !1),
                (this._isTransitioning = !1),
                (this._scrollBar = new eV()),
                this._addEventListeners();
        }
        static get Default() {
            return io;
        }
        static get DefaultType() {
            return ia;
        }
        static get NAME() {
            return "modal";
        }
        toggle(t) {
            return this._isShown ? this.hide() : this.show(t);
        }
        show(t) {
            this._isShown ||
                this._isTransitioning ||
                N.trigger(this._element, ie, { relatedTarget: t }).defaultPrevented ||
                ((this._isShown = !0), (this._isTransitioning = !0), this._scrollBar.hide(), document.body.classList.add(ii), this._adjustDialog(), this._backdrop.show(() => this._showElement(t)));
        }
        hide() {
            this._isShown &&
                !this._isTransitioning &&
                (N.trigger(this._element, "hide.bs.modal").defaultPrevented ||
                    ((this._isShown = !1), (this._isTransitioning = !0), this._focustrap.deactivate(), this._element.classList.remove(is), this._queueCallback(() => this._hideModal(), this._element, this._isAnimated())));
        }
        dispose() {
            for (let t of [window, this._dialog]) N.off(t, ".bs.modal");
            this._backdrop.dispose(), this._focustrap.deactivate(), super.dispose();
        }
        handleUpdate() {
            this._adjustDialog();
        }
        _initializeBackDrop() {
            return new e6({ isVisible: Boolean(this._config.backdrop), isAnimated: this._isAnimated() });
        }
        _initializeFocusTrap() {
            return new eJ({ trapElement: this._element });
        }
        _showElement(t) {
            document.body.contains(this._element) || document.body.append(this._element),
                (this._element.style.display = "block"),
                this._element.removeAttribute("aria-hidden"),
                this._element.setAttribute("aria-modal", !0),
                this._element.setAttribute("role", "dialog"),
                (this._element.scrollTop = 0);
            let e = Q.findOne(".modal-body", this._dialog);
            e && (e.scrollTop = 0),
                p(this._element),
                this._element.classList.add(is),
                this._queueCallback(
                    () => {
                        this._config.focus && this._focustrap.activate(), (this._isTransitioning = !1), N.trigger(this._element, "shown.bs.modal", { relatedTarget: t });
                    },
                    this._dialog,
                    this._isAnimated()
                );
        }
        _addEventListeners() {
            N.on(this._element, "keydown.dismiss.bs.modal", (t) => {
                if ("Escape" === t.key) return this._config.keyboard ? (t.preventDefault(), void this.hide()) : void this._triggerBackdropTransition();
            }),
                N.on(window, "resize.bs.modal", () => {
                    this._isShown && !this._isTransitioning && this._adjustDialog();
                }),
                N.on(this._element, "click.dismiss.bs.modal", (t) => {
                    t.target === t.currentTarget && ("static" !== this._config.backdrop ? this._config.backdrop && this.hide() : this._triggerBackdropTransition());
                });
        }
        _hideModal() {
            (this._element.style.display = "none"),
                this._element.setAttribute("aria-hidden", !0),
                this._element.removeAttribute("aria-modal"),
                this._element.removeAttribute("role"),
                (this._isTransitioning = !1),
                this._backdrop.hide(() => {
                    document.body.classList.remove(ii), this._resetAdjustments(), this._scrollBar.reset(), N.trigger(this._element, it);
                });
        }
        _isAnimated() {
            return this._element.classList.contains("fade");
        }
        _triggerBackdropTransition() {
            if (N.trigger(this._element, "hidePrevented.bs.modal").defaultPrevented) return;
            let t = this._element.scrollHeight > document.documentElement.clientHeight,
                e = this._element.style.overflowY;
            "hidden" === e ||
                this._element.classList.contains(ir) ||
                (t || (this._element.style.overflowY = "hidden"),
                this._element.classList.add(ir),
                this._queueCallback(() => {
                    this._element.classList.remove(ir),
                        this._queueCallback(() => {
                            this._element.style.overflowY = e;
                        }, this._dialog);
                }, this._dialog),
                this._element.focus());
        }
        _adjustDialog() {
            let t = this._element.scrollHeight > document.documentElement.clientHeight,
                e = this._scrollBar.getWidth(),
                i = e > 0;
            if (i && !t) {
                let s = g() ? "paddingLeft" : "paddingRight";
                this._element.style[s] = `${e}px`;
            }
            if (!i && t) {
                let n = g() ? "paddingRight" : "paddingLeft";
                this._element.style[n] = `${e}px`;
            }
        }
        _resetAdjustments() {
            (this._element.style.paddingLeft = ""), (this._element.style.paddingRight = "");
        }
        static jQueryInterface(t, e) {
            return this.each(function () {
                let i = il.getOrCreateInstance(this, t);
                if ("string" == typeof t) {
                    if (void 0 === i[t]) throw TypeError(`No method named "${t}"`);
                    i[t](e);
                }
            });
        }
    }
    N.on(document, "click.bs.modal.data-api", '[data-bs-toggle="modal"]', function (t) {
        let e = s(this);
        ["A", "AREA"].includes(this.tagName) && t.preventDefault(),
            N.one(e, ie, (t) => {
                t.defaultPrevented ||
                    N.one(e, it, () => {
                        a(this) && this.focus();
                    });
            });
        let i = Q.findOne(".modal.show");
        i && il.getInstance(i).hide(), il.getOrCreateInstance(e).toggle(this);
    }),
        q(il),
        m(il);
    let ih = "show",
        ic = "showing",
        iu = "hiding",
        ip = ".offcanvas.show",
        id = "hidePrevented.bs.offcanvas",
        i8 = "hidden.bs.offcanvas",
        ig = { backdrop: !0, keyboard: !0, scroll: !1 },
        im = { backdrop: "(boolean|string)", keyboard: "boolean", scroll: "boolean" };
    class iv extends X {
        constructor(t, e) {
            super(t, e), (this._isShown = !1), (this._backdrop = this._initializeBackDrop()), (this._focustrap = this._initializeFocusTrap()), this._addEventListeners();
        }
        static get Default() {
            return ig;
        }
        static get DefaultType() {
            return im;
        }
        static get NAME() {
            return "offcanvas";
        }
        toggle(t) {
            return this._isShown ? this.hide() : this.show(t);
        }
        show(t) {
            this._isShown ||
                N.trigger(this._element, "show.bs.offcanvas", { relatedTarget: t }).defaultPrevented ||
                ((this._isShown = !0),
                this._backdrop.show(),
                this._config.scroll || new eV().hide(),
                this._element.setAttribute("aria-modal", !0),
                this._element.setAttribute("role", "dialog"),
                this._element.classList.add(ic),
                this._queueCallback(
                    () => {
                        this._config.scroll || this._focustrap.activate(), this._element.classList.add(ih), this._element.classList.remove(ic), N.trigger(this._element, "shown.bs.offcanvas", { relatedTarget: t });
                    },
                    this._element,
                    !0
                ));
        }
        hide() {
            this._isShown &&
                (N.trigger(this._element, "hide.bs.offcanvas").defaultPrevented ||
                    (this._focustrap.deactivate(),
                    this._element.blur(),
                    (this._isShown = !1),
                    this._element.classList.add(iu),
                    this._backdrop.hide(),
                    this._queueCallback(
                        () => {
                            this._element.classList.remove(ih, iu), this._element.removeAttribute("aria-modal"), this._element.removeAttribute("role"), this._config.scroll || new eV().reset(), N.trigger(this._element, i8);
                        },
                        this._element,
                        !0
                    )));
        }
        dispose() {
            this._backdrop.dispose(), this._focustrap.deactivate(), super.dispose();
        }
        _initializeBackDrop() {
            let t = Boolean(this._config.backdrop);
            return new e6({
                className: "offcanvas-backdrop",
                isVisible: t,
                isAnimated: !0,
                rootElement: this._element.parentNode,
                clickCallback: t
                    ? () => {
                          "static" !== this._config.backdrop ? this.hide() : N.trigger(this._element, id);
                      }
                    : null,
            });
        }
        _initializeFocusTrap() {
            return new eJ({ trapElement: this._element });
        }
        _addEventListeners() {
            N.on(this._element, "keydown.dismiss.bs.offcanvas", (t) => {
                "Escape" === t.key && (this._config.keyboard ? this.hide() : N.trigger(this._element, id));
            });
        }
        static jQueryInterface(t) {
            return this.each(function () {
                let e = iv.getOrCreateInstance(this, t);
                if ("string" == typeof t) {
                    if (void 0 === e[t] || t.startsWith("_") || "constructor" === t) throw TypeError(`No method named "${t}"`);
                    e[t](this);
                }
            });
        }
    }
    N.on(document, "click.bs.offcanvas.data-api", '[data-bs-toggle="offcanvas"]', function (t) {
        let e = s(this);
        if ((["A", "AREA"].includes(this.tagName) && t.preventDefault(), l(this))) return;
        N.one(e, i8, () => {
            a(this) && this.focus();
        });
        let i = Q.findOne(ip);
        i && i !== e && iv.getInstance(i).hide(), iv.getOrCreateInstance(e).toggle(this);
    }),
        N.on(window, "load.bs.offcanvas.data-api", () => {
            for (let t of Q.find(ip)) iv.getOrCreateInstance(t).show();
        }),
        N.on(window, "resize.bs.offcanvas", () => {
            for (let t of Q.find("[aria-modal][class*=show][class*=offcanvas-]")) "fixed" !== getComputedStyle(t).position && iv.getOrCreateInstance(t).hide();
        }),
        q(iv),
        m(iv);
    let i$ = new Set(["background", "cite", "href", "itemtype", "longdesc", "poster", "src", "xlink:href"]),
        iy = /^(?:(?:https?|mailto|ftp|tel|file|sms):|[^#&/:?]*(?:[#/?]|$))/i,
        i_ = /^data:(?:image\/(?:bmp|gif|jpeg|jpg|png|tiff|webp)|video\/(?:mpeg|mp4|ogg|webm)|audio\/(?:mp3|oga|ogg|opus));base64,[\d+/a-z]+=*$/i,
        ib = (t, e) => {
            let i = t.nodeName.toLowerCase();
            return e.includes(i) ? !i$.has(i) || Boolean(iy.test(t.nodeValue) || i_.test(t.nodeValue)) : e.filter((t) => t instanceof RegExp).some((t) => t.test(i));
        },
        iw = {
            "*": ["class", "dir", "id", "lang", "role", /^aria-[\w-]*$/i],
            a: ["target", "href", "title", "rel"],
            area: [],
            b: [],
            br: [],
            col: [],
            code: [],
            div: [],
            em: [],
            hr: [],
            h1: [],
            h2: [],
            h3: [],
            h4: [],
            h5: [],
            h6: [],
            i: [],
            img: ["src", "srcset", "alt", "title", "width", "height"],
            li: [],
            ol: [],
            p: [],
            pre: [],
            s: [],
            small: [],
            span: [],
            sub: [],
            sup: [],
            strong: [],
            u: [],
            ul: [],
        },
        ix = { extraClass: "", template: "<div></div>", content: {}, html: !1, sanitize: !0, sanitizeFn: null, allowList: iw },
        iT = { extraClass: "(string|function)", template: "string", content: "object", html: "boolean", sanitize: "boolean", sanitizeFn: "(null|function)", allowList: "object" },
        iC = { selector: "(string|element)", entry: "(string|element|function|null)" };
    class iA extends W {
        constructor(t) {
            super(), (this._config = this._getConfig(t));
        }
        static get Default() {
            return ix;
        }
        static get DefaultType() {
            return iT;
        }
        static get NAME() {
            return "TemplateFactory";
        }
        getContent() {
            return Object.values(this._config.content)
                .map((t) => this._resolvePossibleFunction(t))
                .filter(Boolean);
        }
        hasContent() {
            return this.getContent().length > 0;
        }
        changeContent(t) {
            return this._checkContent(t), (this._config.content = { ...this._config.content, ...t }), this;
        }
        toHtml() {
            let t = document.createElement("div");
            for (let [e, i] of ((t.innerHTML = this._maybeSanitize(this._config.template)), Object.entries(this._config.content))) this._setContent(t, i, e);
            let s = t.children[0],
                n = this._resolvePossibleFunction(this._config.extraClass);
            return n && s.classList.add(...n.split(" ")), s;
        }
        _typeCheckConfig(t) {
            super._typeCheckConfig(t), this._checkContent(t.content);
        }
        _checkContent(t) {
            for (let [e, i] of Object.entries(t)) super._typeCheckConfig({ selector: e, entry: i }, iC);
        }
        _setContent(t, e, i) {
            let s = Q.findOne(i, t);
            s && ((e = this._resolvePossibleFunction(e)) ? (r(e) ? this._putElementInTemplate(o(e), s) : this._config.html ? (s.innerHTML = this._maybeSanitize(e)) : (s.textContent = e)) : s.remove());
        }
        _maybeSanitize(t) {
            return this._config.sanitize
                ? (function (t, e, i) {
                      if (!t.length) return t;
                      if (i && "function" == typeof i) return i(t);
                      let s = new window.DOMParser().parseFromString(t, "text/html"),
                          n = [].concat(...s.body.querySelectorAll("*"));
                      for (let r of n) {
                          let o = r.nodeName.toLowerCase();
                          if (!Object.keys(e).includes(o)) {
                              r.remove();
                              continue;
                          }
                          let a = [].concat(...r.attributes),
                              l = [].concat(e["*"] || [], e[o] || []);
                          for (let c of a) ib(c, l) || r.removeAttribute(c.nodeName);
                      }
                      return s.body.innerHTML;
                  })(t, this._config.allowList, this._config.sanitizeFn)
                : t;
        }
        _resolvePossibleFunction(t) {
            return "function" == typeof t ? t(this) : t;
        }
        _putElementInTemplate(t, e) {
            if (this._config.html) return (e.innerHTML = ""), void e.append(t);
            e.textContent = t.textContent;
        }
    }
    let iP = new Set(["sanitize", "allowList", "sanitizeFn"]),
        iS = "fade",
        ik = "show",
        iE = ".modal",
        iO = "hide.bs.modal",
        i0 = "hover",
        iD = "focus",
        iz = { AUTO: "auto", TOP: "top", RIGHT: g() ? "left" : "right", BOTTOM: "bottom", LEFT: g() ? "right" : "left" },
        iL = {
            animation: !0,
            template: '<div class="tooltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',
            trigger: "hover focus",
            title: "",
            delay: 0,
            html: !1,
            selector: !1,
            placement: "top",
            offset: [0, 0],
            container: !1,
            fallbackPlacements: ["top", "right", "bottom", "left"],
            boundary: "clippingParents",
            customClass: "",
            sanitize: !0,
            sanitizeFn: null,
            allowList: iw,
            popperConfig: null,
        },
        iR = {
            animation: "boolean",
            template: "string",
            title: "(string|element|function)",
            trigger: "string",
            delay: "(number|object)",
            html: "boolean",
            selector: "(string|boolean)",
            placement: "(string|function)",
            offset: "(array|string|function)",
            container: "(string|element|boolean)",
            fallbackPlacements: "array",
            boundary: "(string|element)",
            customClass: "(string|function)",
            sanitize: "boolean",
            sanitizeFn: "(null|function)",
            allowList: "object",
            popperConfig: "(null|object|function)",
        };
    class i3 extends X {
        constructor(t, e) {
            if (void 0 === eE) throw TypeError("Bootstrap's tooltips require Popper (https://popper.js.org)");
            super(t, e), (this._isEnabled = !0), (this._timeout = 0), (this._isHovered = !1), (this._activeTrigger = {}), (this._popper = null), (this._templateFactory = null), (this.tip = null), this._setListeners();
        }
        static get Default() {
            return iL;
        }
        static get DefaultType() {
            return iR;
        }
        static get NAME() {
            return "tooltip";
        }
        enable() {
            this._isEnabled = !0;
        }
        disable() {
            this._isEnabled = !1;
        }
        toggleEnabled() {
            this._isEnabled = !this._isEnabled;
        }
        toggle(t) {
            if (this._isEnabled) {
                if (t) {
                    let e = this._initializeOnDelegatedTarget(t);
                    return (e._activeTrigger.click = !e._activeTrigger.click), void (e._isWithActiveTrigger() ? e._enter() : e._leave());
                }
                this._isShown() ? this._leave() : this._enter();
            }
        }
        dispose() {
            clearTimeout(this._timeout), N.off(this._element.closest(iE), iO, this._hideModalHandler), this.tip && this.tip.remove(), this._disposePopper(), super.dispose();
        }
        show() {
            if ("none" === this._element.style.display) throw Error("Please use show on visible elements");
            if (!this._isWithContent() || !this._isEnabled) return;
            let t = N.trigger(this._element, this.constructor.eventName("show")),
                e = (c(this._element) || this._element.ownerDocument.documentElement).contains(this._element);
            if (t.defaultPrevented || !e) return;
            let i = this._getTipElement();
            this._element.setAttribute("aria-describedby", i.getAttribute("id"));
            let { container: s } = this._config;
            if (
                (this._element.ownerDocument.documentElement.contains(this.tip) || (s.append(i), N.trigger(this._element, this.constructor.eventName("inserted"))),
                this._popper ? this._popper.update() : this._createPopper(i),
                i.classList.add(ik),
                "ontouchstart" in document.documentElement)
            )
                for (let n of [].concat(...document.body.children)) N.on(n, "mouseover", u);
            this._queueCallback(
                () => {
                    let t = this._isHovered;
                    (this._isHovered = !1), N.trigger(this._element, this.constructor.eventName("shown")), t && this._leave();
                },
                this.tip,
                this._isAnimated()
            );
        }
        hide() {
            if (!this._isShown() || N.trigger(this._element, this.constructor.eventName("hide")).defaultPrevented) return;
            let t = this._getTipElement();
            if ((t.classList.remove(ik), "ontouchstart" in document.documentElement)) for (let e of [].concat(...document.body.children)) N.off(e, "mouseover", u);
            (this._activeTrigger.click = !1),
                (this._activeTrigger.focus = !1),
                (this._activeTrigger.hover = !1),
                (this._isHovered = !1),
                this._queueCallback(
                    () => {
                        this._isWithActiveTrigger() || (this._isHovered || t.remove(), this._element.removeAttribute("aria-describedby"), N.trigger(this._element, this.constructor.eventName("hidden")), this._disposePopper());
                    },
                    this.tip,
                    this._isAnimated()
                );
        }
        update() {
            this._popper && this._popper.update();
        }
        _isWithContent() {
            return Boolean(this._getTitle());
        }
        _getTipElement() {
            return this.tip || (this.tip = this._createTipElement(this._getContentForTemplate())), this.tip;
        }
        _createTipElement(t) {
            let e = this._getTemplateFactory(t).toHtml();
            if (!e) return null;
            e.classList.remove(iS, ik), e.classList.add(`bs-${this.constructor.NAME}-auto`);
            let i = ((t) => {
                do t += Math.floor(1e6 * Math.random());
                while (document.getElementById(t));
                return t;
            })(this.constructor.NAME).toString();
            return e.setAttribute("id", i), this._isAnimated() && e.classList.add(iS), e;
        }
        setContent(t) {
            let e = !1;
            this.tip && ((e = this._isShown()), this.tip.remove(), (this.tip = null)), this._disposePopper(), (this.tip = this._createTipElement(t)), e && this.show();
        }
        _getTemplateFactory(t) {
            return (
                this._templateFactory ? this._templateFactory.changeContent(t) : (this._templateFactory = new iA({ ...this._config, content: t, extraClass: this._resolvePossibleFunction(this._config.customClass) })), this._templateFactory
            );
        }
        _getContentForTemplate() {
            return { ".tooltip-inner": this._getTitle() };
        }
        _getTitle() {
            return this._config.title;
        }
        _initializeOnDelegatedTarget(t) {
            return this.constructor.getOrCreateInstance(t.delegateTarget, this._getDelegateConfig());
        }
        _isAnimated() {
            return this._config.animation || (this.tip && this.tip.classList.contains(iS));
        }
        _isShown() {
            return this.tip && this.tip.classList.contains(ik);
        }
        _createPopper(t) {
            let e = "function" == typeof this._config.placement ? this._config.placement.call(this, t, this._element) : this._config.placement,
                i = iz[e.toUpperCase()];
            this._popper = ek(this._element, t, this._getPopperConfig(i));
        }
        _getOffset() {
            let { offset: t } = this._config;
            return "string" == typeof t ? t.split(",").map((t) => Number.parseInt(t, 10)) : "function" == typeof t ? (e) => t(e, this._element) : t;
        }
        _resolvePossibleFunction(t) {
            return "function" == typeof t ? t.call(this._element) : t;
        }
        _getPopperConfig(t) {
            let e = {
                placement: t,
                modifiers: [
                    { name: "flip", options: { fallbackPlacements: this._config.fallbackPlacements } },
                    { name: "offset", options: { offset: this._getOffset() } },
                    { name: "preventOverflow", options: { boundary: this._config.boundary } },
                    { name: "arrow", options: { element: `.${this.constructor.NAME}-arrow` } },
                    {
                        name: "preSetPlacement",
                        enabled: !0,
                        phase: "beforeMain",
                        fn: (t) => {
                            this._getTipElement().setAttribute("data-popper-placement", t.state.placement);
                        },
                    },
                ],
            };
            return { ...e, ...("function" == typeof this._config.popperConfig ? this._config.popperConfig(e) : this._config.popperConfig) };
        }
        _setListeners() {
            let t = this._config.trigger.split(" ");
            for (let e of t)
                if ("click" === e) N.on(this._element, this.constructor.eventName("click"), this._config.selector, (t) => this.toggle(t));
                else if ("manual" !== e) {
                    let i = e === i0 ? this.constructor.eventName("mouseenter") : this.constructor.eventName("focusin"),
                        s = e === i0 ? this.constructor.eventName("mouseleave") : this.constructor.eventName("focusout");
                    N.on(this._element, i, this._config.selector, (t) => {
                        let e = this._initializeOnDelegatedTarget(t);
                        (e._activeTrigger["focusin" === t.type ? iD : i0] = !0), e._enter();
                    }),
                        N.on(this._element, s, this._config.selector, (t) => {
                            let e = this._initializeOnDelegatedTarget(t);
                            (e._activeTrigger["focusout" === t.type ? iD : i0] = e._element.contains(t.relatedTarget)), e._leave();
                        });
                }
            (this._hideModalHandler = () => {
                this._element && this.hide();
            }),
                N.on(this._element.closest(iE), iO, this._hideModalHandler),
                this._config.selector ? (this._config = { ...this._config, trigger: "manual", selector: "" }) : this._fixTitle();
        }
        _fixTitle() {
            let t = this._config.originalTitle;
            t && (this._element.getAttribute("aria-label") || this._element.textContent || this._element.setAttribute("aria-label", t), this._element.removeAttribute("title"));
        }
        _enter() {
            this._isShown() || this._isHovered
                ? (this._isHovered = !0)
                : ((this._isHovered = !0),
                  this._setTimeout(() => {
                      this._isHovered && this.show();
                  }, this._config.delay.show));
        }
        _leave() {
            this._isWithActiveTrigger() ||
                ((this._isHovered = !1),
                this._setTimeout(() => {
                    this._isHovered || this.hide();
                }, this._config.delay.hide));
        }
        _setTimeout(t, e) {
            clearTimeout(this._timeout), (this._timeout = setTimeout(t, e));
        }
        _isWithActiveTrigger() {
            return Object.values(this._activeTrigger).includes(!0);
        }
        _getConfig(t) {
            let e = H.getDataAttributes(this._element);
            for (let i of Object.keys(e)) iP.has(i) && delete e[i];
            return (t = { ...e, ...("object" == typeof t && t ? t : {}) }), (t = this._mergeConfigObj(t)), (t = this._configAfterMerge(t)), this._typeCheckConfig(t), t;
        }
        _configAfterMerge(t) {
            return (
                (t.container = !1 === t.container ? document.body : o(t.container)),
                "number" == typeof t.delay && (t.delay = { show: t.delay, hide: t.delay }),
                (t.originalTitle = this._element.getAttribute("title") || ""),
                (t.title = this._resolvePossibleFunction(t.title) || t.originalTitle),
                "number" == typeof t.title && (t.title = t.title.toString()),
                "number" == typeof t.content && (t.content = t.content.toString()),
                t
            );
        }
        _getDelegateConfig() {
            let t = {};
            for (let e in this._config) this.constructor.Default[e] !== this._config[e] && (t[e] = this._config[e]);
            return t;
        }
        _disposePopper() {
            this._popper && (this._popper.destroy(), (this._popper = null));
        }
        static jQueryInterface(t) {
            return this.each(function () {
                let e = i3.getOrCreateInstance(this, t);
                if ("string" == typeof t) {
                    if (void 0 === e[t]) throw TypeError(`No method named "${t}"`);
                    e[t]();
                }
            });
        }
    }
    m(i3);
    let iI = {
            ...i3.Default,
            placement: "right",
            offset: [0, 8],
            trigger: "click",
            content: "",
            template: '<div class="popover" role="tooltip"><div class="popover-arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>',
        },
        iN = { ...i3.DefaultType, content: "(null|string|element|function)" };
    class i9 extends i3 {
        static get Default() {
            return iI;
        }
        static get DefaultType() {
            return iN;
        }
        static get NAME() {
            return "popover";
        }
        _isWithContent() {
            return this._getTitle() || this._getContent();
        }
        _getContentForTemplate() {
            return { ".popover-header": this._getTitle(), ".popover-body": this._getContent() };
        }
        _getContent() {
            return this._resolvePossibleFunction(this._config.content);
        }
        static jQueryInterface(t) {
            return this.each(function () {
                let e = i9.getOrCreateInstance(this, t);
                if ("string" == typeof t) {
                    if (void 0 === e[t]) throw TypeError(`No method named "${t}"`);
                    e[t]();
                }
            });
        }
    }
    m(i9);
    let i1 = "click.bs.scrollspy",
        iM = "active",
        i7 = "[href]",
        ij = { offset: null, rootMargin: "0px 0px -25%", smoothScroll: !1, target: null },
        iF = { offset: "(number|null)", rootMargin: "string", smoothScroll: "boolean", target: "element" };
    class iB extends X {
        constructor(t, e) {
            super(t, e),
                (this._targetLinks = new Map()),
                (this._observableSections = new Map()),
                (this._rootElement = "visible" === getComputedStyle(this._element).overflowY ? null : this._element),
                (this._activeTarget = null),
                (this._observer = null),
                (this._previousScrollData = { visibleEntryTop: 0, parentScrollTop: 0 }),
                this.refresh();
        }
        static get Default() {
            return ij;
        }
        static get DefaultType() {
            return iF;
        }
        static get NAME() {
            return "scrollspy";
        }
        refresh() {
            for (let t of (this._initializeTargetsAndObservables(), this._maybeEnableSmoothScroll(), this._observer ? this._observer.disconnect() : (this._observer = this._getNewObserver()), this._observableSections.values()))
                this._observer.observe(t);
        }
        dispose() {
            this._observer.disconnect(), super.dispose();
        }
        _configAfterMerge(t) {
            return (t.target = o(t.target) || document.body), t;
        }
        _maybeEnableSmoothScroll() {
            this._config.smoothScroll &&
                (N.off(this._config.target, i1),
                N.on(this._config.target, i1, i7, (t) => {
                    let e = this._observableSections.get(t.target.hash);
                    if (e) {
                        t.preventDefault();
                        let i = this._rootElement || window,
                            s = e.offsetTop - this._element.offsetTop;
                        if (i.scrollTo) return void i.scrollTo({ top: s });
                        i.scrollTop = s;
                    }
                }));
        }
        _getNewObserver() {
            let t = { root: this._rootElement, threshold: [0.1, 0.5, 1], rootMargin: this._getRootMargin() };
            return new IntersectionObserver((t) => this._observerCallback(t), t);
        }
        _observerCallback(t) {
            let e = (t) => this._targetLinks.get(`#${t.target.id}`),
                i = (t) => {
                    (this._previousScrollData.visibleEntryTop = t.target.offsetTop), this._process(e(t));
                },
                s = (this._rootElement || document.documentElement).scrollTop,
                n = s >= this._previousScrollData.parentScrollTop;
            for (let r of ((this._previousScrollData.parentScrollTop = s), t)) {
                if (!r.isIntersecting) {
                    (this._activeTarget = null), this._clearActiveClass(e(r));
                    continue;
                }
                let o = r.target.offsetTop >= this._previousScrollData.visibleEntryTop;
                if (n && o) {
                    if ((i(r), !s)) return;
                } else n || o || i(r);
            }
        }
        _getRootMargin() {
            return this._config.offset ? `${this._config.offset}px 0px -30%` : this._config.rootMargin;
        }
        _initializeTargetsAndObservables() {
            (this._targetLinks = new Map()), (this._observableSections = new Map());
            let t = Q.find(i7, this._config.target);
            for (let e of t) {
                if (!e.hash || l(e)) continue;
                let i = Q.findOne(e.hash, this._element);
                a(i) && (this._targetLinks.set(e.hash, e), this._observableSections.set(e.hash, i));
            }
        }
        _process(t) {
            this._activeTarget !== t && (this._clearActiveClass(this._config.target), (this._activeTarget = t), t.classList.add(iM), this._activateParents(t), N.trigger(this._element, "activate.bs.scrollspy", { relatedTarget: t }));
        }
        _activateParents(t) {
            if (t.classList.contains("dropdown-item")) Q.findOne(".dropdown-toggle", t.closest(".dropdown")).classList.add(iM);
            else for (let e of Q.parents(t, ".nav, .list-group")) for (let i of Q.prev(e, ".nav-link, .nav-item > .nav-link, .list-group-item")) i.classList.add(iM);
        }
        _clearActiveClass(t) {
            t.classList.remove(iM);
            let e = Q.find("[href].active", t);
            for (let i of e) i.classList.remove(iM);
        }
        static jQueryInterface(t) {
            return this.each(function () {
                let e = iB.getOrCreateInstance(this, t);
                if ("string" == typeof t) {
                    if (void 0 === e[t] || t.startsWith("_") || "constructor" === t) throw TypeError(`No method named "${t}"`);
                    e[t]();
                }
            });
        }
    }
    N.on(window, "load.bs.scrollspy.data-api", () => {
        for (let t of Q.find('[data-bs-spy="scroll"]')) iB.getOrCreateInstance(t);
    }),
        m(iB);
    let iH = "ArrowRight",
        iW = "ArrowDown",
        iX = "active",
        iq = "fade",
        iY = "show",
        iV = '[data-bs-toggle="tab"], [data-bs-toggle="pill"], [data-bs-toggle="list"]',
        i4 = `.nav-link:not(.dropdown-toggle), .list-group-item:not(.dropdown-toggle), [role="tab"]:not(.dropdown-toggle), ${iV}`;
    class i2 extends X {
        constructor(t) {
            super(t),
                (this._parent = this._element.closest('.list-group, .nav, [role="tablist"]')),
                this._parent && (this._setInitialAttributes(this._parent, this._getChildren()), N.on(this._element, "keydown.bs.tab", (t) => this._keydown(t)));
        }
        static get NAME() {
            return "tab";
        }
        show() {
            let t = this._element;
            if (this._elemIsActive(t)) return;
            let e = this._getActiveElem(),
                i = e ? N.trigger(e, "hide.bs.tab", { relatedTarget: t }) : null;
            N.trigger(t, "show.bs.tab", { relatedTarget: e }).defaultPrevented || (i && i.defaultPrevented) || (this._deactivate(e, t), this._activate(t, e));
        }
        _activate(t, e) {
            if (!t) return;
            t.classList.add(iX), this._activate(s(t));
            let i = t.classList.contains(iq);
            this._queueCallback(
                () => {
                    i && t.classList.add(iY),
                        "tab" === t.getAttribute("role") && (t.focus(), t.removeAttribute("tabindex"), t.setAttribute("aria-selected", !0), this._toggleDropDown(t, !0), N.trigger(t, "shown.bs.tab", { relatedTarget: e }));
                },
                t,
                i
            );
        }
        _deactivate(t, e) {
            if (!t) return;
            t.classList.remove(iX), t.blur(), this._deactivate(s(t));
            let i = t.classList.contains(iq);
            this._queueCallback(
                () => {
                    i && t.classList.remove(iY), "tab" === t.getAttribute("role") && (t.setAttribute("aria-selected", !1), t.setAttribute("tabindex", "-1"), this._toggleDropDown(t, !1), N.trigger(t, "hidden.bs.tab", { relatedTarget: e }));
                },
                t,
                i
            );
        }
        _keydown(t) {
            if (!["ArrowLeft", iH, "ArrowUp", iW].includes(t.key)) return;
            t.stopPropagation(), t.preventDefault();
            let e = [iH, iW].includes(t.key),
                i = _(
                    this._getChildren().filter((t) => !l(t)),
                    t.target,
                    e,
                    !0
                );
            i && i2.getOrCreateInstance(i).show();
        }
        _getChildren() {
            return Q.find(i4, this._parent);
        }
        _getActiveElem() {
            return this._getChildren().find((t) => this._elemIsActive(t)) || null;
        }
        _setInitialAttributes(t, e) {
            for (let i of (this._setAttributeIfNotExists(t, "role", "tablist"), e)) this._setInitialAttributesOnChild(i);
        }
        _setInitialAttributesOnChild(t) {
            t = this._getInnerElement(t);
            let e = this._elemIsActive(t),
                i = this._getOuterElement(t);
            t.setAttribute("aria-selected", e),
                i !== t && this._setAttributeIfNotExists(i, "role", "presentation"),
                e || t.setAttribute("tabindex", "-1"),
                this._setAttributeIfNotExists(t, "role", "tab"),
                this._setInitialAttributesOnTargetPanel(t);
        }
        _setInitialAttributesOnTargetPanel(t) {
            let e = s(t);
            e && (this._setAttributeIfNotExists(e, "role", "tabpanel"), t.id && this._setAttributeIfNotExists(e, "aria-labelledby", `#${t.id}`));
        }
        _toggleDropDown(t, e) {
            let i = this._getOuterElement(t);
            if (!i.classList.contains("dropdown")) return;
            let s = (t, s) => {
                let n = Q.findOne(t, i);
                n && n.classList.toggle(s, e);
            };
            s(".dropdown-toggle", iX), s(".dropdown-menu", iY), s(".dropdown-item", iX), i.setAttribute("aria-expanded", e);
        }
        _setAttributeIfNotExists(t, e, i) {
            t.hasAttribute(e) || t.setAttribute(e, i);
        }
        _elemIsActive(t) {
            return t.classList.contains(iX);
        }
        _getInnerElement(t) {
            return t.matches(i4) ? t : Q.findOne(i4, t);
        }
        _getOuterElement(t) {
            return t.closest(".nav-item, .list-group-item") || t;
        }
        static jQueryInterface(t) {
            return this.each(function () {
                let e = i2.getOrCreateInstance(this);
                if ("string" == typeof t) {
                    if (void 0 === e[t] || t.startsWith("_") || "constructor" === t) throw TypeError(`No method named "${t}"`);
                    e[t]();
                }
            });
        }
    }
    N.on(document, "click.bs.tab", iV, function (t) {
        ["A", "AREA"].includes(this.tagName) && t.preventDefault(), l(this) || i2.getOrCreateInstance(this).show();
    }),
        N.on(window, "load.bs.tab", () => {
            for (let t of Q.find('.active[data-bs-toggle="tab"], .active[data-bs-toggle="pill"], .active[data-bs-toggle="list"]')) i2.getOrCreateInstance(t);
        }),
        m(i2);
    let iU = "hide",
        i5 = "show",
        i6 = "showing",
        iQ = { animation: "boolean", autohide: "boolean", delay: "number" },
        iZ = { animation: !0, autohide: !0, delay: 5e3 };
    class iG extends X {
        constructor(t, e) {
            super(t, e), (this._timeout = null), (this._hasMouseInteraction = !1), (this._hasKeyboardInteraction = !1), this._setListeners();
        }
        static get Default() {
            return iZ;
        }
        static get DefaultType() {
            return iQ;
        }
        static get NAME() {
            return "toast";
        }
        show() {
            N.trigger(this._element, "show.bs.toast").defaultPrevented ||
                (this._clearTimeout(),
                this._config.animation && this._element.classList.add("fade"),
                this._element.classList.remove(iU),
                p(this._element),
                this._element.classList.add(i5, i6),
                this._queueCallback(
                    () => {
                        this._element.classList.remove(i6), N.trigger(this._element, "shown.bs.toast"), this._maybeScheduleHide();
                    },
                    this._element,
                    this._config.animation
                ));
        }
        hide() {
            this.isShown() &&
                (N.trigger(this._element, "hide.bs.toast").defaultPrevented ||
                    (this._element.classList.add(i6),
                    this._queueCallback(
                        () => {
                            this._element.classList.add(iU), this._element.classList.remove(i6, i5), N.trigger(this._element, "hidden.bs.toast");
                        },
                        this._element,
                        this._config.animation
                    )));
        }
        dispose() {
            this._clearTimeout(), this.isShown() && this._element.classList.remove(i5), super.dispose();
        }
        isShown() {
            return this._element.classList.contains(i5);
        }
        _maybeScheduleHide() {
            this._config.autohide &&
                (this._hasMouseInteraction ||
                    this._hasKeyboardInteraction ||
                    (this._timeout = setTimeout(() => {
                        this.hide();
                    }, this._config.delay)));
        }
        _onInteraction(t, e) {
            switch (t.type) {
                case "mouseover":
                case "mouseout":
                    this._hasMouseInteraction = e;
                    break;
                case "focusin":
                case "focusout":
                    this._hasKeyboardInteraction = e;
            }
            if (e) return void this._clearTimeout();
            let i = t.relatedTarget;
            this._element === i || this._element.contains(i) || this._maybeScheduleHide();
        }
        _setListeners() {
            N.on(this._element, "mouseover.bs.toast", (t) => this._onInteraction(t, !0)),
                N.on(this._element, "mouseout.bs.toast", (t) => this._onInteraction(t, !1)),
                N.on(this._element, "focusin.bs.toast", (t) => this._onInteraction(t, !0)),
                N.on(this._element, "focusout.bs.toast", (t) => this._onInteraction(t, !1));
        }
        _clearTimeout() {
            clearTimeout(this._timeout), (this._timeout = null);
        }
        static jQueryInterface(t) {
            return this.each(function () {
                let e = iG.getOrCreateInstance(this, t);
                if ("string" == typeof t) {
                    if (void 0 === e[t]) throw TypeError(`No method named "${t}"`);
                    e[t](this);
                }
            });
        }
    }
    return q(iG), m(iG), { Alert: Y, Button: U, Carousel: th, Collapse: tg, Dropdown: eH, Modal: il, Offcanvas: iv, Popover: i9, ScrollSpy: iB, Tab: i2, Toast: iG, Tooltip: i3 };
}),
    (function (t, e) {
        "object" == typeof exports && "object" == typeof module ? (module.exports = e()) : "function" == typeof define && define.amd ? define([], e) : "object" == typeof exports ? (exports.sal = e()) : (t.sal = e());
    })(this, function () {
        return (() => {
            "use strict";
            var t = {
                    d(e, i) {
                        for (var s in i) t.o(i, s) && !t.o(e, s) && Object.defineProperty(e, s, { enumerable: !0, get: i[s] });
                    },
                    o: (t, e) => Object.prototype.hasOwnProperty.call(t, e),
                },
                e = {};
            function i(t, e) {
                var i = Object.keys(t);
                if (Object.getOwnPropertySymbols) {
                    var s = Object.getOwnPropertySymbols(t);
                    e &&
                        (s = s.filter(function (e) {
                            return Object.getOwnPropertyDescriptor(t, e).enumerable;
                        })),
                        i.push.apply(i, s);
                }
                return i;
            }
            function s(t) {
                for (var e = 1; e < arguments.length; e++) {
                    var s = null != arguments[e] ? arguments[e] : {};
                    e % 2
                        ? i(Object(s), !0).forEach(function (e) {
                              n(t, e, s[e]);
                          })
                        : Object.getOwnPropertyDescriptors
                        ? Object.defineProperties(t, Object.getOwnPropertyDescriptors(s))
                        : i(Object(s)).forEach(function (e) {
                              Object.defineProperty(t, e, Object.getOwnPropertyDescriptor(s, e));
                          });
                }
                return t;
            }
            function n(t, e, i) {
                return e in t ? Object.defineProperty(t, e, { value: i, enumerable: !0, configurable: !0, writable: !0 }) : (t[e] = i), t;
            }
            t.d(e, { default: () => b });
            var r = {
                    root: null,
                    rootMargin: "0% 50%",
                    threshold: 0.5,
                    animateClassName: "sal-animate",
                    disabledClassName: "sal-disabled",
                    enterEventName: "sal:in",
                    exitEventName: "sal:out",
                    selector: "[data-sal]",
                    once: !0,
                    disabled: !1,
                },
                o = [],
                a = null,
                l = function (t) {
                    t && t !== r && (r = s(s({}, r), t));
                },
                c = function (t) {
                    t.classList.remove(r.animateClassName);
                },
                u = function (t, e) {
                    var i = new CustomEvent(t, { bubbles: !0, detail: e });
                    e.target.dispatchEvent(i);
                },
                p = function () {
                    document.body.classList.add(r.disabledClassName);
                },
                d = function () {
                    a.disconnect(), (a = null);
                },
                f = function (t, e) {
                    t.forEach(function (t) {
                        var i,
                            s,
                            n = t.target,
                            o = void 0 !== n.dataset.salRepeat,
                            a = void 0 !== n.dataset.salOnce,
                            l = o || !(a || r.once);
                        t.intersectionRatio >= r.threshold ? ((i = t).target.classList.add(r.animateClassName), u(r.enterEventName, i), l || e.unobserve(n)) : l && (c((s = t).target), u(r.exitEventName, s));
                    });
                },
                g = function () {
                    var t = [].filter.call(document.querySelectorAll(r.selector), function (t) {
                        var e;
                        return (e = t), r.animateClassName, !e.classList.contains(r.animateClassName);
                    });
                    return (
                        t.forEach(function (t) {
                            return a.observe(t);
                        }),
                        t
                    );
                },
                m = function () {
                    p(), d();
                },
                v = function () {
                    document.body.classList.remove(r.disabledClassName), (a = new IntersectionObserver(f, { root: r.root, rootMargin: r.rootMargin, threshold: r.threshold })), (o = g());
                },
                y = function () {
                    var t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {};
                    d(), Array.from(document.querySelectorAll(r.selector)).forEach(c), l(t), v();
                },
                _ = function () {
                    var t = g();
                    o.push(t);
                };
            let b = function () {
                var t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : r;
                if ((l(t), "undefined" == typeof window)) return console.warn("Sal was not initialised! Probably it is used in SSR."), { elements: o, disable: m, enable: v, reset: y, update: _ };
                if (!window.IntersectionObserver) throw (p(), Error("Your browser does not support IntersectionObserver!\nGet a polyfill from here:\nhttps://github.com/w3c/IntersectionObserver/tree/master/polyfill"));
                return r.disabled || ("function" == typeof r.disabled && r.disabled()) ? p() : v(), { elements: o, disable: m, enable: v, reset: y, update: _ };
            };
            return e.default;
        })();
    }),
    (function (t, e, i, s) {
        function n(e, i) {
            (this.settings = null),
                (this.options = t.extend({}, n.Defaults, i)),
                (this.$element = t(e)),
                (this._handlers = {}),
                (this._plugins = {}),
                (this._supress = {}),
                (this._current = null),
                (this._speed = null),
                (this._coordinates = []),
                (this._breakpoint = null),
                (this._width = null),
                (this._items = []),
                (this._clones = []),
                (this._mergers = []),
                (this._widths = []),
                (this._invalidated = {}),
                (this._pipe = []),
                (this._drag = { time: null, target: null, pointer: null, stage: { start: null, current: null }, direction: null }),
                (this._states = { current: {}, tags: { initializing: ["busy"], animating: ["busy"], dragging: ["interacting"] } }),
                t.each(
                    ["onResize", "onThrottledResize"],
                    t.proxy(function (e, i) {
                        this._handlers[i] = t.proxy(this[i], this);
                    }, this)
                ),
                t.each(
                    n.Plugins,
                    t.proxy(function (t, e) {
                        this._plugins[t.charAt(0).toLowerCase() + t.slice(1)] = new e(this);
                    }, this)
                ),
                t.each(
                    n.Workers,
                    t.proxy(function (e, i) {
                        this._pipe.push({ filter: i.filter, run: t.proxy(i.run, this) });
                    }, this)
                ),
                this.setup(),
                this.initialize();
        }
        (n.Defaults = {
            items: 3,
            loop: !1,
            center: !1,
            rewind: !1,
            checkVisibility: !0,
            mouseDrag: !0,
            touchDrag: !0,
            pullDrag: !0,
            freeDrag: !1,
            margin: 0,
            stagePadding: 0,
            merge: !1,
            mergeFit: !0,
            autoWidth: !1,
            startPosition: 0,
            rtl: !1,
            smartSpeed: 250,
            fluidSpeed: !1,
            dragEndSpeed: !1,
            responsive: {},
            responsiveRefreshRate: 200,
            responsiveBaseElement: e,
            fallbackEasing: "swing",
            slideTransition: "",
            info: !1,
            nestedItemSelector: !1,
            itemElement: "div",
            stageElement: "div",
            refreshClass: "owl-refresh",
            loadedClass: "owl-loaded",
            loadingClass: "owl-loading",
            rtlClass: "owl-rtl",
            responsiveClass: "owl-responsive",
            dragClass: "owl-drag",
            itemClass: "owl-item",
            stageClass: "owl-stage",
            stageOuterClass: "owl-stage-outer",
            grabClass: "owl-grab",
        }),
            (n.Width = { Default: "default", Inner: "inner", Outer: "outer" }),
            (n.Type = { Event: "event", State: "state" }),
            (n.Plugins = {}),
            (n.Workers = [
                {
                    filter: ["width", "settings"],
                    run: function () {
                        this._width = this.$element.width();
                    },
                },
                {
                    filter: ["width", "items", "settings"],
                    run: function (t) {
                        t.current = this._items && this._items[this.relative(this._current)];
                    },
                },
                {
                    filter: ["items", "settings"],
                    run: function () {
                        this.$stage.children(".cloned").remove();
                    },
                },
                {
                    filter: ["width", "items", "settings"],
                    run: function (t) {
                        var e = this.settings.margin || "",
                            i = !this.settings.autoWidth,
                            s = this.settings.rtl,
                            n = { width: "auto", "margin-left": s ? e : "", "margin-right": s ? "" : e };
                        i || this.$stage.children().css(n), (t.css = n);
                    },
                },
                {
                    filter: ["width", "items", "settings"],
                    run: function (t) {
                        var e = (this.width() / this.settings.items).toFixed(3) - this.settings.margin,
                            i = null,
                            s = this._items.length,
                            n = !this.settings.autoWidth,
                            r = [];
                        for (t.items = { merge: !1, width: e }; s--; )
                            (i = this._mergers[s]), (i = (this.settings.mergeFit && Math.min(i, this.settings.items)) || i), (t.items.merge = i > 1 || t.items.merge), (r[s] = n ? e * i : this._items[s].width());
                        this._widths = r;
                    },
                },
                {
                    filter: ["items", "settings"],
                    run: function () {
                        var e = [],
                            i = this._items,
                            s = this.settings,
                            n = Math.max(2 * s.items, 4),
                            r = 2 * Math.ceil(i.length / 2),
                            o = s.loop && i.length ? (s.rewind ? n : Math.max(n, r)) : 0,
                            a = "",
                            l = "";
                        for (o /= 2; o > 0; )
                            e.push(this.normalize(e.length / 2, !0)), (a += i[e[e.length - 1]][0].outerHTML), e.push(this.normalize(i.length - 1 - (e.length - 1) / 2, !0)), (l = i[e[e.length - 1]][0].outerHTML + l), (o -= 1);
                        (this._clones = e), t(a).addClass("cloned").appendTo(this.$stage), t(l).addClass("cloned").prependTo(this.$stage);
                    },
                },
                {
                    filter: ["width", "items", "settings"],
                    run: function () {
                        for (var t = this.settings.rtl ? 1 : -1, e = this._clones.length + this._items.length, i = -1, s = 0, n = 0, r = []; ++i < e; )
                            r.push((s = r[i - 1] || 0) + (n = this._widths[this.relative(i)] + this.settings.margin) * t);
                        this._coordinates = r;
                    },
                },
                {
                    filter: ["width", "items", "settings"],
                    run: function () {
                        var t = this.settings.stagePadding,
                            e = this._coordinates,
                            i = { width: Math.ceil(Math.abs(e[e.length - 1])) + 2 * t, "padding-left": t || "", "padding-right": t || "" };
                        this.$stage.css(i);
                    },
                },
                {
                    filter: ["width", "items", "settings"],
                    run: function (t) {
                        var e = this._coordinates.length,
                            i = !this.settings.autoWidth,
                            s = this.$stage.children();
                        if (i && t.items.merge) for (; e--; ) (t.css.width = this._widths[this.relative(e)]), s.eq(e).css(t.css);
                        else i && ((t.css.width = t.items.width), s.css(t.css));
                    },
                },
                {
                    filter: ["items"],
                    run: function () {
                        this._coordinates.length < 1 && this.$stage.removeAttr("style");
                    },
                },
                {
                    filter: ["width", "items", "settings"],
                    run: function (t) {
                        (t.current = t.current ? this.$stage.children().index(t.current) : 0), (t.current = Math.max(this.minimum(), Math.min(this.maximum(), t.current))), this.reset(t.current);
                    },
                },
                {
                    filter: ["position"],
                    run: function () {
                        this.animate(this.coordinates(this._current));
                    },
                },
                {
                    filter: ["width", "position", "items", "settings"],
                    run: function () {
                        var t,
                            e,
                            i,
                            s,
                            n = this.settings.rtl ? 1 : -1,
                            r = 2 * this.settings.stagePadding,
                            o = this.coordinates(this.current()) + r,
                            a = o + this.width() * n,
                            l = [];
                        for (i = 0, s = this._coordinates.length; i < s; i++)
                            (t = this._coordinates[i - 1] || 0), (e = Math.abs(this._coordinates[i]) + r * n), ((this.op(t, "<=", o) && this.op(t, ">", a)) || (this.op(e, "<", o) && this.op(e, ">", a))) && l.push(i);
                        this.$stage.children(".active").removeClass("active"),
                            this.$stage.children(":eq(" + l.join("), :eq(") + ")").addClass("active"),
                            this.$stage.children(".center").removeClass("center"),
                            this.settings.center && this.$stage.children().eq(this.current()).addClass("center");
                    },
                },
            ]),
            (n.prototype.initializeStage = function () {
                (this.$stage = this.$element.find("." + this.settings.stageClass)),
                    this.$stage.length ||
                        (this.$element.addClass(this.options.loadingClass),
                        (this.$stage = t("<" + this.settings.stageElement + ">", { class: this.settings.stageClass }).wrap(t("<div/>", { class: this.settings.stageOuterClass }))),
                        this.$element.append(this.$stage.parent()));
            }),
            (n.prototype.initializeItems = function () {
                var e = this.$element.find(".owl-item");
                if (e.length)
                    return (
                        (this._items = e.get().map(function (e) {
                            return t(e);
                        })),
                        (this._mergers = this._items.map(function () {
                            return 1;
                        })),
                        void this.refresh()
                    );
                this.replace(this.$element.children().not(this.$stage.parent())), this.isVisible() ? this.refresh() : this.invalidate("width"), this.$element.removeClass(this.options.loadingClass).addClass(this.options.loadedClass);
            }),
            (n.prototype.initialize = function () {
                if ((this.enter("initializing"), this.trigger("initialize"), this.$element.toggleClass(this.settings.rtlClass, this.settings.rtl), this.settings.autoWidth && !this.is("pre-loading"))) {
                    var t, e, i;
                    (t = this.$element.find("img")), (e = this.settings.nestedItemSelector ? "." + this.settings.nestedItemSelector : s), (i = this.$element.children(e).width()), t.length && i <= 0 && this.preloadAutoWidthImages(t);
                }
                this.initializeStage(), this.initializeItems(), this.registerEventHandlers(), this.leave("initializing"), this.trigger("initialized");
            }),
            (n.prototype.isVisible = function () {
                return !this.settings.checkVisibility || this.$element.is(":visible");
            }),
            (n.prototype.setup = function () {
                var e = this.viewport(),
                    i = this.options.responsive,
                    s = -1,
                    n = null;
                i
                    ? (t.each(i, function (t) {
                          t <= e && t > s && (s = Number(t));
                      }),
                      "function" == typeof (n = t.extend({}, this.options, i[s])).stagePadding && (n.stagePadding = n.stagePadding()),
                      delete n.responsive,
                      n.responsiveClass && this.$element.attr("class", this.$element.attr("class").replace(RegExp("(" + this.options.responsiveClass + "-)\\S+\\s", "g"), "$1" + s)))
                    : (n = t.extend({}, this.options)),
                    this.trigger("change", { property: { name: "settings", value: n } }),
                    (this._breakpoint = s),
                    (this.settings = n),
                    this.invalidate("settings"),
                    this.trigger("changed", { property: { name: "settings", value: this.settings } });
            }),
            (n.prototype.optionsLogic = function () {
                this.settings.autoWidth && ((this.settings.stagePadding = !1), (this.settings.merge = !1));
            }),
            (n.prototype.prepare = function (e) {
                var i = this.trigger("prepare", { content: e });
                return (
                    i.data ||
                        (i.data = t("<" + this.settings.itemElement + "/>")
                            .addClass(this.options.itemClass)
                            .append(e)),
                    this.trigger("prepared", { content: i.data }),
                    i.data
                );
            }),
            (n.prototype.update = function () {
                for (
                    var e = 0,
                        i = this._pipe.length,
                        s = t.proxy(function (t) {
                            return this[t];
                        }, this._invalidated),
                        n = {};
                    e < i;

                )
                    (this._invalidated.all || t.grep(this._pipe[e].filter, s).length > 0) && this._pipe[e].run(n), e++;
                (this._invalidated = {}), this.is("valid") || this.enter("valid");
            }),
            (n.prototype.width = function (t) {
                switch ((t = t || n.Width.Default)) {
                    case n.Width.Inner:
                    case n.Width.Outer:
                        return this._width;
                    default:
                        return this._width - 2 * this.settings.stagePadding + this.settings.margin;
                }
            }),
            (n.prototype.refresh = function () {
                this.enter("refreshing"),
                    this.trigger("refresh"),
                    this.setup(),
                    this.optionsLogic(),
                    this.$element.addClass(this.options.refreshClass),
                    this.update(),
                    this.$element.removeClass(this.options.refreshClass),
                    this.leave("refreshing"),
                    this.trigger("refreshed");
            }),
            (n.prototype.onThrottledResize = function () {
                e.clearTimeout(this.resizeTimer), (this.resizeTimer = e.setTimeout(this._handlers.onResize, this.settings.responsiveRefreshRate));
            }),
            (n.prototype.onResize = function () {
                return (
                    !!this._items.length &&
                    this._width !== this.$element.width() &&
                    !!this.isVisible() &&
                    (this.enter("resizing"), this.trigger("resize").isDefaultPrevented() ? (this.leave("resizing"), !1) : (this.invalidate("width"), this.refresh(), this.leave("resizing"), void this.trigger("resized")))
                );
            }),
            (n.prototype.registerEventHandlers = function () {
                t.support.transition && this.$stage.on(t.support.transition.end + ".owl.core", t.proxy(this.onTransitionEnd, this)),
                    !1 !== this.settings.responsive && this.on(e, "resize", this._handlers.onThrottledResize),
                    this.settings.mouseDrag &&
                        (this.$element.addClass(this.options.dragClass),
                        this.$stage.on("mousedown.owl.core", t.proxy(this.onDragStart, this)),
                        this.$stage.on("dragstart.owl.core selectstart.owl.core", function () {
                            return !1;
                        })),
                    this.settings.touchDrag && (this.$stage.on("touchstart.owl.core", t.proxy(this.onDragStart, this)), this.$stage.on("touchcancel.owl.core", t.proxy(this.onDragEnd, this)));
            }),
            (n.prototype.onDragStart = function (e) {
                var s = null;
                3 !== e.which &&
                    (t.support.transform
                        ? (s = {
                              x: (s = this.$stage
                                  .css("transform")
                                  .replace(/.*\(|\)| /g, "")
                                  .split(","))[16 === s.length ? 12 : 4],
                              y: s[16 === s.length ? 13 : 5],
                          })
                        : ((s = this.$stage.position()), (s = { x: this.settings.rtl ? s.left + this.$stage.width() - this.width() + this.settings.margin : s.left, y: s.top })),
                    this.is("animating") && (t.support.transform ? this.animate(s.x) : this.$stage.stop(), this.invalidate("position")),
                    this.$element.toggleClass(this.options.grabClass, "mousedown" === e.type),
                    this.speed(0),
                    (this._drag.time = new Date().getTime()),
                    (this._drag.target = t(e.target)),
                    (this._drag.stage.start = s),
                    (this._drag.stage.current = s),
                    (this._drag.pointer = this.pointer(e)),
                    t(i).on("mouseup.owl.core touchend.owl.core", t.proxy(this.onDragEnd, this)),
                    t(i).one(
                        "mousemove.owl.core touchmove.owl.core",
                        t.proxy(function (e) {
                            var s = this.difference(this._drag.pointer, this.pointer(e));
                            t(i).on("mousemove.owl.core touchmove.owl.core", t.proxy(this.onDragMove, this)), (Math.abs(s.x) < Math.abs(s.y) && this.is("valid")) || (e.preventDefault(), this.enter("dragging"), this.trigger("drag"));
                        }, this)
                    ));
            }),
            (n.prototype.onDragMove = function (t) {
                var e = null,
                    i = null,
                    s = null,
                    n = this.difference(this._drag.pointer, this.pointer(t)),
                    r = this.difference(this._drag.stage.start, n);
                this.is("dragging") &&
                    (t.preventDefault(),
                    this.settings.loop
                        ? ((e = this.coordinates(this.minimum())), (i = this.coordinates(this.maximum() + 1) - e), (r.x = ((((r.x - e) % i) + i) % i) + e))
                        : ((e = this.settings.rtl ? this.coordinates(this.maximum()) : this.coordinates(this.minimum())),
                          (i = this.settings.rtl ? this.coordinates(this.minimum()) : this.coordinates(this.maximum())),
                          (s = this.settings.pullDrag ? (-1 * n.x) / 5 : 0),
                          (r.x = Math.max(Math.min(r.x, e + s), i + s))),
                    (this._drag.stage.current = r),
                    this.animate(r.x));
            }),
            (n.prototype.onDragEnd = function (e) {
                var s = this.difference(this._drag.pointer, this.pointer(e)),
                    n = this._drag.stage.current,
                    r = (s.x > 0) ^ this.settings.rtl ? "left" : "right";
                t(i).off(".owl.core"),
                    this.$element.removeClass(this.options.grabClass),
                    ((0 !== s.x && this.is("dragging")) || !this.is("valid")) &&
                        (this.speed(this.settings.dragEndSpeed || this.settings.smartSpeed),
                        this.current(this.closest(n.x, 0 !== s.x ? r : this._drag.direction)),
                        this.invalidate("position"),
                        this.update(),
                        (this._drag.direction = r),
                        (Math.abs(s.x) > 3 || new Date().getTime() - this._drag.time > 300) &&
                            this._drag.target.one("click.owl.core", function () {
                                return !1;
                            })),
                    this.is("dragging") && (this.leave("dragging"), this.trigger("dragged"));
            }),
            (n.prototype.closest = function (e, i) {
                var n = -1,
                    r = this.width(),
                    o = this.coordinates();
                return (
                    this.settings.freeDrag ||
                        t.each(
                            o,
                            t.proxy(function (t, a) {
                                return (
                                    "left" === i && e > a - 30 && e < a + 30
                                        ? (n = t)
                                        : "right" === i && e > a - r - 30 && e < a - r + 30
                                        ? (n = t + 1)
                                        : this.op(e, "<", a) && this.op(e, ">", o[t + 1] !== s ? o[t + 1] : a - r) && (n = "left" === i ? t + 1 : t),
                                    -1 === n
                                );
                            }, this)
                        ),
                    this.settings.loop || (this.op(e, ">", o[this.minimum()]) ? (n = e = this.minimum()) : this.op(e, "<", o[this.maximum()]) && (n = e = this.maximum())),
                    n
                );
            }),
            (n.prototype.animate = function (e) {
                var i = this.speed() > 0;
                this.is("animating") && this.onTransitionEnd(),
                    i && (this.enter("animating"), this.trigger("translate")),
                    t.support.transform3d && t.support.transition
                        ? this.$stage.css({ transform: "translate3d(" + e + "px,0px,0px)", transition: this.speed() / 1e3 + "s" + (this.settings.slideTransition ? " " + this.settings.slideTransition : "") })
                        : i
                        ? this.$stage.animate({ left: e + "px" }, this.speed(), this.settings.fallbackEasing, t.proxy(this.onTransitionEnd, this))
                        : this.$stage.css({ left: e + "px" });
            }),
            (n.prototype.is = function (t) {
                return this._states.current[t] && this._states.current[t] > 0;
            }),
            (n.prototype.current = function (t) {
                if (t === s) return this._current;
                if (0 === this._items.length) return s;
                if (((t = this.normalize(t)), this._current !== t)) {
                    var e = this.trigger("change", { property: { name: "position", value: t } });
                    e.data !== s && (t = this.normalize(e.data)), (this._current = t), this.invalidate("position"), this.trigger("changed", { property: { name: "position", value: this._current } });
                }
                return this._current;
            }),
            (n.prototype.invalidate = function (e) {
                return (
                    "string" === t.type(e) && ((this._invalidated[e] = !0), this.is("valid") && this.leave("valid")),
                    t.map(this._invalidated, function (t, e) {
                        return e;
                    })
                );
            }),
            (n.prototype.reset = function (t) {
                (t = this.normalize(t)) !== s && ((this._speed = 0), (this._current = t), this.suppress(["translate", "translated"]), this.animate(this.coordinates(t)), this.release(["translate", "translated"]));
            }),
            (n.prototype.normalize = function (t, e) {
                var i = this._items.length,
                    n = e ? 0 : this._clones.length;
                return !this.isNumeric(t) || i < 1 ? (t = s) : (t < 0 || t >= i + n) && (t = ((((t - n / 2) % i) + i) % i) + n / 2), t;
            }),
            (n.prototype.relative = function (t) {
                return (t -= this._clones.length / 2), this.normalize(t, !0);
            }),
            (n.prototype.maximum = function (t) {
                var e,
                    i,
                    s,
                    n = this.settings,
                    r = this._coordinates.length;
                if (n.loop) r = this._clones.length / 2 + this._items.length - 1;
                else if (n.autoWidth || n.merge) {
                    if ((e = this._items.length)) for (i = this._items[--e].width(), s = this.$element.width(); e-- && !((i += this._items[e].width() + this.settings.margin) > s); );
                    r = e + 1;
                } else r = n.center ? this._items.length - 1 : this._items.length - n.items;
                return t && (r -= this._clones.length / 2), Math.max(r, 0);
            }),
            (n.prototype.minimum = function (t) {
                return t ? 0 : this._clones.length / 2;
            }),
            (n.prototype.items = function (t) {
                return t === s ? this._items.slice() : ((t = this.normalize(t, !0)), this._items[t]);
            }),
            (n.prototype.mergers = function (t) {
                return t === s ? this._mergers.slice() : ((t = this.normalize(t, !0)), this._mergers[t]);
            }),
            (n.prototype.clones = function (e) {
                var i = this._clones.length / 2,
                    n = i + this._items.length,
                    r = function (t) {
                        return t % 2 == 0 ? n + t / 2 : i - (t + 1) / 2;
                    };
                return e === s
                    ? t.map(this._clones, function (t, e) {
                          return r(e);
                      })
                    : t.map(this._clones, function (t, i) {
                          return t === e ? r(i) : null;
                      });
            }),
            (n.prototype.speed = function (t) {
                return t !== s && (this._speed = t), this._speed;
            }),
            (n.prototype.coordinates = function (e) {
                var i,
                    n = 1,
                    r = e - 1;
                return e === s
                    ? t.map(
                          this._coordinates,
                          t.proxy(function (t, e) {
                              return this.coordinates(e);
                          }, this)
                      )
                    : (this.settings.center ? (this.settings.rtl && ((n = -1), (r = e + 1)), (i = this._coordinates[e]), (i += ((this.width() - i + (this._coordinates[r] || 0)) / 2) * n)) : (i = this._coordinates[r] || 0),
                      (i = Math.ceil(i)));
            }),
            (n.prototype.duration = function (t, e, i) {
                return 0 === i ? 0 : Math.min(Math.max(Math.abs(e - t), 1), 6) * Math.abs(i || this.settings.smartSpeed);
            }),
            (n.prototype.to = function (t, e) {
                var i = this.current(),
                    s = null,
                    n = t - this.relative(i),
                    r = (n > 0) - (n < 0),
                    o = this._items.length,
                    a = this.minimum(),
                    l = this.maximum();
                this.settings.loop
                    ? (!this.settings.rewind && Math.abs(n) > o / 2 && (n += -1 * r * o), (s = (((((t = i + n) - a) % o) + o) % o) + a) !== t && s - n <= l && s - n > 0 && ((i = s - n), (t = s), this.reset(i)))
                    : this.settings.rewind
                    ? ((l += 1), (t = ((t % l) + l) % l))
                    : (t = Math.max(a, Math.min(l, t))),
                    this.speed(this.duration(i, t, e)),
                    this.current(t),
                    this.isVisible() && this.update();
            }),
            (n.prototype.next = function (t) {
                (t = t || !1), this.to(this.relative(this.current()) + 1, t);
            }),
            (n.prototype.prev = function (t) {
                (t = t || !1), this.to(this.relative(this.current()) - 1, t);
            }),
            (n.prototype.onTransitionEnd = function (t) {
                if (t !== s && (t.stopPropagation(), (t.target || t.srcElement || t.originalTarget) !== this.$stage.get(0))) return !1;
                this.leave("animating"), this.trigger("translated");
            }),
            (n.prototype.viewport = function () {
                var s;
                return (
                    this.options.responsiveBaseElement !== e
                        ? (s = t(this.options.responsiveBaseElement).width())
                        : e.innerWidth
                        ? (s = e.innerWidth)
                        : i.documentElement && i.documentElement.clientWidth
                        ? (s = i.documentElement.clientWidth)
                        : console.warn("Can not detect viewport width."),
                    s
                );
            }),
            (n.prototype.replace = function (e) {
                this.$stage.empty(),
                    (this._items = []),
                    e && (e = e instanceof jQuery ? e : t(e)),
                    this.settings.nestedItemSelector && (e = e.find("." + this.settings.nestedItemSelector)),
                    e
                        .filter(function () {
                            return 1 === this.nodeType;
                        })
                        .each(
                            t.proxy(function (t, e) {
                                (e = this.prepare(e)), this.$stage.append(e), this._items.push(e), this._mergers.push(1 * e.find("[data-merge]").addBack("[data-merge]").attr("data-merge") || 1);
                            }, this)
                        ),
                    this.reset(this.isNumeric(this.settings.startPosition) ? this.settings.startPosition : 0),
                    this.invalidate("items");
            }),
            (n.prototype.add = function (e, i) {
                var n = this.relative(this._current);
                (i = i === s ? this._items.length : this.normalize(i, !0)),
                    (e = e instanceof jQuery ? e : t(e)),
                    this.trigger("add", { content: e, position: i }),
                    (e = this.prepare(e)),
                    0 === this._items.length || i === this._items.length
                        ? (0 === this._items.length && this.$stage.append(e),
                          0 !== this._items.length && this._items[i - 1].after(e),
                          this._items.push(e),
                          this._mergers.push(1 * e.find("[data-merge]").addBack("[data-merge]").attr("data-merge") || 1))
                        : (this._items[i].before(e), this._items.splice(i, 0, e), this._mergers.splice(i, 0, 1 * e.find("[data-merge]").addBack("[data-merge]").attr("data-merge") || 1)),
                    this._items[n] && this.reset(this._items[n].index()),
                    this.invalidate("items"),
                    this.trigger("added", { content: e, position: i });
            }),
            (n.prototype.remove = function (t) {
                (t = this.normalize(t, !0)) !== s &&
                    (this.trigger("remove", { content: this._items[t], position: t }),
                    this._items[t].remove(),
                    this._items.splice(t, 1),
                    this._mergers.splice(t, 1),
                    this.invalidate("items"),
                    this.trigger("removed", { content: null, position: t }));
            }),
            (n.prototype.preloadAutoWidthImages = function (e) {
                e.each(
                    t.proxy(function (e, i) {
                        this.enter("pre-loading"),
                            (i = t(i)),
                            t(new Image())
                                .one(
                                    "load",
                                    t.proxy(function (t) {
                                        i.attr("src", t.target.src), i.css("opacity", 1), this.leave("pre-loading"), this.is("pre-loading") || this.is("initializing") || this.refresh();
                                    }, this)
                                )
                                .attr("src", i.attr("src") || i.attr("data-src") || i.attr("data-src-retina"));
                    }, this)
                );
            }),
            (n.prototype.destroy = function () {
                for (var s in (this.$element.off(".owl.core"),
                this.$stage.off(".owl.core"),
                t(i).off(".owl.core"),
                !1 !== this.settings.responsive && (e.clearTimeout(this.resizeTimer), this.off(e, "resize", this._handlers.onThrottledResize)),
                this._plugins))
                    this._plugins[s].destroy();
                this.$stage.children(".cloned").remove(),
                    this.$stage.unwrap(),
                    this.$stage.children().contents().unwrap(),
                    this.$stage.children().unwrap(),
                    this.$stage.remove(),
                    this.$element
                        .removeClass(this.options.refreshClass)
                        .removeClass(this.options.loadingClass)
                        .removeClass(this.options.loadedClass)
                        .removeClass(this.options.rtlClass)
                        .removeClass(this.options.dragClass)
                        .removeClass(this.options.grabClass)
                        .attr("class", this.$element.attr("class").replace(RegExp(this.options.responsiveClass + "-\\S+\\s", "g"), ""))
                        .removeData("owl.carousel");
            }),
            (n.prototype.op = function (t, e, i) {
                var s = this.settings.rtl;
                switch (e) {
                    case "<":
                        return s ? t > i : t < i;
                    case ">":
                        return s ? t < i : t > i;
                    case ">=":
                        return s ? t <= i : t >= i;
                    case "<=":
                        return s ? t >= i : t <= i;
                }
            }),
            (n.prototype.on = function (t, e, i, s) {
                t.addEventListener ? t.addEventListener(e, i, s) : t.attachEvent && t.attachEvent("on" + e, i);
            }),
            (n.prototype.off = function (t, e, i, s) {
                t.removeEventListener ? t.removeEventListener(e, i, s) : t.detachEvent && t.detachEvent("on" + e, i);
            }),
            (n.prototype.trigger = function (e, i, s, r, o) {
                var a = { item: { count: this._items.length, index: this.current() } },
                    l = t.camelCase(
                        t
                            .grep(["on", e, s], function (t) {
                                return t;
                            })
                            .join("-")
                            .toLowerCase()
                    ),
                    c = t.Event([e, "owl", s || "carousel"].join(".").toLowerCase(), t.extend({ relatedTarget: this }, a, i));
                return (
                    this._supress[e] ||
                        (t.each(this._plugins, function (t, e) {
                            e.onTrigger && e.onTrigger(c);
                        }),
                        this.register({ type: n.Type.Event, name: e }),
                        this.$element.trigger(c),
                        this.settings && "function" == typeof this.settings[l] && this.settings[l].call(this, c)),
                    c
                );
            }),
            (n.prototype.enter = function (e) {
                t.each(
                    [e].concat(this._states.tags[e] || []),
                    t.proxy(function (t, e) {
                        this._states.current[e] === s && (this._states.current[e] = 0), this._states.current[e]++;
                    }, this)
                );
            }),
            (n.prototype.leave = function (e) {
                t.each(
                    [e].concat(this._states.tags[e] || []),
                    t.proxy(function (t, e) {
                        this._states.current[e]--;
                    }, this)
                );
            }),
            (n.prototype.register = function (e) {
                if (e.type === n.Type.Event) {
                    if ((t.event.special[e.name] || (t.event.special[e.name] = {}), !t.event.special[e.name].owl)) {
                        var i = t.event.special[e.name]._default;
                        (t.event.special[e.name]._default = function (t) {
                            return i && i.apply && (!t.namespace || -1 === t.namespace.indexOf("owl")) ? i.apply(this, arguments) : t.namespace && t.namespace.indexOf("owl") > -1;
                        }),
                            (t.event.special[e.name].owl = !0);
                    }
                } else
                    e.type === n.Type.State &&
                        (this._states.tags[e.name] ? (this._states.tags[e.name] = this._states.tags[e.name].concat(e.tags)) : (this._states.tags[e.name] = e.tags),
                        (this._states.tags[e.name] = t.grep(
                            this._states.tags[e.name],
                            t.proxy(function (i, s) {
                                return t.inArray(i, this._states.tags[e.name]) === s;
                            }, this)
                        )));
            }),
            (n.prototype.suppress = function (e) {
                t.each(
                    e,
                    t.proxy(function (t, e) {
                        this._supress[e] = !0;
                    }, this)
                );
            }),
            (n.prototype.release = function (e) {
                t.each(
                    e,
                    t.proxy(function (t, e) {
                        delete this._supress[e];
                    }, this)
                );
            }),
            (n.prototype.pointer = function (t) {
                var i = { x: null, y: null };
                return (
                    (t = (t = t.originalEvent || t || e.event).touches && t.touches.length ? t.touches[0] : t.changedTouches && t.changedTouches.length ? t.changedTouches[0] : t).pageX
                        ? ((i.x = t.pageX), (i.y = t.pageY))
                        : ((i.x = t.clientX), (i.y = t.clientY)),
                    i
                );
            }),
            (n.prototype.isNumeric = function (t) {
                return !isNaN(parseFloat(t));
            }),
            (n.prototype.difference = function (t, e) {
                return { x: t.x - e.x, y: t.y - e.y };
            }),
            (t.fn.owlCarousel = function (e) {
                var i = Array.prototype.slice.call(arguments, 1);
                return this.each(function () {
                    var s = t(this),
                        r = s.data("owl.carousel");
                    r ||
                        ((r = new n(this, "object" == typeof e && e)),
                        s.data("owl.carousel", r),
                        t.each(["next", "prev", "to", "destroy", "refresh", "replace", "add", "remove"], function (e, i) {
                            r.register({ type: n.Type.Event, name: i }),
                                r.$element.on(
                                    i + ".owl.carousel.core",
                                    t.proxy(function (t) {
                                        t.namespace && t.relatedTarget !== this && (this.suppress([i]), r[i].apply(this, [].slice.call(arguments, 1)), this.release([i]));
                                    }, r)
                                );
                        })),
                        "string" == typeof e && "_" !== e.charAt(0) && r[e].apply(r, i);
                });
            }),
            (t.fn.owlCarousel.Constructor = n);
    })(window.Zepto || window.jQuery, window, document),
    (function (t, e, i, s) {
        var n = function (e) {
            (this._core = e),
                (this._interval = null),
                (this._visible = null),
                (this._handlers = {
                    "initialized.owl.carousel": t.proxy(function (t) {
                        t.namespace && this._core.settings.autoRefresh && this.watch();
                    }, this),
                }),
                (this._core.options = t.extend({}, n.Defaults, this._core.options)),
                this._core.$element.on(this._handlers);
        };
        (n.Defaults = { autoRefresh: !0, autoRefreshInterval: 500 }),
            (n.prototype.watch = function () {
                this._interval || ((this._visible = this._core.isVisible()), (this._interval = e.setInterval(t.proxy(this.refresh, this), this._core.settings.autoRefreshInterval)));
            }),
            (n.prototype.refresh = function () {
                this._core.isVisible() !== this._visible && ((this._visible = !this._visible), this._core.$element.toggleClass("owl-hidden", !this._visible), this._visible && this._core.invalidate("width") && this._core.refresh());
            }),
            (n.prototype.destroy = function () {
                var t, i;
                for (t in (e.clearInterval(this._interval), this._handlers)) this._core.$element.off(t, this._handlers[t]);
                for (i in Object.getOwnPropertyNames(this)) "function" != typeof this[i] && (this[i] = null);
            }),
            (t.fn.owlCarousel.Constructor.Plugins.AutoRefresh = n);
    })(window.Zepto || window.jQuery, window, document),
    (function (t, e, i, s) {
        var n = function (e) {
            (this._core = e),
                (this._loaded = []),
                (this._handlers = {
                    "initialized.owl.carousel change.owl.carousel resized.owl.carousel": t.proxy(function (e) {
                        if (e.namespace && this._core.settings && this._core.settings.lazyLoad && ((e.property && "position" == e.property.name) || "initialized" == e.type)) {
                            var i = this._core.settings,
                                s = (i.center && Math.ceil(i.items / 2)) || i.items,
                                n = (i.center && -1 * s) || 0,
                                r = (e.property && void 0 !== e.property.value ? e.property.value : this._core.current()) + n,
                                o = this._core.clones().length,
                                a = t.proxy(function (t, e) {
                                    this.load(e);
                                }, this);
                            for (i.lazyLoadEager > 0 && ((s += i.lazyLoadEager), i.loop && ((r -= i.lazyLoadEager), s++)); n++ < s; ) this.load(o / 2 + this._core.relative(r)), o && t.each(this._core.clones(this._core.relative(r)), a), r++;
                        }
                    }, this),
                }),
                (this._core.options = t.extend({}, n.Defaults, this._core.options)),
                this._core.$element.on(this._handlers);
        };
        (n.Defaults = { lazyLoad: !1, lazyLoadEager: 0 }),
            (n.prototype.load = function (i) {
                var s = this._core.$stage.children().eq(i),
                    n = s && s.find(".owl-lazy");
                !n ||
                    t.inArray(s.get(0), this._loaded) > -1 ||
                    (n.each(
                        t.proxy(function (i, s) {
                            var n,
                                r = t(s),
                                o = (e.devicePixelRatio > 1 && r.attr("data-src-retina")) || r.attr("data-src") || r.attr("data-srcset");
                            this._core.trigger("load", { element: r, url: o }, "lazy"),
                                r.is("img")
                                    ? r
                                          .one(
                                              "load.owl.lazy",
                                              t.proxy(function () {
                                                  r.css("opacity", 1), this._core.trigger("loaded", { element: r, url: o }, "lazy");
                                              }, this)
                                          )
                                          .attr("src", o)
                                    : r.is("source")
                                    ? r
                                          .one(
                                              "load.owl.lazy",
                                              t.proxy(function () {
                                                  this._core.trigger("loaded", { element: r, url: o }, "lazy");
                                              }, this)
                                          )
                                          .attr("srcset", o)
                                    : (((n = new Image()).onload = t.proxy(function () {
                                          r.css({ "background-image": 'url("' + o + '")', opacity: "1" }), this._core.trigger("loaded", { element: r, url: o }, "lazy");
                                      }, this)),
                                      (n.src = o));
                        }, this)
                    ),
                    this._loaded.push(s.get(0)));
            }),
            (n.prototype.destroy = function () {
                var t, e;
                for (t in this.handlers) this._core.$element.off(t, this.handlers[t]);
                for (e in Object.getOwnPropertyNames(this)) "function" != typeof this[e] && (this[e] = null);
            }),
            (t.fn.owlCarousel.Constructor.Plugins.Lazy = n);
    })(window.Zepto || window.jQuery, window, document),
    (function (t, e, i, s) {
        var n = function (i) {
            (this._core = i),
                (this._previousHeight = null),
                (this._handlers = {
                    "initialized.owl.carousel refreshed.owl.carousel": t.proxy(function (t) {
                        t.namespace && this._core.settings.autoHeight && this.update();
                    }, this),
                    "changed.owl.carousel": t.proxy(function (t) {
                        t.namespace && this._core.settings.autoHeight && "position" === t.property.name && this.update();
                    }, this),
                    "loaded.owl.lazy": t.proxy(function (t) {
                        t.namespace && this._core.settings.autoHeight && t.element.closest("." + this._core.settings.itemClass).index() === this._core.current() && this.update();
                    }, this),
                }),
                (this._core.options = t.extend({}, n.Defaults, this._core.options)),
                this._core.$element.on(this._handlers),
                (this._intervalId = null);
            var s = this;
            t(e).on("load", function () {
                s._core.settings.autoHeight && s.update();
            }),
                t(e).resize(function () {
                    s._core.settings.autoHeight &&
                        (null != s._intervalId && clearTimeout(s._intervalId),
                        (s._intervalId = setTimeout(function () {
                            s.update();
                        }, 250)));
                });
        };
        (n.Defaults = { autoHeight: !1, autoHeightClass: "owl-height" }),
            (n.prototype.update = function () {
                var e = this._core._current,
                    i = e + this._core.settings.items,
                    s = this._core.settings.lazyLoad,
                    n = this._core.$stage.children().toArray().slice(e, i),
                    r = [],
                    o = 0;
                t.each(n, function (e, i) {
                    r.push(t(i).height());
                }),
                    (o = Math.max.apply(null, r)) <= 1 && s && this._previousHeight && (o = this._previousHeight),
                    (this._previousHeight = o),
                    this._core.$stage.parent().height(o).addClass(this._core.settings.autoHeightClass);
            }),
            (n.prototype.destroy = function () {
                var t, e;
                for (t in this._handlers) this._core.$element.off(t, this._handlers[t]);
                for (e in Object.getOwnPropertyNames(this)) "function" != typeof this[e] && (this[e] = null);
            }),
            (t.fn.owlCarousel.Constructor.Plugins.AutoHeight = n);
    })(window.Zepto || window.jQuery, window, document),
    (function (t, e, i, s) {
        var n = function (e) {
            (this._core = e),
                (this._videos = {}),
                (this._playing = null),
                (this._handlers = {
                    "initialized.owl.carousel": t.proxy(function (t) {
                        t.namespace && this._core.register({ type: "state", name: "playing", tags: ["interacting"] });
                    }, this),
                    "resize.owl.carousel": t.proxy(function (t) {
                        t.namespace && this._core.settings.video && this.isInFullScreen() && t.preventDefault();
                    }, this),
                    "refreshed.owl.carousel": t.proxy(function (t) {
                        t.namespace && this._core.is("resizing") && this._core.$stage.find(".cloned .owl-video-frame").remove();
                    }, this),
                    "changed.owl.carousel": t.proxy(function (t) {
                        t.namespace && "position" === t.property.name && this._playing && this.stop();
                    }, this),
                    "prepared.owl.carousel": t.proxy(function (e) {
                        if (e.namespace) {
                            var i = t(e.content).find(".owl-video");
                            i.length && (i.css("display", "none"), this.fetch(i, t(e.content)));
                        }
                    }, this),
                }),
                (this._core.options = t.extend({}, n.Defaults, this._core.options)),
                this._core.$element.on(this._handlers),
                this._core.$element.on(
                    "click.owl.video",
                    ".owl-video-play-icon",
                    t.proxy(function (t) {
                        this.play(t);
                    }, this)
                );
        };
        (n.Defaults = { video: !1, videoHeight: !1, videoWidth: !1 }),
            (n.prototype.fetch = function (t, e) {
                var i = t.attr("data-vimeo-id") ? "vimeo" : t.attr("data-vzaar-id") ? "vzaar" : "youtube",
                    s = t.attr("data-vimeo-id") || t.attr("data-youtube-id") || t.attr("data-vzaar-id"),
                    n = t.attr("data-width") || this._core.settings.videoWidth,
                    r = t.attr("data-height") || this._core.settings.videoHeight,
                    o = t.attr("href");
                if (!o) throw Error("Missing video URL.");
                if (
                    (s = o.match(
                        /(http:|https:|)\/\/(player.|www.|app.)?(vimeo\.com|youtu(be\.com|\.be|be\.googleapis\.com|be\-nocookie\.com)|vzaar\.com)\/(video\/|videos\/|embed\/|channels\/.+\/|groups\/.+\/|watch\?v=|v\/)?([A-Za-z0-9._%-]*)(\&\S+)?/
                    ))[3].indexOf("youtu") > -1
                )
                    i = "youtube";
                else if (s[3].indexOf("vimeo") > -1) i = "vimeo";
                else {
                    if (!(s[3].indexOf("vzaar") > -1)) throw Error("Video URL not supported.");
                    i = "vzaar";
                }
                (s = s[6]), (this._videos[o] = { type: i, id: s, width: n, height: r }), e.attr("data-video", o), this.thumbnail(t, this._videos[o]);
            }),
            (n.prototype.thumbnail = function (e, i) {
                var s,
                    n,
                    r,
                    o = i.width && i.height ? "width:" + i.width + "px;height:" + i.height + "px;" : "",
                    a = e.find("img"),
                    l = "src",
                    c = "",
                    u = this._core.settings,
                    p = function (i) {
                        (n = '<div class="owl-video-play-icon"></div>'),
                            (s = u.lazyLoad ? t("<div/>", { class: "owl-video-tn " + c, srcType: i }) : t("<div/>", { class: "owl-video-tn", style: "opacity:1;background-image:url(" + i + ")" })),
                            e.after(s),
                            e.after(n);
                    };
                if ((e.wrap(t("<div/>", { class: "owl-video-wrapper", style: o })), this._core.settings.lazyLoad && ((l = "data-src"), (c = "owl-lazy")), a.length)) return p(a.attr(l)), a.remove(), !1;
                "youtube" === i.type
                    ? p((r = "//img.youtube.com/vi/" + i.id + "/hqdefault.webp"))
                    : "vimeo" === i.type
                    ? t.ajax({
                          type: "GET",
                          url: "//vimeo.com/api/v2/video/" + i.id + ".json",
                          jsonp: "callback",
                          dataType: "jsonp",
                          success: function (t) {
                              p((r = t[0].thumbnail_large));
                          },
                      })
                    : "vzaar" === i.type &&
                      t.ajax({
                          type: "GET",
                          url: "//vzaar.com/api/videos/" + i.id + ".json",
                          jsonp: "callback",
                          dataType: "jsonp",
                          success: function (t) {
                              p((r = t.framegrab_url));
                          },
                      });
            }),
            (n.prototype.stop = function () {
                this._core.trigger("stop", null, "video"),
                    this._playing.find(".owl-video-frame").remove(),
                    this._playing.removeClass("owl-video-playing"),
                    (this._playing = null),
                    this._core.leave("playing"),
                    this._core.trigger("stopped", null, "video");
            }),
            (n.prototype.play = function (e) {
                var i,
                    s = t(e.target).closest("." + this._core.settings.itemClass),
                    n = this._videos[s.attr("data-video")],
                    r = n.width || "100%",
                    o = n.height || this._core.$stage.height();
                this._playing ||
                    (this._core.enter("playing"),
                    this._core.trigger("play", null, "video"),
                    (s = this._core.items(this._core.relative(s.index()))),
                    this._core.reset(s.index()),
                    (i = t('<iframe frameborder="0" allowfullscreen mozallowfullscreen webkitAllowFullScreen ></iframe>')).attr("height", o),
                    i.attr("width", r),
                    "youtube" === n.type
                        ? i.attr("src", "//www.youtube.com/embed/" + n.id + "?autoplay=1&rel=0&v=" + n.id)
                        : "vimeo" === n.type
                        ? i.attr("src", "//player.vimeo.com/video/" + n.id + "?autoplay=1")
                        : "vzaar" === n.type && i.attr("src", "//view.vzaar.com/" + n.id + "/player?autoplay=true"),
                    t(i).wrap('<div class="owl-video-frame" />').insertAfter(s.find(".owl-video")),
                    (this._playing = s.addClass("owl-video-playing")));
            }),
            (n.prototype.isInFullScreen = function () {
                var e = i.fullscreenElement || i.mozFullScreenElement || i.webkitFullscreenElement;
                return e && t(e).parent().hasClass("owl-video-frame");
            }),
            (n.prototype.destroy = function () {
                var t, e;
                for (t in (this._core.$element.off("click.owl.video"), this._handlers)) this._core.$element.off(t, this._handlers[t]);
                for (e in Object.getOwnPropertyNames(this)) "function" != typeof this[e] && (this[e] = null);
            }),
            (t.fn.owlCarousel.Constructor.Plugins.Video = n);
    })(window.Zepto || window.jQuery, window, document),
    (function (t, e, i, s) {
        var n = function (e) {
            (this.core = e),
                (this.core.options = t.extend({}, n.Defaults, this.core.options)),
                (this.swapping = !0),
                (this.previous = s),
                (this.next = s),
                (this.handlers = {
                    "change.owl.carousel": t.proxy(function (t) {
                        t.namespace && "position" == t.property.name && ((this.previous = this.core.current()), (this.next = t.property.value));
                    }, this),
                    "drag.owl.carousel dragged.owl.carousel translated.owl.carousel": t.proxy(function (t) {
                        t.namespace && (this.swapping = "translated" == t.type);
                    }, this),
                    "translate.owl.carousel": t.proxy(function (t) {
                        t.namespace && this.swapping && (this.core.options.animateOut || this.core.options.animateIn) && this.swap();
                    }, this),
                }),
                this.core.$element.on(this.handlers);
        };
        (n.Defaults = { animateOut: !1, animateIn: !1 }),
            (n.prototype.swap = function () {
                if (1 === this.core.settings.items && t.support.animation && t.support.transition) {
                    this.core.speed(0);
                    var e,
                        i = t.proxy(this.clear, this),
                        s = this.core.$stage.children().eq(this.previous),
                        n = this.core.$stage.children().eq(this.next),
                        r = this.core.settings.animateIn,
                        o = this.core.settings.animateOut;
                    this.core.current() !== this.previous &&
                        (o &&
                            ((e = this.core.coordinates(this.previous) - this.core.coordinates(this.next)),
                            s
                                .one(t.support.animation.end, i)
                                .css({ left: e + "px" })
                                .addClass("animated owl-animated-out")
                                .addClass(o)),
                        r && n.one(t.support.animation.end, i).addClass("animated owl-animated-in").addClass(r));
                }
            }),
            (n.prototype.clear = function (e) {
                t(e.target).css({ left: "" }).removeClass("animated owl-animated-out owl-animated-in").removeClass(this.core.settings.animateIn).removeClass(this.core.settings.animateOut), this.core.onTransitionEnd();
            }),
            (n.prototype.destroy = function () {
                var t, e;
                for (t in this.handlers) this.core.$element.off(t, this.handlers[t]);
                for (e in Object.getOwnPropertyNames(this)) "function" != typeof this[e] && (this[e] = null);
            }),
            (t.fn.owlCarousel.Constructor.Plugins.Animate = n);
    })(window.Zepto || window.jQuery, window, document),
    (function (t, e, i, s) {
        var n = function (e) {
            (this._core = e),
                (this._call = null),
                (this._time = 0),
                (this._timeout = 0),
                (this._paused = !0),
                (this._handlers = {
                    "changed.owl.carousel": t.proxy(function (t) {
                        t.namespace && "settings" === t.property.name ? (this._core.settings.autoplay ? this.play() : this.stop()) : t.namespace && "position" === t.property.name && this._paused && (this._time = 0);
                    }, this),
                    "initialized.owl.carousel": t.proxy(function (t) {
                        t.namespace && this._core.settings.autoplay && this.play();
                    }, this),
                    "play.owl.autoplay": t.proxy(function (t, e, i) {
                        t.namespace && this.play(e, i);
                    }, this),
                    "stop.owl.autoplay": t.proxy(function (t) {
                        t.namespace && this.stop();
                    }, this),
                    "mouseover.owl.autoplay": t.proxy(function () {
                        this._core.settings.autoplayHoverPause && this._core.is("rotating") && this.pause();
                    }, this),
                    "mouseleave.owl.autoplay": t.proxy(function () {
                        this._core.settings.autoplayHoverPause && this._core.is("rotating") && this.play();
                    }, this),
                    "touchstart.owl.core": t.proxy(function () {
                        this._core.settings.autoplayHoverPause && this._core.is("rotating") && this.pause();
                    }, this),
                    "touchend.owl.core": t.proxy(function () {
                        this._core.settings.autoplayHoverPause && this.play();
                    }, this),
                }),
                this._core.$element.on(this._handlers),
                (this._core.options = t.extend({}, n.Defaults, this._core.options));
        };
        (n.Defaults = { autoplay: !1, autoplayTimeout: 5e3, autoplayHoverPause: !1, autoplaySpeed: !1 }),
            (n.prototype._next = function (s) {
                (this._call = e.setTimeout(t.proxy(this._next, this, s), this._timeout * (Math.round(this.read() / this._timeout) + 1) - this.read())),
                    this._core.is("interacting") || i.hidden || this._core.next(s || this._core.settings.autoplaySpeed);
            }),
            (n.prototype.read = function () {
                return new Date().getTime() - this._time;
            }),
            (n.prototype.play = function (i, s) {
                var n;
                this._core.is("rotating") || this._core.enter("rotating"),
                    (i = i || this._core.settings.autoplayTimeout),
                    (n = Math.min(this._time % (this._timeout || i), i)),
                    this._paused ? ((this._time = this.read()), (this._paused = !1)) : e.clearTimeout(this._call),
                    (this._time += (this.read() % i) - n),
                    (this._timeout = i),
                    (this._call = e.setTimeout(t.proxy(this._next, this, s), i - n));
            }),
            (n.prototype.stop = function () {
                this._core.is("rotating") && ((this._time = 0), (this._paused = !0), e.clearTimeout(this._call), this._core.leave("rotating"));
            }),
            (n.prototype.pause = function () {
                this._core.is("rotating") && !this._paused && ((this._time = this.read()), (this._paused = !0), e.clearTimeout(this._call));
            }),
            (n.prototype.destroy = function () {
                var t, e;
                for (t in (this.stop(), this._handlers)) this._core.$element.off(t, this._handlers[t]);
                for (e in Object.getOwnPropertyNames(this)) "function" != typeof this[e] && (this[e] = null);
            }),
            (t.fn.owlCarousel.Constructor.Plugins.autoplay = n);
    })(window.Zepto || window.jQuery, window, document),
    (function (t, e, i, s) {
        "use strict";
        var n = function (e) {
            (this._core = e),
                (this._initialized = !1),
                (this._pages = []),
                (this._controls = {}),
                (this._templates = []),
                (this.$element = this._core.$element),
                (this._overrides = { next: this._core.next, prev: this._core.prev, to: this._core.to }),
                (this._handlers = {
                    "prepared.owl.carousel": t.proxy(function (e) {
                        e.namespace && this._core.settings.dotsData && this._templates.push('<div class="' + this._core.settings.dotClass + '">' + t(e.content).find("[data-dot]").addBack("[data-dot]").attr("data-dot") + "</div>");
                    }, this),
                    "added.owl.carousel": t.proxy(function (t) {
                        t.namespace && this._core.settings.dotsData && this._templates.splice(t.position, 0, this._templates.pop());
                    }, this),
                    "remove.owl.carousel": t.proxy(function (t) {
                        t.namespace && this._core.settings.dotsData && this._templates.splice(t.position, 1);
                    }, this),
                    "changed.owl.carousel": t.proxy(function (t) {
                        t.namespace && "position" == t.property.name && this.draw();
                    }, this),
                    "initialized.owl.carousel": t.proxy(function (t) {
                        t.namespace &&
                            !this._initialized &&
                            (this._core.trigger("initialize", null, "navigation"), this.initialize(), this.update(), this.draw(), (this._initialized = !0), this._core.trigger("initialized", null, "navigation"));
                    }, this),
                    "refreshed.owl.carousel": t.proxy(function (t) {
                        t.namespace && this._initialized && (this._core.trigger("refresh", null, "navigation"), this.update(), this.draw(), this._core.trigger("refreshed", null, "navigation"));
                    }, this),
                }),
                (this._core.options = t.extend({}, n.Defaults, this._core.options)),
                this.$element.on(this._handlers);
        };
        (n.Defaults = {
            nav: !1,
            navText: ['<span aria-label="Previous">&#x2039;</span>', '<span aria-label="Next">&#x203a;</span>'],
            navSpeed: !1,
            navElement: 'button type="button" role="presentation"',
            navContainer: !1,
            navContainerClass: "owl-nav",
            navClass: ["owl-prev", "owl-next"],
            slideBy: 1,
            dotClass: "owl-dot",
            dotsClass: "owl-dots",
            dots: !0,
            dotsEach: !1,
            dotsData: !1,
            dotsSpeed: !1,
            dotsContainer: !1,
        }),
            (n.prototype.initialize = function () {
                var e,
                    i = this._core.settings;
                for (e in ((this._controls.$relative = (i.navContainer ? t(i.navContainer) : t("<div>").addClass(i.navContainerClass).appendTo(this.$element)).addClass("disabled")),
                (this._controls.$previous = t("<" + i.navElement + ">")
                    .addClass(i.navClass[0])
                    .html(i.navText[0])
                    .prependTo(this._controls.$relative)
                    .on(
                        "click",
                        t.proxy(function (t) {
                            this.prev(i.navSpeed);
                        }, this)
                    )),
                (this._controls.$next = t("<" + i.navElement + ">")
                    .addClass(i.navClass[1])
                    .html(i.navText[1])
                    .appendTo(this._controls.$relative)
                    .on(
                        "click",
                        t.proxy(function (t) {
                            this.next(i.navSpeed);
                        }, this)
                    )),
                i.dotsData || (this._templates = [t('<button role="button">').addClass(i.dotClass).append(t("<span>")).prop("outerHTML")]),
                (this._controls.$absolute = (i.dotsContainer ? t(i.dotsContainer) : t("<div>").addClass(i.dotsClass).appendTo(this.$element)).addClass("disabled")),
                this._controls.$absolute.on(
                    "click",
                    "button",
                    t.proxy(function (e) {
                        var s = t(e.target).parent().is(this._controls.$absolute) ? t(e.target).index() : t(e.target).parent().index();
                        e.preventDefault(), this.to(s, i.dotsSpeed);
                    }, this)
                ),
                this._overrides))
                    this._core[e] = t.proxy(this[e], this);
            }),
            (n.prototype.destroy = function () {
                var t, e, i, s, n;
                for (t in ((n = this._core.settings), this._handlers)) this.$element.off(t, this._handlers[t]);
                for (e in this._controls) "$relative" === e && n.navContainer ? this._controls[e].html("") : this._controls[e].remove();
                for (s in this.overides) this._core[s] = this._overrides[s];
                for (i in Object.getOwnPropertyNames(this)) "function" != typeof this[i] && (this[i] = null);
            }),
            (n.prototype.update = function () {
                var t,
                    e,
                    i,
                    s = this._core.clones().length / 2,
                    n = s + this._core.items().length,
                    r = this._core.maximum(!0),
                    o = this._core.settings,
                    a = o.center || o.autoWidth || o.dotsData ? 1 : o.dotsEach || o.items;
                if (("page" !== o.slideBy && (o.slideBy = Math.min(o.slideBy, o.items)), o.dots || "page" == o.slideBy))
                    for (this._pages = [], t = s, e = 0, i = 0; t < n; t++) {
                        if (e >= a || 0 === e) {
                            if ((this._pages.push({ start: Math.min(r, t - s), end: t - s + a - 1 }), Math.min(r, t - s) === r)) break;
                            (e = 0), ++i;
                        }
                        e += this._core.mergers(this._core.relative(t));
                    }
            }),
            (n.prototype.draw = function () {
                var e,
                    i = this._core.settings,
                    s = this._core.items().length <= i.items,
                    n = this._core.relative(this._core.current()),
                    r = i.loop || i.rewind;
                this._controls.$relative.toggleClass("disabled", !i.nav || s),
                    i.nav && (this._controls.$previous.toggleClass("disabled", !r && n <= this._core.minimum(!0)), this._controls.$next.toggleClass("disabled", !r && n >= this._core.maximum(!0))),
                    this._controls.$absolute.toggleClass("disabled", !i.dots || s),
                    i.dots &&
                        ((e = this._pages.length - this._controls.$absolute.children().length),
                        i.dotsData && 0 !== e
                            ? this._controls.$absolute.html(this._templates.join(""))
                            : e > 0
                            ? this._controls.$absolute.append(Array(e + 1).join(this._templates[0]))
                            : e < 0 && this._controls.$absolute.children().slice(e).remove(),
                        this._controls.$absolute.find(".active").removeClass("active"),
                        this._controls.$absolute.children().eq(t.inArray(this.current(), this._pages)).addClass("active"));
            }),
            (n.prototype.onTrigger = function (e) {
                var i = this._core.settings;
                e.page = { index: t.inArray(this.current(), this._pages), count: this._pages.length, size: i && (i.center || i.autoWidth || i.dotsData ? 1 : i.dotsEach || i.items) };
            }),
            (n.prototype.current = function () {
                var e = this._core.relative(this._core.current());
                return t
                    .grep(
                        this._pages,
                        t.proxy(function (t, i) {
                            return t.start <= e && t.end >= e;
                        }, this)
                    )
                    .pop();
            }),
            (n.prototype.getPosition = function (e) {
                var i,
                    s,
                    n = this._core.settings;
                return (
                    "page" == n.slideBy
                        ? ((i = t.inArray(this.current(), this._pages)), (s = this._pages.length), e ? ++i : --i, (i = this._pages[((i % s) + s) % s].start))
                        : ((i = this._core.relative(this._core.current())), (s = this._core.items().length), e ? (i += n.slideBy) : (i -= n.slideBy)),
                    i
                );
            }),
            (n.prototype.next = function (e) {
                t.proxy(this._overrides.to, this._core)(this.getPosition(!0), e);
            }),
            (n.prototype.prev = function (e) {
                t.proxy(this._overrides.to, this._core)(this.getPosition(!1), e);
            }),
            (n.prototype.to = function (e, i, s) {
                var n;
                !s && this._pages.length ? ((n = this._pages.length), t.proxy(this._overrides.to, this._core)(this._pages[((e % n) + n) % n].start, i)) : t.proxy(this._overrides.to, this._core)(e, i);
            }),
            (t.fn.owlCarousel.Constructor.Plugins.Navigation = n);
    })(window.Zepto || window.jQuery, window, document),
    (function (t, e, i, s) {
        "use strict";
        var n = function (i) {
            (this._core = i),
                (this._hashes = {}),
                (this.$element = this._core.$element),
                (this._handlers = {
                    "initialized.owl.carousel": t.proxy(function (i) {
                        i.namespace && "URLHash" === this._core.settings.startPosition && t(e).trigger("hashchange.owl.navigation");
                    }, this),
                    "prepared.owl.carousel": t.proxy(function (e) {
                        if (e.namespace) {
                            var i = t(e.content).find("[data-hash]").addBack("[data-hash]").attr("data-hash");
                            i && (this._hashes[i] = e.content);
                        }
                    }, this),
                    "changed.owl.carousel": t.proxy(function (i) {
                        if (i.namespace && "position" === i.property.name) {
                            var s = this._core.items(this._core.relative(this._core.current())),
                                n = t
                                    .map(this._hashes, function (t, e) {
                                        return t === s ? e : null;
                                    })
                                    .join();
                            n && e.location.hash.slice(1) !== n && (e.location.hash = n);
                        }
                    }, this),
                }),
                (this._core.options = t.extend({}, n.Defaults, this._core.options)),
                this.$element.on(this._handlers),
                t(e).on(
                    "hashchange.owl.navigation",
                    t.proxy(function (t) {
                        var i = e.location.hash.substring(1),
                            s = this._core.$stage.children(),
                            n = this._hashes[i] && s.index(this._hashes[i]);
                        void 0 !== n && n !== this._core.current() && this._core.to(this._core.relative(n), !1, !0);
                    }, this)
                );
        };
        (n.Defaults = { URLhashListener: !1 }),
            (n.prototype.destroy = function () {
                var i, s;
                for (i in (t(e).off("hashchange.owl.navigation"), this._handlers)) this._core.$element.off(i, this._handlers[i]);
                for (s in Object.getOwnPropertyNames(this)) "function" != typeof this[s] && (this[s] = null);
            }),
            (t.fn.owlCarousel.Constructor.Plugins.Hash = n);
    })(window.Zepto || window.jQuery, window, document),
    (function (t, e, i, s) {
        function n(e, i) {
            var s = !1,
                n = e.charAt(0).toUpperCase() + e.slice(1);
            return (
                t.each((e + " " + a.join(n + " ") + n).split(" "), function (t, e) {
                    if (void 0 !== o[e]) return (s = !i || e), !1;
                }),
                s
            );
        }
        function r(t) {
            return n(t, !0);
        }
        var o = t("<support>").get(0).style,
            a = "Webkit Moz O ms".split(" "),
            l = {
                transition: { end: { WebkitTransition: "webkitTransitionEnd", MozTransition: "transitionend", OTransition: "oTransitionEnd", transition: "transitionend" } },
                animation: { end: { WebkitAnimation: "webkitAnimationEnd", MozAnimation: "animationend", OAnimation: "oAnimationEnd", animation: "animationend" } },
            },
            c = {
                csstransforms: function () {
                    return !!n("transform");
                },
                csstransforms3d: function () {
                    return !!n("perspective");
                },
                csstransitions: function () {
                    return !!n("transition");
                },
                cssanimations: function () {
                    return !!n("animation");
                },
            };
        c.csstransitions() && ((t.support.transition = new String(r("transition"))), (t.support.transition.end = l.transition.end[t.support.transition])),
            c.cssanimations() && ((t.support.animation = new String(r("animation"))), (t.support.animation.end = l.animation.end[t.support.animation])),
            c.csstransforms() && ((t.support.transform = new String(r("transform"))), (t.support.transform3d = c.csstransforms3d()));
    })(window.Zepto || window.jQuery, window, document),
    (function (t, e) {
        "use strict";
        function i(i, o) {
            var a = this,
                l = s.extend({}, a.config, o),
                c = {},
                u = l.name + "-" + ++n;
            return (
                (a.config = function (t, i) {
                    return i === e ? l[t] : ((l[t] = i), a);
                }),
                (a.addItems = function (t) {
                    return c.a && c.a("string" === s.type(t) ? s(t) : t), a;
                }),
                (a.getItems = function () {
                    return c.g ? c.g() : {};
                }),
                (a.update = function (t) {
                    return c.e && c.e({}, !t), a;
                }),
                (a.force = function (t) {
                    return c.f && c.f("string" === s.type(t) ? s(t) : t), a;
                }),
                (a.loadAll = function () {
                    return c.e && c.e({ all: !0 }, !0), a;
                }),
                (a.destroy = function () {
                    return s(l.appendScroll).off("." + u, c.e), s(t).off("." + u), (c = {}), e;
                }),
                (function i(n, o, a, l, c) {
                    function u() {
                        var e, i, r, u;
                        (C = t.devicePixelRatio > 1),
                            (a = p(a)),
                            o.delay >= 0 &&
                                setTimeout(function () {
                                    d(!0);
                                }, o.delay),
                            (o.delay < 0 || o.combined) &&
                                ((l.e =
                                    ((e = o.throttle),
                                    (i = function (t) {
                                        "resize" === t.type && (x = T = -1), d(t.all);
                                    }),
                                    (u = 0),
                                    function (t, s) {
                                        function a() {
                                            (u = +new Date()), i.call(n, t);
                                        }
                                        var l = +new Date() - u;
                                        r && clearTimeout(r), l > e || !o.enableThrottle || s ? a() : (r = setTimeout(a, e - l));
                                    })),
                                (l.a = function (t) {
                                    (t = p(t)), a.push.apply(a, t);
                                }),
                                (l.g = function () {
                                    return (a = s(a).filter(function () {
                                        return !s(this).data(o.loadedName);
                                    }));
                                }),
                                (l.f = function (t) {
                                    for (var e = 0; e < t.length; e++) {
                                        var i = a.filter(function () {
                                            return this === t[e];
                                        });
                                        i.length && d(!1, i);
                                    }
                                }),
                                d(),
                                s(o.appendScroll).on("scroll." + c + " resize." + c, l.e));
                    }
                    function p(t) {
                        var i = o.defaultImage,
                            r = o.placeholder,
                            a = o.imageBase,
                            l = o.srcsetAttribute,
                            c = o.loaderAttribute,
                            u = o._f || {};
                        t = s(t)
                            .filter(function () {
                                var t = s(this),
                                    i = m(this);
                                return !t.data(o.handledName) && (t.attr(o.attribute) || t.attr(l) || t.attr(c) || u[i] !== e);
                            })
                            .data("plugin_" + o.name, n);
                        for (var p = 0, d = t.length; p < d; p++) {
                            var f = s(t[p]),
                                g = m(t[p]),
                                y = f.attr(o.imageBaseAttribute) || a;
                            g === k && y && f.attr(l) && f.attr(l, v(f.attr(l), y)),
                                u[g] === e || f.attr(c) || f.attr(c, u[g]),
                                g === k && i && !f.attr(E) ? f.attr(E, i) : g === k || !r || (f.css(z) && "none" !== f.css(z)) || f.css(z, "url('" + r + "')");
                        }
                        return t;
                    }
                    function d(t, e) {
                        if (!a.length) return void (o.autoDestroy && n.destroy());
                        for (var i = e || a, r = !1, l = o.imageBase || "", c = o.srcsetAttribute, u = o.handledName, p = 0; p < i.length; p++)
                            if (t || e || g(i[p])) {
                                var d = s(i[p]),
                                    v = m(i[p]),
                                    y = d.attr(o.attribute),
                                    _ = d.attr(o.imageBaseAttribute) || l,
                                    b = d.attr(o.loaderAttribute);
                                d.data(u) ||
                                    (o.visibleOnly && !d.is(":visible")) ||
                                    !(((y || d.attr(c)) && ((v === k && (_ + y !== d.attr(E) || d.attr(c) !== d.attr(O))) || (v !== k && _ + y !== d.css(z)))) || b) ||
                                    ((r = !0), d.data(u, !0), f(d, v, _, b));
                            }
                        r &&
                            (a = s(a).filter(function () {
                                return !s(this).data(u);
                            }));
                    }
                    function f(t, e, i, n) {
                        ++b;
                        var r = function () {
                            _("onError", t), y(), (r = s.noop);
                        };
                        _("beforeLoad", t);
                        var a = o.attribute,
                            l = o.srcsetAttribute,
                            c = o.sizesAttribute,
                            u = o.retinaAttribute,
                            p = o.removeAttribute,
                            d = o.loadedName,
                            f = t.attr(u);
                        if (n) {
                            var g = function () {
                                p && t.removeAttr(o.loaderAttribute), t.data(d, !0), _(A, t), setTimeout(y, 1), (g = s.noop);
                            };
                            t.off(S).one(S, r).one(P, g),
                                _(n, t, function (e) {
                                    e ? (t.off(P), g()) : (t.off(S), r());
                                }) || t.trigger(S);
                        } else {
                            var m = s(new Image());
                            m.one(S, r).one(P, function () {
                                t.hide(),
                                    e === k ? t.attr(D, m.attr(D)).attr(O, m.attr(O)).attr(E, m.attr(E)) : t.css(z, "url('" + m.attr(E) + "')"),
                                    t[o.effect](o.effectTime),
                                    p && (t.removeAttr(a + " " + l + " " + u + " " + o.imageBaseAttribute), c !== D && t.removeAttr(c)),
                                    t.data(d, !0),
                                    _(A, t),
                                    m.remove(),
                                    y();
                            });
                            var v = (C && f ? f : t.attr(a)) || "";
                            m
                                .attr(D, t.attr(c))
                                .attr(O, t.attr(l))
                                .attr(E, v ? i + v : null),
                                m.complete && m.trigger(P);
                        }
                    }
                    function g(e) {
                        var i = e.getBoundingClientRect(),
                            n = o.scrollDirection,
                            r = o.threshold,
                            a = (T >= 0 ? T : (T = s(t).height())) + r > i.top && -r < i.bottom,
                            l = (x >= 0 ? x : (x = s(t).width())) + r > i.left && -r < i.right;
                        return "vertical" === n ? a : "horizontal" === n ? l : a && l;
                    }
                    function m(t) {
                        return t.tagName.toLowerCase();
                    }
                    function v(t, e) {
                        if (e) {
                            var i = t.split(",");
                            t = "";
                            for (var s = 0, n = i.length; s < n; s++) t += e + i[s].trim() + (s !== n - 1 ? "," : "");
                        }
                        return t;
                    }
                    function y() {
                        --b, a.length || b || _("onFinishedAll");
                    }
                    function _(t, e, i) {
                        return !!(t = o[t]) && (t.apply(n, [].slice.call(arguments, 1)), !0);
                    }
                    var b = 0,
                        x = -1,
                        T = -1,
                        C = !1,
                        A = "afterLoad",
                        P = "load",
                        S = "error",
                        k = "img",
                        E = "src",
                        O = "srcset",
                        D = "sizes",
                        z = "background-image";
                    "event" === o.bind || r ? u() : s(t).on(P + "." + c, u);
                })(a, l, i, c, u),
                l.chainable ? i : a
            );
        }
        var s = t.jQuery || t.Zepto,
            n = 0,
            r = !1;
        (s.fn.Lazy = s.fn.lazy = function (t) {
            return new i(this, t);
        }),
            (s.Lazy = s.lazy = function (t, n, r) {
                if ((s.isFunction(n) && ((r = n), (n = [])), s.isFunction(r))) {
                    (t = s.isArray(t) ? t : [t]), (n = s.isArray(n) ? n : [n]);
                    for (var o = i.prototype.config, a = o._f || (o._f = {}), l = 0, c = t.length; l < c; l++) (o[t[l]] === e || s.isFunction(o[t[l]])) && (o[t[l]] = r);
                    for (var u = 0, p = n.length; u < p; u++) a[n[u]] = t[0];
                }
            }),
            (i.prototype.config = {
                name: "lazy",
                chainable: !0,
                autoDestroy: !0,
                bind: "load",
                threshold: 500,
                visibleOnly: !1,
                appendScroll: t,
                scrollDirection: "both",
                imageBase: null,
                defaultImage: "data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==",
                placeholder: null,
                delay: -1,
                combined: !1,
                attribute: "data-src",
                srcsetAttribute: "data-srcset",
                sizesAttribute: "data-sizes",
                retinaAttribute: "data-retina",
                loaderAttribute: "data-loader",
                imageBaseAttribute: "data-imagebase",
                removeAttribute: !0,
                handledName: "handled",
                loadedName: "loaded",
                effect: "show",
                effectTime: 0,
                enableThrottle: !0,
                throttle: 250,
                beforeLoad: e,
                afterLoad: e,
                onError: e,
                onFinishedAll: e,
            }),
            s(t).on("load", function () {
                r = !0;
            });
    })(window),
    $(function () {
        $(".lazy").Lazy();
    }),
    sal({ once: !0 }),
    $(window).scroll(function () {
        $(window).scrollTop() > 0
            ? ($("header").find(".social").addClass("d-md-flex").removeClass("d-md-grid"), $("header").find(".brand").addClass("small"), $("header").addClass("down"), $(".btn-fixed").addClass("show"))
            : ($("header").find(".social").removeClass("d-md-flex").addClass("d-md-grid"), $("header").find(".brand").removeClass("small"), $("header").removeClass("down"), $(".btn-fixed").removeClass("show"));
    }),
    $(".subscription-plans .owl-carousel").owlCarousel({
        lazyLoad: !1,
        loop: !0,
        autoplay: !0,
        autoplayHoverPause: true,
        autoHeight: !0,
        autoHeightClass: "owl-height",
        dots: !1,
        loop: !0,
        autoplay: !0,
        autoplayTimeout: 5e3,
        smartSpeed: 500,
        responsiveClass: !0,
        margin: 50,
        responsive: { 0: { items: 1 }, 600: { items: 1 }, 1200: { items: 2.1 } },
    }),
    $(".yoga-course .owl-carousel").owlCarousel({
        autoplayHoverPause: true,
        lazyLoad: !1,
        loop: !0,
        autoplay: !0,
        autoHeight: !0,
        autoHeightClass: "owl-height",
        dots: !1,
        loop: !0,
        autoplay: !0,
        autoplayTimeout: 5e3,
        smartSpeed: 500,
        responsiveClass: !0,
        margin: 50,
        responsive: { 0: { items: 1 }, 800: { items: 2.5 }, 1200: { items: 3.5 } },
    }),
    $(".yoga-training .owl-carousel").owlCarousel({
        autoplayHoverPause: true,
        lazyLoad: !1,
        loop: !0,
        autoplay: !0,
        autoHeight: !0,
        autoHeightClass: "owl-height",
        dots: !1,
        loop: !0,
        autoplay: !0,
        autoplayTimeout: 5e3,
        smartSpeed: 500,
        responsiveClass: !0,
        margin: 50,
        responsive: { 0: { items: 1 }, 800: { items: 2.5 }, 1200: { items: 3.5 } },
    });
var lastScrollTop = 0,
    delta = 5,
    navbarHeight = $("header").innerHeight() - 200;
function hasScrolled() {
    var t = $(this).scrollTop();
    Math.abs(lastScrollTop - t) <= delta ||
        (t > lastScrollTop && t > navbarHeight ? $("header").removeClass("nav-up").addClass("nav-down") : t + $(window).height() < $(document).height() && $("header").removeClass("nav-down").addClass("nav-up"), (lastScrollTop = t));
}
function initAnimation() {
    $("body").find(".init-animation").addClass("sal-animate");
}
function graphicSliderSet() {
    $(window).width() > 1199 &&
        ($(".bg-graphic .image-round").css("top", $(window).innerHeight() / 10 + 10),
        $(".bg-graphic .image-round").css("width", $(".bg-round-graphic .graphic").innerWidth() - 400),
        $(".bg-graphic .image-round").css("height", $(".bg-round-graphic .graphic").innerHeight() - 400));
}
function hideElemnt() {
    $(".main-wrpr").hide();
}
function showElemnt() {
    $(".main-wrpr").show();
}
function cartStatus(t) {
    0 == $(t).data("cart") ? $(".cart-empty").css("opacity", "1") : ($(".cart-empty").css("opacity", "0"), window.location.replace("/cart.html"));
}
$(window).scroll(function (t) {
    didScroll = !0;
}),
    setInterval(function () {
        didScroll && (hasScrolled(), (didScroll = !1));
    }, 0),
    $(document).ready(function () {
        setTimeout(function () {
            var t;
            $(function () {
                (t = new ScrollMagic.Controller()),
                    new ScrollMagic.Scene({ triggerElement: "#scene1", duration: $(".scene-1").innerHeight() - 500, triggerHook: 0 })
                        .setPin("#bgRoundGraphic", { pushFollowers: !1 })
                        .on("end", function (t) {
                            $(".scene-1 .bg-graphic").toggleClass("hide-bg-graphic");
                        })
                        .addTo(t);
            });
        }, 4e3);
    }),
    $(".mouse").click(function () {
        $("html,body").animate({ scrollTop: $(".subscription-plans").offset().top }, "slow");
    }),
    $(".cart-count").text($(".cart").data("cart")),
    $(window).on("load", function () {
        setTimeout(function () {
            $(".page-loader").fadeOut("slow");
        }, 1e3);
    }),
    $(window).ready(function () {
        setTopSpacing(), initAnimation();
    }),
    $(window).resize(function () {
        setTopSpacing(), initAnimation();
    }),
    $(window).on("orientationchange", function (t) {
        setTopSpacing(), initAnimation();
    });
