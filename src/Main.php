<?php

namespace BurritoMan46/SocialCore;

use pocketmine\plugin\PluginBase;

use pocketmine\event\player\PlayerJoinEvent;

use pocketmine\event\player\PlayerQuitEvent;

use pocketmine\Player;

use pocketmine\Server;

use pocketmine\event\Listener;

use pocketmine\utils\TextFormat as C;;

class SocialCore extends PluginBase implements Listener{
	
            public function onLoad(){
                    $this->getLogger()->info("SocialCore Loading!");
          }
          public function onEnable(){
                    $this->getLogger()->info("SocialCore Enabled!");
          }
          public function onDisable(){
                    $this->getLogger()->info("SocialCore Disabled!");
          }
}
