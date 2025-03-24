// Main JavaScript functionality for the site
document.addEventListener('DOMContentLoaded', function() {
    const btn = document.querySelector('.btn');
    const menuOverlay = document.querySelector('.menu-overlay');
    const menuVideo = document.querySelector('.menu-video video');
    const menuTextAbout = document.querySelector('.menu-text-about');
    const menuTextContact = document.querySelector('.menu-text-contact');

    // Menu button toggle
    btn.addEventListener('click', function() {
        this.classList.add('btn-animated');
        this.classList.toggle('active');
        this.classList.toggle('not-active');
        menuOverlay.classList.toggle('open');

        // Reset menu state when closing
        if (!menuOverlay.classList.contains('open')) {
            resetMenuState();
        }
    });

    // Handle menu section clicks
    document.querySelectorAll('.overlay-menu a').forEach(link => {
        link.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            
            // Only handle internal links
            if (href.startsWith('#')) {
                e.preventDefault();
                
                // Reset any previously active sections
                resetMenuState();

                // Show appropriate section
                if (href === '#about') {
                    menuVideo.classList.add('hidden');
                    menuTextAbout.classList.add('active');
                } else if (href === '#contact') {
                    menuVideo.classList.add('hidden');
                    menuTextContact.classList.add('active');
                }
            }
        });
    });

    // Function to reset menu state
    function resetMenuState() {
        menuVideo.classList.remove('hidden');
        menuTextAbout.classList.remove('active');
        menuTextContact.classList.remove('active');
    }
});
