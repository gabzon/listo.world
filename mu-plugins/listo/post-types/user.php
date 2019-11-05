<?php

add_action('tr_user_profile', function($user) {
  $languages = [
      'English'   => 'English',
      'French'    => 'French',
      'German'    => 'German',
      'Italian'   => 'Italian',
      'Spanish'   => 'Spanish',
      'Portugues' => 'Portugues',
  ];

  $form = tr_form();
  echo $form->text('Mobile phone');
  echo $form->text('WhatsApp');
  echo $form->text('Viber');
  echo $form->text('Skype');
  echo $form->text('Home Address');
  echo $form->text('NPA');
  echo $form->text('City');
  echo $form->text('Country');
  echo $form->select('Prefered language')->setOptions($languages);
  echo $form->repeater('Nationalities')->setFields([
    $form->text('Country'),
    $form->text('Passport Number'),
    $form->date('Issue date'),
    $form->date('Expiry date'),
    ]
  );
});
