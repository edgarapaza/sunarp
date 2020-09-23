<?php    

class CodeQR
{
    function GenerateCodeQr($codigo)
    {
        #echo "<h1>PHP QR Code</h1><hr/>";

        # Colocando datos de manera absoluta
        $data  = $codigo;
        
        $size  = 4;
        $level = 'H';
    
        //set it to writable location, a place for temp generated PNG files
        $PNG_TEMP_DIR = .DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;
        
        //html PNG location prefix
        $PNG_WEB_DIR = 'temp/';
        
        include "qrlib.php";    
        
        //ofcourse we need rights to create temp dir
        if (!file_exists($PNG_TEMP_DIR))
            mkdir($PNG_TEMP_DIR);
        
        
        $filename = $PNG_TEMP_DIR.'test.png';

        
        //processing form input
        //remember to sanitize user input in real-life solution !!!
        $errorCorrectionLevel = 'L';
        if (isset($level) && in_array($level, array('L','M','Q','H')))
            $errorCorrectionLevel = $level;    

        $matrixPointSize = 6;


        if (isset($size))
            $matrixPointSize = min(max((int)$size, 1), 10);


        if (isset($data)) { 
        
            //it's very important!
            if (trim($data) == '')
                die('La data esta vacia! <a href="?">back</a>');
                
            // user data
            $filename = $PNG_TEMP_DIR.'test'.md5($data.'|'.$errorCorrectionLevel.'|'.$matrixPointSize).'.png';
            QRcode::png($data, $filename, $errorCorrectionLevel, $matrixPointSize, 2);    
            
        } else {    
        
            //default data
            echo 'You can provide data in GET parameter: <a href="?data=like_that">like that</a><hr/>';    
            QRcode::png('PHP QR Code :)', $filename, $errorCorrectionLevel, $matrixPointSize, 2);    
            
        }    
            
        //display generated file
        #echo '<img src="'.$PNG_WEB_DIR.basename($filename).'" /><hr/>';  
        /*
        //config form
        echo '<form action="index.php" method="post">
            Data:&nbsp;<input name="data" value="'.(isset($data)?htmlspecialchars($data):'PHP QR Code :)').'" />&nbsp;
            ECC:&nbsp;<select name="level">
                <option value="L"'.(($errorCorrectionLevel=='L')?' selected':'').'>L - smallest</option>
                <option value="M"'.(($errorCorrectionLevel=='M')?' selected':'').'>M</option>
                <option value="Q"'.(($errorCorrectionLevel=='Q')?' selected':'').'>Q</option>
                <option value="H"'.(($errorCorrectionLevel=='H')?' selected':'').'>H - best</option>
            </select>&nbsp;
            Size:&nbsp;<select name="size">';
            
        for($i=1;$i<=10;$i++)
            echo '<option value="'.$i.'"'.(($matrixPointSize==$i)?' selected':'').'>'.$i.'</option>';
            
        echo '</select>&nbsp;
            <input type="submit" value="GENERATE"></form><hr/>';
          */  
        // benchmark
        #QRtools::timeBenchmark();       
        
        return $PNG_WEB_DIR.basename($filename);
    }
    
}

// $qr = new CodeQR();
// echo $qr->GenerateCodeQr(5);