<?php

$activity = tr_taxonomy('Activity')
        ->setId('lw_activity')
        ->setHierarchical()
        ->addPostType('place')
        ->setMainForm(function() {
          $form = tr_form();
          echo $form->gallery('Photos');
        });


/*
*  amusement_park
*  aquarium
*  art_gallery
*  bakery
*  bank
*  bar
*  bus_station
*  cafe
*  campground
*  casino
*  cemetery
*  church
*  city_hall
*  clothing_store
*  convenience_store
*  embassy
*/
?>
