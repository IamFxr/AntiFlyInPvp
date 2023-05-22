<?php 

namespace antifly;

use pocketmine\event\Listener;

use pocketmine\plugin\PluginBase;

use pocketmine\player\Player;

use pocketmine\event\entity\EntityDamageByEntityEvent;

use pocketmine\entity\Entity;

use pocketmine\event\entity\EntityDamageEvent;

class AntiFly extends PluginBase implements Listener {

public function onEnable() : void {

$this->getServer()->getLogger()->info("AntiFly enabled");

}

   public function onEntityDamage(EntityDamageEvent $event) {

    $victim = $event->getEntity();

    if ($victim instanceof Player && $event instanceof EntityDamageByEntityEvent) {

        $attacker = $event->getDamager();

        if ($attacker instanceof Player) {

            if ($victim->isFlying() || $victim->getAllowFlight()) {

                $victim->setFlying(false);

                $victim->setAllowFlight(false);

            }

            if ($attacker->isFlying() || $attacker->getAllowFlight()) {

                $attacker->setFlying(false);

                $attacker->setAllowFlight(false);

            }

        }

    }

 

} 
