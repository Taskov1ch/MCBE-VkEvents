<?php

namespace Taskovich\VkEvents\events;

final class WallRepostEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "WallRepostEvent";
	}
	
}
