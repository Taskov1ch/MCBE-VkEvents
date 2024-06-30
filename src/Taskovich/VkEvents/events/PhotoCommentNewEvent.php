<?php

namespace Taskovich\VkEvents\events;

final class PhotoCommentNewEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "PhotoCommentNewEvent";
	}
	
}
