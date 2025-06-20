// Scroll suave apenas para âncoras (#)
document.querySelectorAll('nav a').forEach(anchor => {
  anchor.addEventListener('click', function(e) {
    const href = this.getAttribute('href');
    if (href.startsWith('#')) {
      e.preventDefault();
      const targetElement = document.querySelector(href);
      window.scrollTo({
        top: targetElement.offsetTop - 80,
        behavior: 'smooth'
      });
    }
  });
});