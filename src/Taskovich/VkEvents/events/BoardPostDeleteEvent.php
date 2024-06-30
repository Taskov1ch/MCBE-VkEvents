<?php

namespace Taskovich\VkEvents\events;

final class BoardPostDeleteEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "BoardPostDeleteEvent";
	}
	
}
