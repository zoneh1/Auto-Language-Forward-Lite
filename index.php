	<?php
	// Auto Language Forward Lite
	// https://github.com/typhoonweb/Auto-Language-Forward-Lite

	$typhoon_sites = array(
    "country-code" => "/url-address/",
	);
	$typhoon_lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
	if (!in_array($typhoon_lang, array_keys($typhoon_sites))){
    $typhoon_lang = 'us';
	}
	header('Location: ' . $typhoon_sites[$typhoon_lang]);
	?>