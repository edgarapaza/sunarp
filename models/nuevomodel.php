<?php

class NuevoModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
    
    #Aqui va el CRUD
    public function insertasdasd($datos)
    {
        try{
            $query = $this->db->Connect()->prepare('INSERT INTO prueba (matricula,nombre,apellidos) VALUES (:matricula,:nombre,:apellidos);');
            $query->execute(['matricula' => $datos['matricula'],'nombre'=>$datos['nombre'],'apellidos'=>$datos['apellidos']]);
            return true;
        }catch(PDOException $e){    
            //echo $e->getMessage();
            return false;
        }
    }

    public function insertEscritura($datos)
    {   
        require "phpqrcode/index.php";
        $qr = new CodeQR();
        $imagen =  $qr->GenerateCodeQr($datos['dniacreditado']);
        $new_imagen = "models/phpqrcode/".$imagen;
        //echo $new_imagen;
        
        try{
            $query = $this->db->connect()->prepare('INSERT INTO acreditar (nomAcred,dniAcred,direccion,anio,idzonal,idpersonal,tipoesc,numesc,fecesc,otorgesc,favoresc,notario,protocolo,folio,departamento,provincia,distrito,oficina,fecCreate,codeqr) VALUES (:nomAcred,:dniAcred,:direccion,:anio,:idzonal,:idpersonal,:tipoesc,:numesc,:fecesc,:otorgesc,:favoresc,:notario,:protocolo,:folio,:departamento,:provincia,:distrito,:oficina,now(),:codeqr)');
            $query->execute([
                'nomAcred'    =>$datos['nomacreditado'],
                'dniAcred'    =>$datos['dniacreditado'],
                'direccion'   =>$datos['direccion'],
                'anio'        =>$datos['anio'],
                'idzonal'     =>$datos['zonal'],
                'idpersonal'  =>$datos['idpersonal'],
                'tipoesc'     =>$datos['tipoescritura'],
                'numesc'      =>$datos['numescritura'],
                'fecesc'      =>$datos['fechaescritura'],
                'otorgesc'    =>$datos['otorgante'],
                'favoresc'    =>$datos['favorecido'],
                'notario'     =>$datos['notario'],
                'protocolo'   =>$datos['protocolo'],
                'folio'       =>$datos['folio'],
                'departamento'=> $datos['departamento'],
                'provincia'   => $datos['provincia'],
                'distrito'    => $datos['distrito'],
                'oficina'     => $datos['oficina'],
                'codeqr'      => $new_imagen
            ]);
                
            return true;
        }catch(PDOException $e){    
            //echo $e->getMessage();
            return false;
        }
        
    }
}
