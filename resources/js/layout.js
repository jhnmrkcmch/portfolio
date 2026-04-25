import $ from 'jquery';
import '../css/app.css';

window.$ = window.jQuery = $;

$(document).ready(function () {
    const $navbar = $('.navbar-custom');

    $(window).on('scroll', function () {
        if ($(this).scrollTop() > 50) {
            $navbar.addClass('scrolled');
        } else {
            $navbar.removeClass('scrolled');
        }
    });
    AOS.init({
        once: true, // Animate only once
        easing: 'ease-out-cubic',
        duration: 1000,
    });

    const removeMsg = $('.msg');
    $('#remove').on('click', function(){
        removeMsg.hide()
    });
});



