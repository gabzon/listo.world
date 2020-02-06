<?php
/**
* This files integrates the custom fields in the REST API
* @package enquiry
*/

add_action( 'rest_api_init', 'slug_register_meta' );


/**
* Register custom fields in the REST-API
*/
function slug_register_meta() {

	// Destination.
	register_rest_field( 'enquiry', 'destination', [
		'get_callback' => 'get_meta_field',
		'update_callback' => 'update_meta_field',
		'schema' => null,
	]);

	// Round trip.
	register_rest_field( 'enquiry', 'round_trip', [
		'get_callback' => 'get_meta_field',
		'update_callback' => 'update_meta_field',
		'schema' => null,
	]);

	//Flexibility
	register_rest_field( 'enquiry', 'flexibility', [
		'get_callback' => 'get_meta_field',
		'update_callback' => 'update_meta_field',
		'schema' => null,
	]);

	// Departure Date.
	register_rest_field( 'enquiry', 'departure_date', [
		'get_callback' => 'get_meta_field',
		'update_callback' => 'update_meta_field',
		'schema' => null,
	]);

	// Return Date.
	register_rest_field( 'enquiry','return_date', [
		'get_callback' => 'get_meta_field',
		'update_callback' => 'update_meta_field',
		'schema' => null,
	]);

	// Companions
	register_rest_field( 'enquiry', 'companions', [
		'get_callback' => 'get_meta_field',
		'update_callback' => 'update_meta_field',
		'schema' => null,
	]);

	// Number of adults
	register_rest_field( 'enquiry', 'number_of_adults', [
		'get_callback' => 'get_meta_field',
		'update_callback' => 'update_meta_field',
		'schema' => null,
	]);

	// Number of kids
	register_rest_field( 'enquiry', 'number_of_kids', [
		'get_callback' => 'get_meta_field',
		'update_callback' => 'update_meta_field',
		'schema' => null,
	]);

	// Number of babies
	register_rest_field( 'enquiry', 'number_of_babies', [
		'get_callback' => 'get_meta_field',
		'update_callback' => 'update_meta_field',
		'schema' => null,
	]);

	// Budget
	register_rest_field( 'enquiry', 'budget', [
		'get_callback' => 'get_meta_field',
		'update_callback' => 'update_meta_field',
		'schema' => null,
	]);

	// By email
	register_rest_field('enquiry', 'by_email', [
		'get_callback' => 'get_meta_field',
		'update_callback' => 'update_meta_field',
		'schema' => null,
	]);

	// Email
	register_rest_field('enquiry', 'email', [
		'get_callback' => 'get_meta_field',
		'update_callback' => 'update_meta_field',
		'schema' => null,
	]);

	// By Phone call
	register_rest_field( 'enquiry', 'by_phone_call', [
		'get_callback' => 'get_meta_field',
		'update_callback' => 'update_meta_field',
		'schema' => null,
	]);

	// phone_call
	register_rest_field( 'enquiry', 'phone_number', [
		'get_callback' => 'get_meta_field',
		'update_callback' => 'update_meta_field',
		'schema' => null,
	]);

	// by_sms
	register_rest_field( 'enquiry', 'by_sms', [
		'get_callback' => 'get_meta_field',
		'update_callback' => 'update_meta_field',
		'schema' => null,
	]);

	// sms
	register_rest_field( 'enquiry', 'sms_number', [
		'get_callback' => 'get_meta_field',
		'update_callback' => 'update_meta_field',
		'schema' => null,
	]);

	// by_whatsapp
	register_rest_field( 'enquiry', 'by_whatsapp', [
		'get_callback' => 'get_meta_field',
		'update_callback' => 'update_meta_field',
		'schema' => null,
	]);

	// whatsapp
	register_rest_field( 'enquiry', 'whatsapp', [
		'get_callback' => 'get_meta_field',
		'update_callback' => 'update_meta_field',
		'schema' => null,
	]);

	// by_skype
	register_rest_field( 'enquiry', 'by_skype', [
		'get_callback' => 'get_meta_field',
		'update_callback' => 'update_meta_field',
		'schema' => null,
	]);

	// skype
	register_rest_field( 'enquiry', 'skype', [
		'get_callback' => 'get_meta_field',
		'update_callback' => 'update_meta_field',
		'schema' => null,
	]);

	// by_viber
	register_rest_field( 'enquiry', 'by_viber', [
		'get_callback' => 'get_meta_field',
		'update_callback' => 'update_meta_field',
		'schema' => null,
	]);

	// viber
	register_rest_field( 'enquiry', 'viber', [
		'get_callback' => 'get_meta_field',
		'update_callback' => 'update_meta_field',
		'schema' => null,
	]);

	// by_facebook_messenger
	register_rest_field( 'enquiry', 'by_facebook_messenger', [
		'get_callback' => 'get_meta_field',
		'update_callback' => 'update_meta_field',
		'schema' => null,
	]);

	// facebook_messenger
	register_rest_field( 'enquiry', 'facebook_messenger', [
		'get_callback' => 'get_meta_field',
		'update_callback' => 'update_meta_field',
		'schema' => null,
	]);

	// flight_options
	register_rest_field( 'enquiry', 'flight_options', [
		'get_callback' => 'get_meta_field',
		'update_callback' => 'update_meta_field',
		'schema' => null,
	]);

	// accommodation_options
	register_rest_field( 'enquiry', 'accommodation_options', [
		'get_callback' => 'get_meta_field',
		'update_callback' => 'update_meta_field',
		'schema' => null,
	]);

	//transport_options
	register_rest_field( 'enquiry', 'transport_options', [
		'get_callback' => 'get_meta_field',
		'update_callback' => 'update_meta_field',
		'schema' => null,
	]);

	// activities_options
	register_rest_field( 'enquiry', 'activities_options', [
		'get_callback' => 'get_meta_field',
		'update_callback' => 'update_meta_field',
		'schema' => null,
	]);

	// advanced_options
	register_rest_field( 'enquiry', 'advanced_options', [
		'get_callback' => 'get_meta_field',
		'update_callback' => 'update_meta_field',
		'schema' => null,
	]);

	// flight_class
	register_rest_field( 'enquiry', 'flight_class', [
		'get_callback' => 'get_meta_field',
		'update_callback' => 'update_meta_field',
		'schema' => null,
	]);

	// Food type
	register_rest_field( 'enquiry', 'food_type', [
		'get_callback' => 'get_meta_field',
		'update_callback' => 'update_meta_field',
		'schema' => null,
	]);

	// Seat preference
	register_rest_field( 'enquiry', 'seat_preference', [
		'get_callback' => 'get_meta_field',
		'update_callback' => 'update_meta_field',
		'schema' => null,
	]);

	// property_type
	register_rest_field( 'enquiry', 'property_type', [
		'get_callback' => 'get_meta_field',
		'update_callback' => 'update_meta_field',
		'schema' => null,
	]);

	// property_rating
	register_rest_field( 'enquiry', 'property_rating', [
		'get_callback' => 'get_meta_field',
		'update_callback' => 'update_meta_field',
		'schema' => null,
	]);




	// transport_type
	register_rest_field( 'enquiry', 'transport_type', [
		'get_callback' => 'get_meta_field',
		'update_callback' => 'update_meta_field',
		'schema' => null,
	]);

	// car_type
	register_rest_field( 'enquiry', 'car_type', [
		'get_callback' => 'get_meta_field',
		'update_callback' => 'update_meta_field',
		'schema' => null,
	]);

	// themes
	register_rest_field( 'enquiry', 'themes', [
		'get_callback' => 'get_meta_field',
		'update_callback' => 'update_meta_field',
		'schema' => null,
	]);
}


