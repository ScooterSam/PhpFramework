<?php
/**
 * Created by PhpStorm.
 * User: Sam
 * Date: 06/09/2017
 * Time: 8:55 PM
 */

namespace App;


class TestClass
{

	public $string = "hi";


	public function set($string)
	{
		$this->string = $string;

	}

	public function get()
	{
		return $this->string;
	}

}