<?php
	include_once("ptrek_main.php");

	session_start();
	if (!isset($_Session["PHPSESSID"])){
		/* initialize */
		Initialize();
		SaveSession();
	}else{
	    LoadSession();
	}
?>
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

	switch ($cmd) {
		case 'nav':
			PrintParagraph("NAV: $dir $pow");
			break;

		case 'srs':
			PrintParagraph("SRS");
			break;

		case 'lrs':
			PrintParagraph("LRS");
			break;

		case 'pha':
			PrintParagraph("PHA: $pow");
			break;

		case 'tor':
			PrintParagraph("TOR: $dir");
			break;

		case 'shi':
			PrintParagraph("SHI: $pow");
			break;

		case 'dam':
			PrintParagraph("DAM:");
			DebugTest();
			break;

		case 'com':
			PrintParagraph("COM: $pow");
			DebugDump();
			break;

		case 'xxx':
			PrintParagraph("XXX:");
			$_SESSION = array();

			if (isset($_Session["PHPSESSID"])) {
				setSession("PHPSESSID", '', time() - 1800, '/');
			}

			session_destroy();
			break;
	
		default:
			PrintParagraph("ERROR: $code");
			break;
	}


?>
</body>
</html>