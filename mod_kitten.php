<?php
defined( '_JEXEC' ) or die;

$width = $params->get('width');
$height = $params->get('height');

echo "<img src='http://placekitten.com/{$width}/{$height}' alt='Kittens!' width='{$width}' height='{$height}' />";
