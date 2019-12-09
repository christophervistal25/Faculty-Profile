<?php 
require 'vendor/autoload.php';
use Dompdf\Dompdf;
ob_start();
//be sure this file exists, and works outside of web context etc.)
include './print-view.php';
$dompdf = new DOMPDF();
$dompdf->setPaper('A4', 'landscape');
$dompdf->set_option('isRemoteEnabled', true);
$dompdf->load_html(ob_get_clean());
$dompdf->render();
$dompdf->stream();

