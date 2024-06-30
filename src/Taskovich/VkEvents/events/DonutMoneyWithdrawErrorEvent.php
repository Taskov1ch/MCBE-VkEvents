<?php

namespace Taskovich\VkEvents\events;

final class DonutMoneyWithdrawErrorEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "DonutMoneyWithdrawErrorEvent";
	}
	
}
