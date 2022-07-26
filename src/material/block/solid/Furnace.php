<?php

/***REM_START***/
require_once("BurningFurnace.php");
/***REM_END***/


class FurnaceBlock extends BurningFurnaceBlock{
	public function __construct($meta = 0){
		parent::__construct($meta);
		$this->id = FURNACE;
		$this->name = "Furnace";
		$this->isActivable = true;
	}
}