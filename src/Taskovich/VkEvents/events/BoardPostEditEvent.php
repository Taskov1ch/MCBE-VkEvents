<?php

namespace Taskovich\VkEvents\events;

final class BoardPostEditEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "BoardPostEditEvent";
	}
	
}
