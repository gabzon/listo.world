<?php
// https://developer.wordpress.org/plugins/users/roles-and-capabilities/
// https://stackoverflow.com/questions/8198038/wordpress-capabilities-for-custom-post-types
// User role
function listo_user_role() {

    add_role('listo_user', 'Listo User',
        [
            'publish_enquiries' => true,
            'edit_enquiries'    => true,
            'delete_enquiries'  => true,
            'upload_files'      => true,
        ]
    );
}
// Add the listo user role.
add_action('init', 'listo_user_role');


// https://wordpress.stackexchange.com/questions/31791/how-do-i-programmatically-set-default-role-for-new-users
// when someone signs up, it will automatically become
add_filter('pre_option_default_role', function($default_role){
    return 'listo_user';
    return $default_role;
});

?>
