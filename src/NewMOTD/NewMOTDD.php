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
		$logo = array(" §7Hello!"," §7Welcome!"," §7Have a good time!"," §7We will be better!"," §7Love our server!"," §7QQgroup:249849836!");//Random value acquisition
		$logo2 = array_rand($logo);
        $motd = $this->plugin->getServer()->getMotd();
        $motd = TextFormat::AQUA . $motd;
        $motd .= $logo[$logo2];//Produce result 
        $this->plugin->getServer()->getNetwork()->setName($motd);
    }
}
