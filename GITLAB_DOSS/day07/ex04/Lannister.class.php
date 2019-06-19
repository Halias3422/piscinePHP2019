<?php

class Lannister
{
	public $char1 = "Lannister";

	public function sleepWith($other)
	{
		if (static::character() == "Jaime" && $other->char1 == "Lannister")
			echo "With pleasure, but only in a tower in Winterfell, then.\n";
		else if ((static::character() == "Jaime" && $other->char1 == "Tyrion") ||
			(static::character() == "Tyrion" && $other->char1 == "Jaime") ||
		(static::character() == "Tyrion" && $other->char1 == "Lannister"))
			echo "Not even if I'm drunk !\n";
		else
			echo "Let's do this.\n";
	}
}

?>
