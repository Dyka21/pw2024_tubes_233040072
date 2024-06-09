<?php
require '../functions/fungsi.php';
$clinic =  cari($_GET['keyword']);
?>

<div class="row">
<?php if (empty($clinic)) : ?>
                        <h5>DATA TIDAK DITEMUKAN</h5>
                <?php endif?>
                  <?php
                      foreach ($clinic as $cli) : ?>
                  <div class="card" style="width: 18rem;">
                        <img src="../img/<?= $cli['photos'] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $cli['name'];?></h5>
                            <p class="card-text"><?= $cli['places'];?></p>
                            <p class="card-text"><?= $cli['contact'];?></p>
                            
                            <p class="card-text"><?= $cli['room'];?></p> 
                        </div>
                    </div>
                    <?php endforeach;?>
                  </div>





