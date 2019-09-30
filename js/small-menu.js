document.addEventListener('DOMContentLoaded', function(event) {
  const makeSmall = function() {
    const mastHead = document.getElementById('masthead');

    mastHead.querySelectorAll('.site-navigation').forEach(function(node, key, parent) {
      node.classList.toggle('main-navigation', false);
      node.classList.toggle('main-small-navigation', true);
    });

    mastHead.querySelectorAll('.site-navigation h1').forEach(function(node, key, parent) {
      node.classList.toggle('assistive-text', false);
      node.classList.toggle('menu-toggle', true);
    });

    mastHead.querySelectorAll('.menu-toggle').forEach(function(node, key, parent) {
      // FIXME:
      node.onclick = function() {
        /** @param {HTMLElement} elem */
        mastHead.querySelectorAll('.menu').forEach(function(elem, key, parent) {
          elem.classList.toggle('hidden');
        });
        node.classList.toggle('toggled-on');
      };
    });
  };

  window.addEventListener('resize', function(event){
    if(window.width < 800) {
      makeSmall();
    } else {
      const mastHead = document.getElementById('masthead');

      mastHead.querySelectorAll('.site-navigation').forEach(function(node, key, parent) {
        node.classList.toggle('main-navigation', true);
        node.classList.toggle('main-small-navigation', false);
      });
  
      mastHead.querySelectorAll('.site-navigation h1').forEach(function(node, key, parent) {
        node.classList.toggle('assistive-text', true);
        node.classList.toggle('menu-toggle', false);
      });  
      mastHead.querySelectorAll('.menu').forEach(function(node, key, parent) {
        node.removeAttribute('style');
      });
    }
  });

  if(window.width < 800) {
    makeSmall();
  }
});
