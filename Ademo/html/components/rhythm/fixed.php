<section class="section GContainer u-showGrid u-gridDemo">
  <h1 class="section-title">Grid</h1>
  <?php
    $n = 12;
    for ($i = 1; $i <= $n; $i++) :
      $j = $n - $i;
  ?>
  <div class="GZone">
    <div class="GColumn u-span<?php echo $i; ?>"><div class="GCell_content u-island">u-span<?php echo $i; ?></div></div>
    <?php if($j != 0) : ?>
    <div class="GColumn u-span<?php echo $j; ?>"><div class="GCell_content u-island">u-span<?php echo $j; ?></div></div>
    <?php endif; ?>
  </div>
  <?php endfor; ?>
</section>

<section class="section GContainer u-showGrid  u-gridDemo">
  <h1 class="section-title">Fixed Nested</h1>
  <div class="GZone">
    <div class="GColumn u-span4">
      <div class="GZone GZone--nested">
        <div class="GColumn u-span2"><div class="GCell_content u-island">u-span2</div></div>
        <div class="GColumn u-span2"><div class="GCell_content u-island">u-span2</div></div>
      </div>
      <div class="GZone GZone--nested">
        <div class="GColumn u-span3"><div class="GCell_content u-island">u-span3</div></div>
        <div class="GColumn u-span1"><div class="GCell_content u-island">u-span1</div></div>
      </div>
      <div class="GZone GZone--nested">
        <div class="GColumn u-span2"><div class="GCell_content u-island">u-span2</div></div>
        <div class="GColumn u-span2"><div class="GCell_content u-island">u-span2</div></div>
      </div>
    </div>
    <div class="GColumn u-span8">
      <div class="GZone GZone--nested">
        <div class="GColumn u-span6"><div class="GCell_content u-island">u-span6</div></div>
        <div class="GColumn u-span2"><div class="GCell_content u-island">u-span2</div></div>
      </div>
      <div class="GZone GZone--nested">
        <div class="GColumn u-span4"><div class="GCell_content u-island">u-span4</div></div>
        <div class="GColumn u-span4"><div class="GCell_content u-island">u-span4</div></div>
      </div>
      <div class="GZone-Nested">
        <div class="GColumn u-span3"><div class="GCell_content u-island">u-span4</div></div>
        <div class="GColumn u-span3"><div class="GCell_content u-island">u-span4</div></div>
        <div class="GColumn u-span2"><div class="GCell_content u-island">u-span2</div></div>
      </div>
    </div>
    <div class="GColumn u-span12">
      <h1>Nested level 3</h1>
      <div class="GZone GZone--nested">
        <div class="GColumn u-span6">
          <div class="GZone GZone--nested">
            <div class="GColumn u-span3"><div class="GCell_content u-island">u-span3</div></div>
            <div class="GColumn u-span3"><div class="GCell_content u-island">u-span3</div></div>
          </div>
        </div>
        <div class="GColumn u-span4">
          <div class="GZone GZone--nested">
            <div class="GColumn u-span2"><div class="GCell_content u-island">u-span2</div></div>
            <div class="GColumn u-span2"><div class="GCell_content u-island">u-span2</div></div>
          </div>
        </div>
        <div class="GColumn u-span2">
          <div class="GCell_content u-island">u-span2</div>
        </div>
      </div>
    </div>

  </div>
</section>