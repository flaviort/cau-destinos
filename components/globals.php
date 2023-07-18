<?php

	// page title
	if (empty($pageTitle)) {
	    $page = '';
	} else {
	    $page = '| ' . $pageTitle;
	}

	// global vars
	$siteUrl = "https://dev.senzdsn.com/cau-destinos";
	$phone = "xxx-xxx-xxxx";
	$linkedin = "https://www.linkedin.com/";
	$facebook = "https://www.facebook.com/";
	$instagram = "https://www.instagram.com/";
	$email = "email@email.com";

	// active class in the menus
	function active($active_page) {
	    $url_array = explode('/', $_SERVER['REQUEST_URI']);
	    $url = end($url_array);
	    if ($active_page == $url) {
	        echo 'active';
	    }
	}
	
?>