<?php
/*
* Link Previewer oleh Widi Baka versi 1.0, 2020
*/

if ( isset( $_REQUEST['koreksoft_lp'] ) ) {
	$package =  $_REQUEST['koreksoft_lp'];
	// echo file_get_contents( 'http://localhost/korek-software/services/link_previewer_api/' . $package );
	echo file_get_contents( 'http://koreksoft.online/services/link_previewer_api/' . $package );

}