<?php

require_once dirname(__FILE__) . '/../vendor/autoload.php';

/*require("simple_html_dom.php");

use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Exception\ExceptionFormatter;

try {
    ob_start();
    include dirname(__FILE__).'/res/exemple00.php';
    $content = ob_get_clean();

    $html2pdf = new Html2Pdf('P', 'A4', 'fr');
    //$html2pdf->pdf->AddTTFFont('georgia.ttf');

    //$html2pdf->setFont('Georgia');
    //$html2pdf->setDefaultFont('Arial');
    //$str = $_POST['input'];//"<h2 class=\"test\">This is a heading</h2> <h2 class=\"test\">This is a paragraph.</h2> <p>This is another paragraph.</p>";
    //echo "$str";
    //print_r($_POST['input']);
    //$html = file_get_html("C:\Users\Michaël-Portable\Desktop\Ressources projet SIA\upn-livret-pedagogique-segmi-master-miage-v01-2017-2018.html");
    //$html = file_get_html('C:\Users\Michaël-Portable\Desktop\test.html');
    //echo $html;
    //$html->find('h2[class=test]',1)->innertext = 'blabla ';


    //foreach ($html->find('h2[class=test]') as $a) {
    //    $a->innertext = 'blabla';
    //}


    $html = file_get_contents("C:\Users\Michaël-Portable\Desktop\page_simple.html");
    $html2pdf->writeHTML($html);
    //echo $_POST['input'];
    $html2pdf->output('exemple00.pdf');
} catch (Html2PdfException $e) {
    $html2pdf->clean();

    $formatter = new ExceptionFormatter($e);
    echo $formatter->getHtmlMessage();
}
*/

// reference the Dompdf namespace
use Dompdf\Dompdf;

$html = file_get_contents("C:\Users\Michaël-Portable\Desktop\Ressources projet SIA\upn-livret-pedagogique-segmi-master-miage-v01-2017-2018.html");

// instantiate and use the dompdf class
$dompdf = new Dompdf();
//$dompdf->loadHtml('hello world');
echo $html;
/*$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();*/


