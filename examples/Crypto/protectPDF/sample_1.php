<?php

require_once '../../../Classes/Phpdocx/Create/CreateDocx.inc';

$pdf = new Phpdocx\Crypto\CryptoPHPDOCX();
$source = '../../files/Test.pdf';
$target = 'Protected.pdf';
$pdf->protectPDF($source, $target, array('permissionsBlocked' => array('print', 'annot-forms')));