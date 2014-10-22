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
	protected $engine;
	
	public function __construct($model, $engine)
	{
		$this->model = $model;
		$this->engine = $engine;
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
/*
//Wykorzystując wzorzec projektowy Dependency Injection dokonaj takiej refaktoryzacji klasy Car,
 //aby bez ingerencji w jej kod źródłowy, możliwa była zmiana silnika, przez co uzyskanie nowych osiągów.
class Config {
    private static $instance;
    private static $config = array(
        "contact_email"     =>  "jakub.kanclerz@gmail.com",
        "website"           =>  "www.jkan.pl",
    );
 
    private function __construct() {}
    private function __clone() {}
 
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new Config();
        }

        return self::$instance;
    }

    public function setEmail($email) {
        $this->config["contact_email"] = $email;
    }

    public function getEmail() {
        return $this->config["contact_email"];
    }
}
 
$conf1 = Config::getInstance();
echo $conf1->getEmail();

$conf2 = Config::getInstance();
$conf2->setEmail("my_new_email@gmail.com");
*/

