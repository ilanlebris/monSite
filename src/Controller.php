<?php

class Controller{

    private $view;

    public function __construct(View $view){
        $this->view = $view;
    }

    public function getView(){
        return $this->view;
    }

    public function showHome(){
        $this->view->prepareHomePage();
    }
    
    public function showMonParcours() {
        $this->view->prepareMonParcours();
    }

    public function showMesExperiencesPro(){
        $this->view->prepareMesExperiencesPro();
    }

    public function showMesProjets(){
        $this->view->prepareMesProjets();
    }

    public function showMonCV(){
        $this->view->prepareMonCV();
    }

    public function showContact(){
        $this->view->prepareContact();
    }
}