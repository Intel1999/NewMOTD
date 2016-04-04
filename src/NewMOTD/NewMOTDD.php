<?php

namespace NewMOTD;


use pocketmine\scheduler\PluginTask;
use pocketmine\utils\TextFormat;

class NewMOTDD extends PluginTask
{
    private $plugin;

    public function __construct(NewMOTD $plugin)
    {
        parent::__construct($plugin);
        $this->plugin = $plugin;
    }

    public function onRun($currentTick)
    {
      /*$turn3 = (new NewMOTD($turn));
	if($turn3 == "true"){
	$motd = true;
	}else{
	$max = false;
	$online = false;
	$logo = false;
	}
	$logo = new NewMOTD($turn2);*/
        $logo = array(" xxxxx1"," xxxxx2"," xxxxx3");//Random value acquisition
        $online = count($this->plugin->getServer()->getOnlinePlayers());
        $max = $this->plugin->getServer()->getMaxPlayers();
	$logo2 = array_rand($logo);
        $motd = $this->plugin->getServer()->getMotd();
        $motd = TextFormat::AQUA . $motd;
        $motd .= " >" . $online . "/" . $max . "< " . $logo[$logo2];//Produce result 
        $this->plugin->getServer()->getNetwork()->setName($motd);
    }
}
