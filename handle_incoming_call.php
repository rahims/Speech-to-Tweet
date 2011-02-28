<?php
	require_once('include/config.php');

	header('Content-type: text/xml');
	echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<Response>
	<Say><?php echo RECORDING_PROMPT; ?></Say>
	<Record transcribe="true" transcribeCallback="handle_transcription_callback.php" />
</Response>
