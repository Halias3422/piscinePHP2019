<?php

require("./Vector.doc.txt");

Class Vector
{
	private $_x;
	private $_y;
	private $_z;
	private $_w = 0.0;
	private $_dest;
	private $_orig;
	public static $verbose = FALSE;

	public function __construct(array $tab)
	{
		if (array_key_exists('dest', $tab))
		{
				$this->_dest = $tab['dest'];
			if (array_key_exists('orig', $tab))
			{
				$this->_orig = $tab['orig'];
			}
			else
				$this->_orig = new Vertex(array( 'x' => 0.0, 'y' => 0.0, 'z' => 0.0));
		}
	}

	public function __destruct()
	{
		
	}

	public function __toString()
	{
		
	}

	public function magnitude()
	{
		return (sqrt(($this->_dest['x'] - $this->_orig['x']) ** 2) + (($this->_dest['y'] - $this->_orig['y']) ** 2) + (($this->_dest['z'] - $this->_orig['z'] ** 2)));
	}

	public function normalize()
	{
	
	}

	public function add($rhs)
	{
	
	}

	public function sub($rhs)
	{
	
	}
	public functiontion 
	public static function doc()
	{
		$doc = file_get_contents("./Vector.doc.txt");
		return $doc;
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
}
?>
