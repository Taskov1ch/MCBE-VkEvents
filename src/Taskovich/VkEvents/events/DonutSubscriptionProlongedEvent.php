<?php

namespace Taskovich\VkEvents\events;

final class DonutSubscriptionProlongedEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "DonutSubscriptionProlongedEvent";
	}
	
}
