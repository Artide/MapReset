<?php

namespace MapReset;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\Player;
use pocketmine\utils\Config;
use pocketmine\Server;

class MapResetCommand {
	private $pgin;

	public function __construct(Main $pg) {
		$this->pgin = $pg;
	}
	public function onCommand(CommandSender $sender, Command $command, $label, array $args) {
	}
	public function log($message) {
		$this->plugin->getLogger ()->info ( $message );
	}
}