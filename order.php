<!DOCTYPE html>
<html lang="en">
  <head>
    <title id="iur48f">Order | Sovereign Tech</title>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta name="robots" content="index,follow"/>
  <meta name="generator" content="GrapesJS Studio"/>
  <style data-project-fonts="true">
@font-face {
      font-family: Roboto;
      src: url('https://fonts.gstatic.com/s/roboto/v49/KFOmCnqEu92Fr1Me4GZLCzYlKw.woff2');
      font-weight: 100 900;
    }
  

    @font-face {
      font-family: Roboto;
      src: url('https://fonts.gstatic.com/s/roboto/v49/KFOkCnqEu92Fr1Mu52xKKTM1K9nz.woff2');
      font-style: italic;
font-weight: 100 900;
    }
  

    @font-face {
      font-family: Epilogue;
      src: url('https://fonts.gstatic.com/s/epilogue/v20/O4ZRFGj5hxF0EhjimmImuAkalnmd.woff2');
      font-weight: 100 900;
    }
  

    @font-face {
      font-family: Epilogue;
      src: url('https://fonts.gstatic.com/s/epilogue/v20/O4ZXFGj5hxF0EhjimlIhsgg4k2md0kI.woff2');
      font-style: italic;
font-weight: 100 900;
    }
</style>
  <link rel="stylesheet" href="./style.css">
  </head>
  <body id="ibody-3" class="gjs-t-body"><section id="inav-4" class="gjs-section"><div id="inavcnt-4" class="gjs-container"><div id="ip985t-4" class="navbar"><div data-gjs="navbar" class="navbar-cnt"><a href="/" class="navbar-brand"><h1 id="ilogo-4">Sovereign Tech</h1></a><div id="ind7r6-4" class="navbar-menu-toggle"><div data-type-icon="" id="is9sri-4" class="gjs-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="M3 6h18v2H3zm0 5h18v2H3zm0 5h18v2H3z"></path></svg></div></div><div data-gjs="navbar-items" class="navbar-items-c"><nav class="navbar-menu-nav"><a id="ilink1-5" href="./index.html" class="nav-links">Home</a><a id="ilink1-2-4" href="./contact.html" class="nav-links">Contact</a><a id="ilink2-4" href="#iabout" class="nav-links">About</a><a href="#icta" id="iherobtn1-2-4" class="gjs-link-box gjs-t-button"><span id="iherobtn1txt-2-4">Build A Computer</span><div data-type-icon="" id="ilix97-4" class="gjs-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g fill="none"><path d="M24 0v24H0V0zM12.594 23.258l-.012.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.105.074l.014.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.016-.018m.264-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.008l.201.092q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.092l.01-.009l.004-.011l.017-.43l-.003-.012l-.01-.01z"></path><path fill="currentColor" d="M18 5a1 1 0 0 1 1 1v8a1 1 0 1 1-2 0V8.414l-9.95 9.95a1 1 0 0 1-1.414-1.414L15.586 7H10a1 1 0 1 1 0-2z"></path></g></svg></div></a></nav></div></div></div></div></section><div data-type-role="flex-row" id="i00v1m" class="gjs-plg-flex-row"><div data-type-role="flex-column" id="i6rlaj" class="gjs-plg-flex-column"><h1 id="iexbg2">Order</h1><div id="ikd3pl"><div class="order-card"><h2 class="order-title">Custom PC Build</h2><p class="order-sub">High-performance desktop optimized for gaming and content creation.</p><div><ul><li>CPU: AMD Ryzen 7 7800X3D</li><li>GPU: NVIDIA RTX 4070 Super</li><li>RAM: 32GB DDR5</li><li>Storage: 1TB NVMe SSD</li></ul><div id="i7rvfj"><span id="iacqil">Total:</span><strong id="idi6yj">$2,199.00</strong></div></div></div></div></div></div><script data-scope="order-form">
  (function(){
    const root = document.querySelector('[data-js="order-form"]');
    if(!root) return;
    const form = root.querySelector('[data-js="order-form-el"]');
    const name = root.querySelector('#of-name');
    const email = root.querySelector('#of-email');
    const address = root.querySelector('#of-address');
    const confirmBox = root.querySelector('[data-js="confirm"]');
    const confirmText = root.querySelector('[data-js="confirm-text"]');
    function valid() {
      return name.value.trim() && email.validity.valid && address.value.trim();
    }
    function showConfirm(msg){
      confirmText.textContent = msg;
      confirmBox.style.display = 'block';
    }
    root.querySelector('[data-js="paypal-btn"]').addEventListener('click', function(){
      if(!valid()){
        showConfirm('Please fill in Name, a valid Email, and Shipping Address before payment.');
        return;
      }
      showConfirm('Redirecting to PayPal secure checkout...');
      // Integration note: Replace with your PayPal checkout flow.
    });
    root.querySelector('[data-js="monero-btn"]').addEventListener('click', function(){
      if(!valid()){
        showConfirm('Please fill in Name, a valid Email, and Shipping Address before payment.');
        return;
      }
      showConfirm('Awaiting Monero (XMR) transfer. Your order will be confirmed once payment is detected.');
    });
  })();
