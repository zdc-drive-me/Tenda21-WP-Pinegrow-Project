document.addEventListener('DOMContentLoaded', function () {
    const toggle = document.querySelector('[data-mobile-menu-toggle]');
    const menu = document.querySelector('[data-mobile-menu]');

    if (!toggle || !menu) return;

    const label = toggle.querySelector('[data-mobile-menu-label]');
    const topLine = toggle.querySelector('[data-mobile-menu-line="top"]');
    const bottomLine = toggle.querySelector('[data-mobile-menu-line="bottom"]');

    function openMenu() {
        menu.classList.remove('hidden');

        toggle.setAttribute('aria-expanded', 'true');

        if (label) {
            label.textContent = 'Close';
        }

        if (topLine) {
            topLine.style.transform = 'translateY(3px) rotate(45deg)';
        }

        if (bottomLine) {
            bottomLine.style.transform = 'translateY(-3px) rotate(-45deg)';
        }

        document.body.style.overflow = 'hidden';
    }

    function closeMenu() {
        menu.classList.add('hidden');

        toggle.setAttribute('aria-expanded', 'false');

        if (label) {
            label.textContent = 'Menu';
        }

        if (topLine) {
            topLine.style.transform = '';
        }

        if (bottomLine) {
            bottomLine.style.transform = '';
        }

        document.body.style.overflow = '';
    }

    toggle.addEventListener('click', function () {
        const isOpen = toggle.getAttribute('aria-expanded') === 'true';

        if (isOpen) {
            closeMenu();
        } else {
            openMenu();
        }
    });

    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape') {
            closeMenu();
        }
    });

    window.addEventListener('resize', function () {
        if (window.innerWidth >= 1024) {
            closeMenu();
        }
    });
});