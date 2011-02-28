<?php
	require_once('include/config.php');
	require_once('include/bitly.php');
	require_once('twitter/twitteroauth/twitteroauth.php');

	$recording_url = $_REQUEST['RecordingUrl'];
	$transcription_status = $_REQUEST['TranscriptionStatus'];
	$transcription_text = $_REQUEST['TranscriptionText'];

	if ($transcription_status === 'completed')
	{
		$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, OAUTH_TOKEN, OAUTH_TOKEN_SECRET);

		$bitly = new Bitly(BITLY_USERNAME, BITLY_API_KEY);
		$bitly_result = $bitly->shorten($recording_url.'.mp3');

		// In case the transcription engine couldn't pick anything up
		if ($transcription_text == '(blank)')
		{
			$transcription_text = 'Hear recording: ';
		}

		// Okay, this is a little awkward to explain, but it's basically the max 
		// length of a tweet, minus the length of the bit.ly link, minus the 
		// length of the hashtag, minus 4 (for the spaces between all the 
		// information). That gets us the number of characters left over for 
		// the actual body of the tweet:
		//
		// 140 (max length of tweet) - strlen([bitly link] + ' ' + [hashtag length]) - 4 [for the spaces] 
		$characters_left = 140 - strlen($bitly_result['url'].' '.HASHTAG) - 4;

		$response = $connection->post('statuses/update', array('status' => truncate(stripslashes($transcription_text), $characters_left, '...').' '.$bitly_result['url'].' '.HASHTAG));
	}

	// From http://www.php.net/manual/en/function.substr-replace.php#33736
	function truncate($string, $max = 50, $rep = '') {
		if (strlen($string) > $max)
		{
			$leave = $max - strlen ($rep);
			return substr_replace($string, $rep, $leave);
		}
		else {
			return $string;
		}
	}
?>
