<?php snippet('header') ?>

<?php $parent = $page->parent(); ?>
  
  <?= css('/assets/plugins/recipe/css/recipe.css') ?>
  
  <main class="main recipe" role="main">

    <div class="text">
      <h1><?= $page->title()->html() ?></h1>
      
      <?php if ($page->food_images()->isNotEmpty()): ?>
        <div class="images">
        <?php foreach ($page->food_images()->toStructure() as $image): ?>
          <?= $image->image()->toFile()->html() ?>
        <?php endforeach ?>
        </div>
      <?php endif ?>
      
      
      <h2><?= $parent->recipe_ingridents_heading()->html()->or('Ingridents'); ?></h2>
      <?php if ($page->ingridents()->isNotEmpty()): ?>
        <ul class="ingridents">
        <?php foreach ($page->ingridents()->toStructure() as $ingrident): ?>
          <li class="ingrident">
          <?= $ingrident->amount()->html() ?> <?= $ingrident->metrics()->html() ?> <?= $ingrident->ingrident()->html() ?>
          </li>
        <?php endforeach ?>
        </ul>
      <?php endif ?>
      
      <h2><?= $parent->recipe_preparation_heading()->html()->or('Preparation'); ?></h2>
      <?= $page->preparation()->kirbytext() ?>
      
    </div>

    <ul class="meta cf">
      <li><b><?= $page->parent()->recipe_date_label()->html()->or('Date') ?>:</b> <time datetime="<?= strftime('%Y-%m-%dT%H:%M:%S', $page->date()) ?>"><?= strftime('%d.%m.%y', $page->date()) ?></time></li>
      <li><b><?= $page->parent()->recipe_tags_label()->html()->or('Tags') ?>:</b> <?= $page->tags() ?></li>
    </ul>
    
  </main>

<?php snippet('footer') ?>