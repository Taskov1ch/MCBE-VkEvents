<?php

namespace Taskovich\VkEvents\events;

final class MarketOrderNewEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "MarketOrderNewEvent";
	}
	
}
