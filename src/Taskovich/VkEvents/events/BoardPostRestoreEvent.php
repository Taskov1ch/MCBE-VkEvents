<?php

namespace Taskovich\VkEvents\events;

final class BoardPostRestoreEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "BoardPostRestoreEvent";
	}
	
}
