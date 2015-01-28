<?php

namespace MapReset;

use pocketmine\utils\TextFormat;
use pocketmine\plugin\PluginBase;
use MapReset\Perms;

class Main extends PluginBase  implements Listener {
 
public $Command;

 
 public function onLoad() { 
    $this->getLogger()->info(TextFormat::RED . "Loading MapReset");
    $this->Command = new MapResetCommand ( $this );
 }
    public function onEnable(){
        @mkdir($this->getDataFolder());
        $this->saveDefaultConfig();
        $map = $this->getConfig();
        # The world will be cloned
        if(!$map->exists("MapReset")){
            $map->set("MapReset", "World1");
        }
        # The world played then deleted
        if(!$map->exists("MapPlaying")){
            $map->set("MapPlaying", "World_1");
        }
        # time the world lasted
        if(!$map->exists("TimeReset")){
            $map->set("TimeReset", "120");
        }
        # when the world is eliminated players will tp in the next world:
        if(!$map->exists("WoldTpPlayer")){
            $map->set("WoldTpPlayer", "world");
        }
        $map->save();
        $map->reload();

        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info(TextFormat::GREEN . "Enabled MapReset");
    }
}