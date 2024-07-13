<?php
namespace App\Core;
class View
{
    public static function run(string $viewName,array $categores=[])
    {
        $viewPath = ROOT_PATH.'/views/';
        $template = $viewPath.$viewName.'.php';
        if(file_exists($template)){
            require $template;
            exit();
        }
        echo '<h1>Template not found!</h1>';
    }    
}