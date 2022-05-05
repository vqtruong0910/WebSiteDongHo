<?php
function checkPrivilege($uri = false) {
    $uri = $uri != false ? $uri : $_SERVER['REQUEST_URI'];
   // var_dump($uri);exit;
    if(empty($_SESSION['current_user']['privileges'])){
        return false;
    }
    $privileges = $_SESSION['current_user']['privileges'];
    $privileges = implode("|", $privileges);
    preg_match('/index\.php\?menu=dashboard$|\?menu=dashboard$|' . $privileges . '/', $uri, $matches);
    return !empty($matches);
}



?>