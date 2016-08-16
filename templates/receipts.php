<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="text">
      <h1><?= $page->title()->html() ?></h1>
      <?= $page->text()->kirbytext() ?>
    </div>
    
  <?php if ($page->children()->count() > 0): ?>
    <ul class="receipts">
      <?php foreach ($page->children()->visible()->sortBy('date', 'desc') as $child): ?>
        <li>
          <?= $child->title()->link() ?>
        </li>
      <?php endforeach ?>
    </ul>
  <?php endif ?>

  </main>

<?php snippet('footer') ?>