<?php

//var $Galaxy = array(array(), array());

function Initialize()
{
	global $Galaxy, $Enterprise, $Damage, $Status;

	do {
		$kk = $bb = 0;
		for ($y = 0; $y < 8; $y++) {
			for ($x = 0; $x < 8; $x++) {
				$r = mt_rand(0, 99);
				if ($r > 98)
					$k = 3;
				elseif ($r > 95)
					$k = 2;
				elseif($r > 80)
					$k = 1;
				else
					$k = 0;
				$b = (mt_rand(0, 99) > 96) ? 1: 0;
				$s = mt_rand(1, 8);
				$kk += $k;
				$bb += $b;
				$Galaxy[$x][$y] = sprintf("0%s%s%s", $k, $b, $s);
			}
		}
	} while ($kk == 0 || $bb == 0);

	$Status['enemy'] = $kk;		// total klingons
	$Status['base']  = $bb;		// total bases
}

function SaveSession()
{
	global $Galaxy, $Enterprise, $Damage, $Status;

	$_SESSION["Galaxy"] = $Galaxy;
	$_SESSION["Enterprise"] = $Enterprise;
	$_SESSION["Damage"] = $Damage;
	$_SESSION["Status"] = $Status;
}


function LoadSession()
{
	global $Galaxy, $Enterprise, $Damage, $Status;

	$Galaxy = $_SESSION["Galaxy"];
	$Enterprise = $_SESSION["Enterprise"];
	$Damage = $_SESSION["Damage"];
	$Status = $_SESSION["Status"];
}


function DebugDump()
{
	global $Galaxy, $Enterprise, $Damage, $Status;

	PrintParagraph("DebugDump");
	CmdGalaxyMap();
	PrintParagraph("Enterprise: " . print_r($Enterprise));
	PrintParagraph("Damage: " . print_r($Damage));
	PrintParagraph("Status: " . print_r($Status));
}

function DebugTest()
{
	global $Status;

	$Status['enemy'] = 100;
}

function PrintParagraph($str)
{
	echo "<p>$str</p>";
}



function CmdGalaxyMap()
{
	global $Galaxy;

	echo "<table>";
	for ($y = 0; $y < 8; $y++) {
		echo "<tr>";
		for ($x = 0; $x < 8; $x++) {
			echo "<td>" . $Galaxy[$x][$y] . "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
}
