<?php
    require_once "App/Services/Router/Route.php";
    use App\Services\Router\AltoRouter;
    require_once "App/Services/Controller/path.php";
    require_once "App/API/Classes/Users.php";

    $router = new AltoRouter();


    $router->map(GET,'/', 'homePage');

    $match = $router->match();
    if (is_array($match)) {
        if (is_callable($match['target']))
            call_user_func_array($match['target'], $match['params']);
        else if (is_array($match['target']) && file_exists($adminDir."/Controllers/".$match['target'][0].'.php')) {
            require_once $adminDir . "/Controllers/" . $match['target'][0] . '.php';
            $nameCl = $match['target'][0];
            $nameFunc = $match['target'][1];
            $controller = new $nameCl();
            $controller->$nameFunc($match['params']);
        }
    } else {
        echo "404";
    }
