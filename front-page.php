<?php

$set = get_field('global_set', 'option');
$product = get_fields($set['product']);
$product = $product['product-ess'];

?>
<?php get_header(); ?>

<div class="container">
    <?php get_template_part('template-parts/front', 'baner', [$set, $product]); ?>
    <?php get_template_part('template-parts/front', 'mapa', $set); ?>
    <?php get_template_part('template-parts/front', 'product-description', $product); ?>
    <?php get_template_part('template-parts/front', 'product-instruction', $product); ?>
    <?php get_template_part('template-parts/front', 'cap', $set); ?>
    <?php get_template_part('template-parts/front', 'opinion', $set); ?>
    <?php get_template_part('template-parts/front', 'footer', $set); ?>
</div>
<?php get_footer(); ?>