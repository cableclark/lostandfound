/* global wp, */
/**
 * File customizer.js.
 *
 * Theme Customizer enhancements using Vanilla JS.
 */

(function () {
    // Site title
    wp.customize('blogname', (value) => {
        value.bind((to) => {
            const titleLinks = document.querySelectorAll('.site-title a');
            titleLinks.forEach(link => link.textContent = to);
        });
    });

    // Site description
    wp.customize('blogdescription', (value) => {
        value.bind((to) => {
            const description = document.querySelector('.site-description');
            if (description) description.textContent = to;
        });
    });

    // Header text color
    wp.customize('header_textcolor', (value) => {
        value.bind((to) => {
            const elements = document.querySelectorAll('.site-title, .site-description');
            const links = document.querySelectorAll('.site-title a, .site-description');

            if ('blank' === to) {
                elements.forEach(el => {
                    el.style.clip = 'rect(1px, 1px, 1px, 1px)';
                    el.style.position = 'absolute';
                });
            } else {
                elements.forEach(el => {
                    el.style.clip = 'auto';
                    el.style.position = 'relative';
                });
                links.forEach(el => {
                    el.style.color = to;
                });
            }
        });
    });
})();
