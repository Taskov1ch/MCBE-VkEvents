<?php

namespace Taskovich\VkEvents\events;

final class MessageReplyEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "MessageReplyEvent";
	}
	
}
