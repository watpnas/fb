<?php
echo "My first PHP script!";
?>
<html>
<body>
    <script>
        window.fbAsyncInit = function() {
          FB.init({
            appId      : '402946783903628',
            xfbml      : true,
            version    : 'v4.0'
          });
          FB.AppEvents.logPageView();
        };
      
        (function(d, s, id){
           var js, fjs = d.getElementsByTagName(s)[0];
           if (d.getElementById(id)) {return;}
           js = d.createElement(s); js.id = id;
           js.src = "https://connect.facebook.net/en_US/sdk.js";
           fjs.parentNode.insertBefore(js, fjs);
         }(document, 'script', 'facebook-jssdk'));
      </script>
      <div><div
class="fb-like"
data-share="true"
data-width="450"
data-show-faces="true">
</div>
<button onclick='FB.AppEvents.logEvent("buttonClicked")'>
    Click me
  </button></div>


  <!-- Facebook Pixel Code -->
<script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', 'your-pixel-id-goes-here');
    fbq('track', 'PageView');
  </script>
  <noscript>
    <img height="1" width="1" style="display:none" 
         src="https://www.facebook.com/tr?id=your-pixel-id-goes-here&ev=PageView&noscript=1"/>
  </noscript>
  <!-- End Facebook Pixel Code -->
</body>
</html>
