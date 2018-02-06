<?php

namespace BurritoMan46/SocialCore;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
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
	  public function onJoin(PlayerJoinEvent $event){
  		 $player = $event->getPlayer();
   		$name = $player->getName();
   		$this->getServer()->broadcastMessage(C::GREEN."$name Joined AversionPE! Awesome!");
	}
}
          public function onCommand(CommandSender $sender,Command $cmd,$label,array $args){
}

          if($cmd->getName() == "gkit"){ //In this case, we will make the command "/gkit"
                $sender->sendMessage("Gkit");
