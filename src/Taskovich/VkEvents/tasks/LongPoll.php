<?php

namespace Taskovich\VkEvents\tasks;

use Taskovich\VkEvents\Main;
use Taskovich\VkEvents\tasks\States;
use pocketmine\Server;
use pocketmine\scheduler\Task;

class LongPoll extends Task
{

	public function __construct(
		private string $token,
		private int $group_id
	)
	{}

	public function onRun(): void
	{
		if (States::$longpoll)
		{
			Server::getInstance()->getAsyncPool()->submitTask(new AsyncLongPoll($this->token, $this->group_id));
			States::$longpoll = false;
		}
	}

}
