<?php

class UnholyFactory
{
	public $fighting = array();
	public function absorb($type)
	{
		if ($type->fighter != false)
		{
			if (in_array($type->fighter, $this->fighting) === FALSE)
			{
				array_push($this->fighting, $type->fighter);
				echo "(Factory absorbed a fighter of type $type->fighter)\n";
			}
			else
				echo "(Factory already absorbed a fighter of type $type->fighter)\n";
		}
		else
			echo "(Factory can't absorb this, it's not a fighter)\n";
	}

	public function fabricate($rf)
	{
		$res = ucfirst(str_replace(" ", "", $rf));
		if (in_array($rf, $this->fighting))
		{
			echo "(Factory fabricates a fighter of type $rf)\n";
			return (new $res());
		}
		else
			echo "(Factory hasn't absorbed any fighter of type $rf)\n";
	}
}
?>
