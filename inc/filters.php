<?php
    function dci_tipi_notizia_post_link( $post_link, $id = 0 ){
        $post = get_post($id);
        if ( is_object( $post ) ){
            $terms = wp_get_object_terms( $post->ID, 'tipi_notizia' );
            if( $terms ){
                return str_replace( '%tipi_notizia%' , $terms[0]->slug , $post_link );
            }
        }
        return $post_link;
    }
    add_filter( 'post_type_link', 'dci_tipi_notizia_post_link', 1, 3 );