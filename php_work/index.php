<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'config.php';


require_once 'Core/MySql.php';
require_once 'Core/Model.php';
require_once 'Model/Department.php';


use Model\Department;

$department = new Department();
$departments = $department->getAllDepartments();

echo "<pre/>";
print_r($departments);
?>