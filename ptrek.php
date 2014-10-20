<!doctype html>
<html>
<head>
	<title>PHP Star Trek 2 / main</title>
	<meta charset="utf-8" />
	<style type="text/css">
		body {font-size: 62.5%;}
	</style>
</head>
<body>
<?php
	if (isset($_GET['cmd'])) {
		$cmd = $_GET['cmd'];
		if (isset($_GET['dir'])) {
			$dir = $_GET['dir'];
		}
		if (isset($_GET['pow'])) {
			$pow = $_GET['pow'];
		}

	}
	else {
		$cmd = 'ini';
	}
	echo "cmd = $cmd / dir = $dir / pow = $pow";

	switch ($cmd) {
		case 'nav':
			# code...
			break;

		case 'srs':
			break;

		case 'lrs':
			break;

		case 'pha':
			break;

		case 'tor':
			break;

		case 'shi':
			break;

		case 'dam':
			break;

		case 'com':
			break;

		case 'ini':
			break;
	
		default:
			# code...
			break;
	}

?>
</body>
</html>