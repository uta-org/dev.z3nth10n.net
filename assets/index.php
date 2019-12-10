This is the main index, there you can find the following assets:

<?php

$folderName = basename(__DIR__);

$needle = $folderName == "assets" ? "*" : "assets/*";
$dirs = array_filter(glob($needle), 'is_dir');


echo "<ul>";

foreach($dirs as $entry)
{
	echo "<li><a href='{$entry}'>{$entry}</a></li>";
}

echo "</ul>";
