<!DOCTYPE html>
<html class="no-js" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Hello World!</title>
        <meta name="description" content="Hello World Demo For Univercss">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <link rel="stylesheet" href="assets/css/style.css">

        <script src="assets/js/vendor/modernizr-2.8.0.min.js"></script>
        <!--
         -->
    </head>

    <body class="u-showRhythm">
      <div class="GWrapper">

        <header class="[ GContainer GZone ] u-showGrid">
          <div class="GColumn u-span12">
            <div class="HGroup  GCell_content">
              <h1>Hello world!</h1>
              <h3 class="HSub">the header</h3>
            </div>
          </div>
          <div class="GColumn u-span12 u-marginBotCmp">
            <nav class="Navly GCell_content">
              <ul class="Nav ">
                <li class="Nav_item u-purpleBox"><a href="#">item 1</a>
                  <div class="Nav_sub">
                    <ul class="Menu">
                      <li><a href="">sub item 1</a></li>
                      <li><a href="">sub item 2</a></li>
                      <li><a href="">sub item 3</a></li>
                      <li><a href="">sub item 4</a></li>
                      <li><a href="">sub item 5</a></li>
                    </ul>
                  </div>
                </li>
                <li class="Nav_item u-purpleBox"><a href="#">item 2</a>
                  <div class="Nav_sub">
                    <ul class="Menu">
                      <li><a href="">sub item with sub 1</a>
                          <div class="Nav_sub">
                            <ul class="Menu">
                              <li><a href="">sub item 1</a></li>
                              <li><a href="">sub item 2</a></li>
                              <li><a href="">sub item 3</a></li>
                              <li><a href="">sub item 4</a></li>
                              <li><a href="">sub item 5</a></li>
                            </ul>
                          </div>
                      </li>
                      <li><a href="">sub item with sub 1.1</a>
                          <div class="Nav_sub">
                            <ul class="Menu">
                              <li><a href="">sub item 1</a></li>
                              <li><a href="">sub item 2</a></li>
                              <li><a href="">sub item 3</a></li>
                              <li><a href="">sub item 4</a></li>
                              <li><a href="">sub item 5</a></li>
                            </ul>
                          </div>
                      </li>
                      <li><a href="">sub item 2</a></li>
                      <li><a href="">sub item 3</a></li>
                      <li><a href="">sub item 4</a></li>
                      <li><a href="">sub item 5</a></li>
                    </ul>
                  </div>
                </li>
                <li class="Nav_item u-purpleBox"><a href="#">item 3</a>
                  <div class="Nav_sub">
                    <ul class="Menu">
                      <li><a href="">sub item 1</a></li>
                      <li><a href="">sub item 2</a></li>
                      <li><a href="">sub item 3</a></li>
                      <li><a href="">sub item 4</a></li>
                      <li><a href="">sub item 5</a></li>
                    </ul>
                  </div>
                </li>
                <li class="Nav_item u-purpleBox"><a href="#">item 4</a>
                  <div class="Nav_sub">
                    <ul class="Menu">
                      <li><a href="">sub item 1</a></li>
                      <li><a href="">sub item 2</a></li>
                      <li><a href="">sub item 3</a></li>
                      <li><a href="">sub item 4</a></li>
                      <li><a href="">sub item 5</a></li>
                    </ul>
                  </div>
                </li>
                <li class="Nav_item u-purpleBox"><a href="#">item 5</a>
                  <div class="Nav_sub">
                    <ul class="Menu">
                      <li><a href="">sub item 1</a></li>
                      <li><a href="">sub item 2</a></li>
                      <li><a href="">sub item 3</a></li>
                      <li><a href="">sub item 4</a></li>
                      <li><a href="">sub item 5</a></li>
                    </ul>
                  </div>
                </li>
              </ul>
            </nav>
          </div>
          <nav class="GColumn u-span12">
            <ul class="Breadcrumb GCell_content">
              <li class="Breadcrumb_item Breadcrumb_root"><a href="#">item 1</a></li>
              <li class="Breadcrumb_item"><a href="#">item 2</a></li>
              <li class="Breadcrumb_item"><a href="#">item 3</a></li>
              <li class="Breadcrumb_item"><a href="#">item 4</a></li>
              <li class="Breadcrumb_item"><a href="#">item 5</a></li>
            </ul>
          </nav>
        </header>
        <?php
          include dirname(__FILE__)."/components/rhythm/fixed.php";
          include dirname(__FILE__)."/components/rhythm/fluid.php";
          include dirname(__FILE__)."/components/rhythm/matrix.php";
          include dirname(__FILE__)."/components/rhythm/flex.php";
        ?>
        <hr>
        <?php
          include dirname(__FILE__)."/components/types/headers.php";
          include dirname(__FILE__)."/components/types/lists.php";
          include dirname(__FILE__)."/components/types/others.php";
          include dirname(__FILE__)."/components/button/button.php";
          include dirname(__FILE__)."/components/media/media.php";
        ?>
        <hr>
        <?php
          include dirname(__FILE__)."/components/forms/forms.php";
        ?>


      </div>


        <!--
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.10.2.min.js"><\/script>')</script>

        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
        -->
        <script>

        </script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <!--
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
         -->
    </body>
</html>
