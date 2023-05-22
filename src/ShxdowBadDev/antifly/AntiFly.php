<?php 

namespace ShxdowBadDev\antifly;

use pocketmine\event\Listener;

use pocketmine\plugin\PluginBase;

use pocketmine\player\Player;

use pocketmine\event\entity\EntityDamageByEntityEvent;

use pocketmine\entity\Entity;

use pocketmine\event\entity\EntityDamageEvent;

class AntiFly extends PluginBase implements Listener {

public function onEnable() : void {



}

   public function onEntityDamage(EntityDamageEvent $event) {

    $victima = $event->getEntity();

    if ($victima instanceof Player && $event instanceof EntityDamageByEntityEvent) {

        $atacante = $event->getDamager();

        if ($atacante instanceof Player) {
           #This part check if these flying and it deactivates it if you get damage

            if ($victima->isFlying() || $victima->getAllowFlight()) {

                $victima->setFlying(false);

                $victima->setAllowFlight(false);

            }
           #This part of the plugin checks if these Flying and it deactivates it if you attacked

            if ($atacante->isFlying() || $atacante->getAllowFlight()) {
               #There the code turned off the fly of the attacker
 
                $atacante->setFlying(false);

                $atacante->setAllowFlight(false);

            }

        }

    }

 

 } 

} 
