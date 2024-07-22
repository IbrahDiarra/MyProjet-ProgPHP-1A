<?php
        require_once('connect.php');
        require 'dompdf/autoload.inc.php';
        use Dompdf\Dompdf;


        $dompdf = new Dompdf();
        ob_start();
        require('my_certif.php');
        $html=ob_get_contents();
        ob_get_clean();

        $dompdf->loadHtml($html);

        $dompdf->setPaper('A4','portrait');

        $dompdf->render();

        $dompdf->stream('impression.pdf',['Attachement'=>false]);

        $outpout=$dompdf->output();
        file_put_contents("Attestation.pdf",$output);
?>