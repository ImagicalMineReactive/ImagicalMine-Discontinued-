<?php

/*
 *
 *  _                       _           _ __  __ _
 * (_)                     (_)         | |  \/  (_)
 *  _ _ __ ___   __ _  __ _ _  ___ __ _| | \  / |_ _ __   ___
 * | | '_ ` _ \ / _` |/ _` | |/ __/ _` | | |\/| | | '_ \ / _ \
 * | | | | | | | (_| | (_| | | (_| (_| | | |  | | | | | |  __/
 * |_|_| |_| |_|\__,_|\__, |_|\___\__,_|_|_|  |_|_|_| |_|\___|
 *                     __/ |
 *                    |___/
 *
 * This program is a third party build by ImagicalMine.
 *
 * PocketMine is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author ImagicalMine Team
 * @link http://forums.imagicalmine.net/
 *
 *
*/


namespace pocketmine\network\protocol\types;


interface InventoryNetworkIds{

	const INVENTORY = -1;
	const CONTAINER = 0;
	const WORKBENCH = 1;
	const FURNACE = 2;
	const ENCHANTMENT = 3;
	const BREWING_STAND = 4;
	const ANVIL = 5;
	const DISPENSER = 6;
	const DROPPER = 7;
	const HOPPER = 8;
	const CAULDRON = 9;
	const MINECART_CHEST = 10;
	const MINECART_HOPPER = 11;
	const HORSE = 12;
}
