<?php 

require_once('vendor/facebook/php-sdk-v4/src/Facebook/autoload.php');
require_once('vendor/autoload.php');

$app_id     = '1741328312763472';
$app_secret = '517dc1585b628ab300fc79673fae06fd';
$token      = 'EAAYvupeFBFABAGpqhIu9YaspndjxphKZAhVbF7z5RhziMtMZCL5aHsDLjjwSuSKFummnuyJDeIeUu6FdrnoHq3XmZBUWkZBytzCZBSGj67svPlEFWn2a1kZB2Gp6vMw5sno3BUANYqiDe83trV8cZATe6G1GhC5UeSwphjj1YsysAZDZD';

$fb = new Facebook\Facebook([
	'app_id'     => $app_id,
	'app_secret' => $app_secret,
]);

$data = [
	'message' => 'your message',
	// 'link'    => 'http://yourlink.com/',
	'picture '=> realpath("test.gif")
];

try {
	$response = $fb->post('/devvuidemo/feed', $data, $token);	
} catch(Facebook\Exceptions\FacebookResponseException $e) {
	echo 'Graph returned an error: ' . $e->getMessage();
	exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
	echo 'Facebook SDK returned an error: ' . $e->getMessage();
	exit;
}

?>