/**
* Returns the selected custom field
* @param object $object the enquiry.
* @param string $field_name the name of the custom field.
* @param string $request the requested field.
* */
function get_meta_field( $object, $field_name, $request ) {
	return get_post_meta( $object['id'], $field_name, true );
}

/**
* Updates the destination field on REST API
* @param string $value new destination.
* @param object $object the enquery object.
* @param string $field_name custom field name.
*/
function update_meta_field( $value, $object, $field_name ) {

	if ( ! $value || ! is_string( $value )) {
		return;
	}

	return update_post_meta( $object->ID, $field_name, $value );
}


// /**
//  * Returns Destination

//  * @param object $object the enquiry.
//  * @param string $field_name the name of the custom field.
//  * @param string $request the requested field.
//  * */
// function get_meta_destination( $object, $field_name, $request ) {
// 	return get_post_meta( $object['id'], 'destination', true );
// }

// /**
//  * Updates the destination field on REST API

//  * @param string $value new destination.
//  * @param object $object the enquery object.
//  * @param string $field_name custom field name.
//  */
// function update_meta_destination( $value, $object, $field_name ) {
// 	error_log( print_r( $value, 1 ) );
// 	error_log( print_r( $object->ID, 1 ) );
// 	error_log( print_r( $field_name, 1 ) );

