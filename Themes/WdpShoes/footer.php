<footer class="main_footer">
    <div class="container">
        <article class="main_footer_optin">
            <header class="main_footer_optin_header">
                <h3>Quer 20% de desconto?</h3>
                <p>Informe seu melhor e-mail logo abaixo e receba um cupom com 20% de desconte para sua primeira compra!</p>
            </header>
            <form class="main_footer_optin_form">
                <input class="radius" type="email" name="email" placeholder="Informe seu e-mail:" />
                <button class="btn radius transition icon-mail">Quero meu desconto!</button>
            </form>
        </article>
        <div class="main_footer_nav flex">
            <?php
            for ($m = 1; $m < 4; $m++) {
            ?>
                <nav class="flex-4">
                    <h4>Nome do menu <?= $m; ?>:</h4>
                    <?php
                    for ($mm = 1; $mm < 6; $mm++) {
                    ?>
                        <a href="<?= $configBase; ?>" title="">Link de rodapé <?= "{$m}/{$mm}"; ?></a>
                    <?php
                    }
                    ?>
                </nav>
            <?php
            }
            ?>
            <nav class="flex-4">
                <h4>Pagamento seguro:</h4>
                <ul class="main_footer_nav_pays flex">
                    <li class="flex-4"><img alt="" title="" src="<?= $configBase;?>/Assets/Cards/mastercard.png" /></li>
                    <li class="flex-4"><img alt="" title=""  src="<?= $configBase;?>/Assets/Cards/visa.png" /></li>
                    <li class="flex-4"><img alt="" title=""  src="<?= $configBase;?>/Assets/Cards/amex.png" /></li>
                    <li class="flex-4"><img alt="" title=""  src="<?= $configBase;?>/Assets/Cards/aura.png" /></li>
                    <li class="flex-4"><img alt="" title=""  src="<?= $configBase;?>/Assets/Cards/dinners.png" /></li>
                    <li class="flex-4"><img alt="" title=""  src="<?= $configBase;?>/Assets/Cards/discover.png" /></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="main_footer_bottom">
        <div class="container flex">
            <div class="main_footer_bottom_copy">
                <img alt="WdpShoes" title="WdpShoes" src="<?= $configThemeLink; ?>/Images/wdpshoes_logo_black.png" />
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
            <nav class="main_footer_bottom_social">
                <a title="" href="#" class="icon-facebook icon-notext transition"></a>
                <a title="" href="#" class="icon-instagram icon-notext transition"></a>
                <a title="" href="#" class="icon-youtube icon-notext transition"></a>
            </nav>
        </div>
    </div>
</footer>