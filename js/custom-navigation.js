// Grabbing the DOM elements we need for the mobile menu and putting them in variables.
const mainNavigationMobile = document.querySelector('.main-navigation__mobile');
const menu = document.querySelector('.menu');
const hamburgerButton = document.querySelector('.hamburger-button');
line1 = document.querySelector('.line-1');
line2 = document.querySelector('.line-2');
line3 = document.querySelector('.line-3');

hamburgerButton.addEventListener('click', () => {
  line1.classList.toggle('line-1-click');
  line2.classList.toggle('line-2-click');
  line3.classList.toggle('line-3-click');
  mainNavigationMobile.classList.toggle('mobile-show');
})


// .main-navigation {
  
// }

// .menu-main-menu-container {
  
// }

// .menu {
//   display: flex;
//   justify-content: center;
//   align-items: center;
//   margin: 0 3rem;

//   li {
//     margin: .6rem 1rem;
//     text-align: center;
//     font-size: 1.5rem;

//     a {
//       @include transition-fast;
//     }
//   }
// }