// 	return update_post_meta( $object->ID, 'destination', $value );
// }





// /**
//  * Returns Departure Date

//  * @param object $object the enquiry object.
//  * @param string $field_name the custom field name: departure_date.
//  * @param string $request the requested value.
//  * */
// function get_meta_departure_date( $object, $field_name, $request ) {
// 	return get_post_meta( $object['id'], 'departure_date', true );
// }

// /**
//  * Updates the departure_date field on REST API

//  * @param  date   $value the new value to be updated.
//  * @param  object $object the enquiry id to be updated.
//  * @param  string $field_name the custom field to be updated.
//  */
// function update_meta_departure_date( $value, $object, $field_name ) {
// 	return update_post_meta( $object['id'], 'departure_date', $value );
// }





// /**
//  * Returns the return date

//  * @param object $object the enquiry object.
//  * @param string $field_name the custom field name: return_date.
//  * @param string $request the requested value.
//  * */
// function get_meta_return_date( $object, $field_name, $request ) {
// 	return get_post_meta( $object['id'], 'return_date', true );
// }

// /**
//  * Updates the return date field on REST API

//  * @param  date   $value the new value to be updated.
//  * @param  object $object the enquiry id to be updated.
//  * @param  string $field_name the custom field to be updated.
//  */
// function update_meta_return_date( $value, $object, $field_name ) {
// 	return update_post_meta( $object['id'], 'return_date', $value );
// }





// /**
//  * Returns the flexibility of the trip

//  * @param object $object the enquiry object.
//  * @param string $field_name the custom field name: flexibility.
//  * @param string $request the requested value.
//  * */
// function get_meta_flexibility( $object, $field_name, $request ) {
// 	return get_post_meta( $object['id'], 'flexibility', true );
// }

// /**
//  * Updates the flexibility field on REST API

//  * @param  string $value the new value to be updated.
//  * @param  object $object the enquiry id to be updated.
//  * @param  string $field_name the custom field to be updated.
//  */
// function update_meta_flexibility( $value, $object, $field_name ) {
// 	return update_post_meta( $object->ID, 'flexibility', $value );
// }





// /**
//  * Returns the companions

//  * @param object $object the enquiry object.
//  * @param string $field_name the custom field name: traveling_with.
//  * @param string $request the requested value.
//  * */
// function get_meta_companion( $object, $field_name, $request ) {
// 	return get_post_meta( $object['id'], 'traveling_with', true );
// }

// /**
//  * Updates the companions(traveling_with) field on REST API

//  * @param  string $value the new value to be updated.
//  * @param  object $object the enquiry id to be updated.
//  * @param  string $field_name the custom field to be updated.
//  */
// function update_meta_companion( $value, $object, $field_name ) {
// 	return update_post_meta( $object->ID, 'traveling_with', $value );
// }





