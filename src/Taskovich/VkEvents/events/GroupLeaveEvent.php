<?php

namespace Taskovich\VkEvents\events;

final class GroupLeaveEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "GroupLeaveEvent";
	}
	
}
