<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Upload extends BaseConfig
{
	/**
	 * ---------------------------------------------------------------
	 * PUBLIC DIRECTORY
	 * ---------------------------------------------------------------
	 * 
	 * Variabel ini berisi nama beserta path yang mengarah 
	 * pada direktori public yang digunakan untuk upload file public
	 * 
	 * @var string
	 */
	public $publicDirectory = ROOTPATH . 'public/';
}
