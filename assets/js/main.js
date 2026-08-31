(function () {
  'use strict';

  /* ---------- Mobile nav toggle ---------- */
  var navToggle = document.querySelector('.mol-nav-toggle');
  var nav = document.getElementById('mol-primary-nav');

  if (navToggle && nav) {
    navToggle.addEventListener('click', function () {
      var isOpen = nav.classList.toggle('is-open');
      navToggle.setAttribute('aria-expanded', String(isOpen));
      document.body.style.overflow = isOpen ? 'hidden' : '';
    });

    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && nav.classList.contains('is-open')) {
        nav.classList.remove('is-open');
        navToggle.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = '';
        navToggle.focus();
      }
    });
  }

  /* Mobile submenu carets (desktop relies on CSS :hover) */
  document.querySelectorAll('.mol-nav__caret').forEach(function (caret) {
    caret.addEventListener('click', function () {
      var item = caret.closest('.mol-nav__item');
      var isOpen = item.classList.toggle('is-open');
      caret.setAttribute('aria-expanded', String(isOpen));
    });
  });

  /* ---------- Before / after compare sliders ---------- */
  function setupCompare(el) {
    var beforeWrap = el.querySelector('.mol-ba-compare__before-wrap');
    var beforeImg = el.querySelector('.mol-ba-compare__before');
    var handle = el.querySelector('.mol-ba-compare__handle');
    var range = el.querySelector('.mol-ba-compare__range');

    function syncImageWidth() {
      var width = el.clientWidth;
      beforeImg.style.width = width + 'px';
    }

    function update(value) {
      beforeWrap.style.width = value + '%';
      handle.style.left = value + '%';
    }

    syncImageWidth();
    update(range.value);

    range.addEventListener('input', function () {
      update(range.value);
    });

    window.addEventListener('resize', syncImageWidth);
  }

  document.querySelectorAll('[data-mol-ba-compare]').forEach(setupCompare);

  /* ---------- Before / after carousel (arrows + dots) ---------- */
  var slider = document.querySelector('.mol-ba-slider');
  if (slider) {
    var track = slider.querySelector('.mol-ba-slider__track');
    var slides = Array.prototype.slice.call(slider.querySelectorAll('.mol-ba-slider__slide'));
    var prevBtn = slider.querySelector('.mol-ba-slider__arrow--prev');
    var nextBtn = slider.querySelector('.mol-ba-slider__arrow--next');
    var dotsWrap = slider.querySelector('.mol-ba-slider__dots');
    var current = 0;

    slides.forEach(function (_, i) {
      var dot = document.createElement('button');
      dot.type = 'button';
      dot.setAttribute('role', 'tab');
      dot.setAttribute('aria-label', 'Show result ' + (i + 1));
      if (i === 0) dot.setAttribute('aria-current', 'true');
      dot.addEventListener('click', function () { goTo(i); });
      dotsWrap.appendChild(dot);
    });
    var dots = Array.prototype.slice.call(dotsWrap.children);

    function goTo(index) {
      current = (index + slides.length) % slides.length;
      track.style.transform = 'translateX(-' + (current * 100) + '%)';
      dots.forEach(function (dot, i) {
        if (i === current) dot.setAttribute('aria-current', 'true');
        else dot.removeAttribute('aria-current');
      });
    }

    if (prevBtn) prevBtn.addEventListener('click', function () { goTo(current - 1); });
    if (nextBtn) nextBtn.addEventListener('click', function () { goTo(current + 1); });
  }

  /* ---------- Limited-time-offer popup (homepage only, session-scoped) ---------- */
  var popup = document.getElementById('mol-popup');
  if (popup) {
    var SESSION_KEY = 'mollura_offer_popup_dismissed';
    var closers = popup.querySelectorAll('[data-mol-popup-close]');
    var lastFocused = null;

    function openPopup() {
      lastFocused = document.activeElement;
      popup.hidden = false;
      var panel = popup.querySelector('.mol-popup__panel');
      if (panel) panel.setAttribute('tabindex', '-1'), panel.focus();
      document.body.style.overflow = 'hidden';
    }

    function closePopup() {
      popup.hidden = true;
      document.body.style.overflow = '';
      sessionStorage.setItem(SESSION_KEY, '1');
      if (lastFocused) lastFocused.focus();
    }

    closers.forEach(function (el) {
      el.addEventListener('click', closePopup);
    });

    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && !popup.hidden) closePopup();
    });

    if (!sessionStorage.getItem(SESSION_KEY)) {
      window.setTimeout(openPopup, 1500);
    }
  }

  /* ---------- Video lightbox ---------- */
  var videoModal = document.getElementById('mol-video-modal');
  if (videoModal) {
    var videoIframe = document.getElementById('mol-video-modal-iframe');
    var videoTriggers = Array.prototype.slice.call(document.querySelectorAll('[data-mol-video-trigger]'));
    var videoClosers = videoModal.querySelectorAll('[data-mol-video-modal-close]');
    var videoPrevBtn = videoModal.querySelector('[data-mol-video-modal-prev]');
    var videoNextBtn = videoModal.querySelector('[data-mol-video-modal-next]');
    var videoList = videoTriggers.map(function (trigger) {
      return {
        youtubeId: trigger.getAttribute('data-youtube-id'),
        title: trigger.getAttribute('data-video-title')
      };
    });
    var videoLastFocused = null;
    var videoCurrentIndex = 0;

    function loadVideo(index) {
      videoCurrentIndex = (index + videoList.length) % videoList.length;
      var video = videoList[videoCurrentIndex];
      videoIframe.src = 'https://www.youtube.com/embed/' + video.youtubeId + '?autoplay=1&rel=0';
      videoIframe.title = video.title || 'Video';
    }

    function openVideoModal(index) {
      videoLastFocused = document.activeElement;
      loadVideo(index);
      videoModal.hidden = false;
      var panel = videoModal.querySelector('.mol-video-modal__panel');
      if (panel) panel.setAttribute('tabindex', '-1'), panel.focus();
      document.body.style.overflow = 'hidden';
    }

    function closeVideoModal() {
      videoModal.hidden = true;
      videoIframe.src = ''; // stop playback
      document.body.style.overflow = '';
      if (videoLastFocused) videoLastFocused.focus();
    }

    videoTriggers.forEach(function (trigger, i) {
      trigger.addEventListener('click', function () {
        openVideoModal(i);
      });
    });

    videoClosers.forEach(function (el) {
      el.addEventListener('click', closeVideoModal);
    });

    if (videoPrevBtn) videoPrevBtn.addEventListener('click', function () { loadVideo(videoCurrentIndex - 1); });
    if (videoNextBtn) videoNextBtn.addEventListener('click', function () { loadVideo(videoCurrentIndex + 1); });

    document.addEventListener('keydown', function (e) {
      if (videoModal.hidden) return;
      if (e.key === 'Escape') closeVideoModal();
      else if (e.key === 'ArrowLeft') loadVideo(videoCurrentIndex - 1);
      else if (e.key === 'ArrowRight') loadVideo(videoCurrentIndex + 1);
    });
  }

  /* ---------- Scroll-in reveal ---------- */
  var revealEls = Array.prototype.slice.call(document.querySelectorAll('[data-mol-reveal]'));
  var reduceMotion = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  if (revealEls.length && !reduceMotion && 'IntersectionObserver' in window) {
    document.documentElement.classList.add('mol-js-reveal');

    revealEls.forEach(function (el, i) {
      el.style.setProperty('--reveal-delay', (i % 4) * 80 + 'ms');
    });

    var revealObserver = new IntersectionObserver(function (entries, observer) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.15, rootMargin: '0px 0px -40px 0px' });

    revealEls.forEach(function (el) { revealObserver.observe(el); });

    // Safety net: guarantee reveal even if the observer never fires for some reason.
    window.setTimeout(function () {
      revealEls.forEach(function (el) { el.classList.add('is-visible'); });
    }, 2000);
  }

  /* ---------- Testimonials wall: "Show more" expand ---------- */
  var testimonialMoreBtns = document.querySelectorAll('.mol-tcard__more:not([aria-hidden="true"])');
  testimonialMoreBtns.forEach(function (btn) {
    btn.addEventListener('click', function () {
      var card = btn.closest('.mol-tcard');
      if (!card) return;
      var expanded = card.classList.toggle('is-expanded');
      btn.textContent = expanded ? 'Show less' : 'Show more';
      btn.setAttribute('aria-expanded', expanded ? 'true' : 'false');
    });
  });
})();
