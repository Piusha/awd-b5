<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

//phpinfo(); die;

//include_once './Model/User.php';
//include './Model/User.php';
//require './Model/User.php';
require_once 'Core/Model.php';
require_once 'Model/User.php';
require_once 'Model/Item.php';
require_once 'Entity/UserEntity.php';
require_once 'Lib/ApiExecutor.php';

use Model\User;


//use Model\Item;
// $me = new User('Test','Test1');
// echo $me->getFullName();

// echo $me->getTableName()."<br/>";


// /*$me->age = 200;
// echo $me->getAge() ."<br/>";
// $me->age  = 300;
// echo $me->getAge()."<br/>";*/

// $it =  new Item();

// echo $it->getTableName()."<br/>";


$userM = new User();

$p = isset($_GET['p'])?$_GET['p']:1;
$users = $userM->getAllUsers($p);


//print_r($users);
//die;
?>
ss
<html>

<body>
    <div>
        <ul>
            <?php foreach ($users['users'] as $user):?>

                <li> 
                <img src="<?php echo $user->avatar;?>" width="100" height="100" /></br>
                <?php echo $user->getFullName()?>
                
                </li>
            <?php endforeach?>   
        </ul>


        <div class="pagination">
            <ul>
                <?php for($i=1; $i<= $users['total_pages'];$i++): ?>

                <li> <a href="?p=<?php echo $i?>"><?php echo $i?> 
                
                </a></li>
                <?php endfor?>   
            
            </ul>
        </div>

    </div>
</body>
</html>
