<?php

namespace NewMOTD;


use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;

class NewMOTD extends PluginBase
{
    public function onEnable()
    {
		$this->getlogger()->info(TextFormat::GREEN."Welcome to use the plugin,the plugin by Intel~");
		$this->getlogger()->info(TextFormat::GREEN."version : 1.1");
		$this->getlogger()->info(TextFormat::GREEN."NewMOTD loaded !");//
    $this->getServer()->getScheduler()->scheduleRepeatingTask(new NewMOTDD($this), 20);//20 seconds refresh
    }
}
