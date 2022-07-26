<?php

class SignItem extends Item{
	public function __construct($meta = 0, $count = 1){
		$this->block = BlockAPI::get(SIGN_POST);
		$this->maxStackSize = 16;
		parent::__construct(SIGN, 0, $count, "Sign");
	}
}