<?php

namespace Taskovich\VkEvents\events;

final class MessageEditEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "MessageEditEvent";
	}
	
}
