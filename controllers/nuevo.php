<?php

class Nuevo extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function render()
    {
        $this->view->render('nuevo/index');
        $this->mensaje = "";
    }

    function registrarNuevaAcreditacion()
    {       
        //Datos Acreditacion
        $nomacreditado  = $_POST['nomacreditado'];
		$dniacreditado  = $_POST['dniacreditado'];
		$direccion      = $_POST['direccion'];
        $anio           = $_POST['anio'];
        //Datos de la Escritura
		$tipoescritura  = $_POST['tipoescritura'];
		$numescritura   = $_POST['numescritura'];
		$fechaescritura = $_POST['fechaescritura'];
		$otorgante      = $_POST['otorgante'];
		$favorecido     = $_POST['favorecido'];
		$notario        = $_POST['notario'];
		$protocolo      = $_POST['protocolo'];
        $folio          = $_POST['folio'];
		$departamento   = $_POST['departamento'];
		$provincia      = $_POST['provincia'];
		$distrito       = $_POST['distrito'];
		$zonal          = $_POST['zonal'];
        $oficina        = $_POST['oficina'];
        $idpersonal     = 1000; //$_POST['idpersonal'];
        

        $mensaje = "";
        
        if($this->model->insertEscritura([
            'nomacreditado'  => $nomacreditado,
            'dniacreditado'  => $dniacreditado,
            'direccion'      => $direccion,
            'anio'           => $anio,
            'zonal'          => $zonal,
            'idpersonal'     => $idpersonal,
            'tipoescritura'  => $tipoescritura,
            'numescritura'   => $numescritura,
            'fechaescritura' => $fechaescritura,
            'otorgante'      => $otorgante,
            'favorecido'     => $favorecido,
            'notario'        => $notario,
            'protocolo'      => $protocolo,
            'folio'          => $folio,
            'departamento'   => $departamento,
            'provincia'      => $provincia,
            'distrito'       => $distrito,
            'oficina'        => $oficina
        ]))
        {
            $mensaje = "<div class='alert alert-success'>Acreditación guardada</div>";
        }else{
            $mensaje = "<div class='alert alert-danger'>No se registraron los datos de la escritura</div>";
        }

        $this->view->mensaje = $mensaje;
        $this->render();

    }
}