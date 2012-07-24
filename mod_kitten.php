<?php
defined( '_JEXEC' ) or die;

$width = rand(200,300);
$height = rand(200,300);

echo "<img src='http://placekitten.com/{$width}/{$height}' alt='Kittens!' width='{$width}' height='{$height}' />";
