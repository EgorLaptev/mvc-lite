<?php 

namespace Core;

require_once 'core/Model.php';
new Model();

$view   = 'project/views' . $_SERVER['REQUEST_URI'] . '.php';
$layout = 'project/layouts/default.php';

if(!file_exists($view)) $view = 'project/views/errors/error404.php';

$content = file_get_contents($view);

if(!file_exists($layout)) echo "Шаблон <b>$layout</b> не найден";
else require $layout;


?>