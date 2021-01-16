<?php

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

function spaLogin_callback(){
	check_ajax_referer( '82ybuh2nuwbex887', 'security' );

	if ( wp_verify_nonce($_POST['nonce'], 'rad-login-nonce')) {
		$url  = 'https://api.radshid.com/api/v1/users/authenticate';
		$body = array(
			'username' => $_POST['username'],
			'password' => $_POST['password']
		);
		$args = array(
			'method'      => 'POST',
			'timeout'     => 45,
			'sslverify'   => false,
			'headers'     => array(
				//'Authorization' => 'Bearer {token goes here}',
				'Accept' => 'application/json, text/plain, */*',
				'Content-Type'  => 'application/json',
			),
			'body'        => json_encode($body),
		);

		$request = wp_remote_post( $url, $args );
		if ( is_wp_error( $request ) || wp_remote_retrieve_response_code( $request ) != 200 ) {
			error_log( print_r( $request, true ) );
		}

		$response = wp_remote_retrieve_body( $request );
		echo json_encode($response);
	}else{
		$data=array( 'res' => 'Authenticate Error' );
		echo json_encode($data);
		exit();
	}

}
add_action( 'wp_ajax_spaLogin', 'spaLogin_callback' );
add_action( 'wp_ajax_nopriv_spaLogin', 'spaLogin_callback' );


function spaRegister_callback(){
	check_ajax_referer( '82ybuh2nuwbex887', 'security' );

	if ( wp_verify_nonce($_POST['nonce'], 'rad-register-nonce')) {
		$url  = 'http://api.radshid.com/api/v1/users';
		$body = array(
			"avl"=> array(
				"Imei"=> $_POST['Imei'],
				"RegisterCode"=> $_POST['RegisterCode'],
			),
			"Car"=> array(
				"Title"=> $_POST['Title'],
				"SimPhone"=> $_POST['SimPhone'],
				"DriverName"=> $_POST['DriverName'],
			),
			"User"=> array(
				"Mobile"=> $_POST['Mobile'],
				"FirstName"=> $_POST['FirstName'],
				"LastName"=> $_POST['LastName'],
				'Username' => $_POST['Username'],
				'Password' => $_POST['Password'],
				"Email"=> $_POST['Email'],
			),
			"Domain"=> $_POST['Domain'],
			"AdminPhone"=> $_POST['AdminPhone']
		);
		$args = array(
			'method'      => 'POST',
			'timeout'     => 45,
			'sslverify'   => false,
			'headers'     => array(
				'Accept' => 'application/json, text/plain, */*',
				'Content-Type'  => 'application/json',
			),
			'body'        => json_encode($body),
		);

		$request = wp_remote_post( $url, $args );
		if ( is_wp_error( $request ) || wp_remote_retrieve_response_code( $request ) != 200 ) {
			error_log( print_r( $request, true ) );
		}

		$response = wp_remote_retrieve_body( $request );
		echo json_encode($response);
	}else{
		$data=array( 'res' => 'Authenticate Error' );
		echo json_encode($data);
		exit();
	}
}
add_action( 'wp_ajax_spaRegister', 'spaRegister_callback' );
add_action( 'wp_ajax_nopriv_spaRegister', 'spaRegister_callback' );
