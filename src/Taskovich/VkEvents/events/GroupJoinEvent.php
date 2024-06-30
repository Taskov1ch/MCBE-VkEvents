<?php

namespace Taskovich\VkEvents\events;

final class GroupJoinEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "GroupJoinEvent";
	}
	
}
