import {$, w} from './constants';

$(document).ready(function() {


    const header = $('#menu');
    const placeholder = $('#placeholder');
    const sticky = header.offset().top;

    w.scroll(function() {

        makeSticky();

    });

    function makeSticky() {
        if (window.pageYOffset > sticky) {
            header.addClass("menu-fixed");
            placeholder.addClass('show');
        } else {
            header.removeClass("menu-fixed");
            placeholder.removeClass('show');
        }
    }



    // - - - M e n ú   r e s p o n s i v e - - -

	const btnAbrir = $(".header__menu_JS");
	const btnCerrar = $("#menu__close_JS");
	const menu = $(".menu");

	// Abrir menu lateral
	btnAbrir.click(function() {
	    menu.addClass('view');
	    btnAbrir.addClass('opacity');
    });

    // Cerrar menu lateral
	btnCerrar.click(function() {
		menu.removeClass('view');
		btnAbrir.removeClass('opacity');
	});


});
