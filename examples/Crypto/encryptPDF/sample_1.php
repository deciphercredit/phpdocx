<?php

require_once '../../../Classes/Phpdocx/Create/CreateDocx.inc';

$pdf = new Phpdocx\Crypto\CryptoPHPDOCX();
$source = '../../files/Test.pdf';
$target = 'Crypted.pdf';
$pdf->encryptPDF($source, $target, array('password' => 'phpdocx'));