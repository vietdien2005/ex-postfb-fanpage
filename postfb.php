<?php 

require_once('vendor/autoload.php');

$app_id     = '1741328312763472';
$app_secret = '517dc1585b628ab300fc79673fae06fd';

$token      = 'EAAYvupeFBFABAN3wl9Ipa6ohZCH2b2VJQ2NDkScdi7THRKi8H19qHMZCZCPtPII45DZByna58u9dqaEFaWkmLMzOoP1WIfsH83ZCFHKPtvVAmu3x8JUWS3LXVhUetZAsbCdHJnZBkC9l9RZApSZCPQ9rhe3LZAFkxW9k9lsYUKbxS6FgZDZD';

$fb = new Facebook\Facebook([
	'app_id'                => $app_id,
	'app_secret'            => $app_secret,
]);

$data = [
	'message' => 'your message',
	'link'    => 'http://devvui.com/'
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
