<?php 

// =======================
// = Component Registery =
// =======================

$kirby->set('template', 'recipes', __DIR__ . '/templates/recipes.php');
$kirby->set('template', 'recipe', __DIR__ . '/templates/recipe.php');
$kirby->set('blueprint', 'recipes', __DIR__ . '/blueprints/recipes.php');
$kirby->set('blueprint', 'recipe', __DIR__ . '/blueprints/recipe.php');

// ===================
// = Model Registery =
// ===================

# require_once(__DIR__ . '/models/LinkPage.php');
# $kirby->set('page::model', 'link', 'LinkPage');

