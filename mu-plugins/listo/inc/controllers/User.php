<?php

namespace user;

class User {

    public function user_name($user){                
        if ( $user->user_firstname && $user->user_lastname ){
            return $user->user_firstname . " " . $user->user_lastnamee;
        } else if ( $user->user_firstname || $user->user_lastname ){
            return $user->user_firstname . $user->user_lastname;
        } else {
            return $user->display_name;
        }
    }

    
}