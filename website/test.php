<?php

$sleep = $_GET['sleep'] ?? 0;
$doError = isset($_GET['doError']);
$doException = isset($_GET['doException']);

sleep($sleep);

if ($doError) {
	not_exists();
}

if ($doException) {
	throw new Exception('test');
}
