<?php
ob_start();
get_header();
?>



<!--==================================================================================================-->

<!-- About -->
<!--
    partials/creative-about.html
-->

<!--==================================================================================================-->

<?php
//Sobre las jornadas
$post_sobre_las_jornadas = get_post(8);

/*
 * El contenido "crudo" de esta seccion se encuentra en: content/sobre_las_jornadas.html
 */
?>

<section class="jpe2-bg-light-gray" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h1 class="section-heading jpe2-text-dark-purple font-weight-bold text-center">
                    <?php
                    echo $post_sobre_las_jornadas ? $post_sobre_las_jornadas->post_title : "Titulo no definido";
                    ?>
                </h1>

                <p class="mt-lg-5 mt-md-2">
                    <?php
                    echo $post_sobre_las_jornadas ? $post_sobre_las_jornadas->post_content : "Contenido no definido";
                    ?>                            
                </p>                        
            </div>
        </div>
    </div>
</section>

<!--==================================================================================================-->

<!-- Services -->
<!--
    partials/creative-services.html
-->

<!--==================================================================================================-->

<!-- Portfolio -->
<!--
    partials/creative-porfolio.html
-->


<!--==================================================================================================-->

<?php
//Antecedentes:
$post_antecedentes = get_post(16);

/*
 * El contenido "crudo" de esta seccion se encuentra en: content/antecedentes.html
 */
?>

<section class="jpe2-bg-beige" id="antecedentes">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h1 class="section-heading jpe2-text-dark-purple font-weight-bold text-center">
                    <?php
                    echo $post_antecedentes ? $post_antecedentes->post_title : "Titulo no definido";
                    ?>
                </h1>

                <p class="mt-lg-5 mt-md-2">
                    <?php
                    echo $post_antecedentes ? $post_antecedentes->post_content : "Contenido no definido";
                    ?>                            
                </p>                        
            </div>
        </div>
    </div>
</section>        
<!--==================================================================================================-->


<!--==================================================================================================-->        
<!-- Download -->
<!--
    partials/creative-download.html
-->                
<!--==================================================================================================-->


<!--==================================================================================================-->        
<!-- Contact -->
<!--
    partials/creative-contact.html
-->                
<!--==================================================================================================-->


<!--==================================================================================================-->
<!-- Objetivo y Ejes tematicos -->
<section class="jpe2-bg-lighter-gray p-0 m-0">            
    <div class="row ">
        <!-- Objetivo -->
        <div class="col-xs-12 col-lg-6 mx-auto jpe2-bg-light-purple py-5" id="objetivos">
            <div class="container text-white py-5">
                <?php
                    $post_objetivo = get_post(19);
                ?>
                <h2 class="section-heading font-weight-bold">
                    <?php echo $post_objetivo ? $post_objetivo->post_title : "Titulo 1" ?>
                </h2>
                <div class="mt-5">
                    <?php echo $post_objetivo ? $post_objetivo->post_content : "Titulo 1" ?>
                </div>
            </div>
        </div>
        <!--Ejes tematicos -->
        <div class="col-xs-12  col-lg-6 mx-auto jpe2-bg-dark-purple py-5" id="ejes-tematicos">
            <div class="container text-white py-5">
                <?php
                    $post_ejes_tematicos = get_post(21);
                ?>
                <h2 class="section-heading font-weight-bold">
                    <?php echo $post_ejes_tematicos ? $post_ejes_tematicos->post_title : "Titulo 2" ?>
                </h2>
                <div class="mt-5">
                    <?php echo $post_ejes_tematicos ? $post_ejes_tematicos->post_content : "Titulo 2" ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!--==================================================================================================-->


<?php
get_footer();
echo ob_get_clean();
?>

