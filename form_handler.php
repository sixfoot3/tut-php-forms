<?php

//Form processing goes here.
print_r( '<pre>' );


if ( isset( $_POST ) && !empty($_POST) ) {
	echo '<hr>';
	foreach ( $_POST['personalinfo'] as $key => $data ) {
		echo $key . ': ' . $data . "\n";
	}
}

if ( isset( $_GET ) && !empty($_GET) ) {
	print_r( $_GET );
	foreach ( $_GET['personalinfo'] as $key => $data ) {
		echo $key . ': ' . $data . "\n";
	}
}


print_r( '</pre>' );
die();