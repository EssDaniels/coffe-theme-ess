<?= wp_get_attachment_image($args[0]['bg_img'], 'full', '', ['class' => 'banner__background-img']); ?>
<div class="banner">
    <div class="banner__product">
        <?= wp_get_attachment_image($args[1]['img_product']['id'], 'full', '', ['class' => 'banner__product-img']); ?>
    </div>
    <div class="banner__description">
        <h2>Kawa?</h2>
        <?php
        if (function_exists('the_custom_logo')) {
            the_custom_logo();
        }
        ?>

    </div>
</div>