<?php 

// =======================
// = Component Registery =
// =======================

$kirby->set('template', 'receipts', __DIR__ . '/templates/receipts.php');
$kirby->set('template', 'receipt', __DIR__ . '/templates/receipt.php');
$kirby->set('blueprint', 'receipts', __DIR__ . '/blueprints/receipts.php');
$kirby->set('blueprint', 'receipt', __DIR__ . '/blueprints/receipt.php');

// ===================
// = Model Registery =
// ===================

# require_once(__DIR__ . '/models/LinkPage.php');
# $kirby->set('page::model', 'link', 'LinkPage');

