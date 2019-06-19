<?php

require_once("./Color.class.php");

Class Vertex
{
	private $_x;
	private $_y;
	private $_z;
	private $_w;
	private $_color;
	public static $verbose = false;

	public function __construct(array $tab)
	{
		if (array_key_exists('x', $tab) && array_key_exists('y', $tab) && array_key_exists('z', $tab))
		{
			$this->_x = $tab['x'];
			$this->_y = $tab['y'];
			$this->_z = $tab['z'];
			if (array_key_exists('w', $tab))
				$this->_w = $tab['w'];
			else
				$this->_w = 1.0;
			if (array_key_exists('color', $tab))
				$this->_color = $tab['color'];
			else
				$this->_color = new Color(array( 'red' => 255, 'green' =>  255, 'blue' => 255 ));
			if (self::$verbose == true)
			{
				echo "$this ";
				print( $_color );
				echo ") constructed\n";
			}
		}
	}

	public function __destruct()
	{
		if (self::$verbose == true)
		{
			echo "$this ";
			print( $_color );
			echo ") destructed\n";
		}
	}

	public static function doc()
	{
		$str = file_get_contents('./Vertex.doc.txt');
		echo $str;
	}
	public function __toString()
	{
		if (self::$verbose == true)
		{
			$ret = sprintf( "Vertex( x: %.2f, y: %.2f, z: %.2f, w: %.2f, $this->_color", $this->_x, $this->_y, $this->_z, $this->_w);

		}
		else
		{
			$ret = sprintf( "Vertex( x: %.2f, y: %.2f, z: %.2f, w: %.2f )", $this->_x, $this->_y, $this->_z, $this->_w);
		}

		return $ret;
	}
	public function setx()
	{
		return $this->_x;
	}
	public function sety()
	{
		return $this->_y;
	}
	public function setz()
	{
		return $this->_z;
	}
	public function setw()
	{
		return $this->_w;
	}
	public function setcolor()
	{
		return $this->_color;
	}

	public function getx()
	{
		return $this->_x;
	}
	public function gety()
	{
		return $this->_y;
	}
	public function getz()
	{
		return $this->_z;
	}
	public function getw()
	{
		return $this->_w;
	}
	public function getcolor()
	{
		return $this->_color;
	}	

}
?>
