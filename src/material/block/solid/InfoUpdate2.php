<?php

class InfoUpdate2Block extends SolidBlock{
	public function __construct(){
		parent::__construct(INFO_UPDATE2, 0, "tile.info_update2.name<");
		$this->breakable = true;
		$this->hardness = 0;
	}
	
}