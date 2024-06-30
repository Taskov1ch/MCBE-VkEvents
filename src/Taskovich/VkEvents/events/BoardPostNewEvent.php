<?php

namespace Taskovich\VkEvents\events;

final class BoardPostNewEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "BoardPostNewEvent";
	}
	
}
