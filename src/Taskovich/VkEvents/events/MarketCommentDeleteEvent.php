<?php

namespace Taskovich\VkEvents\events;

final class MarketCommentDeleteEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "MarketCommentDeleteEvent";
	}
	
}
