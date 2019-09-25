<?php

namespace elektro\DiscordGamers;

use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\utils\TextFormat as te;

class main extends PluginBase{
   public function onEnable(){
   $this->getLogger()->info(te::GREEN."Aktiviert!");
   }
   public function onDisable(){
   $this->getLogger()->info(te::RED."Deaktiviert:");
   }
    public function onCommand(CommandSender $sender, Command $cmd, string $lable, array $args):bool {
       switch($cmd->getName()) {
           case "day":
               if ($sender instanceof Player) {
                   if ($sender->hasPermission("dcgame.day")) {
                       $sender->getLevel()->setTime(6000);
                       $sender->sendMessage("Erfolg, die zeit wurder auf 6000 gesetzt.");
                   } else {
                       $sender->sendMessage("So läuft der Hase nicht, du benötgst rechte um den command auszuführen.");
                   }
                   return true;
               }

           case "night":
               if ($sender instanceof Player) {
                   if ($sender->hasPermission("dcgame.night")) {
                       $sender->getLevel()->setTime(15000);
                       $sender->sendMessage("Erfolg, die zeit wurder auf 15000 gesetzt.");
                   } else {
                       $sender->sendMessage("So läuft der Hase nicht, du benötgst rechte um den command auszuführen.");
                   }
                   return true;
               }
               
           case "gmc":
               if ($sender instanceof Player) {
                   if ($sender->hasPermission("dcgame.gmc")){
                       $sender->setGamemode(1);
                       $sender->sendMessage("Erfolg, du bist nun im Creative mode");
                   }else{
                       $sender->sendMessage("So läuft der Hase nicht, du benötgst rechte um den command auszuführen.");
                   }
                   return true;
               }
               
           case "gms":
               if ($sender instanceof Player) {
                   if ($sender->hasPermission("dcgame.gms")){
                       $sender->setGamemode(0);
                       $sender->sendMessage("Erfolg, du bist nun Surivial mode");
                   }else{
                       $sender->sendMessage("So läuft der Hase nicht, du benötgst rechte um den command auszuführen.");
                   }
                   return true;
               }
               
           case "gma":
               if ($sender instanceof  Player) {
                   if ($sender->hasPermission("dcgame.gma")){
                       $sender->setGamemode(2);
                       $sender->sendMessage("Erfolg, du bist nun im adventure mode");
                   }else{
                       $sender->sendMessage("So läuft der Hase nicht, du benötgst rechte um den command auszuführen.");
                   }
                   return true;
               }
               
           case "gmsp":
               if($sender instanceof Player){
                   if($sender->hasPermission("dcgame.gmsp")){
                       $sender->setGamemode(3);
                       $sender->sendMessage("Erfolg, du bist im Speactatormode");
                   }else{
                       $sender->sendMessage("So läuft der Hase nicht, du benötgst rechte um den command auszuführen.");
                   }
                   return true;
               }
       }
    }
}
