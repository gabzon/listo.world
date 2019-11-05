<div class="typerocket-container">

// A form is best created in a controller
// and passed to a view.
<?php
$id = get_current_user_id();
$form = tr_form('user', $id);
$form->useURL( 'update', '/users/'.$id.'/' );

// Print to the view
echo $form->open();
echo $form->text('Number');
echo $form->text('Price');
echo $form->submit('Update Seat');
echo $form->close();
  ?>
</div>
