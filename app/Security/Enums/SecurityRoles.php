<?php

namespace App\Security\Enums;

/**
 * Class Roles
 *
 * This class define static roles
 *
 * @package namespace App\Security\Enums
 * @author  Estarly Olivar
 */
class SecurityRoles
{
	/**
     * Developer
     *
     * @var int
     */
	public static $developer = 1;

	/**
     * Super Admin
     *
     * @var int
     */
	public static $super_admin = 2;

	/**
	 * Branch
	 *
	 * @var int
	 */
	public static $branch = 3;
	
	/**
	 * Client
	 *
	 * @var int
	 */
	public static $client = 4;
	

}
