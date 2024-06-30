<?php

namespace Taskovich\VkEvents\events;

final class VideoCommentEditEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "VideoCommentEditEvent";
	}
	
}
