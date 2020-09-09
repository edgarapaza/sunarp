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
            $query = $this->db->connect()->query('SELECT idacred,nomAcred,dniAcred,direccion,anio,idzonal,idpersonal,tipoesc,numesc,fecesc,otorgesc,favoresc,notario,protocolo,folio,departamento,provincia,distrito,oficina,fecCreate,codeqr FROM acreditar');

            while($row = $query->fetch())
            {
                $item = new escritura();
                $item->nomAcred = $row['nomAcred'];
                $item->dniAcred = $row['dniAcred'];
                $item->direccion = $row['direccion'];
                $item->anio = $row['anio'];
                $item->numesc = $row['numesc'];
                $item->codeqr = $row['codeqr'];

                array_push($items, $item);
            }
            

            return $items;
        }catch(PDOException $e){
            echo $e->getMessage();
            //return [];
        }
    }
}