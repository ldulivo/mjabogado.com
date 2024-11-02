const menuToggle = document.getElementById('menu-toggle');

menuToggle.addEventListener('change', () => {
  if (menuToggle.checked) {
    const scrollBarWidth = window.innerWidth - document.documentElement.clientWidth;
    document.body.style.overflow = 'hidden';
    document.body.style.paddingRight = `${scrollBarWidth}px`;
  } else {
    document.body.style.overflow = '';
    document.body.style.paddingRight = '';
  }
});
