<html class="" lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="有赞,移动电商服务平台">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="cleartype" content="on">
    <meta name="referrer" content="always">
    <link rel="shortcut icon" href="https://b.yzcdn.cn/v2/image/yz_fc.ico">
    <title>罗辑思维</title>

    <meta name="viewport" content="width=320, initial-scale=3.0, user-scalable=no">
    <script>
        ! function(e) {
            e.onReady = function(o, t) {
                if (t) {
                    var r = function() {
                        e[o] ? t() : setTimeout(function() {
                            r(o, t)
                        }, 500)
                    };
                    r(o, t)
                }
            };
            var o = /complete|loaded/;
            e.afterLoad = function(t) {
                o.test(document.readyState) && document.body ? setTimeout(t) : e.addEventListener("load", t, !1)
            }
        }(window),
        function(e) {
            var o, t = {
                    script: "src",
                    link: "href"
                },
                r = "b.yzcdn.cn",
                n = "su.yzcdn.cn";
            e._cdnFallback = function(a) {
                var i, c, l, d, f, g, m, u;
                if (i = a.nodeName.toLowerCase(), c = t[i]) {
                    l = d = a[c], l = l.replace(r, n), f = l == d, f || (g = document, m = g.head || g.getElementsByTagName("head")[0] || g.documentElement, u = g.createElement(i), "link" == i && (u.rel = "stylesheet"), u[c] = l, u.onerror = function() {
                        _cdnFallback(u)
                    }, m.appendChild(u)), (new Image).src = "//tj.koudaitong.com/1.gif?net_error=1&fileurl=" + d;
                    var s = l.indexOf(n) > -1 || l.indexOf(r) > -1,
                        p = !o && f;
                    p && s && (e.motify && e.motify.error && e.motify.error("啊哦，有东西加载失败了，刷新下试试~"), o = !0)
                }
            }
        }(window),
        function(e) {
            "use strict";
            var o;
            e.localStorage;
            try {
                var t = new Date;
                try {
                    localStorage.setItem(t, t)
                } catch (r) {
                    if (22 === r.code) throw "localstorage define error"
                }
                var n = localStorage.getItem(t) == t;
                if (localStorage.removeItem(t), !n) throw "localstorage define error";
                if ("FUNCTION" != (typeof localStorage.clear).toUpperCase()) throw "localstorage define error";
                o = localStorage
            } catch (r) {
                var a = function() {
                    return null
                };
                o = {
                    getItem: a,
                    setItem: a,
                    removeItem: a,
                    clear: a
                }
            }
            "function" == typeof define && define.amd && define(function() {
                return o
            }), e.YZLocalStorage = o
        }(window),
        function(e) {
            e.motify = e.motify || {
                error: function(e) {
                    setTimeout(function() {
                        document.body.insertAdjacentHTML("afterbegin", '<div style="color:red;padding:5px;background:#fff;font-size:12px;border-bottom:1px solid #ddd;margin-bottom:5px;"><a style="border-radius:3px;line-height:18px;text-align:center;float:right;margin-left:5px;padding:4px 7px;color:#fff;background-color:#00BF05;" onclick="location.reload();">刷新</a> <p style="line-height:28px;padding-right:53px;word-break:break-all;margin:0;">' + e + "</p></div>")
                    }, 500)
                }
            }, e.zenjs = e.zenjs || {}, e.__logs = [], e.Logger = {
                log: function(o) {
                    e.__logs.push(o)
                }
            }
        }(window);
    </script>



    <style>
        @charset "UTF-8";
        a,
        body {
            color: #333
        }
        
        .clearfix,
        .container .content {
            zoom: 1
        }
        
        .copyright .ft-links~.ft-copyright,
        hr {
            border-image: url(https://su.yzcdn.cn/v2/image/wap/border-line.png) 2 stretch
        }
        
        a,
        abbr,
        acronym,
        address,
        applet,
        article,
        aside,
        audio,
        b,
        big,
        blockquote,
        body,
        canvas,
        caption,
        center,
        cite,
        code,
        dd,
        del,
        details,
        dfn,
        div,
        dl,
        dt,
        em,
        embed,
        fieldset,
        figcaption,
        figure,
        footer,
        form,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        header,
        hgroup,
        html,
        i,
        iframe,
        img,
        ins,
        kbd,
        label,
        legend,
        li,
        mark,
        menu,
        nav,
        object,
        ol,
        output,
        p,
        pre,
        q,
        ruby,
        s,
        samp,
        section,
        small,
        span,
        strike,
        strong,
        sub,
        summary,
        sup,
        table,
        tbody,
        td,
        tfoot,
        th,
        thead,
        time,
        tr,
        tt,
        u,
        ul,
        var,
        video {
            margin: 0;
            padding: 0;
            border: 0;
            font: inherit;
            font-size: 100%;
            vertical-align: baseline
        }
        
        html {
            line-height: 1;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
            font-family: Helvetica, "STHeiti STXihei", "Microsoft JhengHei", "Microsoft YaHei", Tohoma, Arial
        }
        
        ol,
        ul {
            list-style: none
        }
        
        table {
            border-collapse: collapse;
            border-spacing: 0
        }
        
        caption,
        td,
        th {
            font-weight: 400;
            vertical-align: middle
        }
        
        blockquote,
        q {
            quotes: none
        }
        
        blockquote:after,
        blockquote:before,
        q:after,
        q:before {
            content: "";
            content: none
        }
        
        a img {
            border: none
        }
        
        article,
        aside,
        details,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        menu,
        nav,
        section,
        summary {
            display: block
        }
        
        body {
            background-color: #eee;
            -webkit-backface-visibility: hidden
        }
        
        body.body-fixed-bottom {
            padding-bottom: 40px
        }
        
        .container {
            background-color: #f8f8f8
        }
        
        strong {
            font-weight: 700
        }
        
        a {
            background: 0 0;
            text-decoration: none
        }
        
        h1 {
            font-size: 2em;
            margin: .67em 0
        }
        
        h2 {
            font-size: 18px;
            line-height: 22px
        }
        
        h3 {
            font-size: 15px;
            line-height: 18px
        }
        
        button,
        input[type=number],
        input[type=text],
        input[type=password],
        input[type=email],
        input[type=search],
        select,
        textarea {
            font-family: inherit;
            font-size: 100%;
            margin: 0;
            -webkit-tap-highlight-color: transparent;
            -webkit-appearance: none;
            -moz-appearance: none
        }
        
        .c-orange {
            color: #f60!important
        }
        
        .c-orange-dark {
            color: #f15a0c!important
        }
        
        .c-green {
            color: #06bf04!important
        }
        
        .c-red {
            color: #ed5050!important
        }
        
        .c-pink {
            color: #ee614b!important
        }
        
        .c-white {
            color: #fff!important
        }
        
        .c-gray-light {
            color: #e5e5e5!important
        }
        
        .c-gray {
            color: #c9c9c9!important
        }
        
        .c-gray-dark {
            color: #999!important
        }
        
        .c-gray-darker {
            color: #666!important
        }
        
        .c-yellow {
            color: #f09000!important
        }
        
        .c-light-yellow {
            color: #fcff00!important
        }
        
        .c-blue {
            color: #00a0f8!important
        }
        
        .c-black {
            color: #333!important
        }
        
        hr {
            margin: 10px 0;
            border: 0;
            -webkit-border-image: url(https://su.yzcdn.cn/v2/image/wap/border-line.png) 2 stretch;
            -moz-border-image: url(https://su.yzcdn.cn/v2/image/wap/border-line.png) 2 stretch;
            border-top: 2px solid #e5e5e5
        }
        
        @media only screen and (-webkit-min-device-pixel-ratio:1.5),
        only screen and (min--moz-device-pixel-ratio:1.5),
        only screen and (min-device-pixel-ratio:1.5) {
            hr {
                border-top-width: 1px
            }
        }
        
        hr.margin-0 {
            margin: 0
        }
        
        hr.left-10 {
            margin-left: 10px
        }
        
        .relative {
            position: relative
        }
        
        .font-size-12 {
            font-size: 12px!important
        }
        
        .font-size-14 {
            font-size: 14px!important
        }
        
        .font-size-16 {
            font-size: 16px!important
        }
        
        .font-size-18 {
            font-size: 18px!important
        }
        
        .font-size-20 {
            font-size: 20px!important
        }
        
        .font-size-22 {
            font-size: 22px!important
        }
        
        .font-size-24 {
            font-size: 24px!important
        }
        
        .font-size-26 {
            font-size: 26px!important
        }
        
        .font-size-28 {
            font-size: 28px!important
        }
        
        .ellipsis {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis
        }
        
        .border-bottom-none {
            border-bottom: 0 none!important
        }
        
        .border-top-none {
            border-top: 0 none!important
        }
        
        .link,
        .link:active,
        .link:hover,
        .link:link,
        .link:visited {
            color: #07d
        }
        
        .clearfix:after {
            content: "";
            display: table;
            clear: both
        }
        
        .pull-left {
            float: left
        }
        
        .pull-right {
            float: right
        }
        
        .show {
            display: block
        }
        
        .hide {
            display: none!important;
            visibility: hidden
        }
        
        .center,
        .text-center {
            text-align: center
        }
        
        .text-left {
            text-align: left
        }
        
        .text-right {
            text-align: right
        }
        
        #right-icon .icon-txt,
        .btn,
        .btn.btn-block,
        .copyright,
        .copyright .ft-links,
        .footer,
        .fullscreen-guide,
        .motify .motify-inner {
            text-align: center
        }
        
        .loading {
            background-image: url(https://su.yzcdn.cn/v2/image/loader.gif)!important;
            background-repeat: no-repeat!important;
            background-position: center center!important;
            background-size: 16px 16px
        }
        
        @media only screen and (-webkit-min-device-pixel-ratio:1.5),
        only screen and (min--moz-device-pixel-ratio:1.5),
        only screen and (min-device-pixel-ratio:1.5) {
            .loading {
                background-image: url(https://su.yzcdn.cn/v2/image/loader@2x.gif)!important
            }
        }
        
        .with-bs-bottom,
        .with-bs-top {
            background: url(https://su.yzcdn.cn/v2/image/wap/bottom_line.png) left top no-repeat;
            background-size: 100% 1px
        }
        
        .with-bs-bottom {
            background-position: left bottom
        }
        
        .arrow-right::after {
            content: '';
            position: absolute;
            width: 7px;
            height: 7px;
            border-top: 2px solid #cbc9cc;
            border-right: 2px solid #cbc9cc;
            -webkit-transform: rotate(45deg);
            -moz-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg);
            top: 50%;
            right: 3px;
            margin-top: -5px
        }
        
        .content,
        .wrapper {
            margin: 0 auto
        }
        
        .wrapper {
            width: 320px
        }
        
        .container .content:after {
            content: "";
            display: table;
            clear: both
        }
        
        .footer-weixiaodian {
            position: fixed;
            bottom: 0;
            width: 100%;
            z-index: 100
        }
        
        .footer-weixiaodian .footer-weixiaodian-download-link {
            display: block;
            width: 100%;
            height: 60px;
            background: url(https://su.yzcdn.cn/v2/image/wap/download_wxd.png) no-repeat;
            background-size: cover
        }
        
        .footer-weixiaodian .footer-weixiaodian-close {
            position: absolute;
            display: block;
            right: 0;
            top: 0;
            width: 40px;
            height: 40px;
            background: 0 0
        }
        
        @media (min-width:360px) {
            .footer-weixiaodian .footer-weixiaodian-download-link {
                height: 67.5px
            }
        }
        
        @media (min-width:375px) {
            .footer-weixiaodian .footer-weixiaodian-download-link {
                height: 70.31px
            }
        }
        
        @media (min-width:414px) {
            .footer-weixiaodian .footer-weixiaodian-download-link {
                height: 77.63px
            }
        }
        
        @media (min-width:540px) {
            .footer-weixiaodian {
                display: none
            }
        }
        
        .copyright {
            background-color: #f8f8f8;
            color: #999;
            font-size: 12px;
            line-height: 16px
        }
        
        .copyright .ft-links {
            padding: 15px
        }
        
        .copyright .ft-links>a {
            margin: 0 6px;
            color: #333
        }
        
        .copyright .ft-links~.ft-copyright {
            -webkit-border-image: url(https://su.yzcdn.cn/v2/image/wap/border-line.png) 2 stretch;
            -moz-border-image: url(https://su.yzcdn.cn/v2/image/wap/border-line.png) 2 stretch;
            border-top: 2px solid #e5e5e5
        }
        
        @media only screen and (-webkit-min-device-pixel-ratio:1.5),
        only screen and (min--moz-device-pixel-ratio:1.5),
        only screen and (min-device-pixel-ratio:1.5) {
            .copyright .ft-links~.ft-copyright {
                border-top-width: 1px
            }
        }
        
        .copyright .ft-copyright {
            padding: 50px 0 20px;
            margin: 0 15px;
            text-align: center;
            font-size: 12px;
            background: url(https://su.yzcdn.cn/v2/image/wap/common/logo@2x.png) center 20px no-repeat;
            background-size: 73px 24px
        }
        
        .copyright .ft-copyright:first-child,
        .full-screen .footer {
            margin-top: 0
        }
        
        .copyright .ft-copyright>a {
            padding-top: 45px;
            color: #ccc
        }
        
        .btn,
        .btn:hover {
            color: #999
        }
        
        .copyright .pf-copyright {
            display: block;
            background: url(https://su.yzcdn.cn/v2/image/pf/ui/copyright.png) center 20px no-repeat;
            background-size: 73px 24px
        }
        
        .footer {
            margin: 0;
            padding: 0;
            min-height: 1px;
            line-height: 16px;
            background-color: #f8f8f8
        }
        
        .footer .link-icon {
            display: inline-block;
            width: 16px;
            height: 16px;
            margin-bottom: -3px;
            margin-right: 10px;
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAWJQAAFiUBSVIk8AAAABx0RVh0U29mdHdhcmUAQWRvYmUgRmlyZXdvcmtzIENTNui8sowAAAAVdEVYdENyZWF0aW9uIFRpbWUAMS8yOC8xM4B+MooAAAZqSURBVFiFrZdPTFN7Fse/5/6hVan9R+vjWag1JUYSbSel9BplKLogExOsitZJlFa6cWPGdDZuVIwaXTiViSZuRoWVk7gYx817uxEX72pGYgsmT5GEEmHyNLVAWmXa3vbOgt5rW/DlAXOSbn733N/59PzO73zPJaxgTqdz244dOwa0Wm2AiPTKuiRJibm5ucGRkZGhld5bi1Htgt/vDzc0NDxgGAYMw1Q9k2UZpVIJhUIh8fr168Dk5GTy/wrQ1dUVtlgsD1iWBcuyYBgGRKQGl2UZxWIRpVIJkiQtTExM+MfGxuLrAWArg1ut1gc8z4PjOPVXCaP8iAhEpDWZTH/kOO7HDx8+/LIugH379gUaGxsfchwHnufVoD09PQgGgzh16hRsNhsymQzm5uaqIIxG47ogWADw+Xw/8jxvUIJv2rQJ58+fh8/ng16/VIONjY3Yu3cvUqkUZmdn1aMhIq1er9/z6dOnv3/+/Pm/qwVgOjs7AzzP25V0ExFCoRDsdjsAXAbwO1qKdhjASH9/PwRBAMMw6jFpNBpXW1vbubVkgNm8ebNbSTkRYevWrfB4PAvlwANEFC//08dE5AcwHIlE4HK5VAiWZaHT6frXBLB9+/bfK0UGAC0tLQAQVgJXmiAIfiIKAxg+ePDg0gYMA5ZlwXFc086dO7etGqCpqYmpvGqpVCpNRI8rnaxWqyEQCMRtNtu/jh49Gnc4HOccDsc/S6VSFYTFYlk9gNls3lgJMDY2tslmsxkqnXw+32BdXZ2rfEtc7e3tT0VR/IsgCCoAEaG9vf27VQN4PJ6fZFkGABARJEnSeL3ewUqnjRs31vE8D6VH8DzvunPnzu0TJ05AEATIsgwiwsmTJ7OrBti1a1dyz549KgDDMNiwYUOop6dnSHG6ffs2HA4HKiFYlnUNDAykg8EgBEFAS0sLXC7XqgFIluVtmUxm6urVq0in00qvR6FQwJcvX4afPHkSlmV5KJPJhGKxGGZmZlAqlVAqlSDLMsxmc3pgYMCUzWZx48YN15s3b/ZrNBo/wzAGAMjlcvHZ2dmh8fHxFVs2AYAsy0NTU1OhW7duYXFxEcViEYVCAcViEcVicZrjuB+OHDnS093d/X0sFsP79++rIIxGY/rChQs/RyKRlxqN5k/KkZT3hizLyOfzI6IoBj5+/Di/EoABQDyZTNpjsZgKIUkSisXi0lkxDLxeb7q/v99UC1H2+bm3t/eEKIp/m5mZ8VYCKD7FYnGZgKlqKMuyG8DTZDKpVyCUF5UiBYC2trb06dOnqyDKm8NoNKauXbvW8PDhQ7x48WIlAEiStPD27VsVokqOFYhsNqu/e/cuJiYm1BQq6QaAjo6OVDAYbKiFUGri8uXLJlEUkU6nEY/HkUqlVB9JklAoFFSIZQOJAgFAPz09jXg8roJotVoYDIZ/LywsHDt8+PAPBoNh50o1oRSmTqcDANy/fx+iKCpzBCRJQj6fn3727Jl7GUBFTTwG0LnScwB/7evrO+DxeL6PRCLLaqJUKkGn0/3n4sWLT6xW6x8A2O/du4fnz59XQWSz2eEVAWqyEQDgLy/NA3h68+bNf7x69SrJsiy8Xu83ayKXyw0/evQoLMvyEIBQLUQ+nwf3awBlQVp2fzs7O/02mw0AMDo6agKQjkajKkQZHjzP15X3CcuyjOPHj4cSiQQWFxcVAQNTu/lvsebm5npFgIgIo6Ojpvr6+kQ0GoXNZgMRobm5GYODXzs6EYV1Ot2w0+kE8FXA1gRw4MCB7yrnQwA4e/bs2fr6+sSlS5cQjUZx5coVWCyWfM2r53iez5eBllr/WgBCodBkQ0MDKkf3VCr1ZyzVSqK1tRUAEgCqpiQimp+cnFysFL81AQCYrxUwjuMO9fb2DhKRG0AXEbmJqKrtdnd3h1OplL5y7VeL8FtGRPH5+fn34+PjTcqAyjAMNBpN6NChQyhPTVUmCILfaDQOKkcGACaT6et3wWrt+vXrervd7n/58qWqFwDAMIzb6XR2mc3m+Vwu90tra6uwe/fu8JYtWx7wPK/lOE49tjNnziz/NPutVm5WT6emplyVKqo0GaU1K9lhWVb95iAi9PX1oaOjY3rNAGWIZQKmNCGlI1YC1AQHgK51AXwLolK81Ou2NGnh2LFjSvDTRDS0boBaiHfv3kEURbUjAoDZbIbb7cb+/fthtVrV4ADwP3+yVfhMKQFgAAAAAElFTkSuQmCC);
            background-repeat: no-repeat;
            background-size: 16px
        }
        
        .footer .link-title {
            font-size: 16px
        }
        
        .btn {
            display: inline-block;
            background-color: #fff;
            border: 1px solid #e5e5e5;
            border-radius: 3px;
            padding: 5px 4px;
            margin: 0;
            font-size: 12px;
            cursor: pointer;
            line-height: 18px;
            -webkit-appearance: none
        }
        
        .fullscreen-guide.hide,
        .motify {
            display: none
        }
        
        .btn:active {
            background-color: #e9e9e9;
            color: #999
        }
        
        .btn.disabled,
        .btn[disabled] {
            background-color: #c9c9c9!important;
            background-image: none!important;
            border: 1px solid transparent!important;
            color: #fff!important
        }
        
        .btn.disabled:active,
        .btn[disabled]:active {
            background-color: #c9c9c9!important;
            background-image: none!important;
            border: 1px solid #bcbcbc!important
        }
        
        .btn.btn-blue {
            color: #fff;
            background-color: #00a0f8;
            border-color: #00a0f8
        }
        
        .btn.btn-gray-dark {
            color: #333;
            background-color: #999;
            border-color: #999
        }
        
        .btn.btn-green {
            color: #fff;
            background-color: #06bf04;
            border-color: #03b401
        }
        
        .btn.btn-red {
            color: #fff;
            background-color: #ed5050;
            border-color: #ed5050
        }
        
        .btn.btn-pink {
            color: #fff;
            background-color: #ee614b;
            border-color: #ee614b
        }
        
        .btn.btn-white {
            color: #333;
            background-color: #fff;
            border-color: #e5e5e5
        }
        
        .btn.btn-yellow {
            color: #fff;
            background-color: #f09000;
            border-color: #f09000
        }
        
        .btn.btn-grayeee {
            color: #999;
            background-color: #eee;
            border-color: 1px solid #ebebeb
        }
        
        .btn.btn-orange {
            color: #fff;
            border-color: #f60;
            background-color: #f60
        }
        
        .btn.btn-orange-dark {
            color: #fff;
            border-color: #f15a0c;
            background-color: #f15a0c
        }
        
        .btn.btn-block {
            width: 100%;
            padding: 11px 10px;
            font-size: 16px;
            line-height: 16px;
            border-radius: 4px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box
        }
        
        .btn.btn-xsmall,
        .btn.btn-xxsmall {
            line-height: 14px;
            width: auto;
            font-size: 12px
        }
        
        .btn.btn-xsmall {
            padding: 8px 10px
        }
        
        .btn.btn-xxsmall {
            padding: 4px 10px
        }
        
        .btn.btn-l {
            padding: 9px 4px;
            font-size: 14px
        }
        
        .btn.btn-opt {
            min-width: 50px
        }
        
        .motify {
            position: fixed;
            top: 35%;
            left: 50%;
            width: 220px;
            padding: 0;
            margin: 0 0 0 -110px;
            z-index: 9999;
            background: rgba(0, 0, 0, .8);
            color: #fff;
            font-size: 14px;
            line-height: 1.5em;
            border-radius: 6px;
            -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, .2);
            box-shadow: 0 1px 2px rgba(0, 0, 0, .2)
        }
        
        .motify .motify-inner {
            padding: 10px;
            word-wrap: break-word
        }
        
        .motify p {
            margin: 0 0 5px
        }
        
        .motify p:last-of-type {
            margin-bottom: 0
        }
        
        .fullscreen-guide {
            z-index: 2000;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, .9)
        }
        
        .fullscreen-guide .guide-close {
            position: absolute;
            top: 0;
            left: 10px;
            font-size: 40px;
            color: #fff;
            cursor: pointer
        }
        
        .fullscreen-guide .guide-arrow {
            position: absolute;
            top: 2px;
            right: 15px;
            background: url(https://su.yzcdn.cn/v2/image/wap/guide_arrow.png) top left no-repeat;
            width: 47px;
            height: 44px
        }
        
        .fullscreen-guide .guide-inner {
            padding-top: 48px;
            width: 320px;
            margin: 0 auto
        }
        
        .follow-guide .wxid,
        .fullscreen-guide .step {
            width: 260px;
            text-align: left;
            display: inline-block
        }
        
        .fullscreen-guide .step {
            margin-bottom: 15px
        }
        
        .follow-guide .guide-inner-title {
            color: #FFF;
            border-bottom: 1px solid #CCC;
            margin: 10px;
            padding-bottom: 30px;
            font-size: 18px;
            font-weight: 400
        }
        
        .follow-guide .step-2 {
            margin-bottom: 10px
        }
        
        .follow-guide .wxid {
            margin-bottom: 25px;
            padding-left: 65px;
            font-size: 18px
        }
        
        .follow-guide .step-1,
        .follow-guide .step-2,
        .follow-guide .step-3 {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }
        
        .follow-guide .wxid strong {
            padding: 1px 5px;
            background-color: #fff;
            color: #000;
            border-radius: 4px
        }
        
        .follow-guide .step-1 {
            height: 29px
        }
        
        .follow-guide .step-2 {
            height: 64px;
            background: url(https://su.yzcdn.cn/v2/image/wap/step_2.png) no-repeat
        }
        
        .follow-guide .step-3 {
            margin-top: 10px;
            height: 68px;
            background: url(https://su.yzcdn.cn/v2/image/wap/step_3.png) no-repeat
        }
        
        .follow-guide .quick-subscribe {
            margin: 140px 15px 0;
            padding: 10px;
            background: #fff;
            border: 2px solid #f2f2f2;
            border-radius: 10px
        }
        
        .follow-guide .quick-subscribe h2 {
            font-size: 14px;
            border-bottom: 1px solid #f2f2f2;
            padding-bottom: 20px;
            margin: 12px 0
        }
        
        .follow-guide .quick-subscribe .btn {
            font-size: 14px;
            background: #4b0;
            color: #fff;
            display: inline-block;
            line-height: 38px;
            padding: 0 26px;
            border-radius: 4px
        }
        
        #right-icon,
        .fixed-icon {
            border-radius: 26px;
            position: fixed;
            right: 6px;
            z-index: 10;
            width: 50px
        }
        
        .fuck-taobao .step-1 {
            height: 29px;
            background: url(https://su.yzcdn.cn/v2/image/wap/step_1.png) no-repeat
        }
        
        .fuck-taobao .step-2 {
            height: 86px;
            background: url(https://su.yzcdn.cn/v2/image/wap/ftios_step_2.png) no-repeat
        }
        
        .fuck-taobao .step-and-2 {
            height: 62px;
            background: url(https://su.yzcdn.cn/v2/image/wap/ftand_step_2.png) no-repeat
        }
        
        .fav-guide .step-1 {
            height: 29px;
            background: url(https://su.yzcdn.cn/v2/image/wap/step_1.png) no-repeat
        }
        
        .fav-guide .step-2 {
            height: 86px;
            background: url(https://su.yzcdn.cn/v2/image/wap/fav_step_2.png) no-repeat
        }
        
        @media only screen and (-webkit-min-device-pixel-ratio:1.5),
        only screen and (min--moz-device-pixel-ratio:1.5),
        only screen and (-o-min-device-pixel-ratio:3/2),
        only screen and (min-device-pixel-ratio:1.5) {
            .fullscreen-guide .guide-arrow {
                background-image: url(https://su.yzcdn.cn/v2/image/wap/guide_arrow@2x.png);
                background-size: 47px 44px
            }
            .follow-guide .step-2 {
                background-image: url(https://su.yzcdn.cn/v2/image/wap/step_2@2x.png);
                background-size: 260px 64px
            }
            .follow-guide .step-3 {
                background-image: url(https://su.yzcdn.cn/v2/image/wap/step_3@2x.png);
                background-size: 260px 68px
            }
            .fuck-taobao .step-1 {
                background-image: url(https://su.yzcdn.cn/v2/image/wap/step_1@2x.png);
                background-size: 260px 29px
            }
            .fuck-taobao .step-2 {
                background-image: url(https://su.yzcdn.cn/v2/image/wap/ftios_step_2@2x.png);
                background-size: 248px 86px
            }
            .fuck-taobao .step-and-2 {
                background-image: url(https://su.yzcdn.cn/v2/image/wap/ftand_step_2@2x.png);
                background-size: 260px 62px
            }
            .fav-guide .step-1 {
                background-image: url(https://su.yzcdn.cn/v2/image/wap/step_1@2x.png);
                background-size: 260px 29px
            }
            .fav-guide .step-2 {
                background-image: url(https://su.yzcdn.cn/v2/image/wap/fav_step_2@2x.png);
                background-size: 260px 86px
            }
            .share-guide .step-1 {
                background-image: url(https://su.yzcdn.cn/v2/image/wap/step_1@2x.png);
                background-size: 260px 29px
            }
            .share-guide .step-2 {
                background-image: url(https://su.yzcdn.cn/v2/image/wap/share_step_2@2x.png);
                background-size: 260px 86px
            }
        }
        
        a#global-cart {
            z-index: 10;
            display: block
        }
        
        a#global-cart .icon-img {
            background: url(https://su.yzcdn.cn/v2/image/wap/right_icon/icons_sprite/icons_sprite_29025c38a6.png) -202px -4px no-repeat;
            background-size: 300px 150px
        }
        
        a#global-cart.hide {
            display: none
        }
        
        a#global-cart.new .icon-img {
            background-position: -250px -4px
        }
        
        .no-text a#global-cart {
            background: url(https://su.yzcdn.cn/v2/image/wap/right_icon/icons_sprite/icons_sprite_29025c38a6.png) no-repeat;
            background-size: 300px 150px
        }
        
        .no-text a#global-cart.s0 {
            background-position: -200px -100px
        }
        
        .no-text a#global-cart.s1 {
            background-position: -150px -100px
        }
        
        .no-text a#global-cart.s2 {
            background-position: -100px -100px
        }
        
        .no-text a#global-cart.s3 {
            background-position: -50px -100px
        }
        
        @media only screen and (-webkit-min-device-pixel-ratio:1.5),
        only screen and (min--moz-device-pixel-ratio:1.5),
        only screen and (min-device-pixel-ratio:1.5) {
            .no-text a#global-cart,
            a#global-cart .icon-img {
                background-image: url(https://su.yzcdn.cn/v2/image/wap/right_icon/icons_sprite/icons_sprite@2x_29025c38a6.png)
            }
            a#global-cart .icon-img {
                background-position: -200px -7px
            }
            a#global-cart.new .icon-img {
                background-position: -250px -7px
            }
        }
        
        .fixed-icon {
            height: 50px;
            bottom: 52px;
            cursor: pointer
        }
        
        .ds-btn {
            bottom: 115px
        }
        
        .ds-btn .icon-img {
            height: 100%;
            background-image: url(https://su.yzcdn.cn/v2/image/wap/right_icon/icons_sprite/icons_sprite_29025c38a6.png);
            background-repeat: no-repeat;
            background-size: 300px 150px;
            background-position: 0 -100px
        }
        
        @media only screen and (-webkit-min-device-pixel-ratio:1.5),
        only screen and (min--moz-device-pixel-ratio:1.5),
        only screen and (min-device-pixel-ratio:1.5) {
            .ds-btn .icon-img {
                background-image: url(https://su.yzcdn.cn/v2/image/wap/right_icon/icons_sprite/icons_sprite@2x_29025c38a6.png)
            }
        }
        
        a#global-wish {
            z-index: 10;
            display: block
        }
        
        #right-icon.no-text .icon-img,
        #right-icon.no-text .icon-txt,
        a#global-wish.hide {
            display: none
        }
        
        a#global-wish .icon-img {
            background: url(https://su.yzcdn.cn/v2/image/wap/right_icon/icons_sprite/icons_sprite_29025c38a6.png) -2px -4px no-repeat;
            background-size: 300px 150px
        }
        
        a#global-wish.new .icon-img {
            background-position: -45px -7px
        }
        
        .no-text a#global-wish {
            background: url(https://su.yzcdn.cn/v2/image/wap/right_icon/icons_sprite/icons_sprite_29025c38a6.png) -150px -50px;
            background-size: 300px 150px
        }
        
        .no-text a#global-wish.new {
            background-position: -200px -50px
        }
        
        @media only screen and (-webkit-min-device-pixel-ratio:1.5),
        only screen and (min--moz-device-pixel-ratio:1.5),
        only screen and (min-device-pixel-ratio:1.5) {
            .no-text a#global-wish,
            a#global-wish .icon-img {
                background-image: url(https://su.yzcdn.cn/v2/image/wap/right_icon/icons_sprite/icons_sprite@2x_29025c38a6.png)
            }
            a#global-wish .icon-img {
                background-position: 3px -7px
            }
        }
        
        #right-icon {
            height: 50px;
            border: 1px solid #e1e1e1;
            bottom: 52px;
            overflow: hidden;
            -webkit-transition: width ease-in-out .3s;
            -moz-transition: width ease-in-out .3s;
            transition: width ease-in-out .3s;
            background-color: #fff;
            background-clip: padding-box
        }
        
        #right-icon .right-icon-container {
            position: absolute;
            height: 50px;
            right: 0;
            top: 0
        }
        
        #right-icon .icon {
            float: left;
            width: 50px;
            height: 50px
        }
        
        #right-icon .show-more-btn {
            background-image: url(https://su.yzcdn.cn/v2/image/wap/right_icon/icons_sprite/icons_sprite_29025c38a6.png);
            background-repeat: no-repeat;
            background-size: 300px 150px;
            background-position: 1px -50px
        }
        
        #right-icon .show-more-btn.new {
            background-position: -99px -50px
        }
        
        #right-icon .icon-img {
            height: 32px
        }
        
        #right-icon .icon-txt {
            line-height: 18px;
            font-size: 12px;
            color: #9f9f9f
        }
        
        #right-icon.show {
            padding-left: 12px
        }
        
        #right-icon.show .show-more-btn {
            background-position: -49px -50px
        }
        
        #right-icon.no-text {
            border: 0;
            background-color: transparent
        }
        
        @media only screen and (-webkit-min-device-pixel-ratio:1.5),
        only screen and (min--moz-device-pixel-ratio:1.5),
        only screen and (min-device-pixel-ratio:1.5) {
            #right-icon .show-more-btn {
                background-image: url(https://su.yzcdn.cn/v2/image/wap/right_icon/icons_sprite/icons_sprite@2x_29025c38a6.png)
            }
        }
    </style>
    <style>
        .custom-title {
            background: url(https://su.yzcdn.cn/v2/image/wap/bottom_line.png) left bottom no-repeat;
            background-size: 100% 1px;
            padding: 10px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            margin-bottom: 10px;
            overflow: hidden;
            word-break: break-all
        }
        
        .custom-title .title {
            margin: 0;
            font-size: 18px;
            line-height: 22px
        }
        
        .custom-title .sub_title {
            color: #8c8c8c;
            font-size: 11px;
            margin: 5px 0 0
        }
        
        .custom-title .sub_title_author,
        .custom-title .sub_title_date {
            margin-right: 10px
        }
        
        .custom-title .sub_title_author:empty,
        .custom-title .sub_title_date:empty {
            margin-right: 0
        }
        
        .custom-title .sub_title_link {
            color: #6191bf
        }
        
        .custom-title.wx_template {
            padding-top: 17px;
            padding-bottom: 1px
        }
        
        .custom-title.wx_template .title {
            font-size: 20px;
            font-weight: 700;
            line-height: 24px;
            color: #000
        }
        
        .custom-title.wx_template .sub_title {
            line-height: 1.6;
            font-size: 12px;
            font-weight: 400;
            margin-top: 3px
        }
        
        .custom-title.wx_template .sub_title_link {
            color: #607fa6
        }
        
        .custom-title-link {
            margin-left: 10px
        }
        
        .custom-title-link a {
            font-size: 12px;
            color: #07d
        }
        
        .custom-title-noline .custom-title {
            background: 0 0
        }
        
        .custom-audio {
            padding: 10px
        }
        
        .custom-audio-loading {
            display: none
        }
        
        .custom-audio-weixin {
            position: relative
        }
        
        .custom-audio-weixin-right .custom-audio-logo {
            float: right
        }
        
        .custom-audio-weixin-right .custom-audio-animation-static {
            background-position: -180px -83px;
            right: 21px;
            left: auto
        }
        
        .custom-audio-weixin-right .custom-audio-bar {
            background-position: -187px 0;
            left: auto;
            right: 50px
        }
        
        .custom-audio-weixin-right .custom-audio-bar .custom-audio-loading {
            left: 20px;
            right: auto
        }
        
        .custom-audio-weixin-right .custom-audio-bar .custom-audio-status {
            right: 43px;
            left: auto
        }
        
        .custom-audio-weixin-right .custom-audio-bar img {
            right: 21px;
            left: auto
        }
        
        .custom-audio-weixin-right .custom-audio-unread {
            left: auto;
            right: 245px
        }
        
        .custom-audio-weixin-right .custom-audio-time {
            left: auto;
            right: 240px
        }
        
        .custom-audio-logo {
            -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .3);
            box-shadow: 0 1px 1px rgba(0, 0, 0, .3)
        }
        
        .custom-audio-animation-static,
        .custom-audio-bar,
        .custom-audio-btn,
        .custom-audio-unread {
            background: url(https://su.yzcdn.cn/v2/image/wap/audio/sprite_v5.png) no-repeat;
            background-size: 400px 175px
        }
        
        .custom-audio-animation-static {
            background-position: -180px -105px;
            width: 13px;
            height: 17px;
            display: block;
            position: absolute;
            left: 21px;
            top: 12px;
            z-index: 1
        }
        
        .custom-audio-bar,
        .custom-audio-unread {
            display: inline-block;
            position: absolute
        }
        
        .custom-audio-bar {
            width: 185px;
            height: 42px;
            left: 50px;
            cursor: pointer
        }
        
        .custom-audio-bar img {
            position: absolute;
            left: 21px;
            top: 12px;
            z-index: 2
        }
        
        .custom-audio-bar .custom-audio-status {
            position: absolute;
            left: 43px;
            top: 15px
        }
        
        .custom-audio-bar .custom-audio-loading {
            left: auto;
            right: 10px;
            top: 12px
        }
        
        .custom-audio-status {
            font-size: 12px
        }
        
        .custom-audio-unread {
            background-position: 0 -42px;
            width: 10px;
            height: 10px;
            left: 245px;
            top: -2px
        }
        
        .custom-audio-time {
            color: #999;
            font-size: 14px;
            position: absolute;
            left: 240px;
            bottom: 5px;
            display: none
        }
        
        .custom-audio-music {
            position: relative;
            width: 100%;
            height: 38px;
            border: 1px solid #ddd;
            background-color: #fff;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box
        }
        
        .custom-audio-music .custom-audio-status {
            position: absolute;
            left: 42px;
            top: 14px
        }
        
        .custom-audio-music .custom-audio-loading {
            position: absolute;
            right: 10px;
            top: 10px
        }
        
        .custom-audio-btn {
            background-position: 0 -56px;
            display: block;
            position: absolute;
            cursor: pointer;
            left: 10px;
            top: 8px;
            width: 22px;
            height: 22px
        }
        
        .custom-audio-music .custom-audio-time {
            font-size: 12px;
            position: absolute;
            right: 10px;
            top: 14px;
            left: auto;
            bottom: auto
        }
        
        .custom-audio-title {
            position: absolute;
            left: 42px;
            top: 12px;
            line-height: 1em;
            font-size: 14px;
            color: #333;
            width: 250px;
            display: block;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap
        }
        
        .custom-audio-music .custom-audio-timeline {
            position: absolute;
            left: 0;
            bottom: 0;
            border-bottom: 1px solid #69aa2f;
            display: block;
            width: 0
        }
        
        .custom-audio-status-pause .custom-audio-unread,
        .custom-audio-status-play .custom-audio-unread,
        .custom-audio-status-stop .custom-audio-unread {
            display: none
        }
        
        .custom-audio-status-pause .custom-audio-title,
        .custom-audio-status-play .custom-audio-title,
        .custom-audio-status-stop .custom-audio-title {
            width: 180px
        }
        
        .custom-audio-status-pause .custom-audio-music,
        .custom-audio-status-play .custom-audio-music,
        .custom-audio-status-stop .custom-audio-music {
            height: 58px
        }
        
        .custom-audio-status-pause .custom-audio-time,
        .custom-audio-status-play .custom-audio-time,
        .custom-audio-status-stop .custom-audio-time {
            display: block
        }
        
        .custom-audio-status-pause .rangeslider,
        .custom-audio-status-play .rangeslider,
        .custom-audio-status-stop .rangeslider {
            visibility: visible
        }
        
        .custom-audio-status-play .custom-audio-bar .custom-audio-animation {
            display: block!important;
            visibility: visible
        }
        
        .custom-audio-status-play[data-reload=true] .custom-audio-btn {
            background-position: 0 -100px
        }
        
        .custom-audio-status-play .custom-audio-btn {
            background-position: 0 -78px
        }
        
        .custom-audio-status-pause .custom-audio-btn,
        .custom-audio-status-stop .custom-audio-btn {
            background-position: 0 -56px
        }
        
        .rangeslider,
        .rangeslider__fill {
            background: #f9f9f9;
            display: block;
            height: 19px;
            width: 100%
        }
        
        .rangeslider {
            position: relative;
            top: 36px;
            visibility: hidden;
            border-top: 1px solid #ddd
        }
        
        .rangeslider--disabled {
            opacity: .4
        }
        
        .rangeslider__fill {
            position: absolute;
            top: 0;
            background: url(https://su.yzcdn.cn/v2/image/wap/audio/progress.png) repeat-x;
            background-size: 1px 19px
        }
        
        .rangeslider__handle {
            cursor: pointer;
            display: inline-block;
            width: 46px;
            height: 21px;
            position: absolute;
            top: -1px;
            background: url(https://su.yzcdn.cn/v2/image/wap/audio/button.png) no-repeat
        }
        
        @media only screen and (-webkit-min-device-pixel-ratio:1.5),
        only screen and (min--moz-device-pixel-ratio:1.5),
        only screen and (min-device-pixel-ratio:1.5) {
            .rangeslider__handle {
                background-image: url(https://su.yzcdn.cn/v2/image/wap/audio/button@2x.png);
                background-size: 46px 21px
            }
        }
        
        .custom-richtext img,
        .custom-richtext ol {
            width: auto!important
        }
        
        .custom-richtext {
            padding: 10px 10px 0;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            font-size: 16px;
            color: #333;
            line-height: 1.5;
            overflow: hidden;
            text-align: left;
            word-wrap: break-word;
            position: relative
        }
        
        .custom-richtext img+br {
            display: block;
            padding: 4px 0;
            content: ' '
        }
        
        .custom-richtext p {
            margin: 0 0 1em
        }
        
        .custom-richtext a {
            color: #07d
        }
        
        .custom-richtext img {
            background: 0 0;
            max-width: 100%!important;
            min-height: 1px;
            height: auto!important;
            vertical-align: middle
        }
        
        .custom-richtext ol,
        .custom-richtext ul {
            list-style-position: inside;
            padding-left: 0
        }
        
        .custom-richtext blockquote {
            padding: 0 0 0 15px;
            margin: 0 0 18px;
            border-left: 5px solid #EEE
        }
        
        .custom-richtext em,
        .custom-richtext i {
            font-style: italic
        }
        
        .custom-richtext b,
        .custom-richtext strong {
            font-weight: 700
        }
        
        .custom-richtext .selectTdClass {
            background-color: #edf5fa!important
        }
        
        .custom-richtext table.noBorderTable caption,
        .custom-richtext table.noBorderTable td,
        .custom-richtext table.noBorderTable th {
            border: 1px dashed #ddd!important
        }
        
        .custom-richtext table {
            margin-bottom: 10px;
            border-collapse: collapse;
            display: table;
            width: auto!important
        }
        
        .custom-richtext td,
        .custom-richtext th {
            padding: 5px 10px;
            border: 1px solid #ddd
        }
        
        .custom-richtext caption {
            border: 1px dashed #ddd;
            border-bottom: 0;
            padding: 3px;
            text-align: center
        }
        
        .custom-richtext th {
            border-top: 2px solid #bbb;
            background: #f7f7f7
        }
        
        .custom-richtext .ue-table-interlace-color-single {
            background-color: #fcfcfc
        }
        
        .custom-richtext .ue-table-interlace-color-double {
            background-color: #f7faff
        }
        
        .custom-richtext td p {
            margin: 0;
            padding: 0
        }
        
        .custom-richtext-fullscreen {
            padding: 0;
            margin-top: 0
        }
        
        .custom-image img,
        .custom-image-swiper .swiper-slide a img {
            max-width: 100%;
            height: auto
        }
        
        .custom-image-single {
            position: relative
        }
        
        .custom-image-single img {
            width: 100%;
            float: left
        }
        
        .custom-image .title,
        .custom-image-single .title,
        .custom-image-swiper .title {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            margin: 0 auto;
            text-align: left;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 5px 15px;
            z-index: 10;
            background-color: rgba(51, 51, 51, .8);
            color: #fff;
            font-size: 14px;
            line-height: 1.5
        }
        
        .custom-image a[href="javascript:;"],
        .custom-image a[href="javascript:void(0);"],
        .custom-image-single a[href="javascript:;"],
        .custom-image-single a[href="javascript:void(0);"],
        .custom-image-swiper a[href="javascript:;"],
        .custom-image-swiper a[href="javascript:void(0);"] {
            cursor: default
        }
        
        .custom-image-swiper {
            width: 100%;
            position: relative
        }
        
        .custom-image-swiper .swiper-slide a {
            display: block;
            position: relative;
            text-align: center;
            width: 320px
        }
        
        .custom-image-swiper-single .swiper-slide {
            float: none
        }
        
        .custom-image {
            padding: 0 5px;
            margin: 0;
            font-size: 12px
        }
        
        .custom-image li {
            margin: 5px auto;
            position: relative;
            min-height: 40px
        }
        
        .custom-image a {
            display: block
        }
        
        .custom-image img {
            display: block;
            margin: 0 auto
        }
        
        .custom-image .custom-image-small {
            width: 50%;
            height: 155px;
            float: left;
            overflow: hidden
        }
        
        .custom-image .custom-image-small img {
            width: 100%;
            height: auto
        }
        
        .custom-image .custom-image-small:nth-child(2n) img {
            padding-left: 5px
        }
        
        .custom-image .custom-image-small:nth-child(2n) h3 {
            left: 5px
        }
        
        @charset "UTF-8";
        .custom-store {
            position: relative;
            padding: 10px;
            background-color: #fff
        }
        
        .custom-store .custom-store-img {
            position: absolute;
            top: 11px;
            left: 10px;
            height: 18px;
            width: 18px;
            background: url(https://su.yzcdn.cn/v2/image/wap/showcase/goods/goods_c9431a6d41.png) -40px 0 no-repeat;
            background-size: 58px 48px
        }
        
        .custom-store .custom-store-link {
            display: block
        }
        
        .custom-store .custom-store-name {
            float: left;
            padding: 0 0 0 25px;
            height: 22px;
            line-height: 22px;
            font-size: 14px;
            color: #333;
            max-width: 210px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap
        }
        
        .custom-store .custom-store-enter {
            float: right;
            height: 14px;
            line-height: 14px;
            margin: 4px 0;
            font-size: 12px;
            color: #999;
            padding-right: 15px
        }
        
        .custom-store:after {
            content: '';
            position: absolute;
            top: 15px;
            right: 10px;
            width: 6px;
            height: 11px;
            background: url(https://su.yzcdn.cn/v2/image/wap/showcase/goods/goods_c9431a6d41.png) -40px -18px no-repeat;
            background-size: 58px 48px
        }
        
        .custom-store.border {
            -webkit-border-image: url(https://su.yzcdn.cn/v2/image/wap/border-line.png) 2 stretch;
            -moz-border-image: url(https://su.yzcdn.cn/v2/image/wap/border-line.png) 2 stretch;
            border-image: url(https://su.yzcdn.cn/v2/image/wap/border-line.png) 2 stretch;
            border-top: 2px solid #e5e5e5;
            border-bottom: 2px solid #e5e5e5
        }
        
        @media only screen and (-webkit-min-device-pixel-ratio:1.5),
        only screen and (min--moz-device-pixel-ratio:1.5),
        only screen and (min-device-pixel-ratio:1.5) {
            .custom-store.border {
                border-top-width: 1px;
                border-bottom-width: 1px
            }
        }
        
        .custom-store.border:last-child {
            border-bottom: 2px solid #e5e5e5
        }
        
        @media only screen and (-webkit-min-device-pixel-ratio:1.5),
        only screen and (min--moz-device-pixel-ratio:1.5),
        only screen and (min-device-pixel-ratio:1.5) {
            .custom-store.border:last-child {
                border-bottom-width: 1px
            }
            .custom-store .custom-store-img,
            .custom-store:after {
                background-image: url(https://su.yzcdn.cn/v2/image/wap/showcase/goods/goods@2x_c9431a6d41.png)
            }
        }
    </style>
    <style>
        @charset "UTF-8";
        .share-mp-info a,
        .share-mp-info em,
        .share-mp-info i {
            color: #999
        }
        
        .search-bar .tag.tag-clear,
        .search-form .search-input {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box
        }
        
        .search-bar .search-recom-list li p,
        .share-mp-info .page-mp-info,
        .share-mp-info i {
            white-space: nowrap;
            text-overflow: ellipsis;
            overflow: hidden
        }
        
        .custom-richtext b,
        .custom-richtext strong,
        .search-bar .search-recom-list li p b {
            font-weight: 700
        }
        
        .share-mp-info {
            position: relative;
            background: #1e1d22;
            color: #999;
            font-size: 0;
            line-height: 0;
            padding: 1px 160px 1px 1px
        }
        
        .share-mp-info em,
        .share-mp-info i {
            vertical-align: middle;
            font-style: normal
        }
        
        .share-mp-info img.mp-image {
            vertical-align: middle;
            margin-right: 3px;
            width: 24px;
            height: 24px;
            border-radius: 100%;
            -webkit-box-shadow: 0 0 3px rgba(0, 0, 0, .25);
            box-shadow: 0 0 3px rgba(0, 0, 0, .25)
        }
        
        .share-mp-info .links,
        .share-mp-info .page-mp-info {
            font-size: 14px;
            line-height: 24px;
            color: #888
        }
        
        .share-mp-info .page-mp-info {
            display: block;
            padding: 4px 0 4px 10px
        }
        
        .share-mp-info .links {
            position: absolute;
            top: 6px;
            right: 10px;
            display: inline-block
        }
        
        .share-mp-info .links a {
            margin-left: 8px
        }
        
        .share-mp-info .links .mp-homepage {
            margin-left: 0
        }
        
        .share-mp-info .mp-search {
            position: relative;
            display: inline-block;
            vertical-align: middle;
            width: 25px;
            height: 27px
        }
        
        .share-mp-info .mp-search::before {
            content: '';
            position: absolute;
            top: 5px;
            bottom: 7px;
            left: 5px;
            right: 5px;
            width: 15px;
            height: 15px;
            background: url(https://su.yzcdn.cn/v2/image/wap/showcase/goods/goods_c9431a6d41.png) -20px -15px no-repeat;
            background-size: 58px 48px
        }
        
        @media only screen and (-webkit-min-device-pixel-ratio:1.5),
        only screen and (min--moz-device-pixel-ratio:1.5),
        only screen and (min-device-pixel-ratio:1.5) {
            .share-mp-info .mp-search::before {
                background-image: url(https://su.yzcdn.cn/v2/image/wap/showcase/goods/goods@2x_c9431a6d41.png)
            }
        }
        
        .share-mp-info.no-search-icon {
            padding-right: 105px
        }
        
        .share-mp-info.no-search-icon .links {
            padding-left: 0
        }
        
        .search-form {
            position: relative;
            padding: 7px 10px;
            background-color: #efefef
        }
        
        .search-form .search-input {
            width: 100%;
            height: 30px;
            padding-left: 30px;
            border: 1px solid #e5e5e5;
            border-radius: 4px;
            box-sizing: border-box;
            outline-width: 0;
            font-size: 14px
        }
        
        .search-form .search-input:focus {
            -webkit-appearance: none
        }
        
        .search-form .search-cancel {
            position: absolute;
            top: 0;
            right: 0;
            width: 55px;
            text-align: center;
            line-height: 44px;
            font-size: 16px;
            color: #666
        }
        
        .search-form .search-icon {
            position: absolute;
            top: 6px;
            left: 12px;
            width: 30px;
            height: 30px
        }
        
        .search-form .search-icon::after,
        .search-form .search-icon::before {
            content: "";
            position: absolute;
            top: 50%;
            left: 50%
        }
        
        .search-form .search-icon::before {
            margin-top: -7px;
            margin-left: -8px;
            width: 10px;
            height: 10px;
            border: 1px solid #a3a3a3;
            background: 0 0;
            border-radius: 12px
        }
        
        .search-form .search-icon::after {
            margin-top: 2px;
            margin-left: 3px;
            width: 2px;
            height: 7px;
            -webkit-transform: rotate(-45deg);
            -moz-transform: rotate(-45deg);
            -ms-transform: rotate(-45deg);
            transform: rotate(-45deg);
            background-color: #a3a3a3
        }
        
        .search-form .close-icon {
            position: absolute;
            top: 2px;
            right: 55px;
            height: 40px;
            width: 40px;
            border-radius: 100px;
            background: #a3a3a3;
            -webkit-transform: scale(.42);
            -moz-transform: scale(.42);
            -ms-transform: scale(.42);
            transform: scale(.42);
            -webkit-tap-highlight-color: transparent
        }
        
        .search-form .close-icon::after,
        .search-form .close-icon::before {
            content: '';
            height: 6px;
            width: 28px;
            display: block;
            background: #fff;
            border-radius: 10px;
            position: absolute;
            top: 17px;
            left: 6px;
            -webkit-transform: rotate(-45deg);
            -moz-transform: rotate(-45deg);
            -ms-transform: rotate(-45deg);
            transform: rotate(-45deg)
        }
        
        .search-form .close-icon::after {
            -webkit-transform: rotate(45deg);
            -moz-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg)
        }
        
        .search-bar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 999;
            overflow: hidden;
            background-color: #fff
        }
        
        .search-bar .search-form {
            padding-right: 55px
        }
        
        .search-bar .history-list {
            padding: 10px
        }
        
        .search-bar .history-list li {
            float: left;
            border: 1px solid #ddd;
            padding: 5px;
            margin: 0 10px 10px 0;
            color: #666;
            border-radius: 3px;
            text-align: center;
            font-size: 14px;
            line-height: 18px
        }
        
        .search-bar .search-recom-list li {
            float: left;
            width: 50%;
            padding: 0;
            margin: 0;
            border: none;
            border-bottom: 1px solid #ddd;
            text-align: left;
            border-radius: 0;
            font-size: 14px;
            line-height: 30px
        }
        
        .search-bar .search-recom-list li p {
            padding: 5px;
            word-break: keep-all
        }
        
        .shop-detail,
        .shop-name,
        .weixin-no {
            word-break: break-all
        }
        
        .search-bar .tag.tag-clear {
            width: 145px;
            height: 40px;
            margin-top: 30px;
            line-height: 30px;
            font-size: 14px;
            border: 1px solid #666;
            box-sizing: border-box
        }
        
        .custom-paginations,
        .custom-richtext {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box
        }
        
        .content-body {
            position: relative;
            z-index: 10
        }
        
        .more-wrap {
            padding: 0 10px
        }
        
        .more-wrap .more {
            display: inline-block;
            background-color: #f2f2f2;
            height: 30px;
            width: 100%;
            margin: 10px 0;
            line-height: 30px;
            font-size: 14px;
            color: #09F;
            text-align: center;
            border: 0;
            -webkit-border-radius: 5px;
            -webkit-background-clip: padding-box;
            -moz-border-radius: 5px;
            -moz-background-clip: padding;
            border-radius: 5px;
            background-clip: padding-box;
            cursor: pointer
        }
        
        .custom-paginations-container {
            height: 30px;
            padding: 20px 0 10px
        }
        
        .custom-paginations {
            margin: 0 auto;
            border-radius: 4px;
            font-size: 0;
            -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, .05);
            box-shadow: 0 1px 2px rgba(0, 0, 0, .05);
            width: 310px;
            box-sizing: border-box;
            border: 1px solid #ddd
        }
        
        .custom-paginations a {
            padding: 4px 12px;
            line-height: 20px;
            font-size: 16px;
            text-decoration: none;
            display: inline-block;
            text-align: center;
            color: #09F;
            border-right: 1px solid #ddd
        }
        
        .custom-paginations .custom-paginations-last,
        .custom-paginations .custom-paginations-next {
            border-right-width: 0
        }
        
        .custom-paginations a:active,
        .custom-paginations a:hover {
            background-color: #F9F9F9
        }
        
        .custom-paginations .disabled {
            color: #999;
            cursor: default;
            background-color: transparent
        }
        
        .custom-paginations .custom-paginations-page {
            width: 100px
        }
        
        .custom-paginations .custom-paginations-next,
        .custom-paginations .custom-paginations-prev {
            width: 129px
        }
        
        .custom-category-list {
            list-style: decimal inside;
            font-size: 16px;
            margin: 0;
            padding: 0 15px
        }
        
        .custom-category-list li {
            margin-bottom: 5px
        }
        
        .custom-category-list a {
            color: #09F
        }
        
        .homepage-footer {
            position: absolute;
            bottom: -80px;
            height: 80px;
            overflow: hidden;
            width: 100%;
            background-color: #2D3132
        }
        
        .content-sidebar {
            display: none;
            position: fixed;
            top: 0;
            width: 180px;
            padding-left: 19px;
            margin-left: 550px;
            margin-top: 200px
        }
        
        .sidebar-section {
            border: 1px solid #e4e4e4;
            border-radius: 5px;
            margin-bottom: 20px
        }
        
        .sidebar-section .sidebar-title {
            border-radius: 5px 5px 0 0;
            margin: 0;
            font-size: 16px;
            font-weight: 700;
            border-bottom: 1px solid #e4e4e4;
            padding: 8px 10px;
            background-color: #F2F2F2
        }
        
        .sidebar-section .admin-opts {
            background-color: #fff;
            list-style: none;
            margin: 0;
            padding: 0;
            border-radius: 5px
        }
        
        .sidebar-section .admin-opts li a {
            display: block;
            padding: 5px 10px;
            border-bottom: 1px solid #e4e4e4
        }
        
        .sidebar-section .admin-opts li .active,
        .sidebar-section .admin-opts li a:hover {
            background-color: #F2F2F2
        }
        
        .sidebar-section .admin-opts li:first-of-type {
            border-radius: 5px 5px 0 0
        }
        
        .sidebar-section .admin-opts .last {
            border-radius: 0 0 5px 5px
        }
        
        .sidebar-section .admin-opts .last>a {
            border-bottom: 0 none
        }
        
        .headerbar {
            background-color: #efefef;
            border-bottom: 1px solid #c1c1c1
        }
        
        .headerbar li,
        .headerbar ul {
            display: inline-block;
            margin: 0;
            padding: 0;
            list-style: none
        }
        
        .headerbar a {
            display: block;
            line-height: 28px;
            text-align: center;
            padding: 0 12px;
            border-radius: 2px
        }
        
        .headerbar a.active {
            color: #fff;
            background: #798499
        }
        
        .qrcode-info,
        .shop-info {
            background-color: #fff
        }
        
        .headerbar .headerbar-wrap {
            position: relative;
            width: 760px;
            margin: 0 auto;
            text-align: center
        }
        
        .headerbar .headerbar-preview {
            padding: 6px
        }
        
        .headerbar .headerbar-reedit {
            position: absolute;
            top: 0;
            right: 0;
            padding: 5px 11px 5px 0
        }
        
        .headerbar .headerbar-reedit a {
            background: #fff;
            color: #414141;
            border: 1px solid #ccc;
            padding: 0 20px
        }
        
        .shop-detail {
            margin: 10px;
            padding-bottom: 10px;
            font-size: 12px;
            color: #666;
            border-bottom: 1px dashed #ccc
        }
        
        .shop-info {
            margin-bottom: 0
        }
        
        .shop-card {
            border: 0;
            display: table;
            margin-bottom: 10px;
            padding: 0 10px
        }
        
        .shop-name {
            margin: 0 0 0 10px
        }
        
        .table-cell {
            display: table-cell;
            vertical-align: middle
        }
        
        .shop-img {
            border-radius: 30px;
            width: 60px;
            height: 60px
        }
        
        .weixin-no,
        .weixin-title {
            font-size: 12px;
            color: #666;
            margin: 5px 0
        }
        
        .weixin-no {
            color: #999;
            margin: 0 0 10px
        }
        
        .qr-code {
            min-height: 162px;
            margin: 0
        }
        
        .swiper-container {
            margin: 0 auto;
            position: relative;
            overflow: hidden;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            -o-backface-visibility: hidden;
            backface-visibility: hidden;
            z-index: 1
        }
        
        .swiper-wrapper {
            position: relative;
            width: 100%;
            -o-transition-property: -o-transform, left, top;
            -o-transition-duration: 0s;
            -o-transition-timing-function: ease;
            -o-transform: translate(0, 0);
            -ms-transition-property: -ms-transform, left, top;
            -ms-transition-duration: 0s;
            -ms-transform: translate3d(0, 0, 0);
            -ms-transition-timing-function: ease;
            -webkit-transition-property: -webkit-transform, left, top;
            -moz-transition-property: -moz-transform, left, top;
            transition-property: transform, left, top;
            -webkit-transition-duration: 0s;
            -moz-transition-duration: 0s;
            transition-duration: 0s;
            -webkit-transform: translate3d(0, 0, 0);
            -moz-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition-timing-function: ease;
            -moz-transition-timing-function: ease;
            transition-timing-function: ease
        }
        
        .swiper-free-mode>.swiper-wrapper {
            -webkit-transition-timing-function: ease-out;
            -moz-transition-timing-function: ease-out;
            transition-timing-function: ease-out;
            margin: 0 auto
        }
        
        .swiper-slide {
            float: left
        }
        
        .swiper-wp8-horizontal {
            -ms-touch-action: pan-y
        }
        
        .swiper-wp8-vertical {
            -ms-touch-action: pan-x
        }
        
        .swiper-pagination {
            margin: 0;
            text-align: center;
            position: absolute;
            bottom: 5px;
            width: 100%;
            z-index: 1
        }
        
        .swiper-pagination-switch {
            display: inline-block;
            margin: 7px 4px 0;
            width: 5px;
            height: 5px;
            background: url(https://su.yzcdn.cn/v2/image/pagination.png) -1px -1px no-repeat;
            cursor: pointer
        }
        
        @media only screen and (-webkit-min-device-pixel-ratio:1.5),
        only screen and (min--moz-device-pixel-ratio:1.5),
        only screen and (min-device-pixel-ratio:1.5) {
            .swiper-pagination-switch {
                background-image: url(https://su.yzcdn.cn/v2/image/pagination@2x.png);
                background-position: 0 0;
                background-size: 5px 10px
            }
        }
        
        .swiper-active-switch {
            background-position: -1px -8px
        }
        
        @media only screen and (-webkit-min-device-pixel-ratio:1.5),
        only screen and (min--moz-device-pixel-ratio:1.5),
        only screen and (min-device-pixel-ratio:1.5) {
            .swiper-active-switch {
                background-image: url(https://su.yzcdn.cn/v2/image/pagination@2x.png);
                background-position: 0 -5px;
                background-size: 5px 10px
            }
        }
        
        .swp .swiper-wrapper {
            overflow: hidden
        }
        
        .swp .swp-page {
            display: none;
            width: 100%;
            height: 100%;
            overflow: hidden;
            text-align: center
        }
        
        .custom-richtext img,
        .custom-richtext ol {
            width: auto!important
        }
        
        .swp .swp-page img {
            max-width: 100%;
            max-height: 100%
        }
        
        .swp .swp-page:first-child {
            display: block
        }
        
        .full-screen .container {
            background: 0 0
        }
        
        .full-screen .header {
            display: none
        }
        
        .custom-richtext {
            padding: 10px 10px 0;
            box-sizing: border-box;
            font-size: 16px;
            color: #333;
            line-height: 1.5;
            overflow: hidden;
            text-align: left;
            word-wrap: break-word;
            position: relative
        }
        
        .custom-richtext img+br {
            display: block;
            padding: 4px 0;
            content: ' '
        }
        
        .custom-richtext p {
            margin: 0 0 1em
        }
        
        .custom-richtext a {
            color: #07d
        }
        
        .custom-richtext img {
            background: 0 0;
            max-width: 100%!important;
            min-height: 1px;
            height: auto!important;
            vertical-align: middle
        }
        
        .custom-richtext ol,
        .custom-richtext ul {
            list-style-position: inside;
            padding-left: 0
        }
        
        .custom-richtext blockquote {
            padding: 0 0 0 15px;
            margin: 0 0 18px;
            border-left: 5px solid #EEE
        }
        
        .custom-richtext em,
        .custom-richtext i {
            font-style: italic
        }
        
        .custom-richtext .selectTdClass {
            background-color: #edf5fa!important
        }
        
        .custom-richtext table.noBorderTable caption,
        .custom-richtext table.noBorderTable td,
        .custom-richtext table.noBorderTable th {
            border: 1px dashed #ddd!important
        }
        
        .custom-richtext table {
            margin-bottom: 10px;
            border-collapse: collapse;
            display: table;
            width: auto!important
        }
        
        .custom-richtext td,
        .custom-richtext th {
            padding: 5px 10px;
            border: 1px solid #ddd
        }
        
        .custom-richtext caption {
            border: 1px dashed #ddd;
            border-bottom: 0;
            padding: 3px;
            text-align: center
        }
        
        .custom-richtext th {
            border-top: 2px solid #bbb;
            background: #f7f7f7
        }
        
        .custom-richtext .ue-table-interlace-color-single {
            background-color: #fcfcfc
        }
        
        .custom-richtext .ue-table-interlace-color-double {
            background-color: #f7faff
        }
        
        .custom-richtext td p {
            margin: 0;
            padding: 0
        }
        
        .custom-richtext-fullscreen {
            padding: 0;
            margin-top: 0
        }
        
        @media (min-width:360px) {
            .custom-image-swiper .swiper-slide a {
                width: 360px
            }
            .custom-image .custom-image-small {
                height: 174.38px
            }
            .custom-link-link .title,
            .custom-nav-title {
                width: 315px
            }
            .custom-store-name {
                max-width: 236.25px
            }
            .custom-showcase-wrap .custom-showcase {
                width: 360px
            }
            .custom-showcase-wrap-0 .custom-showcase-big {
                width: 235.13px;
                height: 238.5px
            }
            .custom-showcase-wrap-0 .custom-showcase-small {
                width: 123.75px;
                height: 119.25px
            }
            .custom-showcase-wrap-0 .custom-showcase-without-space .custom-showcase-big {
                width: 240px!important
            }
            .custom-showcase-wrap-0 .custom-showcase-without-space .custom-showcase-small {
                width: 120px!important
            }
            .custom-showcase-wrap-1 .custom-showcase-big,
            .custom-showcase-wrap-1 .custom-showcase-small {
                width: 119.25px;
                height: 119.25px
            }
            .custom-showcase-wrap-1 .custom-showcase-without-space .custom-showcase-big,
            .custom-showcase-wrap-1 .custom-showcase-without-space .custom-showcase-small {
                width: 120px!important
            }
            .custom-cube td {
                width: 90px
            }
            .custom-cube li {
                width: 90px;
                height: 90px
            }
            .custom-cube li img {
                max-width: 90px;
                max-height: 90px
            }
            .tpl-11-11 .tpl-11-11-banner,
            .tpl-shop-header,
            .tpl-wxd-header {
                height: 112.5px
            }
            .custom-coupon li {
                width: 107px
            }
            .custom-shop-banner {
                height: 270px
            }
            .custom-shop-banner-inner h1 {
                font-size: 16px
            }
            .custom-shop-banner-inner .custom-shop-banner-logo,
            .custom-shop-banner-inner img {
                width: 101.25px;
                height: 101.25px
            }
            .custom-shop-banner-inner .desc {
                font-size: 12px
            }
            .custom-shop-banner1 .custom-shop-banner {
                height: 202.5px
            }
            .custom-shop-banner1 .custom-shop-banner-inner {
                margin-top: -40.5px
            }
            .custom-shop-banner1 .custom-shop-banner-inner .custom-shop-banner-logo,
            .custom-shop-banner1 .custom-shop-banner-inner img {
                width: 67.5px;
                height: 67.5px
            }
            .custom-level {
                min-height: 112.5px
            }
            .custom-level-img {
                max-height: 180px
            }
            .custom-home-nav .tabber-inner {
                width: 67.5px
            }
            .sc-goods-list.pic.size-4 .goods-card.multi-pic.single-pic .phote-block-item img {
                max-height: 196.88px
            }
            .wrapper {
                width: 360px;
                margin: 0 auto
            }
            .content {
                width: 100%;
                margin: 0 auto
            }
            .edui-faked-video {
                width: 100%;
                height: 255px
            }
            .sc-goods-list.pic .goods-card.small-pic .photo-block {
                height: 164px
            }
            .sc-goods-list.pic .goods-card.small-pic.card {
                max-height: 258.75px
            }
            .custom-nav-title {
                width: 280px
            }
            .custom-paginations {
                width: 350px
            }
            .custom-paginations .custom-paginations-page {
                width: 120px
            }
            .custom-paginations .custom-paginations-next,
            .custom-paginations .custom-paginations-prev {
                width: 148px
            }
            .custom-recommend-goods-list li {
                width: 106px;
                height: 106px
            }
            .custom-recommend-goods-list img {
                max-width: 106px;
                max-height: 106px
            }
        }
        
        @media (min-width:375px) {
            .custom-image-swiper .swiper-slide a {
                width: 375px
            }
            .custom-image .custom-image-small {
                height: 181.64px
            }
            .custom-link-link .title,
            .custom-nav-title {
                width: 328.13px
            }
            .custom-store-name {
                max-width: 246.09px
            }
            .custom-showcase-wrap .custom-showcase {
                width: 375px
            }
            .custom-showcase-wrap-0 .custom-showcase-big {
                width: 244.92px;
                height: 248.44px
            }
            .custom-showcase-wrap-0 .custom-showcase-small {
                width: 128.91px;
                height: 124.22px
            }
            .custom-showcase-wrap-0 .custom-showcase-without-space .custom-showcase-big {
                width: 250px!important
            }
            .custom-showcase-wrap-0 .custom-showcase-without-space .custom-showcase-small {
                width: 125px!important
            }
            .custom-showcase-wrap-1 .custom-showcase-big,
            .custom-showcase-wrap-1 .custom-showcase-small {
                width: 124.22px;
                height: 124.22px
            }
            .custom-showcase-wrap-1 .custom-showcase-without-space .custom-showcase-big,
            .custom-showcase-wrap-1 .custom-showcase-without-space .custom-showcase-small {
                width: 125px!important
            }
            .custom-coupon li {
                width: 112px
            }
            .custom-cube td {
                width: 93.75px
            }
            .custom-cube li {
                width: 93.75px;
                height: 93.75px
            }
            .custom-cube li img {
                max-width: 93.75px;
                max-height: 93.75px
            }
            .custom-cube2-table-wrapper .custom-cube2-table {
                width: 376px;
                margin: 0 auto
            }
            .custom-shop-banner {
                height: 281.25px
            }
            .custom-shop-banner-inner h1 {
                font-size: 16px
            }
            .custom-shop-banner-inner .custom-shop-banner-logo,
            .custom-shop-banner-inner img {
                width: 105.47px;
                height: 105.47px
            }
            .custom-shop-banner-inner .desc {
                font-size: 14px
            }
            .custom-shop-banner1 .custom-shop-banner {
                height: 210.94px
            }
            .custom-shop-banner1 .custom-shop-banner-inner {
                margin-top: -42.19px
            }
            .custom-shop-banner1 .custom-shop-banner-inner .custom-shop-banner-logo,
            .custom-shop-banner1 .custom-shop-banner-inner img {
                width: 70.31px;
                height: 70.31px
            }
            .custom-level {
                min-height: 117.19px
            }
            .custom-level-img {
                max-height: 187.5px
            }
            .custom-home-nav .tabber-inner {
                width: 70.31px
            }
            .sc-goods-list.pic.size-4 .goods-card.multi-pic.single-pic .phote-block-item img {
                max-height: 205.08px
            }
            .sc-goods-list.pic .goods-card.small-pic .photo-block {
                height: 172px
            }
            .sc-goods-list.pic .goods-card.small-pic.card {
                max-height: 269.53px
            }
            .trade-review-list .review-profile .review-avatar-container {
                width: 334px
            }
            .report-detail-container .review-item .img-container,
            .review-detail-container .review-item .img-container {
                margin-left: -5px
            }
            .report-detail-container .review-item .img-container img,
            .review-detail-container .review-item .img-container img {
                width: 115px;
                height: 115px;
                margin-left: 5px
            }
            .report-detail-container .review-item .seller-reply,
            .review-detail-container .review-item .seller-reply {
                padding: 10px 8px
            }
            .report-detail-container .review-item .seller-reply .reply-image,
            .review-detail-container .review-item .seller-reply .reply-image {
                width: 109px;
                height: 109px
            }
        }
        
        @media (min-width:414px) {
            .custom-image-swiper .swiper-slide a {
                width: 414px
            }
            .custom-image .custom-image-small {
                height: 200.53px
            }
            .custom-link-link .title,
            .custom-nav-title {
                width: 362.25px
            }
            .custom-store-name {
                max-width: 271.69px
            }
            .custom-showcase-wrap .custom-showcase {
                width: 414px
            }
            .custom-showcase-wrap-0 .custom-showcase-big {
                width: 270.39px;
                height: 274.27px
            }
            .custom-showcase-wrap-0 .custom-showcase-small {
                width: 142.31px;
                height: 137.14px
            }
            .custom-showcase-wrap-0 .custom-showcase-without-space .custom-showcase-big {
                width: 276px!important
            }
            .custom-showcase-wrap-0 .custom-showcase-without-space .custom-showcase-small {
                width: 138px!important
            }
            .custom-showcase-wrap-1 .custom-showcase-big,
            .custom-showcase-wrap-1 .custom-showcase-small {
                width: 137.14px;
                height: 137.14px
            }
            .custom-showcase-wrap-1 .custom-showcase-without-space .custom-showcase-big,
            .custom-showcase-wrap-1 .custom-showcase-without-space .custom-showcase-small {
                width: 138px!important
            }
            .custom-cube td {
                width: 103.5px
            }
            .custom-cube li {
                width: 103.5px;
                height: 103.5px
            }
            .custom-cube li img {
                max-width: 103.5px;
                max-height: 103.5px
            }
            .custom-cube2-table-wrapper .custom-cube2-table {
                width: 416px
            }
            .tpl-11-11 .tpl-11-11-banner,
            .tpl-shop-header,
            .tpl-wxd-header {
                height: 129.38px
            }
            .custom-coupon li {
                width: 125px
            }
            .custom-shop-banner {
                height: 310.5px
            }
            .custom-shop-banner-inner h1 {
                font-size: 18px
            }
            .custom-shop-banner-inner .custom-shop-banner-logo,
            .custom-shop-banner-inner img {
                width: 116.44px;
                height: 116.44px
            }
            .custom-shop-banner-inner .desc {
                font-size: 14px
            }
            .custom-shop-banner1 .custom-shop-banner {
                height: 232.88px
            }
            .custom-shop-banner1 .custom-shop-banner-inner {
                margin-top: -46.58px
            }
            .custom-shop-banner1 .custom-shop-banner-inner .custom-shop-banner-logo,
            .custom-shop-banner1 .custom-shop-banner-inner img {
                width: 77.63px;
                height: 77.63px
            }
            .custom-level {
                min-height: 129.38px
            }
            .custom-level-img {
                max-height: 207px
            }
            .custom-home-nav .tabber-inner {
                width: 77.63px
            }
            .sc-goods-list.pic.size-4 .goods-card.multi-pic.single-pic .phote-block-item img {
                max-height: 226.41px
            }
            .sc-goods-list.pic .goods-card.small-pic .photo-block {
                height: 190px
            }
            .sc-goods-list.pic .goods-card.small-pic.promotion {
                max-height: 240px
            }
            .sc-goods-list.pic .goods-card.small-pic.card {
                max-height: 280px
            }
            .trade-review-list .review-profile .review-avatar-container {
                width: 378px
            }
            .trade-review-list .review-profile .profiles {
                margin-left: -7px
            }
            .trade-review-list .review-profile .image-circle,
            .trade-review-list .review-profile .name-circle {
                margin-left: 7px
            }
            .report-detail-container .review-item .img-container img,
            .review-detail-container .review-item .img-container img {
                width: 94px;
                height: 94px
            }
            .report-detail-container .review-item .seller-reply,
            .review-detail-container .review-item .seller-reply {
                padding: 10px
            }
            .report-detail-container .review-item .seller-reply .reply-image,
            .review-detail-container .review-item .seller-reply .reply-image {
                width: 89px;
                height: 89px
            }
        }
        
        @media (min-width:540px) {
            .custom-image-swiper .swiper-slide a {
                width: 540px
            }
            .custom-image {
                width: 525px;
                padding: 0 7.5px
            }
            .custom-image li {
                width: 520px;
                margin: 2.5px
            }
            .custom-image img {
                max-width: 520px
            }
            .custom-image .custom-image-small {
                width: 170px;
                height: 170px;
                margin: 2.5px
            }
            .custom-image .custom-image-small img {
                max-width: 170px
            }
            .custom-image .custom-image-small .title {
                width: 170px
            }
            .custom-store-name {
                max-width: 354.38px
            }
            .custom-showcase-wrap-0 .custom-showcase,
            .custom-showcase-wrap-1 .custom-showcase {
                width: 540px
            }
            .custom-showcase-wrap-0 .custom-showcase .custom-showcase-big,
            .custom-showcase-wrap-0 .custom-showcase .custom-showcase-small,
            .custom-showcase-wrap-1 .custom-showcase .custom-showcase-big,
            .custom-showcase-wrap-1 .custom-showcase .custom-showcase-small {
                width: 178px;
                height: 178px;
                overflow: hidden;
                margin: 0
            }
            .custom-showcase-wrap-0 .custom-showcase .custom-showcase-big img,
            .custom-showcase-wrap-0 .custom-showcase .custom-showcase-small img,
            .custom-showcase-wrap-1 .custom-showcase .custom-showcase-big img,
            .custom-showcase-wrap-1 .custom-showcase .custom-showcase-small img {
                max-width: 178px;
                max-height: 178px
            }
            .custom-showcase-wrap-0 .custom-showcase .custom-showcase-small,
            .custom-showcase-wrap-1 .custom-showcase .custom-showcase-small {
                margin-left: 3px
            }
            .custom-showcase-wrap-0 .custom-showcase li:first-child,
            .custom-showcase-wrap-1 .custom-showcase li:first-child {
                margin-left: 0
            }
            .custom-showcase-wrap-0 .custom-showcase-without-space .custom-showcase-big {
                width: 360px!important
            }
            .custom-showcase-wrap-0 .custom-showcase-without-space .custom-showcase-small,
            .custom-showcase-wrap-1 .custom-showcase-without-space .custom-showcase-big,
            .custom-showcase-wrap-1 .custom-showcase-without-space .custom-showcase-small {
                width: 180px!important
            }
            .custom-cube td {
                width: 135px
            }
            .custom-cube li {
                width: 135px;
                height: 135px
            }
            .tpl-11-11 .tpl-11-11-banner,
            .tpl-shop-header,
            .tpl-wxd-header {
                height: 168.75px
            }
            .custom-cube li img {
                max-width: 135px;
                max-height: 135px
            }
            .custom-cube2-table-wrapper .custom-cube2-table {
                width: 532px
            }
            .tpl-weixin img {
                max-width: 540px
            }
            .tpl-weixin .tpl-weixin-list {
                margin: 0 0 0 -155px
            }
            .tpl-weixin .tpl-weixin-list-item {
                width: 150px
            }
            .tpl-weixin .tpl-weixin-list-item-1 {
                left: -1000px;
                top: -1000px
            }
            .tpl-weixin .tpl-weixin-list-item-1.done {
                left: 0;
                top: 0
            }
            .tpl-weixin .tpl-weixin-list-item-2 {
                left: 1000px;
                top: -1000px
            }
            .tpl-weixin .tpl-weixin-list-item-2.done {
                left: 160px;
                top: 0
            }
            .tpl-weixin .tpl-weixin-list-item-3 {
                left: -1000px;
                top: 1000px
            }
            .tpl-weixin .tpl-weixin-list-item-3.done {
                left: 0;
                top: 49px
            }
            .tpl-weixin .tpl-weixin-list-item-4 {
                left: 1000px;
                top: 1000px
            }
            .tpl-weixin .tpl-weixin-list-item-4.done {
                left: 160px;
                top: 49px
            }
            .custom-coupon li {
                width: 167.33px
            }
            .custom-shop-banner {
                height: 405px
            }
            .custom-shop-banner-inner h1 {
                font-size: 20px
            }
            .custom-shop-banner-inner .custom-shop-banner-logo,
            .custom-shop-banner-inner img {
                width: 151.88px;
                height: 151.88px
            }
            .custom-shop-banner-inner .desc {
                font-size: 18px
            }
            .custom-shop-banner1 .custom-shop-banner {
                height: 303.75px
            }
            .custom-shop-banner1 .custom-shop-banner-inner {
                margin-top: -60.75px
            }
            .custom-shop-banner1 .custom-shop-banner-inner .custom-shop-banner-logo,
            .custom-shop-banner1 .custom-shop-banner-inner img {
                width: 101.25px;
                height: 101.25px
            }
            .custom-level {
                min-height: 168.75px
            }
            .custom-level-img {
                max-height: 270px
            }
            .custom-home-nav .tabber-inner {
                width: 101.25px
            }
            .sc-goods-list.pic.size-4 .goods-card.multi-pic.single-pic .phote-block-item img {
                max-height: 295.31px
            }
            .content,
            .wrapper {
                width: 540px;
                margin: 0 auto
            }
            .external-buy {
                display: block
            }
            .bottom-fix {
                display: none
            }
            .buy-guide {
                margin: 0 -10px
            }
            .buy-guide .guide-cont {
                width: auto
            }
            .buy-guide .pic-wrapper {
                float: right
            }
            .nav-on-bottom {
                border-left-width: 1px;
                border-right-width: 1px
            }
            .custom-paginations .custom-paginations-last,
            .custom-paginations .custom-paginations-next {
                border-right-width: 0
            }
            .edui-faked-video {
                width: 520px;
                height: 300px
            }
            .sc-goods-list.pic li.goods-card.small-pic.card,
            .sc-goods-list.pic li.goods-card.small-pic.promotion {
                max-height: 253px;
                width: 176px
            }
            .sc-goods-list.pic li.goods-card.small-pic.card .photo-block,
            .sc-goods-list.pic li.goods-card.small-pic.promotion .photo-block {
                height: 176px
            }
            .sc-goods-list.pic li.goods-card.small-pic.card .photo-block img,
            .sc-goods-list.pic li.goods-card.small-pic.promotion .photo-block img {
                max-height: 176px
            }
            .sc-goods-list.pic.waterfall li.goods-card.small-pic {
                width: 176px
            }
            .sc-goods-list.pic li.goods-card.big-pic.normal {
                float: left;
                margin: 2.5px;
                width: 345px
            }
            .sc-goods-list.pic li.goods-card.big-pic.normal .photo-block {
                width: 345px;
                height: 345px
            }
            .sc-goods-list.pic li.goods-card.big-pic.card .photo-block,
            .sc-goods-list.pic li.goods-card.big-pic.promotion .photo-block {
                width: 352px;
                height: 298px
            }
            .sc-goods-list.pic li.goods-card.big-pic.card .photo-block img,
            .sc-goods-list.pic li.goods-card.big-pic.promotion .photo-block img {
                max-height: 298px;
                max-width: 352px
            }
            .sc-goods-list.pic li.goods-card.big-pic.card .info .goods-title,
            .sc-goods-list.pic li.goods-card.big-pic.promotion .info .goods-title {
                width: 240px
            }
            .sc-goods-list.pic li.goods-card.small-pic.normal {
                margin: 2.5px;
                width: 171px
            }
            .sc-goods-list.pic li.goods-card.small-pic.normal .link {
                margin: 0
            }
            .sc-goods-list.pic li.goods-card.small-pic.normal .photo-block {
                width: 171px;
                height: 171px
            }
            .sc-goods-list.pic li.goods-card.small-pic.normal .photo-block img {
                max-height: 171px
            }
            .sc-goods-list.pic.size-0 .goods-card.big-pic.normal {
                margin: 5px;
                width: 255px
            }
            .sc-goods-list.pic.size-0 .goods-card.big-pic.normal .photo-block {
                width: 255px;
                height: 255px
            }
            .sc-goods-list.pic.size-0 .goods-card.big-pic.normal .photo-block img {
                max-height: 255px;
                max-width: 255px
            }
            .sc-goods-list.pic.size-0 .goods-card.big-pic.card {
                float: left;
                width: 263px
            }
            .sc-goods-list.pic.size-0 .goods-card.big-pic.card .photo-block {
                width: 245px;
                height: 245px
            }
            .sc-goods-list.pic.size-0 .goods-card.big-pic.card .photo-block img {
                max-height: 245px;
                max-width: 245px
            }
            .sc-goods-list.pic.size-2 .goods-card.big-pic.card {
                width: 364px
            }
            .sc-goods-list.pic.size-2 .goods-card.big-pic.card .photo-block {
                width: 346px;
                height: 346px
            }
            .sc-goods-list.pic.size-2 .goods-card.big-pic.card .photo-block img {
                max-height: 346px;
                max-width: 346px
            }
            .sc-goods-list.pic.size-2 .goods-card.big-pic.card .info.info-only-title {
                height: 114px
            }
            .sc-goods-list.pic.size-2 .goods-card.big-pic.card .info.info-big-title {
                height: 112px
            }
            .sc-goods-list.pic.size-2 .goods-card.big-pic.card .info.info-notitle {
                height: 38px
            }
            .sc-goods-list.pic.size-2 .goods-card.small-pic.card {
                width: 156px;
                max-height: 244px
            }
            .sc-goods-list.pic.size-2 .goods-card.small-pic.card .photo-block {
                height: 125px
            }
            .sc-goods-list.pic.size-2 .goods-card.small-pic.card .photo-block img {
                max-height: 100%
            }
            .sc-goods-list.pic.size-2 .goods-card.big-pic.normal .link {
                margin-left: 0;
                margin-right: 0
            }
            .sc-goods-list.pic.size-2 .goods-card.small-pic.normal {
                margin: 2px 2px 2px 6px
            }
            .custom-nav-title {
                width: 462px
            }
            .custom-nav-two-col {
                width: 270px
            }
            .custom-nav-two-col .custom-nav-title {
                width: 255px
            }
            .custom-link-link .title {
                width: 480px
            }
            .custom-link .custom-link-two-col {
                width: 270px
            }
            .custom-paginations {
                width: 530px
            }
            .custom-paginations .custom-paginations-page {
                width: 210px
            }
            .custom-paginations .custom-paginations-next,
            .custom-paginations .custom-paginations-prev {
                width: 238px
            }
            .custom-recommend-goods-list li {
                width: 166px;
                height: 166px
            }
            .custom-recommend-goods-list img {
                max-width: 166px;
                max-height: 166px
            }
            .custom-tag-list .custom-tag-list-menu-block {
                width: 120px
            }
            .custom-tag-list .custom-tag-list-menu-block li a {
                width: 110px
            }
            .custom-tag-list .custom-tag-list-goods {
                width: 418px
            }
            .custom-tag-list .custom-tag-list-goods .custom-tag-list-title {
                width: 408px
            }
            .custom-tag-list .custom-tag-list-goods .custom-tag-list-goods-detail .custom-tag-list-goods-title {
                width: 340px
            }
            .wuxi-center-body .content {
                max-width: 540px
            }
            .wuxi-center-body .footer {
                width: 100%
            }
            .wuxi-center-body .footer .copyright {
                width: 540px;
                margin: 0 auto
            }
        }
        
        @media (min-width:760px) {
            .wrapper {
                width: 760px;
                margin: 0 auto
            }
            .content {
                width: 750px;
                margin: 30px auto 0
            }
            .content-body {
                width: 540px;
                padding: 10px;
                border: 1px solid #ddd
            }
            .content-sidebar {
                display: block;
                position: fixed;
                top: 0;
                width: 180px;
                padding-left: 19px;
                margin-left: 550px;
                margin-top: 60px
            }
            .footer {
                width: 760px;
                margin: 20px auto 0
            }
            .footer .copyright {
                width: 574px;
                margin: 0
            }
            .sidebar-section {
                border: 1px solid #e4e4e4;
                border-radius: 5px;
                margin-bottom: 20px
            }
            .sidebar-section .sidebar-title {
                border-radius: 5px 5px 0 0;
                margin: 0;
                font-size: 16px;
                font-weight: 700;
                border-bottom: 1px solid #e4e4e4;
                padding: 8px 10px;
                background-color: #F2F2F2
            }
            .sidebar-section .admin-opts {
                background-color: #fff;
                list-style: none;
                margin: 0;
                padding: 0;
                border-radius: 5px
            }
            .sidebar-section .admin-opts li a {
                display: block;
                padding: 5px 10px;
                border-bottom: 1px solid #e4e4e4
            }
            .sidebar-section .admin-opts li .active,
            .sidebar-section .admin-opts li a:hover {
                background-color: #F2F2F2
            }
            .sidebar-section .admin-opts li:first-of-type {
                border-radius: 5px 5px 0 0
            }
            .sidebar-section .admin-opts .last {
                border-radius: 0 0 5px 5px
            }
            .sidebar-section .admin-opts .last>a {
                border-bottom: 0 none
            }
            .shop-detail {
                margin: 10px;
                padding-bottom: 10px;
                font-size: 12px;
                color: #666;
                border-bottom: 1px dashed #ccc;
                line-height: 1.6
            }
            .shop-info {
                background-color: #fff;
                margin-bottom: 0
            }
            .shop-card {
                border: 0;
                display: table;
                margin-bottom: 10px;
                padding: 0 10px
            }
            .shop-name {
                margin: 0 0 0 10px
            }
            .table-cell {
                display: table-cell;
                vertical-align: middle
            }
            .shop-img {
                border-radius: 30px;
                width: 60px;
                height: 60px
            }
            .weixin-no,
            .weixin-title {
                font-size: 12px;
                color: #666;
                margin: 5px 0
            }
            .weixin-no {
                color: #999;
                margin: 0 0 10px
            }
            .qr-code {
                margin: 0
            }
            .sku-detail .qrcode-buy {
                display: block
            }
        }
        
        @media (min-width:800px) {
            .content {
                width: 760px;
                margin: 30px auto 20px
            }
            .content-body {
                -webkit-box-shadow: 0 2px 10px rgba(0, 0, 0, .1);
                box-shadow: 0 2px 10px rgba(0, 0, 0, .1)
            }
            .content-sidebar {
                margin-left: 560px
            }
            .footer .copyright {
                width: 562px
            }
            .admin .bottom-fix {
                display: none
            }
        }
        
        .tag {
            display: inline-block;
            background-color: transparent;
            border: 1px solid #e5e5e5;
            border-radius: 3px;
            text-align: center;
            margin: 0;
            color: #999;
            font-size: 12px;
            line-height: 12px;
            padding: 4px
        }
        
        .tag-big {
            font-size: 14px;
            line-height: 18px
        }
        
        .tag.tag-green {
            color: #06bf04;
            border-color: #0c3
        }
        
        .tag.tag-orange,
        .tag.tag-orangef60 {
            color: #f60;
            border-color: #f60
        }
        
        .tag.tag-white {
            color: #333;
            border-color: #e5e5e5
        }
        
        .tag.tag-blue {
            color: #00a0f8;
            border-color: #00a0f8
        }
        
        .tag.tag-red {
            color: #ed5050;
            border-color: #ed5050
        }
        
        .tag.tag-pink {
            color: #ee614b;
            border-color: #ee614b
        }
        
        .tag.disabled {
            background-color: #ddd!important;
            background-image: none!important;
            border: 1px solid transparent!important;
            color: #fff!important
        }
        
        .wrapper-form .form-item {
            position: relative;
            margin-top: 10px
        }
        
        .wrapper-form .form-item label {
            position: absolute;
            top: 1px;
            left: 10px;
            line-height: 45px;
            z-index: 1;
            color: #666
        }
        
        .wrapper-form .form-item input,
        .wrapper-form .form-item textarea {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            width: 100%;
            line-height: 18px;
            padding: 12px 10px 12px 68px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
            outline: 0;
            opacity: 1;
            -webkit-appearance: none
        }
        
        .wrapper-form .form-item input[disabled=disabled] {
            background: #f8f8f8
        }
        
        .wrapper-form .form-item:first-child {
            margin-top: 0
        }
        
        .btn-1-1,
        .btn-2-1,
        .btn-3-1 {
            display: inline-block;
            padding: 0 3px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box
        }
        
        .btn-1-1 .btn,
        .btn-1-1 .tag,
        .btn-2-1 .btn,
        .btn-2-1 .tag,
        .btn-3-1 .btn,
        .btn-3-1 .tag {
            width: 100%;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box
        }
        
        .btn-1-1 {
            width: 100%;
            padding-left: 0
        }
        
        .btn-1-1 .btn,
        .btn-1-1 .tag {
            width: 50%!important
        }
        
        .btn-2-1 {
            width: 49.5%
        }
        
        .btn-3-1 {
            width: 33.3%
        }
        
        .action-container {
            padding: 0 10px;
            text-align: center;
            margin-top: 20px;
            margin-bottom: 20px;
            font-size: 0
        }
        
        .action-container>div,
        .action-container>div:last-child {
            margin-bottom: 0
        }
        
        .action-container>.btn,
        .action-container>button {
            margin-bottom: 10px
        }
        
        .action-container>.btn:last-child,
        .action-container>button:last-child {
            margin-bottom: 0
        }
        
        .popout-box .header {
            position: relative;
            margin-bottom: 10px;
            -webkit-border-image: url(https://su.yzcdn.cn/v2/image/wap/border-line.png) 2 stretch;
            -moz-border-image: url(https://su.yzcdn.cn/v2/image/wap/border-line.png) 2 stretch;
            border-image: url(https://su.yzcdn.cn/v2/image/wap/border-line.png) 2 stretch;
            border-bottom: 2px solid #e5e5e5
        }
        
        @media only screen and (-webkit-min-device-pixel-ratio:1.5),
        only screen and (min--moz-device-pixel-ratio:1.5),
        only screen and (min-device-pixel-ratio:1.5) {
            .popout-box .header {
                border-bottom-width: 1px
            }
        }
        
        .popout-box .header h2 {
            margin-bottom: 16px;
            line-height: 16px;
            font-size: 16px
        }
        
        .popout-box .action-container {
            margin: 10px 0 0;
            padding: 0
        }
        
        .popout-box .action-container .btn.btn-block {
            font-size: 14px
        }
        
        .popout-login .wrapper-form {
            padding-top: 10px
        }
        
        .popout-login .wrapper-form .verify-image {
            position: absolute;
            right: 0;
            top: 7px;
            width: 80px;
            height: 30px
        }
        
        .popout-login .wrapper-form .btn-auth-code {
            position: absolute;
            right: 0;
            top: 0;
            width: 80px;
            padding: 15px 4px;
            border-radius: 5px
        }
        
        .popout-login .wrapper-form .txt-cover {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            opacity: 0
        }
        
        .popout-login .wrapper-form .txt-cover-half {
            right: 90px
        }
        
        .popout-login .wrapper-form .error {
            margin-top: 10px;
            word-break: break-word
        }
        
        .popout-login .bottom-tips {
            padding-top: 16px;
            font-size: 0
        }
        
        .popout-login .bottom-tips .inline-item {
            padding: 0 10px;
            border-right: 1px solid #e5e5e5;
            font-size: 12px
        }
        
        .popout-login .bottom-tips .inline-item:last-child {
            padding-right: 0;
            border-right: 0 none
        }
        
        .fuwu-hover-container {
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 999;
            background-color: rgba(0, 0, 0, .4);
            color: #fff;
            padding: 10px 0;
            margin: 0;
            font-size: 14px
        }
        
        .fuwu-hover-container p {
            padding: 5px 10px;
            font-size: 14px
        }
        
        .fuwu-hover-container a {
            border: none;
            border-radius: 0;
            padding: 5px 9px;
            margin-right: 10px;
            font-size: 14px
        }
    </style>
    <style>
        .content {
            background-color: #F9F9F9;
        }
    </style>
    <script>
        var _global = {
            "kdt_id": 54023,
            "user_id": 0,
            "run_mode": "online",
            "debug": false,
            "project": "default",
            "online_debug": false,
            "js": {
                "js_compress": true,
                "css_compress": true,
                "use_js_cdn": true,
                "use_css_cdn": true,
                "message_report": true,
                "checkbrowser": true,
                "hide_wx_nav": true,
                "qn_public": "kdt_img",
                "qn_private": "kdt-private"
            },
            "query_path": "\/showcase\/feature",
            "query_key": "alias=pb85j8zk&spm=m1453426993586355819296269.autoreply",
            "real_query_path": "get:\/showcase\/feature\/index.html",
            "module": "showcase",
            "controller": "Showcase_Feature_Controller",
            "action": "index",
            "full_action": "getIndexHtml",
            "method": "get",
            "format": "html",
            "platform": "unknown",
            "is_mobile": false,
            "authorize": "unknown",
            "platform_version": "unknown",
            "mobile_system": "unknown",
            "youzan_app_login": false,
            "page_size": 320,
            "isShopDomain": false,
            "share": {
                "title": "\u300a\u6587\u827a\u590d\u5174\u4e09\u6770\u300b\uff1a\u4f60\u7684\u79c1\u4eba\u7f8e\u672f\u9986",
                "desc": "\u5173\u4e8e\u6587\u827a\u590d\u5174\u7f8e\u672f\u53f2\uff0c\u6700\u597d\u7684\u7248\u672c\uff0c\u6ca1\u6709\u4e4b\u4e00\u3002"
            },
            "jsBradgeSupport": true,
            "wuxi1_0_0": false,
            "source": "",
            "track": "",
            "nobody": "rihghiqdaik4eac2ap312eg4v4",
            "mp_changed": true,
            "team_certificate": true,
            "is_secured_transactions": 1,
            "hide_shopping_cart": 0,
            "mp_data": {
                "logo": "http:\/\/imgqn.koudaitong.com\/upload_files\/2015\/01\/26\/FoX21i8VqwlCwjyDW618p66vd7g8.png",
                "team_name": "\u7f57\u8f91\u601d\u7ef4",
                "intro": "",
                "is_display_footbar": "0",
                "is_display_suffix_name": "0",
                "suffix_name": "\u7f57\u8f91\u601d\u7ef4",
                "shopping_cart_style": "0",
                "team_type": "youzan",
                "mobile": "13426434096",
                "team_physical": 0,
                "mp_id": "35164",
                "kdt_id": "54023",
                "mp_weixin": "luojisw",
                "mp_nickname": "\u7f57\u8f91\u601d\u7ef4",
                "quick_subscribe": "1",
                "quick_subscribe_url": "http:\/\/mp.weixin.qq.com\/s?__biz=MjM5NjAxOTU4MA==&mid=284691550&idx=1&sn=49a2249e278c5bcaaed265fe508215c2&key=b2574200810f04e83fcd7437ded69b25946b60a16e77d943e763ee7f2d85696ade465c8a25f49375ec75c89d63d077cb&ascene=1&uin=ODc0MTEzMDAw&devicetype=webwx&version=70000001&pass_ticket=7kOefcIXdFW%2BMVwsjO0BZQLDlxKAd9qPVMj6dpXJY9BdJV8dIPFUN6vi1SRV%2FQKL"
            },
            "wxpay_big": false,
            "alipay_env": true,
            "wxpay_env": false,
            "wxaddress_env": false,
            "is_owner_team": false,
            "weixin_jssdk_use": 0,
            "mp_id": 0,
            "isWishOpen": 0,
            "wishUrl": "http:\/\/trade.koudaitong.com\/wxpay\/wish?kdt_id=54023",
            "fans_id": 0,
            "is_fans": 2,
            "fans_nickname": "",
            "fans_type": 0,
            "fans_token": "",
            "fans_picture": "",
            "youzan_fans_id": 0,
            "youzan_fans_nickname": "",
            "youzan_fans_picture": "",
            "youzan_user_id": 0,
            "no_user_login": true,
            "buyer_id": 0,
            "change_password_url": "",
            "buyer": {
                "id": 0,
                "phone": ""
            },
            "open_token": [],
            "title": "\u300a\u6587\u827a\u590d\u5174\u4e09\u6770\u300b\uff1a\u4f60\u7684\u79c1\u4eba\u7f8e\u672f\u9986",
            "showcase_type": "feature",
            "have_goods": false,
            "spm": {
                "logType": "f",
                "logId": 38154051
            },
            "ajaxURL": [],
            "no_sidebar": 0,
            "url": {
                "base": "\/\/koudaitong.com",
                "bbs": "http:\/\/bbs.youzan.com",
                "cdn": "\/\/b.yzcdn.cn",
                "cdn_static": "https:\/\/b.yzcdn.cn\/v2",
                "cp": "http:\/\/cp.koudaitong.com",
                "daxue": "http:\/\/xt.youzan.com",
                "fenxiao": "\/\/fx.youzan.com",
                "fuwu": "\/\/fuwu.youzan.com",
                "img": "\/\/img.koudaitong.com",
                "imgqn": "https:\/\/img.yzcdn.cn",
                "login": "\/\/login.youzan.com",
                "open": "\/\/open.koudaitong.com",
                "static": "https:\/\/static.koudaitong.com\/v2",
                "trade": "http:\/\/trade.koudaitong.com",
                "v1": "http:\/\/koudaitong.com\/v1",
                "v1_static": "\/\/static.koudaitong.com\/v1",
                "v2": "\/\/koudaitong.com\/v2",
                "wap": "https:\/\/wap.koudaitong.com\/v2",
                "ws": "ws:\/\/s.im.youzan.com:83",
                "www": "\/\/koudaitong.com\/v2",
                "youzan": "\/\/youzan.com",
                "cloud": "http:\/\/dl.koudaitong.com",
                "pf": "https:\/\/pf.koudaitong.com"
            }
        };
    </script>
    <script charset="utf-8" src="https://b.yzcdn.cn/v2/build/wap/common_jquery_75554d22a0.js"></script>
    <script charset="utf-8" src="https://b.yzcdn.cn/v2/build/wap/base_522aad06a8.js"></script>
    <script charset="utf-8" src="https://b.yzcdn.cn/v2/build/wap/showcase/base_73a3120939.js"></script>
    <script charset="utf-8" src="https://b.yzcdn.cn/v2/build/wap/showcase/global_icon_6b50dd68db.js"></script>
    <script charset="utf-8" async="" src="https://b.yzcdn.cn/v2/vendor/page_statistics/feature.js"></script>
    <script charset="utf-8" src="https://b.yzcdn.cn/v2/build/wap/showcase/modules/audio_0d72b052ec.js"></script>
    <script charset="utf-8" src="https://b.yzcdn.cn/v2/build/wap/showcase/modules/swp_goods_ace71423e4.js"></script>
</head>

<body class=" " onmousemove="handleData()">

    <input type="hidden" id="handeFlag" value="1">
    <div id="contentDiv"></div>
    <div id="oldContent">

        <div class="container " style="min-height: 666px;">
            <div class="header">
                <div class="js-mp-info share-mp-info ">
                    <a class="page-mp-info" href="https://wap.koudaitong.com/v2/showcase/homepage?kdt_id=54023">
                        <img class="mp-image" width="24" height="24" src="https://dn-kdt-img.qbox.me/upload_files/2015/01/26/FoX21i8VqwlCwjyDW618p66vd7g8.png?imageView2/2/w/60/h/60/q/75/format/png">
                        <i class="mp-nickname">
                                            罗辑思维                                    </i>
                    </a>
                    <div class="links">
                        <span class="js-search mp-search search-icon"></span>
                        <a class="mp-homepage" href="https://wap.koudaitong.com/v2/showcase/usercenter?kdt_id=54023">我的记录</a>
                    </div>
                </div>
            </div>
            <div class="content ">
                <div class="content-body js-page-content">



                    <!-- 标题 -->
                    <div>
                        <div class="custom-title  text-left">
                            <h2 class="title">
            今日语音                    </h2>
                            <p class="sub_title"></p>
                        </div>
                    </div>



                    <div class="custom-audio js-audio" data-src="https://dn-kdt-img.qbox.me/upload_files/2016/01/21/FpPFgJrpDHHtStxjHdXkcVUmi2VC.mp3" data-reload="true" data-loop="false">
                        <div class="custom-audio-weixin clearfix">
                            <div>
                                <img class="custom-audio-logo js-not-share" src="https://dn-kdt-img.qbox.me/upload_files/2015/01/26/FoX21i8VqwlCwjyDW618p66vd7g8.png?imageView2/2/w/80/h/80/q/75/format/png" alt="音频播放logo" width="40" height="40">
                                <span class="custom-audio-bar">
        <img class="js-animation custom-audio-animation hide js-not-share" src="https://b.yzcdn.cn/v2/image/wap/audio/player.gif" alt="播放器动画" width="13" height="17">
        <i class="custom-audio-animation-static js-animation-static"></i>
        <img class="custom-audio-loading js-loading js-not-share" src="https://b.yzcdn.cn/v2/image/wap/common/loading.gif" alt="loading">
        <span class="custom-audio-status js-status"></span>
                                </span>
                                <span class="custom-audio-time js-duration"></span>
                            </div>

                        </div>
                    </div>


                    <!-- 标题 -->
                    <div class="custom-title-noline">
                        <div class="custom-title  text-left wx_template">
                            <h2 class="title">
            《文艺复兴三杰》：你的私人美术馆        </h2>
                            <p class="sub_title"><span class="sub_title_date">2016-01-22</span><span class="sub_title_author">罗振宇</span><a class="sub_title_link js-open-follow" href="javascript:;">罗辑思维</a></p>
                        </div>
                    </div>

                    <div class="custom-richtext js-lazy-container js-view-image-list">

                        <p><img class="js-lazy js-view-image-item" data-src="https://img.yzcdn.cn/upload_files/2016/01/21/FugVYHkCVbrbbOfNPMVxi2ZJVg6b.jpg!730x0.jpg" src="https://img.yzcdn.cn/upload_files/2016/01/21/FugVYHkCVbrbbOfNPMVxi2ZJVg6b.jpg?imageView2/2/w/730/h/0/q/75/format/webp"
                            style="display: inline;"></p>
                        <p style="text-align: left;">今天推荐给大家一套三本的《文艺复兴三杰》。</p>
                        <p style="text-align: left;">文艺复兴三杰，是大名鼎鼎的达·芬奇、拉斐尔和米开朗基罗。</p>
                        <p>这可能会是相当一段时间里我们店最贵的一套书了，顶配版卖将近 2 万块钱，标配版也要三百多。
                            <br>
                        </p>
                        <p>你大概会说，罗胖疯了吧！</p>
                        <p>你愿不愿意听我说说这套书的来源？</p>
                        <section style="white-space: normal;">
                            <section style="text-align: center;">
                                <section class="" style="border-bottom-width: 1px; border-bottom-style: solid; display: inline-block; padding: 0px 0.8em; border-bottom-color: rgb(160, 160, 160); font-size: 28px; color: rgb(249, 110, 87); box-sizing: border-box;">
                                    <section style="box-sizing: border-box;"><strong><span style="font-size: 20px; color: rgb(227, 108, 9);">不可不知的美术史</span></strong></section>
                                </section>
                            </section>
                        </section>
                        <p style="white-space: normal; text-align: center; margin-bottom: 15px;"><strong><span style="color: rgb(51, 51, 51); background-color: rgb(248, 248, 248); font-size: 18px;">中产阶级家庭必备藏书</span></strong></p>
                        <p>我一直觉得我们店里应该有一套跟美术史有关的书，尤其是西方古典美术。在我看来，这应该是一个中产阶级家庭的必备藏书。</p>
                        <p>我们有越来越多的机会带着孩子去海外旅行，总不能光挤在蒙娜丽莎画像前看人头涌涌吧？</p>
                        <p>在大英博物馆、卢浮宫、乌菲奇美术馆、大都会博物馆，我们怎么面对孩子的提问？出门之前，我们可以做点什么知识储备？</p>
                        <p>理想中的入门级美术史阅读，应该跟文艺复兴相关。为什么？</p>
                        <ul class=" list-paddingleft-2" style="list-style-type: disc;">
                            <li>
                                <p><span style="font-size: 14px; color: rgb(89, 89, 89);">这是一个张开眼睛看人和张开眼睛看世界的时代。</span></p>
                            </li>
                            <li>
                                <p><span style="font-size: 14px; color: rgb(89, 89, 89);">建筑、雕刻和绘画开始各自独立发展，美术的内部分支基本确立。</span></p>
                            </li>
                            <li>
                                <p><span style="font-size: 14px; color: rgb(89, 89, 89);">这一时期的美术，除了与当时的文学、哲学的联系外，还与自然科学密切相关，不少艺术家同时也是科学家。</span></p>
                            </li>
                            <li>
                                <p><span style="font-size: 14px; color: rgb(89, 89, 89);">艺术逐渐从僧侣手中解放出来转移到专业工匠手中，促使了美术家队伍的扩大，也出现了各种不同的风格流派。</span></p>
                            </li>
                        </ul>
                        <p><span style="color: rgb(192, 0, 0);">想要了解美术史，文艺复兴是个承前启后的抓手。</span></p>
                        <p>去年一年，跟文艺复兴相关的书找了一大圈，看过人物传记，看过艺术史专著，始终不满意。</p>
                        <p>直到我听东方出版社的编辑姚恋老师说起这套出自意大利的《文艺复兴三杰》画传。</p>
                        <section style="white-space: normal;">
                            <section style="text-align: center;">
                                <section class="" style="border-bottom-width: 1px; border-bottom-style: solid; display: inline-block; padding: 0px 0.8em; border-bottom-color: rgb(160, 160, 160); font-size: 28px; color: rgb(249, 110, 87); box-sizing: border-box;">
                                    <section style="box-sizing: border-box;"><strong><span style="font-size: 20px; color: rgb(227, 108, 9);">一个杰出版本的诞生</span></strong></section>
                                </section>
                            </section>
                        </section>
                        <p style="text-align: center; margin-bottom: 15px;"><span style="font-size: 18px;"><strong><span style="line-height: 24px; text-align: center; background-color: rgb(248, 248, 248);">匠人精神的羊皮卷典藏版</span>&nbsp;
                            <br>
                            </strong>
                            </span>
                        </p>
                        <p style="margin-bottom: 15px; text-align: right;"><img class="js-lazy js-view-image-item" data-src="https://img.yzcdn.cn/upload_files/2016/01/21/FjPdty72CSIkALptils6b2oFe9n7.jpg!730x0.jpg" src="https://img.yzcdn.cn/upload_files/2016/01/21/FjPdty72CSIkALptils6b2oFe9n7.jpg?imageView2/2/w/730/h/0/q/75/format/webp"
                            style="display: inline;"></p>
                        <blockquote>
                            <p style="margin-bottom: 15px; text-align: right;"><span style="color: rgb(89, 89, 89); font-size: 14px; line-height: 21px; text-align: right; background-color: rgb(248, 248, 248);">《文艺复兴三杰》羊皮卷典藏版</span></p>
                        </blockquote>
                        <p style="margin-bottom: 15px;">这套书原出版方是意大利 Scripta&nbsp;Maneant 出版社，这是欧洲艺术作品出版领域最有影响力的出版社之一。 &nbsp; &nbsp;</p>
                        <p>这套书的出版前后历经了十几年，为了穷尽性地搜集达·芬奇、拉斐尔、米开朗基罗三巨人的作品，他们拜访了世界各地上百家博物馆和收藏家，说服他们把珍贵的原作拿出来翻拍。</p>
                        <p>这么说吧，有些画作，是我们作为一个普通人唯一 一窥芳容的机会。</p>
                        <p>这套书的主编费德里科·法拉利说，这套书在欧洲是奢侈品，可以拿到银行去贷款。</p>
                        <p>这套书中文版引进始于 2011 年，从洽谈版权、翻译、校正、编辑、校对，到 2014 年 7 月精装版出版，又花了 3 年多时间，国内版本的出版同样需要得到西方 100 多个机构、博物馆的联合授权。</p>
                        <p>为了确保这套书中文版的品相，意大利出版方有近乎苛刻的工艺要求。<span style="color: rgb(192, 0, 0);">羊皮卷典藏版</span>是 8 开的超大开本，内文全部用 210 克进口版画纸，书脊用了手工羊皮竹节装，这是经典的《圣经》羊皮书的装帧方式。</p>
                        <p>精装版第一次下厂时，承印方还邀请了意大利技师参与到技术分析和制作中，反复试验了 9 次，才达到理想的呈现效果。</p>
                        <p style="white-space: normal;"><img class="js-lazy js-view-image-item" data-src="https://img.yzcdn.cn/upload_files/2016/01/21/FuMzF-ya2IEaADlbJRNienOOajI-.jpg!730x0.jpg" src="https://img.yzcdn.cn/upload_files/2016/01/21/FuMzF-ya2IEaADlbJRNienOOajI-.jpg?imageView2/2/w/730/h/0/q/75/format/webp"
                            style="display: inline;"></p>
                        <blockquote style="white-space: normal;">
                            <p style="text-align: right;"><span style="font-size: 14px; color: rgb(89, 89, 89);">顶级艺术评论家执笔的美术史读物</span></p>
                        </blockquote>
                        <p>书真是好书。
                            <br>
                        </p>
                        <p>都是顶级艺术评论家执笔，把文艺复兴三杰所处的时代与人生经历、画作的艺术亮点与前生今世娓娓道来，毫不艰深晦涩，任何一个有兴趣了解美术史的人都能读得懂，都能享受到其中之美。</p>
                        <p><span style="color: rgb(192, 0, 0);">可是这套羊皮卷典藏版实在太贵了，每本 6800 元。</span>
                            <br>
                        </p>
                        <p>罗辑思维有没有可能出一个普通人负担得起的版本？我想让更多人看到这套好书。</p>
                        <p>说服意大利人出个平装版并不容易，为此版权引进方和出版方又花了大半年时间。</p>
                        <p>然后确定尺寸重新排版，全书有超过 1000 幅图片需要处理。光是封面设计方案，前前后加起来也超过了 100 种。</p>
                        <section style="white-space: normal;">
                            <section style="text-align: center;">
                                <section class="" style="border-bottom-width: 1px; border-bottom-style: solid; display: inline-block; padding: 0px 0.8em; border-bottom-color: rgb(160, 160, 160); font-size: 28px; color: rgb(249, 110, 87); box-sizing: border-box;">
                                    <section style="box-sizing: border-box;"><strong><span style="font-size: 20px; color: rgb(227, 108, 9);">负担得起的美好</span></strong></section>
                                </section>
                            </section>
                        </section>
                        <p style="white-space: normal; text-align: center;"><span style="font-size: 18px;"><strong><span style="color: rgb(51, 51, 51); line-height: 24px; background-color: rgb(248, 248, 248);">精益求精的平装画传</span></strong>
                            </span>
                        </p>
                        <p><img class="js-lazy js-view-image-item" data-src="https://img.yzcdn.cn/upload_files/2016/01/21/Fo6twTbcv5WdJxWrAZdI6pDPwkyE.jpg!730x0.jpg" src="https://img.yzcdn.cn/upload_files/2016/01/21/Fo6twTbcv5WdJxWrAZdI6pDPwkyE.jpg?imageView2/2/w/730/h/0/q/75/format/webp"
                            style="display: inline;"></p>
                        <blockquote>
                            <p style="text-align: right;"><span style="font-size: 14px; line-height: 21px; text-align: right; color: rgb(89, 89, 89); background-color: rgb(248, 248, 248);">《文艺复兴三杰》平装版</span></p>
                        </blockquote>
                        <p><span style="color: rgb(192, 0, 0);">平装版</span>目前的开本比罗辑思维书店里其他书要大一些，为的是用更合适的尺幅呈现画作细节，但又足够方便查阅。</p>
                        <p>仍然是锁线平装，每本 400 页的厚度，又担心它不经翻，于是加了一层布封书脊，品相更好。但这样一来，增加了大量手工，成本增高了，补货周期拉长了。</p>
                        <p style="white-space: normal;"><img class="js-lazy js-view-image-item" data-src="https://img.yzcdn.cn/upload_files/2016/01/22/Fh7sYRVy98Tgi-ePoWRo64XPyXJI.jpg!730x0.jpg" src="https://img.yzcdn.cn/upload_files/2016/01/22/Fh7sYRVy98Tgi-ePoWRo64XPyXJI.jpg?imageView2/2/w/730/h/0/q/75/format/webp"
                            style="display: inline;"></p>
                        <blockquote style="white-space: normal;">
                            <p style="text-align: right;"><span style="font-size: 14px; color: rgb(89, 89, 89);">意大利技师的严苛印刷工艺</span></p>
                        </blockquote>
                        <p style="text-align: left;">为了印这套书，还用废了一套 2 万块的羊皮卷典藏版，因为要一页一页对着追色。</p>
                        <p style="text-align: left;"><span style="color: rgb(192, 0, 0);">一个读书的人，读到一定的程度，就会关注和选择版本。</span>
                            <br>
                        </p>
                        <p>这套书，在文艺复兴美术这个题材上，我敢说是做到了极致。从此，我们店里又多了一套值得典藏的镇店好书。</p>
                        <p>工艺太复杂，春节之前，平装版只来得及做好 10000 套。</p>
                        <p>这套书的羊皮卷典藏版于 2014 年 7 月出版，只印了一版，限量发行。</p>
                        <p>前期收藏它的多数为图书馆、博物馆和艺术家，已所剩无多。劫就劫皇纲，现在起，只在罗辑思维独家销售。</p>
                        <p><a target="_blank" href="https://wap.koudaitong.com/v2/goods/276ehocgsbcnb?reft=1453392115939&amp;spm=f38176027" textvalue="https://wap.koudaitong.com/v2/goods/276ehocgsbcnb?reft=1453392115939&amp;spm=f38176027"><span style="color: rgb(192, 0, 0);">戳此↓↓↓ 收藏自己的私人美术馆。</span></a></p>
                    </div>

                    <div class="custom-richtext js-lazy-container js-view-image-list">

                        <p>
                            <a target="_blank" href="https://wap.koudaitong.com/v2/showcase/goods?alias=276ehocgsbcnb" textvalue="https://wap.koudaitong.com/v2/showcase/goods?alias=276ehocgsbcnb"><img class="js-lazy js-view-image-item" data-src="https://img.yzcdn.cn/upload_files/2016/01/22/Fm3lkB-NRtsLdBWGKf8msA4_dI5J.jpg!730x0.jpg" src="https://img.yzcdn.cn/upload_files/2016/01/22/Fm3lkB-NRtsLdBWGKf8msA4_dI5J.jpg?imageView2/2/w/730/h/0/q/75/format/webp"
                                style="display: inline;"></a>
                            <a target="_blank" href="https://wap.koudaitong.com/v2/showcase/goods?alias=2x7rfauprbrvr" textvalue="https://wap.koudaitong.com/v2/showcase/goods?alias=2x7rfauprbrvr"><img class="js-lazy js-view-image-item" data-src="https://img.yzcdn.cn/upload_files/2016/01/22/Fnwa2PztLBChOXRUq6s1-lgGxx54.png!730x0.jpg" src="https://img.yzcdn.cn/upload_files/2016/01/22/Fnwa2PztLBChOXRUq6s1-lgGxx54.png?imageView2/2/w/730/h/0/q/75/format/webp"
                                style="display: inline;"></a>
                            <a target="_blank" href="https://wap.koudaitong.com/v2/showcase/feature?alias=uqvuen1q" textvalue="https://wap.koudaitong.com/v2/showcase/feature?alias=uqvuen1q"><img class="js-lazy js-view-image-item" data-src="https://img.yzcdn.cn/upload_files/2016/01/22/FuUSbBtBym0Tt9Vkc97pPv0qE9OG.png!730x0.jpg" src="https://img.yzcdn.cn/upload_files/2016/01/22/FuUSbBtBym0Tt9Vkc97pPv0qE9OG.png?imageView2/2/w/730/h/0/q/75/format/webp"
                                style="display: inline;"></a>
                            <a target="_blank" href="http://www.igetget.com/redirect?spm=fw0008" textvalue="http://www.igetget.com/redirect?spm=fw0008"><img class="js-lazy js-view-image-item" data-src="https://img.yzcdn.cn/upload_files/2015/12/26/FvEOk0Oyl7H80kxEBetRdV7a_BjJ.png!730x0.jpg" src="https://img.yzcdn.cn/upload_files/2015/12/26/FvEOk0Oyl7H80kxEBetRdV7a_BjJ.png?imageView2/2/w/730/h/0/q/75/format/webp"
                                style="display: inline;"></a>
                        </p>
                        <p>
                            <a target="_blank" href="http://wap.koudaitong.com/v2/feature/lqdwbpo8?reft=1444965627840_1444967391858&amp;spm=f4712938_g160779406" textvalue="http://wap.koudaitong.com/v2/feature/lqdwbpo8?reft=1444965627840_1444967391858&amp;spm=f4712938_g160779406"></a>
                        </p>
                        <p>
                            <a target="_blank" href="http://wap.koudaitong.com/v2/goods/jf79jssn" textvalue="http://wap.koudaitong.com/v2/goods/jf79jssn"></a>
                        </p>
                        <p>
                            <a target="_blank" href="http://wap.koudaitong.com/v2/goods/1szfp3we" textvalue="http://wap.koudaitong.com/v2/goods/1szfp3we"></a>
                        </p>
                        <p>
                            <a target="_blank" href="http://wap.koudaitong.com/v2/goods/1n79ylx4" textvalue="http://wap.koudaitong.com/v2/goods/1n79ylx4"></a>
                        </p>
                        <p>
                            <a target="_blank" href="http://wap.koudaitong.com/v2/goods/qzkvmjoe"></a>
                        </p>
                    </div>

                    <!-- 图片广告 -->
                    <div class="custom-image-single clearfix">
                        <a href="javascript:void(0);" target="_blank">
                            <img class="js-res-load js-view-image-item" src="https://dn-kdt-img.qbox.me/upload_files/2015/12/26/FlIcyxAdW7reMDhiYVi1f0SlgpFl.jpg?imageView2/2/w/730/h/0/q/75/format/jpg">
                        </a>
                    </div>

                    <!-- 图片广告 -->
                    <div class="custom-image-single clearfix">
                        <a href="javascript:void(0);" target="_blank">
                            <img class="js-res-load js-view-image-item" src="https://dn-kdt-img.qbox.me/upload_files/2015/12/26/Fi6yUn7JISPXupp4OMUw8WJMS4sy.png?imageView2/2/w/730/h/0/q/75/format/png">
                        </a>
                    </div>

                    <div class="custom-richtext js-lazy-container js-view-image-list">

                        <p style="white-space: normal;"><strong><span style="font-size: 14px;">好文分享</span></strong><span style="font-size: 14px;"><br>不管你在哪里读到有知识价值的好文章，请记得随手发给罗胖。<br>投稿邮箱:&nbsp;<span style="color: rgb(84, 141, 212);">dushuren@luojilab.com</span>
                            <br>好文章与615万人分享。投稿烦请您准确核实文章原作者姓名及文章出处，并请尽量提供作者联系方式，协助我们与作者取得联系，谢谢！</span>
                        </p>
                        <p style="white-space: normal;"><strong><span style="font-size: 14px;">社群服务<br></span></strong><span style="font-size: 14px;">客服邮箱:&nbsp;</span><span style="font-size: 14px; color: rgb(84, 141, 212);">service@luojilab.com</span></p>
                        <p style="white-space: normal; margin-bottom: 0px;"><span style="font-size: 14px;"><strong>题图版权</strong></span></p>
                        <p style="white-space: normal; margin-bottom: 0px;"><span style="font-size: 14px;">©海洛创意 hellorf.com 。未经授权，不得使用。</span></p>
                        <p style="white-space: normal;"><a target="_blank" href="http://v.youku.com/v_show/id_XMTM3MjYxMjUyMA==.html" textvalue="http://v.youku.com/v_show/id_XMTM3MjYxMjUyMA==.html"><span style="margin: 0px; padding: 0px; border: 0px; font-family: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; font-size: 14px; vertical-align: baseline; color: rgb(151, 72, 6); text-decoration: underline;"></span></a>
                            <a target="_blank" href="http://v.youku.com/v_show/id_XMTM3MjYxMjUyMA==.html" textvalue="http://v.youku.com/v_show/id_XMTM3MjYxMjUyMA==.html" style="white-space: normal;"><span style="margin: 0px; padding: 0px; border: 0px; font-family: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; font-size: 14px; vertical-align: baseline; color: rgb(151, 72, 6); text-decoration: underline;"></span></a>
                            <a target="_blank" href="http://v.youku.com/v_show/id_XMTM3MjYxMjUyMA==.html" textvalue="http://v.youku.com/v_show/id_XMTM3MjYxMjUyMA==.html" style="white-space: normal;"><span style="margin: 0px; padding: 0px; border: 0px; font-family: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; font-size: 14px; vertical-align: baseline; color: rgb(151, 72, 6); text-decoration: underline;"></span></a>
                        </p>
                        <p><a target="_blank" href="http://v.youku.com/v_show/id_XMTQ1MjQyMDgzNg==.html" textvalue="http://v.youku.com/v_show/id_XMTQ1MjQyMDgzNg==.html"><span style="text-decoration: underline; font-size: 14px; color: rgb(151, 72, 6);">《罗辑思维》第157期《这个世界会好吗？》（下）播出了。--&gt;点我观看视频，请在WiFi环境下打开。</span></a></p>
                    </div>

                    <div class="custom-store block-item border">
                        <a class="custom-store-link clearfix" href="https://luojilab.koudaitong.com">
                            <div class="custom-store-img"></div>
                            <div class="custom-store-name">罗辑思维</div>
                            <span class="custom-store-enter">进入店铺</span>
                        </a>
                    </div>

                </div>
                <div class="content-sidebar">
                    <a href="https://wap.koudaitong.com/v2/showcase/homepage?kdt_id=54023" class="link">
                        <div class="sidebar-section shop-card">
                            <div class="table-cell">
                                <img src="https://dn-kdt-img.qbox.me/upload_files/2015/01/26/FoX21i8VqwlCwjyDW618p66vd7g8.png?imageView2/2/w/120/h/120/q/75/format/png" width="60" height="60" class="shop-img" alt="公众号头像">
                            </div>
                            <div class="table-cell">
                                <p class="shop-name">
                                    罗辑思维 </p>
                            </div>
                        </div>
                    </a>
                    <div class="sidebar-section shop-info">
                        <div class="section-detail">

                            <p class="text-center weixin-title">微信“扫一扫”立即关注</p>
                            <div class="text-center qr-code">
                                <img width="158" height="158" src="https://open.weixin.qq.com/qr/code/?username=luojisw"></div>
                            <p class="text-center weixin-no">微信号：luojisw</p>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    var showQcode = function() {
                        if (typeof $ !== 'undefined') {
                            var $qrcode = $('.js-follow-qrcode');
                            $qrcode.removeClass('js-follow-qrcode'); //兼容图文
                            if ($qrcode.length == 0) return;
                            if (!window._global.mp_data || $qrcode.length <= 0 || (window._global.is_mobile && !(/ipad/gi).test(navigator.userAgent.toLowerCase()))) {
                                return false;
                            }
                            var followQrcodeSrc = 'https://open.weixin.qq.com/qr/code/?username=' + window._global.mp_data.mp_weixin;
                            var img = new Image();
                            img.width = 158;
                            img.height = 158;
                            $(img).on('load', function(event) {
                                $qrcode.append(img).removeClass('loading');
                            });
                            img.src = followQrcodeSrc;
                        } else {
                            setTimeout(showQcode, 500);
                        }
                    };
                    showQcode();
                </script>
                <div id="shop-nav" style="display: none;"></div>
            </div>
        </div>

        <div class="js-footer" style="min-height: 1px;">


            <div>


                <div class="footer">
                    <div class="copyright">
                        <div class="ft-links">
                            <a href="https://wap.koudaitong.com/v2/showcase/homepage?kdt_id=54023" target="_blank">店铺主页</a>
                            <a href="https://wap.koudaitong.com/v2/showcase/usercenter?kdt_id=54023" target="_blank">会员中心</a>
                            <a href="javascript:;" class="js-open-follow">关注我们</a>
                        </div>


                        <div class="ft-copyright">
                            <a href="https://youzan.com" target="_blank">有赞提供技术支持</a>
                        </div>

                    </div>
                </div>


            </div>

        </div>


        <script>
            var showcase_js_map = [{
                "url": "https:\/\/b.yzcdn.cn\/v2\/build\/wap\/showcase\/modules\/audio_0d72b052ec.js",
                "deps": []
            }, {
                "url": "https:\/\/b.yzcdn.cn\/v2\/build\/wap\/showcase\/modules\/swp_goods_ace71423e4.js",
                "deps": []
            }]
        </script>



        <script>
            "use strict";
            ! function(n, e) {
                function t(n) {
                    return "complete" === n.readyState || "loaded" === n.readyState
                }

                function o(n, t, o) {
                    var c = e.createElement("link");
                    c.rel = "stylesheet", r(c, o, "css"), c.async = !0, c.href = n, d.appendChild(c)
                }

                function c(n, t, o) {
                    var c = e.createElement("script");
                    c.charset = "utf-8", r(c, o, "js"), c.async = !t.sync, c.src = n, d.appendChild(c)
                }

                function a(n, e) {
                    var t;
                    n.sheet && (t = !0), setTimeout(function() {
                        t ? e() : a(n, e)
                    }, 20)
                }

                function r(e, o, c) {
                    function r() {
                        e.onload = e.onreadystatechange = null, e = null, o()
                    }
                    var i = "onload" in e,
                        u = "css" === c;
                    return !u || !f && i ? void(i ? (e.onload = r, e.onerror = function() {
                        e.onerror = null, n._cdnFallback(e)
                    }) : e.onreadystatechange = function() {
                        t(e) && r()
                    }) : void setTimeout(function() {
                        a(e, o)
                    }, 1)
                }

                function i(n, e, t, a) {
                    function r() {
                        var t = e.indexOf(n);
                        t > -1 && e.splice(t, 1), 0 === e.length && a()
                    }
                    s.test(n) ? o(n, t, r) : c(n, t, r)
                }

                function u(n, e, t) {
                    var o = function() {
                        t && t()
                    };
                    if (n = Array.prototype.slice.call(n || []), 0 === n.length) return void o();
                    for (var c = 0, a = n.length; a > c; c++) i(n[c], n, e, o)
                }

                function l(e, o) {
                    t(e) ? o() : n.addEventListener("load", o)
                }
                var s = new RegExp("\\.css"),
                    d = e.head || e.getElementsByTagName("head")[0],
                    f = +navigator.userAgent.replace(/.*(?:AppleWebKit|AndroidWebKit)\/?(\d+).*/i, "$1") < 536,
                    y = {
                        async: function(n, t) {
                            l(e, function() {
                                u(n, {}, t)
                            })
                        },
                        sync: function(n, t) {
                            l(e, function() {
                                u(n, {
                                    sync: !0
                                }, t)
                            })
                        }
                    };
                return n.Loader = y, y
            }(window, document);
        </script>



        <script>
            window.Loader.sync(["https:\/\/b.yzcdn.cn\/v2\/build\/wap\/common_jquery_75554d22a0.js", "https:\/\/b.yzcdn.cn\/v2\/build\/wap\/base_522aad06a8.js", "https:\/\/b.yzcdn.cn\/v2\/build\/wap\/showcase\/base_73a3120939.js", "https:\/\/b.yzcdn.cn\/v2\/build\/wap\/showcase\/global_icon_6b50dd68db.js"]);
            window.Loader.async(["https:\/\/b.yzcdn.cn\/v2\/vendor\/page_statistics\/feature.js"]);
        </script>
    </div>
    <script src="./jquery-1.11.3.js"></script>
    <script type="text/javascript">
        function handleData() {
            var handeFlag = $("#handeFlag").val();
            if (handeFlag == 1) {
                var kongge = new RegExp(" ", "g");
                var titleContent = $(".custom-title-noline").text().replace(kongge, "");
                var title = titleContent.substring(0, titleContent.indexOf("2016-"));
                var rerrr = new RegExp("[0-9]", "g");
                var author = titleContent.replace(title, '').replace("罗辑思维", '').replace(rerrr, '').replace("--", "");
                var mp3Valie = $(".custom-audio").attr('data-src');
                var firstImage = $(".js-view-image-item").attr("data-src").replace("https", "http");
                var temp = $(".js-view-image-item");
                $(temp[0]).remove();

                var tempContentHtml = "";
                var contentHtml = $(".content-body.js-page-content");
                var templent = contentHtml.children().length;
                for (i = 0; i < templent; i++) {
                    if (i > 2 && i < templent - 4) {
                        tempContentHtml += contentHtml.children().eq(i).html();
                    }
                }
                var reval = "";
                reval += "[语音]2016.01.22 藏书《" + $.trim(title) + "》";
                reval += "[align=left][size=5][color=#2e8b57]罗胖微信语音[/color][/size]";
                reval += "[audio]";
                reval += mp3Valie + "!64k.mp3";
                reval += "[/audio][/align]";
                reval += "[align=center][color=#ff0000][b]藏书[/b][/color][/align]<br>语音文字<br>今天您往下拖<br>";
                reval += "[img=201,0]";
                reval += firstImage;
                reval += "[/img]<br/>今日微信推送<br/>[align=center][font=微软雅黑][b]" + $.trim(title) + "[/b][/font][/align][align=center]" + author + "[/align][/align]";



                $("#oldContent").html("");
                $("#contentDiv").html(reval).append(tempContentHtml);
                $("#handeFlag").val(2);
            }
            if (typeof $(".search-bar") != "undefined") {
                $(".search-bar").remove();
            }
            if (typeof $(".js-right-icon.hide") != "undefined") {
                $(".js-right-icon.hide").remove();
            }

            if ($("#handeFlag").val() == 2) {
                $("#oldContent").remove();
                var newHtml = $("#contentDiv").html();
                var reee = new RegExp("https", "g");
                newHtml = newHtml.replace(reee, 'http');
                reee = new RegExp("<img", "g");
                newHtml = newHtml.replace(reee, '<br/><img ');
                reee = new RegExp('!730x0.jpg">', "g");
                newHtml = newHtml.replace(reee, '"/><br/><br/>');
                $("#contentDiv").html(newHtml);
                $("#handeFlag").val(3)
            }
        }
    </script>


    <div id="window-resizer-tooltip" style="display: none;">
        <a href="#" title="Edit settings"></a><span class="tooltipTitle">Window size: </span><span class="tooltipWidth" id="winWidth">1366</span> x <span class="tooltipHeight" id="winHeight">728</span>
        <br><span class="tooltipTitle">Viewport size: </span><span class="tooltipWidth" id="vpWidth">1366</span> x <span class="tooltipHeight" id="vpHeight">366</span></div>
</body>

</html>