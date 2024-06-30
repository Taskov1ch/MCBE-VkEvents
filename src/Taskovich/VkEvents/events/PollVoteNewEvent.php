<?php

namespace Taskovich\VkEvents\events;

final class PollVoteNewEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "PollVoteNewEvent";
	}
	
}
