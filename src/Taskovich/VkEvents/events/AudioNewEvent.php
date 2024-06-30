<?php

namespace Taskovich\VkEvents\events;

final class AudioNewEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "AudioNewEvent";
	}
	
}
