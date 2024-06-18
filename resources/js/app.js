import $ from 'jquery';
import './bootstrap';
import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// change the active item in the carousel
let activeItem = 1;
const totalItems = 3;

function updateCarousel() {
    for (let i = 1; i <= totalItems; i++) {
        const item = $('#item' + i);
        if (i === activeItem) {
            item.show();
        } else {
            item.hide();
        }
    }
}

$('.carousel-controls .btn.btn-lg.btn-ghost').on('click', function (e) {
    const href = $(this).attr('href');
    const icon = $(this).children('i');
    if (href) {
        e.preventDefault();
        const itemId = href.replace('#item', '');
        activeItem = parseInt(itemId, 10);
    } else if (icon.hasClass('bi-chevron-left')) {
        e.preventDefault();
        activeItem = activeItem > 1 ? activeItem - 1 : totalItems;
    } else if (icon.hasClass('bi-chevron-right')) {
        e.preventDefault();
        activeItem = activeItem < totalItems ? activeItem + 1 : 1;
    }
    updateCarousel();
});
// =============================== //

// change the theme
const themeTogglerSelector = '#theme-toggler';

const logoImage = $('.logo');

const themeElements = $('.login-container, .left-side, .padding, .btn, .right-side, .right-side-content, .fixed-container, .login-header, .link-register, .logo, .card-title, .text-info, .login-info, .badge-primary, .carousel, .login-button, .forgot-password, input.grow, i.grow, .label-text-alt, .form-auth, .divider, .welcome-message, .social-button');

const savedTheme = localStorage.getItem('theme');
if (savedTheme) {
    themeElements.each(function() {
        $(this).addClass(savedTheme);
    });
    logoImage.attr('src', savedTheme === 'dark-theme' ? 'images/logo-dark.png' : 'images/logo-light.png');
}
$(document).on('click', themeTogglerSelector, function() {
    if (themeElements.first().hasClass('dark-theme')) {
        themeElements.each(function() {
            $(this).removeClass('dark-theme').addClass('light-theme');
        });
        logoImage.attr('src', 'images/logo-light.png');
        localStorage.setItem('theme', 'light-theme');
    } else {
        themeElements.each(function() {
            $(this).removeClass('light-theme').addClass('dark-theme');
        });
        logoImage.attr('src', 'images/logo-dark.png');
        localStorage.setItem('theme', 'dark-theme');
    }
});
// =============================== //

// refresh captcha
$('#refresh-captcha').click(function () {
    $.ajax({
        url: '/captcha',
        method: 'get',
        success: function (data) {
            $('.captcha-img').attr('src', data);
        }
    });
});
// =============================== //
