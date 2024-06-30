<?php

namespace Taskovich\VkEventsExample;

use Taskovich\VkEvents\VkListener;
use Taskovich\VkEvents\events\MessageNewEvent;
use Taskovich\VkEvents\events\WallPostNewEvent;

class EventListener implements VkListener
{
	
	public function __construct(
		private readonly Main $main
	)
	{}

	public function onMessage(MessageNewEvent $event): void
	{
		$message_data = $event->getUpdates()["message"];
		$this->main->getLogger()->info($message_data["from_id"] . " > " . $message_data["text"]);
	}

	public function onNewPost(WallPostNewEvent $event): void
	{
		print_r($event->getUpdates());
	}

}
