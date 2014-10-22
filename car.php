<?php
include('CarInterface.php');

class Engine implements EngineInterface
{
	private $hp;
	public function __construct($hp)
	{
		$this->hp = $hp;
	}
	public function getHP()
	{
		return $this->hp;
	}
}
class Car implements RaceCarInterface
{
	public $model;
	public $engine;
	
	public function __construct($model, $hp)
	{
		$this->model = $model;
		$this->engine = new Engine($hp);
	}
	public function getAcceleration()
	{
		$hp = $this->engine->getHP();

		return 1000/$hp;
	}
	
	public function getVMax()
	{
		$hp = $this->engine->getHP();
		return $hp*1.5;
	}
	public function getModel()
	{
		return $this->model;
	}
	
}
