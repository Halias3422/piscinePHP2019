<?php

require_once 'Vertex.class.php';

Class Vector
{
	private $_x;
	private $_y;
	private $_z;
	private $_w = 1.0;
	public static $verbose = FALSE;

	public function __construct(array $tab)
	{
			if (isset($tab['orig']))
			{
				$orig = new Vertex(array( 
					'x' => $tab['orig']->_x,
					'y' => $tab['orig']->_y,
					'z' => $tab['orig']->_z));
				$this->_w = 0.0;
			}
			else
			{
				$orig = new Vertex(array( 'x' => 0.0, 'y' => 0.0, 'z' => 0.0));
				$this->_w = 0.0;
			}
		if (array_key_exists('dest', $tab))
		{
		$this->_x = $tab['dest']->_x - $tab['orig']->_x;
		$this->_y = $tab['dest']->_y - $tab['orig']->_y;
		$this->_z = $tab['dest']->_z - $tab['orig']->_z;
		}
		if (self::$verbose == true)
			echo $this. "constructed.\n";
}

	public function __destruct()
	{
		
	}

	public function __toString()
	{
		$res = sprintf("Vector( x:%.2f, y:%.2f, z:%.2f, w:%.2f)", $this->_x, $this->_y, $this->_z, $this->_y);
		return ($res);
	}

	public function magnitude()
	{
		//	return (sqrt(($this->_dest['x'] - $this->_orig['x']) ** 2) + (($this->_dest['y'] - $this->_orig['y']) ** 2) + (($this->_dest['z'] - $this->_orig['z'] ** 2)));
		return (sqrt($this->_x ** 2 + $this->_y ** 2 + $this->_z ** 2));
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
