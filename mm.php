<html><head>
  <meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" name="viewport">
  <meta content="yes" name="apple-mobile-web-app-capable">
  <meta content="yes" name="apple-touch-fullscreen">
  <meta content="black" name="apple-mobile-web-app-status-bar-style">
  <meta content="320" name="MobileOptimized">
  <title></title>
  <style>
  body, html {
    margin: 0;
    padding: 0;
    height: 100vh;
    width: 100vw;
    overflow: hidden;
  }
  .content {
    height: 100vh;
    width: 100vw;
    position: fixed;
    left: 0;
    top: 0;
    border: none; /* 绉婚櫎杈规 */
  }
</style>

<style type="text/css" id="__via_marker__"></style></head>

<body>
  <script>
        
    var urlParams = new URLSearchParams(window.location.search);
    var encodedParam = urlParams.get('c');
    var tureurl = atob(encodedParam);
    if (tureurl.includes("http")) {
      var html = '<iframe class="content" src=' + tureurl + '></iframe>';
      document.writeln(html);
      console.log(tureurl);
    } else {
      console.log("nourls");
    }
  </script>
  <script>
    var firefox = navigator.userAgent.indexOf('Firefox') != -1;

    function MouseWheel(e, doc) {
      e.preventDefault && e.preventDefault(), e.returnValue = false;
      var up = firefox && e.detail < 0 || e.wheelDelta > 0;
      doc.body.scrollTop = doc.documentElement.scrollTop += up? -50 : 50;
    }

    function bindMouseWhee(ifr) {
      try {
        var doc = ifr.contentWindow.document;
        firefox? doc.addEventListener('DOMMouseScroll', function (e) { MouseWheel(e, doc) }, false) : (doc.onmousewheel = function (e) { MouseWheel(e || ifr.contentWindow.event, doc) });
      } catch (e) {
        alert('璺ㄥ煙鏃犳硶鑾峰彇iframe鍔犺浇document' + e);
      }
    }
  </script>
</body></html>