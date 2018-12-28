<?php
	header("Access-Control-Allow-Origin: *");
	include('simple_html_dom.php');

	$durl = 'https://hanime.tv/downloads/';
	$data = htmlspecialchars($_GET["data"]);

	$html = file_get_html( $durl . $data );

	// Find all links
	$links = $html->find('a[download]');
    echo $links[0]->href;
?>