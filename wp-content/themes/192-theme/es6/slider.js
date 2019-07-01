import {$, w} from './constants';

w.load(() => {

$('.galeria__slider').each(function(key, item) {
	$(this).slick({
        prevArrow: $(this).next(),
		nextArrow: $(this).next().next(),
    });

});

});
