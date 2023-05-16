  const navbarToggler = document.querySelector('.navbar-toggler');
  const navMenu = document.querySelector('nav ul');

  navbarToggler.addEventListener('click', () => {
    navMenu.classList.toggle('show');
  });