</script><div data-js="order-form" id="iabckj" class="order-card"><h2 class="order-title">Your Information</h2><form method="get" data-js="order-form-el" novalidate="" id="i7ougm"><div class="form-grid"><div id="ipij1z" class="form-row"><label for="of-name" id="ioswrv">Name</label><input type="text" id="of-name" name="name" aria-required="true" required/></div><div id="iqvzbn" class="form-row"><label for="of-email" id="ikdsis">Email</label><input type="email" id="of-email" name="email" aria-required="true" required/></div></div><div id="ir5kgk" class="form-row"><label for="of-address" id="iayl69">Shipping Address</label><textarea id="of-address" name="address" aria-required="true" required></textarea></div><h2 id="ixi6wk" class="order-title">Payment Options</h2><div id="ismja5" class="pay-options"><button type="button" aria-label="Pay with PayPal" data-js="paypal-btn" class="pay-btn"><img src="https://api.iconify.design/lucide-banknote.svg?color=%23ffffff" alt="" width="20" height="20"/>
          Pay with PayPal
        </button><button type="button" aria-label="Pay with Monero" data-js="monero-btn" id="igkpxk" class="pay-btn alt-btn"><img src="https://api.iconify.design/lucide-bitcoin.svg?color=%23ffffff" alt="" width="20" height="20"/>
          Pay with Monero (XMR)
        </button></div><div id="ih9853" class="order-card"><h3 id="ippsmk" class="gjs-t-h2">Monero Payment Instructions</h3><p class="note">Send the exact amount to the address below. Your order will be confirmed automatically once the payment is detected on-chain.</p><div><span id="inryfj">Wallet Address:</span><span id="iuiq7r">48A1q9vXKxmE7sPZQw2oC9e4f9qA1mZ7y8v1nKfG2u...MoneroWalletDemo</span></div><div id="iajndt" class="qr-wrap"><img src="https://app.grapesjs.com/api/assets/random-image?query=%22monero%20qr%22&amp;w=160&amp;h=160" alt="Monero payment QR code" loading="lazy" class="qr-img"/><div><div id="i20gxi">Amount:</div><strong id="iecwzw">XMR 9.873421</strong><div id="it735p" class="note">Network: Monero (XMR)</div></div></div></div><div role="status" aria-live="polite" data-js="confirm" id="iphfoi" class="confirm-area"><span data-js="confirm-text">Processing your order...</span></div></form><div id="ii3k4i" class="footer-wrap"><div class="footer-brand"><span class="gjs-t-h2">Sovereign Tech</span><span id="i8ywgz" class="footer-copy"><br/></span></div><nav aria-label="Footer Navigation" id="ilnmk3" class="footer-links"><a href="./index.html" class="footer-link">Home</a><a href="./contact.html" class="footer-link">Contact</a><a href="./build.html" class="footer-link">Build</a><a href="./order.html" aria-current="page" class="footer-link">Order</a></nav></div><div id="ibxzwj">© 2026 Sovereign Tech. All rights reserved.</div></div><script>var items = document.querySelectorAll('#ind7r6-4');
          for (var i = 0, len = items.length; i < len; i++) {
            (function(){
var n,t=this,e='gjs-collapse',a='max-height',o=0,i=function(){var n=document.createElement('void'),t={transition:'transitionend',OTransition:'oTransitionEnd',MozTransition:'transitionend',WebkitTransition:'webkitTransitionEnd'};for(var e in t)if(void 0!==n.style[e])return t[e]}(),r=function(n){o=1;var t=function(n){var t=window.getComputedStyle(n),e=t.display,o=parseInt(t[a]);if('none'!==e&&0!==o)return n.offsetHeight;n.style.height='auto',n.style.display='block',n.style.position='absolute',n.style.visibility='hidden';var i=n.offsetHeight;return n.style.height='',n.style.display='',n.style.position='',n.style.visibility='',i}(n),e=n.style;e.display='block',e.transition="".concat(a," 0.25s ease-in-out"),e.overflowY='hidden',''==e[a]&&(e[a]=0),0==parseInt(e[a])?(e[a]='0',setTimeout((function(){e[a]=t+'px'}),10)):e[a]='0'};e in t||t.addEventListener('click',(function(e){if(e.preventDefault(),!o){var l=t.closest("[data-gjs=navbar]"),c=null==l?void 0:l.querySelector("[data-gjs=navbar-items]");c&&r(c),n||(null==c||c.addEventListener(i,(function(){o=0;var n=c.style;0==parseInt(n[a])&&(n.display='',n[a]='')})),n=1)}})),t[e]=1
}.bind(items[i]))();
          }</script></body>
</html>
