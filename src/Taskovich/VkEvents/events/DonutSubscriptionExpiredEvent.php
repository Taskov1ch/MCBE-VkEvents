<?php

namespace Taskovich\VkEvents\events;

final class DonutSubscriptionExpiredEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "DonutSubscriptionExpiredEvent";
	}
	
}
