<?php

class ChainHelmetItem extends Item{

	public function __construct($meta = 0, $count = 1){
		parent::__construct(CHAIN_HELMET, $meta, $count, "Chain Helmet");
	}
}