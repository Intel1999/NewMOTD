<?php
namespace NewMOTD;

use pocketmine\plugin\PluginBase;

class NewMOTD extends PluginBase
{
    public function onEnable()
    {
        $this->getServer()->getScheduler()->scheduleRepeatingTask(new NewMOTDD($this), 10);
    }
}
?>
