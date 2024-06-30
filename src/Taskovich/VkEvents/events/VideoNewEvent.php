<?php

namespace Taskovich\VkEvents\events;

final class VideoNewEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "VideoNewEvent";
	}
	
}
