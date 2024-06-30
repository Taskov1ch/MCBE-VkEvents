<?php

namespace Taskovich\VkEvents\events;

final class MessageNewEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "MessageNewEvent";
	}
	
}
