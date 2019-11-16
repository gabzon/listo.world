<?php

$enquiry_details = tr_meta_box( 'Enquiry Details' );

$enquiry = tr_post_type( 'Enquiry' );
$enquiry->setIcon( 'clipboard' );
$enquiry->setTitlePlaceholder( 'Enter new destination' );
$enquiry->setArchivePostsPerPage( -1 );
$enquiry->setArgument( 'supports', [ 'title', 'editor', 'thumbnail' ] );
$enquiry->setRest( 'enquiries' );
$enquiry->apply( [ $enquiry_details, 'lw_theme', 'lw_place_type', 'lw_country', 'lw_theme' ] );

/**
* Add custom fields to Enquery Custom Post Type
*/
function add_meta_content_enquiry_details() {

	$flexibility = [
		'Exact dates' => 'Exact dates',
		'+/- 3 days'  => '+/- 3 days',
		'+/- 1 week'  => '+/- 1 week',
		'+/- 2 weeks' => '+/- 2 weeks',
		'+/- 1 month' => '+/- 1 Month',
		'Weekend'    	=> 'Weekend',
		'Long weekend'=> 'Long weekend',
		'Best period' => 'Best Period',
	];

	$round_trip = [
		'Round trip' => 'round trip',
		'One way' => 'one way',
		'Multicity' => 'multicity',
	];

	$companions = [
		'Alone'               => 'alone',
		'Couple'           		=> 'couple',
		'Family'              => 'family',
		'Friends'             => 'friends',
		'Colleagues'          => 'colleagues',
		'Group (> 8 people)'  => 'group',
	];

	$form = tr_form();
	echo $form->text( 'Destination' );
	echo $form->row( $form->select( 'Flexibility' )->setOptions( $flexibility ), $form->select( 'Round Trip' )->setOptions( $round_trip ));
	echo $form->row( $form->date( 'Departure date' ), $form->date( 'Return date' ) );
	echo $form->select( 'Traveling with' )->setOptions( $companions )->setName( 'companions' );
	echo $form->row(
		$form->text( 'Number of adults' )->setName( 'number_of_adults' ),
		$form->text( 'Number of kids (2-11 years old)' )->setName( 'number_of_kids' ),
		$form->text( 'Number of babies (less than 2 years old)' )->setName( 'number_of_babies' )
	);
	echo $form->text( 'Budget' );
	echo $form->row(
		$form->checkbox( 'Flight options' ),
		$form->checkbox( 'Accommodation options' )
	);
	echo $form->row(
		$form->checkbox( 'Transport options' ),
		$form->checkbox( 'Activities options' )
	);
	echo $form->row(
		$form->checkbox( 'By Email' ),
		$form->text( 'Email' )
	);
	echo $form->row(
		$form->checkbox( 'By Phone Call' ),
		$form->text( 'Phone number' )
	);
	echo $form->row(
		$form->checkbox( 'By SMS' ),
		$form->text( 'SMS number' )
	);
	echo $form->row(
		$form->checkbox( 'By WhatsApp' ),
		$form->text( 'WhatsApp' )
	);
	echo $form->row(
		$form->checkbox( 'By Skype' ),
		$form->text( 'Skype' )
	);
	echo $form->row(
		$form->checkbox( 'By Viber' ),
		$form->text( 'Viber' )
	);
	echo $form->row(
		$form->checkbox( 'By Facebook Messenger' ),
		$form->text( 'Facebook Messenger' )
	);

	echo $form->checkbox( 'Advanced options' );

	echo $form->row(
		$form->text( 'Flight class' ),
		$form->text( 'Food type' ),
		$form->text( 'Seat preference' )
	);

	echo $form->row(
		$form->text( 'Property type' ),
		$form->text( 'Property rating' )
	);

	echo $form->row(
		$form->text( 'Transport type' ),
		$form->text( 'Car type' )
	);

	echo $form->text( 'Themes' );
	echo $form->items( 'List of places you would like to visit' );
}
