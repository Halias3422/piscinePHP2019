<?php

require_once("./Color.class.php");

class Vertex
{
	private $_x;
	private $_y;
	private $_z;
	private $_w = 1.0;
	private $_color;
	static $verbose = false;

	public function __construct(array $tab)
	{
		if (isset($tab['x']) && isset($tab['y']) && isset($tab['z']))
		{
			$this->_x = $tab['x'];
			$this->_y = $tab['y'];
			$this->_z = $tab['z'];
		}
		if (isset($tab['w']))
			$this->_w = $tab['w'];
		if (isset($tab['color']))
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

	public function __get( $attr )
	{
		if ( $attr == _x )
			return ( $this->getX() );
		else if ( $attr == _y )
			return ( $this->getY() );
		else if ( $attr == _z )
			return ( $this->getZ() );
		else if ( $attr == _w )
			return ( $this->getW() );
		else if ( $attr == _color )
			return ( $this->getColor() );
	}

	public function __set( $attr, $value )
	{
		if ( $attr == _x )
			return ( $this->getX( $value ) );
		else if ( $attr == _y )
			return ( $this->getY( $value ) );
		else if ( $attr == _z )
			return ( $this->getZ( $value ) );
		else if ( $attr == _w )
			return ( $this->getW( $value ) );
		else if ( $attr == _color )
			return ( $this->getColor( $value ) );
	}

	private function setX ( $value ) {
		$this->_x = $value;
	}
	private function setY ( $value ) {
		$this->_y = $value;
	}
	private function setZ ( $value ) {
		$this->_z = $value;
	}
	private function setW ( $value ) {
		$this->_x = $value;
	}
	private function setColor ( $value ) {
		$this->_x = $value;
	}



	private function getX()
	{
		return $this->_x;
	}
	private function getY()
	{
		return $this->_y;
	}
	private function getZ()
	{
		return $this->_z;
	}
	private function getW()
	{
		return $this->_w;
	}
	private function getColor()
	{
		return $this->_color;
	}	

}
?>