// /**
//  * Returns the number of adults for the trip

//  * @param object $object the enquiry object.
//  * @param string $field_name the custom field name: number_of_adults.
//  * @param string $request the requested value.
//  * */
// function get_meta_number_of_adults( $object, $field_name, $request ) {
// 	return get_post_meta( $object['id'], 'number_of_adults', true );
// }

// /**
//  * Updates the number_of_adults field on REST API

//  * @param  string $value the new value to be updated.
//  * @param  object $object the enquiry id to be updated.
//  * @param  string $field_name the custom field to be updated.
//  */
// function update_meta_number_of_adults( $value, $object, $field_name ) {
// 	return update_post_meta( $object['id'], 'number_of_adults', $value );
// }





// /**
//  * Returns the number of kids for the trip

//  * @param object $object the enquiry object.
//  * @param string $field_name the custom field name: number_of_kids_2_11_years_old.
//  * @param string $request the requested value.
//  * */
// function get_meta_number_of_kids( $object, $field_name, $request ) {
// 	return get_post_meta( $object['id'], 'number_of_kids_2_11_years_old', true );
// }

// /**
//  * Updates the number_of_kids field on REST API

//  * @param  string $value the new value to be updated.
//  * @param  object $object the enquiry id to be updated.
//  * @param  string $field_name the custom field to be updated.
//  */
// function update_meta_number_of_kids( $value, $object, $field_name ) {
// 	return update_post_meta( $object['id'], 'number_of_kids_2_11_years_old', $value );
// }





// /**
//  * Returns the number of babies for the trip

//  * @param object $object the enquiry object.
//  * @param string $field_name the custom field name: number_of_babies_less_than_2_years_old.
//  * @param string $request the requested value.
//  * */
// function get_meta_number_of_babies( $object, $field_name, $request ) {
// 	return get_post_meta( $object['id'], 'number_of_babies_less_than_2_years_old', true );
// }


// /**
//  * Updates the number of babies field on REST API

//  * @param  string $value the new value to be updated.
//  * @param  object $object the enquiry id to be updated.
//  * @param  string $field_name the custom field to be updated.
//  */
// function update_meta_number_of_babies( $value, $object, $field_name ) {
// 	return update_post_meta( $object['id'], 'number_of_babies_less_than_2_years_old', $value );
// }





// /**
//  * Returns the budget of the trip

//  * @param object $object the enquiry object.
//  * @param string $field_name the custom field name: budget.
//  * @param string $request the requested value.
//  * */
// function get_meta_budget( $object, $field_name, $request ) {
// 	return get_post_meta( $object['id'], 'budget', true );
// }

// /**
//  * Updates the budget field on REST API

//  * @param  string $value the new value to be updated.
//  * @param  object $object the enquiry id to be updated.
//  * @param  string $field_name the custom field to be updated.
//  */
// function update_meta_budget( $value, $object, $field_name ) {
// 	return update_post_meta( $object['id'], 'budget', $value );
// }





// /**
//  * Returns the email of the trip

//  * @param object $object the enquiry object.
//  * @param string $field_name the custom field name: email.
//  * @param string $request the requested value.
//  * @return number Returns 1 if true, 0 if false.
//  * */
// function get_meta_email( $object, $field_name, $request ) {
// 	return get_post_meta( $object['id'], 'email', true );
// }

// /**
//  * Updates the email field on REST API

//  * @param  string $value the new value to be updated.
//  * @param  object $object the enquiry id to be updated.
//  * @param  string $field_name the custom field to be updated.
//  */
// function update_meta_email( $value, $object, $field_name ) {
// 	return update_post_meta( $object->ID, 'email', $value );
// }





// /**
//  * Returns the phone_call of the trip

//  * @param object $object the enquiry object.
//  * @param string $field_name the custom field name: phone_call.
//  * @param string $request the requested value.
//  * @return number Returns 1 if true, 0 if false.
//  * */
// function get_meta_phone_call( $object, $field_name, $request ) {
// 	return get_post_meta( $object['id'], 'phone_call', true );
// }

