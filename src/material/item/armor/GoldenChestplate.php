<?php

class GoldenChestplateItem extends Item{

	public function __construct($meta = 0, $count = 1){
		parent::__construct(GOLDEN_CHESTPLATE, $meta, $count, "Golden Chestplate");
	}
}