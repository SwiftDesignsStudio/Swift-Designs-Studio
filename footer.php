    <!-- ================== JavaScript Files ================== -->
    <!-- Core Libraries -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugins & Animations -->
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.waypoints.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/jquery.animatedheadline.js"></script>
    <script src="js/jquery.mb.YTPlayer.min.js"></script>
    <script src="js/particles.js"></script>
    <script src="js/app.js"></script>

    <!-- Contact Form Validation -->
    <script src="js/validator.js"></script>
    <script src="js/contact.js"></script>

    <!-- Main Script -->
    <script src="js/main.js"></script>

    <!-- Initialize WOW animations -->
    <script>
        new WOW().init();
    </script>
    <script>
  (function(){
    var nav = document.querySelector('.navbar.navbar-default.main-nav');
    if(!nav) return;
    var toggle = function(){
      if(window.scrollY > 10) nav.classList.add('navbar--shrink');
      else nav.classList.remove('navbar--shrink');
    };
    toggle();
    window.addEventListener('scroll', toggle);
  })();
</script>


<div id="cookie-banner" class="cookie-banner" role="dialog" aria-live="polite" hidden>
  <div class="cookie-inner">
    <p>We use cookies to improve your experience. See our <a href="privacy.php">Privacy Policy</a>.</p>
    <button id="cookie-accept" class="btn btn--primary">Accept</button>
  </div>
</div>
<script>
  (function(){
    const key='sds_cookie_ok';
    const banner=document.getElementById('cookie-banner');
    if(!localStorage.getItem(key)) banner.hidden=false;
    document.getElementById('cookie-accept')?.addEventListener('click',()=>{
      localStorage.setItem(key,'1'); banner.hidden=true;
    });
  })();
</script>

<!-- ================== Footer Section ================== -->

<footer class="footer-area">
  <div class="container">
    <div class="legal-links" style="display:flex;flex-wrap:wrap;gap:16px;justify-content:center;font-size:14px;">
      <a href="/privacy.php"  style="color:goldenrod;">Privacy Policy</a>
      <span style="opacity:.5;">•</span>
      <a href="/terms.php"    style="color:goldenrod;">Terms &amp; Conditions</a>
      <span style="opacity:.5;">•</span>
      <a href="/security.php" style="color:goldenrod;">Security</a>
      <span style="opacity:.5;">•</span>
      <a href="/data-processing.php" style="color:goldenrod;">Data Processing</a>
    </div>
    <p style="text-align:center;margin-top:10px;font-size:13px;opacity:.85;">
      © <?= date('Y'); ?> Swift Designs Studio LLC. All rights reserved.
    </p>
  </div>
</footer>


<!-- ================== JavaScript Files ================== -->

<!-- Core Libraries -->

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- Plugins & Animations -->

<script src="js/wow.min.js"></script>
<script src="js/jquery.waypoints.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/jquery.magnific-popup.js"></script>
<script src="js/jquery.animatedheadline.js"></script>
<script src="js/jquery.mb.YTPlayer.min.js"></script>
<script src="js/particles.js"></script>
<script src="js/app.js"></script>

<!-- Contact Form Validation -->

<script src="js/validator.js"></script>
<script src="js/contact.js"></script>

<!-- Main Script -->

<script src="js/main.js"></script>

<!-- Initialize WOW animations -->

<script>
  new WOW().init();
</script>

<!-- Navbar shrink on scroll -->

<script>
  (function(){
    var nav = document.querySelector('.navbar.navbar-default.main-nav');
    if(!nav) return;
    var toggle = function(){
      if(window.scrollY > 10) nav.classList.add('navbar--shrink');
      else nav.classList.remove('navbar--shrink');
    };
    toggle();
    window.addEventListener('scroll', toggle);
  })();
</script>

<!-- Cookie Banner -->

<div id="cookie-banner" class="cookie-banner" role="dialog" aria-live="polite" hidden>
  <div class="cookie-inner">
    <p>We use cookies to improve your experience. See our <a href="privacy.php">Privacy Policy</a>.</p>
    <button id="cookie-accept" class="btn btn--primary">Accept</button>
  </div>
</div>
<script>
  (function(){
    const key='sds_cookie_ok';
    const banner=document.getElementById('cookie-banner');
    if(!localStorage.getItem(key)) banner.hidden=false;
    document.getElementById('cookie-accept')?.addEventListener('click',()=>{
      localStorage.setItem(key,'1'); banner.hidden=true;
    });
  })();
</script>

<!-- ================== Swift AI Messenger ================== -->

