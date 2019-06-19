<?php

Class Color
{
	public $red;
	public $green;
	public $blue;
	public static $verbose = FALSE;

	public function __construct (array $tab)
	{
		if (isset($tab['rgb']) && $tab['rgb'] > -1)
		{
			$rgb = intval($tab['rgb'], 10);
			$this->red = $rgb / 65536;
			$this->green = $rgb % 65536 / 256;
			$this->blue = $rgb % 65536 % 256;
		}
		else if (isset($tab['red']) && isset($tab['green']) && isset($tab['blue']) && $tab['red'] > -1 && $tab['red'] < 256 && $tab['green'] > -1 && $tab['green'] < 256 && $tab['blue'] > -1 && $tab['blue'] < 256)
		{
			$this->red = intval($tab['red'], 10);
			$this->green = intval($tab['green'], 10);
			$this->blue = intval($tab['blue'], 10);
		}
		if (self::$verbose == TRUE)
			echo "$this constructed.\n";
	}

	public function __destruct()
	{
		if (self::$verbose == True)
			echo "$this destructed.\n";
	}

	public function __toString()
	{
		$ret = sprintf( "Color( red: %3d, green: %3d, blue: %3d )", $this->red, $this->green, $this->blue );
		return $ret;
	}

	public static function doc()
	{
		$str = file_get_contents('./Color.doc.txt');
		echo $str;
	}

	public function add($tab)
	{
		$new = new Color(array(
			'red' => $this->red + $tab->red,
			'green' => $this->green + $tab->green,
			'blue' => $this->blue + $tab->blue
		));
		return $new;
	}

	public function sub($tab)
	{
		$new = new Color(array(
			'red' => $this->red - $tab->red,
			'green' => $this->green - $tab->green,
			'blue' => $this->blue - $tab->blue
		));
		return $new;
	}

	public function mult($mul)
	{
		$new = new Color(array(
			'red' => $this->red * $mul,
			'green' => $this->green * $mul,
			'blue' => $this->blue * $mul
		));
		return $new;
	}
}

?>
