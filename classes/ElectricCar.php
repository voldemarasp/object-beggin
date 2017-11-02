<?php 

class ElectricCar extends Car {

	public $wheelCount = 4;
	public $doorCount = 4;
	public $weigth = 900;
	public $engineVolume = 3;
	public $maxRange;
	public $effSpeed;
	public $chargeTime;

	public function charge() {
		echo "Charging...<br>";
	} 

}
