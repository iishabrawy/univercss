<section class="section GContainer u-showGrid u-gridDemo">
  <h1 class="section-title">Grid</h1>
  <?php
    $n = 12;
    for ($i = 1; $i <= $n; $i++) :
      if (($n % $i) == 0) :
        $k = $n / $i;
  ?>
    <h4>Matrix u-matrix<?php echo $i; ?></h4>
    <ul class="GMatrix u-matrix<?php echo $i; ?>">
      <?php for ($j = 1; $j <= $k; $j++) : ?><li class="GCell "><div class="GCell_content u-island">GCell</div></li><?php endfor; ?>
    </ul>
    <?php endif; ?>
  <?php endfor; ?>
</section>
