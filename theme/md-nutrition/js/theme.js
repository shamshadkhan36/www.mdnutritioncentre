/**
 * MD Nutrition Centre - Theme Javascript
 */

document.addEventListener('DOMContentLoaded', function () {
    // 1. Back to Top Smooth Scroll
    const scrollBtn = document.getElementById('scrollTopBtn');
    if (scrollBtn) {
        window.addEventListener('scroll', function () {
            if (window.scrollY > 300) {
                scrollBtn.style.opacity = '1';
                scrollBtn.style.visibility = 'visible';
            } else {
                scrollBtn.style.opacity = '0.6';
            }
        });

        scrollBtn.addEventListener('click', function (e) {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }

    // 2. Mobile Menu Toggle
    const mobileToggle = document.getElementById('mobileMenuToggle');
    const primaryNav = document.getElementById('site-navigation');
    if (mobileToggle && primaryNav) {
        mobileToggle.addEventListener('click', function () {
            if (primaryNav.style.display === 'block') {
                primaryNav.style.display = 'none';
            } else {
                primaryNav.style.display = 'block';
                primaryNav.style.position = 'absolute';
                primaryNav.style.top = '100%';
                primaryNav.style.left = '0';
                primaryNav.style.width = '100%';
                primaryNav.style.background = '#ffffff';
                primaryNav.style.boxShadow = '0 10px 20px rgba(0,0,0,0.1)';
                primaryNav.style.padding = '20px';
            }
        });
    }
});
