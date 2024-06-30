<?php

namespace Taskovich\VkEvents\events;

final class VideoCommentNewEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "VideoCommentNewEvent";
	}
	
}
