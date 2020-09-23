<?php
include_once 'models/escritura.php';

class ConsultaModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
    
    #Aqui va el CRUD
    public function get()
    {
        $items = [];
        try{
            $query = $this->db->connect()->query('SELECT idacred,nomAcred,dniAcred,direccion,anio,idzonal,idpersonal,tipoesc,numesc,fecesc,otorgesc,favoresc,notario,protocolo,folio,departamento,provincia,distrito,oficina,fecCreate,codeqr FROM acreditar ORDER BY idacred DESC');

            while($row = $query->fetch())
            {
                $item = new escritura();
                $item->idacred      = $row['idacred'];
                $item->nomAcred     = $row['nomAcred'];
                $item->dniAcred     = $row['dniAcred'];
                $item->direccion    = $row['direccion'];
                $item->anio         = $row['anio'];
                $item->idzonal      = $row['idzonal'];
                $item->idpersonal   = $row['idpersonal'];
                
                $item->tipoesc      = $row['tipoesc'];
                $item->numesc       = $row['numesc'];
                $item->fecesc       = $row['fecesc'];
                $item->otorgesc     = $row['otorgesc'];
                $item->favoresc     = $row['favoresc'];
                $item->notario      = $row['notario'];
                $item->protocolo    = $row['protocolo'];
                $item->folio        = $row['folio'];

                $item->departamento = $row['departamento'];
                $item->provincia    = $row['provincia'];
                $item->distrito     = $row['distrito'];
                $item->oficina      = $row['oficina'];
                $item->codeqr       = $row['codeqr'];

                array_push($items, $item);
            }
            

            return $items;
        }catch(PDOException $e){
            echo $e->getMessage();
            //return [];
        }
    }
}