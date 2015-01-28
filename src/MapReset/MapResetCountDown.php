<?php

namespace MapReset;


use pocketmine\utils\Config;
use pocketmine\Server;
use pocketmine\utils\Utils;
use pocketmine\utils\Config;
use pocketmine\level\Position;
use pocketmine\scheduler\Task;
use pocketmine\scheduler\TaskHandler;
use pocketmine\scheduler\PluginTask;
use pocketmine\scheduler\AsyncTask;
use pocketmine\level\Level;
use pocketmine\scheduler\PluginTask;

class MapResetCountDown extends PluginTask {
	
	public function __construct(Main) {
	}

	public function log($message) {
		$this->plugin->getLogger ()->info ( $message );
	}
}