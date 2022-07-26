<?php

class LapisBlock extends SolidBlock{
	public function __construct(){
		parent::__construct(LAPIS_BLOCK, 0, "Lapis Block");
		$this->hardness = 15;
	}

	public function getBreakTime(Item $item, Player $player){
		if(($player->gamemode & 0x01) === 0x01){
			return 0.20;
		}		
		switch($item->isPickaxe()){
			case 5:
				return 0.6;
			case 4:
				return 0.75;
			case 3:
				return 1.15;
			default:
				return 15;
		}
	}
	
	public function getDrops(Item $item, Player $player){
		if($item->isPickaxe() >= 3){
			return array(
				array(LAPIS_BLOCK, 0, 1),
			);
		}else{
			return array();
		}
	}

}