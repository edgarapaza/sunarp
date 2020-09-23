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
        $nomacreditado  = trim(strtoupper($_POST['nomacreditado']));
		$dniacreditado  = trim(strtoupper($_POST['dniacreditado']));
		$direccion      = trim(strtoupper($_POST['direccion']));
        $anio           = trim(strtoupper($_POST['anio']));
        //Datos de la Escritura
		$tipoescritura  = trim(strtoupper($_POST['tipoescritura']));
		$numescritura   = trim(strtoupper($_POST['numescritura']));
		$fechaescritura = trim(strtoupper($_POST['fechaescritura']));
		$otorgante      = trim(strtoupper($_POST['otorgante']));
		$favorecido     = trim(strtoupper($_POST['favorecido']));
		$notario        = trim(strtoupper($_POST['notario']));
		$protocolo      = trim(strtoupper($_POST['protocolo']));
        $folio          = trim(strtoupper($_POST['folio']));
		$departamento   = trim(strtoupper($_POST['departamento']));
		$provincia      = trim(strtoupper($_POST['provincia']));
		$distrito       = trim(strtoupper($_POST['distrito']));
		$zonal          = trim(strtoupper($_POST['zonal']));
        $oficina        = trim(strtoupper($_POST['oficina']));
        $idpersonal     = 1000; //trim(strtoupper($_POST['idpersonal']));
        

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