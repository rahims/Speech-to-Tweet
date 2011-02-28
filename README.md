Speech-to-Tweet
===============

Speech-to-Tweet is everything you need to set up a service where people can call a number, record a message, and have the transcription and link to the audio posted to Twitter.


Requirements
============

In order to run speech-to-tweet, you'll need:

* A [Twilio](http://www.twilio.com) account with a phone number purchased
* A [Twitter](http://twitter.com) account
* A [bit.ly](http://bit.ly) account
* A server running PHP 5


Installation
============

Upload the `speech-to-tweet` folder to your webserver.

### Set Twitter Up

1. Register a new Twitter Application [here](https://twitter.com/apps/new)
2. Click on your newly registered Twitter Application and write down the values for the "consumer key" and "consumer secret"
3. Edit `speech-to-tweet/include/config.php` and put those values for `CONSUMER_KEY` and `CONSUMER_SECRET`
4. Open up a browser and navigate to `http://yourserver/speech-to-tweet/twitter/` and click on the "sign in with Twitter" button
5. Go through the authentication process, then copy the values displayed for "OAUTH_TOKEN" and "OAUTH_TOKEN_SECRET"
6. Edit `speech-to-tweet/include/config.php` and put those values for `OAUTH_TOKEN` and `OAUTH_TOKEN_SECRET`


### Set Bit.ly Up

1. Log in to your bit.ly account and go to the [settings page](http://bit.ly/a/account)
2. Copy the API key.
3. Edit `speech-to-tweet/include/config.php` and fill out the values for `BITLY_USERNAME` and `BITLY_API_KEY`


### Set Twilio Up

1. Go to your [numbers page](https://www.twilio.com/user/account/phone-numbers/) and pick the phone number you'd like to use (or buy a new one)
2. Click on the "edit" link next to the phone number
3. Set the Voice URL to `http://yourserver/speech-to-tweet/handle_incoming_call.php`


License
=======

Copyright (c) 2011 Rahim Sonawalla ([rsonawalla@gmail.com](mailto:rsonawalla@gmail.com) / [@rahims](http://twitter.com/rahims)).

Twitter library provided by Abraham Williams ([abraham@poseurte.ch](abraham@poseurte.ch) / [@abraham](http://twitter.com/abraham))
Bit.ly library provided by Tijs Verkoyen ([@tijsverkoyen](http://twitter.com/tijsverkoyen))

Released under the [MIT license](http://www.opensource.org/licenses/mit-license.php).
