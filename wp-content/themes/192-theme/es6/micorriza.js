import {$, w} from './constants';
import './slider'
// import './masonry'
import './menu'
// import './search'
import './modal'
// import './modal-newsletter'
// import './video'
// import './scrollit'

// w.load(() => {
//     //Se ocupa para el wysiwig, si el p tiene una imagen se le agrega la clase single__content-image-image
//     $('p:has(img)').addClass('single__content-image');
// });

$(document).ready(function() {

    $('.load-ajax-posts').click(function() {

        let $this = $(this);
        let $parent = $this.parent();
        let $add_box = $('.add-ajax-posts');

        let category_id = window.category_id != null ? category_id : '';

        $.post(cltvo_js_vars.ajax_url, {
            'action': 'LoadPosts',
            'query_args': window.query_args,
            'section': window.section,
        })
        .done(data => {
            if(data) {
                $add_box.append(data);
                window.query_args['offset'] += window.query_args['posts_per_page'];
            }else {
                $this.hide();
            }
        });

    })

})
