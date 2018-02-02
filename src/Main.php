<?php

namespace BurritoMan46/SocialCore;

use pocketmine\Player;
use pocketmine\Server;
use pocketmine\command\Command;
use pocketmine\command\ConsoleCommandSender;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginBase
use pocketmine\utils\TextFormat;

class SocialCore extends PluginBase{
  
        public function onEnable(){
                $this->getLogger()->info("onEnable() has been called!");
        }
         
        public function onDisable(){
                $this->getLogger()->info("onDisable() has been called!");
          
          public function onCommand(CommandSender $sender, Command $command, $label, array $args){
	if(strtolower($command->getName()) === "gkit"){
		// Execute logic
		return true;
