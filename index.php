<?php
 //echo password_hash('admin', PASSWORD_DEFAULT);
 //exit;
//optener el achivo de configuracion
require_once 'config/Config.php';
require_once 'config/Helpers.php';
//echo $_GET['url'];
$ruta = (!empty($_GET['url']))? $_GET['url']: 'home/index';
//echo $ruta;
$array = explode('/', $ruta);
//print_r($array);
$controller = ucfirst($array[0]);
$metodo = 'index';
$parametro = '';
if (!empty($array[1])) {
    if ($array[1] != '') {
        $metodo = $array[1];
        
    }
}
if (!empty($array[2])) {
    if ($array[2] != '') {
        for ($i=2; $i < count($array); $i++){
            $parametro .=$array[$i] . ',';
        }
        $parametro = trim($parametro, ',');
    }
}
//echo $parametro;
require_once 'config/app/Autoload.php';
$dirController = 'controllers/' . $controller . '.php';
if (file_exists($dirController)) {
    require_once $dirController;
    $controller = new $controller();
    if (method_exists($controller, $metodo)) {

        $controller->$metodo($parametro);
    }else {
        echo 'no exite el metodo';

    }
}else {
    echo 'no exite el controlador';
}
?>