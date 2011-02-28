<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Twitter OAuth in PHP</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <style type="text/css">
      img {border-width: 0}
      * {font-family:'Lucida Grande', sans-serif;}
    </style>
  </head>
  <body>
    <div>
	<h2>Twitter helper</h2>
	  <p>This site will help you find out your oAuth token and oAuth token secret. To get started, click on the "sign in with Twitter" button below. If you are having issues try <a href='./clearsessions.php'>clearing your session</a>.

      <p>
	  	This helper page (and Twitter library that speech-to-tweet uses) was graciously provided by Abraham Williams.
        Links:
        <a href='http://github.com/abraham/twitteroauth'>Source Code</a> &amp;
        <a href='http://wiki.github.com/abraham/twitteroauth/documentation'>Documentation</a> |
        Contact @<a href='http://twitter.com/abraham'>abraham</a>
      </p>
      <hr />
      <?php if (isset($menu)) { ?>
        <?php echo $menu; ?>
      <?php } ?>
    </div>
    <?php if (isset($status_text)) { ?>
      <?php echo '<h3>'.$status_text.'</h3>'; ?>
    <?php } ?>
    <p>
      <pre>
        <?php
			if (is_object($content))
			{
				echo 'Paste this into <strong>../include/config.php</strong><br>';
				echo "define('OAUTH_TOKEN', '".$access_token['oauth_token']."');<br>";
				echo "define('OAUTH_TOKEN_SECRET', '".$access_token['oauth_token_secret']."');<br>";
			}
			else {
				print_r($content);
			}
		?>
      </pre>
    </p>

  </body>
</html>
