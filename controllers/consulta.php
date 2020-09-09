<?php

class Consulta extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->escritura = [];
    }

    function render()
    {
        $escritura =  $this->model->get();
        $this->view->escritura = $escritura;

        $this->view->render('consulta/index');
    }

    function verAlumno($param = null)
    {
        var_dump($param);
    }

    function actualizarAlumno()
    {

    }

    function eliminarAlumno()
    {
        
    }


}