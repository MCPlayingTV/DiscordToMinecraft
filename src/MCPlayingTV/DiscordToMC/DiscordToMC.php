<?php
declare(strict_types=1);

namespace MCPlayingTV\DiscordToMC;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;

class DiscordToMC extends PluginBase{
	
	public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool{
		switch($command->getName()){
			case "rcsay":
                if (!isset($args[1])) return true;
				$this->getServer()->broadcastMessage(TextFormat::BLUE.TextFormat::BOLD."[Discord] " .TextFormat::RESET.TextFormat::GOLD. $args[0] .TextFormat::AQUA. " > " . TextFormat::WHITE.join(" ", array_slice($args,1)));
                $sender->sendMessage("true");

				return true;
				break;
			case "discordtominecraft":
				$sender->sendMessage(TextFormat::BLUE."Read the documentation:".TextFormat::BLACK." https://rconcraft.ml/docs/d2m");
				return true;
			default:
				return false;
		}
	}
}
