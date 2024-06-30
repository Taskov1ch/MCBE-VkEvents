<?php

namespace Taskovich\VkEvents\events;

final class DonutSubscriptionCancelledEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "DonutSubscriptionCancelledEvent";
	}
	
}
