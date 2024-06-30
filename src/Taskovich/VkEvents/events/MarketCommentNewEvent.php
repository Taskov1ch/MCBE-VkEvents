<?php

namespace Taskovich\VkEvents\events;

final class MarketCommentNewEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "MarketCommentNewEvent";
	}
	
}
