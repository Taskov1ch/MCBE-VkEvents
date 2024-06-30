<?php

namespace Taskovich\VkEvents\events;

final class GroupChangeSettingsEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "GroupChangeSettingsEvent";
	}
	
}
