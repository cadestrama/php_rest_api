<?php
declare(strict_types=1);


header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$root= dirname(__DIR__).DIRECTORY_SEPARATOR.'restapi';

DEFINE('VIEW_PATH',$root.DIRECTORY_SEPARATOR.'view'.DIRECTORY_SEPARATOR);
DEFINE('CONTROLLER_PATH',$root.DIRECTORY_SEPARATOR.'controller'.DIRECTORY_SEPARATOR);
define('CONFIG_PATH',$root.DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR);
define('MODEL_PATH',$root.DIRECTORY_SEPARATOR.'models'.DIRECTORY_SEPARATOR);
define('API_PATH',$root.DIRECTORY_SEPARATOR.'api'.DIRECTORY_SEPARATOR.'post'.DIRECTORY_SEPARATOR);



require MODEL_PATH.'Post.php';

function getRequest(){
    
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    } else{

    }


    return $id;
}

Post::singlePost(VIEW_PATH,(isset($_GET['id']))? $_GET['id'] : die());












