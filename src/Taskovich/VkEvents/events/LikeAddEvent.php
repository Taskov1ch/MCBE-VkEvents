<?php

namespace Taskovich\VkEvents\events;

final class LikeAddEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "LikeAddEvent";
	}
	
}
