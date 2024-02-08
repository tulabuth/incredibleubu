<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sensive Blog - Home</title>
    <link rel="icon" type="image/png" sizes="96x96" href="/assets/favicon-96x96.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="css/linericon-style.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script
        nonce="b93a7a09-5723-4547-b61a-6be535cd0491">(function (w, d) { !function (dg, dh, di, dj) { dg[di] = dg[di] || {}; dg[di].executed = []; dg.zaraz = { deferred: [], listeners: [] }; dg.zaraz.q = []; dg.zaraz._f = function (dk) { return async function () { var dl = Array.prototype.slice.call(arguments); dg.zaraz.q.push({ m: dk, a: dl }) } }; for (const dm of ["track", "set", "debug"]) dg.zaraz[dm] = dg.zaraz._f(dm); dg.zaraz.init = () => { var dn = dh.getElementsByTagName(dj)[0], dp = dh.createElement(dj), dq = dh.getElementsByTagName("title")[0]; dq && (dg[di].t = dh.getElementsByTagName("title")[0].text); dg[di].x = Math.random(); dg[di].w = dg.screen.width; dg[di].h = dg.screen.height; dg[di].j = dg.innerHeight; dg[di].e = dg.innerWidth; dg[di].l = dg.location.href; dg[di].r = dh.referrer; dg[di].k = dg.screen.colorDepth; dg[di].n = dh.characterSet; dg[di].o = (new Date).getTimezoneOffset(); if (dg.dataLayer) for (const du of Object.entries(Object.entries(dataLayer).reduce(((dv, dw) => ({ ...dv[1], ...dw[1] })), {}))) zaraz.set(du[0], du[1], { scope: "page" }); dg[di].q = []; for (; dg.zaraz.q.length;) { const dx = dg.zaraz.q.shift(); dg[di].q.push(dx) } dp.defer = !0; for (const dy of [localStorage, sessionStorage]) Object.keys(dy || {}).filter((dA => dA.startsWith("_zaraz_"))).forEach((dz => { try { dg[di]["z_" + dz.slice(7)] = JSON.parse(dy.getItem(dz)) } catch { dg[di]["z_" + dz.slice(7)] = dy.getItem(dz) } })); dp.referrerPolicy = "origin"; dp.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(dg[di]))); dn.parentNode.insertBefore(dp, dn) };["complete", "interactive"].includes(dh.readyState) ? zaraz.init() : dg.addEventListener("DOMContentLoaded", zaraz.init) }(w, d, "zarazData", "script"); })(window, document);</script>
</head>

<body>
    @include('layout.header')
    @yield('content')
    @include('layout.footer')

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/main.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317"
        integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA=="
        data-cf-beacon='{"rayId":"833a1733dac8a1c0","version":"2023.10.0","token":"cd0b4b3a733644fc843ef0b185f98241"}'
        crossorigin="anonymous"></script>
</body>

</html>