<div class="ai-messenger">

  <!-- Floating Button -->

  <button
    class="ai-messenger-button"
    id="aiMessengerToggle"
    aria-label="Open Swift AI Assistant"
  >
    <svg viewBox="0 0 24 24" aria-hidden="true" class="ai-messenger-icon">
      <path d="M4 4h16a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-6.5l-3.3 3.3a1 1 0 0 1-1.7-.7V16H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"/>
    </svg>
  </button>

  <!-- Chat Panel -->

  <div class="ai-messenger-panel" id="aiMessengerPanel" aria-hidden="true">
    <header class="ai-messenger-header">
      <div class="ai-messenger-header-main">
        <span class="ai-messenger-title">Swift AI Assistant</span>
        <span class="ai-messenger-subtitle">
          Ask anything about your website, content, or strategy.
        </span>
      </div>
      <button
        class="ai-messenger-close"
        id="aiMessengerClose"
        aria-label="Close Swift AI Assistant"
      >
        ×
      </button>
    </header>

    <div class="ai-messenger-body">
      <div class="ai-messenger-message ai-messenger-message--bot">
        <p>Hey there 👋 — I’m your Swift AI assistant. What can I help you with today?</p>
      </div>

      <div class="ai-messenger-suggestions">
        <button class="ai-messenger-chip">Improve my landing page copy</button>
        <button class="ai-messenger-chip">Explain Webflow vs WordPress</button>
        <button class="ai-messenger-chip">Help me plan a new campaign</button>
      </div>
    </div>

    <form class="ai-messenger-input-row" action="#" onsubmit="return false;">
      <input
        type="text"
        class="ai-messenger-input"
        placeholder="Type your question…"
      >
      <button type="submit" class="ai-messenger-send">
        Send
      </button>
    </form>
  </div>
</div>

<script>
  (function () {
    const toggleBtn = document.getElementById('aiMessengerToggle');
    const panel     = document.getElementById('aiMessengerPanel');
    const closeBtn  = document.getElementById('aiMessengerClose');
    const greetingEl = document.getElementById('aiMessengerGreeting');
    const form      = document.querySelector('.ai-messenger-input-row');
    const input     = document.getElementById('aiMessengerInput');
    const body      = document.querySelector('.ai-messenger-body');

    if (!toggleBtn || !panel || !body) return;

    function openPanel() {
      panel.classList.add('is-open');
      panel.setAttribute('aria-hidden', 'false');
    }

    function closePanel() {
      panel.classList.remove('is-open');
      panel.setAttribute('aria-hidden', 'true');
    }

    // Typing effect for greeting
    function typeText(el, text, speed) {
      if (!el) return;
      el.textContent = '';
      let i = 0;
      const timer = setInterval(function () {
        el.textContent += text.charAt(i);
        i++;
        if (i >= text.length) {
          clearInterval(timer);
        }
      }, speed || 30);
    }

    // Typing indicator bubble
    function createTypingBubble() {
      const msg = document.createElement('div');
      msg.className = 'ai-messenger-message ai-messenger-message--bot ai-messenger-message--typing';
      msg.setAttribute('id', 'aiTypingBubble');
      msg.innerHTML = `
        <span class="ai-typing-dot"></span>
        <span class="ai-typing-dot"></span>
        <span class="ai-typing-dot"></span>
      `;
      return msg;
    }

    function removeTypingBubble() {
      const existing = document.getElementById('aiTypingBubble');
      if (existing) existing.remove();
    }

    function addBotMessage(text) {
      removeTypingBubble();
      const msg = document.createElement('div');
      msg.className = 'ai-messenger-message ai-messenger-message--bot';
      msg.innerHTML = '<p>' + text.replace(/</g, '&lt;').replace(/>/g, '&gt;') + '</p>';
      body.appendChild(msg);
      body.scrollTop = body.scrollHeight;
    }

    function addUserMessage(text) {
      const msg = document.createElement('div');
      msg.className = 'ai-messenger-message ai-messenger-message--user';
      msg.style.background = '#f9d976';
      msg.style.color = '#111';
      msg.style.marginLeft = '40px';
      msg.innerHTML = '<p>' + text.replace(/</g, '&lt;').replace(/>/g, '&gt;') + '</p>';
      body.appendChild(msg);
      body.scrollTop = body.scrollHeight;
    }

    // Auto-open ONLY first time visitor with typing greeting
    if (!localStorage.getItem('sds_ai_opened')) {
      setTimeout(function () {
        openPanel();

        if (greetingEl) {
          const text = greetingEl.textContent.trim();
          typeText(greetingEl, text, 24);
        }

        localStorage.setItem('sds_ai_opened', '1');
      }, 2000);
    }

    // Manual open/close via button
    toggleBtn.addEventListener('click', function () {
      const isOpen = panel.classList.contains('is-open');
      if (isOpen) {
        closePanel();
      } else {
        openPanel();
      }
    });

    if (closeBtn) {
      closeBtn.addEventListener('click', closePanel);
    }

    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && panel.classList.contains('is-open')) {
        closePanel();
      }
    });

    // Handle suggestion chips (prefill input)
    document.querySelectorAll('.ai-messenger-chip').forEach(function (chip) {
      chip.addEventListener('click', function () {
        const text = chip.textContent.trim();
        input.value = text;
        input.focus();
      });
    });

    // Form submit → send to backend
    if (form && input) {
      form.addEventListener('submit', function (e) {
        e.preventDefault();
        const text = input.value.trim();
        if (!text) return;

        addUserMessage(text);
        input.value = '';

        const typing = createTypingBubble();
        body.appendChild(typing);
        body.scrollTop = body.scrollHeight;

        fetch('/api/swift-ai.php', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify({ message: text })
        })
        .then(function (res) { return res.json(); })
        .then(function (data) {
          if (data && data.reply) {
            addBotMessage(data.reply);
          } else {
            addBotMessage('Sorry, I had trouble responding just now.');
          }
        })
        .catch(function () {
          addBotMessage('Something went wrong talking to the AI. Please try again.');
        });
      });
    }
  })();
</script>

</body>
</html>
