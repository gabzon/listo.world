<?php

$country = tr_taxonomy('Country')
        ->setId('lw_country')
        ->setHierarchical()
        ->addPostType('place')
        ->setMainForm(function() {
          $form = tr_form();
          echo $form->gallery('Photos');
        });

?>
