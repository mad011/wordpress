<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>gold theme</title>
    <?php wp_head(); ?>
</head>

<?php
if (is_front_page()):
    $awesome_classes = array('default-class', 'my-class');
else :
    $awesome_classes = array('no-default-class');
endif;
//var_dump(get_custom_header());
?>
<body <?php body_class($awesome_classes); ?>>
<header class="main-header">
    <div class="background" style="background: url(<?php header_image(); ?>"

    </div>
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-3">
                <div class="custom-logo">
                    <?php the_custom_logo() ?>
                </div>
            </div>
            <div class="col-md-9"><?php wp_nav_menu((array('primary' => 'header-menu', 'container_class' => 'my_extra_menu_class'))); ?></div>


        </div>
    </div>

</header>




