<?php

namespace Taskovich\VkEvents\events;

final class WallReplyEditEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "WallReplyEditEvent";
	}
	
}
