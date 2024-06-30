<?php

namespace Taskovich\VkEvents\events;

final class PhotoCommentEditEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "PhotoCommentEditEvent";
	}
	
}
