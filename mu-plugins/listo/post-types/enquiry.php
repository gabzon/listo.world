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
	echo $form->select( 'Flexibility' )->setOptions( $flexibility );
	echo $form->select( 'Round Trip' )->setOptions( $round_trip );
	echo $form->date( 'Departure date' );
	echo $form->date( 'Return date' );	
	echo $form->select( 'Traveling with' )->setOptions( $companions )->setName( 'companions' );
	echo $form->select( 'Number of adults' )->setOptions( $adults )->setName( 'number_of_adults' );
	echo $form->select( 'Number of kids (2-11 years old)' )->setOptions( $kids )->setName( 'number_of_kids' );
	echo $form->select( 'Number of babies (less than 2 years old)' )->setOptions( $babies )->setName( 'number_of_babies' );
	echo $form->text( 'Budget' );
	echo $form->checkbox( 'Flight options' );
	echo $form->checkbox( 'Accommodation options' );
	echo $form->checkbox( 'Transport options' );
	echo $form->checkbox( 'Activities options' );
	echo $form->checkbox( 'By Email' );
	echo $form->text( 'Email' );
	echo $form->checkbox( 'By Phone Call' );
	echo $form->text( 'Phone number' );
	echo $form->checkbox( 'By SMS' );
	echo $form->text( 'SMS number' );
	echo $form->checkbox( 'By WhatsApp' );
	echo $form->text( 'WhatsApp' );
	echo $form->checkbox( 'By Skype' );
	echo $form->text( 'Skype' );
	echo $form->checkbox( 'By Viber' );
	echo $form->text( 'Viber' );
	echo $form->checkbox( 'By Facebook Messenger' );
	echo $form->text( 'Facebook Messenger' );
	echo $form->checkbox( 'Advanced options' );
	echo $form->text( 'Flight class' );
	echo $form->text( 'Food type' );
	echo $form->text( 'Seat preference' );
	echo $form->text( 'Property type' );
	echo $form->text( 'Property rating' );
	echo $form->text( 'Transport type' );
	echo $form->text( 'Car type' );
	echo $form->text( 'Themes' );
	echo $form->items( 'List of places you would like to visit' );
}

// formLanguage: 'en'.
// comments: null.
