<main class="main_content">
  <div class="container">
    <header class="main_content_header">
      <h1 class="main_content_header_title">Blog <?= $configSiteName; ?></h1>
    </header>

    <div class="flex main_blog_gallery">
      <?php
      for ($b = 1; $b < 7; $b++) {
        require "{$configThemePath}/Templates/article.php";
      }
      ?>
    </div>
    <nav class="main_category_products_paginator">
      <a class="radius transition active" href="#">1</a>
      <a class="radius transition" href="#">2</a>
      <a class="radius transition" href="#">3</a>
      <a class="radius transition" href="#">4</a>
      <a class="radius transition" href="#">5</a>
    </nav>
  </div>
</main>