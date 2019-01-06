<?php
	include_once 'src/Google_Client.php';
	include_once 'src/contrib/Google_Oauth2Service.php';
	
	// Edit Following 3 Lines
	$clientId = '249134220887-3q6apjrpntllpvg6fhl62hjuojgi5eos.apps.googleusercontent.com'; //Application client ID
	$clientSecret = '5rKtjncPRQO8RInkWoWi1AQ1'; //Application client secret
	$redirectURL = 'http://cosmetic-collection.000webhostapp.com/user.php'; //Application Callback URL
	
	$gClient = new Google_Client();
	$gClient->setApplicationName('Your Application Name');
	$gClient->setClientId($clientId);
	$gClient->setClientSecret($clientSecret);
	$gClient->setRedirectUri($redirectURL);
	$google_oauthV2 = new Google_Oauth2Service($gClient);
?>