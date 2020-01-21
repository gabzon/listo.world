<?php

function slug_register_companions_meta() {
    register_rest_field( 'enquiry',
        'traveling_with',
        array(
            'get_callback'    => 'slug_get_companions_meta',
            'update_callback' => 'slug_update_companions_meta',
            'schema'          => null,
        )
    );
}

function slug_get_companions_meta( $object, $field_name, $request ) { return get_term_meta( $object[ 'id' ] ); }

function slug_update_companions_meta($value, $object, $field_name) { return update_post_meta($object['id'], $field_name, $value); }