<?php
require 'includes/functions.php';
require 'includes/model.php';
require 'includes/controllers.php';



if ( ! isset( $_GET['page'] ) ) {
	header( 'Status: 404' );
	echo '404 Page Not Found';
	exit;
}

switch ( $_GET['page'] ) {
	case 'homepage':
		homepage();
		break;
	case 'map':
		map();
		break;
	case 'feestdagen':
		feestdagen();
		break;
	case 'contact':
		contact();
		break;
	case 'about':
		about();
		break;
	case 'search':
		search();
		break;
	case 'info':
		info();
		break;
}
