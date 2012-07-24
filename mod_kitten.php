<?php
defined( '_JEXEC' ) or die;

$width = $params->get('width');
$height = $params->get('height');
$type = $params->get('type');

if($type == 'kitten'){

  $widthDiffPicture = $width + rand(0,20);
	$heightDiffPicture = $height + rand(0,20);
	$base = "http://placekitten.com";
	$seperator = "/";
	$text = "";

}else{

	$widthDiffPicture = $width;
	$heightDiffPicture = $height;
	$base = "http://placehold.it";
	$seperator = "x";
	$text = '&text=' . $params->get('text');

}


echo "<img src='{$base}/{$widthDiffPicture}{$seperator}{$heightDiffPicture}{$text}' alt='Placeholder' width='{$width}' height='{$height}' />";
