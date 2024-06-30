<?php

namespace Taskovich\VkEvents\events;

final class WallReplyNewEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "WallReplyNewEvent";
	}
	
}
