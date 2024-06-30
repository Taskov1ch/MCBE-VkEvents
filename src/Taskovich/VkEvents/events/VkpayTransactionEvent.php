<?php

namespace Taskovich\VkEvents\events;

final class VkpayTransactionEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "VkpayTransactionEvent";
	}
	
}
