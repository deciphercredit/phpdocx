<?php

$docx = new \Phpdocx\Create\CreateDocxFromTemplate(storage_path('app').'/documents/5/DMAY9ZTl5xrtbe8eZbwCJeoDUwIExY.docx');
$variables = array('Client_Company' => 'test-test');
$options = array('parseLineBreaks' =>true);
$docx->replaceVariableByText($variables, $options);
$docx->createDocx(public_path().'/example_replaceVariableByText_1');

$docx = new \Phpdocx\Transform\TransformDocAdvLibreOffice();
$docx->transformDocument(public_path().'/example_replaceVariableByText_1.docx',public_path().'/example_replaceVariableByText_1.pdf');