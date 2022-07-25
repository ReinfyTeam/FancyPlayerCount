<?php

/*
 *
 *  ____           _            __           _____
 * |  _ \    ___  (_)  _ __    / _|  _   _  |_   _|   ___    __ _   _ __ ___
 * | |_) |  / _ \ | | | '_ \  | |_  | | | |   | |    / _ \  / _` | | '_ ` _ \
 * |  _ <  |  __/ | | | | | | |  _| | |_| |   | |   |  __/ | (_| | | | | | | |
 * |_| \_\  \___| |_| |_| |_| |_|    \__, |   |_|    \___|  \__,_| |_| |_| |_|
 *                                   |___/
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author ReinfyTeam
 * @link https://github.com/ReinfyTeam/
 *
 *
 */

declare(strict_types=1);

namespace ReinfyTeam\FancyPlayerCount;

use pocketmine\event\Listener;
use pocketmine\event\server\QueryRegenerateEvent;
use pocketmine\plugin\PluginBase;
use function count;

class Main extends PluginBase implements Listener {
    public function onQuery(QueryRegenerateEvent $ev) : void { 
        // thanks for zeqa to sharing this code.
		$online = count($this->getServer()->getOnlinePlayers());
		$ev->getQueryInfo()->setPlayerCount($online);
		$ev->getQueryInfo()->setMaxPlayerCount($online + 1);
	}
	
	public function onEnable() :void {
	    $this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
}
