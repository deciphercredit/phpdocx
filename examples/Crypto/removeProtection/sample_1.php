<?php

require_once '../../../Classes/Phpdocx/Create/CreateDocx.inc';

$docx = new Phpdocx\Crypto\CryptoPHPDOCX();
$source = '../../files/protectedDocument.docx';
$target = 'unprotected.docx';
$docx->removeProtection($source, $target);
