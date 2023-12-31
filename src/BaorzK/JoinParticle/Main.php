<?php

namespace BaorzK\JoinParticle;

use pocketmine\player\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\world\World;
use pocketmine\event\PlayerJoinEvent;
use pocketmine\event\Listener; 
use pocketmine\world\particle\FlameParticle;
use pocketmine\world\particle\HeartParticle;
use pocketmine\world\particle\InkParticle;
use pocketmine\world\particle\AngryVillageParticle;
use pocketmine\world\particle\SmokeParticle;
use pocketmine\world\particle\WaterParticle;
use pocketmine\world\particle\LavaParticle;
use pocketmine\world\particle\EndermanTeleportParticle;

class Main extends PluginBase implements Listener{
  public function onEnable(): void{
    $this->saveDeafaultConfig;
    $this->getServer()->getPluginManager()->registerEvent($this, $this);
    $this->getLogger()->info("JoinParticle is Enable");
  }
  
  public function onDisable(){
    $this->config->save();
    $this->getLogger()->info("JoinParticle is Disable");
  }
  
  public function onJoin(PlayerJoinEvent $ev){
  $player = $ev->getPlayer();
  $world = $player->getWorldManager()->getWorld();
  $x = $player->getLocation()->getX;
  $y = $player->getLocation()->getY;
  $z = $player->getLocation()->getZ;
  //See if it is true or not!
  if($this->getConfig->get(FlameParticle) === true){
  $position = $player->getPosition()->add(0, 0, 0);
  $particle = $world->addParticle($position, new FlameParticle(2));
  }
  if($this->getConfig->get(LavaParticle) === true){
  $position = $player->getPosition()->add(0, 0, 0);
  $particle = $world->addParticle($position, new LavaParticle(2));
  }
  if($this->getConfig->get(AngryVillageParticle) === true){
  $position = $player->getPosition()->add(0, 0, 0);
  $particle = $world->addParticle($position, new AngryVillageParticle(2));
  }
  if($this->getConfig->get(InkParticle) === true){
  $position = $player->getPosition()->add(0, 0, 0);
  $particle = $world->addParticle($position, new InkParticle(2));
  }
  if($this->getConfig->get(SmokeParticle) === true){
  $position = $player->getPosition()->add(0, 0, 0);
  $particle = $world->addParticle($position, new SmokeParticle(2));
  }
  if($this->getConfig->get(WaterParticle) === true){
  $position = $player->getPosition()->add(0, 0, 0);
  $particle = $world->addParticle($position, new WaterParticle(2));
  }
  if($this->getConfig->get(EndermanTeleportParticle) === true){
  $position = $player->getPosition()->add(0, 0, 0);
  $particle = $world->addParticle($position, new EndermanTeleportParticle(2));
  }
}
}
