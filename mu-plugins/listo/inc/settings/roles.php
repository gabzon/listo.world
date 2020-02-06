<?php
// https://developer.wordpress.org/plugins/users/roles-and-capabilities/
// https://stackoverflow.com/questions/8198038/wordpress-capabilities-for-custom-post-types
// User role
// https://wordpress.stackexchange.com/questions/290090/how-to-enable-a-custom-post-type-to-custom-user-role-in-wordpress

add_filter( 'register_post_type_args', 'change_capabilities_of_enquiry' , 10, 2 );
function change_capabilities_of_enquiry( $args, $post_type ){

 // Do not filter any other post type
 if ( 'enquiries' !== $post_type ) {

     // Give other post_types their original arguments
     return $args;
 }

 // Change the capabilities of the "course_document" post_type
 $args['capabilities'] = array(
            'edit_post' => 'edit_enquiry',
            'edit_posts' => 'edit_enquiries',
            'edit_others_posts' => 'edit_other_enquiries',
            'edit_published_posts' => 'edit_published_enquiries',
            'publish_posts' => 'publish_enquiries',
            'read_post' => 'read_enquiry',
            'read_private_posts' => 'read_private_enquiry',
            'delete_post' => 'delete_enquiry'
        );

  // Give the course_document post type it's arguments
  return $args;

}


function listo_user_role() {
    $capabilities = [
        'read'              => false,
        'edit_posts'        => false,
        'publish_posts'     => false,
        'publish_enquiries' => false,
        'edit_enquiries'    => false,
        'delete_enquiries'  => false,
        'upload_files'      => false,
    ];
    add_role('listo_user', 'Listo User', $capabilities);    
}
// Add the listo user role.
add_action('init', 'listo_user_role');


// https://wordpress.stackexchange.com/questions/31791/how-do-i-programmatically-set-default-role-for-new-users
// when someone signs up, it will automatically become
add_filter('pre_option_default_role', function($default_role){
    //return 'listo_user';
    return 'author';
    return $default_role;
});

add_action('admin_init','rpt_add_role_caps',999);

function rpt_add_role_caps() {

    $role = get_role('listo_user'); 
    $role->add_cap( 'edit_posts');
    $role->add_cap( 'publish_posts');              
    $role->add_cap( 'read_enquiry');
    $role->add_cap( 'edit_enquiry' );
    $role->add_cap( 'edit_enquiries' );
    $role->add_cap( 'edit_other_enquiries' );
    $role->add_cap( 'edit_published_enquiries' );
    $role->add_cap( 'publish_enquiries' );
    $role->add_cap( 'read_private_enquiry' );
    $role->add_cap( 'delete_enquiry' );

}


