<?php
/**
 * Office location data -- Mollura Medical Hair Restoration operates three
 * locations. Shared by template-parts/site-header.php (topbar) and
 * template-parts/site-footer.php (footer location cards) so the address
 * list only needs to be maintained in one place.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function mollura_locations() {
	return array(
		array(
			'name'          => 'Franklin Square',
			'address_line1' => '393 Franklin Ave, Suite 105',
			'address_line2' => 'Franklin Square, NY 11010',
			'state'         => 'NY',
			'phone_display' => '516-354-3876',
			'phone_tel'     => '+15163543876',
		),
		array(
			'name'          => 'Smithtown',
			'address_line1' => '2 Brooksite Dr #230',
			'address_line2' => 'Smithtown, NY 11787',
			'state'         => 'NY',
			'phone_display' => '631-257-7227',
			'phone_tel'     => '+16312577227',
		),
		array(
			'name'          => 'New York',
			'address_line1' => '114 E 61st St',
			'address_line2' => 'New York, NY 10065',
			'state'         => 'NY',
			'phone_display' => '212-813-9333',
			'phone_tel'     => '+12128139333',
		),
	);
}
