<?php

$theme = tr_taxonomy('Theme')
        ->setId('lw_theme')
        ->setHierarchical()
        ->addPostType('place')
        ->setMainForm(function() {
          $form = tr_form();
          echo $form->gallery('Photos');
        });
