<?php
require('mpdf/mpdf.php');



$ValorDeCasa = $_GET['ValorDeCasa'];
$enganche = $_GET['enganche'];
$plazoDelPrestamo = $_GET['plazoDelPrestamo'];




$html  = '<table border="1">';
$html .='<tr><td>Valor de la casa</td><td>'.$ValorDeCasa.'</td></tr>';
$html .='<tr><td>Enganche</td><td>'.$enganche.'</td></tr>';
$html .='<tr><td>Plazo</td><td>'.$plazoDelPrestamo.'</td></tr>';
$html .='</table>';





$mpdf=new mPDF();
$mpdf->WriteHTML($html);
$mpdf->Output();
exit;
?>

