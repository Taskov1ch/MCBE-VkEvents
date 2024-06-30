<?php

namespace Taskovich\VkEvents;

use Taskovich\VkEvents\EventsManager;
use Taskovich\VkEvents\tasks\LongPoll;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase
{

	private static ?self $instance = null;

	public function onLoad(): void
	{
		self::$instance = $this;
	}

	public function onEnable(): void
	{
		$this->saveDefaultConfig();
		$config = $this->getConfig()->getAll();
		$this->getScheduler()->scheduleRepeatingTask(new LongPoll($config["token"], $config["group_id"]), 1);
	}

	public function getEventsManager(): EventsManager
	{
		return EventsManager::getInstance();
	}

	public static function getInstance(): self
	{
		if (!self::$instance)
		{
			self::$instance = new self();
		}

		return self::$instance;
	}

}
