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
