<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Koliber</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head() ?>
</head>

<body>
    <div class="header">
        <div class="header__logo">
            <?php
            if (function_exists('the_custom_logo')) {
                the_custom_logo();
            }
            ?>
        </div>
        <div class="header__category">
            <?php wp_nav_menu(['theme_location' => 'main_menu']); ?>
        </div>
        <a href="" class="header__shopping-cart koszyk"></a>
    </div>