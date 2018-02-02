<?php

namespace BurritoMan46/SocialCore;

use pocketmine/plugin/PluginBase;

class SocialCore extends PluginBase{
  
        public function onEnable(){
                $this->getLogger()->info("onEnable() has been called!");
        }
         
        public function onDisable(){
                $this->getLogger()->info("onDisable() has been called!");
