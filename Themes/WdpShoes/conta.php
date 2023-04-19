<main class="main_content">
  <div class="container main_account">
    <nav class="main_account_sidebar">
      <a class="radius  transition active" href="<?= "{$configBase}/conta"; ?>" title="">Meus pedidos</a>
      <a class="radius  transition" href="<?= "{$configBase}/conta/cadastro"; ?>" title="">Meus dados</a>
      <a class="radius  transition" href="<?= "{$configBase}/conta/enderecos"; ?>" title="">Meus endereços</a>
      <a class="radius  transition" href="<?= "{$configBase}"; ?>" title="">Sair</a>
    </nav>
    <div class="main_account_content">
      <?php
      for ($order = 1; $order < 4; $order++) {
      ?>
        <article class="main_account_content_item">
          <header class="main_account_content_item_header">
            <p><?= date("d/m/Y", strtotime("-{$order}days")); ?></p>
            <h1>Pedido #778756M<?= $order; ?></h1>
          </header>
          <ul class="main_account_content_item_pdts radius">
            <?php
            for ($img = 1; $img < 8; $img++) {
            ?>
              <li><img src="<?= $configBase; ?>/Uploads/products/0<?= $img; ?>.jpg" alt="" title="" </li>

              <?php
            }
              ?>
          </ul>
          <div class="main_account_content_item_desc">
            <p>Aprovado</p>
            <p>R$ 227,00 em 10x no cartão</p>
            <a href="#" title="">ver detalhes</a>
            <a href="#" title="">rastrear envio</a>
          </div>
        </article>
      <?php
      }
      ?>
    </div>
  </div>
</main>