<?php 

require_once("View.php");
require_once("Controller.php");

class Router{

    public function main(){
        
        $view = new View($this,);
        $controller = new Controller($view);
        $param_url = array();
        $server_path = "";

        if(key_exists('PATH_INFO', $_SERVER)){
            $server_path = substr($_SERVER['PATH_INFO'],1);
            if(strlen($server_path) >= 1 && $server_path[-1] == "/"){
                $server_path = substr($server_path, 0, -1);
            }
            $param_url = explode("/", $server_path);
        }

        if(!empty($server_path)){
            if($param_url[0] === "accueil"){
                $controller->showHome();
            }
            elseif($param_url[0] === "action"){
                if($param_url[1] === "monParcours"){
                    $controller->showMonParcours();
                } 
                elseif($param_url[1] === "mesExperiences"){
                    $controller->showMesExperiencesPro();
                }
                elseif($param_url[1] === "mesProjets"){
                    $controller->showMesProjets();
                }
                elseif($param_url[1] === "monCV"){
                    $controller->showMonCV();
                }
                else{
                    $controller->showContact();
                }
            }
            else{
                $controller->showHome();
            }
        }
        else {
            $controller->showHome();
        }
    }
}