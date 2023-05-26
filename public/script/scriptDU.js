// -------------------- Hamburger Toggle Menu --------------------
let toggles = document.querySelector('.toggle');
let nav = document.querySelector('.navside');
let contents = document.querySelector('.content');

toggles.addEventListener('click', function() {
    nav.classList.toggle('active');
    contents.classList.toggle('active');
} );