<?php

class Car implements TransportInterface {

	public $wheelCount = 4;
	private $doorCount = 4;
	public $weigth = 900;
	public $engineVolume = 3;

	function __construct($wheelCount, $doorCount, $weigth, $engineVolume) {
		
	$this->$wheelCount = $wheelCount;
	$this->$doorCount = $doorCount;
	$this->$weigth = $weigth;
	$this->$engineVolume = $engineVolume;

		echo "New car was created<br>";
	}

	function __get($parameter) {
		return $this->$parameter;
	}

	function __set($parameter, $value) {
		// echo "Someone is changing $parameter to $value";
		// if ($parameter == "doorCount" && $value > 5) {
		// 	$this->doorCount = $value;
		// }
		$this->$parameter = $value;
	}

	function __toString() {
		$string = "whatever";
		return $string;
	}

	function __destruct() {
		echo "This car was destroyed.<br>";
	}

	public function getWheels() {
		return $this->wheelCount;
	}


	public function go() {
		echo "This car is going...<br>";
	}

	public function stop() {
		echo "This car is stopped...<br>";
	}

	public function barakas() {
		echo "This car is broken<br>";
	}

	public function getWeight() {
		echo "weigth is " . $this->$weight; 
	}

}