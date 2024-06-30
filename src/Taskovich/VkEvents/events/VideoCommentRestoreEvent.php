<?php

namespace Taskovich\VkEvents\events;

final class VideoCommentRestoreEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "VideoCommentRestoreEvent";
	}
	
}
