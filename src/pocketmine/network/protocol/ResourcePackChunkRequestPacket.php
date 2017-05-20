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

namespace pocketmine\network\protocol;

#include <rules/DataPacket.h>

class ResourcePackChunkRequestPacket extends DataPacket{
	const NETWORK_ID = Info::RESOURCE_PACK_CHUNK_REQUEST_PACKET;

	public $packId;
	public $chunkIndex;

	public function decode(){
		$this->packId = $this->getString();
		$this->chunkIndex = $this->getLInt();
	}

	public function encode(){
		$this->reset();
		$this->putString($this->packId);
		$this->putLInt($this->chunkIndex);
	}

}
