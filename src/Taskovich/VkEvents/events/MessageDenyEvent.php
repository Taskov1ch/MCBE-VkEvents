<?php

namespace Taskovich\VkEvents\events;

final class MessageDenyEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "MessageDenyEvent";
	}
	
}
