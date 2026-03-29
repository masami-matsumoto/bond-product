function fadeAnime() {
    var fadeUpTriggers = document.querySelectorAll('.fadeUpTrigger');
    var fadeDownTriggers = document.querySelectorAll('.fadeDownTrigger');
  
    fadeUpTriggers.forEach(function(elem) {
      var elemPos = elem.getBoundingClientRect().top + window.pageYOffset - 50;
      var scroll = window.pageYOffset;
      var windowHeight = window.innerHeight;
      if (scroll >= elemPos - windowHeight) {
        elem.classList.add('fadeUp');
      } else {
        elem.classList.remove('fadeUp');
      }
    });
  
    fadeDownTriggers.forEach(function(elem) {
      var elemPos = elem.getBoundingClientRect().top + window.pageYOffset - 50;
      var scroll = window.pageYOffset;
      var windowHeight = window.innerHeight;
      if (scroll >= elemPos - windowHeight) {
        elem.classList.add('fadeDown');
      } else {
        elem.classList.remove('fadeDown');
      }
    });
  }
  
  function debounce(func, wait) {
    var timeout;
    return function() {
      clearTimeout(timeout);
      timeout = setTimeout(func, wait);
    };
  }
  
  var debouncedFadeAnime = debounce(fadeAnime, 40);
  
  window.addEventListener('scroll', function() {
    requestAnimationFrame(debouncedFadeAnime);
  });
  window.addEventListener('load', fadeAnime);
  