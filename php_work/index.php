<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);


//include_once './Model/User.php';
//include './Model/User.php';
//require './Model/User.php';
require_once 'Core/Model.php';
require_once 'Model/User.php';
require_once 'Model/Item.php';


use Model\User;
use Model\Item;
$me = new User('Test','Test1');
echo $me->getFullName();

echo $me->getTableName()."<br/>";


/*$me->age = 200;
echo $me->getAge() ."<br/>";
$me->age  = 300;
echo $me->getAge()."<br/>";*/

$it =  new Item();

echo $it->getTableName()."<br/>";