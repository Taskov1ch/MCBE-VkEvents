<?php

namespace Taskovich\VkEvents\events;

final class DonutSubscriptionCreateEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "DonutSubscriptionCreateEvent";
	}
	
}
