<?php

namespace NewMOTD;


use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;

class NewMOTD extends PluginBase
{
    public function onEnable()
    {
		$this->getlogger()->info(TextFormat::GREEN."Welcome to use the plugin,the plugin by Intel~");
		$this->getlogger()->info(TextFormat::GREEN."version : 1.2");
		$this->getlogger()->info(TextFormat::GREEN."NewMOTD loaded !");//
                $this->getServer()->getScheduler()->scheduleRepeatingTask(new NewMOTDD($this), 20);//20 seconds refresh
              /*@mkdir($this->getDataFolder());
		$this->config = new Config($this->getDataFolder()."config.yml", Config::YAML, array(
		"是否开启显示"=>"true"));
		$turn = $this->config->get("是否开启显示");
		$turn2 = $this->config->get("宣传语");*/
    }
}
