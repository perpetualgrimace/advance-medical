<script type="text/javascript">

  // async
  function downloadJSAtOnload() {
    var element = document.createElement("script");
    element.src = "<?= $site->url()?>/assets/build/js/main.min.js";
    document.body.appendChild(element);
  }
  if (window.addEventListener) {
    window.addEventListener("load", downloadJSAtOnload, false);
  } else if (window.attachEvent) {
    window.attachEvent("onload", downloadJSAtOnload);
  } else {
    window.onload = downloadJSAtOnload;
  }


  // typekit
  (function(d) {
    var config = {
      kitId: 'hza1dpr',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);

</script>

<!-- <script type="text/javascript" src="//js.leadin.com/js/v1/2123341.js" id="LeadinEmbed-2123341" crossorigin="use-credentials" async defer></script> -->
