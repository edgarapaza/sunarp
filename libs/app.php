<?php
class App
{
    function __construct()
    {
        #echo "<p>Pagina inicial del proyecto</p>";

        $url = isset($_GET['url']) ? $_GET['url'] : null;

        #echo $url;
        $url= rtrim($url,'/');
        $url= explode('/',$url);

        # Cuando se ingresa sin definir controlador
        if(empty($url[0]))
        {
            $archivoController ='controllers/main.php';
            require_once $archivoController;
            $controller= new Main();
            $controller->loadModel('main');
            $controller->render();
            return false;
        }

        $archivoController ='controllers/'. $url[0] .'.php';
        
        if(file_exists($archivoController))
        {
            require_once $archivoController;
            
            $controller = new $url[0];
            $controller->loadModel($url[0]);
            
            $nparam =sizeof($url);

            if($nparam > 1){
                if($nparam > 2){
                    $param = [];
                    for($i=2;$i<$nparam;$i++){
                        array_push($param, $url[$i]);
                    }
                    $controller->{$url[1]}($param);
                
                }
                $controller->{$url[1]}();
            }else{
                $controller->render();
            }

            
        }else{
            require_once "./controllers/error.php";
            $controller = new Error1();
        }

        
    }
}
?>