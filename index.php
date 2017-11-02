<?php

$start = microtime(true);

require ("vendor/autoload.php");

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();


// require ("classes/TransportInterface.php");
// require ("classes/Car.php");
// require ("classes/ElectricCar.php");


// $petro_automobilis = new Car(4,2,1500,1199);
// $jono_automobilis = new ElectricCar(4,2,1500,1199);

// $petro_automobilis->go();
// $jono_automobilis->go();

$db = new Database();

// print_r($db->select("SELECT * FROM vartotojai WHERE vardas = 'tutu'"));

// print_r($db->select("SELECT * FROM vartotojai WHERE vardas = :username", ["username" => "tutu"]));

// echo $db->insert("INSERT INTO vartotojai (vardas, slaptazodis) VALUES (:username, :password)", ["username" => "Antanas-".rand(1000,9999), "password" => password_hash ("trydas", PASSWORD_DEFAULT)]);

$users = new User($db);

print_r($users->addUser("tutu", "labas"));

echo "<div style='position:absolute; left:0; bottom:0; padding:10px;background:black;color:white;'>";
echo "It took " .  round((microtime(true) - $start)*1000, 2) . " to load page<br>";
echo round(memory_get_peak_usage()/(1024*1024), 2) . "mb";
echo "</div>";