#!/usr/bin/php
<?PHP
if ($argc > 1)
{
	if (preg_match('/^[A-Za-z]([a-z]{3,7}) ([0-9]{1,2}) [A-Za-z]([a-z]{2,8}) [0-9]{4} [0-9]{2}:[0-9]{2}:[0-9]{2}$/', $argv[1]) == 1)
	{
		$str = str_replace(':', ' ', $argv[1]);
		$tab = explode(' ', $str);
		if ($tab[2] === "Janvier" || $tab[2] === "janvier")
			$tab[2] = 1;
		else if ($tab[2] === "Fevrier" || $tab[2] === "fevrier")
			$tab[2] = 2;
		else if ($tab[2] === "Mars" || $tab[2] === "mars")
			$tab[2] = 3;
		else if ($tab[2] === "Avril" || $tab[2] === "avril")
			$tab[2] = 4;
		else if ($tab[2] === "Mai" || $tab[2] === "mai")
			$tab[2] = 5;
		else if ($tab[2] === "Juin" || $tab[2] === "juin")
			$tab[2] = 6;
		else if ($tab[2] === "Juillet" || $tab[2] === "juillet")
			$tab[2] = 7;
		else if ($tab[2] === "Aout" || $tab[2] === "aout")
			$tab[2] = 8;
		else if ($tab[2] === "Septembre" || $tab[2] === "septembre")
			$tab[2] = 9;
		else if ($tab[2] === "Octobre" || $tab[2] === "octobre")
			$tab[2] = 10;
		else if ($tab[2] === "Novembre" || $tab[2] === "novembre")
			$tab[2] = 11;
		else if ($tab[2] === "Decembre" || $tab[2] === "decembre")
			$tab[2] = 12;
		date_default_timezone_set('Europe/Paris');
		$time = mktime($tab[4], $tab[5], $tab[6], $tab[2], $tab[1], $tab[3]);
		echo $time."\n";
	}
	else
		echo "Wrong Format\n";
}
?>
