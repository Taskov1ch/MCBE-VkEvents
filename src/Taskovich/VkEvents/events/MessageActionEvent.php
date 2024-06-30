<?php

namespace Taskovich\VkEvents\events;

final class MessageActionEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "MessageActionEvent";
	}
	
}
