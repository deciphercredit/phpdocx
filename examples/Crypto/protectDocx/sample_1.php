<?php

require_once '../../../Classes/Phpdocx/Create/CreateDocx.inc';

$docx = new Phpdocx\Crypto\CryptoPHPDOCX();
$source = '../../files/Text.docx';
$target = 'Protected.docx';
$docx->protectDocx($source, $target, array('password' => 'phpdocx'));