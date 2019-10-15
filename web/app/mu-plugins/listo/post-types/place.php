<?php

$place_details = tr_meta_box('Place Details');

$place = tr_post_type('Place')
          ->setIcon('location')
          ->setTitlePlaceholder( 'Enter artist full name' )
          ->setArchivePostsPerPage(-1)
          ->setArgument('supports', ['title','editor','thumbnail', 'excerpt'] )
          ->setRest('places')
          ->apply([$place_details,'lw_theme','lw_place_type', 'lw_country', 'lw_theme']);

function add_meta_content_place_details() {
  $form = tr_form();
  echo $form->text('Address');
  echo $form->text('Postal Code');
  echo $form->text('City');
  echo $form->text('Country');
  echo $form->text('Phone number');
  echo $form->text('Email');
  echo $form->text('Website');
  echo $form->text('Facebook');
  echo $form->text('Twitter');
  echo $form->text('Instagram');
  echo $form->text('Youtube');
  echo $form->repeater('Videos')->setFields([ $form->text('Video URL') ]);
  echo $form->gallery('Photo Gallery');
}
