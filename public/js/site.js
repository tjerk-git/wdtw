// Main JavaScript functionality for the site
document.addEventListener('DOMContentLoaded', function() {
    const btn = document.querySelector('.btn');
    const menuOverlay = document.querySelector('.menu-overlay');

    btn.addEventListener('click', function() {
        this.classList.add('btn-animated');
        this.classList.toggle('active');
        this.classList.toggle('not-active');
        menuOverlay.classList.toggle('open');
    });
});