// /**
//  * Updates the phone_call field on REST API

//  * @param  string $value the new value to be updated.
//  * @param  object $object the enquiry id to be updated.
//  * @param  string $field_name the custom field to be updated.
//  */
// function update_meta_phone_call( $value, $object, $field_name ) {
// 	return update_post_meta( $object->ID, 'phone_call', $value );
// }





// /**
//  * Returns the sms of the trip

//  * @param object $object the enquiry object.
//  * @param string $field_name the custom field name: sms.
//  * @param string $request the requested value.
//  * @return number Returns 1 if true, 0 if false.
//  * */
// function get_meta_sms( $object, $field_name, $request ) {
// 	return get_post_meta( $object['id'], 'sms', true );
// }

// /**
//  * Updates the sms field on REST API

//  * @param  string $value the new value to be updated.
//  * @param  object $object the enquiry id to be updated.
//  * @param  string $field_name the custom field to be updated.
//  */
// function update_meta_sms( $value, $object, $field_name ) {
// 	return update_post_meta( $object['id'], 'sms', $value );
// }





// /**
//  * Returns the whatsapp of the trip

//  * @param object $object the enquiry object.
//  * @param string $field_name the custom field name: whatsapp.
//  * @param string $request the requested value.
//  * */
// function get_meta_whatsapp( $object, $field_name, $request ) {
// 	return get_post_meta( $object['id'], 'whatsapp', true );
// }

// /**
//  * Updates the whatsapp field on REST API

//  * @param  string $value the new value to be updated.
//  * @param  object $object the enquiry id to be updated.
//  * @param  string $field_name the custom field to be updated.
//  */
// function update_meta_whatsapp( $value, $object, $field_name ) {
// 	return update_post_meta( $object['id'], 'whatsapp', $value );
// }





// /**
//  * Returns the skype of the trip

//  * @param object $object the enquiry object.
//  * @param string $field_name the custom field name: skype.
//  * @param string $request the requested value.
//  * */
// function get_meta_skype( $object, $field_name, $request ) {
// 	return get_post_meta( $object['id'], 'skype', true );
// }

// /**
//  * Updates the skype field on REST API

//  * @param  string $value the new value to be updated.
//  * @param  object $object the enquiry id to be updated.
//  * @param  string $field_name the custom field to be updated.
//  */
// function update_meta_skype( $value, $object, $field_name ) {
// 	return update_post_meta( $object['id'], 'skype', $value );
// }





// /**
//  * Returns the viber of the trip

//  * @param object $object the enquiry object.
//  * @param string $field_name the custom field name: viber.
//  * @param string $request the requested value.
//  * */
// function get_meta_viber( $object, $field_name, $request ) {
// 	return get_post_meta( $object['id'], 'viber', true );
// }

// /**
//  * Updates the viber field on REST API

//  * @param  string $value the new value to be updated.
//  * @param  object $object the enquiry id to be updated.
//  * @param  string $field_name the custom field to be updated.
//  */
// function update_meta_viber( $value, $object, $field_name ) {
// 	return update_post_meta( $object['id'], 'viber', $value );
// }





// /**
//  * Returns the facebook_messenger of the trip

//  * @param object $object the enquiry object.
//  * @param string $field_name the custom field name: facebook_messenger.
//  * @param string $request the requested value.
//  * */
// function get_meta_facebook_messenger( $object, $field_name, $request ) {
// 	return get_post_meta( $object['id'], 'facebook_messenger', true );
// }


// /**
//  * Updates the facebook_messenger field on REST API

//  * @param  string $value the new value to be updated.
//  * @param  object $object the enquiry id to be updated.
//  * @param  string $field_name the custom field to be updated.
//  */
// function update_facebook_messenger( $value, $object, $field_name ) {
// 	return update_post_meta( $object['id'], 'facebook_messenger', $value );
// }