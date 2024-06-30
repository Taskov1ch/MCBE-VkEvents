<?php

namespace Taskovich\VkEvents\events;

final class VideoCommentDeleteEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "VideoCommentDeleteEvent";
	}
	
}
