<?php

require_once dirname(__FILE__) . '/../vendor/autoload.php';
require("simple_html_dom.php");

use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Exception\ExceptionFormatter;

try {
    ob_start();
    include dirname(__FILE__).'/res/exemple00.php';
    $content = ob_get_clean();

    $html2pdf = new Html2Pdf('P', 'A4', 'fr');
    $html2pdf->setDefaultFont('Arial');

    $str = $_POST['input'];//"<h2 class=\"test\">This is a heading</h2> <h2 class=\"test\">This is a paragraph.</h2> <p>This is another paragraph.</p>";
    //echo "$str";
    //print_r($_POST['input']);
    $html = str_get_html($str);

    //$html->find('h2[class=test]',1)->innertext = 'blabla ';
    foreach ($html->find('h2[class=test]') as $a) {

            $a->innertext = 'blabla';

        }


    $html2pdf->writeHTML($html);
    //echo $_POST['input'];
    $html2pdf->output('exemple00.pdf');
} catch (Html2PdfException $e) {
    $html2pdf->clean();

    $formatter = new ExceptionFormatter($e);
    echo $formatter->getHtmlMessage();
}
