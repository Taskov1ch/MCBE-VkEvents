<?php

namespace Taskovich\VkEvents\events;

final class MarketOrderEditEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "MarketOrderEditEvent";
	}
	
}
