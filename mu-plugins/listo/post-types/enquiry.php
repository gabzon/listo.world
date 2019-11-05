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
		'Exact dates' => 'exact',
		'+/- 3 days'  => 'days',
		'+/- 1 week'  => 'week',
		'+/- 2 weeks' => 'weeks',
		'+/- 1 month' => 'month',
		'Whenever'    => 'whenever',
		'Best period' => 'best',
	];

	$round_trip = [
		'Round trip' => 'round trip',
		'One way' => 'one way',
		'Multicity' => 'multicity',
	];

	$companions = [
		'Alone'               => 'alone',
		'Companion'           => 'companion',
		'Family'              => 'family',
		'Friends'             => 'friends',
		'Colleagues'          => 'colleagues',
		'Group (> 8 people)'  => 'group',
	];

	$adults = [
		'1'     => '1',
		'2'     => '2',
		'3'     => '3',
		'4'     => '4',
		'5'     => '5',
		'6'     => '6',
		'7'     => '7',
		'more'  => 'more',
	];

	$kids = [
		'0' => '0',
		'1' => '1',
		'2' => '2',
		'3' => '3',
		'4' => '4',
		'5' => '5',
		'6' => '6',
		'7' => '7',
		'8' => '8',
		'more'  => 'more',
	];

	$babies = [
		'0' => '0',
		'1' => '1',
		'2' => '2',
		'3' => '3',
		'4' => '4',
		'more' => 'more',
	];

	$form = tr_form();
	echo $form->text( 'Destination' );
	echo $form->row( $form->select( 'Flexibility' )->setOptions( $flexibility ), $form->select( 'Round Trip' )->setOptions( $round_trip ));
	echo $form->row( $form->date( 'Departure date' ), $form->date( 'Return date' ) );
	echo $form->select( 'Traveling with' )->setOptions( $companions )->setName( 'companions' );
	echo $form->row(
		$form->select( 'Number of adults' )->setOptions( $adults )->setName( 'number_of_adults' ),
		$form->select( 'Number of kids (2-11 years old)' )->setOptions( $kids )->setName( 'number_of_kids' ),
		$form->select( 'Number of babies (less than 2 years old)' )->setOptions( $babies )->setName( 'number_of_babies' )
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
