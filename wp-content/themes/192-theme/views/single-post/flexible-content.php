<?php 

// check if the flexible content field has rows of data
if( have_rows('content') ):

    // loop through the rows of data
    while ( have_rows('content') ) : the_row();

        switch(get_row_layout()) {

            case 'wysiwyg': 
                get_template_part('views/single-post/content');
                break;
            
            case 'gallery':
               get_template_part('views/single-post/gallery');
                break;

            case 'video': 
                get_template_part('views/single-post/video');
                break;

            case 'one_column_image': 
                get_template_part('views/single-post/image-one-column');
                break;

            case 'two_column_image': 
                get_template_part('views/single-post/image-two-column');
                break;
        }

    endwhile;

endif;