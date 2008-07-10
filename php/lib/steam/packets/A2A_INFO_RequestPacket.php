<?php
/**
 * @author Sebastian Staudt
 * @package Steam Interface Package (PHP)
 * @subpackage SteamPacket
 * @version $Id: A2A_INFO_RequestPacket.php 19 2008-02-28 10:09:21Z koraktor $
 */

/**
 * @package Steam Interface Package (PHP)
 * @subpackage SteamPacket
 */
class A2A_INFO_RequestPacket extends SteamPacket
{	
	/**
	 * 
	 */
	public function __construct()
	{
		parent::__construct(SteamPacket::A2A_INFO_REQUEST_HEADER, "Source Engine Query");
	}
}
?>