<section class="blog_gallery">
  <div class="container">
    <header class="main_content_header">
      <h1 class="main_content_header_title">Blog</h1>
    </header>

    <div class="flex">
      <?php
      for ($b = 1; $b < 7; $b++) {
        require "{$configThemePath}/Templates/article.php";
      }
      ?>
    </div>
  </div>
</section>