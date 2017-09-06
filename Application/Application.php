<?php
/**
 * Created by PhpStorm.
 * User: Sam
 * Date: 06/09/2017
 * Time: 8:47 PM
 */

namespace App;


use function class_exists;
use Exception;

class Application
{

	public $classes = [];

	/**
	 * Load all the default application classes.
	 */
	public function loadClasses()
	{
		$classes       = include __DIR__ . '/Config/ApplicationConfig.php';
		$this->classes = $classes['classes'];
	}

	/**
	 * Initialize all classes so we can use them when needed.
	 *
	 * @throws Exception
	 */
	public function initialize()
	{
		$this->loadClasses();

		foreach ($this->classes as $class) {
			$this->classes[$class] = new $class();
		}
	}

	/**
	 * Add a new class into the application at any point
	 *
	 * @param $class
	 *
	 * @throws Exception
	 */
	public function add($class)
	{
		if (!class_exists($class)) {
			throw new Exception('Class does not exist.');
		}

		if ($class != null) {
			array_push($this->classes, new $class());
		}
	}

	/**
	 * Pull a class from the application
	 *
	 * @param $class
	 *
	 * @return mixed
	 */
	public function get($class)
	{
		return $this->classes[$class];
	}

}