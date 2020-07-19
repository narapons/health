<?php

namespace health;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerInteractEvent;

class main extends PluginBase implements Listener{

    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this,$this);
    }

    public function block(PlayerInteractEvent $event){

        $player = $event->getPlayer();
        $block = $event->getBlock();
        $id = $block->getId();
        $itemid = 86;

        if($id == $itemid) {
            $player->setFood(20);
            $player->sendPopup("§l§6あなたの空腹度を回復しました！");
        }

    }

}