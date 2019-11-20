<?php


for ($godina=800; $godina < 2200; $godina++) {
	if (($godina % 4 == 0) && !($godina % 100 == 0) || ($godina % 400 == 0)) {
	echo $godina . PHP_EOL;
	}
}

?>