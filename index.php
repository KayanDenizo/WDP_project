<?php
ob_start();

define("BASE", "https://localhost/wdp_project");
define("THEME", "WdpShoes");
define("THEME_PATH", __DIR__ . "/Themes/" . THEME);
define("THEME_LINK", BASE . "/Themes/" . THEME);

$configBase = BASE;
$configUrl = explode("/", strip_tags(filter_input(INPUT_GET, "url", FILTER_DEFAULT)));
$configUrl[0] = (!empty($configUrl[0]) ? $configUrl[0] : "index");
$configThemePath = THEME_PATH;
$configThemeLink = THEME_LINK;
$configSiteName = "WdpShoes";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>WdpShoes | Home</title>

  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link href="<?= $configBase; ?>" rel="base"/>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet"/>
  <link rel="stylesheet" href="<?= $configBase; ?>/Assets/Styles/Icons.css" />
  <link rel="stylesheet" href="<?= $configBase; ?>/Assets/Styles/Boot.css" />
  <link rel="stylesheet" href="<?= $configThemeLink; ?>/Style.css" />
  <link rel="shortcut icon" href="<?= $configThemeLink; ?>/Images/favicon.png" />

  <script src="<?= $configBase; ?>/Assets/jquery.js"></script>
  <script src="<?= $configBase; ?>/Assets/scripts.js"></script>
  <script src="<?= $configThemeLink; ?>/Scripts.js"></script>
</head>

<body>
  <?php
  // SEARCH
  $searchForm = strip_tags(trim(filter_input(INPUT_POST, "s", FILTER_DEFAULT)));
  if (!empty($searchForm)) {
    header("Location: {$configBase}/pesquisa/{$searchForm}");
    exit;
  }

  //HEADER
  require "{$configThemePath}/header.php";

  // QUERY STRING
  if (file_exists("{$configThemePath}/{$configUrl[0]}.php") && !is_dir("{$configThemePath}/{$configUrl[0]}.php")) {
    // theme root
    require "{$configThemePath}/{$configUrl[0]}.php";
  } elseif (!empty($configUrl[1]) && file_exists("{$configThemePath}/{$configUrl[0]}/{$configUrl[1]}.php") && !is_dir("{$configThemePath}/{$configUrl[0]}/{$configUrl[1]}.php")) {
    // theme folder
    require "{$configThemePath}/{$configUrl[0]}/{$configUrl[1]}.php";
  } else {
    // error 404
    if (file_exists("{$configThemePath}/404.php")) {
      require "{$configThemePath}/404.php";
    } else {
      echo "<div class='container'><div class='trigger trigger-error icon-error radius'>Desculpe mas a página que você tentou acessar não existe ou foi removida!</div></div>";
    }
  }
  // FOTTER
  require "{$configThemePath}/footer.php";
  ?>
</body>

</html>
<?php ob_end_flush(); ?>