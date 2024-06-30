<?php

namespace Taskovich\VkEvents\events;

final class MessageAllowEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "MessageAllowEvent";
	}
	
}
