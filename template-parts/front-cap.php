<?php
$product = get_fields($args['select_product'][0]);
$id = $product['product-ess']['img_product']['id'];
?>
<div class="cap">
    <h2><?= $args['main_title'] ?></h2>
    <span><?= $args['subtitle'] ?></span>
    <div class="cap__wrapper">
        <div class="cap__col cap__col--bg-img">
            <?= $args['description'] ?>
        </div>
        <div class="cap__col cap__col--border">
            <?= wp_get_attachment_image($id, 'full', '', ['class' => 'banner__product-img']); ?>
        </div>
        <div class="cap__col">
            <h2><?= $args['promo_text'] ?></h2>
        </div>
    </div>
</div>