<?php
declare(strict_types=1);

$root = dirname(__DIR__) .DIRECTORY_SEPARATOR;

define('APP_PATH', $root.'logic'.DIRECTORY_SEPARATOR);
define('ENV', $root);
define('VIEW', $root.'view'.DIRECTORY_SEPARATOR);

include_once VIEW.'view.php';

// get the return for details
$details = getDetails();
// if array empty
if(empty($details)){
    echo "<div class='error' >Enter values please</div>";
}
else{
    // include logic
    include_once APP_PATH.'mail.php';
}






