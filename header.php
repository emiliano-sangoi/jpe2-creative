<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title><?php bloginfo('name'); ?></title>

        <!-- Custom fonts for this template -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <!--<link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>-->

        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() . "/favicon2.png"; ?>">

        <?php wp_head(); ?>
    </head>

    <body id="page-top">

        <!-- Navigation -->
        <!--
            partials/creative-main-navbar.php
        -->

        <header class="masthead">
            
            <div class="header-content my-0 py-0">
                <div class="header-content-inner">
                    <!--
                       El contenido a pegar en el contenido del post puede ser encontrado en:
                       partials/bkp-encabezado-ppal.html
                    -->

                <?php 
                    $post_encabezado_ppal = get_post(4);
                    echo $post_encabezado_ppal ? $post_encabezado_ppal->post_content : "<h1>Contenido no definido</h1>";
                    /**
                     * Otra alternativa:
                     *       $post_encabezado_ppal = get_page_by_title("Encabezado Principal", OBJECT, 'post');
                     * Ver:
                     *  https://codex.wordpress.org/Function_Reference/get_page_by_title
                     * 
                     * Pero...
                     *      -> Esta alternativa puede tener problemas si cambian el titulo del encabezado.
                     */                                                           
                ?>

                </div>
            </div>
        </header>