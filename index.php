<?php
require 'vendor/autoload.php';
// require_once './autoload.php';
include_once './src/dbConnect.php';
use Jin\Database;
use Jin\Framework;
session_start();
$includeIndex = 0;
// include_once './templates/layouts/html_layout.inc.php';
//S'utilise comme : 
// $_SESSION["isLogged"] = false;
// getLayout('html');
// getPage();

$db = new Database($connection);
$framework = new Framework();
$framework->getLayout();
$framework->getPage();


// var_dump($db->table('contacts')->post(['post' => ["surname" => "Alexandre", "name" => "Delaistre", "status" => "online"]])->getQuery());

// //Pour ajouter une donnée
// // var_dump($db->table('contacts')->post(['post' => ["surname" => "Alexandre", "name" => "Delaistre", "status" => "online"]])->do());

// // var_dump($db->table("contacts")->get([])->do());
// //Pour recuperer les données (instance de PDOStatement)
// $stmt = $db->table("contacts")->get([])->do();
// var_dump($stmt->fetchAll());

// // 
// // var_dump($db->table("contacts")->update(['post' => ['surname' => "Valentin"], "filters" => ["name" => "Delaistre", "status" => "offline"]])->do());

// $db->delete(["filters" => ["surname" => "Alexandre"]])->do();