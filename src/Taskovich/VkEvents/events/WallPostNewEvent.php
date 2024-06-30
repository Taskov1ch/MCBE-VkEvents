<?php

namespace Taskovich\VkEvents\events;

final class WallPostNewEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "WallPostNewEvent";
	}
	
}
