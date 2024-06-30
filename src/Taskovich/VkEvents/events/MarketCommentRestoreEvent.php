<?php

namespace Taskovich\VkEvents\events;

final class MarketCommentRestoreEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "MarketCommentRestoreEvent";
	}
	
}
