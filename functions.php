<?php

// Decodifica JSON
function getPrice($url) {
		$decode = @file_get_contents($url);
		return json_decode($decode, true);
}

?>
