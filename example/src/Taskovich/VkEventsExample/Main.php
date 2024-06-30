<?php

namespace Taskovich\VkEventsExample;

use Taskovich\VkEvents\managers\EventsManager;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase
{

	public function onEnable(): void
	{
		EventsManager::getInstance()->registerEvents(new EventListener($this), $this);
	}

}