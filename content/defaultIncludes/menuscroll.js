const nav = document.querySelector('#navMenu');
let topOfNav = nav.offsetTop;
console.log("position is a "+topOfNav);

function fixNav() {
    if (window.scrollY >= topOfNav) {
      document.body.style.paddingTop = nav.offsetHeight + 'px';
      console.log("position is b "+topOfNav);
      document.body.classList.add('fixed-nav');
    } else {
      document.body.classList.remove('fixed-nav');
      console.log("position is c "+topOfNav);
      document.body.style.paddingTop = 0;
    }
  }

  window.addEventListener('scroll', fixNav);