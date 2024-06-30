<?php

namespace Taskovich\VkEvents\events;

final class DonutSubscriptionPriceChangedEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "DonutSubscriptionPriceChangedEvent";
	}
	
}
