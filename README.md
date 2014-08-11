Instagram Popup Login
=====================

Log into Instagram via a Pop-Up window with Javascript.

You can view a demo [here](http://github.radykal.de/instagram-popup-login/).


## Setup

1. Download index.php and instagram_auth.php.
2. [Get a Client ID](http://instagram.com/developer/clients/manage/).
2. Keep "Disable implicit OAuth" and "Enforce signed header" disabled.
3. Copy Client ID and OAuth redirect_uri.
4. Paste both values in the authenticateInstagram() function:
```
authenticateInstagram(
	'your_client_id', //instagram client ID
	'your_redirect_uri', //instagram redirect URI
	login_callback //optional - a callback function
);
```
