<?php

$blogFront = (!empty($configUrl[1]) ? strip_tags($configUrl[1]) : null);
if (empty($blogFront)) {
      require "{$configThemePath}/Blog/gallery.php";
} else {
  require "{$configThemePath}/Blog/article.php";
}
