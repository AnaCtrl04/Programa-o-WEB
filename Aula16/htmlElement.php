<?php

require_once "aula"

$table = nwe htmlTable();
$table->setNumColunas(3)
$table->setNumLinha(4);

$html = $table->renderHtml();

echo $html;
?>