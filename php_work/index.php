<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'config.php';


require_once 'Core/MySql.php';
require_once 'Core/Model.php';

require_once 'Entity/Department.php';
require_once 'Model/DepartmentModel.php';




use Model\DepartmentModel;

$department = new DepartmentModel();
$departments = $department->getAllDepartments();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php foreach($departments as $department):?>

        <?php echo $department->getName() ?><br/>
    <?php endforeach?>
</body>
</html>