// Select all navigation links
const navLinks = document.querySelectorAll('.sidebar > .wrapper > div > ul li a');
const contentArea = document.getElementById('content-area');

function loadPage(page) {
  fetch(page)
    .then(response => {
      if (!response.ok) throw new Error('Page not found');
      return response.text();
    })
    .then(html => {
      contentArea.innerHTML = html;

      navLinks.forEach(link => link.classList.remove('active'));
      document.querySelector(`[data-page="${page}"]`).classList.add('active');
    })
    .catch(error => {
      contentArea.innerHTML = '<p>Sorry, the page could not be loaded.</p>';
      console.error(error);
    });
}

navLinks.forEach(link => {
  link.addEventListener('click', event => {
    event.preventDefault(); // Prevent default link behavior
    const page = link.getAttribute('data-page');
    loadPage(page);
  });
});

loadPage('swap.php');
