<?php

namespace Taskovich\VkEvents\events;

final class GroupOfficersEditEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "GroupOfficersEditEvent";
	}
	
}
