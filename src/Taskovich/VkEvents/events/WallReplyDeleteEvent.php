<?php

namespace Taskovich\VkEvents\events;

final class WallReplyDeleteEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "WallReplyDeleteEvent";
	}
	
}
