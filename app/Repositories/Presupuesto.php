<?php

namespace App\Repositories;

class Presupuesto extends HttpRequestClass
{

	public function __construct()
	{
		parent::__construct();
	}

	public function getJson()
	{
		return $this->get('release1/C_pat/getCatalogoPOA');
	}

}