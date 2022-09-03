<div class="product">
    <div class="product__col product__col--left">
        <div class="product__border">
            <?= wp_get_attachment_image($args['img_product']['id'], 'full', '', ['class' => 'banner__product-img']); ?>
            <div class="product__border--accessories">
                <?= wp_get_attachment_image($args['taste_img'], 'full'); ?>
            </div>
        </div>
    </div>
    <div class="product__col">
        <div class="product__description">
            Kawa: <?= $args['mielonaziarnista'] == 'ground' ? 'mielona' : 'ziarnista' ?> </br>
            waga: <?= $args['weight'] ?> </br>
            rodzaj: <?= $args['type'] ?> </br>
            stopień palenia: <?= $args['grade'] ?>/5 </br>
            kwasowość: <?= $args['acidity'] ?>/5 </br>
            nuty smakowe: <?= $args['taste'] ?></br>
        </div>
        <a href="" class="product__btn">Kup teraz</a>
    </div>
</div>