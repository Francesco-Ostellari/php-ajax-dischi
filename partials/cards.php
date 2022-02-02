<?php
include __DIR__ . '/../server/db.php';
?>
  <?php
  foreach ($cards as $card) {  ?>
    <div class="col pb-3">
      <div class="card_spotify">
        <div class="container-img">
          <img src="<?= $card['poster'] ?>" alt="">
        </div>
        <div class="title">
          <?= $card['title'] ?>
        </div>
        <div class="author">
          <?= $card['author'] ?>
        </div>
        <div class="date">
          <?= $card['year'] ?>
        </div>
      </div>
    </div>
  <?php } ?>