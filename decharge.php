<?php  

require("fpdf.php");

$pdf = new FPDF();


if(isset($_POST['create'])) {
    $name = $_POST['name'];
    $fonction = $_POST['fonction'];
    $affectation = $_POST['affectation'];
    $product = $_POST['product'];
    $serial = $_POST['serial'];
    $date = $_POST['date'];
    $societe = $_POST['societe'];
}



if ($societe=="mojazine"){


    $pdf->AddPage();
    
    $pdf->SetAutoPageBreak(true, 10);
    $pdf->SetFont('Arial', '', 12);
    $pdf->SetTopMargin(10);
    $pdf->SetLeftMargin(10);
    $pdf->SetRightMargin(10);
    
    
    
    $pdf->Image('mojazine.png', 10, 10, 50);
    /* --- Text --- */
    $pdf->Text(167, 43, 'Le : '.$date);
    /* --- Text --- */
    $pdf->SetFont('Arial', 'BU', 18);
    $pdf->Text(90, 65, utf8_decode("Décharge"));
    /* --- Text --- */
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Text(11, 91, utf8_decode('Je soussigne, M. : '.$name));
    /* --- Text --- */
    $pdf->Text(11, 101, utf8_decode('Employé en qualité de : '.$fonction));
    /* --- Text --- */
    $pdf->Text(11, 111, utf8_decode('Affecté à : '.$affectation));

    $pdf->Text(11, 130, utf8_decode('Certifie avoir reçu le dit : '.$product));

    $pdf->Text(11, 139, utf8_decode('Numéro de serie : '.$serial));

    $pdf->Text(11, 148, utf8_decode("qui sera en ma possesion pour ne m'en servir qu'aux besoins de la société."));

    $pdf->Text(11, 167, utf8_decode("En outre, je m'engage à déclarer le vol ou la perte dans les plus brefs délais, et"));
    $pdf->Text(11, 176, utf8_decode("de procéder en cas de démissions ou de licenciement à sa restitution à la"));
    $pdf->Text(11, 185, utf8_decode("direction."));

    $pdf->Text(11, 210, utf8_decode('Signature:'));
    
    
    $pdf->Output('mojazine.pdf','I');


}elseif($societe=="abrar"){
    $pdf->AddPage();
    
    $pdf->SetAutoPageBreak(true, 10);
    $pdf->SetFont('Arial', '', 12);
    $pdf->SetTopMargin(10);
    $pdf->SetLeftMargin(10);
    $pdf->SetRightMargin(10);
    
    
    
    $pdf->Image('invest.png', 10, 10, 30);
    /* --- Text --- */
    $pdf->Text(167, 43, 'Le : '.$date);
    /* --- Text --- */
    $pdf->SetFont('Arial', 'BU', 18);
    $pdf->Text(90, 65, utf8_decode("Décharge"));
    /* --- Text --- */
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Text(11, 91, utf8_decode('Je soussigne, M. : '.$name));
    /* --- Text --- */
    $pdf->Text(11, 101, utf8_decode('Employé en qualité de : '.$fonction));
    /* --- Text --- */
    $pdf->Text(11, 111, utf8_decode('Affecté à : '.$affectation));

    $pdf->Text(11, 130, utf8_decode('Certifie avoir reçu le dit : '.$product));

    $pdf->Text(11, 139, utf8_decode('Numéro de serie : '.$serial));

    $pdf->Text(11, 148, utf8_decode("qui sera en ma possesion pour ne m'en servir qu'aux besoins de la société."));

    $pdf->Text(11, 167, utf8_decode("En outre, je m'engage à déclarer le vol ou la perte dans les plus brefs délais, et"));
    $pdf->Text(11, 176, utf8_decode("de procéder en cas de démissions ou de licenciement à sa restitution à la"));
    $pdf->Text(11, 185, utf8_decode("direction."));

    $pdf->Text(11, 210, utf8_decode('Signature:'));
    
    
    $pdf->Output('abrar.pdf','I');
}elseif($societe=="bitumed"){
    $pdf->AddPage();
    
    $pdf->SetAutoPageBreak(true, 10);
    $pdf->SetFont('Arial', '', 12);
    $pdf->SetTopMargin(10);
    $pdf->SetLeftMargin(10);
    $pdf->SetRightMargin(10);
    
    
    
    $pdf->Image('bitumed.png', 10, 10, 30);
    /* --- Text --- */
    $pdf->Text(167, 43, 'Le : '.$date);
    /* --- Text --- */
    $pdf->SetFont('Arial', 'BU', 18);
    $pdf->Text(90, 65, utf8_decode("Décharge"));
    /* --- Text --- */
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Text(11, 91, utf8_decode('Je soussigne, M. : '.$name));
    /* --- Text --- */
    $pdf->Text(11, 101, utf8_decode('Employé en qualité de : '.$fonction));
    /* --- Text --- */
    $pdf->Text(11, 111, utf8_decode('Affecté à : '.$affectation));

    $pdf->Text(11, 130, utf8_decode('Certifie avoir reçu le dit : '.$product));

    $pdf->Text(11, 139, utf8_decode('Numéro de serie : '.$serial));

    $pdf->Text(11, 148, utf8_decode("qui sera en ma possesion pour ne m'en servir qu'aux besoins de la société."));

    $pdf->Text(11, 167, utf8_decode("En outre, je m'engage à déclarer le vol ou la perte dans les plus brefs délais, et"));
    $pdf->Text(11, 176, utf8_decode("de procéder en cas de démissions ou de licenciement à sa restitution à la"));
    $pdf->Text(11, 185, utf8_decode("direction."));

    $pdf->Text(11, 210, utf8_decode('Signature:'));
    
    
    $pdf->Output('bitumed.pdf','I');
}elseif($societe=="industri"){
    $pdf->AddPage();
    
    $pdf->SetAutoPageBreak(true, 10);
    $pdf->SetFont('Arial', '', 12);
    $pdf->SetTopMargin(10);
    $pdf->SetLeftMargin(10);
    $pdf->SetRightMargin(10);
    
    
    
    $pdf->Image('industri.jpg', 10, 10, 40);
    /* --- Text --- */
    $pdf->Text(167, 43, 'Le : '.$date);
    /* --- Text --- */
    $pdf->SetFont('Arial', 'BU', 18);
    $pdf->Text(90, 65, utf8_decode("Décharge"));
    /* --- Text --- */
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Text(11, 91, utf8_decode('Je soussigne, M. : '.$name));
    /* --- Text --- */
    $pdf->Text(11, 101, utf8_decode('Employé en qualité de : '.$fonction));
    /* --- Text --- */
    $pdf->Text(11, 111, utf8_decode('Affecté à : '.$affectation));

    $pdf->Text(11, 130, utf8_decode('Certifie avoir reçu le dit : '.$product));

    $pdf->Text(11, 139, utf8_decode('Numéro de serie : '.$serial));

    $pdf->Text(11, 148, utf8_decode("qui sera en ma possesion pour ne m'en servir qu'aux besoins de la société."));

    $pdf->Text(11, 167, utf8_decode("En outre, je m'engage à déclarer le vol ou la perte dans les plus brefs délais, et"));
    $pdf->Text(11, 176, utf8_decode("de procéder en cas de démissions ou de licenciement à sa restitution à la"));
    $pdf->Text(11, 185, utf8_decode("direction."));

    $pdf->Text(11, 210, utf8_decode('Signature:'));
    
    
    $pdf->Output('invest.pdf','I');
}


?>



